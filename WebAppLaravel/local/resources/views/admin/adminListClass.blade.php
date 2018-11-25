@extends('admin.adminMaster')
@section('title')
    <title>Danh sách lớp</title>
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
<h1 class="text-center">Thêm lớp mới</h1>



 <form class="login-form" action=""  name="dangkycuusinhvien" enctype="multipart/form-data" method="post"  accept-charset="utf-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
    <table class="tableInformation" align="center">
                        
                        <tr class="form-group" >
                            <td style="width: 100px;">Tên lớp:</td>
                            <td colspan="3"><input type="input" name="tenlop" class="form-control"   style="width:95%" /> </td>
                            
                        </tr>
                        <tr class="form-group" >
                            
                            <td>Khóa học:</td>
                            <td>
                            <select name="khoahoc">
                                @foreach($khoahoc as $row)
                                    <option value="{{$row->id}}">{{$row->tenkhoahoc}}</option>
                                @endforeach
                            </select>
                            </td>
                        </tr>
                        
                        <tr>
                        <td colspan="4" style="text-align:right">
                                
                                <button type="submit" name="btn" value="insert" class="btn btn-registerinfor">Thêm</button>              
                                
                        </td>
                        </tr>
                    
    </table>

 <hr>
 <br>
<h1 class="text-center">Danh sách lớp</h1>
<table class="table table-striped table-bordered table-hover" id="dataTables-example" width="1000px">                 
                    <tr>
                    <button type="submit" name="btn" value="edit" class="btn btn-registerinfor">Sửa</button>  
                    <button type="submit" name="btn" value="delete" class="btn btn-registerinfor">Xóa</button>   
                    <button type="submit" name="btn" value="deleteall" class="btn btn-registerinfor">Xóa hết</button>   
                    </tr>
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên lớp</th>
                            <th>Khóa học </th>
                            <th>Ngày cập nhật</th>                       
                            <th>Sửa</th>
                            <th> Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($lop as $row)
                    
                        <input type="hidden" name="id" value="{{$row->id}}" />
                        <tr class="odd gradeX" align="center">
                            <td>{{$row->id}}</td>
                            <td><input type="text"  name="tenlop{{$row->id}}" value="{{$row->tenlop}}"/></td>
                            <td>
                            <select name="khoahoc_id{{$row->id}}">
                            @foreach($khoahoc as $row1)
                                @if($row1->id == $row->khoahoc_id)
                                    <option value="{{$row1->id}}" selected="true">{{$row1->tenkhoahoc}}</option>
                                @else
                                    <option value="{{$row1->id}}" >{{$row1->tenkhoahoc}}</option>
                                @endif
                            @endforeach
                            <td>{{$row->updated_at}}</td>
                            
                           
                            
                            <td class="center"><input type="radio" name="checkedit" value="{{$row->id}}"/></td>
                            <td class="center"><input type="checkbox" name="d[]" value="{{$row->id}}"/></td>
                            
                        </tr>
                 
                    @endforeach
                    

                    </tbody>
 </table>
</form> 


@stop

