<?php
$title = "Wydobywanie z�ota z morza";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, �e jeste� w lochu - nie mo�esz tutaj przebywa�.');
}
if ($player -> location != 'Wyspa Zlota') {
 error ("Nie znajdujesz si� na Wyspie Z�ota!");
}
if ($player -> hp == 0) {
 error ("Nie mo�esz wydobywa�, poniewa� jeste� martwy!");
}

if (!isset($_GET['action'])) {
    $_GET['action'] = '';
    $gain = ($player -> level * 35);
    $smarty -> assign ("Gold", $gain);
} else {
    if (!isset($_POST['amount'])) {
        error("Podaj ile czasu chcesz sp�dzi� na wydobywaniu z�ota!");
    }
    if (!ereg("^[1-9][0-9]*$", $_POST['amount'])) {
        error ("Zapomnij o tym!");
    }
    if ($player -> energy < $_POST['amount']) {
 error ("Nie masz tyle energii aby wydobywa�.");
    }
    $gain = (($player -> level * 20) * $_POST['amount']);
    $db -> Execute("UPDATE players SET energy=energy-".$_POST['amount']." WHERE id=".$player -> id);
    $db -> Execute("UPDATE players SET credits=credits+".$gain." WHERE id=".$player -> id);
    $smarty -> assign ( array("Gain" => $gain, "Amount" => $_POST['amount']));
}

$smarty -> assign ("Action", $_GET['action']);
$smarty -> display ('zm.tpl');

require_once("includes/foot.php");
?>
