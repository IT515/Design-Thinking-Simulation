<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

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
				<a href="/auth/login">Login</a>
				<a href="/auth/register">Register</a>
			</div>
		</div>
	</body>
</html>
