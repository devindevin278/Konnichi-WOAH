@extends('Question.layouts.mainPairs')

@section('content')
    @include('Question.layouts.progress')

    <div id="game">
        <h3 class="theme">Select the Matching Pairs</h3>
        <div id="boards">
            <div id="board-left">
                <div class="card" data-card="1">こうえん</div>
                <div class="card" data-card="2">えき</div>
                <div class="card" data-card="3">れすとらん</div>
                <div class="card" data-card="4">こんびに</div>
              </div>
              <div id="board-right">
                  <div class="card" data-card="1">Park</div>
                <div class="card" data-card="2">Station</div>
                <div class="card" data-card="3">Restaurant</div>
                <div class="card" data-card="4">Convenience Store</div>
              </div>
            </div>
        </div>
        <div class="downer" id="5">
            <button class="skib" onclick="showDiv('2')">SKIP</button>
        </div>

@endsection
