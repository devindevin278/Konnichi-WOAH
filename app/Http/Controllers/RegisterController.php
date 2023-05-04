<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    //

    public function index() {
        return view('student.signUpStudent', [
            'title' => 'signUpStudent',
            'active' => 'signUpStudent'
        ]);
    }

    public function store(Request $request) {

        // dd('test');

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // 'username' => ['required', 'min:4', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);


        // klo di atas lolos, maka akan jalanin yg di bawah

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);


        // $request->session()->flash('success', 'Registration successfull! Please Login');

        return redirect('/login')->with('success', 'Registration successfull! Please Login');

    }

    public function storeTeacher(Request $request) {

        // dd($request);

        // return $request->file('image')->store('post-images');
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // 'userIsTeacher' => 'required',
            // 'username' => ['required', 'min:4', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'photo' => 'image'
        ]);
        if($request->file('image')){
            dd('ada image');
            // $validatedData['image'] = $request->file('image')->store('post-images');

        }

        if($request['userIsTeacher'] == true) {
            $validatedData['userIsTeacher'] = 1;
        } else {
            $validatedData['userIsTeacher'] = 0;
        }

        // dd($validatedData);


        // klo di atas lolos, maka akan jalanin yg di bawah

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);


        User::create($validatedData);


        // $request->session()->flash('success', 'Registration successfull! Please Login');

        return redirect('/login')->with('success', 'Registration successfull! Please Login');

    }


}
