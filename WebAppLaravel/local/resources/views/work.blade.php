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
@if (session('status'))
        <div class="alert alert-info">{{session('status')}}</div>
@endif
@if (session('err'))
        <div class="alert alert-danger">{{session('err')}}</div>
@endif
<h1 class="text-center">Quá trình công tác</h1>
<table class="table table-striped table-bordered table-hover" id="dataTables-example" width="1000px">                 
                    <tr>
                         
                    </tr>
                    <thead>
                        <tr align="center">
                            <th>Thời gian</th>
                            <th> Cơ quan</th>
                            <th> Địa chỉ</th>
                            <th>Vị trí</th>
                            <th> Mức lương </th>
                            <th>Loại hình</th>
                            <th>Sửa</th>
                            <th> Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($work as $row)
                    <form class="login-form" action=""  name="chinhsua" enctype="multipart/form-data" method="post"  accept-charset="utf-8">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="hidden" name="id" value="{{$row->id}}" />
                        <tr class="odd gradeX" align="center">
                            <td><input type="text" style="width:100px;" name="thoigian" value="{{$row->thoigian}}"/></td>
                            <td>
                            <select name="coquanid">
                            @foreach($coquan as $row1)
                                @if($row1->ten==$row->ten)
                                    <option value="{{$row1->id}}" selected="selected">{{$row1->ten}}</option>
                                @else
                                    <option value="{{$row1->id}}" >{{$row1->ten}}</option>
                                @endif
                            @endforeach
                            </select>
                            </td>
                            <td><input type="text" style="width:100px;" name="diachi" value="{{$row->diachi}}"/></td>
                            <td><input type="text" style="width:100px;" name="vitri" value="{{$row->vitri}}"></td>
                            <td><input type="text" style="width:100px;" name="mucluong" value="{{$row->mucluong}}"></td>
                            <td>{{$row->loaihinh}}</td>
                            <td class="center"><input type="radio" name="option" value="Edit"/></td>
                            <td class="center"><input type="radio" name="option" value="Delete"/></td>
                            <td class="center"><button type="submit" value="Cập nhật" class="btn btn-registerinfor">Cập nhật</button> </td>
                        </tr>
                    </form>
                    @endforeach
                    

                    </tbody>
 </table>

                                
                     
                                
                   
 <hr>
 <br>
 <h1 class="text-center">Thêm nơi công tác</h1>
 <form class="login-form" action=""  name="dangkycuusinhvien" enctype="multipart/form-data" method="post"  accept-charset="utf-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
    <table class="tableInformation">

                        
                        <!-- <tr class="form-group" >
                            <td>Địa chỉ :</td>
                            <td colspan="3"><input type="input" name="inDiaChi" class="form-control"  style="width:100%" /></td>
                        </tr> -->
                        <tr class="form-group">
                            <td style="width: 200px;">Nơi công tác :</td>
                            <td colspan="2">
                                <select name="coquan">
                                    @foreach($coquan as $row)
                                        <option value="{{$row->id}}">{{$row->ten}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                            <a href='coquan'><button type="button" value="Cập nhật" class="btn btn-registerinfor">Thêm cơ quan mới</button> </a> 
                            </td>
                        </tr>
                        <tr >
                            <td style="width: 200px;">Vị trí:</td>
                            <td colspan="3"><input type="input" name="vitri" class="form-control" required style="width:95%" /> </td>
                            
                        </tr>
                        <tr >
                            <td style="width: 200px;">Mức lương:</td>
                            <td colspan="3"><input type="input" name="mucluong" class="form-control" required style="width:95%" /> </td>
                            
                        </tr>
                        </tr>
                            <td style="width: 200px;">Thời gian(start-end):</td>
                            <td colspan="3"><input type="input" name="thoigian" class="form-control" required style="width:95%" /></td>
                        </tr>
                        <!-- <tr>
                        <td>Loại hình </td>
                            <td >
                                <select name ="loaihinh">
                                    <option value="Nha nuoc">Doanh nghiệp nhà nước </option>
                                    <option value="Tu nhan"> Doanh nghiệp tư nhân</option>
                                    <option value="Nuoc ngoai"> Doanh nghiệp có vốn nước ngoài</option>
                                </select>
                            </td>
                        </tr> -->
                        <td colspan="4" style="text-align:right">
                                
                                <button type="submit" value="Cập nhật" class="btn btn-registerinfor">Thêm</button>              
                                <!-- <a  href="/"><button type="button" class="btn btn-registerinfor">Bỏ Qua</button></a> -->
                        </td>
                    
    </table>
 </form>
 </div>
@stop

@section('footer')
    @include('footer')
@stop
