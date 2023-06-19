@extends('Question.layouts.mainMulti')

@section('content')

@include('Question.layouts.progress')

    <div class="maincont">
        <h3 class="question">こんばんは、わたしのなまえはクリスです </h3>
        <h4 class="question2">Konbanwa, watashi no namae wa kurisu desu</h4>

        <div class="choices">
            <button class="ans" onclick="showDiv('2')">
                <h5 class="num">1</h5>
                <h4 class="answer">Good morning, his name is Chris</h4>
                <h5 class="num" style="display: none">1</h5>
            </button>

            <button class="ans" onclick="showDiv('2')">
                <h5 class="num">2</h5>
                <h4 class="answer">Nice to meet you, I'm Chris</h4>
                <h5 class="num" style="display: none">1</h5>
            </button>

            <button class="ans" onclick="showDiv('1')">
                <h5 class="num">3</h5>
                <h4 class="answer">Good evening, my name is Chris</h4>
                <h5 class="num" style="display: none">1</h5>
            </button>
        </div>

    </div>

    <div class="downer" id="5">
        <button class="skib" onclick="showDiv('2')">SKIP</button>
    </div>


    @endsection
