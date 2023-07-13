@extends('layouts.mainAdmin')

@section('content')
<style>
    trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
    }

</style>

<section class="addArticle p-0">
    <div class="container d-flex justify-content-around">
        <div class="col " style="display: flex; justify-content:space-between; width: fit-content">

            <div class="col d-flex m-0 p-0 gap-2" style=" width:200px">
                <a class="btnback" href="/admin">
                    <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM13.92 16.13H9C8.59 16.13 8.25 15.79 8.25 15.38C8.25 14.97 8.59 14.63 9 14.63H13.92C15.2 14.63 16.25 13.59 16.25 12.3C16.25 11.01 15.21 9.97 13.92 9.97H8.85L9.11 10.23C9.4 10.53 9.4 11 9.1 11.3C8.95 11.45 8.76 11.52 8.57 11.52C8.38 11.52 8.19 11.45 8.04 11.3L6.47 9.72C6.18 9.43 6.18 8.95 6.47 8.66L8.04 7.09C8.33 6.8 8.81 6.8 9.1 7.09C9.39 7.38 9.39 7.86 9.1 8.15L8.77 8.48H13.92C16.03 8.48 17.75 10.2 17.75 12.31C17.75 14.42 16.03 16.13 13.92 16.13Z" fill="#FFC6C7"></path> </g></svg>
                </a>
            </div>

		</div>
    </div>

    <form method="post" action="/admin" enctype="multipart/form-data">
        @csrf


        <div class="container row mt-5 d-flex m-auto justify-content-center" style="width: fit">
            <div class="imgbox d-flex justify-content-center " style=" background: #FFC6C7; border-radius: 8px; object-fit: cover;" >
                <div class="container d-flex justify-content-around align-items-center"
                style="height: 45vh;
                background-image: url('{{ asset('img/addimg.png') }}'); background-size: 45px; background-position: center; background-repeat: no-repeat;">
                    <div class="container m-2 d-flex justify-content-start" style="max-width: 50vh; max-height: fit;  object-fit: cover;">
                      <img class="d-flex img-preview container " style="height: fit; overflow: hidden; ">
                    </div>
                    <input class="container mt-5 m-auto form-control p-auto d-flex align-items-center" style="height: 45vh; width: fit; top: 186px; background: #FFC6C7;" type="file" id="image" name="image" onchange="previewImage()" />
                </div>

            </div>


        </div>

        <div class="container mt-3 d-flex jusify-content-around">
            <div class="input-group date" style="width:17vw;">
                <input type="date" class="form-control" id="articlepublish" name="articlepublish" style="background: #FFC6C7;" required value="{{ old('articlepublish') }}">
            </div>
        </div>



        <div class="container mt-3 d-flex align-items-center">
            <div style="width: fit;">
                <input type="text" class="form-control

                @error('title') is-invalid @enderror"
                id="title" name="title" placeholder="Add title" required value="{{ old('title') }}"
                style="background: #FFC6C7;width:35vw;">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="container mt-3 d-flex align-items-center">
            <div style="width: fit;">
                <input type="text" class="form-control

                @error('jpntitle') is-invalid @enderror"
                id="jpntitle" name="jpntitle" placeholder="Add Japanesse title" required value="{{ old('jpntitle') }}"
                style="background: #FFC6C7;width:35vw;">
                @error('jpntitle')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="container mt-3 d-flex align-items-center">
            <div style="width: fit;">
                <select class="form-select" name="author_id" value="Choose author name" required value="{{ old('author') }}" style="background: #FFC6C7;">
                    <option selected>Choose Author</option>
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

        <div class="container mt-3 d-flex align-items-center">
            <div style="width: fit;">
                <input type="text" class="form-control @error('slug') is-invalid

                 @enderror" id="slug" name="slug" placeholder="Slug Auto generated" required value="{{ old('slug') }}"
                style="background: #FFC6C7;width:35vw;">

                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>

        <div class="container mt-5">
            <h5>
                English Body
            </h5>
        </div>

        <div class="container row mt-1 d-flex m-auto justify-content-center" style="width: fit;">

                @error('body')
                    <p class="text-danger">
                        {{ $message }}
                    </p>

                @enderror
                <input id="body" type="hidden" name="body" >
                <trix-editor input="body" style="height: fit; word-wrap: break-word; " required></trix-editor>

        </div>

        <div class="container mt-5" >
            <h5>Japanesse Body</h5>
        </div>

        <div class="container row mt-1 d-flex m-auto justify-content-center" style="width: fit;">

            @error('jpnbody')
                <p class="text-danger">
                    {{ $message }}
                </p>

            @enderror
            <input id="jpnbody" type="hidden" name="jpnbody" >
            <trix-editor input="jpnbody" style="height: fit; word-wrap: break-word; " required></trix-editor>

        </div>

        <div class="container mt-5 d-flex justify-content-around" style="width: 200px;">
            <button class="col btn btn-back" type="submit" style="background-color:#FF8BA7;" >Save</button>
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
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFRevent){
            imgPreview.src = oFRevent.target.result;
        }
    }

</script>


@endsection
