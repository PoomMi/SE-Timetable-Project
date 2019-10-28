@extends('master')
<link rel="stylesheet" type="text/css" href="/css/admin_style.css">
<script src="/js/jqury 3.3.1.js"></script>
<script src="/js/staff_script.js"></script>
@section('title', 'Admin Mangement')
@section('content')
	
	<!-- form to add new user -->
	<form method="post" action="/add_user" class="add">
		<b>{{trans('message.add_staff') }}</b><br/>
		<input type="text" name="name" placeholder="{{trans('message.saff_name')}}">
		<input type="text" name="surname" placeholder="{{trans('message.staff_surname')}}">
		<input type="text" name="uname" placeholder="{{trans('message.staff_uname')}}">
		<input type="password" name="pwd" placeholder="{{trans('message.staff_pwd')}}">
		<select name="role">
			<option value="" hidden>{{trans('message.role') }}</option>
			<option value="Staff">{{trans('message.role_staff') }}</option>
			<option value="Adminstator">{{trans('message.role_admin') }}</option>
		</select>
		<input type="submit" value="{{trans('message.submit') }}" class="submit">
		{{ csrf_field() }}
	</form>

	<hr id="form-line">

	<!-- area to show content -->
	<div class="content-wrapper">	
		<table class="content-container">
			<tr>
				<th id="title-name">{{trans('message.a_name') }}</th>
				<th id="title-sur">{{trans('message.a_surname') }}</th>
				<th id="title-user">{{trans('message.a_username') }}</th>
				<th id="title-role">{{trans('message.role') }}</th>

				<hr id="title-line">
			</tr>

			@foreach($info as $i)
				<tr>
					<td class="data-name">{{$i->fname}}</td>
					<td class="data-sur">{{$i->lname}}</td>
					<td class="data-user">{{$i->username}}</td>
					<td class="data-role">{{$i->role}}</td>
					<td>
						<button class="btn-del" value="{{($i)}}" title="Delete User">
							Del
						</button>
					</td>				
				</tr>
			@endforeach

		</table>
	</div>

	<div class="confirm-popup-wrapper"></div>
	<div class="confirm-popup">
		<form method="post" action="/del_user">
			<div class="confirm-title">Are you sure to delete</div>

			<div class="confirm-info">
				<br/>&emsp;&emsp; Name: <b id="show_name"></b>
				<br/>&emsp;&emsp; Username: <b id="show_username"></b>
				<br/>&emsp;&emsp; Role: <b id="show_role"></b>
			</div>
			<input type="hidden" name="key" value="" id="key">
			
			<input type="submit" value="confirm" class="btn-confirm">
			<input type="button" value="cancel" class="btn-cancel">
		
			{{ csrf_field() }}			
		</form>
	</div>
	
@stop