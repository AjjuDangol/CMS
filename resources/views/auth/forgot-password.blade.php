{{-- <x-guest-layout> --}}
{{-- <x-jet-authentication-card> --}}
{{-- <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot> --}}
{{-- @extends('layouts.main')
@section('content')
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <x-jet-validation-errors class="mb-4" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="block">
            <label for="email" value="">Email</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button>
                Email Password Reset Link
            </button>
        </div>
    </form>
@endsection --}}
{{-- </x-jet-authentication-card> --}}
{{-- </x-guest-layout> --}}



@extends('layouts.main')
@section('content')
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <x-jet-validation-errors class="mb-4" />
    <div class="s card transparent container mt-5">
        <form method="POST" action="{{ route('password.email') }}" class="px-5 py-3 container " >
            @csrf
            <div class="mb-3">
                <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" :value="old('email')" required autofocus/>
            </div>
            <div class="flex items-center justify-end mt-4">
                <button class="btn btn-primary">
                    Email Password Reset Link
                </button>
            </div>
    </div>
@endsection
