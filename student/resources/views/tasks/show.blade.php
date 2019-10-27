@extends('master')

@section('content') 
    <div class="container">
        <h1>Showing task [{{$task->title}}]</h1>
    <div class="jumbotron text-center">
        <p>
            <strong>Task Title: </strong>{{ $task->title}} <br>
            <strong>Desciption: </strong>{{ $task->description}}
        </p>
    </div>
    </div>
    

@stop