@extends('layouts.mainAdmin')

@section('content')
<style>
    trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
    }

</style>

<section class="addArticle">
    <div class="container mt-5 d-flex justify-content-around">
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

    <form method="post" action="/admin" enctype="multipart/form-data">
        @csrf


        <div class="container row mt-5 d-flex m-auto justify-content-center" style="width: fit">
            <div class="imgbox d-flex justify-content-center " style=" background: #FFC6C7; border-radius: 8px;" >
                <div class="container justify-content-around align-items-center" style=" height: 45.265vh;" >
                    <img src="img/addimg.png" alt="" style="width:45px; ">
                    <input class="form-control d-flex justify-content-center" style="height: 45.265vh;width: fit; top: 186px;
                    background: #FFC6C7;" type="file" id="image" name="image" onchange="previewImage()" />

                </div>
            </div>
            <div class="mt-3 d-flex justify-content-start align-items-start float-left" style="width: fit;  ">
                <img class="img-preview img-fluid " style="height: fit; overflow:hidden;">
            </div>

        </div>

        <div class="container mt-3 d-flex jusify-content-around">
            <div class="input-group date" style="width:17vw;">
                <input type="date" class="form-control" id="articlepublish" name="articlepublish" style="background: #FFC6C7;" required value="{{ old('articlepublish') }}">
            </div>
        </div>



        <div class="container mt-3 d-flex align-items-center">
            <div style="width: fit;">
                <input type="text" class="form-control @error('title') is-invalid

                @enderror" id="title" name="title" placeholder="Add title" required value="{{ old('title') }}"
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


        <div class="container row mt-5 d-flex m-auto justify-content-center" style="width: fit;">

                @error('body')
                    <p class="text-danger">
                        {{ $message }}
                    </p>

                @enderror
                <input id="body" type="hidden" name="body" >
                <trix-editor input="body" style="height: fit; word-wrap: break-word; " required></trix-editor>

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
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFRevent){
            imgPreview.src = oFRevent.target.result;
        }
    }



</script>


@endsection
