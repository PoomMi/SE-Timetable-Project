@extends('master')

@section('content')
    <div class="container">

        <h1>Edit task</h1>
        <hr>

        <form action="{{ url('tasks', [$task->id]) }}" method="post"> 
        <input type="hidden" name="_method" id="PUT">
        {{ csrf_field()}}

        <div class="form-group">
            <label for="title">Task title</label>
            <input type="text" value="{{$task->title}}" class="form-control" id="taskTitle" name="title">
        </div>
        <div class="form-group">
            <label for="description">Task description</label>
            <input type="text" value="{{$task->description}}" class="form-control" id="taskDescription" name="description">
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach()
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@stop