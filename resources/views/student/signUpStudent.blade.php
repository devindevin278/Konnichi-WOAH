@extends('layouts.mainStudent')

@section('content')
    <main class="form-signin margin-top">
    <form class=" m-auto" action="/signUpStudent" method="post">
        @csrf
      <h1 class="h3 fs-1" style="font-weight: 600;">Sign Up</h1>

      <div class="transisi d-flex">
        <a href="" class="text-decoration-underline">As a Student</a>
        <div class="divider"></div>
        <a href="/signUpTeacher">As a Teacher</a>
      </div>

      <div class="form-floating rounded">
        <input type="text" name="name" class="is-invalid w-100 @error('name')
        is-invalid
        @enderror" id="floatingInput" placeholder="Fullname"  value="{{ old('name') }}">
        @error('name')
            <p class="mb-0" style="color: red;">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-floating">
        <input type="email" name="email" class="w-100 @error('email')
        is-invalid
        @enderror" id="floatingInput" placeholder="Email" value="{{ old('email') }}">
        @error('email')
        <p class="mb-0" style="color: red;">{{ $message }}</p>
        @enderror
    </div>

      <div class="form-floating">
        <input type="password" name="password" class="w-100 @error('password')
        is-invalid
        @enderror" id="floatingPassword" placeholder="Password">
        @error('password')
        <p class="mb-0" style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <input type="text" name="isTeacher" value="0" class="d-none">

      <button class="w-100 mt-3 btn btn-lg btn-primary submit" type="submit">Sign Up</button>

      <div class="policy">
        <p class="mt-3 text-body-secondary" style="opacity: 80%;">By Signing Up, You are Accepting</p>
        <p class=""><b>Terms of Service and Privacy Policy</b></p>
      </div>

      <p class="mt-4 mb-3 text-body-secondary" style="opacity: 70%;">Already have an account? <a href="/login" style="font-weight:500;">Login</a></p>
      <a class="mt-4 mb-3 text-body-secondary" style="opacity: 70%; font-weight:500;" href="{{ route('register.google') }}">Sign Up with Google</a>

    </form>

</main>
@endsection
