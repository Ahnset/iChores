@extends('admin.layout.main')
@section('title', 'Admin')

@section('content')
<br>
<h1 class="page-title ">USERS MANAGEMENT</h1>
<hr style="margin-top: 0;">
<br>

@if($users)
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>JOIN DATE</th>
				{{-- <th>ACTION</th> --}}
			</tr>
		</thead>
		<tbody>
			@foreach($users as $log)
				<tr>
					<td>{{ $log->id }}</td>
					<td>{{ $log->name }}</td>
					<td>{{ $log->email }}</td>
					<td>{{ $log->created_at }}</td>
					{{-- <td><a href="#" class="btn btn-default btn-xs">Edit</a> | <a href="#" class="btn btn-danger btn-xs">Delete</a></td> --}}
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	<h5>There is no log yet!</h5>
@endif()

@stop