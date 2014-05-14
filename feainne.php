<?php

$title = 'Królestwo Feainne';
require_once('includes/head.php');
if ($player -> id != 3 && $player -> id != 2 && $player -> id != 60 && $player -> id != 0)  
{
   error ("Burak! -,-");
}
$smarty -> display ('fea.tpl');
require_once('includes/foot.php');
?>
