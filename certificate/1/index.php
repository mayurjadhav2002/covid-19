<?php
header('content-type:image/jpeg');
$font=realpath("BRUSHSCI.TTF");
$image=imagecreatefromjpeg("certificate.jpg");
$color=imagecolorallocate($image,19,21,22);
$name="Vishal Gupta";
imagettftext($image,50,0,365,420,$color,$font,$name);
$date="6th may 2020";
imagettftext($image,20,0,450,595,$color,$font,$date);
imagejpeg($image);
imagedestroy($image);

?>