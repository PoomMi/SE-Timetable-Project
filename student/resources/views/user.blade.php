@extends('master')
@section('title','User info')
@section('content')

<style>
.edit{    
  background-color: #4CAF50;
  color: white;  
}

.container{
    position:relative;
    background-color:#f1f1f1;
    padding:20px;
    top:20px;
    border-radius:10px;

}

</style>


<div class="container">
  @foreach($students as $i)
    <h3>Student id : {{$i->std_id}}</h3>
    <h3>Name : {{$i->fname}}</h3>
    <h3>Last name : {{$i->lname}}</h3>
    <h3>Phone no : {{$i->phone_no}}</h3>
    <h3>Facebook contact : {{$i->fb_contact}}</h3>
    <h3>Address : {{$i->address}}</h3>
  @endforeach
    <a href="/userEdit/{{$i->std_id}}"><button class="btn btn-primary">Edit</button></a>
  </div>
@stop