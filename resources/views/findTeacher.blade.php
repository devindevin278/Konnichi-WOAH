@extends('layouts.mainStudent')

@section('content')
<section class="findTeacher">
    <div class="container row mt-5 d-flex justify-content-center gap-4">
        <div class="col d-flex justify-content-around " style="font-weight:600;">
            <div class="d-flex align-items-center ps-0"  style="width:50%;">
                <img src="img/profilefind.png" alt="" style="width:50px; height:fit-in;">
                Hasna Salsabilla Abdullah
            </div>
            <div class="d-flex align-items-center justify-content-end" style="width:50%;">
                <img src="img/loc.png" alt="" style="width:50px; height:fit-in;">
                Leyangan Damai RT 04 RW 08, Ungaran Timur

            </div>
        </div>


        <div class="d-flex justify-content-center">
            <img src="img/maps2.png" alt=""  style="width:100%">
        </div>

        <div class="container row bg-white m-2 p-2" style="width:97%; border-radius:30px;">
            <div class="d-flex justify-content-center mt-5" style="font-weight: 600; font-size:24px;">
                We Find You the Teacher(s)
            </div>

            <div class="row p-5" >
                <div class="col d-flex justify-content-start align-items-center gap-5" style="">
                    <div style="">
                        <img src="img/jaehyun.png" alt="" style="width:70px; height:fit-in;">

                    </div>

                    <div class="row" style=" width:50%; font-weight:600;">
                        <div>
                            Jung Jaehyun
                        </div>

                        <div class="col d-flex gap-1">
                            <div>
                                <img src="img/email.png" alt="" style="width:20px; height:fit-in;">
                            </div>
                            <div>
                                Jaehyun.Jung@sunib.ac.id
                            </div>

                        </div>

                    </div>

                    <div class="d-flex justify-content-end" style="width:50%; ">
                        <button class="viewteacherbut" type="button" style="">View</button>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

@endsection
