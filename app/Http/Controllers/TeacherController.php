<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    // @return \Illuminate\Http\Response
    public function index()
    {
        $this->middleware('auth');

        try {
            $id = auth()->user()->id;
        } catch (\Throwable $e) {
            redirect()->to('/login')->send();
        }

        $user = User::where('id', $id)->get();
        return view('teacher.profileTeacher', [
            'user' => $user[0]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    // @return \Illuminate\Http\Response
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    // @param  \Illuminate\Http\Request  $request
    // @return \Illuminate\Http\Response
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
            'descteacher' => 'required',
            'province' => 'required',
            'city' => 'required',
            'price' => 'required',
            'DOB' => 'required',
            'gender' => 'required|in:0,1'
        ]);

        if ($request->file('photo')->isValid()) {
            $validatedData['photo'] = $request->file('photo')->store('profile-images', 'public');
        }

        User::create($validatedData);

        return redirect('/profileTeacher')->with('success', 'Profile updated successfully');
    }

    /**
     * Display the specified resource.
     *
     */
    // @param  int  $id
    // @return \Illuminate\Http\Response
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    // @param  int  $id
    // @return \Illuminate\Http\Response
    public function edit($id)
    {
        $this->middleware('auth');
        $id = auth()->user()->id;
        $user = User::where('id', $id)->get();

        return view('teacher.profileTeacherEdit', [
            'user' => $user[0]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    // @param  \Illuminate\Http\Request  $request
    // @param  int  $id
    // @return \Illuminate\Http\Response
    public function update(Request $request, User $user)
    {
        $id = auth()->user()->id;
        $user = User::where('id', $id)->get();

        $this->middleware('auth');
        $rules = [
            'name' => 'required|max:255',
            'address' => 'required',
            'phoneNumber' => 'required',
            'photo' => 'image|file',
            'descteacher' => 'required',
            'province' => 'required',
            'city' => 'required',
            'price' => 'required',
            'DOB' => 'required',
            'gender' => 'required|in:0,1'

        ];

        if($request->email != $user[0]->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        try {
            $validatedData = $request->validate($rules);

        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->getMessage());
        }

        if($request->file('photo')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['photo'] = $request->file('photo')->store('profile-images', 'public');
        }
        $validatedData['id'] = auth()->user()->id;
        $user = User::where('id', $id);
        $user = $user->update($validatedData);

        return redirect('/profileTeacher')->with('success', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    // @param  int  $id
    // @return \Illuminate\Http\Response
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/login')->with('success','Account has been deleted!');

    }
}
