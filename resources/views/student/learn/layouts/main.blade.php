@extends('layouts.mainStudent')

    @section('content')

    <div class="container-fluid">
        {{-- <div class="row">

            <main class="col-md-5 ms-sm-auto col-lg-10 px-md-4 me-0 pe-0">
            </main>

            <div class="col-md-3" id="progress_sidebar">
            </div>

        </div> --}}

        <div class="row">
            {{-- <div class="col"> --}}

                @include('student.learn.layouts.sidebar')
                {{-- </div> --}}
                <div class="col-md-7">

                    @yield('learnContent')
                </div>
                <div class="col-md-3" id="progress_sidebar">

                    @include('student.learn.layouts.progress')
            </div>
        </div>
    </div>

@endsection
