@extends('layouts.mainStudent')

@section('content')

<section class="profileStudent">

        <div class="mt-5">

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show col" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @elseif(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show col" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif

        </div>

        <div class="container col container-profileStudent bg-white mt-5 mb-5">


            <div class="row">

                <div class="col">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">My Profile</h4>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="text-right">Manage your profile information to control, protect, and secure, your account.</h6>
                        </div>
                        <div style="border: 1px solid #A08A8F;"></div>

                    <form class="row mt-3" action="/profileStudent/{{ $user->id }}" method="post" id="form-control"  enctype="multipart/form-data">
                        @method('PUT')
                            @csrf

                            <div class="col">

                                <div class="container col-md-3 row mt-2 d-flex m-auto justify-content-center" style="width: fit">


                                    <div class="mt-1 d-flex justify-content-around align-items-center ">


                                        <input type="hidden" name="oldImage" value="{{ $user->photo }}">

                                        @if ($user->photo)
                                            <div style="display: flex; justify-content:center;">

                                                <img src="{{ asset('storage/' . $user->photo) }}" class="img-preview img-fluid img-fluid"
                                                style="display:block; border-radius: 50%; max-height: 100%;width: 200px;
                                                height: 200px;
                                                border-radius: 50%;
                                                border:solid #A08A8F;">

                                            </div>

                                        @else
                                            <div class="mt-3 d-flex justify-content-start align-items-start float-left" >
                                                <img class=" img-preview img-fluid " style="display:block; border-radius: 50%; max-height: 100%;width: 200px;
                                                height: 200px;
                                                border-radius: 50%;
                                                border:solid #A08A8F;">
                                            </div>

                                        @endif
                                    </div>



                                    <div class="container d-flex justify-content-center align-items-center mt-3">
                                        <div class="photo-input">
                                            <input type="file" id="photo" name="photo" accept="image/*" class="photo" onchange="previewImage()" >
                                            <label for="photo">Choose a photo</label>
                                        </div>
                                    </div>

                                    <div class="d-flex row text-center justify-content-around m-auto mt-2" style="width: 200px; font-weight: 800; font-size: 12px;">
                                        File Extension: .JPG
                                    </div>
                                    <div class="d-flex row text-center justify-content-around m-auto" style="width: 200px; font-weight: 800; font-size: 12px;">
                                        File Size: Max 2 Mb
                                    </div>

                                    <div style="border: 1px solid #A08A8F; margin:10px;"></div>
                                </div>
                            </div>

                            <div>

                            </div>


                            {{-- Name --}}
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right" style="height:fit-content; width: 120px; margin:auto; text-align: right;">Name</label>
                                </div>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter your name" value="{{ old('name', $user->name) }}" style="border: solid #A08A8F;">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Address --}}
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right" style="height:fit-content; width: 120px; margin:auto; text-align: right;">Address</label>
                                </div>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Enter your address" value="{{ old('address', $user->address) }}" style="border: solid #A08A8F;">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right" style="height:fit-content; width: 120px; margin:auto; text-align: right;">Email</label>
                                </div>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email" value="{{ old('email', $user->email) }}" style="border: solid #A08A8F;">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Phone --}}
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right" style="height:fit-content; width: 120px; margin:auto; text-align: right;">Phone Number</label>
                                </div>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phoneNumber" placeholder="Enter your phone number" value="{{ old('phoneNumber', $user->phoneNumber) }}" style="border: solid #A08A8F;">
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Gender --}}
                            <div class="d-flex align-item-center mt-4" style="gap:10px" >
                                <div class="d-flex">
                                    <label class="labels text-align-right" style="height:fit-content; width: 120px; margin:auto; text-align: right;">Gender</label>
                                </div>

                                <div class="d-flex align-item-center " style="gap:10px">
                                    <div class="form-check">
                                        <input class="form-check-input genderselect" type="radio" name="gender" id="gender" value="1" style="border: solid #A08A8F;" checked >
                                        <label class="form-check-label" for="gender">
                                        Male
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender" value="0" style="border: solid #A08A8F;" checked>
                                        <label class="form-check-label" for="gender">
                                        Female
                                        </label>
                                    </div>
                                </div>
                            </div>
s

                            {{-- DOB --}}
                            <div class="d-flex align-item-center mt-4" style="gap: 10px;">
                                <div class="d-flex">
                                    <label class="labels text-align-right" style="height:fit-content; width: 120px; margin:auto; text-align: right;">DOB</label>
                                </div>
                                <input type="date" class="form-control @error('DOB') is-invalid @enderror" name="DOB" placeholder="Enter your date of birth" value="{{ old('DOB', $user->DOB) }}" style="border: solid #A08A8F;">
                                @error('DOB')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                        </div>
                        <div class="mb-5 text-center"><button class="btnsave" type="submit">Save</button></div>
                    </form>


                </div>
            </div>
        </div>





</section>

<script>

    function previewImage(){
        const image = document.querySelector('#photo');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        imgPreview.style.borderRadius = '50%';
        imgPreview.style.maxHeight = '100%';
        // imgPreview.style.width = '300px';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFRevent){
            imgPreview.src = oFRevent.target.result;
        }
    }



</script>

@endsection

