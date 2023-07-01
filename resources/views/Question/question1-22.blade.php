@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">Get well soon</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">お大事に</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">お先 に</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">お幸せ に</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection
