<?php

$title = 'Sala Przemian';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, �e jeste� w lochu - nie mo�esz tutaj przebywa�.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz si� w Alearze! <a href=travel.php>(Wr��)</a>');
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
