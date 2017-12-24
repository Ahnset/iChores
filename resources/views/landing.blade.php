<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/logo.png">

	<!-- Fonts -->
	 <link href="https://fonts.googleapis.com/css?family=Oswald:300,400|Roboto+Condensed:300,400|Roboto:100,300,400|Teko:300,400" rel="stylesheet">

	<!-- Bootstrap Framework -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

	<!-- ionic icons -->
	<link rel="stylesheet" type="text/css" href="/css/ionicons.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">

	<script src="/js/wow.js"></script>
	<script type="text/javascript">
    new WOW().init();
  </script>

	<!-- Page Title -->
	<title>iChores</title>
</head>



<body>
	<header class="card card-1" id="top">
		<nav class="normal-nav navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<a href="/" class="navbar-brand"><img src="/img/logo.png" class="card-1 hoverable" height="45"></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu" style="margin-top: 20px; margin-bottom: 20px;">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="menu">
					<ul class="nav navbar-nav navbar-right" style="margin-top: 20px;">
						<li><a href="{{ url('/login') }}" id="" class="text-center services-lnk">Login</a></li>
						<li><a href="{{ url('/register') }}" id="" class="text-center contact-lnk">Register</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right general" style="margin-top: 20px; margin-right: 50px;">
						<li><a href="#getting-started" id="" class="text-center start-lnk">Get Started</a></li>
						<li><a href="#download" id="" class="text-center download-lnk">Download</a></li>
						<li><a href="#services" id="" class="text-center services-lnk">Services</a></li>
						<li><a href="#about_us" id="" class="text-center contact-lnk">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<nav class="sticky navbar navbar-default navbar-fixed-top card-1">
			<div class="container">
				<div class="navbar-header">
					<a href="/" class="navbar-brand"><img src="/img/logo.png" class="card-1 hoverable-2" height="45"></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sticky-menu" style="margin-top: 20px; margin-bottom: 20px;">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="sticky-menu">
					<ul class="nav navbar-nav navbar-right" style="margin-top: 15px; margin-bottom: 10px;">
						<li><a href="{{ url('/login') }}" id="" class="text-center services-lnk">Login</a></li>
						<li><a href="{{ url('/register') }}" id="" class="text-center contact-lnk">Register</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right general" style="margin-top: 15px; margin-bottom: 10px; margin-right: 50px;">
						<li><a href="#getting-started" id="" class="text-center start-lnk">Get Started</a></li>
						<li><a href="#download" id="" class="text-center download-lnk">Download</a></li>
						<li><a href="#services" id="" class="text-center services-lnk">Services</a></li>
						<li><a href="#about_us" id="" class="text-center contact-lnk">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>


		<h1 class="slogan">Need a hand with your <span class="slogan-lead">household Chores</span>?</h1>
		<p class="lead slogan-description" >
			Use the iChoresApp to get all your domestic chores done efficiently!
		</p>
		<p class="text-center"><a href="#" class="btn-landing">GETTING STARTED</a></p>
	</header>

	<section class="feat1" id="getting-started">
		<div class="container">
			<h2 class="text-center feat1-heading">What is iChores?</h2>
			<p class="text-center feat1-description">
				iChores is a trusted company that specializes in providing premium household and domestic chores services online.<br>
				iChores owns iChoresApp, a mobile app for both android devices and iPhones.
			</p>

			<div class="row">
				<div class="feat1-xs col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 wow zoomIn" data-wow-duration="1s">
					<div class="hoverable-1 top-card">
						<p class="text-center"><i class="ion ion-ios-speedometer-outline"></i></p>
						<h3 class="text-center">Delivery on Time</h3>
						<div class="desc">
							<p class="text-center feat1-service-description">
								Our online system built on top of reactive technologies and our dedicated staff give us the power to respond to your demands and serve you in a quick and timely manner anytime.
							</p>
						</div>
					</div>
				</div>

				<div class="feat1-xs col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 wow zoomIn" data-wow-delay=".5s" data-wow-duration="1s">
					<div class="hoverable-1 top-card">
						<p class="text-center"><span class="ion ion-ios-infinite-outline"></span></p>
						<h3 class="text-center">Service Reliable</h3>
						<div class="desc">
							<p class="text-center feat1-service-description">
								Our staff undergo high quality training in their respective fields of expertise. We serve you with professionals that operate efficiently and effectively for a pleasurable experience.
							</p>
						</div>
					</div>
				</div>

				<div class="feat1-xs col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 wow zoomIn" data-wow-delay="1s" data-wow-duration="1s">
					<div class="hoverable-1 top-card">
						<p class="text-center"><span class="ion ion-ios-world-outline"></span></p>
						<h3 class="text-center">Secure & Professional</h3>
						<div class="desc">
							<p class="text-center feat1-service-description">
								As a policy, we work according to the most effective, ethical and professional standards. we secure your personal information and use it only for the purpose it was collected for.
							</p>
						</div>
					</div>
				</div>
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</section>

	<section class="feat2" id="download">
		<div class="container">
			<h2 class="text-center feat2-heading">Meet iChoresApp</h2>
			<div class="row">
				<div class="pix col-md-4 col-md-offset-2 col-sm-6 co-sm-offset-3 col-xs-6 co-xs-offset-3 wow fadeInLeft" data-wow-duration="1s">
					<br><br>
					<img class="mockup" src="/img/iChoresApp.png">
				</div>

				<div class="steps col-md-6">
					<div class="step col-md-12 wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".5s">
						<p><span class="number">1</span> Download the App from the Store of your Device Register with the App.</p>
					</div>

					<div class="step col-md-12 wow fadeInUp" data-wow-delay=".75s" data-wow-duration=".5s">
						<p><span class="number">2</span> <span class="step-text">Select a service from the List of Services or Post a custom service.</span></p>
					</div>

					<div class="step col-md-12 wow fadeInUp" data-wow-delay="1s" data-wow-duration=".5s">
						<p><span class="number">3</span> <span class="step-text">Enjoy the Delightful Experience of iChoresApp.</span></p>
					</div>

					<div class="store-xs step col-md-5 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-4 col-xs-offset-0 wow fadeInRight" data-wow-delay="1.34s" data-wow-duration=".5s">
						<img src="img/play-store.png" class="store-badge">
					</div>
				</div>
			</div>
		</div> <!-- end of container -->
	</section> <!-- end of meet iChoresApp section -->

	<section class="feat3" id="services">
		<div class="container">
			<h2 class="text-center feat3-heading">Our Services</h2>

			<div class="row">
				@foreach($services as $service)
					<div class="service-xs col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 wow {{$service->animation_effect}}" data-wow-delay="{{$service->animation_offset}}" data-wow-duration="{{$service->animation_duration}}">
						<div class="card test hoverable-2">
							<p class="text-center"><i class="ion {{$service->ionicon}}" style="color: {{$service->color}};"></i></p>
							<h3 class="text-center">{{$service->name}}</h3>
						</div>
					</div>
				@endforeach
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</section> <!--end of services section-->

	<section class="feat4" id="about_us">
		<div class="container">
			<h2 class="text-center feat4-heading">Contact Us</h2>

			<div class="row">

				<div class="col-md-5 wow bounceIn">
					<div class="contact-us hoverable-3">
						<h3 class="text-center">Write Us</h3>

						<hr><br><br><br>

						<form action="/" method="POST">
							<fieldset class="form-group">
								<label for="name">Full Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
							</fieldset>

							<fieldset class="form-group">
								<label for="email">Email address</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
							</fieldset>

							<fieldset class="form-group">
								<label for="message">Message</label>
								<textarea class="form-control" name="message" id="message" rows="3" placeholder="Write your message"></textarea>
							</fieldset>

							<fieldset class="form-group">
								<button class="btn btn-default" type="submit">Send Message</button>
							</fieldset>

							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						</form>
					</div>
				</div>

				<div class="col-md-7 wow bounceIn">
					<div class="contact-us hoverable-3">
						<h3 class="text-center">Contact Info</h3>

						<hr><br><br><br>

						<div class="row">
							<div class="col-md-6 contact-info">
								<p>Email:<br> <span class="info-value">iChores@gmail.com</span></p>
								<p>Telephone:<br> <span class="info-value">(999)-999-9999</span></p>
							</div>

							<div class="col-md-6 contact-info">
								<p>Location:<br> <span class="info-value">Cantonment</span></p>
								<p>Address:<br> <span class="info-value">10 P.O. Box. Cantonment XXX</span></p>
							</div>

							<div class="col-md-12">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15883.69968856259!2d-0.18620432419273003!3d5.57811724146132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9a91df7ffde5%3A0xf23bbacd3f22704f!2sCantonments%2C+Accra%2C+Ghana!5e0!3m2!1sen!2s!4v1483210532293" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen class="card-1"></iframe>
							</div>
						</div>
					</div>
				</div>



			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<p class="text-center"><img src="/img/logo.png" height="40" class="card-2 hoverable"></p>

			<hr class="divider">

			<h4 class="text-center copyright" >iChores all right reserved 2017 &copy;</h4>
		</div>
	</footer>

	<a href="#top"><i class="back-top ion-chevron-up"></i></a>

	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/bootstrap.js"></script>
	<script type="text/javascript" src="/js/jquery.waypoints.js"></script>
	<script type="text/javascript" src="/js/script.js"></script>
</body>
</html>