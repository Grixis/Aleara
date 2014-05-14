<?php

$title1 = ""; //cos pojebanego z tym jest
$title = ""; //raz title1 raz title

require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}

$smarty -> display ('skala.tpl');
require_once("includes/foot.php");
$db -> Close();
?>
