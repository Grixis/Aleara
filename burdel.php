<?php


$title = "Dom publiczny";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz siê w Alearze! <a href=travel.php>(Wróæ)</a>');
}
// wstaw nazwe swego miasta
if ($player -> location != 'Altara') {
	error ("Zapomnij o tym");
}



// wstaw zamiast 500 swoj± cene * poziom postaci
$cost = ($player -> level * 500);
$smarty -> assign ("Cost", $cost);



if (isset ($_GET['dziwka']) && $_GET['dziwka'] == 'esmeralda') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz') {
     if ($player -> credits < $cost) {
	    error ("Nie masz tyle pieniêdzy!");
    }

		if ($player -> buu > 1) {
	error ("Jusz se dogodzi³es!!");
    }

        $db -> Execute("UPDATE players SET buu=buu+1 WHERE id=".$player -> id);
	$db -> Execute("UPDATE players SET energy=energy+1 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost." where id=1");

        $smarty -> assign ("dziwka", "Esmeralde");

            }
}
// wstaw zamiast 500 swoj± cene * poziom postaci
$cost2 = ($player -> level * 600);
$smarty -> assign ("Cost2", $cost2);


if (isset ($_GET['dziwka']) && $_GET['dziwka'] == 'eilena' && $player -> dzwika == '') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz' && $player -> dziwka == '') {
     if ($player -> credits < $cost2) {
	    error ("Nie masz tyle pieniêdzy!");
    }

		if ($player -> buu > 1) {
	error ("Jusz se dogodzi³es!!");
    }

        $db -> Execute("UPDATE players SET buu=buu+1 WHERE id=".$player -> id);
	$db -> Execute("UPDATE players SET energy=energy+2 WHERE id=".$player -> id);
    $db -> Execute("UPDATE players SET credits=credits-".$cost2." WHERE id=".$player -> id);
    $db -> Execute("UPDATE skarbiec set credits=credits+".$cost2." where id=1");


	$smarty -> assign ("dziwka", "Eilene");
    }
}
// wstaw zamiast 500 swoj± cene * poziom postaci
$cost3 = ($player -> level * 800);
$smarty -> assign ("Cost3", $cost3);


if (isset ($_GET['dziwka']) && $_GET['dziwka'] == 'kasandra' && $player -> dziwka == '') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz' && $player -> dziwka == '') {
     if ($player -> credits < $cost3) {
	    error ("Nie masz tyle pieniêdzy!");
    }

		if ($player -> buu > 1) {
	error ("Jusz se dogodzi³es!!");
    }

        $db -> Execute("UPDATE players SET buu=buu+1 WHERE id=".$player -> id);
	$db -> Execute("UPDATE players SET energy=energy+3 WHERE id=".$player -> id);
    $db -> Execute("UPDATE players SET credits=credits-".$cost3." WHERE id=".$player -> id);
    $db -> Execute("UPDATE skarbiec set credits=credits+".$cost3." where id=1");


	$smarty -> assign ("dziwka", "Kasandre");
    }
}
// wstaw zamiast 525 swoj± cene * poziom postaci
$cost4 = ($player -> level * 525);
$smarty -> assign ("Cost4", $cost4);


if (isset ($_GET['kurwa']) && $_GET['kurwa'] == 'rokie' && $player -> kurwa == '') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz' && $player -> kurwa == '') {
     if ($player -> credits < $cost4) {
	    error ("Nie masz tyle pieniêdzy!");
    }

        if ($player -> buu > 1) {
	error ("Jusz se dogodzi³es!!");
    }

        $db -> Execute("UPDATE players SET buu=buu+1 WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET energy=energy+1 WHERE id=".$player -> id);
    $db -> Execute("UPDATE players SET credits=credits-".$cost4." WHERE id=".$player -> id);
    $db -> Execute("UPDATE skarbiec set credits=credits+".$cost4." where id=1");


	$smarty -> assign ("kurwa", "Rokie");
    }
}
// wstaw zamiast 625 swoj± cene * poziom postaci
$cost5 = ($player -> level * 625);
$smarty -> assign ("Cost5", $cost5);


if (isset ($_GET['kurwa']) && $_GET['kurwa'] == 'herkules' && $player -> kurwa == '') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz' && $player -> kurwa == '') {
     if ($player -> credits < $cost5) {
	    error ("Nie masz tyle pieniêdzy!");
    }

	if ($player -> buu > 1) {
	error ("Jusz se dogodzi³es!!");
    }

        $db -> Execute("UPDATE players SET buu=buu+1 WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET energy=energy+2 WHERE id=".$player -> id);
    $db -> Execute("UPDATE players SET credits=credits-".$cost5." WHERE id=".$player -> id);
    $db -> Execute("UPDATE skarbiec set credits=credits+".$cost5." where id=1");


	$smarty -> assign ("kurwa", "Herkules");
    }
}
// wstaw zamiast 825 swoj± cene * poziom postaci
$cost6 = ($player -> level * 825);
$smarty -> assign ("Cost6", $cost6);


if (isset ($_GET['kurwa']) && $_GET['kurwa'] == 'treminator' && $player -> kurwa == '') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz' && $player -> kurwa == '') {
     if ($player -> credits < $cost6) {
	    error ("Nie masz tyle pieniêdzy!");
    }

		if ($player -> buu > 1) {
	error ("Jusz se dogodzi³es!!");
    }

        $db -> Execute("UPDATE players SET buu=buu+1 WHERE id=".$player -> id);
	$db -> Execute("UPDATE players SET energy=energy+5 WHERE id=".$player -> id);
    $db -> Execute("UPDATE players SET credits=credits-".$cost6." WHERE id=".$player -> id);
    $db -> Execute("UPDATE skarbiec set credits=credits+".$cost6." where id=1");


	$smarty -> assign ("kurwa", "Terminator");
    }
}
//inicjalizacja zmiennych
if (!isset($_GET['dziwka'])) {
    $_GET['dziwka'] = '';
}
if (!isset($_GET['kurwa'])) {
    $_GET['kurwa'] = '';
}
if (!isset($_GET['step'])) {
    $_GET['step'] = '';
}

// przypisanie zmiennych oraz wy¶wietlenie strony
$smarty -> assign ( array("Dziwka" => $_GET['dziwka'], "Step" => $_GET['step'], "opis" => $player -> dziwka));
$smarty -> assign ( array("Kurwa" => $_GET['kurwa'], "Step" => $_GET['step'], "opis" => $player -> kurwa));
$smarty -> display ('burdel.tpl');

require_once("includes/foot.php"); 
?>
