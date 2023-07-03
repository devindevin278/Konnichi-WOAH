@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">お大事に、 早く よく なって ね!</h3>
    <h3 class="question2">reply the dialog</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">気をつけて 返って ください</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">お邪魔します</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">ありがとう ございます</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection

