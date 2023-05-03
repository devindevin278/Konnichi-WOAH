@extends('student.learn.layouts.main')

@section('learnContent')

<section class="studentLeaderboard">


    <div class="container mt-5 d-flex text-center align-items-center justify-content-center">
        <div class="row" > {{-- style="border:solid green;" --}}
            <div>
            <img src="{{ asset('img/crown.png') }}" alt="crown">
            </div>
            <div style="font-weight:700; font-size:36px;">
                TOP 20 GLOBAL
            </div>
            <div >
                Top 20 global all over the world
            </div>
        </div>
    </div>

    <div class="row container mt-5 gap-4 d-flex justify-content-center">

        <div class="row" > {{-- style="border:solid green;" --}}

            <div class="col d-flex  align-items-center p-2" style="width:980px; background-color:#C3F0CA; border-radius:30px; ">
                <div class="ms-5">
                    <img src="{{ asset('img/juara1.png') }}" alt="crown">
                </div>
                <div class="ms-4">
                    <img src="{{ asset('img/pp.png') }}" alt="crown">
                </div>
                <div class="justify-content-around ms-5" style="color:#00B91D; font-weight:600; font-size: 24px;">
                    Hasna Salsabilla Abdullah
                </div>
                <div class="col mx-5 text-end" style="color:#00B91D; font-weight:600; font-size: 24px;">
                    200 XP
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex  align-items-center p-2" style="width:980px; background-color:#ffffff; border-radius:30px; ">
                <div class="ms-5">
                    <img src="{{ asset('img/juara2.png') }}" alt="crown">
                </div>
                <div class="ms-4">
                    <img src="{{ asset('img/pp2.png') }}" alt="crown">
                </div>
                <div class="justify-content-around ms-5" style="color:#A08A8F; font-weight:600; font-size: 24px;">
                    Devin
                </div>
                <div class="col mx-5 text-end" style="color:#A08A8F; font-weight:600; font-size: 24px;">
                    190 XP
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex  align-items-center p-2" style="width:980px; background-color:#ffffff; border-radius:30px; ">
                <div class="ms-5">
                    <img src="{{ asset('img/juara3.png') }}" alt="crown">
                </div>
                <div class="ms-4">
                    <img src="{{ asset('img/pp3.png') }}" alt="crown">
                </div>
                <div class="justify-content-around ms-5" style="color:#A08A8F; font-weight:600; font-size: 24px;">
                    Michael
                </div>
                <div class="col mx-5 text-end" style="color:#A08A8F; font-weight:600; font-size: 24px;">
                    180 XP
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex  align-items-center p-2" style="width:980px; background-color:#ffffff; border-radius:30px; ">
                <div class="ms-5 text-center align-items-center" style="color:#00B91D; font-weight:600; font-size: 24px; width:50px;">
                    4
                </div>
                <div class="ms-4">
                    <img src="{{ asset('img/pp3.png') }}" alt="crown">
                </div>
                <div class="justify-content-around ms-5" style="color:#A08A8F; font-weight:600; font-size: 24px;">
                    Hansen
                </div>
                <div class="col mx-5 text-end" style="color:#A08A8F; font-weight:600; font-size: 24px;">
                    170 XP
                </div>
            </div>

        </div>

    </div>



</section>





@endsection
