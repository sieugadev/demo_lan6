<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A beautiful CSS Form</title>
<link rel="stylesheet" type="text/css" media="screen" href="thongbao1.css" />
<style type="text/css">
#button 
		{
				position: absolute;
				left: 954px;
				top: 386px;
				width: 79px;
				height: 28px;
				z-index: 1;
				color:#FFF;
				font-size:22px;
				font-family:"Courier New", Courier, monospace;
				font-style:oblique;
				text-decoration: none;
		}
#button a:link
		{
				text-decoration: none;
		}
#button a:hover
		{
			text-decoration: none;
			color:#F00;
		}
</style>
</head>

<body background="../hinhanh/image/nen1.jpg">

<div id="button">
<a href="javascript: history.go(-1)">Trở về</a>
</div>
<form action="#">

  <p>THÔNG BÁO</p>

	<ol>
  <?php
error_reporting (E_ALL ^ E_NOTICE);
if(isset($_POST['ok']))
{
			 if($_POST['user1']==NULL)
						{ 
							echo  "Bạn chưa nhập tài khoản.";
							exit;
									}
			 else
						{ 
							$user=$_POST['user1'];
						}
			if($_POST['ten1']==NULL)
					{ 
						echo "Bạn chưa nhập tên khách hàng.";
						exit;
						
					}
			else 
			{ 
				$ten=$_POST['ten1'];
			}
			   if($_POST['pass1']==NULL)
						{
							echo "Bạn chưa nhập mật khẩu.";
							exit;
							
						}
			   else
						{ 
							$matkhau1=$_POST['pass1'];
						}
			   if($_POST['pass2']==NULL)
						{
						echo "Bạn chưa nhập mật khẩu.";
						exit;
						
						}
			   else 
						{
							$matkhau2=$_POST['pass2'];
						}
				if($_POST['email1']==NULL)
						{
							echo "Bạn chưa nhập email.";
							exit;
										}
				else 
				{ 
					$email=$_POST['email1'];
				}
				if($_POST['gioitinh1']==NULL)
						{ 
							echo "Ban chưa chọn giới tính.";
							exit;
						}
				else 
				{ 
					$gioitinh=$_POST['gioitinh1'];
				}
				if($_POST['day1']==NULL)
						{ 
							echo "Bạn chưa chọn ngày sinh.";
							exit;
						}
				else 
				{ 
					$day=$_POST['day1'];
				}
				if($_POST['month1']==NULL)
						{ 
							echo "Ban chưa chọn tháng.";
							exit;
						}
				else 
				{ 
					$month=$_POST['month1'];
				}
				if($_POST['year1']==NULL)
						{ 
							echo "Bạn chưa chọn năm sinh.";
							exit;
						}
				else 
				{ 
					$year=$_POST['year1'];
				}
	
				if($_POST['phone1']==NULL)
						{ 
							echo "Bạn chưa chọn số điện thoại.";
							exit;
						}
				else 
				{ 
					$phone=$_POST['phone1'];
				}
				if($_POST['diachi1']==NULL)
						{ 
							echo "Bạn chưa nhập địa chỉ.";
							exit;
						}
				else 
				{ 
					$diachi=$_POST['diachi1'];
				}
				$ns=$day."/".$month."/".$year;
				$lenght=strlen($user);
				if($lenght<6)
						{	echo "Tài khoản phải lớn hơn 6 ký tự.";
							exit;
						}
				$pass1=strlen($matkhau1);
				if($pass1<6)
						{	echo "Mật khẩu phải lớn hơn 6 ký tự.";
							exit;
						}	
				$pass2=strlen($matkhau2);
				if($pass2<6)
					{	echo "Mật khẩu phải lớn hơn 6 ký tự.";
						exit;
					}	
				if($matkhau1!=$matkhau2)
					{ 
						echo "Mật khẩu phải trùng khớp.";
						exit;
					}
				$kt = "/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+(\.[a-z]{2,3})+$/";
				if (!preg_match ( $kt, $email ))
					{ 
							echo "Địa chỉ phải hợp lệ, đề nghị kiểm tra lại!<br>";
							exit;
					}
				if(!preg_match('/([0-9]+)/i',$phone))
				   {
						echo "Điện thoại phải nhập số";
						exit ;
					} 
				if($user && $matkhau1 && $email  && $ten && $phone && $ns && $gioitinh && $diachi)	    	
						{
								mysql_connect("localhost","root","")
								or die("khong the ket noi den server");
								mysql_select_db("sanpham")
								or die (" khong the ket noi den database!>");
								mysql_query(" insert into thanhvien (username,password,hoten,email,phone,sex,ns,diachi,admin) values('$user','$matkhau1','$ten','$email','$phone','$gioitinh','$ns','$diachi','2')");
								header("location:dangkythanhcong.php");
						}
 } 
	  	   ?>
  </ol>
 </form>
</body>
</html>