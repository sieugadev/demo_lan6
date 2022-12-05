<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sơn yến nhi</title>
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
							if($_POST["tieude1"]==NULL)
								{
									echo "Bạn chưa nhập tiêu đề.";
									exit;
								}
							else
								{
									$tieude=$_POST["tieude1"];
								}
							if($_POST["ten1"]==NULL)
								{
									echo "Bạn chưa nhập tên khách hàng.";
									exit;
								}
							else
								{
									$ten=$_POST["ten1"];
								}
							if($_POST["email1"]==NULL)
								{
									echo "Bạn chưa nhập địa chỉ email.";
									exit;
								}
							else
								{
									$email=$_POST["email1"];
								}
							if($_POST["noidung1"]==NULL)
								{
									echo "Bạn chưa nhập địa chỉ email";
									exit;
								}
							else
							{
								$noidung=$_POST["noidung1"];
							}
							$kt = "/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+(\.[a-z]{2,3})+$/";
							if (!preg_match ( $kt, $email ))
								{ 
										echo "Dia chi email khong hop le!<br>";
										exit;
								}
							$ktnd=strlen($noidung);
							if($ktnd<20)
						   {
									echo "Nôi dung phải lớn hơn 20 ký tự.";
									exit;
						   }
							if($tieude && $ten && $noidung && $email)
							   {
										$conn=mysql_connect("localhost","root","");
										@mysql_query("SET NAMES UTF8",$conn)
										or die("khong the ket no den server");
										mysql_select_db("sanpham")
										or die("khong the ket noi den co so du lieu");
										mysql_query("insert into chamsoc_kh (tieude,ten,email,noidung) values ('$tieude','$ten','$email','$noidung')");
										mysql_close();
										echo "Gửi yêu cầu thành công!Tự động sẽ được chuyển về trang chủ.";
										header("refresh:3,index.php");
								}
						}	
							   
					
				
?>
      </ol>
</form>
</body>
</html>