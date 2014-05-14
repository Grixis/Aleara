<?php
//Redakcja gazety
//na AJAXie wszystko więc tu pusto ;)
require_once("includes/head.php");
require_once("languages/pl/newspaper.php");
if ($player->rank != "Redaktor" and $player->rank !="Admin")
{
	error("Nie masz prawa tutaj przebywać");
}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
print("<span id=\"player\" style=\"display:none\">".$player->user ." ID:".$player->id ."</span>");
$smarty-> display('redaction.tpl');
require_once("includes/foot.php");

?>
