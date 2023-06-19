@extends('Question.layouts.mainMulti')

@section('content')

@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">けんさん は やさしい ひと です</h3>
    <h3 class="question2">Ken san wa yasashii hito desu</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('1')">
            <h5 class="num">1</h5>
            <h4 class="answer">Ken is a kind guy</h4>
            <h5 class="num" style="display: none">1</h5>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h5 class="num">2</h5>
            <h4 class="answer">Ken known a guy</h4>
            <h5 class="num" style="display: none">1</h5>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h5 class="num">3</h5>
            <h4 class="answer">Ken had a brother</h4>
            <h5 class="num" style="display: none">1</h5>
        </button>
    </div>

</div>

<div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div>


@endsection


