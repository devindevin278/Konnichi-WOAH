<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>congrats</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('congrats.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>

<body>
    <div>
        <div class="congrats-container">
            <div class="congrats-gif">
                <img src="{{ asset('/Assets/spark.gif') }}" class="spark">
                <img src="{{ asset('/Assets/katakana.png') }}" class="mocchi-png-congrats">
                <img src="{{ asset('/Assets/spark.gif') }}" class="spark">
            </div>

            <h1 class="congrats-clear">Level Clear!</h1>

            <div class="congrats-result">
                <div class="congrats-exp">
                    <h3 class="congrats-result-title">BIGGEST STREAK</h3>

                    <div class="congrats-grat">
                        <img class="_1WfUV"
                            src="https://d35aaqx5ub95lt.cloudfront.net/images/icons/f5358b2d4087a109790fc809eedc08c5.svg">
                        <h2 class="congrats-result-curr">{{ $maxStreak }}</h2>
                    </div>
                </div>
                <div class="congrats-exp">
                    <h3 class="congrats-result-title">TOTAL EXP</h3>

                    <div class="congrats-grat">
                        <img class="_1WfUV"
                            src="https://d35aaqx5ub95lt.cloudfront.net/images/icons/f5358b2d4087a109790fc809eedc08c5.svg">
                        <h2 class="congrats-result-curr">{{ $totalxp }}</h2>
                    </div>
                </div>

                <div class="congrats-acc">
                    <h3 class="congrats-result-title">YOUR RESULT</h3>

                    <div class="congrats-grat">
                        <img class="_2vWuo"
                            src="https://d35aaqx5ub95lt.cloudfront.net/images/icons/9ace13520a375f5661415ff7d470f243.svg">
                        <h2 class="congrats-result-curr">{{ $correctCount * 10  . '%' }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="congrats-footer">
            <form action="/XPscore" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="point_id" value="{{ $point->id }}">
                <input type="hidden" name="correct_count" value="{{ $correctCount }}">
                <input type="hidden" name="total_xp" value="{{ $totalxp }}">
                <button type="submit" class="congrats-button">Continue</button>
            </form>
        </div>
    </div>
</body>

</html>
