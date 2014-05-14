<?php
header('Content-Type: image/png');
$lvl=$_GET['lvl']/100;
$exp=$_GET['exp']/100;
$hp=$_GET['hp']/100;
$mp=$_GET['mp']/100;
$en=$_GET['en']/100;

$img=imagecreatetruecolor(168,179);
$color=imagecolorallocate($img,255,255,255);
$color2=imagecolorallocate($img,0,0,0);
imagefill($img,0,0,$color2);
imagecolortransparent($img, $color2);
$imgmana=imagecreatefrompng("../images/misc/manablob.png");
$imghealth=imagecreatefrompng("../images/misc/healthblob.png");
$imgenergy=imagecreatefrompng("../images/misc/energyblob.png");
$imgpd=imagecreatefrompng("../images/misc/pdsword.png");
$imgmain=imagecreatefrompng("../images/misc/main.png");

imagecopy($img,$imgmana,11,45,0,0,imagesx($imgmana),imagesy($imgmana)*$mp);
imagecopy($img,$imghealth,47,33,0,0,imagesx($imghealth),imagesy($imghealth)*$hp);
imagecopy($img,$imgenergy,65,40,0,0,imagesx($imgenergy),imagesy($imgenergy)*$en);
imagecopy($img,$imgmain,0,0,0,0,imagesx($imgmain),imagesy($imgmain));
imagecopy($img,$imgpd,136,4,0,0,imagesx($imgpd),imagesy($imgpd)*$pd);



imagepng($img);
imagedestroy($img);
imagedestroy($imgmana);
imagedestroy($imghealth);
imagedestroy($imgenergy);
imagedestroy($imgpd);
imagedestroy($imgmain);
?>