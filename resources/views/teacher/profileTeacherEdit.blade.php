@extends('layouts.mainTeacher')

@php
    $provinces = \App\Models\Province::all();

    $cities = App\Models\City::all();
@endphp

@section('content')
    <section class="profileTeacherEdit">

        <div class="mt-5">

            @if (session()->has('success'))
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

        <div class="container col container-profileTeacherEdit bg-white mt-5 mb-5">


            <div class="row">

                <div class="col">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">My Profile</h4>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="text-right">Manage your profile information to control, protect, and secure, your
                                account.</h6>
                        </div>
                        <div style="border: 1px solid #A08A8F;"></div>

                        <form class="row mt-3" action="/profileTeacher/{{ $user->id }}" method="post" id="form-control"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="col">

                                <div class="container col-md-3 row mt-2 d-flex m-auto justify-content-center"
                                    style="width: fit">


                                    <div class="mt-1 d-flex justify-content-around align-items-center ">


                                        <input type="hidden" name="oldImage" value="{{ $user->photo }}">

                                        @if ($user->photo)
                                            <div style="display: flex; justify-content:center;">

                                                <img src="{{ asset('storage/' . $user->photo) }}"
                                                    class="img-preview img-fluid img-fluid"
                                                    style="display:block; border-radius: 50%; max-height: 100%;width: 200px;
                                                height: 200px;
                                                border-radius: 50%;
                                                border:solid #A08A8F;">

                                            </div>
                                        @else
                                            <div class="mt-3 d-flex justify-content-start align-items-start float-left">
                                                <img class=" img-preview img-fluid "
                                                    style="display:block; border-radius: 50%; max-height: 100%;width: 200px;
                                                height: 200px;
                                                border-radius: 50%;
                                                border:solid #A08A8F;">
                                            </div>
                                        @endif
                                    </div>



                                    <div class="container row d-flex justify-content-center align-items-center mt-3">

                                        <div class="photo-input">
                                            <input type="file" id="photo" name="photo" accept="image/*"
                                                class="photo" onchange="previewImage()">


                                            <label for="photo">Choose a photo</label>
                                        </div>
                                    </div>

                                    <div class="d-flex row text-center justify-content-around m-auto mt-2"
                                        style="width: 200px; font-weight: 800; font-size: 12px;">
                                        File Extension: .JPG
                                    </div>
                                    <div class="d-flex row text-center justify-content-around m-auto"
                                        style="width: 200px; font-weight: 800; font-size: 12px;">
                                        File Size: Max 2 Mb
                                    </div>

                                    <div style="border: 1px solid #A08A8F; margin:10px;"></div>
                                </div>
                            </div>

                            <div>

                            </div>


                            {{-- Name --}}
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right"
                                        style="height:fit-content; width: 120px; margin:auto; text-align: right;">Name</label>
                                </div>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" placeholder="Enter your name" value="{{ old('name', $user->name) }}"
                                    style="border: solid #A08A8F;">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right"
                                        style="height:fit-content; width: 120px; margin:auto; text-align: right;">Email</label>
                                </div>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" placeholder="Enter your email" value="{{ old('email', $user->email) }}"
                                    style="border: solid #A08A8F;">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Province --}}
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right @error('province') is-invalid @enderror"
                                        style="height:fit-content; width: 120px; margin:auto; text-align: right;">Province</label>
                                </div>


                                {{-- <input type="text" class="form-control" name="province" placeholder="Enter your province" value="{{ old('province', $user->province) }}" style="border: solid #A08A8F;"> --}}
                                {{-- @error('province')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}

                                <select class="form-control" name="province" style="border: solid #A08A8F;" id="province">
                                    <option value="">Select Province</option>
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province->name }}" data="{{ $province->id }}"
                                            {{ old('province', $user->province) == $province->name ? 'selected' : '' }}>
                                            {{ $province->name }}
                                        </option>
                                    @endforeach
                                </select>


                            </div>

                            {{-- City --}}
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right"
                                        style="height:fit-content; width: 120px; margin:auto; text-align: right;">City</label>
                                </div>
                                {{-- <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="Enter your city" value="{{ old('city', $user->city) }}" style="border: solid #A08A8F;">
                                @error('city')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}

                                <select class="form-control" name="city" style="border: solid #A08A8F;" id="city">
                                    <option value="">Select City</option>
                                    {{-- @foreach (\App\Models\City::all() as $city)
                                        <option value="{{ $city->id }}"
                                            {{ old('city', $user->city) == $city->id ? 'selected' : '' }}>
                                            {{ $city->name }}
                                        </option>
                                    @endforeach --}}
                                </select>

                            </div>

                            {{-- Address --}}
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right"
                                        style="height:fit-content; width: 120px; margin:auto; text-align: right;">Address</label>
                                </div>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    name="address" placeholder="Enter your address"
                                    value="{{ old('address', $user->address) }}" style="border: solid #A08A8F;">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                            {{-- Phone --}}
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right"
                                        style="height:fit-content; width: 120px; margin:auto; text-align: right;">Phone
                                        Number</label>
                                </div>
                                <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror"
                                    name="phoneNumber" placeholder="Enter your phone number"
                                    value="{{ old('phoneNumber', $user->phoneNumber) }}" style="border: solid #A08A8F;">
                                @error('phoneNumber')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                            {{-- Price --}}
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right"
                                        style="height:fit-content; width: 120px; margin:auto; text-align: right;">Price</label>
                                </div>
                                <input type="text" id="priceInput"
                                    class="form-control @error('price') is-invalid @enderror" name="price"
                                    placeholder="Enter your price" value="{{ old('price', $user->price) }}"
                                    style="border: solid #A08A8F;">
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Gender --}}
                            <div class="d-flex align-item-center mt-4" style="gap:10px">
                                <div class="d-flex">
                                    <label class="labels text-align-right"
                                        style="height:fit-content; width: 120px; margin:auto; text-align: right;">Gender</label>
                                </div>

                                <div class="d-flex align-item-center " style="gap:10px">
                                    <div class="form-check">
                                        <input class="form-check-input genderselect" type="radio" name="gender"
                                            id="gender" value="1" style="border: solid #A08A8F;" checked>
                                        <label class="form-check-label" for="gender">
                                            Male
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender"
                                            value="0" style="border: solid #A08A8F;" checked>
                                        <label class="form-check-label" for="gender">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>

                            {{-- DOB --}}
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right"
                                        style="height:fit-content; width: 120px; margin:auto; text-align: right;">DOB</label>
                                </div>
                                <input type="date" class="form-control @error('DOB') is-invalid @enderror"
                                    name="DOB" placeholder="Enter your date of birth"
                                    value="{{ old('DOB', $user->DOB) }}" style="border: solid #A08A8F;">
                                @error('DOB')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            {{-- desc teacher --}}

                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right"
                                        style="height:fit-content; width: 120px; margin:auto; text-align: right;">Description</label>
                                </div>
                                <textarea class="form-control @error('descteacher') is-invalid @enderror" name="descteacher"
                                    placeholder="Enter your description" style="border: solid #A08A8F; height: fit; word-wrap: break-word;">{{ old('descteacher', $user->descteacher) }}</textarea>
                                @error('descteacher')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                    </div>
                    <div class="mb-5 text-center"><button class="btnsave" type="submit">Save</button></div>
                    </form>


                </div>
            </div>
        </div>





    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#province').on('change', function() {

                var province = $(this).val();
                console.log("Selected province:", province);

                // Clear the city dropdown
                $('#city').empty().append('<option value="">City</option>');

                console.log('succ')
                // If a province is selected
                if (province) {
                    // Fetch the cities for the selected province via AJAX
                    $.ajax({
                        url: '/fetchcities', // Replace with the URL to your server-side endpoint
                        method: 'GET',
                        data: {
                            province: province
                        },
                        // console.log(province),
                        success: function(response) {
                            // Populate the city dropdown with the received cities
                            var cities = response.cities || [];
                            // console.log(cities);
                            $.each(cities, function(index, city) {
                                $('#city').append($('<option>', {
                                    value: city['name'],
                                    text: city['name']
                                }));
                            });
                        },
                        error: function(xhr, status, error) {
                            console.log('An error occurred while fetching cities:', error);
                        }
                    });
                }
            });

            // Trigger the change event on page load
            $('#province').trigger('change');
        });
    </script>

    {{-- <script>
        // console.log('hiii');

        let province = document.getElementById('province');
        let cityInput = document.getElementById('city');
        // console.log(province);

        // function updateCities();
        province.onchange = function updateCities() {
            // Fetch cities based on the selected province ID via AJAX
            // Replace the URL with the actual route or endpoint to fetch cities
            // const url = `/cities/${provinceId}`;
            // console.log('hei');
            // console.log(province.value);
            cityInput.innerHTML = '<option value="">Select City</option>';

            console.log(province)

            let cities = {{ Js::from($cities) }};
            console.log(cities);

            cities.forEach(city => {
                if(city['province_id'] == province.data) {
                    let option = document.createElement('option');
                    option.value = city['name'];
                    option.innerHTML = city['name'];
                    cityInput.appendChild(option);
                }

            });

            // Make an AJAX request to fetch the cities
            //         fetch(url)
            //             .then(response => response.json())
            //             .then(data=> {
            //                 // Get the cities dropdown element
            //                 const cityDropdown = document.getElementById('city');
            //                 // Clear the previous options
            //                 cityDropdown.innerHTML = '<option value="">Select City</option>';

            //                 // Iterate over the cities and add them as options to the dropdown
            //                 data.forEach(city => {
            //                     const option = document.createElement('option');
            //                     option.value = city.id;
            //                     option.innerText = city.name;
            //                     // Set the selected attribute if the city matches the user's existing value or the old input value
            //                     if (city.id === {{ old('city', $user->city) }}) {
            //                         option.setAttribute('selected', 'selected');
            //                     }
            //                     cityDropdown.appendChild(option);
            //                 });
            // })
            //             .catch(error => {
            //                 console.error('Error:', error);
            //             });
        }
    </script> --}}
@endsection
