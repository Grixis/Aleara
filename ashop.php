<?php
$title = "Chatka Leśniczego";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
$price= rand(500,1000);
if (!isset ($_GET['action'])) {
    $smarty -> assign ("Price", $price);
    
} 
    else 
{
    $cost = ($_POST['grzy'] * $price);
    if ($cost > $player -> credits || $_POST['grzy'] <= 0 || !ereg("^[1-9][0-9]*$", $_POST['grzy'])) {
        error ("Nie stać cię! (<a href=ashop.php>wróć</a>)");
    } 
        else 
    {
        $db -> Execute("UPDATE players SET credits=credits-".$cost." WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET grzyby=grzyby+".$_POST['grzy']." WHERE id=".$player -> id);
        error ("Kupiłeś <b>".$_POST['grzy']."</b> sztuk grzybów za <b>".$cost."</b> sztuk złota.");
    }
}
$test = $db -> Execute("SELECT grzyby FROM players WHERE id=".$player -> id);
$grzyby = $test -> fields['grzyby'];
$smarty -> assign(array("grzyby" => $grzyby)); 
$smarty -> display ('ashop.tpl'); 
require_once("includes/foot.php");
?>
