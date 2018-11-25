<div class="topheader" style="overflow:visible;">
    <div class="outer">
        <div class="inner">
            <div class="topleftmenu" style="width:1200px;">
                <a target="_top" href='home'>Trang chủ</a>
                <a target="_top" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quản lý hệ thống <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" style="background-color: #268dc9">
                        <li ><a role="menuitem"  href='listUser'>Quản lý người dùng</a></li>
                        <li ><a role="menuitem"  href='listCsv'>Quản lý cựu sinh viên</a></li>
                        <li ><a role="menuitem"  href='listCompany'>Quản lý cơ quan</a></li>
                        <li ><a role="menuitem"  href='listWork'>Quá trình công tác</a></li>
                        <li ><a role="menuitem"  href='listClass'>Quản lý lớp</a></li>
                        <li ><a role="menuitem"  href='listCourse'>Quản lý khóa học</a></li>
                    </ul>
                <a target="_top" href='listNotice'>Thông báo</a>
                <a target="_top" href='listSurvey'>Xem khảo sát</a>    
                <a target="_top" href='listHistory'>Lịch sử người dùng</a>
                <a target="_top" href='report'>Thống kê</a> 
                @if(Auth::check()) 
                <div class="toprightmenu"> 
                    <a class="dropdown" style="text-align:center">
                        <a target="_top" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->email}}<span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background-color: #268dc9">
                            <li><a href="changePass" style="padding-top:0px; ">Đổi mật khẩu</a></li>
                            <li><a href="{{route('logout')}}" >Đăng xuất</a> </li>
                        </ul>
                    
                    </a>
                </div>
                @else
                <a target="_top" href="" >Đăng nhập</a> 
                <a target="_top" href="" >Đăng kí</a>
                @endif
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