<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TeacherNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class TeacherNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->middleware('auth');

        try {
            $id = auth()->user()->id;
        } catch (\Throwable $e) {
            redirect()->to('/login')->send();
        }
        $teacherNotifications = TeacherNotification::where('teacherid', auth()->user()->id)->get();

        return view('teacher.notificationTeacher', [
            'TeacherNotifications' => $teacherNotifications
            // 'Users' => User::all(),
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
        $username = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $photo = $request->input('photo');
        $teacherid = $request->input('teacherid');
        $studentid = $request->input('studentid');


        $teacherNotification = new TeacherNotification();
        $teacherNotification->name = $username;
        $teacherNotification->email = $email;
        $teacherNotification->address = $address;
        $teacherNotification->phone = $phone;
        $teacherNotification->photo = $photo;
        $teacherNotification->teacherid = $teacherid;
        $teacherNotification->studentid = $studentid;
        $teacherNotification->save();

        return redirect('/teacher')->with('success', 'Your teacher request has been delivered, Please wait the verification.');
    }


    /**
     * Display the specified resource.
     */
    public function show(TeacherNotification $TeacherNotification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeacherNotification $TeacherNotification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeacherNotification $TeacherNotification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeacherNotification $TeacherNotification)
    {
        //
    }
}
