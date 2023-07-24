<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class RegisterController extends Controller
{

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // Check if the user exists in the database
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // User exists, log them in
            Auth::login($existingUser);

            // Redirect the user to the appropriate home page based on their role
            if ($existingUser->userIsTeacher) {
                return redirect('/homeTeacher');
            } elseif ($existingUser->userIsAdmin) {
                return redirect('/homeAdmin');
            } else {
                return redirect('/homeStudent');
            }
        } else {
            // User does not exist, create a new user in the database
            $validatedData = [
                'name' => $user->name,
                'email' => $user->email,
                // 'password' => 'required|min:5|max:255'
                'password' => bcrypt($user->password),
                // Add other required fields for registration
            ];

            $validatedData['password'] = Hash::make($validatedData['password']);

            User::create($validatedData);
            return redirect('/login')->with('success', 'Registration Success. Please Login');
        }
    }
    public function index() {
        return view('student.signUpStudent', [
            'title' => 'signUpStudent',
            'active' => 'signUpStudent'
        ]);
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please Login');

    }

    public function storeTeacher(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'photo' => 'image|file'
        ]);

        if($request->file('image')){
            dd('ada image');
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        if($request['userIsTeacher'] == true) {
            $validatedData['userIsTeacher'] = 1;
        } else {
            $validatedData['userIsTeacher'] = 0;
        }

        // klo di atas lolos, maka akan jalanin yg di bawah
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please Login');

    }


}
