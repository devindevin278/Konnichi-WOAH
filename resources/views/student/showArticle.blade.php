@extends('layouts.mainStudent')

@section('content')

<section class="showArticle pt-4 p-0 row m-0 d-flex">

    <div class="col-md-11 mx-auto d-flex justify-content-between p-0 m-0">

            <a class="btn btn-back" style="background-color:#FFC6C7;" href="/articleStudent">Back</a>

            <div class="linking m-0" style="align-items: center">
                <a class="m-0" href="#" style="color:black;"><u>English</u></a>
                <a class="m-0" style="color:black;">|</a>
                <a class="m-0" href="/jpnstudent/{{ $article->id }}" style="color:black;">Japanese</a>
            </div>
        {{-- </div> --}}
    </div>

    <div class="col-md-11 mx-auto m-0 mt-4 p-0 d-flex">
        <div class="imgbox img-fluid m-0 w-100" style="overflow: hidden; height: 30vw">
            <img class="w-100" src="{{ asset('storage/'. $article->image) }}" alt="" style="margin-top: -10vw">
        </div>
    </div>

    {{-- <div class="row col-md-11 mx-auto p-0"> --}}
        <div class="col-md-8 m-0 p-0 mx-auto">
            <div class="mt-3 d-flex jusify-content-around">
                <img src="img/calendar.png" alt="" >
                <h3 class="tgl">by <a href="/author/{{ $article->author->name }}" class="text-dark"><strong>{{ $article->author->name }}</strong></a> | </h5>
                {{-- <h5 class="tgl">2023年4月29日</h5> --}}
                <h3 class="tgl ms-1"> {{ $article->articlepublish }}</h5>
            </div>

            <div class=" mt-3 d-flex jusify-content-around align-items-center">
                <div class=" titlearticle p-0">{{ $article->title }}</div>
                <div class="d-flex justify-content-end m-1">
                    {{-- <a href="#"><img  src="img/edit2.png" alt="edit2" style="width:45px; "></a> --}}
                </div>
            </div>

            <div class="mt-4 d-flex flex-column jusify-content-around">
                {!! $article->body !!}
            </div>
        </div>

        {{-- <div class="col-md-1"></div>

        <div class="col-md-3 m-0 p-0">
            <img class="img-fluid" src="{{ asset('[gambar artikel]/A Brief History of Fushimi Inari Taisha, Kyoto’s Most Important Shrine.jpg') }}" alt="">
        </div> --}}

    {{-- </div> --}}

    <div class="col-md-8 m-0 p-0 mx-auto">
        <h4 class="mt-5 mb-4">More Articles by {{ $author->name }}</h4>

        <div class="row">
            @foreach ($author->articles as $articl)
            @if ($articl->slug != $article->slug)


                <div class="col-md-4">
                    <div class="card d-flex p-0 justify-content-around"
                        style=" background-color: #ffffff;">
                        <div class="container d-flex imgcard m-0 p-0">
                            <div class="imgcard d-flex" style="overflow: hidden;">
                                <img class="card-img-top"
                                    src="{{ asset('storage/' . $articl->image) }}" alt=""
                                    style="object-fit: cover; width: 100%; height: 15rem;">
                            </div>
                        </div>
                        <div class="card-body rounded-bottom border-0"
                            style="background-color: #ffffff;">
                            <h5 class="card-title " style="height: 8vw">
                                <a href="/student/{{ $articl->slug }}"
                                    style="color: black;">{{ $articl->title }}</a>
                            </h5>
                            {{-- <a class="card-title text-decoration-none"
                                href="/author/{{ $article->author->name }}"
                                style="color: black;">{{ $article->author->name }}</a> --}}
                            <p class="card-text">{{ $articl->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
        @endif
            @if ($loop->iteration >= 3)
                @break
            @endif
            @endforeach
        </div>

    </div>

</section>


@endsection
