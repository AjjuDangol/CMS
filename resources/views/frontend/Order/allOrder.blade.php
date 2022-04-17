@extends('layouts.main')
@section('content')

<div class="container">
    <table class="table">
        <thead>
          <tr>
            {{-- <th scope="col">User Id</th> --}}
            <th scope="col">Item Names</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
            <tr>
              {{-- <td>{{ $order->userId }}</td> --}}
              <td>{{ $order->itemName }}</td>
              <td>{{ $order->totalPrice }}</td>
              <td>{{ $order->quantity }}</td>
              <td>
                  <a href="/addPayment/{{ $order->orderId }}" class="btn btn-info">Pay</a>

                  <a href="/deleteOrder/{{ $order->orderId }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
            {{-- <a href="/addOrder/{{ $order->item->itemId }}" class="btn btn-primary">Add item</a> --}}

        </tbody>
      </table>
</div>

{{-- <script src="https://www.paypal.com/sdk/js?client-id="></script> --}}


@endsection
