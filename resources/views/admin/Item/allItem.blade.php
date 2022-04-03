@extends('layouts.main')
@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Item Names</th>
            <th scope="col">Image</th>
            <th scope="col">Menu</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)
            <tr>
              <td>{{ $item->itemId }}</td>
              <td>{{ $item->itemName }}</td>
              <td><img src="{{ url('image') }}/{{ $item->image }}" alt="vayo" width="30" height="30"></td>
              <td>{{ $item->menu->menuName }}</td>
              <td>{{ $item->description }}</td>
              <td>{{ $item->price }}</td>
              <td>
                  <a href="/editItem/{{ $item->itemId }}" class="btn btn-info">Edit</a>
                  <a href="/deleteItem/{{ $item->itemId }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
<div class="container mt-5">
    <a href="{{ route('addItem') }}" class="mt-5 btn btn-primary position-absolute top-50 start-50 translate-middle">Add item</a>
</div>
@endsection
