<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>form hỗ trợ khách hàng</title>
<link rel="stylesheet" type="text/css" media="screen" href="register.css" />
</head>

<body background="../hinhanh/image/nen1.jpg">

<form action="customer.php" method="POST">
	<p align="center">LIÊN HỆ KHÁCH HÀNG</p>

	<ol>
        
        <li>
        	<label for="name">Tiêu Đề</label>
        	<input type="text" name="tieude1" id="name" />
        </li>
        
        <li>
        	<label for="email">Họ tên</label>
        	<input type="text" name="ten1" id="email" />
        </li>
        
        <li>
        	<label for="website">Email</label>
        	<input type="text" name="email1" id="website" />
        </li>
              
          <li>
        	<label for="website">Nội dung</label>
        	<textarea name="noidung1" id="noidung"></textarea>
        </li>                        
        <li id="send">
        	<button type="submit" name="ok">Send</button>
            <button type="reset">Reset</button>
        </li>
	
    </ol>

</form>



</body>
</html>