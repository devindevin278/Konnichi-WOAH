@extends('layouts.mainTeacher')


@section('content')

<section id="verifyStudent">

    {{-- <img src="{{ asset('storage/post-images/A Brief History of Fushimi Inari Taisha, Kyoto’s Most Important Shrine.jpg') }}" alt="" class="img-fluid"> --}}

    <div class="container mt-5">
        <div class="col-md-10 mx-auto">
            @if (!is_null($TeacherNotifications) && count($TeacherNotifications) > 0)
            <table class="table mt-5 text-center align-middle">
                <thead class="fs-5" style="border-bottom: 2.5px solid #33272A;">
                  <tr class="">
                    <th scope="col">Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Verification</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                    <tbody class="table_border">
                        @foreach ($TeacherNotifications as $TeacherNotification)
                        <tr style="@if($loop->odd)
                          background-color: #FFC6C7;
                          @elseif($loop->even)
                          background-color: #FAEEE7;
                          @endif

                          @if($loop->last)
                          border-bottom: 2.5px solid #33272A;
                          @endif
                          ">


                        @if($TeacherNotification->teacherid == auth()->user()->id)
                            <td >{{ $loop->iteration }}</th>
                            <td class="text-start col-md-2">{{ $TeacherNotification->name }}</td>
                            <td class="text-start col-md-3">{{ $TeacherNotification->email }}</td>
                            <td class="col-md-2">
                                @if ($TeacherNotification->verified)
                                    Verified
                                @else
                                    Pending
                                @endif
                            </td>
                            <td><a type="button" class="payment_detail text-black" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                data-bs-name="{{ $TeacherNotification->name }} " data-bs-email="{{ $TeacherNotification->email }}" data-bs-phone="{{ $TeacherNotification->phone }}" data-bs-address="{{ $TeacherNotification->address }}" data-bs-photo="{{ $TeacherNotification->photo }}"
                                data-bs-studentid="{{ $TeacherNotification->studentid }} " data-bs-teacherid="{{ $TeacherNotification->teacherid }}">Detail</a></td>
                        @endif

                    </tr>
                        @endforeach
                    </tbody>
              </table>
            @else

            <h1 class="text-center mt-5">No Data Yet</h1>

            @endif
        </div>

    </div>
</section>

<div class="modal fade w-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="modal-content">
            <div class="modal-header pe-5">
                <button type="button" class="ms-0 modal_back btn btn-back" data-bs-dismiss="modal" aria-label="Close" style="background-color: #FFC6C7">Back</button>
                <h1 class="modal-title text-start fs-4 pe-5" id="exampleModalLabel">Student's Data</h1>

            </div>
            <div class="modal-body d-flex flex-column">
                {{-- @foreach ($TeacherNotifications as $TeacherNotification) --}}
                {{-- @if (!is_null($TeacherNotification)) --}}


                <div class="justify-content-center mx-auto d-flex rounded-circle mb-3" style="height: 15vw; width: 15vw; overflow:hidden;">
                    <img id="recipient-photo"  alt="" class="img-fluid ">
                </div>
                <form action="/acceptedstudent" method="post" id="verify_student" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-1 d-flex">
                        <label for="recipient-name" class="col-form-label">Name</label><p>:</p>
                        <input type="text" name="name" class="form-control" id="recipient-name" readonly required>
                    </div>
                    <div class="mt-1 d-flex">
                        <label for="recipient-email" class="col-form-label">Email</label><p>:</p>
                        <input type="email" name="email" class="form-control" id="recipient-email" readonly required>
                    </div>
                    <div class="mt-1 d-flex">
                        <label for="recipient-phone" class="col-form-label">Phone</label><p>:</p>
                        <input type="text" name="phone" class="form-control" id="recipient-phone" readonly required>
                    </div>
                    <div class="mt-1 d-flex">
                        <label for="recipient-address" class="col-form-label">Address</label><p>:</p>
                        <input type="text" name="address" class="form-control" id="recipient-address" readonly required>
                    </div>
                    <div class="mt-1 d-flex">
                        {{-- <label for="recipient-email" class="col-form-label">Teacher ID</label><p>:</p> --}}
                        <input type="hidden" name="teacherid" class="form-control" id="recipient-teacherid" readonly required>
                    </div>
                    <div class="mt-1 d-flex">
                        {{-- <label for="recipient-email" class="col-form-label">Student ID</label><p>:</p> --}}
                        <input type="hidden" name="studentid" class="form-control" id="recipient-studentid" readonly required>
                    </div>
                </form>
                {{-- @endif --}}
                {{-- @endforeach --}}
            </div>

            <div class="line m-auto mb-4" style="height: 1px; width: 80%"></div>
            <div class="modal-button">
                <button type="button" class="btn mx-3 btn-back" style="background-color: #FF8BA7" onclick="submitForm()">Accept</button>

            </div>
        </div>
    </div>
  </div>

<script>


const exampleModal = document.getElementById('exampleModal');

if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget;
    const recipientName = button.getAttribute('data-bs-name');
    const recipientEmail = button.getAttribute('data-bs-email');
    const recipientPhone = button.getAttribute('data-bs-phone');
    const recipientAddress = button.getAttribute('data-bs-address');
    const recipientPhoto = button.getAttribute('data-bs-photo');
    const recipientStudentID = button.getAttribute('data-bs-studentid');
    const recipientTeacherID = button.getAttribute('data-bs-teacherid');

    // Update the modal's content.
    const modalBodyInputName = exampleModal.querySelector('.modal-body input#recipient-name');
    const modalBodyInputEmail = exampleModal.querySelector('.modal-body input#recipient-email');
    const modalBodyInputPhone = exampleModal.querySelector('.modal-body input#recipient-phone');
    const modalBodyInputAddress = exampleModal.querySelector('.modal-body input#recipient-address');
    const modalBodyInputPhoto = exampleModal.querySelector('.modal-body img#recipient-photo');
    const modalBodyInputStudentID = exampleModal.querySelector('.modal-body input#recipient-studentid');
    const modalBodyInputTeacherID = exampleModal.querySelector('.modal-body input#recipient-teacherid');

    modalBodyInputName.value = recipientName;
    modalBodyInputEmail.value = recipientEmail;
    modalBodyInputPhone.value = recipientPhone;
    modalBodyInputAddress.value = recipientAddress;
    modalBodyInputPhoto.src = "storage/"+ recipientPhoto;
    console.log(modalBodyInputPhoto)
    modalBodyInputStudentID.value = recipientStudentID;
    modalBodyInputTeacherID.value = recipientTeacherID;
  });
}

function submitForm() {
    if (confirm("Are you sure you want to verify this user?")) {
        var form = document.getElementById("verify_student");

        console.log(form);
        form.submit();
    }
}


</script>

@endsection
