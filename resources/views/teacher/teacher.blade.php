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
    <div class="row d-flex justify-content-center" >


            <form action="/teacher" method="GET">
                @csrf

                <div class="d-flex col gap-3 justify-content-center">
                    {{-- Province --}}
                    <div class="d-flex align-item-center mt-4">
                        <select class="form-select filterbutton" id="province" name="province" style="background-color: #FF8BA7; width: 170px;">
                            <option value="">Province</option>
                            @foreach ($provinces as $province)
                            <option value="{{ $province }}" @if ($province == request('province')) selected @endif>{{ $province }}</option>
                            @endforeach

                        </select>
                    </div>

                    {{-- City --}}
                    <div class="d-flex align-item-center mt-4">
                        <select class="form-select filterbutton" id="city" name="city" style="background-color: #FF8BA7; width: 170px;">
                            <option value="">City</option>
                            @foreach ($cities as $city)
                            <option value="{{ $city }}" @if ($city == request('city')) selected @endif>{{ $city }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Price --}}

                    <div class="d-flex align-item-center mt-4 gap-3">
                        <select class="form-select filterbutton" name="price_range" id="price-range-select" style="background-color: #FF8BA7; width: 170px;">
                            <option value="">Price</option>
                            <option value="100000-200000" style="border-radius: 5px;">100k - 200k</option>
                            <option value="201000-300000" style="border-radius: 5px;">201k - 300k</option>
                            <option value="301000-400000" style="border-radius: 5px;">301k - 400k</option>
                        </select>
                    </div>



                    <div class="d-flex col justify-content-end mt-3">

                        <button type="submit" class="btn filbut" style="width: 120px; background-color: #C3F0CA; font-weight: 500;">Apply Filter</button>

                        <button type="submit" name="refresh" value="1" class="btn refbut ms-3" style="width: 120px; background-color: #FFC6C7; font-weight: 500;">Refresh</button>
                    </div>

                </div>

            </form>


    </div>

    <div class="row d-flex justify-content-center" >
        <div class="row d-flex justify-content-around mt-5" style="border-radius: 30px;">



                <div class="row d-flex justify-content-center" style="background-color: white;  border-radius: 30px;">
                    <div class="row d-flex justify-content-around">
                        <h4 class="d-flex justify-content-center mt-5">All Teachers</h4>
                        @if (count($filteredTeachers) > 0)
                        @else
                            <a class="d-flex justify-content-center mt-3 text-decoration-none text-dark">No teacher found</a>
                        @endif

                        <div class="d-flex row justify-content-around align-items-center gap-2 m-5" >
                            @foreach ($filteredTeachers as $teacher)
                                <div class="d-flex row justify-content-center" >
                                    @if ($teacher->userIsTeacher == 1)
                                        <div class="d-flex col align-items-center ">
                                            <div class="d-flex col align-items-center ">
                                                <img src="{{ asset('storage/'.$teacher->photo) }}"
                                                    style="width: 70px; height: 70px;  border-radius: 50%;">
                                                <div class="ms-3">
                                                    {{ $teacher->name }}
                                                    <div>
                                                        <img src="{{ asset('img/email.png') }}"
                                                            style="width: 25px; height: 20px;"> {{ $teacher->email }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <a class="col btn btn-view" style="background-color:#C3F0CA; " href="/viewTeacher/{{ $teacher->name }}">View</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>

                @if ($unfilteredTeachers->isNotEmpty())
                    <div class="row d-flex justify-content-around mt-5" style="background-color: white; border-radius: 30px;">

                        <h4 class="d-flex justify-content-center mt-5">Other Teachers</h4>


                        <div class="d-flex row justify-content-around align-items-center gap-2 m-5" >
                            @foreach ($unfilteredTeachers as $teacher)
                                <div class="d-flex row justify-content-center" >
                                    @if ($teacher->userIsTeacher == 1)
                                        <div class="d-flex col align-items-center ">
                                            <div class="d-flex col align-items-center ">
                                                <img src="{{ asset('storage/'.$teacher->photo) }}"
                                                    style="width: 70px; height: 70px; border: solid #FF8BA7; border-radius: 50%;">
                                                <div class="ms-3">
                                                    {{ $teacher->name }}
                                                    <div>
                                                        <img src="{{ asset('img/email.png') }}"
                                                            style="width: 25px; height: 20px;"> {{ $teacher->email }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <a class="col btn btn-view" style="background-color:#C3F0CA; " href="#">View</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                    </div>
                @endif



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
                });
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
