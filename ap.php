<?php
/**
 *   File functions:
 *   Distribution of Astral Poinst between player statistics
 *
 *   @name                 : ap.php                            
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.1
 *   @since                : 08.03.2006
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
// $Id$

$title = 'Dystrybucja AP';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
/**
* Get the localization for game
*/
require_once('languages/'.$player -> lang.'/ap.php');

if (!$player -> race || !$player -> clas)
{
    error (NO_CLASS);
}
if ($player -> age > 3 && !$player -> ap)
{
    error(NO_AP3);
}
/**
* Assign variables to template
*/
$arrStats = array('Człowiek' => array(3.5, 2.9, 3, 3.5, 2.5, 2.5),
                  'Elf' => array(2, 3.5, 3.4, 2, 2.9, 2.0),
                  'Mroczny Elf' => array(2,3, 3.7, 3.6, 2.9, 2.7),
                  'Nieumarły' => array(2, 2.8, 3.5, 2, 3.5, 3.6),
                  'Tauren' => array(3.6, 3.3, 3.5, 2, 2.6, 2.7),
                  'Umarlak' => array(3.7, 3.8, 2.9, 2.8, 3, 2.7),
                  'Ork' => array(3.6, 3.2, 3, 2, 3, 2.7),
                  'Centaur' => array(3.2, 3.2, 3.6, 2, 2, 2.1),
                  'Górski Ork' => array(3.7, 3, 3, 2, 2.6, 2.7),
                  'Ogr' => array(2, 2.8, 3, 2, 3.5, 3.5),
                  'Krasnolud' => array(3.7, 2.9, 2.7, 2.8, 2.3, 2.5),
                  'Hobbit' => array(2, 2.8, 2.3, 2.5, 3.7, 3.4),
                  'Jaszczuroczłek' => array(3.5, 2.6, 3.7, 2.3, 2.9, 2.3),
                  'Półsmok' => array(3.6, 3.5, 2.6, 2.5, 2.9, 2.3),
                  'Kobold' => array(2.9, 3.5, 2.9, 3.5, 2.9, 2.3),
                  'Demon' => array(2.2, 3.7, 3.3, 2.5, 2.9, 2.3),
                  'Półent' => array(4, 2.5, 2.1, 2.5, 2.9, 2.3),
                  'Cień' => array(3, 3, 3, 3, 3, 3),
                  'Serafin' => array(3, 3, 3, 3, 3, 3),
                  'Gnom' => array(2.1, 3.5, 3.8, 3, 2.9, 2.3));

$arrClassStats = array('Wojownik' => array(0, 0, 0, 0.15, 0, -0.15),
                       'Łowca' => array(0, 0, 0, 0.15, 0, -0.15),
                       'Gwardzista' => array(0, 0, 0, 0.15, 0, -0.15),
                       'Szaman' => array(0, 0, 0, 0.15, 0, -0.15),
                       'Nektomanta' => array(0, 0, 0, 0.15, 0, -0.15),
                       'Barbarzyńca' => array(0.15, 0, 0, 0, -0.15, 0),
                       'Rzemieślnik' => array(0, 0, 0, 0, 0, 0),
                       'Złodziej' => array(0, 0.15, 0, -0.15, 0, 0),
                       'Mag' => array(-0.15, 0, 0, 0, 0.15, 0));

$arrStatsSumm = array($arrStats[$player -> race][0] + $arrClassStats[$player -> clas][0],#strength
        $arrStats[$player -> race][1] + $arrClassStats[$player -> clas][1],#agility
        $arrStats[$player -> race][2] + $arrClassStats[$player -> clas][2],#speed
        $arrStats[$player -> race][3] + $arrClassStats[$player -> clas][3],#endurance
        $arrStats[$player -> race][4] + $arrClassStats[$player -> clas][4],#inteligence
        $arrStats[$player -> race][5] + $arrClassStats[$player -> clas][5]);#wisdom

$arrStatNames = array('strength', 'agility', 'szyb', 'wytrz', 'inteli', 'wisdom');

$smarty -> assign_by_ref('StatSumm', $arrStatsSumm);
$smarty -> assign_by_ref('StatDesc', $arrStatDesc);
$smarty -> assign_by_ref('StatNames', $arrStatNames);
$smarty -> assign_by_ref('Age', $player -> age);

unset($arrStats, $arrClassStats);

