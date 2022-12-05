      <?php
	  session_start();
	  error_reporting (E_ALL ^ E_NOTICE);
	 if(isset($_POST['ok']))
{
	if($_POST['user']!=NULL)
	{
	$t=$_POST['user'];
					}
	else
	{
		header("location:tbdangnhap1.php");
	exit;
			
	}
	if($_POST['pass']!=NULL)
	{
	$f=$_POST['pass'];	
	
				}
	else
	{
		header("location:tbdangnhap2.php");
		exit;
	}
		if($t && $f)
	{
		    mysql_connect("localhost","root","")
		or die("khong tim thay webserver");
		mysql_select_db("sanpham")
		or die("khong the ket noi den co so du lieu");
		$sql=@mysql_query("select * from thanhvien where username ='$t' and password='$f'");
		$row=@mysql_fetch_array($sql);
				{  if($row['admin']==1)
						{ 
						$_SESSION['name']=$t;
						header("location:quantri.php");
						}
					elseif($row['admin']==2) 
					{
							$_SESSION['ten']=$t;
							header("location:thongbao1.php");
								
					} 						
					else
					{	
						header("location:tbdangnhap3.php");
					}		
				}
	
				
	}


	}	
?>

   