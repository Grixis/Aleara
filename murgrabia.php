<?php
/**
 *   File functions:
 *   Admin panel
 *
 *   @name                 : admin.php
 *   @copyright            : (C) 2004,2005,2006,2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.4
 *   @since                : 19.04.2007
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

$title = 'Panel Murgrabiego';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
require_once('languages/'.$player -> lang.'/admin.php');

if ($player -> rank != 'Murgrabia' & $player -> rank != 'Admin' & $player -> rank != 'Królowa Potępionych' && $player -> rank != 'Staff')
{
    error ('Nie jesteś Murgrabią!');
}

$smarty -> assign('Message', '');

/**
 * Functions from includes/admin dir
 */
if (isset($_GET['view']))
{
    $arrView = array('takeaway', 'clearc', 'czat', 'jail', 'innarchive', 'banmail', 'addtext', 'changenick', 'addreps');
    $intKey = array_search($_GET['view'], $arrView);
    if ($intKey !== false)
    {
        require_once('includes/admin/'.$arrView[$intKey].'.php');
    }
}






/**
* Initialization of variables
*/
if (!isset($_GET['view']))
{
    $_GET['view'] = '';
    $arrTitles = array(ACCEPT, BAN, MODERATOR, PLAYERS, GAME, ADMINISTRATION);
    $arrOptions = array(array('addupdate.php', 'murgrabia.php?view=addtext', 'addnews.php', 'murgrabia.php?view=poll'),
                        array('logs', 'ban', 'del', 'delplayers'),
                        array('czat', 'banmail', 'clearf', 'forums', 'innarchive', 'clearc', 'censorship'),
                        array('addreps','donate', 'takeaway', 'jail', 'jailbreak', 'playerquest', 'changenick', 'add', 'donator', 'poczta', 'mail'),
                        array('equipment', 'monster', 'monster2', 'kowal', 'czary', 'mill'),
                        array('murgrabia.php?view=censorship', 'bugtrack.php', 'murgrabia.php?view=bugreport', 'murgrabia.php?view=changelog', 'murgrabia.php?view=register', 'murgrabia.php?view=close'));
    $arrDescriptions = array(array (A_ADDUPDATE, A_ADD_NEWS, A_ADDNEWS, A_POLL),
                             array(A_LOGS, A_BAN, A_DELETE, A_DEL_PLAYERS),
                             array(A_CHAT_BAN, A_BAN_MAIL, A_FORUM_P, A_FORUMS, A_INNARCHIVE, A_CHAT_P, A_CENSORSHIP),
                             array (A_REPUTATION,A_DONATION, A_TAKE, A_JAIL, A_JAILBREAK, A_PLAYERQUEST, A_CHANGE_NICK, A_RANK, A_DONATOR, A_PM, A_MAIL),
                             array(A_EQUIP, A_MONSTERS, A_MONSTER2, A_SMITH, A_SPELLS, A_MILL),
                             array(A_META, A_BUGTRACK, A_BUG_REPORT, A_CHANGELOG, A_REGISTER, A_CLOSE));
    $smarty -> assign(array('Awelcome' => A_WELCOME,
                            'Titles' => $arrTitles,
                            'Options' => $arrOptions,
                            'Descriptions' => $arrDescriptions));
$temp= $db->Execute("SELECT * FROM murgrabia ORDER BY turn DESC LIMIT 1");
if (!$temp -> fields['turn'])
{
	$turn=1;
}
else
{
	$turn= $temp -> fields['turn'];
}
$date=date('Y-m-d');
$dateend= $temp -> fields['end_date'];
$datestart=$temp -> fields['start_date'];

$datenow=date_create($date);
$date1=date_create($datestart);
$date2=date_create($dateend);
$interval= date_diff($datenow, $date2, true);
if (date_timestamp_get($datenow) < date_timestamp_get($date1) or date_timestamp_get($datenow) > date_timestamp_get($date2))
{
	if (date_timestamp_get($datenow) < date_timestamp_get($date1))
	{
		$turn='Tura '.$temp->fields['turn'].' jeszcze się nie zaczęła. Data rozpoczęcia: '.$datestart;
	}
	if (date_timestamp_get($datenow) > date_timestamp_get($date2))
	{
		$turn='Tura '.$temp->fields['turn'].' została zakończona. <a href="murgarbia.php?view=contest">Ogłoś kolejną</a>';
	}
}
else
{
	$turn='Trwa tura '.$temp->fields['turn'].'. Data zakończenia ustalona na: '.$dateend.' ( Pozostało '.$interval->format('%a dni').')';
}
$smarty -> assign('Turn', $turn);
}
    else
{
    $smarty -> assign('Aback', A_BACK);
}

