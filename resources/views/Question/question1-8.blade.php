<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiple Choice</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('fillblank.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" >
</head>
<body>
    {{-- @include('partials.navbarStudent') --}}

    <div class="greyy" id="barrier"></div>
    <div class="upper">

        <svg class="back-button" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /> </svg>

        <div class="progress" id="process-bar">
            <div class="progress-bar" id="processing" role="progressbar" style="width: 80%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                <div id="process2"></div>
            </div>
        </div>
    </div>

    <div class="maincont">
        <h3 class="theme">Fill in The Blank</h3>
        <h3 class="question">くりす は わたし ... おとうと です</h3>
        <h4 class="question2">Kurisu wa watashi ... otouto desu</h4>

        <div class="choices">
            <button class="ans" onclick="showDiv('1')">
                <h4 class="answer">の (no)</h4>
            </button>

            <button class="ans" onclick="showDiv('2')">
                <h4 class="answer">ろ (to)</h4>
            </button>

            <button class="ans" onclick="showDiv('2')">
                <h4 class="answer">わ (wa)</h4>
            </button>
        </div>

    </div>

    <div class="downer" id="5">
        <button class="skib" onclick="showDiv('2')">SKIP</button>
    </div>

    <div class="corr" id="1" style="display: none">
        <svg class="correctsign"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
        </svg>
        <h2 class="ann" style="color:#259559">Amazing!</h2>
        <button class="continue">Continue</button>
    </div>

    <div class="wrronk" id="2" style="display: none">
        <svg class="wrongsign" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
        </svg>
        <div class="ann">
            <h2 style="color: #EE282D; font-size: 1.9vw;">Correct Solution :</h2>
            <h3 style="color: #EE282D; font-size: 1.5vw;">の (no)</h3>
        </div>
        <button class="continue" style="background: #FF4347; box-shadow: 0px 4px 0px #EE282D;;">Continue</button>

    </div>

    <script>
        function showDiv(id) {
        var div = document.getElementById(id);
        var hidd = document.getElementById('5');
        var barr = document.getElementById('barrier');
        div.style.display = 'flex';
        hidd.style.display = 'none';
        barr.style.display = 'flex';
        }
    </script>
</body>
</html>
