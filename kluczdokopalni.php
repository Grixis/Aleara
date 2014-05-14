<?php
$title = "Bagnisko Krutynów";
require_once("includes/head.php");
if ($player -> level < 40)
    {
        error('<center><IMG SRC="images/locations/bagniskokrutynow.png"></center>

<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>Nie masz wystarczających umiejętności walki by przeżyć w Opuszczonej Kopalni. Wróć tutajjak osiągniesz minimum 40 poziom! <a href="city.php">(wróć do ostady)</a>');
    }
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if ($player -> location !='Ardulith')
{
	error('Nie znajdujesz się na Krwawych Mokradłach!');
}

$test = $db -> Execute("SELECT kluczdokopalni FROM players WHERE id=".$player -> id);
$kluczdokopalni= $test -> fields['kluczdokopalni'];
$smarty -> assign(array("kluczdokopalni" => $kluczdokopalni));

$test = $db -> Execute("SELECT klejnotmuttaua FROM players WHERE id=".$player -> id);
$klejnotmuttaua= $test -> fields['klejnotmuttaua'];
$smarty -> assign(array("klejnotmuttaua" => $klejnotmuttaua));



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
        
        $razy = ($_POST['rep'] * 1);
        if ($klejnotmuttaua < $razy) {
            error ("Nie masz tyle klejnotów Muttaua!");
        }
        $smarty -> assign ("Message", "Otrzymałeś ".$_POST['rep']." kluczy.");
        $db -> Execute("UPDATE players SET klejnotmuttaua=klejnotmuttaua-".$razy." WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET kluczdokopalni=kluczdokopalni+".$_POST['rep']." WHERE id=".$player -> id);
    }
}

// inicjalizacja zmiennej
if (!isset($_GET['action'])) {
    $_GET['action'] = '';
}
// przypisanie zmiennych oraz wy¶wietlenie strony
$smarty -> assign( array("Action" => $_GET['action']));
$smarty -> display ('kluczdokopalni.tpl');

require_once("includes/foot.php");
?>
