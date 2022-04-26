@extends('layouts.main')
@section('content')
{{-- message for menu --}}
    <div class="alert alert-success" role="alert">
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
    </div>
{{-- createMenu route --}}
    <form action="{{ route('createMenu') }}" method="post">
        @csrf
        <div class="mb-3 container">
            <label for="menuName" class="form-label"><h3>Menu Name</h3></label>
            <input type="text" name="menuName" class="form-control mb-3">
            {{-- Validation --}}
            @error('menuName')
                <span class="text-danger">! {{ $message }}</span>
            @enderror
            <div class="text-center"><button type="submit" class="btn btn-primary">Add </button></div>
        </div>
    </form>
@endsection
