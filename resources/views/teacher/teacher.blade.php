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
    <div class="row d-flex justify-content-center m-auto container">

        <div class="col d-flex justify-content-around " style="font-weight:600; ">
            <div class="d-flex align-items-center" style="width:50%;" >
                <img class="me-2" src="{{ asset('storage/'.auth()->user()->photo) }}" style="
                            background-color: solid #FF8BA7;

                            height: 50px;
                            width: 50px;
                            border-radius: 50%;
                            overflow:hidden;" >
                {{ auth()->user()->name }}
            </div>
            <div class="d-flex align-items-center justify-content-end" style="width:50%;" >
                <img src="img/loc.png" alt="" style="width:50px; height:fit-in;">
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
                            <svg width="30px" height="30px"  viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#09EE09;stroke:#007300;stroke-width:3;" d="M 4,36 C 8,42 26,73 31,93 38,82 44,63 98,12 78,22 51,44 33,60 26,55 18,44 4,36 z"></path> </g></svg></button>

                        <button type="submit" name="refresh" value="1" class="btn refbut ms-3" >
                            <svg width="30px" height="30px" viewBox="0 0 600 600" version="1.1" id="svg9724" sodipodi:docname="refresh.svg" inkscape:version="1.2.2 (1:1.2.2+202212051550+b0a8486541)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs id="defs9728"></defs> <sodipodi:namedview id="namedview9726" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" showgrid="true" inkscape:zoom="0.84179691" inkscape:cx="377.16936" inkscape:cy="380.73316" inkscape:window-width="1920" inkscape:window-height="1009" inkscape:window-x="0" inkscape:window-y="1080" inkscape:window-maximized="1" inkscape:current-layer="g11314"> <inkscape:grid type="xygrid" id="grid9972" originx="0" originy="0"></inkscape:grid> </sodipodi:namedview> <g id="g10449" transform="matrix(0.95173205,0,0,0.95115787,13.901174,12.168794)" style="stroke-width:1.05103"> <g id="path10026" inkscape:transform-center-x="-0.59233046" inkscape:transform-center-y="-20.347403" transform="matrix(1.3807551,0,0,1.2700888,273.60014,263.99768)"></g> <g id="g11314" transform="matrix(1.5092301,0,0,1.3955555,36.774048,-9.4503933)" style="stroke-width:50.6951"> <g id="g4738" transform="translate(33.390292,-2.3132277e-4)"> <g id="g4820" transform="translate(-13.566924,-0.49606829)"> <g id="g4870"> <path style="color:#ff0000;fill:#ff0000;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none;paint-order:stroke fill markers" d="M 169.06641,-1.8984375 C 96.494713,-2.1954238 31.246621,46.74277 6.8925781,118.9707 a 28.9498,28.9498 0 0 0 18.1835939,36.68164 28.9498,28.9498 0 0 0 36.68164,-18.18359 C 79.914455,83.620739 127.66741,51.662548 178.18945,56.464844 c 50.52205,4.802299 93.1616,45.878476 102.47657,102.578126 a 28.9498,28.9498 0 0 0 33.25976,23.875 28.9498,28.9498 0 0 0 23.875,-33.25977 C 324.5709,69.128635 261.9621,6.2681197 183.66992,-1.1738281 c -4.89326,-0.4651215 -9.7654,-0.7048103 -14.60351,-0.7246094 z" id="path237-3"></path> <path style="color:#ff0000;fill:#ff0000;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none" d="M -3.5761719,75.59375 A 28.971347,28.971347 0 0 0 -27.863281,108.6543 l 12.892578,83.5039 a 28.971347,28.971347 0 0 0 48.685547,16.48242 L 91.734375,152.9707 A 28.971347,28.971347 0 0 0 82.263672,105.10352 L 11.349609,77.267578 A 28.971347,28.971347 0 0 0 -3.5761719,75.59375 Z" id="path4688"></path> </g> </g> </g> <g id="g4738-0" transform="matrix(-0.9491645,0,0,-0.95013436,337.48629,450.95201)" style="stroke-width:53.383"> <g id="g4816"> <path style="color:#ff0000;fill:#ff0000;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none;paint-order:stroke fill markers" d="M 186.21484,1.40625 C 109.77501,1.0937902 41.036165,52.586526 15.373047,128.61914 a 30.484751,30.484751 0 0 0 19.134765,38.63281 30.484751,30.484751 0 0 0 38.632813,-19.13476 C 92.264679,91.457984 142.58214,57.806859 195.83203,62.863281 c 53.24989,5.056427 98.16571,48.295939 107.97656,107.953129 a 30.484751,30.484751 0 0 0 35.02735,25.13476 30.484751,30.484751 0 0 0 25.13281,-35.02734 C 350.0273,76.149625 284.05908,9.9964541 201.5957,2.1660156 196.44174,1.6766137 191.31083,1.4270807 186.21484,1.40625 Z" id="path237-3-9"></path> <path style="color:#ff0000;fill:#ff0000;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none" d="M 7.5019531,82.652344 A 30.507401,30.507401 0 0 0 -21.246094,117.78125 l 13.5839846,87.88867 a 30.507401,30.507401 0 0 0 51.2539064,17.36133 l 61.126953,-58.5918 A 30.507401,30.507401 0 0 0 94.746094,114.01953 L 20.035156,84.722656 A 30.507401,30.507401 0 0 0 7.5019531,82.652344 Z" id="path4688-3"></path> </g> </g> </g> </g> </g></svg>
                        </button>
                    </div>

                </div>

            </form>


    </div>


    {{-- show --}}
    <div class="row d-flex justify-content-center m-auto mt-5 container">
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
