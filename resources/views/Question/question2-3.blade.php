@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">レストラン</h3>
    <h3 class="question1">resutoran</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">Restaurant</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">Kafe</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">Convenience store</h4>
        </button>
    </div>

</div>

<div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div>


@endsection
