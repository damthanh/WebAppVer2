@extends('admin.adminMaster')
@section('title')
    <title>Danh sách quá trình công tác</title>
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
<h1 class="text-center">Thêm nơi công tác</h1>



 <form class="login-form" action=""  name="dangkycuusinhvien" enctype="multipart/form-data" method="post"  accept-charset="utf-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
    <table class="tableInformation" align="center">
                        <tr class="form-group">
                            <td style="width: 200px;">ID Cựu sinh viên:</td>
                            <td colspan="2">
                                <select name="csv_id">
                                    @foreach($csv as $row)
                                        <option value="{{$row->id}}">{{$row->id}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr >
                            <td style="width: 100px;">Thời gian làm việc:</td>
                            <td colspan="3"><input type="input" name="thoigian" class="form-control"   style="width:95%" /> </td>
                            <td> Cơ quan</td>
                            <td>
                                <select name="coquan_id">
                                @foreach($coquan as $row)
                                    <option value="{{$row->id}}">{{$row->ten}}</option>
                                @endforeach
                                </select>
                            </td>
                            
                        </tr>
                        <tr >
                            <td style="width: 100px;">Vị trí:</td>
                            <td ><input type="text" name="vitri" class="form-control"  style="width:95%" /> </td>
                            <td>Mức lương:</td>
                            <td><input type="text" name="mucluong"  class="form-control"/></td>
                        </tr>
                        
                        <tr>
                        <td colspan="4" style="text-align:right">
                                
                                <button type="submit" name="btn" value="insert" class="btn btn-registerinfor">Thêm</button>              
                                
                        </td>
                        </tr>
                    
    </table>

 <hr>
 <br>
<h1 class="text-center">Danh sách quá trình công tác</h1>
<table class="table table-striped table-bordered table-hover" id="dataTables-example" width="1000px">                 
                    <tr>
                    <button type="submit" name="btn" value="edit" class="btn btn-registerinfor">Sửa</button>  
                    <button type="submit" name="btn" value="delete" class="btn btn-registerinfor">Xóa</button>   
                    <button type="submit" name="btn" value="deleteall" class="btn btn-registerinfor">Xóa hết</button>   
                    </tr>
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>CSV_ID</th>
                            <th> Thời gian</th>
                            <th> Cơ quan</th>
                            <th>Vị trí</th>
                            <th> Mức lương </th>                        
                            <th>Sửa</th>
                            <th> Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($work as $row)
                    
                        <input type="hidden" name="id" value="{{$row->id}}" />
                        <tr class="odd gradeX" align="center">
                            <td>{{$row->id}}</td>
                            <td><input type="text" style="width:100px" name="csv_id{{$row->id}}" value="{{$row->csv_id}}"/></td>
                            <td><input type="text"  name="thoigian{{$row->id}}" value="{{$row->thoigian}}"/></td>
                            <td>
                                <select name="coquan_id{{$row->id}}">
                                    @foreach($coquan as $row1)
                                        @if($row1->id==$row->coquan_id)
                                            <option value="{{$row1->id}}" selected="true">{{$row1->ten}}</option>
                                        @else
                                            <option value="{{$row1->id}}" >{{$row1->ten}}</option>  
                                        @endif    
                                    @endforeach
                                </select>
                            </td>
                            <td><input type="text"  name="vitri{{$row->id}}" value="{{$row->vitri}}"/></td>
                            <td><input type="text"  name="mucluong{{$row->id}}" value="{{$row->mucluong}}"/></td>
                            
                            
                            <td class="center"><input type="radio" name="checkedit" value="{{$row->id}}"/></td>
                            <td class="center"><input type="checkbox" name="d[]" value="{{$row->id}}"/></td>
                            
                        </tr>
                 
                    @endforeach
                    

                    </tbody>
 </table>
</form> 


@stop

