<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/logo.png">

	<!-- Fonts -->
	 <link href="https://fonts.googleapis.com/css?family=Oswald:300,400|Roboto+Condensed:300,400|Roboto:100,300,400|Teko:300,400" rel="stylesheet"> 

	<!-- Bootstrap Framework -->
	<link rel="stylesheet" type="text/css" href="{{ asset('userArea/css/bootstrap.css') }}">

	<!-- jQuery UI Framework -->
	<link rel="stylesheet" type="text/css" href="{{ asset('userArea/css/jquery-ui.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('userArea/css/jquery-bootstrap-datepicker.css') }}">

	<!-- ionic icons -->
	<link rel="stylesheet" type="text/css" href="{{ asset('userArea/css/ionicons.css') }}">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="{{ asset('userArea/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('userArea/css/style.css') }}">


	
	<script src="{{ asset('userArea/js/wow.js') }}"></script>
	<script type="text/javascript">
	    new WOW().init();
	</script>

	<!-- Page Title -->
	<title>@yield('title')</title>
</head>

<body>
	<header class="card navbar-fixed-top" id="top">
		<nav class="sticky navbar navbar-default card-1">
			<div class="container">
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand"><img src="{{ asset('userArea/img/logo.png') }}" class="card-1" height="45"></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sticky-menu" style="margin-top: 20px; margin-bottom: 20px;">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="sticky-menu">
					<ul class="nav navbar-nav navbar-right" style="margin-top: 15px; margin-bottom: 10px;">
						<li><a href="{{ route('userArea.index') }}" id="" class="text-center start-lnk">Dashboard</a></li>
						<li><a href="{{ route('services.index') }}" class="text-center start-lnk">My Services</a></li>
						<li><a href="{{ route('services.logs') }}" id="" class="text-center start-lnk">Logs</a></li>
						<li><a href="{{ route('contact.index') }}" id="" class="text-center start-lnk">Contact Us</a></li>

						<li class="dropdown">
							<a href="#" id="" class="text-center contact-lnk dropdown-toggle" data-toggle="dropdown">
								My Account <span class="caret"></span>
							</a>

							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('userArea.signout') }}" class="text-center"><span class="glyphicon glyphicon-lock"></span> Logout</a></li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</nav>
	</header>

	<section class="feat2">
		<div class="container">
			<h2 class="text-center feat2-heading">@yield('msg')</h2>
			<div class="row">
				<div class="col-md-3 hidden-sm hidden-xs">
					<div class="sidebar">
						<div class="list-group">
							<li class="list-group-item card-1 active">NAVIGATION</li>
	      			<a href="{{ route('userArea.index') }}" class="list-group-item <?php if($active == 'dashboard') echo('active'); ?>"><span class="glyphicon glyphicon-th"></span> Dashboard</a>
	      			<a href="{{ route('services.index') }}" class="list-group-item <?php if($active == 'services') echo('active'); ?>"><span class="glyphicon glyphicon-plus"></span> My Services</a>
	      			<a href="{{ route('services.logs') }}" class="list-group-item <?php if($active == 'logs') echo('active'); ?>"><span class="glyphicon glyphicon-refresh"></span> Service Logs <span class="badge pull-right">{{App\Transactions::where('user_id', Auth::user()->id)->count()}}</span></a>
	      			<a href="{{ route('contact.index') }}" class="list-group-item <?php if($active == 'contact') echo('active'); ?>"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a>
						</div>
					</div>
				</div>

				<div class="col-md-9">
					<section class="content">
						@yield('content')
					</section>
				</div>
			</div>
		</div> <!-- end of container -->
	</section>

	
	<footer>
		<div class="container">
			<p class="text-center"><img src="{{ asset('userArea/img/logo.png') }}" height="40" class="card-2 hoverable"></p>

			<hr class="divider">

			<h4 class="text-center copyright" >iChores all right reserved 2017 &copy;</h4>
		</div>	
	</footer>

	<script type="text/javascript" src="{{ asset('userArea/js/jquery.js') }}"></script>
	<script src="{{ asset('userArea/js/jquery-ui.js') }}"></script>
	<script>
		$( function() {
			$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
			$( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
			$( "#datepicker3" ).datepicker({ dateFormat: 'yy-mm-dd' });
		});
	</script>
	<script type="text/javascript" src="{{ asset('userArea/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('userArea/js/script.js') }}"></script>
</body>
</html>