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
<h3>First name : {{$fname}}</h3>
<h3>Last name  : {{$lname}}</h3>
<h3>Phone No   : {{$phoneNo}}</h3>
<h3>Facebook   : {{$fbContact}}</h3>
<h3>Year       : {{$year}}</h3>
<h3>Address    : {{$address}}</h3>

<a href="userEdit"><button class="edit btn">Edit</button></a>
</div>
@stop