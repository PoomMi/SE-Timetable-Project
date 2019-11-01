@extends('master')
@section('title', 'STAFF MODE')
<link rel="stylesheet" type="text/css" href="{{asset('/css/index_style.css') }}">
@section('content')

	<img src="{{asset('/img/icon_img.png') }}" id="profile-img">


	<div class="info-wrapper">
		<div id="name">
			<span class="user-title">{{trans('message.a_name') }}</span>
			<span class="user-info">: {{$user->fname}}</span>
		</div>
		<div id="surname">
			<span class="user-title">{{trans('message.a_surname') }}</span>
			<span class="user-info">: {{$user->lname}}</span>			
		</div>
		<div id="username">
			<span class="user-title">{{trans('message.a_username') }}</span>
			<span class="user-info">: {{$user->username}}</span>			
		</div>
		<div id="user-role">
			<span class="user-title">{{trans('message.role') }}</span>
			<span class="user-info">: {{$user->role}}</span>		
		</div>	

		<a href="/user_edit">
			<button id="edit-btn" title="Edit profile">Edit</button>
		</a>
	</div>
	
	
@stop