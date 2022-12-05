<?php
		error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);  
        session_start();
        ob_start();
		$conn=mysql_connect("localhost","root","") or die("can't connect your database");
		mysql_select_db("sanpham",$conn);
		
?>
		<head>
				<meta http-equiv="content-type" content="text/html charset=utf-8" />
		</head>
<?php
					$id = $_GET['id'];
					if($id!="") // nếu có nhận id 
							{
					 		// lấy id nhận được kiểm tra rằng id này có tồn tại trong csdl hay không?
									$q = mysql_query("SELECT id FROM san_pham WHERE id in ('$id')");
									$num_q = mysql_num_rows($q);
							// Nếu = or >1(tức là tồn tại thì
									if($num_q == 1)
										{
									   // nếu id này trùng thì ta --->
												if(isset($_SESSION['giohang'][$id]))
													{
											// Ta số lượng id trùng nhau thì tăng số lượng
														$_SESSION['giohang'][$id] ++;
													}
									else //Ngược lại
											{
													$_SESSION['giohang'][$id] = 1; // Gắn số lượng mặc định là 1
											}
								 // Completed thì đẩy qua trang xuất kho
												header("location:xuatkho.php");
								 
				}
										
								   else
											{
													echo "<p align='center' style='font-size:18;color:red'>Không tồn tại sản phẩm này!!!</p>";
													header("refresh:3; giohang.php");
											}
								}
					else // Nếu không có nhận được id nào cả thì
								{
										echo "<p align='center' style='font-size:18;color:red'>yêu cầu thất bại!!!</p>";
								}

?>