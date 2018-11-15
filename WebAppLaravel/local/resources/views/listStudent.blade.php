@extends('master')

@section('title')
    <title> Danh sách cựu sinh viên</title>
@stop

@section('head')
    @include('head')
@stop

@section('header')
    @include('headerLogin')
@stop     

@section('content')
<div class="col-md-10 registerinfor-sec">
    <h1 class="text-center">Danh sách sinh viên cùng lớp</h1>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example" width="1000px" style="height:500px; overflow:scroll;">                 
                        <tr>
                            
                        </tr>
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
                        @foreach($lop as $row)
                        <tr class="odd gradeX" align="center">
                            <td >{{$row->hoten}}</td>
                            <td >{{$row->tenlop}}</td>
                            <td >{{$row->tenkhoahoc}}</td>
                            <td >{{$row->ngaysinh}}</td>
                            <td >{{$row->email}}</td>
                            <td >{{'0'.$row->sdt}}</td>
                        </tr>
                        @endforeach
                        

                        </tbody>
    </table>
    <hr>
    <h1 class="text-center">Danh sách sinh viên cùng khóa</h1>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example"  style="height:100px; overflow:scroll;">                 
                        <tr>
                            
                        </tr>
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
                        @foreach($khoa as $row)
                        <tr class="odd gradeX" align="center">
                            <td >{{$row->hoten}}</td>
                            <td >{{$row->tenlop}}</td>
                            <td >{{$row->tenkhoahoc}}</td>
                            <td >{{$row->ngaysinh}}</td>
                            <td >{{$row->email}}</td>
                            <td >{{'0'.$row->sdt}}</td>
                        </tr>
                        @endforeach
                        

                        </tbody>
    </table>
 </div>
@stop 

@section('footer')
    @include('footer')
@stop