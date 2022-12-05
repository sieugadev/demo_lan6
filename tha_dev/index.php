<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sơn Yến Nhi</title>
<!---sript store--->
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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
		<script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.core.js" type="text/javascript"></script>
<!---end script--->
<!---css store--->
             <link href="slide.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" type="text/css" href="main_sport.css">
            <link rel="stylesheet" href="dathang.css" media="screen">
            <link href="http://y2graphic.com/templates/default/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
            <link rel="stylesheet" href="menu.css" type="text/css" />
             <!--[if lt IE 8]>
			<script src ="http://ie7-js.googlecode.com/svn/version/2.1(beta2)/IE8.js"></script>
	<![endif]-->	
<style type="text/css">
</style>
<!---end css--->
</head>
<body id="body">
<!----header1--->
<div id="banner">
            <img src="../hinhanh/tool image/banner_sport1.jpg" width="1099" height="36" />
</div>
<div id="logo1">
			<img src="../hinhanh/image/logo1.gif" width="46" height="34" />
</div>
<div id="hotline">
			HOTLINE:01694779352
</div>
<div id="dangnhap">
        <div  class="login-form" >
                <form  action="tbdangnhap.php" method="POST">
                        <input type="text" name="user" placeholder="Tên Tài Khoản">
                        <input type="password" name="pass" placeholder="Mât khẩu">
                        <input type="submit" name="ok" value="Đăng Nhập">
                </form>
                		
        </div>
       
</div>
<div id="dangkytv">
 		<div  class="login-form" >
                <form action="register.php">
                        <input type="submit" value="Đăng Ký Thành Viên ">
                </form>
                		
        </div>
</div>
<div id="quenmk">
  <div  class="login-form" >
                <form action="forget1.php">
                        <input type="submit" value="Quên Mật Khẩu ">
                </form>
  </div>
  </div>
   <div id="thongtin">
   <div  class="login-form" >
                <form action="chamsockh.php">
                        <input type="submit" value="Hỗ Trợ Khách Hàng ">
                </form>
  </div>
   </div>
<div id="lienketface">
			<iframe src=http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fchanhtha.freevnn.com&send=false&layout=button_count&width=450&show_faces=false&font=verdana&colorscheme=light&action=like&height=21 frameborder="0" scrolling="no" width="80" height="25">
            </iframe>
</div>
<!----end header----->
<!----banner Shop's Sport--->
<div id="bannerSport">
  <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1100" height="138">
    <param name="movie" value="../hinhanh/tool image/chanhtha.swf" />
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="8.0.35.0" />
    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
    <param name="expressinstall" value="../Scripts/expressInstall.swf" />
    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="../hinhanh/tool image/chanhtha.swf" width="1100" height="138">
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
	<li><a href="aobongda.php" target="menu">Trang Chủ</a></li>
	<li><a href="#">Áo Bóng Đá</a>
                    <ul>
                        <li><a href="aobongda.php" target="menu">Áo Câu Lạc Bộ</a></li>
						<li><a href="aongoisao.php" target="menu">Áo Các Ngôi Sao</a></li>
                        <li><a href="aodoituyen.php" target="menu">Áo Đội Tuyển</a></li>
                        <li><a href="aokhoacbd.php" target="menu">Áo Khoác Bóng Đá</a></li>
                                                	
				</ul>
	</li>
	<li><a href="#">Áo Bóng Rỗ</a>
        <ul>
                          <li><a href="aobongro.php" target="menu">Áo Đấu Bóng Rỗ</a></li>
                          <li><a href="aokhoacbr.php" target="menu">Áo Khoác Bóng Rỗ</a></li>
        </ul>
    </li>
	<li><a href="giaythethao.php" target="menu">Giày Thể Thao</a>
                        	</li>
			<li><a href="aohiphop.php" target="menu">Áo Hip Hop</a>
                         </li>						
		</li>	
	<li><a href="aokhoacnam.php" target="menu">Áo Khoác Nam</a>
         </li>
    <li><a href="giaitri.php"> Trang &nbsp;Liên Kết</a></li>		
