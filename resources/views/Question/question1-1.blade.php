@extends('Question.layouts.mainFillblank')

@section('content')

    {{-- @include('partials.navbarStudent') --}}

    <div class="greyy" id="barrier"></div>
    <div class="upper">

        <svg class="back-button" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /> </svg>

        <div class="progress" id="process-bar">
            <div class="progress-bar" id="processing" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                <div id="process2"></div>
            </div>
        </div>
    </div>

    <div class="maincont">
        <h3 class="theme">Fill in The Blank</h3>
        <h4 class="question">..... , くりす です</h4>
        <h3 class="question2">....., kurisu desu </h3>
        <div class="choices">
            <button class="ans" onclick="showDiv('1')">
                <h4 class="answer">こんにちわ (konnichiwa)</h4>
            </button>

            <button class="ans" onclick="showDiv('2')">
                <h4 class="answer">あした(ashita)</h4>
            </button>

            <button class="ans" onclick="showDiv('2')">
                <h4 class="answer">さよなら(sayonara)</h4>
            </button>
        </div>

    </div>

    <div class="downer" id="5">
        <button class="skib" onclick="showDiv('2')">SKIP</button>
    </div>



@endsection
