
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
		
            <form class="login-form" action="" onsubmit="return check_input();" name="dangkycuusinhvien" enctype="multipart/form-data" method="post"  accept-charset="utf-8">  
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <hr>	
                <br>
                <table class="tableInformation">
                    <tr class="form-group">	
                        <td style="width: 120px;">Họ Tên:</td>
                        <td style="width: 260px;"><input type="input" name="name" class="form-control" required style="width:95%"  /> </td>
                        <td style="width: 100px;">Ngày Sinh:</td>
                        <td style="width: 280px;" >{!! Form::input('date', 'ngaysinh') !!} </td>
                    </tr>
                    <!-- <tr>
                        <td>Hình cá nhân :</td>
                        <td colspan="3"><input type="file" class="file_1" name="userfile" /> (jpg,jpeg,gif,png) </td>
                    </tr> -->
                    
                    <tr >
                        
                        <td style="width: 100px;">Khóa học:</td>
                        <td style="width: 350px;"><input type="input" name="inKhoaHoc" class="form-control" required style="width:100%" /></td>
                    
                    
                        
                        <td>Lớp:</td>
                        <td>
                            <input type="input" name="inLop" class="form-control" required style="width:100%" /> 
                        </td>
                    </tr>
                    <tr>
                        <td>Quê Quán: </td>
                        <td> 
                            <input type="input" name="quequan" class="form-control" />
                        </td>
                        <td>SĐT:</td>
                        <td>
                            <input type="input" name="sdt" class="form-control"/>
                        </td>
                    </tr>
                </table>
                <hr>
                <table class="tableInformation">
                    
                    
                        
                    
                    <tr>
                         
                    </tr>
                    <tr class="form-group" >
                        <td>Địa chỉ :</td>
                        <td colspan="3"><input type="input" name="inDiaChi" class="form-control"  style="width:100%" value=""/></td>
                    </tr>
                    <tr class="form-group">
                        <td>Nơi công tác :</td>
                        <td colspan="3"><input type="input" name="inNoiCongTac" class="form-control" style="width:100%" value=""/></td>
                    </tr>
					<tr >
                        <td style="width: 120px;">Vị trí:</td>
                        <td style="width: 260px;"><input type="input" name="inViTri" class="form-control" required style="width:95%" value=""/> </td>
                        <td style="width: 80px;">Chức vụ:</td>
                        <td style="width: 240px;"><input type="input" name="inChucVu" class="form-control" required style="width:100" value=""/></td>
                    </tr>
                    <tr >
                        <td style="width: 120px;">Mức lương:</td>
                        <td style="width: 260px;"><input type="input" name="inMucLuong" class="form-control" required style="width:95%" value=""/> </td>
                        <td style="width: 80px;">Số ĐT:</td>
                        <td style="width: 240px;"><input type="input" name="inSoDT" class="form-control" required style="width:100" value=""/></td>
                    </tr>
                    <td colspan="4" style="text-align:right">
                             
                              <button type="submit" value="Cập nhật" class="btn btn-registerinfor">Cập nhật</button>              <a  href="/"><button type="button" class="btn btn-registerinfor">Bỏ Qua</button></a>
                        </td>
                </table>
			</form>
		</div>
	</div>	
@stop

@section('footer')
    @include('footer')
@stop

@section('script')
              
@stop
