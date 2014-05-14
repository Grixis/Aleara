<?php

$title = "Stary Zamek";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
/**
* Get the localization for game
*/
$tablica[0]='<li><a href="">Przed Tobą są wielkie schody, jednak uginąją się jakby miały zaraz się zarwć. jednak idziesz dalej.</a></li> ';
$tablica[1]='<li><a href="">Coś wybiło szybę w zamku! Słyszysz kroki monstrum i zamykasz się w szafie aby przeczekać to!</a></li> ';
$tablica[2]='<li><a href="">Kryształowa lampa spadła obok Ciebie! Wystraszyłeś się! Lecz po chwili idziesz dalej....!</a></li> ';
$tablica[3]='<li><a href="salatortur.php">Przed Tobą znajdują się stare drzwi. Na nich na palu wisi szkielet a pod nim zaschnięta krew! Wchodzisz dalej!</a></li> ';
$tablica[4]='<li><a href="">Jesteś zbyt wystraszony aby wędrować dalej! Siadasz pod ścianą i odpoczywasz!</a></li> ';
$tablica[5]='<li><a href="">W zamku zrobił się nagle straszny przeciąg. Obrazy spadały ze ścian, a Ty schowałeś się pod stary stół aby nie oberwać czymś w głowę. Po chwili idziesz dalej.</a></li> ';
$tablica[6]='<li><a href="">Wyskoczył przed Tobą duży szczur. Jednak udało Ci się uciec.</a></li> ';
$tablica[7]='<li><a href="">Odepchnęła Cię magiczna moc od tych drzwi! Zawracasz!.</a></li> ';
$tablica[8]='<li><a href="">Już tutaj byłeś! Chyba zabłądziłeś!</a></li> ';
$tablica[9]='<li><a href="">Tracisz nadzieję, że znajdziesz tutaj coś dobrego...</a></li> ';
$tablica[10]='<li><a href="">Błąkasz się dalej korytarzem....</a></li> ';
$tablica[11]='<li><a href="starasala.php">Otwierasz jakieś drzwi.. Widzisz starą salę! Idziesz dalej!</a></li> ';
$klucz=array_rand($tablica);
print($tablica[$klucz]."<br>");



$test = $db -> Execute("SELECT kly FROM players WHERE id=".$player -> id);
$kly= $test -> fields['kly'];
$denars = $test -> fields['soul'];


$smarty -> assign(array("kly" => $kly));
$smarty -> display ('zamek.tpl');

require_once("includes/foot.php");
?>
