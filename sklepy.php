<?php

/**

 *   Funkcje pliku:

 *   Rynek z przedmiotami

 *

 *   @name                 : sklepy.php                            

 *   @copyright            : (C) 2004-2005 Vallheru Team based on Gamers-Fusion ver 2.5

 *   @author               : visjusz <visjusz@o2.pl>

 *   @version              : 0.7 beta

 *   @since                : 06.01.2005

 *

 */



//

//

//       This program is free software; you can redistribute it and/or modify

//   it under the terms of the GNU General Public License as published by

//   the Free Software Foundation; either version 2 of the License, or

//   (at your option) any later version.

//

//   This program is distributed in the hope that it will be useful,

//   but WITHOUT ANY WARRANTY; without even the implied warranty of

//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the

//   GNU General Public License for more details.

//

//   You should have received a copy of the GNU General Public License

//   along with this program; if not, write to the Free Software

//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

//

// 



$title = "Sklepy mieszkańców";

require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}

if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
if ($player -> location != 'Altara' && $player -> location != 'Ardulith') {

	error ("Zapomnij o tym");

}

// przypisanie zmiennej

$smarty -> assign(array("Message" => '', "Previous" => '', "Next" => '', "Owner" => $_GET['owner']));



if (isset ($_GET['view']) && $_GET['view'] == 'market') {

    if (empty($_POST['szukany'])) {

	$msel = $db -> Execute("SELECT id FROM equipment WHERE status='Q' AND owner='".$_GET['owner']."'");

    } else {

	$_POST['szukany'] = strip_tags($_POST['szukany']);

	$msel = $db -> Execute("SELECT id FROM equipment WHERE status='Q' AND name='".$_POST['szukany']."' AND owner='".$_GET['owner']."'");

    }

    $przed = $msel -> RecordCount();

    $msel -> Close();

    if ($przed == 0) {

	error ("Nie ma jeszcze ofert w tym sklepie! <a href=sklepy.php>Wróć</a>");

    }

    

$sklep = $db -> Execute("SELECT id FROM sklepy WHERE owner=".$_GET['owner']);

// przypisanie zmiennej

$smarty -> assign("Opis", $sklep -> fields['opis']);



//wyświetl

    if ($_GET['limit'] < $przed) {

	if (empty($_POST['szukany'])) {

	    $pm = $db -> SelectLimit("SELECT * FROM equipment WHERE status='Q' AND owner='".$_GET['owner']."' ORDER BY ".$_GET['lista']." DESC", 30, $_GET['limit']);

	} else {

	    $pm = $db -> SelectLimit("SELECT * FROM equipment WHERE status='Q' AND owner='".$_GET['owner']."' AND name='".$_POST['szukany']."' ORDER BY ".$_GET['lista']." DESC", 30, $_GET['limit']);

	}

	$arrname = array();

	$arrpower = array();

	$arrdur = array();

	$arrmaxdur = array();

	$arrspeed = array();

	$arragility = array();

	$arrcost = array();

	$arrowner = array();

	$arraction = array();

	$arramount = array();

	$arrlevel = array();

	$arrseller = array();

	$i = 0;

	while (!$pm -> EOF) {

            if ($pm -> fields['zr'] <= 0) {

                $pm -> fields['zr'] = str_replace("-","",$pm -> fields['zr']);

                $agility = "+".$pm -> fields['zr'];

            } elseif ($pm -> fields['zr'] > 0) {

                $agility = "-".$pm -> fields['zr'];

            }

            if ($pm -> fields['szyb'] > 0) {

                $speed = "+".$pm -> fields['szyb'];

            } else {

                $speed = 0;

            }

            $arrname[$i] = $pm -> fields['name'];

            $arrpower[$i] = $pm -> fields['power'];

            $arrdur[$i] =  $pm -> fields['wt'];

            $arrmaxdur[$i] = $pm -> fields['maxwt'];

            $arrspeed[$i] = $speed;

            $arragility[$i] = $agility;

            $arrcost[$i] = $pm -> fields['cost'];

            $arrowner[$i] = $pm -> fields['owner'];

            $arramount[$i] = $pm -> fields['amount'];

	    $arrlevel[$i] = $pm -> fields['minlev'];

	    $seller = $db -> Execute("SELECT user FROM players WHERE id=".$pm -> fields['owner']);

	    $arrseller[$i] = $seller -> fields['user'];

	    $seller -> Close();

	    if ($player -> id == $pm -> fields['owner']) {

	        $arraction[$i] = "<td><a href=sklepy.php?wyc=".$pm -> fields['id'].">Wycofaj</a></td></tr>";

	    } else {

	        $arraction[$i] = "<td><a href=sklepy.php?buy=".$pm -> fields['id'].">Kup</a></td></tr>";

	    }

	    $pm -> MoveNext();

	    $i = $i + 1;

	}

	$pm -> Close();

	$smarty -> assign ( array("Name" => $arrname, "Power" => $arrpower, "Cost" => $arrcost, "Owner" => $arrowner, "Action" => $arraction, "Maxdur" => $arrmaxdur, "Durability" => $arrdur, "Speed" => $arrspeed, "Agility" => $arragility, "Amount" => $arramount, "Minlev" => $arrlevel, "Seller" => $arrseller));

	if (!isset($_POST['szukany'])) {

	    $_POST['szukany'] = '';

	}

	if ($_GET['limit'] >= 30) {

	    $lim = $_GET['limit'] - 30;

	    $smarty -> assign ("Previous", "<form method=\"post\" action=\"sklepy.php?view=market&limit=".$lim."&lista=".$_GET['lista']."&owner=".$_GET['owner']."\"><input type=\"hidden\" name=\"szukany\" value=\"".$_POST['szukany']."\"><input type=\"submit\" value=\"Poprzednie\"></form> ");

	}

	$_GET['limit'] = $_GET['limit'] + 30;

	if ($przed > 30 && $_GET['limit'] < $przed) {

	    $smarty -> assign ("Next", " <form method=\"post\" action=\"sklepy.php?view=market&limit=".$_GET['limit']."&lista=".$_GET['lista']."&owner=".$_GET['owner']."\"><input type=\"hidden\" name=\"szukany\" value=\"".$_POST['szukany']."\"><input type=\"submit\" value=\"Następne\"></form>");

	}

    }

}

