@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">お久しぶりです。お元気でしたか？</h3>
    <h3 class="question2">reply the dialog</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">失礼します、参ります。 </h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">久しぶりですね、元気でしたよ。</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">早くお大事に、薬を飲んでね </h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection
