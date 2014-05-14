<?php
$title = "Stary Pub";
require_once("includes/head.php");
$test = $db -> Execute("SELECT wodka FROM players WHERE id=".$player -> id);
$wodka = $test -> fields['wodka'];
$smarty -> assign(array("wodka" => $wodka));
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
$cost = ($player -> level * 50);
$smarty -> assign ("Cost", $cost);

if (isset ($_GET['wodka']) && $_GET['wodka'] == 'piwo') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz') {
     if ($player -> credits < $cost) {
            error ("Nie masz tyle pieniędzy!");
    }
    if ($wodka > 0) 
    {
        error ("Twoja głowa jest za słaba aby więcej wypić!");
    }
       $db -> Execute("UPDATE players SET wodka=wodka+1 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET energy=energy+2 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost." WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET alkoholizm=alkoholizm+1 WHERE id=".$player -> id);

        $smarty -> assign ("wodka", "piwo");

            }
}
$cost2 = ($player -> level * 150);
$smarty -> assign ("Cost2", $cost2);

if (isset ($_GET['wodka']) && $_GET['wodka'] == 'miod' && $player -> dzwika == '') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz' && $player -> kapiel == '') {
     if ($player -> credits < $cost2) {
            error ("Nie masz tyle pieniędzy!");
    }
     if ($wodka > 0) 
    {
        error ("Twoja głowa jest za słaba aby więcej wypić!");
    }
    $db -> Execute("UPDATE players SET wodka=wodka+1 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET energy=energy+3 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost2." WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET alkoholizm=alkoholizm+1.5 WHERE id=".$player -> id);

        $smarty -> assign ("wodka", "miód");
    }
}
$cost3 = ($player -> level * 200);
$smarty -> assign ("Cost3", $cost3);

if (isset ($_GET['wodka']) && $_GET['wodka'] == 'wodka' && $player -> kapiel == '') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz' && $player -> kapiel == '') {
     if ($player -> credits < $cost3) {
            error ("Nie masz tyle pieniędzy!");
    }
     if ($wodka > 0) 
    {
        error ("Twoja głowa jest za słaba aby więcej wypić!");
    }
$db -> Execute("UPDATE players SET wodka=wodka+1 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET energy=energy+5 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost3." WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET alkoholizm=alkoholizm+2 WHERE id=".$player -> id);


        $smarty -> assign ("wodka", "wódka");
    }
}

if (!isset($_GET['wodka'])) {
    $_GET['wodka'] = '';
}
if (!isset($_GET['step'])) {
    $_GET['step'] = '';
}

$smarty -> assign ( array("wodka" => $_GET['wodka'], "Step" => $_GET['step']));
$smarty -> display ('pub.tpl');

require_once("includes/foot.php");
?>
