<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    //
    public function index() {
        $certificates = [
            [
                "id" => 1,
                "name" => "Hasna",
                "email" => "hasna@gmail.com",
                "certificate" => "certificate.png",
                "status" => "pending"
            ],
            [
                "id" => 2,
                "name" => "Devin",
                "email" => "devin@gmail.com",
                "certificate" => "certificate.png",
                "status" => "pending"
            ],
            [
                "id" => 3,
                "name" => "Hansen",
                "email" => "hansen@gmail.com",
                "certificate" => "certificate.png",
                "status" => "verified"
            ],
            [
                "id" => 4,
                "name" => "Mike",
                "email" => "mike@gmail.com",
                "certificate" => "certificate.png",
                "status" => "verified"
            ]
        ];
        return view('admin.verifyTeacher', compact('certificates'));
    }

}
