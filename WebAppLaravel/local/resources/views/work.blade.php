@extends('master')

@section('title')
    <title> Work </title>
@stop 

@section('head')
    @include('head')
@stop

@section('header')
    @include('headerLogin')
@stop

@section('content')
<div class="col-md-10 registerinfor-sec">
<h1 class="text-center">Quá trình công tác</h1>
<table class="tableInformation">                 
                    <tr>
                         
                    </tr>
                    @foreach($work as $row)
                    <tr class="form-group" >
                        <td>Địa chỉ :</td>
                        <td colspan="3"><input type="input" name="inDiaChi" class="form-control"  style="width:100%" value="{{$row->diachi}}"/></td>
                    </tr>
                    <tr class="form-group">
                        <td>Nơi công tác :</td>
                        <td colspan="3"><input type="input" name="inNoiCongTac" class="form-control" style="width:100%" value="{{$row->ten}}"/></td>
                    </tr>
					<tr >
                        <td style="width: 120px;">Vị trí:</td>
                        <td style="width: 260px;"><input type="input" name="inViTri" class="form-control" required style="width:95%" value="{{$row->vitri}}"/> </td>
                        
                    </tr>
                    <tr >
                        <td style="width: 120px;">Mức lương:</td>
                        <td style="width: 260px;"><input type="input" name="inMucLuong" class="form-control" required style="width:95%" value="{{$row->mucluong}}"/> </td>
                        <td style="width: 80px;">Thời gian:</td>
                        <td style="width: 240px;"><input type="input" name="inSoDT" class="form-control" required style="width:100" value="{{$row->thoigian}}"/></td>
                    </tr>
                    @endforeach
                    <td colspan="4" style="text-align:right">
                             
                              <button type="submit" value="Cập nhật" class="btn btn-registerinfor">Cập nhật</button>              
                              <a  href="/"><button type="button" class="btn btn-registerinfor">Bỏ Qua</button></a>
                    </td>

                    
 </table>
 </div>
@stop

@section('footer')
    @include('footer')
@stop
