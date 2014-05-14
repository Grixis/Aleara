<?php
$title1 = "Wyspa Złota";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Wyspa Zlota')
{
    error('Nie znajdujesz się na Wyspie Złota!');
}

if ($player -> hp > 0) {
    $smarty -> display ('wyspazlota.tpl');
} else {
    $db -> Execute("UPDATE players SET miejsce='Altara' WHERE id=".$player -> id);
    error ("<a href=hospital.php>Szpital</a>.");
}
require_once("includes/foot.php"); 
?>
