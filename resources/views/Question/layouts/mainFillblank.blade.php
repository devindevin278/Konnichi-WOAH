<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fill in the Blank</title>

    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('multi.css') }} ">
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>

<body>
    @yield('content')

    <div class="downer" id="5">
        <button class="skib" onclick="showDiv('2')">SKIP</button>
    </div>

    <div class="corr" id="1" style="">
        <svg class="correctsign" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-6 h-6">
            <path fill-rule="evenodd"
                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                clip-rule="evenodd" />
        </svg>
        <h2 class="ann" style="color:#259559">Amazing!</h2>

            @if (($prevStreak + 1) > 2)
            <div class="d-block">
                <h2 class="ann"><?xml version="1.0" encoding="utf-8"?>

                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                    <svg class="fireStreak" viewBox="-33 0 255 255" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                      <defs>
                        <style>

                          .cls-3 {
                            fill: url(#linear-gradient-1);
                          }

                          .cls-4 {
                            fill: #fc9502;
                          }

                          .cls-5 {
                            fill: #fce202;
                          }
                        </style>

                        <linearGradient id="linear-gradient-1" gradientUnits="userSpaceOnUse" x1="94.141" y1="255" x2="94.141" y2="0.188">
                          <stop offset="0" stop-color="#ff4c0d"/>
                          <stop offset="1" stop-color="#fc9502"/>
                        </linearGradient>
                      </defs>
                      <g id="fire">
                        <path d="M187.899,164.809 C185.803,214.868 144.574,254.812 94.000,254.812 C42.085,254.812 -0.000,211.312 -0.000,160.812 C-0.000,154.062 -0.121,140.572 10.000,117.812 C16.057,104.191 19.856,95.634 22.000,87.812 C23.178,83.513 25.469,76.683 32.000,87.812 C35.851,94.374 36.000,103.812 36.000,103.812 C36.000,103.812 50.328,92.817 60.000,71.812 C74.179,41.019 62.866,22.612 59.000,9.812 C57.662,5.384 56.822,-2.574 66.000,0.812 C75.352,4.263 100.076,21.570 113.000,39.812 C131.445,65.847 138.000,90.812 138.000,90.812 C138.000,90.812 143.906,83.482 146.000,75.812 C148.365,67.151 148.400,58.573 155.999,67.813 C163.226,76.600 173.959,93.113 180.000,108.812 C190.969,137.321 187.899,164.809 187.899,164.809 Z" id="path-1" class="cls-3" fill-rule="evenodd"/>
                        <path d="M94.000,254.812 C58.101,254.812 29.000,225.711 29.000,189.812 C29.000,168.151 37.729,155.000 55.896,137.166 C67.528,125.747 78.415,111.722 83.042,102.172 C83.953,100.292 86.026,90.495 94.019,101.966 C98.212,107.982 104.785,118.681 109.000,127.812 C116.266,143.555 118.000,158.812 118.000,158.812 C118.000,158.812 125.121,154.616 130.000,143.812 C131.573,140.330 134.753,127.148 143.643,140.328 C150.166,150.000 159.127,167.390 159.000,189.812 C159.000,225.711 129.898,254.812 94.000,254.812 Z" id="path-2" class="cls-4" fill-rule="evenodd"/>
                        <path d="M95.000,183.812 C104.250,183.812 104.250,200.941 116.000,223.812 C123.824,239.041 112.121,254.812 95.000,254.812 C77.879,254.812 69.000,240.933 69.000,223.812 C69.000,206.692 85.750,183.812 95.000,183.812 Z" id="path-3" class="cls-5" fill-rule="evenodd"/>
                      </g>
                    </svg>{{ $prevStreak + 1 }}</h2>

                    <h2 class="ann">+{{ $prevStreak - 1 }} xp</h2>
            </div>
        @endif
            <form action="/saveTemp" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="page_id" value="{{ $page->id }}">
                <input type="hidden" name="point_id" value="{{ $point->id }}">
                <input type="hidden" name="correct" value="1">
                <button class="continue" type="submit">Continue</button>

            </form>
        {{-- @endif --}}
    </div>

    <div class="wrronk" id="2" style="display: none">
        <svg class="wrongsign" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-6 h-6">
            <path fill-rule="evenodd"
                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                clip-rule="evenodd" />
        </svg>
        <div class="ann">
            <h2 style="color: #EE282D; font-size: 1.9vw;">Correct Solution :</h2>
            <h3 style="color: #EE282D; font-size: 1.5vw;">{{ $page->correction }}</h3>
        </div>
        {{-- <a href="/questions/{{ $point->id }}/{{ $page->id + 1}}"  class="continue" style="background: #FF4347; box-shadow: 0px 4px 0px #EE282D;;">Continue</a> --}}
        {{-- @if ($page->id % 10 == 0)
            <a href="/completed" class="continue"
                style="background: #FF4347; box-shadow: 0px 4px 0px #EE282D;;">Continue</a>
        @else --}}
            {{-- <a href="/questions/{{ $point->id }}/{{ $page->id + 1 }}" class="continue"
                style="background: #FF4347; box-shadow: 0px 4px 0px #EE282D;;">Continue</a> --}}
                <form action="/saveTemp" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="page_id" value="{{ $page->id }}">
                    <input type="hidden" name="point_id" value="{{ $point->id }}">
                    <input type="hidden" name="correct" value="0">
                    <button class="continue" style="background: #FF4347; box-shadow: 0px 4px 0px #EE282D;" type="submit">Continue</button>

                </form>
        {{-- @endif --}}
    </div>


    <script>
        function showDiv(id) {
            var div = document.getElementById(id);
            var hidd = document.getElementById('5');
            var barr = document.getElementById('barrier');
            div.style.display = 'flex';
            hidd.style.display = 'none';
            barr.style.display = 'flex';
        }
        </script>
        <script src="{{ asset('node_modules/aos/dist/aos.js') }}"></script>
</body>

<script>
    AOS.init();
</script>

</html>
