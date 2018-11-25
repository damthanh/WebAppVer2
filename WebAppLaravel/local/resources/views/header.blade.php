<div class="topheader" style="height:200px">
    <div class="outer">
        <div class="inner">
            <div class="topleftmenu" style="width:1300px;">
                <a target="_top" href="home">Trang chủ</a>
                <span class="infoBox" id="information">
                    <a class="info-choose" id="information-choose" target="_top" href="information">Hồ sơ </a>
                </span>
                <a class="dropdown" style="text-align:center">
                    <a target="_top" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kết nối cựu sinh viên<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color: #268dc9">
                        <li><a href="listStudent" >Cùng lớp</a></li>
                        <li><a  href="listStudent2">Cùng khóa</a> </li> 
                        <li><a  href="searchStudent">Tìm kiếm</a> </li> 
                    </ul>
                </a>
                <a target="_top" href="work">Quá trình công tác</a>
                <a target="_top" href="khaosat">Khảo sát</a>
                <a target="_top" href="history">Lịch sử </a>
                <a target="_top" href="report">Thống kê</a>
            
          
                @if(Auth::check())
                <div class="toprightmenu">
                <a class="dropdown" style="text-align:center">
                    <a target="_top" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->email}}<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color: #268dc9">
                        <li><a href="changePass" >Đổi mật khẩu</a></li>
                        <li><a  href="{{url('logout')}}">Đăng xuất</a></li>
                    </ul>
                
                </a>
                </div>
                @else
                <a target="_top" href="login">Đăng nhập</a>
                <a target=_top href="register">Đăng kí</a>
                @endif
            </div>
               
            </div>
        </div>
    </div>
</div>
<header>
<div id="banner">
    <a href="" class="gotohome">
        <div id='logo' class="float-left col-sm-2"><img src="{{asset('images/UET.jpg')}}" height="140px" width="140px" /></div>
    </a>
    <a href="" class="gotohome">
        <div id="slogan" class="float-left col-sm-10" style="font-family: 'Times New Roman'">TRANG CỰU SINH VIÊN ĐẠI HỌC
            CÔNG NGHỆ - ĐHQGHN</div>
    </a>
</div>
</header>