//dodaj

if (isset ($_GET['view']) && $_GET['view'] == 'add') {

    	$query = $db -> Execute("SELECT id FROM sklepy WHERE owner=".$player -> id);

       	$test = $query -> RecordCount();

	$query -> Close();

	if ($test == 0) {

	    error ("Nie posiadasz sklepu!");

	}

	

    $rzecz = $db -> Execute("SELECT id, name, amount FROM equipment WHERE status='U' AND owner=".$player -> id);

    $sklep = $db -> Execute("SELECT * FROM sklepy WHERE owner=".$player -> id);

    

    $arrname = array();

    $arrid = array(0);

    $arramount = array();

    $i = 0;

    while (!$rzecz -> EOF) {

        $arrname[$i] = $rzecz -> fields['name'];

        $arrid[$i] = $rzecz -> fields['id'];

        $arramount[$i] = $rzecz -> fields['amount'];

	$rzecz -> MoveNext();

        $i = $i + 1;

    }

    $rzecz -> Close();

    if (!$arrid[0])

    {

        error("Nie masz przedmiotów na sprzedaż!");

    }

    $smarty -> assign ( array ("Name" => $arrname, "Itemid" => $arrid, "Amount" => $arramount, "Opis" => $sklep -> fields['opis']));

    if (isset ($_GET['step']) && $_GET['step'] == 'add') {

        if (!isset($_POST['cost'])) 

        {

            error("Podaj cenę");

        }

	if (!ereg("^[1-9][0-9]*$", $_POST['cost'])) {

	    error ("Podaj cenę");

	}

	if (!ereg("^[1-9][0-9]*$", $_POST['przedmiot']) || !ereg("^[1-9][0-9]*$", $_POST['amount'])) {

	    error ("Zapomnij o tym");

	}

	$query = $db -> Execute("SELECT id FROM equipment WHERE owner=".$player -> id." AND status='Q'");

       	$test = $query -> RecordCount();

	$query -> Close();

	if ($test >= $sklep -> fields['ofert']) {

	    error ("Możesz dać na rynku maksymalnie ".$sklep -> fields['ofert']." ofert!");

	}

	$item = $db -> Execute("SELECT * FROM equipment WHERE id=".$_POST['przedmiot']) or error("Błąd odczytu!");

	if ($item -> fields['amount'] < $_POST['amount']) {

	    error ("Nie masz tyle sztuk ".$item -> fields['name'].". <a href=\"sklepy.php\">Wróć</a>");

	}

	$amount = $item -> fields['amount'] - $_POST['amount'];

        if ($amount > 0) {

            $db -> Execute("UPDATE equipment SET amount=".$amount." where id=".$item -> fields['id']);

        } else {

            $db -> Execute("DELETE FROM equipment WHERE id=".$item -> fields['id']);

        }

        $db -> Execute("INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, status, szyb, twohand, wzmocnienie, ulepszeniee) VALUES(".$player -> id.",'".$item -> fields['name']."',".$item -> fields['power'].",'".$item -> fields['type']."',".$_POST['cost'].",".$item -> fields['zr'].",".$item -> fields['wt'].",".$item -> fields['minlev'].",".$item -> fields['maxwt'].",".$_POST['amount'].",'".$item -> fields['magic']."',".$item -> fields['poison'].",'Q',".$item -> fields['szyb'].",'".$item -> fields['twohand']."','".$item->fields['wzmocnienie']."', ".$item->fields['ulepszeniee'].")") or error("nie mogę dodać!");

	$smarty -> assign("Message", "Dodałe <b>".$_POST['amount']." sztuk ".$item -> fields['name']."</b> do swojego sklepu za <b>".$_POST['cost']."</b> sztuk złota. <a href=\"sklepy.php?view=add\">Odwież</a>");

    }

} elseif (isset($_GET['wyc'])) {

    if (!ereg("^[1-9][0-9]*$", $_GET['wyc'])) {

	error ("Zapomnij o tym.");

    }

    $dwyc = $db -> Execute("SELECT * FROM equipment WHERE id=".$_GET['wyc']);

    if ($dwyc -> fields['owner'] != $player -> id) {

	error ("Nie możesz wycofać cudzych ofert!");

    }

    $test = $db -> Execute("SELECT id FROM equipment WHERE name='".$dwyc -> fields['name']."' AND wt=".$dwyc -> fields['wt']." AND type='".$dwyc -> fields['type']."' AND status='Q' AND owner=".$player -> id." AND power=".$dwyc -> fields['power']." AND zr=".$dwyc -> fields['zr']." AND szyb=".$dwyc -> fields['szyb']." AND maxwt=".$dwyc -> fields['maxwt']." AND poison=".$dwyc -> fields['poison']." AND wzmocnienie='".$dwyc->fields['wzmocnienie']."' AND ulepszeniee=".$dwyc->fields['ulepszeniee']." AND cost=1");

    if (!$test -> fields['id']) {

        $db -> Execute("INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand, wzmocnienie, ulepszeniee) VALUES(".$player -> id.",'".$dwyc -> fields['name']."',".$dwyc -> fields['power'].",'".$dwyc -> fields['type']."',1,".$dwyc -> fields['zr'].",".$dwyc -> fields['wt'].",".$dwyc -> fields['minlev'].",".$dwyc -> fields['maxwt'].",".$dwyc -> fields['amount'].",'".$dwyc -> fields['magic']."',".$dwyc -> fields['poison'].",".$dwyc -> fields['szyb'].",'".$dwyc -> fields['twohand']."','".$dwyc->fields['wzmocnienie']."',".$dwyc->fields['ulepszeniee'].")") or error("nie mogę dodać!");

    } else {

        $db -> Execute("UPDATE equipment SET amount=amount+".$dwyc -> fields['amount']." WHERE id=".$test -> fields['id']);

    }

    $test -> Close();

    $db -> Execute("DELETE FROM equipment WHERE id=".$dwyc -> fields['id']);

    $smarty -> assign("Message","Usunąłe swoją ofertę i twój przedmiot wrócił do ciebie. (<A href=sklepy.php>wróć</a>)");

} elseif (isset ($_GET['view']) && $_GET['view'] == 'del') 

