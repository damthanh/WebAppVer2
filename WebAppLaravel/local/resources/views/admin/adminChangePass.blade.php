@extends('admin.adminMaster')

@section('title')
    <title> Đổi mật khẩu</title>
@stop


@section('content')
<div class="col-md-5 register-sec">
@if (session('status'))
        <div class="alert alert-info">{{session('status')}}</div>
@endif
@if (session('err'))
        <div class="alert alert-danger">{{session('err')}}</div>
@endif
					<h1 class="text-center">Đổi mật khẩu</h1>

					<br>
					<form class="login-form" id="changepass" method="post"  name="changepass">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						@if($errors->has('erroremail'))
							<div class="alert alert-danger"> 
								
								{{$errors->first('erroremail')}}
							</div>
						@endif
						<div class="form-group">
							<label for="exampleInputEmail1" class="text-uppercase">Mật khẩu cũ:</label>
							<input type="password" id="oldpass" class="form-control" placeholder="" name="oldpass" required>
							<span id="oldpasserr"></span>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="text-uppercase">Mật khẩu mới:</label>
							<input type="password" id="password" class="form-control" placeholder="" name="password" required>
							<span id="passerr"></span>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="text-uppercase">Nhập lại mật khẩu mới:</label>
							<input type="password" id="retypenewpass" class="form-control" placeholder="" name="retypenewpass" required  >
							<span id="retypepasserr" name="retypepasserr"></span>
						</div>
			
					
							<button type="submit"  class="btn btn-login float-right">Cập nhật</button></a>
					</form>
					
				
	</div>
@stop 



@section('script')
<script>
		
		$(document).ready(function(){
			$('#changepass').submit(function(){
				var oldpass=$.trim($('#oldpass').val());
				var pass=$.trim($('#password').val());
				var repass=$.trim($('#retypenewpass').val());
				flag=true;
                if(oldpass!={{Auth::user()->password}}){
                    $('#oldpasserr').text('Mật khẩu cũ không đúng');
                    flag=false;
                }    
				if(pass.length<8){
					$('#passerr').text('Mật khẩu phải lớn hơn hoặc bảng 8 kí tự');
					flag=false;
				} 
                if(repass!=pass){
					$('#retypepasserr').text('Mật khẩu  nhập lại không đúng');
					flag=false;
				} 
				return flag;
			});
		});	
	</script>
@stop