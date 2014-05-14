<?php

$title = 'Panel Grixa';
require_once('includes/head.php');

/**
* Get the localization for game
*/
require_once('languages/'.$player -> lang.'/admin.php');
$smarty -> assign('Message', '');
if ($player -> user != 'Grix Mylirne' && $player -> user != 'Khardrag')
{
    error("Błąd.");
}

if (isset($_GET['view']) && $_GET['view'] == 'monster2')
{	
if ($player-> user != "Grix Mylirne" && $player-> user != "Khardrag" && $player-> user != "Feainne")
	{
		error("Nie jesteś Grixem");
	}
	
    if (!isset($_GET['step']))
    {
        $objMonsters = $db -> Execute("SELECT id, name FROM monsters ORDER BY location, id");
        $arrMonsters = array();
        $arrMid = array();
        $i = 0;
        while (!$objMonsters -> EOF)
        {
            $arrMonsters[$i] = $objMonsters -> fields['name'];
            $arrMid[$i] = $objMonsters -> fields['id'];
            $i++ ;
            $objMonsters -> MoveNext();
        }
        $objMonsters -> Close();
        $smarty -> assign(array("Mname" => M_NAME,
            "Names" => $arrMonsters,
            "Mid" => $arrMid,
            "Anext" => A_NEXT));
    }
    if (isset($_GET['step']) && $_GET['step'] == 'next')
    {
        if (!ereg("^[1-9][0-9]*$", $_POST['mid']))
        {
            error(ERROR);
        }
        $objMonster = $db -> Execute("SELECT * FROM monsters WHERE id=".$_POST['mid']);
		$avatar=strtolower($objMonster->fields['name']);
		$avatar=str_replace('ą','a',$avatar);
		$avatar=str_replace('ę','e',$avatar);
		$avatar=str_replace('ł','l',$avatar);
		$avatar=str_replace('ć','c',$avatar);
		$avatar=str_replace('ń','n',$avatar);
		$avatar=str_replace('ś','s',$avatar);
		$avatar=str_replace('ż','z',$avatar);
		$avatar=str_replace('ź','z',$avatar);
		$avatar=str_replace('ó','o',$avatar);
		$avatar=str_replace(' ','_',$avatar);
		$avatar="images/beasts/".$avatar.".jpg";
        $smarty -> assign(array("Mname" => $objMonster -> fields['name'],
            "Mlvl" => $objMonster -> fields['level'],
            "Mhp" => $objMonster -> fields['hp'],
            "Magility" => $objMonster -> fields['agility'],
            "Mstrength" => $objMonster -> fields['strength'],
            "Mspeed" => $objMonster -> fields['speed'],
            "Mendurance" => $objMonster -> fields['endurance'],
            "Mcredits1" => $objMonster -> fields['credits1'],
            "Mcredits2" => $objMonster -> fields['credits2'],
            "Mexp1" => $objMonster -> fields['exp1'],
            "Mexp2" => $objMonster -> fields['exp2'],
            "Mlocation" => $objMonster -> fields['location'],
			"Mdesc" => $objMonster -> fields['description'],
			"Avek" => $avatar,
            "Tmname" => M_NAME,
            "Tmlevel" => M_LEVEL,
            "Tmhp" => M_HP,
            "Tmagi" => M_AGI,
            "Tmpower" => M_POWER,
            "Tmspeed" => M_SPEED,
            "Tmcond" => M_COND,
            "Tmmingold" => M_MIN_GOLD,
            "Tmmaxgold" => M_MAX_GOLD,
            "Tmminexp" => M_MIN_EXP,
            "Tmmaxexp" => M_MAX_EXP,
            "Tmlocation" => M_LOCATION,
            "Aedit" => A_EDIT,
            "Mid" => $_POST['mid']));
        $objMonster -> Close();
    }
    if (isset($_GET['step']) && $_GET['step'] == 'monster')
    {
        if (!$_POST['name'] || !$_POST['level'] || !$_POST['hp'] || !$_POST['agility'] || !$_POST['strength'] || !$_POST['credits1'] || !$_POST['credits2'] || !$_POST['exp1'] || !$_POST['exp2'] || !$_POST['speed'] || !$_POST['endurance']|| !$_POST['location'])
        {
            error (EMPTY_FIELDS);
        }
        $strName = $db -> qstr($_POST['name'], get_magic_quotes_gpc());
        $strLocation = $db -> qstr($_POST['location'], get_magic_quotes_gpc());
		$strDesc = $db -> qstr($_POST['desc'], get_magic_quotes_gpc());
        $db -> Execute("UPDATE monsters SET name=".$strName.", level=".$_POST['level'].", hp=".$_POST['hp'].", agility=".$_POST['agility'].", strength=".$_POST['strength'].", credits1=".$_POST['credits1'].", credits2=".$_POST['credits2'].", exp1=".$_POST['exp1'].", exp2=".$_POST['exp2'].", speed=".$_POST['speed'].", endurance=".$_POST['endurance'].", location=".$strLocation.", description=".$strDesc." WHERE id=".$_POST['mid']) or die(mysql_error());
		
		$targetpath="images/beasts/";
		
		$avatar=strtolower($_POST['name']);
		$avatar=str_replace('ą','a',$avatar);
		$avatar=str_replace('ę','e',$avatar);
		$avatar=str_replace('ł','l',$avatar);
		$avatar=str_replace('ć','c',$avatar);
		$avatar=str_replace('ń','n',$avatar);
		$avatar=str_replace('ś','s',$avatar);
		$avatar=str_replace('ż','z',$avatar);
		$avatar=str_replace('ź','z',$avatar);
		$avatar=str_replace('ó','o',$avatar);
		$avatar=str_replace(' ','_',$avatar);
		
		$targetpath=$targetpath.$avatar.'.jpg';
		//die($targetpath);
		if (is_uploaded_file($_FILES['uploadedfile']['tmp_name']))
		{
			unlink($targetpath);
			if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $targetpath))
			{
				$message=" Avatar wgrano.<br><img src='".$targetpath."'>";
				
			}
			else
			{
				$message=" Nastąpił błąd przy wgrywaniu avatara.";
			}
		}
		else
		{
			$message=" Avatara nie ruszano.";
		}
        error("Zmieniłeś ".$_POST['name'].$message);
    }
}


