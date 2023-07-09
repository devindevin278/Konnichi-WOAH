<div class="greyy" id="barrier"></div>
    <div class="upper d-flex align-items-center">

        <form action="/questions/cancel" onsubmit="return confirmback()" method="post">
            @csrf
            <input type="hidden" name="point_id" value="{{ $point->id }}" id="">
            <button type="submit" class="back-button-out d-flex align-items-center" style="background-color: #FAEEE7">
                <svg class="back-button" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /> </svg>
            </button>
        </form>

        <div class="progress" id="process-bar">

            <div class="progress-bar" id="processing" role="progressbar" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="0" @if ($page->id % 10 == 0)
                style="width: 100%"
            @else
                style="width: {{ ($page->id % 10) * 10 }}%"
            @endif aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                <div id="process2"></div>
            </div>
        </div>
    </div>

    {{-- {{ mt_rand(1,4) }} --}}
    @if ($page->id == $point->pages->first()->id)

    <div id="loader">
        @if (mt_rand(1,4) == 1)
        @include('student.learn.loadingpage1')
        @elseif(mt_rand(1,4) == 2)
        @include('student.learn.loadingpage2')
        @elseif(mt_rand(1,4) == 3)
        @include('student.learn.loadingpage3')
        @elseif(mt_rand(1,4) == 4)
        @include('student.learn.loadingpage4')
        @else
        @include('student.learn.loadingpage4')
        @endif

    </div>
    @endif


