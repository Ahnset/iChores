@extends('admin.layout.main')
@section('title', 'Admin')

@section('content')
<br>
<h1 class="page-title ">SERVICE REQUESTS</h1>
<hr style="margin-top: 0;">
<br>

@if(session('info'))
	<div class="alert alert-info alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<span class="text-center">{{ session('info') }}</span>
	</div>
@endif

<br>
@if($transactions)
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>USER</th>
				<th>SERVICE</th>
				<th>PAYMENT</th>
				<th>TELEPHONE</th>
				<th>ADDRESS</th>
				<th>DATE</th>
				<th>STATUS</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
			@foreach($transactions as $log)
				<tr>
					<td>{{ $log->id }}</td>
					<td>{{ $log->name }}</td>
					<td>{{ $log->sname }}</td>
					<td>{{ $log->payment_method }}</td>
					<td>{{ $log->telephone }}</td>
					<td>{{ $log->address }}</td>
					<td>{{ $log->service_date }}</td>
					<td>{{ $log->admin_status }}</td>
					<td>
						@if($log->admin_status == 'pending')
							<a href="{{ route('admin.updateTransaction', ['id' => $log->id]) }}" class="btn btn-info btn-xs">Dealt With</a>
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