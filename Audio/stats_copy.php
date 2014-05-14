<?php
/**
 *   File functions:
 *   Player statistics and general informations about account
 *
 *   @name                 : stats.php                            
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : mori <ziniquel@users.sourceforge.net>
 *   @version              : 1.2
 *   @since                : 12.09.2006
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
// $Id: stats.php 566 2006-09-13 09:31:08Z thindil $

$title = "Statystyki";
require_once("includes/head.php");
$result=mysql_query("SELECT * FROM players WHERE id=".$player->id);
$stat=mysql_fetch_array($result);
/**
* Get the localization for game
*/
require_once("languages/".$stat['lang']."/stats.php");

/**
* Assign variables to template
*/
$smarty -> assign(array("Avatar" => '', 
                        "Crime" => ''));

$plik = 'avatars/'.$stat['avatar'];
if (is_file($plik)) 
{
    require_once('includes/avatars.php');
    $arrImage = scaleavatar($plik);
    $smarty -> assign("Avatar", "<center><img src=\"".$plik."\" width=\"".$arrImage[0]."\" height=\"".$arrImage[1]."\" alt=\"".$player -> user."\" title=\"".$player -> user."\" /></center>");
}

if ($player -> ap > 0 || $player -> age < 4) 
{
    $smarty -> assign ("Ap", $stat['ap']." (<a href=\"ap.php\">".A_USE."</a>)<br />");
} 
    else 
{
    $smarty -> assign ("Ap", $stat['ap']."<br />");
}
if ($stat['rasa'] == '') 
{
    $smarty -> assign ("Race", '');
} 
    else 
{
    $smarty -> assign ("Race", $stat['rasa']."<br />");
}
if ($stat['klasa'] == '') 
{
    $smarty -> assign ("Clas", '');
} 
    else 
{
    $smarty -> assign ("Clas", $stat['klasa']."<br />");
}
if ($stat['gender'] == '') 
{
    $smarty -> assign ("Gender", '');
} 
    else 
{
    if ($stat['gender'] == 'M') 
    {
        $gender = GENDER_M;
    } 
        else 
    {
        $gender = GENDER_F;
    }
    $smarty -> assign ("Gender", $gender."<br />");
}
if ($stat['deity'] == '') 
{
    $smarty -> assign ("Deity", '<a href="card.php?action=deity">'.A_SELECT.'</a><br />');
} 
    else 
{
    $smarty -> assign ("Deity", $stat['deity']." (<a href=\"card.php?action=deity\">".A_CHANGE."</a>)<br />");
}
if ($stat['pw'] - 100 > -1)
{
	$smarty -> assign("PW", $stat['pw'].' <b>(<a href="temple.php?view=prayer">+</a>)</b><br />');
}
else
{
	$smarty -> assign("PW", $stat['pw'].'<br />');
}
$rt = ($stat['wins'] + $stat['losses']);

/**
 * Select player rank
 */
require_once('includes/ranks.php');
$strRank = selectrank($stat['rank'], $stat['gender']);

/**
 * Bonuses from equipment to stats
 */
require_once('includes/statsbonus.php');
$arrCurstats = statbonus();

/**
 * Bonus from bless
 */
$objBless = $db -> Execute("SELECT `bless`, `blessval` FROM `players` WHERE `id`=".$player -> id);
if (!empty($objBless -> fields['bless']))
{
    $arrBless = array('agility', 'strength', 'inteli', 'wisdom', 'szyb', 'wytrz', 'hp', 'ability', 'alchemia', 'fletcher', 'atak', 'shoot', 'unik', 'magia', 'breeding', 'mining', 'lumberjack', 'herbalist', 'jeweller', 'hutnictwo');
    $intKey = array_search($objBless -> fields['bless'], $arrBless);
    if ($intKey < 6)
    {
        $arrCurstats[$intKey] = $arrCurstats[$intKey] + $objBless -> fields['blessval'];
    }
    $arrPrays = array(AGI, STR, INTELI, WIS, SPE, CON, HITPTS, SMI, ALC, FLE, WEA, SHO, DOD, CAS, BRE, MINI, LUMBER, HERBS, JEWEL, METAL);
    $smarty -> assign(array("Blessfor" => BLESS_FOR,
                            "Pray" => "<br />".$arrPrays[$intKey],
                            "Blessval" => "(".$objBless -> fields['blessval'].")<br />"));
}
    else
{
    $smarty -> assign(array("Blessfor" => "",
                            "Pray" => "",
                            "Blessval" => ""));
}
$objBless -> Close();

$arrStats = array($stat['agility'], $stat['strength'], $stat['inteli'], $stat['wisdom'], $stat['szyb'], $stat['wytrz']);
$arrCurstats2 = array();
$i = 0;
foreach ($arrCurstats as $fltStats)
{
    if ($fltStats != $arrStats[$i])
    {
        $arrCurstats2[$i] = "(".$fltStats.")<br />";
    }
        else
    {
        $arrCurstats2[$i] = "<br />";
    }
    $i++;
}
$arrStatstext = array(T_AGI, T_STR, T_INT, T_WIS, T_SPEED, T_CON);

/**
 * Name of player location
 */
$strLocation = $stat['location'];
if ($stat['location'] == 'Altara')
{
    $strLocation = $city1;
}
if ($stat['location'] == 'Ardulith')
{
    $strLocation = $city2;
}
$strAntd = '';
$strAntn = '';
$strAnti = '';
$strResurect = '';
if ($stat['antidote_d'] > 0)
{
    $strAntd = DYNALCA_ANTIDOTE.$stat['antidote_d']."<br/>";
}
if ($stat['antidote_n'] > 0)
{
    $strAntn = NUTARI_ANTIDOTE.$stat['antidote_n']."<br/>";
}
if ($stat['antidote_i'] > 0)
{
    $strAnti = ILLANI_ANTIDOTE.$stat['antidote_i']."<br/>";
}
if ($stat['resurect'] > 0)
{
    $strResurect = TIME_RESURECT.$stat['resurect']."<br/>";
}

$ref = $db -> Execute("SELECT sum(points) as refs FROM reputation WHERE player_id=".$player -> id);
$ref = $ref -> fields['refs'];

$smarty -> assign(array("Stats" => $arrStats,
                        "Curstats" => $arrCurstats2,
                        "Tstats2" => $arrStatstext,
                        "Mana" =>  $stat['pm'], 
                        "Location" => $strLocation."<br />", 
                        "Age" => $stat['age']."<br />", 
                        "Logins" => $stat['logins']."<br />", 
                        "Ip" => $stat['ip']."<br />", 
                        "Email" => $_SESSION['email']."<br />", 
                        "Smith" => $stat['ability']."<br />", 
                        "Alchemy" => $stat['alchemia']."<br />", 
                        "Fletcher" => $stat['fletcher']."<br />", 
                        "Attack" => $stat['sttack']."<br />", 
                        "Shoot" => $stat['shoot']."<br />", 
                        "Miss" => $stat['unik']."<br />", 
                        "Magic" => $stat['magia']."<br />",
                        "Total" => $stat['wins']."/".$stat['losses']."/".$rt."<br />", 
                        "Lastkilled" => $stat['lastkilled']."<br />", 
                        "Lastkilledby" => $stat['lastkilledby'],
                        "Leadership" => $stat['leadership']."<br />",
                        "Rank" => $strRank."<br />",
                        "Breeding" => $stat['breeding']."<br />",
                        "Mining" => $stat['mining']."<br />",
                        "Lumberjack" => $stat['lumberjack']."<br />",
                        "Herbalist" => $stat['herbalist']."<br />",
                        "Jeweller" => $stat['jeweller']."<br />",
                        "Hutnictwo" => $stat['hutnictwo']."<br />",
                        "Ant_d" => $strAntd,
                        "Ant_n" => $strAntn,
                        "Ant_i" => $strAnti,
                        "Resurect" => $strResurect,
                        "Rep" => $ref,
                        "Reputation" => REPUT_TXT,
                        "Statsinfo" => STATS_INFO,
                        "Tstats" => T_STATS,
                        "Tinfo" => T_INFO,
                        "Trank" => T_RANK,
                        "Tloc" => T_LOC,
                        "Tlogins" => T_LOGINS,
                        "Tage" => T_AGE,
                        "Tip" => T_IP,
                        "Temail" => T_EMAIL,
                        "Tclan" => T_CLAN,
                        "Tability" => T_ABILITY,
                        "Tsmith" => T_SMITH,
                        "Talchemy" => T_ALCHEMY,
                        "Tlumber" => T_LUMBER,
                        "Tfight" => T_FIGHT,
                        "Tshoot" => T_SHOOT,
                        "Tdodge" => T_DODGE,
                        "Tcast" => T_CAST,
                        "Tleader" => T_LEADER,
                        "Tap" => T_AP,
                        "Trace" => T_RACE,
                        "Tclass" => T_CLASS2,
                        "Tdeity" => T_DEITY,
                        "Tgender" => T_GENDER,
                        "Tmana" => T_MANA,
                        "Tpw" => T_PW,
                        "Tfights" => T_FIGHTS,
                        "Tlast" => T_LAST,
                        "Tlast2" => T_LAST2,
                        "Tbreeding" => T_BREEDING,
                        "Tmining" => T_MINING,
                        "Tlumberjack" => T_LUMBERJACK,
                        "Therbalist" => T_HERBALIST,
                        "Tjeweller" => T_JEWELLER,
                        "Thutnictwo" => T_HUTNICTWO));
