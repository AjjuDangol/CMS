@extends('layouts.main')
@section('content')
    <div class="mb-5">
        <img src="../image/abc.jpg" alt="" height="800px" width="100%" >
        {{-- <div class="d-flex align-items-start" style="position: absolute; top: 20%; left: 0;">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
              <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
              <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
              <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"> <a class="nav-link " href="{{ route('allMenu') }}">Admin Menu</a></div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
            </div>
          </div> --}}
    </div>
    <div class="container d-flex justify-content-center mt-5 mb-5">
        <h1>OUR MENU</h1>
    </div>
    <div class="row mb-5">
        <div class="col-7 container">
            <img src="../image/menu.jpg" class="container ms-3" alt="" width="100%">
        </div>
        <div class="col">
            <h3>Food</h3>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia pariatur unde voluptatibus, ipsa illo, rem
            quo magnam nihil ipsum, facere reprehenderit inventore deserunt quia eaque impedit ex. Voluptate, obcaecati
            animi!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem exercitationem perferendis at molestias
            molestiae ipsum architecto quaerat ut culpa animi. Illum cum eum molestiae incidunt optio molestias unde earum
            asperiores.
        </div>

    </div>
    <div class="dropdown-divider"></div>

    <div class="row ms-4 mt-5 mb-5 container">

        <div class="col-8">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum aliquid nam porro voluptates sequi, quidem eaque
            qui sapiente quis cum impedit distinctio itaque debitis soluta. Impedit quos dolore qui expedita? Lorem ipsum
            dolor sit amet consectetur adipisicing elit. Dolore quaerat deleniti atque ratione praesentium sit numquam
            corporis veniam amet eos, nulla facere aliquid qui vero rerum porro consequatur vitae labore. Lorem ipsum, dolor
            sit amet consectetur adipisicing elit. Voluptatibus quidem rem, corporis ea, porro repellendus ipsa quaerat
            ducimus, labore assumenda laborum repudiandae voluptatum at! Iste cupiditate numquam doloremque provident
            facilis!
        </div>
        <div class="col ms-4 d-flex justify-content-center align-items-center">
            <h1>ABOUT US</h1>
        </div>
    </div>
@endsection
