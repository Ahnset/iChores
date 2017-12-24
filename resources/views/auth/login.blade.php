<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>iChores | Login</title>
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">iChores</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/login') }}" class="text-center">Login</a></li>
                <li><a href="{{ url('/register') }}" class="text-center">Register</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <br>
            <div class="flip">
                <div class="card"> 

                    <div class="face front">
                        <div class="panel panel-default">
                            <form class="form-horizontal" action="{{ url('/login') }}" method="post">
                                
                                <h1 class="text-center">Sign In</h1>
                                <hr>
                                <br>

                                @if($errors->has('email')) <small class="text-muted input-error-msg">{{ $errors->first('email') }}</small> @endif
                                <input class="form-control {{ $errors->has('email') ? 'input-error' : '' }}" type="email" name="email" placeholder="Address Email" value="{{ old('email') }}" />

                                @if($errors->has('password')) <small class="text-muted input-error-msg">{{ $errors->first('password') }}</small> @endif
                                <input class="form-control {{ $errors->has('password') ? 'input-error' : '' }}" type="password" name="password" placeholder="Password" />

                                <label for="remember" style="font-weight: lighter; display: flex; cursor: pointer;">
                                    <input type="checkbox" id="remember" name="remember" ><span style="margin-left: 5px; padding-top: -7px;">Remember me</span>
                                </label>

                                <br>
                                <br>
                                <button class="btn btn-primary btn-block">SIGN IN</button>
                                <hr>
                                <p class="text-center">
                                    <a href="{{ url('/register') }}" class="fliper-btn">Don't Have an account?</a>
                                </p>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div><!-- /.container -->

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>