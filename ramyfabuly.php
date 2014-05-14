<?php
$title = "Ramy Fabuły Aleary";
require_once("includes/head.php");
$db -> Execute("UPDATE players SET ssijmipicze=ssijmipicze+1 WHERE `id`=".$player -> id);
$smarty -> display ('ramyfabuly.tpl'); 
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
require_once("includes/foot.php");
?>
