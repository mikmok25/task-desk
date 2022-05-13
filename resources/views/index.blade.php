@extends('layouts.app')

@section('content')
    <div>
        {{-- @include('layouts.notifications') --}}

        <div class="float-start">
            <h2 class="pb-3">{{ Auth::user()->name }}'s Task</h2>
        </div>

        <div class="float-end">
            <a href="{{ route('todo.create') }}" class="btn btn-primary"> <i class="fa-solid fa-circle-plus fa-lg"></i>
                Create task</a>
        </div>
        <div class="clearfix"></div>
    </div>

    @foreach ($todos as $todo)
        <div class="card-container">
            <div class="card mt-4 shadow-sm">
                {{-- <h5 class="card-header bg-light"> --}}

                <h5 class="card-header">
                    @if ($todo->status === 'Todo')
                        <strong>{{ $todo->title }}</strong>
                    @else
                        <strong><del>{{ $todo->title }}<del></strong>
                    @endif

                    <span class="badge rounded-pill bg-warning text-dark">
                        Created {{ $todo->created_at->diffForHumans() }}
                    </span>

                </h5>

                <div class="card-body">

                    <div class="card-text">
                        <div class="float-start">

                            @if ($todo->description === null)
                                <h6 class="text-muted">No description<h6>
                            @endif

                            @if ($todo->status === 'Todo')
                                <h6> {{ $todo->description }} </h6>
                            @else
                                <h6><del>{{ $todo->description }}</del></h6>
                            @endif







                            @if ($todo->status === 'Todo')
                                <span class="badge rounded-pill bg-primary text-white">
                                    Todo
                                </span>
                            @else
                                <span class="badge rounded-pill bg-success text-white">
                                    Done
                                </span>
                            @endif


                            <small>Updated </small><small class="text-muted"> {{ $todo->updated_at->diffForHumans() }}
                            </small>
                        </div>

                        <div class="float-end">

                            <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-success"> <i
                                    class="fa-solid fa-pen-to-square"></i> Edit task</a>
                            <a class="btn btn-danger deletebtn" data-bs-toggle="modal"
                                data-bs-target="#ModalDelete{{ $todo->id }}"> <i class="fa-solid fa-trash"></i> Delete
                                task</a>
                        </div>
                        @include('modals.delete')


                    </div>
                </div>
            </div>
        </div>



        </div>
        </div>
        </div>
        </div>
    @endforeach

    <br>

    @if (count($todos) === 0)
        <div class="alert alert-danger p-2 text-center">
            No task found please create one!
        </div>
    @endif

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
