@extends('admin.layout.main')
@section('title', 'Admin')

@section('content')
<br>
<h1 class="page-title ">ADD RECRUIT</h1>
<hr>
<br>
<form action="{{ route('recruits.updatestore') }}" method="post">
	<div class="form-group">
		<label for="">Name</label>
		<input type="text" name="name" id="name" value="{{ $recruit->name }}" class="form-control">
	</div>

	<div class="form-group">
		<label for="">Date Of Birth</label>
		<input type="text" name="date_of_birth" value="{{ $recruit->date_of_birth }}" id="date_of_birth" class="form-control">
	</div>

	<div class="form-group">
		<label for="">Address</label>
		<input type="text" name="address" value="{{ $recruit->address }}" id="address" class="form-control">
	</div>

	<button type="submit" class="btn btn-info">Edit Recruit</button>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="id" value="{{ $recruit->id }}">
</form>

@stop