@extends('Question.layouts.mainPairs')

@section('content')

@include('Question.layouts.progress')

    <div id="game">
        <h3 class="theme">Select the Matching Pairs</h3>
        <div id="boards">
            <div id="board-left">
                <div class="card" data-card="1">さよなら </div>
                <div class="card" data-card="2">よろしく </div>
                <div class="card" data-card="3">すみません </div>
                <div class="card" data-card="4">ただいま </div>
              </div>
              <div id="board-right">
                  <div class="card" data-card="1">Sayonara </div>
                <div class="card" data-card="2">Yoroshiku </div>
                <div class="card" data-card="3">Sumimasen </div>
                <div class="card" data-card="4">Tadaima </div>
              </div>
            </div>
        </div>
        <div class="downer" id="5">
            {{-- <button id="reset">Reset</button> --}}
            <button class="skib" onclick="showDiv('2')">SKIP</button>
        </div>

@endsection
