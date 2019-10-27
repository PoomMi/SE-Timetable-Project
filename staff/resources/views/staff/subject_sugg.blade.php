@extends('master')
@section('title', 'Subbject Suggestion')
<link rel="stylesheet" type="text/css" href="{{asset('/css/subject_sugg_style.css') }}">
@section('content')
<style>
	th ,td{
		text-align:center;
		
	}
	table{
		position:relative;
		left:8%;
	}
</style>


	<form method="post" action="subjectSearch" class="search-form">
			<b>{{trans('message.year') }}</b>
			<select name="year">
            @if(isset($y))
      <option value="{{$y}}" hidden> {{$y}}</option>
      @endif
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
			&nbsp&nbsp<b>{{trans('message.semester') }} </b>
			<select name="semester">
            @if(isset($s))
      <option value="{{$s}}" hidden> {{$s}}</option>
      @endif
				<option value="1">1</option>
				<option value="2">2</option>
			</select>
			<input type="submit" name="search" value="{{trans('message.search') }}">
            {{ csrf_field() }}
	</form>
	<hr id="subject-line">

	<form method="post" action="{{URL::to('') }}" class="form-add">
		<span id="add-title">{{trans('message.add_subject') }}</span>
		<div class="add-input">
			<input type="text" name="sub_id" placeholder="{{trans('message.add_sub_id') }}">
			<input type="text" name="sub_name" placeholder="{{trans('message.add_sub_name') }}"> <br/>
			<input type="button" name="submit" value="{{trans('message.submit') }}" id="btn-add">
		</div>
	</form>

	<table>
		<tr>
			<th><b>{{trans('message.subjectID') }} </b></th>
			<th><b>{{trans('message.subjectName') }} </b></th>
		</tr>
		@if(isset($y) && isset($s))
		@foreach($info as $i)
		@if($i['year']==$y && $i['semester']==$s)
		<tr>
			<td>{{$i['subj_id']}}</td>
			<td>{{$i['name']}}</td>
		</tr>
		@endif
		@endforeach
		@endif
	</table>
@stop
