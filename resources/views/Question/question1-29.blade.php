@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">お久しぶり です、 お元気 でした か？</h3>
    <h3 class="question2">reply the dialog</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">お久しぶりです、元気です</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">只今 戻りました</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">はい、 気をつけて ください</h4>
        </button>
    </div>

</div>

<div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div>


@endsection

