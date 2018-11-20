
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
@if (session('status'))
        <div class="alert alert-info">{{session('status')}}</div>
@endif
		<h1 class="text-center">Thông tin cá nhân</h1>
		
            <form class="login-form" action=""  name="dangkycuusinhvien" enctype="multipart/form-data" method="post"  accept-charset="utf-8">  
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                	
                <br>
                <table class="tableInformation">
                    <tr class="form-group">	
                        <td style="width: 120px;">Họ Tên:</td>
                        <td style="width: 260px;">
                        @if($csv)
                            <input type="input" name="ten" value="{{$csv->hoten}}" class="form-control" required style="width:95%"  /> 
                        @else
                            <input type="input" name="ten" class="form-control" required style="width:95%"  />
                        @endif    
                        </td>
                        <td style="width: 100px;">Ngày Sinh:</td>
                        <td style="width: 280px;" >
                        @if($csv)
                            <input type="date" name="ngaysinh" value="{{$csv->ngaysinh}}" /> 
                        @else
                             <input type="date" name="ngaysinh" /> 
                        @endif
                        </td>

                    </tr>
                    <!-- <tr>
                        <td>Hình cá nhân :</td>
                        <td colspan="3"><input type="file" class="file_1" name="userfile" /> (jpg,jpeg,gif,png) </td>
                    </tr> -->
                    
                    <tr >
                        
                        <td style="width: 150px;">Khóa(K60,K59,K58,...):</td>
                        <td style="width: 350px;">
                            <select name="khoahoc">
                                @foreach($khoahoc as $row)
                                @if($csv->khoahoc_id==$row->id)
                                <option  value="{{$row->id}}" selected="true">{{$row->tenkhoahoc}}</option>
                                @else
                                <option  value="{{$row->id}}">{{$row->tenkhoahoc}}</option>
                                @endif
                                @endforeach
                            </select>
                        </td>
                    
                    
                        
                        <td>Lớp(K60CC,K59CB,K58CD,...):</td>
                        <td>
                        <select name="lop">
                                @foreach($lop as $row)
                                @if($csv->lop_id==$row->id)
                                <option  value="{{$row->id}}" selected="true">{{$row->tenlop}}</option>
                                @else
                                <option  value="{{$row->id}}">{{$row->tenlop}}</option>
                                @endif
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Quê Quán: </td>
                        <td> 
                            @if($csv)
                            <input type="input" name="quequan" value="{{$csv->quequan}}" class="form-control" />
                            @else
                            <input type="input" name="quequan" class="form-control" />
                            @endif
                        </td>
                        <td>SĐT:</td>
                        <td>
                            @if($csv)
                            <input type="input" name="sdt" value="{{'0'.$csv->sdt}}" class="form-control"/>
                            @else
                            <input type="input" name="sdt" class="form-control"/>
                            @endif
                        </td>
                    </tr>
                    <td colspan="4" style="text-align:right">
                             
                              <button type="submit" value="Cập nhật" class="btn btn-registerinfor">Cập nhật</button>              
                              <!-- <a  href="/"><button type="button" class="btn btn-registerinfor">Bỏ Qua</button></a> -->
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
