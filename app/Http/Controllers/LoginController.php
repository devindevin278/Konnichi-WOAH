<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title' => 'login'
            // 'active' => 'login'
        ]);
    }

    public function authenticate(Request $request){
        // dd('halo');
       $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
       ]);

        if(Auth::attempt($credentials)){
            $match_user = DB::table('users')->where('email', $credentials['email'])->get();
            // dd($match_user);
            if($match_user[0]->userIsTeacher) {
                $request->session()->regenerate();
                return redirect()->intended('/homeTeacher');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/homeStudent');
            }
        }
        // dd('berhasil login teacher');


        // return redirect()->intended('/homeStudent');
        return back()->with('loginError','Login Failed');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
