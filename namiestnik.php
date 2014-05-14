<?php

$title = 'Panel Administracyjny';
require_once('includes/head.php');
require_once('languages/'.$player -> lang.'/namiestnik.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if ($player -> rank != 'Admin' && $player -> rank != 'Staff' && $player -> rank != 'Namiestnik' && $player -> rank != 'Hrabia' && $player -> rank != 'Strażnik Miejski')
{
    error ("Nie jesteś Namiestnikiem / Hrabią");
}

$smarty -> assign('Message', '');

/**
 * Functions from includes/admin dir
 */
if (isset($_GET['view']))
{
    $arrView = array('takeaway', 'clearc', 'czat', 'jail', 'innarchive', 'banmail', 'addtext', 'changenick', 'addreps', 'weather', 'newsy', 'kroniki');
    $intKey = array_search($_GET['view'], $arrView);
    if ($intKey !== false)
    {
        require_once('includes/admin/'.$arrView[$intKey].'.php');
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
            $smarty -> assign("Message", YOU_ADD." <b>".$_POST['bword']."</b>. (<a href=\"admin.php?view=censorship\">".REFRESH."</a>)");
        }
        /**
        * Delete word
        */
        if ($_POST['action'] == 'delete')
        {
            $db -> Execute("DELETE FROM bad_words WHERE bword=".$strWord);
            $smarty -> assign("Message", YOU_DELETE." <b>".$_POST['bword']."</b>. (<a href=\"admin.php?view=censorship\">".REFRESH."</a>)");
        }
    }
}
/*
 * Zezwolenia
 */
if (isset($_GET['view']) && $_GET['view'] == 'permisions')
{
    $perms=$db->Execute("Select id, owner, perm_text, date from permisions");
    $i=0;
    $arrId=array();
    $arrOwner=array();
    $arrText=array();
    $arrDate=array();
    while (!$perms -> EOF)
    {
        $arrId[$i]=$perms->fields['id'];
        $arrOwner[$i]=$perms->fields['owner'];
        $arrText[$i]=$perms->fields['perm_text'];
        $arrDate[$i]=$perms->fields['date'];
        $i = $i + 1;
        $perms -> MoveNext();
    }
    $smarty->assign("Ids", $arrId);
    $smarty->assign("Owner", $arrOwner);
    $smarty->assign("Text", $arrText);
    $smarty->assign("Date", $arrDate);
    if (isset($_GET['step']) && $_GET['step'] == 'add')
    {
        $id=$_POST['pid'];
        $perm_text=$_POST['perm_text'];
        if (!is_numeric($id))
        {
            error("Wartość musi być liczbą");
        }
        $check=$db->Execute("Select id from players where id=".$id);
        if (!$check -> fields['id'])
        {
            error("Nie ma takiego gracza");
        }
        
        $db->Execute("Insert into permisions(owner, perm_text, date) Values (?,?, NOW())",array($id,$perm_text)) or die($db->ErrorMsg()."<br>".$id."<br>".$perm_text);
        $db->Execute("Insert into log(owner, log, czas) values (".$id.", 'Gracz ".$player->user." nadał ci następujące zezwolenie:<br><br><i>".$perm_text."</i><br><br>Zezwolenie te będzie od tej pory widoczne w twoim profilu.',NOW())");
        error("Nadałeś uprawienie o treści:<br><br>".$perm_text."<br><br>graczowi o id ".$id);
    }    
    
}
// pol±czenie graczy - śluby
if (isset ($_GET['view']) && $_GET['view'] == 'pary') {
    if (isset ($_GET['step']) && $_GET['step'] == 'add') {
        if ($_POST['prisoner'] != $_POST['prisonerp']) {
            mysql_query("insert into pary (prisoner, prisonerp, verdict, cost, data) values (".$_POST['prisoner'].",".$_POST['prisonerp'].",'".$_POST['verdict']."',".$_POST['cost'].",'".$data."')") or error ("nie mogę dodać wpisu!");
            // tutaj jeszcze może być stan cywilny ale jest wówczas parę zmian w plikach viev.php,viev.tpl,stt.php, stat.tpl i dodatkowe pole w tabeli `players` na końcu o nazwie `stan` varchar 20 
         mysql_query("update players set stan=' Zwi±zek z ID:".$_POST['prisonerp']."' where id=".$_POST['prisoner']);
		   mysql_query("update players set stan=' Zwi±zek z ID:".$_POST['prisoner']."' where id=".$_POST['prisonerp']);
			
         mysql_query("update players set max_energy=max_energy+2 where id=".$_POST['prisoner']);
			mysql_query("update players set max_energy=max_energy+2 where id=".$_POST['prisonerp']);
			mysql_query("insert into log (owner, log, czas) values(".$_POST['prisoner'].",'Poślubiłeś(aś) gracza o ID: ".$_POST['prisonerp'].", za ".$_POST['verdict'].". Możesz się z nim rozwieść za: ".$_POST['cost'].". Połączył was: ".$player -> user." ID: ".$player -> id."','".$newdate."')");
            mysql_query("insert into log (owner, log, czas) values(".$_POST['prisonerp'].",'Poślubiłeś(aś) gracza o ID:".$_POST['prisoner'].", za ".$_POST['verdict'].". Możesz się z nią rozwieść za: ".$_POST['cost'].". Połączył was: ".$player -> user." ID: ".$player -> id."','".$newdate."')");
			error ("Kobieta o ID: ".$_POST['prisoner']." Poślubia Mężczyznę o ID: ".$_POST['prisonerp']." za ".$_POST['verdict'].". Mogą się rozwieść za:".$_POST['cost']);
        }
    }
}
/* Ban players */
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
            if ($_POST["browser"])
            {
            	$plr=$db->Execute("Select fingerprint from players where id=".$strAmount);
            	$db -> Execute("INSERT INTO ban (type, amount) VALUES ('BR', '".$plr->fields['fingerprint']."')");
            }
            $smarty -> assign("Message", YOU_BAN." <b>".$_POST['type']."</b> ".$_POST['amount'].". (<a href=\"admin.php?view=ban\">".REFRESH."</a>)");
        }
        /**
        * Unban player
        */
        if ($_POST['action'] == 'unban')
        {
            $db -> Execute("DELETE FROM ban WHERE type='".$_POST['type']."' AND amount=".$strAmount);
            $smarty -> assign("Message", YOU_UNBAN." <b>".$_POST['type']."</b> ".$_POST['amount'].". (<a href=\"admin.php?view=ban\">".REFRESH."</a>)");
        }
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


