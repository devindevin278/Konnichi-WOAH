<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Two\InvalidStateException;

class LoginController extends Controller
{

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        // dd($request);

        $user = Socialite::driver('google')->user();
        // try {
        //     $user = Socialite::driver('google')->user();
        // } catch (InvalidStateException $e) {
        //     $user = Socialite::driver('google')->stateless()->user();
        // }

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
    public function index(){
        return view('login.index',[
            'title' => 'login'
        ]);
    }

    public function authenticate(Request $request){
       $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
       ]);

        if(Auth::attempt($credentials)){
            $match_user = DB::table('users')->where('email', $credentials['email'])->get();
            if($match_user[0]->userIsTeacher) {
                $request->session()->regenerate();
                return redirect('/homeTeacher');
            } elseif($match_user[0]->userIsAdmin){
                $request->session()->regenerate();
                return redirect('/homeAdmin');
            } else {
                $request->session()->regenerate();
                return redirect('/homeStudent');
            }
        } else {

            return back()->with('loginError','Login Failed! Please check your email or password');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
