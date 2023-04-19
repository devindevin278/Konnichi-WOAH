@extends('layouts.mainStudent')

@section('content')
    <main class="form-signin">
    <form class=" m-auto">

      <h1 class="h3 fs-1" style="font-weight: 600;">Sign Up</h1>

      <div class="transisi d-flex">
        <a href="" class="text-decoration-underline">As a Student</a>
        <div class="divider"></div>
        <a href="">As a Teacher</a>
      </div>

      <div class="form-floating rounded">
        <input type="email" class="w-100" id="floatingInput" placeholder="Fullname" >
        {{-- <label for="floatingInput">Fullname</label> --}}
      </div>

      <div class="form-floating">
        <input type="email" class="w-100" id="floatingInput" placeholder="Email">
        {{-- <label for="floatingInput">Email</label> --}}
      </div>

      <div class="form-floating">
        <input type="password" class="w-100" id="floatingPassword" placeholder="Password">
        {{-- <label for="floatingPassword">Password</label> --}}
      </div>

      <button class="w-100 btn btn-lg btn-primary submit" type="submit">Sign Up</button>

      <div class="policy">
        <p class="mt-3 text-body-secondary" style="opacity: 80%;">By Sign Up, You are Accepting</p>
        <p class=""><b>Terms of Service and Privacy Policy</b></p>
      </div>

      <p class="mt-4 mb-3 text-body-secondary" style="opacity: 80%;">Already have an account? <a href="" style="font-weight:500;">Login</a></p>
    </form>

</main>
@endsection
