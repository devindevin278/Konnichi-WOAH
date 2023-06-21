@extends('Question.layouts.mainMulti')

@section('content')

@include('Question.layouts.progress')

    <div class="maincont">
        <h3 class="question">くりすさん, またあした</h3>
        <h3 class="question2">Kurisu-san, mata-ashita </h3>
        <div class="choices">
            <button class="ans" onclick="showDiv('2')">
                <h5 class="num">1</h5>
                <h4 class="answer">nice to meet you, Chris</h4>
                <h5 class="num" style="display: none">1</h5>
            </button>

            <button class="ans" onclick="showDiv('1')">
                <h5 class="num">2</h5>
                <h4 class="answer">See you tomorrow, Chris</h4>
                <h5 class="num" style="display: none">1</h5>
            </button>

            <button class="ans" onclick="showDiv('2')">
                <h5 class="num">3</h5>
                <h4 class="answer">Excuse me, Chris</h4>
                <h5 class="num" style="display: none">1</h5>
            </button>
        </div>

    </div>


@endsection
