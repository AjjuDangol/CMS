<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>




{{-- @extends('layouts.main')
@section('content')
    <x-jet-validation-errors class="mb-4" />
        <div class="s card transparent container mt-5">
            <form method="POST" action="{{ route('password.update') }}" class="px-5 py-3 container  " >
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" :value="old('email', $request->email)" required autofocus >
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" >
              </div>
              <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" >
              </div>
              <button type="submit" class="btn btn-primary">Reset Password</button>
            </form>
        </div>

@endsection --}}
