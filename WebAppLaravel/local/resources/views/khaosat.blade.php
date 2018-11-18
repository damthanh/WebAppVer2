@extends('master')

@section('title')
    <title> Khảo sát</title>
@stop

@section('head')
    @include('head')
@stop

@section('header')
    @include('headerLogin')
@stop     

@section('content')
<div class="col-md-10 registerinfor-sec">
@if (session('status'))
        <div class="alert alert-info">{{session('status')}}</div>
@endif
		<h1 class="text-center">Khảo sát </h1>
		
            <form class="login-form" action=""  name="khaosat" enctype="multipart/form-data" method="post"  accept-charset="utf-8">  
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                	
                <br>
                <!-- <table class="tableInformation"> -->
                    <tr >	
                        <td style="width:100%">Công việc hiện tại có đúng với định hướng học tập của bạn không?</td>
                        
                    </tr>
                    <br>
                    <tr>    
                        <td style="width:50px"><input type="radio" name="answer1" value="Co"></td>
                        <td>Có</td>
                    </tr>
                    <br>
                    <tr >
                        <td style="width:50px"><input type="radio" name="answer1" value="Khong"></td>
                        <td>Không</td>
                    </tr>
                    <br>
                    <tr >
                        <td> Bạn có hài lòng với công việc hiện tại không?</td>
                    </tr> <br>

                    <tr >
                    <td style="width:50px"><input type="radio" name="answer2" value="Co"></td>
                    <td>Có</td>
                    </tr>
                    <br>
                    <tr>
                    <td ><input type="radio" name="answer2" value="Khong"></td>
                    <td>Không</td>
                    </tr>
                    <br>
                    <tr >
                    <td>Bạn có thích công việc hiện tại không?</td>
                    </tr>
                    <br>
                    <tr >
                    <td style="width:50px"><input type="radio" name="answer3" value="Co"></td>
                    <td>Có</td>
                    </tr>
                    <br>
                    <tr >
                    <td style="width:50px"><input type="radio" name="answer3" value="Khong"></td>
                    </td>Không</td>
                    </tr>
                    <br>
                    
                    
                             
                              <button type="submit" value="Cập nhật" class="btn btn-registerinfor">Trả lời</button>              
                              
                        
                <!-- </table> -->
                <hr>
                
			</form>
		</div>
	</div>
@stop 

@section('footer')
    @include('footer')
@stop