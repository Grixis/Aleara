<?php

$title = "Siedziba Vorvoxa";
require_once("includes/head.php");
if ($player -> level < 15)
    {
        error('Straż nie przepuściła Cię do siedziby Vorvoxa. Uzanała, że nie jesteś jeszcze godzien z nim rozmawiać. Jak osiągniesz 15lvl wróć tutaj! <a href="city.php">(wróć do ostady)</a>');
    }
if ($player -> location !='Ardulith')
{
	error('Nie znajdujesz się na Krwawych Mokradłach!');
}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}

$test = $db -> Execute("SELECT kly FROM players WHERE id=".$player -> id);
$kly= $test -> fields['kly'];
$denars = $test -> fields['soul'];


$smarty -> assign(array("kly" => $kly));























// inicjalizacja zmiennej
$smarty -> assign("Message", '');
//
if (isset ($_GET['action']) && $_GET['action'] == 'kop') {
    if (isset($_GET['dalej'])) {
        if ($_POST['rep'] <= 0) {
            error ("Chcę kłów:");
        }
        if (!ereg("^[1-9][0-9]*$", $_POST['rep'])) {
            error ("Zapomnij o tym");
        }
        if ($player -> hp == 0) {
            error ("Jesteś martwy!");
        }
        $razy = ($_POST['rep'] * 1);
        if ($player -> energy < $razy) {
            error ("Nie masz tyle energii!");
        }
        $smarty -> assign ("Message", "Otrzymałeś ".$_POST['rep']." kłów.");
        $db -> Execute("UPDATE players SET energy=energy-".$razy." WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET kly=kly+".$_POST['rep']." WHERE id=".$player -> id);
    }
}

// inicjalizacja zmiennej
if (!isset($_GET['action'])) {
    $_GET['action'] = '';
}
// przypisanie zmiennych oraz wy¶wietlenie strony
$smarty -> assign( array("Action" => $_GET['action']));
$test = $db -> Execute("SELECT kly FROM players WHERE id=".$player -> id);
$ziemniaki = $test -> fields['kly'];
$smarty -> assign(array("kly" => $kly));






























$smarty -> display ('vorvox.tpl');

require_once("includes/foot.php");
?>
