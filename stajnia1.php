<?php

$title="Przejazd Koniem";
require_once("includes/head.php");
require_once ("includes/funkcje.php");
require_once("includes/turnfight.php");
if ($player -> location == 'Lochy') {
 error("Zapomnij o tym!");
}

        if ($kon -> fields['bedroom'] == 'Y') {
            error ("Nie masz tyle punktów budowlanych!");
        }

if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
// przypisanie zmiennych
$smarty -> assign(array("Portal" => '', "Maps" => ''));

// funkcja odpowiedzialna za zdarzenia podczas podróży
function travel ($address) {
    global $player;
    global $smarty;
    global $enemy;
    global $arrehp;
    global $db;
    global $energy;
    $roll = rand (1,100);
    $fight = $db -> Execute("SELECT fight FROM players WHERE id=".$player -> id);
    if ($roll < 80 && $fight -> fields['fight'] == 0) {
        $smarty -> assign ("Message", '<center><IMG SRC="images/locations/zagrodadlakoni.png"><center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"></center></center>Podróż przebiegała spokojnie, po pewnym czasie widzisz przed sobą cel swej podróży.');
        $smarty -> display ('error1.tpl');
    } else {

 
    }
    $fight -> Close();
}

$objItem = $db -> Execute("SELECT value FROM settings WHERE setting='item'");

if (!isset ($_GET['akcja']) && $player -> location == 'Altara') {
    if ($player -> maps >= 20  &&  !$objItem -> fields['value'] && $player -> rank != 'Bohater') {
        $smarty -> assign("Maps", 1);
    }
}

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'tak' && $player -> location == 'Altara' && !$objItem -> fields['value'] && $player -> maps >= 20 && $player -> rank != 'Bohater') {
    mysql_query ("update players set miejsce='Portal' where id=".$player -> id);
    $smarty -> assign("Portal", "Y");
}

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'nie' && $player -> location == 'Altara' && !$objItem -> fields['value']  && $player -> maps >= 20 && $player -> rank != 'Bohater') {
    $smarty -> assign("Portal", "N");
}

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'altara') {
    if ($player -> credits < 0) {
     error ("Nie masz tyle pieniędzy!");
    }
    $db -> Execute("UPDATE players SET miejsce='Podróż' WHERE id=".$player -> id);
    travel('stajnia1.php?akcja=altara');
    $fight = $db -> Execute("SELECT fight FROM players WHERE id=".$player -> id);
    if (!$fight -> fields['fight']) {
        $db -> Execute("UPDATE players SET miejsce='Altara' WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET credits=credits-0 WHERE id=".$player -> id);
        error ('Przyjechałes do Aleary. Wejdź <a href=city.php>tutaj</a> aby zobaczyć co ciebie czeka.');
    }
}

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'gory') {
    if ($player -> credits < 0) {
     error ("Nie masz tyle pieniędzy!");
    }
    $db -> Execute("UPDATE players SET miejsce='Podróż' WHERE id=".$player -> id);
    travel('stajnia1.php?akcja=gory');
    $fight = $db -> Execute("SELECT fight FROM players WHERE id=".$player -> id);
    if (!$fight -> fields['fight']) {
        $db -> Execute("UPDATE players SET miejsce='Góry' WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET credits=credits-0 WHERE id=".$player -> id);
        error ('Przyjechałes do Gór Przeznaczenia. Wejdź <a href=gory.php>tutaj</a> aby zobaczyć co ciebie czeka.');
    }
}

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'las') {
    if ($player -> credits < 0) {
     error ("Nie masz tyle pieniędzy!");
    }
    $db -> Execute("UPDATE players SET miejsce='Podróż' WHERE id=".$player -> id);
    travel('stajnia1.php?akcja=las');
    $fight = $db -> Execute("SELECT fight FROM players WHERE id=".$player -> id);
    if (!$fight -> fields['fight']) {
        $db -> Execute("UPDATE players SET miejsce='Las' WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET credits=credits-0 WHERE id=".$player -> id);
        error ('Przyjechałes do Lasu Zbłąkanych Dusz . Wjedz <a href=las.php>tutaj</a> aby zobaczyć co ciebie czeka.');
    }
}

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'felwood') {
    if ($player -> credits < 0) {
     error ("Nie masz tyle pieniędzy!");
    }
    $db -> Execute("UPDATE players SET miejsce='Podróż' WHERE id=".$player -> id);
    travel('stajnia1.php?akcja=felwood');
    $fight = $db -> Execute("SELECT fight FROM players WHERE id=".$player -> id);
    if (!$fight -> fields['fight']) {
        $db -> Execute("UPDATE players SET miejsce='Ardulith' WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET credits=credits-0 WHERE id=".$player -> id);
        error ('Przyjechałes na Krwawe Mokradła. Wjedz do <a href=city.php>osady Krutynów</a> aby zobaczyć co ciebie czeka.');
    }
}

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'powrot') {
    if ($player -> credits < 0) {
     error ("Nie masz tyle pieniędzy!");
    }
    $db -> Execute("UPDATE players SET miejsce='Ardulith' WHERE id=".$player -> id);
    travel('stajnia1.php?akcja=powrot');
    $fight = $db -> Execute("SELECT fight FROM players WHERE id=".$player -> id);
    if (!$fight -> fields['fight']) {
        $db -> Execute("UPDATE players SET miejsce='Ardulith' WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET credits=credits-0 WHERE id=".$player -> id);
        error ('Przyjechałes na Krwawe Mokradła. Wejdź do <a href=city.php>osady Krutynów</a> aby zobaczyć co ciebie czeka.');
    }
}

// inicjalizacja zmiennej
if (!isset($_GET['akcja'])) {
    $_GET['akcja'] = '';
}

// przypisanie zmiennych oraz wy¶wietlenie strony
$smarty -> assign ( array("Action" => $_GET['akcja'], "Location" => $player -> location));
$smarty -> display('stajnia1.tpl');

require_once("includes/foot.php");
 
?>
