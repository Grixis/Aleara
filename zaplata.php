<?php

$title = '';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, �e jeste� w lochu - nie mo�esz tutaj przebywa�.');
}
/**
* Get the localization for game
*/

require_once("languages/".$player -> lang."/bank.php");


$smarty -> display ('zaplata.tpl');

require_once("includes/foot.php");

?>
