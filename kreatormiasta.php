<?php


$title = "Kreator Miasta";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
$test = $db -> Execute("SELECT ktlo FROM players WHERE id=".$player -> id);
$ktlo = $test -> fields['ktlo'];
$smarty -> assign(array("ktlo" => $ktlo));
$test = $db -> Execute("SELECT klokacja FROM players WHERE id=".$player -> id);
$klokacja = $test -> fields['klokacja'];
$smarty -> assign(array("klokacja" => $klokacja));
$smarty -> display ('kreatormiasta.tpl');

require_once("includes/foot.php"); 
?>
