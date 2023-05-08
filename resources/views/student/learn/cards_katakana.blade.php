@extends('student.learn.layouts.main')

@section('learnContent')
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Katakana</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('edit.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" >
</head>
<body> --}}
    {{-- @include('partials.navbarStudent') --}}
<div class="col-md-10" style="background-color: #FAEEE7">
    <div class="content">

        <div class="linksec container my-4">
            <a href="/learnStudent/cards/hiragana" class="Hiralink" style="background-color: #FF8BA7">Hiragana</a>
            <a class="Katalink" style="opacity: 100%">Katakana</a>
        </div>

        <div class="whitebg container">
            <h1 class="text-center my-5">Katakana</h1>

            <div class="characterss ps-5">
                <div class="chara1 m-0 col-md-6">
                    <button id="A" class="flashcard">
                        <h3 style="margin-bottom:0">ア</h3>
                        <h4>A</h4>
                        <audio id="audio" class="audio" src="">
                        {{-- <audio id="audio" class="audio" src="{{ asset('audio/A.mp3') }}"> --}}
                            {{-- <source  type="audio/mpeg"> --}}
                            {{-- <source src="" type="audio/mpeg"> --}}
                        </audio>
                    </button>

                    <button id="I" class="flashcard">
                        <h3 style="margin-bottom:0">イ</h3>
                        <h4>I</h4>
                        <audio id="audio" class="audio" autoplay>
                            {{-- <source src="{{ asset('audio/I.mp3') }}" type="audio/mpeg"> --}}
                        </audio>
                    </button>

                    <button id="U" class="flashcard">
                        <h3 style="margin-bottom:0">ウ</h3>
                        <h4>U</h4>
                        <audio id="audio" class="audio" autoplay>
                            {{-- <source src="" type="audio/mpeg"> --}}
                        </audio>
                    </button>

                    <button id="E" class="flashcard">
                        <h3 style="margin-bottom:0">エ</h3>
                        <h4>E</h4>
                        <audio id="audio" class="audio" class="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="O" class="flashcard">
                        <h3 style="margin-bottom:0">オ</h3>
                        <h4>O</h4>
                        <audio id="audio" class="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>
                {{-- ------------------------------------------------------------------------------ --}}

                <button id="KA" class="flashcard">
                    <h3 style="margin-bottom:0">カ</h3>
                    <h4>KA</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="KI" class="flashcard">
                    <h3 style="margin-bottom:0">キ</h3>
                    <h4>KI</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="KU" class="flashcard">
                    <h3 style="margin-bottom:0">ク</h3>
                    <h4>KU</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="KE" class="flashcard">
                    <h3 style="margin-bottom:0">ケ</h3>
                    <h4>KE</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="KO" class="flashcard">
                    <h3 style="margin-bottom:0">コ</h3>
                    <h4>KO</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>
            {{-- ------------------------------------------------------------------------------ --}}

            <button id="SA" class="flashcard">
                <h3 style="margin-bottom:0">サ</h3>
                <h4>SA</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="SHI" class="flashcard">
                <h3 style="margin-bottom:0">シ</h3>
                <h4>SHI</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="SU" class="flashcard">
                <h3 style="margin-bottom:0">ス</h3>
                <h4>SU</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="SE" class="flashcard">
                <h3 style="margin-bottom:0">セ</h3>
                <h4>SE</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="SO" class="flashcard">
                <h3 style="margin-bottom:0">ソ</h3>
                <h4>SO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
        {{-- ------------------------------------------------------------------------------ --}}

                <button id="TA" class="flashcard">
                    <h3 style="margin-bottom:0">タ</h3>
                    <h4>TA</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="CHI" class="flashcard">
                    <h3 style="margin-bottom:0">チ</h3>
                    <h4>CHI</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="TSU" class="flashcard">
                    <h3 style="margin-bottom:0">ツ</h3>
                    <h4>TSU</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="TE" class="flashcard">
                    <h3 style="margin-bottom:0">テ</h3>
                    <h4>TE</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="TO" class="flashcard">
                    <h3 style="margin-bottom:0">ト</h3>
                    <h4>TO</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>
            {{-- ------------------------------------------------------------------------------ --}}

            <button id="NA" class="flashcard">
                <h3 style="margin-bottom:0">ナ</h3>
                <h4>NA</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="NI" class="flashcard">
                <h3 style="margin-bottom:0">ニ</h3>
                <h4>NI</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="NU" class="flashcard">
                <h3 style="margin-bottom:0">ヌ</h3>
                <h4>NU</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="NE" class="flashcard">
                <h3 style="margin-bottom:0">ネ</h3>
                <h4>NE</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="NO" class="flashcard">
                <h3 style="margin-bottom:0">ノ</h3>
                <h4>NO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            {{-- ------------------------------------------------------------------------------ --}}


        {{-- ------------------------------------------------------------------------------ --}}

        <button id="NA" class="flashcard">
            <h3 style="margin-bottom:0">ナ</h3>
            <h4>NA</h4>
            <audio id="audio" class="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="NI" class="flashcard">
            <h3 style="margin-bottom:0">ニ</h3>
            <h4>NI</h4>
            <audio id="audio" class="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="NU" class="flashcard">
            <h3 style="margin-bottom:0">ヌ</h3>
            <h4>NU</h4>
            <audio id="audio" class="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="NE" class="flashcard">
            <h3 style="margin-bottom:0">ネ</h3>
            <h4>NE</h4>
            <audio id="audio" class="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="NO" class="flashcard">
            <h3 style="margin-bottom:0">ノ</h3>
            <h4>NO</h4>
            <audio id="audio" class="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>
        {{-- ------------------------------------------------------------------------------ --}}

            <button id="HA" class="flashcard">
                <h3 style="margin-bottom:0">ハ</h3>
                <h4>HA</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="HI" class="flashcard">
                <h3 style="margin-bottom:0">ヒ</h3>
                <h4>HI</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="HU" class="flashcard">
                <h3 style="margin-bottom:0">フ</h3>
                <h4>FU</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="HE" class="flashcard">
                <h3 style="margin-bottom:0">ヘ</h3>
                <h4>HE</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="HO" class="flashcard">
                <h3 style="margin-bottom:0">ホ</h3>
                <h4>HO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
        {{-- ------------------------------------------------------------------------------ --}}

            <button id="MA" class="flashcard">
                <h3 style="margin-bottom:0">マ</h3>
                <h4>MA</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="MI" class="flashcard">
                <h3 style="margin-bottom:0">ミ</h3>
                <h4>MI</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="MU" class="flashcard">
                <h3 style="margin-bottom:0">ム</h3>
                <h4>MU</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="ME" class="flashcard">
                <h3 style="margin-bottom:0">メ</h3>
                <h4>ME</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="MO" class="flashcard">
                <h3 style="margin-bottom:0">モ</h3>
                <h4>MO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
        {{-- ------------------------------------------------------------------------------ --}}

            <button id="YA" class="flashcard">
                <h3 style="margin-bottom:0">ヤ</h3>
                <h4>YA</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="blankk" class="flashcard">
                <h3 style="margin-bottom:0">-</h3>
                <h4>-</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="YU" class="flashcard">
                <h3 style="margin-bottom:0">ユ</h3>
                <h4>YU</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="blankk" class="flashcard">
                <h3 style="margin-bottom:0">-</h3>
                <h4>-</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="YO" class="flashcard">
                <h3 style="margin-bottom:0">ヨ</h3>
                <h4>YO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
        {{-- ------------------------------------------------------------------------------ --}}

            <button id="RA" class="flashcard">
                <h3 style="margin-bottom:0">ラ</h3>
                <h4>RA</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="RI" class="flashcard">
                <h3 style="margin-bottom:0">リ</h3>
                <h4>RI</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="RU" class="flashcard">
                <h3 style="margin-bottom:0">ル</h3>
                <h4>RU</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="RE" class="flashcard">
                <h3 style="margin-bottom:0">レ</h3>
                <h4>RE</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="RO" class="flashcard">
                <h3 style="margin-bottom:0">ロ</h3>
                <h4>RO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
        {{-- ------------------------------------------------------------------------------ --}}
            <button id="WA" class="flashcard">
                <h3 style="margin-bottom:0">ワ</h3>
                <h4>WA</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="blankk" class="flashcard">
                <h3 style="margin-bottom:0">-</h3>
                <h4>-</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="blankk" class="flashcard">
                <h3 style="margin-bottom:0">-</h3>
                <h4>-</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="blankk" class="flashcard">
                <h3 style="margin-bottom:0">-</h3>
                <h4>-</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="WO" class="flashcard">
                <h3 style="margin-bottom:0">ヲ</h3>
                <h4>WO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
        {{-- ------------------------------------------------------------------------------ --}}

            <button id="N" class="flashcard">
                <h3 style="margin-bottom:0">ン</h3>
                <h4>N</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="blankk" class="flashcard">
                <h3 style="margin-bottom:0">-</h3>
                <h4>-</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="blankk" class="flashcard">
                <h3 style="margin-bottom:0">-</h3>
                <h4>-</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="blankk" class="flashcard">
                <h3 style="margin-bottom:0">-</h3>
                <h4>-</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="blankk" class="flashcard">
                <h3 style="margin-bottom:0">-</h3>
                <h4>-</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
            </div>
        {{-- ------------------------------------------------------------------------------ --}}

                <div class="chara2 m-0 col-md-6">
                    <div class="chara21">
                        <button id="blankk" class="flashcard">
                            <h3 style="margin-bottom:0">-</h3>
                            <h4>-</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>
                        <button id="blankk" class="flashcard">
                            <h3 style="margin-bottom:0">-</h3>
                            <h4>-</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>
                        <button id="blankk" class="flashcard">
                            <h3 style="margin-bottom:0">-</h3>
                            <h4>-</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>
                        <button id="blankk" class="flashcard">
                            <h3 style="margin-bottom:0">-</h3>
                            <h4>-</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>
                        <button id="blankk" class="flashcard">
                            <h3 style="margin-bottom:0">-</h3>
                            <h4>-</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>
                        <button id="GA" class="flashcard">
                            <h3 style="margin-bottom:0">ガ</h3>
                            <h4>GA</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="GI" class="flashcard">
                            <h3 style="margin-bottom:0">ギ</h3>
                            <h4>GI</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="GU" class="flashcard">
                            <h3 style="margin-bottom:0">グ</h3>
                            <h4>GU</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="GE" class="flashcard">
                            <h3 style="margin-bottom:0">ゲ</h3>
                            <h4>GE</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="GO" class="flashcard">
                            <h3 style="margin-bottom:0">ゴ</h3>
                            <h4>GO</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="ZA" class="flashcard">
                            <h3 style="margin-bottom:0">ザ</h3>
                            <h4>ZA</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="JI(ZI)" class="flashcard">
                            <h3 style="margin-bottom:0">ジ</h3>
                            <h4>JI(ZI)</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="ZU" class="flashcard">
                            <h3 style="margin-bottom:0">ズ</h3>
                            <h4>ZU</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="ZE" class="flashcard">
                            <h3 style="margin-bottom:0">ゼ</h3>
                            <h4>ZE</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="ZO" class="flashcard">
                            <h3 style="margin-bottom:0">ゾ</h3>
                            <h4>ZO</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="DA" class="flashcard">
                            <h3 style="margin-bottom:0">ダ</h3>
                            <h4>DA</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="JI(DI)" class="flashcard">
                            <h3 style="margin-bottom:0">ヂ</h3>
                            <h4>JI(DI)</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="ZU(DU)" class="flashcard">
                            <h3 style="margin-bottom:0">ヅ</h3>
                            <h4>ZU</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="DE" class="flashcard">
                            <h3 style="margin-bottom:0">デ</h3>
                            <h4>DE</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="DO" class="flashcard">
                            <h3 style="margin-bottom:0">ド</h3>
                            <h4>DO</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                    </div>

                    <div class="chara22">

                        <button id="blankk" class="flashcard">
                            <h3 style="margin-bottom:0">-</h3>
                            <h4>-</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>
                        <button id="blankk" class="flashcard">
                            <h3 style="margin-bottom:0">-</h3>
                            <h4>-</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>
                        <button id="blankk" class="flashcard">
                            <h3 style="margin-bottom:0">-</h3>
                            <h4>-</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>
                        <button id="blankk" class="flashcard">
                            <h3 style="margin-bottom:0">-</h3>
                            <h4>-</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>
                        <button id="blankk" class="flashcard">
                            <h3 style="margin-bottom:0">-</h3>
                            <h4>-</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>
                        <button id="BA" class="flashcard">
                            <h3 style="margin-bottom:0">バ</h3>
                            <h4>BA</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="BI" class="flashcard">
                            <h3 style="margin-bottom:0">ビ</h3>
                            <h4>BI</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="BU" class="flashcard">
                            <h3 style="margin-bottom:0">ブ</h3>
                            <h4>BU</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="BE" class="flashcard">
                            <h3 style="margin-bottom:0">ベ</h3>
                            <h4>BE</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="BO" class="flashcard">
                            <h3 style="margin-bottom:0">ボ</h3>
                            <h4>BO</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="PA" class="flashcard">
                            <h3 style="margin-bottom:0">パ</h3>
                            <h4>PA</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="PI" class="flashcard">
                            <h3 style="margin-bottom:0">ピ</h3>
                            <h4>PI</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="PU" class="flashcard">
                            <h3 style="margin-bottom:0">プ</h3>
                            <h4>PU</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="PE" class="flashcard">
                            <h3 style="margin-bottom:0">ペ</h3>
                            <h4>PE</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="PO" class="flashcard">
                            <h3 style="margin-bottom:0">ポ</h3>
                            <h4>PO</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>
                    </div>
                </div>
            <img src="/Assets/katakana.png" class="mochikana">
        </div>
    </div>

    {{-- @include('partials.footer') --}}
</div>

    <script>

            const audioButtons = document.querySelectorAll('button');

            audioButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const audioElement = this.querySelector('.audio');
                    const id = this.id;
                    // console.log(id);
                    audioElement.src = `{{ asset('audio/`+ id +`.mp3') }}`;
                    audioElement.play();
                });
            });


      </script>
{{-- </body>
</html> --}}


@endsection
