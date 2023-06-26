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

        $this->middleware('auth');

        try {
            $id = auth()->user()->id;
        } catch (\Throwable $e) {
            redirect()->to('/login')->send();
        }


        $user = User::where('id', $id)->get();
        // dd($this);
        return view('student.profileStudent', [
            'user' => $user[0]
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
            'photo' => 'image|file',
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
            // 'photo' => 'image|file',
            'gender' => 'required|in:0,1'
        ];

        if($request->email != $user[0]->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }
        // dd($request->file('photo'));
        // $validatedData = $request->validate($rules);
        try {
            $validatedData = $request->validate($rules);
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->getMessage());
        }

        if($request->file('photo')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['photo'] = $request->file('photo')->store('profile-images', 'public');
        }

        $validatedData['id'] = auth()->user()->id;
        $user = User::where('id', $id);
        $user = $user->update($validatedData);

        return redirect('/profileStudent')->with('success', 'Profile updated successfully');
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

        $students = User::where('userisTeacher', 0)->orderBy('pointxp', 'desc')->take(5)->get();

        return view('student.learn.leaderboard', [
            'students' => $students
        ]);
    }
}
