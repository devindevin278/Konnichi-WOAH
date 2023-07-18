@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">どれを飲みますか？</h3>
    <h3 class="question1">Dore o nomimasu ka?</h3>

    <div class="choices">
        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">Which one will you drink?</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">What is this drink?</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">Who give you this drink?</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection



