@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">地下鉄 は どうやって 行きますか？</h3>
    <h3 class="question1">chikatetsu wa douyatte ikimasuka?</h3>
    <h3 class="question1">reply the dialog</h3>

    <div class="choices">
        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">ちかてつはまっすぐ行くと行けます。</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">ちかてつが繋がらない。</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">チカテツはどこにもいない。</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection

