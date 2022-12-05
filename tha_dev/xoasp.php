<?php
		$conn=mysql_connect("localhost","root","") or die("khong the ket noi den co so du lieu");
mysql_select_db("sanpham",$conn);
        session_start();
        ob_start();
		error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);  
        // Neu xoa mot san pham
        if(isset($_GET['id']))
        {
                unset($_SESSION['giohang'][$_GET['id']]);
                header("location: xuatkho.php");
        }
        // Xoa tat ca (voi dieu kien gio hang phai co)
        if($_GET['del_all'] == "true" && count($_SESSION['giohang']))
        {
                foreach($_SESSION['giohang'] as $id => $sl)
                {
                        unset($_SESSION['giohang'][$id]);        
                }
                header("location: xuatkho.php");
        }        

?>