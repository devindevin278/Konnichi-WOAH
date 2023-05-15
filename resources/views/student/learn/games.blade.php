@extends('student.learn.layouts.main')

@section('learnContent')

<div class="col-md-7">
    <h1>Games</h1>

    @foreach ($units as $unit)
        <div class="card">
            <p>{{ $unit->Content }}</p>
            @foreach ($unit->points as $point)
                <a href="/questions/{{ $point->id }}">{{ $point->id }}</a>
            @endforeach
        </div>
    @endforeach

</div>

<div class="col-md-3" id="progress_sidebar">
    @include('student.learn.layouts.progress')
</div>

@endsection
