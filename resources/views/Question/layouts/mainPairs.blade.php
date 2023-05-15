<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matching Pairs</title>

    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('pairss.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" >
</head>
<body>

    @yield('content')


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
