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

$title = 'Panel Strażnika';
require_once('includes/head.php');

/**
* Get the localization for game
*/
require_once('languages/'.$player -> lang.'/admin.php');

if ($player -> rank != 'Strażnik Miejski' && $player -> rank != 'Admin' && $player -> rank != 'Sędzia' && $player -> rank != 'Królowa Potępionych' && $player -> rank != 'Mistrz Gry' && $player -> id != 482  && $player -> rank != 'Staff')  
{
    error ('Nie jesteś Strażnikiem!');
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



if (isset($_GET['view']) && $_GET['view'] == 'logs')
{
    if (!isset($_GET['limit']))
    {
        $_GET['limit'] = 0;
    }
    $objAmount = $db -> Execute("SELECT count(*) FROM `logs`");
    $intAmount = $objAmount -> fields['count(*)'];
    $objAmount -> Close();
    if (!$intAmount || $_GET['limit'] > $intAmount)
    {
        error(NO_LOGS);
    }
    $objLogs = $db -> SelectLimit("SELECT `owner`, `log` FROM `logs`", 50, $_GET['limit']);
    $arrOwner = array();
    $arrLog = array();
    $i = 0;
    while (!$objLogs -> EOF)
    {
        $arrOwner[$i] = $objLogs -> fields['owner'];
        $arrLog[$i] = $objLogs -> fields['log'];
        $i++;
        $objLogs -> MoveNext();
    }
    $objLogs -> Close();
    if ($_GET['limit'] >= 50)
    {
        $intLimit = $_GET['limit'] - 50;
        $strPrevious = "<a href=\"straznik.php?view=logs&amp;limit=".$intLimit."\">".A_PREVIOUS."</a>";
    }
        else
    {
        $strPrevious = '';
    }
    $intLimit = $_GET['limit'] + 50;
    if ($intLimit < $intAmount && $intAmount > 50)
    {
        $strNext = "<a href=\"straznik.php?view=logs&amp;limit=".$intLimit."\">".A_NEXT."</a>";
    }
        else
    {
        $strNext = '';
    }
    $smarty -> assign(array("Logsinfo" => LOGS_INFO,
                            "Lowner" => L_OWNER,
                            "Ltext" => L_TEXT,
                            "Lclear" => L_CLEAR,
                            "Aowner" => $arrOwner,
                            "Alog" => $arrLog,
                            "Aprevious" => $strPrevious,
                            "Anext" => $strNext));
    /**
     * Clear logs
     */
    if (isset($_GET['step']) && $_GET['step'] == 'clear')
    {
        $db -> Execute("TRUNCATE TABLE `logs`") or die($db -> ErrorMsg());
        $smarty -> assign("Message", LOGS_CLEARED);
    }
}

/**
 * Edit meta informations
 */
if (isset($_GET['view']) && $_GET['view'] == 'meta')
{
    if ($player -> id != 1)
    {
        error(ONLY_MAIN);
    }
    $smarty -> assign(array("Metainfo" => META_INFO,
                            "Metakey" => META_KEY,
                            "Metadesc" => META_DESC,
                            "Aadd" => A_ADD));
    /**
     * Change meta info
     */
    if (isset($_GET['step']) && $_GET['step'] == 'modify')
    {
        $db -> Execute("UPDATE `settings` SET `value`='".$_POST['metakey']."' WHERE `setting`='metakeywords'");
        $db -> Execute("UPDATE `settings` SET `value`='".$_POST['metadesc']."' WHERE `setting`='metadescr'");
        $smarty -> assign("Message", META_UPGRADE);
    }
}
/**
 * Add player to list of donators
 */
if (isset($_GET['view']) && $_GET['view'] == 'donator')
{
    if (!isset($_GET['step']))
    {
        $smarty -> assign(array("Donatorinfo" => DONATOR_INFO,
                                "Pname" => P_NAME,
                                "Aadd" => A_ADD));
    }
    if (isset($_GET['step']) && $_GET['step'] == 'add')
    {
        if (empty($_POST['plname']))
        {
            error(ERROR);
        }
        $strName = $db -> qstr($_POST['plname'], get_magic_quotes_gpc());
        $db -> Execute("INSERT INTO donators (name) VALUES('".$_POST['plname']."')");
        $smarty -> assign("Message", YOU_ADD.$_POST['plname'].TO_DONATORS);
    }
}

/**
* Release player from jail
*/
if (isset($_GET['view']) && $_GET['view'] == 'jailbreak')
{
    if (!isset($_GET['step']))
    {
        $smarty -> assign(array("Afree" => A_FREE,
            "Jailid" => JAIL_ID));
    }
    if (isset($_GET['step']) && $_GET['step'] == 'next')
    {
        if (!ereg("^[1-9][0-9]*$", $_POST['jid']))
        {
            error(ERROR);
        }
        $objPrisoner = $db -> Execute("SELECT prisoner FROM jail WHERE prisoner=".$_POST['jid']);
        if (!$objPrisoner -> fields['prisoner'])
        {
            error(NO_PLAYER2);
        }
        $objPrisoner -> Close();
        $db -> Execute("DELETE FROM jail WHERE prisoner=".$_POST['jid']);
        $db -> Execute("UPDATE players SET miejsce='Altara' WHERE id=".$_POST['jid']);
        $smarty -> assign("Message", T_MESSAGE.$_POST['jid']);
    }
}


/**
* Add new poll
*/
if (isset($_GET['view']) && $_GET['view'] == 'poll')
{
    if (!isset($_GET['step']))
    {
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
        $smarty -> assign(array("Tamount" => T_AMOUNT,
            "Anext" => A_NEXT,
            "Tlang" => T_LANG,
            "Llang" => $arrLanguage,
            "Tdays" => T_DAYS));
    }
    $smarty -> assign("Tquestion", T_QUESTION);
    /**
    * Add answers to poll
    */
    if (isset($_GET['step']) && $_GET['step'] == 'second')
    {
        if (empty($_POST['question']) || empty($_POST['amount']) || empty($_POST['days']))
        {
            error(EMPTY_FIELDS);
        }
        if (!ereg("^[1-9][0-9]*$", $_POST['amount']) || !ereg("^[1-9][0-9]*$", $_POST['days']))
        {
            error(ERROR);
        }
        $arrAnswers = array();
        for ($i = 0; $i < $_POST['amount']; $i++)
        {
            $arrAnswers[$i] = "answer".$i;
        }
        $objPollid = $db -> Execute("SELECT id FROM polls ORDER BY id DESC");
        if (!$objPollid -> fields['id'])
        {
            $intId = 1;
        }
            else
        {
            $intId = $objPollid -> fields['id'] + 1;
        }
        /**
        * Update amount of players
        */
        $objQuery = $db -> Execute("SELECT id FROM players");
        $intMembers = $objQuery -> RecordCount();
        $objQuery -> Close();
        $db -> Execute("UPDATE polls SET members=".$intMembers." WHERE id=".$objPollid -> fields['id']." AND votes=-1");
        $objPollid -> Close();
        $strQuestion = $db -> qstr($_POST['question'], get_magic_quotes_gpc());
        $db -> Execute("INSERT INTO polls (id, poll, votes, lang, days) VALUES(".$intId.", ".$strQuestion.", -1, '".$_POST['lang']."', ".$_POST['days'].")") or $db -> ErrorMsg();
        $smarty -> assign(array("Answers" => $arrAnswers,
            "Question" => $_POST['question'],
            "Amount" => $_POST['amount'],
            "Aadd" => A_ADD,
            "Tanswer" => T_ANSWER,
            "Llang" => $_POST['lang'],
            "Pollid" => $intId,
            "Adays" => $_POST['days']));
    }
    /**
    * Add poll
    */
    if (isset($_GET['step']) && $_GET['step'] == 'add')
    {
        for($i = 0; $i < $_POST['amount']; $i++)
        {
            $strName = "answer".$i;
            if (empty($_POST[$strName]))
            {
                error(EMPTY_FIELDS);
            }
            $strAnswer = $db -> qstr($_POST[$strName], get_magic_quotes_gpc());
            $db -> Execute("INSERT INTO polls (id, poll, lang) VALUES(".$_POST['pid'].", ".$strAnswer.", '".$_POST['lang']."')");
        }
        $db -> Execute("UPDATE players SET poll='N'");
        $db -> Execute("UPDATE settings SET value='Y' WHERE setting='poll'");
        $smarty -> assign("Message", POLL_ADDED);
    }
}

/**
* Add new word to censorship
*/
if (isset($_GET['view']) && $_GET['view'] == 'censorship')
{
    /**
    * Bad words list
    */
    $objWords = $db -> Execute("SELECT * FROM bad_words");
    $arrWords = array();
    $i = 0;
    while (!$objWords -> EOF)
    {
        $arrWords[$i] = $objWords -> fields['bword'];
        $i = $i + 1;
        $objWords -> MoveNext();
    }
    $objWords -> Close();
    $smarty -> assign(array("Amake" => A_MAKE,
        "Words" => $arrWords,
        "Aadd" => A_ADD,
        "Adelete" => A_DELETE,
        "Tword" => T_WORD,
        "Wordslist" => WORDS_LIST));
    if (isset($_GET['step']) && $_GET['step'] == 'modify')
    {
        $strWord = $db -> qstr($_POST['bword'], get_magic_quotes_gpc());
        /**
        * Add word
        */
        if ($_POST['action'] == 'add')
        {
            $db -> Execute("INSERT INTO bad_words (bword) VALUES(".$strWord.")");
            $smarty -> assign("Message", YOU_ADD." <b>".$_POST['bword']."</b>. (<a href=\"straznik.php?view=censorship\">".REFRESH."</a>)");
        }
        /**
        * Delete word
        */
        if ($_POST['action'] == 'delete')
        {
            $db -> Execute("DELETE FROM bad_words WHERE bword=".$strWord);
            $smarty -> assign("Message", YOU_DELETE." <b>".$_POST['bword']."</b>. (<a href=\"straznik.php?view=censorship\">".REFRESH."</a>)");
        }
    }
}
/**
* Ban and unban players by IP, emali, nick or ID
*/
if (isset($_GET['view']) && $_GET['view'] == 'ban')
{
    $smarty -> assign(array("Banlist" => BAN_LIST,
        "Baninfo" => BAN_INFO,
        "Banvalue" => BAN_VALUE,
        "Banip" => BAN_IP,
        "Banemail" => BAN_EMAIL,
        "Bannick" => BAN_NICK,
        "Banid" => BAN_ID,
        "Abanpl" => A_BAN_PL,
        "Aunban" => A_UNBAN,
        "Anext" => A_NEXT,
        "Bantype" => BAN_TYPE,
        "Banval" => BAN_VAL,
        "Banned" => BANNED));
    /**
    * Banlist
    */
    $arrtype = array();
    $arramount = array();
    $i = 0;
    $ban = $db -> Execute("SELECT type, amount FROM ban");
    while (!$ban -> EOF)
    {
        $arrtype[$i] = $ban -> fields['type'];
        $arramount[$i] = $ban -> fields['amount'];
        $i = $i + 1;
        $ban -> MoveNext();
    }
    $ban -> Close();
    $smarty -> assign(array("Type" => $arrtype,
        "Amount" => $arramount));
    if (isset($_GET['step']) && $_GET['step'] == 'modify')
    {
        $strAmount = $db -> qstr($_POST['amount'], get_magic_quotes_gpc());
        /**
        * Ban player
        */
        if ($_POST['action'] == 'ban')
        {
            $db -> Execute("INSERT INTO ban (type, amount) VALUES('".$_POST['type']."', ".$strAmount.")");
            $smarty -> assign("Message", YOU_BAN." <b>".$_POST['type']."</b> ".$_POST['amount'].". (<a href=\"straznik.php?view=ban\">".REFRESH."</a>)");
        }
        /**
        * Unban player
        */
        if ($_POST['action'] == 'unban')
        {
            $db -> Execute("DELETE FROM ban WHERE type='".$_POST['type']."' AND amount=".$strAmount);
            $smarty -> assign("Message", YOU_UNBAN." <b>".$_POST['type']."</b> ".$_POST['amount'].". (<a href=\"straznik.php?view=ban\">".REFRESH."</a>)");
        }
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

/**
* Add new spells
*/
if (isset ($_GET['view']) && $_GET['view'] == 'czary')
{
    $smarty -> assign(array("Spellname" => SPELL_NAME,
       "Swith" => S_WITH,
       "Sbattle" => S_BATTLE,
       "Sdefense" => S_DEFENSE,
       "Scost" => S_COST,
       "Spower" => S_POWER,
       "Sminlev" => S_MIN_LEV,
       "Hasas" => HAS_A_S,
       "Aadd" => A_ADD));
    if (isset ($_GET['step']) && $_GET['step'] == 'add')
    {
        if (empty($_POST['name']) || empty($_POST['power']) || empty($_POST['cost']) || empty($_POST['minlev']))
        {
            error (EMPTY_FIELDS);
        }
        $strName = $db -> qstr($_POST['name'], get_magic_quotes_gpc());
        $db -> Execute("INSERT INTO czary (nazwa, cena, poziom, typ, obr) VALUES(".$strName.", ".$_POST['cost'].", ".$_POST['minlev'].", '".$_POST['type']."', ".$_POST['power'].")");
        error (YOU_ADD_SPELL." ".$_POST['name']." ".HAS_A_S." ".$_POST['type']." ".POWER_S." ".$_POST['power']." ".COST." ".$_POST['cost']." ".MIN_LEV_S." ".$_POST['minlev']);
    }
}

/**
* Close/open game
*/
if (isset ($_GET['view']) && $_GET['view'] == 'close')
{
    $smarty -> assign(array("Gopen" => G_OPEN,
        "Gclose" => G_CLOSE,
        "Ifclose" => IF_CLOSE,
        "Amake" => A_MAKE));
    if (isset ($_GET['step']) && $_GET['step'] == 'close')
    {
        if ($_POST['close'] == 'close')
        {
            $strReason = $db -> qstr($_POST['reason'], get_magic_quotes_gpc());
            $db -> Execute("UPDATE settings SET value='N' WHERE setting='open'");
            $db -> Execute("UPDATE settings SET value=".$strReason." WHERE setting='close_reason'");
            error (YOU_CLOSE);
        }
        if ($_POST['close'] == 'open')
        {
            $db -> Execute("UPDATE settings SET value='Y' WHERE setting='open'");
            $db -> Execute("UPDATE settings SET value='' WHERE setting='close_reason'");
            error (YOU_OPEN);
        }
    }
}

/**
* Initialization of variables
*/
if (!isset($_GET['view']))
{
    $_GET['view'] = '';
    $arrTitles = array(ACCEPT, BAN, MODERATOR, PLAYERS, GAME, ADMINISTRATION);
    $arrOptions = array(array('addupdate.php', 'straznik.php?view=addtext', 'addnews.php', 'straznik.php?view=poll'),
                        array('logs', 'ban', 'del', 'delplayers'),
                        array('czat', 'banmail', 'clearf', 'forums', 'innarchive', 'clearc', 'censorship'),
                        array('addreps','donate', 'takeaway', 'jail', 'jailbreak', 'playerquest', 'changenick', 'add', 'donator', 'poczta', 'mail'),
                        array('equipment', 'monster', 'monster2', 'kowal', 'czary', 'mill'),
                        array('straznik.php?view=censorship', 'bugtrack.php', 'straznik.php?view=bugreport', 'straznik.php?view=changelog', 'straznik.php?view=register', 'straznik.php?view=close'));
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
$smarty -> display('straznik.tpl');

require_once('includes/foot.php');

?>
