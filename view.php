<?php
/**
 *   File functions:
 *   View other players, steal money, astral components from other players
 *
 *   @name                 : view.php
 *   @copyright            : (C) 2004,2005,2006,2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.4
 *   @since                : 18.04.2007
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

$title = 'Przegląda profil gracza';
require_once('includes/head.php');
require_once('includes/checkexp.php');
require_once('class/view_class.php');
$test = $db -> Execute("SELECT podklasa FROM players WHERE `id`=".$player -> id);
$podklasa = $test -> fields['podklasa'];
$smarty -> assign(array("podklasa" => $podklasa));
   $test = $db -> Execute("SELECT podklasaa FROM players WHERE `id`=".$player -> id);
$podklasaa = $test -> fields['podklasaa'];
$smarty -> assign(array("podklasaa" => $podklasaa));
   $test = $db -> Execute("SELECT pktfabularne FROM players WHERE `id`=".$player -> id);
$pktfabularne = $test -> fields['pktfabularne'];
$smarty -> assign(array("pktfabularne" => $pktfabularne));
$test = $db -> Execute("SELECT transmutacja FROM players WHERE `id`=".$player -> id);
$transmutacja = $test -> fields['transmutacja'];
$smarty -> assign(array("transmutacja" => $transmutacja));
if (!isset($_GET['view']))

{
    error("<a href=\"\"></a>");
}

if (!ereg("^[1-9][0-9]*$", $_GET['view']))
{
    error('<a href=""></a>');
}

$view = new ViewPlayer($_GET['view']);

$data=mysql_query("Select agility, inteli, szyb from players where id=".$_GET['view']);
$test=mysql_fetch_array($data);
$em_agility=$test['agility'];
$em_inteli=$test['inteli'];
$em_szyb=$test['szyb'];
/**
* Get the localization for game
*/
require_once('languages/'.$player -> lang.'/view.php');

if (empty ($view -> id))
{
    error (NO_PLAYER);
}
$smarty -> assign (array('User' => getTaggedPlayerName ($view -> user, $view->tribe, $view->tribe_rank),
                         'Id' => $view -> id,
                         'Avatar' => '',
                         'GG' => '',
                         'Immu' => '',
                         'Attack' => '',
                         'Mail' => '',
                         'Crime' => '',
                         'Krwiopijca' => '',
                         'Łotr' => '',
                         'zlodziejaszek' => '',
                         'Hipnoza' => '',
                         'Crime2' => '',
                         'Gender' => '',
                         'Deity' => '',
                         'ViewerID' => $player -> id,
                         'Tseclang' => ''));
$plik = 'avatars/'.$view -> avatar;
if (is_file($plik))
{
    require_once('includes/avatars.php');
    $arrImage = scaleavatar($plik);
    $smarty -> assign ('Avatar', '<center><img src="'.$plik.'" width="'.$arrImage[0].'" height="'.$arrImage[1].'" /></center>');
	$smarty -> assign ('AvatarBig', '<img src="'.$plik.'" style="max-width: 500px"/>');
}
if (!empty($view -> gg))
{
    $smarty -> assign ('GG', GG_NUMBER.$view -> gg.'<br />');
}

/**
 * Select player rank
 */
require_once('includes/ranks.php');
$strRank = selectrank($view -> rank, $view -> gender);

if($view -> seclang)
{
    $smarty -> assign('Tseclang', T_SEC_LANG.$view -> seclang.'<br />');
}

if ($view -> immunited == 'Y')
{
    $smarty -> assign ('Immu', HAVE_IMMU.'<br />');
}

/**
 * Name of player location
 */
$strLocation = $view -> location;
if ($view -> location == 'Altara')
{
    $strLocation = $city1;
}
if ($view -> location == 'Ardulith')
{
    $strLocation = $city2;
}
$profile = $db -> Execute("SELECT * FROM `profiles` WHERE `owner`=".$view -> id." ORDER BY `nr` ");

	$i = 0;
	while (!$profile -> EOF)
	{
		$arrId[$i] = $profile -> fields['id'];
		$arrTabs[$i] = $profile -> fields['tab'];
		$arrText[$i] = $profile -> fields['text'];
		$arrNr[$i] = $profile -> fields['nr'];
		$arrNumber[$i]= $i;
		$i ++;
		$profile -> MoveNext();
	}
	$profile -> Close();

if (!isset($_GET['show']))
{
	$tabid=0  ;
}
else
{
	$tabid=$_GET['show'];
}
$id=array_search($tabid,$arrId);
$strProfile=$arrText[$id];

$smarty -> assign(array('Page' => $strViewpage,
                        'age' => $view -> age,
                        'Race' => $view ->race,
                        'Clas' => $view ->clas,
                        'Rank' => $strRank,
                        'Location' => $strLocation,
                        'Level' => $view -> level,
                        'Maxhp' => $view -> max_hp,
                        'Wins' => $view -> wins,
                        'Losses' => $view -> losses,
                        'Lastkilled' => $view -> lastkilled,
                        'Lastkilledby' => $view -> lastkilledby,
                        'Tabid' => $arrId,
                        'Tabs' => $arrTabs,
                        'Profile' => $arrText,
						'Number' => $arrNumber,
                        'Lang' => $view -> lang));

if ($view -> wins || $view -> losses)
{
    $intAllfight = $view -> wins + $view -> losses;
    $fltRatio = round(($view -> wins / $intAllfight) * 100, 3);
    $smarty -> assign('Fratio', '('.$fltRatio.' %)');
}
    else
{
    $smarty -> assign('Fratio', '');
}
$para = $db -> Execute("SELECT * FROM pary WHERE prisoner=".$view->id ." or prisonerp=".$view->id);

	
	$malzonek1=$para->fields['prisoner'];
	$malzonek2=$para->fields['prisonerp'];
	if ($malzonek1 == $view ->id)
	{
	$test = $malzonek2;
	}
	else
	{
	$test = $malzonek1;
	}
	if (!empty($test))
	{
	$blah=$db->Execute("SELECT user FROM players WHERE id=".$test);
	$imie=$blah->fields['user'];
	if ($view -> gender == 'M')
	{
		$stan="Żonaty z <a href='view.php?view=".$test."'>".$imie."</a>";
	}
	else
	{
		$stan="Mężatka z <a href='view.php?view=".$test."'>".$imie."</a>";
	}
	$smarty -> assign('Stan',' '.$stan.'<br />');
	}
	else
	{
	if ($view -> gender == 'M')
		{
		$stan="Kawaler";
		}
		else
		{
		$stan="Panna";
		}
	$smarty -> assign('Stan',' '.$stan.'<br/>');
	}
