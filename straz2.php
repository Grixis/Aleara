<?php

$title = "Statystyki";
require_once("includes/head.php");

require_once("languages/".$player -> lang."/stats.php");
if($player -> location == 'Lochy')
{
	error ('Jako, �e jeste� w lochu - nie mo�esz tutaj przebywa�.');
}
$smarty -> display ('straz2.tpl');

require_once("includes/foot.php");
?>
