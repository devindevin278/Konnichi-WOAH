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

    <form method="post" action="/admin/{{ $articles->slug }}" enctype="multipart/form-data">
        @method('put')
        @csrf


        <div class="container row mt-5 d-flex m-auto justify-content-center" style="width: fit">
            <div class="imgbox d-flex justify-content-center " style=" background: #FFC6C7; border-radius: 8px;" >

                <div class="container row justify-content-around align-items-center"  >
                    <input type="hidden" name="oldImage" value="{{ $articles->image }}">
                    <img src="{{ asset('img/addimg.png') }}" alt="" style="width:45px; ">
                    @if ($articles->image)
                    <img src="{{ asset('storage/' . $articles->image) }}" class="img-preview img-fluid col-sm-5" >
                    @else
                    <div class="mt-3 d-flex justify-content-start align-items-start float-left" >
                        <img class="img-preview img-fluid " style="max-height: 30vh; overflow:hidden;">
                    </div>

                    @endif
                    <input class="form-control d-flex justify-content-center" style="max-height: 30vh; top: 186px;
                    background: #FFC6C7;" type="file" id="image" name="image" onchange="previewImage()" >

                </div>
            </div>


        </div>

        <div class="container mt-3 d-flex jusify-content-around">
            <div class="input-group date" style="width:17vw;">
                <input type="date" class="form-control" id="date" name="articlepublish" style="background: #FFC6C7;" value="{{ old('date', $articles->articlepublish) }}">
            </div>
        </div>



        <div class="container mt-3 d-flex align-items-center">
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

        <div class="container mt-3 d-flex align-items-center">
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

        <div class="container mt-3 d-flex align-items-center">
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


        <div class="container row mt-5 d-flex m-auto justify-content-center" style="width: fit;">

                @error('body')
                    <p class="text-danger">
                        {{ $message }}
                    </p>

                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $articles->body) }}">
                <trix-editor input="body" style="height: fit; word-wrap: break-word; " ></trix-editor>

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
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFRevent){
            imgPreview.src = oFRevent.target.result;
        }
    }



</script>


@endsection
