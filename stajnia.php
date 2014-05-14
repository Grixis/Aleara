<?php

$title = "Stajnia Koni";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}



// przypisanie zmiennych
$smarty -> assign(array("Message" => '', "Bedroomlink" => '', "Locatorlink" => '', "Buildbed" => '', "Buildwardrobe" => '', "Upgrade" => '', "Wardrobelink" => '', "Buildhouse" => ''));
$house = $db -> Execute("SELECT * FROM kon WHERE owner=".$player -> id." OR locator=".$player ->id);
//Zakup nauki jazdy
if (isset ($_GET['action']) && $_GET['action'] == 'land') {
    if (!$house -> fields['id']) {
        $cost = "2000 sztuk złota";
    } else {
        $cost1 = 20000;
        $cost = $cost1." sztuk złota";
    }
    $smarty -> assign ("Cost", $cost);
    if (isset ($_GET['step']) && $_GET['step'] == 'buy') {
        if (!$house -> fields['id']) {
            if ($player -> credits < 2000) {
                error ("Nie masz tylu sztuk złota!");
            }
            $db -> Execute("INSERT INTO kon (owner) VALUES(".$player -> id.")") or error ("Nie mogę dodać ziemi!");
            $db -> Execute("UPDATE players SET credits=credits-2000 WHERE id=".$player -> id);
            error ("Nauczyłeś się jeździć na koniu. Teraz możesz udać się do <a href=stajnia.php?action=build>Stajni</a> aby zabaczyc konie na sprzedaż.");
        } else {
            if ($player -> credits < $cost1) {
                error ("Nie masz tylu sztuk złota przy sobie!");
            }
            $db -> Execute("UPDATE kon SET build=build+1 WHERE id=".$house -> fields['id']);
            $db -> Execute("UPDATE players SET credits=credits-".$cost1." WHERE id=".$player -> id);
            error ("Po solidnym treningu twój koń zwiększył umięśnienie o 1. <a href=stajnia.php>Wróć</a>");
        }
    }
}

