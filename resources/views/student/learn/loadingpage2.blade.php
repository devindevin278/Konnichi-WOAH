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
<body>
    <div id="body" class="load-container">
        <img src="{{ asset('Assets/1.gif') }}" alt="">
        <br>
        <div class="wrapper four">
            <div class="type">
                <h3 class="typing">LOADING!</h3>
            </div>
        </div>
        <h4>Notebook consists of dialogs and vocabularies you might need to know to do the lessons for the Unit.</h4>
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
