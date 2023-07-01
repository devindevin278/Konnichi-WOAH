@extends('layouts.mainAdmin')

@section('content')
<style>
    trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
    }

</style>

<section class="editArticle">
    <div class="container mt-5 d-flex justify-content-around">
        <div class="col " style="display: flex; justify-content:space-between; width: fit-content">

            <div class="col d-flex m-0 p-0 gap-2" style=" width:200px">
                <a class="btnback" href="/admin">
                    <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM13.92 16.13H9C8.59 16.13 8.25 15.79 8.25 15.38C8.25 14.97 8.59 14.63 9 14.63H13.92C15.2 14.63 16.25 13.59 16.25 12.3C16.25 11.01 15.21 9.97 13.92 9.97H8.85L9.11 10.23C9.4 10.53 9.4 11 9.1 11.3C8.95 11.45 8.76 11.52 8.57 11.52C8.38 11.52 8.19 11.45 8.04 11.3L6.47 9.72C6.18 9.43 6.18 8.95 6.47 8.66L8.04 7.09C8.33 6.8 8.81 6.8 9.1 7.09C9.39 7.38 9.39 7.86 9.1 8.15L8.77 8.48H13.92C16.03 8.48 17.75 10.2 17.75 12.31C17.75 14.42 16.03 16.13 13.92 16.13Z" fill="#FFC6C7"></path> </g></svg>
                </a>
            </div>

		</div>
    </div>

    <form method="post" action="/admin/{{ $articles->slug }}" enctype="multipart/form-data">
        @method('put')
        @csrf


        <div class="container row mt-5 d-flex m-auto justify-content-center" style="width: fit">
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

        </div>


        <div class="container mt-3">
            <h5>
                Pulished Time
            </h5>
        </div>
        <div class="container mt-1 d-flex jusify-content-around">
            <div class="input-group date" style="width:17vw;">
                <input type="date" class="form-control" id="date" name="articlepublish" style="background: #FFC6C7;" value="{{ old('date', $articles->articlepublish) }}">
            </div>
        </div>

        <div class="container mt-3">
            <h5>
                Article Title
            </h5>
        </div>
        <div class="container mt-1 d-flex align-items-center">
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

        <div class="container mt-3">
            <h5>
                Japanesse Title
            </h5>
        </div>
        <div class="container mt-1 d-flex align-items-center">
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

        <div class="container mt-3">
            <h5>
                Choose Author
            </h5>
        </div>
        <div class="container mt-1 d-flex align-items-center">
            <div style="width: fit;">
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


        <div class="container mt-3">
            <h5>
                Article Slug
            </h5>
        </div>
        <div class="container mt-1 d-flex align-items-center">
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

        <div class="container mt-3">
            <h5>
                Japanesse Body
            </h5>
        </div>
        <div class="container row mt-1 d-flex m-auto justify-content-center" style="width: fit;">

                @error('body')
                    <p class="text-danger">
                        {{ $message }}
                    </p>

                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $articles->body) }}">
                <trix-editor input="body" style="height: fit; word-wrap: break-word; " ></trix-editor>

        </div>

        <div class="container mt-3">
            <h5>
                Japanesse Body
            </h5>
        </div>

        <div class="container row mt-1 d-flex m-auto justify-content-center" style="width: fit;">

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
        const image = document.querySelector('#image');
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
