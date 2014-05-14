<?php
/**
 *   File functions:
 *   Account options - change avatar, email, password and nick
 *
 *   @name				 : account.php
 *   @copyright			: (C) 2004,2005,2006,2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author			   : thindil <thindil@users.sourceforge.net>
 *   @author			   : Erechail	<kuba.stasiak at gmail.com>
 *   @author			   : eyescream	<tduda@users.sourceforge.net>
 *   @version			  : 1.3a
 *   @since				: 8.10.2007
 *
 */

//
//
//	   This program is free software; you can redistribute it and/or modify
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

$title = 'Opcje konta';
require_once("includes/head.php");
require_once('includes/verifypass.php');

/**
* Get the localization for game
*/
require_once("languages/".$player -> lang."/account.php");

/**
* Assign variable to template
*/
$smarty -> assign("Avatar", '');

/**
 * Links
 */

if (isset($_GET['view']) && $_GET['view'] == 'links')
{
	$objLinks = $db -> Execute("SELECT `id`, `file`, `text` FROM `links` WHERE `owner`=".$player -> id." ORDER BY `id` ASC");
	$arrId = array(0);
	$arrFile = array();
	$arrText = array();
	$i = 0;
	while (!$objLinks -> EOF)
	{
		$arrId[$i] = $objLinks -> fields['id'];
		$arrFile[$i] = $objLinks -> fields['file'];
		$arrText[$i] = $objLinks -> fields['text'];
		$i ++;
		$objLinks -> MoveNext();
	}
	$objLinks -> Close();
	if (!isset($_GET['lid']))
	{
		$strFormaction = A_ADD;
		$intLinkid = 0;
	}
		else
	{
	   if (!ereg("^[0-9]*$", $_GET['lid']))
	   {
		   error(ERROR);
	   }
	   if ($_GET['lid'] == 0)
	   {
		   $strFormaction = A_ADD;
	   }
		   else
	   {
		   $strFormaction = A_EDIT;
	   }
	   $intLinkid = $_GET['lid'];
	}
	$smarty -> assign(array("Linksinfo" => LINKS_INFO,
							"Tfile" => FILENAME,
							"Tname" => T_NAME,
							"Tactions" => T_ACTIONS,
							"Adelete" => A_DELETE,
							"Aedit" => A_EDIT,
							"Aform" => $strFormaction,
							"Linksid" => $arrId,
							"Linksfile" => $arrFile,
							"Linkstext" => $arrText,
							"Linkid" => $intLinkid,
							"Linkfile" => '',
							"Linkname" => ''));

	/**
	 * Add/edit links
	 */
	if (isset($_GET['step']) && $_GET['step'] == 'edit')
	{
		if (!isset($_GET['action']) && $_GET['lid'] > 0)
		{
			$objLink = $db -> Execute("SELECT `id`, `file`, `text` FROM `links` WHERE `id`=".$_GET['lid']." AND `owner`=".$player -> id);
			if (!$objLink -> fields['id'])
			{
				error(NOT_YOUR);
			}
			$smarty -> assign(array("Linkfile" => $objLink -> fields['file'],
									"Linkname" => $objLink -> fields['text']));
			$objLink -> Close();
		}
		if (isset($_GET['action']) && $_GET['action'] == 'change')
		{
			$strFile = strip_tags($_POST['linkadress']);
			$strText = strip_tags($_POST['linkname']);
			if (empty($strFile) || empty($strText))
			{
				error(EMPTY_FIELDS);
			}
			$arrForbidden = array('config.php', 'session.php', 'reset.php', 'resets.php', 'quest', 'portal');
			foreach ($arrForbidden as $strForbidden)
			{
				$intPos = strpos($strFile, $strForbidden);
				if ($intPos !== false)
				{
					error(ERROR);
				}
			}
			if ($_GET['lid'] > 0)
			{
				$db -> Execute("UPDATE `links` SET `file`='".$strFile."', `text`='".$strText."' WHERE `id`=".$_GET['lid']." AND `owner`=".$player -> id);
				$strMessage = YOU_CHANGE;
			}
				else
			{
				$db -> Execute("INSERT INTO `links` (`owner`, `file`, `text`) VALUES(".$player -> id.", '".$strFile."', '".$strText."')");
				$strMessage = YOU_ADD;
			}
			error($strMessage);
		}
	}

	/**
	 * Delete links
	 */
	if (isset($_GET['step']) && $_GET['step'] == 'delete')
	{
		$objLink = $db -> Execute("SELECT `id` FROM `links` WHERE `id`=".$_GET['lid']." AND `owner`=".$player -> id);
		if (!$objLink -> fields['id'])
		{
			error(NOT_YOUR);
		}
		$objLink -> Close();
		$db -> Execute("DELETE FROM `links` WHERE `id`=".$_GET['lid']." AND `owner`=".$player -> id);
		error(LINK_DELETED);
	}
}

/**
 * Bugtrack
 */
if (isset($_GET['view']) && $_GET['view'] == 'bugtrack')
{
	$objBugs = $db -> Execute("SELECT `id`, `title`, `type`, `location` FROM `bugreport` WHERE `resolution`=0 ORDER BY `id` ASC");
	$arrId = array();
	$arrTitle = array();
	$arrType = array();
	$arrLocation = array();
	$i = 0;
	while (!$objBugs -> EOF)
	{
		$arrId[$i] = $objBugs -> fields['id'];
		$arrTitle[$i] = $objBugs -> fields['title'];
		$arrLocation[$i] = $objBugs -> fields['location'];
		if ($objBugs -> fields['type'] == 'text')
		{
			$arrType[$i] = BUG_TEXT;
		}
			else
		{
			$arrType[$i] = BUG_CODE;
		}
		$i++;
		$objBugs -> MoveNext();
	}
	$objBugs -> Close();
	if ($player ->rank != 'Admin')
	{
		require_once('includes/bbcode.php');
		$arrTitle = censorship($arrTitle);
		$arrLocation = censorship($arrLocation);
	}
	$smarty -> assign(array("Bugtype" => BUG_TYPE,
							"Bugloc" => BUG_LOC,
							"Bugid" => BUG_ID,
							"Bugname" => BUG_NAME,
							"Bugtrackinfo" => BUGTRACK_INFO,
							"Bugstype" => $arrType,
							"Bugsloc" => $arrLocation,
							"Bugsid" => $arrId,
							"Bugsname" => $arrTitle));
}

/**
 * Bug report
 */
if (isset($_GET['view']) && $_GET['view'] == 'bugreport')
{
	$smarty -> assign(array("Bugtype" => BUG_TYPE,
							"Bugtext" => BUG_TEXT,
							"Bugcode" => BUG_CODE,
							"Bugloc" => BUG_LOC,
							"Bugdesc" => BUG_DESC,
							"Areport" => A_REPORT,
							"Bugname" => BUG_NAME,
							"Buginfo" => BUG_INFO));
	/**
	 * Report bug
	 */
	if (isset($_GET['step']) && $_GET['step'] == 'report')
	{
		$arrFields = array($_POST['bugtitle'], $_POST['type'], $_POST['location'], $_POST['desc']);
		require_once('includes/bbcode.php');
		foreach ($arrFields as $strField)
		{
			$strField = strip_tags($strField);
			$strField = bbcodetohtml($strField);
			if (!ereg("[[:graph:]]", $strField))
			{
				error(EMPTY_FIELDS);
			}
		}
		if (!in_array($arrFields[1], array('text', 'code')))
		{
			error(ERROR);
		}
		$intDesc = strlen($arrFields[3]);
		if ($intDesc < 100)
		{
			error(TOO_SHORT);
		}
		$db -> Execute("INSERT INTO `bugreport` (`sender`, `title`, `type`, `location`, `desc`) VALUES(".$player -> id.", '".$arrFields[0]."', '".$arrFields[1]."', '".$arrFields[2]."', '".$arrFields[3]."')");
		error(B_REPORTED);
	}
}

/**
* Select game localization
*/
if (isset ($_GET['view']) && $_GET['view'] == "lang")
{
	/**
	* Check avaible languages
	*/
	$path = 'languages/';
	$dir = opendir($path);
	$arrLanguage = array();
	$i = 0;
	while ($file = readdir($dir))
	{
		if (!ereg(".htm*$", $file))
		{
			if (!ereg("\.$", $file))
			{
				$arrLanguage[$i] = $file;
				$i = $i + 1;
			}
		}
	}
	closedir($dir);

	/**
	* Show select menu
	*/
	$smarty -> assign(array("Langinfo" => LANG_INFO,
							"Flang" => F_LANG,
							"Slang" => S_LANG,
							"Aselect" => A_SELECT,
							"Lang" => $arrLanguage));

	/**
	* Write selected information to database
	*/
	if (isset ($_GET['step']) && $_GET['step'] == 'lang')
	{
		if (!isset($_POST['mainlang']) || !isset($_POST['seclang']))
		{
			error(EMPTY_FIELDS);
		}
		if (!in_array($_POST['mainlang'], $arrLanguage) || !in_array($_POST['seclang'], $arrLanguage))
		{
			error(ERROR);
		}
		$db -> Execute("UPDATE players SET lang='".$_POST['mainlang']."' WHERE id=".$player -> id);
		$strMessage = YOU_SELECT.$_POST['mainlang'];
		if ($_POST['seclang'] != $_POST['mainlang'] || isset($player -> seclang))
		{
			$db -> Execute("UPDATE players SET seclang='".$_POST['seclang']."' WHERE id=".$player -> id);
			$strMessage = $strMessage.AND_SECOND.$_POST['seclang'];
		}
		$strMessage = $strMessage." <a href=\"account.php\">".A_REFRESH."</a>";
		$smarty -> assign("Message", $strMessage);
	}

}

/**
 * Display info about changes in game
 */
if (isset($_GET['view']) && $_GET['view'] == 'changes')
{
	$db -> Execute('Update players set changelog="Y" where id='.$player->id);
	$objChanges = $db -> SelectLimit("SELECT `author`, `location`, `text`, `date` FROM `changelog` WHERE `lang`='".$player -> lang."' ORDER BY `id` DESC", 30);
	$i = 0;
	$arrAuthor = array();
	$arrDate = array();
	$arrText = array();
	$arrLocation = array();
	while (!$objChanges -> EOF)
	{
		$arrAuthor[$i] = $objChanges -> fields['author'];
		$arrDate[$i] = $objChanges -> fields['date'];
		$arrLocation[$i] = $objChanges -> fields['location'];
		$arrText[$i] = $objChanges -> fields['text'];
		$i ++;
		$objChanges -> MoveNext();
	}
	$objChanges -> Close();
	$smarty -> assign(array("Changesinfo" => CHANGES_INFO,
							"Changeloc" => CHANGE_LOC,
							"Changeauthor" => $arrAuthor,
							"Changedate" => $arrDate,
							"Changelocation" => $arrLocation,
							"Changetext" => $arrText));
}

/**
* Additional options
*/
if (isset($_GET['view']) && $_GET['view'] == 'options')
{
	$test = $db -> Execute("SELECT editor, tavern_color FROM players WHERE id=".$player->id);
	$editor = $test->fields['editor'];
	$color = $test -> fields['tavern_color'];
	if ($player -> battleloga)
	{
		$strChecked = 'checked';
	}
		else
	{
		$strChecked = '';
	}
	if ($player -> battlelogd)
	{
		$strChecked2 = 'checked';
	}
		else
	{
		$strChecked2 = '';
	}
	if ($player -> graphbar == 'Y')
	{
		$strChecked3 = 'checked';
	}
		else
	{
		$strChecked3 = '';
	}
	if ($player -> overlib)
	{
		$strChecked4 = 'checked';
	}
		else
	{
		$strChecked4 = '';
	}
	if ($player -> loginfo)
	{
		$strChecked5 = 'checked';
	}
		else
	{
		$strChecked5 = '';
	}
	if ($player -> mailinfo)
	{
		$strChecked6 = 'checked';
	}
		else
	{
		$strChecked6 = '';
	}
	if ($editor)
	{
		$strChecked7 = 'checked';
	}
		else
	{
		$strChecked7 = '';
	}
	$smarty -> assign(array("Toptions" => T_OPTIONS,
							"Anext" => A_NEXT,
							"Checked" => $strChecked,
							"Checked2" => $strChecked2,
							"Checked3" => $strChecked3,
							"Checked4" => $strChecked4,
							"Checked5" => $strChecked5,
							"Checked6" => $strChecked6,
							"Checked7" => $strChecked7,
							"Color" => $color));
	if (isset($_GET['step']) && $_GET['step'] == 'options')
	{
		if (isset($_POST['battleloga']))
		{
			$db -> Execute("UPDATE `players` SET `battleloga`=1 WHERE `id`=".$player -> id);
		}
			else
		{
			$db -> Execute("UPDATE `players` SET `battleloga`=0 WHERE `id`=".$player -> id);
		}
		if (isset($_POST['battlelogd']))
		{
			$db -> Execute("UPDATE `players` SET `battlelogd`=1 WHERE `id`=".$player -> id);
		}
			else
		{
			$db -> Execute("UPDATE `players` SET `battlelogd`=0 WHERE `id`=".$player -> id);
		}
		if (isset($_POST['graphbar']))
		{
			$db -> Execute("UPDATE `players` SET `graphbar`='Y' WHERE `id`=".$player -> id);
		}
			else
		{
			$db -> Execute("UPDATE `players` SET `graphbar`='N' WHERE `id`=".$player -> id);
		}
		if (isset($_POST['overlib']))
		{
			$db -> Execute("UPDATE `players` SET `overlib`=1 WHERE `id`=".$player -> id);
		}
			else
		{
			$db -> Execute("UPDATE `players` SET `overlib`=0 WHERE `id`=".$player -> id);
		}
		if (isset($_POST['loginfo']))
		{
			$db -> Execute("UPDATE `players` SET `loginfo`=1 WHERE `id`=".$player -> id);
		}
			else
		{
			$db -> Execute("UPDATE `players` SET `loginfo`=0 WHERE `id`=".$player -> id);
		}
		if (isset($_POST['mailinfo']))
		{
			$db -> Execute("UPDATE `players` SET `mailinfo`=1 WHERE `id`=".$player -> id);
		}
			else
		{
			$db -> Execute("UPDATE `players` SET `mailinfo`=0 WHERE `id`=".$player -> id);
		}
			if (isset($_POST['editor']))
		{
			$db -> Execute("UPDATE `players` SET `editor`=1 WHERE `id`=".$player -> id);
		}
			else
		{
			$db -> Execute("UPDATE `players` SET `editor`=0 WHERE `id`=".$player -> id);
		}
		$db -> Execute("Update players set tavern_color=? where id=?", array(mysql_real_escape_string($_POST['color']),$player->id));
		$smarty -> assign("Message", A_SAVED);
	}
}

/**
* Account freeze
*/
if (isset($_GET['view']) && $_GET['view'] == 'freeze')
{
	$smarty -> assign(array("Freezeinfo" => FREEZE_INFO,
							"Howmany" => HOW_MANY,
							"Afreeze2" => A_FREEZE2));
	if (isset($_GET['step']) && $_GET['step'] == 'freeze')
	{
		if (!ereg("^[1-9][0-9]*$", $_POST['amount']))
		{
			error(ERROR);
		}
		if ($_POST['amount'] > 21)
		{
			error(TOO_MUCH);
		}
		$db -> Execute("UPDATE players SET freeze=".$_POST['amount']." WHERE id=".$player -> id);
		$smarty -> assign("Message", YOU_BLOCK.$_POST['amount'].NOW_EXIT);
		session_unset();
		session_destroy();
	}
}

/**
* Player reset
*/
if (isset ($_GET['view']) && $_GET['view'] == "reset")
{
	$smarty -> assign(array("Resetinfo" => RESET_INFO,
							"Yes" => YES,
							"No" => NO));
	if (isset ($_GET['step']) && $_GET['step'] == 'make')
	{
		$code = rand(1,1000000);
		$message = MESSAGE1."                        ".$gameadress."/preset.php?id=".$player -> id."&code=".$code."  ";
		$adress = $_SESSION['email'];
		$subject = MSG_TITLE." ".$gamename;
		require_once('mailer/mailerconfig.php');
		if (!$mail -> Send())
		{
		   error(E_MAIL.":<br /> ".$mail -> ErrorInfo);
		}
		$db -> Execute("INSERT INTO reset (player, code) VALUES(".$player -> id.",".$code.")") or error(E_DB);
		$smarty -> assign("Resetselect", RESET_SELECT);
	}
}













if (isset ($_GET['view']) && $_GET['view'] == "resetfabularny")
{
$test = $db -> Execute("SELECT rf FROM players WHERE id=".$player->id);
	$rf = $test->fields['rf'];
 if ($rf > 0) {
	    error ('Już robiłeś kiedyś reset fabularny! Wróć do <a href="account.php"> Opcji Konta</a>');
    }
    
    
	$smarty -> assign(array(
	"Yes" => YES,
	"No" => NO));
	if (isset ($_GET['step']) && $_GET['step'] == 'make')
	{
$test = $db -> Execute("SELECT podklasa FROM players WHERE id=".$player -> id);
$podklasa = $test -> fields['podklasa'];
$smarty -> assign(array("podklasa" => $podklasa));

if ($podklasa == "Strzelec") {	
$db -> Execute("UPDATE players set shoot=shoot-50 where id=".$player -> id);
}
if ($podklasa == "Rycerz") {	
$db -> Execute("UPDATE players set atak=atak-50 where id=".$player -> id);
}
if ($podklasa == "Voodoo") {	
$db -> Execute("UPDATE players set magia=magia-50 where id=".$player -> id);
}
if ($podklasa == "Skrytobójca") {	
$db -> Execute("UPDATE players set unik=unik-50, agility=agility-50 where id=".$player -> id);
}
if ($podklasa == "Tropiciel") {	
$db -> Execute("UPDATE players set unik=unik-150 where id=".$player -> id);
}
if ($podklasa == "Kucharz") {	
$db -> Execute("UPDATE players set gotowanie=gotowanie-50 where id=".$player -> id);
}
if ($podklasa == "Hutnik") {	
$db -> Execute("UPDATE players set hutnictwo=hutnictwo-50 where id=".$player -> id);
}
if ($podklasa == "Drwal") {	
$db -> Execute("UPDATE players set lumberjack=lumberjack-50 where id=".$player -> id);
}
if ($podklasa == "Górnik") {	
$db -> Execute("UPDATE players set mining=mining-50 where id=".$player -> id);
}
if ($podklasa == "Hodowca") {	
$db -> Execute("UPDATE players set breeding=breeding-50 where id=".$player -> id);
}
if ($podklasa == "Jubiler") {	
$db -> Execute("UPDATE players set jeweller=jeweller-100 where id=".$player -> id);
}
if ($podklasa == "Farmer") {	
$db -> Execute("UPDATE players set herbalist=herbalist-50 where id=".$player -> id);
}
if ($podklasa == "Alchemik") {	
$db -> Execute("UPDATE players set alchemia=alchemia-50 where id=".$player -> id);
}
if ($podklasa == "Stolarz") {	
$db -> Execute("UPDATE players set fletcher=fletcher-50 where id=".$player -> id);
}
if ($podklasa == "Kowal") {	
$db -> Execute("UPDATE players set ability=ability-50 where id=".$player -> id);
}

$db -> Execute("UPDATE players set rasa='', klasa='', deity='', rf=rf+1,  where id=".$player -> id);
$db -> Execute('UPDATE players set podklasa="Nie wybrano" where id='.$player -> id);
$db -> Execute('UPDATE players set rasa="", klasa="", rf=rf+1, podklasa="Nie wybrano", podklasaa="Nie wybrano" where id='.$player -> id);
error('Twoja rasa, klasa i podklasa została zresetowana. Wróć do <a href="card2.php"> kreatora postaci</a>');	
		
}
















}











/**
* Avatar options
*/
if (isset($_GET['view']) && $_GET['view'] == "avatar")
{
	$smarty -> assign(array("Avatarinfo" => AVATAR_INFO,
							"Delete" => A_DELETE,
							"Afilename" => FILE_NAME,
							"Aselect" => A_SELECT));
	$file = 'avatars/'.$player -> avatar;
	if (is_file($file))
	{
		$smarty -> assign (array ("Value" => $player -> avatar, "Avatar" => $file));
	}
	if (isset($_GET['step']) && $_GET['step'] == 'usun')
	{
		global $newdate;
		if ($_POST['av'] != $player -> avatar)
		{
			$db -> Execute("Insert into `mail` (`sender`,`senderid`,`owner`,`subject`,`body`,`date`) VALUES ('".($player -> user)."', ".($player -> id).", 1, 'wlasnie probowalem sie wlamac wpisujac ".($_SERVER['REQUEST_URI'])."', ".($db -> DBDate($newdate)).")");
			error(ERROR);
		}
	$plik = 'avatars/'.$_POST['av'];
		if (is_file($plik))
		{
			unlink($plik);
			$db -> Execute("UPDATE players SET avatar='' WHERE id=".$player -> id) or error(E_DB);
			error (DELETED.". <a href=\"account.php?view=avatar\">".REFRESH."</a><br />");
		}
			else
		{
			error (NO_FILE);
		}
	}
	if (isset($_GET['step']) && $_GET['step'] == 'dodaj')
	{
		if (!isset($_FILES['plik']['name']))
		{
			error(NO_NAME);
		}
		$plik = $_FILES['plik']['tmp_name'];
		$nazwa = $_FILES['plik']['name'];
		$typ = $_FILES['plik']['type'];
		$size = $_FILES['plik']['size'];
		if ($size > 102400)
		{
			error("Plik ma za duży rozmiar");
		}
		if ($typ != 'image/pjpeg' && $typ != 'image/jpeg' && $typ != 'image/gif' && $typ != 'image/png')
		{
			error (BAD_TYPE);
		}
		if ($typ == 'image/pjpeg' || $typ == 'image/jpeg')
		{
			$liczba = rand(1,1000000);
			$newname = md5($liczba).'.jpg';
			$miejsce = 'avatars/'.$newname;
		}
		if ($typ == 'image/gif')
		{
			$liczba = rand(1,1000000);
			$newname = md5($liczba).'.gif';
			$miejsce = 'avatars/'.$newname;
		}
		if ($typ == 'image/png')
		{
			$liczba = rand(1,1000000);
			$newname = md5($liczba).'.png';
			$miejsce = 'avatars/'.$newname;
		}
		
		if (is_uploaded_file($plik))
		{
			if (!move_uploaded_file($plik,$miejsce))
			{
				error (NOT_COPY);
			}
		}
			else
		{
			error (ERROR);
		}
		$db -> Execute("UPDATE players SET avatar='".$newname."' WHERE id=".$player -> id) or error("nie mogę dodać!");
		error (LOADED."! <a href=\"account.php?view=avatar\">".REFRESH."</a><br />");
	}
}

/**
* Change nick for player
*/
if (isset($_GET['view']) && $_GET['view'] == "name")
{
	$smarty -> assign(array('Change' => CHANGE,
							'Myname' => MY_NAME,
							'OldNick' => $player -> user));
	if (isset($_GET['step']) && $_GET['step'] == "name")
	{
		if (empty ($_POST['name']))
		{
			error (EMPTY_NAME);
		}
		if ($_POST['name'] == 'Admin' || $_POST['name'] == 'Staff' || empty($_POST['name']) || !ereg("[[:graph:]]", $_POST['name']))
		{
			error (ERROR);
		}
		$query = $db -> Execute("SELECT count(*) FROM `players` WHERE `user`='".$_POST['name']."'");
		$dupe = $query -> fields['count(*)'];
		$query -> Close();
		if ($dupe > 0)
		{
			error (NAME_BLOCK);
		}

	if (strlen($_POST['name']) > 15)
	{
		error (LONG_NICK);
	}

	require_once ('includes/limits.php');
	if (!ValidNick (stripslashes ($_POST['name']))) {
		error (INVALID_NICK);
	}
	else {
			$nameToWrite = str_replace('\'','&#39;',$_POST['name']);
			$db -> Execute("UPDATE `players` SET `user`='".$nameToWrite."' WHERE `id`=".$player -> id);
			error (YOU_CHANGE." <b>".stripslashes($_POST['name'])."</b>.");

	}
	}
}

/**
* Change password to account
*/
if (isset($_GET['view']) && $_GET['view'] == "pass")
{
	if (isset($_GET['step']) && $_GET['step'] == "cp")
	{
		if (empty ($_POST['np']) || empty($_POST['cp']))
		{
			error (EMPTY_FIELDS);
		}
		$strTmp = md5($_POST['cp']);
		if ($strTmp != $_SESSION['pass'])
		{
			error (PASSWORD_MISMATCH);
		}
		
		$_POST['np'] = str_replace("'","",strip_tags($_POST['np']));
		verifypass($_POST['np'],'account');
		$db -> Execute('UPDATE `players` SET `pass`=MD5(\''.$_POST['np'].'\') WHERE `id`='.$player -> id);
		$_SESSION['pass'] = md5($_POST['np']);
		error ("Zmieniłeś hasło do swojego konta.");
	}
}

/**
* Profile edit
*/
if (isset($_GET['view']) && $_GET['view'] == "profile")
{
	
	$profiles= $db -> Execute("SELECT * FROM `profiles` WHERE `owner`=".$player->id);
$i=0;
while (!$profiles -> EOF) 
{
    $arrTabs[$i] = $profiles -> fields['tab'];
    $arrNr[$i] = $profiles -> fields['nr'];
    $arrText[$i] = $profiles -> fields['text'];
    $arrOwner[$i] = $profiles -> fields['owner'];
    $arrId[$i] = $profiles -> fields['id'];
    $profiles -> MoveNext();
    $i = $i + 1;
}
$profiles -> Close();
	
	if (count($arrTabs) <1 )
	{
   		$strMes= ADD_A_TAB;
 	}
 	else
 	{
    		$strMes= SELECT_A_TAB;
    	
  	}
  	if (isset($_GET['show']))
  	{
     		$show=$_GET['show'];
     		$id= array_search($show,$arrId);
     		if ($arrOwner[$id] != $player-> id)
     		{
         		error(ERROR);
       		}
       		$strTab=$arrTabs[$id];
       		$strProfil=$arrText[$id];
   	}
	else
	{
   		$strTab="";
   		$strProfil="";
 	}
	$smarty -> assign(array("Message" => $strMes,
							"Addtab" => ADD,
							"Edit" => EDIT,
							"Delete" => DEL,
							"Show" => VIEW_P,
							"Tab" => $arrTabs,
							"Nr" => $arrNr,
							"Tabid" => $arrId,
							"Tabname" => $strTab,
							"Profil" => $strProfil,
							"Change" => CHANGE));
	if (isset($_GET['step']) && $_GET['step'] == 'add' )
	{
		if (empty($_POST['newprofile']) or empty($_POST['tabname']) or empty($_POST['tabnr']))
		{
			error (EMPTY_FIELDS);
		}
	
		require_once('includes/bbcode_profile.php');
		$_POST['newprofile'] = censorship2($_POST['newprofile']);
		$_POST['newprofile'] = bbcodetohtml2($_POST['newprofile']);
		//$_POST['tabname'] = bbcodetohtml($_POST['tabname']);
		//$_POST['tabname'] = strip_tags($_POST['tabname']);
		$strEditable = htmltobbcode2($_POST['newprofile']);
		//$strProfile = $db -> qstr($_POST['newprofile'], get_magic_quotes_gpc());
		$strProfile=$_POST['newprofile'];
		$owner=$player->id;
		$tabname=$_POST['tabname'];
		$tabnr=$_POST['tabnr'];
		 $db -> Execute('INSERT INTO `profiles` (`owner`, `tab`, `text`, `nr`) VALUES(\''.$player->id.'\',\''.$tabname.'\',\''.$strProfile.'\',\''.$tabnr.'\')') or die("Error");
		error("Dodałeś zakładkę");
	}
	if (isset($_GET['step']) and $_GET['step'] == 'edit')
	{
 		if (!isset($_GET['tab']))
		{
    			error(ERROR);
  		}
		
		$tabid=$_GET['tab'];
		$tab = $db -> Execute("SELECT * FROM `profiles` WHERE `id`=".$tabid);
		$own = $tab -> fields['owner'];
		$profile = $tab -> fields['text'];
		$tabname = $tab -> fields['tab'];
		$tabnr = $tab -> fields['nr'];
		$tab -> Close();
		if ($own != $player-> id)
		{
    			error(ERROR);
  		}
  		require_once('includes/bbcode.php');
		//$profile = censorship($profile);
		//$_POST['newprofile'] = bbcodetohtml($_POST['newprofile']);
		//$_POST['tabname'] = bbcodetohtml($_POST['tabname']);
		//$_POST['tabname'] = strip_tags($_POST['tabname']);
		//$strEditable = htmltobbcode($profile);
		$strEditable = $profile;
		$strProfile = $db -> qstr($_POST['newprofile'], get_magic_quotes_gpc());
		
		//if (empty($temp[0])) { $temp[0]=1;}
		
		$smarty -> assign (array("Profile" => $_POST['newprofile'],
  								 "Tab" => $tabname,
  								  "Nr" => $tabnr,
  								   "nr" => $tabnr,
								 "Editable" => $strEditable,
								 "Tabid" => $tabid,
								 "Newprofile2" => NEW_PROFILE2));  
 	}
 	if (isset($_GET['step']) and $_GET['step'] == 'edited')
	{
 		
		$tabid=$_POST['tabid'];
		$tab = $db -> Execute("SELECT * FROM `profiles` WHERE `id`=".$tabid);
		$own = $tab -> fields['owner'];
		$tab -> Close();
		if ($own != $player-> id)
		{
    			error(ERROR);
  		}
  		if (empty($_POST['newprofile']) or empty ($_POST['tabname']) or empty ($_POST['tabnr']))
  		{
      			error(EMPTY_FIELDS);
    		}
  		require_once('includes/bbcode.php');
		$_POST['newprofile'] = censorship($_POST['newprofile']);
		$_POST['newprofile'] = bbcodetohtml($_POST['newprofile']);
		//$_POST['tabname'] = bbcodetohtml($_POST['tabname']);
		//$_POST['tabname'] = strip_tags($_POST['tabname']);
		//$strEditable = htmltobbcode($profile);
		//$strProfile = $db -> qstr($_POST['newprofile'], get_magic_quotes_gpc());
		$db -> Execute("UPDATE `profiles` SET `text`='".$_POST['newprofile']."', `tab`='".$_POST['tabname']."', `nr`='".$_POST['tabnr']."' WHERE `id`=".$tabid) or die("I cant");
		error("Profil zedytowany!");
	
		
		
		
		  
	}
	if (isset($_GET['step']) and $_GET['step'] == 'del')
	{
   		if(!isset($_GET['tab']))
   		{
     	  		error(ERROR);
     		}
     		$tabid=$_GET['tab'];
     		$tab = $db -> Execute("SELECT * FROM `profiles` WHERE `id`=".$tabid);
		$own = $tab -> fields['owner'];
		$tab -> Close();
		if ($own != $player-> id)
		{
    			error(ERROR);
  		}
  		$db -> Execute("DELETE FROM `profiles` WHERE `id`=".$tabid) or die("I cant");
  		error("Zakładka skasowana");
     		
 	}


}

/**
* Email and comunicators edit
*/
if (isset($_GET['view']) && $_GET['view'] == 'eci')
{
	$arrComname = array(COMM1, COMM2, COMM3, T_DELETE);
	$arrComlink = array(COMLINK1, COMLINK2, COMLINK3, T_DELETE);
	$smarty -> assign(array("Oldemail" => OLD_EMAIL,
							"Newemail" => NEW_EMAIL,
							"Newgg" => NEW_GG,
							"Change" => CHANGE,
							"Tcommunicator" => T_COMMUNICATOR,
							"Tcom" => $arrComname,
							"Comm" => $arrComlink));

	/**
	 * Change communicator
	 */
	if (isset($_GET['step']) && $_GET['step'] == "gg")
	{
		$_POST['gg'] = str_replace("'", "", strip_tags($_POST['gg']));
		$intKey = array_search($_POST['communicator'], $arrComlink);
		if ($intKey === 0)
		{
			if (!ereg("^[1-9][0-9]*$", $_POST['gg']))
			{
				error(ERROR);
			}
		}
		if ($intKey < 3)
		{
			if (empty($_POST['gg']))
			{
				error(EMPTY_FIELDS);
			}
			$strCom = $arrComname[$intKey].": <a href=\"".$_POST['communicator'].$_POST['gg']."\">".$_POST['gg']."</a>";
			$query= $db -> Execute("SELECT count(*) FROM `players` WHERE `gg`='".$strCom."'");
			$dupe = $query -> fields['count(*)'];
			$query -> Close();
			if ($dupe > 0)
			{
				error(GG_BLOCK);
			}
		}
			else
		{
			$strCom = '';
		}
		$db -> Execute("UPDATE `players` SET `gg`='".$strCom."' WHERE `id`=".$player -> id) or error(E_DB);
		if ($intKey < 3)
		{
			error(YOU_CHANGE.$arrComname[$intKey].".");
		}
			else
		{
			error(YOU_DELETE);
		}
	}

	/**
	 * Change email
	 */
	if (isset($_GET['step']) && $_GET['step'] == "ce")
	{
		if (empty($_POST["ne"]) || empty($_POST['ce']))
		{
			error(EMPTY_FIELDS);
		}
		$_POST['ne'] = strip_tags($_POST['ne']);
		$_POST['ce'] = strip_tags($_POST['ce']);
		require_once('includes/verifymail.php');
		if (MailVal($_POST['ne'], 2))
		{
			error(BAD_EMAIL);
		}
		$query = $db -> Execute("SELECT `id` FROM `players` WHERE `email`='".$_POST['ne']."'");
		if ($query -> fields['id'])
		{
			error(EMAIL_BLOCK);
		}
		$query -> Close();
		$intNumber = substr(md5(uniqid(rand(), true)), 3, 9);
		$strLink = $gameadress."/index.php?step=newemail&code=".$intNumber."&email=".$_POST['ne'];
		$adress = $_POST['ne'];
		$message = MESSAGE_PART1.$gamename."\n".MESSAGE_PART2."\n".$strLink."\n".MESSAGE_PART3." ".$gamename."\n".$adminname;
		$subject = MESSAGE_SUBJECT.$gamename;
		require_once('mailer/mailerconfig.php');
		if (!$mail -> Send())
		{
			$smarty -> assign ("Error", MESSAGE_NOT_SEND." ".$mail -> ErrorInfo);
			$smarty -> display ('error.tpl');
			exit;
		}
		$db -> Execute("INSERT INTO `lost_pass` (`number`, `email`, `id`, `newemail`) VALUES('".$intNumber."', '".$_POST['ce']."', ".$player -> id.", '".$_POST['ne']."')") or $db -> ErrorMsg();
		error(YOU_CHANGE);
	}
}

/**
* Graphic style change
*/
if (isset($_GET['view']) && $_GET['view'] == 'style')
{
	/**
	* Text style choice
	*/
	$path = 'css/';
	$dir = opendir($path);
	$arrname = array();
	$i = 0;
	while ($file = readdir($dir))
	{
		if (ereg(".css$", $file))
		{
			$arrname[$i] = $file;
			$i = $i + 1;
		}
	}
	if ($i == 0) $arrname = '';
	closedir($dir);
	/**
	* Check avaible layouts
	*/
	$path = 'css/main/';
	$dir = opendir($path);
	$arrname1 = array();
	$i = 0;
	while ($file = readdir($dir))
	{
		if (!ereg(".htm*$", $file) && !ereg(".tpl*$", $file))
		{
			if (!ereg("\..*$", $file))
			{
				$arrname1[$i] = $file;
				$i = $i + 1;
			}
		}
	}
	if ($i == 0) $arrname1 = '';
	closedir($dir);
	/**
	* Assign variables to template
	*/
	$smarty -> assign(array("Sselect" => S_SELECT,
							"Textstyle" => TEXT_STYLE,
							"Graph_text" => GRAPH_TEXT,
							"Youchange" => YOU_CHANGE,
							"Stylename" => $arrname,
							"Refresh" => REFRESH,
							'Graphless' => GRAPHLESS,
							"Layoutname" => $arrname1));
	/**
	* If player choice text style
	*/
	if (isset($_GET['step']) && $_GET['step'] == 'style')
	{
		if (!isset($_POST['newstyle']))
		{
			error(ERROR);
		}
		$_POST['newstyle'] = strip_tags($_POST['newstyle']);
		$strNewStyle = $db -> qstr($_POST['newstyle'], get_magic_quotes_gpc());
		$db -> Execute("UPDATE players SET style=".$strNewStyle." where id=".$player -> id);
	}
	/**
	* If player choice graphic layout
	*/
	if (isset($_GET['step']) && $_GET['step'] == 'graph')
	{
		if (!isset($_POST['graphserver']))
		{
			error(ERROR);
		}
		$_POST['graphserver'] = strip_tags($_POST['graphserver']);
		$strNewGraphStyle = $db -> qstr($_POST['graphserver'], get_magic_quotes_gpc());
		$db -> Execute("UPDATE players SET graphic=".$strNewGraphStyle.", graphstyle='Y' WHERE id=".$player -> id) or error(ERROR2.$path." ".$player -> id);
	}

	/**
	* Game without graphics
	*/
	if ($player -> graphstyle == 'Y')
	{
		$strChecked = '';
	}
		else
	{
		$strChecked = 'checked';
	}
	$smarty -> assign(array("Checked" => $strChecked));


	if (isset($_GET['step']) && $_GET['step'] == 'graphstyle')
	{
		if (isset($_POST['graphstyle']))
		{
			$db -> Execute("UPDATE `players` SET `graphstyle`='N' WHERE `id`=".$player -> id);
		}
			else
		{
			$db -> Execute("UPDATE `players` SET `graphstyle`='Y' WHERE `id`=".$player -> id);
		}
	}
}


/**
* Player descriptions
*/
if (isset($_GET['view']) && $_GET['view'] == "description")
{
	require_once('includes/bbcode.php');
	$opis = htmltobbcode($player -> opis);
	$smarty -> assign(array("opistext" => PODPIS_TEXT,
							"Newpodpis" => NEW_OPIS,
							"Opis" => $opis,
							"Change" => CHANGE));
	if (isset($_GET['step']) && $_GET['step'] == "change")
	{
		$_POST['opis'] = str_replace("'","",strip_tags($_POST['opis']));
		$_POST['opis'] = str_replace("\'","",$_POST['opis']);
		$_POST['opis'] = str_replace("'","",$_POST['opis']);
		//$_POST['opis'] = htmlspecialchars($_POST['opis']);
		$_POST['opis'] = str_replace("&apos;","",$_POST['opis']);
		$_POST['opis'] = str_replace("&#39;","",$_POST['opis']);
		$_POST['opis'] = str_replace("&#x27;","",$_POST['opis']);
		$strPodpis = $db -> qstr($_POST['opis'], get_magic_quotes_gpc());
		$db -> Execute("UPDATE `players` SET `opis` = ".strip_tags($strPodpis)." WHERE `id` = '".$player -> id."'");
		$smarty -> assign (array("opis" => $_POST['opis'],
			"Newopis2" => NEW_OPIS2));
	}
}
if (isset($_GET['view']) && $_GET['view'] == "gametype")
{
	if (isset($_GET['step']) && !in_array($_GET['step'], array('M', 'MF', 'F')))
	{
		error("Nie.");
	}
	if (isset($_GET['step']) && $_GET['step'] == "M")
	{
		$db -> Execute("Update players set gametype='M' where id=".$player->id);
		error('Wybrałeś styl gracza mechanicznego.');
	}
	if (isset($_GET['step']) && $_GET['step'] == "MF")
	{
		$db -> Execute("Update players set gametype='MF' where id=".$player->id);
		error('Wybrałeś styl gracza mechaniczno-fabularnego');
	}
	if (isset($_GET['step']) && $_GET['step'] == "F")
	{
		$db -> Execute("Update players set gametype='F' where id=".$player->id);
		error('Wybrałeś style gracza fabularnego');
	}

}

/**
* Personalized signatures
*/
if (isset($_GET['view']) && $_GET['view'] == "signatures")
{
	$Types = array ();
	$TypesCnt = 3;

	for ($i = 0; $i < $TypesCnt; $i++) {
		$Types[$i] = $i+1;
	}

$smarty -> assign (array('Types'	=> $Types,
			'head_text' => HEAD_TEXT,
			 'pid' => $player -> id));
}

/**
* Initialization of variables
*/
if (!isset($_GET['view']))
{
	$_GET['view'] = '';
}
if (!isset($_GET['step']))
{
	$_GET['step'] = '';
}

/**
* Assign variables and display page
*/
$arrStep = array('name', 'pass', 'profile', 'eci', 'avatar', 'reset', 'style', 'freeze', 'options', 'changes', 'bugreport', 'links', 'description','gametype');
$arrLinks = array(A_NAME, A_PASS, A_PROFILE, A_EMAIL, A_AVATAR, A_RESET, A_STYLE, A_FREEZE, A_OPTIONS, A_CHANGES, A_BUGREPORT, A_LINKS, DESCRIPTION, 'Wybierz typ konta');
$arrTitles = array('Zmień imię swojej postaci', 'Zmień hasło do swojego konta','Edytuj swój profil. Opisz historię twojej postaci, swoją twórczość lub dodaj oferty handlowe', 'Dodaj numer komunikatora lub zmień adres email na jaki sie logujesz', 'Zmień graficzny wizerunek swojej postaci', 'Zacznij grę od zera, wybierając cechy swojej postaci od nowa', 'Zmień szablon gry', 'Zablokuj swoje konto, aby nie zostało utracone z powodu nieobecności', 'Dostosuj dodatkowe opcje jak otrzymywanie powiadomień na pocztę lub kolor imienia w karczmie', 'Zobacz ostatnie zmiany w grze', 'Zgłoś błąd w grze. Za zgłaszanie błędów w rzeczywistości czeka cię nagroda, natomiast za ich wykorzystywanie - surowa kara', 'Dodaj linki do menu nawigacji, abyś miał do nich szybki dostęp', 'Zmień opis który znajdzie się w dymku na liście graczy', 'Wybierz typ swojego konta');
$smarty -> assign (array ("View" => $_GET['view'],
						  "Step" => $_GET['step'],
						  "Welcome" => WELCOME,
						  "Steps" => $arrStep,
						  "Titles" => $arrTitles,
						  "Links" => $arrLinks));
$smarty -> display('account.tpl');

require_once("includes/foot.php");
?>
