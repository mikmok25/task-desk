@extends('layouts.app')

@section('content')
    <div>
        <div class="float-start">
            <h4 class="pb-3">Create Task</h4>
        </div>

        <div class="float-end">
            <a href="{{ route('todo.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left fa-lg"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>


    <div class="card card-body  p-4 shadow-sm">
        <form action="{{ route('todo.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control bg-white" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control bg-white" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Status</label>
                <select class="form-control form-select bg-white" id="status" name="status">
                    @foreach ($statuses as $status)
                        <option value="{{ $status['value'] }}">{{ $status['label'] }}</option>
                    @endforeach
                    
                  </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
