<?php
$title = "Opłacanie lekarza";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db -> Execute("SELECT credits FROM tribes WHERE `id`=".$player -> tribe);
$credits = $test -> fields['credits'];
$smarty -> assign(array("credits" => $credits));
$mytribe = $db -> Execute("SELECT owner FROM tribes WHERE `id`=".$player -> tribe);
$owner = $mytribe -> fields['owner'];
$smarty -> assign(array("owner" => $owner));
	if($player -> id != $mytribe -> fields['owner'])
					{
						error ("Tylko przywódca może wykonywać tą czynność");
					}

$test = $db -> Execute ("SELECT czar FROM tribe_perm WHERE player=".$player -> id);
$czar = $test -> fields['czar'];
$smarty -> assign(array("czar" => $czar));


$price = rand(40000,40000);
if (!isset ($_GET['action'])) {
$test = $db -> Execute("SELECT credits FROM tribes WHERE `id`=".$player -> tribe);
$credits = $test -> fields['credits'];
$smarty -> assign(array("credits" => $credits));

    $smarty -> assign ("Price", $price);
    
} 
    else 
{
    $cost = ($_POST['godziny'] * $price);
    if ($cost > $credits) {
        error ("Gildia nie posiada tyle złota! (<a href=oplac.php>wróć</a>)");
    } 
        else 
    {
        $db -> Execute("UPDATE tribes SET credits=credits-".$cost." WHERE id=".$player -> tribe);
        $db -> Execute("UPDATE tribes SET godziny=godziny+".$_POST['godziny']." WHERE id=".$player -> tribe);
        error ("Opłaciłeś <b>".$_POST['godziny']."</b> godzin pracy lekarza za <b>".$cost."</b> sztuk złota.");
    }
}

$smarty -> display ('oplac.tpl');
require_once("includes/foot.php");
?>
