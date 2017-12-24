@extends('admin.layout.main')
@section('title', 'Admin')

@section('content')
<br>
<h1 class="page-title ">MESSAGES</h1>
<hr style="margin-top: 0;">
<br>

@if(session('info'))
	<div class="alert alert-info alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<span class="text-center">{{ session('info') }}</span>
	</div>
@endif

<br>
@if($messages)
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>MESSAGES</th>
				<th>DATE</th>
				<th>STATUS</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
			@foreach($messages as $log)
				<tr>
					<td>{{ $log->id }}</td>
					<td>{{ $log->name }}</td>
					<td>{{ $log->email }}</td>
					<td>{{ $log->message }}</td>
					<td>{{ $log->created_at }}</td>
					<td>{{ $log->status }}</td>
					<td>
						@if($log->status == 'pending')
							<a href="{{ route('admin.updateMessages', ['id' => $log->id]) }}" class="btn btn-info btn-xs">Dealt With</a>
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	<h5>There is no log yet!</h5>
@endif()

@stop