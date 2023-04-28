<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Apps\Model\Payment;

class PaymentController extends Controller
{
    //
    public function index() {
        $payments = [
            [
                "id" => 1,
                "name" => "Hasna",
                "email" => "hasna@gmail.com",
                "paymentStatus" => "pending"
            ],
            [
                "id" => 2,
                "name" => "Devin",
                "email" => "devin@gmail.com",
                "paymentStatus" => "verified"
            ],
            [
                "id" => 3,
                "name" => "Hansen",
                "email" => "hansen@gmail.com",
                "paymentStatus" => "verified"
            ],
            [
                "id" => 4,
                "name" => "Mike",
                "email" => "mike@gmail.com",
                "paymentStatus" => "verified"
            ]
        ];
        return view('admin.verifyPayment', compact('payments'));
    }


}
