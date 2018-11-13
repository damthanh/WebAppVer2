
@extends('master')

@section('title')
    <title> Personal Information </title>
@stop

@section('head')
    @include('head')
@stop

@section('header')
    @include('headerLogin')
@stop

@section('content')
<div class="col-md-10 registerinfor-sec">
		<h1 class="text-center">Person Information</h1>
		
            <form class="login-form" action="" onsubmit="return check_input();" name="dangkycuusinhvien" enctype="multipart/form-data" method="post"  accept-charset="utf-8">  
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <hr>	
                <br>
                <table class="tableInformation">
                    <tr class="form-group">	
                        <td style="width: 120px;">Họ Tên:</td>
                        <td style="width: 260px;"><input type="input" name="inHoTen" class="form-control" required style="width:95%" value="" onblur="this.value = fnBlur(this.value)"/> </td>
                        <td style="width: 80px;">Ngày sinh:</td>
                        <td style="width: 280px;"><input type="input" name="inNgaySinh" required  style="width:50%" value="" /> ( dd/mm/yyyy ) </td>
                    </tr>
                    <tr>
                        <td>Hình cá nhân :</td>
                        <td colspan="3"><input type="file" class="file_1" name="userfile" /> (jpg,jpeg,gif,png) </td>
                    </tr>
                    <tr class="form-group" >
                        <td>Địa chỉ :</td>
                        <td colspan="3"><input type="input" name="inDiaChi" class="form-control"  style="width:100%" value=""/></td>
                    </tr>
                    <tr class="form-group">
                        <td>Nơi công tác :</td>
                        <td colspan="3"><input type="input" name="inNoiCongTac" class="form-control" style="width:100%" value=""/></td>
                    </tr>
					<tr >
                        <td style="width: 120px;">Vị trí:</td>
                        <td style="width: 260px;"><input type="input" name="inViTri" class="form-control" required style="width:95%" value=""/> </td>
                        <td style="width: 80px;">Chức vụ:</td>
                        <td style="width: 240px;"><input type="input" name="inChucVu" class="form-control" required style="width:100" value=""/></td>
                    </tr>
                    <tr >
                        <td style="width: 120px;">Mức lương:</td>
                        <td style="width: 260px;"><input type="input" name="inMucLuong" class="form-control" required style="width:95%" value=""/> </td>
                        <td style="width: 80px;">Số ĐT:</td>
                        <td style="width: 240px;"><input type="input" name="inSoDT" class="form-control" required style="width:100" value=""/></td>
                    </tr>
                </table>
                <hr>
                <table class="tableInformation">
                    <tr >
                        <td style="width: 120px;">Mã sinh viên:</td>
                        <td style="width: 260px;"><input type="input" name="inMSSV" class="form-control" required style="width:95%" value=""/> </td>
                        <td style="width: 80px;">Khóa học:</td>
                        <td style="width: 240px;"><input type="input" name="inKhoaHoc" class="form-control" required style="width:100%" value=""/></td>
                    </tr>
                    <tr>
                        <td>Năm tốt nghiệp:</td>
                        <td>
                            <select name="inNamTotNghiep" style="width: 95%;">
                                                                        <option value="2017" selected>2017</option>
                                                                        <option value="2016" >2016</option>
                                                                        <option value="2015" >2015</option>
                                                                        <option value="2014" >2014</option>
                                                                        <option value="2013" >2013</option>
                                                                        <option value="2012" >2012</option>
                                                                        <option value="2011" >2011</option>
                                                                        <option value="2010" >2010</option>
                                                                        <option value="2009" >2009</option>
                                                                        <option value="2008" >2008</option>
                                                                        <option value="2007" >2007</option>
                                                                        <option value="2006" >2006</option>
                                                                        <option value="2005" >2005</option>
                                                                        <option value="2004" >2004</option>
                                                                        <option value="2003" >2003</option>
                                                                        <option value="2002" >2002</option>
                                                                        <option value="2001" >2001</option>
                                                                        <option value="2000" >2000</option>
                                                                        <option value="1999" >1999</option>
                                                                </select>
                        </td class="form-group">
                        <td>Lớp:</td>
                        <td>
                            <input type="input" name="inLop" class="form-control" required style="width:100%" value=""/> 
                        </td>
                    </tr>
                    <tr>
                        <td>Khoa:</td>
                        <td>
                            <select name="inKhoa" style="width: 95%;" onchange="level2(this.value)">
                                <option selected="selected" value="0">Chọn Khoa</option>
                                                                    <option value="1" >Khoa Công Nghệ Thông Tin</option>
																			 <option value="2" >Khoa Điện Tử Viễn Thông</option>
                                                                        <option value="3" >Khoa Vật Lý Kỹ Thuật Và Công Nghệ Nano</option>
                                                                        <option value="4" >Khoa Cơ Học Kỹ Thuật Và Tự Động Hóa</option>
                                                                        <option value="5" >Viện Công Nghệ Hàng Không Vũ Trụ</option>
                                                                        <option value="6" >Viện Tiên Tiến Về Kỹ Thuật Và Công Nghệ</option>
                                                                        <option value="7" >Bộ Môn Công Nghệ Xây Dựng-Giao Thông </option>
                                                                        
                                                                </select>
                        </td>
                        <td>Ngành học:</td>
                        <td>
                            <select name="inNganh" id="inNganh" style="width: 100%;">
									  <option selected="selected" value="0">Chọn Ngành</option>
																		<option value="11" >Công Nghệ Thông Tin</option>
                                                                        <option value="12" >Công Nghệ Thông Tin Định Hướng Thị Trường Nhật Bản</option>
                                                                        <option value="13" >Hệ Thống Thông Tin</option>
                                                                        <option value="21" >Mạng Máy Tính Và Truyền Thông Dữ Liệu</option>
                                                                        <option value="21" >Kỹ thuật máy tính</option>
                                                                        <option value="22" >Kỹ thuật Robot*</option>
                                                                        <option value="31" >Kỹ thuật năng lượng*</option>
                                                                        <option value="32" >Vật lý kỹ thuật</option>
                                                                        <option value="41" >Cơ kỹ thuật</option>
                                                                        <option value="51" >Công nghệ kỹ thuật xây dựng</option>
                                                                        <option value="61" >Công nghệ kỹ thuật cơ điện tử</option>
                                                                        <option value="71" >Công nghệ Hàng không vũ trụ*</option>
																		<option value="14" >Khoa học Máy tính**</option>
                                                                        <option value="22" >Công nghệ kỹ thuật điện tử - viễn thông**</option>
                                                                        
                                                                        
                                                                </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Bậc đào tào:</td>
                        <td colspan="3">
                            <select name="inBacDaoTao">
																		<option value="101" >Đại học chính quy hệ chuẩn</option>
                                                                        <option value="102" >Sau đại học</option>
                                                                        <option value="103" >Đại học chính quy hệ chất lượng cao</option>
                                                                        <option value="104" >Đại học văn bằng 2</option>
                                                                </select>
                        </td>
                    </tr>
                    <tr>
                         <td colspan="4" style="text-align:right">
                             
                              <button type="submit" value="Cập nhật" class="btn btn-registerinfor">Cập nhật</button>              <a  href="/"><button type="button" class="btn btn-registerinfor">Bỏ Qua</button></a>
                        </td>
                    </tr>
                </table>
			</form>
		</div>
	</div>	
@stop

@section('footer')
    @include('footer')
@stop

@section('script')
<script>
function trimAll(sString) {
						while (sString.substring(0,1) == ' ')
					  {
						 sString = sString.substring(1, sString.length);
					  }
					   while (sString.substring(sString.length-1, sString.length) == ' ')
					  {
						 sString = sString.substring(0,sString.length-1);
					  }
					   return sString;
					 }
					 
					function isEmail(emailStr){

					emailStr = emailStr.toLowerCase();
				
					if (trimAll(emailStr) == ''){
						return false;
					}
					return CheckEmailFormat(emailStr);
					}
                                        
                    function isDate(dateStr){
                                            
                        if (trimAll(dateStr) == ''){
						return false;
					}
					return CheckDateFormat(dateStr);
					}
					
							 
					function CheckEmailFormat(str){			
						if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)+.\w+([\.-]?\w+)+$/.test(str))
						{
							return (true);
						}
						return (false);
					}
                                        
                    function CheckDateFormat(str2){			
						if (/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(str2))
							{
								return (true);
							}
							return (false);
						}
                   
				   function check_input(){					 
						var f=document.dangkycuusinhvien;         
                        if(!isDate(f.inNgaySinh.value) ){
							alert('Ngày sinh không đúng định dạng ngày : dd/MM/yyyy ');
							f.inNgaySinh.select();
							return false;
						}
                                        
                        if(f.inKhoa.options[f.inKhoa.selectedIndex].value=='0'){
							alert('Vui lòng Chọn Khoa');
							return false;
					        } 
						
						if(f.inNganh.options[f.inNganh.selectedIndex].value=='0'){
							alert('Vui lòng Chọn Ngành');
							return false;
					        } 		
                                        
					return f.submit();
				}
</script>                
@stop
