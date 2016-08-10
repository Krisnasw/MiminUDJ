<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>UDJ Seamolec | Login</title>

@include('style')

</head>

<body class="full-width page-condensed">

	<!-- Login wrapper -->
	<div class="login-wrapper">
    	{{ Form::open(array('action' => 'AdminController@postSignIn', 'method' => 'POST')) }}
			<div class="popup-header">
				<a data-toggle="modal" role="button" href="#form_modal" class="pull-left"><i class="icon-user-plus"></i></a>
				<span class="text-semibold">Admin Login</span>
				<div class="btn-group pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
                    <ul class="dropdown-menu icons-right dropdown-menu-right">
						<li><a href="#"><i class="icon-info"></i> Forgot password?</a></li>
						<li><a data-toggle="modal" role="button" href="#form_bug"><i class="icon-support"></i> Bug Reports</a></li>
                    </ul>
				</div>
			</div>
			<div class="well">
				<div class="form-group has-feedback">
					<label>Username</label>
					<input type="text" class="form-control" placeholder="Username" name="uname">
					<i class="icon-users form-control-feedback"></i>
				</div>

				<div class="form-group has-feedback">
					<label>Password</label>
					<input type="password" class="form-control" placeholder="Password" name="pasw">
					<i class="icon-lock form-control-feedback"></i>
				</div>

				<div class="row form-actions">
					<div class="col-xs-6">
						<div class="checkbox checkbox-success">
						<label>
							<input type="checkbox" class="styled">
							Remember me
						</label>
						</div>
					</div>

					<div class="col-xs-6">
						<button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Sign in</button>
					</div>
				</div>
			</div>
    	{{ Form::close() }}
	</div>
	<!-- /login wrapper -->


    <!-- Footer -->
    @include('footer')
    @include('sweet::alert')
    <!-- /footer -->

</body>
</html>