//Warsztat budowlany
if(isset ($_GET['action']) && $_GET['action'] == 'build') {
    $smarty -> assign ("Points", $house -> fields['points']);
    if ($house -> fields['points'] == 0) {
        error ("Nie masz punktów treningowych aby trenować jakiegolwiek konia! <a href=stajnia.php>Wróć</a>");
    }
    if ($house -> fields['build'] == 0) {
        $smarty -> assign ("Buildhouse", "<a href=stajnia.php?action=build&step=new>Kupic Konia</a> - 10 punktów Treningowych - 10000 sztuk złota<br>");
    } else {
        if ($house -> fields['build'] < $house -> fields['size'] && $house -> fields['points'] > 9) {
            $cost = 10000 * $house -> fields['build'];
            //$smarty -> assign ("Buildhouse", "<a href=stajnia.php?action=build&step=add>Trenowanie konia</a> - 10 Treningowych - ".$cost." sztuk złota<br>");
        }
        if ($house -> fields['used'] < $house -> fields['build'] && $house -> fields['points'] > 9) {
            if ($house -> fields['bedroom'] == 'N') {
                $smarty -> assign ("Buildbed", "<a href=stajnia.php?action=build&step=bedroom>Dokupić siodło</a> - 10 punktów Treningowych - 5000 sztuk złota<br>");
            }
            $cost = $house -> fields['wardrobe'] * 10000;
            if ($cost == 0) {
                $cost = 10000;
            }
            $smarty -> assign ("Buildwardrobe", "<a href=stajnia.php?action=build&step=wardrobe>Dostawić szafy na przedmioty</a> - 10 punktów budowlanych - ".$cost." sztuk złota<br>");
        }
        if ($house -> fields['points'] > 0) {
            $smarty -> assign ("Upgrade", "<a href=stajnia.php?action=build&step=upgrade>Wypielengnuj konia</a><br>");
        }
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'new') {
        if (!$house -> fields['id']) {
            error ("Nie masz ziemi aby budować dom!");
        }
        if ($house -> fields['build'] > 0) {
            error ("Masz już konia");
        }
        if ($player -> credits < 10000) {
            error ("Nie masz tyle sztuk złota przy sobie!");
        }
        if ($house -> fields['points'] < 10) {
            error ("Nie masz tyle punktów Treningowych");
        }
        if (isset ($_GET['step2']) && $_GET['step2'] == 'make') {
            $_POST['name'] = strip_tags($_POST['name']);
            $db -> Execute("UPDATE kon SET name='".$_POST['name']."' WHERE id=".$house -> fields['id']);
            $db -> Execute("UPDATE kon SET build=build+1 WHERE id=".$house -> fields['id']);
            $db -> Execute("UPDATE players SET credits=credits-1000 WHERE id=".$player -> id);
            $db -> Execute("UPDATE players SET kon1='Y' WHERE id=".$player -> id);
            $db -> Execute("UPDATE kon SET points=points-10 WHERE id=".$house -> fields['id']);
            error ("Kupiłes pierwszego konia <a href=stajnia.php>Wróć</a>");
        }
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'add') {
        if (!$house -> fields['id']) {
            error ("Nie masz skończonej nauki jazdy, aby kupic konia");
        }
        if ($house -> fields['size'] == $house -> fields['build']) {
            error ("Nie możesz trenowac konia, ponieważ nie posiadasz prawa do jazy na koniu");
        }
        $cost = 1000 * $house -> fields['build'];
        if ($player -> credits < $cost) {
            error ("Nie masz tyle sztuk złota przy sobie!");
        }
        if ($house -> fields['points'] < 10) {
            error ("Nie masz tyle punktów Treningowych!");
        }
        $house -> fields['value'] = $house -> fields['value'] - 10;
        if ($house -> fields['value'] < 1) {
            $house -> fields['value'] = 1;
        }
        $db -> Execute("UPDATE kon SET build=build+1 WHERE id=".$house -> fields['id']);
        $db -> Execute("UPDATE players SET credits=credits-".$cost." WHERE id=".$player -> id);
        $db -> Execute("UPDATE kon SET points=points-10 WHERE id=".$house -> fields['id']);
        $db -> Execute("UPDATE kon SET value=".$house -> fields['value']." WHERE id=".$house -> fields['id']);
        error ("Potrenowałes niece ze swoim koniem, urósł o 1, ale stracił on nieco na wartości. <a href=stajnia.php>Wróć</a>");
    }
   
    if (isset ($_GET['step']) && $_GET['step'] == 'bedroom') {
        if (!$house -> fields['id']) {
            error ("Nie masz konia żeby kupić siodło!");
        }
        if ($house -> fields['used'] == $house -> fields['build']) {
            error ("Nie");
        }
        if ($house -> fields['bedroom'] == 'Y') {
            error ("Nie możesz kupic siodła, poniewasz masz juz jedno!");
        }
        if ($player -> credits < 5000) {
            error ("Nie masz tyle sztuk złota przy sobie!");
        }
        if ($house -> fields['points'] < 10) {
            error ("Nie masz tyle punktów Treningowych!");
        }
        $db -> Execute("UPDATE kon SET bedroom='Y' WHERE id=".$house -> fields['id']);
        $db -> Execute("UPDATE players SET credits=credits-10000 WHERE id=".$player -> id);
        $db -> Execute("UPDATE kon SET points=points-10 WHERE id=".$house -> fields['id']);
        $db -> Execute("UPDATE kon SET used=used+1 WHERE id=".$house -> fields['id']);
        error ("Kupiłeś Siodło. <a href=stajnia.php>Wróć</a>");
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'wardrobe') {
        if (!$house -> fields['id']) {
            error ("Nie masz domu aby wstawić do niego szafy!");
        }
        if ($house -> fields['used'] == $house -> fields['build']) {
            error ("Nie możesz dokupywać nowych rzeczy do domu, ponieważ nie masz wolnego miejsca w nim!");
        }
        $cost = $house -> fields['wardrobe'] * 1000;
        if ($cost == 0) {
            $cost = 1000;
        }
        if ($player -> credits < $cost) {
            error ("Nie masz tyle sztuk złota przy sobie!");
        }
        if ($house -> fields['points'] < 10000) {
            error ("Nie masz tyle punktów budowlanych!");
        }
        $db -> Execute("UPDATE kon SET wardrobe=wardrobe+1 WHERE id=".$house -> fields['id']);
        $db -> Execute("UPDATE players SET credits=credits-".$cost." WHERE id=".$player -> id);
        $db -> Execute("UPDATE kon SET points=points-10 WHERE id=".$house -> fields['id']);
        $db -> Execute("UPDATE kon SET used=used+1 WHERE id=".$house -> fields['id']);
        error ("Dostawiłeś nieco szaf do domu. <a href=house.php>Wróć</a>");
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'upgrade') {
        if (!$house -> fields['id']) {
            error ("Nie masz konia aby go nakarmić!");
        }
        if ($house -> fields['points'] < 1) {
            error ("Nie masz tyle punktów Treningowych!");
        }
        if (isset ($_GET['step2']) && $_GET['step2'] == 'make') {
            if (!ereg("^[1-9][0-9]*$", $_POST['points'])) {
                error ("Zapomnij o tym!");
            }
            if ($_POST['points'] > $house -> fields['points']) {
                error ("Nie masz tyle punktów Treningowych!");
            }
            $cost = 1000 * $_POST['points'];
            if ($player -> credits < $cost) {
                error ("Nie masz tyle sztuk złota przy sobie!");
            }
            $db -> Execute("UPDATE players SET credits=credits-".$cost." WHERE id=".$player -> id);
            $db -> Execute("UPDATE  kon SET points=points-".$_POST['points']." WHERE id=".$house -> fields['id']);
            $db -> Execute("UPDATE kon SET value=value+".$_POST['points']." WHERE id=".$house -> fields['id']);
            error ("Zwiększyłeś wartość swojego Konia. <a href=stajnia.php>Wróć</a>");
        }
    }
}

