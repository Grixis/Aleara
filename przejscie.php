<?php

$title1 = "Powitanie"; //cos pojebanego z tym jest
$title = "Powitanie"; //raz title1 raz title

require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, �e jeste� w lochu - nie mo�esz tutaj przebywa�.');
}
$smarty -> display ('przejscie.tpl');
require_once("includes/foot.php");
$db -> Close();
?>
