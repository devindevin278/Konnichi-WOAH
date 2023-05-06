@extends('layouts.mainAdmin')

@section('content')

<section class="addArticle">
    <div class="container mt-5 d-flex justify-content-around">
        <div class="col " style="display: flex; justify-content:space-between; width: fit-content">

            <div class="col d-flex m-0 p-0 gap-2" style=" width:200px">
                <div class="" style="">
                    <a class="col btn btn-back" style="background-color:#FFC6C7;" href="/articleAdmin">Back</a>
                </div>

                <div class="" style="">
                    <a class="col btn btn-save" style="background-color:#FF8BA7;" href="/showArticleAdmin">Save</a>
                </div>

            </div>


            <div class="linking" style="align-items: center">
                <a href="#" style="color:black;">English</a>
                <a style="color:black;">|</a>
                <a href="#" style="color:black;">Japanese</a>
            </div>
		</div>
    </div>

    <div class="container mt-5 ">
        <div class="imgbox" style="overflow:hidden; border:solid red;" >
            <div class="container d-flex justify-content-around align-items-center" style=" height: 45.265vh;" >
                <img  src="img/addimg.png" alt="" style="width:45px; ">
                <input class="container form-control d-flex" style="width: 140vw; height: 45.265vh;top: 186px;
                border-radius: 8px;" type="file" id="image" name="image" onchange="previewImage()">
            </div>
        </div>
    </div>

    {{-- <div class="mb-3">
        <label for="image" class="form-label @error('image') is-invalid
        @enderror">Post Image</label>
        <img class="img-preview img-fluid col-sm-5">
        <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

        @enderror
    </div> --}}

    <div class="container mt-3 d-flex jusify-content-around">
        <img src="img/calendar.png" alt="" >
        {{-- <h5 class="tgl">2023年4月29日</h5> --}}
        <div class="input-group date" style="width:9vw;">
            <input type="text" class="form-control" id="date" name="date" data-toggle="datepicker">
        </div>
    </div>



    <div class="container mt-3 d-flex jusify-content-around align-items-center">
        <div class="container titlearticle">日本の花火祭り</div>
        <div class="d-flex justify-content-end m-1">
            <a href="#"><img  src="img/edit2.png" alt="edit2" style="width:45px; "></a>

        </div>
    </div>

    <div class="container mt-3 d-flex jusify-content-around">
        <p>日本には花火祭りという、素晴らしい花火のディスプレイが数世紀にわたって祝われている伝統があります。花火は日本語で「花火」という意味で、日本の夏の象徴的なものの一つです。

            花火祭りは、通常7月から8月にかけて開催され、コミュニティが一緒になって息をのむほどの花火のスペクタクルを楽しむ時間です。この祭りは日本全国で祝われ、各都市が独自のスタイルとアプローチで花火を打ち上げ、中には最も華やかな花火のディスプレイを作るために競い合う都市もあります。

            花火の伝統は江戸時代にまで遡ります。この時代には、花火は邪気を払うなどの宗教的な目的で使用されました。時間が経つにつれて、花火の伝統は文化の祝賀に進化し、花火祭りが誕生しました。
            今日、花火祭りは、世界中の人々が集まって色鮮やかな花火を楽しむ大きな祝典です。祭りは家族や友人が集まって楽しみ、美しい花火のスペクタクルを楽しむ時間です。また、美味しい日本の屋台料理を味わったり、キャンバスゲームを試したりするチャンスでもあります。

            夏に日本を訪れる予定がある場合は、花火祭りは見逃せないイベントです。その深い文化的意義と美しい花火のディスプレイは、一生の思い出になることでしょう。ぜひ祭りに参加して、日本の鮮やかな文化に浸ってください。</p>
    </div>


</section>

<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.imgbox');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFRevent){
            imgPreview.src = oFRevent.target.result;
        }
    }
</script>


@endsection