//lista koni
if (isset ($_GET['action']) && $_GET['action'] == 'list') {
    $houses = $db -> SelectLimit("SELECT * FROM kon WHERE build>0 AND owner>0 ORDER BY build DESC", 50);
    $arrid = array();
    $arrowner = array();
    $arrname = array();
    $arrbuild = array();
    $arrtype = array();
    $arrlocator = array();
    $i = 0;
    while (!$houses -> EOF) {
        $arrid[$i] = $houses -> fields['id'];
        $arrowner[$i] = $houses -> fields['owner'];
        $arrname[$i] = $houses -> fields['name'];
        $arrbuild[$i] = $houses -> fields['build'];
 if ($houses -> fields['locator']) {
     $arrlocator[$i] = "<a href=\"view.php?view=".$houses -> fields['locator']."\">".$houses -> fields['locator']."</a>";
 } else {
     $arrlocator[$i] = 'brak';
 }
        $arrtype[$i] = 'Mały Konik';
        if ($houses -> fields['value'] > 5 && $houses -> fields['build'] > 3) {
            $arrtype[$i] = 'Szkapa';
        }
        if ($houses -> fields['value'] > 20 && $houses -> fields['build'] > 5) {
            $arrtype[$i] = 'Koń ';
        }
        if ($houses -> fields['value'] > 50 && $houses -> fields['build'] > 10) {
            $arrtype[$i] = 'Ogier';
        }
        if ($houses -> fields['value'] > 99 && $houses -> fields['build'] > 20) {
            $arrtype[$i] = 'Biały Koń';
        }
 $houses -> MoveNext();
        $i = $i + 1;
    }
    $houses -> Close();
    $smarty -> assign ( array("Housesname" => $arrname, "Housesid" => $arrid, "Housesowner" => $arrowner, "Housesbuild" => $arrbuild, "Housestype" => $arrtype, "Locator" => $arrlocator));
}

// lista koni na sprzedaż
if (isset ($_GET['action']) && $_GET['action'] == 'rent') {
    $houses = $db -> Execute("SELECT * FROM kon WHERE owner=0 ORDER BY build DESC");
    $arrid = array();
    $arrname = array();
    $arrbuild = array();
    $arrtype = array();
    $arrlink = array();
    $arrcost = array();
    $arrseller = array();
    $i = 0;
    while (!$houses -> EOF) {
        $arrid[$i] = $houses -> fields['id'];
        $arrname[$i] = $houses -> fields['name'];
        $arrbuild[$i] = $houses -> fields['build'];
 $arrcost[$i] = $houses -> fields['cost'];
 $arrseller[$i] = $houses -> fields['seller'];
        $arrtype[$i] = 'Mały Konik';
        if ($houses -> fields['value'] > 5 && $houses -> fields['build'] > 3) {
            $arrtype[$i] = 'Szkapa';
        }
        if ($houses -> fields['value'] > 20 && $houses -> fields['build'] > 5) {
            $arrtype[$i] = 'Koń';
        }
        if ($houses -> fields['value'] > 50 && $houses -> fields['build'] > 10) {
            $arrtype[$i] = 'Ogier';
        }
        if ($houses -> fields['value'] > 99 && $houses -> fields['build'] > 20) {
            $arrtype[$i] = 'Biały Koń';
        }
 if ($player -> id == $houses -> fields['seller']) {
     $arrlink[$i] = "Twoja oferta";
 } elseif ($house -> fields['id']) {
     $arrlink[$i] = "Brak";
 } else {
     $arrlink[$i] = "<a href=\"stajnia.php?action=rent&buy=".$houses -> fields['id']."\">Kup</a>";
 }
 $houses -> MoveNext();
        $i = $i + 1;
    }
    $houses -> Close();
    $smarty -> assign ( array("Housesname" => $arrname, "Housesid" => $arrid, "Housesseller" => $arrseller, "Housesbuild" => $arrbuild, "Housestype" => $arrtype, "Housescost" => $arrcost, "Houseslink" => $arrlink));
    if (isset($_GET['buy'])) {
        if (!ereg("^[1-9][0-9]*$", $_GET['buy'])) {
     error ("Zapomnij o tym!");
 }
 if ($house -> fields['id']) {
     error("Nie możesz kupić Konia, ponieważ posiadasz już jednego!");
 }
 $buy = $db -> Execute("SELECT id, owner, cost, seller FROM houses WHERE id=".$_GET['buy']);
 if (!$buy -> fields['id']) {
     error("Nie ma takiego konia!");
 }
 if ($buy -> fields['owner']) {
     error("Ten koń nie jest na sprzedaż!");
 }
 if ($player -> credits < $buy -> fields['cost']) {
     error("Nie masz tyle sztuk złota przy sobie!");
 }
 $db -> Execute("UPDATE players SET credits=credits-".$buy -> fields['cost']." WHERE id=".$player -> id);
 $db -> Execute("UPDATE players SET bank=bank+".$buy -> fields['cost']." WHERE id=".$buy -> fields['seller']);
 $db -> Execute("UPDATE kon SET cost=0 WHERE id=".$buy -> fields['id']);
 $db -> Execute("UPDATE kon SET seller=0 WHERE id=".$buy -> fields['id']);
 $db -> Execute("UPDATE kon SET owner=".$player -> id." WHERE id=".$buy -> fields['id']);
 $db -> Execute("INSERT INTO log (owner, log, czas) VALUES(".$buy -> fields['seller'].",'<b><a href=view.php?view=".$player -> id.">".$player -> user."</a></b> zaakceptował twoją ofertę za Konia. Dostałeś <b>".$buy -> fields['cost']."</b> sztuk złota do banku.','".$newdate."')") or error("Nie mogę dodać do dziennika.");
 $smarty -> assign("Message", "<br />Kupiłeś Konia.");
 $buy -> Close();
    }
}

