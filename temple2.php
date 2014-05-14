<?php

$title = 'Ołtarz Ofiarny w Diabolium';
require_once('includes/head.php');
require_once('includes/security.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
/**
* Get the localization for game
*/
require_once('languages/'.$player -> lang.'/temple2.php');
$test = $db -> Execute("SELECT pw FROM players WHERE `id`=".$player -> id);
$pw = $test -> fields['pw'];
$smarty -> assign(array("pw" => $pw)); 
if ($player -> location != 'Diabolium')
{
    error (ERROR." ".$player->location);
}

// Polish grammar.
$strGod = $player -> deity;
if (in_array($player -> deity, array('Tartus', 'Unrod', 'Luzubal', 'Gulgard')))
{
    $strGod .='a';
}
if ($player -> deity == 'Anea')
{
	$strGod = 'Anei';
}
if ($player -> deity == 'Yala')
{
	$strGod = 'Yali';
}
if (isset ($_GET['view']))
{
/**
* Check common errors.
*/
    if ($_GET['view'] == 'service' || $_GET['view'] == 'prayer')
    {
        if ($player -> deity == '')
        {
            error (NO_DEITY);
        }
        if ($player -> hp == 0)
        {
            error (YOU_DEAD);
        }
    }
    switch($_GET['view'])
    {
       
      
        case 'prayer':      ///Pray to god.
            if ($player -> race =='')
            {
                error(NO_RACE);
            }
	
            // All possible blessings.
			//TODO: dodac hutnictwo, szpiegostwo gdy pojawia sie w grze
            $arrBless = array('agility', 'strength', 'inteli', 'wisdom', 'szyb', 'wytrz', 'hp', 'ability', 'alchemia', 'fletcher', 'atak', 'shoot', 'unik', 'magia', 'breeding', 'mining', 'lumberjack', 'herbalist', 'jeweller', 'hutnictwo');
            $arrBlessNames = array(AGI, STR, INTELI, WIS, SPE, CON, HITPTS, SMI, ALC, FLE, WEA, SHO, DOD, CAS, BRE, MINI, LUMBER, HERBS, JEWEL, METAL);

            // Costs of praying in faith points for each race. See $arrBless for values matching.
            $arrRaces = array('');
            $arrFaithCosts = array(array('15', '15', '15', '15', '15', '15', '15', '15', '15', '15', '15', '15', '15', '15', '15', '15', '15', '15', '15', '15'));
			
								
			$intRaceKey = array_search($player -> race, $arrRaces);
			// Note: All gods can bless stats (0-5). Heluvald and Daeraell have the same bonuses.
			$arrGods = array('Azuth', 'Lathander', 'Tempus', 'Loviatar', 'Kelemvor', 'Shar', 'Bane', 'Mielikki', 'Helm');
			$intGodKey = array_search($player -> deity, $arrGods);
			$arrPossibleBlessings = array(array(3, 2, 12, 13),
										  array(0, 4, 8, 11),
										  array(1, 0, 6, 10),
										  array(8, 17, 5),
										  array(1, 2, 0, 3),
										  array(11, 12, 13),
										  array(0, 6, 11),
										  array(0, 4, 6, 3, 12),
										  array(9, 14, 15, 16, 18, 19, 0, 5, 7));
			foreach ($arrPossibleBlessings[$intGodKey] as $Key)
			{
				$arrBlessings[] = array($arrBlessNames[$Key], $arrFaithCosts[$intRaceKey][$Key]);
			}
			$smarty -> assign_by_ref('Blessings', $arrBlessings);
			$smarty -> assign_by_ref('Indices', $arrPossibleBlessings[$intGodKey]);
			if (isset($_POST['pray']))
			{
				$intNumber = uint32($_POST['pray']);
				// Check if someone tampered with form: wrong energy cost, wrong blessing number passed.
				if (!preg_match("/^[01246]$/", $_POST['praytype']) || !in_array($intNumber, $arrPossibleBlessings[$intGodKey]))
				{
					error(ERROR);
				}
				if ($_POST['praytype'] == 0)
				{
					$intPermCost = $intNumber < 7 ? 100 : 300;
					if ($pw < $intPermCost)
			{
				error ('Masz zbyt mało punktów wiary <a href="diabolium.php">(Wróć)</a>');
			}
					$strQuery = 'UPDATE `players` SET `'.$arrBless[$intNumber].'`=`'.$arrBless[$intNumber].'`+15, ';
					if ($_POST['pray'] == 5 || $_POST['pray'] == 6)
					{
						$strQuery .= '`max_hp`=`max_hp`+15, ';
					}
					$strQuery .= '`pw`=`pw`-'.$intPermCost.' WHERE `id`='.$player -> id;
					$db -> Execute($strQuery);
					$strMessage = PERM_BONUS.$arrBlessNames[$intNumber];
					$smarty -> assign('Message', $strMessage);
					break;
				}
				if ($player -> bless !='')
				{
					error(YOU_HAVE);
				}
				if ($player -> energy < $_POST['praytype'])
				{
					error(NO_ENERGY);
				}
						if ($pw < 1)
			{
				error ('Masz zbyt mało punktów wiary <a href="diabolium.php">(Wróć)</a>');
			}
				$strMessage = YOU_PRAY.$strGod;
				$strQuery = 'UPDATE `players` SET `pw`=`pw`-'.$arrFaithCosts[$intRaceKey][$intNumber].', `energy`=`energy`-'.$_POST['praytype'];
				switch (rand(1, 10))
				{
					case 10: // god's wrath
						$strMessage .= P_DEAD.$player -> deity.P_DEAD2;
						$strQuery .= ', `hp`=0';
						break;
					case 9: // nothing
						$strMessage .= BUT_FAIL;
						break;
					default:    // success
						$intBonus = $_POST['praytype'] * $player -> level;
						// Blessings to skills are reduced.
						if ($intNumber > 5)
						{
							$intBonus /= 10;
						}
						$strQuery .= ', `bless`=\''.$arrBless[$intNumber].'\', `blessval`='.$intBonus;
						$strQuery .= $intNumber == 6 ? ', `maxhp`=`maxhp`+'.$intBonus : '';
						$strMessage .= P_SUCCESS.$arrBlessNames[$intNumber];
				}
				$smarty -> assign('Message', $strMessage);
				$db -> Execute($strQuery.' WHERE `id`='.$player -> id);
			}
			break;
		default:
			error(ERROR);
	}
}
else
{
    $_GET['view'] = '';
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array('God' => $player -> deity,
						'God2' => $strGod,
						'Location' => $player -> location));
$smarty -> display('temple2.tpl');

// After displaying delete arrays that aren't used anymore.
if (isset($arrNames))
{
    unset($arrNames,$arrDesc);
}
if (isset($arrBless))
{
    unset($arrBless, $arrBlessNames, $arrRaces, $arrFaithCosts, $arrGods, $arrPossibleBlessings, $arrBlessings);
}
require_once('includes/foot.php');
?>

