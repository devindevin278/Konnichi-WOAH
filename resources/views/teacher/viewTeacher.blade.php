@extends('layouts.mainStudent')

@section('content')
<section class="viewTeacher">

    <div class=" row mt-3 d-flex justify-content-center bg-white p-5" style="border-radius:30px; width:100%;">
        <div class="d-flex justify-content-around row mt-2" >

            <div style="font-weight: 600; font-size: 30px;">
                {{ $user->name }}
            </div>

            <div class="col d-flex mt-3 ">
                <div class="d-flex align-items-start" style="width:65%;">
                    <a>
                        {{ $user->descteacher }}
                    </a>
                </div>
                <div class="row d-flex align-items-start justify-content-around" style="width:35%; ">
                    <div class="row d-flex justify-content-center" >
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('storage/'. $user->photo) }}" alt=""
                        style="width:200px; height:200px; border-radius: 50%; overflow:hidden;">
                        </div>

                        <button class="reqteacher mt-5" type="button" style="width:50%; ">Request Teacher</button>
                    </div>

                </div>
            </div>
        </div>


            {{-- <div style="font-weight: 600; font-size: 26px;">
                Performance Rating
            </div> --}}

            {{-- <div class="col d-flex ">
                <div class="rate d-flex justify-content-start" style="width:65%;">
                    <div class="rating">
                        <input type="radio" name="rating" value="5" id="5">
                        <label for="5">☆</label>
                        <input type="radio" name="rating" value="4" id="4">
                        <label for="4">☆</label>
                        <input type="radio" name="rating" value="3" id="3">
                        <label for="3">☆</label>
                        <input type="radio" name="rating" value="2" id="2">
                        <label for="2">☆</label>
                        <input type="radio" name="rating" value="1" id="1">
                        <label for="1">☆</label>
                    </div>
                </div>
            </div> --}}

        <div class="container d-flex justify-content-start row mt-3 p-3" style="border-radius:30px; height=743px;">
            <div class="col d-flex justify-content-start" style="font-weight: 600; font-size: 26px;">

                Tuition Fee
            </div>

            <div class="container d-flex justify-content-start row mt-3 gap-3 p-3">
                <div class="tuition d-flex justify-content-center align-items-center" style="width:20%;">
                    Rp {{ $user->price }} /Hour
                </div>

            </div>
        </div>
    </div>

</section>



@endsection
