@extends('layout')

@section('content')

    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Edit Task</div>

                <div class="card-body">
                    <form method="post" action="{{route('tasks.update', $task->id)}}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Task Name</label>

                            <div class="col-md-6">
                                <input id="task_name" type="text" class="form-control @error('task_name') is-invalid @enderror" name="task_name" value="{{$task->task_name}}">

                                @error('task_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="engineer_name" type="text" class="form-control @error('engineer_name') is-invalid @enderror" name="engineer_name" value="{{$task->engineer_name}}">

                                @error('engineer_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>

                            <div class="col-md-6">
                                <input id="period" type="text" class="form-control @error('period') is-invalid @enderror" name="period" value="{{$task->period}}">

                                @error('period')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <a href="{{route('tasks.index')}}" class="btn btn-outline-dark">
                                    Cancel
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
