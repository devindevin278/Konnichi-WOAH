@extends('Question.layouts.mainMulti')

@section('content')

@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">こんばんわ、 おやすみなさいますか？</h3>
    <h3 class="question1">Konbanwa, oyasuminasaimasu ka?</h3>
    <h3 class="question1">reply the dialog</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">こんにちわ</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">いいえ、 ごめんなさい</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">はい、 おやすみなさい</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection

