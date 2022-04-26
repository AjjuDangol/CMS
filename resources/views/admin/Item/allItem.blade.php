@extends('layouts.main')
@section('content')
<div class="container">
    {{-- Table view for data display --}}
    <table class="table">
        <thead>
            {{-- Table Headings for all items in admin page --}}
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
            {{-- table rows for items --}}
          @foreach ($items as $item)
            <tr>
              <td>{{ $item->itemId }}</td>
              <td>{{ $item->itemName }}</td>
              <td><img src="{{ url('image') }}/{{ $item->image }}" alt="vayo" width="30" height="30"></td>
              <td>{{ $item->menu->menuName }}</td>
              <td>{{ $item->description }}</td>
              <td>{{ $item->price }}</td>
              <td>
                  <a href="/editItem/{{ $item->itemId }}" class="btn btn-info mb-2">Edit</a>
                  <a href="/deleteItem/{{ $item->itemId }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>

      </table>
      <div class="container mt-5 text-center">
        <a href="{{ route('addItem') }}" class="btn btn-primary">Add item</a>
    </div>

</div>

@endsection
