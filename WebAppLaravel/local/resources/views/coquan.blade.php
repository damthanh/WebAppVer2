
@extends('master')

@section('title')
    <title> Thêm cơ quan mới  </title>
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
		<h1 class="text-center">Thêm cơ quan mới </h1>
		
            <form class="login-form" action=""  name="dangkycuusinhvien" enctype="multipart/form-data" method="post"  accept-charset="utf-8">  
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                	
                <br>
                <table class="tableInformation">
                    <tr class="form-group">	
                        <td style="width: 180px;">Tên cơ quan:</td>
                        <td style="width: 260px;">
                       
                            <input type="input" name="ten" class="form-control" required style="width:95%"  />
                          
                        </td>
                    </tr>
                    <tr>    
                        <td style="width: 180px;">Loại hình :</td>
                        <td style="width: 260px;" >
                        <select name="loaihinh">
                            <option value="Nha nuoc" selected>nha nuoc</option>
                            <option value="Tu nhan"> tu nhan</option>
                            <option value="Nuoc ngoai">nuoc ngoai</option>
                        </select>
                        </td>

                    </tr>
                    <tr class="form-group">
                    <td style="width: 180px;">Địa chỉ (tỉnh/thành phố) :</td>
                        <td style="width: 260px;" >
                        <input name='diachi' type="text" class="form-control" required style="width:95%"/>
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
