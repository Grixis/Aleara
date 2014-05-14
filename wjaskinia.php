<?php

$title = "Jaskinia pod Puszczą Krutynów";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
/**
* Get the localization for game
*/
$tablica[0]='<li><a href="">Wędrowałeś po jaskini lecz nic nie zauważyłeś.</a></li> ';
$tablica[1]='<li><a href="">Na swojej drodze napotkałeś podziemny strumień. Przepływasz i mokry wędrujesz dalej.</a></li> ';
$tablica[3]='<li><a href="jaskiniaswiatynia.php">Widzisz przed sobą wielkie drewniane drzwi! Nie masz pojęcia co one tutaj robią. Jednak postanawiasz je otworzyć. Robisz to, a Twoim oczom ukazuję się wilka świątynia. Wchodzisz dalej</a></li> ';
$tablica[4]='<li><a href="">Nie mas sił. Siadasz i odpoczywasz. Jednak po chwili idziesz dalej</a></li> ';
$tablica[5]='<li><a href="">Wystraszyło Cię stado nietoperzy. Zawracasz szybko!</a></li> ';
$tablica[6]='<li><a href="">Tunel się zapadł... Wracasz się aby iść inną drogą</a></li> ';
$tablica[7]='<li><a href="">Zabłądziłeś!.</a></li> ';
$tablica[8]='<li><a href="">Odpycha Cię potężna moc! Zawracasz.</a></li> ';
$tablica[9]='<li><a href="">Nic nie widzisz ciekawego, lecz wędrujesz dalej...</a></li> ';
$tablica[10]='<li><a href="">Tracisz nadzieję, że cokolwiek tutaj się znajduje.</a></li> ';
$klucz=array_rand($tablica);
print($tablica[$klucz]."<br>");



$test = $db -> Execute("SELECT kly FROM players WHERE id=".$player -> id);
$kly= $test -> fields['kly'];
$denars = $test -> fields['soul'];


$smarty -> assign(array("kly" => $kly));
$smarty -> display ('wjaskinia.tpl');

require_once("includes/foot.php");
?>
