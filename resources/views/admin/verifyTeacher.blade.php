@extends('layouts.mainAdmin')



@section('content')

<section id="verifyPayment">

    <div class="container mt-5">
        <div class="col-md-10 mx-auto">
            <table class="table mt-5 text-center align-middle">
                <thead class="fs-5" style="border-bottom: 2.5px solid #33272A;">
                  <tr class="">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Certificate</th>
                    <th scope="col">Verification</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                    <tbody class="table_border">
                        @foreach ($certificates as $certificate)
                        <tr style="@if($loop->odd)
                          background-color: #FFC6C7;
                          @elseif($loop->even)
                          background-color: #FAEEE7;
                          @endif

                          @if($loop->last)
                          border-bottom: 2.5px solid #33272A;
                          @endif
                          ">
                          <td >{{ $loop->iteration }}</th>
                          <td class="text-start col-md-2">{{ $certificate['name'] }}</td>
                          <td class="text-start col-md-3">{{ $certificate['email'] }}</td>
                          <td class="text-start col-md-2"><img class="d-flex mx-auto my-3" src="img/verifyTeacher/{{ $certificate['certificate'] }}" alt=""></td>
                          <td class="col-md-2">{{ $certificate['status'] }}</td>
                          <td><a type="button" class="payment_detail text-black" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-image="{{ $certificate['certificate'] }}" data-bs-name="{{ $certificate['name'] }} " data-bs-email="{{ $certificate['email'] }}">Detail</a></td>
                        </tr>
                        @endforeach
                    </tbody>
              </table>
        </div>

    </div>
</section>



<script src="{{ asset('js/verifyTeacher.js') }}"></script>

@endsection

<div class="modal fade w-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" id="modal-content">
        <div class="modal-header pe-5">
            <button type="button" class="ms-0 modal_back" data-bs-dismiss="modal" aria-label="Close" style="background-color: #FFC6C7">Back</button>
          <h1 class="modal-title text-start fs-4 pe-5" id="exampleModalLabel">Student's Payment Data</h1>

        </div>
        <div class="modal-body">
          <form>
            <div class="mb-1 d-flex">
                <label for="recipient-name" class="col-form-label">Name</label><p>:</p><input type="text" class="form-control" id="recipient-name" disabled>
            </div>
            <div class="mt-1 d-flex">
                <label for="recipient-email" class="col-form-label">Email</label><p>:</p>
                <input type="text" class="form-control" id="recipient-email" disabled>
            </div>
            <div class="mt-1 d-flex">
                <label for="recipient-payment" class="col-form-label">Payment</label><p>:</p>
                <img id="recipient-image" src="" alt="">
            </div>
          </form>
        </div>

        <div class="line m-auto mb-4" style="height: 1px; width: 80%">

        </div>
        <div class="modal-button">
          <button type="button" class="btn mx-3" style="background-color: #FFC6C7">Decline</button>
          <button type="button" class="btn mx-3" style="background-color: #FF8BA7">Accept</button>
        </div>
      </div>
    </div>
  </div>
