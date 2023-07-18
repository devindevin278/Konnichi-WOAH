@extends('Question.layouts.mainPairs')

@section('content')
    @include('Question.layouts.progress')

    <div id="game">
        <h3 class="theme">Select the Matching Pairs</h3>
        <div id="boards">
            <div id="board-left">
                <div class="card" data-card="1">おかし</div>
                <div class="card" data-card="2">コーヒー</div>
                <div class="card" data-card="3">おちゃ</div>
                <div class="card" data-card="4">ケーキ</div>
              </div>
              <div id="board-right">
                  <div class="card" data-card="1">Sweets</div>
                <div class="card" data-card="2">Coffee</div>
                <div class="card" data-card="3">Green tea</div>
                <div class="card" data-card="4">Cake</div>
              </div>
            </div>
        </div>
        {{-- <div class="downer" id="5">
            <button class="skib" onclick="showDiv('2')">SKIP</button>
        </div> --}}

@endsection
