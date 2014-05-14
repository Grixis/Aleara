<?php

$title = "Opuszczona Kuźnia";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db -> Execute("SELECT wlos FROM players WHERE id=".$player -> id);
$wlos = $test -> fields['wlos'];
$smarty -> assign(array("wlos" => $wlos));

$test2 = $db -> Execute("SELECT pokrzywa FROM players WHERE id=".$player -> id);
$pokrzywa = $test2 -> fields['pokrzywa'];
$smarty -> assign(array("pokrzywa" => $pokrzywa));

$test3 = $db -> Execute("SELECT kora FROM players WHERE id=".$player -> id);
$kora = $test3 -> fields['kora'];
$smarty -> assign(array("kora" => $kora));








$smarty -> display ('opuszczonakuznia.tpl');

require_once("includes/foot.php");
?>
