@extends('layouts.main')
@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Main Image</th>
            <th scope="col">Menu Description</th>
            <th scope="col">Menu Image</th>
            <th scope="col">About Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($homes as $home)
            <tr>
              <td>{{ $home->homeId }}</td>
              <td><img src="{{ url('image') }}/{{ $home->mainImage }}" alt="vayo" width="30" height="30"></td>
              <td>{{ $home->menuDescription }}</td>
              <td><img src="{{ url('image') }}/{{ $home->menuImage }}" alt="vayo" width="30" height="30"></td>
              <td>{{ $home->aboutDescription }}</td>
              <td>
                  <a href="/editItem/{{ $home->homeId }}" class="btn btn-info">Edit</a>
                  <a href="/deleteItem/{{ $home->homeId }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>

      </table>
      <div class="container mt-5 text-center">
        <a href="{{ route('addhome') }}" class="btn btn-primary">Add Home</a>
    </div>

</div>

@endsection
