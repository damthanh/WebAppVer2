@extends('master')
@section('head')
	@include('head')
@stop
@section('header')
	@include('header')
@stop
@section('content')

	
<div class="col-md-5 register-sec" >
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
							
								<p style="color:red">{{$errors->first('email')}}</p>
							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="text-uppercase">Password:</label>
							<input type="password" class="form-control" placeholder="" name="password" required>
							@if($errors->has('password'))
						
								<p style="color:red">{{$errors->first('password')}}</p>
							@endif
						</div>
						 
						<div class="form-check">
							<button type="submit"  margin-top=0px class="btn btn-login float-right">Sign In</button>
						</div>
					</form>
					<div>
					<!-- <a id="fogot_password_link" href="">Fogot Password ?</a> -->
					<a href="register"><button type="button" class="btn btn-login" >Sign Up</button></a>
					</div>
    </div>
	<!-- <div class="col-md-8 banner-sec">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active" style="width=730px; height=380px">
								<img class="d-block img-fluid" src="{{asset('images/dhqg.jpeg')}}" alt="First slide" style="width=730px; height=380px">
								
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="{{asset('images/dhqg2.jpeg')}}" alt="First slide">
								
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="{{asset('images/test.png')}}" alt="First slide">
								
							</div>
						</div>
					</div>
		</div> -->

	
@stop

@section('footer')
	@include('footer')
@stop