if (!isset($_GET['step']))
{
    $_GET['step'] = '';
}

if (!isset($_GET['action']))
{
    $_GET['action'] = '';
}










/**
* Player donation
*/
require_once('languages/'.$player -> lang.'/admin.php');

if ($player -> rank != 'Murgrabia' && $player -> rank != 'Admin')
{
    error ('Nie jesteś Murgrabią!');
}

$smarty -> assign('Message', '');

/**
 * Functions from includes/admin dir
 */
if (isset($_GET['view']))
{
    $arrView = array('takeaway', 'clearc', 'czat', 'jail', 'innarchive', 'banmail', 'addtext', 'changenick', 'addreps');
    $intKey = array_search($_GET['view'], $arrView);
    if ($intKey !== false)
    {
        require_once('includes/admin/'.$arrView[$intKey].'.php');
    }
}









/**
* Player donation
*/
if (isset ($_GET['view']) && $_GET['view'] == 'donate')
{
	$resources = array ('refs');

	$resources_names = array (BRYLANTY);

    $smarty -> assign(array("Donateid" => DONATE_ID,
        "Donateamount" => AMOUNT,
        "Adonate" => A_DONATE,
		'Resources' => $resources,
		'ResourcesNames' => $resources_names,
		));

    if (isset ($_GET['step']) && $_GET['step'] == 'donated')
    {
		is_numeric ($_POST['amount']) or error (ERROR);
		preg_match ('/^[a-z]*$/', $_POST['what']) or error (ERROR);

		if ($_POST['what'] == 'refs' or $_POST['what'] == 'platinum') {
			$table = 'players';
			$id = 'id';
		}
		else {
			$table = 'minerals';
			$id = 'owner';
		}

        $_POST['id'] = (int)$_POST['id'];
        $sql = 'SELECT '.$id.' FROM '.$table.' WHERE '.$id.'='.$_POST['id'];
        $check = $db -> getOne($sql);
        if(!empty($check))
        {
            $db -> Execute('UPDATE '.$table.' SET '.$_POST['what'].'='.$_POST['what'].'+'.$_POST['amount'].' WHERE '.$id.'='.$_POST['id']);
        }
        else
        {
            $db -> Execute('INSERT INTO '.$table.'('.$id.', '.$_POST['what'].') VALUES('.$_POST['id'].', '.$_POST['amount'].')') or die($db -> ErrorMsg());
        }
        error (YOU_SEND_M);
    }
}


/**
* Send message to all players
*/
if (isset ($_GET['view']) && $_GET['view'] == 'poczta')
{
    $smarty -> assign(array("Pmsubject" => PM_SUBJECT,
        "Pmbody" => PM_BODY,
        "Asend" => A_SEND));
    if (isset ($_GET['step']) && $_GET['step'] == 'send')
    {
        if (empty ($_POST['body']) || empty($_POST['subject']))
        {
            error (EMPTY_FIELDS);
        }
        $_POST['subject'] = strip_tags($_POST['subject']);
        $_POST['body'] = strip_tags($_POST['body']);
        $strSubject = $db -> qstr($_POST['subject'], get_magic_quotes_gpc());
        $strBody = $db -> qstr($_POST['body'], get_magic_quotes_gpc());
        $strDate = $db -> DBDate($newdate);
        $odbio = $db -> Execute("SELECT id FROM players");
        $gracze = 0;
        while (!$odbio -> EOF)
        {
            $db -> Execute("INSERT INTO mail (sender, senderid, owner, subject, body, date) VALUES('".$player -> user."','".$player -> id."',".$odbio -> fields['id'].", ".$strSubject.", ".$strBody.", ".$strDate.")") or error(E_DB);
            $gracze = $gracze + 1;
            $odbio -> MoveNext();
        }
        $odbio -> Close();
        error (YOU_SEND_PM." ".$gracze." ".PLAYERS_A);
    }
}
if (isset ($_GET['view']) && $_GET['view'] == 'contest')
{
	if (isset ($_GET['action']) && $_GET['action'] == 'ok')
	{
		$start=$_POST['syear'].'-'.$_POST['smonth'].'-'.$_POST['sday'];

		$end=$_POST['eyear'].'-'.$_POST['emonth'].'-'.$_POST['eday'];
		//error($start);
		$temp= $db->Execute('SELECT turn FROM murgrabia ORDER BY turn DESC limit 1');
		if (!$temp->fields['turn'])
		{
			$turn=1;
		}
		else
		{
			$turn=$temp->fields['turn'];
		}
		$turn=intval($turn);
		$turn2=$turn+1;
		$db->Execute('INSERT INTO murgrabia(turn, start_date, end_date) VALUES ('.$turn2.', \''.$start.'\', \''.$end.'\')') or die(mysql_error());
		error("ok.");
	}
}
if (isset ($_GET['view']) && $_GET['view'] == 'prunereps')
{
	$db -> Execute('TRUNCATE TABLE reputation');
	error('Wyzerowałeś reputację');
}
/**
* Initialization of variables
*/
if (!isset($_GET['view']))
{
    $_GET['view'] = '';
    $arrTitles = array(ACCEPT, BAN, MODERATOR, PLAYERS, GAME, ADMINISTRATION);
    $arrOptions = array(array('addupdate.php', 'admin.php?view=addtext', 'addnews.php', 'admin.php?view=poll'),
                        array('logs', 'ban', 'del', 'delplayers'),
                        array('czat', 'banmail', 'clearf', 'forums', 'innarchive', 'clearc', 'censorship'),
                        array('addreps','donate', 'takeaway', 'jail', 'jailbreak', 'playerquest', 'changenick', 'add', 'donator', 'poczta', 'mail'),
                        array('equipment', 'monster', 'monster2', 'kowal', 'czary', 'mill'),
                        array('admin.php?view=censorship', 'bugtrack.php', 'admin.php?view=bugreport', 'admin.php?view=changelog', 'admin.php?view=register', 'admin.php?view=close'));
    $arrDescriptions = array(array (A_ADDUPDATE, A_ADD_NEWS, A_ADDNEWS, A_POLL),
                             array(A_LOGS, A_BAN, A_DELETE, A_DEL_PLAYERS),
                             array(A_CHAT_BAN, A_BAN_MAIL, A_FORUM_P, A_FORUMS, A_INNARCHIVE, A_CHAT_P, A_CENSORSHIP),
                             array (A_REPUTATION,A_DONATION, A_TAKE, A_JAIL, A_JAILBREAK, A_PLAYERQUEST, A_CHANGE_NICK, A_RANK, A_DONATOR, A_PM, A_MAIL),
                             array(A_EQUIP, A_MONSTERS, A_MONSTER2, A_SMITH, A_SPELLS, A_MILL),
                             array(A_META, A_BUGTRACK, A_BUG_REPORT, A_CHANGELOG, A_REGISTER, A_CLOSE));
    $smarty -> assign(array('Awelcome' => A_WELCOME,
                            'Titles' => $arrTitles,
                            'Options' => $arrOptions,
                            'Descriptions' => $arrDescriptions));
}
    else
{
    $smarty -> assign('Aback', A_BACK);
}

if (!isset($_GET['step']))
{
    $_GET['step'] = '';
}

if (!isset($_GET['action']))
{
    $_GET['action'] = '';
}

/**
* Assign variables and display page
*/
$smarty -> assign(array('View' => $_GET['view'],
                        'Step' => $_GET['step'],
                        'Action' => $_GET['action']));
$smarty -> display('murgrabia.tpl');

require_once('includes/foot.php');

?>
