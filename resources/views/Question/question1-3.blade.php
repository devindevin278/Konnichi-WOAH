@extends('Question.layouts.mainFillblank')

@section('content')


    {{-- @include('partials.navbarStudent') --}}

    @include('Question.layouts.progress')

    <div class="maincont">
        <h3 class="theme">Fill in The Blank</h3>
        <h3 class="question">わたしの ..... はくりす です </h3>
        <h4 class="question2">watashi no ..... wa kurisu desu </h4>
        <div class="choices">
            <button class="ans" onclick="showDiv('2')">
                <h4 class="answer">ことば(kotoba)</h4>
            </button>

            <button class="ans" onclick="showDiv('2')">
                <h4 class="answer">こたえ(kotae)</h4>
            </button>

            <button class="ans" onclick="showDiv('1')">
                <h4 class="answer">なまえ(namae)</h4>
            </button>
        </div>

    </div>

 

    {{-- <div class="corr" id="1" style="display: none">
        <svg class="correctsign"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
        </svg>
        <h2 class="ann" style="color:#259559">Amazing!</h2>
        <button class="continue">Continue</button>
    </div> --}}
{{--
    <div class="wrronk" id="2" style="display: none">
        <svg class="wrongsign" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
        </svg>
        <div class="ann">
            <h2 style="color: #EE282D; font-size: 1.9vw;">Correct Solution :</h2>
            <h3 style="color: #EE282D; font-size: 1.5vw;">なまえ(namae)</h3>
        </div>
        <button class="continue" style="background: #FF4347; box-shadow: 0px 4px 0px #EE282D;;">Continue</button>

    </div> --}}



@endsection
