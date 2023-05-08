@extends('layouts.mainAdmin')

@section('content')




<section class="article">
    <div class="container row  d-flex justify-content-around">


        <div class="mt-5">

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show col" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @elseif(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show col" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif

        </div>

        <div class="container row mt-5  d-flex align-items-center ">
            <div class="col container mt-3 d-flex align-items-center justify-content-around" >
                <div class="container m-0 p-0">
                    <div style=" justify-content:start; width:500px;">
                        <h2 style="font-weight:600;">Want to know more about Japan?</h2>
                    </div>
                </div>

                <a href="addArticle"><img class="justify-content-end align-items-right mx-4" src="{{ asset('img/addarticle.png') }}" alt=""></a>
            </div>


            <div class="container row row-md-5 d-flex justify-content-around align-items-center">

                <div class="row justify-content-center align-items-center mb-3 mt-5">
                    <div class="col">
                        <form action="/admin">

                            @if (request('author'))
                                <input type="hidden" name="author" value="{{ request('author') }}">
                            @endif

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                                <button class="btn btn-primary" type="submit" style="background: #FFC6C7; border:none;">Search</button>
                            </div>
                        </form>
                    </div>

                </div>


                <div class="card mb-3 mt-5 col-md-10">
                        <div class="d-flex justify-content-center" style="max-height:200px; width:fit; overflow:hiden;">
                            <img src="{{ asset('storage/'. $articles[0]->image) }}" class="img-fluid mt-3 mb-3" alt="" style="max-height:200px; width:fit; overflow:hiden;">
                        </div>


                        <div class="card-body text-center ">
                        <h3 class="card-title ">
                            <a href="/admin/{{ $articles[0]->slug }}" class="text-decoration-none text-dark">{{ $articles[0]->title }}</a></h3>
                        <p>
                            <small class="text-muted">
                                    By. <a href="/author/{{ $articles[0]->author->username }}" class="text-decoration-none">{{ $articles[0]->author->name }}</a>
                                    {{ $articles[0]->created_at->diffForHumans() }}
                            </small>
                        </p>

                        <p class="card-text">{{ $articles[0]->excerpt }}</p>
                    </div>
                </div>

                @foreach ( $articles->skip(1) as $article )

                <div class="card  mt-5 col-md-5 d-flex p-0 justify-content-around " style="width: 15rem; background-color:#ffffff;">
                    <div class="container d-flex imgcard m-0 p-0">
                        <div class="imgcard d-flex" style="overflow:hiden;">
                            <img class="card-img-top " src="{{ asset('storage/'. $article->image) }}" alt="" >
                        </div>

                    </div>


                    <div class="card-body rounded-bottom border-0" style=" background-color:#ffffff;">
                        <h5 class="card-title"><a href="/admin/{{ $article->slug }}" style="color:black;">{{ $article->title }}</a></h5>
                        {{-- <form action="{{ $article->author->name }}">

                            @if (request('author'))
                                <input type="hidden" name="author" value="{{ request('author') }}">
                            @endif
                        </form> --}}
                        <a class="card-title text-decoration-none"><a href="/author/{{ $article->author->name }}" style="color:black;">{{ $article->author->name }}</a></a>
                        {{-- <a class="card-title text-decoration-none"><a href="/admin/{{ $article->author_id }}" style="color:black;">{{ $article->author->name }}</a></a> --}}
                        {{-- <a class="card-title text-decoration-none"><a href="{{ route('admin.articleByAuthor', ['author' => $article->author->name]) }}" style="color:black;">{{ $article->author->name }}</a></a> --}}
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
</section>
@endsection
