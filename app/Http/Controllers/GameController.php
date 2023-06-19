<?php

namespace App\Http\Controllers;

use App\Models\StudentPointProgress;
use App\Models\TempProgress;
use App\Models\User;
use App\Models\Unit;
use App\Models\Page;
use App\Models\Point;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    /**
     * Display a lististireng of the resource.
     */
    public function index()
    {
        //

        $userPoint = DB::table('student_point_progresss')
        ->select('point_id')->where('user_id', auth()->user()->id)
        ->get();
        // ->where('point_id', )
        // $collectUP = collect($userPoints);
        // dd($userPoint);
        $temp = [];
        $id = 0;
        foreach($userPoint as $item) {
            $temp[$id] = $item->point_id;
            $id++;
        }
        $userPoints = collect($temp);

        // dd($userPoints);

        return view('student.learn.games', [
            'units' => unit::all(),
            'userPoints' => $userPoints
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
