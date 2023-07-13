@extends('layouts.mainAdmin')

@section('content')
<style>
    trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
    }

</style>

<section class="editArticle pt-4 p-0">
    <div class="col-md-11 mx-auto d-flex justify-content-between p-0 m-0">

        <a class="btn btn-back" style="background-color:#FFC6C7;" href="/admin">Back</a>

    {{-- </div> --}}
    </div>

    <form class="col-md-11 mt-3 mx-auto" method="post" action="/admin/{{ $articles->slug }}" enctype="multipart/form-data">
        @method('put')
        @csrf

        <div class="m-auto justify-content-center" style="">
            <div class="imgbox justify-content-center" style=" background: #FFC6C7; border-radius: 8px; object-fit: cover;" >
                <div class="m-0"
                style="position:relative; height: 30vw;
                background-image: url('{{ asset('img/addimg.png') }}'); background-size: 45px; background-position: center; background-repeat: no-repeat;">
                    <div class="w-100" style="overflow: hidden; height: 100%;">
                      <img src="{{ asset('storage/' . $articles->image) }}" class="w-100 img-preview" style="overflow:hidden; margin-top: -10vw">
                    </div>
                    {{-- <input type="hidden" name="oldImage" value="{{ $articles->image }}"> --}}
                    <input class="m-0 p-0" style="" type="file" id="imageArticle" name="image" onchange="previewImage()" value="{{ $articles->image }}" />
                </div>

            </div>

        </div>


        {{-- <div class="row mt-5 d-flex m-auto justify-content-center" style="width: fit">
            <div class="imgbox d-flex justify-content-center" style="background: #FFC6C7; border-radius: 8px;">
                <div class="container" style="background-image: url('{{ asset('img/addimg.png') }}'); background-size: 45px; background-position: center; background-repeat: no-repeat;">
                    <div>
                    <input type="hidden" name="oldImage" value="{{ $articles->image }}">
                    </div>

                    <div class="m-2 d-flex justify-content-center align-items-center" style="width: 100%; height: 30vh; overflow: hidden;">
                    @if ($articles->image)
                        <input class=" form-control d-flex justify-content-center mx-auto" style="max-height: 30vh; top: 186px; background: #FFC6C7;" type="file" id="image" name="image" onchange="previewImage()">
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $articles->image) }}" class="img-preview img-fluid" style="max-width: 50vh; height: auto;">
                        </div>
                    @else
                        <input class="form-control d-flex justify-content-center" style="max-height: 30vh; top: 186px; background: #FFC6C7;" type="file" id="image" name="image" onchange="previewImage()">

                        <div class="m-2 d-flex justify-content-start align-items-start float-left" style="max-width: 50vh; height: auto;">
                            <img class="img-preview " style="object-fit: cover; width: 100%;">
                        </div>
                    @endif
                    </div>

                </div>

            </div>

        </div> --}}



        <div class="mt-5">
            <h5 for="date">Published Time</h5>
            <div class="input-group date" style="width:17vw;">
                <input type="date" class="form-control" id="date" name="articlepublish" style="background: #FFC6C7;" value="{{ old('date', $articles->articlepublish) }}">
            </div>
        </div>


        <div class="mt-4 align-items-center">
            <h5>Article Title</h5>
            <div style="width: fit;">
                <input type="text" class="form-control @error('title') is-invalid

                @enderror" id="title" name="title" placeholder="Add title" value="{{ old('title', $articles->title) }}"
                style="background: #FFC6C7;width:35vw;">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                @enderror
            </div>
        </div>


        <div class="mt-4 align-items-center">
            <h5>Japanese Title</h5>
            <div style="width: fit;">
                <input type="text" class="form-control @error('jpntitle') is-invalid

                @enderror" id="jpntitle" name="jpntitle" placeholder="Add jpntitle" value="{{ old('jpntitle', $articles->jpntitle) }}"
                style="background: #FFC6C7;width:35vw;">
                @error('jpntitle')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                @enderror
            </div>
        </div>

        <div class="mt-4 d-flex flex-column">
            <h5>Choose Author</h5>
            <div style="width: 10%;">
                <select class="form-select" name="author_id" value="Choose author name" value="{{ old('author') }}" style="background: #FFC6C7;">
                    @foreach ($authors as $author)
                        @if(old('author_id') == $author->id)
                            <option value="{{ $author->id }}" selected>{{ $author->name }}</option>
                        @else
                            <option value="{{ $author->id }}">{{ $author->name }}</option>

                        @endif
                    @endforeach
                </select>

            </div>
        </div>




        <div class="mt-4 align-items-center">
            <h5>Article Slug</h5>
            <div style="width: fit;">
                <input type="text" class="form-control @error('slug') is-invalid

                 @enderror" id="slug" name="slug" placeholder="Slug Auto generated" value="{{ old('slug', $articles->slug) }}"
                style="background: #FFC6C7;width:35vw;">

                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>


        <div class=" row mt-4 d-flex m-auto justify-content-center" style="width: fit;">
            <h5>Japanese Body</h5>

                @error('body')
                    <p class="text-danger">
                        {{ $message }}
                    </p>

                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $articles->body) }}">
                <trix-editor input="body" style="height: fit; word-wrap: break-word; " ></trix-editor>

        </div>



        <div class="row mt-4 d-flex m-auto justify-content-center" style="width: fit;">
            <h5>Japanesse Body</h5>

            @error('jpnbody')
                <p class="text-danger">
                    {{ $message }}
                </p>

            @enderror
            <input id="jpnbody" type="hidden" name="jpnbody" value="{{ old('jpnbody', $articles->jpnbody) }}">
            <trix-editor input="jpnbody" style="height: fit; word-wrap: break-word; " ></trix-editor>

        </div>


        <div class="container mt-5 d-flex justify-content-around" style="width: 200px;">
            <form action="/admin/{{ $articles->slug }}/edit" method="post">
                @csrf
                @method('put')
                <button class="col btn btn-back" type="submit" style="background-color:#FF8BA7;" >Save</button>

            </form>
        </div>



    </form>
</section>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/admin/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault()
    });

    function previewImage(){
        const image = document.querySelector('#imageArticle');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        imgPreview.style.width = '100%';
        imgPreview.style.objectFit = 'cover';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFRevent){
            imgPreview.src = oFRevent.target.result;
        }
    }



</script>


@endsection
