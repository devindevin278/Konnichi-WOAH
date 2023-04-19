@extends('layouts.mainStudent')

@section('content')
    <main class="form-login">
    <form class=" m-auto">

      <h1 class="h3 fs-1 mb-4" style="font-weight: 600;">Login</h1>


      <div class="form-floating">
        <input type="email" class="w-100" id="floatingInput" placeholder="Email">
        {{-- <label for="floatingInput">Email</label> --}}
      </div>

      <div class="form-floating">
        <input type="password" class="w-100" id="floatingPassword" placeholder="Password">
        {{-- <label for="floatingPassword">Password</label> --}}
      </div>

      <button class="w-100 btn btn-lg btn-primary submit mb-3" type="submit">Login</button>

      <a class="forget text-decoration-underline" href="">Forgot Password?</a>

      <p class="mt-4 mb-3 text-body-secondary" style="opacity: 70%;">Don't have an account yet? <a href="/signUpStudent" style="font-weight:500;">Sign Up</a></p>
    </form>

</main>
@endsection
