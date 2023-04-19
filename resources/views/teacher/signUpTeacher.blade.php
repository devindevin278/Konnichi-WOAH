@extends('layouts.mainStudent')

@section('content')
    <main class="form-signin">
    <form class=" m-auto">

      <h1 class="h3 fs-1" style="font-weight: 600;">Sign Up</h1>

      <div class="transisi d-flex">
        <a href="/signUpStudent" >As a Student</a>
        <div class="divider"></div>
        <a href="" class="text-decoration-underline">As a Teacher</a>
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

      <div class="img_upload">
        <p class="certif_title">Certificate</p>
        <div class="uploadOuter">

          <span class="dragBox" >
            <img src="img/Upload icon.png" alt="">
            <p class="atas m-0 mb-2">Drag and Drop files or <a class="text-decoration-underline" style="color: #FF8BA7">Browse</a></p>
            <p class="bawah">Supported formates: JPEG, PNG, PDF</p>
          <input type="file" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile"  />
          </span>

        </div>
        <div id="preview"></div>
      </div>

      <button class="w-100 btn btn-lg btn-primary submit" type="submit">Sign Up</button>

      <div class="policy">
        <p class="mt-3 text-body-secondary" style="opacity: 80%;">By Signing Up, You are Accepting</p>
        <p class=""><b>Terms of Service and Privacy Policy</b></p>
      </div>

      <p class="mt-4 mb-3 text-body-secondary" style="opacity: 70%;">Already have an account? <a href="/login" style="font-weight:500;">Login</a></p>
    </form>

</main>
@endsection

<script src="js/script_signUpTeacher.js"></script>
