@extends('layouts.main')
@section('content')
    {{-- Menu Page//where the items are appeared --}}
    <form action="{{ route('createItem') }}" method="post" class="container" class="back">
        <h1 class="position-absolute ">OUR MENU</h1>
        <br>
        <div class="container mt-5">

        </div>
        {{-- External CSS --}}
        <div class="back container">

            <div>

                <div class="row container mt-4 pt-4">
                    @foreach ($item as $i)
                        <div class="col-md-4 mb-5">
                            <div class="card" style="width: 18rem;">
                                {{-- Display Image that admin choose --}}
                                <img src="../image/{{ $i->image }}" class="card-img-top" height="200" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $i->itemName }} - {{ $i->menu->menuName }}
                                    </h5>
                                    <p class="card-text">Rs. {{ $i->price }}</p>
                                    <div class="dropdown">
                                        {{-- Dropdown for more details --}}
                                        <a class="btn btn-info" role="button" id="dropdownMenuLink"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <div class="container">
                                                <div class="card-header ">
                                                    Ingredients
                                                </div>
                                                <p>{{ $i->description }}</p>
                                                <p>Rs. {{ $i->price }}</p>
                                                {{-- Buttons to order and review --}}
                                                <a href="{{ route('addOrder', ['itemId' => $i->itemId]) }}"
                                                    class="btn btn-primary">Order</a>
                                                <a href="{{ route('addRating', ['itemId' => $i->itemId]) }}"
                                                    class="btn btn-primary">Review</a>
                                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                Rating
                                                              </button> --}}

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
    </form>
@endsection
