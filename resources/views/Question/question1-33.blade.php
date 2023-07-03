@extends('Question.layouts.mainPairs')

@section('content')

    @include('Question.layouts.progress')

    <div id="game">
        <h3 class="theme">Select the Matching Pairs</h3>
        <div id="boards">
            <div id="board-left">
                <div class="card" data-card="1">お大事に </div>
                <div class="card" data-card="2">お久しぶりです</div>
                <div class="card" data-card="3">元気 です</div>
                <div class="card" data-card="4">お邪魔します</div>
              </div>
              <div id="board-right">
                  <div class="card" data-card="1">Odaijini</div>
                <div class="card" data-card="2">Ohisashiburidesu</div>
                <div class="card" data-card="3">Genki desu</div>
                <div class="card" data-card="4">Ojamashimasu</div>
              </div>
            </div>
        </div>
        <div class="downer" id="5">
            <button class="skib" onclick="showDiv('2')">SKIP</button>
        </div>

@endsection
