@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">(ordering) For one people</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">一つ [hitotsu]</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">ふたつ [futatsu]</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">みつ [mitsu]</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection

