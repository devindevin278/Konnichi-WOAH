@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">ご注文 は お決まり ですか?</h3>
    <h3 class="question1">Gochuumon wa okimari desu ka?</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">What can I do for you?</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">Have you decided what you want to order?</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">what can i help you with?</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection


