<?php


$title = "Gildia";

require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}


    $test = $db -> Execute("SELECT maxblo FROM tribes WHERE `id`=".$player -> tribe);
$maxblo = $test -> fields['maxblo'];
$smarty -> assign(array("maxblo" => $maxblo));


/**
* Get the localization for game
*/
require_once("languages/".$player -> lang."/tribes.php");






$smarty -> assign(array("Logo" => '',
                        "WWW" => '',
                        "Message" => '',
                        "Message2" => '',
                        "Pubmessage" => '',
                        "Privmessage" => '',
                        "Hospass1" => '',
                        "Message1" => '',
                        "Step4" => '',
                        "New" => '',
                        "Maxlud" => '',
                        "Perm" => '',
                        "Prest" => '',
                        "Victory" => '',
                        "Link" => '',
                        "mooc" => '',
                        "Menu" => '',
                        "Empty" => '',
                        "Change" => '',
                        "Itemid" => '',
                        "Perm1" => 0,
                        "Perm2" => 0,
                        "Perm3" => 0,
                        "Perm4" => 0,
                        "Perm5" => 0,
                        "Perm6" => 0,
                        "Perm7" => 0,
                        "Perm8" => 0,
                        "Perm9" => 0,
                        "Perm10" => 0,
                        "Perm11" => 0,
                        "Rank1" => 0,
                        "Rank2" => 0,
                        "Rank3" => 0,
                        "Rank4" => 0,
                        "Rank5" => 0,
                        "Rank6" => 0,
                        "Rank7" => 0,
                        "Rank8" => 0,
                        "Rank9" => 0,
                        "Rank10" => 0));

/**
* Main menu
*/

if (!isset ($_GET['view']) && !isset($_GET['join']))
{
    $smarty -> assign(array("Claninfo" => CLAN_INFO,
        "Ashow" => A_SHOW));
    if ($player -> tribe)
    {
        $mytribe = $db -> Execute("SELECT `name` FROM `tribes` WHERE `id`=".$player -> tribe);
        $smarty -> assign ("Mytribe", "<li><a href=\"tribes.php?view=my\">Moja Gildia</a> (".$mytribe -> fields['name'].")</li>");
    }
        else
    {
        $smarty -> assign ("Mytribe", "<li>Moja Gildia</li>");
    }
    if (!$player -> tribe && $player -> credits >= 500000)
    {
        $smarty -> assign ("Make", "<li><a href=\"tribes.php?view=make\">".MAKE_NEW."</a></li>");
    }
        else
    {
        $smarty -> assign ("Make", "<li>".MAKE_NEW."</li>");
    }
}

/**
* List of clans
*/
if (isset ($_GET['view']) && $_GET['view'] == 'all')
{
$test = $db -> Execute("SELECT prest FROM tribes  ORDER BY `id`");
$prestt= $test -> fields['prestt'];

    $query = $db -> Execute("SELECT count(*) FROM `tribes`");
    $numt = $query -> fields['count(*)'];
    $query -> Close();
    if ($numt <= 0)
    {
        $smarty -> assign(array("Text" => NO_CLANS,
                           "Showinfo" => ''));
    }
        else
    {
        $smarty -> assign ("Text", "<ul>");
        $tribe = $db -> Execute("SELECT `id`, `name`, `owner` FROM `tribes` ORDER BY `id`");
        $arrid = array();
        $arrname = array();
        $arrowner = array();
		$ID2Name = array ();
        $i = 0;
        while (!$tribe -> EOF)
        {
            $arrid[$i] = $tribe -> fields['id'];
            $arrname[$i] = $tribe -> fields['name'];
            $arrownerid[$i] = $tribe -> fields['owner'];
			if (!isset ($ID2Name [$i])) {
				$objname = $db->Execute ('SELECT user FROM players WHERE id = \''.$arrownerid[$i].'\'');
						$ID2Name[$arrownerid[$i]] = $objname->fields['user'];
			}

			$arrowner[$i] = $ID2Name[$arrownerid[$i]];
            $tribe -> MoveNext();
            $i = $i + 1;
        }
        $tribe -> Close();
        $smarty -> assign(array("Tribeid" => $arrid,
            "Name" => $arrname,
            "OwnerID" => $arrownerid,
			'Owner'	=>	$arrowner,
            "Showinfo" => SHOW_INFO,
            "Leader" => LEADER));
    }
}
require_once('includes/security.php');

/**
* Clan info
*/
if (isset ($_GET['view']) && $_GET['view'] == 'view')
{
    if (!isset ($_GET['step']))
    {
        if (!ereg("^[1-9][0-9]*$", $_GET['id']))
        {
            error (ERROR);
        }
        $tribe = $db -> Execute("SELECT `id`, `name`, `owner`, `wygr`, `przeg`, `public_msg`, `www`, `logo`, `prest` FROM `tribes` WHERE `id`=".$_GET['id']);
        if (!$tribe -> fields['id'])
        {
            error (NO_CLAN);
        }
        $plik = 'images/tribes/'.$tribe -> fields['logo'];
        $query = $db -> Execute("SELECT count(*) FROM `players` WHERE `tribe`=".$tribe -> fields['id']);
        $memnum = $query -> fields['count(*)'];
        $query -> Close();
        if (is_file($plik))
        {
            $arrImageparams = getimagesize($plik);
            if ($arrImageparams[0] > 200)
            {
                $arrImageparams[0] = 200;
            }
            if ($arrImageparams[1] > 100)
            {
                $arrImageparams[1] = 100;
            }
            $smarty -> assign ("Logo", "<center><img src=\"".$plik."\" width=\"".$arrImageparams[0]."\" height=\"".$arrImageparams[1]."\" /></center><br />");
        }

        $objAstral = $db -> Execute("SELECT `used` FROM `astral_machine` WHERE `owner`=".$tribe -> fields['id']);
        if ($objAstral -> fields['used'])
        {
            $intPercent = round($objAstral -> fields['used'] / 200, 2);
            $arrPercent = array(20.99, 40.99, 70.99, 85.99, 99.99, 100);
            $arrAstral = array(ASTRAL1, ASTRAL2, ASTRAL3, ASTRAL4, ASTRAL5, ASTRAL6);
            for ($i = 0; $i < 5; $i++)
            {
                if ($intPercent <= $arrPercent[$i])
                {
                    break;
                }
            }
            $strAstral = ASTRAL.$arrAstral[$i]."<br />";
        }
            else
        {
            $strAstral = '';
        }
        $objAstral -> Close();

		$objname = $db->Execute ('SELECT user FROM players WHERE id = \''.$tribe->fields['owner'].'\'');
		$owner = $objname->fields['user'];

        $smarty -> assign(array("Name" => $tribe -> fields['name'],
                                "OwnerID" => $tribe -> fields['owner'],
								'Owner'	=>	$owner,
                                "Members" => $memnum,
                                "Tribeid" => $tribe -> fields['id'],
                                "Wins"=> $tribe -> fields['wygr'],
                                "Lost" => $tribe -> fields['przeg'],
                                "Pubmessage" => $tribe -> fields['public_msg'],
                                "Astral" => $strAstral,
                                "Yousee" => YOU_SEE,
                                "Leader2" => LEADER2,
                                "Memamount" => MEM_AMOUNT,
                                "Amembers" => A_MEMBERS,
                                "Winamount" => WIN_AMOUNT,
                                "Lostamount" => LOST_AMOUNT,
                                "Jointo" => JOIN_TO,
                                "Ajoin" => A_JOIN));
        if ($tribe -> fields['www'])
        {
            $smarty -> assign ("WWW", CLAN_PAGE.": <a href=\"http://".$tribe -> fields['www']."\">".$tribe -> fields['www']."</a><br />");
        }

        if ($player -> clas == 'Złodziej' && $player -> tribe != $tribe -> fields['id'])
        {
            $objAstralcrime = $db -> Execute("SELECT `astralcrime` FROM `players` WHERE `id`=".$player -> id);
            if ($objAstralcrime -> fields['astralcrime'] == 'Y')
            {
                $smarty -> assign("Asteal", "<br /><br /><a href=\"tribes.php?view=view&id=".$_GET['id']."&amp;step=steal\">".A_STEAL."</a>");
            }
                else
            {
                $smarty -> assign("Asteal", '');
            }
            $objAstralcrime -> Close();
        }
            else
        {
            $smarty -> assign("Asteal", '');
        }

        $tribe -> Close();
    }

    /**
     * Steal astral components
     */
    if (isset($_GET['step']) && $_GET['step'] == 'steal')
    {
        if (!ereg("^[1-9][0-9]*$", $_GET['id']))
        {
            error(ERROR);
        }
        $objTribe = $db -> Execute("SELECT `id`, `owner` FROM `tribes` WHERE `id`=".$_GET['id']);
        if (!$objTribe -> fields['id'])
        {
            error(NO_CLAN." (<a href=\"tribes.php?view=view&id=".$_GET['id']."\">".BACK."</a>)");
        }
        if ($player -> clas != 'Złodziej' || $player -> clas == 'Lochy')
        {
            error(ERROR." (<a href=\"tribes.php?view=view&id=".$_GET['id']."\">".BACK."</a>)");
        }
        $objAstralcrime = $db -> Execute("SELECT `astralcrime` FROM `players` WHERE `id`=".$player -> id);
        if ($objAstralcrime -> fields['astralcrime'] == 'N')
        {
            error (NO_CRIME." (<a href=\"tribes.php?view=view&id=".$_GET['id']."\">".BACK."</a>)");
        }
        $objAstralcrime -> Close();
        if ($player -> hp <= 0)
        {
            error (YOU_DEAD." (<a href=\"tribes.php?view=view&id=".$_GET['id']."\">".BACK."</a>)");
        }
        if ($player -> tribe == $_GET['id'])
        {
            error(SAME_CLAN." (<a href=\"tribes.php?view=view&id=".$_GET['id']."\">".BACK."</a>)");
        }

        require_once('includes/astralsteal.php');
        astralsteal($_GET['id'], 'C', $objTribe -> fields['owner']);

        require_once('includes/checkastral.php');
        checkastral($objTribe -> fields['id']);

        $objTribe -> Close();
    }

    if (isset ($_GET['step']) && $_GET['step'] == 'members')
    {
        if (!ereg("^[1-9][0-9]*$", $_GET['tid']))
        {
            error (ERROR);
        }
        $tribename = $db -> Execute("SELECT `name`, `owner` FROM `tribes` WHERE `id`=".$_GET['tid']);
        $mem = $db -> Execute("SELECT `id`, `user`, `tribe_rank` FROM `players` WHERE `tribe`=".$_GET['tid']);
        $arrlink = array();
        $i = 0;
        while (!$mem -> EOF)
        {
            if ($mem -> fields['id'] == $tribename -> fields['owner']) {
                $arrlink[$i] = "- <a href=\"view.php?view=".$mem -> fields['id']."\">".$mem -> fields['user']."</a> (".$mem -> fields['id'].") (".$mem -> fields['tribe_rank'].") (".LEADER.")<br />";
            }
                else
            {
                $arrlink[$i] = "- <a href=\"view.php?view=".$mem -> fields['id']."\">".$mem -> fields['user']."</a> (".$mem -> fields['id'].") (".$mem -> fields['tribe_rank'].")<br />";
            }
            $mem -> MoveNext();
            $i = $i + 1;
        }
        $mem -> Close();
        $smarty -> assign(array("Name" => $tribename -> fields['name'],
                                "Link" => $arrlink,
                                "Memberlist" => MEMBER_LIST));
        $tribename -> Close();
    }
}


/**
* Join to clan
*/
if (isset($_GET['join']))
{
    if (!ereg("^[1-9][0-9]*$", $_GET['join']))
    {
        error (ERROR);
    }
     
    $tribe = $db -> Execute("SELECT * FROM tribes WHERE id=".$_GET['join']);
    $test = $db -> Execute("SELECT gracz FROM tribe_oczek WHERE gracz=".$player -> id);
    if (!isset ($_GET['change']))
    {
        if ($player -> tribe)
        {
            error (YOU_IN_CLAN);
        }
       
        if ($test -> fields['gracz'])
        {
            $smarty -> assign(array("Tribeid" => $_GET['join'],
                "Playerid" => $test -> fields['gracz'],
                "Check" => 1,
                "Youwait" => YOU_WAIT,
                "Ayes" => YES,
                "Ano" => NO));
        }
            else
        {
            $strDate = $db -> DBDate($newdate);
            $db -> Execute("INSERT INTO `tribe_oczek` (`gracz`, `klan`) VALUES(".$player -> id.",".$tribe -> fields['id'].")");
            $db -> Execute("INSERT INTO `log` (`owner`,`log`, `czas`) VALUES(".$tribe -> fields['owner'].",'".L_PLAYER."<b><a href=\"view.php?view=".$player -> id."\">".$player -> user.L_ID.'<b>'.$player -> id.'</b>'.HE_WANT."', ".$strDate.")");
            error (YOU_SEND.$tribe -> fields['name'].".");
        }
    }
        else
    {
        if ($player -> tribe)
        {
            error (YOU_IN_CLAN);
        }
        $strDate = $db -> DBDate($newdate);
        $db -> Execute("INSERT INTO `log` (`owner`,`log`, `czas`) VALUES(".$tribe -> fields['owner'].",'".L_PLAYER." <b><a href=view.php?view=".$player -> id.">".$player -> user.L_ID.'<b>'.$player -> id.'</b>'.HE_WANT."', ".$strDate.")");
        
        $db -> Execute("UPDATE `gielda` SET `cost`=`cost`+100 WHERE `id`=".$tribe -> fields['id']);
        
        
        
        $objPerm = $db -> Execute("SELECT `player` FROM `tribe_perm` WHERE `tribe`=".$tribe -> fields['id']." AND `wait`=1");
        while (!$objPerm -> EOF)
        {
            $db -> Execute("INSERT INTO `log` (`owner`,`log`, `czas`) VALUES(".$objPerm -> fields['player'].",'".L_PLAYER." <b><a href=view.php?view=".$player -> id.">".$player -> user.L_ID.'<b>'.$player -> id.'</b>'.HE_WANT."', ".$strDate.")");
            $objPerm -> MoveNext();
        }
        $objPerm -> Close();
        $db -> Execute("UPDATE `tribe_oczek` SET `klan`=".$tribe -> fields['id']." WHERE `gracz`=".$player -> id);
        error (YOU_SEND.$tribe -> fields['name'].".");
    }
}

/**
* Make clan
*/
if (isset ($_GET['view']) && $_GET['view'] == 'make')
{
    $smarty -> assign(array("Clanname" => CLAN_NAME,
        "Amake" => A_MAKE));
    if ($player -> credits < 500000)
    {
        error (NO_MONEY);
    }
    if ($player -> tribe)
    {
        error (YOU_IN_CLAN);
    }
    if ($player -> hp < 1)
    {
        error(YOU_DEAD);
    }
    if (isset($_GET['step']) && $_GET['step'] == 'make')
    {
        if (!$_POST['name'])
        {
            error (NO_NAME);
        }
        $db -> Execute("INSERT INTO tribes (name,owner) VALUES('".strip_tags($_POST['name'])."',".$player -> id.")");
        $db -> Execute("UPDATE players SET credits=credits-500000 WHERE id=".$player -> id);
        $newt = $db -> Execute("SELECT id FROM tribes WHERE owner=".$player -> id);
        
        $db -> Execute("UPDATE players SET tribe=".$newt -> fields['id']." WHERE id=".$player -> id);
        $db -> Execute("INSERT INTO gielda (name, ilosc, cost, tribe) VALUES ('".strip_tags($_POST['name'])."', '50', '500', ".$newt -> fields['id'].")") or die($db -> ErrorMsg());        
        
        $newt -> Close();
        error (YOU_MAKE.strip_tags($_POST['name'])."</i>.<br />");
    }
}

/**
* My clan menu
*/
if (isset ($_GET['view']) && $_GET['view'] == 'my')
{
$test = $db -> Execute("SELECT mocblo FROM tribes WHERE `id`=".$player -> tribe);
$mocblo = $test -> fields['mocblo'];
$smarty -> assign(array("mocblo" => $mocblo)); 

$mooc = ($mocblo * $player -> level);
$mooc2 = ($mocblo * $player -> level / 2);
    if (!$player -> tribe)
    {
        error (NOT_IN);
    }
    $mytribe = $db -> Execute("SELECT * FROM tribes WHERE id=".$player -> tribe);
    $perm = $db -> Execute("SELECT * FROM tribe_perm WHERE tribe=".$mytribe -> fields['id']." AND player=".$player -> id);
    $smarty -> assign (array("Name" => $mytribe -> fields['name'],
                             "Myclan" => MY_CLAN,
                             "Menu1" => MENU1,
                             "Menu2" => MENU2,
                             "Menu3" => MENU3,
                             "Menu4" => MENU4,
                             "Menu5" => MENU5,
                             "Menu6" => MENU6,
                             "Menu7" => MENU7,
                             "Menu8" => MENU8,
                             "Menu9" => MENU9,
                             "Menu10" => MENU10,
                             "Menu11" => MENU11));
    if (!isset ($_GET['step']))
    {
        $plik = 'images/tribes/'.$mytribe -> fields['logo'];
        if (is_file($plik))
        {
            $smarty -> assign ("Logo", "<center><img src=\"".$plik."\" height=\"100\"></center><br>");
        }
        $query = $db -> Execute("SELECT count(*) FROM `players` WHERE `tribe`=".$mytribe -> fields['id']);
        $memnum = $query -> fields['count(*)'];
        $query -> Close();
        $owner = $db -> Execute("SELECT `id`, `user` FROM `players` WHERE `id`=".$mytribe -> fields['owner']);
        if ($player -> id == $mytribe -> fields['owner'] || !$perm -> fields['info'])
        {
            $smarty -> assign(array("Gold" => $mytribe -> fields['credits'],
                                    "Mithril" => $mytribe -> fields['platinum'],
                                    "Soldiers" => $mytribe -> fields['zolnierze'],
                                    "Prest" => $mytribe -> fields['prest'],
                                    "Forts" => $mytribe -> fields['forty']));
        }
            else
        {
            $smarty -> assign(array("Gold" => UNKNOWN,
                                    "Mithril" => UNKNOWN,
                                    "Soldiers" => UNKNOWN,
                                    "Prest" => UNKNOWN,
                                    "Forts" => UNKNOWN));
        }
        $objAstral = $db -> Execute("SELECT `aviable`, `used` FROM `astral_machine` WHERE `owner`=".$mytribe -> fields['id']);
        if ($objAstral -> fields['aviable'] == 'Y')
        {
            $strAstral = "<a href=\"tribes.php?view=my&amp;step=astral\">".A_MACHINE."</a>";
        }
            else
        {
            $strAstral = A_MACHINE;
        }
        if ($objAstral -> fields['used'])
        {
            $intPercent = round($objAstral -> fields['used'] / 200, 2);
        }
            else
        {
            $intPercent = 0;
        }
        $objAstral -> Close();
        $smarty -> assign(array("Members" => $memnum,
                                "Owner" => $owner -> fields['user'],
                                "Ownerid" => $owner -> fields['id'],
                                "Wins" => $mytribe -> fields['wygr'],
                                "Lost" => $mytribe -> fields['przeg'],
                                "Privmessage" => $mytribe -> fields['private_msg'],
                                "Amachine" => $strAstral,
                                "Percent" => $intPercent,
                                "Apercent" => A_PERCENT,
                                "Clanname" => CLAN_NAME,
                                "Welcome" => WELCOME,
                                "Memamount" => MEM_AMOUNT,
                                "Leader" => LEADER,
                                "Goldcoins" => GOLD_COINS,
                                "Mithcoins" => MITH_COINS,
                                "Winamount" => WIN_AMOUNT,
                                "Lostamount" => LOST_AMOUNT,
                                "Prest" => PREST,
                                
                                "Tsoldiers" => T_SOLDIERS,
                                "Tforts" => T_FORTS));
        if ($mytribe -> fields['www'])
        {
            $smarty -> assign ("WWW", "<li>".CLAN_PAGE.": <a href=\"http://".$mytribe -> fields['www']."\" target=\"_blank\">".$mytribe -> fields['www']."</a></li>");
        }
    }


    /**
     * Build astral machine
     */
    if (isset($_GET['step']) && $_GET['step'] == 'astral')
    {
        $objAstral = $db -> Execute("SELECT `used`, `directed`, `aviable` FROM `astral_machine` WHERE `owner`=".$mytribe -> fields['id']);
        if ($objAstral -> fields['aviable'] != 'Y')
        {
            error(NO_COMPONENTS);
        }
        $objTest = $db -> Execute("SELECT `value` FROM `settings` WHERE `setting`='tribe'");
        if ($objTest -> fields['value'])
        {
            error(ASTRAL_BUILD);
        }
        $smarty -> assign(array("Aused" => A_USED,
                                "Aenergy" => A_ENERGY,
                                "Atoday" => A_TODAY,
                                "Amax" => A_MAX,
                                "Adirect" => A_DIRECT,
                                "Aform" => A_FORM,
                                "Message" => '',
                                "Eused" => $objAstral -> fields['used'],
                                "Edirected" => $objAstral -> fields['directed']));

        /**
         * Add energy to astral machine
         */
        if (isset($_GET['step2']) && $_GET['step2'] == 'add')
        {
            if (!ereg("^[1-9][0-9]*$", $_POST['amount']))
            {
                error(ERROR);
            }
            if ($_POST['amount'] > $player -> energy)
            {
                error(NO_ENERGY);
            }
            $intDirected = $objAstral -> fields['directed'] + $_POST['amount'];
            if ($intDirected > 1000)
            {
                error(TOO_MUCH);
            }
            $intUsed = $objAstral -> fields['used'] + $intDirected;
            if ($intUsed > 20000)
            {
                error(TOO_MUCH2);
            }
            $db -> Execute("UPDATE `players` SET `energy`=`energy`-".$_POST['amount']." WHERE `id`=".$player -> id);
            $db -> Execute("UPDATE `astral_machine` SET `directed`=".$intDirected." WHERE `owner`=".$mytribe -> fields['id']);
            $smarty -> assign("Message", YOU_ADD.$_POST['amount']." ".A_ENERGY." <a href=\"tribes.php?view=my&amp;step=astral\">".A_REFRESH."</a>");
        }

        $objAstral -> Close();
    }

    /**
    * Donations to clan
    */
    if (isset ($_GET['step']) && $_GET['step'] == 'donate')
    {
        $smarty -> assign(array("Doninfo" => DON_INFO,
                                "Adonate" => A_DONATE,
                                "Goldcoins" => GOLD_COINS2,
                                "Mithcoins" => MITH_COINS2,
                                "Toclan" => TO_CLAN));
        if (isset ($_GET['step2']) && $_GET['step2'] == 'donate')
        {
            if ($_POST['type'] == 'credits')
            {
                $dot = GOLD_COINS;
            }
            if ($_POST['type'] == 'platinum')
            {
                $dot = MITH_COINS;
            }
            integercheck($_POST['amount']);
            if (!ereg("^[1-9][0-9]*$", $_POST['amount']))
            {
                error(ERROR);
            }
            if ($_POST['type'] != 'credits' && $_POST['type'] != 'platinum')
            {
                error(ERROR);
            }
            if ($_POST['amount'] > $player -> $_POST['type'])
            {
                $smarty -> assign ("Message", NO_AMOUNT.$dot.".");
            }
                else
            {
                $db -> Execute("UPDATE players SET ".$_POST['type']."=".$_POST['type']."-".$_POST['amount']." WHERE id=".$player -> id);
                $db -> Execute("UPDATE tribes set ".$_POST['type']."=".$_POST['type']."+".$_POST['amount']." WHERE id=".$mytribe -> fields['id']);
                $smarty -> assign ("Message", YOU_GIVE.$_POST['amount']." ".$dot."</b>.");
                $strDate = $db -> DBDate($newdate);
                $db -> Execute("INSERT INTO `log` (`owner`,`log`, `czas`) VALUES(".$mytribe -> fields['owner'].", '".L_PLAYER." <b><a href=view.php?view=".$player -> id.">".$player -> user.L_ID.'<b>'.$player -> id.'</b>'.HE_ADD.$_POST['amount']." ".$dot.".', ".$strDate.")");
                $objPerm = $db -> Execute("SELECT player FROM tribe_perm WHERE tribe=".$mytribe -> fields['id']." AND loan=1");
                while (!$objPerm -> EOF)
                {
                    $db -> Execute("INSERT INTO `log` (`owner`,`log`, `czas`) VALUES(".$objPerm -> fields['player'].", '".L_PLAYER." <b><a href=view.php?view=".$player -> id.">".$player -> user.L_ID.'<b>'.$player -> id.'</b>'.HE_ADD.$_POST['amount']." ".$dot.".', ".$strDate.")");
                    $objPerm -> MoveNext();
                }
                $objPerm -> Close();
            }
        }
    }

    /**
    * Clan herbs
    */
    if (isset ($_GET['step']) && $_GET['step'] == 'zielnik')
    {
        $arrName = array(HERB1, HERB2, HERB3, HERB4, HERB5, HERB6, HERB7, HERB8);
        $arrSqlname = array('illani', 'illanias', 'nutari', 'dynallca', 'ilani_seeds', 'illanias_seeds', 'nutari_seeds', 'dynallca_seeds');
        $arrAmount = array($mytribe -> fields['illani'],
                           $mytribe -> fields['illanias'],
                           $mytribe -> fields['nutari'],
                           $mytribe -> fields['dynallca'],
                           $mytribe -> fields['ilani_seeds'],
                           $mytribe -> fields['illanias_seeds'],
                           $mytribe -> fields['nutari_seeds'],
                           $mytribe -> fields['dynallca_seeds']);
        if (!isset ($_GET['step2']) && !isset ($_GET['step3']) && !isset ($_GET['daj']) && !isset ($_GET['step4']))
        {
            $arrTable = array();
            $i = 0;
            foreach ($arrName as $strName)
            {
                if ($player -> id == $mytribe -> fields['owner'] || $perm -> fields['herbs'])
                {
                    $arrTable[$i] = "<td width=\"100\"><a href=\"tribes.php?view=my&amp;step=zielnik&amp;daj=".$arrSqlname[$i]."\"><b><u>".$strName."</u></b></a></td>";
                }
                    else
                {
                    $arrTable[$i] = "<td width=\"100\"><b><u>".$strName."</u></b></td>";
                }
                $i++;
            }
            $smarty -> assign(array("Tamount" => $arrAmount,
                                    "Ttable" => $arrTable,
                                    "Herbsinfo" => HERBS_INFO,
                                    "Whatyou" => WHAT_YOU,
                                    "Agiveto" => A_GIVE_TO));
        }
        /**
         * Give herbs to player
         */
        if (isset ($_GET['daj']) && $_GET['daj'])
        {
            if ($player -> id != $mytribe -> fields['owner'] && !$perm -> fields['herbs'])
            {
                error(ERROR);
            }
            if (!in_array($_GET['daj'], $arrSqlname))
            {
                error(ERROR);
            }
            $intKey = array_search($_GET['daj'], $arrSqlname);
            $min1 = $arrName[$intKey];
            $smarty -> assign(array("Giveplayer" => GIVE_PLAYER,
                                    "Agive" => A_GIVE,
                                    "Tamount" => T_AMOUNT,
                                    "Hamount2" => H_AMOUNT2,
                                    "Tamount2" => $arrAmount[$intKey],
                                    "Nameherb" => $min1,
                                    "Itemid" => $_GET['daj']));
            if (isset ($_GET['step4']) && $_GET['step4'] == 'add')
            {
                if (!ereg("^[1-9][0-9]*$", $_POST['ilosc']))
                {
                    error (ERROR);
                }
                
                $dtrib = $db -> Execute("SELECT `tribe` FROM `players` WHERE `id`=".$player -> id);
                if ($dtrib -> fields['tribe'] != $mytribe -> fields['id'])
                {
                    error (NOT_IN_CLAN);
                }
                $give = $_GET['daj'];
                if ($mytribe -> fields[$give] < $_POST['ilosc'])
                {
                    error (NO_AMOUNT.$min1."!");
                }
                $kop = $db -> Execute("SELECT * FROM `herbs` WHERE `gracz`=".$player -> id);
                if (!$kop -> fields['id'])
                {
                    $db -> Execute("INSERT INTO `herbs` (`gracz`, `".$_GET['daj']."`) VALUES(".$player -> id.",".$_POST['ilosc'].")");
                }
                    else
                {
                    $db -> Execute("UPDATE `herbs` SET `".$_GET['daj']."`=`".$_GET['daj']."`+".$_POST['ilosc']." WHERE `gracz`=".$player -> id);
                }
                $db -> Execute("UPDATE `tribes` SET `".$_GET['daj']."`=`".$_GET['daj']."`-".$_POST['ilosc']." WHERE `id`=".$mytribe -> fields['id']);

                // Get name of the person which receives herbs.
                $objGetName = $db -> Execute("SELECT `user` FROM `players` WHERE `id`=".$player -> id.';');
                $strReceiversName = $objGetName -> fields['user'];
                $objGetName -> Close();
                unset( $objGetName );

                $smarty -> assign ("Message",  YOU_SEND1.'<b><a href="view.php?view='.$player -> id.'">'.$strReceiversName.'</a></b>'.YOU_SEND2.$player -> id." ".$_POST['ilosc']." ".$min1.'.');

                /**
                 * Send information about give herbs to player
                 */
                $strDate = $db -> DBDate($newdate);

                $db -> Execute("INSERT INTO `log` (`owner`, `log`, `czas`) VALUES(".$mytribe -> fields['owner'].", '".YOU_SEND1.'<b><a href="view.php?view='.$player -> id.'">'.$strReceiversName.'</a></b>'.YOU_SEND2.'<b>'.$player -> id."</b> ".$_POST['ilosc']." ".$min1.".', ".$strDate.")");
                $objPerm = $db -> Execute("SELECT `player` FROM `tribe_perm` WHERE `tribe`=".$mytribe -> fields['id']." AND `herbs`=1");
                while (!$objPerm -> EOF)
                {
                    
                    $objPerm -> MoveNext();
                }
                $objPerm -> Close();
                $db -> Execute("INSERT INTO `log` (`owner`, `log`, `czas`) VALUES(".$player -> id.", '".YOU_GET.$_POST['ilosc']." ".$min1.".', ".$strDate.")");
            }
        }
        if (isset ($_GET['step2']) && $_GET['step2'] == 'daj')
        {
            $smarty -> assign(array("Addherb" => ADD_HERB,
                                    "Aadd" => A_ADD,
                                    "Herb" => HERB,
                                    "Hamount" => H_AMOUNT,
                                    "Herbname" => $arrName,
                                    "Sqlname" => $arrSqlname));
            if (isset ($_GET['step3']) && $_GET['step3'] == 'add')
            {
                $gr = $db -> Execute("SELECT * FROM `herbs` WHERE `gracz`=".$player -> id);
                if (!in_array($_POST['mineral'], $arrSqlname))
                {
                    error(ERROR);
                }
                $intKey = array_search($_POST['mineral'], $arrSqlname);
                $nazwa = $arrName[$intKey];
                $min = $arrSqlname[$intKey];
                if ($_POST['ilosc'] > $gr -> fields[$min])
                {
                    error(NO_AMOUNT2.$nazwa.".");
                }
                if ($_POST['ilosc'] <= 0 || !ereg("^[1-9][0-9]*$", $_POST['ilosc']))
                {
                    error (ERROR);
                }
                $db -> Execute("UPDATE `tribes` SET `".$min."`=`".$min."`+".$_POST['ilosc']." WHERE `id`=".$mytribe -> fields['id']);
                $db -> Execute("UPDATE `herbs` SET `".$min."`=`".$min."`-".$_POST['ilosc']." WHERE `gracz`=".$player -> id);
                $smarty -> assign ("Message", YOU_ADD.$_POST['ilosc']." ".$nazwa.TO_CLAN);
                /**
                 * Send information about give herbs to tribe
                 */
                $strDate = $db -> DBDate($newdate);
                $db -> Execute("INSERT INTO `log` (`owner`, `log`, `czas`) VALUES(".$mytribe -> fields['owner'].", '".L_PLAYER." <b><a href=view.php?view=".$player -> id.">".$player -> user.L_ID.'<b>'.$player -> id.'</b>'.HE_ADD.$_POST['ilosc']." ".$nazwa.".', ".$strDate.")");
                $objPerm = $db -> Execute("SELECT `player` FROM `tribe_perm` WHERE `tribe`=".$mytribe -> fields['id']." AND `herbs`=1");
                while (!$objPerm -> EOF)
                {
                    $db -> Execute("INSERT INTO `log` (`owner`, `log`, `czas`) VALUES(".$objPerm -> fields['player'].", '".L_PLAYER." <b><a href=view.php?view=".$player -> id.">".$player -> user.L_ID.'<b>'.$player -> id.'</b>'.HE_ADD.$_POST['ilosc']." ".$nazwa.".', ".$strDate.")");
                    $objPerm -> MoveNext();
                }
                $objPerm -> Close();
            }
        }
    }

    /**
    * Clan minerals
    */
    if (isset ($_GET['step']) && $_GET['step'] == 'skarbiec')
    {
        $arrSqlname = array('copperore', 'zincore', 'tinore', 'ironore', 'copper', 'bronze', 'brass', 'iron', 'steel', 'coal', 'adamantium', 'meteor', 'crystal', 'pine', 'hazel', 'yew', 'elm');
        $arrName = array(MINE1, MINE2, MINE3, MINE4, MINE5, MINE6, MINE7, MINE8, MINE9, MINE10, MINE11, MINE12, MINE13, MINE14, MINE15, MINE16, MINE17);
        $arrAmount = array($mytribe -> fields['copperore'],
                           $mytribe -> fields['zincore'],
                           $mytribe -> fields['tinore'],
                           $mytribe -> fields['ironore'],
                           $mytribe -> fields['copper'],
                           $mytribe -> fields['bronze'],
                           $mytribe -> fields['brass'],
                           $mytribe -> fields['iron'],
                           $mytribe -> fields['steel'],
                           $mytribe -> fields['coal'],
                           $mytribe -> fields['adamantium'],
                           $mytribe -> fields['meteor'],
                           $mytribe -> fields['crystal'],
                           $mytribe -> fields['pine'],
                           $mytribe -> fields['hazel'],
                           $mytribe -> fields['yew'],
                           $mytribe -> fields['elm']);
        if (!isset ($_GET['step2']) && !isset ($_GET['step3']) && !isset ($_GET['daj']) && !isset ($_GET['step4']))
        {
            $arrTable = array();
            $i = 0;
            foreach ($arrName as $strName)
            {
                if ($player -> id == $mytribe -> fields['owner'] || $perm -> fields['bank'])
                {
                    $arrTable[$i] = "<tr><td><a href=\"tribes.php?view=my&amp;step=skarbiec&amp;daj=".$arrSqlname[$i]."\">".$strName."</a></td><td width=\"75%\" align=\"center\"><b>".$arrAmount[$i]."</b></td></tr>";
                }
                    else
                {
                    $arrTable[$i] = "<tr><td>".$strName."</td><td width=\"75%\" align=\"center\"><b>".$arrAmount[$i]."</b></td></tr>";
                }
                $i++;
            }
            $smarty -> assign(array("Mininfo" => MIN_INFO,
                                    "Whatyou" => WHAT_YOU,
                                    "Agiveto" => A_GIVE_TO,
                                    "Ttable" => $arrTable));
        }
        if (isset ($_GET['daj']) && $_GET['daj'])
        {
            if ($player -> id != $mytribe -> fields['owner'] && !$perm -> fields['bank'])
            {
                error(ERROR);
            }
            if (!in_array($_GET['daj'], $arrSqlname))
            {
                error(ERROR);
            }
            $intKey = array_search($_GET['daj'], $arrSqlname);
            $smarty -> assign(array("Itemid" => $_GET['daj'],
                                    "Giveplayer" => GIVE_PLAYER,
                                    "Agive" => A_GIVE,
                                    "Tamount" => T_AMOUNT,
                                    "Mamount2" => M_AMOUNT2,
                                    "Namemin" => $arrName[$intKey],
                                    "Tamount2" => $arrAmount[$intKey]));
            if (isset ($_GET['step4']) && $_GET['step4'] == 'add')
            {
                if (!ereg("^[1-9][0-9]*$", $_POST['ilosc']))
                {
                    error (ERROR);
                }
                $daj = $_GET['daj'];
                
                $dtrib = $db -> Execute("SELECT `tribe` FROM `players` WHERE `id`=".$player -> id);
                if ($dtrib -> fields['tribe'] != $mytribe -> fields['id'])
                {
                    error (NOT_IN_CLAN);
                }
                $dtrib -> Close();
                
                $give = $_GET['daj'];
                if ($mytribe -> fields[$give] < $_POST['ilosc'])
                {
                    error (NO_AMOUNT.$_POST['min']."!");
                }
                $kop = $db -> Execute("SELECT `owner` FROM `minerals` WHERE `owner`=".$player -> id);
                if (!$kop -> fields['owner'])
                {
                    $db -> Execute("INSERT INTO `minerals` (`owner`, `".$daj."`) VALUES(".$player -> id.",".$_POST['ilosc'].")");
                }
                    else
                {
                    $db -> Execute("UPDATE `minerals` SET `".$daj."`=`".$daj."`+".$_POST['ilosc']." WHERE `owner`=".$player -> id);
                }
                $kop -> Close();
                $db -> Execute("UPDATE `tribes` SET `".$daj."`=`".$daj."`-".$_POST['ilosc']." WHERE `id`=".$mytribe -> fields['id']);

                // Get name of the person which receives minerals.
                $objGetName = $db -> Execute("SELECT `user` FROM `players` WHERE `id`=".$player -> id.';');
                $strReceiversName = $objGetName -> fields['user'];
                $objGetName -> Close();
                unset( $objGetName );

                $smarty -> assign ("Message",  CLAN_SEND1.'<b><a href="view.php?view='.$player -> id.'">'.$strReceiversName.'</a></b>'.CLAN_SEND2.$player -> id." ".$_POST['ilosc']." ".$_POST['min']);
                /**
                 * Send information about give minerals to player
                 */
                $strDate = $db -> DBDate($newdate);
                $db -> Execute("INSERT INTO `log` (`owner`, `log`, `czas`) VALUES(".$mytribe -> fields['owner'].", '".CLAN_SEND1.'<b><a href="view.php?view='.$player -> id.'">'.$strReceiversName.'</a></b>'.CLAN_SEND2.'<b>'.$player -> id."</b> ".$_POST['ilosc']." ".$_POST['min'].".', ".$strDate.")");
                $objPerm = $db -> Execute("SELECT `player` FROM `tribe_perm` WHERE `tribe`=".$mytribe -> fields['id']." AND `bank`=1");
                while (!$objPerm -> EOF)
                {
                    
                    $objPerm -> MoveNext();
                }
                $objPerm -> Close();
               
            }
        }
  if (isset ($_GET['step2']) && $_GET['step2'] == 'daj')
        {
            $smarty -> assign(array("Addmin" => ADD_MIN,
                                    "Aadd" => A_ADD,
                                    "Mineral" => MINERAL,
                                    "Mamount" => M_AMOUNT,
                                    "Minsql" => $arrSqlname,
                                    "Minname" => $arrName));
            if (isset ($_GET['step3']) && $_GET['step3'] == 'add')
            {
                if (!in_array($_POST['mineral'], $arrSqlname))
                {
                    error(ERROR);
                }
                $gr = $db -> Execute("SELECT ".$_POST['mineral']." FROM `minerals` WHERE `owner`=".$player -> id);
                $intKey = array_search($_POST['mineral'], $arrSqlname);
                if ($_POST['ilosc'] > $gr -> fields[$arrSqlname[$intKey]])
                {
                    error(NO_AMOUNT2.$arrName[$intKey].".");
                }
                if ($_POST['ilosc'] <= 0 || !ereg("^[1-9][0-9]*$", $_POST['ilosc']))
                {
                    error (ERROR);
                }
                $db -> Execute("UPDATE `tribes` SET `".$arrSqlname[$intKey]."`=`".$arrSqlname[$intKey]."`+".$_POST['ilosc']." WHERE `id`=".$mytribe -> fields['id']);
                $db -> Execute("UPDATE `minerals` SET `".$arrSqlname[$intKey]."`=`".$arrSqlname[$intKey]."`-".$_POST['ilosc']." WHERE `owner`=".$player -> id);
                $smarty -> assign ("Message", YOU_ADD.$_POST['ilosc'].PIECES.$arrName[$intKey].TO_CLAN);
                /**
                 * Send information about give minerals to tribe
                 */
                $strDate = $db -> DBDate($newdate);
                $db -> Execute("INSERT INTO `log` (`owner`, `log`, `czas`) VALUES(".$mytribe -> fields['owner'].", '".L_PLAYER." <b><a href=\"view.php?view=".$player -> id."\">".$player -> user.L_ID.'<b>'.$player -> id.'</b>'.HE_ADD.$_POST['ilosc'].PIECES.$arrName[$intKey].".', ".$strDate.")");
                $objPerm = $db -> Execute("SELECT `player` FROM `tribe_perm` WHERE `tribe`=".$mytribe -> fields['id']." AND `bank`=1");
                while (!$objPerm -> EOF)
                {
                    $db -> Execute("INSERT INTO `log` (`owner`, `log`, `czas`) VALUES(".$objPerm -> fields['player'].", '".L_PLAYER." <b><a href=\"view.php?view=".$player -> id."\">".$player -> user.L_ID.'<b>'.$player -> id.'</b>'.HE_ADD.$_POST['ilosc'].PIECES.$arrName[$intKey].".', ".$strDate.")");
                    $objPerm -> MoveNext();
                }
                $objPerm -> Close();
            }
        }
    }

    /**
    * Members list
    */
    if (isset ($_GET['step']) && $_GET['step'] == 'members')
    {
        $mem = $db -> Execute("SELECT id, user, tribe_rank FROM players WHERE tribe=".$mytribe -> fields['id']);
        $arrlink = array();
        $i = 0;
        while (!$mem -> EOF)
        {
            if ($mem -> fields['id'] == $mytribe -> fields['owner'])
            {
                $arrlink[$i] = "- <a href=\"view.php?view=".$mem -> fields['id']."\">".$mem -> fields['user']."</a> (".$mem -> fields['id'].") (".$mem -> fields['tribe_rank'].") (".LEADER.")<br />";
            }
                else
            {
                $arrlink[$i] = "- <a href=\"view.php?view=".$mem -> fields['id']."\">".$mem -> fields['user']."</a> (".$mem -> fields['id'].") (".$mem -> fields['tribe_rank'].")<br />";
            }
            $mem -> MoveNext();
            $i = $i + 1;
        }
        $mem -> Close();
        $smarty -> assign("Link", $arrlink);
    }

    /**
    * Leave clan
    */
    if (isset ($_GET['step']) && $_GET['step'] == 'quit')
    {
        $smarty -> assign(array("Ayes" => YES,
            "Ano" => NO));
        if ($mytribe -> fields['owner'] == $player -> id)
        {
            $smarty -> assign(array("Owner" => 1,
                "Qleader" => Q_LEADER));
            if (isset ($_GET['dalej']))
            {
                $db -> Execute("UPDATE players SET tribe=0 WHERE tribe=".$mytribe -> fields['id']);
                $db -> Execute("DELETE FROM tribes WHERE id=".$mytribe -> fields['id']);
                $db -> Execute("DELETE FROM tribe_zbroj WHERE klan=".$mytribe -> fields['id']);
                $db -> Execute("DELETE FROM tribe_mag WHERE klan=".$mytribe -> fields['id']);
                $db -> Execute("DELETE FROM tribe_oczek WHERE klan=".$mytribe -> fields['id']);
                $db -> Execute("DELETE FROM tribe_perm WHERE tribe=".$mytribe -> fields['id']);
                $db -> Execute("UPDATE players SET tribe_rank='' WHERE id=".$player -> id);
                error (L_LEADER);
            }
        }
            else
        {
            $smarty -> assign(array("Owner" => 0,
                "Qmember" => Q_MEMBER));
            if (isset ($_GET['dalej']))
            {
                $db -> Execute("UPDATE players SET tribe=0, tribe_rank='' WHERE id=".$player -> id);
                $db -> Execute("DELETE FROM tribe_perm WHERE tribe=".$mytribe -> fields['id']." AND player=".$player -> id);
                $strDate = $db -> DBDate($newdate);
                $db -> Execute("INSERT INTO `log` (`owner`,`log`, `czas`) VALUES(".$mytribe -> fields['owner'].", '".L_PLAYER." <b><a href=\"view.php?view=".$player -> id."\">".$player -> user.L_ID.'<b>'.$player -> id.'</b>'.M_LEAVE."', ".$strDate.")");
                error (L_MEMBER);
            }
        }
    }

    /**
    * Clan control menu
    */
    if (isset ($_GET['step']) && $_GET['step'] == 'owner')
    {
        $smarty -> assign(array("Panelinfo" => PANEL_INFO,
                                "Aperm" => A_PERM,
                                "Arank" => A_RANK,
                                "Adesc" => A_DESC,
                                "Awaiting" => A_WAITING,
                                "Akick" => A_KICK,
                                "Aarmy" => A_ARMY,
                                "Aattack2" => A_ATTACK2,
                                "Aloan" => A_LOAN,
                                "Amisc" => A_MISC,
                                "Amail2" => A_MAIL2));
        $test = array($perm -> fields['messages'],$perm -> fields['wait'],$perm -> fields['kick'],$perm -> fields['army'],$perm -> fields['attack'],$perm -> fields['loan'],$perm -> fields['armory'],$perm -> fields['warehouse'],$perm -> fields['bank'],$perm -> fields['herbs'], $perm -> fields['mail'], $perm -> fields['ranks'], $perm -> fields['czar']);
        $intTest = 0;
        for ($i = 0; $i < 20; $i++)
        {
            if ($test[$i])
            {
                $intTest = 1;
                break;
            }
        }
        if ($player -> id == $mytribe -> fields['owner'] || $intTest)
        {
       /**
	* Build fortress
	*/ 			 
            if (!isset ($_GET['step2']) or $_GET['step2'] == 'fortress' )
			{
				
				
				if($mytribe -> fields['lvl'] > 5)
				{
					$smarty -> assign("message","Forteca ma najwyższy możliwy poziom rozbudowania");
				}
				else
				{
					$smarty -> assign("message","Klan posiada fortecę na poziomie ".$mytribe -> fields['lvl']);
				}
				
				$arrGoldcost=array(0,0,500000,5000000,8000000,50000000,150000000);
				$arrPlatcost=array(0,0,5000,10000,40000,100000,200000);
				$arrPrestneed=array(0,0,600,2000,4000,8000,15000);
				$arrLudadd=array(0,0,2,2,2,3,5);
				$arrPrestadd=array(0,0,100,200,300,400,500);
				$arrArmyadd=array(0,0,5000,10000,50000,70000,9860000);
				$arrFortadd=array(0,0,1000,1500,10000,15000,20000,30000);
				$arrZolnadd=array(0,0,1000,1500,10000,15000,20000,30000);
				
				$lvl=$mytribe->fields['lvl'];
				$gold="<span style='color: red'>".$mytribe -> fields['credits']."</span>";
				$plat="<span style='color:red'>".$mytribe -> fields['platinum']."</span>";
				$prest="<span style='color:red'>".$mytribe -> fields['prest']."</span>";
				if ($mytribe -> fields['credits'] >= $arrGoldcost[$lvl+1])
				{
					$gold="<span style='color:green'>".$mytribe -> fields['credits']."</span>";
				}
				if ($mytribe -> fields['platinum'] >= $arrPlatcost[$lvl+1])
				{
					$plat="<span style='color:green'>".$mytribe -> fields['platinum']."</span>";
				}
				if ($mytribe -> fields['prest'] >= $arrPrestneed[$lvl+1])
				{
					$prest="<span style='color:green'>".$mytribe -> fields['prest']."</span>";
				}
				$smarty -> assign(array("Lvl" => $lvl,
							"Nextlvl" => $lvl+1,
							"Slvl" =>$mytribe->fields['slvl'],
                                                        "Goldcost" => $arrGoldcost[$lvl+1],
                                                        "Platcost" => $arrPlatcost[$lvl+1],
                                                        "Prestcost" => $arrPrestneed[$lvl+1],
							"Gold" => $gold,
							"Platinum" => $plat,
							"Prest" => $prest,
							"Ludadd" => $arrLudadd[$lvl+1],
							"Prestadd" => $arrPrestadd[$lvl+1],
							"Fortadd" => $arrFortadd[$lvl+1],
							"Zolnadd" => $arrZolnadd[$lvl+1],
							"Armyadd" => $arrArmyadd[$lvl+1]
							));
				if ($_GET['step2'] == 'fortress')
				{
					if($player -> id != $mytribe -> fields['owner'])
					{
						error (NO_PERM2);
					}
					if($mytribe -> fields['credits'] >= $arrGoldcost[$lvl+1] and $mytribe -> fields['platinum'] >= $arrPlatcost[$lvl+1] and $mytribe -> fields['prest'] >= $arrPrestneed[$lvl+1])
					{
						$db -> Execute("UPDATE tribes SET lvl=lvl+1, prest=prest+".$arrPrestadd[$lvl+1].", maxlud=maxlud+".$arrLudadd[$lvl+1].", zolnierze=zolnierze+".$arrZolnadd[$lvl+1].", forty=forty+".$arrFortadd[$lvl+1].", maxz=maxz+".$arrArmyadd[$lvl+1].", maxf=maxz WHERE id=".$mytribe->fields['id']);
						$db -> Execute("UPDATE tribes SET credits=credits-".$arrGoldcost[$lvl+1].", platinum=platinum-".$arrPlatcost[$lvl+1]." WHERE id=".$mytribe->fields['id']);
						$db -> Execute("UPDATE `gielda` SET `cost`=`cost`+5000 WHERE `id`=".$mytribe->fields['id']);
						error("Zwiekszyłeś poziom rozbudowy fortecy");
					}
					else
					{
						error("Klan nie spełnia wymagań, aby zwiększyć poziom fortecy!");
					}
				}
				}
				/**
				* Change tribe name
				**/
				if (!isset ($_GET['step2']) && $_GET['step2'] == 'changename' )
				{
					if ($mytribe -> fields['owner'] != $player-> id)
					{
						error("Nie masz uprawnień do zmiany nazwy gildii.");
					}
					if (isset($_POST["name"]))
					{
						$db->Execute("Update tribes set name='".mysql_real_escape_string($_POST["name"])."' where id=".$mytribe->fields['id']);
						error("Zmieniles nazwe gildii na ".$_POST["name"]);
					}
				}
					/**
				* Change tribe owner
				**/
				if (!isset ($_GET['step2']) && $_GET['step2'] == 'changeowner' )
				{
					if ($mytribe -> fields['owner'] != $player-> id)
					{
						error("Nie masz uprawnień do zmiany właściciela gildii.");
					}
					if (isset($_POST["pid"]))
					{
						if(!is_numeric($_POST["pid"]))
						{
							error("Nie ma takiego gracza");
						}
						$test=$db->Execute("select id, tribe from players where id=".$_POST['pid']);
						if(!$test->fields['id'])
						{
							error("Nie ma takiego gracza");
						}
						if($test->fields['tribe'] != $mytribe->fields['id'])
						{
							error("Ta osoba nie jest w twoim klanie.");
						}
						$db->Execute("Update tribes set owner=".$_POST["pid"]." where id=".$mytribe->fields['id']);
						error("Zmieniles właściciela gildii na gracza o id ".$_POST["pid"]);
					}
				}
                         /**
			 * Build temple
			 */ 			 
                                if (!isset ($_GET['step2']) or $_GET['step2'] == 'swiatynia' )
                                {
				
					if($mytribe -> fields['slvl'] > 5)
				{
					$smarty -> assign("message","Forteca ma najwyższy możliwy poziom rozbudowania");
				}
				else
		
				
				{
					$smarty -> assign("messagee","Klan posiada świątynię na poziomie ".$mytribe -> fields['slvl']);
				}
				
				$arrGoldcostt=array(0,0,300000,1000000,2000000,5000000,50000000);
				$arrPoziomcost=array(0,0,2,3,4,5,6);
				$arrPoziomneed=array(0,0,2,3,4,5,6);
				$arrMaxladunkiadd=array(0,0,10,10,10,30,100);
				$arrPrestadd=array(0,0,100,200,300,400,500);
				$arrMocbloadd=array(0,0,1,1,1,2,2);
				$arrMaxbloadd=array(0,0,0,0,0,0,0,1);
				$arrZolnadd=array(0,0,1000,1500,2000,2500,3000,3500);
				
				$slvl=$mytribe->fields['slvl'];
				$goldd="<span style='color: red'>".$mytribe -> fields['credits']."</span>";
				$poziom="<span style='color:red'>".$mytribe -> fields['lvl']."</span>";
				if ($mytribe -> fields['credits'] >= $arrGoldcostt[$slvl+1])
				{
					$goldd="<span style='color:green'>".$mytribe -> fields['credits']."</span>";
				}
				if ($mytribe -> fields['lvl'] >= $arrPoziomneed[$slvl+1])
				{
					$poziom="<span style='color:green'>".$mytribe -> fields['lvl']."</span>";
				}
			
				$smarty -> assign(array("Slvl" => $slvl,
							"Nextslvl" => $slvl+1,
                                                        "Goldcostt" => $arrGoldcostt[$slvl+1],
                                                        "Poziomcost" => $arrPoziomcost[$slvl+1],
              
							"Goldd" => $goldd,
							"Poziom" => $poziom,
							
							"Maxladunkiadd" => $arrMaxladunkiadd[$slvl+1],
							"Prestadd" => $arrPrestadd[$slvl+1],
							"Maxbloadd" => $arrMaxbloadd[$slvl+1],
							"Zolnadd" => $arrZolnadd[$slvl+1],
							"Mocbloadd" => $arrMocbloadd[$slvl+1]
							));
				if ($_GET['step3'] == 'swiatynia')
				{
					if($player -> id != $mytribe -> fields['owner'])
					{
						error (NO_PERM2);
					}
					if($mytribe -> fields['credits'] >= $arrGoldcostt[$slvl+1] and $mytribe -> fields['lvl'] >= $arrPoziomcost[$slvl+1])
					{
						$db -> Execute("UPDATE tribes SET slvl=slvl+1, mocblo=mocblo+".$arrMocbloadd[$slvl+1].", maxblo=maxblo+".$arrMaxbloadd[$slvl+1].", maxladunki=maxladunki+".$arrMaxladunkiadd[$slvl+1]." WHERE id=".$mytribe->fields['id']);
						$db -> Execute("UPDATE tribes SET credits=credits-".$arrGoldcostt[$slvl+1]." WHERE id=".$mytribe->fields['id']) or error("UPDATE tribes SET credits=credits-".$arrGoldcostt[$slvl+1]." WHERE id=".$mytribe->fields['id']);
						$db -> Execute("UPDATE `gielda` SET `cost`=`cost`+5000 WHERE `id`=".$mytribe->fields['id']);
						error("Zwiekszyłeś poziom rozbudowy świątyni");
					}
					else
					{
						error("Klan nie spełnia wymagań, aby zwiększyć poziom świątyni!");
					}
				}
				} 
				
			
			/**
            * Set ranks for members
            */
            if (isset ($_GET['step2']) && $_GET['step2'] == 'rank')
            {
                if($player -> id != $mytribe -> fields['owner'] && !$perm -> fields['ranks'])
                {
                   error (NO_PERM2);
                }
                if (!isset ($_GET['step3']))
                {
                    $smarty -> assign(array("Ranksinfo" => RANKS_INFO,
                        "Aaddranks" => A_ADD_RANKS));
                    $test = $db -> Execute("SELECT id FROM tribe_rank WHERE tribe_id=".$mytribe -> fields['id']);
                    if ($test -> fields['id'])
                    {
                        $smarty -> assign ("Menu", "<li><a href=\"tribes.php?view=my&amp;step=owner&amp;step2=rank&amp;step3=get\">".GIVE_RANK."</a></li>");
                    }
                        else
                    {
                        $smarty -> assign("Menu", '');
                    }
                    $test -> Close();
                }
                if (isset ($_GET['step3']) && $_GET['step3'] == 'set')
                {
                    $ranks = $db -> Execute("select * from tribe_rank where tribe_id=".$mytribe -> fields['id']);
                    if (!$ranks -> fields['id'])
                    {
                        $smarty -> assign(array("Empty" => 1,
                            "Noranks2" => NO_RANKS2,
                            "Amake" => A_MAKE));
                    }
                        else
                    {
						$RankArr = array ();
						$TagPrefixArr = array ();
						for ($i = 1; $i <= 10; $i++) {
							$RankArr[$i] = $ranks->fields['rank'.$i];
							$TagPrefixArr[$i] = $ranks->fields['tag_prefix_'.$i];
						}

						$TagSufix = $ranks->fields['tag_sufix'];

                        $smarty -> assign(array("Empty" => 0,
                            "Editranks" => EDIT_RANKS,
                            "Asave" => A_SAVE,
                            "Rank" => RANK,
							'RankArr' => $RankArr,
							'TagPrefixArr' => $TagPrefixArr,
							'TagSufix' => $TagSufix));
                    }


					$TagLenSumMax = 9;

                    if (isset ($_GET['step4']) && $_GET['step4'] == 'add')
                    {

                        $arrRank = array();
						$arrTagPrefix = array ();
                        for ($i=1; $i<=10; $i++)
                        {
                            $number = "rank".$i;
							$tag = "tag_prefix_".$i;
                            $j = $i - 1;
							if (strlen ($_POST[$tag]) + strlen ($_POST['tag_sufix']) > $TagLenSumMax) {
								error (TOO_LONG_TAG.' <a href="tribes.php?view=my&amp;step=owner&amp;step2=rank&amp;step3=set">'.BACK.'</a>');
							}

                            $_POST[$number] = strip_tags($_POST[$number]);
							$_POST[$tag] = strip_tags($_POST[$tag]);

                            $arrRank[$j] = $db -> qstr($_POST[$number], get_magic_quotes_gpc());
							$arrTagPrefix[$j] = $db->qstr ($_POST[$tag], get_magic_quotes_gpc ());
                        }

						$TagSufix = strip_tags($_POST['tag_sufix']);
						$TagSufix = $db->qstr ($TagSufix, get_magic_quotes_gpc ());

					$query = "INSERT INTO tribe_rank (tribe_id, rank1, rank2, rank3, rank4, rank5, rank6, rank7, rank8, rank9, rank10, tag_sufix, tag_prefix_1, tag_prefix_2, tag_prefix_3, tag_prefix_4, tag_prefix_5, tag_prefix_6, tag_prefix_7, tag_prefix_8, tag_prefix_9, tag_prefix_10) VALUES(".$mytribe -> fields['id'].", ".$arrRank[0].", ".$arrRank[1].", ".$arrRank[2].", ".$arrRank[3].", ".$arrRank[4].", ".$arrRank[5].", ".$arrRank[6].", ".$arrRank[7].", ".$arrRank[8].", ".$arrRank[9].", ".$TagSufix.", ".$arrTagPrefix[0].", ".$arrTagPrefix[1].", ".$arrTagPrefix[2].", ".$arrTagPrefix[3].", ".$arrTagPrefix[4].", ".$arrTagPrefix[5].", ".$arrTagPrefix[6].", ".$arrTagPrefix[7].", ".$arrTagPrefix[8].", ".$arrTagPrefix[9].")";

					$db->Execute ($query);

			error (RANK_CREATED.'. <a href="tribes.php?view=my&amp;step=owner&amp;step2=rank&amp;step3=set">'.BACK_TO.'</a>');
                    }
                    if (isset ($_GET['step4']) && $_GET['step4'] == 'edit')
                    {
                        $arrRank = array();
						$arrTagPrefix = array ();
                        for ($i=1; $i<=10; $i++)
                        {
                            $number = "rank".$i;
							$tag = "tag_prefix_".$i;
                            $j = $i - 1;
							if (strlen ($_POST[$tag]) + strlen ($_POST['tag_sufix']) > $TagLenSumMax) {
								error (TOO_LONG_TAG.' <a href="tribes.php?view=my&amp;step=owner&amp;step2=rank&amp;step3=set">'.BACK.'</a>');
							}

                            $_POST[$number] = strip_tags($_POST[$number]);
							$_POST[$tag] = strip_tags($_POST[$tag]);

                            $arrRank[$j] = $db -> qstr($_POST[$number], get_magic_quotes_gpc());
							$arrTagPrefix[$j] = $db->qstr ($_POST[$tag], get_magic_quotes_gpc ());
                        }

						$TagSufix = strip_tags($_POST['tag_sufix']);
						$TagSufix = $db->qstr ($TagSufix, get_magic_quotes_gpc ());

                        $db -> Execute("UPDATE tribe_rank SET rank1=".$arrRank[0].", rank2=".$arrRank[1].", rank3=".$arrRank[2].", rank4=".$arrRank[3].", rank5=".$arrRank[4].", rank6=".$arrRank[5].", rank7=".$arrRank[6].", rank8=".$arrRank[7].", rank9=".$arrRank[8].", rank10=".$arrRank[9].", tag_sufix=".$TagSufix.", tag_prefix_1=".$arrTagPrefix[0].", tag_prefix_2=".$arrTagPrefix[1].", tag_prefix_3=".$arrTagPrefix[2].", tag_prefix_4=".$arrTagPrefix[3].", tag_prefix_5=".$arrTagPrefix[4].", tag_prefix_6=".$arrTagPrefix[5].", tag_prefix_7=".$arrTagPrefix[6].", tag_prefix_8=".$arrTagPrefix[7].", tag_prefix_9=".$arrTagPrefix[8].", tag_prefix_10=".$arrTagPrefix[9]." WHERE tribe_id=".$mytribe -> fields['id']);

			error (RANK_CHANGED.'. <a href="tribes.php?view=my&amp;step=owner&amp;step2=rank&amp;step3=set">'.BACK_TO.'</a>');
                    }
                }
                if (isset ($_GET['step3']) && $_GET['step3'] == 'get')
                {
                    $test = $db -> Execute("SELECT id FROM tribe_rank WHERE tribe_id=".$mytribe -> fields['id']);
                    if (!$test -> fields['id'])
                    {
                        error (NO_RANKS);
                    }
                    $test -> Close();
                    $rank = $db -> Execute("select rank1, rank2, rank3, rank4, rank5, rank6, rank7, rank8, rank9, rank10 from tribe_rank where tribe_id=".$mytribe -> fields['id']);
                    $name = array('rank1','rank2','rank3','rank4','rank5','rank6','rank7','rank8','rank9','rank10');
                    $arrname = array();
                    $j = 0;
                    for ($i=0;$i<10;$i++)
                    {
                        $number = $name[$i];
                        if ($rank -> fields[$number])
                        {
                            $arrname[$j] = $rank -> fields[$number];
                            $j = $j + 1;
                        }
                    }
                    $rank -> Close();
                    $smarty -> assign (array("Rank" => $arrname,
                        "Aset" => A_SET,
                        "Setrank" => SET_RANK,
                        "Rankplayer" => RANK_PLAYER));
                    if (isset ($_GET['step4']) && $_GET['step4'] == 'add')
                    {
                        $_POST['rank'] = strip_tags($_POST['rank']);
                        if (!ereg("^[1-9][0-9]*$", $_POST['rid']))
                        {
                            error (ERROR);
                        }
                        $test = $db -> Execute("SELECT tribe FROM players WHERE id=".$_POST['rid']);
                        if ($test -> fields['tribe'] != $mytribe -> fields['id'])
                        {
                            error (NOT_IN_CLAN);
                        }
                        $test -> Close();
                        $strRank = $db -> qstr($_POST['rank'], get_magic_quotes_gpc());
                        $db -> Execute("UPDATE players SET tribe_rank=".$strRank." WHERE id=".$_POST['rid']);
                        $smarty -> assign ("Message", YOU_GIVE.$_POST['rid'].T_RANK.$_POST['rank']."<br />");
                    }
                }
            }

            /**
            * Add members permission in clan - only clan leader
            */
            if (isset ($_GET['step2']) && $_GET['step2'] == 'permissions')
            {
                if ($player -> id != $mytribe -> fields['owner'])
                {
                    error (ONLY_LEADER);
                }
                if (!isset ($_GET['step3']))
                {
                    $objMembers = $db -> Execute("SELECT user, id FROM players WHERE tribe=".$mytribe -> fields['id']." AND id!=".$mytribe -> fields['owner']);
                    $arrMembers = array();
                    $arrMemid = array();
                    $i = 0;
                    while (!$objMembers -> EOF)
                    {
                        $arrMembers[$i] = $objMembers -> fields['user'];
                        $arrMemid[$i] = $objMembers -> fields['id'];
                        $i = $i + 1;
                        $objMembers -> MoveNext();
                    }
                    $objMembers -> Close();
                    if (!isset($_GET['next']))
                    {
                        $_GET['next'] = '';
                    }
                    $smarty -> assign(array("Perminfo" => PERM_INFO,
                                            "Tperm1" => T_PERM1,
                                            "Tperm2" => T_PERM2,
                                            "Tperm3" => T_PERM3,
                                            "Tperm4" => T_PERM4,
                                            "Tperm5" => T_PERM5,
                                            "Tperm6" => T_PERM6,
                                            "Tperm7" => T_PERM7,
                                            "Tperm8" => T_PERM8,
                                            "Tperm9" => T_PERM9,
                                            "Tperm10" => T_PERM10,
                                            "Tperm11" => T_PERM11,
                                            "Tperm12" => T_PERM12,
                                            "Tperm13" => T_PERM13,
                                            "Tperm14" => T_PERM14,
                                            "Tperm15" => T_PERM15,
                                            "Tperm16" => T_PERM16,
                                            "Tperm20" => T_PERM20,
                                            "Asave" => A_SAVE,
                                            "Anext" => A_NEXT,
                                            "Next" => $_GET['next'],
                                            "Members" => $arrMembers,
                                            "Memid" => $arrMemid,
                                            "Yes" => YES,
                                            "No" => NO));
                    if (isset($_GET['next']) && $_GET['next'] == 'add')
                    {
                        if (!ereg("^[1-9][0-9]*$", $_POST['memid']))
                        {
                            error(ERROR);
                        }
                        $objTest = $db -> Execute("SELECT * FROM tribe_perm WHERE player=".$_POST['memid']);
                        $arrTest = array($objTest -> fields['messages'],
                                         $objTest -> fields['wait'],
                                         $objTest -> fields['kick'],
                                         $objTest -> fields['army'],
                                         $objTest -> fields['attack'],
                                         $objTest -> fields['loan'],
                                         $objTest -> fields['prest'],
                                         $objTest -> fields['armory'],
                                         $objTest -> fields['warehouse'],
                                         $objTest -> fields['bank'],
                                         $objTest -> fields['herbs'],
                                         $objTest -> fields['forum'],
                                         $objTest -> fields['ranks'],
                                         $objTest -> fields['mail'],
                                         $objTest -> fields['info'],
                                         $objTest -> fields['astralvault'],
                                         $objTest -> fields['czar']);
                        $objTest -> Close();
                        $objName = $db -> Execute("SELECT user FROM players WHERE id=".$_POST['memid']);
                        $arrSelected = array();
                        $i = 0;
                        foreach ($arrTest as $intTest)
                        {
                            if ($intTest)
                            {
                                $arrSelected[$i] = 'selected';
                            }
                                else
                            {
                                $arrSelected[$i] = '';
                            }
                            $i ++;
                        }
                        $smarty -> assign(array("Memid2" => $_POST['memid'],
                            "Tselected" => $arrSelected,
                            "Tname" => $objName -> fields['user'],
                            "Tuser" => T_USER));
                        $objName -> Close();
                    }
                }
                if (isset ($_GET['step3']))
                {
                    $test = array($_POST['messages'],
                                  $_POST['wait'],
                                  $_POST['kick'],
                                  $_POST['army'],
                                  $_POST['attack'],
                                  $_POST['loan'],
                                  $_POST['armory'],
                                  $_POST['warehouse'],
                                  $_POST['bank'],
                                  $_POST['herbs'],
                                  $_POST['prest'],
                                  $_POST['forum'],
                                  $_POST['ranks'],
                                  $_POST['mail'],
                                  $_POST['info'],
                                  $_POST['astralvault'],
                                  $_POST['czar']);
                    for ($i=0; $i<20; $i++)
                    {
                        if (!ereg("^[0-1]*$", $test[$i]))
                        {
                            error (ERROR);
                        }
                        if (!ereg("^[1-9][0-9]*$", $_POST['memid']))
                        {
                            error(ERROR);
                        }
                        $ttribe = $db -> Execute("SELECT tribe FROM players WHERE id=".$_POST['memid']);
                        if ($ttribe -> fields['tribe'] != $mytribe -> fields['id'])
                        {
                            error (NOT_IN_CLAN." <a href=\"tribes.php?view=my&amp;step=owner\">".BACK_TO."</a>");
                        }
                    }
                }
                if (isset ($_GET['step3']) && $_GET['step3'] == 'add')
                {
                    $objTest = $db -> Execute("SELECT id FROM tribe_perm WHERE tribe=".$mytribe -> fields['id']." AND player=".$_POST['memid']);
                    if (!$objTest -> fields['id'])
                    {
                        $db -> Execute("INSERT INTO tribe_perm (tribe, player, messages, wait, kick, army, attack, loan, armory, warehouse, bank, herbs, forum, ranks, mail, info, astralvault, czar) VALUES(".$mytribe -> fields['id'].", ".$_POST['memid'].", ".$_POST['messages'].", ".$_POST['wait'].", ".$_POST['kick'].", ".$_POST['army'].", ".$_POST['attack'].", ".$_POST['loan'].", ".$_POST['armory'].", ".$_POST['warehouse'].", ".$_POST['bank'].", ".$_POST['herbs'].", ".$_POST['forum'].", ".$_POST['ranks'].", ".$_POST['mail'].", ".$_POST['info'].", ".$_POST['astralvault'].", ".$_POST['czar'].")");
                    }
                        else
                    {
                        $db -> Execute("UPDATE tribe_perm SET messages=".$_POST['messages'].", wait=".$_POST['wait'].", kick=".$_POST['kick'].", army=".$_POST['army'].", attack=".$_POST['attack'].", loan=".$_POST['loan'].", armory=".$_POST['armory'].", warehouse=".$_POST['warehouse'].", bank=".$_POST['bank'].", herbs=".$_POST['herbs'].", forum=".$_POST['forum'].", ranks=".$_POST['ranks'].", mail=".$_POST['mail'].", info=".$_POST['info'].", astralvault=".$_POST['astralvault'].", czar=".$_POST['czar']." WHERE id=".$objTest -> fields['id']);
                    }
                    $objTest -> Close();
                    $smarty -> assign ("Message", YOU_SET." <a href=\"tribes.php?view=my&amp;step=owner\">".BACK_TO."</a>");
                }
            }

            /**
            * Send mail to all members
            */
            if (isset ($_GET['step2']) && $_GET['step2'] == 'mail')
            {
                if ($player -> id != $mytribe -> fields['owner'] && !$perm -> fields['mail'])
                {
                    error (NO_PERM2);
                }
                if (isset($_GET['step3']) && $_GET['step3'] == 'send')
                {
                    $strBody = strip_tags($_POST['body']);
                    $strTitle = strip_tags($_POST['mtitle']);
                    if (empty($strBody) || empty($strTitle))
                    {
                        error(EMPTY_FIELDS);
                    }
                    require_once('includes/bbcode.php');
                    $strBody = bbcodetohtml($strBody);
                    $strTitle = bbcodetohtml($strTitle);
                    $strTitle = T_CLAN.$strTitle;
                    $objOwner = $db -> Execute("SELECT `id` FROM `players` WHERE `tribe`=".$mytribe -> fields['id']." AND `id`!=".$player -> id);
                    $strDate = $db -> DBDate($newdate);
                    while (!$objOwner -> EOF)
                    {
                        $db -> Execute("INSERT INTO `mail` (`sender`, `senderid`, `owner`, `subject`, `body`, `date`) VALUES('".$player -> user."','".$player -> id."',".$objOwner -> fields['id'].",'".$strTitle."','".$strBody."', ".$strDate.")");
                        $db -> Execute("UPDATE `gielda` SET `cost`=`cost`-80 WHERE `id`=".$mytribe -> fields['id']);
                        $objOwner -> MoveNext();
                    }
                    $objOwner -> Close();
                    $smarty -> assign("Message", YOU_SEND);
                }
                    else
                {
                    $smarty -> assign(array("Tbody" => T_BODY,
                                            "Asend" => A_SEND,
                                            "Ttitle" => T_TITLE));
                }
            }

            /**
            * Buy army and barricades to clan
            */
            if (isset ($_GET['step2']) && $_GET['step2'] == 'wojsko')
            {
                if ($player -> id != $mytribe -> fields['owner'] && !$perm -> fields['army'])
                {
                    error (NO_PERM);
                }
                $smarty -> assign(array("Armyinfo" => ARMY_INFO,
                                        "Howmanys" => HOW_MANY_S,
                                        "Howmanyf" => HOW_MANY_F,
                                        "Abuy" => A_BUY));
                if (isset ($_GET['action']) && $_GET['action'] == 'kup')
                {
                    if (!ereg("^[0-9]*$",$_POST['zolnierze']))
                    {
                        error (ERROR);
                    }
                    if (!ereg("^[0-9]*$",$_POST['forty']))
                    {
                        error (ERROR);
                    }
                    if ($_POST["zolnierze"] == 0 && $_POST["forty"] == 0)
                    {
                        error (EMPTY_FIELDS);
                    }
                    
                    
                    $xxxx = ($_POST['zolnierze'] / 10);
                    $smarty -> assign ("Xxxx", $xxxx);
                    $yyyy = ($_POST['forty'] / 10);
                    $smarty -> assign ("Yyyy", $yyyy);
                    
                    
                    $cenaz = ($_POST["zolnierze"] * 1000);
                    $cenaf = ($_POST["forty"] * 1000);
                    $suma = $cenaz + $cenaf;
                    if ($suma > $mytribe -> fields['credits'])
                    {
                        error (NO_MONEY);
                    }
					if ($_POST["zolnierze"] + $mytribe -> fields['zolnierze'] > $mytribe->fields['maxz'])
					{	
						error("W fortecy brakuje miejsca dla tylu żołnierzy!");
					}
					if ($_POST["forty"] + $mytribe -> fields['forty'] > $mytribe->fields['maxf'])
					{	
						error("W fortecy brakuje miejsca dla tylu fortyfikacji!");
					}
					$message = '';
                    $strLog = '';
                    $złota = ' złota. ';
                    if ($_POST["zolnierze"] > 0)
                    $złota = ' złota. ';
                    {
                        $db -> Execute("UPDATE `tribes` SET `zolnierze`=`zolnierze`+".$_POST['zolnierze']." WHERE `id`=".$mytribe -> fields['id']);
                        $db -> Execute("UPDATE `gielda` SET `cost`=`cost`+".$xxxx."  WHERE `id`=".$mytribe -> fields['id']);
                        $message =  $message.YOU_BUY.$_POST['zolnierze'].SOLDIERS.$cenaz. $złota ;
                        $strLog =  $strLog.SOMEONE_BUY.$_POST['zolnierze'].SOLDIERS.$cenaz. $złota ;
                    }
                    if ($_POST["forty"] > 0)
                    $złota = ' złota. ';
                    {
                        $db -> Execute("UPDATE `tribes` SET `forty`=`forty`+".$_POST['forty']." WHERE `id`=".$mytribe -> fields['id']);
                        $db -> Execute("UPDATE `gielda` SET `cost`=`cost`-".$yyyy." WHERE `id`=".$mytribe -> fields['id']);
                        $message = $message.YOU_BUY.$_POST['forty'].BARRICADES.$cenaf. $złota ;
                        $strLog = $strLog.SOMEONE_BUY.$_POST['forty'].BARRICADES.$cenaf. $złota ;
                    }
                    $db -> Execute("UPDATE `tribes` SET `credits`=`credits`-".$suma." WHERE `id`=".$mytribe -> fields['id']);
                    $złota = ' złota. ';
                    $message = $message.ALL_COST.$suma. $złota ;
                    $strLog = $strLog.ALL_COST2.$suma. $złota ;
                    $smarty -> assign("Message", $message);
                    /**
                     * Send informations about buy army
                     */
                    $strDate = $db -> DBDate($newdate);
                    $db -> Execute("INSERT INTO `log` (`owner`,`log`, `czas`) VALUES(".$mytribe -> fields['owner'].", '".$strLog."', ".$strDate.")");
                    $db -> Execute("UPDATE `gielda` SET `cost`=`cost`+20 WHERE `id`=".$mytribe -> fields['id']);
                    $objPerm = $db -> Execute("SELECT `player` FROM `tribe_perm` WHERE `tribe`=".$mytribe -> fields['id']." AND `army`=1");
                    
                    while (!$objPerm -> EOF)
                    {
                        $db -> Execute("INSERT INTO `log` (`owner`,`log`, `czas`) VALUES(".$objPerm -> fields['player'].", '".$strLog."', ".$strDate.")");
                        $objPerm -> MoveNext();
                    }
                    $objPerm -> Close();
                }
            }

            /**
            * Waiting for join to clan
            */
            if (isset ($_GET['step2']) && $_GET['step2'] == 'nowy')
            {
                if ($player -> id != $mytribe -> fields['owner'] && !$perm -> fields['wait'])
                {
                    error (NO_PERM2);
                }
                

                $smarty -> assign("New", 0);
                if (!isset($_GET['odrzuc']) && !isset($_GET['dodaj']))
                {
                    $smarty -> assign ("New", 1);
                    $czeka = $db -> Execute("SELECT * FROM tribe_oczek WHERE klan=".$mytribe -> fields['id']);
                    $arrlink = array();
                    $i = 0;
                    while (!$czeka -> EOF)
                    {
                        $arrlink[$i] = "<tr><td><a href=\"view.php?view=".$czeka -> fields['gracz']."\">".$czeka -> fields['gracz']."</a></td><td><a href=\"tribes.php?view=my&amp;step=owner&amp;step2=nowy&dodaj=".$czeka -> fields['id']."\">".YES."</a></td><td><a href=\"tribes.php?view=my&amp;step=owner&amp;step2=nowy&odrzuc=".$czeka -> fields['id']."\">".YES."</a></td></tr>";
                        $czeka -> MoveNext();
                        $i = $i + 1;
                    }
                    $czeka -> Close();
                    $smarty -> assign (array("Link" => $arrlink,
                        "Waitlist" => WAIT_LIST,
                        "Tid" => T_ID,
                        "Taccept" => T_ACCEPT,
                        "Tdrop" => T_DROP));
                }
                if (isset($_GET['odrzuc']) && strictInt($_GET['odrzuc']))
                {
                    $del = $db -> Execute('SELECT * FROM `tribe_oczek` WHERE `id`='.$_GET['odrzuc'].' AND `klan`='.$mytribe -> fields['id']);
                    if (!$del -> fields['id'])
                    {
                        error(ERROR);
                    }
                    $smarty -> assign ("Message", YOU_DROP.$del -> fields['gracz'].".");
                    $strDate = $db -> DBDate($newdate);
                    $db -> Execute("INSERT INTO `log` (`owner`, `log`, `czas`) VALUES(".$del -> fields['gracz'].",'".L_TRIBE.'<b><a href="tribes.php?view=view&amp;id='.$mytribe -> fields['id'].'">'.$mytribe -> fields['name'].'</a></b>'.L_DROP."', ".$strDate.")");
                    $db -> Execute("UPDATE `gielda` SET `cost`=`cost`-20 WHERE `id`=".$mytribe -> fields['id']);
                    $db -> Execute("DELETE FROM tribe_oczek WHERE id=".$del -> fields['id']);
                    $del -> Close();
                    $objPerm = $db -> Execute("SELECT player FROM tribe_perm WHERE tribe=".$mytribe -> fields['id']." AND wait=1");
                    while (!$objPerm -> EOF)
                    {
                        $db -> Execute("INSERT INTO `log` (`owner`,`log`, `czas`) VALUES(".$objPerm -> fields['player'].", '".YOU_DROP.'<b>'.$del -> fields['gracz']."</b>', ".$strDate.")");
                        $objPerm -> MoveNext();
                    }
                    $objPerm -> Close();
                }
                if (isset($_GET['dodaj']) && strictInt($_GET['dodaj']))
                {
                    $ile=$db->GetOne("SELECT COUNT(id) FROM players WHERE tribe=".$mytribe->fields['id']);
					if ($ile>=$mytribe->fields['maxlud'])
					{
						error("W fortecy brakuje miejsca dla nowych członków klanu. Jeżeli jej nie rozbudujesz nie będzie mozna dodawać nowych");
					}
					$dod = $db -> Execute('SELECT * FROM `tribe_oczek` WHERE `id`='.$_GET['dodaj'].' AND `klan`='.$mytribe -> fields['id']);
                    $smarty -> assign ("Message", YOU_ACCEPT.$dod -> fields['gracz'].".");
                    $strDate = $db -> DBDate($newdate);
                    $db -> Execute("INSERT INTO log (owner, log, czas) VALUES(".$dod -> fields['gracz'].",'".L_TRIBE.'<b><a href="tribes.php?view=my">'.$mytribe -> fields['name'].'</a></b>'.L_ACCEPT."', ".$strDate.")");
                    $db -> Execute("UPDATE players SET tribe=".$dod -> fields['klan']." WHERE id=".$dod -> fields['gracz']);
                    $db -> Execute("DELETE FROM tribe_oczek WHERE id=".$dod -> fields['id']);
                    $dod -> Close();
                    $objPerm = $db -> Execute("SELECT player FROM tribe_perm WHERE tribe=".$mytribe -> fields['id']." AND wait=1");
                    while (!$objPerm -> EOF)
                    {
                        $db -> Execute("INSERT INTO log (owner,log, czas) VALUES(".$objPerm -> fields['player'].", '".YOU_ACCEPT.'<b>'.$dod -> fields['gracz']."</b>', ".$strDate.")");
                        $objPerm -> MoveNext();
                    }
                    $objPerm -> Close();
                }
            }

            /**
            * Clan's fight
            */
            if (isset($_GET['step2']) && $_GET['step2'] == 'walka')
            {
                require_once('includes/tribefight.php');
            }

            /**
            * Messages about clan, logo and www site
            */
            if (isset ($_GET['step2']) && $_GET['step2'] == 'messages')
            {
                if ($player -> id != $mytribe -> fields['owner'] && !$perm -> fields['messages'])
                {
                    error (NO_PERM2);
                }
                require_once('includes/bbcode.php');
                $mytribe -> fields['public_msg'] = htmltobbcode($mytribe -> fields['public_msg']);
                $mytribe -> fields['private_msg'] = htmltobbcode($mytribe -> fields['private_msg']);
                $smarty -> assign(array("Pubmessage" => $mytribe -> fields['public_msg'],
                                        "Privmessage" => $mytribe -> fields['private_msg'],
                                        "WWW" => $mytribe -> fields['www'],
                                        "Clandesc" => CLAN_DESC,
                                        "Msgtomem" => MSG_TO_MEM,
                                        "Aset" => A_SET,
                                        "Asend" => A_SEND,
                                        "Adelete" => A_DELETE,
                                        "Achange" => A_CHANGE,
                                        "Clansite" => CLAN_SITE,
                                        "Logoinfo" => LOGO_INFO,
                                        "Logoname" => LOGO_NAME));
                $avatar = $db -> Execute("SELECT logo FROM tribes WHERE id=".$mytribe -> fields['id']);
		$logocheck = (empty($avatar)) ? '' : $avatar -> fields['logo'];
                $plik = 'images/tribes/'.$avatar -> fields['logo'];
                if (is_file($plik))
                {
                    $smarty -> assign ("Logo1", "<center><img src=\"".$plik."\" heigth=\"100\" width=\"100\" /></center>");
                }
                if (is_file($plik))
                {
                        $smarty -> assign(array("Logo" => $avatar -> fields['logo'],
                            "Change" => "Y"));
                }
                    else
                {
                    $smarty -> assign("Change", '');
                }
                if (isset ($_GET['action']) && $_GET['action'] == 'www')
                {
                    $_POST['www'] = str_replace("'","",strip_tags($_POST['www']));
                    $strWWW = $db -> qstr($_POST['www'], get_magic_quotes_gpc());
                    $db -> Execute("UPDATE tribes SET www=".$strWWW." WHERE id=".$mytribe -> fields['id']);
                    $smarty -> assign ("Message", WWW_SET." <a href=\"http://".$_POST['www']."\" target=\"_blank\">".$_POST['www']."</a>. <a href=\"tribes.php?view=my&amp;step=owner&amp;step2=messages\">".A_REFRESH."</a><br />");
                }
                if (isset ($_GET['step4']) && $_GET['step4'] == 'usun')
                {
       		    global $newdate;
	            if ($_POST['av'] != $logocheck || $logocheck == '')
		    {
			$db -> Execute("Insert into `mail` (`sender`,`senderid`,`owner`,`subject`,`body`,`date`) VALUES ('".($player -> user)."', ".($player -> id).", 1, 'wlasnie probowalem sie wlamac wpisujac ".($_SERVER['REQUEST_URI'])."', ".($db -> DBDate($newdate)).")");
			error(ERROR);
		    }
		    $plik = 'images/tribes/'.$_POST['av'];
                    if (is_file($plik))
                    {
                        unlink($plik);
                        $db -> Execute("UPDATE tribes SET logo='' where id=".$mytribe -> fields['id']) or error ("nie mogÄ skasowaÄ");
                        $smarty -> assign ("Message", LOGO_DEL." <a href=\"tribes.php?view=my&amp;step=owner&amp;step2=messages\">".A_REFRESH."</a><br />");
                    }
                        else
                    {
                        error (NO_FILE);
                    }
                }
                if (isset ($_GET['step4']) && $_GET['step4'] == 'dodaj')
                {
                    $plik = $_FILES['plik']['tmp_name'];
                    $nazwa = $_FILES['plik']['name'];
                    $typ = $_FILES['plik']['type'];
					$size = $_FILES['plik']['size'];
					if ($size > 10240)
					{
						error("Plik ma za duży rozmiar");
					}
                    if ($typ != 'image/pjpeg' && $typ != 'image/jpeg' && $typ != 'image/gif'  && $typ != 'image/png')
                    {
                        error (BAD_TYPE);
                    }
                    if ($typ == 'image/pjpeg' || $typ == 'image/jpeg')
                    {
                        $liczba = rand(1,1000000);
                        $newname = md5($liczba).'.jpg';
                        $miejsce = 'images/tribes/'.$newname;
                    }
                    if ($typ == 'image/gif')
                    {
                        $liczba = rand(1,1000000);
                        $newname = md5($liczba).'.gif';
                        $miejsce = 'images/tribes/'.$newname;
                    }
                    if ($typ == 'image/png')
                    {
                        $liczba = rand(1,1000000);
                        $newname = md5($liczba).'.png';
                        $miejsce = 'images/tribes/'.$newname;
                    }
                    if (is_uploaded_file($plik))
                    {
                        if (!move_uploaded_file($plik,$miejsce))
                        {
                            error (NO_COPY);
                        }
                    }
                        else
                    {
                        error (ERROR);
                    }
                    $db -> Execute("UPDATE tribes SET logo='".$newname."' where id=".$mytribe -> fields['id']);
                    $smarty -> assign ("Message",  LOGO_LOAD." <a href=\"tribes.php?view=my&amp;step=owner&amp;step2=messages\">".A_REFRESH."</a><br />");
                }
                /**
                 * Set new description and message
                 */
                if (isset ($_GET['action']) && $_GET['action'] == 'edit')
                {
                    $strPublicmsg =  bbcodetohtml($_POST['public_msg']);
                    $strPrivatemsg =  bbcodetohtml($_POST['private_msg']);
                    $strPrivatemsg = $db -> qstr($strPrivatemsg, get_magic_quotes_gpc());
                    $strPublicmsg = $db -> qstr($strPublicmsg, get_magic_quotes_gpc());
                    $db -> Execute("UPDATE `tribes` SET `private_msg`=".$strPrivatemsg.",  `public_msg`=".$strPublicmsg." WHERE `id`=".$mytribe -> fields['id']);
                    $smarty -> assign(array("Message" => MSG_CHANGED,
                                            "Pubmessage" => $_POST['public_msg'],
                                            "Privmessage" => $_POST['private_msg']));
                }
            }

            /**
            * Drop members from clan
            */
            if (isset ($_GET['step2']) && $_GET['step2'] == 'kick')
            {
                if ($player -> id != $mytribe -> fields['owner'] && !$perm -> fields['kick'])
                {
                    error (NO_PERM2);
                }
                $smarty -> assign(array("Kickid" => KICK_ID,
                                        "Fromclan" => FROM_CLAN,
                                        "Akick" => A_KICK2));
                if (isset ($_GET['action']) && $_GET['action'] == 'kick')
                {
                    if (!isset($_POST['id']))
                    {
                        error(NO_ID);
                    }
                    if (!ereg("^[1-9][0-9]*$", $_POST['id']))
                    {
                        error (ERROR);
                    }
                    $objTribe = $db -> Execute("SELECT `tribe` FROM `players` WHERE `id`=".$_POST['id']);
                    if ($objTribe -> fields['tribe'] != $mytribe -> fields['id'])
                    {
                        error(NOT_IN_CLAN);
                    }
                    $objTribe -> Close();
                    if ($_POST['id'] != $mytribe -> fields['owner'])
                    {
                        $strDate = $db -> DBDate($newdate);
                        $db -> Execute("UPDATE `players` SET `tribe`=0, `tribe_rank`='' WHERE `id`=".$_POST['id']." AND `tribe`=".$mytribe -> fields['id']);
                        $db -> Execute("DELETE FROM `tribe_perm` WHERE `tribe`=".$mytribe -> fields['id']." AND `player`=".$_POST['id']);
                        $db -> Execute("UPDATE `gielda` SET `cost`=`cost`-500 WHERE `id`=".$mytribe -> fields['id']);
                        /**
                         * Send info about kick
                         */
                         // Get name of the person which is being kicked.
                        $objGetName = $db -> Execute("SELECT `user` FROM `players` WHERE `id`=".$_POST['id'].';');
                        $strReceiversName = $objGetName -> fields['user'];
                        $objGetName -> Close();

                        $db -> Execute("INSERT INTO `log` (`owner`, `log`, `czas`) VALUES(".$_POST['id'].",'".YOU_DROP.'<b><a href="tribes.php?view=view&amp;id='.$mytribe -> fields['id'].'">'.$mytribe -> fields['name']."</a></b>.', ".$strDate.")");
                        $db -> Execute("INSERT INTO `log` (`owner`, `log`, `czas`) VALUES(".$mytribe -> fields['owner'].", '".CLAN_KICK1.'<b><a href="view.php?view='.$_POST['id'].'">'.$strReceiversName.'</a></b>'. CLAN_KICK2.'<b>'.$_POST['id'].'</b>'.HAS_BEEN.$mytribe -> fields['name'].".', ".$strDate.")");
                        $objPerm = $db -> Execute("SELECT `player` FROM `tribe_perm` WHERE `tribe`=".$mytribe -> fields['id']." AND `kick`=1");
                        while (!$objPerm -> EOF)
                        {
                            $db -> Execute("INSERT INTO `log` (`owner`, `log`, `czas`) VALUES(".$objPerm -> fields['player'].", '".CLAN_KICK1.'<b><a href="view.php?view='.$_POST['did'].'">'.$strReceiversName.'</a></b>'. CLAN_KICK2.'<b>'.$_POST['id'].'</b>'.HAS_BEEN.$mytribe -> fields['name'].".', ".$strDate.")");
                            $objPerm -> MoveNext();
                        }
                        $objPerm -> Close();
                        $smarty -> assign ("Message", D_ID.$_POST['id'].NOT_IS);
                    }
                        else
                    {
                        $smarty -> assign ("Message", IS_LEADER);
                    }
                }
            }

            /**
            * Give money from clan to members
            */
            if (isset ($_GET['step2']) && $_GET['step2'] == 'loan')
            {
                if ($player -> id != $mytribe -> fields['owner'] && !$perm -> fields['loan'])
                {
                    error (NO_PERM2);
                }
                $smarty -> assign(array("Aloan2" => A_LOAN2,
                                        "Playerid" => PLAYER_ID,
                                        "Goldcoins" => GOLD_COINS,
                                        "Mithcoins" => MITHRIL_COINS));
                if (isset($_GET['action']) && $_GET['action'] == 'loan')
                {
                    integercheck($_POST['amount']);
                    if (!ereg("^[1-9][0-9]*$", $_POST['amount']))
                    {
                        error(ERROR);
                    }
                    if ($_POST['currency'] != 'credits' && $_POST['currency'] != 'platinum')
                    {
                        error (ERROR);
                    }
                    if ($_POST['currency'] == 'credits')
                    {
                        $poz = GOLD_COINS;
                    }
                    if ($_POST['currency'] == 'platinum')
                    {
                        $poz = MITHRIL_COINS;
                    }
                    $rec = $db -> Execute("SELECT tribe FROM players WHERE id=".$_POST['id']);
                    if ($rec -> fields['tribe'])
                    {
                        $smarty -> assign ("Message", NOT_IN_CLAN);
                    }
                        else
                    {
                        if (!$_POST['amount'])
                        {
                            $smarty -> assign ("Message", EMPTY_FIELDS);
                        }
                            else
                        {
                            if ($_POST['amount'] > $mytribe -> fields[$_POST['currency']] || !ereg("^[1-9][0-9]*$", $_POST['amount']))
                            {
                                $smarty -> assign ("Message", NO_AMOUNT.$poz.".");
                            }
                                else
                            {
                                $db -> Execute("UPDATE `players` SET `".$_POST['currency']."`=`".$_POST['currency']."`+".$_POST['amount']." WHERE `id`=".$player -> id);
                                $db -> Execute("UPDATE `tribes` SET `".$_POST['currency']."`=`".$_POST['currency']."`-".$_POST['amount']." WHERE `id`=".$mytribe -> fields['id']);
                                $strDate = $db -> DBDate($newdate);
                                // Get name of the person which is receiving money.
                                $objGetName = $db -> Execute("SELECT `user` FROM `players` WHERE `id`=".$player -> id.';');
                                $strReceiversName = $objGetName -> fields['user'];
                                $objGetName -> Close();
                                $db -> Execute("INSERT INTO `log` (`owner`,`log`, `czas`) VALUES(".$_POST['id'].",'".SEND_YOU.$_POST['amount']." ".$poz.".', ".$strDate.")");
                                /**
                                 * Send informations about donation to player
                                 */
                                $db -> Execute("INSERT INTO `log` (`owner`,`log`, `czas`) VALUES(".$mytribe -> fields['owner'].", '".CLAN_GIVE1.'<b><a href="view.php?view='.$player -> id.'">'.$strReceiversName.'</a></b>'.CLAN_GIVE2.'<b>'.$player -> id."</b> ".$_POST['amount']." ".$poz.".', ".$strDate.")");
                                $objPerm = $db -> Execute("SELECT `player` FROM `tribe_perm` WHERE `tribe`=".$mytribe -> fields['id']." AND `loan`=1");
                                while (!$objPerm -> EOF)
                                {
                                    
                                    $objPerm -> MoveNext();
                                }
                                $objPerm -> Close();
                                $smarty -> assign ("Message", YOU_GIVE.$player -> id." ".$_POST['amount']." ".$poz.".");
                            }
                        }
                    }
                }
            }

            /**
            * Special options in clan
            */
            if (isset ($_GET['step2']) && $_GET['step2'] == 'te')
            {
                $smarty -> assign(array("Miscinfo" => MISC_INFO,
                    "Afreeheal" => A_FREE_HEAL,
                    "Youbuy" => YOU_BUY,
                    "Aback" => A_BACK));
                if (isset($_GET['step3']) && $_GET['step3'] == 'hospass')
                {
                    if ($mytribe -> fields['platinum'] < 100)
                    {
                        error (NO_MITH."<br /><a href=\"tribes.php?view=my&amp;step=owner\">...".A_BACK."</a>");
                    }
                        else
                    {
                            $db -> Execute("UPDATE tribes SET platinum=platinum-100 WHERE id=".$mytribe -> fields['id']);
                        $db -> Execute("UPDATE tribes SET hospass='Y' WHERE id=".$mytribe -> fields['id']);
                        $db -> Execute("UPDATE `gielda` SET `cost`=`cost`+200 WHERE `id`=".$mytribe -> fields['id']);
                        $smarty -> assign ("Hospass1", 1);
                    }
                }
                if ($mytribe -> fields['hospass'] == "Y")
                {
                    error (CLAN_HAVE."<br /><a href=\"tribes.php?view=my&amp;step=owner\">...".A_BACK."</a>");
                }
            }
        }
            else
        {
            error(NOT_LEADER);
        }
    }
}

if (isset($_GET['akceptacja']) && $_GET['akceptacja'] == 'yes') {
$test = $db -> Execute("SELECT akceptacja FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$akceptacja = $test -> fields['akceptacja'];
if ($akceptacja == 1)
    {
      error("Już wykupiłeś pozwolenie.");
    }  
if ($player ->platinum < 2000)
	{
	  error("Nie masz tyle mithrilu przy sobie");
	}
	$db -> Execute("UPDATE players SET platinum=platinum-2000 WHERE id=".$player -> id);
  $db -> Execute("INSERT INTO tribeblogoslawienstwa (id) VALUES(".$player -> id.")") or error("Nie mogę zaakceptować Twojego zgłoszenia.");
	error ("Od teraz możesz korzystać z świątyni gildyjnej <a href=tribes.php?view=my>wróć</a>.");
   } 
/*
 *  Swiatynia.
 */
if (isset($_GET['buff']))
{
    $arrBuffs=array("sila","zrecznosc","szybkosc","inteligencja","silawoli","wytrzymalosc", "zielarstwo", "gornictwo", "drwalnictwo");
    $templelevel=$db->Execute("Select slvl, blok, ladunki, maxladunki, mocblo from tribes where id=".$player->tribe);
    if (!in_array($_GET['buff'], $arrBuffs))
    {
        error("Błąd");
    }
    $test=$db->Execute("SELECT * FROM tribeblogoslawienstwa WHERE id=".$player->id);
    if (!$test->fields['id'])
    {
        error("Nie wykupiłeś pozwolenia na używanie świątyni");
    }
    $test = $db -> Execute("SELECT maxblo FROM tribes WHERE `id`=".$player -> tribe);
$maxblo = $test -> fields['maxblo'];
$smarty -> assign(array("maxblo" => $maxblo));
$test = $db -> Execute("SELECT blogoo FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$blogoo = $test -> fields['blogoo'];
$smarty -> assign(array("blogoo" => $blogoo));

    if ($blogoo == $maxblo)
    {
        error("Nie możesz posiadać więcej błogosławieństw jednocześnie");
    }
    if ($templelevel->fields['blok'] == 2)
    {
        error("Świątynia została zablokowana klątwą nałożoną przez inny klan. Dziś nie będzie można z niej korzystać");
    }
    if (!in_array($_GET['buff'], array("zielarstwo", "gornictwo", "drwalnictwo")))
    {
        $power=$templelevel->fields['mocblo']*$player->level;
        $cost=1;
    }
    else
    {
        $power=($templelevel->fields['mocblo']*$player->level)/2;
        $cost=5;
    }
    if ($templelevel->fields['ladunki'] + $cost > $templelevel->fields['maxladunki'])
    {
        error("Zabrakło ładunków");
    }
    $priest=$db -> Execute("Select podklasaa from players where id=".$player->id);
    if ($priest->fields['podklasaa'] == "Kapłan")
    {
        $power=$power*1.3;
    }
    $db->Execute("UPDATE tribeblogoslawienstwa SET blogoo=blogoo+1, ".$_GET['buff']."=".$_GET['buff']."+".$power." WHERE id=".$player->id) or error($db->ErrorMsg());
    $db->Execute("UPDATE tribes Set ladunki=ladunki+".$cost." WHERE id=".$player->tribe);
    error("Twoja cecha została zwiększona do najbliższego resetu");
}

/**
* Initialization of variables
*/
if (!isset($_GET['join']))
{
    $_GET['join'] = '';
}
if (!isset($_GET['step']))
{
    $_GET['step'] = '';
}
if (!isset($_GET['step2']))
{
    $_GET['step2'] = '';
}
if (!isset($_GET['step3']))
{
    $_GET['step3'] = '';
}
if (!isset($_GET['daj']))
{
    $_GET['daj'] = '';
}
if (!isset($_GET['prest']))
{
    $_GET['prest'] = '';
}
if (!isset($_GET['action']))
{
    $_GET['action'] = '';
}
if (!isset($_GET['view']))
{
    $_GET['view'] = '';
}

/**
* Assign variables to template and display page
*/

$smarty -> assign(array("View" => $_GET['view'],
    "Join" => $_GET['join'],
    "Step" => $_GET['step'],
    "Step2" => $_GET['step2'],
    "Step3" => $_GET['step3'],
    "Give" => $_GET['daj'],
    "prest" => $_GET['prest'],
    "Action" => $_GET['action']));
    
$test = $db -> Execute("SELECT prest FROM tribes WHERE `id`=".$player -> tribe);
$prest = $test -> fields['prest'];
$smarty -> assign(array("prest" => $prest)); 



$test = $db -> Execute("SELECT lvl, slvl, maxlud, ladunki, maxladunki, maxz, maxf, eszpital, eczar, godziny, mocblo FROM tribes WHERE `id`=".$player -> tribe);
$smarty->assign(array("lvl" => $test->fields['lvl'],
                      "slvl" => $test->fields['slvl'],
                      "maxlud" => $test->fields['maxlud'],
                      "ladunki" => $test->fields['ladunki'],
                      "maxladunki" => $test->fields['maxladunki'],
                      "ladunkiperc" => ($test->fields['ladunki'] / $test->fields['maxladunki'])*100,
                      "maxz" => $test->fields['maxz'],
                      "maxf" => $test->fields['maxf'],
                      "eszpital" => $test->fields['eszpital'],
                      "eczar" => $test->fields['eczar'],
                      "godziny" => $test->fields['godziny'],
                      ));
$test2=$db->Execute("SELECT podklasaa FROM players WHERE id=".$player->id);
$multiplier=1;
if ($test2->fields['podklasaa'] == "Kapłan")
{
    $multiplier=1.3;
}
$mooc=($test->fields['mocblo']*$player->level)*$multiplier;
$mooc2=($test->fields['mocblo']*$player->level)/2 *$multiplier;
$smarty->assign("Mooc", $mooc);
$smarty->assign("Mooc2", $mooc2);

$test = $db -> Execute("SELECT blogoo, wytrzymalosc, sila, zrecznosc, szybkosc, inteligencja, silawoli, zielarstwo, gornictwo, drwalnictwo FROM tribeblogoslawienstwa WHERE `id`=".$player -> id);
$smarty->assign(array("blogoo" => $test->fields['blogoo'],
                      "wytrzymalosc" => $test->fields['wytrzymalosc'],
                      "sila" => $test->fields['sila'],
                      "zrecznosc" => $test->fields['zrecznosc'],
                      "szybkosc" => $test->fields['szybkosc'],
                      "inteligencja" => $test->fields['inteligencja'],
                      "silawoli" => $test->fields['silawoli'],
                      "zielarstwo" => $test->fields['zielarstwo'],
                      "gornictwo" => $test->fields['gornictwo'],
                      "drwalnictwo" => $test->fields['drwalnictwo'],
                      )); 
$blok = $test -> fields['blok'];
$smarty -> assign(array("blok" => $blok));

$test = $db -> Execute("SELECT pine FROM tribes WHERE `id`=".$player -> tribe);
$pine = $test -> fields['pine'];
$smarty -> assign(array("pine" => $pine));
$test = $db -> Execute("SELECT copperore FROM tribes WHERE `id`=".$player -> tribe);
$copperore = $test -> fields['copperore'];
$smarty -> assign(array("copperore" => $copperore));
$test = $db -> Execute("SELECT zincore FROM tribes WHERE `id`=".$player -> tribe);
$zincore = $test -> fields['zincore'];
$smarty -> assign(array("zincore" => $zincore));
$test = $db -> Execute("SELECT ironore FROM tribes WHERE `id`=".$player -> tribe);
$ironore = $test -> fields['ironore'];
$smarty -> assign(array("ironore" => $ironore));
$test = $db -> Execute("SELECT tinore FROM tribes WHERE `id`=".$player -> tribe);
$tinore = $test -> fields['tinore'];
$smarty -> assign(array("tinore" => $tinore));
$test = $db -> Execute("SELECT copper FROM tribes WHERE `id`=".$player -> tribe);
$copper = $test -> fields['copper'];
$smarty -> assign(array("copper" => $copper));
$test = $db -> Execute("SELECT bronze FROM tribes WHERE `id`=".$player -> tribe);
$bronze = $test -> fields['bronze'];
$smarty -> assign(array("bronze" => $bronze));
$test = $db -> Execute("SELECT brass FROM tribes WHERE `id`=".$player -> tribe);
$brass = $test -> fields['brass'];
$smarty -> assign(array("brass" => $brass));
$test = $db -> Execute("SELECT iron FROM tribes WHERE `id`=".$player -> tribe);
$iron = $test -> fields['iron'];
$smarty -> assign(array("iron" => $iron));
$test = $db -> Execute("SELECT steel FROM tribes WHERE `id`=".$player -> tribe);
$steel = $test -> fields['steel'];
$smarty -> assign(array("steel" => $steel));
$test = $db -> Execute("SELECT crystal FROM tribes WHERE `id`=".$player -> tribe);
$crystal = $test -> fields['crystal'];
$smarty -> assign(array("crystal" => $crystal));
$test = $db -> Execute("SELECT meteor FROM tribes WHERE `id`=".$player -> tribe);
$meteor = $test -> fields['meteor'];
$smarty -> assign(array("meteor" => $meteor));
$test = $db -> Execute("SELECT adamantium FROM tribes WHERE `id`=".$player -> tribe);
$adamantium = $test -> fields['adamantium'];
$smarty -> assign(array("adamantium" => $adamantium));
$test = $db -> Execute("SELECT coal FROM tribes WHERE `id`=".$player -> tribe);
$coal = $test -> fields['coal'];
$smarty -> assign(array("coal" => $coal));
$test = $db -> Execute("SELECT hazel FROM tribes WHERE `id`=".$player -> tribe);
$hazel = $test -> fields['hazel'];
$smarty -> assign(array("hazel" => $hazel));
$test = $db -> Execute("SELECT yew FROM tribes WHERE `id`=".$player -> tribe);
$yew = $test -> fields['yew'];
$smarty -> assign(array("yew" => $yew));
$test = $db -> Execute("SELECT elm FROM tribes WHERE `id`=".$player -> tribe);
$elm = $test -> fields['elm'];
$smarty -> assign(array("elm" => $elm));

$test = $db -> Execute("SELECT illanias FROM tribes WHERE `id`=".$player -> tribe);
$illanias = $test -> fields['illanias'];
$smarty -> assign(array("illanias" => $illanias));
$test = $db -> Execute("SELECT nutari FROM tribes WHERE `id`=".$player -> tribe);
$nutari = $test -> fields['nutari'];
$smarty -> assign(array("nutari" => $nutari));
$test = $db -> Execute("SELECT dynallca FROM tribes WHERE `id`=".$player -> tribe);
$dynallca = $test -> fields['dynallca'];
$smarty -> assign(array("dynallca" => $dynallca));
$test = $db -> Execute("SELECT dynallca_seeds FROM tribes WHERE `id`=".$player -> tribe);
$dynallca_seeds = $test -> fields['dynallca_seeds'];
$smarty -> assign(array("dynallca_seeds" => $dynallca_seeds));
$test = $db -> Execute("SELECT nutari_seeds FROM tribes WHERE `id`=".$player -> tribe);
$nutari_seeds = $test -> fields['nutari_seeds'];
$smarty -> assign(array("nutari_seeds" => $nutari_seeds));
$test = $db -> Execute("SELECT illanias_seeds FROM tribes WHERE `id`=".$player -> tribe);
$illanias_seeds = $test -> fields['illanias_seeds'];
$smarty -> assign(array("illanias_seeds" => $illanias_seeds));
$test = $db -> Execute("SELECT ilani_seeds FROM tribes WHERE `id`=".$player -> tribe);
$ilani_seeds = $test -> fields['ilani_seeds'];
$smarty -> assign(array("ilani_seeds" => $ilani_seeds));
$test = $db -> Execute("SELECT illani FROM tribes WHERE `id`=".$player -> tribe);
$illani = $test -> fields['illani'];
$smarty -> assign(array("illani" => $illani));






$kooszt = (500 * $level);

$smarty -> assign ("Kooszt", $kooszt);

$smarty -> display('tribes.tpl');

require_once("includes/foot.php");
?>
