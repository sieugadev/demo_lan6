<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>form thay đổi mật khẩu</title>
<link rel="stylesheet" type="text/css" media="screen" href="register.css" />
</head>

<body background="../hinhanh/image/nen1.jpg">

<form action="tbforget.php" method="POST">
	<p align="center">THAY ĐỔI MẬT KHẨU</p>

	<ol>
        
        <li>
        	<label for="name">Account</label>
        	<input type="text" name="user1" id="name" />
        </li>
        
        <li>
        	<label for="email">Email</label>
        	<input type="text" name="email1" id="email" />
        </li>
        
        <li>
        	<label for="website">New pass</label>
        	<input type="text" name="pass1" id="website" />
        </li>
                <li>
        	<label for="website">New pass</label>
        	<input type="text" name="pass2" id="website" />
        </li>                          
        <li id="send">
        	<button type="submit" name="ok">Send</button>
            <button type="reset">Reset</button>
        </li>
	
    </ol>

</form>



</body>
</html>