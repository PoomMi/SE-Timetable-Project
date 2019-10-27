@extends('master')
<link rel="stylesheet" type="text/css" href="/css/admin_style.css">
@section('title', 'Admin Mangement')
@section('content')

	@if(isset($added) && $added) <script>alert('Add user successfully')</script> @endif
	@if(isset($deled) && $deled) <script>alert('Delete user successfully')</script> @endif

	<!-- form to add new user -->
	<form method="post" action="/add_user" class="add">
		<b>{{trans('message.add_staff') }}</b><br/>
		<input type="text" name="name" placeholder="{{trans('message.saff_name')}}">
		<input type="text" name="surname" placeholder="{{trans('message.staff_surname')}}">
		<input type="text" name="uname" placeholder="{{trans('message.staff_uname')}}">
		<input type="password" name="pwd" placeholder="{{trans('message.staff_pwd')}}">
		<select name="role">
			<option value="" hidden>{{trans('message.role') }}</option>
			<option vlaue="Staff">{{trans('message.role_staff') }}</option>
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
						<form method="post" action="/del_user" class="del-wrapper">
							<input name="key" value="{{$i->staff_id}}" class="hide">
							<input type="submit" value="Del" class="btn-del" title="Delete User">
							{{ csrf_field() }}
						</form>
					</td>


					
				</tr>
			@endforeach
			
		</table>
	</div>

@stop