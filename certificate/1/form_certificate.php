<?php
if(isset($_POST['name'])){
	$font=realpath("BRUSHSCI.TTF");
	$image=imagecreatefromjpeg("certificate.jpg");
	$color=imagecolorallocate($image,19,21,22);
	$name=$_POST['name'];
	imagettftext($image,50,0,365,420,$color,$font,$name);
	$date="6th may 2020";
	imagettftext($image,20,0,450,595,$color,$font,$date);
	$file=time();
	imagejpeg($image,"certificate/".$file.".jpg");
	imagedestroy($image);
}
?>
<form method="post">
	<input type="textbox" name="name"/>
	<input type="submit"/>
</form>
