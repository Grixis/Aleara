<?php

$title1="Dojazd do Diabolium";
require_once("includes/head.php");
require_once ("includes/funkcje.php");
if ($player -> location == 'Lochy') {
 error("Zapomnij o tym!");
}
$test = $db -> Execute("SELECT klucz FROM players WHERE `id`=".$player -> id);
$klucz = $test -> fields['klucz'];
$smarty -> assign(array("klucz" => $klucz));

$test = $db -> Execute("SELECT miejsce FROM players WHERE `id`=".$player -> id);
$miejsce = $test -> fields['miejsce'];
$smarty -> assign(array("miejsce" => $miejsce));

$test = $db -> Execute("SELECT klucz FROM players WHERE `id`=".$player -> id);
$klucz = $test -> fields['klucz'];
$smarty -> assign(array("klucz" => $klucz));
if($klucz < 1)
{
    error ('<center><IMG SRC="images/locations/bramymiasta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><Br>Nie posiadasz klucza do wrót miasta!');
}

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'zm') {
$test = $db -> Execute("SELECT klucz FROM players WHERE `id`=".$player -> id);
$klucz = $test -> fields['klucz'];
$smarty -> assign(array("klucz" => $klucz));
 if($klucz < 1) {
 error('<center><IMG SRC="images/locations/bramymiasta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><Br>Nie posiadasz klucza do wrót miasta!');
	}

      $db -> Execute("UPDATE players SET miejsce='Diabolium' WHERE id=".$player -> id);
      $db -> Execute("UPDATE players SET klucz=klucz-1 WHERE id=".$player -> id);
    error ('<center><IMG SRC="images/locations/bramymiasta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><Br>Dotarłeś pod bramę Diabolium. Wejdź <a href=diabolium.php>tutaj</a> aby zobaczyć czy masz wstęp do miasta.');
    }

	
if (isset ($_GET['akcja']) && $_GET['akcja'] == 'powrot') {
    if ($player -> credits < 5000) {
     error ('<center><IMG SRC="images/locations/bramymiasta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><Br>Nie masz tyle pieniędzy!');
    }

    $db -> Execute("UPDATE players SET miejsce='Podróż' WHERE id=".$player -> id);
    $fight = $db -> Execute("SELECT fight FROM players WHERE id=".$player -> id);
    if (!$fight -> fields['fight']) {
        $db -> Execute("UPDATE players SET miejsce='Altara' WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET credits=credits-5000 WHERE id=".$player -> id);
        error ('<center><IMG SRC="images/locations/bramymiasta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><Br>Dotarłeś do Aleary. Wejdź <a href=city.php>tutaj</a> aby zobaczyć co ciebie czeka.');
    }
}

// inicjalizacja zmiennej
if (!isset($_GET['akcja'])) {
    $_GET['akcja'] = '';
}

// przypisanie zmiennych oraz wyświetlenie strony
$smarty -> assign ( array("Action" => $_GET['akcja'], "Location" => $player -> location));
$smarty -> display('dojazddiabolium.tpl');

require_once("includes/foot.php"); 
?>
