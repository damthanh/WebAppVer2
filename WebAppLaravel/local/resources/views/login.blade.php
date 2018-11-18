@extends('master')
@section('head')
	@include('head')
@stop
@section('header')
	@include('header')
@stop
@section('content')
<div class="container">
<div class="row">	
<div class="col-md-4 login-sec" >
					<h1 class="text-center">Login</h1>
					<br>
					<form class="login-form" action="" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						@if($errors->has('errorlogin'))
							<div class="alert alert-danger"> 
								<button type="button" class="close" data-dismis="alert" aria-hidden="true"></button>
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
	<div class="col-md-8 banner-sec">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active" style="width=730px; height=380px">
								<img class="d-block img-fluid" src="{{asset('images/image4.jpg')}}" alt="First slide" style="width:100%; height:380px">
								
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="{{asset('images/image6.jpg')}}" alt="First slide" style="width:100%; height:380px">
								
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="{{asset('images/image5.jpg')}}" alt="First slide" style="width:100%; height:380px">
								
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="{{asset('images/image7.jpg')}}" alt="First slide" style="width:100%; height:380px">
								
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="{{asset('images/image8.jpg')}}" alt="First slide" style="width:100%; height:380px">
								
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="{{asset('images/image3.jpg')}}" alt="First slide" style="width:100%; height:380px">
								
							</div>
						</div>
					</div>
		</div>


</div>	
</div>
@stop

@section('footer')
	@include('footer')
@stop