@extends('layout')

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            @if(session()->get('success'))
                <div class="alert alert-success my-3">
                    {{ session()->get('success') }}
                </div>
            @endif

            <a href="{{route('tasks.create')}}" class="btn btn-primary mb-4">Add Task</a>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Task Name</td>
                    <td>Engineer Name</td>
                    <td>Period</td>
                    <td colspan="2">Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->task_name}}</td>
                        <td>{{$task->engineer_name}}</td>
                        <td>{{$task->period}}</td>
                        <td><a href="{{ route('tasks.edit', $task->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('tasks.destroy', $task->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div>
@endsection
