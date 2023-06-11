@extends('Question.layouts.mainFillblank')

@section('content')

    <div class="greyy" id="barrier"></div>
    <div class="upper">

        <svg class="back-button" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /> </svg>

        <div class="progress" id="process-bar">
            <div class="progress-bar" id="processing" role="progressbar" style="width: 80%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                <div id="process2"></div>
            </div>
        </div>
    </div>

    <div class="maincont">
        <h3 class="theme">Fill in The Blank</h3>
        <h3 class="question">くりす は わたし ... おとうと です</h3>
        <h4 class="question2">Kurisu wa watashi ... otouto desu</h4>

        <div class="choices">
            <button class="ans" onclick="showDiv('1')">
                <h4 class="answer">の (no)</h4>
            </button>

            <button class="ans" onclick="showDiv('2')">
                <h4 class="answer">ろ (to)</h4>
            </button>

            <button class="ans" onclick="showDiv('2')">
                <h4 class="answer">わ (wa)</h4>
            </button>
        </div>

    </div>

    <div class="downer" id="5">
        <button class="skib" onclick="showDiv('2')">SKIP</button>
    </div>


@endsection
