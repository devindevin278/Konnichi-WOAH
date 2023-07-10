@extends('student.learn.layouts.main')

@section('learnContent')

    <div class="studentLeaderboard col-md-10">


        <div class="container mt-5 d-flex text-center align-items-center justify-content-center">
            <div class="row"> {{-- style="border:solid green;" --}}
                <div>
                    <img src="{{ asset('img/crown.png') }}" alt="crown">
                </div>
                <div style="font-weight:700; font-size:36px;">
                    TOP 20 GLOBAL
                </div>
                <div>
                    Top 20 global all over the world
                </div>
            </div>
        </div>

        <div class="row container mt-5 gap-4 d-flex justify-content-center mb-5">

            @foreach ($students as $student)
                <div class="row px-5">

                    <div class="leaderboardBox col d-flex  align-items-center p-2"
                        @if (auth()->user()->id == $student->id) style="background-color:#C3F0CA;" @else  style=" background-color:#ffffff; " @endif>
                        @if ($loop->iteration == 1)
                            <div class="ms-5">
                                <img src="{{ asset('img/juara1.png') }}" alt="crown">
                            </div>
                        @elseif ($loop->iteration == 2)
                            <div class="ms-5">
                                <img src="{{ asset('img/juara2.png') }}" alt="crown">
                            </div>
                        @elseif ($loop->iteration == 3)
                            <div class="ms-5">
                                <img src="{{ asset('img/juara3.png') }}" alt="crown">
                            </div>
                        @else
                            <div class="leaderboardText ms-5 text-center align-items-center"
                                style="color:#00B91D; width:45px;">
                                {{ $loop->iteration }}
                            </div>
                        @endif


                        @if (auth()->user()->id == $student->id)
                            <div class="ms-4">
                                @if ($student->photo)
                                <img class="leaderboard_photo" src="{{ asset('storage/'.$student->photo) }}" alt="crown">
                                @else
                                <img class="leaderboard_photo" src="{{ asset('img/pp4.png') }}" alt="crown">
                                @endif
                            </div>
                            <div class="leaderboardText justify-content-around ms-5" style="color:#00B91D;">
                                {{ $student->name }}
                            </div>
                            <div class="leaderboardText col mx-5 text-end" style="color:#00B91D;">
                                {{ $student->pointxp . ' XP' }}
                            </div>
                        @else
                            <div class="ms-4">
                                @if ($student->photo)

                                <img class="leaderboard_photo" src="{{ asset('storage/'.$student->photo) }}" alt="crown">
                                @else
                                <img class="leaderboard_photo" src="{{ asset('img/pp2.png') }}" alt="crown">
                                @endif
                            </div>
                            <div class="leaderboardText justify-content-around ms-5" style="color:#A08A8F;">
                                {{ $student->name }}
                            </div>
                            <div class="leaderboardText col mx-5 text-end" style="color:#A08A8F;">
                                {{ $student->pointxp . ' XP' }}
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach

            @if (!$students->contains(auth()->user()->id))
                @php
                    $allstudents = App\Models\User::where('userisTeacher', 0)
                        ->orderBy('pointxp', 'desc')
                        ->get();
                @endphp

                <h1 class="text-center">...</h1>

                @foreach ($allstudents as $student)
                    @if ($student->id == auth()->user()->id)
                        <div class="row px-5">
                            <div class="leaderboardBox col d-flex  align-items-center p-2"
                                style="background-color:#C3F0CA;;">
                                <div class="leaderboardText ms-5 text-center align-items-center"
                                    style="color:#00B91D; width:50px;">
                                    {{ $loop->iteration }}
                                </div>
                                <div class="ms-4">
                                    <img src="{{ asset('img/pp.png') }}" alt="crown">
                                </div>
                                <div class="leaderboardText justify-content-around ms-5" style="color:#00B91D;">
                                    {{ $student->name }}
                                </div>
                                <div class="leaderboardText col mx-5 text-end" style="color:#00B91D;">
                                    {{ $student->pointxp . ' XP' }}
                                </div>

                            </div>
                        </div>
                    @endif
                @endforeach
            @endif


        </div>


        @include('partials.footer')
    </div>





    @endsection
