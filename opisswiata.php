<?php

$title = "Opis Świata";
require_once("includes/head.php");
$db -> Execute("UPDATE players SET ssijmipicze=ssijmipicze+1 WHERE `id`=".$player -> id);
$smarty -> display ('opisswiata.tpl'); 
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
require_once("includes/foot.php");
?>
