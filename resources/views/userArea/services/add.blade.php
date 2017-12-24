@extends('userArea.layout.main')

@section('title', $title)
@section('msg', $msg)

@section('content')
	<h3 class="text-center">FILL IN THE FORM BEFORE PROCEEDING</h3>
	<hr>
	<div class="row" style="padding-left: 20px; padding-right: 20px;">
		<div class="col-md-10 col-md-offset-1 payment-bloc">
			<form method="post" action="{{ route('services.post') }}">
				<fieldset class="form-group">
					<label for="payment_method">Payment Method</label>
					<select name="payment_method" id="payment_method" class="form-control">
						<option value="">-------</option>
						<option value="physical" <?php if(old('payment_method') == 'physical'){ echo('selected'); } ?> >Physical</option>
						<option value="electronic" <?php if(old('payment_method') == 'electronic'){ echo('selected'); } ?> >Electronic</option>
					</select>
					@if($errors->has('payment_method')) <small class="text-muted input-error-msg" style="color: red;">{{ $errors->first('payment_method') }}</small> @endif
				</fieldset>
	
				<fieldset class="form-group">
					<label for="phone">Phone Number</label>
					<input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
					@if($errors->has('phone')) <small class="text-muted input-error-msg" style="color: red;">{{ $errors->first('phone') }}</small> @endif
				</fieldset>

				<fieldset class="form-group">
					<label for="address">Address</label>
					<input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
					@if($errors->has('address')) <small class="text-muted input-error-msg" style="color: red;">{{ $errors->first('address') }}</small> @endif
				</fieldset>

				<fieldset class="form-group">
					<label for="datepicker2">Service Date</label>
					<input type="text" name="service_date" id="datepicker2" class="form-control" value="{{ old('service_date') }}">
					@if($errors->has('service_date')) <small class="text-muted input-error-msg" style="color: red;">{{ $errors->first('service_date') }}</small> @endif
				</fieldset>	

				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="service_id" value="{{ $service->id }}">

				<input type="submit" name="send" value="Submit" class="btn btn-default">
			</form>
		</div>
	</div>
@endsection

