@extends('layouts.mainStudent')

@section('content')

<section class="profileStudent">

        <div class="mt-5">

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show col" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @elseif(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show col" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif

        </div>

        <div class="container container-profileTeacher bg-white mt-5 mb-5">
            <div class="row">
                <div class="col border-right ms-5 me-5">

                    @if ($user->photo)
                        <div class="d-flex justify-content-around mb-3">
                            <img class="rounded-circle mt-5 shadow" style="
                            background-color: solid #FF8BA7;
                            width: 170px;
                            height: 170px;
                            border-radius: 50%;
                            overflow:hidden; object-fit: cover;
                            " src="{{ asset('storage/'. $user->photo) }}">
                        </div>

                    @else
                        <div class="d-flex justify-content-around mb-3">
                            <img class="rounded-circle mt-5 shadow" style="
                            width: 170px;
                            height: 170px;
                            overflow:hidden;
                            " src="{{ asset('img/profilespic.png') }}">
                        </div>
                    @endif


                    <div class="d-flex col justify-content-center">
                        <div class="d-flex justify-content-around mt-3" >

                            <form action="/profileStudent/{{ $user->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="logoutedit border-0 bg-white" onclick="return confirm('Are you sure u wanna delete?')"><svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 7H20" stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 10L7.70141 19.3578C7.87432 20.3088 8.70258 21 9.66915 21H14.3308C15.2974 21 16.1257 20.3087 16.2986 19.3578L18 10" stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></button>
                            </form>
                        </div>

                        <div class="d-flex justify-content-around mt-3" class="logoutedit">
                            <form action="/logout" method="post" >
                                @csrf
                                <button type="submit" class="logoutedit border-0 bg-white" style="font-weight:500;"> <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 12L13 12" stroke="#FF8BA7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M18 15L20.913 12.087V12.087C20.961 12.039 20.961 11.961 20.913 11.913V11.913L18 9" stroke="#FF8BA7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16 5V4.5V4.5C16 3.67157 15.3284 3 14.5 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H14.5C15.3284 21 16 20.3284 16 19.5V19.5V19" stroke="#FF8BA7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></button>
                            </form>
                        </div>
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

                                {{-- Gender --}}



                                <div class="d-flex align-item-center " style="gap:10px">
                                    <div class="form-check">
                                        <input class="form-check-input genderselect" type="radio" name="gender" id="gender" value="1" {{ $user->gender == 1 ? 'checked' : '' }} style="border: solid #A08A8F;"  >
                                        <label class="form-check-label" for="gender">
                                        Male
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender" value="0" {{ $user->gender == 0 ? 'checked' : '' }} style="border: solid #A08A8F;" >
                                        <label class="form-check-label" for="gender">
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


                </div>
            </div>
        </div>





</section>


@endsection

