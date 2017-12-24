<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/logo.png">

	<!-- Fonts -->
	 <link href="https://fonts.googleapis.com/css?family=Oswald:300,400|Roboto+Condensed:300,400|Roboto:100,300,400|Teko:300,400" rel="stylesheet"> 

	<!-- Bootstrap Framework -->
	<link rel="stylesheet" type="text/css" href="{{ asset('adminArea/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('adminArea/css/style.css') }}">

	<!-- Page Title -->
	<title>@yield('title')</title>
</head>


<body class="full-height">

  <section class="sidebar full-height card-1">
    <a href="" class="sidebar-title card-1"><i class="glyphicon glyphicon-option-vertical toggle-option"></i> <span class="nav-text">Navigation</span></a>

    <div class="link-container">
      <a href="{{ route('admin.index') }}" class="sidebar-link"><span class="glyphicon glyphicon-dashboard"></span> <span class="link-text">Dashboard</span></a>
      <a href="{{ route('admin.users') }}" class="sidebar-link"><span class="glyphicon glyphicon-user"></span> <span class="link-text">Manage Users</span></a>
<!--       <a href="{{ route('admin.recruits') }}" class="sidebar-link"><span class="glyphicon glyphicon-folder-open"></span> <span class="link-text">Manage Recruits</span></a> -->
      <a href="{{ route('admin.transactions') }}" class="sidebar-link"><span class="glyphicon glyphicon-fire"></span> <span class="link-text">Service Requests</span></a>
      <a href="{{ route('admin.messages') }}" class="sidebar-link"><span class="glyphicon glyphicon-envelope"></span> <span class="link-text">View Messages</span></a>
    </div>
  </section>

  <section class="content full-height">
    <div class="top-bar card-1">
      <a href="{{ route('admin.index') }}" class="logo">iChores</a>

      <div class="menu">
        <a href="{{ route('admin.messages') }}" class="menu-link" title="New Messages"><i class="icon-link glyphicon glyphicon-envelope"> </i><div class="counter">@if(App\LandingModel::where('status','pending')->count()){{App\LandingModel::where('status','pending')->count()}}@endif</div></a>
        <a href="{{ route('admin.transactions') }}" class="menu-link" title="Service Requests"><i class="icon-link glyphicon glyphicon-fire"></i><span class="counter">@if(App\Transactions::where('admin_status','pending')->count()){{App\Transactions::where('admin_status','pending')->count()}}@endif</span></a>
        <a href="{{ route('admin.index') }}" class="menu-link" title="Dashboard"><i class="icon-link glyphicon glyphicon-globe"></i></a>
        <a href="{{ route('userArea.signout') }}" class="menu-link" title="Logout"><i class="icon-link glyphicon glyphicon-log-out"></i></a>
      </div>
    </div>

    <article class="main-content inside">
      <div class="inner-content">
        

       @yield('content')

        

        <footer class="" style="margin-top: 50px;">
          <hr>
          <p style="font-size: 20px;">Manawalys all right reserved &copy; 2017</p>
        </footer>
      </div>
    </article>
  </section>	


	<script type="text/javascript" src="{{ asset('adminArea/js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminArea/js/bootstrap.js') }}"></script>
</body>
</html>