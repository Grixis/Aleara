<?php

$title = '';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, �e jeste� w lochu - nie mo�esz tutaj przebywa�.');
}
$smarty -> display ('gotowe.tpl');

require_once('includes/foot.php');
?>
	