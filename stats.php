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


$test = $db -> Execute("SELECT wskrzeszanie FROM players WHERE `id`=".$player -> id);
$wskrzeszanie = $test -> fields['wskrzeszanie'];
$smarty -> assign(array("wskrzeszanie" => $wskrzeszanie));
$test = $db -> Execute("SELECT gotowanie FROM players WHERE `id`=".$player -> id);
$gotowanie = $test -> fields['gotowanie'];
$smarty -> assign(array("gotowanie" => $gotowanie));
$test = $db -> Execute("SELECT podklasa FROM players WHERE `id`=".$player -> id);
$podklasa = $test -> fields['podklasa'];
$smarty -> assign(array("podklasa" => $podklasa));
$test = $db -> Execute("SELECT wampiryzm FROM players WHERE `id`=".$player -> id);
$wampiryzm = $test -> fields['wampiryzm'];
$smarty -> assign(array("wampiryzm" => $wampiryzm));
$test = $db -> Execute("SELECT pktwampira FROM players WHERE `id`=".$player -> id);
$pktwampira = $test -> fields['pktwampira'];
$smarty -> assign(array("pktwampira" => $pktwampira));
$test = $db -> Execute("SELECT pktszpiega FROM players WHERE `id`=".$player -> id);
$pktszpiega = $test -> fields['pktszpiega'];
$smarty -> assign(array("pktszpiega" => $pktszpiega));
$test = $db -> Execute("SELECT alkoholizm FROM players WHERE `id`=".$player -> id);
$alkoholizm = $test -> fields['alkoholizm'];
$smarty -> assign(array("alkoholizm" => $alkoholizm));
$test = $db -> Execute("SELECT transmutacja FROM players WHERE `id`=".$player -> id);
$transmutacja = $test -> fields['transmutacja'];
$smarty -> assign(array("transmutacja" => $transmutacja));
$test = $db -> Execute("SELECT utrans FROM players WHERE `id`=".$player -> id);
$utrans = $test -> fields['utrans'];
$smarty -> assign(array("utrans" => $utrans));
$test = $db -> Execute("SELECT hipnoza FROM players WHERE `id`=".$player -> id);
$hipnoza = $test -> fields['hipnoza'];
$smarty -> assign(array("hipnoza" => $hipnoza));
$test = $db -> Execute("SELECT warzenie FROM players WHERE `id`=".$player -> id);
$warzenie = $test -> fields['warzenie'];
$smarty -> assign(array("warzenie" => $warzenie));
$test = $db -> Execute("SELECT houselure FROM players WHERE `id`=".$player -> id);
$houselure = $test -> fields['houselure'];
$smarty -> assign(array("houselure" => $houselure));


//////////////////////////////////////////////////////////////////////////////////
$test = $db -> Execute("SELECT agility FROM players WHERE `id`=".$player -> id);
$agility = $test -> fields['agility'];
$smarty -> assign(array("agility" => $agility));
$test = $db -> Execute("SELECT szyb FROM players WHERE `id`=".$player -> id);
$szyb = $test -> fields['szyb'];
$smarty -> assign(array("szyb" => $szyb));


