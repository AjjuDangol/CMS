@extends('layouts.main')
@section('content')


    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <form action="{{ route('createHome') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">

        <div class="mb-3">
            <label for="menuDescription" class="form-label ">Menu Description</label>
            <input type="text" name="menuDescription" class="ms-5">
        </div>
        <div class="mb-3">
            <label for="aboutDescription" class="form-label ">About Description</label>
            <input type="text" name="aboutDescription" class="ms-5">
        </div>
        <div class="mb-3">
            <label for="menuName" class="form-label">Main Image</label>
            <input type="file" name="file" class="form-control">
        </div>
        <div class="mb-3">
            <label for="menuName" class="form-label">Menu Image</label>
            <input type="file" name="file" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add &rarr;</button>
        </div>
    </form>

@endsection