{

    $objArm = $db -> Execute("SELECT * FROM equipment WHERE owner=".$player -> id." AND status='Q' GROUP BY name, power, zr, wt, szyb, maxwt, magic, poison");

    while (!$objArm -> EOF)

    {

        $intTest = $db -> Execute("SELECT id FROM equipment WHERE name='".$objArm -> fields['name']."' AND wt=".$objArm -> fields['wt']." AND type='".$objArm -> fields['type']."' AND status='Q' AND owner=".$player -> id." AND power=".$objArm -> fields['power']." AND zr=".$objArm -> fields['zr']." AND szyb=".$objArm -> fields['szyb']." AND maxwt=".$objArm -> fields['maxwt']." AND poison=".$objArm -> fields['poison']." AND cost=1");

        if (!$intTest -> fields['id']) 

        {

            $db -> Execute("INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand, wzmocnienie, ulepszeniee) VALUES(".$player -> id.",'".$objArm -> fields['name']."',".$objArm -> fields['power'].",'".$objArm -> fields['type']."',1,".$objArm -> fields['zr'].",".$objArm -> fields['wt'].",".$objArm -> fields['minlev'].",".$objArm -> fields['maxwt'].",".$objArm -> fields['amount'].",'".$objArm -> fields['magic']."',".$objArm -> fields['poison'].",".$objArm -> fields['szyb'].",'".$objArm -> fields['twohand']."','".$objArm->fields['wzmocnienie'].",".$objArm->fields['ulepszeniee'].")") or error("nie mogę dodać!");

        } 

            else 

        {

            $db -> Execute("UPDATE equipment SET amount=amount+".$objArm -> fields['amount']." WHERE id=".$intTest -> fields['id']);

        }

        $intTest -> Close();

        $objArm -> MoveNext();

    } 

    $db -> Execute("DELETE FROM equipment WHERE status='Q' AND owner=".$player -> id);

    $smarty -> assign("Message","Usunąłe wszystkie swoje oferty i twoje przedmioty wróciły do ciebie. (<A href=sklepy.php?view=market&lista=id&limit=0&owner=".$player -> id.">wróć</a>)");

} elseif (isset($_GET['buy'])) {

//kup

    if (!ereg("^[1-9][0-9]*$", $_GET['buy'])) {

	error ("Zapomnij o tym.");

    }

    $buy = $db -> Execute("SELECT * FROM equipment WHERE id=".$_GET['buy']);

    if (!$buy -> fields['id']) {

	error ("Nie ma ofert. (<a href=sklepy.php>wróć</a>)");

    }



    if ($buy -> fields['zr'] <= 0) {

        $buy -> fields['zr'] = str_replace("-","",$buy -> fields['zr']);

        $agility = "+".$buy -> fields['zr'];

    } elseif ($buy -> fields['zr'] > 0) {

        $agility = "-".$buy -> fields['zr'];

    }

    if ($buy -> fields['szyb'] > 0) {

        $speed = "+".$buy -> fields['szyb'];

    } else {

        $speed = 0;

    }

    $seller = $db -> Execute("SELECT user FROM players WHERE id=".$buy -> fields['owner']);    

    $smarty -> assign( array("Name" => $buy -> fields['name'], "Itemid" => $buy -> fields['id'], "Amount1" => $buy -> fields['amount'], "Cost" => $buy -> fields['cost'], "Seller" => $seller -> fields['user'], "Sid" => $buy -> fields['owner'], "Power" => $buy -> fields['power'], "Dur" => $buy -> fields['wt'], "MaxDur" => $buy -> fields['maxwt'], "Type" => $buy -> fields['type'], "Agi" => $agility, "Speed" => $speed));

    $buy -> Close();

    $seller -> Close();

    if (isset($_GET['step']) && $_GET['step'] == 'buy') {

        if (!isset($_POST['amount'])) {

            error("Podaj ile chcesz kupić!");

        }

        if (!ereg("^[1-9][0-9]*$", $_POST['amount'])) {

	    error ("Zapomnij o tym.");

        }

        $buy = $db -> Execute("SELECT * FROM equipment WHERE id=".$_GET['buy']);

	if ($_POST['amount'] > $buy -> fields['amount']) {

	    error("Nie ma tyle ".$buy -> fields['name']." na rynku. <a href=\"sklepy.php\">Wróć</a>");

	}

	$price = $_POST['amount'] * $buy -> fields['cost'];

	if ($price > $player -> credits) {

	    error ("Nie masz tyle sztuk złota przy sobie. (<a href=sklepy.php>wróć</a>)");

	}

        $test = $db -> Execute("SELECT id FROM equipment WHERE name='".$buy -> fields['name']."' AND wt=".$buy -> fields['wt']." AND type='".$buy -> fields['type']."' AND status='Q' AND owner=".$player -> id." AND power=".$buy -> fields['power']." AND zr=".$buy -> fields['zr']." AND szyb=".$buy -> fields['szyb']." AND maxwt=".$buy -> fields['maxwt']." AND poison=".$buy -> fields['poison']." AND cost=1");

        if (!$test -> fields['id']) {

            $db -> Execute("INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand, wzmocnienie, ulepszeniee) VALUES(".$player -> id.",'".$buy -> fields['name']."',".$buy -> fields['power'].",'".$buy -> fields['type']."',1,".$buy -> fields['zr'].",".$buy -> fields['wt'].",".$buy -> fields['minlev'].",".$buy -> fields['maxwt'].",".$_POST['amount'].",'".$buy -> fields['magic']."',".$buy -> fields['poison'].",".$buy -> fields['szyb'].",'".$buy -> fields['twohand']."', '".$buy->fields['wzmocnienie']."',".$buy->fields['ulepszeniee'].")") or error("nie mogę dodać!");

        } else {

            $db -> Execute("UPDATE equipment SET amount=amount+".$_POST['amount']." WHERE id=".$test -> fields['id']);

        }

        $test -> Close();

	if ($_POST['amount'] == $buy -> fields['amount']) {

            $db -> Execute("DELETE FROM equipment WHERE id=".$buy -> fields['id']);

	} else {

	    $db -> Execute("UPDATE equipment SET amount=amount-".$_POST['amount']." WHERE id=".$buy -> fields['id']);

	}

        $db -> Execute("UPDATE players SET bank=bank+".$price." WHERE id=".$buy -> fields['owner']);

        $db -> Execute("UPDATE players SET credits=credits-".$price." WHERE id=".$player -> id);

        $db -> Execute("INSERT INTO log (owner, log, czas) VALUES(".$buy -> fields['owner'].",'<b><a href=view.php?view=".$player -> id.">".$player -> user."</a></b> zaakceptował twoją ofertę za <b>".$_POST['amount']." sztuki ".$buy -> fields['name']."</b>. Dostałe <b>".$price."</b> sztuk złota do banku.','".$newdate."')") or error("Nie mogę dodać do dziennika.");

        $smarty -> assign("Message", "<br />Kupiłeś <b>".$_POST['amount']." sztuk przedmiotu: ".$buy -> fields['name']."</b> za <b>".$price."</b> sztuk złota.");

    }

} elseif (isset($_GET['view']) && $_GET['view'] == 'all') {

    $oferts = $db -> Execute("SELECT name FROM equipment WHERE status='Q' AND owner='".$_GET['owner']."' GROUP BY name");

    $arrname = array();

    $arramount = array();

    $i = 0;

    while (!$oferts -> EOF) {

        $arrname[$i] = $oferts -> fields['name'];

	$arramount[$i] = 0;

	$query = $db -> Execute("SELECT id FROM equipment WHERE status='Q' AND owner='".$_GET['owner']."' AND name='".$arrname[$i]."'");

	while (!$query -> EOF) {

	    $arramount[$i] = $arramount[$i] + 1;

	    $query -> MoveNext();

	}

	$query -> Close();

	$oferts -> MoveNext();

	$i = $i + 1;

    }

    $oferts -> Close();

    $smarty -> assign( array("Name" => $arrname, "Amount" => $arramount, "Message" => "<br />(<a href=\"sklepy.php\">Wróć</a>)"));

    } elseif ($_GET['view'] == 'kup') {

    if ($player -> bank < 50000 || $player -> platinum < 100){

    error("Nie masz tyle pieniędzy w banku lub brakuje ci mithrilu!");

    }

    $db -> Execute("INSERT INTO sklepy (id, owner, opis, ofert) VALUES('', ".$player -> id.", '".$_POST['opis']."', 50)");

    $db -> Execute("UPDATE players SET bank=bank-50000, platinum=platinum-100 WHERE id=".$player -> id);

    error("Sklep został zakupiony");

} else {    

$sklepylist = $db -> Execute("SELECT * FROM sklepy ORDER BY owner");

$arrsklepy = array();

$arrowner= array();

$arropissklepu=array();

$arroferty=array();

    $i = 0;

    while (!$sklepylist -> EOF) {

        $arrsklepy[$i] = $sklepylist -> fields['opis'];

		$arrowner[$i] = $sklepylist -> fields['owner'];

		$arropissklepu[$i] = $sklepylist -> fields['opislep'];

		$msel = $db -> Execute("SELECT id FROM equipment WHERE status='Q' AND owner='".$sklepylist->fields['owner']."'");

        $arroferty[$i]= $msel -> RecordCount();

		$i = $i + 1;

        $sklepylist -> MoveNext();        

    }

    $sklepylist -> Close();

        $query = $db -> Execute("SELECT id FROM sklepy WHERE owner=".$player -> id);

       	$test = $query -> RecordCount();

	$query -> Close();

	if ($test == 0) {

	    $smarty->assign("Sklep", 'N');  

	}else{

	$smarty->assign("Sklep", 'Y');

	}

    $smarty->assign("Sklepy", $arrsklepy);

	$smarty->assign("Owner", $arrowner);

	$smarty->assign("Opis", $arropissklepu);

	$smarty->assign("Oferty", $arroferty);



}

if (isset($_GET['view']) and $_GET['view']=="zmien")

{

	$opis=addslashes($_POST['opis']);

	$db->Execute("UPDATE sklepy SET opislep='".$opis."' WHERE owner=".$player->id);

	error('Zmieniłeś opis sklepu.<a href="sklepy.php">(Wróć)</a>');

}

//inicjalizacja zmiennych

if (!isset($_GET['view'])) {

    $_GET['view'] = '';

}

if (!isset($_GET['wyc'])) {

    $_GET['wyc'] = '';

}

if (!isset($_GET['buy'])) {

    $_GET['buy'] = '';

}



// przypisanie zmiennych oraz wywietlenie strony

$smarty -> assign( array("View" => $_GET['view'], "Remowe" => $_GET['wyc'], "Buy" => $_GET['buy']));

$smarty -> display ('sklepy.tpl');



require_once("includes/foot.php"); 

?>