if ($view -> gender)
{
    if ($view -> gender == 'M')
    {
        $gender = G_MALE;
    }
        else
    {
        $gender = G_FEMALE;
    }
    $smarty -> assign ('Gender', T_GENDER.': '.$gender.'<br />');
}
if (!empty ($view -> deity))
{
    $smarty -> assign ('Deity', T_DEITY.': '.$view -> deity.'<br />');
}
if ($view -> hp > 0)
{
    $smarty -> assign ('Status', '<b>'.S_LIVE.'</b><br />');
}
    else
{
    $smarty -> assign ('Status', '<b>'.S_DEAD.'</b><br />');
}

$tribe = $db -> Execute('SELECT `name` FROM `tribes` WHERE `id`='.$view -> tribe);
if ($tribe -> fields['name'])
{
    $smarty -> assign ('Clan', T_CLAN.': <a href="tribes.php?view=view&amp;id='.$view -> tribe.'">'.$tribe -> fields['name'].'</a><br />'.T_CLAN_RANK.': '.$view -> tribe_rank.'<br />');
}
    else
{
    $smarty -> assign ('Clan', T_CLAN.': '.NOTHING.'<br />');
}
//Zezwolenia
$perms=$db->Execute("Select * from permisions where owner=".$view->id);
$i=0;
$arrPermtext=array();
$arrPermdate=array();
while(!$perms-> EOF)
{
    $arrPermtext[$i]=$perms->fields['perm_text'];
    $arrPermdate[$i]=$perms->fields['date'];
    $i=$i+1;
    $perms->MoveNext();
}
    $smarty->assign("Permision", $i);
    $smarty->assign("Permtext",$arrPermtext);
    $smarty->assign("Permdate",$arrPermdate);


//Przyciski next i previous dla strażaka teksasu :p

$ids=$db -> Execute("Select id from players order by id ASC");
$i=0;
$arr_ids=array();
while (!$ids -> EOF) 
        {
            $arr_ids[$i]=$ids->fields['id'];
            $i = $i + 1;
            $ids -> MoveNext();
        }
//znajdź id które przeglądamy...
$current=array_search($view->id, $arr_ids);
$next=$current+1;
$prev=$current-1;
if ($next>$i) $next=$i;
if ($prev< 0) $prev=0;

$smarty -> assign("Nextplayer", $arr_ids[$next]);
$smarty -> assign("Previousplayer", $arr_ids[$prev]);

//Ikona typu konta
$gametype=$db->Execute("Select gametype from players where id=".$view->id);
if ($gametype -> fields['gametype'] == 'F')
{
	$smarty -> assign("Gametype", "<table><tr><td><img src='images/misc/fab.jpg'></td><td><b>Gracz fabularny</b></td></tr></table>");
}
elseif ($gametype -> fields['gametype'] == 'MF')
{
	$smarty -> assign("Gametype", "<table><tr><td><img src='images/misc/mechfab.jpg'></td><td><b>Gracz mechaniczno-fabularny</b></td></tr></table>");
}
else
{
	$smarty -> assign("Gametype", "<table><tr><td><img src='images/misc/mech.jpg'></td><td><b>Gracz mechaniczny</b></td></tr></table>");
}
//Pkty fabularne
$pktfab=$db->Execute("Select pktfabularne from players where id=".$view->id);
$smarty->assign("Pktfab", $pktfab->fields['pktfabularne']);

//ostatnio widziany
$lastseen= $db->Execute("Select FROM_UNIXTIME(lpv) AS last_visit FROM players WHERE id=".$view ->id);
$smarty -> assign("Lastseen",$lastseen -> fields['last_visit']);

$ref = $db -> Execute("SELECT sum(points) as points FROM reputation WHERE `player_id`=".$view -> id);
if ($ref -> fields['points'] == '')
{
	$ref -> fields['points'] = 0;
}
$smarty -> assign ('Refs', $ref -> fields['points']);

$objFreeze = $db -> Execute('SELECT `freeze` FROM `players` WHERE `id`='.$_GET['view']);

if ($player -> location == $view -> location && $view -> immunited == 'N' && $player -> immunited == 'N' && $player -> id != $view -> id)
{
    $smarty -> assign ('Attack', (!$objFreeze -> fields['freeze']) ? ' <a href="battle.php?battle='.$view -> id.'">'.A_ATTACK.'</a><br>' : '');
}

if ($player -> id != $view -> id)
{
    $smarty -> assign ('Mail', ' <a href="mail.php?view=write&amp;to='.$view -> id.'">'.A_WRITE_PM.'</a><br>');
}
$chance = ceil(100*( ($player -> agility + $player -> inteli)/($em_agility + $em_inteli)));
$chance = min(max($chance,10),90);
	
$smarty -> assign('Tfreezed', ($objFreeze -> fields['freeze']) ? T_FREEZED.'<br />' : '');

if ($player -> clas == 'Złodziej' && $player -> crime > 0 && $player -> location == $view -> location && $player -> id != $view -> id)
{
    $smarty -> assign('Crime', (!$objFreeze -> fields['freeze']) ? ' <a href=view.php?view='.$view -> id.'&amp;steal='.$view -> id.'>'.A_STEAL.'</a><br>' : '');
}




if ($player -> location == $view -> location  and $podklasa == 'Łotr')
{
    $smarty -> assign('Lotr', (!$objFreeze -> fields['freeze']) ? ' <a href=view.php?view='.$view -> id.'&amp;steal='.$view -> id.'>Obrabuj mieszkańca</a><br>' : '');
}





$test = $db -> Execute("SELECT premium FROM players WHERE `id`=".$view -> id);
$premium = $test -> fields['premium'];
if ($podklasa == 'Krwiopijca') 
{
    $smarty -> assign('Krwiopijca', (!$objFreeze -> fields['freeze']) ? ' <a href=view.php?view='.$view -> id.'&amp;wampir='.$view -> id.'>Wyssij krew</a><br>' : '');
}



//transmutacja
$test = $db -> Execute("SELECT transmutacja FROM players WHERE `id`=".$player -> id);
$transmutacja = $test -> fields['transmutacja'];
$smarty -> assign(array("transmutacja" => $transmutacja));
if ($transmutacja == 'zmutowane monstrum') 
{
    $smarty -> assign('wampirt', (!$objFreeze -> fields['freeze']) ? ' <a href=view.php?view='.$view -> id.'&amp;wampirt='.$view -> id.'>Atak krytyczny wampira</a><br>' : '');
}
if ($transmutacja == 'zmutowane monstrum') 
{
    $smarty -> assign('hipnoza', (!$objFreeze -> fields['freeze']) ? ' <a href=view.php?view='.$view -> id.'&amp;hipnoza='.$view -> id.'>Hipnoza i atak</a><br>' : '');
}
if ($transmutacja == 'zmutowane monstrum') 
{
    $smarty -> assign('zlodziejaszek', (!$objFreeze -> fields['freeze']) ? ' <a href=view.php?view='.$view -> id.'&amp;steal='.$view -> id.'>Kradzież z furią</a><br>' : '');
}
//koniec

