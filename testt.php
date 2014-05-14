<?php
/**
 *   File functions:
 *   City menu
 *
 *   @name                 : city.php
 *   @copyright            : (C) Orodlin
 *   @author               : mzah <s.paweska@gmail.com>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @author               : Marek Stasiak <l3thal2@gmail.com>
 *   @version              : preAlfa
 *   @since                : 30.09.07
 *
 */

// Published under GNU GPL 2 or later. See /install/README file for details.
// $Id$

$title = 'Altara';
require_once('includes/head.php');

/**
* Get the localization for game
*/

require_once('languages/'.$player -> lang.'/city3.php');

if($player -> location != 'Altara' && $player -> location != 'Ardulith')
{
	error (NO_CITY, RET_LOC);
}

function city()
{
	global $db, $player, $smarty, $arrTitles, $arrNames;
	$objPoll = $db -> GetRow('SELECT `value` FROM `settings` WHERE `setting`=\'poll\'');
	if ($player -> location == 'Ardulith')
	{
		if ($objPoll['value'] == 'Y' && $player -> poll == 'N')
		{
			$arrNames[5][3] = '<b>N</b> '.$arrNames[5][3];
		}

	}
	elseif ($player -> location == 'Altara')
 	{
 	
 	



	}
	$arrNews = $db -> GetRow('SELECT `id`, `starter`, `title`, `ogloszenia` FROM `ogloszenia` ORDER BY `id` DESC LIMIT 30');
	$smarty -> assign_by_ref('News', $arrNews);

	$smarty -> assign(array('Titles' => $arrTitles,
	'Files' => $arrFiles,
	'Names' => $arrNames));
}

function nubiaquest()
{
	global $db, $player, $smarty, $objItem;
	$intItem = 1;
	if (isset($_GET['step']))
	{
		if ($_GET['step'] == 'give')
		{
			$smarty -> assign('Staffquest', STAFF_QUEST1);
			$db -> Execute('DELETE FROM `equipment` WHERE `id`='.$objItem -> fields['id']);
			$db -> Execute('UPDATE `players` SET `credits`=`credits`+100000 WHERE `id`='.$player -> id);
			require_once('includes/checkexp.php');
			checkexp($player -> exp, 10000, $player -> level, $player -> race, $player -> user, $player -> id, 0, 0, $player -> id, '', 0);
		}
		elseif ($_GET['step'] == 'take')
 		{
			$smarty -> assign('Staffquest', STAFF_QUEST2);
			$db -> Execute('DELETE FROM `equipment` WHERE `id`='.$objItem -> fields['id']);
			$db -> Execute('UPDATE `players` SET `credits`=`credits`+10000 WHERE `id`='.$player -> id);
		}
	}
	return $intItem;
}

function ogloszenie()
{
	global $player, $smarty;
	$smarty -> assign('Price', $player->level*500);
}

function dodaj()
{
	global $player, $smarty, $db;
	$koszt=$player -> level * 500;
	if (empty($_POST['tytul']) || empty($_POST['tresc']))
	{
		error(ERR_FIELDS);
	}
	elseif($player -> credits < $koszt)
	{
		error(ERR_GOLD);
	}
	$db -> Execute('UPDATE `players` SET `credits`=`credits`-'.(int)$koszt.' WHERE `id`='.$player -> id);
	$_POST['tresc'] = nl2br(htmlspecialchars($_POST['tresc']));
	$_POST['tytul'] = htmlspecialchars($_POST['tytul']);
	$db -> Execute('INSERT INTO `ogloszenia` (`starter`, `title`, `ogloszenia`) VALUES(\'('.$player->user.' ID:'.$player->id.')\',\''.$_POST['tytul'].'\',\''.$_POST['tresc'].'\')');
	error (ERR_ADDED);
}

function last10()
{
	global $smarty, $db;
	$old = $db ->setFetchMode(ADODB_FETCH_NUM);
	$arrNews = $db -> GetAll('SELECT `id`, `starter`, `title`, `ogloszenia` FROM `ogloszenia` ORDER BY `id` DESC LIMIT 10');
	$smarty -> assign_by_ref('ArrNews', $arrNews);
	$db ->setFetchMode($old);
}

function del()
{
	global $smarty, $player, $db;
	if ($player -> rank != 'Admin' && $player -> rank != 'Staff')
	{
		error(PERMISSION);	
	}
	if (!isset($_GET['del']))
	{
		error(NO_ANN);
	}
	$remid = intval($_GET['del']);
	$db -> Execute('DELETE FROM `ogloszenia` WHERE `id`='.$remid.'');
	error(DELETED);
}

/**
* Initialization of variable
*/
if (!isset($_GET['step']))
{
	$_GET['step'] = '';
}

/**
* City menu
*/
$intItem = 0;
if ($player -> location == 'Altara')
{
	$objItem = $db -> Execute('SELECT `id` FROM `equipment` WHERE `name`=\''.ITEM.'\' AND `owner`='.$player -> id);
	if (!$objItem -> fields['id'] && $_GET['step']!='ogloszenie' && $_GET['step']!='dodaj' && $_GET['step']!='list')
	{
		city();
	} elseif (isset($_GET['del']))
	{
		del();
	} elseif ($_GET['step']=='list')
	{
		city();
		last10();
	} elseif ($_GET['step']=='ogloszenie') {
		ogloszenie();
	} elseif ($_GET['step']=='dodaj') {
		dodaj();
	} else {
		nubiaquest();
	}

} elseif ($player -> location == 'Ardulith') {
	if ($_GET['step']=='') {
		city();
	} elseif (isset($_GET['del']))
	{
		del();
	} elseif ($_GET['step']=='list') {
		city();
		last10();
	} elseif ($_GET['step']=='ogloszenie') {
		ogloszenie();
	} elseif ($_GET['step']=='dodaj') {
		dodaj();
	} else {
		$db -> Execute('UPDATE `players` SET `miejsce`=\'G�ry\' WHERE `id`='.$player -> id);
	}
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array('Item' => $intItem,
'Step' => $_GET['step'],
'Location' => $player -> location,
'Rank' => $player -> rank));
$smarty -> display ('testt.tpl');

require_once('includes/foot.php');
?>
	