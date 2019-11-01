@extends('master')
@section('title', 'STAFF MODE')
<link rel="stylesheet" type="text/css" href="{{asset('/css/user_edit_style.css') }}">
@section('content')

	<img src="{{asset('/img/icon_img.png') }}" id="profile-img">

	<form method="post" action="/configuration" class="edit-form">
		<div class="title">Name</div>
		<input type="text" name="name" value="{{$user->fname}}" placeholder="{{trans('message.saff_name') }}">

		<div class="title">Surname</div>
		<input type="text" name="surname" value="{{$user->lname}}" placeholder="{{trans('message.staff_surname') }}">

		<div class="title">Username</div>
		<input type="text" name="username" value="{{$user->username}}" placeholder="{{trans('message.staff_uname') }}">

		<div class="title">Password</div>
		<input type="password" name="new_pwd" placeholder="{{trans('message.staff_new_pwd') }}">
		<input type="password" name="confirm-pwd" placeholder="{{trans('message.staff_new_pwd') }}">

		<div class="pwd">
			<input type="password" name="pwd" placeholder="{{trans('message.staff_pwd') }}">
		</div>
		<div class="submit">
			<input type="submit" value="submit" id="btn-submit">
		</div>
		
		{{ csrf_field() }}
	</form>
	
@stop