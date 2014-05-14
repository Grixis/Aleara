<?php

$title = "";
require_once("includes/head.php");

require_once("languages/".$player -> lang."/stats.php");
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
$smarty -> display ('drzwi.tpl');

require_once("includes/foot.php");
?>
