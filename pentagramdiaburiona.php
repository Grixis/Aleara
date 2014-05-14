<?php

$title = "Komnata Śmierci";
require_once("includes/head.php");
if($player -> location != 'Diabolium')
{
    error ("Nie znajdujesz się w Diabolium!");
}

$test = $db -> Execute("SELECT artefaktoko FROM players WHERE id=".$player -> id);
$artefaktoko = $test -> fields['artefaktoko'];
$smarty -> assign(array("artefaktoko" => $artefaktoko));

$test = $db -> Execute("SELECT artefaktzab FROM players WHERE id=".$player -> id);
$artefaktzab = $test -> fields['artefaktzab'];
$smarty -> assign(array("artefaktzab" => $artefaktzab));

$test = $db -> Execute("SELECT artefaktwlos FROM players WHERE id=".$player -> id);
$artefaktwlos = $test -> fields['artefaktwlos'];
$smarty -> assign(array("artefaktwlos" => $artefaktwlos));

$test = $db -> Execute("SELECT artefaktzebro FROM players WHERE id=".$player -> id);
$artefaktzebro = $test -> fields['artefaktzebro'];
$smarty -> assign(array("artefaktzebro" => $artefaktzebro));

$test = $db -> Execute("SELECT artefaktserce FROM players WHERE id=".$player -> id);
$artefaktserce = $test -> fields['artefaktserce'];
$smarty -> assign(array("artefaktserce" => $artefaktserce));

$smarty -> display ('pentagramdiaburiona.tpl');
require_once("includes/foot.php");
?>
