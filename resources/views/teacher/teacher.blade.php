@extends('layouts.mainStudent')

@section('content')

<section class="teacher">
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
    <div class="row d-flex justify-content-center m-auto container" >

        <div class="col d-flex justify-content-around " style="font-weight:600; ">
            <div class="d-flex align-items-center" style="width:50%;" >
                @if (auth()->user()->photo)
                        <a href="/profileStudent" class="navbar-brand"  ><img src="{{ asset('storage/'.auth()->user()->photo) }}" style="
                            background-color: solid #FF8BA7;

                            height: 50px;
                            width: 50px;
                            border-radius: 50%;
                            overflow:hidden;" ></a>

                        @else
                        <a href="/profileStudent" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" style="
                            background-color: solid #FF8BA7;

                            height: 50px;
                            border-radius: 50%;
                            overflow:hidden;" ></a>

                        @endif
            </div>
            <div class="d-flex align-items-center justify-content-end" style="width:50%;" >
                <svg width="40px" height="40px" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="#FF8BA7" d="M32,0C18.745,0,8,10.745,8,24c0,5.678,2.502,10.671,5.271,15l17.097,24.156C30.743,63.686,31.352,64,32,64 s1.257-0.314,1.632-0.844L50.729,39C53.375,35.438,56,29.678,56,24C56,10.745,45.255,0,32,0z M32,38c-7.732,0-14-6.268-14-14 s6.268-14,14-14s14,6.268,14,14S39.732,38,32,38z"></path> <path fill="#FF8BA7" d="M32,12c-6.627,0-12,5.373-12,12s5.373,12,12,12s12-5.373,12-12S38.627,12,32,12z M32,34 c-5.523,0-10-4.478-10-10s4.477-10,10-10s10,4.478,10,10S37.523,34,32,34z"></path> </g> </g></svg>
                {{ auth()->user()->address }}

            </div>


        </div>
        <div class="container m-auto mt-3" style="height: 2px; background-color: black;">

        </div>
            <form action="/teacher" method="GET">
                @csrf

                <div class="mt-3 d-flex col gap-3 justify-content-center">
                    {{-- Province --}}
                    <div class="d-flex align-item-center mt-4">
                        <select class="form-select filterbutton rounded-5" id="province" name="province" style="background-color: #FF8BA7; width: 170px;">
                            <option value="">Province</option>
                            @foreach ($provinces as $province)
                            <option value="{{ $province }}" @if ($province == request('province')) selected @endif>{{ $province }}</option>
                            @endforeach

                        </select>
                    </div>

                    {{-- City --}}
                    <div class="d-flex align-item-center mt-4 ">
                        <select class="form-select filterbutton rounded-5"  id="city" name="city" style="background-color: #FF8BA7; width: 170px;">
                            <option value="">City</option>
                            @foreach ($cities as $city)
                            <option value="{{ $city }}" @if ($city == request('city')) selected @endif>{{ $city }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Price --}}

                    <div class="d-flex align-item-center mt-4 gap-3">
                        <select class="form-select filterbutton rounded-5" name="price_range" id="price-range-select" style="background-color: #FF8BA7; width: 170px;">
                            <option value="">Price</option>
                            <option value="100000-200000" style="border-radius: 5px;">100k - 200k</option>
                            <option value="201000-300000" style="border-radius: 5px;">201k - 300k</option>
                            <option value="301000-400000" style="border-radius: 5px;">301k - 400k</option>
                        </select>
                    </div>



                    <div class="d-flex col justify-content-end mt-3">

                        <button type="submit" class="btn filbut">
                            <svg width="40px" height="40px" viewBox="0 0 5.8208335 5.8208335" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" id="svg8" version="1.1" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <metadata id="metadata5"> <rdf:rdf> <cc:work> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type> <dc:title></dc:title> <dc:date>2021</dc:date> <dc:creator> <cc:agent> <dc:title>Timothée Giet</dc:title> </cc:agent> </dc:creator> <cc:license rdf:resource="http://creativecommons.org/licenses/by-sa/4.0/"></cc:license> </cc:work> <cc:license rdf:about="http://creativecommons.org/licenses/by-sa/4.0/"> <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"></cc:permits> <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"></cc:permits> <cc:requires rdf:resource="http://creativecommons.org/ns#Notice"></cc:requires> <cc:requires rdf:resource="http://creativecommons.org/ns#Attribution"></cc:requires> <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"></cc:permits> <cc:requires rdf:resource="http://creativecommons.org/ns#ShareAlike"></cc:requires> </cc:license> </rdf:rdf> </metadata> <g transform="translate(0 -291.18)" id="layer1"> <path id="path5822" d="M2.646 293.56v.53l1.058 1.058v1.323l1.058.529v-1.852l1.059-1.058v-.53zm.529.53h2.117l-.794.793v1.588l-.53-.265v-1.323z" style="fill:#FF8BA7;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:.35277778px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"></path> <g style="fill:#FF8BA7;fill-opacity:1" transform="matrix(.26458 0 0 .26458 -1.058 18.033)" id="layer1-6"> <path id="path824" d="M15 1035.362v2h-4a5 5 0 0 0 0 10h2v2h-2a7 7 0 0 1-7-7c0-3.866 3.134-7.06 7-7z" style="opacity:1;vector-effect:none;fill:#FF8BA7;fill-opacity:1;stroke:none;stroke-width:4;stroke-linecap:square;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:3.20000005;stroke-opacity:.55063291"></path> <path id="path842" d="m17 1036.362-4 4v-8z" style="fill:#FF8BA7;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"></path> </g> </g> </g></svg>
                        <button type="submit" name="refresh" value="1" class="btn refbut ms-3" >
                            <svg width="35px" height="35px" fill="#FF8BA7" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M960 0v213.333c411.627 0 746.667 334.934 746.667 746.667S1371.627 1706.667 960 1706.667 213.333 1371.733 213.333 960c0-197.013 78.4-382.507 213.334-520.747v254.08H640V106.667H53.333V320h191.04C88.64 494.08 0 720.96 0 960c0 529.28 430.613 960 960 960s960-430.72 960-960S1489.387 0 960 0" fill-rule="evenodd"></path> </g></svg></div>

                </div>

            </form>


    </div>


    {{-- show --}}
    <div class="row d-flex justify-content-center m-auto mt-5 container" style="padding-bottom: 30px;" data-aos="fade-up" data-aos-duration="1000">
        <div class="col d-flex justify-content-center" style="background-color: white; border-radius: 30px;">
            <div class="row d-flex justify-content-around mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M16.8311 15.6402C17.5011 15.2002 18.3811 15.6802 18.3811 16.4802V17.7702C18.3811 19.0402 17.3911 20.4002 16.2011 20.8002L13.0111 21.8602C12.4511 22.0502 11.5411 22.0502 10.9911 21.8602L7.80109 20.8002C6.60109 20.4002 5.62109 19.0402 5.62109 17.7702V16.4702C5.62109 15.6802 6.50109 15.2002 7.16109 15.6302L9.22109 16.9702C10.0111 17.5002 11.0111 17.7602 12.0111 17.7602C13.0111 17.7602 14.0111 17.5002 14.8011 16.9702L16.8311 15.6402Z" fill="#292D32"></path>
                                <path d="M19.9795 6.45859L13.9895 2.52859C12.9095 1.81859 11.1295 1.81859 10.0495 2.52859L4.02953 6.45859C2.09953 7.70859 2.09953 10.5386 4.02953 11.7986L5.62953 12.8386L10.0495 15.7186C11.1295 16.4286 12.9095 16.4286 13.9895 15.7186L18.3795 12.8386L19.7495 11.9386V14.9986C19.7495 15.4086 20.0895 15.7486 20.4995 15.7486C20.9095 15.7486 21.2495 15.4086 21.2495 14.9986V10.0786C21.6495 8.78859 21.2395 7.28859 19.9795 6.45859Z" fill="#292D32"></path>
                            </g>
                        </svg>
                        <h1 class="mt-3 ms-2">All Teachers</h1>
                    </div>
                </div>
                @if (count($filteredTeachers) > 0)
                @else
                    <div class="col-12">
                        <a class="d-flex justify-content-center mt-3 text-decoration-none text-dark">No teacher found</a>
                    </div>
                @endif

                <div class="col-12 d-flex flex-wrap justify-content-around align-items-center gap-2 m-5">
                    @php $count = 0; @endphp
                    @foreach ($filteredTeachers as $index => $teacher)
                        @if ($teacher->userIsTeacher == 1)
                            <div class="card mt-2 col-md-5 d-flex p-0 justify-content-around" style="width: 240px; height: 350px; background-color: #ffffff;">
                                <div class="container d-flex shadow imgcard justify-content-around">
                                    <div class="imgcards d-flex " style="overflow: hidden;">
                                        <img class="card-img-top b-3 " src="{{ asset('storage/'.$teacher->photo) }}" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>

                                <div class="card-body idxz d-flex gap-2 row shadow rounded-4 justify-content-center" style="background-color: #FF8BA7;">
                                    <h5 class="d-flex justify-content-center align-items-center" style="width: 100%;">{{ $teacher->name }}</h5>
                                    <div style="background-color: black; height: 1px; width: 100%;"></div>
                                    <div class="d-flex justify-content-center align-items-center gap-1">
                                        <img src="{{ asset('img/email.png') }}" style="width: 20px; height: 15px;"> {{ $teacher->email }}
                                    </div>
                                    <div class="d-flex viewbt justify-content-center mt-2 align-items-center" style="width: 100px;">
                                        <a class="col d-flex justify-content-around btn rounded-5 viewbt" style="background-color: #C3F0CA;" href="/viewTeacher/{{ $teacher->name }}">View</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>





