<?php

$title = "Walka z Diaburionem";
require_once("includes/head.php");
require_once ("includes/funkcje.php");
require_once("includes/turnfight2.php");
require_once('class/monster_class.php');
require_once('class/fight_class.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
/**
* Get the localization for game
*/
require_once("languages/".$player -> lang."/walkadiaburion.php");

$test = $db -> Execute("SELECT artefaktoko FROM players WHERE id=".$player -> id);
$artefaktoko = $test -> fields['artefaktoko'];
$smarty -> assign(array("artefaktoko" => $artefaktoko));

$test = $db -> Execute("SELECT artefaktzab FROM players WHERE id=".$player -> id);
$artefaktzab = $test -> fields['artefaktzab'];
$smarty -> assign(array("artefaktzab" => $artefaktzab));

$test = $db -> Execute("SELECT artefaktwlos FROM players WHERE id=".$player -> id);
$artefaktwlos = $test -> fields['artefaktwlos'];
$smarty -> assign(array("artefaktwlos" => $artefaktwlos));

$test = $db -> Execute("SELECT artefaktzebro FROM players WHERE id=".$player -> id);
$artefaktzebro = $test -> fields['artefaktzebro'];
$smarty -> assign(array("artefaktzebro" => $artefaktzebro));

$test = $db -> Execute("SELECT artefaktserce FROM players WHERE id=".$player -> id);
$artefaktserce = $test -> fields['artefaktserce'];
$smarty -> assign(array("artefaktserce" => $artefaktserce));
$test = $db -> Execute("SELECT boss FROM players WHERE id=".$player -> id);
$boss = $test -> fields['boss'];
$smarty -> assign(array("boss" => $boss));
if ($boss > 5)
    {
        error("Wywoływałeś już dziś demona 6 razy! <a href=diabolium.php> (Wróć do Diabolium)</a>");
    }
if ($artefaktoko < 1)
    {
        error("Nie masz artefaktu Oko Diaburiona. <a href=diabolium.php> (Wróć do Diabolium)</a>");
    }
    if ($artefaktzebro < 1)
    {
        error("Nie masz artefaktu Żebro Diaburiona. <a href=diabolium.php> (Wróć do Diabolium)</a>");
    }
    if ($artefaktwlos < 1)
    {
        error("Nie masz artefaktu Włos Diaburiona. <a href=diabolium.php> (Wróć do Diabolium)</a>");
    }
    if ($artefaktzab < 1)
    {
        error("Nie masz artefaktu Ząb Diaburiona. <a href=diabolium.php> (Wróć do Diabolium)</a>");
    }
    if ($artefaktserce < 1)
    {
        error("Nie masz artefaktu Serce Diaburiona. <a href=diabolium.php> (Wróć do Diabolium)</a>");
    }
    
    
    
    
if ($player -> location != 'Diabolium') 
{
    error ("Nie znajdujesz się w Diabolium");
}

/**
* Assign variable to template
*/
$smarty -> assign("Win", '');

if ($player -> hp <= 0 && !isset($_GET['action1'])) 
{
    $db -> Execute("UPDATE players SET miejsce='Diabolium' WHERE id=".$player -> id);
    error (YOU_DEAD);
}

if (!isset ($_GET['action1'])) 
{    
       
    $smarty -> assign(array("Portaltext" => PORTAL_TEXT,
							"Afight2" => A_FIGHT2,
							"Aretreat" => A_RETREAT));
}

if (isset ($_GET['action1']) && $_GET['action1'] == 'retreat' && $player -> hp > 0) 
{
    $db -> Execute("UPDATE players SET miejsce='Diabolium' WHERE id=".$player -> id);
    
    $smarty -> assign(array("Portaltext" => PORTAL_TEXT,
							"Ahere" => A_HERE));
}

if (isset ($_GET['action1']) && $_GET['action1'] == 'fight' && $player -> hp > 0) 
{
    global $arrehp;
    if (!isset ($_GET['step'])) 
    {
        $smarty -> assign ("Message", START_FIGHT);
        
        $smarty -> display ('error1.tpl');
        $eeexp = ($player -> level * 130);
        $zloootooo = ($player -> level * 200);
	if (!isset($_SESSION['amount'])) {
		$_SESSION['amount'] = 1;
		$_SESSION['mon0']['id'] = 999999;
		$_SESSION['mon0']['user'] = MONSTER_NAME;
		$_SESSION['mon0']['level'] = 500;
		$_SESSION['mon0']['credits'] = $zloootooo;
		$_SESSION['mon0']['exp'] = $eeexp;
		$_SESSION['mon0']['actionpoints'] = 5;
		$_SESSION['mon0']['defence'] = 460;
		$_SESSION['mon0']['hp'] = 600;
		$_SESSION['mon0']['damage'] = 500;
		$_SESSION['mon0']['hitmodificator'] = 100;
		$_SESSION['mon0']['missmodificator'] = 100;
		$_SESSION['mon0']['attackspeed'] = 300;
		$monster = new Monster(999,1,0);
		$attacker = new Fighter($player -> id);
		for ($k = 0; $k < $_SESSION['amount']; $k++) {
			$strIndex = 'mon'.$k;
			$_SESSION[$strIndex]['id'] = $monster -> id;
			$_SESSION[$strIndex]['hp'] = $monster -> hp;
			if ($attacker -> speed > $monster -> attackspeed) {
				$_SESSION[$strIndex]['ap'] = 1;
				}
			else {
				$_SESSION[$strIndex]['ap'] = floor($monster -> attackspeed / $attacker -> speed);
				if ($_SESSION[$strIndex]['ap'] > 5) {
					$_SESSION[$strIndex]['ap'] = 5;
					}
				}
			$tmpActionArr[$k][0] = $monster -> attackspeed;
			$tmpActionArr[$k][1] = $k;
			}
		$tmpActionArr[$k][0] = $attacker -> speed;
		$tmpActionArr[$k][1] = -1;

		/**
		* function to compare elements of actionArr
		*/
		function aacmp($a,$b) {
			if ($a[0] == $b[0]) return 0;
			return ($a[0] > $b[0]) ? -1 : 1;
			}

		usort($tmpActionArr,"aacmp");
		for ($k = 0; $k <= $_SESSION['amount']; $k++) {
			$actionArr[$k] = $tmpActionArr[$k][1];
			}
		$_SESSION['actionArr'] = $actionArr;
		$_SESSION['exhaust']=0;
		if ($attacker -> speed > $monster -> attackspeed) {
			$_SESSION['points'] = floor($attacker -> speed / $monster -> attackspeed);
			if ($_SESSION['points'] > 5) {
				$_SESSION['points'] = 5;
				}
			}
		else {
			$_SESSION['points'] = 1;
			}
		$_SESSION['round']=0;
		}



        if ($player -> hp <= 0) 
        {
            error (NO_HP);
        }
        if ($player -> energy <= 0) 
        {
            error (NO_ENERGY);
        }
        $db -> Execute("UPDATE players SET fight=1 WHERE id=".$player -> id);
        $arrehp = array ();
        turnfight ('walkadiaburion.php?action1=fight');
        $myhp = $db -> Execute("SELECT hp, fight FROM players WHERE id=".$player -> id);
        $item = $db -> Execute("SELECT value FROM settings WHERE setting='item'");
        if ($myhp -> fields['hp'] <= 0) 
        {
            
            error (LOST_FIGHT2);
        } 
            elseif (!$item -> fields['value'] && $myhp -> fields['hp'] > 0 && $_SESSION['result'] == 'win') 
        {
           
            $smarty -> assign(array("Win" => 1,
                                    "Portaltext" => PORTAL_TEXT,
                                    "Sword" => SWORD,
                                    "Armor" => ARMOR,
                                    "Istaff" => I_STAFF,
                                    "Cape" => CAPE));
        }
        $myhp -> Close();
        $item -> Close();
		if (isset($_SESSION['result'])) unset($_SESSION['result']);
	}
    if (isset ($_GET['step'])) 
    {
        if ($_GET['step'] != 'sword' && $_GET['step'] != 'armor' && $_GET['step'] != 'staff' && $_GET['step'] != 'cape') 
        {
            error (ERROR);
        }
        
        if ($player -> level > 0)
        {
            error(ITEM_TAKE);
        }
        
        if ($_GET['step'] == 'sword') 
        {
            $smarty -> assign ("Item", SWORD);
            $db -> Execute("INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'".SWORD."',500,'W',1,0,5000,1,5000,1,'Y',0,100,'Y')");
            $db -> Execute("UPDATE settings SET value='sword' WHERE setting='item'");
        }
   
        $db -> Execute("UPDATE players SET miejsce='Diabolium' WHERE id=".$player -> id);
        
        $smarty -> assign(array("Steptext" => STEP_TEXT,
                                "Tgo" => T_GO,
                                "Ahere" => A_HERE));
    }
}

/**
* Initialization of variables
*/
if (!isset($_GET['action1']))
{
    $_GET['action1'] = '';
}
if (!isset($_GET['step']))
{
    $_GET['step'] = '';
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array("Action" => $_GET['action1'], 
                        "Step" => $_GET['step']));
$smarty -> display('walkadiaburion.tpl');

require_once("includes/foot.php");
?>
