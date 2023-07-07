@extends('layouts.mainStudent')

@section('content')

<section class="showArticle pt-4">
    <div class="container w-100 p-0 mx-0 d-flex">
        <div class="col m-0 p-0 d-flex justify-content-between">

            <div class="col d-flex m-0 p-0">
                <div class="" style="">
                    <a class="col btn btn-back" style="background-color:#FFC6C7;" href="/articleStudent">Back</a>
                </div>

            </div>


            <div class="linking" style="align-items: center">
                <a href="#" style="color:black;"><u>English</u></a>
                <a style="color:black;">|</a>
                <a href="/jpnstudent/{{ $articles->id }}" style="color:black;">Japanese</a>
            </div>
        </div>
    </div>

    <div class="container m-0 p-0 d-flex">
        <div class="imgbox img-fluid m-0" style="overflow: hidden; height: 30vw;">

            <img class="w-100" src="{{ asset('storage/'. $articles->image) }}" alt="" style="">

        </div>
    </div>

    <div class="row">
        <div class="container w-75">
            <div class="container mt-3 d-flex jusify-content-around">
                <img src="img/calendar.png" alt="" >
                <h5>by {{ $articles->author->name }}</h5>
                {{-- <h5 class="tgl">2023年4月29日</h5> --}}
                <h5 class="tgl">{{ $articles->articlepublish }}</h5>
            </div>

            <div class="container mt-3 d-flex jusify-content-around align-items-center">
                <div class="container titlearticle p-0">{{ $articles->title }}</div>
                <div class="d-flex justify-content-end m-1">
                    {{-- <a href="#"><img  src="img/edit2.png" alt="edit2" style="width:45px; "></a> --}}
                </div>
            </div>

            <div class="container mt-5 d-flex flex-column jusify-content-around">
                {!! $articles->body !!}
            </div>
        </div>

        <div class="container w-25">
            <img class="img-fluid" src="{{ asset('[gambar artikel]/A Brief History of Fushimi Inari Taisha, Kyoto’s Most Important Shrine.jpg') }}" alt="">
        </div>
    </div>


</section>


@endsection
