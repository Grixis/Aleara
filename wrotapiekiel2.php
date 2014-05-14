<?php

$title = "Zaświaty";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
/**
* Get the localization for game
*/
$tablica[1]='<li><a href="">             Wędrowałeś chwilę w zaświatach, lecz nic specjalnego nie znalazłeś.</a></li> ';
$tablica[3]='<li><a href="komnatasmierci.php"> Po chwili wędrówki napotykasz na Portal Śmierci i przechodzisz przez niego...</a></li> ';
$tablica[4]='<li><a href="">             Nie ma nic ciekawego... </a></li> ';
$tablica[5]='<li><a href="komnatapotepienia.php">Po chwili wędrówki napotykasz na Portal Potępienia i przechodzisz przez niego...</a></li> ';
$tablica[6]='<li><a href="">             Nic ciekawego tutaj nie ma.</a></li> ';
$tablica[19]='<li><a href="komnataplomieni.php">Po chwili wędrówki napotykasz na Portal Płomieni i przechodzisz przez niego...!</a></li> ';
$tablica[20]='<li><a href="">            Wędrowałeś ale nic nie znalazłeś.</a></li> ';
$tablica[30]='<li><a href="komnatadiaburiona.php">Po chwili wędrówki napotykasz na Portal Diaburiona i przechodzisz przez niego...</a></li> ';

$klucz=array_rand($tablica);
print($tablica[$klucz]."<br>");



$test = $db -> Execute("SELECT kly FROM players WHERE id=".$player -> id);
$kly= $test -> fields['kly'];
$denars = $test -> fields['soul'];


$smarty -> assign(array("kly" => $kly));
$smarty -> display ('wrotapieliel2.tpl');

require_once("includes/foot.php");
?>
