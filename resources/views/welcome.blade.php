<html>
<head>
	<title>Laravel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<<<<<<< HEAD
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>

				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#LoginModal">
					Login
				</button>

				<!-- Modal -->
				<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="Login">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Login</h4>
							</div>
							<div class="modal-body">
								<div class="panel panel-default">
									<div class="panel-heading">Login</div>
									<div class="panel-body">
										@if (count($errors) > 0)
											<div class="alert alert-danger">
												<strong>Whoops!</strong> There were some problems with your input.<br><br>
												<ul>
													@foreach ($errors->all() as $error)
														<li>{{ $error }}</li>
													@endforeach
												</ul>
											</div>
										@endif

										<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">

											<div class="form-group">
												<label class="col-md-4 control-label">E-Mail Address</label>
												<div class="col-md-6">
													<input type="email" class="form-control" name="email" value="{{ old('email') }}">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label">Password</label>
												<div class="col-md-6">
													<input type="password" class="form-control" name="password">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-6 col-md-offset-4">
													<div class="checkbox">
														<label>
															<input type="checkbox" name="remember"> Remember Me
														</label>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-6 col-md-offset-4">
													<button type="submit" class="btn btn-primary">Login</button>

													<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
=======
	<style>
		body {
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			color: #B0BEC5;
			display: table;
			font-weight: 100;
			font-family: 'Lato';
		}
		header {
			background-color: #CF5600;
			height: 682px;
		}
		a {
			color: #ffffff;
		}
		a, .paragraph-heading, #separator {
			font-weight: bold;
		}
		#separator {
			color: #4B4744;
			display: inline-block;
		}
		.menu {
			text-align: right;
			padding-top: 1.14%;
			padding-right: 1.14%;
		}
		.container {
			text-align: center;
			/*!display: table-cell;*/
			vertical-align: middle;
		}
		.content {
			text-align: center;
			display: inline-block;
			padding-bottom: 2.27%;
			margin-top: 10%;
		}
		.about {
			padding-top: 5.55%;
		}
		.paragraph-heading {
			color: #CF5600;
			font-size: 48px;
		}
		.paragraph-content {
			font-size: 20px;
		}
		#button {
			font-size: 36px;
			background-color: #4B4744;
			color: #ffffff;
			margin:11.11%;
		}
	</style>
	<script type="text/javascript">
		$(window).on('scroll', function () {
    	var scrollTop = $(window).scrollTop();
    	if (scrollTop < 100) {
    	    $('.content').stop().animate({margin:"10%"});
    	    $('img').stop().animate({width:"100%"});
    	    $('header').stop().animate({height: "682px"});  
    	    //$('header').removeClass("navbar-fixed-top");
    	}
    	else if (scrollTop > 100 && scrollTop < 150) {
    	    $('.content').stop().animate({margin:"-2.27%"});
    	    $('img').stop().animate({width:"50%"});   
    	    $('header').stop().animate({height: "341px"});  
    	    //$('header').removeClass("navbar-fixed-top");
    	}
    	else if (scrollTop > 150) {
    	    $('.content').stop().animate({margin:"10%"});
    	    $('img').stop().animate({width:"33.33%"});   
    	    $('header').stop().animate({height: "200px"});
    	    //$('header').addClass("navbar-fixed-top");
    	}
});
	</script>
</head>
<body>
	<header>
		<div class="menu">
			<ul role="navigation">
>>>>>>> 1651d59a8a5aab4895ca9107ef7343ed09c55a90
				<a href="/auth/login">Login</a>
				<div id="separator"> / </div>
				<a href="/auth/register">Register</a>
			</ul>
		</div>	
		<div class="container">
			<div class="content">
				<div class="title">
					<img src="/images/PhoeinxDC.png">
				</div>
			</div>
		</div>
	</header>
	<div id="page container-fluid">
		<div class="row">
			<div class="about col-xs-offset-2 col-xs-8 col-md-8 col-md-offset-1">
				<!--<div class="container">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse1" class="paragraph-heading">The Challenge</a>
								</h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse">
								<div class="panel-body">-->
									<p class="paragraph-heading">The Challenge</p>
									<p class="paragraph-content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								<!--</div>
							</div>
						</div>
					</div>
				</div>-->
			</div>
		</div>
		<div class="row">
			<div class="about col-xs-offset-2 col-xs-8 col-md-8 col-md-offset-3">
				<p class="paragraph-heading">The Purpose</p>
				<p class="paragraph-content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-offset-4 col-xs-4">
				<button id="button">Start the Simulation</button>
			</div>
		</div>
	</div>
</body>
</html>