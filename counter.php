<?php
 //licznik
 $file="counter2.php";
 if (!file_exists($file))
 {
	$a=0;
 }
 else
 {
 include($file);
 }
 header("Content-Type: image/jpeg");
 $obraz=imagecreate(300,200);
 
 $bg=imagecolorallocate($obraz,200,200,200);
 $red=imagecolorallocate($obraz,255,0,0);
 $blue=imagecolorallocate($obraz,0,0,255);
 $font="./fonts/vera.ttf";
 $text="Witaj w profilu Grixa.\nZostał on odwiedzony\n";
 imageline($obraz, 10,10,290,10, $red);
 imagettftext($obraz, 12,0,40,40,$red, $font, $text);
 imagettftext($obraz, 25,0,40,150,$blue, $font, $a." razy");
 imageline($obraz, 10,190,290,190, $red);
 
 imagejpeg($obraz,'',80);
 imagedestroy($obraz);
 $plik=fopen($file,"w+");
 fputs($plik, '<?php $a='.++$a.'; ?>');
 fclose($plik);
 ?>