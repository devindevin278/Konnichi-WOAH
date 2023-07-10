@extends('layouts.mainStudent')

@section('content')
    <main class="form-login">
    <div class=" m-auto" >

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

      <h1 class="h3 fs-1 mb-4" style="font-weight: 600;">Login</h1>

    <form class=" m-auto" action="/login" method="post">
        @csrf
        <div class="form-floating">
        <input type="email" class="w-100" id="floatingInput" placeholder="Email" name="email">
        {{-- <label for="floatingInput">Email</label> --}}
      </div>

      <div class="form-floating">
        <input type="password" class="w-100" id="floatingPassword" placeholder="Password" name="password">
        {{-- <label for="floatingPassword">Password</label> --}}
      </div>

      <button class="w-100 btn btn-lg btn-primary submit" type="submit">Login</button>

      <img src="{{ asset('img/Text Line.png') }}" style="widht:20px; height:20px;" class="mt-3">
      <a  href="{{ route('login.google') }}">
        <h5 class="d-flex justify-content-center gap-2 align-items-center text-center fs-6 mt-3 bg-white signupgoogle pt-2 pb-2" style="font-weight:400;"><img src="{{ asset('img/google.png') }}" style="widht:20px; height:20px;" > Sign Up with Google </h5>
      </a>
      <a class="forget text-decoration-underline" href="">Forgot Password?</a>

      <p class="mt-4 mb-3 text-body-secondary" style="opacity: 70%;">Don't have an account yet? <a href="/signUpStudent" style="font-weight:500;">Sign Up</a></p>
      {{-- <a class="mt-4 mb-3 text-body-secondary" style="opacity: 70%; font-weight:500;" href="{{ route('login.google') }}">Login with Google</a> --}}

    </form>
    </div>

</main>
@endsection
