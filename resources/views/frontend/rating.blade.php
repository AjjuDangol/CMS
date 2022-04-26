@extends('layouts.main')
@section('content')
    <div>
        <div class="container" style="padding: 30px 0">
            <div class="row">
                <div class="col-md-12">
                    <div id="review_form_wrapper">
                        <div id="review_form">
                            {{-- Message after rating --}}
                            @if (Session::has('message'))
                                <p class="alert-success" role="alert">{{ Session::get('message') }}</p>
                            @endif
                            <div id="respond" class="comment-respond">
                                {{-- rating route called --}}
                                <form action="{{ route('createRating') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="ItemName" class="form-label me-5">
                                                    <h3 class="fw-bold">Rating For</h3>
                                                </label>
                                                <br>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="ItemName" class="form-label me-5">
                                                            <h3 class="fw-bold">{{ $items->itemName }}</h3>
                                                        </label>
                                                        {{-- <label for="ItemName" class="form-label me-5">
                                                            <h3 class="fw-bold">{{ $items->image }}</h3>
                                                        </label> --}}

                                                        <img src="../image/{{ $items->image }}" class="card-img-top"
                                                            width="50" alt="...">
                                                    </div>

                                                    <div class="col-6">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">

                                                {{-- <input type="file" name="itemName" value="{{ $items->image }}" class="form-control" readonly> --}}
                                            </div>
                                            {{-- Rating designs --}}
                                            <input type="text" name="itemId" value="{{ $items->itemId }}" hidden>
                                            <div class="comment-form-rating">
                                                <p class="stars">
                                                <ul class="stars">
                                                    <li class="stars"><label for="rated-1"><i
                                                                class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input class="fa fa-star" type="radio" id="rated-1"
                                                            name="rating" value="1">
                                                    </li>


                                                    <li class="stars"><label for="rated-2"><i
                                                                class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="radio" id="rated-2" name="rating"
                                                            class=" stars fa fa-star fs-1  m-2" value="2">
                                                    </li>


                                                    <li class="stars"> <label for="rated-3"><i
                                                                class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="radio" id="rated-3" name="rating"
                                                            class=" stars fa fa-star fs-1 m-2" value="3">

                                                    </li>


                                                    <li class="stars"> <label for="rated-4"><i
                                                                class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="radio" id="rated-4" name="rating"
                                                            class="stars fa fa-star fs-1 m-2" value="4">
                                                    </li>


                                                    <li class="stars"><label for="rated-5"><i
                                                                class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="radio" id="rated-5" name="rating"
                                                            class="stars fa fa-star fs-1 m-2" value="5" checked="checked">
                                                    </li>
                                                </ul>
                                                {{-- Validation for rating --}}
                                                @error('rating')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                </p>

                                            </div>
                                            <br>

                                        </div>
                                        <div class="col-6">
                                            <div class="mt-5">
                                                {{-- Review --}}
                                                <h3>Review</h3>

                                                <p class="comment-form-comment">

                                                    <textarea id="comment" name="review" cols="45" rows="8" style="width: 500px"></textarea>
                                                </p>
                                                @error('review')
                                                    <span class="text-danger">! {{ $message }}</span>
                                                @enderror
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Add </button>
                                                </div>
                                                {{-- Validation for review --}}
                                                @error('commit')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">

                                </p> --}}
                                </form>

                            </div><!-- .comment-respond-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $('li').on('click', function() {
            $('li').removeClass('active');
            $('li').removeClass('secondary-active');
            $(this).addClass('active');

            $(this).prevAll().addClass('secondary-active')
        })
    </script>
@endsection
