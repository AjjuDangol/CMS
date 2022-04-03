@extends('layouts.main')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">User Names</th>
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
          <td>{{ $order->itemId }}</td>
          <td>{{ $order->itemName }}</td>
          <td>{{ $order->price }}</td>
          <td>{{ $order->quantity }}</td>
          <td>
              <a href="/editOrder/{{ $order->orderId }}" class="btn btn-info">Edit</a>
              <a href="/deletetOrder/{{ $order->orderId }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <a href="/addOrder/{{ $order->item->itemId }}" class="btn btn-primary">Add item</a>
@endsection
