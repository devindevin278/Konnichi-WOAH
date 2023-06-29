@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">こんにちわ、 はじめまして</h3>
    <h3 class="question2">reply the dialog</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">はじめまして、 よろしく お願いします</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">さよなら、 また 明日</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">おやすみなさい</h4>
        </button>
    </div>

</div>

<div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div>


@endsection

