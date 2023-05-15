@extends('layouts.mainStudent')

@section('content')

<section class="profileStudent">

        <div class="container container-profileStudent bg-white mt-5 mb-5">
            <div class="row">
                <div class="col border-right ms-5 me-5">
                    <div class="d-flex justify-content-around mb-3">

                        <img class="rounded-circle mt-5" style="
                            background-color: solid #FF8BA7;
                            width: 150px;
                            height: 150px;
                            border-radius: 50%;
                            overflow:hidden;
                            " src="{{ asset('storage/'. $user->photo) }}">

                    </div>
                    {{-- <div class="d-flex justify-content-around">
                        <button class="chooseimgbut" type="button">Choose Image</button>
                    </div>
                    <div class="d-flex text-center justify-content-center mt-2" style="width: 200px; font-weight: 800; font-size: 12px;">
                        File Extension: .JPG
                    </div>
                    <div class="d-flex text-center justify-content-center" style="width: 200px; font-weight: 800; font-size: 12px;">
                        File Size: Max 2 Mb
                    </div> --}}



                    <div class="d-flex justify-content-around mt-3">
                        <form action="/logout" method="post" style="
                        text-align: center;
                        width: 80px;
                        background: #FF8BA7;
                        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.15);
                        border-radius: 10px;">
                            @csrf
                            <button type="submit" class="dropdown-item" style="font-weight:500;"> Logout</button>
                        </form>
                    </div>

                    <div class="d-flex justify-content-around mt-3" >
                        {{-- <a href=""
                            style="background: #ef0c41; font-weight:500; border:none; color:white; border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.15);">
                            Delete Account
                        </a> --}}

                        <form action="/profileStudent/{{ $user->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure u wanna delete?')">Delete Account</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">My Profile</h4>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="text-right">Manage your profile information to control, protect, and secure, your account.</h6>
                        </div>
                        <div style="border: 1px solid #A08A8F;"></div>

                        {{-- <h1>{{ $user->name }} yeah</h1> --}}
                    {{-- <form class="row mt-3" action="/profileStudent/{{ $user->id }}/edit" method="get" id="form-control"> --}}
                        {{-- @method('PUT') --}}
                            @csrf
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right" style="height:fit-content; width: 120px; margin:auto; text-align: right;">Name</label>
                                </div>
                                <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ old('name', $user->name) }}" style="border: solid #A08A8F;" readonly>
                            </div>
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right" style="height:fit-content; width: 120px; margin:auto; text-align: right;">Address</label>
                                </div>
                                <input type="text" class="form-control" name="address" placeholder="Enter your address" value="{{ old('address', $user->address) }}" style="border: solid #A08A8F;" readonly>
                            </div>
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right" style="height:fit-content; width: 120px; margin:auto; text-align: right;">Email</label>
                                </div>
                                <input type="text" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email', $user->email) }}" style="border: solid #A08A8F;" readonly>
                            </div>
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right" style="height:fit-content; width: 120px; margin:auto; text-align: right;">Phone Number</label>
                                </div>
                                <input type="text" class="form-control" name="phoneNumber" placeholder="Enter your phone number" value="{{ old('phoneNumber', $user->phoneNumber) }}" style="border: solid #A08A8F;" readonly>
                            </div>
                            <div class="d-flex align-item-center mt-4" style="gap:10px" >
                                <div class="d-flex">
                                    <label class="labels text-align-right" style="height:fit-content; width: 120px; margin:auto; text-align: right;">Gender</label>
                                </div>

                                <div class="d-flex align-item-center " style="gap:10px">
                                    <div class="form-check">
                                        <input class="form-check-input genderselect" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" style="border: solid #A08A8F;" readonly checked >
                                        <label class="form-check-label" for="exampleRadios1">
                                        Male
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option2" style="border: solid #A08A8F;" readonly checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                        Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right" style="height:fit-content; width: 120px; margin:auto; text-align: right;">DOB</label>
                                </div>
                                <input type="date" class="form-control" name="DOB" placeholder="Enter your date of birth" value="{{ old('DOB', $user->DOB) }}" style="border: solid #A08A8F;" readonly>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around  mb-5 text-center"><a href="/profileStudent/{{ $user->id }}/edit"  class="btnsave no-decoration-text" style="color: #33272A;">Edit</a></div>
                    {{-- </form> --}}


                </div>
            </div>
        </div>





</section>


@endsection

