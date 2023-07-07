<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loading1</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('loading.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" >
</head>
<body>
    <div id="body" class="load-container">
        <div class="inner">
            <img src="{{ asset('/Assets/3.gif') }}" alt="">
        <br>
        <div class="wrapper eight">
            <h3 class="smoke">
                <span>L</span>
                <span>O</span>
                <span>A</span>
                <span>D</span>
                <span>I</span>
                <span>N</span>
                <span>G</span>
                <SPAn>!</SPAn>
            </h3>
        </div>
        <h4>You can learn hiragana and katakana from the Cards section on the sidebar at the learn feature. Try to click the cards</h4>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

<script>
    // console.log('hi')
    let tbody = document.getElementById('body')
    $(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        console.log('time up')
        $('#body').fadeOut();
    }, 4000);
});
</script>

</html>
