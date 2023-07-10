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
    <link rel="stylesheet" type="text/css" href="{{ asset('loading.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" >
</head>
<body >
    <div id="body" class="load-container">
        <div class="inner">
            <img src="{{ asset('/Assets/2.gif') }}" alt="" class="">
        <br>
        <div class="wrapper one">
            <div class="drop-main">
                <div class="l">L</div>
                <div class="o">O</div>
                <div class="a">A</div>
                <div class="d">D</div>
                <div class="i">I</div>
                <div class="n">N</div>
                <div class="g">G</div>
                <div class="exc">!</div>
            </div>
        </div>
        <h4>You can read articles in Konnichi-WOAH to spend time and train your reading ability.</h4>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

<script>
    // console.log('hi')
    let tbody = document.getElementById('body')
    $(document).ready(function () {

        window.setTimeout(function () {
            $('#body').fadeOut();
        }, 4000);
});
</script>

</html>
