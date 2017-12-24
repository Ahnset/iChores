@extends('userArea.layout.main')

@section('title', $title)
@section('msg', $msg)

@section('content')
	<h3 class="text-center">APPLY FOR A SERVICE</h3>
	<hr>
	<div class="row">
		@foreach($services as $service)
			<div class="service-xs col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 wow {{$service->animation_effect}}" data-wow-delay="{{$service->animation_offset}}" data-wow-duration="{{$service->animation_duration}}">
				<a href="{{ route('services.create', ['id' => $service->id]) }}" style="text-decoration: none;">
					<div class="card test hoverable-2">
						<p class="text-center"><i class="ion {{$service->ionicon}}" style="color: {{$service->color}};"></i></p>
						<h4 class="text-center">{{$service->name}}</h4>
						<p class="text-center">{{$service->price}} <?php if( $service->price ) { echo('GH¢'); } else { echo('???'); } ?></p>
					</div>
				</a>
			</div>
		@endforeach
	</div> <!-- end of row -->
@endsection

