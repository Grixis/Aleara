<?php

$title = '';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
$smarty -> display ('gotowe.tpl');

require_once('includes/foot.php');
?>
	