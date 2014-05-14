<?php
$title = "Kawiarnia u  Keelim'a";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}

// nie ta lokacja
if ($player -> location != 'Altara') {
 error ("Zapomnij o tym");
}



// wstaw swoj¹ cene jak chcesz zamiast "10"
$cost = (10);
$smarty -> assign ("Cost", $cost);



if (isset ($_GET['kawka']) && $_GET['kawka'] == 'mk') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz') {
     if ($player -> credits < $cost) {
     error ("Nie masz tyle pieniêdzy!");
    }


       $db -> Execute("UPDATE players SET energy=energy+0.1 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost." where id=39");
       $smarty -> assign ("kawka", "Mk");

            }
}
// wstaw swoj¹ cene jak chcesz zamiast "20"
$cost2 = (20);
$smarty -> assign ("Cost2", $cost2);



if (isset ($_GET['kawka']) && $_GET['kawka'] == 'sk') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz') {
     if ($player -> credits < $cost2) {
     error ("Nie masz tyle pieniêdzy!");
    }


       $db -> Execute("UPDATE players SET energy=energy+0.5 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost2." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost2." where id=39");
       $smarty -> assign ("kawka", "Sk");

            }
}
// wstaw swoj¹ cene jak chcesz zamiast "30"
$cost3 = (30);
$smarty -> assign ("Cost3", $cost3);



if (isset ($_GET['kawka']) && $_GET['kawka'] == 'dk') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz') {
     if ($player -> credits < $cost3) {
     error ("Nie masz tyle pieniêdzy!");
    }


       $db -> Execute("UPDATE players SET energy=energy+1 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost3." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost3." where id=39");
       $smarty -> assign ("kawka", "Dk");

            }
}
// wstaw swoj¹ cene jak chcesz zamiast "50"
$cost4 = (45);
$smarty -> assign ("Cost4", $cost4);



if (isset ($_GET['ciasto']) && $_GET['ciasto'] == 'ser') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz1') {
     if ($player -> credits < $cost4) {
     error ("Nie masz tyle pieniêdzy!");
    }


       $db -> Execute("UPDATE players SET energy=energy+3 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost4." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost4." where id=39");
       $smarty -> assign ("ciasto", "Sernik");

            }
}
$cost5 = (50);
$smarty -> assign ("Cost5", $cost5);



if (isset ($_GET['ciasto']) && $_GET['ciasto'] == 'pw') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz1') {
     if ($player -> credits < $cost5) {
     error ("Nie masz tyle pieniêdzy!");
    }


       $db -> Execute("UPDATE players SET energy=energy+5 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost5." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost5." where id=39");
       $smarty -> assign ("ciasto", "Sernik");

            }
}
$cost6 = (60);
$smarty -> assign ("Cost6", $cost6);



if (isset ($_GET['herbatka']) && $_GET['herbatka'] == 'zh') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz2') {
     if ($player -> credits < $cost6) {
     error ("Nie masz tyle pieniêdzy!");
    }


       $db -> Execute("UPDATE players SET energy=energy+8 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost6." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost6." Where id!=39");
       $smarty -> assign ("herbatka", "Zielona Herbata");

            }
}
$cost7 = (70);
$smarty -> assign ("Cost7", $cost7);



if (isset ($_GET['herbatka']) && $_GET['herbatka'] == 'ch') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz2') {
     if ($player -> credits < $cost7) {
     error ("Nie masz tyle pieniêdzy!");
    }


       $db -> Execute("UPDATE players SET energy=energy+8 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost7." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost7." Where id!=39");
       $smarty -> assign ("herbatka", "Czerwona Herbata");

            }
}
$cost8 = (100);
$smarty -> assign ("Cost8", $cost8);



if (isset ($_GET['herbatka']) && $_GET['herbatka'] == 'hzw') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz2') {
     if ($player -> credits < $cost8) {
     error ("Nie masz tyle pieniêdzy!");
    }


       $db -> Execute("UPDATE players SET energy=energy+8 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost8." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost8." Where id!=39");
       $smarty -> assign ("herbatka", "Herbata z wódk¹");

            }
}



$cost13 = (190);
$smarty -> assign ("Cost10", $cost10);



if (isset ($_GET['alk']) && $_GET['alk'] == 'Wino') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz3') {
     if ($player -> credits < $cost13) {
     error ("Nie masz tyle pieniêdzy!");
    }


       $db -> Execute("UPDATE players SET energy=energy+19 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost13." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost13." Where id!=39");
       $smarty -> assign ("Alkohol", "Wino");

            }
}

$cost10 = (250);
$smarty -> assign ("Cost10", $cost10);



if (isset ($_GET['alk']) && $_GET['alk'] == 'Szampan') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz3') {
     if ($player -> credits < $cost10) {
     error ("Nie masz tyle pieniêdzy!");
    }


       $db -> Execute("UPDATE players SET energy=energy+18 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost10." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost10." Where id!=39");
       $smarty -> assign ("Alkohol", "Wino");

            }
}
$cost11 = (180);
$smarty -> assign ("Cost11", $cost11);



if (isset ($_GET['alk']) && $_GET['alk'] == 'Piwo') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz3') {
     if ($player -> credits < $cost11) {
     error ("Nie masz tyle pieniêdzy!");
    }


       $db -> Execute("UPDATE players SET energy=energy+15 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost11." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost11." Where id!=39");
       $smarty -> assign ("Alkohol", "Piwo");

            }
}
$cost12 = (400);
$smarty -> assign ("Cost12", $cost12);



if (isset ($_GET['alk']) && $_GET['alk'] == 'Wódka') {
    if (isset ($_GET['step']) && $_GET['step'] == 'wybierz3') {
     if ($player -> credits < $cost12) {
     error ("Nie masz tyle pieniêdzy!");
    }


       $db -> Execute("UPDATE players SET energy=energy+25 WHERE id=".$player -> id);
       $db -> Execute("UPDATE players SET credits=credits-".$cost12." WHERE id=".$player -> id);
       $db -> Execute("UPDATE skarbiec set credits=credits+".$cost12." Where id!=39");
       $smarty -> assign ("Alkohol", "Wódka");

            }
}
//inicjalizacja zmiennych
if (!isset($_GET['kawka'])) {
    $_GET['kawka'] = '';
}
if (!isset($_GET['herbatka'])) {
    $_GET['herbatka'] = '';
}
if (!isset($_GET['alk'])) {
    $_GET['alk'] = '';
}
if (!isset($_GET['ciasto'])) {
    $_GET['ciasto'] = '';
}
if (!isset($_GET['step'])) {
    $_GET['step'] = '';
}

// przypisanie zmiennych oraz wy¶wietlenie strony
$smarty -> assign ( array("Kawka" => $_GET['kawka'], "Step" => $_GET['step'], "Ciasto" => $_GET['ciasto'], "Alk" => $_GET['alk'], "Herbatka" => $_GET['herbatka'],"opis" => $player -> kawka, "opis1" => $player -> ciasto, "opis2" => $player -> herbatka, "opis3" => $player -> alk));
$smarty -> display ('kawiarnia.tpl');

require_once("includes/foot.php"); 
?>