if ($podklasa == 'Szpieg') 
{
    $smarty -> assign('Szpieg', (!$objFreeze -> fields['freeze']) ? ' <a href=view.php?view='.$view -> id.'&amp;szpieg='.$view -> id.'>Szpieguj statystyki</a><br>' : '');
}
$blnCrime = false;
if ($player -> clas == 'Złodziej' && $player -> id != $view -> id)
{
    $objAstralcrime = $db -> Execute("SELECT `astralcrime` FROM `players` WHERE `id`=".$player -> id);
    if (!$objFreeze -> fields['freeze'] && $objAstralcrime -> fields['astralcrime'] == 'Y')
    {
        $smarty -> assign('Crime2', ' <a href="view.php?view='.$view -> id.'&amp;steal_astral='.$view -> id.'">'.A_STEAL2.'</a><br>');
        $blnCrime = true;
    }
        else
    {
        $smarty -> assign('Crime2', '');
    }
    $objAstralcrime -> Close();
}
if ($player -> clas == 'Złodziej' && $player -> crime > 10 && $player -> location !='Lochy'  && $player -> id != $view -> id)
{
    $smarty -> assign('Crime3', (!$objFreeze -> fields['freeze']) ? ' <a href=view.php?view='.$view -> id.'&amp;steal_bank='.$view -> id.'>Włamanie do skarbca</a><br>' : '');
}

    $objActivity = $db -> Execute('SELECT `lpv` FROM `players` WHERE `id`='.$view ->id);
    $smarty -> assign(array('PlayerIP' => PLAYER_IP,
                            'SearchIP' => SEARCH_IP,
                            'Timeinfo' => TIME_INFO,'IP' => $view -> ip,
                            'Time' => date ("d-m-Y H:i:s",$objActivity -> fields['lpv'])));

/**
* Pickpocket
*/

