
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<head>
    <title>son yen nhi</title>
	<link rel="stylesheet" type="text/css" href="tuade.css">
    <link rel="stylesheet" type="text/css" href="dathang.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://www.yourjavascript.com/560192341/magnifier.txt.js">
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
#giohang
{
  color:#F00;
  font-size:18px;
}
</style>
</head>
<body background="../hinhanh/image/nen1.jpg">
<form class="form-wrapper" align="left" action="#" method="POST" align="center">
	
	<input type="submit" value="Gio Hang Shop's Sport" id="submit" name="t3">
</form>
<br>
<html>
<div id="table">
                        	  <table align="center" bordercolor ="#FF00FF" border="1"cellpadding="10" cellspacing="1"bordercolor="#008000" bordercolordark="#FF0000"bordercolorlight="#008000">

							   <tr>
									     <td align="center" width="110" ><b>SẢN PHẨM </b></td>
										<td align="center" width="160" ><b>TÊN SẢN PHẨM</b></td>
									   <td align="center" width="90" ><b>MÃ SỐ</b></td>
									   <td align="center" width="100" ><b>SỐ LƯỢNG</b></td>
									   <td align="center" width="130" ><b>THÀNH TIỀN</b></td>
									   <td align="center" width="110" ><a><b>XÁC NHẬN</b></a></td>
							   </tr>
							   </div>
				<?php
					session_start();
					ob_start();
					// k?t n?i CSDL
					$conn=mysql_connect("localhost","root","");
					mysql_query("SET NAMES UTF8",$conn)
					or die("can't connect your database");
					mysql_select_db("sanpham",$conn);
					error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);  
			?>
		  <meta http-equiv="content-type" content="text/html charset=utf-8" />
		  
		<link rel="stylesheet" type="text/css" href="styleimg.css">
							<?php
                $giohang = $_SESSION['giohang'];
					// Neu nguoi dung cap nhat lai gio hang(?n n?t c?p nh?t)
					if(isset($_POST['capnhat']) && count($giohang) != "")
					{
							$soluong_cn = $_POST['soluong'];
					
							foreach($soluong_cn as $id => $sl)
							{
									
									// N?u nhu ngu?i d?ng d?t l?i s? lu?ng  = 0  ==> th? ta h?y lu?n s?n ph?m d? ($id_sp) trong gi? h?ng ($_SESSION['giohang']) 
									if($sl == 0)
									{
											unset($_SESSION['giohang'][$id]);
									}
									// Nguoc l?i s? lu?ng sp ph?i l? s? ta c?p nh?t l?i s? lu?ng gi? h?ng
									
									else if($sl > 0 && is_numeric($sl))
									{
											$_SESSION['giohang'][$id] = $sl;
									}
									// Nguoc lai co the xuat thong bao so luong khong hop le (so luong = char)
									// refresh l?i gi? h?ng
									header("location: ".$_SERVER['REQUEST_URI']."");
							}
					}

					// n?u gi? h?ng c? s?n ph?m
					if(count($giohang))
					{
						?>
				<p>  <form action="" method="post">
		<?php
             
						 // Duy?t h?t gi? h?ng
							$tongcong =0;
							foreach($giohang as $id => $sl)
							{
									// truy van lay thong tin san pham
									$truyvan_gh = mysql_query("SELECT id,ma_sp,ten_sp,gia_sp,hinh_sp FROM san_pham WHERE id in ('$id')");
									$r = mysql_fetch_row($truyvan_gh);
																						?>
						
						<div id="table">
                        	  <table align="center" bordercolor ="#FF00FF" border="1"cellpadding="10" cellspacing="1"bordercolor="#008000" bordercolordark="#FF0000"bordercolorlight="#008000">
							  
														   <tr>
											<td align="center" width="110"><?php echo "<img src='../hinhanh/image/caulacbo/".$r[4]."' width='65' height='30'>";?></td>
											<td align="center" width="160"><?php echo $r[2]; ?></td>
											<td align="center" width="90"><?php echo $r[1]; ?></td>
											<td align="center" width="100"><input name="soluong[<?php echo $id; ?>]" type="text" size="4" value="<?php echo $sl; ?>" /></td>
											 <td align="center" width="130"><?php echo $r[3]; ?> USD</td>
											<td align="center" width="110"><a href="xoasp.php?id=<?php echo $r[0]; ?>"><img src="../hinhanh/image/theanh/101.jpg" width="65" height="30"></a></td>																					
																														</td>
									</tr>
									</table>
																											<?php

 if(isset($_POST['mua']))
 { if($_SESSION['ten']==NULL)
	header("location:yeucaudangnhap.php");
	else
         			{
		   	 mysql_query("INSERT INTO hoadon(tenkh,ten_sp,ma_sp,gia,soluong) VALUES ('$_SESSION[ten]','$r[2]','$r[1]','$r[3]','$sl')");
			 header("location: thongbaohoadon.php");
	   	  }
		  }
		  
																?>
																
								</table>										
                                                    
</div>

<?php
                      // T?ng ti?n
                        $tongcong += $sl*$r[3];
						}
?>	
<div id="table">
						 <table align="center" bordercolor ="#FF00FF" border="1"cellpadding="10" cellspacing="1"bordercolor="#008000" bordercolordark="#FF0000"bordercolorlight="#008000">
							<tr>
							<td align="center" width="200" ><b>TONG CONG: </b></td>
							<td align="center" width="591"><?php echo $tongcong; ?> VDN</td>
							</tr>
							</table>
</div>	
<?php
?>					
						           
                <div id="cart" align="center">
				<br>
                <a href="javascript: history.go(-1)"><img src="../hinhanh/image/theanh/102.png" width="80" height="30"></a> &nbsp;&nbsp; <a href="aobongda.php"><img src="../hinhanh/image/theanh/trangchu.gif" width="80" height="30"></a> <br>
            <div  class="login-form" >
                                      <input type="submit" name ="capnhat" value="Cập Nhat San Pham ">
                                      <input type="submit" name="mua" value="Thanh Toan" /> </form> 
                             		
  </div>
            
				
       				</div>
<?php
        }
        else
        {
?>
        <div id="giohang">
           Bạn chưa có sản phẩm nào. Hãy quay về <a href="aobongda.php">trang chu</a> để mua sản phẩm!
        </div>
<?php
         }
?>  