@extends('Question.layouts.mainMulti')

@section('content')

    <div class="greyy" id="barrier"></div>
    <div class="upper">

        <svg class="back-button" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /> </svg>

        <div class="progress" id="process-bar">
            <div class="progress-bar" id="processing" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                <div id="process2"></div>
            </div>
        </div>
    </div>

    <div class="maincont">
        <h3 class="question">かれはクリスのおとうとのケンです</h3>
        <h4 class="question2">Kare wa Kurisu no otouto no Ken desu</h4>
        <div class="choices">
            <button class="ans" onclick="showDiv('2')">
                <h5 class="num">1</h5>
                <h4 class="answer">She is Chris's mother</h4>
                <h5 class="num" style="display: none">1</h5>
            </button>

            <button class="ans" onclick="showDiv('1')">
                <h5 class="num">2</h5>
                <h4 class="answer">He is Chris's brother, Ken</h4>
                <h5 class="num" style="display: none">1</h5>
            </button>

            <button class="ans" onclick="showDiv('2')">
                <h5 class="num">3</h5>
                <h4 class="answer">Chris brings his brother's sword</h4>
                <h5 class="num" style="display: none">1</h5>
            </button>
        </div>

    </div>

    <div class="downer" id="5">
        <button class="skib" onclick="showDiv('2')">SKIP</button>
    </div>


    @endsection
