@extends('master')

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-info">{{Session::get('message')}}</div>
    @endif
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Task Title</th>
                <th scope="col">Task Description</th>
                <th scope="col">Created at</th>
                <th scope="col">Action</th>
            </tr>
        </thead> 
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <th scpoe="row">{{$task->id}}</th>
                    <td><a href="/tasks/{{$task->id}}">{{$task->title}}</a></td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->created_at->toFormattedDateString()}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-lable="Basic example">
                            <a href="{{ URL::to('tasks/' .$task->id. '/edit') }}">
                                <button type="button" class="btn btn-warning">Edit</button>    
                            </a>
                            <form action="{{url('tasks', [$task->id])}}" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-danger" value="delete">     

                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop