<?php

$title = " Brama Wielkiej Mrocznej Puszczy Krutynów";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if ($player -> location !='Ardulith')
{
	error('Nie jestes na mokradlach.');
}
$test = $db -> Execute("SELECT kjaskini FROM players WHERE id=".$player -> id);
$kjaskini= $test -> fields['kjaskini'];

$smarty -> assign(array("kjaskini" => $kjaskini));


$test = $db -> Execute("SELECT kpuszczy FROM players WHERE id=".$player -> id);
$kpuszczy= $test -> fields['kpuszczy'];

$smarty -> assign(array("kpuszczy" => $kpuszczy));




$test = $db -> Execute("SELECT kpustyni FROM players WHERE id=".$player -> id);
$kpustyni= $test -> fields['kpustyni'];

$smarty -> assign(array("kpustyni" => $kpustyni));

$test = $db -> Execute("SELECT przygodaa FROM players WHERE id=".$player -> id);
$przygodaa= $test -> fields['przygodaa'];

$smarty -> assign(array("przygodaa" => $przygodaa));

$test = $db -> Execute("SELECT kzamku FROM players WHERE id=".$player -> id);
$kzamku= $test -> fields['kzamku'];

$smarty -> assign(array("kzamku" => $kzamku));
/**
* Get the localization for game
*/
$smarty -> display ('puszcza.tpl');
require_once("includes/foot.php");
?>
