@extends('public_layout')

@section('title', 'SuperAdmin - Register')

@section('content')

<div class="register-box">

	<div class="register-logo">
		<a href="/"><b>SuperAdmin</b></a>
	</div>

	<div class="register-box-body">
		<p class="login-box-msg">Register a new membership</p>

		@if (validation_errors())
			<?=validation_errors('<p style="color: red;">', '</p>')?>
		@endif

		@if (isset($error))
			<p style="color: red;">{{$error}}</p>
		@endif

		<form action="<?=base_url()?>users/register" method="post">
			<div class="form-group has-feedback">
				<input id="username" name="username" type="text" class="form-control" placeholder="Full name" value="<?=set_value('username')?>">
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input id="email" name="email" type="email" class="form-control" placeholder="Email" value="<?=set_value('email')?>">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input id="password" name="password" type="password" class="form-control" placeholder="Password" value="<?=set_value('password')?>">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input id="password_confirm" name="password_confirm" type="password" class="form-control" placeholder="Retype password" value="<?=set_value('password_confirm')?>">
				<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
				</div>
				<!-- /.col -->
			</div>
		</form>

		<a href="login.html" class="text-center">I already have a membership</a>
	</div>
	<!-- /.form-box -->
</div>
<!-- /.register-box -->

@endsection