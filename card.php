<?php
/**
 *   File functions:
 *   Player card
 *
 *   @name                 : card.php
 *   @copyright            : (C) 207 Orodlin Team based on Gamers-Fusion ver 2.5 and Vallheru Engine
 *   @author               : Marek Stasiak (l3thal2@gmail.com)
 *   @version              : 
 *   @since                : 
 *
//
// $Id: index.php 835 2006-11-22 17:40:22Z thindil $
*/
$title1 = "Powitanie"; //cos pojebanego z tym jest
$title = "Powitanie"; //raz title1 raz title

require_once('includes/head.php');
require_once('languages/pl/card.php');

if (!isset($_GET['action']))
{
	$_GET['action'] = '';
}
if (!isset($_GET['select']))
{
	$_GET['select'] = '';
}
if (!isset($_GET['step']))
{
	$_GET['step'] = '';
}
if (!isset($_GET['step2']))
{
	$_GET['step2'] = '';
}

$Query = $db -> Execute('SELECT `changed_loc` FROM `players` WHERE `id`='.$player -> id);
$Changed_loc = $Query -> fields['changed_loc'];

if ($_GET['action'] == 'gender')
{
	if ($player -> gender != '')
	{
		error(C_BADCHOICE);
	}
	if (isset($_POST['gender']) && ($_POST['gender'] == 'M' || $_POST['gender'] == 'F'))
	{
        	$db -> Execute("UPDATE `players` SET `gender`='".$_POST['gender']."' WHERE `id`=".$player -> id);
		error(C_GSELECTED);
	}
}

if ($_GET['action'] == 'race')
{
	if ($player -> race != '')
	{
		error(C_BADCHOICE);
	}
	if ($player -> gender == '')
	{
		error(C_NOGENDER);
	}
	$arrRaceNames = array('human', 'elf', 'dwarf', 'hobbit', 'reptilion', 'gnome', 'darkelf', 'undead', 'tauren', 'unded', 'ork', 'centaur', 'mountain_orc', 'ogre', 'drake', 'kobold', 'daemon', 'treefolk', 'shadow', 'seraphim');
	$arrRaces = array('Człowiek', 'Elf', 'Krasnolud', 'Hobbit', 'Jaszczuroczłek', 'Gnom', 'Mroczny Elf', 'Nieumarły', 'Tauren', 'Umarlak', 'Ork', 'Centaur', 'Górski Ork', 'Ogr', 'Półsmok', 'Kobold', 'Demon', 'Półent', 'Cień', 'Serafin');
	$smarty -> assign_by_ref('RaceNames', $arrRaceNames);
	$smarty -> assign_by_ref('Races', $arrRaces);
	if (isset($_GET['select']) && $_GET['select'] != '' && isset ($_GET['step']) && $_GET['step'] == 'mark') 
	{
		$intKey = array_search($_GET['select'], $arrRaceNames);
                $avQuery = $db -> Execute('SELECT `avatar` FROM `players` WHERE `id`='.$player -> id);
		$avatar = $avQuery -> fields['avatar'];
		if (ereg('default', $avatar))
		{
			$gnd = strtolower($player -> gender);
			$newavatar = "default/".$arrRaceNames[$intKey]."_".$gnd.".jpg";
       			$db -> Execute('UPDATE `players` SET `rasa`=\''.$arrRaces[$intKey].'\', `avatar`=\''.$newavatar.'\' WHERE `id`='.$player -> id);
		}
		else
		{
       		$db -> Execute('UPDATE `players` SET `rasa`=\''.$arrRaces[$intKey].'\' WHERE `id`='.$player -> id);
		}
		error (C_RSELECTED);	
    	}
}

if ($_GET['action'] == 'class')
{
	if ($player -> clas != '')
	{
		error(C_BADCHOICE);
	}
	if ($player -> race == '')
	{
		error(C_NORACE);
	}
	$arrClassNames = array('warrior', 'mage', 'barbarian', 'thief', 'artisan', 'ranger', 'guardian', 'shaman', 'necromancer', 'artysta', 'obywatel');
	$arrClasses = array('Wojownik', 'Mag', 'Barbarzyńca', 'Złodziej', 'Rzemieślnik', 'Łowca', 'Gwardzista', 'Szaman', 'Nekromanta', 'Artysta', 'Obywatel');
    	$smarty -> assign_by_ref('ClassNames', $arrClassNames);
    	$smarty -> assign_by_ref('Classes', $arrClasses);
	if (isset($_GET['select']) && $_GET['select'] != '' && isset ($_GET['step']) && $_GET['step'] == 'mark') 
    	{
		$intKey = array_search($_GET['select'], $arrClassNames);
		$intEnergy = $arrClassNames[$intKey] == 'artisan' ? 10 : 7;
		$db -> Execute('UPDATE `players` SET `max_energy`='.$intEnergy.', `klasa`=\''.$arrClasses[$intKey].'\' WHERE `id`='.$player -> id);
		if ($player -> deity != '')
		{
			error (C_CS);
		}
		else
		{
			error (C_CSELECTED);
		}
	}
}

