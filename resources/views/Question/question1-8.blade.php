@extends('Question.layouts.mainFillblank')

@section('content')

@include('Question.layouts.progress')

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
