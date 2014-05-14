function battle($type,$adress) 
{
	require_once('class/monster_class.php');
	require_once('class/fight_class.php');
    global $player;
    global $smarty;
    global $enemy;
    global $arrehp;
    global $db;
    if ($player -> hp <= 0) 
    {
        error (NO_LIFE);
    }
    if ($type == 'T') 
    {
        if (!isset ($_POST['action'])) 
        {
//prepare session variables for monsters and player
		$monster = new Monster($player -> fight,1,0);
		$attacker = new Fighter($player -> id);
		$_SESSION['amount'] = 1;
		for ($k = 0; $k < $_SESSION['amount']; $k++) {
			//each monster identifier
			$strIndex = 'mon'.$k;
			$_SESSION[$strIndex]['id'] = $monster -> id;
			//each monster hit points
			$_SESSION[$strIndex]['hp'] = $monster -> hp;
			//each monster action points
			if ($attacker -> speed > $monster -> attackspeed) {
				$_SESSION[$strIndex]['ap'] = 1;
				}
			else {
				$_SESSION[$strIndex]['ap'] = floor($monster -> attackspeed / $attacker -> speed);
				if ($_SESSION[$strIndex]['ap'] > 5) {
					$_SESSION[$strIndex]['ap'] = 5;
					}
				}
			$tmpActionArr[$k][0] = $monster -> attackspeed;
			$tmpActionArr[$k][1] = $k;
			}
		$tmpActionArr[$k][0] = $attacker -> speed;
		$tmpActionArr[$k][1] = -1;

		/**
		* function to compare elements of actionArr
		*/
		function aacmp($a,$b) {
			if ($a[0] == $b[0]) return 0;
			return ($a[0] > $b[0]) ? -1 : 1;
			}

		usort($tmpActionArr,"aacmp");
		for ($k = 0; $k <= $_SESSION['amount']; $k++) {
			$actionArr[$k] = $tmpActionArr[$k][1];
			}
		$_SESSION['actionArr'] = $actionArr;
		$_SESSION['exhaust']=0;
		if ($attacker -> speed > $monster -> attackspeed) {
			$_SESSION['points'] = floor($attacker -> speed / $monster -> attackspeed);
			if ($_SESSION['points'] > 5) {
				$_SESSION['points'] = 5;
				}
			}
		else {
			$_SESSION['points'] = 1;
			}
		$_SESSION['round']=0;
		}
        turnfight ($adress);
		if (isset($_SESSION['result'])) unset($_SESSION['result']);
    } 
        else 
    {
	$monster = new Monster($player -> fight,1,0);
	$attacker = new Fighter($player -> id);
        pvmfastfight ($attacker,$monster,1,1);
    }
    $fight = $db -> Execute("SELECT `fight`, `hp` FROM `players` WHERE `id`=".$player -> id);
    if ($fight -> fields['fight'] == 0 && $fight->fields['hp'] > 0) 
    {
       $fight -> Close();
       return true;
    }
    else
    {
    	return false;
    }
    $fight -> Close();
//     $enemy1 -> Close();
}

/**
* If player not escape - start fight
*/
if (isset($_GET['step']) && $_GET['step'] == 'battle') 
{
    if (!isset ($_GET['type'])) 
    {
        $type = 'T';
    } 
        else 
    {
        $type = $_GET['type'];
    }
    battle($type,'explore.php?step=battle');
}

/**
* If player escape
*/
if (isset($_GET['step']) && $_GET['step'] == 'run') 
{
    $enemy = $db -> Execute("SELECT `level`, `speed`, `name`, `exp1`, `exp2`, `id` FROM `monsters` WHERE `id`=".$player -> fight);
	if ($player -> fight == 0)
		{
		error(NO_MONSTER);
	}
	if (empty($enemy -> fields))
	{
			error(ERROR);
	}
    /**
     * Add bonus from rings
     */
    $arrEquip = $player -> equipment();
    if ($arrEquip[9][2])
    {
        $arrRingtype = explode(" ", $arrEquip[9][1]);
        $intAmount = count($arrRingtype) - 1;
        if ($arrRingtype[$intAmount] == R_SPE4)
        {
            $player -> speed = $player -> speed + $arrEquip[9][2];
        }
    } 
    if ($arrEquip[10][2])
    {
        $arrRingtype = explode(" ", $arrEquip[10][1]);
        $intAmount = count($arrRingtype) - 1;
        if ($arrRingtype[$intAmount] == R_SPE4)
        {
            $player -> speed = $player -> speed + $arrEquip[10][2];
        }
    } 
    $chance = (rand(1, $player -> level * 100) + $player -> speed - $enemy -> fields['speed']);
    $intChance2 = rand(1, 10);
    $smarty -> assign(array("Chance" => $chance,
                            "Chance2" => $intChance2));
    if (($intChance2 < 3)||($chance > 0))
    {
	    $intExpGain = 2;
	    $intExpLvl = ceil($enemy -> fields['level']/10);
	    if ($intExpGain < $intExpLvl)
	    	$intExpGain = $intExpLvl;
        $smarty -> assign(array("Ename" => $enemy -> fields['name'],
                                "Expgain" => $intExpGain,
                                "Escapesucc" => ESCAPE_SUCC,
                                "Escapesucc2" => ESCAPE_SUCC2,
                                "Escapesucc3" => ESCAPE_SUCC3));
        checkexp($player -> exp, $intExpGain, $player -> level, $player -> race, $player -> user, $player -> id, 0, 0, $player -> id, '', 0);
        $db -> Execute("UPDATE `players` SET `fight`=0 WHERE `id`=".$player -> id);
    } 
        else 
    {
        $strMessage = ESCAPE_FAIL." ".$enemy -> fields['name']." ".ESCAPE_FAIL2.".<br />";
        $smarty -> assign ("Message", $strMessage);
        $smarty -> display ('error1.tpl');
        battle('T','explore.php?step=battle');
    }
    $hp = $db -> Execute("SELECT `hp` FROM `players` WHERE `id`=".$player -> id);
    $smarty -> assign ("Health", $hp -> fields['hp']);
    if ($player -> location == 'Góry' && $hp -> fields['hp'] > 0) 
    {
        $smarty -> assign (array("Yes" => "explore.php?akcja=gory", 
                                 "No" => "gory.php"));
    }
    if ($player -> location == 'Las' && $hp -> fields['hp'] > 0) 
    {
        $smarty -> assign(array("Yes" => "explore.php", 
                                "No" => "las.php"));
    }
    $hp -> Close();
}
