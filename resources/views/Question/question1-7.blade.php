@extends('Question.layouts.mainPairs')

@section('content')
    {{-- @include('partials.navbarStudent') --}}
    <div class="greyy" id="barrier"></div>
    <div class="upper">
        <svg class="back-button" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /> </svg>

        <div class="progress" id="process-bar">
            <div class="progress-bar" id="processing" role="progressbar" style="width: 70%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                <div id="process2"></div>
            </div>
        </div>
    </div>

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
