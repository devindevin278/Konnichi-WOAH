@extends('layouts.mainTeacher')

@section('content')
    <main class="form-signin">
    <form class=" m-auto" action="/signUpTeacher" method="post" enctype="multipart/form-data">
        @csrf
      <h1 class="h3 fs-1" style="font-weight: 600;">Sign Up</h1>

      <div class="transisi d-flex">
        <a href="/signUpStudent" >As a Student</a>
        <div class="divider"></div>
        <a href="" class="text-decoration-underline">As a Teacher</a>
      </div>

      <div class="form-floating rounded">
        <input type="text" name="name" class="w-100 @error('name')
        is-invalid
        @enderror" id="floatingInput" placeholder="Fullname" value="{{ old('name') }}">
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

      <div class="img_upload">
        <p class="certif_title mt-3">Certificate</p>
        <div class="uploadOuter">

          <span class="dragBox" >
            <img src="img/Upload icon.png" alt="">
            <p class="atas m-0 mb-2">Drag and Drop files or <a class="text-decoration-underline" style="color: #FF8BA7">Browse</a></p>
            <p class="bawah">Supported formates: JPEG, PNG, PDF</p>
          <input type="file" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()"  id="photo" name="photo"  />
          </span>

        </div>
        <div id="preview"></div>
      </div>

      <input type="checkbox" name="userIsTeacher" value="true" checked>

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
