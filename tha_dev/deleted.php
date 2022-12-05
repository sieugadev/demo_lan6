<?php
		if(isset($_GET['id']))// code nhận id
		error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);  		
		        // Neu xoa mot san pham
			{
				$id=$_GET['id'];
				$conn=mysql_connect("localhost","root","") or die("khong the ket noi den co so du lieu");
				mysql_select_db("sanpham",$conn);
				$sql="delete from san_pham where id='$id'";
				mysql_query($sql);
				header("location:quanlysp.php");
				exit();
			}
?>		
