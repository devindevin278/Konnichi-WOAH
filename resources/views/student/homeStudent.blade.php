@extends('layouts.mainStudent')

@section('content')

<div class="d-block margin-top">

<section class="banner">
    <div class="row d-flex">
        <div class="col-md-7">
            <h1 class="fs-2">Welcome to Konnichi-WOAH!</h1>
            <h1 class="fs-2">A captivating Japanese language learning platform!</h1>
            <p>Are you looking for an easy and fun way to learn Japanese? Look no further than Konnichiwoah! We offer a wide range of exciting features to help you master the Japanese language with ease and effectiveness.</p>

            <a href="" class="btn lmore">Learn More</a>
        </div>

        <div class="col-md-5">
            <img src="{{ asset('img/home/kucing2062-wjq-500w.png') }}" alt="kotakbutton2062" class="img-fluid"
            />
        </div>
    </div>
</section>

<section class=" d-block who-we-are m-0">
    <h2 class="fs-5 text-secondary">WHO WE ARE</h2>
    <h1 class="fs-3">We are the team behind Konnichi-WOAH! - a leading platform for learning the Japanese language.</h1>

    <p>At Konnichi-WOAH!, we are passionate about making Japanese language learning accessible to everyone. Our platform was founded by a team of experienced Japanese language teachers who believe that learning a language should be an enjoyable and rewarding experience.</p>

    <p>Our mission is to provide a user-friendly platform that caters to different learning styles, levels, and preferences. We are committed to helping our users achieve their language learning goals with ease and effectiveness.</p>
</section>

<section class=" threeItems m-0">
    <div class="row mb-5">
        <div class="col-md-4 text-center item-box">
            <img src="{{ asset('img/home/imggames2062-wls.svg') }}" alt="">
            <h1 class="fs-4 mt-3">GAMES</h1>
            <p>Konnichiwoah! offers Hiragana and Katakana Cards, as well as language games, to make learning Japanese characters and language skills easy and enjoyable.</p>
        </div>
        <div class="col-md-4 text-center item-box">
            <img src="{{ asset('img/home/imgarticle2062-vw7f.svg') }}" alt="">
            <h1 class="fs-4 mt-3">ARTICLE</h1>
            <p>Konichiwoah! also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan.</p>
        </div>
        <div class="col-md-4 text-center item-box">
            <img src="{{ asset('img/home/img-teacher.png') }}" alt="">
            <h1 class="fs-4 mt-3">TEACHER</h1>
            <p>For those serious about improving their Japanese language skills, Konichiwoah! provides a list of qualified teachers who can assist with Japanese grammar and offer additional lessons</p>
        </div>
    </div>
    <div class="line"></div>
</section>


<section class="about d-block">
    <h1 class="text-center fs-3 mb-5">ABOUT US</h1>
    <div class="about-box mb-5 mx-auto d-flex">
        <img src="img/home/devin.png" alt="imgdevin7776" class="devin"/>
        <p class="about-text">Konichiwoah! also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan. Konichiwoah! also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan.</p>
    </div>
    <div class="about-box mb-5 mx-auto d-flex">

        <p class="about-text">Konichiwoah! also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan. Konichiwoah! also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan.</p>
    <img src="img/home/hasna.png" alt="imgdevin7776" class="landing-page-imgdevin"/>
</div>
<div class="about-box mb-5 mx-auto d-flex">
    <img src="img/home/hansen.png" alt="imgdevin7776" class="devin"/>
    <p class="about-text">Konichiwoah! also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan. Konichiwoah! also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan.</p>
</div>

<div class="about-box mb-5 mx-auto d-flex">

    <p class="about-text">Konichiwoah! also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan. Konichiwoah! also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan.</p>
<img src="img/home/mike.png" alt="imgdevin7776" class="landing-page-imgdevin"/>
</div>
</section>

</div>

@endsection
