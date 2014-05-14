<?php
$title1 = "Wyspa Mithrilu";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Wyspa Mithrilu')
{
    error('Nie znajdujesz się na Wyspie Mithrilu!');
}

if ($player -> hp > 0) {
    $smarty -> display ('wyspamithrilu.tpl');
} else {
    $db -> Execute("UPDATE players SET miejsce='Altara' WHERE id=".$player -> id);
    error ("Ponieważ jesteś martwy, twa dusza podąża z powrotem do szpitala w Alearzee. Kliknij <a href=hospital.php>tutaj</a>.");
}
require_once("includes/foot.php"); 
?>
