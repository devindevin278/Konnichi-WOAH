@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">うどん ていしょくはいくらですか。</h3>
    <h3 class="question1">Udon teishoku wa ikuradesu ka?</h3>

    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">Where can I buy the udon set?</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">Is the udon set delicious?</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">How much for one udon set?</h4>
        </button>
    </div>

</div>

<div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div>


@endsection

