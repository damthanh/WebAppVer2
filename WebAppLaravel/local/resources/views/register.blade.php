@extends('master')
@section('title')
	<title> Register </title>
@stop

@section('head')
	@include('head')
@stop

@section('header')
	@include('header')
@stop
@section('content')
<div class="col-md-5 register-sec">
					<h1 class="text-center">Register</h1>

					<br>
					<form class="login-form" id="register-form" method="post"  name="register-form">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						@if($errors->has('erroremail'))
							<div class="alert alert-danger"> 
								<button type="button" class="close" data-dismis="alert" aria-hidden="true">x</button>
								{{$errors->first('erroremail')}}
							</div>
						@endif
						<div class="form-group">
							<label for="exampleInputEmail1" class="text-uppercase">Email:</label>
							<input type="email" class="form-control" placeholder="" name="email" id="email" required>
							<span id="emailerr"></span>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="text-uppercase">Password:</label>
							<input type="password" id="password" class="form-control" placeholder="" name="password" required>
							<span id="passerr"></span>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="text-uppercase">Confirm Password:</label>
							<input type="password" id="retypepass" class="form-control" placeholder="" name="repass" required  >
							<span id="retypepasserr" name="retypepasserr"></span>
						</div>
			
					
							<button type="submit"  class="btn btn-login float-right">Register</button></a>
					</form>
					
				
	</div>
@stop

@section('footer')
	@include('footer')
@stop

@section('script')
	<script>
		$("#retypepass").change(function(){
		var p = $("#password").val();
		if($(this).val() != p){
			alert("Nhập lại mật khẩu không chính xác ! Vui lòng kiểm tra lại .");
			$("#retypepass").val("").parent().addClass("has-error");
		} else{
			$("#retypepass").parent().removeClass("has-error");
		}
		})
		$(document).ready(function(){
			$('#register-form').submit(function(){
				var email=$.trim($('#email').val());
				var pass=$.trim($('#password').val());
				var repass=$.trim($('#retypepass').val());
				flag=true;

				if(pass.length<6){
					$('#passerr').text('Mat khau phai lon hon hoac bang 6 ki tu');
					flag=false;
				} 
				return flag;
			});
		});	
	</script>
@stop