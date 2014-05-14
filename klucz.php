<?php

$title = "Siedziba Vorvoxa";
require_once("includes/head.php");
if ($player -> level < 30)
    {
        error('<center><IMG SRC="images/locations/bagniskokrutynow.png"></center>

<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>Miasto Diabolium należy dla zaawansowanych graczy! Klucze do niego możesz zakupić jak osiągniesz minimum 30 poziom! <a href="city.php">(wróć do ostady)</a>');
    }
if ($player -> location !='Ardulith')
{
	error('Nie znajdujesz się na Krwawych Mokradłach!');
}

if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db -> Execute("SELECT klucz FROM players WHERE id=".$player -> id);
$klucz= $test -> fields['klucz'];

$smarty -> assign(array("klucz" => $klucz));




// inicjalizacja zmiennej
$smarty -> assign("Message", '');
//
if (isset ($_GET['action']) && $_GET['action'] == 'kop') {
    if (isset($_GET['dalej'])) {
        if ($_POST['rep'] <= 0) {
            error ("Chcę kluczy:");
        }
        if (!ereg("^[1-9][0-9]*$", $_POST['rep'])) {
            error ("Zapomnij o tym");
        }
        
        $razy = ($_POST['rep'] * 100);
        if ($player -> platinum < $razy) {
            error ("Nie masz tyle mithrilu!");
        }
        $smarty -> assign ("Message", "Otrzymałeś ".$_POST['rep']." kluczy.");
        $db -> Execute("UPDATE players SET platinum=platinum-".$razy." WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET klucz=klucz+".$_POST['rep']." WHERE id=".$player -> id);
    }
}

// inicjalizacja zmiennej
if (!isset($_GET['action'])) {
    $_GET['action'] = '';
}
// przypisanie zmiennych oraz wy¶wietlenie strony
$smarty -> assign( array("Action" => $_GET['action']));
$smarty -> display ('klucz.tpl');

require_once("includes/foot.php");
?>
