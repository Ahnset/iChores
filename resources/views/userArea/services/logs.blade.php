@extends('userArea.layout.main')

@section('title', $title)
@section('msg', $msg)

@section('content')
	<h3 class="text-center">SERVICES LOGS</h3>
	<hr>
	
	@if(session('info'))
		<div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<span class="text-center">{{ session('info') }}</span>
		</div>
	@endif

	@if($logs)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>SERVICE NAME</th>
					<th>APPLICATION DATE</th>
					<th>SERVICE DATE</th>
					<th>RATE SERVICE</th>
				</tr>
			</thead>
			<tbody>
				@foreach($logs as $log)
					<tr>
						<td>{{ $log->name }}</td>
						<td>{{ $log->created_at }}</td>
						<td>{{ $log->service_date }}</td>
						<td>
							@if(!$log->rate)
								<form action="{{ route('services.rate') }}" method="post">
									<select name="rating" id="rating">
										<option value="">---</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
									&nbsp;
									<button type="submit" class="btn btn-primary btn-xs">Rate</button>

									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="hidden" name="transaction_id" value="{{ $log->id }}">
								</form>
							@else
								{{ $log->rate }}
							@endif
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<h5>There is no log yet!</h5>
	@endif()
@endsection

