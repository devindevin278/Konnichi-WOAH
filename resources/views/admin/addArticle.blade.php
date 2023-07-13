@extends('layouts.mainAdmin')

@section('content')
<style>
    trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
    }

</style>

<section class="addArticle pt-4 p-0">
    <div class="col-md-11 mx-auto d-flex justify-content-between p-0 m-0">

        <a class="btn btn-back" style="background-color:#FFC6C7;" href="/admin">Back</a>

    {{-- </div> --}}
    </div>

    <form class="col-md-11 mt-3 mx-auto" method="post" action="/admin" enctype="multipart/form-data">
        @csrf


        <div class="m-auto justify-content-center" style="">
            <div class="imgbox justify-content-center" style=" background: #FFC6C7; border-radius: 8px; object-fit: cover;" >
                <div class="m-0"
                style="position:relative; height: 30vw;
                background-image: url('{{ asset('img/addimg.png') }}'); background-size: 45px; background-position: center; background-repeat: no-repeat;">
                    <div class="w-100" style="overflow: hidden; height: 100%;">
                      <img class="w-100 img-preview" style="overflow:hidden; margin-top: -10vw">
                    </div>
                    <input class="m-0 p-0" style="" type="file" id="imageArticle" name="image" onchange="previewImage()" />
                </div>

            </div>

        </div>

        <div class="mt-3 d-flex">
            <div class="input-group date" style="width:17vw;">
                <input type="date" class="form-control" id="articlepublish" name="articlepublish" style="background: #FFC6C7;" required value="{{ old('articlepublish') }}">
            </div>
        </div>



        <div class="mt-3 d-flex align-items-center">
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

        <div class="mt-3 d-flex align-items-center">
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
        <div class="mt-3 d-flex align-items-center">
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

        <div class="mt-3 d-flex align-items-center">
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


        <div class=" row mt-5 d-flex m-auto justify-content-center" style="width: fit;">
            <h5>English Body</h5>

                @error('body')
                    <p class="text-danger">
                        {{ $message }}
                    </p>

                @enderror
                <input id="body" type="hidden" name="body" >
                <trix-editor input="body" style="height: fit; word-wrap: break-word; " required></trix-editor>

        </div>




        <div class=" row mt-5 d-flex m-auto justify-content-center" style="width: fit;">
            <h5>Japanesse Body</h5>

            @error('jpnbody')
                <p class="text-danger">
                    {{ $message }}
                </p>

            @enderror
            <input id="jpnbody" type="hidden" name="jpnbody" >
            <trix-editor input="jpnbody" style="height: fit; word-wrap: break-word; " required></trix-editor>

        </div>

        <div class="mt-5 w-100 text-center">
            <button class="btn btn-back px-5" type="submit" style="background-color:#FF8BA7;" >Save</button>
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
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFRevent){
            imgPreview.src = oFRevent.target.result;
        }
    }

</script>


@endsection
