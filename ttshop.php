<?php
$title = "Opuszczone Stawy";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}

$price = rand(100,200);
if (!isset ($_GET['action'])) {
    $smarty -> assign ("Price", $price);
    
} 
    else 
{
    $cost = ($_POST['ryby'] * $price);
    if ($cost > $player -> credits || $_POST['ryby'] <= 0 || !ereg("^[1-9][0-9]*$", $_POST['ryby'])) {
        error ("Masz za mało złota! (<a href=ttshop.php>wróć</a>)");
    } 
        else 
    {
        $db -> Execute("UPDATE players SET credits=credits-".$cost." WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET ryby=ryby+".$_POST['ryby']." WHERE id=".$player -> id);
        error ("Złowiłeś <b>".$_POST['ryby']."</b> sztuk ryb za <b>".$cost."</b> sztuk złota.");
    }
}
$test = $db -> Execute("SELECT ryby FROM players WHERE id=".$player -> id);
$ryby = $test -> fields['ryby'];
$smarty -> assign(array("ryby" => $ryby));
$smarty -> display ('ttshop.tpl');
require_once("includes/foot.php");
?>