if (isset ($_GET['view']) && $_GET['view'] == 'add')
{
    $smarty -> assign(array("Addid" => ADD_ID,
        "Newrank" => NEW_RANK,
        "Rmember" => R_MEMBER,
        "Rking" => R_KING,
        "Rstaff" => R_STAFF,
        "Rjudge" => R_JUDGE,
        "Rjudge2" => R_JUDGE2,
        "Rjudge3" => R_JUDGE3,
        "Rlawyer" => R_LAWYER,
        "Rbeggar" => R_BEGGAR,
        "Rbarbarian" => R_BARBARIAN,
        "Rscribe" => R_SCRIBE,
        "Rknight" => R_KNIGHT,
        "Rlady" => R_LADY,
        "Rcount" => R_COUNT,
        "Rcount2" => R_COUNT2,
        "Rredactor" => R_REDACTOR,
        "Rinnkeeper" => R_INNKEEPER,
        "Rprocurator" => R_PROCURATOR,
        "Rmagazynier" => R_MAGAZYNIER,
        "Rstraznik" => R_STRAZNIK,
        "Rmurgrabia" => R_MURGRABIA,
        "Rdruid" => R_DRUID,
        "Rkrolowapotepionych" => R_KROLOWAPOTEPIONYCH,
        "Rhonorowymieszkaniec" => R_HONOROWYMIESZKANIEC,
        "Rwielkimistrz" => R_WIELKIMISTRZ,
        "Rgladiator" => R_GLADIATOR,
        "Rstarydziad" => R_STARYDZIAD,
        "Rwskrzesiciel" => R_WSKRZESICIEL,
        "Rkostuch" => R_KOSTUCH,
        
        "Rzul" => R_ZUL,
        "Aadd" => A_ADD));
    if (isset ($_GET['step']) && $_GET['step'] == 'add')
    {
        if ($_POST['aid'] != 1)
        {
            $strRank = $db -> qstr($_POST['rank'], get_magic_quotes_gpc());
            $db -> Execute("UPDATE `players` SET `rank`=".$strRank." WHERE `id`=".$_POST['aid']);
            error (YOU_ADD_R." ".$_POST['aid']." ".NEW_RANK." ".$_POST['rank'].".");
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
        //$_POST['body'] = strip_tags($_POST['body']);
		$_POST['body'] = nl2br($_POST['body']);
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
* Initialization of variables
*/
if (!isset($_GET['view']))
{
    $online=$db->Execute('Select * from players where lpv >='.(time()-180).' AND (id=1 OR id=5 or id=36)');
	
	$_GET['view'] = '';
    $arrTitles = array(ACCEPT, BAN, MODERATOR, PLAYERS, GAME, ADMINISTRATION);
    $arrOptions = array(array('addupdate.php', 'admin.php?view=addtext', 'addnews.php', 'admin.php?view=poll'),
                        array('logs', 'ban', 'del'),
                        array('czat', 'banmail', 'forums', 'innarchive', 'censorship', 'pary'),
                        array('addreps','donate', 'takeaway', 'jail', 'jailbreak', 'playerquest', 'changenick', 'add', 'donator', 'poczta'),
                        array('equipment', 'monster', 'monster2', 'kowal', 'czary', 'mill'),
                        array('admin.php?view=censorship', 'bugtrack.php', 'admin.php?view=bugreport', 'admin.php?view=changelog', 'admin.php?view=register', 'admin.php?view=close'));
    $arrDescriptions = array(array (A_ADDUPDATE, A_ADD_NEWS, A_ADDNEWS, A_POLL),
                             array(A_LOGS, A_BAN, A_DELETE),
                             array(A_CHAT_BAN, A_BAN_MAIL, A_FORUMS, A_INNARCHIVE, A_CENSORSHIP, slub),
                             array (A_REPUTATION,A_DONATION, A_TAKE, A_JAIL, A_JAILBREAK, A_PLAYERQUEST, A_CHANGE_NICK, A_RANK, A_DONATOR, A_PM),
                             array(A_EQUIP, A_MONSTERS, A_MONSTER2, A_SMITH, A_SPELLS, A_MILL),
                             array(A_META, A_BUGTRACK, A_BUG_REPORT, A_CHANGELOG, A_REGISTER, A_CLOSE));
    $smarty -> assign(array('Awelcome' => A_WELCOME,
                            'Titles' => $arrTitles,
                            'Options' => $arrOptions,
                            'Descriptions' => $arrDescriptions));
}
    else
{
    $smarty -> assign('Aback', '<a href="namiestnik.php">wróć</a>');
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
$smarty -> display('namiestnik.tpl');

require_once('includes/foot.php');

?>
