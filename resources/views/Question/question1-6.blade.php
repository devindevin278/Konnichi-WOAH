@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">ど いたしまして</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">You're welcome</h4>
        </button>
        
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">Thank you</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">For you</h4>
        </button>
    </div>

</div>


@endsection

