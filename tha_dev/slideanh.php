<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="slide.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../Scripts/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../Scripts/jquery.cycle.all.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
			$("#slide").cycle({ 
				fx:    'fade', //Hi?u ?ng - Xem th?m c?c hi?u ?ng t?i d?y: http://jquery.malsup.com/cycle/browser.html
				speed:  1000, //T?c d? di?n ra hi?u ?ng
				timeout: 3000, //3 gi?y: Th?i gian thay d?i gi?a c?c h?nh 1/1000 gi?y
				next:  '.next',
				prev:  '.prev'
			});
		});
    </script>
<style type="text/css">
#apDiv1 {
	position: absolute;
	center: 303px;
	top: 1px;
	width: 720px;
	height: 345px;
	z-index: 1000;
}
</style>
</head>
<body>
<div id="apDiv1">
<div id="slide-panel">
		<div id="slide">
			<div>
                           <a href="aobongda.php"><img src="../hinhanh/image/AOKHOAC.jpg" ></a>
                                    								
             </div> 
             <div>              
                            <img src="../hinhanh/image/BRO.jpg" alt="Picture 2" />                                            
                       												
            </div>
            <div>
                                <img src="../hinhanh/image/BADMIN.jpg" alt="Picture 3" />
                            											
            </div>
            <div>
				<img src="../hinhanh/image/hiphop.jpg" alt="Picture 3" />
							
             </div>
             <div>               
				<img src="../hinhanh/image/PATIN.jpg" alt="Picture 3" />
				               </div>
               <div>             
				<img src="../hinhanh/image/s_jer_1.jpg" alt="Picture 3" />
               					                       </div>    
                                         
                                  
 </div>
   </div>
</body>
</html>
