<div class="topheader">
    <div class="outer">
        <div class="inner">
            <div class="topleftmenu" style="width:1200px;">
                <a target="_top" href="home">Trang chủ</a>
                <span class="infoBox" id="information">
                    <a class="info-choose" id="information-choose" target="_top" href="{{url('information')}}">Thông tin cá nhân</a>
                </span>
                <a target="_top" href="listStudent">Danh sách cựu sinh viên</a>
                <a target="_top" href="{{url('work')}}">Quá trình công tác</a>
               
                <a target="_top" href="history">Lịch sử truy cập</a>
                <a target="_top" href="report">Thống kê</a>
                <a target="_top" href="information">{{Auth::user()->email}}</a>
                <a target="_top" href="{{url('logout')}}">Đăng xuất</a> 
                <!-- <div class="toprightmenu">
                
                <div class="login_register">
                    <li class="dropdown" style="text-align:center">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->email}}<b class="caret"></b></a>
                        <ul class="dropdown-menu" style="padding-top:0px">
                            <li><a href="{{url('logout')}}" style="width:158px">Logout</a></li>
                        </ul>
                    </li>    
                </div>
                 <div class="clear"></div> 
            </div> -->
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