@extends('Question.layouts.mainFillblank')

@section('content')

    @include('Question.layouts.progress')


    <div class="maincont">
        <h3 class="theme">Fill in The Blank</h3>
        <h4 class="question">..... , くりす です</h4>
        <h3 class="question2">....., kurisu desu </h3>
        <div class="choices">
            <button class="ans" onclick="showDiv('1')">
                <h4 class="answer">こんにちわ (konnichiwa)</h4>
            </button>

            <button class="ans" onclick="showDiv('2')">
                <h4 class="answer">あした(ashita)</h4>
            </button>

            <button class="ans" onclick="showDiv('2')">
                <h4 class="answer">さよなら(sayonara)</h4>
            </button>
        </div>

    </div>

 



@endsection
