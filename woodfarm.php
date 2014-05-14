<?php

$title = "Ogród";
$title1 = "Ogród";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
$test = $db -> Execute("SELECT drwalnictwo FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$drwalnictwo = $test -> fields['drwalnictwo'];
$smarty -> assign(array("drwalnictwo" => $drwalnictwo));

$farm = $db -> Execute("SELECT * FROM woodfarms WHERE owner=".$player -> id);
if (!$farm -> fields['id']) {
    $smarty -> assign ("Empty", "Y");
} else {
    $smarty -> assign("Empty", '');
}

if (isset($_GET['answer']) && $_GET['answer'] == 'yes') {
    if ($player -> platinum < 250) {
	error ("Nie masz wystarczająco dużo sztuk mithrilu.");
    } else {
	$db -> Execute("UPDATE players SET platinum=platinum-250 WHERE id=".$player -> id);
        $db -> Execute("INSERT INTO woodfarms (owner) VALUES(".$player -> id.")") or error("Nie mogę dodać farmy drewna");
	error ("Kupiłeś swój pierwszy ogród! Kliknij <a href=woodfarm.php>tutaj</a>.");
    }
}

// menu ogrodu
$farms = $db -> Execute("SELECT * FROM woodfarm WHERE owner=".$player -> id);
if (isset ($_GET['view']) && $_GET['view'] == 'stats') {
    $smarty -> assign ( array("Amount" => $farm -> fields['amount'], "Used" => $farm -> fields['used']));
    if (!$farms -> fields['id']) {
        $smarty -> assign ("Herbs", "Nie masz zasianych drzewek<br>");
    } else {
        $arrname = array();
        $arramount = array();
        $arrage = array();
        $i = 0;
        while (!$farms -> EOF) {
            $arrname[$i] = $farms -> fields['name'];
            $arramount[$i] = $farms -> fields['amount'];
            $arrage[$i] = $farms -> fields['age'];
	    $farms -> MoveNext();
            $i = $i + 1;
        }
        $smarty -> assign ( array("Herbname" => $arrname, "Herbamout" => $arramount, "Herbage" => $arrage, "Herbs" => ''));
    }
}
$farms -> Close();


//kupowanie nowego obszaru ogrody
if (isset ($_GET['view']) && $_GET['view'] == 'shop') {
    $cost = ($farm -> fields['amount'] * 10000);
    $smarty -> assign ("Cost", $cost);
    if (isset($_GET['buy']) && $_GET['buy'] == 'land') {
	if ($_GET['buy'] != 'land') {
	    error ("Zapomnij o tym");
	}
	if ($player -> credits >= $cost) {
	    $db -> Execute("UPDATE woodfarms SET amount=amount+1 WHERE owner=".$player -> id);
	    $db -> Execute("UPDATE players SET credits=credits-".$cost." WHERE id=".$player -> id);
	    error ("Kupiłeś dodatkowy obszar dla swojego ogrodu. (<a href=woodfarm.php?view=shop>Odśwież</a>)");
	} else {
	    error ("Nie stać cię na to!");
        }
    }
}


// Sadzenie drzewek
if (isset ($_GET['view']) && $_GET['view'] == 'add') {
    $herbs = $db -> Execute("SELECT drzewka FROM players WHERE id=".$player -> id);
    $options = '';
    if ($herbs -> fields['drzewka']) {
        $options = $options."<option value=drzewka>Drzewka ilość: ".$herbs -> fields['drzewka']."</option>";
    }

    $smarty -> assign ("Options", $options);
    if (isset ($_GET['step']) && $_GET['step'] == 'add') {
        if (!isset($_POST['herb'])) {
            error("Ile drzewek chcesz posadzić?");
        }
         if ($_POST['herb'] > 50) {
            error ("Na jednym obszarze możesz zasadzić maksymalnie 50 drzewek");
        }
        
       if ($_POST['herb'] > $herbs -> fields['drzewka']) {
            error ("Nie masz tyle drzewek");
        }
        if (!ereg("^[1-9][0-9]*$", $_POST['amount'])) {
            error ("Zapomnij o tym!");
        }
        $unused = $farm -> fields['amount'] - $farm -> fields['used'];
        if ($_POST['amount'] > $unused) {
            error ("Nie masz miejsca na więcej dzewek! Dokup więcej obszarów!");
        }
		$name='drzewka';
        $have = $db -> Execute("SELECT id FROM woodfarm WHERE owner=".$player -> id." AND name='drzewka' AND age=0");
        if (!$have -> fields['id']) {
            $db -> Execute("INSERT INTO woodfarm (owner, name, amount) VALUES(?,?,?)",array($player->id, $name, $_POST['herb'])) or error ("Nie mogę posadzić drzewek!");
        } else {
            $db -> Execute("UPDATE woodfarm SET amount=amount+".$_POST['herb']." WHERE id=".$have -> fields['id']);
        }
	      $have -> Close();
        $db -> Execute("UPDATE woodfarms SET used=used+1 WHERE owner=".$player -> id);
        $db -> Execute("UPDATE players SET drzewka=drzewka-".$_POST['herb']." WHERE id=".$player -> id);
        error ("Zasadziłeś ".$_POST['amount']." obszar(ów) ogrodu drzewkami w liczbie: ".$_POST['herb']);
    }
}

// zbieranie drewna

if (isset ($_GET['view']) && $_GET['view'] == 'take') {
    $chop = $db -> Execute("SELECT * FROM woodfarm WHERE owner=".$player -> id." AND age>4");
    if (!$chop -> fields['id']) {
        error ("Nie masz drzew do ścięcia!");
    }
	$amount1=0;
	$amount2=0;
	$amount3=0;
	$amount4=0;
	$amount=0;
    $text = '';
    while (!$chop -> EOF) {
        require_once('includes/abilitybonus.php');
        $fltAbility = abilitybonus('lumberjack');
		for ($i=0; $i<$chop ->fields['amount']; $i++)
		{
			$amount1 += max(1, ceil(((rand(1, 15) * 2 / 2) * (1 + ($fltAbility+$ability+$drwalnictwo) / 25)) - 2));
			$amount2 += max(1, ceil(((rand(1, 15) * 2 / 2) * (1 + ($fltAbility+$ability+$drwalnictwo) / 25)) - 2));
			$amount3 += max(1, ceil(((rand(1, 15) * 2 / 2) * (1 + ($fltAbility+$ability+$drwalnictwo) / 25)) - 2));
			$amount4 += max(1, ceil(((rand(1, 15) * 2 / 2) * (1 + ($fltAbility+$ability+$drwalnictwo) / 25)) - 2));
			$ability += rand(1,3)/100;
			if ($player -> clas == 'Rzemieślnik')
			{
					$amount1 = $amount + ceil($player -> level / 10);
					$amount2 = $amount + ceil($player -> level / 10);
					$amount3 = $amount + ceil($player -> level / 10);
					$amount4 = $amount + ceil($player -> level / 10);
			}
		}

        $have=$db->Execute("SELECT * FROM minerals WHERE owner=".$player -> id);
		if (!$have->fields['owner'])
		{
			mysql_query("INSERT INTO minerals(owner, pine, hazel, yew, elm) VALUES (".$player->id.", ".$amount1.", ".$amount2.", ".$amount3.",".$amount4.")");
        }
		else
		{
			mysql_query("UPDATE minerals SET pine=pine+".$amount1.", hazel=hazel+".$amount2.", yew=yew+".$amount3.", elm=elm+".$amount4." WHERE owner=".$player->id) or die(mysql_error());
		}
       //$db -> Execute("UPDATE players SET drzewka=drzewka+".$bonus." WHERE id=".$have -> fields['id']);
        $db -> Execute("UPDATE woodfarms SET used=0 WHERE owner=".$player -> id);
        $db -> Execute("DELETE FROM woodfarm WHERE id=".$chop -> fields['id']);
        $text = $text."Zebrałeś:<ul><li>".$amount1." sosny</li><li>".$amount2." leszczyny</li><li>".$amount3." cisu</li><li>".$amount4." wiązu</li></ul><br>";
         
	$chop -> MoveNext();
    }
    $smarty -> assign ("Chop", $text);
}
$farm -> Close();


// inicjalizacja zmiennej
if (!isset($_GET['view'])) {
    $_GET['view'] = '';
}
$test = $db -> Execute("SELECT drzewka FROM players WHERE id=".$player -> id);
$drzewka = $test -> fields['drzewka'];
$smarty -> assign(array("drzewka" => $drzewka)); 
// przypisanie zmniennej oraz wy¶wietlenie strony
$smarty -> assign ("View", $_GET['view']);
$smarty -> display ('woodfarm.tpl');

require_once("includes/foot.php");
