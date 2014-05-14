<?php

$title1 = ""; //cos pojebanego z tym jest
$title = ""; //raz title1 raz title

require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
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

$tablica[27]='<li><a href="drzwi.php">Doszedłeś do końca korytarza... Jednak nic tutaj się nie znajduje. Zawracasz. </a></li> ';


$klucz=array_rand($tablica);
print($tablica[$klucz]."<br>");


$smarty -> display ('srodek.tpl');
require_once("includes/foot.php");
$db -> Close();
?>
