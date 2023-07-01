@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">Please take care of me</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">お大事に 失礼 します</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">いい 天気 です ね</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">どうぞ よろしく</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection

