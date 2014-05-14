<?php
/**
 *   File functions:
 *   Mastah Admin panel
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

$title = 'Panel Tawerny';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
/**
* Get the localization for game
*/
require_once('languages/'.$player -> lang.'/admin.php');

	if (isset($_GET['view']) and $_GET['view']=="innarchive")
{

if (!isset($_GET['limit']))
{
    $_GET['limit'] = 0;
}
$room=$_GET['room'];
$objQuery = $db -> Execute("SELECT count(*) FROM `chat` WHERE `room`='".$_GET['room']."'");
$intAmount = $objQuery -> fields['count(*)'];
$objQuery -> Close();
$objChat = $db -> SelectLimit("SELECT `sender`, `text`, `senderid`, `ownerid`, `time` FROM `chat` WHERE room='".$room."' ORDER BY `id` DESC", 200, $_GET['limit']);
$arrText = array();
$arrAuthor = array();
$arrSenderid = array();
$i = 0;
while (!$objChat -> EOF) 
{
    $arrText[$i] = wordwrap($objChat -> fields['text'],200,"\n",1);
	if ($objChat -> fields['ownerid'] > 0)
	{
		$test=$db->Execute("SELECT user	FROM players WHERE id=".$objChat ->fields['ownerid']);
		$imie=" (Szept do ".$test -> fields['user'].") ";
	}
	else
	{
		$imie=" ";
	}
    $arrAuthor[$i] = $imie.$objChat -> fields['sender'];
    $arrSenderid[$i] = $objChat -> fields['senderid'];
	$arrDate[$i] = date('d.m.Y\r. G:i:s', substr($objChat -> fields['time'], 0, 10));
    $objChat -> MoveNext();
    $i = $i + 1;
}
$objChat -> Close();
$smarty -> assign(array("Author" => $arrAuthor,
                        "Text" => $arrText,
						"Date" => $arrDate,
                        "Previous" => '',
                        "Next" => '',
                        "Cid" => C_ID,
                        "Senderid" => $arrSenderid));
if ($_GET['limit'] >= 200)
{
    $intBacklimit = $_GET['limit'] - 200;
    $smarty -> assign ("Previous", "<form method=\"post\" action=\"".$_SERVER['PHP_SELF']."?view=innarchive&limit=".$intBacklimit."&room=".$_GET['room']."\"><input type=\"submit\" value=\"".A_NEXT2."\"></form> ");
}
$_GET['limit'] = $_GET['limit'] + 200;
if ($intAmount > 200 && $_GET['limit'] < $intAmount) 
{
    $smarty -> assign ("Next", " <form method=\"post\" action=\"".$_SERVER['PHP_SELF']."?view=innarchive&limit=".$_GET['limit']."&room=".$_GET['room']."\"><input type=\"submit\" value=\"".A_PREVIOUS."\"></form>");
}

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
$smarty -> display('karczmaa3a.tpl');

require_once('includes/foot.php');

?>
