<?php
$title = "Panel Mieszkańca";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
// przypisanie zmiennych oraz wy¶wietlenie strony
$smarty -> assign (array ("View" => $_GET['view'], "Step" => $_GET['step']));
$smarty -> display('member.tpl');

require_once("includes/foot.php");
?>