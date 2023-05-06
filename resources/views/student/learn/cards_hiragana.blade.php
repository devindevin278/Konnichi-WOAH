@extends('student.learn.layouts.main')

@section('learnContent')


{{-- <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Hiragana</title>

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
            <a class="Hiralink" style="background-color: #FF8BA7">Hiragana</a>
            <a href="/learnStudent/cards/katakana" class="Katalink">Katakana</a>
        </div>

        <div class="whitebg container col-md-12">
            <h1 class="text-center my-5">Hiragana</h1>

            <div class="characterss ps-5">
                <div class="chara1 m-0 col-md-6">
                    <button id="A" class="flashcard">
                        <h3 style="margin-bottom:0">あ</h3>
                        <h4>A</h4>
                        <audio id="audio" class="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="I" class="flashcard">
                        <h3 style="margin-bottom:0">い</h3>
                        <h4>I</h4>
                        <audio id="audio" class="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="U" class="flashcard">
                        <h3 style="margin-bottom:0">う</h3>
                        <h4>U</h4>
                        <audio id="audio" class="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="E" class="flashcard">
                        <h3 style="margin-bottom:0">え</h3>
                        <h4>E</h4>
                        <audio id="audio" class="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>

                    <button id="O" class="flashcard">
                        <h3 style="margin-bottom:0">お</h3>
                        <h4>O</h4>
                        <audio id="audio" class="audio" autoplay>
                            <source src="" type="audio/mpeg">
                        </audio>
                    </button>
                {{-- ------------------------------------------------------------------------------ --}}

                <button id="KA" class="flashcard">
                    <h3 style="margin-bottom:0">お</h3>
                    <h4>KA</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="KI" class="flashcard">
                    <h3 style="margin-bottom:0">き</h3>
                    <h4>KI</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="KU" class="flashcard">
                    <h3 style="margin-bottom:0">く</h3>
                    <h4>KU</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="KE" class="flashcard">
                    <h3 style="margin-bottom:0">け</h3>
                    <h4>KE</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="KO" class="flashcard">
                    <h3 style="margin-bottom:0">こ</h3>
                    <h4>KO</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>
            {{-- ------------------------------------------------------------------------------ --}}

            <button id="SA" class="flashcard">
                <h3 style="margin-bottom:0">さ</h3>
                <h4>SA</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="SHI" class="flashcard">
                <h3 style="margin-bottom:0">し</h3>
                <h4>SHI</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="SU" class="flashcard">
                <h3 style="margin-bottom:0">す</h3>
                <h4>SU</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="SE" class="flashcard">
                <h3 style="margin-bottom:0">せ</h3>
                <h4>SE</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="SO" class="flashcard">
                <h3 style="margin-bottom:0">そ</h3>
                <h4>SO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
        {{-- ------------------------------------------------------------------------------ --}}

                <button id="TA" class="flashcard">
                    <h3 style="margin-bottom:0">た</h3>
                    <h4>TA</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="CHI" class="flashcard">
                    <h3 style="margin-bottom:0">ち</h3>
                    <h4>CHI</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="TSU" class="flashcard">
                    <h3 style="margin-bottom:0">つ</h3>
                    <h4>TSU</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="TE" class="flashcard">
                    <h3 style="margin-bottom:0">て</h3>
                    <h4>TE</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>

                <button id="TO" class="flashcard">
                    <h3 style="margin-bottom:0">と</h3>
                    <h4>TO</h4>
                    <audio id="audio" class="audio" autoplay>
                        <source src="" type="audio/mpeg">
                    </audio>
                </button>
            {{-- ------------------------------------------------------------------------------ --}}

            <button id="NA" class="flashcard">
                <h3 style="margin-bottom:0">な</h3>
                <h4>NA</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="NI" class="flashcard">
                <h3 style="margin-bottom:0">に</h3>
                <h4>NI</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="NU" class="flashcard">
                <h3 style="margin-bottom:0">ぬ</h3>
                <h4>NU</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="NE" class="flashcard">
                <h3 style="margin-bottom:0">ね</h3>
                <h4>NE</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="NO" class="flashcard">
                <h3 style="margin-bottom:0">の</h3>
                <h4>NO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
            {{-- ------------------------------------------------------------------------------ --}}

            <button id="HA" class="flashcard">
                <h3 style="margin-bottom:0">は</h3>
                <h4>HA</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="HI" class="flashcard">
                <h3 style="margin-bottom:0">ひ</h3>
                <h4>HI</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="HU" class="flashcard">
                <h3 style="margin-bottom:0">ふ</h3>
                <h4>FU</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="HE" class="flashcard">
                <h3 style="margin-bottom:0">へ</h3>
                <h4>HE</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="HO" class="flashcard">
                <h3 style="margin-bottom:0">ほ</h3>
                <h4>HO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
        {{-- ------------------------------------------------------------------------------ --}}

            <button id="MA" class="flashcard">
                <h3 style="margin-bottom:0">ま</h3>
                <h4>MA</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="MI" class="flashcard">
                <h3 style="margin-bottom:0">み</h3>
                <h4>MI</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="MU" class="flashcard">
                <h3 style="margin-bottom:0">む</h3>
                <h4>MU</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="ME" class="flashcard">
                <h3 style="margin-bottom:0">め</h3>
                <h4>ME</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="MO" class="flashcard">
                <h3 style="margin-bottom:0">も</h3>
                <h4>MO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
        {{-- ------------------------------------------------------------------------------ --}}

            <button id="YA" class="flashcard">
                <h3 style="margin-bottom:0">あ</h3>
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
                <h3 style="margin-bottom:0">う</h3>
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
                <h3 style="margin-bottom:0">お</h3>
                <h4>YO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
        {{-- ------------------------------------------------------------------------------ --}}

            <button id="RA" class="flashcard">
                <h3 style="margin-bottom:0">ら</h3>
                <h4>RA</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="RI" class="flashcard">
                <h3 style="margin-bottom:0">り</h3>
                <h4>RI</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="RU" class="flashcard">
                <h3 style="margin-bottom:0">る</h3>
                <h4>RU</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="RE" class="flashcard">
                <h3 style="margin-bottom:0">れ</h3>
                <h4>RE</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>

            <button id="RO" class="flashcard">
                <h3 style="margin-bottom:0">ろ</h3>
                <h4>RO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
        {{-- ------------------------------------------------------------------------------ --}}
            <button id="WA" class="flashcard">
                <h3 style="margin-bottom:0">わ</h3>
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
                <h3 style="margin-bottom:0">を</h3>
                <h4>WO</h4>
                <audio id="audio" class="audio" autoplay>
                    <source src="" type="audio/mpeg">
                </audio>
            </button>
        {{-- ------------------------------------------------------------------------------ --}}

            <button id="N" class="flashcard">
                <h3 style="margin-bottom:0">ん</h3>
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
        {{-- ------------------------------------------------------------------------------ --}}
            </div>

            <div class="divider">

            </div>

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
                            <h3 style="margin-bottom:0">が</h3>
                            <h4>GA</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="GI" class="flashcard">
                            <h3 style="margin-bottom:0">ぎ</h3>
                            <h4>GI</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="GU" class="flashcard">
                            <h3 style="margin-bottom:0">ぐ</h3>
                            <h4>GU</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="GE" class="flashcard">
                            <h3 style="margin-bottom:0">げ</h3>
                            <h4>GE</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="GO" class="flashcard">
                            <h3 style="margin-bottom:0">ご</h3>
                            <h4>GO</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="ZA" class="flashcard">
                            <h3 style="margin-bottom:0">ざ</h3>
                            <h4>ZA</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="JI(ZI)" class="flashcard">
                            <h3 style="margin-bottom:0">じ</h3>
                            <h4>JI(ZI)</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="ZU" class="flashcard">
                            <h3 style="margin-bottom:0">ず</h3>
                            <h4>ZU</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="ZE" class="flashcard">
                            <h3 style="margin-bottom:0">ぜ</h3>
                            <h4>ZE</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="ZO" class="flashcard">
                            <h3 style="margin-bottom:0">ぞ</h3>
                            <h4>ZO</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="DA" class="flashcard">
                            <h3 style="margin-bottom:0">だ</h3>
                            <h4>DA</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="JI(DI)" class="flashcard">
                            <h3 style="margin-bottom:0">ぢ</h3>
                            <h4>JI(DI)</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="ZU(DU)" class="flashcard">
                            <h3 style="margin-bottom:0">づ</h3>
                            <h4>ZU</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="DE" class="flashcard">
                            <h3 style="margin-bottom:0">で</h3>
                            <h4>DE</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="DO" class="flashcard">
                            <h3 style="margin-bottom:0">ど</h3>
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
                            <h3 style="margin-bottom:0">ば</h3>
                            <h4>BA</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="BI" class="flashcard">
                            <h3 style="margin-bottom:0">び</h3>
                            <h4>BI</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="BU" class="flashcard">
                            <h3 style="margin-bottom:0">ぶ</h3>
                            <h4>BU</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="BE" class="flashcard">
                            <h3 style="margin-bottom:0">べ</h3>
                            <h4>BE</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="BO" class="flashcard">
                            <h3 style="margin-bottom:0">ぼ</h3>
                            <h4>BO</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="PA" class="flashcard">
                            <h3 style="margin-bottom:0">ぱ</h3>
                            <h4>PA</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="PI" class="flashcard">
                            <h3 style="margin-bottom:0">ぴ</h3>
                            <h4>PI</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="PU" class="flashcard">
                            <h3 style="margin-bottom:0">ぷ</h3>
                            <h4>PU</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="PE" class="flashcard">
                            <h3 style="margin-bottom:0">ぺ</h3>
                            <h4>PE</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>

                        <button id="PO" class="flashcard">
                            <h3 style="margin-bottom:0">ぽ</h3>
                            <h4>PO</h4>
                            <audio id="audio" class="audio" autoplay>
                                <source src="" type="audio/mpeg">
                            </audio>
                        </button>
                    </div>
                </div>


            <img src="/Assets/hiragana.png" class="mochi">
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
