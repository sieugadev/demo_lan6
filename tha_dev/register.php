<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>form đăng ký thành viên</title>
<link rel="stylesheet" type="text/css" media="screen" href="register.css" />
<link rel="stylesheet" type="text/css" media="screen" href="dathang.css" />
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
<form action="tbdangky.php" method="POST">
  <p align="center">ĐĂNG KÝ THÀNH VIÊN</p>
	<ol>
        
        <li>
        	<label for="name">Account</label>
        	<input type="text" name="user1" id="name" />
        </li>
        
        <li>
        	<label for="email">Name</label>
        	<input type="text" name="ten1" id="email" />
        </li>
        
        <li>
        	<label for="website">Password</label>
        	<input type="password" name="pass1" id="website" />
        </li>
                <li>
        	<label for="website">Password</label>
        	<input type="password" name="pass2" id="website" />
        </li>
        <li>
        	<label for="website">Email</label>
        	<input type="text" name="email1" id="website" />
        </li>
         <li>
        	<label for="website">Sex</label>
        	<select name="gioitinh1" size="1">
            <option value="Nam">Nam</option>
            <option value="Nu"> Nu</option>
            </select>
        </li>
        <li>
        	<label for="website">Birthday</label>
        	<select name="day1" size="1">
            <option value="01">01</option>
            <option value="02">02</option>
			<option value="03">03</option>
            <option value="04">04</option>
			<option value="05">05</option>
            <option value="06">06</option>
			<option value="07">07</option>
            <option value="08">08</option>
			<option value="09">09</option>
            <option value="10">10</option>
			<option value="11">11</option>
            <option value="12">12</option>
			<option value="13">13</option>
            <option value="14">14</option>
			<option value="15">15</option>
            <option value="16">16</option>
			<option value="17">17</option>
            <option value="18">18</option>
			<option value="19">19</option>
            <option value="20">20</option>
			<option value="21">21</option>
            <option value="22">22</option>
			<option value="23">23</option>
            <option value="24">24</option>
			<option value="25">25</option>
            <option value="26">26</option>
			<option value="27">27</option>
            <option value="28">28</option>
			<option value="29">29</option>
            <option value="30">30</option>
			<option value="31">31</option>
                       </select>
            <select name="month1" size="1">
            <option value="01">01</option>
            <option value="02">02</option>
			<option value="03">03</option>
            <option value="04">04</option>
			<option value="05">05</option>
            <option value="06">06</option>
			<option value="07">07</option>
            <option value="08">08</option>
			<option value="09">09</option>
            <option value="10">10</option>
			<option value="11">11</option>
            <option value="12">12</option>
            </select>
            <select name="year1" size="1">
             <option value="1970">1970</option>
            <option value="1971">1971</option>
			<option value="1972">1972</option>
            <option value="1973">1973</option>
			<option value="1974">1974</option>
            <option value="1975">1975</option>
			<option value="1976">1976</option>
            <option value="1977">1977</option>
			<option value="1978">1978</option>
            <option value="1979">1979</option>
			<option value="1980">1980</option>
            <option value="1981">1981</option>
			<option value="1982">1982</option>
            <option value="1983">1983</option>
			<option value="1984">1984</option>
            <option value="1985">1985</option>
			<option value="1986">1986</option>
            <option value="1987">1987</option>
			<option value="1988">1988</option>
            <option value="1989">1989</option>
			<option value="1990">1990</option>
			<option value="1991">1991</option>
            <option value="1992">1992</option>
			<option value="1993">1993</option>
            <option value="1994">1994</option>
			<option value="1995">1995</option>
            <option value="1996">1996</option>
			<option value="1997">1997</option>
            <option value="1998">1998</option>
			<option value="1999">1999</option>
			<option value="2000">2000</option>
            </select>
        </li>
         <li>
        	<label for="website">Telephone</label>
        	<input type="text" name="phone1" id="website" />
        </li>
         <li>
        	<label for="website">Address</label>
        	<textarea name="diachi1" id="diachi1"></textarea>
        </li>
                     
        <li id="send">
        	<button type="submit" name="ok">Send</button>
            <button type="reset">Reset</button>
        </li>
	
    </ol>
</form>
</body>
</html>