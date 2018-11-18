
@extends('master')

@section('title')
    <title> Personal Information </title>
@stop

@section('head')
    @include('head')
@stop

@section('header')
    @include('headerLogin')
@stop

@section('content')
<div class="col-md-10 registerinfor-sec">

		<h1 class="text-center">Person Information</h1>
		
            <form class="login-form" action=""  name="dangkycuusinhvien" enctype="multipart/form-data" method="post"  accept-charset="utf-8">  
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                	
                <br>
                <table class="tableInformation">
                    <tr class="form-group">	
                        <td style="width: 120px;">Tên lớp:</td>
                        <td style="width: 260px;">
                       
                            <input type="input" name="ten" class="form-control" required style="width:95%"  />
                          
                        </td>
                        <td style="width: 100px;">Khoá học:</td>
                        <td style="width: 280px;" >
                        <select name="khoahoc">
                        @foreach($khoahoc as $row)
                             <option value="{{$row->id}}">{{$row->tenkhoahoc}}</option> 
                        @endforeach
                        </select>
                        </td>

                    </tr>
                
                    
                    <td colspan="4" style="text-align:right">
                             
                              <button type="submit" value="Cập nhật" class="btn btn-registerinfor">Cập nhật</button>              
                              
                        </td>
                </table>
                <hr>
                
			</form>
		</div>
	</div>	
@stop

@section('footer')
    @include('footer')
@stop

@section('script')
              
@stop
