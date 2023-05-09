<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matching Pairs</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('pairss.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" >
</head>
<body>
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
                <h2 style="color: #EE282D; font-size: 1.9vw;">Question Skipped</h2>
            </div>
            <button class="continue" style="background: #FF4347; box-shadow: 0px 4px 0px #EE282D;;">Continue</button>

        </div>

      <script>
        const cards2 = document.querySelectorAll('.card');
        const numCards2 = cards2.length;
        let numCardsClicked2 = 0;

        var correct = document.getElementById('1');
        var hidd = document.getElementById('5');
        var barr = document.getElementById('barrier');

        cards2.forEach((card) => {
        card.addEventListener('click', () => {
            if (card.classList.contains('selected')) {
            card.classList.remove('selected');
            numCardsClicked2--;
            console.log(numCardsClicked2);
            } else {
            card.classList.add('selected');
            numCardsClicked2++;
            console.log(numCardsClicked2);
            }
            if (numCardsClicked2 === numCards2) {
            correct.style.display ='flex';
            barr.style.display = 'flex';
            }
        });
        });

        // const audio = new Audio{{ asset('Assets/wrongchoice.mp3')}};
        const audio = new Audio('/Assets/wrongchoice.mp3');
        // const hehe = new Audio{{ asset('Assets/rightchoice.mp3')}};
        const hehe = new Audio('Assets/rightchoice.mp3');

        const cards = document.querySelectorAll('.card');
        let firstCard, secondCard;
        let lockBoard = false;

        function flipCard() {
            if (lockBoard) return;
            if (this === firstCard) return;
            this.classList.add('selected');

            if (!firstCard) {
                firstCard = this;
                return;
            }
            secondCard = this;
            checkForMatch();
        }

        function checkForMatch() {
            let isMatch = firstCard.dataset.card === secondCard.dataset.card;
            isMatch ? disableCards() : unflipCards();
        }

        function disableCards() {
            firstCard.removeEventListener('click', flipCard);
            secondCard.removeEventListener('click', flipCard);
            resetBoard();
            hehe.play();
        }

        function unflipCards() {
        lockBoard = true;
        setTimeout(() => {
            firstCard.classList.remove('selected');
            secondCard.classList.remove('selected');
            resetBoard();
            audio.play();
            numCardsClicked2 = numCardsClicked2-2;
        }, 20);
        }

        function resetBoard() {
        [firstCard, secondCard, lockBoard] = [null, null, false];
        }

        (function shuffle() {
        cards.forEach(card => {
            let randomPos = Math.floor(Math.random() * 8);
            card.style.order = randomPos;
            });
        })();

        cards.forEach(card => card.addEventListener('click', flipCard));
        document.getElementById('reset').addEventListener('click', () => {
        cards.forEach(card => {
            card.classList.remove('selected');
            card.addEventListener('click', flipCard);
            });
        resetBoard();
        });

        function showDiv(id) {
        var div = document.getElementById(id);
        div.style.display = 'flex';
        hidd.style.display = 'none';
        barr.style.display = 'flex';
        }
      </script>
</body>
</html>
