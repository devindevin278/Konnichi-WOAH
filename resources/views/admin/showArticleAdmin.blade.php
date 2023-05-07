@extends('layouts.mainAdmin')

@section('content')

<section class="showArticle">
    <div class="container  mt-5 d-flex justify-content-around">
        <div class="col " style="display: flex; justify-content:space-between; width: fit-content">

            <div class="col d-flex m-0 p-0 gap-2" style=" width:200px">
                <div class="" style="">
                    <a class="col btn btn-back" style="background-color:#FFC6C7;" href="/admin">Back</a>
                </div>

            </div>


            <div class="linking" style="align-items: center">
                <a href="#" style="color:black;">English</a>
                <a style="color:black;">|</a>
                <a href="#" style="color:black;">Japanese</a>
            </div>
		</div>
    </div>

    <div class="container mt-5 d-flex jusify-content-around">
        <div class="imgbox d-flex justify-content-around align-items-center" >

            <img src="{{ asset('storage/'. $articles->image) }}" alt="" style="height: 45.265vh; width:fit-in; overflow:hidden;">

        </div>
    </div>

    <div class="container mt-3 d-flex jusify-content-around">
        <img src="{{ asset('img/calendar.png') }}" alt="" >
        {{-- <h5 class="tgl">2023年4月29日</h5> --}}
        <h5 class="tgl">{{ $articles->articlepublish }}</h5>
    </div>

    <div class="container mt-3 d-flex jusify-content-around align-items-center">
        <div class="container titlearticle p-0">{{ $articles->title }}</div>
        <div class="d-flex justify-content-end m-1">
            {{-- <a href="#"><img  src="img/edit2.png" alt="edit2" style="width:45px; "></a> --}}
        </div>
    </div>

    <div class="container mt-3 d-flex jusify-content-around align-items-center">
        <div class="container authorname p-0">By: {{ $articles->author->name }}</div>
        <div class="d-flex justify-content-end m-1">
            {{-- <a href="#"><img  src="img/edit2.png" alt="edit2" style="width:45px; "></a> --}}
        </div>
    </div>

    <div class="container mt-3 d-flex jusify-content-around">
        <article>
            {!! $articles->body !!}
        </article>
    </div>
{{--
    <div>{{ $name }}</div>
    <div>{{ $articles }}</div> --}}


</section>


@endsection