// Koń gracza
if (isset ($_GET['action']) && $_GET['action'] == 'my') {
    if (!isset ($_GET['step']) && !isset ($_GET['step2'])) {
        if (!$house -> fields['id']) {
            error ("Nie masz Konia");
        }
        $homename = 'Mały Konik';
        if ($house -> fields['value'] > 5 && $house -> fields['build'] > 3) {
            $homename = 'Szkapa';
        }
        if ($house -> fields['value'] > 20 && $house -> fields['build'] > 5) {
            $homename = 'Koń';
        }
        if ($house -> fields['value'] > 50 && $house -> fields['build'] > 10) {
            $homename = 'Ogier';
        }
        if ($house -> fields['value'] > 99 && $house -> fields['build'] > 20) {
            $homename = 'Biały Koń';
        }
        if ($house -> fields['bedroom'] == 'Y') {
            $smarty -> assign ("Bedroom", "Tak");
        } else {
            $smarty -> assign ("Bedroom", "Nie");
        }
        $unused = $house -> fields['build'] - $house -> fields['used'];
        $amount = $db -> Execute("SELECT amount FROM equipment WHERE owner=".$player -> id." AND status='H'");
        $items = 0;
        while (!$amount -> EOF) {
            $items = $items + $amount -> fields['amount'];
     $amount -> MoveNext();
        }
 $amount -> Close();
        $smarty -> assign ( array("Name" => $house -> fields['name'], "Size" => $house -> fields['build'], "Build" => $house -> fields['value'], "Value" => $house -> fields['value'], "Housename" => $homename, "Unused" => $unused, "Wardrobe" => $house -> fields['wardrobe'], "Items" => $items));
 if ($house -> fields['locator']) {
     $smarty -> assign("Locator", "<a href=\"view.php?view=".$house -> fields['locator']."\">".$house -> fields['locator']."</a>");
 } else {
     $smarty -> assign("Locator", "brak");
 }
        if ($house -> fields['bedroom'] == 'Y') {
            $smarty -> assign ("Bedroomlink", "- <a href=stajnia.php?action=my&step=bedroom>Idź po siodło</a><br>");
        }
 if ($house -> fields['build'] > 3 && $player -> id == $house -> fields['owner']) {
     $smarty -> assign("Locatorlink", "- <a href=\"stajnia.php?action=my&step=locator\">Współwłaściciel</a><br />");
 }
 if ($player -> id == $house -> fields['owner']) {
     $smarty -> assign("Sellhouse", "- <a href=\"stajnia.php?action=my&step=sell\">Wystaw Konia na sprzedaż</a><br />");
 } else {
            $smarty -> assign("Sellhouse", '');
        }
    }
// Wystawianie konia na sprzedaż
    if (isset($_GET['step']) && $_GET['step'] == 'sell') {
        if ($player -> id != $house -> fields['owner']) {
     error ("Tylko właściciel konia może dodawać lub usuwać współWłasncicieli!");
        }
 if (isset($_GET['step2']) && $_GET['step2'] == 'sell') {
     if (!ereg("^[1-9][0-9]*$", $_POST['cost'])) {
         error ("Zapomnij o tym!");
     }
     $db -> Execute("UPDATE kon SET cost=".$_POST['cost']." WHERE id=".$house -> fields['id']);
     $db -> Execute("UPDATE kon SET seller=".$player -> id." WHERE id=".$house -> fields['id']);
     $db -> Execute("UPDATE kon SET owner=0 WHERE id=".$house -> fields['id']);
     $db -> Execute("UPDATE kon SET locator=0 WHERE id=".$house -> fields['id']);
     $smarty -> assign("Message", "Wystawiłeś swojego konia na sprzedaż za ".$_POST['cost']." sztuk złota");
 }
    } 
    if (isset($_GET['step']) && $_GET['step'] == 'locator') {
        if ($player -> id != $house -> fields['owner']) {
     error ("Tylko właściciel konia może dodawać lub usuwać współWłaścicieli!");
 }
        $smarty -> assign("Locid", $house -> fields['locator']);
        if (isset($_GET['step2']) && $_GET['step2'] == 'change') {
     if (!ereg("^[1-9][0-9]*$", $_POST['lid'])) {
         error ("Zapomnij o tym!");
     }
     if ($_POST['loc'] == 'add') {
         if ($house -> fields['locator']) {
      error ("Masz już współWłasciciela");
  }
  $test = $db -> Execute("SELECT id FROM  kon WHERE owner=".$_POST['lid']);
  if ($test -> fields['id']) {
      error ("Ten gracz nie może być współwłascicielam ponieważ posiada własnego konia");
  }
  $test = $db -> Execute("SELECT id FROM kon WHERE locator=".$_POST['lid']);
  if ($test -> fields['id']) {
      error("Ten gracz mieszka już jest WspółWłascicielem");
  }
  $test = $db -> Execute("SELECT id FROM players WHERE id=".$_POST['lid']);
  if (!$test -> fields['id']) {
      error("Nie ma takiego gracza");
  }
  $test -> Close();
  $db -> Execute("UPDATE kon SET locator=".$_POST['lid']." WHERE id=".$house -> fields['id']);
  $smarty -> assign("Message", "Dodałeś współWłasciciela Konia");
     }
     if ($_POST['loc'] == 'delete') {
         if (!$house -> fields['locator']) {
      error ("Nie masz współwłasciciela!");
  }
  if ($_POST['lid'] != $house -> fields['locator']) {
      error ("Ten gracz nie jest twoim współlokatorem");
  }
  $db -> Execute("UPDATE kon SET locator=0 WHERE id=".$house -> fields['id']);
  $smarty -> assign("Message", "Usunąłeś współwłaściciela konia");
     }
 }
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'name') {
        if ($player -> id != $house -> fields['owner']) {
     error ("Tylko właściciel konia może zmieniać jego Imie!");
 }
        if (isset ($_GET['step2']) && $_GET['step2'] == 'change') {
            if (empty ($_POST['name'])) {
                error ("Podaj nowe imie konia!");
            }
            $_POST['name'] = strip_tags($_POST['name']);
            $db -> Execute("UPDATE kon SET name='".$_POST['name']."' WHERE id=".$house -> fields['id']);
            error ("Zmieniłeś imie konia na: ".$_POST['name'].".");
        }
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'bedroom') {
        if ($house -> fields['bedroom'] == 'N') {
            error ("Nie możesz Wyjechac poniewasz niemasz siodła");
        }
        $smarty -> assign ("Id", $player -> id);
        if (isset ($_GET['step2']) && $_GET['step2'] == 'rest') {
            if ($player -> hp == 0) {
                error ("<br /><br />Nie możesz wyjezdzać ponieważ jesteś martwy!");
            } 
     if ($player -> id == $house -> fields['owner']) {
                if ($house -> fields['rest'] == 'Y') {
                    error ("<br /><br />Możesz jeździć tylko raz na reset!");
                }
  $db -> Execute("UPDATE kon SET rest='Y' WHERE id=".$house -> fields['id']);
     } else {
         if ($house -> fields['locrest'] == 'Y') {
      error ("<br /><br />Możesz jeździć tylko raz na reset!");
  }
  $db -> Execute("UPDATE kon SET locrest='Y' WHERE id=".$house -> fields['id']);
     }
            $roll = rand(1,10);
            if ($roll > 5) {
                $gainenergy =  ceil(($player -> max_energy / 100) * $house -> fields['build']);
                $gainhp = ceil(($player -> max_hp / 100) * $house -> fields['size']);
                $cape = $db -> Execute("SELECT power FROM equipment WHERE owner=".$player -> id." AND type='Z' AND status='E'");
                $maxmana = ($player -> inteli + $player -> wisdom);
                $maxmana = $maxmana + (($cape -> fields['power'] / 100) * $maxmana);
  $cape -> Close();
                $gainmana = ceil(($maxmana / 100) * $house -> fields['value']);
                $gainlife = $gainhp + $player -> hp;
                if ($gainlife > $player -> max_hp) {
                    $gainlife = $player -> max_hp;
                }
                $gainmagic = $gainmana + $player -> mana;
                if ($gainmagic > $maxmana) {
                    $gainmagic = $maxmana;
                }
                if ($gainenergy > $player -> max_energy) {
                    $gainenergy = $player -> max_energy;
                }
                $db -> Execute("UPDATE players SET hp=".$gainlife." WHERE id=".$player -> id);
                $db -> Execute("UPDATE players SET energy=energy+".$gainenergy." WHERE id=".$player -> id);
                //$db -> Execute("UPDATE players SET pm=".$gainmagic." WHERE id=".$player -> id);
                error ("<br><br>Jeździłes jakiś czas i odzyskałeś ".$gainenergy." energii oraz ".$gainlife." punktów życia");
            } else {
                error ("<br><br>Próbowałeś nieco odpocząć ale przeszkadzał ci w tym Koń. Niestety nie udało ci się odpocząć");
            }
        }
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'wardrbe') {
        if ($house -> fields['wardrobe'] == 0) {
            error ("Nie możesz składować przedmiotów w domu, ponieważ nie masz szaf!");
        }
        $amount = $db -> Execute("SELECT amount FROM equipment WHERE owner=".$player -> id." AND status='H'");
        $items = 0;
        while (!$amount -> EOF) {
            $items = $items + $amount -> fields['amount'];
     $amount -> MoveNext();
        }
 $amount -> Close();
        $smarty -> assign ("Amount", $items);
        $smarty -> assign ("Wardrobe", $house -> fields['wardrobe']);
        if(isset ($_GET['step2']) && $_GET['step2'] == 'list') {
            $arritem = $db -> Execute("SELECT * FROM equipment WHERE owner=".$player -> id." AND status='H'");
            $arrname = array();
            $arrpower = array();
            $arrdur = array();
            $arrmaxdur = array();
            $arragility = array();
            $arrspeed = array();
            $arramount = array();
            $arrid = array();
            $i = 0;
            while (!$arritem -> EOF) {
                $arrname[$i] = $arritem -> fields['name'];
                $arrdur[$i] = $arritem -> fields['wt'];
                $arrmaxdur[$i] = $arritem -> fields['maxwt'];
                $arrspeed[$i] = $arritem -> fields['szyb'];
                $arramount[$i] = $arritem -> fields['amount'];
                $arrid[$i] = $arritem -> fields['id'];
                $arrpower[$i] = $arritem -> fields['power'];
                if ($arritem -> fields['zr'] < 1) {
             $arragility[$i] = str_replace("-","",$arritem -> fields['zr']);
                } else {
                    $arragility[$i] = "-".$arritem -> fields['zr'];
                }
                if ($arritem -> fields['poison'] > 0) {
                    $arrpower[$i] = $arritem -> fields['power'] + $arritem -> fields['poison'];
                }
  $arritem -> MoveNext();
                $i = $i + 1;
            }
     $arritem -> Close();
            $smarty -> assign ( array("Itemname" => $arrname, "Itemdur" => $arrdur, "Itemmaxdur" => $arrmaxdur, "Itemspeed" => $arrspeed, "Itemamount" => $arramount, "Itemid" => $arrid, "Itempower" => $arrpower, "Itemagility" => $arragility));
        }
        if (isset ($_GET['take'])) {
            if (!isset($_GET['step3'])) {
         $name = $db -> Execute("SELECT * FROM equipment WHERE id=".$_GET['take']);
         $smarty -> assign ( array("Id" => $_GET['take'], "Amount" => $name -> fields['amount'], "Name" => $name -> fields['name']));
  $name -> Close();
            }
            if (isset($_GET['step3']) && $_GET['step3'] == 'add') {
                if (!ereg("^[1-9][0-9]*$", $_POST['amount'])) {
             error ("Zapomnij o tym<br>");
         }
         $zbroj = $db -> Execute("SELECT * FROM equipment WHERE id=".$_GET['take']);
         if ($zbroj -> fields['amount'] < $_POST['amount']) {
             error ("Nie masz tylu przedmiotów w szafach!");
         }
                $test = $db -> Execute("SELECT id FROM equipment WHERE name='".$zbroj -> fields['name']."' AND owner=".$player -> id." AND wt=".$zbroj -> fields['wt']." AND type='".$zbroj -> fields['type']."' AND power=".$zbroj -> fields['power']." AND szyb=".$zbroj -> fields['szyb']." AND zr=".$zbroj -> fields['zr']." AND maxwt=".$zbroj -> fields['maxwt']." AND poison=".$zbroj -> fields['poison']." AND status='U'");
                if (!$test -> fields['id']) {
                    $db -> Execute("INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'".$zbroj -> fields['name']."',".$zbroj -> fields['power'].",'".$zbroj -> fields['type']."',".$zbroj -> fields['cost'].",".$zbroj -> fields['zr'].",".$zbroj -> fields['wt'].",".$zbroj -> fields['minlev'].",".$zbroj -> fields['maxwt'].",".$_POST['amount'].",'".$zbroj -> fields['magic']."',".$zbroj -> fields['poison'].",".$zbroj -> fields['szyb'].",'".$zbroj -> fields['twohand']."')") or error("nie mogę dodać!");
                } else {
                    $db -> Execute("UPDATE equipment SET amount=amount+".$_POST['amount']." WHERE id=".$test -> fields['id']);
                }
  $test -> Close();
                if ($_POST['amount'] < $zbroj -> fields['amount']) {
                    $db -> Execute("UPDATE equipment SET amount=amount-".$_POST['amount']." WHERE id=".$zbroj -> fields['id']);
                } else {
                    $db -> Execute("DELETE FROM equipment WHERE id=".$zbroj -> fields['id']);
                }
         error ("Wziąłeś z domu ".$_POST['amount']." sztuk(i) ".$zbroj -> fields['name']);
            }
        }
        if (isset ($_GET['step2']) && $_GET['step2'] == 'add') {
            $arritem = $db -> Execute("SELECT * FROM equipment WHERE status='U' AND owner=".$player -> id);
            $arrname = array();
            $arramount = array();
            $arrid = array();
            $i = 0;
            while (!$arritem -> EOF) {
                $arrname[$i] = $arritem -> fields['name'];
                $arramount[$i] = $arritem -> fields['amount'];
                $arrid[$i] = $arritem -> fields['id'];
  $arritem -> MoveNext();
                $i = $i + 1;
            }
     $arritem -> Close();
            $smarty -> assign ( array("Itemname1" => $arrname, "Itemamount1" => $arramount, "Itemid1" => $arrid));
            if (isset ($_GET['step3']) && $_GET['step3'] == 'add') {
                if (!isset($_POST['przedmiot'])) {
                    error("Podaj który przedmiot chcesz wziąść!");
                }
         if (!ereg("^[1-9][0-9]*$", $_POST['przedmiot']) || !ereg("^[1-9][0-9]*$", $_POST['amount'])) {
             error ("Zapomnij o tym!");
         }
         $przed = $db -> Execute("SELECT * FROM equipment WHERE id=".$_POST['przedmiot']);
         if (!$przed -> fields['id']) {
             error ("Zapomnij o tym!");
         }
                if ($przed -> fields['amount'] < $_POST['amount']) {
                    error ("Nie masz tyle przedmiotów tego typu w domu!");
                }
                $amount = ($house -> fields['wardrobe'] * 100) - $items;
                if ($amount < $_POST['amount']) {
                    error ("Nie masz tyle miejsca w szafach!");
                }
                $test = $db -> Execute("SELECT id FROM equipment WHERE name='".$przed -> fields['name']."' AND owner=".$player -> id." AND wt=".$przed -> fields['wt']." AND type='".$przed -> fields['type']."' AND power=".$przed -> fields['power']." AND szyb=".$przed -> fields['szyb']." AND zr=".$przed -> fields['zr']." AND maxwt=".$przed -> fields['maxwt']." AND poison=".$przed -> fields['poison']." AND status='H'");
                if (!$test -> fields['id']) {
                    $db -> Execute("INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand, status) VALUES(".$player -> id.",'".$przed -> fields['name']."',".$przed -> fields['power'].",'".$przed -> fields['type']."',".$przed -> fields['cost'].",".$przed -> fields['zr'].",".$przed -> fields['wt'].",".$przed -> fields['minlev'].",".$przed -> fields['maxwt'].",".$_POST['amount'].",'".$przed -> fields['magic']."',".$przed -> fields['poison'].",".$przed -> fields['szyb'].",'".$przed -> fields['twohand']."','H')") or error("nie mogę dodać!");
                } else {
                    $db -> Execute("UPDATE equipment SET amount=amount+".$_POST['amount']." WHERE id=".$test -> fields['id']);
                }
  $test -> Close();
                if ($_POST['amount'] < $przed -> fields['amount']) {
                    $db -> Execute("UPDATE equipment SET amount=amount-".$_POST['amount']." WHERE id=".$przed -> fields['id']);
                } else {
                    $db -> Execute("DELETE FROM equipment WHERE id=".$przed -> fields['id']);
                }
         error ("Schowałeś <b>".$_POST['amount']." sztuk(i) ".$przed -> fields['name']."</b> w domu.");
            }
        }
    }
}

// inicjalizacja zmiennych
if (!isset($_GET['action'])) {
    $_GET['action'] = '';
}
if (!isset($_GET['step'])) {
    $_GET['step'] = '';
}
if (!isset($_GET['step2'])) {
    $_GET['step2'] = '';
}
if (!isset($_GET['take'])) {
    $_GET['take'] = '';
}
if (!isset($_GET['step3'])) {
    $_GET['step3'] = '';
}

// przypisanie zmiennych oraz wyświetlenie strony
$smarty -> assign ( array("Action" => $_GET['action'], "Houseid" => $house -> fields['id'], "Step" => $_GET['step'], "Step2" => $_GET['step2'], "Take" => $_GET['take'], "Step3" => $_GET['step3'], "Owner" => $house -> fields['owner']));

$smarty -> display ('stajnia.tpl');

require_once("includes/foot.php");
?>
