@extends('Question.layouts.mainMulti')

@section('content')

@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">電車 は 何時 に 着くですか？</h3>
    <h3 class="question1">Densha wa nanji ni kimasu ka?</h3>
    <h3 class="question1">reply the dialog</h3>

    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">電車はここには来ません</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">電車は30分ごとに来ます</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">今日は電車が使えない</h4>
        </button>
    </div>

</div>

<div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div>


@endsection

