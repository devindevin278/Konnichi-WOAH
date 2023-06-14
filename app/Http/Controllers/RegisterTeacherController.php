<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisterTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('teacher.signUpTeacher');
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
        // dd($request);

        DB::table('certificates')->where('email', $request['email'])->update(['verified' => true]);

        $password = DB::table('certificates')->select('password')->where('email', $request['email'])->get();

        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'image' => 'required'
        ]);

        $validatedData['certificate'] = $validatedData['image'];
        $validatedData['password'] = $password[0]->password;
        $validatedData['userIsTeacher'] = true;

        User::create($validatedData);
        // dd($validatedData);

        return redirect('/verifyTeacher')->with('success', 'Registration successfull! Please Login');

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
