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

    <div class="content">

        <div class="linksec">
            <a href="/learnStudent/cards/hiragana" class="Hiralink">Hiragana</a>
            <a href="" class="Katalink" style="background-color: #FF8BA7">Katakana</a>
        </div>

        <div class="whitebg">
            <h1 style="text-align: center; margin-top:2rem">Katakana</h1>

            <div class="chara1">
                <button id="A" class="flashcard" onclick="playAudio()">
                    <h3 style="margin-bottom:0">ア</h3>
                    <h4>A</h4>
                    <audio id="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="I" class="flashcard" onclick="playAudio()">
                    <h3 style="margin-bottom:0">イ</h3>
                    <h4>I</h4>
                    <audio id="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="U" class="flashcard" onclick="playAudio()">
                    <h3 style="margin-bottom:0">ウ</h3>
                    <h4>U</h4>
                    <audio id="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="E" class="flashcard" onclick="playAudio()">
                    <h3 style="margin-bottom:0">エ</h3>
                    <h4>E</h4>
                    <audio id="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="O" class="flashcard" onclick="playAudio()">
                    <h3 style="margin-bottom:0">オ</h3>
                    <h4>O</h4>
                    <audio id="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>
            {{-- ------------------------------------------------------------------------------ --}}

            <button id="KA" class="flashcard" onclick="playAudio()">
                <h3 style="margin-bottom:0">カ</h3>
                <h4>KA</h4>
                <audio id="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="KI" class="flashcard" onclick="playAudio()">
                <h3 style="margin-bottom:0">キ</h3>
                <h4>KI</h4>
                <audio id="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="KU" class="flashcard" onclick="playAudio()">
                <h3 style="margin-bottom:0">ク</h3>
                <h4>KU</h4>
                <audio id="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="KE" class="flashcard" onclick="playAudio()">
                <h3 style="margin-bottom:0">ケ</h3>
                <h4>KE</h4>
                <audio id="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="KO" class="flashcard" onclick="playAudio()">
                <h3 style="margin-bottom:0">コ</h3>
                <h4>KO</h4>
                <audio id="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
        {{-- ------------------------------------------------------------------------------ --}}

        <button id="SA" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">サ</h3>
            <h4>SA</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="SHI" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">シ</h3>
            <h4>SHI</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="SU" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ス</h3>
            <h4>SU</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="SE" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">セ</h3>
            <h4>SE</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="SO" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ソ</h3>
            <h4>SO</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>
    {{-- ------------------------------------------------------------------------------ --}}

            <button id="TA" class="flashcard" onclick="playAudio()">
                <h3 style="margin-bottom:0">タ</h3>
                <h4>TA</h4>
                <audio id="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="CHI" class="flashcard" onclick="playAudio()">
                <h3 style="margin-bottom:0">チ</h3>
                <h4>CHI</h4>
                <audio id="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="TSU" class="flashcard" onclick="playAudio()">
                <h3 style="margin-bottom:0">ツ</h3>
                <h4>TSU</h4>
                <audio id="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="TE" class="flashcard" onclick="playAudio()">
                <h3 style="margin-bottom:0">テ</h3>
                <h4>TE</h4>
                <audio id="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="TO" class="flashcard" onclick="playAudio()">
                <h3 style="margin-bottom:0">ト</h3>
                <h4>TO</h4>
                <audio id="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

        {{-- ------------------------------------------------------------------------------ --}}

        <button id="NA" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ナ</h3>
            <h4>NA</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="NI" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ニ</h3>
            <h4>NI</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="NU" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ヌ</h3>
            <h4>NU</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="NE" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ネ</h3>
            <h4>NE</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="NO" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ノ</h3>
            <h4>NO</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>
        {{-- ------------------------------------------------------------------------------ --}}

        <button id="HA" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ハ</h3>
            <h4>HA</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="HI" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ヒ</h3>
            <h4>HI</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="HU" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">フ</h3>
            <h4>FU</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="HE" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ヘ</h3>
            <h4>HE</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="HO" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ホ</h3>
            <h4>HO</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>
    {{-- ------------------------------------------------------------------------------ --}}

        <button id="MA" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">マ</h3>
            <h4>MA</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="MI" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ミ</h3>
            <h4>MI</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="MU" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ム</h3>
            <h4>MU</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="ME" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">メ</h3>
            <h4>ME</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="MO" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">モ</h3>
            <h4>MO</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>
    {{-- ------------------------------------------------------------------------------ --}}

        <button id="YA" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ヤ</h3>
            <h4>YA</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="blankk" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">-</h3>
            <h4>-</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="YU" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ユ</h3>
            <h4>YU</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="blankk" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">-</h3>
            <h4>-</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="YO" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ヨ</h3>
            <h4>YO</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>
    {{-- ------------------------------------------------------------------------------ --}}

        <button id="RA" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ラ</h3>
            <h4>RA</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="RI" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">リ</h3>
            <h4>RI</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="RU" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ル</h3>
            <h4>RU</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="RE" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">レ</h3>
            <h4>RE</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="RO" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ロ</h3>
            <h4>RO</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>
    {{-- ------------------------------------------------------------------------------ --}}
        <button id="WA" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ワ</h3>
            <h4>WA</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="blankk" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">-</h3>
            <h4>-</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="blankk" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">-</h3>
            <h4>-</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="blankk" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">-</h3>
            <h4>-</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="WO" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ヲ</h3>
            <h4>WO</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>
    {{-- ------------------------------------------------------------------------------ --}}

        <button id="N" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">ン</h3>
            <h4>N</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="blankk" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">-</h3>
            <h4>-</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="blankk" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">-</h3>
            <h4>-</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="blankk" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">-</h3>
            <h4>-</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>

        <button id="blankk" class="flashcard" onclick="playAudio()">
            <h3 style="margin-bottom:0">-</h3>
            <h4>-</h4>
            <audio id="audio" autoplay>
                <source src="" type="audio/mpeg">
            </audio>
        </button>
    {{-- ------------------------------------------------------------------------------ --}}

            <div class="chara2">
                <div class="chara21">
                    <button id="GA" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ガ</h3>
                        <h4>GA</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="GI" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ギ</h3>
                        <h4>GI</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="GU" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">グ</h3>
                        <h4>GU</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="GE" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ゲ</h3>
                        <h4>GE</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="GO" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ゴ</h3>
                        <h4>GO</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="ZA" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ザ</h3>
                        <h4>ZA</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="JI(ZI)" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ジ</h3>
                        <h4>JI(ZI)</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="ZU" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ズ</h3>
                        <h4>ZU</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="ZE" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ゼ</h3>
                        <h4>ZE</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="ZO" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ゾ</h3>
                        <h4>ZO</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="DA" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ダ</h3>
                        <h4>DA</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="JI(DI)" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ヂ</h3>
                        <h4>JI(DI)</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="ZU(DU)" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ヅ</h3>
                        <h4>ZU</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="DE" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">デ</h3>
                        <h4>DE</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="DO" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ド</h3>
                        <h4>DO</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                </div>

                <div class="chara22">

                    <button id="BA" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">バ</h3>
                        <h4>BA</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="BI" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ビ</h3>
                        <h4>BI</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="BU" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ブ</h3>
                        <h4>BU</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="BE" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ベ</h3>
                        <h4>BE</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="BO" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ボ</h3>
                        <h4>BO</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="PA" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">パ</h3>
                        <h4>PA</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="PI" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ピ</h3>
                        <h4>PI</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="PU" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">プ</h3>
                        <h4>PU</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="PE" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ペ</h3>
                        <h4>PE</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="PO" class="flashcard" onclick="playAudio()">
                        <h3 style="margin-bottom:0">ポ</h3>
                        <h4>PO</h4>
                        <audio id="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>


                </div>
            </div>

            <img src="/Assets/katakana.png" class="mochikana">
        </div>
    </div>

    {{-- @include('partials.footer') --}}

    <script>
        var audio = document.getElementById("audio");
        var buttons = document.querySelectorAll("button");

        for (var i = 0; i < buttons.length; i++) {
          buttons[i].addEventListener("click", function() {
            var id = this.id;
            audio.src = "audio/" + id + ".mp3";
            audio.play();
          });
        }
      </script>
{{-- </body>
</html> --}}