$cape = $db -> Execute("SELECT `power` FROM `equipment` WHERE `owner`=".$player -> id." AND `type`='C' AND `status`='E'");
$maxmana = ($stat['inteli'] + $stat['wisdom']);
$maxmana = $maxmana + (($cape -> fields['power'] / 100) * $maxmana);
$cape -> Close();
if ($player -> mana < $maxmana) 
{
    $smarty -> assign ("Rest", "[<a href=\"rest.php\">".A_REST."</a>]<br />");
} 
    else 
{
    $smarty -> assign ("Rest", "<br />");
}
if ($player -> clas == "Złodziej") 
{
    $smarty -> assign ("Crime", "<b>".CRIME_T."</b></td><td>".$stat['crime']."<br />");
}

if (!empty($player-> gg)) 
{
    $smarty -> assign ("GG", "<b>".GG_NUM."</b> ".$stat['gg']."<br />");
} 
    else 
{
    $smarty -> assign ("GG", "");
}
$tribe = $db -> Execute("SELECT `name` FROM `tribes` WHERE id=".$stat['tribe']);
if ($tribe -> fields['name']) 
{
    $smarty -> assign(array("Tribe" => "<a href=\"tribes.php?view=my\">".$tribe -> fields['name']."</a><br />",
                            "Triberank" => "<b>".TRIBE_RANK."</b> ".$stat['tribe_rank']."<br />"));
} 
    else 
{
    $smarty -> assign(array("Tribe" => NOTHING."<br />", 
                            "Triberank" => ""));
}
$tribe -> Close();

/**
* Select gender
*/
if (isset ($_GET['action']) && $_GET['action'] == 'gender') 
{
    $smarty -> assign(array("Genderm" => GENDER_M,
                            "Genderf" => GENDER_F,
                            "Aselect" => A_SELECT));
    if ($stat['gender']) 
    {
        error (YOU_HAVE);
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'gender') 
    {
        if (!isset($_POST['gender']))
        {
            error(NO_GENDER);
        }
        $db -> Execute("UPDATE `players` SET `gender`='".$_POST['gender']."' WHERE `id`=".$player -> id);
        error (YOU_SELECT);
    }
}
//opcja wyboru stanu Cywilnego
if (isset ($_GET['action']) && $_GET['action'] == 'stan') {
    if ($player -> stan) {
        error ("Masz już wybrany Stan!");
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'stan') {
        mysql_query("update players set stan='".$_POST['stan']."' where id=".$player -> id);
        error ("Wybrałe¶ Stan Cywilny. <a href=stats.php>Od¶wież</a>");
    }
}


/**
* Initialization of variable
*/
if (!isset($_GET['action'])) 
{
    $_GET['action'] = '';
}

/**
* Assign variable and display page
*/
$smarty -> assign ("Action", $_GET['action']);
$smarty -> display ('stats.tpl');

require_once("includes/foot.php");
?>
