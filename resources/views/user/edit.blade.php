@extends('layouts.app')

@section('content')
    <div class="edit-content" style="width: 480px;">
        <h1 class="edit-txt">Update Your Account Info:</h1>

        @if (session('success') !== null)
            <p class="text-green-600 p-2 bg-gray-300 rounded mt-2">{{ session('success') }}</p>
        @endif

        <form action="{{ route('user.update') }}" method="POST" class="mt-4">
            @csrf
            <label class="edit-block form-label" for="name">Name: </label>
            <input class="edit-input form-control bg-white" type="text" name="name" value="{{ $user->name }}">
            @error('name')
                <p class="email-msg">{{ $message }}</p>
            @enderror
            <label class="edit-block form-label" for="email">Email: </label>
            <input class="edit-input form-control bg-white" type="text" name="email" value="{{ $user->email }}">
            @error('email')
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
