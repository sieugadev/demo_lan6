<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styleimg.css">
<link rel="stylesheet" type="text/css" href="dathang.css">
<style type="text/css">
#nhaphang 
		{
				position: absolute;
				left: 341px;
				top: 4px;
				width: 145px;
				height: 31px;
				z-index: 1;
		}
#capnhat
		 {
				position: absolute;
				left: 484px;
				top: 7px;
				width: 171px;
				height: 35px;
				z-index: 2;
		}
#tim 
		{
				font-family:Georgia, "Times New Roman", Times, serif;
				font-size:16px;
				font-style:italic;
				color:#000;
		}

#tim a:link
		{
			text-decoration:none;
		}
#tim a:hover
	{
		color:#F00;
	}

</style>
<body><br>
<br>
<div id="table">
                        	  <table align="center" bordercolor ="#FF00FF" border="1"cellpadding="10" cellspacing="1"bordercolor="#008000" bordercolordark="#FF0000"bordercolorlight="#008000">

							   <tr> 
							   <td align="center" width="120" ><b> TIÊU ĐỀ </b></td>
									   <td align="center" width="110" ><b>HỌ TÊN </b></td>
										<td align="center" width="200" ><b>EMAIL</b></td>
									     <td align="center" width="400" ><b>NỘI DUNG </b></td>
									   <td align="center" width="100" ><a><b>XÁC NHẬN</b></a></td>
							   </tr>
							   </div>
<p>
  <?php
				error_reporting (E_ALL ^ E_NOTICE);
				$conn=mysql_connect("localhost","root","");
				mysql_query("SET NAMES UTF8",$conn)
				 or die("Khong the ket noi den co so du lieu");
				mysql_select_db("sanpham",$conn);
				$display=3;
				if (isset($_GET['id']) && (int)$_GET['id']) $p=intval($_GET['id']);
					else $p=1;
						$countqr=mysql_query('SELECT count(id) FROM chamsoc_kh ');
						$countrow = mysql_fetch_array($countqr,MYSQL_NUM);
						$record = $countrow[0];
				if ($record>$display)$total=ceil($record/$display);
					else $total=1;
						$start = ($p-1)*$display;
						$result = mysql_query("select * from chamsoc_kh limit $start,$display") or die (mysql_error()); 
					//$stt=count($result);
					//	 $t=1;
				 while ($row = mysql_fetch_array($result)) 
				  { 
		?>
				<div id="table">
                 <table align="center" bordercolor ="#FF00FF" border="1"cellpadding="10" cellspacing="1"bordercolor="#008000" bordercolordark="#FF0000"bordercolorlight="#008000">
							  
					<tr>
							<td align="center" width="120"><?php echo $row[1]; ?></td>
							<td align="center" width="110"><?php echo $row[2]; ?></td>
							<td align="center" width="200"><?php echo $row[3]; ?></td>
							<td align="center" width="400"><?php echo $row[4]; ?></td>
							<td align="center" width="100"><a href="deletedhotro.php?id=<?php echo $row[0]; ?>"><img src="../hinhanh/image/theanh/101.jpg" width="65" height="30"></a></td>					
																													
					</tr>
				<table>
		<?php
//if($St<$stt)
//$t++;
			
 } 
   mysql_free_result($result); 
  
?>
 <div id="capnhat">
 <div  class="login-form" >
                <form action="quanlyhotro.php">
                        <input type="submit" value="Cập Nhật Mới ">
                </form>
                		
  </div>
</div><br>
<div id="tim">
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
<p>
  
</div>
</p>
<p>&nbsp;</p>
</body>
</html>