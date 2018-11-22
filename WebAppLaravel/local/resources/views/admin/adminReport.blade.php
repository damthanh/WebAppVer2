@extends('admin.adminMaster')
@section('title')
    <title>Thông kê</title>
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
    <canvas id="company" width="200" height="100"></canvas>
    <br>
    <table class="tableInformation" width="1000px">               
        <tr>
            <td>số lượng sinh viên có mức lương dưới 1000$:</td>
            <td> {{$luong1}}</td>
        </tr>
        <tr>
            <td>số lượng sinh viên có mức lương dưới từ 1000$-2000$:</td>
            <td>{{$luong2}}</td>
        </tr>
        <tr>
            <td>số lượng sinh viên có mức lương dưới từ 2001$-3000$:</td>
            <td>{{$luong3}}</td>
        </tr>
        <tr>
            <td>số lượng sinh viên có mức lương dưới từ 3001$-5000$:</td>
            <td>{{$luong4}}</td>
        </tr>
        <tr>
            <td>số lượng sinh viên có mức lương trên 5000$:</td>
            <td> {{$luong5}}</td>
        </tr>
    </table>
    <canvas id="luong" width="100" height="50"></canvas>
 </div>
 <script>
    new Chart(document.getElementById("company"),{
        type: 'pie',
        data:{
            labels: ["Doanh nghiệp nhà nước","Doanh nghiệp tư nhân","Doanh nghiệp nước ngoài"],
            datasets: [{
                label: "đơn vị(%)",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                data: [{{$nhanuoc}},{{$tunhan}},{{$nuocngoai}}]
            }]
        },
        options: {
            title: {
            display: true,
            text: 'Biểu đồ tỷ lệ sinh viên làm việc trong các loại hình doanh nghiệp'
        }
    }
    });
    new Chart(document.getElementById("luong"), {
    type: 'bar',
    data: {
      labels: ["<1000", "1000-2000", "2001-3000","3001-5000", ">5000"],
      datasets: [
        {
          label: "số lượng sinh viên",
          backgroundColor:["#3e95cd","#3e95cd","#3e95cd","#3e95cd","#3e95cd"],
          data: [{{$luong1}},{{$luong2}},{{$luong3}},{{$luong4}},{{$luong5}}]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Biểu đồ số lượng sinh viên ứng với các mức lương'
      }
    }
});
 </script>

@stop

