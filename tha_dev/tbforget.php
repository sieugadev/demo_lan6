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
if(isset($_POST["ok"]))
	{
	if($_POST["user1"]==NULL)
		{
			echo "Bạn chưa nhập tài khoản.";
			exit;
		}
		else
			{
				$user=$_POST["user1"];
			}
		if($_POST["email1"]==NULL)
		{
			echo "Bạn chưa nhập email.";
			exit;
		}
		else
			{
				$email=$_POST["email1"];
			}
				if($_POST["pass1"]==NULL)
			{
				echo "Bạn chưa nhập mật khẩu mới.";
				exit;
			}
		else
			{	
				$matkhau1=$_POST["pass1"];
			}
			if($_POST["pass2"]==NULL)
		{
			echo "Ban chua nhap mat khau hai";
			exit;
		}
		else
			{
				$matkhau2=$_POST["pass2"];
		$tk=strlen($user);
	if($tk<6)
	{	echo "Tài khoản phải lớn hơn 6 ký tự.";
		exit;
	}		
			}
		 $kt = "/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+(\.[a-z]{2,3})+$/";
	   if (!preg_match ( $kt, $email ))
	   { 
			echo "Địa chỉ email phải hợp lệ!!!";exit;
	   }	
	   
	 $pass11=strlen($matkhau1);
	if($pass11<6)
	{	echo "Mật khẩu phải lớn 6 ký tự";
		exit;
	}
$pass22=strlen($matkhau2);
	if($pass22<6)
	{	echo "Mật khẩu phải hai phải lớn 6 ký tự.";
		exit;
	}		
	if($matkhau1!=$matkhau2)
	   { echo "Mật khẩu phải trùng khớp";
		exit;}
		if($user!="")
	{		
			$id=$user;
			mysql_connect("localhost","root","")
			or die("Khong the ket noi den localhost");
			mysql_select_db("sanpham")
			or die ("Khong tim co so du lieu");
			   $sql_query = @mysql_query("SELECT email FROM thanhvien WHERE username='{$id}'");
        $member = @mysql_fetch_array( $sql_query ); 
			if($email==$member['email'])
			{
			$sql=mysql_query("update thanhvien set password='$matkhau1' where email='{$email}'");
			$suapass=mysql_query($sql);
             header("location:doipassthanhcong.php"); 
				
			}			
					
			else { echo "Email hoặc tài khoản không chính xác!.Vui lòng kiểm tra lại!!!";}
		
	
	}
	}
	
	
?>

       </ol>

</form>


</body>
</html>