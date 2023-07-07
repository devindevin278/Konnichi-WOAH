@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">Be careful on your way home </h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">帰り道で気をつけてください。</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">行ってきます。朝食、ありがとうございました。</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">お帰りなさい、お疲れ様ですね。</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection
