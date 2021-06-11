<?php
require_once('../sessions.php');
header('content-type:image/jpeg');
$font1 = realpath("BRUSHSCI.TTF");
$font=realpath("Roboto-Black.ttf");
$image=imagecreatefromjpeg("Certificate.jpg");
$color=imagecolorallocate($image,19,21,22);
$name="NAme";
imagettftext($image,80,0,770,610, $color,$font1,$name);

$date="6th may 2020";
imagettftext($image,30,0,1500,1250, $color,$font,$date);
imagejpeg($image);
imagedestroy($image);
error_reporting(0)

?>