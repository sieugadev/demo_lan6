<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A beautiful CSS Form</title>
<link rel="stylesheet" type="text/css" media="screen" href="thongbao1.css" />
<style type="text/css">
#button {
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
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);  
if(isset($_POST['ok']))
	{
		if($_POST['ten1']==NULL)
			{
			echo "Bạn chưa nhập tên sản phẩm.";
			exit;
			}
		else 
		{
		   $ten=$_POST['ten1'];
		}	
if($_POST['ma1']==NULL)
			{
			echo "Bạn chưa nhập mã sản phẩm.";
			exit;
			}
		else 
		{
		   $ma=$_POST['ma1'];
		}
if($_POST['gia1']==NULL)
			{
			echo "Bạn chưa nhập giá sản phẩm.";
			exit;
			}
		else 
		{
		   $gia=$_POST['gia1'];
		}
if($_POST['loai1']==NULL)
			{
			echo "Ban chưa nhập loại sản phẩm";
			exit;
			}
		else 
		{
		   $loai=$_POST['loai1'];
		}
if($_POST['hinh1']==NULL)
			{
			echo "Bạn chưa upload hình sản phẩm";
			exit;
			}
		else 
		{
		   $hinh=$_POST['hinh1'];
		}	
		if($ten && $ma && $gia && $loai && $hinh)
		{
			$conn=mysql_connect("localhost","root","");
			@mysql_query("SET NAMES UTF8",$conn)
			or die("khong the ket no den server");
			mysql_select_db("sanpham")
			or die("khong the khoi den co so du lieu");
			mysql_query("insert into  san_pham (ten_sp,ma_sp,gia_sp,loai,hinh_sp)
			values('$ten','$ma','$gia','$loai','$hinh')");
			mysql_close();
			echo "Nhập sản phẩm thành công.";
		}
    }		
			
			
			
?>

	  	  
	   
	


  </ol>
       
</form>


</body>
</html>