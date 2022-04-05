@extends('layouts.main')
@section('content')


    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <form action="{{ route('createOrder') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="itemId" value="{{ $items->itemId }}" hidden>
        <input type="text" name="userId" value="{{ Auth::user()->id }}" hidden>

        <div class="mb-3">
            <label for="ItemPrice" class="form-label">User Name</label>
            <input type="text" value="{{ Auth::user()->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="ItemName" class="form-label">Item Name</label>
            <input type="text" name="itemName" value="{{ $items->itemName }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="ItemPrice" class="form-label">Price</label>
            <input type="text" name="price" value="{{ $items->price }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="ItemPrice" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control">
        </div>
        <div class="mb-3">
            <label for="ItemPrice" class="form-label">Total Price</label>
            <input type="text" name="totalPrice" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add &rarr;</button>
    </form>
@endsection
