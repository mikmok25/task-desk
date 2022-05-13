@extends('layouts.app')

@section('content')
    <div class="home-content">

        <div class="home-main-content">
            <h3 class="dashboard-text">Dashboard</h3>
            <div class="pl-6 pr-6 mt-4">
                <p class="welcome-msg">Welcome {{ Auth::user()->name }}!</p>
            </div>

            <div class="manage-container">
                <a href="{{ route('todo.index') }}">
                    <div class="task-manager">
                        <p class="m-auto">Manage Task</p>

                    </div>

                </a>
                <a href="{{ route('user.index') }}">
                    <div class="user-manager">
                        <p class="m-auto">Manage User</p>
                    </div>
                </a>





            </div>


        </div>

    </div>
@endsection
