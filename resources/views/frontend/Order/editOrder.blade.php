@extends('layouts.main')
@section('content')


    <div class="alert alert-success" role="alert">
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
    </div>

    <form action="{{ route('updateOrder') }}" method="post">
        @csrf
        <input type="text" name="orderId" value="{{ $order->orderId }}">
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
        <button type="submit" class="btn btn-primary">Edit &rarr;</button>
    </form>

@endsection