$test = $db -> Execute("SELECT zrecznosc FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$zrecznosc = $test -> fields['zrecznosc'];
$smarty -> assign(array("zrecznosc" => $zrecznosc));
$test = $db -> Execute("SELECT zrecznosc FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$zrecznosc = $test -> fields['zrecznosc'];
$smarty -> assign(array("zrecznosc" => $zrecznosc));
$test = $db -> Execute("SELECT szybkosc FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$szybkosc = $test -> fields['szybkosc'];
$smarty -> assign(array("szybkosc" => $szybkosc));
$test = $db -> Execute("SELECT sila FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$sila = $test -> fields['sila'];
$smarty -> assign(array("sila" => $sila));


$test = $db -> Execute("SELECT inteligencja FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$inteligencja = $test -> fields['inteligencja'];
$smarty -> assign(array("inteligencja" => $inteligencja));
$test = $db -> Execute("SELECT silawoli FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$silawoli = $test -> fields['silawoli'];
$smarty -> assign(array("silawoli" => $silawoli));
$test = $db -> Execute("SELECT wisdom FROM players WHERE `id`=".$player -> id);
$wisdom= $test -> fields['wisdom'];
$smarty -> assign(array("wisdom" => $wisdom));
$test = $db -> Execute("SELECT strength FROM players WHERE `id`=".$player -> id);
$strength = $test -> fields['strength'];
$smarty -> assign(array("strength" => $strength));
$test = $db -> Execute("SELECT inteli FROM players WHERE `id`=".$player -> id);
$inteli = $test -> fields['inteli'];
$smarty -> assign(array("inteli" => $inteli));
$test2=$db->Execute("Select SUM(zr) from equipment where status='E' AND owner=".$player -> id);
$ono = $test2-> fields['SUM(zr)'];
$smarty -> assign(array("zrecha" => $ono));
$test2=$db->Execute("Select SUM(szyb) from equipment where status='E' AND owner=".$player -> id);
$ono = $test2-> fields['SUM(szyb)'];
$smarty -> assign(array("szybkoscc" => $ono));
$test = $db -> Execute("SELECT wytrz FROM players WHERE `id`=".$player -> id);
$wytrz = $test -> fields['wytrz'];
$smarty -> assign(array("wytrz" => $wytrz));
$test = $db -> Execute("SELECT wytrzymalosc FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$wytrzymalosc = $test -> fields['wytrzymalosc'];
$smarty -> assign(array("wytrzymalosc" => $wytrzymalosc));



$test = $db -> Execute("SELECT alchemia FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$alchemia = $test -> fields['alchemia'];
$smarty -> assign(array("alchemia" => $alchemia));
$test = $db -> Execute("SELECT zielarstwo FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$zielarstwo = $test -> fields['zielarstwo'];
$smarty -> assign(array("zielarstwo" => $zielarstwo));
$test = $db -> Execute("SELECT gornictwo FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$gornictwo = $test -> fields['gornictwo'];
$smarty -> assign(array("gornictwo" => $gornictwo));
$test = $db -> Execute("SELECT hutnictwo FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$hutnictwo = $test -> fields['hutnictwo'];
$smarty -> assign(array("hutnictwo" => $hutnictwo));
$test = $db -> Execute("SELECT drwalnictwo FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$drwalnictwo = $test -> fields['drwalnictwo'];
$smarty -> assign(array("drwalnictwo" => $drwalnictwo));



$test2=$db->Execute("Select SUM(power) from equipment where status='E' AND type='S' AND owner=".$player -> id);
$ono = $test2-> fields['SUM(power)'];
$smarty -> assign(array("tarcza" => $ono));
$test2=$db->Execute("Select SUM(power) from equipment where status='E' AND type='L' AND owner=".$player -> id);
$ono = $test2-> fields['SUM(power)'];
$smarty -> assign(array("nagole" => $ono));
$test2=$db->Execute("Select SUM(power) from equipment where status='E' AND type='A' AND owner=".$player -> id);
$ono = $test2-> fields['SUM(power)'];
$smarty -> assign(array("zbroja" => $ono));
$test2=$db->Execute("Select SUM(power) from equipment where status='E' AND type='H' AND owner=".$player -> id);
$ono = $test2-> fields['SUM(power)'];
$smarty -> assign(array("szyszak" => $ono));



$test2=$db->Execute("Select SUM(power) from equipment WHERE name LIKE '%wytrzymałości' AND status='E' AND owner=".$player -> id);
$ono = $test2-> fields['SUM(power)'];
$smarty -> assign(array("ringwytki" => $ono));
$test2=$db->Execute("Select SUM(power) from equipment WHERE name LIKE '%woli' AND status='E' AND owner=".$player -> id);
$ono = $test2-> fields['SUM(power)'];
$smarty -> assign(array("ringsw" => $ono));
$test2=$db->Execute("Select SUM(power) from equipment WHERE name LIKE '%inteligencji' AND status='E' AND owner=".$player -> id);
$ono = $test2-> fields['SUM(power)'];
$smarty -> assign(array("ringinteli" => $ono));
$test2=$db->Execute("Select SUM(power) from equipment WHERE name LIKE '%siły' AND status='E' AND owner=".$player -> id);
$ono = $test2-> fields['SUM(power)'];
$smarty -> assign(array("ringsily" => $ono));
$test2=$db->Execute("Select SUM(power) from equipment WHERE name LIKE '%szybkości' AND status='E' AND owner=".$player -> id);
$ono = $test2-> fields['SUM(power)'];
$smarty -> assign(array("ringszybk" => $ono));
$test2=$db->Execute("Select SUM(power) from equipment WHERE name LIKE '%zręczności' AND status='E' AND owner=".$player -> id);
$ono = $test2-> fields['SUM(power)'];
$smarty -> assign(array("ringzreki" => $ono));












    
    
    
/**
* Get the localization for game
*/
require_once("languages/".$player -> lang."/stats.php");

/**
* Assign variables to template
*/
$smarty -> assign(array("Avatar" => '', 
                        "Crime" => ''));

$plik = 'avatars/'.$player -> avatar;
if (is_file($plik)) 
{
    require_once('includes/avatars.php');
    $arrImage = scaleavatar($plik);
    $smarty -> assign("Avatar", "<center><img src=\"".$plik."\" width=\"".$arrImage[0]."\" height=\"".$arrImage[1]."\" alt=\"".$player -> user."\" title=\"".$player -> user."\" /></center>");
}
$ranking_points=$db->Execute("SELECT (`agility` + `strength` + `inteli` + `wisdom` + `szyb` + `wytrz` + `alchemia`)/20 + (`mining` + `lumberjack`)/10 + (`fletcher` + `ability` + `herbalist` + `unik` + `magia` + `shoot` + `atak`)/5 + (`level` + `breeding`) * 3  + (`gotowanie` + `wskrzeszanie` + `wampiryzm` + `alkoholizm` + `utrans` + `hipnoza` + `warzenie`)/2 + `leadership` AS ranking FROM players WHERE id=".$player->id);
$smarty-> assign("RankPoints", round($ranking_points->fields['ranking'],2));


if ($player -> ap > 0 || $player -> age < 4) 
{
    $smarty -> assign ("Ap", $player -> ap." (<a href=\"ap.php\">".A_USE."</a>)<br />");
} 
    else 
{
    $smarty -> assign ("Ap", $player -> ap."<br />");
}
if ($player -> race == '') 
{
    $smarty -> assign ("Race", '');
} 
    else 
{
    $smarty -> assign ("Race", $player -> race."<br />");
}
if ($player -> clas == '') 
{
    $smarty -> assign ("Clas", '');
} 
    else 
{
    $smarty -> assign ("Clas", $player -> clas."<br />");
}
if ($player -> gender == '') 
{
    $smarty -> assign ("Gender", '');
} 
    else 
{
    if ($player -> gender == 'M') 
    {
        $gender = GENDER_M;
    } 
        else 
    {
        $gender = GENDER_F;
    }
    $smarty -> assign ("Gender", $gender."<br />");
}
if ($player -> deity == '') 
{
    $smarty -> assign ("Deity", '<a href="card.php?action=deity">'.A_SELECT.'</a><br />');
} 
    else 
{
    $smarty -> assign ("Deity", $player -> deity." (<a href=\"card.php?action=deity\">".A_CHANGE."</a>)<br />");
}
if ($player -> faith - 100 > -1)
{
	$smarty -> assign("PW", $player -> faith.' <b>(<a href="temple.php?view=prayer">+</a>)</b><br />');
}
else
{
	$smarty -> assign("PW", $player -> faith.'<br />');
}
$rt = ($player -> wins + $player -> losses);

/**
 * Select player rank
 */
require_once('includes/ranks.php');
$strRank = selectrank($player -> rank, $player -> gender);

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

$arrStats = array($player -> agility, $player -> strength, $player -> inteli, $player -> wisdom, $player -> speed, $player -> cond);
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
$strLocation = $player -> location;
if ($player -> location == 'Altara')
{
    $strLocation = $city1;
}
if ($player -> location == 'Ardulith')
{
    $strLocation = $city2;
}
$strAntd = '';
$strAntn = '';
$strAnti = '';
$strResurect = '';
if ($player -> antidote_d > 0)
{
    $strAntd = DYNALCA_ANTIDOTE.$player -> antidote_d."<br/>";
}
if ($player -> antidote_n > 0)
{
    $strAntn = NUTARI_ANTIDOTE.$player -> antidote_n."<br/>";
}
if ($player -> antidote_i > 0)
{
    $strAnti = ILLANI_ANTIDOTE.$player -> antidote_i."<br/>";
}
if ($player -> resurect > 0)
{
    $strResurect = TIME_RESURECT.$player -> resurect."<br/>";
}

$ref = $db -> Execute("SELECT sum(points) as refs FROM reputation WHERE player_id=".$player -> id);
$ref = $ref -> fields['refs'];

$smarty -> assign(array("Stats" => $arrStats,
                        "Curstats" => $arrCurstats2,
                        "Tstats2" => $arrStatstext,
                        "Mana" =>  $player -> mana, 
                        "Location" => $strLocation."<br />", 
                        "Age" => $player -> age."<br />", 
                        "Logins" => $player -> logins."<br />", 
                        "Ip" => $player -> ip."<br />", 
                        "Email" => $_SESSION['email']."<br />", 
                        "Smith" => $player -> smith."<br />", 
                        "Alchemy" => $player -> alchemy."<br />", 
                        "Fletcher" => $player -> fletcher."<br />", 
                        "Attack" => $player -> attack."<br />", 
                        "Shoot" => $player -> shoot."<br />", 
                        "Miss" => $player -> miss."<br />", 
                        "Magic" => $player -> magic."<br />",
                        "Total" => $player -> wins."/".$player -> losses."/".$rt."<br />", 
                        "Lastkilled" => $player -> lastkilled."<br />", 
                        "Lastkilledby" => $player -> lastkilledby,
                        "Leadership" => $player -> leadership."<br />",
                        "Rank" => $strRank."<br />",
                        "Breeding" => $player -> breeding."<br />",
                        "Mining" => $player -> mining."<br />",
                        "Lumberjack" => $player -> lumberjack."<br />",
                        "Herbalist" => $player -> herbalist."<br />",
                        "Jeweller" => $player -> jeweller."<br />",
                        "Hutnictwo" => $player -> hutnictwo."<br />",
                        "Rituals" => $test->fields['wskrzeszanie']."<br/>",
                        "Cooking" => $test ->fields['gotowanie']."<br/>",
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
$maxmana = ($player -> inteli + $player -> wisdom);
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
    $smarty -> assign ("Crime", "<b>".CRIME_T."</b></td><td>".$player -> crime."<br />");
}
if ($podklasa == "Łotr") 
{
    $smarty -> assign ("Crime", "<b>".CRIME_T."</b></td><td>".$player -> crime."<br />");
}
if (!empty($player-> gg)) 
{
    $smarty -> assign ("GG", "<b>".GG_NUM."</b> ".$player -> gg."<br />");
} 
    else 
{
    $smarty -> assign ("GG", "");
}
$tribe = $db -> Execute("SELECT `name` FROM `tribes` WHERE id=".$player -> tribe);
if ($tribe -> fields['name']) 
{
    $smarty -> assign(array("Tribe" => "<a href=\"tribes.php?view=my\">".$tribe -> fields['name']."</a><br />",
                            "Triberank" => "<b>".TRIBE_RANK."</b> ".$player -> tribe_rank."<br />"));
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
    if ($player -> gender) 
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
