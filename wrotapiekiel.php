<?php

$title = "Brama Piekieł w Diabolium";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}

$test = $db -> Execute("SELECT kpotepienia FROM players WHERE id=".$player -> id);
$kpotepienia= $test -> fields['kpotepienia'];

$smarty -> assign(array("kpotepienia" => $kpotepienia));


$test = $db -> Execute("SELECT ksmierci FROM players WHERE id=".$player -> id);
$ksmierci= $test -> fields['ksmierci'];

$smarty -> assign(array("ksmierci" => $ksmierci));




$test = $db -> Execute("SELECT kplomienia FROM players WHERE id=".$player -> id);
$kplomienia= $test -> fields['kplomienia'];

$smarty -> assign(array("kplomienia" => $kplomienia));

$test = $db -> Execute("SELECT brama FROM players WHERE id=".$player -> id);
$brama= $test -> fields['brama'];

$smarty -> assign(array("brama" => $brama));

$test = $db -> Execute("SELECT kdiaburiona FROM players WHERE id=".$player -> id);
$kdiaburiona= $test -> fields['kdiaburiona'];

$smarty -> assign(array("kdiaburiona" => $kdiaburiona));
/**
* Get the localization for game
*/
$smarty -> display ('wrotapiekiel.tpl');
require_once("includes/foot.php");
?>
