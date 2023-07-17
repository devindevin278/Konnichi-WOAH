@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">お手紙ありがとうございました。嬉しかったです。</h3>
    <h3 class="question1">O tegami arigatōgozaimashita. Ureshikattadesu.</h3>
    <h3 class="question1">reply the dialog</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">おやすみなさい。良い夢を見てくださいね。</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">すみません、わかりません。 </h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">どういたしまして。また書きますね。</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection
