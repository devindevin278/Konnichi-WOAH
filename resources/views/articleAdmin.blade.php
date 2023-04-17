@extends('layouts.mainAdmin')

@section('content')



<section class="article">

    <div class="container row mt-5  d-flex align-items-center ">
        <div class="col container mt-3 d-flex align-items-center justify-content-around" >
            <div class="container m-0 p-0">
                <div style=" justify-content:start; width:500px;">
                    <h2 style="font-weight:600;">Want to know more about Japan?</h2>
                </div>
            </div>

            <a href="#"><img class="justify-content-end align-items-right mx-4" src="img/addarticle.png" alt="addarticle"></a>
        </div>


        <div class="container row row-md-5 d-flex justify-content-around align-items-center">
            <div class="card  mt-5 col-md-5 d-flex p-0 justify-content-around " style="width: 15rem; background-color:#ffffff;">
                <div class="container d-flex imgcard m-0 p-0" style="border:solid red;">
                    <div class="imgcard d-flex">
                        <img class="card-img-top " src="img/hanabi.jpg" alt="" >
                        {{-- <div class="d-flex justify-content-end m-1" style="border:solid red;">
                            <a href="#"><img  src="img/edit2.png" alt="edit2" style="width:45px; "></a>
                        </div> --}}
                    </div>

                </div>


                    <div class="card-body rounded-bottom border-0" style=" background-color:#ffffff;">
                        <h5 class="card-title"><a href="/showArticle" style="color:black;">Hanabi Festival in Japan</a></h5>
                        <p class="card-text">April 29 2023</p>
                        <a href="#">Edit</a>
                    </div>
            </div>
            <div class="card mt-5 col-md-5 d-flex p-0 justify-content-around " style="width: 15rem; background-color:#ffffff;">
                <img class="card-img-top " src="img/hanabi.jpg"
                alt="" >
                <div class="card-body rounded-bottom border-0" style=" background-color:#ffffff;">
                    <h5 class="card-title"><a href="/showArticle" style="color:black;">Hanabi Festival in Japan</a></h5>
                    <p class="card-text">April 29 2023</p>
                </div>
            </div>
            <div class="card mt-5 col-md-5 d-flex p-0 justify-content-around " style="width: 15rem; background-color:#ffffff;">
                <img class="card-img-top " src="img/hanabi.jpg"
                alt="" >
                <div class="card-body rounded-bottom border-0" style=" background-color:#ffffff;">
                    <h5 class="card-title"><a href="/showArticle" style="color:black;">Hanabi Festival in Japan</a></h5>
                    <p class="card-text">April 29 2023</p>
                </div>
            </div>
            <div class="card mt-5 col-md-5 d-flex p-0 justify-content-around " style="width: 15rem; background-color:#ffffff;">
                <img class="card-img-top " src="img/hanabi.jpg"
                alt="" >
                <div class="card-body rounded-bottom border-0" style=" background-color:#ffffff;">
                    <h5 class="card-title"><a href="/showArticle" style="color:black;">Hanabi Festival in Japan</a></h5>
                    <p class="card-text">April 29 2023</p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
