<?php

$title = 'Sala Przemian';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz siê w Alearze! <a href=travel.php>(Wróæ)</a>');
}
$test = $db -> Execute("SELECT wywar FROM players WHERE `id`=".$player -> id);
$wywar = $test -> fields['wywar'];
$smarty -> assign(array("wywar" => $wywar));
$test = $db -> Execute("SELECT transmutacja FROM players WHERE `id`=".$player -> id);
$transmutacja = $test -> fields['transmutacja'];
$smarty -> assign(array("transmutacja" => $transmutacja));
$smarty -> display('wiezatrans1.tpl');
require_once('includes/foot.php');

?>
