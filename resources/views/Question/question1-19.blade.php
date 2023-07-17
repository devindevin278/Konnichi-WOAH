@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">も 午後です、 行ってきます</h3>
    <h3 class="question1">Mo gogodesu, ittekimasu</h3>
    <h3 class="question1">reply the dialog</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">助けて ください</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">はい、 行ってらしゃい</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">だいじょぶ です</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection


