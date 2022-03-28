@extends('layouts.main')
@section('content')
    

    <div class="alert alert-success" role="alert">
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
    </div>
    
    <form action="{{ route('updateMenu') }}" method="post">
        @csrf
        <input type="hidden" name="menuId" value="{{ $menu->menuId }}">
        <div class="mb-3">
            <label for="menuName" class="form-label">Menu Name</label>
            <input type="text" name="menuName" class="form-control" value="{{ $menu->menuName }}">
        </div>
        <button type="submit" class="btn btn-primary">Edit &rarr;</button>
    </form>

@endsection