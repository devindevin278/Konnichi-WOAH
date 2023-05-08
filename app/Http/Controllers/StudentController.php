<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $user = User::findOrFail(auth()->user()->id);
        // // dd($user);
        // return view('student.profileStudent', [
        //     'user' => $user
        // ]);


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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        // dd($user);
        return view('student.profileStudent', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::findOrFail($id);
        $rules = [
            'name' => 'required|max:255',
            // 'userIsTeacher' => 'required',
            // 'username' => ['required', 'min:4', 'max:255', 'unique:users']
            'address' => 'required',
            'phoneNumber' => 'required'
            // 'password' => 'required|min:5|max:255',
            // 'photo' => 'image|file'
        ];

        if($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        $validatedData = $request->validate($rules);

        // dd($user);

        // $user->name = $validatedData['name'];
        // $user->email = $validatedData['email'];
        // $user->address = $validatedData['address'];
        // $user->phoneNumber = $validatedData['phoneNumber'];

        User::where('id', auth()->user()>$id)->update($validatedData);

        return redirect()->intended('/homeStudent');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
