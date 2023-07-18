@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">トイレ は どこ ですか？</h3>
    <h3 class="question1">toire wa doko desuka?</h3>
    <h3 class="question1">reply the dialog</h3>

    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">トイレの間違い</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">接続待ちのトイレ</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">すぐそこにあります。</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection

