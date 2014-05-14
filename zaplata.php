<?php

$title = '';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
/**
* Get the localization for game
*/

require_once("languages/".$player -> lang."/bank.php");


$smarty -> display ('zaplata.tpl');

require_once("includes/foot.php");

?>
