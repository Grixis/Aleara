<?php
/**
 *   File functions:
 *   Labyrynth in forrest city
 *
 *   @name                 : krainacieni.php                            
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.3
 *   @since                : 31.10.2006
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
// $Id: maze.php 804 2006-10-31 14:12:31Z thindil $

$title = "Cmentarz";
$title1 = $title;
require_once("includes/head.php");
require_once("includes/funkcje.php");
require_once("includes/turnfight.php");
$wynik=$db->Execute("SELECT value FROM settings WHERE setting='open_grave'");
$otwarte= $wynik ->fields['value'];
if ($otwarte !="Y" and $otwarte !="N")
{
	$otwarte="N";
}

/**
* Get the localization for game
*/
require_once("languages/".$player -> lang."/krainacieni.php");
//print($otwarte.$player -> clas);



/**
* If player escape
*/
if (isset($_GET['step']) && $_GET['step'] == 'run') 
{
    $enemy = $db -> Execute("SELECT speed, name, exp1, exp2, id FROM monsters WHERE id=".$player -> fight);
	if (empty($enemy -> fields))
	{
		error(ERROR);
	}
    /**
     * Add bonus from rings
     */
    $arrEquip = $player -> equipment();
    if ($arrEquip[9][2])
    {
        $arrRingtype = explode(" ", $arrEquip[9][1]);
        $intAmount = count($arrRingtype) - 1;
        if ($arrRingtype[$intAmount] == R_SPE5)
        {
            $player -> speed = $player -> speed + $arrEquip[9][2];
        }
    } 
    if ($arrEquip[10][2])
    {
        $arrRingtype = explode(" ", $arrEquip[10][1]);
        $intAmount = count($arrRingtype) - 1;
        if ($arrRingtype[$intAmount] == R_SPE5)
        {
            $player -> speed = $player -> speed + $arrEquip[10][2];
        }
    } 
        $chance = (rand(1, $player -> level * 100) + $player -> speed - $enemy -> fields['speed']);
        $intChance2 = rand(1, 10);
        $smarty -> assign ("Chance", $chance);
    if (($intChance2 < 3) || ($chance > 0))
    {
	    $intExpGain = 2;
	    $intExpLvl = ceil($enemy -> fields['level']/10);
	    if ($intExpGain < $intExpLvl)
	    	$intExpGain = $intExpLvl;
        $smarty -> assign(array("Ename" => $enemy -> fields['name'], 
                                "Expgain" => $intExpGain,
                                "Escapesucc" => ESCAPE_SUCC,
                                "Escapesucc2" => ESCAPE_SUCC2,
                                "Escapesucc3" => ESCAPE_SUCC3));
        checkexp($player -> exp,$intExpGain,$player -> level,$player -> race,$player -> user,$player -> id,0,0,$player -> id,'',0);
        $db -> Execute("UPDATE players SET fight=0 WHERE id=".$player -> id);
    } 
        else 
    {
        $strMessage = ESCAPE_FAIL." ".$enemy -> fields['name']." ".ESCAPE_FAIL2.".<br />";
        $smarty -> assign ("Message", $strMessage);
        $smarty -> display ('error1.tpl');
        battle('T','maze.php?step=battle');
    }
    $hp = $db -> Execute("SELECT hp FROM players WHERE id=".$player -> id);
    $smarty -> assign ("Health", $hp -> fields['hp']);
    if ($hp -> fields['hp'] > 0) 
    {
        $smarty -> assign("Link", "<a href=\"krainacieni.php?action=explore\">".A_EXPLORE."</a>");
    }
    $hp -> Close();
}

if (!isset($_GET['action']))
{
	if ($otwarte == "N")
	{
		$info="Bramy cmentarza są zamknięte. Kiedyś na pewno zostaną otwarte...";
		
	}
	else
	{
		$info="Kostucha otworzył bramę.";
		$yes="Przejdź przez bramę";
	}
    $smarty -> assign(array("Mazeinfo" => MAZE_INFO,
        "Ayes" => $yes,
		"Open" => $otwarte,
		"Info" => $info));
    $_GET['action'] = '';
}

