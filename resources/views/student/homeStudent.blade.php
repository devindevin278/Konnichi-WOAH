@extends('layouts.mainStudent')

@section('content')
<body style="background: #faeee7;font-family: Poppins, sans-serif;">
    <header>
        <div class="carousel slide d-flex justify-content-center" data-bs-ride="false" id="carousel-1" style="margin-top: 74px;padding-bottom: 90px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- Start: 1 Row 2 Columns -->
                    <div class="container d-xl-flex justify-content-xl-center align-items-xl-center">
                        <div class="row d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-top: 0;margin-top: 1px;margin-right: 14px;margin-left: 61px;">
                            <div class="col-md-6" style="margin-top: 0;padding-right: 0;padding-left: 0;">
                                <h1 style="font-size: 30px;"><strong>Welcome to Konnichi-WOAH!&nbsp;</strong><br><strong>A captivating Japanese language learning platform!</strong></h1>
                                <p>Are you looking for an easy and fun way to learn Japanese? Look no further than Konnichiwoah! We offer a wide range of exciting features to help you master the Japanese language with ease and effectiveness.</p>
                            </div>
                            <div class="col-md-6 d-xl-flex justify-content-center justify-content-xl-center align-items-xl-center"><img class="d-xl-flex align-items-center align-items-xl-center" src="{{ asset('img/home/kucing.svg') }}"></div>
                        </div>
                    </div><!-- End: 1 Row 2 Columns -->
                </div>
                <div class="carousel-item">
                    <!-- Start: 1 Row 2 Columns -->
                    <div class="container d-xl-flex justify-content-xl-center align-items-xl-center">
                        <div class="row d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-top: 0;margin-top: 0;margin-right: 96px;margin-left: 6px;">
                            <div class="col d-xxl-flex justify-content-xxl-center align-items-xxl-center"><img class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" width="340" height="340" src="{{ asset('img/home/kucing2.svg') }}"></div>
                            <div class="col-md-6" style="margin-top: 0;padding-right: 0;padding-left: 0;">
                                <h1 style="font-size: 30px;"><strong>Why should we learn about Japanese language?</strong></h1>
                                <p>Learning Japanese allows for a deeper understanding of Japan's culture and provides practical career advantages. It opens doors to engaging with Japanese literature, media, and society, while expanding professional prospects.</p>
                            </div>
                        </div>
                    </div><!-- End: 1 Row 2 Columns -->
                </div>
                <div class="carousel-item">
                    <!-- Start: 1 Row 2 Columns -->
                    <div class="container d-xl-flex justify-content-xl-center align-items-xl-center" style="margin-top: 0;">
                        <div class="row d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-top: 0;margin-top: 36px;margin-right: 14px;margin-left: 61px;padding-right: 36px;padding-left: 78px;">
                            <div class="col-md-6" style="margin-top: 0;padding-right: 0;padding-left: 0;">
                                <h1 style="font-size: 30px;"><strong>Don't worry if you're struggling with your learning!</strong></h1>
                                <p>Here, you can learn Japanese in a variety of ways. For those of you who like games, this application is perfect for you because we provide games as a learning media too.</p>
                            </div>
                            <div class="col-md-6 d-xl-flex justify-content-center justify-content-xl-center align-items-xl-center"><img class="d-xl-flex align-items-center align-items-xl-center" src="{{ asset('img/home/kucing3.svg') }}""></div>
                        </div>
                    </div><!-- End: 1 Row 2 Columns -->
                </div>
            </div>
            <div>
                <!-- Start: Previous --><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><!-- End: Previous -->
                <!-- Start: Next --><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a><!-- End: Next -->
            </div>
            <ol class="carousel-indicators d-xxl-flex justify-content-xxl-center" style="padding-bottom: 0px;">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
            </ol>
        </div>
    </header><!-- Start: keterangan -->
    <section style="padding-bottom: 30px;" data-aos="fade-up" data-aos-duration="1000">
        <div style="background: #ffd0d1;padding-top: 40px;padding-bottom: 40px;padding-left: 200px;padding-right: 200px;">
            <h5 style="font-weight: bold;color: rgba(0,0,0,0.45);">WHO ARE WE?</h5>
            <h4><strong>We are the team behind Konnichi-WOAH! - a leading platform for learning the Japanese language.</strong></h4>
            <p>At Konnichi-WOAH!, we are passionate about making Japanese language learning accessible to everyone. Our platform was founded by a team of experienced Japanese language teachers who believe that learning a language should be an enjoyable and rewarding experience.<br><br>Our mission is to provide a user-friendly platform that caters to different learning styles, levels, and preferences. We are committed to helping our users achieve their language learning goals with ease and effectiveness.</p>
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

