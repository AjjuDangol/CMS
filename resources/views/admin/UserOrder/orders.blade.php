@extends('layouts.main')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">User Id</th>
        <th scope="col">Item Names</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
        <tr>
          <td>{{ $order->userId }}</td>
          <td>{{ $order->itemName }}</td>
          <td>{{ $order->totalPrice}}</td>
          <td>{{ $order->quantity }}</td>
          <td>
              <a href="/notification/{{$order->userId}}" class="btn btn-info">Send message</a>
              <a href="/deleteOrder/{{ $order->orderId }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach

    </tbody>
  </table>
@endsection
