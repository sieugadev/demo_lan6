<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A beautiful CSS Form</title>
<link rel="stylesheet" type="text/css" media="screen" href="register.css" />
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 723px;
	top: 423px;
	width: 80px;
	height: 24px;
	z-index: 1;
}
</style>
</head>

<body background="../hinhanh/image/nen1.jpg">
<form action="tbupdate.php" method="POST">
  <p align="center">NHẬP SẢN PHẨM</p>
	<ol>
        
        <li>
        	<label for="name">Tên_SP</label>
        	<input type="text" name="ten1" id="name" />
        </li>
        
        <li>
        	<label for="email">Mã_SP</label>
        	<input type="text" name="ma1" id="email" />
        </li>
        
        <li>
        	<label for="website">Giá</label>
        	<input type="text" name="gia1" id="website" />
        </li>
                <li>
        	<label for="website">Loại</label>
        	<input type="text" name="loai1" id="website" />
        </li>
        <li>
        	<label for="website">Hình</label>
        	<input type="text" name="hinh1" id="website" />
        </li>       
                       
        <li id="send">
        	<button type="submit" name="ok">Send</button>
            <button type="reset">Reset</button>
        </li>
	
    </ol>
</form>
</body>
</html>