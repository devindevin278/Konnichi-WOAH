@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">甘い食べ物です</h3>
    <h3 class="question1">Amai tabemonodesu</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">It's a bitter food</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">It's a sour food</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">It's a sweet food</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection

