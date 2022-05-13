@extends('layouts.app')

@section('content')
    <div class="edit-content" style="width: 480px;">
        <h1 class="edit-txt">Update your password:</h1>
        @if (session('msg-success') !== null)
            <p class="success-msg">{{ session('msg-success') }}</p>
        @endif
        @if (session('msg-error') !== null)
            <p class="error-msg">{{ session('msg-error') }}</p>
        @endif

        <form action="{{ route('user.passwordUpdate') }}" method="POST" class="mt-4">
            @csrf
            <label class="edit-block form-label" for="oldPassword">Current Password: </label>
            <input id="password-field" class="edit-input form-control bg-white" type="password" name="oldPassword">
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon-password toggle-password"></span>
            @error('oldPassword')
                <p class="email-msg ">{{ $message }}</p>
            @enderror
            <label class="edit-block form-label" for="password">New Password:</label>
            <input id="password-field-2" class="edit-input form-control bg-white" type="password" name="password">
            <span toggle="#password-field-2" class="fa fa-fw fa-eye field-icon-password toggle-password"></span>

            @error('password')
                <p class="email-msg">{{ $message }}</p>
            @enderror
            <label class="edit-block form-label" for="password_confirmation">Confirm New Password:</label>
            <input id="password-field-3" class="edit-input form-control bg-white" type="password"
                name="password_confirmation">
            <span toggle="#password-field-3" class="fa fa-fw fa-eye field-icon-password toggle-password"></span>

            @error('password_confirmation')
                <p class="email-msg">{{ $message }}</p>
            @enderror
            <button class="update-btn">Update</button>
        </form>

        <div class="mt-8 text-center">
            <a href="{{ route('user.index') }}">
                <svg class="back-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>



    </div>
@endsection
