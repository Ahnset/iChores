@extends('admin.layout.main')
@section('title', 'Admin')

@section('content')
<br>
<h1 class="page-title ">RECRUITS MANAGEMENT</h1>
<a href="{{ route('recruits.add') }}" class="btn btn-success">Add Recruit</a>
<br><br>
<hr style="margin-top: 0;">
<br>

@if(session('info'))
	<div class="alert alert-info alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<span class="text-center">{{ session('info') }}</span>
	</div>
@endif

@if($recruits)
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>DOB</th>
				<th>REGISTRATION DATE</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
			@foreach($recruits as $log)
				<tr>
					<td>{{ $log->id }}</td>
					<td>{{ $log->name }}</td>
					<td>{{ $log->date_of_birth }}</td>
					<td>{{ $log->created_at }}</td>
					<td><a href="{{ route('recruits.update', ['id' => $log->id]) }}" class="btn btn-default btn-xs">Edit</a> | <a href="{{ route('recruits.drop', ['id' => $log->id]) }}" class="btn btn-danger btn-xs">Delete</a> {{-- | <a href="" class="btn btn-info btn-xs">View progress</a></td> --}}
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	<h5>There is no log yet!</h5>
@endif()

@stop