</ul>
</div>
<!---ket thuc menu---->
<!----slide show------->
<div id="script">
  <table width="1099" height="345" border="0">
                <tr>
                <!---chuc nang ho tro khach hang--->
                  <th width="177" scope="left menu">
                  		<div id="hotro1">Hỗ Trợ Trực Tuyến</div>
                        <div id="hotro2">
                          <p>Thach Chanh Tha<br /> 
                          <a href="ymsgr:sendIM?YahooID"><img src="../hinhanh/tool image/chanhtha11jpg.jpg" width="125" height="25" /></p></a><br />Y!M<br /><a href="ymsgr:sendIM?YahooID"><img src="../hinhanh/tool image/chanhtha11jpg.jpg" width="125" height="25" /></a><br /></p>
                        </div>
                        <div id="hotro3"></div>
                        <!---ket thuc chuc nang ho tro khach hang--->
                  <!----chuc nang gio hang----->
                  <div id="giohang1">Giỏ Hàng</div>
                    <div id="giohang2"><a href="xuatkho.php" target="menu"><img src="../hinhanh/tool image/giohang.png" width="176" height="116" /></a></div>
                    <div id="giohang3"></div>
                    	<!---ket thuc chuc nang gio hang--->
                        
                  </th>
                  <th width="731" scope="main menu">&nbsp;</th>
                  <th width="177" scope="right menu">
                  <div id="sanpham1"><img src="../hinhanh/image/theanh/new1.gif">Sản phẩm Bán Chạy<img src="../hinhanh/image/theanh/new1.gif"></div>
                  <div id="sanpham2">
                  <marquee direction="up" onMouseOver="this.stop();" onMouseOut="this.start();" scrolldelay="150">
						<center>
							<center>
								<a href="aobongda.php" target="menu"><img src="../hinhanh/image/CauLacBo/A1.jpg" height=100 width=150 /></a> <br>
								<a href="aodoituyen.php" target="menu"><img src="../hinhanh/image/CauLacBo/C2.jpg" height=100 width=150 /></a><br>
								<a href="aodoituyen.php" target="menu"><img src="../hinhanh/image/CauLacBo/C6.jpg" height=100 width=150 /></a><br>
								<a href="aokhoacbd.php" target="menu"><img src="../hinhanh/image/CauLacBo/D11.jpg" height=100 width=150 /> </a><br>
                                <a href="aokhoacbd.php" target="menu"><img src="../hinhanh/image/CauLacBo/D18.jpg" height=100 width=150 /></a><br>
                                <a href="aobongro.php" target="menu"> <img src="../hinhanh/image/CauLacBo/E1.jpg" height=100 width=150 /></a><br>
                                <a href="giaythethao.php" target="menu"><img src="../hinhanh/image/CauLacBo/G5.jpg" height=100 width=150 /></a><br>
							</center>
						</center>
					</marquee>
                  </div>
                  			<div id="sanpham3"></div>
                  <!-----bang truy cap--->
							  <div id="truycap1">
									Bảng Truy Cập
								</div>
							  <div id="truycap2">
							  </div>
						<div id="truycap3"></div>
                  <!--ket thuc bang truy cap--> 
                  </th>
                </tr>
  </table>
</div>
<!----ket thuc slide show--->
<div id="mainsp">
			<iframe src="slideanh.php" align="middle" width="735" height="335" frameborder="0" scrolling="no"></iframe>
</div>
<div id="dongho">
  <div class="copyright">
<script src="http:
//www.clocklink.com/embed.js">
</script>
<script type="text/javascript" language="JavaScript">
obj=new Object;

obj.clockfile="0009-magenta.swf";obj.TimeZone="ICT";

obj.width=150;obj.height=150;

obj.wmode="transparent";showClock(obj);</script>

</div>
 </div>
<div id="google">
<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'vi'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</div>
<div id="twitter">
<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
<div id="online1">
<?php include("user_online.php")?>
<div id="diachi">
  <p align="left">      Copyright(c) 2012 Shop Sport Thiết kế bởi thachchanhtha@gmail.com    </p>
  <p align="left">      Địa chỉ: Số 36-Đại Lộ-Hoà Bình-Q.Ninh Kiều-Tp Cần Thơ
   <p align="left">     Email: changtraisaymentinh@gmail.com - Website: http://chanhthafreevnn.com </p>
</div>
<div id="footer"></div>
<div id="framechinh">
  <iframe src="aobongda.php" align="middle" width="1095" height="1190" frameborder="0" scrolling="no" name="menu"></iframe>
</div>
 
<div id="kholienket">
   <table width="92" height="104" border="0">
     <tr>
       <th width="50" height="37" scope="col">&nbsp;</th>
     </tr>
     <tr>
       <td height="23">&nbsp;</td>
     </tr>
     <tr>
       <td>&nbsp;</td>
     </tr>
   </table>
 
 </div>
<div id="online2">
<?php include("dem.php")?>
<a><img src='../hinhanh/image/theanh/tc.png'>Truy cập : <?php  echo $views ?></a> 
 </div>
 <div id="trangthai">
			 <?php 
			 include ("tbdangnhap.php");
			 if($_SESSION['ten']!="")
			 echo
			  "Chao ".$_SESSION['ten']."<a href='dangxuat.php'>logout</a>";
				  ?>
			</div>
			<div id="bannertruot" align="center">
		<?php include("bannertruot.php")?>
 </div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
