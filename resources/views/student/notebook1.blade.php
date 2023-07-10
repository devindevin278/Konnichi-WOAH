@extends('layouts.mainStudent')

@section('content')


    <div class="px-5 note-page notebook">
        {{-- <a href="\learnStudent\games"> --}}
            {{-- <svg class="note-back-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg> --}}

              {{-- </a> --}}
              <a class="col btn btn-back mt-3 ms-5 mb-5" style="background-color:#FFC6C7; text-transform:none;" href="/learnStudent/games">Back</a>

        <div class="note-header">
            <img src="{{ asset('/Assets/notecat.png') }}" class="note-img" style="margin-top: -1vw">

            <div class="note-title">
                <p>
                    Level {{ $notebooks[0]->unit->id }} Notebook
                </p>
                <p>{{ $notebooks[0]->unit->Content }}</p>
            </div>
                <img src="{{ asset('Assets/breadcat.png') }}" class="note-img" alt="">

        </div>

            <div class="note-list">
                @foreach ($notebooks as $notebook)

                <div class="note-dialog-chapter">
                    {{-- {{ $notebook->chats }} --}}
                    @foreach ($notebook->chats as $chat)


                    <div class="note-cont {{ $chat->position }}">
                        <div class="note-text-dialog">
                            <span class="note-span mb-0">
                                <button class="note-button">
                                    <audio src="{{ asset('audio_notebook/1/'.$chat->audio) }}"></audio>
                                    <svg class="note-button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M13.5 4.06c0-1.336-1.616-2.005-2.56-1.06l-4.5 4.5H4.508c-1.141 0-2.318.664-2.66 1.905A9.76 9.76 0 001.5 12c0 .898.121 1.768.35 2.595.341 1.24 1.518 1.905 2.659 1.905h1.93l4.5 4.5c.945.945 2.561.276 2.561-1.06V4.06zM18.584 5.106a.75.75 0 011.06 0c3.808 3.807 3.808 9.98 0 13.788a.75.75 0 11-1.06-1.06 8.25 8.25 0 000-11.668.75.75 0 010-1.06z" />
                                        <path d="M15.932 7.757a.75.75 0 011.061 0 6 6 0 010 8.486.75.75 0 01-1.06-1.061 4.5 4.5 0 000-6.364.75.75 0 010-1.06z" />
                                    </svg>
                                </button>
                            </span>


                            <p class="mt-0 fs-4">{{ $chat->kanji }}</p>
                            <p class="">{{ $chat->japan }}</p>
                            <p class="">{{ $chat->english }}</p>
                        </div>
                    </div>

                    {{-- <div class="note-cont b">
                        <div class="note-text-dialog">
                            <span class="note-span">
                                <button class="note-button">
                                    <svg class="note-button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M13.5 4.06c0-1.336-1.616-2.005-2.56-1.06l-4.5 4.5H4.508c-1.141 0-2.318.664-2.66 1.905A9.76 9.76 0 001.5 12c0 .898.121 1.768.35 2.595.341 1.24 1.518 1.905 2.659 1.905h1.93l4.5 4.5c.945.945 2.561.276 2.561-1.06V4.06zM18.584 5.106a.75.75 0 011.06 0c3.808 3.807 3.808 9.98 0 13.788a.75.75 0 11-1.06-1.06 8.25 8.25 0 000-11.668.75.75 0 010-1.06z" />
                                        <path d="M15.932 7.757a.75.75 0 011.061 0 6 6 0 010 8.486.75.75 0 01-1.06-1.061 4.5 4.5 0 000-6.364.75.75 0 010-1.06z" />
                                      </svg>
                                </button>
                            </span>
                            <h3>はじめまして、リナさん。私はタカシです。よろしくお願いします。</h3>
                            <h4>Hajimemashite, Rina-san. Watashi wa Takashi desu. Yoroshiku onegaishimasu.</h4>
                            <h4>Nice to meet you, Rina-san. I'm Takashi. Please take care of me.</h4>
                        </div>
                    </div> --}}

                    @endforeach
                </div>
            @endforeach

                {{-- <div class="note-dialog-chapter">
                    <div class="note-cont a">
                        <div class="note-text-dialog">
                            <span class="note-span">
                                <button class="note-button">
                                    <svg class="note-button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M13.5 4.06c0-1.336-1.616-2.005-2.56-1.06l-4.5 4.5H4.508c-1.141 0-2.318.664-2.66 1.905A9.76 9.76 0 001.5 12c0 .898.121 1.768.35 2.595.341 1.24 1.518 1.905 2.659 1.905h1.93l4.5 4.5c.945.945 2.561.276 2.561-1.06V4.06zM18.584 5.106a.75.75 0 011.06 0c3.808 3.807 3.808 9.98 0 13.788a.75.75 0 11-1.06-1.06 8.25 8.25 0 000-11.668.75.75 0 010-1.06z" />
                                        <path d="M15.932 7.757a.75.75 0 011.061 0 6 6 0 010 8.486.75.75 0 01-1.06-1.061 4.5 4.5 0 000-6.364.75.75 0 010-1.06z" />
                                      </svg>
                                </button>
                            </span>
                            <h3>お誕生日おめでとうございます！何歳になりましたか？</h3>
                            <h4>Otanjōbi omedetō gozaimasu! Nansai ni narimashita ka?</h4>
                            <h4>Happy birthday! How old did you turn?</h4>
                        </div>
                    </div>

                    <div class="note-cont b">
                        <div class="note-text-dialog">
                            <span class="note-span">
                                <button class="note-button">
                                    <svg class="note-button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M13.5 4.06c0-1.336-1.616-2.005-2.56-1.06l-4.5 4.5H4.508c-1.141 0-2.318.664-2.66 1.905A9.76 9.76 0 001.5 12c0 .898.121 1.768.35 2.595.341 1.24 1.518 1.905 2.659 1.905h1.93l4.5 4.5c.945.945 2.561.276 2.561-1.06V4.06zM18.584 5.106a.75.75 0 011.06 0c3.808 3.807 3.808 9.98 0 13.788a.75.75 0 11-1.06-1.06 8.25 8.25 0 000-11.668.75.75 0 010-1.06z" />
                                        <path d="M15.932 7.757a.75.75 0 011.061 0 6 6 0 010 8.486.75.75 0 01-1.06-1.061 4.5 4.5 0 000-6.364.75.75 0 010-1.06z" />
                                      </svg>
                                </button>
                            </span>
                            <h3>ありがとうございます。30歳になりました。</h3>
                            <h4>Arigatō gozaimasu. Sanjusai ni narimashita.</h4>
                            <h4>Thank you. I turned 30.</h4>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>

    </div>

    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script>
        play_buttons = document.getElementsByClassName('note-button')
        console.log(play_buttons)
        for(let i = 0; i< play_buttons.length; i++) {
            play_buttons[i].addEventListener('click', function() {
                play_buttons[i].childNodes[1].play()
            });
        }
    </script>
@endsection
