<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TeacherNotification;
use App\Http\Controllers\Controller;
use App\Models\AcceptedStudent;
use Illuminate\Support\Facades\Hash;


class AcceptedStudentController extends Controller
{
    public function index()
    {
        return view('teacher.notificationTeacher', [
            'TeacherNotifications' => TeacherNotification::all()
        ]);
    }

    public function store(Request $request)
    {
        $teacherid = $request->input('teacherid');
        $studentid = $request->input('studentid');

        $teacherNotification = TeacherNotification::where('teacherid', $teacherid)
            ->where('studentid', $studentid)
            ->first();
        if (!$teacherNotification) {
            return redirect('/acceptedstudent')->with('error', 'Teacher notification not found');
        }

        $teacherNotification->verified = true;
        $teacherNotification->save();


        $acceptedStudent = AcceptedStudent::where('teacherid', $teacherid)
            ->where('studentid', $studentid)
            ->first();

        if (!$acceptedStudent) {
            $acceptedStudent = new AcceptedStudent();
            $acceptedStudent->teacherid = $teacherid;
            $acceptedStudent->studentid = $studentid;
            $acceptedStudent->save();
        }

        return redirect('/acceptedstudent')->with('success', 'Student verification updated successfully');
    }

}
