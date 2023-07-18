@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">いらっしゃいませ</h3>
    <h3 class="question1">Irasshaimase</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">Good afternoon</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">Nice to meet you</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">Welcome</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection

