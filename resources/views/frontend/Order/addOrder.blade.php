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

        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="ItemPrice" class="form-label"><h3>User Name</h3></label>
                    <input type="text" value="{{ Auth::user()->name }}" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="ItemName" class="form-label"><h3>Item Name</h3></label>
                    <input type="text" name="itemName" value="{{ $items->itemName }}" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="price" class="form-label" ><h3>Price</h3></label>
                    <input type="text" name="price" id="price" value="{{ $items->price }}" class="form-control value">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="quant" class="form-label " ><h3>Quantity</h3></label>
                    <input type="number" name="quantity" id="quantity" class="form-control value">
                </div>
            </div>

            <div class="mb-3">
                <label for="ItemPrice" class="form-label"><h3>Total Price</h3></label>
                <input type="text" name="totalPrice" class="form-control" id="totalPrice" readonly onclick="price()">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add &rarr;</button>
        <button type="button"  id="button" class="btn btn-primary">Add &rarr;</button>


    </form>


    {{-- <script>
        $(".value").change(function(e){
            var a = $('#price').val();
            var b = $('#quant').val();
            var total = a * b;
            $("#tp").val(total);
        });


    </script> --}}

@endsection
