@extends('master')

@section('title')
    <title> Thống kê</title>
@stop

@section('head')
    @include('head')
@stop

@section('header')
    @include('headerLogin')
@stop     

@section('content')
<div class="col-md-10 registerinfor-sec">
    <h1 class="text-center">Thống kê việc làm của cựu sinh viên</h1>
    <table class="tableInformation" width="1000px">               
        <tr>
            <td>Mức lương trung bình:</td>
            <td> {{$mucluong}}</td>
        </tr>
        <tr>
            <td>Tỉ lệ sinh viên làm trong doanh nghiệp nhà nước:</td>
            <td>{{$nhanuoc.'%'}}</td>
        </tr>
        <tr>
            <td>Tỉ lệ sinh viên làm trong doanh nghiệp tư nhân:</td>
            <td>{{$tunhan.'%'}}</td>
        </tr>
        <tr>
            <td>Tỉ lệ sinh viên làm trong doanh nghiệp nước ngoài:</td>
            <td>{{$nuocngoai.'%'}}</td>
        </tr>
    </table>
 </div>
@stop 

@section('footer')
    @include('footer')
@stop