@extends('admin.adminMaster')
@section('title')
    <title>Xem khảo sát</title>
@stop

@section('content')
<br>
<br>
<h1 class="text-center">Bảng khảo sát</h1>
<table class="table table-striped table-bordered table-hover" id="dataTables-example" width="1000px">                 

                    <thead>
                        <tr align="center">
                            <th>Câu hỏi</th>
                            <th>Câu trả lời</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($khaosat as $row)
                    
                        <input type="hidden" name="id" value="{{$row->id}}" />
                        <tr class="odd gradeX" align="center">
                            <td>{{$row->cauhoi}}</td>
                            <td>{{$row->cautraloi}}</td>
                            
                        </tr>
                 
                    @endforeach
                    

                    </tbody>
 </table>
</form> 


@stop