/**
* Distribution of Astral Points
*/
if (isset ($_GET['step']) && $_GET['step'] == 'add') 
{
    if (!isset($_POST['strength']) || !isset($_POST['agility']) || !isset($_POST['szyb']) || !isset($_POST['wytrz']) || !isset($_POST['inteli']) || !isset($_POST['wisdom'])) 
    {
        error(EMPTY_FIELDS);
    }
        
    $sum = 0;
    $arrpoints = array(0,0,0,0,0,0);
    $arrname = array(A_STRENGTH, A_AGILITY, A_SPEED, A_CONDITION, A_INTELIGENCE, A_WISDOM);
    for ($i = 0; $i < 6; $i++) 
    {
        if (!preg_match("/^\d*$/", $_POST[$arrStatNames[$i]])) 
        {
            error (ERROR);
        }
        $sum += $_POST[$arrStatNames[$i]];
        $arrpoints[$i] = $_POST[$arrStatNames[$i]] * ($arrStatsSumm[$i]);
    }
    if ($sum > $player -> ap) 
    {
        error (NO_AP);
    }
    if ($sum == 0) 
    {
        error (NO_AP2);
    }
    $strBase = 'UPDATE `players` SET `ap`=`ap`-'.$sum;
    $strMain = '';
    $strEnding = ' WHERE `id`='.$player -> id;
    
    for ($i = 0; $i < 6; $i++)
    {
        if ($arrpoints[$i] > 0) 
        {
            $strMain .= ',`'.$arrStatNames[$i].'`=`'.$arrStatNames[$i].'`+'.$arrpoints[$i];
            if ($i == 3)
            {
                $strMain .= ',`max_hp`=`max_hp`+'.$arrpoints[$i];
            }
        }
    }
    $db -> Execute($strBase.$strMain.$strEnding);
    $smarty -> assign_by_ref ('Amount', $arrpoints); 
    $smarty -> assign_by_ref ('Name', $arrname);
}

if (isset($_GET['step']) && $_GET['step'] == 'reassign')
{
    if ($player -> age > 3)
    {
        error(TOO_OLD);
    }
    if (isset($_POST['answer']) && $_POST['answer'] == A_YES)
    {
        $intAP = 0;
        for ($i = 0; $i < $player -> level; $i++)
        {
            $intAP += 10 + floor(.35 * $i);
        }
        if ($player -> clas == 'Rzemieślnik')
        {
            $intAP = floor($intAP / 2) + 5;
        }
        if ($intAP == $player -> ap)
        {
            error(MAX_AP);
        }
		$intDiff = $intAP - $player -> ap;
        $strDBQuery = 'UPDATE `players` SET `ap`='.$intAP;
        $oldFetchMode = $db -> SetFetchMode(ADODB_FETCH_NUM);
        $arrTrainedStats = $db -> GetRow('SELECT `strength`, `agility`, `szyb`, `wytrz`, `inteli`, `wisdom` FROM `trained_stats` WHERE `id`='.$player -> id);
        $db -> SetFetchMode($oldFetchMode);
		$arrRaces = array('Człowiek', 'Elf', 'Krasnolud', 'Hobbit', 'Jaszczuroczłek', 'Gnom', 'Mroczny Elf', 'Nieumarły', 'Tauren', 'Umarlak', 'Ork', 'Centaur', 'Górski Ork', 'Ogr', 'Półsmok', 'Kobold', 'Demon', 'Półent', 'Cień', 'Serafin');
		$arrHP = array(5, 4, 6, 3, 5, 3, 5, 5, 5, 5, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9);
		$intRaceKey = array_search($player -> race, $arrRaces);
		$intAmountHP = 15 + ($player -> level - 1) * $arrHP[$intRaceKey];
		$intAmountHP += empty($arrTrainedStats) ? 0 : floor($arrTrainedStats[3]);
		$intCurrHP = min($player -> hp, $intAmountHP);
		$strDBQuery .= ', `max_hp`='.$intAmountHP.', `hp`='.$intCurrHP;
        if (empty($arrTrainedStats))
        {
            for ($i = 0; $i < 6; $i++)
            {
                $strDBQuery .= ', `'.$arrStatNames[$i].'`=3';
            }
        }
        else
        {
            for ($i = 0; $i < 6; $i++)
            {
                $arrCurrentStats[$i] = $arrTrainedStats[$i] + 3;
                $strDBQuery .= ', `'.$arrStatNames[$i].'`='.$arrCurrentStats[$i];
            }
        }
        $strDBQuery .= ' WHERE `id`='.$player -> id;
        $db -> Execute($strDBQuery);
        $smarty -> assign_by_ref ('Diff', $intDiff);
        $smarty -> assign_by_ref ('Amount', $intAP);
    }
}
if (!isset($_GET['step'])) 
{
    $_GET['step'] = '';
}
/**
* Assign variables and display page
*/
$smarty -> assign_by_ref ('Ap', $player -> ap);
$smarty -> display ('ap.tpl');

unset($arrpoints, $arrStatNames, $arrname);
require_once('includes/foot.php');
?>
