@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">ドーナツを四つください！</h3>
    <h3 class="question1">Dōnatsu o yottsu kudasai!</h3>

    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">I want donuts, please</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">Four donuts, please</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">How much for the donuts?</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection

