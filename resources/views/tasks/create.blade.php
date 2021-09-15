@extends('layout')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Create Employee</div>
                <div class="card-body">
                    <form method="POST" action="{{route('tasks.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Task Name</label>
                            <div class="col-md-6">
                                <input id="tname" type="text" class="form-control @error('task_name') is-invalid @enderror" name="tname" value="{{ old('task_name') }}">

                                @error('task_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Engineer Name</label>
                            <div class="col-md-6">
                                <input id="eng" type="text" class="form-control @error('engineer_name') is-invalid @enderror" name="eng" value="{{ old('engineer_name') }}">

                                @error('engineer_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">Period</label>
                            <div class="col-md-6">
                                <input id="period" type="text" class="form-control @error('period') is-invalid @enderror" name="period" value="{{ old('period') }}">

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
                                    Cancle
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
