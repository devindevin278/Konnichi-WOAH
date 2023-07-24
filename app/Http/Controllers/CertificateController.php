<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $id)
    {
        $this->middleware('auth');

        try {
            $id = auth()->user()->id;
        } catch (\Throwable $e) {
            redirect()->to('/login')->send();
        }
        return view('admin.verifyTeacher', [
            'certificates' => Certificate::all()
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
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'image' => 'required|image|file'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        $validatedData['password'] = Hash::make($validatedData['password']);

        Certificate::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please Wait for your registration to be verified!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
