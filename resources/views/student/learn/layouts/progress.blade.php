<div class="container-fluid mt-4 bg-light rounded border border-3 p-4">
 <div class="row">

    <h5 class="" style="color: #4B4B4B;">XP Progress</h5>

    <div class="container px-3 mb-4">
        <div class="row p-0 m-auto w-100">
            <div class="col-md-3 p-0">
                <img class="img-fluid m-0 px-1" src="{{ asset('Assets/SVG assets/peti tutup.svg') }}" alt="">
            </div>

            <div class="col-md-9 pe-0 d-flex flex-column">
                <p class="mt-1">Daily</p>
                <div class="progress bg-warning-subtle" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:{{ ($daily/50)*100 }}%"></div>
                </div>
                <p class="text-secondary " style="font-size: 12px">{{ $daily }}/50 XP</p>
            </div>

            {{-- <div class="col-md-3 p-0 m-auto"> --}}

            {{-- </div> --}}
        </div>
    </div>

    <div class="d-flex px-3 justify-content-between">
        <button class="btn timeBtn timeActive" id="weekBtn">Week</button>
        <button class="btn timeBtn" id="monthBtn">Month</button>
        <button class="btn timeBtn" id="yearBtn">Year</button>
    </div>
    <canvas class="mt-4 w-100" id="myChart" width="" height=""></canvas>

    {{-- <h1>{{ $user_id }}</h1> --}}

 </div>
</div>
