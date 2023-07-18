@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">お母さん おにぎり お 食べません</h3>
    <h3 class="question2">Okāsan onigiri o tabemasen</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">Mom is eating the rice balls</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">Mom ate the rice balls</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">Mom doesn't eat rice balls</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection

