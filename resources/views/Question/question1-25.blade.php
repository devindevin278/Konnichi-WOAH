@extends('Question.layouts.mainPairs')

@section('content')

    @include('Question.layouts.progress')

    <div id="game">
        <h3 class="theme">Select the Matching Pairs</h3>
        <div id="boards">
            <div id="board-left">
                <div class="card" data-card="1">お大事に </div>
                <div class="card" data-card="2">ごめん ください </div>
                <div class="card" data-card="3">よろしく </div>
                <div class="card" data-card="4">ただいま </div>
              </div>
              <div id="board-right">
                  <div class="card" data-card="1">Odaijini</div>
                <div class="card" data-card="2">Gomen kudasai </div>
                <div class="card" data-card="3">Yoroshiku</div>
                <div class="card" data-card="4">Tadaima</div>
              </div>
            </div>
        </div>
        {{-- <div class="downer" id="5">
            <button class="skib" onclick="showDiv('2')">SKIP</button>
        </div> --}}

@endsection
