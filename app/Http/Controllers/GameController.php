<?php

namespace App\Http\Controllers;

use App\Models\StudentPointProgress;
use App\Models\TempProgress;
use App\Models\User;
use App\Models\Unit;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
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
        //
        // dd($request);

        // $progress = new TempProgress;


        // dd($progress);
        $data['user_id'] = $request->user_id;
        $data['point_id'] = $request->point_id;
        $data['correct_count'] = $request->correct_count;

        StudentPointProgress::create($data);

        return redirect('/learnStudent/games');

    }

    public function storeTemp(Request $request) {
        $data['user_id'] = $request->user_id;
        $data['point_id'] = $request->point_id;
        $data['page_id'] = $request->page_id;
        $data['correct'] = $request->correct;

        TempProgress::create($data);

        if ((($request->page_id % 10 == 0))) {
            return view('Question.' . $page->page_name, [
                'point' => $point,
                'page' => $page
            ]);
        }


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
