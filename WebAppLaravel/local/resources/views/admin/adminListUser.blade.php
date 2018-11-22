@extends('admin.adminMaster')
@section('title')
    <title>Danh sách tài khoản</title>
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
<h1 class="text-center">Thêm tài khoản mới</h1>



 <form class="login-form" action=""  name="dangkycuusinhvien" enctype="multipart/form-data" method="post"  accept-charset="utf-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
    <table class="tableInformation" align="center">
                        
                        <tr class="form-group" >
                            <td style="width: 100px;">Email:</td>
                            <td colspan="3"><input type="input" name="email" class="form-control"   style="width:95%" /> </td>
                            
                        </tr>
                        <tr class="form-group" >
                            <td style="width: 100px;">Mật khẩu:</td>
                            <td ><input type="text" name="password" style="width:95%" /> </td>
                            <td>Cấp độ tài khoản:</td>
                            <td>
                            <select name="user_lv">
                                <option value="1">Quản trị</option>
                                <option value="2">Người dùng</option>
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
<h1 class="text-center">Danh sách tài khoản</h1>
<table class="table table-striped table-bordered table-hover" id="dataTables-example" width="1000px">                 
                    <tr>
                    <button type="submit" name="btn" value="edit" class="btn btn-registerinfor">Sửa</button>  
                    <button type="submit" name="btn" value="delete" class="btn btn-registerinfor">Xóa</button>   
                    <button type="submit" name="btn" value="deleteall" class="btn btn-registerinfor">Xóa hết</button>   
                    </tr>
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Email</th>
                            <th>Mật khẩu </th>
                            <th> Ngày tạo tài khoản</th>
                            <th>Ngày cập nhật</th>
                            <th> Cấp độ tài khoản</th>
                            <th>Sửa</th>
                            <th> Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $row)
                    
                        <input type="hidden" name="id" value="{{$row->id}}" />
                        <tr class="odd gradeX" align="center">
                            <td>{{$row->id}}</td>
                            <td><input type="text"  name="email{{$row->id}}" value="{{$row->email}}"/></td>
                            <td><input type="text"  name="password{{$row->id}}" value="{{$row->password}}"/></td>
                            <td>{{$row->created_at}}</td>
                            <td>{{$row->updated_at}}</td>
                            <td>
                            <select name="user_id{{$row->id}}">
                            @if($row->user_lv==1)
                            <option value="1" selected="true">Quản trị</option>
                            <option value="2">Người dùng</option>
                            @else
                            <option value="1" >Quản trị</option>
                            <option value="2" selected="true">Người dùng</option>
                            @endif
                            </select>
                            </td>
                           
                            
                            <td class="center"><input type="radio" name="checkedit" value="{{$row->id}}"/></td>
                            <td class="center"><input type="checkbox" name="d[]" value="{{$row->id}}"/></td>
                            
                        </tr>
                 
                    @endforeach
                    

                    </tbody>
 </table>
</form> 


@stop

