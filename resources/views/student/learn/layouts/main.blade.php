@extends('layouts.mainStudent')

    @section('content')

    <div class="container-fluid">


        <div class="row">
            {{-- <div class="col"> --}}

                @include('student.learn.layouts.sidebar')
                {{-- </div> --}}
                {{-- <div class="col-md-7"> --}}
                    @yield('learnContent')
                {{-- </div> --}}


        </div>
    </div>

@endsection