if (isset ($_GET['steal']))
{
  
  
      $test = $db -> Execute("SELECT transmutacja FROM players WHERE `id`=".$player -> id);
$transmutacja = $test -> fields['transmutacja'];
    if ($player -> clas != 'Złodziej' & $podklasa != "Łotr" & $transmutacja != "zmutowane monstrum")
	{
		error("Wyjdź stąd!");
	}
  

    if ($_GET['steal'] != $_GET['view'])
    {
        error (NO_PLAYER2.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> crime <= 0)
    {
        error (NO_CRIME.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> location != $view -> location)
    {
        error (BAD_LOCATION.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> hp <= 0)
    {
        error (IS_DEAD.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> hp <= 0)
    {
        error (YOU_DEAD.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> immunited == 'Y')
    {
        error(YOU_IMMU.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> immunited == 'Y')
    {
        error(HE_IMMU.' (<a href="view.php?view='.$_GET['view'].'\">'.BACK.'</a>)');
    }
    if ($objFreeze -> fields['freeze'])
    {
        error(ACCOUNT_FREEZED.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> tribe > 0 && $view -> tribe == $player -> tribe)
    {
        error(SAME_CLAN.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> age < 4)
    {
        error(TOO_YOUNG.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    $roll = rand (1, $view -> level);
    /**
     * Add bonus from bless
     */
    $strBless = FALSE;
    $objBless = $db -> Execute('SELECT `bless`, `blessval` FROM `players` WHERE `id`='.$player -> id);
    if ($objBless -> fields['bless'] == 'inteli')
    {
        $player -> inteli = $player -> inteli + $objBless -> fields['blessval'];
        $strBless = 'inteli';
    }
    if ($objBless -> fields['bless'] == 'agility')
    {
        $player -> agility = $player -> agility + $objBless -> fields['blessval'];
        $strBless = 'agility';
    }
    $objBless -> Close();
    if ($strBless)
    {
        $db -> Execute('UPDATE `players` SET `bless`=\'\', `blessval`=0 WHERE `id`='.$player -> id);
    }
    $objBless = $db -> Execute('SELECT `bless`, `blessval` FROM `players` WHERE `id`='.$view -> id);
    if ($objBless -> fields['bless'] == 'inteli')
    {
        $em_inteli +=$objBless -> fields['blessval'];
    }
    if ($objBless -> fields['bless'] == 'agility')
    {
        $em_agility +=$objBless -> fields['blessval'];
    }
    $objBless -> Close();

    /**
     * Add bonus from rings
     */
    $arrEquip = $player -> equipment();
    $arrRings = array(R_AGI, R_INT);
    $arrStat = array('agility', 'inteli');
    if ($arrEquip[9][0])
    {
        $arrRingtype = explode(" ", $arrEquip[9][1]);
        $intAmount = count($arrRingtype) - 1;
        $intKey = array_search($arrRingtype[$intAmount], $arrRings);
        if ($intKey != NULL)
        {
            $strStat = $arrStat[$intKey];
            $player -> $strStat = $player -> $strStat + $arrEquip[9][2];
        }
    }
    if ($arrEquip[10][0])
    {
        $arrRingtype = explode(" ", $arrEquip[10][1]);
        $intAmount = count($arrRingtype) - 1;
        $intKey = array_search($arrRingtype[$intAmount], $arrRings);
        if ($intKey != NULL)
        {
            $strStat = $arrStat[$intKey];
            $player -> $strStat = $player -> $strStat + $arrEquip[10][2];
        }
    }

    $chance = ceil(100*($player -> agility + $player -> inteli) /($em_agility + $em_inteli));
	  $chance = min(max($chance,10),90);
	  
    $roll = rand(1,100);
    $strDate = $db -> DBDate($newdate);
    if ($chance < $roll)
    {
        $cost = 1000 * $player -> level;
        $expgain = ceil($view -> level / 10);
        checkexp($player -> exp,$expgain,$player -> level,$player -> race,$player -> user,$player -> id,0,0,$player -> id,'',0);
        if ($player -> location != 'Lochy')
        {
            $db -> Execute('UPDATE `players` SET `miejsce`=\'Lochy\', `crime`=`crime`-1 WHERE `id`='.$player -> id);
            $db -> Execute('INSERT INTO `jail` (`prisoner`, `verdict`, `duration`, `cost`, `data`) VALUES('.$player -> id.',\''.VERDICT.'\',7,'.$cost.',\''.$data.'\')');
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$player -> id.',\''.YOU_IN_JAIL.$cost.'.\', '.$strDate.')');
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.YOU_CATCH.'<b><a href="view.php?view='.$player -> id.'">'.$player -> user.L_ID.$player -> id.YOU_CATCH2.'\', '.$strDate.')');
            error ('<br />'.YOU_JAILED.' (<b><a href="view.php?view='.$_GET['view'].'">'.BACK.'</a></b>)');
        }
            else
        {
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.WHEN_YOU.'<b><a href="view.php?view='.$player -> id.'">'.$player -> user.L_ID.$player -> id.'.\', '.$strDate.')');
            $db -> Execute('UPDATE `players` SET `crime`=`crime`-1 WHERE `id`='.$player-> id);
            error ('<br />'.YOU_TRY_IN.' (<a href=\"view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
    }
    if ($chance>$roll and $chance - $roll<=49)
    {
        $db -> Execute('UPDATE `players` SET `crime`=`crime`-1 WHERE `id`='.$player -> id);
        if ( $view -> credits > 0)
        {
            $lost = ceil($view -> credits / 10);
            $expgain = $view -> level;
            checkexp($player -> exp,$expgain,$player -> level,$player -> race,$player -> user,$player -> id,0,0,$player -> id,'',0);
            $db -> Execute('UPDATE `players` SET `credits`=`credits`-'.$lost.' WHERE `id`='.$view -> id);
            $db -> Execute('UPDATE `players` SET `credits`=`credits`+'.$lost.' WHERE `id`='.$player -> id);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.YOU_CATCH.'<b><a href="view.php?view='.$player -> id.'">'.$player -> user.L_ID.$player -> id.NOT_CATCH.$lost.GOLD_COINS.'\', '.$strDate.')');
            error ('<br />'.WHEN_YOU2.$lost.WHEN_YOU21.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
            else
        {
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.YOU_CATCH.'<b><a href="view.php?view='.$player -> id.'">'.$player -> user.L_ID.$player -> id.EMPTY_BAG.'\', '.$strDate.')');
            error ('<br />'.EMPTY_BAG2.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
    }
    if ($chance>$roll and $chance - $roll>=50)
    {
        $db -> Execute('UPDATE `players` SET `crime`=`crime`-1 WHERE `id`='.$player -> id);
        if ( $view -> credits > 0)
        {
            $lost = ceil($view -> credits / 10);
            $expgain = ceil($view -> level * 10);
            $db -> Execute('UPDATE `players` SET `credits`=`credits`-'.$lost.' WHERE `id`='.$view -> id);
            $db -> Execute('UPDATE `players` SET `credits`=`credits`+'.$lost.' WHERE `id`='.$player -> id);
            checkexp($player -> exp,$expgain,$player -> level,$player -> race,$player -> user,$player -> id,0,0,$player -> id,'',0);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.YOU_CRIME.$lost.YOU_CRIME2.'\', '.$strDate.')');
            error ('<br />'.SUCCESS.$lost.GOLD_COINS2.' Zyskujesz '.$expgain.' punktów doświadczenia. (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
            else
        {
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.EMPTY_BAG3.'\', '.$strDate.')');
            error ('<br />'.EMPTY_BAG4.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
    }
}

/**
 * Steal astral components
 */
if (isset($_GET['steal_astral']))
{
    if (!ereg("^[1-9][0-9]*$", $_GET['steal_astral']) || $player -> clas != 'Złodziej' || $player -> location == 'Lochy')
    {
        error (ERROR.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($_GET['steal_astral'] != $_GET['view'])
    {
        error (NO_PLAYER2.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if (!$blnCrime)
    {
        error (NO_CRIME.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> hp <= 0)
    {
        error (YOU_DEAD.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> tribe > 0 && $view -> tribe == $player -> tribe)
    {
        error(SAME_CLAN.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }

    require_once('includes/astralsteal.php');
    astralsteal($_GET['view'], 'V');
}
/*
Bank robbery
*/
if (isset($_GET['steal_bank']))
{
    if (!ereg("^[1-9][0-9]*$", $_GET['steal_bank']) || $player -> clas != 'Złodziej' || $player -> location == 'Lochy')
    {
        error ('Zapomnij o tym! (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($_GET['steal_bank'] != $_GET['view'])
    {
        error ('Zdecyduj się, kogo chcesz okradać. (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> crime <10)
    {
        error ('Nie masz wymaganej ilości punktów kradzieży. (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> hp <= 0)
    {
        error ('Jesteś martwy. (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> tribe > 0 && $view -> tribe == $player -> tribe)
    {
        error(SAME_CLAN.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> location == 'Lochy')
    {
    	  error('Nie możesz okradać skarbca, gdyż znajdujesz się w lochach. (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
     if ($player -> immunited == 'Y')
    {
        error(YOU_IMMU.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> immunited == 'Y')
    {
        error(HE_IMMU.' (<a href="view.php?view='.$_GET['view'].'\">'.BACK.'</a>)');
    }
    if ($objFreeze -> fields['freeze'])
    {
        error(ACCOUNT_FREEZED.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> tribe > 0 && $view -> tribe == $player -> tribe)
    {
        error(SAME_CLAN.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> age < 4)
    {
        error(TOO_YOUNG.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
	 if ($player -> energy < 10)
	 {
	 	   error('Nie masz tyle energii.');
	 }
	    /**
     * Add bonus from bless
     */
    $strBless = FALSE;
    $objBless = $db -> Execute('SELECT `bless`, `blessval` FROM `players` WHERE `id`='.$player -> id);
    if ($objBless -> fields['bless'] == 'inteli')
    {
        $player -> inteli = $player -> inteli + $objBless -> fields['blessval'];
        $strBless = 'inteli';
    }
    if ($objBless -> fields['bless'] == 'agility')
    {
        $player -> agility = $player -> agility + $objBless -> fields['blessval'];
        $strBless = 'agility';
    }
    $objBless -> Close();
    if ($strBless)
    {
        $db -> Execute('UPDATE `players` SET `bless`=\'\', `blessval`=0 WHERE `id`='.$player -> id);
    }
    $objBless = $db -> Execute('SELECT `bless`, `blessval` FROM `players` WHERE `id`='.$view -> id);
    if ($objBless -> fields['bless'] == 'inteli')
    {
        $em_inteli += $objBless -> fields['blessval'];
    }
    if ($objBless -> fields['bless'] == 'agility')
    {
        $em_agility += $objBless -> fields['blessval'];
    }
    $objBless -> Close();

    /**
     * Add bonus from rings
     */
    $arrEquip = $player -> equipment();
    $arrRings = array(R_AGI, R_INT);
    $arrStat = array('agility', 'inteli');
    if ($arrEquip[9][0])
    {
        $arrRingtype = explode(" ", $arrEquip[9][1]);
        $intAmount = count($arrRingtype) - 1;
        $intKey = array_search($arrRingtype[$intAmount], $arrRings);
        if ($intKey != NULL)
        {
            $strStat = $arrStat[$intKey];
            $player -> $strStat = $player -> $strStat + $arrEquip[9][2];
        }
    }
    if ($arrEquip[10][0])
    {
        $arrRingtype = explode(" ", $arrEquip[10][1]);
        $intAmount = count($arrRingtype) - 1;
        $intKey = array_search($arrRingtype[$intAmount], $arrRings);
        if ($intKey != NULL)
        {
            $strStat = $arrStat[$intKey];
            $player -> $strStat = $player -> $strStat + $arrEquip[10][2];
        }
    }
    
    $safe=$db->GetOne('Select level from astral_bank where owner='.$_GET['view']);
    if (!$safe)
    {
    	$safe=0;
    }
    $chance = 100*($player -> agility + $player -> inteli) /($em_agility + $em_inteli + $safe *300);
    $chance = ceil($chance);
    $chance = min(max($chance,10),90);
    $roll = rand(1,100);
    $strDate = $db -> DBDate($newdate);
    
    if ($roll < $chance)
    {
    	$db -> Execute('Update players set crime=crime-10, energy=energy-10 where id='.$player->id);
    	if ( $view -> bank > 0)
        {
            $lost = ceil($view -> bank / 10);
            $expgain = ceil($view -> level * 100);
            $db -> Execute('UPDATE `players` SET `bank`=`bank`-'.$lost.' WHERE `id`='.$view -> id);
            $db -> Execute('UPDATE `players` SET `credits`=`credits`+'.$lost.' WHERE `id`='.$player -> id);
            checkexp($player -> exp,$expgain,$player -> level,$player -> race,$player -> user,$player -> id,0,0,$player -> id,'',0);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.YOU_CRIME.$lost.YOU_CRIME2.'\', '.$strDate.')');
            error ('<br />'.SUCCESS.$lost.GOLD_COINS2.' Zyskujesz '.$expgain.' punktów doświadczenia. (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
            else
        {
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.EMPTY_BAG3.'\', '.$strDate.')');
            error ('<br />'.EMPTY_BAG4.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
      }
      else {
      	$cost = 10000 * $player -> level;
        $expgain = ceil($view -> level);
        checkexp($player -> exp,$expgain,$player -> level,$player -> race,$player -> user,$player -> id,0,0,$player -> id,'',0);
        
      	$db -> Execute('UPDATE `players` SET `miejsce`=\'Lochy\', `crime`=`crime`-1 WHERE `id`='.$player -> id);
            $db -> Execute('INSERT INTO `jail` (`prisoner`, `verdict`, `duration`, `cost`, `data`) VALUES('.$player -> id.',\''.VERDICT.'\',72,'.$cost.',\''.$data.'\')');
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$player -> id.',\''.YOU_IN_JAIL.$cost.'.\', '.$strDate.')');
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.YOU_CATCH.'<b><a href="view.php?view='.$player -> id.'">'.$player -> user.L_ID.$player -> id.YOU_CATCH2.'\', '.$strDate.')');
            error ('<br />'.YOU_JAILED.' (<b><a href="view.php?view='.$_GET['view'].'">'.BACK.'</a></b>)');
      	}   	
} 
  
/**
* SZPIEG
*/

if (isset ($_GET['szpieg']))
{
    if ($pktszpiega = 0)
    {
        error ("Nie masz już punktów szpiega");
    }
  
 if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
    $test = $db -> Execute("SELECT podklasa FROM players WHERE `id`=".$player -> id);
$podklasa = $test -> fields['podklasa'];
$smarty -> assign(array("podklasa" => $podklasa));
    $test = $db -> Execute("SELECT pktwampira FROM players WHERE `id`=".$player -> id);
$pktwampira = $test -> fields['pktwampira'];
$smarty -> assign(array("pktwampira" => $pktwampira));
$test = $db -> Execute("SELECT wampiryzm FROM players WHERE `id`=".$player -> id);
$wampiryzm = $test -> fields['wampiryzm'];
$smarty -> assign(array("wampiryzm" => $wampiryzm));

$test = $db -> Execute("SELECT level FROM players WHERE `id`=".$player -> id);
$lywel = $test -> fields['lywel'];
$smarty -> assign(array("lywel" => $lywel));


$wampiryyzm = (0.02);
$smarty -> assign ("Wampiryyzm", $wampiryyzm);



$kasaa = ($wampiryzm * $player -> level * 20);
$smarty -> assign ("Kasaa", $kasaa);

$eexp = (($wampiryzm * $player -> level) * 2 + 200);
$smarty -> assign ("Eexp", $eexp);
  
$ssanie = ($wampiryzm * 5);
$smarty -> assign ("Ssanie", $ssanie);

$ssaniee = ($wampiryzm * 3);
$smarty -> assign ("Ssaniee", $ssaniee);

$test = $db -> Execute("SELECT strength FROM players WHERE `id`=".$view -> id);
$strength = $test -> fields['strength'];
$smarty -> assign(array("strength" => $strength));
$test = $db -> Execute("SELECT agility FROM players WHERE `id`=".$view -> id);
$agility = $test -> fields['agility'];
$smarty -> assign(array("agility" => $agility));
$test = $db -> Execute("SELECT wytrz FROM players WHERE `id`=".$view -> id);
$wytrz = $test -> fields['wytrz'];
$smarty -> assign(array("wytrz" => $wytrz));
$test = $db -> Execute("SELECT szyb FROM players WHERE `id`=".$view -> id);
$szyb = $test -> fields['szyb'];
$smarty -> assign(array("szyb" => $szyb));
$test = $db -> Execute("SELECT hp FROM players WHERE `id`=".$view -> id);
$hp = $test -> fields['hp'];
$smarty -> assign(array("hp" => $hp));
$test = $db -> Execute("SELECT credits FROM players WHERE `id`=".$view -> id);
$credits = $test -> fields['credits'];
$smarty -> assign(array("credits" => $credits));
$test = $db -> Execute("SELECT inteli FROM players WHERE `id`=".$view -> id);
$inteli = $test -> fields['inteli'];
$smarty -> assign(array("inteli" => $inteli));
$test = $db -> Execute("SELECT wisdom FROM players WHERE `id`=".$view -> id);
$wisdom = $test -> fields['wisdom'];
$smarty -> assign(array("wisdom" => $wisdom));
$test = $db -> Execute("SELECT pktszpiega FROM players WHERE `id`=".$player -> id);
$pktszpiega = $test -> fields['pktszpiega'];
$smarty -> assign(array("pktszpiega" => $pktszpiega));
$test = $db -> Execute("SELECT podklasa FROM players WHERE `id`=".$player -> id);
$podklasa = $test -> fields['podklasa'];
$smarty -> assign(array("podklasa" => $podklasa));
    	if ($podklasa != "Szpieg")
	{
		error("Nie jesteś szpiegiem!");
	}
if ($pktszpiega < 0)
	{
		error("Nie posiadasz punktów szpiega!");
	}       
$db -> Execute('UPDATE players SET pktszpiega=pktszpiega-1 WHERE id='.$player-> id);
            error ("<b> Wykryte statystyki:<br>
            siła: </b> $strength<br>
            <b>zręczność:</b> $agility<br>
            <b>wytrzymałość:</b> $wytrz<br>
            <b>szybkość:</b> $szyb<br>
            <b>inteligencja:</b> $inteli<br>
            <b>siła woli:</b> $wisdom<br>
            <br><br>
            <b>aktualny poziom hp:</b> $hp<br>
            <b>aktualnie złota przy sobie:</b> $credits<br>
            ");
        }
 
/**
* WAMPIRYZM
*/


if (isset ($_GET['wampir']))
{
    if ($_GET['wampir'] != $view -> id)
	{
		error("Zapomnij o tym");
	}
	 if ($_GET['wampir'] == $player -> id)
	{
		error("Zapomnij o tym");
	}
	if ($view -> hp <=0)
	{
		error("Nie możesz pić krwi z ofiary która już nie żyje");
	}
	if ($view -> immunited == 'Y')
	{
		error ("Nie można atakować postaci która ma immunitet");
	}
	if ($player -> hp <=0)
	{
		error ("Nie możesz pić krwi, ponieważ jesteś martwy");
	}
	
	if ($player -> energy < 1)
	{
		error ("Nie masz wymaganej ilości energii");
	}
	if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
    $test = $db -> Execute("SELECT podklasa FROM players WHERE `id`=".$player -> id);
$podklasa = $test -> fields['podklasa'];

$test = $db -> Execute("SELECT wampiryzm FROM players WHERE `id`=".$player -> id);
$wampiryzm = $test -> fields['wampiryzm'];


$test = $db -> Execute("SELECT level FROM players WHERE `id`=".$player -> id);
$lywel = $test -> fields['lywel'];

$wampiryyzm = (0.005 * ($player -> level / 4));
$kasaa = ($wampiryzm * $player -> level * 10);
$eexp = ($wampiryzm * $player -> level + 100);
$ssanie = ($wampiryzm * 5);
$ssaniee = ($wampiryzm * 3);

$chance = ceil(100*($player -> agility + $player -> inteli + $player -> szyb) /($em_agility + $em_szyb));
$chance = min(max($chance,10),90);
$roll=rand(1,100);
    $test = $db -> Execute("SELECT pktwampira FROM players WHERE `id`=".$player -> id);
$pktwampira = $test -> fields['pktwampira'];
$smarty -> assign(array("pktwampira" => $pktwampira));
    	if ($podklasa != "Krwiopijca")
	{
		error("Nie jesteś krwiopijcą!");
	}
         	if ($pktwampira < 1)
	{
		error("Nie posiadasz wampirzych punktów!");
	}
	
if ($chance>$roll and $chance - $roll<=30)
{
            $db -> Execute('UPDATE players SET pktwampira=pktwampira-1 WHERE id='.$player-> id);
            
            
            $db -> Execute('UPDATE players SET credits=credits+'.$kasaa.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET hp=hp-'.$ssanie.' WHERE id='.$view -> id);
            $db -> Execute('UPDATE players SET hp=hp+'.$ssaniee.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET wampiryzm=wampiryzm+'.$wampiryyzm.' WHERE id='.$player-> id);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',"Zostałeś zaatakowany przez wampira! Był to gracz '.$player-> user.'('.$player->id.'). Czujesz się źle, ponieważ wyssano Ci '.$ssanie.' krwi... ", NOW())');
            checkexp($player -> exp, $eexp, $player -> level, $player -> race, $player -> user, $player -> id, 0, 0, $player -> id, 'fletcher', 0);
            error ("Udało Ci się napaść na ofiarę. Upuściłeś mu $ssanie krwi. Zyskałeś dzięki temu: $wampiryyzm wampiryzmu, $eexp pkt. doświadczenia, $kasaa sztuk złota. Chociaż zaatakowałeś szybko, ofiara zapamiętała ciebie...");
}
if ($chance>$roll and $chance - $roll>=31)
{
            $db -> Execute('UPDATE players SET pktwampira=pktwampira-1 WHERE id='.$player-> id);
            
            
            $db -> Execute('UPDATE players SET credits=credits+'.$kasaa.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET hp=hp-'.$ssanie.' WHERE id='.$view -> id);
            $db -> Execute('UPDATE players SET hp=hp+'.$ssaniee.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET wampiryzm=wampiryzm+'.$wampiryyzm.' WHERE id='.$player-> id);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',"Zostałeś zaatakowany przez wampira! Był na tyle szybki że nie udało ci się zanotować kim jest. Czujesz się źle, ponieważ wyssano Ci '.$ssanie.' krwi... ", NOW())');
            checkexp($player -> exp, $eexp, $player -> level, $player -> race, $player -> user, $player -> id, 0, 0, $player -> id, 'fletcher', 0);
            error ("Udało Ci się napaść na ofiarę. Upuściłeś mu $ssanie krwi. Zyskałeś dzięki temu: $wampiryyzm wampiryzmu, $eexp pkt. doświadczenia, $kasaa sztuk złota. ");
}
if ($chance < $roll)
{
		$roll2=rand(1,3);
		if ($roll2 == 1)
			error("Próbowałeś podejść do ofiary, ale ta cię zauważyła i uciekła. Tym razem się nie udało");
		if ($roll2 == 2)
			error("Próbowałeś podejść do ofiary ale ta cię zauważyła. Po krótkiej szamotaninie musiałeś zrezygnować z ataku i wycofać się");
		if ($roll2 == 3)
			{
			$db->Execute("update players set hp=0 where id=".$player->id);
			error("Próbowałeś podejść do ofiary. Kiedy byłeś już bardzo blisko szyi ta odwróciła się i wbiła ci nóż w pierś, zabijając na miejscu!");
			}
}
  
  
  
  }
    

/**
* TRANSMUTACJA: ATAK KRYTYCZNY WAMPIRA
*/


if (isset ($_GET['wampirt']))
{
    if ($_GET['wampirt'] != $view -> id)
	{
		error("Zapomnij o tym");
	}
	 if ($_GET['wampirt'] == $player -> id)
	{
		error("Zapomnij o tym");
	}
	if ($view -> hp <=0)
	{
		error("Nie możesz pić krwi z ofiary która już nie żyje");
	}
	if ($view -> immunited == 'Y')
	{
		error ("Nie można atakować postaci która ma immunitet");
	}
	if ($player -> hp <=0)
	{
		error ("Nie możesz pić krwi, ponieważ jesteś martwy");
	}
	
	if ($player -> energy < 1)
	{
		error ("Nie masz wymaganej ilości energii");
	}
	if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
    $test = $db -> Execute("SELECT transmutacja FROM players WHERE `id`=".$player -> id);
$transmutacja = $test -> fields['transmutacja'];

$test = $db -> Execute("SELECT wampiryzm FROM players WHERE `id`=".$player -> id);
$wampiryzm = $test -> fields['wampiryzm'];


$test = $db -> Execute("SELECT level FROM players WHERE `id`=".$player -> id);
$lywel = $test -> fields['lywel'];

$wampiryyzm = 0.2;
$kasaa = ($player -> level * 50);
$eexp = ($player -> level * 60);
$ssanie = (100 * 1);
$ssaniee = (100 * 1);

$chance = ceil(100*($player -> agility + $player -> inteli + $player -> szyb) /($em_agility + $em_szyb));
$chance = min(max($chance,10),90);
$roll=rand(1,100);
    $test = $db -> Execute("SELECT pktwampirat FROM players WHERE `id`=".$player -> id);
$pktwampirat = $test -> fields['pktwampirat'];
$smarty -> assign(array("pktwampirat" => $pktwampirat));
    	if ($transmutacja != "zmutowane monstrum")
	{
		error("Potrzebujesz transmutacji!");
	}
         	if ($pktwampirat < 1)
	{
		error("Skończyły Ci sie punkty ataku krytycznego wampira!");
	}
	
if ($chance>$roll and $chance - $roll<=30)
{
          $db -> Execute('UPDATE players SET hp=0 WHERE id='.$view -> id);
         
            $db -> Execute('UPDATE players SET pktwampirat=pktwampirat-1 WHERE id='.$player-> id);
            
            
            $db -> Execute('UPDATE players SET credits=credits+'.$kasaa.' WHERE id='.$player-> id);
  
            $db -> Execute('UPDATE players SET hp=hp+'.$ssaniee.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET wampiryzm=wampiryzm+'.$wampiryyzm.' WHERE id='.$player-> id);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',"Zostałeś zaatakowany wampirzym atakiem krytycznym przez zmutowane monstrum błąkające się po Alearze! Był to gracz '.$player-> user.'('.$player->id.'). Wyssał Ci całą krew. ", NOW())');
            checkexp($player -> exp, $eexp, $player -> level, $player -> race, $player -> user, $player -> id, 0, 0, $player -> id, 'fletcher', 0);
            error ("Udało Ci się zaatakować atakiem krytycznym ofiarę. Wypiłeś mu całą krew i otrzymałeś +100hp. Zyskałeś dzięki temu: $wampiryyzm wampiryzmu, $eexp pkt. doświadczenia, $kasaa sztuk złota. Chociaż zaatakowałeś szybko, ofiara zapamiętała ciebie...");
}
if ($chance>$roll and $chance - $roll>=31)
{
          $db -> Execute('UPDATE players SET hp=0 WHERE id='.$view -> id);
            $db -> Execute('UPDATE players SET pktwampirat=pktwampirat-1 WHERE id='.$player-> id);
     
            
            $db -> Execute('UPDATE players SET credits=credits+'.$kasaa.' WHERE id='.$player-> id);
          
            $db -> Execute('UPDATE players SET hp=hp+'.$ssaniee.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET wampiryzm=wampiryzm+'.$wampiryyzm.' WHERE id='.$player-> id);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',"Zostałeś zaatakowany wampirzym atakiem krytycznym przez zmutowane monstrum błąkające się po Alearze! Był na tyle szybki że nie udało ci się zanotować kim jest. Wyssał Ci całą krew. ", NOW())');
            checkexp($player -> exp, $eexp, $player -> level, $player -> race, $player -> user, $player -> id, 0, 0, $player -> id, 'fletcher', 0);
            error ("Udało Ci się zaatakować atakiem krytycznym ofiarę. Wypiłeś mu całą krew i otrzymałeś +100hp. Zyskałeś dzięki temu: $wampiryyzm wampiryzmu, $eexp pkt. doświadczenia, $kasaa sztuk złota. ");
}
if ($chance < $roll)
{
		$roll2=rand(1,3);
		if ($roll2 == 1)
			error("Próbowałeś podejść do ofiary, ale ta cię zauważyła i uciekła. Tym razem się nie udało");
		if ($roll2 == 2)
			error("Próbowałeś podejść do ofiary ale ta cię zauważyła. Po krótkiej szamotaninie pojawili się strażnicy i musiałeś uciekać.");
		if ($roll2 == 3)
			{
			$db->Execute("update players set hp=0 where id=".$player->id);
			error("Próbowałeś podejść do ofiary. Kiedy byłeś już bardzo blisko szyi ta odwróciła się i wbiła ci nóż w pierś, zabijając na miejscu!");
			}
}
}  
  
  
 
 
/**
* TRANSMUTACJA: HIPNOZA
*/


if (isset ($_GET['hipnoza']))
{
    if ($_GET['hipnoza'] != $view -> id)
	{
		error("Zapomnij o tym");
	}
	 if ($_GET['hipnoza'] == $player -> id)
	{
		error("Zapomnij o tym");
	}
	if ($view -> hp <=0)
	{
		error("Nie możesz zahipnotyzować martwego gracza.");
	}
	if ($view -> immunited == 'Y')
	{
		error ("Nie można hipnotyzować postaci która ma immunitet");
	}
	if ($player -> hp <=0)
	{
		error ("Nie możesz hipnotyzować ponieważ jesteś martwy.");
	}
	
	if ($player -> energy < 1)
	{
		error ("Nie masz wymaganej ilości energii");
	}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$kasaa = ($player -> level * 150);
$eexp = ($player -> level * 100);
$test = $db -> Execute("SELECT precyzja FROM players WHERE `id`=".$player -> id);
$precyzja = $test -> fields['precyzja'];
$smarty -> assign(array("precyzja" => $precyzja));
$test = $db -> Execute("SELECT transmutacja FROM players WHERE `id`=".$player -> id);
$transmutacja = $test -> fields['transmutacja'];

    	if ($transmutacja != "zmutowane monstrum")
	{
		error("Potrzebujesz transmutacji!");
	}
         	if ($precyzja < 1)
	{
		error("Już wykorzystałeś swoje dwie próby hipnozy!");
	}

            $db -> Execute('UPDATE players SET precyzja=precyzja-1 WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET energy=energy-30 WHERE id='.$view-> id);
            $db -> Execute('UPDATE players SET max_hp=max_hp-2 WHERE id='.$view-> id);
            $db -> Execute('UPDATE players SET hipnoza=hipnoza+1 WHERE id='.$player-> id);
            
            $db -> Execute('UPDATE players SET credits=credits+'.$kasaa.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET credits=credits-'.$kasaa.' WHERE id='.$view-> id);
            $db -> Execute('UPDATE players SET hp=0 WHERE id='.$view -> id);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',"Zostałeś zahipnotyzowany, a później dręczony i zabity z zimną krwia przez gracza '.$player-> user.'('.$player->id.'). W dodatku odchodząc zabrał Ci '.$kasaa.' złota... Sraciłeś również 30 energii i 2pkt max hp", NOW())');
            checkexp($player -> exp, $eexp, $player -> level, $player -> race, $player -> user, $player -> id, 0, 0, $player -> id, 'fletcher', 0);
            error ("Udało Ci się zahipnotyzować ofiarę. Po krótkim dręczeniu zabiłeś go z zimną krwią. Ofiara straciła też 30 energii i 2pkt max hp. Odchodząc zabrałeś mu jeszcze $kasaa złota. Zdobywasz $eexp pkt. doświadczenia oraz +1 umiejetności hipnoza. Niestety ofiara zapamiętała Cię.");
}


  

    
  


/**
* WAMPIRYZM PREMIUM
*/

if (isset ($_GET['wampir2']))
{
   if ($_GET['wampir2'] != $view -> id)
	{
		error("Zapomnij o tym");
	}
	 if ($_GET['wampir2'] == $player -> id)
	{
		error("Zapomnij o tym");
	}
	if ($view -> hp <=0)
	{
		error("Nie możesz pić krwi z ofiary która już nie żyje");
	}
	if ($player -> hp <=0)
	{
		error ("Nie możesz pić krwi, ponieważ jesteś martwy");
	}
	
	if ($player -> energy < 1)
	{
		error ("Nie masz wymaganej ilości energii");
	}
  
 if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
    $test = $db -> Execute("SELECT podklasa FROM players WHERE `id`=".$player -> id);
$podklasa = $test -> fields['podklasa'];
$smarty -> assign(array("podklasa" => $podklasa));
    $test = $db -> Execute("SELECT pktwampira FROM players WHERE `id`=".$player -> id);
$pktwampira = $test -> fields['pktwampira'];
$smarty -> assign(array("pktwampira" => $pktwampira));
$test = $db -> Execute("SELECT wampiryzm FROM players WHERE `id`=".$player -> id);
$wampiryzm = $test -> fields['wampiryzm'];
$smarty -> assign(array("wampiryzm" => $wampiryzm));

$test = $db -> Execute("SELECT level FROM players WHERE `id`=".$player -> id);
$lywel = $test -> fields['lywel'];
$smarty -> assign(array("lywel" => $lywel));

   $test = $db -> Execute("SELECT podklasaa FROM players WHERE `id`=".$player -> id);
$podklasaa = $test -> fields['podklasaa'];
$smarty -> assign(array("podklasaa" => $podklasaa));
    $test = $db -> Execute("SELECT pktwampira FROM players WHERE `id`=".$player -> id);
$pktwampira = $test -> fields['pktwampira'];
$smarty -> assign(array("pktwampira" => $pktwampira));

$wampiryyzm = (0.005 * ($player -> level / 4));
$smarty -> assign ("Wampiryyzm", $wampiryyzm);



$kasaa = ($wampiryzm * $player -> level * 10);
$smarty -> assign ("Kasaa", $kasaa);

$eexp = ($wampiryzm * $player -> level + 100);
$smarty -> assign ("Eexp", $eexp);
  
$ssanie = ($wampiryzm * 5);
$smarty -> assign ("Ssanie", $ssanie);

$ssaniee = ($wampiryzm * 3);
$smarty -> assign ("Ssaniee", $ssaniee);



if ($podklasaa != "Krwiopijca")
	{
		error("Nie masz zatwierdzonej opcji. Jeśli posiadasz KP zgłoś się do władcy!");
	}
         	if ($pktwampira < 0)
	{
		error("Nie posiadasz wampirzych punktów!");
	}
	
$chance = ceil(100*($player -> agility + $player -> szyb + $player -> inteli) /($em_agility + $em_szyb));
$chance = min(max($chance,10),90);
$roll=rand(1,100);

if ($chance>$roll and $chance - $roll<=30)
{
            $db -> Execute('UPDATE players SET pktwampira=pktwampira-1 WHERE id='.$player-> id);
            
            
            $db -> Execute('UPDATE players SET credits=credits+'.$kasaa.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET hp=hp-'.$ssanie.' WHERE id='.$view -> id);
            $db -> Execute('UPDATE players SET hp=hp+'.$ssaniee.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET wampiryzm=wampiryzm+'.$wampiryyzm.' WHERE id='.$player-> id);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',"Zostałeś zaatakowany przez wampira! Był to gracz '.$player-> user.'('.$player->id.'). Czujesz się źle, ponieważ wyssano Ci '.$ssanie.' krwi... ", NOW())');
            checkexp($player -> exp, $eexp, $player -> level, $player -> race, $player -> user, $player -> id, 0, 0, $player -> id, 'fletcher', 0);
            error ("Udało Ci się napaść na ofiarę. Upuściłeś mu $ssanie krwi. Zyskałeś dzięki temu: $wampiryyzm wampiryzmu, $eexp pkt. doświadczenia, $kasaa sztuk złota. Chociaż zaatakowałeś szybko, ofiara zapamiętała ciebie...");
}
if ($chance>$roll and $chance - $roll>=31)
{
            $db -> Execute('UPDATE players SET pktwampira=pktwampira-1 WHERE id='.$player-> id);
            
            
            $db -> Execute('UPDATE players SET credits=credits+'.$kasaa.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET hp=hp-'.$ssanie.' WHERE id='.$view -> id);
            $db -> Execute('UPDATE players SET hp=hp+'.$ssaniee.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET wampiryzm=wampiryzm+'.$wampiryyzm.' WHERE id='.$player-> id);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',"Zostałeś zaatakowany przez wampira! Był na tyle szybki że nie udało ci się zanotować kim jest. Czujesz się źle, ponieważ wyssano Ci '.$ssanie.' krwi... ", NOW())');
            checkexp($player -> exp, $eexp, $player -> level, $player -> race, $player -> user, $player -> id, 0, 0, $player -> id, 'fletcher', 0);
            error ("Udało Ci się napaść na ofiarę. Upuściłeś mu $ssanie krwi. Zyskałeś dzięki temu: $wampiryyzm wampiryzmu, $eexp pkt. doświadczenia, $kasaa sztuk złota. ");
}
if ($chance < $roll)
{
		$roll2=rand(1,3);
		if ($roll2 == 1)
			error("Próbowałeś podejść do ofiary, ale ta cię zauważyła i uciekła. Tym razem się nie udało");
		if ($roll2 == 2)
			error("Próbowałeś podejść do ofiary ale ta cię zauważyła. Po krótkiej szamotaninie musiałeś zrezygnować z ataku i wycofać się");
		if ($roll2 == 3)
			{
			$db->Execute("update players set hp=0 where id=".$player->id);
			error("Próbowałeś podejść do ofiary. Kiedy byłeś już bardzo blisko szyi ta odwróciła się i wbiła ci nóż w pierś, zabijając na miejscu!");
			}
}
}
if ($objFreeze -> fields['freeze'])
{
    $objFreeze -> Close();
}
$test = $db -> Execute("SELECT podklasaa FROM players WHERE `id`=".$view -> id);
$podklasaa = $test -> fields['podklasaa'];
$smarty -> assign(array("podklasaa" => $podklasaa));
   $test = $db -> Execute("SELECT avatar FROM players WHERE `id`=".$view -> id);
$avatar = $test -> fields['avatar'];
$smarty -> assign(array("avatar" => $avatar));
   $test = $db -> Execute("SELECT user FROM players WHERE `id`=".$view -> id);
$user = $test -> fields['user'];
$smarty -> assign(array("user" => $user));
   $test = $db -> Execute("SELECT deity FROM players WHERE `id`=".$view -> id);
$deity = $test -> fields['deity'];
$smarty -> assign(array("deity" => $deity));
   $test = $db -> Execute("SELECT status FROM players WHERE `id`=".$view -> id);
$status= $test -> fields['status'];
$smarty -> assign(array("status" => $status));
/**
 * Display page
 */
$smarty -> display ('view.tpl');
require_once('includes/foot.php');
?>