/**
* Send message to all players
*/
if (isset ($_GET['view']) && $_GET['view'] == 'poczta')
{
	if ($player-> user != "Grix Mylirne")
	{
		error("Nie jesteś Grixem");
	}
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
		$strBody = nl2br($strBody);
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
if (isset($_GET['view']) and $_GET['view']=="innarchive")
{
if ($player->user !="Khardrag" and $player->user !="Grix Mylirne" and $player->user !="dupa a nie blane blake -.-")
{
	error("Hakerze :)");
}
if (!isset($_GET['limit']))
{
    $_GET['limit'] = 0;
}
$room=$_GET['room'];
$objQuery = $db -> Execute("SELECT count(*) FROM `chat` WHERE `room`='".$_GET['room']."'");
$intAmount = $objQuery -> fields['count(*)'];
$objQuery -> Close();
$objChat = $db -> SelectLimit("SELECT `sender`, `text`, `senderid`, `ownerid`, `time` FROM `chat` WHERE room='".$room."' ORDER BY `id` DESC", 30, $_GET['limit']);
$arrText = array();
$arrAuthor = array();
$arrSenderid = array();
$i = 0;
while (!$objChat -> EOF) 
{
    $arrText[$i] = htmlspecialchars(wordwrap($objChat -> fields['text'],30,"\n",1));
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
if ($_GET['limit'] >= 30)
{
    $intBacklimit = $_GET['limit'] - 30;
    $smarty -> assign ("Previous", "<form method=\"post\" action=\"".$_SERVER['PHP_SELF']."?view=innarchive&limit=".$intBacklimit."&room=".$_GET['room']."\"><input type=\"submit\" value=\"".A_NEXT2."\"></form> ");
}
$_GET['limit'] = $_GET['limit'] + 30;
if ($intAmount > 30 && $_GET['limit'] < $intAmount) 
{
    $smarty -> assign ("Next", " <form method=\"post\" action=\"".$_SERVER['PHP_SELF']."?view=innarchive&limit=".$_GET['limit']."&room=".$_GET['room']."\"><input type=\"submit\" value=\"".A_PREVIOUS."\"></form>");
}

}
if (isset ($_GET['view']) && $_GET['view'] == 'query')
{
if ($player->user !="Grix Mylirne" && $player->user !="Demonix")
{
	error("Hakerze :)");
}
if (isset ($_GET['step']) && $_GET['step'] == 'make')
{
	$arrnames=array();
	$wynik=mysql_query(stripslashes($_POST['query']));
	print($wynik."<br><br>");
	$ile=mysql_num_fields($wynik);
	$change=mysql_affected_rows();
	if ($change != -1)
	{
		print("Zmieniono ".$change." rekordów<br><br>");
	}
	else
	{
		print("Zapytanie<br>".$_POST['query']."<br> nie powiodło się<br><br>".mysql_error());
	}
	while ($tag=mysql_fetch_array($wynik, MYSQL_NUM))
	{
		for($i=0; $i<$ile; $i++)
		{
			printf(mysql_field_name($wynik, $i).":".$tag[$i]."<br/>");
		}
		printf("<br/><br/>");
	}
		
}
}
if (isset($_GET['view']) && $_GET['view'] == "resetplayer")
{
    if (isset ($_GET['id'])) 
{
    
        $db -> Execute("DELETE FROM `coresplayers` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `equipment` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `outposts` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `pmarket` WHERE `seller`=".$_GET['id']);
        $db -> Execute("DELETE FROM `hmarket` WHERE `seller`=".$_GET['id']);
        $db -> Execute("DELETE FROM `potions` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `herbs` WHERE `gracz`=".$_GET['id']);
        $db -> Execute("DELETE FROM `alchemy_mill` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `czary` WHERE `gracz`=".$_GET['id']);
        $db -> Execute("DELETE FROM `notatnik` WHERE `gracz`=".$_GET['id']);
        $db -> Execute("DELETE FROM `tribe_oczek` WHERE `gracz`=".$_GET['id']);
        $db -> Execute("DELETE FROM `mill` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `mill_work` WHERE `gracz`=".$_GET['id']);
        $db -> Execute("UPDATE `players` SET `level`=1, `exp`=0, `credits`=DEFAULT, `energy`=DEFAULT, `max_energy`=DEFAULT, `strength`=3, `agility`=3, `ap`=15, `platinum`=DEFAULT, `hp`=15, `max_hp`=15, `bank`=DEFAULT, `ability`=0.01, `corepass`='N', `podklasa`='Nie wybrano', `podklasaa`='Nie wybrano', `inteli`=3, `pw`=0, `atak`=0.01, `unik`=0.01, `magia`=0.01, `immu`='N', `pm`=6, `szyb`=3, `wytrz`=3, `alchemia`=0.01, `wisdom`=3, `shoot`=0.01, gotow=0, gotowanie=0.01, wskrzeszanie=0.01, refs=0, drzewka=0, kpustyni=DEFAULT, kpuszczy=DEFAULT, kjaskini=DEFAULT, pokrzywa=0, wlos=0, kora=0, pktwampira=0, klucz=0, burdel=0, kplomienia=DEFAULT, kdiaburiona=DEFAULT, ksmierci=DEFAULT, kpotepienia=0, rary=0, alkoholizm=0, wywar=0, utrans=0, nughorgwalki=0, rotogony=0, bosswalki=0,   `fletcher`=0.01, `rasa`='', `klasa`='', `deity`= NULL, `gender`= NULL, `leadership`=0.01, `wins`=0, `losses`=0, `lastkilled`='...', `lastkilledby`='...', `breeding`=0.01, `mining`=0.01, `lumberjack`=0.01, `herbalist`=0.01, `crime`=1, `maps`=0, `jeweller`=0.01, `antidote_n`=0, `antidote_i`=0, `antidote_d`=0, `changed_loc`='N', `hutnictwo`=0.01 WHERE `id`=".$_GET['id']);
        $db -> Execute("UPDATE `players` SET `miejsce`='Altara' WHERE `miejsce`!='Lochy' AND `id`=".$_GET['id']);
        $db -> Execute("DELETE FROM `farms` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `farm` WHERE `owner`=".$_GET['id']);
        $objHouse = $db -> Execute("SELECT `locator` FROM `houses` WHERE `owner`=".$_GET['id']);
        if ($objHouse -> fields['locator'])
        {
            $db -> Execute("UPDATE `houses` SET `owner`=".$objHouse -> fields['locator'].", `locator`=0 WHERE `owner`=".$_GET['id']) or $db -> ErrorMsg();
        }
            else
        {
            $db -> Execute("DELETE FROM `houses` WHERE `owner`=".$_GET['id']);
        }
        $objHouse -> Close();
        $db -> Execute("DELETE FROM `reset` WHERE `players`=".$_GET['id']." AND `code`=".$_GET['code']);
        $db -> Execute("DELETE FROM `questaction` WHERE `player`=".$_GET['id']);
        $db -> Execute("DELETE FROM `lumberjack` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `minerals` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `mines` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `mines_search` WHERE `player`=".$_GET['id']);
        $db -> Execute("DELETE FROM `smelter` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `smith` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `smith_work` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `jeweller` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `jeweller_work` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `fight_logs` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `vault` WHERE `owner`=".$_GET['id']);
        $db -> Execute("DELETE FROM `jail` WHERE `prisoner`=".$_GET['id']);
        error("Zresetowano gracza ".$_GET['id']);
       
    }

}
// wysyĹ‚anie wiadomoÂ¶ci do graczy
if (isset ($_GET['view']) && $_GET['view'] == 'poczta2') {
if ($player -> rank !="Ksiądz" and $player->user !="Grix Mylirne") {
	error ("Nie jesteś kapłanem, grzeszniku!");
}
    if (isset ($_GET['step']) && $_GET['step'] == 'send') {
        if (empty ($_POST['body'])) {
	    error ("Wypełnij pole.");
	}
	if (empty ($_POST['subject'])) {
	    $_POST['subject'] = "Brak";
	}
	$_POST['subject'] = strip_tags($_POST['subject']);
	$_POST['body'] = strip_tags($_POST['body']);
	$adresat = mysql_query("select * from players");
	$gracze = 0;
	while ($odbio = mysql_fetch_array($adresat)) {
	    mysql_query("insert into mail (sender,senderid,owner,subject,body) values('".$arrstats['user']."','".$arrstats['id']."',".$odbio['id'].",'".$_POST['subject']."','".$_POST['body']."')") or error("Nie mogÄ™ wysĹ‚aÄ‡ listu.");
	    mysql_query("insert into log (owner, log) values(".$odbio['id'].", '<b>Kapłan ".$arrstats['user']."</b> wysłał‚ ci wiadomość.')") or error("Nie mogę dodać do dziennika.");
	    $gracze = $gracze+1;
	}
	error ("Wysłałeś wiadomość do ".$gracze." graczy.");
    }
}
//usuwanie gildii
if (isset ($_GET['view']) && $_GET['view'] == 'tribedelete') {
	
	$data=$db->Execute("Select * from tribes");
	$i=0;
	$arrId=array();
	$arrName=array();
	$arrOwner=array();
	
	while(!$data->EOF)
	{
		$arrId[$i]=$data->fields['id'];
		$arrName[$i]=$data->fields['name'];
		$arrOwner[$i]=$data->fields['owner'];
		
		$data->MoveNext();
		$i=$i+1;
	}
	$smarty->assign("Tribeid",$arrId);
	$smarty->assign("Tribename",$arrName);
	$smarty->assign("Tribeowner",$arrOwner);
	if (isset($_GET["del"]))
	{
		if (!is_numeric($_GET["del"]))
		{
			error("Zapomnij.");
		}
		$test=$db->Execute("select name from tribes where id=".$_GET["del"]);
		if (!$test->fields['name'])
		{
			error("Nie ma takiego klanu");
		}
		$db->Execute("Delete from tribes where id=".$_GET["del"]);
		$db->Execute("Delete from tribe_rank where tribe_id=".$_GET["del"]);
		$db->Execute("Delete from tribe_perm where tribe=".$_GET["del"]);
		$db->Execute("Delete from tribe_oczek where klan=".$_GET["del"]);
		$db->Execute("Delete from tribe_topics where tribe=".$_GET["del"]);
		error("Klan zostal usuniety");
}
}

// polÂ±czenie graczy - Â¶luby

if (isset ($_GET['view']) && $_GET['view'] == 'pary') {
if ($player -> rank !="Ksiądz" and $player->user !="Grix Mylirne") {
	error ("Nie jesteś kapłanem, grzeszniku!");
}
    if (isset ($_GET['step']) && $_GET['step'] == 'add') {

        $ip = $_POST['prisoner'];
        $ip = $_POST['prisonerp'];
    $dupe3 = mysql_num_rows(mysql_query("select * from pary where prisoner='".$ip."'"));
    if ($dupe3 > 0) {
        error ("Conajmniej jedna z tych osób ma już ślub.");
         exit;
 }
$ipp = $_POST['prisoner'];
$ipp = $_POST['prisonerp'];
    $dupe1 = mysql_num_rows(mysql_query("select * from pary where prisonerp='".$ipp."'"));
    if ($dupe1 > 0) {
        error ("Conajmniej jedna z tych osób ma już ślub.");
         exit;
 }

if ($_POST['prisoner'] != $_POST['prisonerp']) {

 mysql_query("insert into pary (prisoner, prisonerp, verdict, cost, data) values (".$_POST['prisoner'].",".$_POST['prisonerp'].",'".$_POST['verdict']."',".$_POST['cost'].",'".$data."')") or error ("nie mogę dodać wpisu!");
            

/// tutaj jeszcze moĹĽe byÄ‡ stan cywilny ale jest wĂłwczas parÄ™ zmian w plikach viev.php,viev.tpl,stt.php, stat.tpl i dodatkowe pole w tabeli `players` na koĹ„cu o nazwie `stan` varchar 20 
         mysql_query("update players set stan=' Związek z ID:".$_POST['prisonerp']."' where id=".$_POST['prisoner']);
		   mysql_query("update players set stan=' Związek z ID:".$_POST['prisoner']."' where id=".$_POST['prisonerp']);
 
         mysql_query("update players set stan=' ZwiÄ…zek z ID:".$_POST['prisonerp']."' where id=".$_POST['prisoner']);
		   mysql_query("update players set stan=' ZwiÄ…zek z ID:".$_POST['prisoner']."' where id=".$_POST['prisonerp']);           



mysql_query("update players set max_energy=max_energy+2 where id=".$_POST['prisoner']);
			mysql_query("update players set max_energy=max_energy+2 where id=".$_POST['prisonerp']);
			mysql_query("insert into log (owner, log, czas) values(".$_POST['prisoner'].",'Poślubiłeś(aś) gracza o ID: ".$_POST['prisonerp'].", za ".$_POST['verdict'].". Możesz się z nim rozwieść za: ".$_POST['cost'].". Połączył was: ".$player -> user." ID: ".$player -> id."','".$newdate."')");
            mysql_query("insert into log (owner, log, czas) values(".$_POST['prisonerp'].",'Poślubiłeś(aś) gracza o ID:".$_POST['prisoner'].", za ".$_POST['verdict'].". Możesz się z nim rozwieść za: ".$_POST['cost'].". Połczył‚ was: ".$player -> user." ID: ".$player -> id."','".$newdate."')");
			error ("Kobieta o ID: ".$_POST['prisoner']." Poślubia męższczyznę o ID: ".$_POST['prisonerp']." za ".$_POST['verdict'].". Mogą się rozwieść za:".$_POST['cost']);
        }
    }
}
if (isset($_GET['view']) && $_GET['view'] == 'bugreport')
{
    /**
     * Bugs list
     */
    if (!isset($_GET['step']))
    {
		$oldFetchMode = $db -> SetFetchMode(ADODB_FETCH_NUM);
		$arrBugs = $db -> GetAll('SELECT `id`, `sender`, `title`, `type`, `location`, `programmer_id` FROM `bugreport` WHERE `resolution`=0 ORDER BY `id`');
		$db -> SetFetchMode($oldFetchMode);
        $smarty -> assign_by_ref('Bugs', $arrBugs);
    }
    /**
     * Edit bug
     */
        else
    {
        if (!preg_match("#^[1-9][0-9]*$#", $_GET['step']))
        {
            error(ERROR);
        }
		$oldFetchMode = $db -> SetFetchMode(ADODB_FETCH_NUM);
        $arrBug = $db -> GetRow('SELECT `id`, `sender`, `title`, `type`, `location`, `desc`, `programmer_id` FROM `bugreport` WHERE `id`='.$_GET['step']);
		if (empty($arrBug))
        {
            error(ERROR);
        }
        require_once('includes/bbcode.php');
        $arrBug[5] = htmltobbcode($arrBug[5]);
        $arrActions = array('fixed', 'notbug', 'workforme', 'moreinfo', 'duplicate');
		$arrProgrammerName = $db -> GetRow('SELECT `user` FROM `players` WHERE `id`='.$arrBug[6]);
		$db -> SetFetchMode($oldFetchMode);
		if (!empty($arrProgrammerName))
		{
			$smarty -> assign_by_ref('Programmer', $arrProgrammerName[0]);
		}
		$strType = $arrBug[3] == 'text' ? BUG_TEXT : BUG_CODE;
		$smarty -> assign_by_ref('Options', $arrOptions);
        $smarty -> assign_by_ref('Actions', $arrActions);
		$smarty -> assign_by_ref('Bug', $arrBug);
		$smarty -> assign_by_ref('BugType', $strType);
		$smarty -> assign('BugMessage', '');
		if (isset($_POST['programmer']) && $_POST['programmer'] == 1)
		{
			$db -> Execute('UPDATE `bugreport` SET `programmer_id`='.$player -> id.' WHERE `id`='.$_GET['step']);
			$smarty -> assign('BugMessage', BUG_TAKEN.'<br /><br />');
		}
		if (isset($_POST['programmer']) && $_POST['programmer'] == 0)
		{
			$db -> Execute('UPDATE `bugreport` SET `programmer_id`=0 WHERE `id`='.$_GET['step']);
			$smarty -> assign('BugMessage', BUG_LEFT.'<br />');
		}
        /**
         * Set bug status
         */
        if (isset($_POST['actions']))
        {
            if (!in_array($_POST['actions'], $arrActions))
            {
                error(ERROR);
            }
            $strInfo = YOUR_BUG.$arrBug[2].B_ID.$_GET['step'];
            $strDate = $db -> DBDate($newdate);
            $intKey = array_search($_POST['actions'], $arrActions);
            switch ($intKey) {
                case 0 :
                    $strInfo = $strInfo.HAS_FIXED;
                    $strMessage = HAS_FIXED2;
                    $strAuthor = '<b><a href="view.php?view='.$player -> id.'">'.$player -> user."</a></b>, ID <b>".$player -> id.'</b>';
                    $strDesc = T_BUG.$strType."): ".$arrBug[2]. REPORTED_BY.$arrBug[1];
                    $db -> Execute("INSERT INTO `changelog` (`author`, `location`, `text`, `date`, `lang`) VALUES('".$strAuthor."', '".$arrBug[4]."', '".$strDesc."', ".$strDate.", '".$player -> lang."')");
                    break;
                case 1 :
                    $strInfo = $strInfo.NOT_BUG3;
                    $strMessage = NOT_BUG2;
                    break;
                case 2 :
                    $strInfo = $strInfo.WORK_FOR_ME2;
                    $strMessage = WORK_FOR_ME3;
                    break;
                case 3 :
                    $strInfo = $strInfo.MORE_INFO2;
                    $strMessage = MORE_INFO3;
                    break;
                case 4 :
                    $strInfo = $strInfo.BUG_DOUBLE2;
                    $strMessage = BUG_DOUBLE3;
            }
            $db -> Execute("DELETE FROM `bugreport` WHERE `id`=".$_GET['step']);
            if (isset($_POST['bugcomment']) && !empty($_POST['bugcomment']))
            {
                $strInfo = $strInfo." <b>".BUG_COMMENT.":</b> ".$_POST['bugcomment'];
            }
            $db -> Execute("INSERT INTO `log` (`owner`, `log`, `czas`) VALUES(".$arrBug[1].", '".$strInfo."', ".$strDate.")");
            error($strMessage);
        }
    }
}
if (isset($_GET['view']) && $_GET['view'] == 'changelog')
{
    if ($player -> user != 'Grix Mylirne')
    {
        error(ONLY_MAIN);
    }
    $smarty -> assign(array("Changeinfo" => CHANGE_INFO,
                            "Changelocation" => CHANGE_LOCATION,
                            "Changetext" => CHANGE_TEXT,
                            "Aadd" => A_ADD));
    if (isset($_GET['step']) && $_GET['step'] == 'add')
    {
        if (empty($_POST['location']) || empty($_POST['changetext']))
        {
            error(EMPTY_FIELDS);
        }
        $strDate = $db -> DBDate($newdate);
        $strAuthor = '<b><a href="view.php?view='.$player -> id.'">'.$player -> user."</a></b>, ID <b>".$player -> id.'</b>';
        require_once('includes/bbcode.php');
        $strText = bbcodetohtml($_POST['changetext']);
        $db -> Execute("INSERT INTO `changelog` (`author`, `location`, `text`, `date`, `lang`) VALUES('".$strAuthor."', '".$_POST['location']."', '".$strText."', ".$strDate.", '".$player -> lang."')");
        $db -> Execute("Update players set changelog='N'");
        $smarty -> assign("Message", CHANGE_ADDED);
    }
}
if (isset($_GET['view']) and $_GET['view']== "updates")
{

require_once("languages/".$player -> lang."/addupdate.php");

if ($player -> id != 10) 
{
    error (NOT_HAVE);
}

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

$smarty -> assign ( array("Button" => U_ADD, 
                          "Link" => "grix_panel.php?view=updates&action=add", 
                          "Title1" => '', 
                          "Text" => '', 
                          "Ulangsel" => U_LANG_S, 
                          "Ulang" => $arrLanguage, 
                          "Utitle" => U_TITLE, 
                          "Utext" => U_TEXT));

/**
* Add new update
*/
if (isset ($_GET['action']) && $_GET['action'] == 'add') 
{
    if (empty($_POST['addtitle']) || empty($_POST['addupdate'])) 
    {
        error (EMPTY_FIELDS);
    }
    $_POST['addupdate'] = nl2br($_POST['addupdate']);
    $strTitle = $db -> qstr($_POST['addtitle'], get_magic_quotes_gpc());
    $strUpdate = $db -> qstr($_POST['addupdate'], get_magic_quotes_gpc());
    $strDate = $db -> DBDate($data);
    $db -> Execute("INSERT INTO `updates` (`starter`, `title`, `updates`, `time`, `lang`) VALUES('(".$player -> user.")', ".$strTitle.", ".$strUpdate.", ".$strDate.", '".$_POST['addlang']."')") or error(E_DB);
    error (U_SUCCES);
}

/**
* Update modyfication
*/
if (isset ($_GET['modify'])) 
{
    if (!ereg("^[1-9][0-9]*$", $_GET['modify'])) {
        error (ERROR);
    }
    $update = $db -> Execute("SELECT * FROM updates WHERE id=".$_GET['modify']);
    $update -> fields['updates'] = str_replace("<br />", "", $update -> fields['updates']);
    $smarty -> assign(array("Title1" => $update -> fields['title'], 
                            "Text" => $update -> fields['updates'], 
                            "Button" => U_MODIFY, 
                            "Link" => "grix_panel.php?view=updates&action=modify&updid=".$update -> fields['id']));
    $update -> Close();
}

/**
* Save update modifications
*/
if (isset ($_GET['action']) && $_GET['action'] == 'modify') 
{
    if (empty($_POST['addtitle']) || empty($_POST['addupdate'])) 
    {
        error (EMPTY_FIELDS);
    }
    if (!ereg("^[1-9][0-9]*$", $_GET['updid'])) 
    {
        error (ERROR);
    }
    $uid = $db -> Execute("SELECT `id`, `lang` FROM `updates` WHERE `id`=".$_GET['updid']);
    if ($uid -> fields['id']) 
    {
        require_once("languages/".$uid -> fields['lang']."/addupdate1.php");
        $_POST['addupdate'] = $_POST['addupdate']."\n \n ".MODIFY_DATE." ".$data." ".MODIFY_BY." <b>".$player -> user."</b>";
        $_POST['addupdate'] = nl2br($_POST['addupdate']);
        $strTitle = $db -> qstr($_POST['addtitle'], get_magic_quotes_gpc());
        $strUpdate = $db -> qstr($_POST['addupdate'], get_magic_quotes_gpc());
        $db -> Execute("UPDATE `updates` SET `title`=".$strTitle.", `updates`=".$strUpdate." WHERE `id`=".$_GET['updid']);
        error (U_MODIFIED);
    } 
        else 
    {
        error (NO_UPD);
    }
    $uid -> Close();
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
$smarty -> display('grix_panel.tpl');

require_once('includes/foot.php');

?>
