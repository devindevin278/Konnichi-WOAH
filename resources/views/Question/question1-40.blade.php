@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">早くお大事に、薬を飲んでね  </h3>
    <h3 class="question1">Hayaku o daiji ni, kusuri o nonde ne</h3>
    <h3 class="question1">reply the dialog</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">はい、 ありがとう ございます</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">まだです、これをしなければなりません</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">お帰りなさい、お疲れ様ですね。</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection
