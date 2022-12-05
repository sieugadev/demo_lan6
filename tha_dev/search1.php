<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://www.yourjavascript.com/560192341/magnifier.txt.js">
</script>
<style type="text/css">
table 
			{
				font-size:18px;
				color:#000;
				font-family:Georgia, "Times New Roman", Times, serif;
				font-style:italic;
			}
table a
			{
					font-size:18px;
					color:#000;
					font-family:Georgia, "Times New Roman", Times, serif;
					font-style:italic;
					color:#F00;
			}
</style>
</head>
<body>
<table id ="table" border="0" cellpadding="2" cellspacing="0">
<?php
 error_reporting (E_ALL ^ E_NOTICE);
$key=$_POST['sp'];
if($key==NULL)
{ echo "<b><h3>Bạn nhập từ khoá.........!!!"."<a href='javascript: history.go(-1)'>Quaylai</a></h3></b>";}
else
{
//connect to server
$conn=mysql_connect("localhost","root","");
@mysql_query("SET NAMES UTF8",$conn)
or die ("k the lien ket toi database");
//select the db
mysql_select_db("sanpham")
 or die ("khong the lien ket toi database");
//get the results and store them in $result
$result = mysql_query("SELECT * FROM san_pham WHERE ten_sp LIKE '%$key%'");
//run the while loop
$t=0;
$display=50;
$dem=0;
while($row=@mysql_fetch_array($result))
{
				echo"<td align='center' width='300'>
				 <img class='magnify' magnifyby='3'  style='width: 180px; height: 
				150px;'src='../hinhanh/image/caulacbo/".$row['hinh_sp']." ' 
				width='300' height='200'
				alt='' border='0'/><br><b>
				".$row['ten_sp']."<br><a>
				".$row['gia_sp']." VND</a>
				<br><a href=giohang.php?id=$row[id]><img src='../hinhanh/image/theanh/100.jpg'></a></td>";
				$dem ++;   // moi lan in ra san pham thi bien lai cong them 1
				if ($dem%4==0) // neu show ra 3 san pham
							echo "</tr><tr>";  // thi in ra cai </tr> de ket thuc 1 hang, v? in tiep <tr> de bat dau 1 hang nua.
				$t ++;
}
		echo "<i ><h3>Có tổng cộng: ".$t." kết quả tìm kiếm!!!"."<a href='javascript: history.go(-1)'><img src='../hinhanh/image/theanh/search.jpg' width='80' height='30'></a></h3></i>";
if($t==0)
		{
				echo "<b><h1>Xin lỗi!Hiện cửa hàng Shop's Sport chúng tôi vẫn chưa cập nhập sản phẩm này!!!</h1></b>";
		}
}
			@mysql_fetch_array($result)
 ?>
</table>
</body>
</html>