@extends('admin.layout.main')
@section('title', 'Admin')

@section('content')
<br>
<h1 class="page-title ">ADD RECRUIT</h1>
<hr>
<br>
<form action="{{ route('recruits.store') }}" method="post">
	<div class="form-group">
		<label for="">Name</label>
		<input type="text" name="name" id="name" class="form-control">
	</div>

	<div class="form-group">
		<label for="">Date Of Birth</label>
		<input type="text" name="date_of_birth" id="date_of_birth" class="form-control">
	</div>

	<div class="form-group">
		<label for="">Address</label>
		<input type="text" name="address" id="address" class="form-control">
	</div>

	<button type="submit" class="btn btn-info">Add Recruits</button>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

@stop