<?php

$title = "Stare Bagnisko Krutynów";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if ($player -> location !='Ardulith')
{
	error('Nie znajdujesz się na Krwawych Mokradłach!');
}
/**
* Get the localization for game
*/

$test = $db -> Execute("SELECT kly FROM players WHERE id=".$player -> id);
$kly= $test -> fields['kly'];
$denars = $test -> fields['soul'];


$smarty -> assign(array("kly" => $kly));
$smarty -> display ('bagnisko.tpl');

require_once("includes/foot.php");
?>
