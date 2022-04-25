@extends('layouts.main')
@section('content')
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <form action="{{ route('createItem') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="menuName" class="form-label ">
                            <h3>Item Name</h3>
                        </label>
                        <input type="text" name="itemName" class="form-control ">
                    </div>
                    @error('itemName')
                        <span class="text-danger">! {{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="menuName" class="form-label">
                            <h3>Item Image</h3>
                        </label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    @error('image')
                        <span class="text-danger">! {{ $message }}</span>
                    @enderror
                </div>
                <div class="col-6">

                    <div class="mb-3">
                        <label for="menuCategory" class="form-label">
                            <h3>Menu Category</h3>
                        </label>
                        <select class="form-select" name="menuId" aria-label="Default select example">
                            <option selected>--- Select Menu ---</option>
                            @foreach ($menus as $menu)
                                <option value="{{ $menu->menuId }}">{{ $menu->menuName }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="col">

                    <div class="mb-3">
                        <label for="menuName" class="form-label">
                            <h3>Description</h3>
                        </label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    @error('description')
                        <span class="text-danger">! {{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 col-6">
                    <label for="menuName" class="form-label">
                        <h3>Price</h3>
                    </label>
                    <input type="text" name="price" class="form-control">
                </div>
                @error('price')
                    <span class="text-danger">! {{ $message }}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Add </button>
        </div>
    </form>
@endsection
