@extends('master')
<link rel="stylesheet" type="text/css" href="/css/student_info_style.css">
@section('title', 'Student Infomation')
@section('content')

	<form method="post" action="student_search" class="search-form">
		<input type="text" name="std_search" 
		placeholder="{{trans('message.search_detail').'600611028' }}" value="@if(isset($id)) {{$id}} @endif">
		<input type="submit" value="{{trans('message.search') }}">
		{{ csrf_field() }}
	</form>

	<br />
	<br />

	<hr id="student-line">

	@if(isset($check) && $check)
		<div class ="content-wrapper">
			<table>
				<tr>
					<th>{{trans('message.s_name') }}</th>
					<td>{{$info->fname." ".$info->lname}}</td>
				</tr>
				<tr>
					<th>{{trans('message.s_id') }}</th>
					<td>{{$info->std_id}}</td>
				</tr>
				<tr>
					<th>{{trans('message.s_phone') }}</th>
					<td>{{$info->phone}}</td>
				</tr>
				<tr>
					<th>{{trans('message.s_face') }}</th>
					<td>
						<a href="http://facebook.com/{{$link}}" id="face-link">{{$info->facebook}}</a> 						
					</td>
				</tr>
				<tr>
					<th>{{trans('message.s_address') }}</th>
					<td>{{$info->address}}</td>
				</tr>
			</table>
		</div>
	@elseif(isset($check) && !$check)
		<div id="no-data">No Result</div>
	@endif

@stop