<?php

$title1="Wyjazd z Diabolium";
require_once("includes/head.php");
require_once ("includes/funkcje.php");


if (isset ($_GET['akcja']) && $_GET['akcja'] == 'powrot') {
    if ($player -> credits < 5000) {
     error ("Nie masz tyle pieniędzy!");
    }

    $db -> Execute("UPDATE players SET miejsce='Podróż' WHERE id=".$player -> id);
    $fight = $db -> Execute("SELECT fight FROM players WHERE id=".$player -> id);
    if (!$fight -> fields['fight']) {
        $db -> Execute("UPDATE players SET miejsce='Altara' WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET credits=credits-5000 WHERE id=".$player -> id);
        error ("Dotarłeś do Aleary. Wejdź <a href=city.php>tutaj</a> aby zobaczyć co ciebie czeka.");
    }
}

// inicjalizacja zmiennej
if (!isset($_GET['akcja'])) {
    $_GET['akcja'] = '';
}

// przypisanie zmiennych oraz wyświetlenie strony
$smarty -> assign ( array("Action" => $_GET['akcja'], "Location" => $player -> location));
$smarty -> display('dojazddiabolium2.tpl');

require_once("includes/foot.php"); 
?>
