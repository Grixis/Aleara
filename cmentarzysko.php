<?php

$title = "Cmentarzysko Diaburiona w Diabolium";
require_once("includes/head.php");
require_once('includes/security.php');
require_once ('includes/checkexp.php');
/**
* Get the localization for game
*/
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
require_once("languages/".$player -> lang."/cmentarzysko.php");

if ($player -> location != 'Diabolium') 
{
    error (ERROR);
}

$smarty -> assign(array("Chance" => '', 
                        "Maps" => ''));

$query = $db -> Execute("SELECT quest FROM questaction WHERE player=".$player -> id." AND action!='end'");
if (!isset($_GET['action']) && !isset($_GET['step']) && empty($query -> fields['quest']))
{
    $smarty -> assign(array("Labinfo" => LAB_INFO,
                            "Ayes" => YES));
}

if (isset ($_GET['action']) && $_GET['action'] == 'explore' && empty($query -> fields['quest'])) 
{
    if ($player -> energy < 2) 
    {
        error (NO_ENERGY);
    }
    if ($player -> hp == 0) 
    {
        error (YOU_DEAD);
    }
    
    
    $chance = rand(1,29);
    $db -> Execute("UPDATE players SET energy=energy-2 WHERE id=".$player -> id);
    if ($chance == 1)
    {
        $smarty -> assign("Action2", ACTION1);
    }
    if ($chance == 2)
    {
        $smarty -> assign("Action2", ACTION2);
    }
    if ($chance == 3) 
    {
        $crgain = rand(2000,9000);
        $smarty -> assign (array("Goldgain" => $crgain,
                                 "Action2" => ACTION3,
                                 "Action3" => ACTION3_1));
        $db -> Execute("UPDATE players SET credits=credits+".$crgain." WHERE id=".$player -> id);
    }
    if ($chance == 4)
    {
        $smarty -> assign("Action2", ACTION4);
    }
    if ($chance == 5)
    {
        $smarty -> assign("Action2", ACTION5);
        $db -> Execute("UPDATE players SET artefaktzab=artefaktzab+1 WHERE id=".$player -> id);
    }
    if ($chance == 6) 
    {
        $plgain = rand(100,300);
        $smarty -> assign (array("Mithgain" => $plgain,
                                 "Action2" => ACTION6,
                                 "Action3" => ACTION6_1));
        $db -> Execute("UPDATE players SET platinum=platinum+".$plgain." WHERE id=".$player -> id);
    }
    if ($chance == 7) 
    {
        $smarty -> assign("Action2", ACTION7_1);
        $db -> Execute("UPDATE players SET energy=energy+10 WHERE id=".$player -> id);
    }
    if ($chance == 8)
    {
        $smarty -> assign("Action2", ACTION8);
    }
       if ($chance == 12)
    {
        $smarty -> assign("Action2", ACTION12);
        $db -> Execute("UPDATE players SET artefaktoko=artefaktoko+1 WHERE id=".$player -> id);
    }
        if ($chance == 13)
    {
        $smarty -> assign("Action2", ACTION13);
        $db -> Execute("UPDATE players SET artefaktserce=artefaktserce+1 WHERE id=".$player -> id);
    }
        if ($chance == 14)
    {
        $smarty -> assign("Action2", ACTION14);
        $db -> Execute("UPDATE players SET artefaktwlos=artefaktwlos+1 WHERE id=".$player -> id);
    }
        if ($chance == 15)
    {
        $smarty -> assign("Action2", ACTION15);
        $db -> Execute("UPDATE players SET artefaktzebro=artefaktzebro+1 WHERE id=".$player -> id);
    }
    if ($chance == 16)
    {
        $smarty -> assign("Action2", ACTION16);
        $db -> Execute("UPDATE players SET drzewka=drzewka+1 WHERE id=".$player -> id);
    }
    if ($chance == 17)
    {
        $smarty -> assign("Action2", ACTION17);
        $db -> Execute("UPDATE players SET klucz=klucz+1 WHERE id=".$player -> id);
    }
    if ($chance == 18)
    {
        $smarty -> assign("Action2", ACTION18);
        $db -> Execute("UPDATE players SET hp=0 WHERE id=".$player -> id) or die($db->ErrorMsg());
        
    }
    if ($chance == 19)
    {
        $grgain = rand(10,40);
        $smarty -> assign (array("Grzybygain" => $grgain,
                                 "Action2" => ACTION19,
                                 "Action3" => ACTION19_1));
        $db -> Execute("UPDATE players SET grzyby=grzyby+".$grgain." WHERE id=".$player -> id);
    }
    if ($chance == 20)
    {
        $exgain = rand(500,3000);
        $smarty -> assign (array("Expgain" => $exgain,
                                 "Action2" => ACTION20,
                                 "Action3" => ACTION20_1));
        //$db -> Execute("UPDATE players SET exp=exp+".$exgain." WHERE id=".$player -> id);
        checkexp($player -> exp, $exgain, $player -> level, $player -> race, $player -> user, $player -> id, 0, 0, $player -> id, 'fletcher', 0);
    }
    if ($chance == 21)
    {
        $smarty -> assign("Action2", ACTION21);
    }
    if ($chance == 22)
    {
        $pogain = rand(1,2);
        $smarty -> assign (array("Pokrzywagain" => $pogain,
                                 "Action2" => ACTION22,
                                 "Action3" => ACTION22_1));
        $db -> Execute("UPDATE players SET pokrzywa=pokrzywa+".$pogain." WHERE id=".$player -> id);
    }
    if ($chance == 23)
    {
    
    
        $megain = rand(20,80);
        $smarty -> assign (array("Meteorytgain" => $megain,
                                 "Action2" => ACTION23,
                                 "Action3" => ACTION23_1));
         
  
        
                                
        $have = $db -> Execute("SELECT owner FROM minerals WHERE owner=".$player -> id);
        if (!$have -> fields['owner']) {
            $db -> Execute("INSERT INTO minerals (owner) VALUES(?)",array($player->id)) or error ("Nie mogę utworzyć tabeli w bazie danych.!");
        } else {
             $db -> Execute("UPDATE minerals SET meteor=meteor+".$megain." WHERE owner=".$player -> id);
        }
	      $have -> Close();                         
                                 
                                 
                                 
       
    }
    if ($chance == 24)
    {
        $smarty -> assign("Action2", ACTION24);
    }
    if ($chance == 25)
    {
        $smarty -> assign("Action2", ACTION25);
    }
    if ($chance == 26)
    {
        $smarty -> assign("Action2", ACTION26);
    }
    if ($chance == 27)
    {
        $db -> Execute("UPDATE players SET energy=energy-3 WHERE id=".$player -> id);
    }
    if ($chance == 28)
    {
        $smarty -> assign("Action2", ACTION28);
    }
    if ($chance == 29)
    {
        $smarty -> assign("Action2", ACTION29);
    }
   
   
    if ($chance == 10)
    {
        $smarty -> assign("Action2", ACTION29);
    }
   
    if ($chance == 11)
    {
        require_once('includes/findastral.php');
        $strResult = findastral(5);
        if ($strResult != false)
        {
            $smarty -> assign("Action2", ACTION11.$strResult);
        }
            else
        {
            $chance = 9;
        }
    }
    if ($chance == 9) 
    {
        $objMaps = $db -> Execute("SELECT value FROM settings WHERE setting='maps'");
        $roll = rand(1,30);
        if ($roll == 30 && $objMaps -> fields['value'] > 0 && $player -> maps < 20 && $player -> rank != 'Bohater') 
        {
            $text = CHEST;
            if ($player -> clas == 'Wojownik' || $player -> clas == 'Barbarzyńca') 
            {
                $text= $text.CHEST2;
            }
            if ($player -> clas == 'Mag') 
            {
                $text = $text.CHEST3;
            }
            if ($player -> clas == 'Obywatel' || $player -> clas == 'Złodziej' || $player -> clas == '') 
            {
                $text = $text.CHEST4;
            }
            $text = $text.CHEST5;
            $smarty -> assign ("Action2", $text);
            $db -> Execute("UPDATE players SET maps=maps+2 WHERE id=".$player -> id);
            $intMaps = $objMaps -> fields['value'] - 1;
            $db -> Execute("UPDATE settings SET value='".$intMaps."' WHERE setting='maps'");
        }
            else
        {
            $smarty -> assign("Action2", ACTION9);
        }
        $objMaps -> Close();
    }
    $energyleft = ($player -> energy - 3);
    $smarty -> assign(array("Chance" => $chance, 
                            "Energyleft" => $energyleft,
                            "Aexp" => A_EXP,
                            "Tnext" => T_NEXT,
                            "Enpts" => EN_PTS));
}

if ((isset($_GET['step']) && $_GET['step'] == 'quest') || !empty($query -> fields['quest'])) 
{
    $name = "quest".$query -> fields['quest'].".php";
    if ($query -> fields['quest'])
    {
        require_once('includes/statsbonus.php');
        $arrCurstats = statbonus();
        require_once("quests/".$name);   
    }
}

/**
* Initialization of variables
*/
if (!isset($_GET['action'])) 
{
    $_GET['action'] = '';
}
if (!isset($_GET['step'])) 
{
    $_GET['step'] = '';
}
if (empty($query -> fields['quest']))
{
    $strQuest = 'N';
}
    else
{
    $strQuest = 'Y';
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array("Action" => $_GET['action'], 
                        "Step" => $_GET['step'],
                        "Quest" => $strQuest));
$smarty -> display ('cmentarzysko.tpl');

$query -> Close();
require_once("includes/foot.php");
?>
