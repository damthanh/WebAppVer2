@extends('admin.adminMaster')
@section('title')
    <title>Lịch sử người dùng</title>
@stop

@section('content')
@if (session('status'))
        <div class="alert alert-info">{{session('status')}}</div>
@endif
@if (session('err'))
        <div class="alert alert-danger">{{session('err')}}</div>
@endif
<br>
<br>
<h1 class="text-center">Lịch sử người dùng</h1>
<br>
<form class="login-form" action=""  name="dangkycuusinhvien" enctype="multipart/form-data" method="post"  accept-charset="utf-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
    <table >
        <tr class="form-group">
            <td>Chọn tháng</td>
            <td>
            <select name="month" >
                <option value=""></option>
                @for($i=1;$i<=12;$i++)
                <option value="{{$i}}">{{'Tháng '.$i}}</option>
                @endfor
            </select>
            </td>
            <td>
            <button type="submit" name="btn" value="search" class="btn btn-registerinfor">Tìm kiếm</button> 
            </td>
        </tr>
    </table>


<br>
<button type="submit" name="btn" value="delete" class="btn btn-registerinfor">Xóa</button> 
<table class="table table-striped table-bordered table-hover" id="dataTables-example" width="1000px">                 
                
                    <thead>
                        <tr align="center">
                            <th>Tài khoản</th>
                            <th>Thời gian</th>
                            <th>Hành động</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($lichsu as $row)
                    
                        <input type="hidden" name="id" value="{{$row->id}}" />
                        <tr class="odd gradeX" align="center">
                            <td>{{$row->email}}</td>
                            <td>{{$row->time}}</td>
                            <td>{{$row->action}}</td>
                            <td class="center"><input type="checkbox" name="d[]" value="{{$row->id}}"/></td>
                        </tr>
                 
                    @endforeach
                    

                    </tbody>
 </table>
</form> 


@stop

