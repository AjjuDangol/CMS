@extends('layouts.main')
@section('content')
    <div>
        <div class="container" style="padding: 30px 0">
            <div class="row">
                <div class="col-md-12">
                    <div id="review_form_wrapper">
                        <div id="review_form">
                            @if (Session::has('message'))
                                <p class="alert alert-success" role="alert">{{ Session::get('message') }}</p>
                            @endif
                            <div id="respond" class="comment-respond">

                                <form action="{{ route('createRating') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="ItemName" class="form-label me-5">
                                            <h3 class="fw-bold">Rating For</h3>
                                        </label>
                                        <label for="ItemName" class="form-label me-5">
                                            <h3 class="fw-bold">{{ $items->itemName }}</h3>
                                        </label>
                                    </div>
                                    <div class="mb-3">

                                        {{-- <input type="file" name="itemName" value="{{ $items->image }}" class="form-control" readonly> --}}
                                    </div>
                                    <input type="text" name="itemId" value="{{ $items->itemId }}" hidden>
                                    <div class="comment-form-rating">
                                        <p class="stars">
                                        <ul class="stars">
                                            <li class="stars"><label for="rated-1"><i class="fa fa-star"
                                                        aria-hidden="true"></i></label>
                                                <input class="fa fa-star" type="radio" id="rated-1" name="rating"
                                                    value="1">
                                            </li>


                                            <li class="stars"><label for="rated-2"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                <input type="radio" id="rated-2" name="rating" class=" stars fa fa-star fs-1  m-2" value="2"></li>


                                            <li class="stars"> <label for="rated-3"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                <input type="radio" id="rated-3" name="rating" class=" stars fa fa-star fs-1 m-2" value="3">

                                            </li>


                                            <li class="stars"> <label for="rated-4"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                <input type="radio" id="rated-4" name="rating" class="stars fa fa-star fs-1 m-2" value="4">
                                                 </li>


                                            <li class="stars"><label for="rated-5"><i class="fa fa-star" aria-hidden="true"></i></label>
                                                <input type="radio" id="rated-5" name="rating" class="stars fa fa-star fs-1 m-2" value="5" checked="checked"></li>
                                        </ul>
                                        {{-- <label for="rated-1"></label>
                                            <input class="stars fa fa-star fs-1 m-2" type="radio" id="rated-1" name="rating"  value="1">
                                            <label for="rated-2"></label>
                                            <input type="radio" id="rated-2" name="rating" class=" stars fa fa-star fs-1  m-2" value="2">
                                            <label for="rated-3"></label>
                                            <input type="radio" id="rated-3" name="rating" class=" stars fa fa-star fs-1 m-2" value="3">
                                            <label for="rated-4"></label>
                                            <input type="radio" id="rated-4" name="rating" class="stars fa fa-star fs-1 m-2" value="4">
                                            <label for="rated-5"></label>
                                            <input type="radio" id="rated-5" name="rating" class="stars fa fa-star fs-1 m-2" value="5" checked="checked"> --}}
                                        {{-- @error('rating') <span class="text-danger">{{ $message }}</span>

                                        @enderror --}}
                                        </p>
                                    </div>
                                    <br>
                                    <h3>Review</h3>

                                    <p class="comment-form-comment">

                                        <textarea id="comment" name="review" cols="45" rows="8"></textarea>
                                    </p>
                                    <button type="submit" class="btn btn-primary">Add &rarr;</button>
                                    {{-- <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                    @error('commit') <span class="text-danger">{{ $message }}</span>

                                    @enderror
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
