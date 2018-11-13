@extends('master')

@section('content')
<div class="col-md-5 register-sec">
					<h1 class="text-center">Register</h1>

					<br>
					<form class="login-form" action=""  name="register-form">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label for="exampleInputEmail1" class="text-uppercase">Email:</label>
							<input type="email" class="form-control" placeholder="" name="email" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="text-uppercase">Password:</label>
							<input type="password" id="pass" class="form-control" placeholder="" name="password" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="text-uppercase">Confirm Password:</label>
							<input type="password" id="cfpass" class="form-control" placeholder="" name="retypepass" required  >
							<span id="cf_password_error"></span>
						</div>
			
					
							<button type="submit" class="btn btn-login float-right"  >Register</button></a>
					</form>
					
				
	</div>
@stop