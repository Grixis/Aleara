<?php

$title = "";
require_once("includes/head.php");

require_once("languages/".$player -> lang."/stats.php");
if($player -> location == 'Lochy')
{
	error ('Jako, �e jeste� w lochu - nie mo�esz tutaj przebywa�.');
}
$smarty -> display ('drzwi.tpl');

require_once("includes/foot.php");
?>