</section>

@php
    $filteredCities = $cities->groupBy('province')->map->pluck('city')->all();
    $encodedCities = json_encode($filteredCities);
@endphp

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#province').on('change', function() {
            var province = $(this).val();
            console.log("Selected province:", province);

            // Clear the city dropdown
            $('#city').empty().append('<option value="">City</option>');

            // If a province is selected
            if (province) {
                // Fetch the cities for the selected province via AJAX
                $.ajax({
                    url: '/fetch-cities', // Replace with the URL to your server-side endpoint
                    method: 'GET',
                    data: { province: province },
                    success: function(response) {
                        // Populate the city dropdown with the received cities
                        var cities = response.cities || [];
                        console.log(cities)
                        $.each(cities, function(index, city) {
                            $('#city').append($('<option>', {
                                value: city,
                                text: city
                            }));
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log('An error occurred while fetching cities:', error);
                    }
                },
                );
            }
        });

        // Trigger the change event on page load
        $('#province').trigger('change');
    });



</script>

<script>
    $(document).ready(function() {
        $('#price-range-select').on('change', function() {
            var priceRange = $(this).val();
            var [minPrice, maxPrice] = priceRange.split('-');

            // Set the values of the min and max price inputs
            $("#min-price-input").val(minPrice);
            $("#max-price-input").val(maxPrice);
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Change background color on selection change
        $('.filterbutton').on('change', function() {
            var selectedOption = $(this).find('option:selected');
            var bgColor = selectedOption.val() ? '#FFC6C7' : '#FF8BA7';
            $(this).css('background-color', bgColor);
        });
    });
</script>
@endsection
