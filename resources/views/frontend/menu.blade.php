@extends('layouts.main')
@section('content')
    <form action="{{ route('createItem') }}" method="post" class="container">

        <ul class="nav justify-content-center m-2 p-2" id="myTab" role="tablist">
            @foreach ($menu as $m)
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                        role="tab" aria-controls="home" aria-selected="true">{{ $m->menuName }}</button>
                </li>
            @endforeach
            {{-- <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">Breakfast</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                    role="tab" aria-controls="contact" aria-selected="false">Dinner</button>
            </li> --}}
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            @foreach ($item as $i)
                                <div class="col-md-4 mb-5">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../image/{{ $i->image }}" class="card-img-top" height="200"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $i->itemName }}</h5>
                                            <p class="card-text">Rs. {{ $i->price }}</p>
                                            <div class="dropdown">
                                                <a class="btn btn-info" href="#" role="button"
                                                    id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                    More
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <div class="container">
                                                        <div class="card-header ">
                                                            Ingredients
                                                        </div>
                                                        <p>{{ $i->description }}</p>
                                                        <p>Rs. {{ $i->price }}</p>
                                                        <a class="nav-link btn btn-primary" href="{{ route('addOrder',['itemId' => $i->itemId]) }}">Order</a>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
