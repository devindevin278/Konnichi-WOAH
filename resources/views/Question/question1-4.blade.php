@extends('Question.layouts.mainPairs')

@section('content')
    @include('Question.layouts.progress')

    <div id="game">
        <h3 class="theme">Select the Matching Pairs</h3>
        <div id="boards">
            <div id="board-left">
                <div class="card" data-card="1">おはよう </div>
                <div class="card" data-card="2">こんばんわ </div>
                <div class="card" data-card="3">こんにちわ </div>
                <div class="card" data-card="4">はじめまして </div>
              </div>
              <div id="board-right">
                  <div class="card" data-card="1">Ohayou</div>
                <div class="card" data-card="2">Konbanwa </div>
                <div class="card" data-card="3">Konnichiwa</div>
                <div class="card" data-card="4">Hajimemashite</div>
              </div>
            </div>
        </div>
        <div class="downer" id="5">
            <button class="skib" onclick="showDiv('2')">SKIP</button>
        </div>

@endsection
