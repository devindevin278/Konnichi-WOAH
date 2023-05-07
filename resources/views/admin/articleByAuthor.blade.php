@extends('layouts.mainAdmin')

@section('content')




<section class="articleByAuthor">
    <div class="container row  d-flex justify-content-around">


        <div class="mt-5">

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show col" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @elseif(session()->has('error'))
            <div class="alert alert-error alert-dismissible fade show col" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif
        </div>

        <div class="container row mt-5  d-flex align-items-center ">

            <div class="col container mt-3 d-flex align-items-center justify-content-around" >
                <div class="container m-0 p-0">
                    <div style=" justify-content:start; width:500px;">
                        <h2 style="font-weight:600;">{{ $title }}</h2>
                    </div>
                </div>

            </div>



            <div class="container row row-md-5 d-flex justify-content-around align-items-center">

                @if ($articles)
                    @foreach ( $articles as $article )

                    <div class="card  mt-5 col-md-5 d-flex p-0 justify-content-start align-items-start" style="width: 15rem; background-color:#ffffff;">
                        <div class="container d-flex imgcard m-0 p-0">
                            <div class="imgcard d-flex justify-content-start align-items-start" style="overflow:hiden;">
                                {{-- @if ($article && is_object($article->image) && property_exists($article->image, 'image')) --}}

                                <img class="card-img-top " src="{{ asset('storage/'. $article->image) }}" alt="" >

                                {{-- @endif --}}

                            </div>

                        </div>


                        <div class="card-body rounded-bottom border-0" style=" background-color:#ffffff;">
                            <h5 class="card-title"><a href="/admin/{{ $article->slug }}" style="color:black;">{{ $article->title }}</a></h5>
                            <a class="card-title text-decoration-none"><a href="#" style="color:black;">{{ $article->author->name }}</a>
                            <p class="card-text">{{ $article->created_at->diffForHumans() }}</p>
                            <a href="/admin/{{ $article->slug }}/edit" class="badge bg-warning">Edit</a>
                            <form action="/admin/{{ $article->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure u wanna delete?')">Delete</button>
                            </form>
                        </div>
                    </div>

                    @endforeach
            </div>
        </div>
    </div>
    @else <p class="text-center fs-4">No post found.</p>
    @endif

</section>

@endsection
