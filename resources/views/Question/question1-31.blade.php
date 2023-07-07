@extends('Question.layouts.mainPairs')

@section('content')

    @include('Question.layouts.progress')

    <div id="game">
        <h3 class="theme">Select the Matching Pairs</h3>
        <div id="boards">
            <div id="board-left">
                <div class="card" data-card="1">ごめんなさい</div>
                <div class="card" data-card="2">お願いします</div>
                <div class="card" data-card="3">おはようございます</div>
                <div class="card" data-card="4">こんにちわ</div>
              </div>
              <div id="board-right">
                  <div class="card" data-card="1">Gomennasai</div>
                <div class="card" data-card="2">Onegaishimasu</div>
                <div class="card" data-card="3">Ohayougozaimasu</div>
                <div class="card" data-card="4">Konnichiwa</div>
              </div>
            </div>
        </div>
        {{-- <div class="downer" id="5">
            <button class="skib" onclick="showDiv('2')">SKIP</button>
        </div> --}}

@endsection
