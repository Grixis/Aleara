<?php

$title = "Sale Rozpaczy w Diabolium";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
$smarty -> assign ("Action", $_GET['action']);
$smarty -> display ('salerozpaczy.tpl');

require_once("includes/foot.php");
?>
