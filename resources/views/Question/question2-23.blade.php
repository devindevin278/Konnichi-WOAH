@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">コーヒーをふたつください。</h3>
    <h3 class="question1">Kōhī o futatsu kudasai.</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">tables for one, please</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">Two coffees, please</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">Two Curry, please</h4>
        </button>
    </div>

</div>

<div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div>


@endsection

