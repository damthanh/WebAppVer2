@extends('admin.adminMaster')
@section('title')
    <title>Danh sách cựu sinh viên</title>
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
<h1 class="text-center">Thêm cựu sinh viên</h1>



 <form class="login-form" action=""  name="dangkycuusinhvien" enctype="multipart/form-data" method="post"  accept-charset="utf-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
    <table class="tableInformation" align="center">
                        <tr class="form-group">
                            <td style="width: 200px;">User_id:</td>
                            <td colspan="2">
                                <select name="newuser_id">
                                    @foreach($user as $row)
                                        <option value="{{$row->id}}">{{$row->id}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                            <a href='coquan'><button type="button" value="" class="btn btn-registerinfor">Thêm tài khoản mới</button> </a> 
                            </td>
                        </tr>
                        <tr >
                            <td style="width: 100px;">Họ tên:</td>
                            <td colspan="3"><input type="input" name="name" class="form-control"   style="width:95%" /> </td>
                            
                        </tr>
                        <tr >
                            <td style="width: 100px;">Ngày sinh:</td>
                            <td ><input type="date" name="born"  style="width:95%" /> </td>
                            <td>Quê quán:</td>
                            <td><input type="text" name="hometown"  class="form-control"/></td>
                        </tr>
                        </tr>
                            <td style="width: 100px;">SĐT:</td>
                            <td><input type="input" name="phone"  class="form-control"  style="width:95%" /></td>
                        </tr>
                        <tr>
                            <td style="width:100px">Khóa học:</td>
                            <td>
                                <select name="course_id">
                                    @foreach($khoahoc as $row)
                                        <option value="{{$row->id}}">{{$row->tenkhoahoc}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td style="width:100px">Lớp:</td>
                            <td>
                                <select name="class_id">
                                    @foreach($lop as $row)
                                        <option value="{{$row->id}}">{{$row->tenlop}}</option>
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
<h1 class="text-center">Danh sách cựu sinh viên</h1>
<table class="table table-striped table-bordered table-hover" id="dataTables-example" width="1000px">                 
                    <tr>
                    <button type="submit" name="btn" value="edit" class="btn btn-registerinfor">Sửa</button>  
                    <button type="submit" name="btn" value="delete" class="btn btn-registerinfor">Xóa</button>   
                    <button type="submit" name="btn" value="deleteall" class="btn btn-registerinfor">Xóa hết</button>   
                    </tr>
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Họ tên</th>
                            <th> Ngày sinh</th>
                            <th> Quê quán</th>
                            <th>SĐT</th>
                            <th> Email </th>
                            <th>user_id</th>
                            <th>khoahoc_id</th>
                            <th>lop_id</td>
                            <th>Sửa</th>
                            <th> Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($csv as $row)
                    
                        <input type="hidden" name="id" value="{{$row->id}}" />
                        <tr class="odd gradeX" align="center">
                            <td>{{$row->id}}</td>
                            <td><input type="text"  name="hoten{{$row->id}}" value="{{$row->hoten}}"/></td>
                            <td><input type="date"  name="ngaysinh{{$row->id}}" value="{{$row->ngaysinh}}"/></td>
                            <td><input type="text"  name="quequan{{$row->id}}" value="{{$row->quequan}}"/></td>
                            <td><input type="text"  name="sdt{{$row->id}}" value="{{$row->sdt}}"/></td>
                            <td><input type="text"  name="email{{$row->id}}" value="{{$row->email}}"/></td>
                            <td>
                            <select name="user_id{{$row->id}}">
                            @foreach($user as $row1)
                                @if($row1->id==$row->user_id)
                                    <option value="{{$row1->id}}" selected="selected">{{$row1->id}}</option>
                                @else
                                    <option value="{{$row1->id}}" >{{$row1->id}}</option>
                                @endif
                            @endforeach
                            </select>
                            </td>
                            <td>
                            <select name="khoahoc_id{{$row->id}}">
                            @foreach($khoahoc as $row2)
                                @if($row2->id==$row->khoahoc_id)
                                    <option value="{{$row2->id}}" selected="selected">{{$row2->tenkhoahoc}}</option>
                                @else
                                    <option value="{{$row2->id}}" >{{$row2->tenkhoahoc}}</option>
                                @endif
                            @endforeach
                            </select>
                            </td>
                            <td>
                            <select name="lop_id{{$row->id}}">
                            @foreach($lop as $row3)
                                @if($row3->id==$row->lop_id)
                                    <option value="{{$row3->id}}" selected="selected">{{$row3->tenlop}}</option>
                                @else
                                    <option value="{{$row3->id}}" >{{$row3->tenlop}}</option>
                                @endif
                            @endforeach
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

