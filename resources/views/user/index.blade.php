@extends('layouts.app')

@section('content')
    <div class="user-content" style="width: 500px;">

        <h1 class="account-info">YOUR ACCOUNT INFO:</h1>

        <table class="user-table">
            <thead>
                <tr class="user-table-row">
                    <th class="px-2 py-2">Name</td>
                    <th class="px-2 py-2">Email</td>
                </tr>
            </thead>
            <tbody>
                <tr class="tbody-tr">
                    <td class="px-2 py-4">{{ $user->name }}</td>
                    <td class="px-1 py-4">{{ $user->email }}</td>
                </tr>
            </tbody>
        </table>

        <div class="edit-container">
            <div class="mb-6">
                <a href="{{ route('user.edit') }}" class="edit-btn">
                    <svg width="1.25rem" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    <span>Update Account Email</span>
                </a>
            </div>
            <a href="{{ route('user.passwordEdit') }}" class="edit-btn">
                <svg width="1.25rem" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                <span>Update Account Password</span>
            </a>

        </div>


    </div>

    <div class="mt-8 text-center">
        <a href="{{ route('home') }}">
            <svg class="back-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                    clip-rule="evenodd" />
            </svg>
        </a>
    </div>
@endsection
