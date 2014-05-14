<?php

$title = "Wieża Transmutacji";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
$smarty -> display ('wiezatrans.tpl');

require_once("includes/foot.php");
?>
