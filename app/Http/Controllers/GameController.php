<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Unit;
use App\Models\User;
use App\Models\Point;
use App\Models\TempProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use App\Models\StudentPointProgress;

class GameController extends Controller
{
    /**
     * Display a lististireng of the resource.
     */
    /**
 * Display a listing of the resource.
 */
public function index()
{
    $this->middleware('auth');

    if (!auth()->check()) {
        return redirect()->to('/login');
    }

    $userPoint = DB::table('student_point_progresss')
        ->select('point_id')->where('user_id', auth()->user()->id)
        ->get();

    $temp = [];
    $id = 0;
    foreach($userPoint as $item) {
        $temp[$id] = $item->point_id;
        $id++;
    }
    $userPoints = collect($temp);

    return view('student.learn.games', [
        'units' => Unit::all(),
        'userPoints' => $userPoints,
        'user_id' => auth()->user()->id
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data['user_id'] = $request->user_id;
        $data['point_id'] = $request->point_id;
        $data['total_xp'] = $request->total_xp;
        $data['correct_count'] = $request->correct_count;

        // store to student page progress
        StudentPointProgress::create($data);

        // update user xp
        // $prevxp = auth()->user()->pointxp;
        User::where('id', $request->user_id)->increment('pointxp', $request->total_xp);

        // delete from temp progress

        TempProgress::where('user_id', $request->user_id)->delete();

        return redirect('/learnStudent/games');

    }

    public function storeTemp(Request $request) {
        // dd($request);
        $data['user_id'] = $request->user_id;
        // $data['point_id'] = (json_decode($request->point))->id;
        $data['point_id'] = $request->point_id;
        $data['page_id'] = $request->page_id;
        $data['correct'] = $request->correct;
        // $data['bonusxp'] = $request->bonusxp;

        // $point = Point::where('id', json_decode($request->point)->id)->get();
        $point = Point::find($request->point_id);
        // dd($point);
        // if soal pertama dan benar maka streak 1
        // if(($data['page_id'] - 1) % 10 == 0 && $data['correct']) {
        if(($point->pages->first()->id == $request->page_id) && $data['correct']) {
            $data['streak'] = 1;
            // $data['bonusxp'] = 1;
        } else {
            $streakProg = TempProgress::where('user_id', auth()->user()->id)->get();
            //  if salah maka streak balik ke 0
            if(!$data['correct']) {
                $data['streak'] = 0;
                // $data['bonusxp'] = 0;

                // jika benar maka cek streak sebelumnya
            } else {

                // jika streak sebelumnya > 0
                if($streakProg->last()->streak != 0) {

                    $data['streak'] = $streakProg->last()->streak + 1;
                    $data['bonusxp'] = $streakProg->last()->streak - 1;
                } else {
                    $data['streak'] = 1;
                }
            }
        }

        // save ke temp
        TempProgress::create($data);


        // jika bukan soal terakhir maka lanjut ke soal berikutnya
        if ($request->page_id != $point->pages->last()->id) {
            $next_page = Page::find($request->page_id + 1);
            $prevStreak = tempProgress::where('user_id', auth()->user()->id)->get();
            return view('Question.' . $next_page->page_name, [
                'point' => $point,
                'page' => $next_page,
                'prevStreak' => $prevStreak->last()->streak
            ]);

            // jika soal terakhir maka ke page congrats
        } else {

            // show streak terbesar
            $maxStreak = TempProgress::where('user_id', auth()->user()->id)->max('streak');
            // dd($maxStreak);
            $bonusxp = TempProgress::where('user_id', auth()->user()->id)->sum('bonusxp');

            $correctCount = TempProgress::where('user_id', auth()->user()->id)->sum('correct');

            $totalxp = $bonusxp + ($correctCount*3);

            // dd($totalxp);
            // total perolehan xp

            return view('student.congrats', [
                'point' => $point,
                'maxStreak' => $maxStreak,
                'totalxp' => $totalxp,
                'correctCount' => $correctCount
                // 'page' => $page
            ]);
        }

    }

    public function weekChart() {
        // dd($request);
        // Log::debug('eror');
        $user_id = auth()->user()->id;
        // $date = Carbon::parse();
        $week = StudentPointProgress::whereRaw('user_id = ? and YEARWEEK(created_at)=YEARWEEK(NOW())', $user_id)->selectRaw('sum(total_xp), date(created_at)')->groupByRaw('date(created_at)')->orderByRaw('date(created_at)')->get();


        // dd($test);
        return response()->json($week);
    }

    public function monthChart() {
        $user_id = auth()->user()->id;
        // $date = Carbon::parse();
        $month = StudentPointProgress::whereRaw('user_id = ? and EXTRACT(YEAR_MONTH FROM created_at) =  EXTRACT(YEAR_MONTH FROM now())', $user_id)->selectRaw('sum(total_xp), date(created_at)')->groupByRaw('date(created_at)')->orderByRaw('date(created_at)')->get();


        // dd($test);
        return response()->json($month);
    }

    public function yearChart() {
        $user_id = auth()->user()->id;
        // $date = Carbon::parse();
        $year = StudentPointProgress::whereRaw('user_id = ? and YEAR(created_at) = YEAR(NOW())', $user_id)->selectRaw('sum(total_xp), month(created_at)')->groupByRaw('month(created_at)')->orderByRaw('month(created_at)')->get();


        // dd($test);
        return response()->json($year);
    }

    public function succeed(Request $request) {

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