<section class="threeItems m-0">
    <div class="row mb-5">
        <div class="col-md-4 text-center item-box">
            <img src="{{ asset('img/home/imggames2062-wls.svg') }}" alt="">
            <h1 class="fs-4 mt-3">GAMES</h1>
            <p>Konnichiwoah! offers Hiragana and Katakana Cards, as well as language games, to make learning Japanese characters and language skills easy and enjoyable.</p>
        </div>
    </section><!-- End: mengapa -->
    {{-- <!-- Start: Pricing Duo -->
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2><strong>PRICING</strong></h2>
                <p>Lorem ipsum curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
            </div>
        </div>
        <div class="row gy-4 gx-md-0 gy-md-0 row-cols-1 row-cols-md-2 row-cols-xl-3 d-md-flex d-xl-flex align-items-md-center">
            <div class="col offset-xl-2">
                <div class="card bg-light border-0">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-0">Free</h3>
                                <p>Non-Subscribtion</p>
                                <h4 class="display-6 fw-bold">$-</h4>
                            </div>
                        </div>
                        <div>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg">
                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                        </svg></span><span>Lorem ipsum </span></li>
                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg">
                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                        </svg></span><span>Lorem ipsum </span></li>
                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg">
                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                        </svg></span><span>Lorem ipsum </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background: #ffd0d1;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="fw-bold text-white mb-0" style="color: rgb(89,44,44);">Pro Bundle</h3>
                                <p>Subscribe</p>
                                <h4 class="display-6 fw-bold text-white">$38</h4>
                            </div>
                            <div><span class="badge rounded-pill bg-primary text-uppercase bg-white-300" style="color: rgb(51,38,38);">Best Value</span></div>
                        </div>
                        <div>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg">
                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                        </svg></span><span>Get The best Teacher</span></li>
                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg">
                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                        </svg></span><span>Lorem ipsum&nbsp;</span></li>
                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg">
                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                        </svg></span><span>Lorem ipsum</span></li>
                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg">
                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                        </svg></span><span>Lorem ipsum </span></li>
                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg">
                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                        </svg></span><span>Lorem ipsum </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: Pricing Duo --> --}}
    <!-- Start: about-us -->
    <section style="padding-top: 0;margin-top: 30px;" style="padding-bottom: 30px;" data-aos="fade-up" data-aos-duration="1000">
        <div margin-bottom: 0;padding-bottom: 50px;">
            <!-- Start: Team -->
            <div class="container py-4 py-xl-5">
                <div class="row mb-4 mb-lg-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2><strong>Our Team</strong></h2>
                    </div>
                </div>
                <div class="row gy-4 row-cols-2 row-cols-md-4">
                    <div class="col">
                        <div class="card border-0 shadow-none">
                            <div class="card-body text-center d-flex flex-column align-items-center p-0" style="margin-top: 30px;"><img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="{{ asset('img/home/img-devin.svg') }}">
                                <h1 style="font-size: 20px;"><strong>Devin Wong</strong></h1>
                                <p class="text-muted card-text mb-2" style="padding-right: 20px;padding-left: 20px;"><br><strong><span style="color: rgb(0, 0, 0);">Konnichi-Woah!</span></span></strong><span style="color: rgb(0, 0, 0);">&nbsp; also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan. Konichiwoah! also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan.</span><br><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 shadow-none">
                            <div class="card-body text-center d-flex flex-column align-items-center p-0"><img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="{{ asset('img/home/img-hasna.svg') }}" style="margin-top: 30px;">
                                <h1 style="font-size: 20px;"><strong>Hasna Salsabilla</strong></h1>
                                <p class="text-muted card-text mb-2" style="padding-right: 20px;padding-left: 20px;"><br><strong><span style="color: rgb(0, 0, 0);">Konnichi-Woah!</span></strong><span style="color: rgb(0, 0, 0);">&nbsp; also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan. Konichiwoah! also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan.</span><br><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 shadow-none">
                            <div class="card-body text-center d-flex flex-column align-items-center p-0" style="margin-top: 30px;"><img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="{{ asset('img/home/img-hansen.svg') }}">
                                <h1 style="font-size: 20px;"><strong>Hansen</strong></h1>
                                <p class="text-muted card-text mb-2" style="padding-left: 20px;padding-right: 20px;"><br><strong><span style="color: rgb(0, 0, 0);">Konnichi-Woah!</span></strong><span style="color: rgb(0, 0, 0);">&nbsp; also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan. Konichiwoah! also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan.</span><br><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 shadow-none">
                            <div class="card-body text-center d-flex flex-column align-items-center p-0" style="margin-top: 30px;"><img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="{{ asset('img/home/img-mike.svg') }}">
                                <h1 style="font-size: 20px;"><strong>Michael Baptista</strong></h1>
                                <p class="text-muted card-text mb-2" style="padding-right: 20px;padding-left: 20px;"><br><strong><span style="color: rgb(0, 0, 0);">Konnichi-Woah!</span></strong><span style="color: rgb(0, 0, 0);">&nbsp; also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan. Konichiwoah! also offers captivating articles on Japanese culture and history, enabling learners to gain insights and enrich their knowledge about Japan.</span><br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End: Team -->
        </div>
    </section><!-- End: about-us -->
    <!-- end aos -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS setelah halaman dimuat
        AOS.init();
    </script>

@endsection
