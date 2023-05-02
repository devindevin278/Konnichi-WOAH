@extends('layouts.mainStudent')

@section('content')
<section class="viewTeacher">
    <div class="container d-flex row mt-5 gap-3 bg-white p-3" style="border-radius:30px; height=743px;">
        <div style="font-weight: 600; font-size: 26px;">
            Jung Jaehyun
        </div>

        <div class="col d-flex align-items-center">
            <div class="d-flex align-items-center" style="width:65%; font-weight: 600;">
                <p>
                    Jeong Yun-o, professionally known as Jaehyun, is a South Korean singer, rapper, television host, and actor. He is a member of the South Korean boy group NCT and its sub-units NCT U, NCT 127, and NCT DoJaeJung. Nickname: Woojae, Jeffrey, J, Jeong Jaeyuk, Valentine Boy, Umchinah, Bbang Jae, Memory Manipulator, Peaches, Nation's first love, Jayhyen, Cha Minho, Jae, Yoonoh, Jay Hun, Heart Guy
                </p>
            </div>
            <div class="d-flex align-items-right justify-content-center" style="width:35%; ">
                <img src="img/jaehyun.png" alt="" style="width:150px; height:auto;">
            </div>
        </div>

        <div style="font-weight: 600; font-size: 26px;">
            Performance Rating
        </div>

        <div class="col d-flex ">
            <div class="rate d-flex justify-content-start" style="width:65%;">
                <div class="rating">
                    <input type="radio" name="rating" value="5" id="5">
                    <label for="5">☆</label>
                    <input type="radio" name="rating" value="4" id="4">
                    <label for="4">☆</label>
                    <input type="radio" name="rating" value="3" id="3">
                    <label for="3">☆</label>
                    <input type="radio" name="rating" value="2" id="2">
                    <label for="2">☆</label>
                    <input type="radio" name="rating" value="1" id="1">
                    <label for="1">☆</label>
                </div>
            </div>

            <div class="d-flex justify-content-center" style="width:35%;">
                <button class="reqteacher" type="button" style="">Request Teacher</button>
            </div>
        </div>

        <div style="font-weight: 600; font-size: 26px;">
            Tuition Fee
        </div>

        <div class="container">
            <div class="tuition d-flex flex-end justify-content-center align-items-center" style="width:20%;">
                Rp 150.000,00/Hour
            </div>
        </div>


    </div>

</section>



@endsection
