@extends('master')
@section('head')
	@include('head')
@stop
@section('header')
	@include('header')
@stop
@section('content')
<div class="container">
<div class="col-md-4 login-sec" >
					<h1 class="text-center">Login</h1>
					<br>
					<form class="login-form" action="" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						@if($errors->has('errorlogin'))
							<div class="alert alert-danger"> 
								<button type="button" class="close" data-dismis="alert" aria-hidden="true">x</button>
								{{$errors->first('errorlogin')}}
							</div>
						@endif
						<div class="form-group">
							<label for="exampleInputEmail1" class="text-uppercase">Email:</label>
							<input type="email" class="form-control" placeholder="" name="email" required>
							@if($errors->has('email'))
							123
								<p style="color:red">{{$errors->first('email')}}</p>
							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="text-uppercase">Password:</label>
							<input type="password" class="form-control" placeholder="" name="password" required>
							@if($errors->has('password'))
							124
								<p style="color:red">{{$errors->first('password')}}</p>
							@endif
						</div>
						 <div class="checkbox">
							<label><input type="checkbox"> Remember me</label>
						 </div>
						<div class="form-check">
							<button type="submit"  margin-top=0px class="btn btn-login float-right">Sign In</button>
						</div>
					</form>
					<div>
					<a id="fogot_password_link" href="">Fogot Password ?</a>
					<button type="button" class="btn btn-login">Sign Up</button>
					</div>
    </div>
	<div class="col-md-8 banner-sec">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listx`box">
							<div class="carousel-item active">
								<img class="d-block img-fluid" src="{{asset('images/UET.jpg')}}" alt="First slide">
								<!-- <div class="carousel-caption d-none d-md-block">
												<div class="banner-text">
													<h2>This is Heaven</h2>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
												</div>	
			 								</div> -->
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="{{asset('images/FITUET.png')}}" alt="First slide">
								<!-- <div class="carousel-caption d-none d-md-block">
												<div class="banner-text">
													<h2>This is Heaven</h2>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
												</div>	
											</div> -->
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="{{asset('images/FETUET.jpg')}}" alt="First slide">
								<!-- <div class="carousel-caption d-none d-md-block">
												<div class="banner-text">
													<h2>This is Heaven</h2>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
												</div>	
											</div> -->
							</div>
						</div>
					</div>
				</div>
</div>	
@stop

@section('footer')
	@include('footer')
@stop