if ($_GET['action'] == 'deity')
{
	if ($_GET['step'] == '' && $player -> deity != '')
	{
		error(C_DCHANGE);
	}
	$arrOptionName = array('azuth', 'lathander', 'tempus', 'loviatar', 'shar', 'kelemvor', 'bane', 'mielikki', 'helm');
	$arrGodNames = array('Azuth', 'Lathander', 'Tempus', 'Loviatar', 'Shar', 'Kelemvor', 'Bane', 'Mielikki', 'Helm');
	$arrGodNamesPL = array('Azutha', 'Lathandera', 'Tempusa', 'Loviatara', 'Shara', 'Kelemvora', 'Banea', 'Mielikki', 'Helma');
	if (isset($_GET['step']) && $_GET['step'] == 'change')
	{
		if ($player -> deity == '')
		{
			error(C_BADCHOICE);
		}
		$oldFetchMode = $db -> SetFetchMode(ADODB_FETCH_NUM);
		$arrPoints = $db -> GetRow('SELECT `changedeity` FROM `players` WHERE `id`='.$player -> id);
		$db -> SetFetchMode($oldFetchMode);
		$intCost = 100 * $arrPoints[0];
		if ($_GET['step2'] == '')
		{
			$smarty -> assign(array("Ccost" => $intCost));
		}
		else
		{
        		$intKey = array_search($player -> deity, $arrGodNames);
        		$db -> Execute('UPDATE `players` SET `deity`= null, `pw`=`pw`-'.$intCost.' WHERE `id`='.$player -> id);
        		$smarty -> assign('Pdeity', $arrGodNamesPL[$intKey]);
		}
	}
	$smarty -> assign_by_ref('GodName', $arrGodNames);
	$smarty -> assign_by_ref('GodOption', $arrOptionName);
	if (isset($_GET['select']) && $_GET['select'] != '' && isset ($_GET['step']) && $_GET['step'] == 'mark')
	{
		if ($player -> deity != '')
		{
			error(C_BADCHOICE);
		}
		$intKey = array_search($_GET['select'], $arrOptionName);
        	$db -> Execute('UPDATE `players` SET `deity`=\''.$arrGodNames[$intKey].'\', `changedeity`=`changedeity`+1 WHERE `id`='.$player -> id);
        	$smarty -> assign_by_ref('God', $arrGodNamesPL[$intKey]);
		if ($Changed_loc == "Y")
		{
			error (C_DS);
		}
		else
		{
			error (C_DSELECTED);
		}
	}
}

if ($_GET['action'] == 'place')
{
	if ($Changed_loc == "Y")
	{
		error(C_BADCHOICE);
	}
	else
	{
		if (isset($_GET['select']) && $_GET['select'] != '')
		{
			$Places = array('agarakar');
			$PlacesNames = array('Aleara');
			$PlacesNamesDb = array('Altara');
			
        			$db -> Execute('UPDATE `players` SET `miejsce`=\'Altara\', `changed_loc`="Y" WHERE `id`='.$player -> id);
				error (C_PSELECTED);
			
		}
		if ($player -> location == 'Altara')
		{
			$smarty -> assign(array('City1' => '<li><a href="card.php?action=place&amp;select='.strtolower($city1).'">'.$city1.'</a> (To miasto będzie najlepsze dla Ciebie)</li>',
						));
		}
		
	}
}

$smarty -> assign(array('Action' => $_GET['action'],
			'Select' => $_GET['select'],
			'Step' => $_GET['step'],
			'Step2' => $_GET['step2'],
			'Gender' => $player -> gender,
			'Race' => $player -> race,
			'Class' => $player -> clas,
			'Deity' => $player -> deity,
			'Changed_loc' => $Changed_loc));

$smarty -> display ('card.tpl');
require_once("includes/foot.php");
$db -> Close();
?>
