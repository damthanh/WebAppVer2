@extends('master')

@section('title')
    <title> History</title>
@stop

@section('head')
    @include('head')
@stop

@section('header')
    @include('headerLogin')
@stop     

@section('content')
<div class="col-md-10 registerinfor-sec">
    <h1 class="text-center">Lịch sử truy cập</h1>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example" width="1000px">                 
                        <tr>
                            
                        </tr>
                        <thead>
                            <tr align="center">
                                <th colspan="2">Thời gian</th>
                                <th colspan="2"> Hành động</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($lichsu as $row)
                        <tr class="odd gradeX" align="center">
                            <td colspan="2">{{$row->time}}</td>
                            <td colspan="2">{{$row->action}}</td>
                        </tr>
                        @endforeach
                        

                        </tbody>
    </table>
 </div>
@stop 

@section('footer')
    @include('footer')
@stop