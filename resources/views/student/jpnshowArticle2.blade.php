@extends('layouts.mainStudent')

@section('content')

<section class="showArticle pt-4">
    <div class="container d-flex justify-content-around">
        <div class="col " style="display: flex; justify-content:space-between; width: fit-content">

            <div class="col d-flex m-0 p-0 gap-2" style=" width:200px">
                <div class="" style="">
                    <a class="col btn btn-back" style="background-color:#FFC6C7;" href="/articleStudent">Back</a>
                </div>

            </div>


            <div class="linking" style="align-items: center">
                <a href="/student/{{ $articles->slug }}" style="color:black;">English</a>
                <a style="color:black;">|</a>
                <a href="/jpnstudent/{{ $articles->id }}" style="color:black;"><u>Japanese</u></a>
            </div>
		</div>
    </div>

    <div class="container mt-5 d-flex jusify-content-around">
        <div class="imgbox" >

            <img src="{{ asset('storage/'. $articles->image) }}" alt="" style="height: 45.265vh; width:fit-in; z-index:1; position:absolut;">

        </div>
    </div>

    <div class="container mt-3 d-flex jusify-content-around">
        <img src="img/calendar.png" alt="" >
        {{-- <h5 class="tgl">2023年4月29日</h5> --}}
        <h5 class="tgl">{{ $articles->articlepublish }}</h5>
    </div>

    <div class="container mt-3 d-flex jusify-content-around align-items-center">
        <div class="container titlearticle p-0">{{ $articles->jpntitle }}</div>
        <div class="d-flex justify-content-end m-1">
            {{-- <a href="#"><img  src="img/edit2.png" alt="edit2" style="width:45px; "></a> --}}
        </div>
    </div>

    <div class="container mt-3 d-flex jusify-content-around">
        {!! $articles->jpnbody !!}
    </div>


</section>


@endsection
