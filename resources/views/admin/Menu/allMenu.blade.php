@extends('layouts.main')
@section('content')

<br>
{{-- message --}}
@if (Session::has('message'))
    <div class="alert alert-danger" role="alert">
      {{ Session::get('message') }}
    </div>
@endif
<div class="container">
     {{-- Table view for data display --}}
    <table class="table">
         {{-- Table Headings for all menu in admin page --}}
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Menu Names</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            {{-- table rows for items --}}
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
<div class="container text-center">

<a href="{{ route('addMenu') }}" class="btn btn-primary ">Add Menu</a>
</div>
</div>

@endsection
