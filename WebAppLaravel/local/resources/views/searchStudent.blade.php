@extends('master')
@section('title')
    <title>Tìm kiếm cự sinh viên</title>
@stop

@section('head')
    @include('head')
@stop

@section('header')
    @include('headerLogin')
@stop 

@section('content')
<br>
<br>
@if (session('status'))
        <div class="alert alert-info">{{session('status')}}</div>
@endif
@if (session('err'))
        <div class="alert alert-danger">{{session('err')}}</div>
@endif
<h1 class="text-center">Tìm kiếm cựu sinh viên</h1>



 <form class="login-form" action=""  name="dangkycuusinhvien" enctype="multipart/form-data" method="post"  accept-charset="utf-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
    <table class="tableInformation" align="center">
                        
                        <tr class="form-group" >
                            <td style="width: 150px;">Tên cựu sinh viên:</td>
                            <td colspan="2"><input type="input" name="ten" class="form-control"   style="width:95%" /> </td>
                            
                      
                        <tr>
                        <td colspan="4" style="text-align:right">
                                
                                <button type="submit" name="btn" value="insert" class="btn btn-registerinfor">Tìm kiếm</button>              
                                
                        </td>
                        </tr>
                    
    </table>

 <hr>
 <br>
<h1 class="text-center">Kết quả tìm kiếm</h1>
<table class="table table-striped table-bordered table-hover" id="dataTables-example" width="1000px">                 
                    
                    <thead>
                        <tr align="center">
                            <th >Tên</th>
                            <th >Lớp</th>
                            <th >Khóa học</th>
                            <th >Ngày sinh</th>
                            <th >Email</th>
                            <th >SĐT</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(isset($csv))
                    @foreach($csv as $row)
                    
                        <input type="hidden" name="id" value="{{$row->id}}" />
                        <tr class="odd gradeX" align="center">
                        <td >{{$row->hoten}}</td>
                            <td >{{$row->tenlop}}</td>
                            <td >{{$row->tenkhoahoc}}</td>
                            <td >{{$row->ngaysinh}}</td>
                            <td >{{$row->email}}</td>
                            <td >{{'0'.$row->sdt}}</td>
                        </tr>
                 
                    @endforeach
                    @endif

                    </tbody>
 </table>
</form> 


@stop

@section('footer')
    @include('footer')
@stop