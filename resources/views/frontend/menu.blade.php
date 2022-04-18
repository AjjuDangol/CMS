@extends('layouts.main')
@section('content')
    <form action="{{ route('createItem') }}" method="post" class="container" class="back">
        <!-- Modal -->
        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Rating</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> --}}
        {{-- <div class="modal-body">
                    {{-- <form class="form-horizontal poststars" action="{{route('allItem', $item->itemId)}}" id="addStar" method="POST">
                        {{ csrf_field() }}
                              <div class="form-group required">
                                <div class="col-sm-12">
                                  <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                                  <label class="star star-5" for="star-5"></label>
                                  <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                                  <label class="star star-4" for="star-4"></label>
                                  <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                                  <label class="star star-3" for="star-3"></label>
                                  <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                                  <label class="star star-2" for="star-2"></label>
                                  <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                                  <label class="star star-1" for="star-1"></label>
                                 </div>
                              </div>
                      </form>
                      Your food is placed to order
                </div> --}}
        {{-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
        </div>
        </div>
        </div>
        <h1 class="position-absolute ">OUR MENU</h1>
        <br>
        <div class="container mt-5">

        </div>
        <div class="back container">
            {{-- <ul class="nav justify-content-center m-2 p-2" id="myTab" role="tablist">
                @foreach ($menu as $m)
                    <li class="{{ $m->menuId ? 'active' : '' }}" role="presentation">

                        <a href="#home{{ $m->menuId }}" class="m-2 btn" aria-controls="home" role="tab"
                            data-toggle="tab">{{ $m->menuName }}</a>
                        {{-- <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" --}}
            {{-- type="button" role="tab" aria-controls="home" aria-selected="true">{{ $m->menuName }}</button>
                    </li>
                @endforeach

            </ul> --}}
            {{-- @foreach ($menu as $m)
                <a href="{{ route('menu', ['menuId' => $m->menuId]) }}">{{ $m->menuName }}</a>
            @endforeach --}}
            <div>
                @foreach ($menu as $m)
                    {{-- <div role="tabpanel" class="tab-pane {{ $m->menuId == 1 ? 'active' : '' }}" id="home{{ $m->menuId }}" class="active"> --}}
                    <div>
                        <div class="row container mt-4 pt-4">
                            @foreach ($item as $i)
                                <div class="col-md-4 mb-5">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../image/{{ $i->image }}" class="card-img-top" height="200"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $i->itemName }} - {{ $i->menu->menuName }}
                                            </h5>
                                            <p class="card-text">Rs. {{ $i->price }}</p>
                                            <div class="dropdown">
                                                <a class="btn btn-info" href="home{{ $m->menuId }}" role="button"
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
                @endforeach
            </div>
        </div>

        {{-- <div role="tabpanel">
            <ul class="nav nav-tabs" role="tablist">
                @foreach ($menu as $menu)
                  <li role="presentation" class="{{ $menu->menuId == 1 ? 'active' : '' }}">
                    <a href="#home{{ $menu->id }}" aria-controls="home" role="tab" data-toggle="tab">{{ $menu->menuName }}</a>
                  </li>
                @endforeach
            </ul>
            <div class="tab-content">
             @foreach ($menu as $menu)
                  <div role="tabpanel" class="tab-pane {{ $menu->menuId == 1 ? 'active' : '' }}" id="home{{ $menu->menuId }}" class="active">
                    <ul>
                      @foreach ($menu->item as $item)
                         <li>{{ $item->itemName}}</li>
                      @endforeach
                    </ul>
                  </div>
             @endforeach
            </div>
          </div> --}}
    </form>
    {{-- <form class="form-horizontal poststars" action="{{route('productStar', $item->itemId)}}" id="addStar" method="POST">
        {{ csrf_field() }}
              <div class="form-group required">
                <div class="col-sm-12">
                  <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                  <label class="star star-5" for="star-5"></label>
                  <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                  <label class="star star-4" for="star-4"></label>
                  <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                  <label class="star star-3" for="star-3"></label>
                  <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                  <label class="star star-2" for="star-2"></label>
                  <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                  <label class="star star-1" for="star-1"></label>
                 </div>
              </div>
      </form> --}}
@endsection
