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
                                <p class="comment-notes">
                                    <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                </p>
                                <div class="comment-form-rating">
                                    <span>Your rating</span>
                                    <p class="stars">

                                        <label for="rated-1"></label>
                                        <input type="radio" id="rated-1" name="rating" value="1" >
                                        <label for="rated-2"></label>
                                        <input type="radio" id="rated-2" name="rating" value="2" >
                                        <label for="rated-3"></label>
                                        <input type="radio" id="rated-3" name="rating" value="3">
                                        <label for="rated-4"></label>
                                        <input type="radio" id="rated-4" name="rating" value="4" >
                                        <label for="rated-5"></label>
                                        <input type="radio" id="rated-5" name="rating" value="5" checked="checked">
                                        @error('rating') <span class="text-danger">{{ $message }}</span>

                                        @enderror
                                    </p>
                                </div>

                                <p class="comment-form-comment">
                                    <label for="comment">Your review <span class="required">*</span>
                                    </label>
                                    <textarea id="comment" name="review" cols="45" rows="8" ></textarea>
                                </p>
                                <button type="submit" class="btn btn-primary">Add &rarr;</button>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                    @error('commit') <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                </p>
                            </form>

                        </div><!-- .comment-respond-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
