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
			echo "Ban chưa nhập giá sản phẩm.";
			}
		else 
		{
		   $gia=$_POST['gia1'];
		}
if($_POST['loai1']==NULL)
			{
			echo "Bạn chưa nhập loại sản phẩm";
			exit;
			}
		else 
		{
		   $loai=$_POST['loai1'];
		}
if($_POST['hinh1']==NULL)
			{
			echo "Bạn chưa update hình sản phẩm";
			exit;
			}
		else 
		{
		   $hinh=$_POST['hinh1'];
		}	
		if($ten && $ma && $gia && $loai && $hinh)
		{
			$conn=mysql_connect("localhost","root","");
			 @mysql_query("'SET NAMES utf8'",$conn);
			or die("khong the ket no den server");
			mysql_select_db("shopsport")
			or die("khong the khoi den co so du lieu");
			mysql_query("insert into from aobongda (ten_sp,ma_sp,gia_sp,loai,hinh_sp)
			values('$ten','$ma','$gia','$loai','$hinh')");
			mysql_close();
			echo "Nhập sản phẩm thành công!!!";
		}
    }		
			
			
			
?>
