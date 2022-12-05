
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
		thach chanh tha
	</title>
			<link rel="stylesheet" type="text/css" href="styleimg.css">
			<link rel="stylesheet" type="text/css" href="sanpham.css">
    <style>
	    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://www.yourjavascript.com/560192341/magnifier.txt.js">
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF">
<form class="form-wrapper" align="left" action="search1.php" method="POST" >
	<input type="text" id="search" name="sp"  placeholder="Tên Sản Phẩm(có dấu)......">
	<input type="submit" value="Tìm kiếm" id="submit" name="search">
</form>
<table id="table">
  <?php
					$conn=mysql_connect("localhost","root","");
					@mysql_query("SET NAMES UTF8",$conn)	
					or die("Khong the ket noi den co so du lieu");
					mysql_select_db("sanpham",$conn);
					$display=20;
					if (isset($_GET['id']) && (int)$_GET['id']) $p=intval($_GET['id']);
						else $p=1;
							$countqr=mysql_query('SELECT count(loai) FROM san_pham where loai="Áo Khoác Nam"');
							$countrow = mysql_fetch_array($countqr,MYSQL_NUM);
							$record = $countrow[0];
					if ($record>$display) 
						$total=ceil($record/$display);
					else $total=1;
							$start = ($p-1)*$display;
							 $result = mysql_query("select * from san_pham where loai='Áo Khoác Nam' limit $start,$display") or die (mysql_error()); 
							$dem=0;
				 while ($row = mysql_fetch_array($result)) 
				 {
						echo"<td align='center' width='300'>
						<img class='magnify' magnifyby='3'  style='width: 180px; height: 150px;'src='../hinhanh/image/caulacbo/".$row['hinh_sp']." ' width='300' height='200'
						alt='' border='0'/><br><b>
						".$row['ten_sp']."<br><a>
						".$row['gia_sp']." VND</a>
						<br><a href=giohang.php?id=$row[id]><img src='../hinhanh/image/theanh/100.jpg'></a></td>";
						 $dem ++;   // moi lan in ra san pham thi bien lai cong them 1
						if ($dem%4==0) // neu show ra 3 san pham
						echo "</tr><tr>";  // thi in ra cai </tr> de ket thuc 1 hang, v� in tiep <tr> de bat dau 1 hang nua.
				 } 
						mysql_free_result($result); 
?>
</table>
<p>
<?php 
				  if (isset($total) && $total>1)
				  {
							$next=$p+1;
							$prev=$p-1;
						if ($p>1)
						{
								echo '<a class="detail" href="?page=ourstaff&id=1">  First  </a>';
								echo '<a class="detail" href="?page=ourstaff&id='.$prev.'">  Prev  </a>';
						}
							for($i=1;$i<=$total;$i++)
							{
								echo '<a class="detail" href="?page=ourstaff&id='.$i.'">  '.$i.'  </a>';
							}	
						if ($p<$total)
							{
								echo '<a class="detail" href="?page=ourstaff&id='.$next.'">  Next  </a>';
								echo '<a class="detail" href="?page=ourstaff&id='.$total.'">  Last  </a>';
							}
				}
?>
    </div>
</p>
<p>&nbsp;</p>
</body>
</html>

