@extends('layouts.main')
@section('content')


    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <form action="{{ route('createOrder') }}" method="post" enctype="multipart/form-data" class="container mt-4 ">
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
            <label for="price" class="form-label" id="price">Price</label>
            <input type="text" name="price" value="{{ $items->price }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="quant" class="form-label" id="quant">Quantity</label>
            <input type="number" name="quantity" class="form-control">
        </div>
        <div class="mb-3">
            {{-- <label for="ItemPrice" class="form-label">Total Price</label> --}}
            <h4>Total Price: <span id="totalPrice">0</span></h4>
        </div>
        <button type="submit" class="btn btn-primary">Add &rarr;</button>
    </form>
    <script>
        function myFunction() {
            var price = document.getElementById("price").value;
            var quant = document.getElementById("quantity").value;
            // var delivery = document.getElementById("ItemPrice").value;
            var total = price * gst;
            document.getElementById("totalPrice").innerHTML = total;

        }
    </script>
@endsection
