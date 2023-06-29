@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">I'm going</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">行ってきます</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">ただいま</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">行ってらしゃい </h4>
        </button>
    </div>

</div>

<div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div>


@endsection


