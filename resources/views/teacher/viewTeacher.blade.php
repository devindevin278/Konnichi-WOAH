@extends('layouts.mainStudent')

@section('content')
<section class="viewTeacher pt-1 m-auto">

    <div class=" container row d-flex  p-5 pt-0 m-auto" style="border-radius:30px; width:100%;">
        <a class="btn btn-back" style="background-color:#FFC6C7; width: fit-content" href="/teacher">Back</a>
        <div class="d-flex justify-content-around row mt-2" >


            <div class="col d-flex mt-3 ">
                <div class="row d-flex align-items-start me-5" style="width:65%;">
                    <div class="row d-flex align-items-start " style="font-weight: 600; font-size: 25px;">
                        Private Japanesse classes for students and adults, with learning materials tailored to your specific needs. Because practice makes perfect, let me assist you in learning.
                    </div>
                    <div class="row d-flex align-items-start mt-5" style="font-weight: 600; font-size: 20px;">
                        Course Location

                    </div>
                    <div class="d-flex row gap-5 mt-3" style="font-weight: 400;">
                        <div class="mt-3 col d-flex align-items-center justify-content-center rounded-5"style="border: solid black; width:fit;">

                            {{-- <div> --}}
                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10 10C10 8.89543 10.8954 8 12 8C13.1046 8 14 8.89543 14 10C14 11.1046 13.1046 12 12 12C10.8954 12 10 11.1046 10 10Z" fill="#000000"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C7.58172 2 4 5.58172 4 10C4 14.4183 7.58172 18 12 18C16.4183 18 20 14.4183 20 10C20 5.58172 16.4183 2 12 2ZM12 6C9.79086 6 8 7.79086 8 10C8 12.2091 9.79086 14 12 14C14.2091 14 16 12.2091 16 10C16 7.79086 14.2091 6 12 6Z" fill="#000000"></path> <path d="M7.26067 17.6525L6.70006 18.4C5.5876 19.8833 6.64595 22 8.50006 22H15.5001C17.3542 22 18.4125 19.8833 17.3001 18.4L16.7394 17.6525C15.363 18.5067 13.7391 19 12 19C10.2609 19 8.63706 18.5067 7.26067 17.6525Z" fill="#000000"></path> </g></svg>
                            {{-- </div> --}}
                            <div>
                                Online
                            </div>
                        </div>

                        <div class="col mt-3 d-flex align-items-center justify-content-center rounded-5"style="border: solid black; ">
                            <div class="p-1">
                                <svg width="30px" height="30px" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="#231F20" d="M32,0C18.745,0,8,10.745,8,24c0,5.678,2.502,10.671,5.271,15l17.097,24.156C30.743,63.686,31.352,64,32,64 s1.257-0.314,1.632-0.844L50.729,39C53.375,35.438,56,29.678,56,24C56,10.745,45.255,0,32,0z M32,38c-7.732,0-14-6.268-14-14 s6.268-14,14-14s14,6.268,14,14S39.732,38,32,38z"></path> <path fill="#231F20" d="M32,12c-6.627,0-12,5.373-12,12s5.373,12,12,12s12-5.373,12-12S38.627,12,32,12z M32,34 c-5.523,0-10-4.478-10-10s4.477-10,10-10s10,4.478,10,10S37.523,34,32,34z"></path> </g> </g></svg>
                            </div>
                            <div>
                                Offline
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex mt-5 p-5 gap-2 rounded-5" style="background-color: #ffffff">
                        <h4 class="" style="color:#000000">
                            Teacher's Description
                        </h4>
                        <p>{{ $user->descteacher }}</p>
                    </div>

                    <div class="container d-flex justify-content-start row mt-3 gap-3 p-3">


                    </div>
                </div>

                <div class="row d-flex align-items-start justify-content-around" style="width:30%; height: 400px;">
                    <div class="row d-flex justify-content-center bg-white p-3 shadow" style="border-radius: 30px; height: 100%; ">
                        <div class="d-flex justify-content-center mt-2">
                            <img class="shadow teachphoto" src="{{ asset('storage/'. $user->photo) }} " alt=""
                        style="width:200px; height:200px; border-radius: 50%; overflow:hidden; object-fit: cover; ">
                        </div>

                        <div class="d-flex justify-content-center text-center align-items-center p-0" style="width:60%;">
                            <h4>
                                {{ $user->name }}
                            </h4>
                        </div>
                        <div class="row d-flex justify-content-center text-center align-items-center p-0" style="width:60%;">

                               Tuition fee:
                               <small style="font-weight: 600">
                                Rp {{ $user->price }}/Week
                                </small>

                        </div>

                        <form class="d-flex justify-content-center align-items-center" id="submitrequest" action="/requestTeacher" method="post" >
                            @csrf
                            <input type="hidden" name="name" value="{{ auth()->user()->name }}">
                            <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                            <input type="hidden" name="teacherid" value="{{ $user->id }}">
                            <input type="hidden" name="studentid" value="{{ auth()->user()->id }}">
                            {{-- <img class="req" src="" alt=""> --}}
                            <div class="mt-2 col d-flex reqteacher justify-content-center">
                                <div class="d-flex justify-content-center align-items-center">

                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 16H4V4H20V6M7 18.5V21L12 16H20V10" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </div>
                                <button type="submit"  id="requestTeacherButton"  style="width:60%; height: 40px; font-weight:600;" >Request Teacher</button>
                            </div>
                        </form>



                    </div>

                </div>
                <div id="popup_confirmrequest" class="popup_confirmrequest">
                    @if (!auth()->user()->address)
                    <div class="popup_confirmrequest-content d-flex flex-column">
                        <span class="popup_confirmrequest-close ms-auto" onclick="closePopup()">&times;</span>
                        <div class="img-fluid d-flex">
                            <img class="w-50 mx-auto" src="{{ asset('Assets/notecat.png') }}" alt="">
                        </div>
                        <h5 class="mt-3">Profile not completed yet</h5>
                        <p>Fill your profile picture, address and phone number to request teacher now!</p>
                        {{-- <a class="button-back" href="/profileStudent">Go to profile</a> --}}
                        <a class="btn btn-back ms-auto rounded-5" style="background-color:#FFC6C7; width: fit-content" href="/profileStudent">Go to profile</a>
                    </div>
                    @else
                    <div class="popup_confirmrequest-content d-flex flex-column">
                        <span class="popup_confirmrequest-close ms-auto" onclick="closePopup()">&times;</span>
                        <div class="img-fluid d-flex">
                            <img class="w-50 mx-auto" src="{{ asset('Assets/breadcat.png') }}" alt="">
                        </div>
                        <h5>Send request to {{ $user->name }}?</h5>
                        <p class="m-0">Make sure your personal information is correct.</p>
                        <label class="text-secondary mt-1" style="font-size: 12px">Address:</label>
                        <p class="m-0">{{ auth()->user()->address }}</p>
                        <label class="text-secondary" style="font-size: 12px">Phone:</label>
                        {{-- <label>Phone:</label> --}}
                        <p>{{ auth()->user()->phoneNumber }}</p>

                        <div class="button ms-auto">
                            <a class="btn btn-back ms-auto rounded-5" style="border: 2px solid #FFC6C7; width: fit-content" href="/profileStudent">Edit profile</a>
                        <button class="btn btn-back ms-auto rounded-5" onclick="return form_submit.submit()" style="background-color:#FFC6C7; width: fit-content">Send request</button>
                        </div>
                      </div>
                    @endif
                  </div>
            </div>
        </div>

    </div>

</section>

<script>

    // function confirmrequest(event) {
        // event.preventDefault();
        // return false;
        // }

        let form_submit = document.getElementById('submitrequest')
        form_submit.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Perform your custom form submission logic here
            showPopup();
        // ...

        // Example: Display a success message
        // alert('Form submitted successfully!');
    });


function showPopup() {
  var popup = document.getElementById('popup_confirmrequest');
  popup.style.display = 'block';
//   return false;
}

function closePopup() {
  var popup = document.getElementById('popup_confirmrequest');
  popup.style.display = 'none';
}

</script>



@endsection
