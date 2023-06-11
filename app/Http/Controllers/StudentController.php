<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('student.profileStudent');


    // }
    public function index()
    {
        // dd(auth()->user()->id);
        // $this->middleware('auth');
        $id = auth()->user()->id;
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
        $id = auth()->user()->id;
        $user = User::where('id', $id)->get();

        $this->middleware('auth');
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'phoneNumber' => 'required',
            'photo' => 'image|file'
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

    public function edit( $id)
    {
        // $id = intval($id);
        // $user = User::findOrFail($id)->get();
        // dd($user);
        $id = auth()->user()->id;
        $user = User::where('id', $id)->get();
        $this->middleware('auth');

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
            'photo' => 'image|file'
        ];

        if($request->email != $user[0]->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('photo')->isValid()) {
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
}
