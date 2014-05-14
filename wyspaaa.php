<?php
$title = "Wydobywanie złota z morza";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db->Execute("SELECT premium FROM players WHERE id=".$player->id);
$premium=$test->fields['premium'];
$test = $db->Execute("SELECT podklasa FROM players WHERE id=".$player->id);
$podklasa=$test->fields['podklasa'];

	if ($premium != "Y" && $podklasa !="Pirat")
	{
		error("Odpycha cię jakieś tajemnicze pole czarnej magii. Najwyraźniej tylko wskrzesiciele i piraci mogą przejść");
	}

if ($player -> location != 'Wyspa Zlota') {
 error ("Nie znajdujesz się na Wyspie Złota!");
}
if ($player -> hp == 0) {
 error ("Nie możesz wydobywać, ponieważ jesteś martwy!");
}

if (!isset($_GET['action'])) {
    $_GET['action'] = '';
    $gain = ($player -> level * 40);
    $smarty -> assign ("Gold", $gain);
} else {
    if (!isset($_POST['amount'])) {
        error("Podaj ile czasu chcesz spędzić na wydobywaniu złota!");
    }
    if (!ereg("^[1-9][0-9]*$", $_POST['amount'])) {
        error ("Zapomnij o tym!");
    }
    if ($player -> energy < $_POST['amount']) {
 error ("Nie masz tyle energii aby wydobywać.");
    }
    $gain = (($player -> level * 40) * $_POST['amount']);
    $db -> Execute("UPDATE players SET energy=energy-".$_POST['amount']." WHERE id=".$player -> id);
    $db -> Execute("UPDATE players SET credits=credits+".$gain." WHERE id=".$player -> id);
    $smarty -> assign ( array("Gain" => $gain, "Amount" => $_POST['amount']));
}

$smarty -> assign ("Action", $_GET['action']);
$smarty -> display ('wyspaaa.tpl');

require_once("includes/foot.php");
?>
