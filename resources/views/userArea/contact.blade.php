@extends('userArea.layout.main')

@section('title', $title)
@section('msg', $msg)

@section('content')
	<h3 class="text-center">CONTACT US</h3>
	<hr>

	@if(session('info'))
		<div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<span class="text-center">{{ session('info') }}</span>
		</div>
	@endif
	
	<div class="row" style="padding-left: 20px; padding-right: 20px;">
		<div class="col-md-10 col-md-offset-1 payment-bloc">
			<form method="post" action="{{ route('contact.post') }}">	
				<fieldset class="form-group">
					<label for="message" rows="20">Message</label>
					<textarea name="message" id="message" class="form-control"></textarea>
					@if($errors->has('message')) <small class="text-muted input-error-msg" style="color: red;">{{ $errors->first('message') }}</small> @endif
				</fieldset>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" name="send" value="Submit" class="btn btn-default">
			</form>
		</div>
@endsection