if (isset($_GET['action']) && $_GET['action'] == 'explore')
{	

	if ($otwarte != "Y")
	{
		error("Dziś cmentarz jest zamknięty. Poczekaj aż kostucha go otworzy.");
	}
    if ($player -> energy < 0.1)
    {
        error(NO_ENERGY);
    }
    if ($player -> hp <= 0)
    {
        error(YOU_DEAD);
    }
    if (!empty($player -> fight)) 
    {
        $enemy = $db -> Execute("SELECT name FROM monsters WHERE id=".$player -> fight);
        error (FIGHT1.$enemy -> fields['name'].FIGHT2."<br />
                   
               <a href=ojsakinia.php?step=run>".NO."</a><br />");
        $enemy -> Close();
    }
    $db -> Execute("UPDATE players SET energy=energy-.3 WHERE id=".$player -> id);
    $intRoll = rand(1, 100);
    $smarty -> assign(array("Link" => "<a href=\"krainacieni.php?action=explore\">".A_EXPLORE."</a>",
        "Roll" => $intRoll));
    if ($intRoll < 49)
    {
        $smarty -> assign("Message", EMPTY_1);
    }
    if ($intRoll > 48 && $intRoll < 64)
    {
        $intRoll2 = rand(1,5);
        if ($inRoll2 < 5 )
        {
        $arrMonsters = array(2, 4, 12, 14, 17, 69, 74, 79, 84);
        $intRoll3 = rand(0, 8);
        }
        if ($intRoll2 == 5)
        {
          	$arrMonsters = array(32, 41, 53, 88, 92, 102, 116);
            $intRoll3 = rand(0, 6);
        }
        $enemy = $db -> Execute("SELECT `name`, `id` FROM `monsters` WHERE id=".$arrMonsters[$intRoll3]);
        $db -> Execute("UPDATE `players` SET `fight`=".$enemy -> fields['id']." WHERE `id`=".$player -> id);
        $smarty -> assign (array("Name" => $enemy -> fields['name'],
                                 "Youmeet" => YOU_MEET,
                                 "Yturnf" => Y_TURN_F));
                                 
                                 
    }
    if ($intRoll > 110 && $intRoll < 150)
    {
        $objHerb = $db -> Execute("SELECT gracz FROM herbs WHERE gracz=".$player -> id);
        $arrHerbs = array('illani', 'illanias', 'nutari', 'dynallca');
        $intRoll2 = rand(20, 100);
        $intAmount = rand(20, 100);
        if (!$objHerb -> fields['gracz']) 
        {
            $db -> Execute("INSERT INTO herbs (gracz, ".$arrHerbs[$intRoll2].") VALUES(".$player -> id.",".$intAmount.")");
        } 
            else 
        {
            $db -> Execute("UPDATE herbs SET ".$arrHerbs[$intRoll2]."=".$arrHerbs[$intRoll2]."+".$intAmount." WHERE gracz=".$player -> id);
        }
        $objHerb -> Close();
        $smarty -> assign("Message", F_HERBS.$intAmount.I_AMOUNT.$arrHerbs[$intRoll2]);
    }
    if ($intRoll > 10 && $intRoll < 11)
    {
        $objLumber = $db -> Execute("SELECT owner FROM minerals WHERE owner=".$player -> id);
        $intAmount = rand(80, 100);
        $arrLumber = array('pine', 'hazel', 'yew', 'elm');
        $arrType = array(T_PINE, T_HAZEL, T_YEW, T_ELM);
        $intRoll2 = rand(80, 100);
        if (!$objLumber -> fields['owner']) 
        {
            $db -> Execute("INSERT INTO minerals (owner, ".$arrLumber[$intRoll2].") VALUES(".$player -> id.",".$intAmount.")");
        } 
            else 
        {
            $db -> Execute("UPDATE minerals SET ".$arrLumber[$intRoll2]."=".$arrLumber[$intRoll2]."+".$intAmount." WHERE owner=".$player -> id);
        }
        $objLumber -> Close();
        $smarty -> assign("Message", F_LUMBER.$intAmount.I_AMOUNT.$arrType[$intRoll2]);
    }
    if ($intRoll > 1 && $intRoll < 50)
    {
        $intRoll2 = rand(20,70);
        $db -> Execute("UPDATE players SET platinum=platinum+".$intRoll2." WHERE id=".$player -> id);
        $smarty -> assign("Message", F_MITHRIL.$intRoll2.M_AMOUNT);
    }
    if ($intRoll > 50 && $intRoll < 80)
    {
        $smarty -> assign("Message", F_ENERGY);
        $db -> Execute("UPDATE players SET energy=energy+40 WHERE id=".$player -> id);
    }
    if ($intRoll > 85 && $intRoll < 89)
    {
        $smarty -> assign("Message", F_ENERGY);
        $db -> Execute("UPDATE players SET energy=energy+40 WHERE id=".$player -> id);
    }
    if ($intRoll > 88 && $intRoll < 91)
    {
        $intRoll2 = rand(1, 200);
        if ($intRoll2 < 6)
        {
            $intRoll3 = rand(1,3);
            $strSymbol = '<';
            if ($intRoll3 == 1)
            {
                $strType = 'B';
            }
            if ($intRoll3 == 2)
            {
                $strType = 'O';
            }
            if ($intRoll3 == 3)
            {
                $strType = 'U';
            }
        }
        if ($intRoll2 > 5 && $intRoll2 < 9)
        {
            $intRoll3 = rand(1,3);
            $strSymbol = '=';
            if ($intRoll3 == 1)
            {
                $strType = 'B';
            }
            if ($intRoll3 == 2)
            {
                $strType = 'O';
            }
            if ($intRoll3 == 3)
            {
                $strType = 'U';
            }
        }
        if ($intRoll2 < 9)
        {
            $smarty -> assign("Message", EMPTY_3); // previous: find spells
        }
        if ($intRoll2 > 8)
        {
            $smarty -> assign("Message", EMPTY_4);
        }
    }
    if ($intRoll == 91)
    {
        $intRoll2 = rand(1, 10);
        if ($intRoll2 < 6)
        {
            $strSymbol = '<';
        }
        if ($intRoll2 > 5 || $intRoll2 < 9)
        {
            $strSymbol = '=';
        }
        if ($intRoll2 < 9)
        {
            $smarty -> assign("Message", EMPTY_6);  // prevoius: find bow/arrow plans
        }
        if ($intRoll2 > 8)
        {
            $smarty -> assign("Message", EMPTY_1);
        }
    }
    if ($intRoll == 92)
    {
        $intRoll2 = rand(1, 10);
        if ($intRoll2 < 6)
        {
            $strSymbol = '<';
        }
        if ($intRoll2 == 6 || $intRoll2 == 7)
        {
            $strSymbol = '=';
        }
        if ($intRoll2 == 8)
        {
            $strSymbol = '>';
        }
        if ($intRoll2 < 9)
        {
            $smarty -> assign("Message", EMPTY_3);  // previous: find alchemy recipes
        }
        if ($intRoll2 > 8)
        {
            $smarty -> assign("Message", EMPTY_4);
        }
    }
    if ($intRoll == 93)
    {
        $intRoll2 = rand(1, 10);
        if ($intRoll2 < 6)
        {
            $strSymbol = '<';
        }
        if ($intRoll2 == 6 || $intRoll2 == 7)
        {
            $strSymbol = '=';
        }
        if ($intRoll2 == 8)
        {
            $strSymbol = '>';
        }
        if ($intRoll2 < 9)
        {
            $smarty -> assign("Message", EMPTY_5); // previous: find mage staffs (wands)
        }
        if ($intRoll2 > 8)
        {
            $smarty -> assign("Message", EMPTY_1);
        }
    }
    if ($intRoll == 94)
    {
        $intRoll2 = rand(1, 10);
        if ($intRoll2 < 6)
        {
            $strSymbol = '<';
        }
        if ($intRoll2 == 6 || $intRoll2 == 7)
        {
            $strSymbol = '=';
        }
        if ($intRoll2 == 8)
        {
            $strSymbol = '>';
        }
        if ($intRoll2 < 9)
        {
            $smarty -> assign("Message", EMPTY_3);  // previous: find mage clothes (robes)
        }
        if ($intRoll2 > 8)
        {
            $smarty -> assign("Message", EMPTY_4);
        }
    }
    if ($intRoll == 95)
    {
        $intRoll2 = rand(1, 10);
        if ($intRoll2 < 6)
        {
            $strSymbol = '<';
        }
        if ($intRoll2 == 6 || $intRoll2 == 7)
        {
            $strSymbol = '=';
        }
        if ($intRoll2 == 8)
        {
            $strSymbol = '>';
        }
        if ($intRoll2 < 9)
        {
            $smarty -> assign("Message", EMPTY_6);  // previous: find bows
        }
        if ($intRoll2 > 8)
        {
            $smarty -> assign("Message", EMPTY_1);
        }
    }
    /**
     * Find astral components
     */
    if ($intRoll == 96 || $intRoll == 97)
    {
        require_once('includes/findastral.php');
        $strResult = findastral(5);
        if ($strResult != false)
        {
            $smarty -> assign("Message", F_ASTRAL.$strResult);
        }
            else
        {
            $smarty -> assign("Message", EMPTY_1);
        }
    }
    if (0 && $intRoll > 97) //no quest available for now
    {
        $aviable = $db -> Execute("SELECT qid FROM quests WHERE location='maze.php' AND name='start'");
        $number = $aviable -> RecordCount();
        if ($number > 0) 
        {
            $arramount = array();
            $i = 0;
            while (!$aviable -> EOF) 
            {
                $query = $db -> Execute("SELECT id FROM questaction WHERE quest=".$aviable -> fields['qid']." AND player=".$player -> id);
                if (empty($query -> fields['id'])) 
                {
                    $arramount[$i] = $aviable -> fields['qid'];
                    $i = $i + 1;
                }
                $query -> Close();
                $aviable -> MoveNext();
            }
            $i = $i - 1;
            if ($i >= 0) 
            {
                $roll = rand(0,$i);
                $name = "quest".$arramount[$roll].".php";
                require_once("quests/".$name);
            } 
                else 
            {
                $smarty -> assign("Message", EMPTY_2);
            }
        }
            else
        {
            $smarty -> assign("Message", EMPTY_3);
        }
        $aviable -> Close();
    }
}
//no quests
if (0 && isset($_GET['step']) && $_GET['step'] == 'quest') 
{
    $query = $db -> Execute("SELECT quest FROM questaction WHERE player=".$player -> id." AND action!='end'");
    $name = "quest".$query -> fields['quest'].".php";
    if (!empty($query -> fields['quest'])) 
    {   
        require_once("quests/".$name);
    }
    $query -> Close();    
}

/**
* Initialization of variable
*/
if (!isset($_GET['step']))
{
    $_GET['step'] = '';
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array("Action" => $_GET['action'],
                        "Step" => $_GET['step']));
$smarty -> display ('krainacieni.tpl');

require_once("includes/foot.php");
?>
