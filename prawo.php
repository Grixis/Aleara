<?php

$title1 = ""; //cos pojebanego z tym jest
$title = ""; //raz title1 raz title
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
require_once('includes/head.php');
$tablica[0]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[1]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[2]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[3]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[4]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[5]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[6]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[7]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[8]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[9]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[10]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[11]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[12]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[13]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[14]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[15]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[16]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[17]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[18]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[19]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[20]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[21]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[22]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[23]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[24]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[25]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[26]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[27]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[28]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[29]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[30]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[31]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[32]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[33]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[34]='<li><a href="">Korytarz się nie kończy... ale idziesz dalej...</a></li> ';
$tablica[35]='<li><a href="drzwi.php">Coś Cię przestraszyło... zwiewasz... jednak chyba tutaj powrócisz...</a></li> ';
$tablica[36]='<li><a href="drzwi.php">Coś Cię przestraszyło... zwiewasz... jednak chyba tutaj powrócisz...</a></li> ';
$tablica[37]='<li><a href="drzwi.php">Coś Cię przestraszyło... zwiewasz... jednak chyba tutaj powrócisz...</a></li> ';
$tablica[38]='<li><a href="drzwi.php">Coś Cię przestraszyło... zwiewasz... jednak chyba tutaj powrócisz...</a></li> ';
$tablica[39]='<li><a href="drzwi.php">Coś Cię przestraszyło... zwiewasz... jednak chyba tutaj powrócisz...</a></li> ';
$tablica[40]='<li><a href="pomieszczenie.php">Idąc korytarzem zaczynasz czuć dreszcze... Widzisz przed sobą olbrzymie drzwi. Czujesz dziwną aure i niebezpieczeństwo... Wchodzisz do środka...</a></li> ';


$klucz=array_rand($tablica);
print($tablica[$klucz]."<br>");


$smarty -> display ('prawo.tpl');
require_once("includes/foot.php");
$db -> Close();
?>
