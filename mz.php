<?php
$title1 = "Wydobycie Mithrilu";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Wyspa Mithrilu')
{
    error('Nie znajdujesz się na Wyspie Mithrilu!');
}

if ($player -> hp == 0) {
 error ("Nie możesz wydobywać mithrilu, ponieważ jesteś martwy!");
}

if (!isset($_GET['action'])) {
    $_GET['action'] = '';
    $gain = ($player -> level * 1.5);
    $smarty -> assign ("Gold", $gain);
} else {
    if (!isset($_POST['amount'])) {
        error("Podaj ile czasu chcesz spędzić na wydobywaniu!");
    }
    if (!ereg("^[1-9][0-9]*$", $_POST['amount'])) {
        error ("Zapomnij o tym!");
    }
    if ($player -> energy < $_POST['amount']) {
 error ("Nie masz tyle energii aby wydobywać.");
    }
    $gain = (($player -> level * 1) * $_POST['amount']);
    $db -> Execute("UPDATE players SET energy=energy-".$_POST['amount']." WHERE id=".$player -> id);
    $db -> Execute("UPDATE players SET platinum=platinum+".$gain." WHERE id=".$player -> id);
    $smarty -> assign ( array("Gain" => $gain, "Amount" => $_POST['amount']));
}



$smarty -> assign ("Action", $_GET['action']);
$smarty -> display ('mz.tpl');

require_once("includes/foot.php");
?>


