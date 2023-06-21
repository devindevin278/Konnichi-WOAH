@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">どうぞよろしく</h3>
    <h3 class="question2">douzo yoroshiku</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h5 class="num">1</h5>
            <h4 class="answer">Hello</h4>
            <h5 class="num" style="display: none">1</h5>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h5 class="num">2</h5>
            <h4 class="answer">Please help</h4>
            <h5 class="num" style="display: none">1</h5>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h5 class="num">3</h5>
            <h4 class="answer">Nice to meet you</h4>
            <h5 class="num" style="display: none">1</h5>
        </button>
    </div>

</div>



@endsection
