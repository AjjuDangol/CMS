@extends('layouts.main')
@section('content')
{{-- Table format for all orders --}}
<table class="table">
    {{-- table headings --}}
    <thead>
      <tr>
        <th scope="col">User Id</th>
        <th scope="col">Item Names</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    {{-- table body --}}
    <tbody>
      @foreach ($orders as $order)
        <tr>
          <td>{{ $order->userId }}</td>
          <td>{{ $order->itemName }}</td>
          <td>{{ $order->totalPrice}}</td>
          <td>{{ $order->quantity }}</td>
          <td>
              <a href="/notification/{{$order->userId}}" class="btn btn-info">Send message</a>
              {{-- <a href="{{ route('notification',[user] ) }}" class="btn btn-info">Send message</a> --}}
              <a href="/deleteOrder/{{ $order->orderId }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
