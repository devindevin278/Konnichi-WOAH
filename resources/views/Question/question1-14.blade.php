@extends('Question.layouts.mainPairs')

@section('content')

    @include('Question.layouts.progress')

    <div id="game">
        <h3 class="theme">Select the Matching Pairs</h3>
        <div id="boards">
            <div id="board-left">
                <div class="card" data-card="1">また 明日 </div>
                <div class="card" data-card="2">助けて </div>
                <div class="card" data-card="3">おめでと </div>
                <div class="card" data-card="4">気をつけて </div>
              </div>
              <div id="board-right">
                  <div class="card" data-card="1">Mata ashita</div>
                <div class="card" data-card="2">Tasukete </div>
                <div class="card" data-card="3">Omedeto</div>
                <div class="card" data-card="4">Kiwotsukete</div>
              </div>
            </div>
        </div>
        <div class="downer" id="5">
            <button class="skib" onclick="showDiv('2')">SKIP</button>
        </div>

@endsection
