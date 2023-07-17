<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // dd(auth()->user()->id);

        // // $this->middleware('auth');
        // $id = auth()->user()->id;

        // $this->middleware('auth');

        try {

            // if(auth()->user()->userIsTeacher == 0) {
            //     // $id = auth()->user()->id;


            // } else {
            //     redirect()->to('/login')->send();

            // }
            // dd(auth()->user());
        } catch (\Throwable $e) {
            redirect()->to('/login')->send();
        }


        $user = User::find(auth()->user()->id);

        return view('student.profileStudent', [
            'user' => $user
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
        $this->middleware('auth');
        $id = auth()->user()->id;
        $user = User::where('id', $id)->get();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'phoneNumber' => 'required',
            'photo' => 'image|mimes:jpeg,jpg|max:2048',
            'DOB' => 'required',
            'gender' => 'required|in:0,1'
        ]);

        if ($request->file('photo')->isValid()) {
            $validatedData['photo'] = $request->file('photo')->store('profile-images', 'public');
        }

        User::create($validatedData);

        return redirect('/profileStudent')->with('success', 'Profile updated successfully');
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

    public function edit($id)
    {
        // $id = intval($id);
        // $user = User::findOrFail($id)->get();
        // dd($user);
        $this->middleware('auth');
        $id = auth()->user()->id;
        $user = User::where('id', $id)->get();

        return view('student.profileStudentEdit', [
            'user' => $user[0]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        $id = auth()->user()->id;
        $user = User::where('id', $id)->get();

        $this->middleware('auth');
        $rules = [
            'name' => 'required|max:255',
            'address' => 'required',
            'phoneNumber' => 'required',
            'DOB' => 'required',
            'photo' => 'image|mimes:jpeg,jpg|max:2048',
            'gender' => 'required|in:0,1'
        ];

        if($request->email != $user[0]->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        $validatedData = $request->validate($rules);
        // try {
        //     $validatedData = $request->validate($rules);
        // } catch (\Illuminate\Validation\ValidationException $e) {

        //     return redirect('/profileStudent')
        //     ->withErrors($e->getMessage())
        //     ->withInput();
        // }

        if($request->file('photo')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['photo'] = $request->file('photo')->store('profile-images', 'public');
        }

        $validatedData['id'] = auth()->user()->id;
        $user = User::where('id', $id);
        $user = $user->update($validatedData);

        return redirect('/profileStudent')->with([
            'success' => 'Profile updated successfully',
            'error' => 'Check your profile again'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        User::destroy($user->id);

        return redirect('/login')->with('success','Account has been deleted!');
    }

    public function leaderboard() {

        $students = User::where('userisTeacher', 0)->orderBy('pointxp', 'desc')->take(10)->get();

        return view('student.learn.leaderboard', [
            'students' => $students
        ]);
    }
}
