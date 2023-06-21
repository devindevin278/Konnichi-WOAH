@extends('Question.layouts.mainMulti')

@section('content')

@include('Question.layouts.progress')

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


    @endsection
