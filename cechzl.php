<?php


$title = "Gildia Złodzieji";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}

if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}



// wstaw zamiast 1200 swoj± cene * poziom postaci
$cost = ($player -> level * 400);
$smarty -> assign ("Cost", $cost);



if (isset ($_GET['pokoj']) && $_GET['pokoj'] == 'maly') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz') {
     if ($player -> credits < $cost) {
	    error ("Nie masz tyle pieniędzy!");
    }

		$db -> Execute("UPDATE players SET crime=crime+1 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost." where id=1");

        $smarty -> assign ("pokoj", "maly");

            }
}


//inicjalizacja zmiennych
if (!isset($_GET['pokoj'])) {
    $_GET['pokoj'] = '';
}
if (!isset($_GET['step'])) {
    $_GET['step'] = '';
}

// przypisanie zmiennych oraz wy¶wietlenie strony
$smarty -> assign ( array("Pokoj" => $_GET['pokoj'], "Step" => $_GET['step'], "opis" => $player -> pokoj));
$smarty -> display ('cechzl.tpl');

require_once("includes/foot.php"); 
?>
