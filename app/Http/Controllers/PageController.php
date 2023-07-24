<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Unit;
use App\Models\Point;
use App\Models\Notebook;
use App\Models\TempProgress;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }

    // public function showNext($point_id, $page_id) {
    //     $page = Page::where('id', $page_id)->get();
    //     $point = Point::where('id', $point_id)->get();
    //     // dd($page[0]);
    //     return view('Question.' . $page[0]->page_name, [
    //         'point' => $point[0],
    //         'page' => $page[0]
    //     ]);
    // }

    public function showPage(Request $request) {
        $page = Page::where('id', $request->page_id)->get();
        $point = Point::where('id', $request->point_id)->get();

        return view('Question.' . $request->page_name, [
            'point' => $point[0],
            'page' => $page[0],
            'prevStreak' => 0
        ]);
    }

    public function showNote($unit_id) {
        $notebooks = Unit::find($unit_id)->notebooks;
        // dd($notebooks);

        return view('student.notebook1', [
            'notebooks' => $notebooks
        ]);
    }

    public function cancel(Request $request) {
        TempProgress::where('user_id', auth()->user()->id)->where('point_id', $request->point_id)->delete();

        return redirect('/learnStudent/games');
    }

    public function succeed($point_id) {
        // $point = Point::where('id', $point_id)

        return view('student.congrats', [
            'point_id' => $point_id
        ]);
    }
}
