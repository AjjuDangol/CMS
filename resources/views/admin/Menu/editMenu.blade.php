@extends('layouts.main')
@section('content')

{{-- message --}}
    <div class="alert alert-success" role="alert">
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
    </div>
{{-- updateMenu route to update edit --}}
    <form action="{{ route('updateMenu') }}" method="post">
        @csrf
        <input type="hidden" name="menuId" value="{{ $menu->menuId }}">
        <div class="mb-3 container">
            <label for="menuName" class="form-label">Menu Name</label>
            <input type="text" name="menuName" class="form-control mb-3" value="{{ $menu->menuName }}">
            {{-- validation --}}
            @error('menuName')
                <span class="text-danger">! {{ $message }}</span>
            @enderror
            <div class="text-center"><button type="submit" class="btn btn-primary">Edit </button></div>
        </div>
    </form>

@endsection
