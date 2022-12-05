<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <link rel="stylesheet" type="text/css" href="quantri.css">
<style type="text/css">
#apDiv1
		 {
					position: absolute;
					left: 134px;
					top: -9px;
					width: 1095px;
					height: 137px;
					z-index: 1;
		}
#menu 
		{
					position: absolute;
					left: 135px;
					top: 117px;
					width: 1096px;
					height: 39px;
					z-index: 2;
		}
#main
		 {
					position: absolute;
					left: 136px;
					top: 175px;
					width: 1094px;
					height: 1060px;
					z-index: 3;
					background: #FFF;
		}
#trangthai 
		{
					position: absolute;
					left: 971px;
					top: 3px;
					width: 248px;
					height: 37px;
					z-index: 4;
		}
#footer
		{
				position: absolute;
				left: 137px;
				top: 1186px;
				width: 1093px;
				height: 87px;
				z-index: 5;
				background-color: #000099;
				-webkit-border-bottom-right-radius: 24px;
				-webkit-border-bottom-left-radius: 24px;
		}
#diachi 
		{
					position: absolute;
					left: 310px;
					top: 1185px;
					width: 618px;
					height: 87px;
					z-index: 6;
					font-family:Georgia, "Times New Roman", Times, serif;
					font-size:18px;
					font-style:italic;
					color:#000;
					padding:inherit;
		}
</style>
<script>
				var txt="Chào mừng bạn đến WebSite Shop's Sport của chúng tôi ";
				var espera=200;
				var refresco=null;
				function rotulo_title() {
				document.title=txt;
				txt=txt.substring(1,txt.length)+txt.charAt(0);
				refresco=setTimeout("rotulo_title()",espera);
				}
				rotulo_title();
		</script>
<script src="../Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<div id="apDiv1">
  <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1092" height="145">
    <param name="movie" value="../hinhanh/tool image/chanhtha.swf" />
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="8.0.35.0" />
    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
    <param name="expressinstall" value="../Scripts/expressInstall.swf" />
    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="../hinhanh/tool image/chanhtha.swf" width="1092" height="145">
      <!--<![endif]-->
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="8.0.35.0" />
      <param name="expressinstall" value="../Scripts/expressInstall.swf" />
      <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
      <div>
        <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
      </div>
      <!--[if !IE]>-->
    </object>
    <!--<![endif]-->
  </object>
</div>
<div id="menu">
	<ul id="nav">
			<li><a href="quanlysp.php" target="sp">Sản Phẩm ShopSport</a></li>
			<li><a href="quanlyhd.php" target="sp">Hoá Đơn Đặt Hàng</a></li>
			<li><a href="quanlyhotro.php" target="sp">Hỗ Trợ Khách Hàng</a></li>
			<li><a href="quanlytv.php" target="sp">Thành Viên</a></li>
			<li><a href="index.php">TrangChu</a></li>			
	</ul>
</div>
<div id="main">
<iframe src="quanlysp.php" width="1095"  height="1060" name="sp" frameborder="0" scrolling="no"></iframe> 
</div>
<div id="trangthai">
 <?php 
	 include ("tbdangnhap.php");
	 if($_SESSION['name']!="")
			 echo
			  "Chao ".$_SESSION['name']."<a href='dangxuat.php'>logout</a>";
  ?>
</div>
<div id="footer"></div>
<div id="diachi">
<p align="left">Copyright(c) 2012 Shop Sport Thiết kế bởi thachchanhtha@gmail.com Địa chỉ: Số 36-Đại Lộ-Hoà Bình-Q.Ninh Kiều-Tp Cần Thơ Email: changtraisaymentinh@gmail.com - Website: http://chanhthafreevnn.com </p>
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>