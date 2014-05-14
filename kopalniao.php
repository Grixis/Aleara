<?php
$title = "Opuszczona Kopalnia - Wejście";
require_once("includes/head.php");
$test = $db -> Execute("SELECT kluczaktywny FROM players WHERE id=".$player -> id);
$kluczaktywny= $test -> fields['kluczaktywny'];
$smarty -> assign(array("kluczaktywny" => $kluczaktywny));
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$smarty -> display('kopalniao.tpl');
require_once("includes/foot.php"); 
?>
