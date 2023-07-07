@extends('Question.layouts.mainPairs')

@section('content')

    @include('Question.layouts.progress')

    <div id="game">
        <h3 class="theme">Select the Matching Pairs</h3>
        <div id="boards">
            <div id="board-left">
                <div class="card" data-card="1">また 明日</div>
                <div class="card" data-card="2">ただいま</div>
                <div class="card" data-card="3">おかえりなさい</div>
                <div class="card" data-card="4">いってらっしゃい</div>
              </div>
              <div id="board-right">
                  <div class="card" data-card="1">Mata ashita</div>
                <div class="card" data-card="2">Tadaima</div>
                <div class="card" data-card="3">Okaerinasai</div>
                <div class="card" data-card="4">Itterashai</div>
              </div>
            </div>
        </div>
        {{-- <div class="downer" id="5">
            <button class="skib" onclick="showDiv('2')">SKIP</button>
        </div> --}}

@endsection
