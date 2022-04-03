@extends('layouts.main')
@section('content')

<br>
@if (Session::has('message'))
    <div class="alert alert-danger" role="alert">
      {{ Session::get('message') }}
    </div>
@endif
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Menu Names</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($menus as $menu)
            <tr>
              <td>{{ $menu->menuId }}</td>
              <td>{{ $menu->menuName }}</td>
              <td>
                  <a href="/editMenu/{{ $menu->menuId }}" class="btn btn-info">Edit</a>
                  <a href="/deleteMenu/{{ $menu->menuId }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>

<a href="{{ route('addMenu') }}" class="btn btn-primary position-absolute top-50 start-50 translate-middle">Add Menu</a>
</div>

@endsection
