@extends('admin.adminMaster')
@section('title')
    <title>Lịch sử người dùng</title>
@stop

@section('content')
<br>
<br>
<h1 class="text-center">Lịch sử người dùng</h1>
<table class="table table-striped table-bordered table-hover" id="dataTables-example" width="1000px">                 

                    <thead>
                        <tr align="center">
                            <th>Thời gian</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($lichsu as $row)
                    
                        <input type="hidden" name="id" value="{{$row->id}}" />
                        <tr class="odd gradeX" align="center">
                            <td>{{$row->time}}</td>
                            <td>{{$row->action}}</td>
                            
                        </tr>
                 
                    @endforeach
                    

                    </tbody>
 </table>
</form> 


@stop

