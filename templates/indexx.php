
<?php
/**
 *   File functions:
 *   Main site of game
 *
 *   @name                 : index.php
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.3
 *   @since                : 22.11.2006
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
// $Id: index.php 835 2006-11-22 17:40:22Z thindil $

require_once ('includes/config.php');

if (!$gamename)
{
    $host = $_SERVER['HTTP_HOST'];
    $path = str_replace("index.php","",$_SERVER['PHP_SELF']);
    $address = "http://".$host.$path."install/install.php";
    $meta = "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"0; URL=".$address."\">";
    print "<html><head>".$meta."</head><body></body></html>";
    exit;
}
    else
{

	require_once ('includes/main/base.php');

	require_once ('includes/getlang.php');
	GetLang ();
	GetLoc ('mainpage');
	GetLoc ('index');

	GameCloseRoutine ();
    
 
	require_once ('includes/main/counter.php');
	require_once ('includes/main/record.php');
	require_once ('includes/main/online.php');
        require_once ('includes/main/usersever.php');

	require_once ('includes/right.php');

    /**
    * Main Page
    */
    if (!isset ($_GET['step']))
     $test=mysql_query("Select text from weather order by id desc limit 1");
$weather=mysql_fetch_array($test);

$smarty -> assign('Weather', $weather['text']);
if ($player -> rank == 'Admin' or $player -> rank == 'Staff' or $player -> rank == "Królowa Potêpionych")
{
$add="<a href='admin.php?view=weather'>[Zmieñ pogodê]</a>";
}
else
{
$add="";
}
$smarty -> assign('Addweather', $add);










//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx




$test = $db -> Execute('SELECT `value` FROM `settings` WHERE `setting`=\'age\'');
$age= $test -> fields['value'];
$smarty -> assign(array("age" => $age));
$test = $db -> Execute('SELECT `value` FROM `settings` WHERE `setting`=\'day\'');
$day = $test -> fields['value'];
$smarty -> assign(array("day" => $day));

require_once("languages/pl/updates.php");
    $upd = $db -> SelectLimit("SELECT * FROM updates WHERE lang='".$player -> lang."' ORDER BY id DESC", 10);
    


if (isset($_GET['view']))
{
    $upd = $db -> SelectLimit("SELECT * FROM updates WHERE lang='".$player -> lang."' ORDER BY id DESC", 10);
    $arrtitle = array();
    
    $arrnews = array();
    $arrmodtext = array();
    $arrtimestamp = array();
    $arrComments = array();
    $arrUpdid = array();
    $i = 0;    
    while (!$upd -> EOF) 
    {
       
        if (isset($upd -> fields['time']))
        {
            $arrtimestamp[$i] = T_DAY.$upd -> fields['time'];
        }
            else
        {
            $arrtimestamp[$i] = '';
        }
        $upd -> MoveNext();
        $i = $i + 1;        
    }
    $upd -> Close();
    $smarty -> assign(array("Title1" => $arrtitle, 
        
        "Update" => $arrnews, 
        "Modtext" => $arrmodtext, 
        "Date" => $arrtimestamp,
        "Comments" => $arrComments,
        "Updid" => $arrUpdid));    
}


//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    {
        $uquery = $db -> SelectLimit("SELECT * FROM updates WHERE lang='".$strTranslation."' ORDER BY id DESC", 1);
        $update = "<center><b>".$uquery -> fields['title']."</b> ".WRITE_BY." <b>".$uquery -> fields['starter']."</b>".$time."...</center>\"".$uquery -> fields['updates']."\"."; 
        $uquery -> Close();

        $adminmail1 = str_replace("@","[at]",$adminmail);

        $objCodexdate = $db -> Execute("SELECT `date` FROM `court` WHERE `title`='".CODEX." ".$gamename."'");

        $smarty->assign( array ("Update" => $update,
                                "Adminname" => $adminname,
                                "Adminmail" => $adminmail,
                                "Adminmail1" => $adminmail1,
                                "Codexdate" => $objCodexdate -> fields['date'],
                                "Pagetitle" => WELCOME));
                                
                              
        $smarty->display('indexx.tpl');
       
        $objCodexdate -> Close();
    }

    /**
    * Game rules
    */
    if (isset ($_GET['step']) && $_GET['step'] == 'rules')
    {
        $objRules = $db -> Execute("SELECT body FROM court WHERE title='".CODEX." ".$gamename."'");
        $smarty -> assign(array("Rules2" => $objRules -> fields['body'],
                                "Pagetitle" => RULES));
        $smarty -> display('rules.tpl');
        $objRules -> Close();
    }

    /**
    * Password reminder
    */
    if (isset($_GET['step']) && $_GET['step'] == 'lostpasswd')
    {
        $strMessage = '';
        if (isset($_GET['action']) && $_GET['action'] == 'haslo')
        {
            if (!$_POST['email'])
            {
                $smarty -> assign ("Error", ERROR_MAIL);
                $smarty -> display ('error.tpl');
                exit;
            }
            $_POST['email'] =  strip_tags($_POST['email']);
            $query = $db -> Execute("SELECT `id` FROM `players` WHERE `email`='".$_POST['email']."'");
            $intId = $query -> fields['id'];
            $query -> Close();

            if (!$intId)
            {
                $smarty -> assign ("Error", ERROR_NOEMAIL);
                $smarty -> display ('error.tpl');
                exit;
            }
            $new_pass = substr(md5(uniqid(rand(), true)), 3, 9);
            $intNumber = substr(md5(uniqid(rand(), true)), 3, 9);
            $strLink = $gameadress."/index.php?step=lostpasswd&code=".$intNumber."&email=".$_POST['email'];
            $adress = $_POST['email'];
            $message = MESSAGE_PART1." ".$gamename.".".MESSAGE_PART2." \n".$new_pass."\n ".MESSAGE_PART3."\n ".$strLink."\n".MESSAGE_PART4." ".$gamename."\n".$adminname;
            $subject = MESSAGE_SUBJECT." ".$gamename;
            require_once('mailer/mailerconfig.php');
            if (!$mail -> Send())
            {
                $smarty -> assign ("Error", MESSAGE_NOT_SEND." ".$mail -> ErrorInfo);
                $smarty -> display ('error.tpl');
                exit;
            }
            $strPass = md5($new_pass);
            $db -> Execute("INSERT INTO `lost_pass` (`number`, `email`, `newpass`, `id`) VALUES('".$intNumber."', '".$_POST['email']."', '".$strPass."', ".$intId.")") or $db -> ErrorMsg();
        }

        /**
         * Write new password to database
         */
        if (isset($_GET['code']) && isset($_GET['email']))
        {
            $strEmail =  strip_tags($_GET['email']);
            $strCode =  strip_tags($_GET['code']);
            if (empty($strCode) || empty($strEmail))
            {
                $smarty -> assign ("Error", ERROR);
                $smarty -> display ('error.tpl');
                exit;
            }
            $objTest = $db -> Execute("SELECT `newpass`, `id` FROM `lost_pass` WHERE `number`='".$strCode."' AND `email`='".$strEmail."'");
            if (!$objTest -> fields['newpass'])
            {
                $smarty -> assign ("Error", ERROR);
                $smarty -> display ('error.tpl');
                exit;
            }
            $db -> Execute("UPDATE `players` SET `pass`='".$objTest -> fields['newpass']."' WHERE `email`='".$strEmail."' AND `id`=".$objTest -> fields['id']);
            $db -> Execute("DELETE FROM `lost_pass` WHERE `number`='".$strCode."' AND `email`='".$strEmail."' AND `id`=".$objTest -> fields['id']);
            $objTest -> Close();
            $strMessage = PASS_CHANGED;
        }

        /**
        * Initializantion of variable
        */
        if (!isset($_GET['action']))
        {
            $_GET['action'] = '';
        }
        $smarty -> assign(array("Action" => $_GET['action'],
                                "Message" => $strMessage,
                                "Pagetitle" => LOST_PASSWORD));
        $smarty -> display ('passwd.tpl');
    }

    /**
     * Write new email to database
     */
    if (isset($_GET['code']) && isset($_GET['email']) && (isset($_GET['step']) && $_GET['step'] == 'newemail'))
    {
        $strEmail =  strip_tags($_GET['email']);
        $strCode =  strip_tags($_GET['code']);
        if (empty($strCode) || empty($strEmail))
        {
            $smarty -> assign ("Error", ERROR);
            $smarty -> display ('error.tpl');
            exit;
        }
        $objTest = $db -> Execute("SELECT `email`, `id` FROM `lost_pass` WHERE `number`='".$strCode."' AND `newemail`='".$strEmail."'");
        if (!$objTest -> fields['email'])
        {
            $smarty -> assign ("Error", ERROR);
            $smarty -> display ('error.tpl');
            exit;
        }
        $db -> Execute("UPDATE `players` SET `email`='".$strEmail."' WHERE `email`='".$objTest -> fields['email']."' AND `id`=".$objTest -> fields['id']);
        $db -> Execute("DELETE FROM `lost_pass` WHERE `number`='".$strCode."' AND `newemail`='".$strEmail."' AND `id`=".$objTest -> fields['id']);
        $objTest -> Close();
        $smarty -> assign(array("Error" => MAIL_CHANGED));
        $smarty -> display('error.tpl');
        exit;
    }

    $db -> Close();
}


require_once('languages/'.$player -> lang.'/foot.php');
require_once('includes/security.php');

$db->SetFetchMode(ADODB_FETCH_NUM);
$arrCount = $db -> GetRow('SELECT count(*) FROM `players`');


/**
* Show record in game
*/
include('counter/record.php');
/**
* Count time to reset
*/
require_once('includes/counttime.php');
$arrTime = counttime();

$arrAge = $db -> GetRow('SELECT `value` FROM `settings` WHERE `setting`=\'age\'');
$arrDay = $db -> GetRow('SELECT `value` FROM `settings` WHERE `setting`=\'day\'');
$time = date("H:i:s");

/**
* Last registered
*/
require_once ('last.php');
$last = eyeLastRegistered();

$db -> LogSQL(false);
list($a_dec, $a_sec) = explode(' ', $start_time);
list($b_dec, $b_sec) = explode(' ', microtime());
$arrSQL = $db -> GetRow('SELECT SUM(`timer`), count(*) FROM `adodb_logsql`');
$sqltime = round($arrSQL[0], 3);
$duration = round($b_sec - $a_sec + $b_dec - $a_dec, 3);
$db -> Execute('TRUNCATE TABLE `adodb_logsql`');

$comp = isset($compress) ? YES : NO;
if (!isset($do_gzip_compress))
    $do_gzip_compress = false;

$numlog = $db -> GetRow('SELECT count(*) FROM `log` WHERE `owner`='.$player -> id.' AND `unread`=\'F\'');
$smarty -> assign ('Unreadlog', $numlog[0] ? $numlog[0] : 0);

$unread = $db -> GetRow('SELECT count(*) FROM `mail` WHERE `owner`='.$player -> id.' AND `zapis`=\'N\' AND `unread`=\'F\' AND `send`=0');
$smarty -> assign ('Unreadmail', $unread[0] ? $unread[0] : 0);
$test=mysql_query("Select text from weather order by id desc limit 1");
$weather=mysql_fetch_array($test);

$smarty -> assign('Weather', $weather['text']);
if ($player -> rank == 'Admin' or $player -> rank == 'Staff' or $player -> rank == "Królowa Potêpionych")
{
$add="<a href='admin.php?view=weather'>[Zmieñ pogodê]</a>";
}
else
{
$add="";
}
$smarty -> assign('Addweather', $add);





$test=mysql_query("Select text from newsy order by id desc limit 1");
$newsy=mysql_fetch_array($test);

$smarty -> assign('newsy', $newsy['text']);
if ($player -> rank == 'Admin' or $player -> rank == 'Staff' or $player -> rank == "Królowa Potêpionych")
{
$add="<a href='admin.php?view=newsy'>[Dodaj Newsa]</a>";
}
else
{
$add="";
}
$smarty -> assign('Addnewsy', $add);





/**
* Assign variables and show page
*/
$pageNr = (isset($_SESSION['page'])) ? $_SESSION['page'] : 0;
$opisInList = (isset($_SESSION['opisinlist'])) ? $_SESSION['opisinlist'] : 0;
$smarty -> assign(array('Players' => $arrCount[0],
                        'Overlib' => $player -> overlib,
                        'OpisInList' => $opisInList,
                        'Page' => $pageNr,
                        'Mailinfo' => $player -> mailinfo,
                        'Loginfo' => $player -> loginfo,
                        'LastID' => $last[0],
                        'LastName' => $last[1],
                        'Duration' => $duration,
                        'Compress' => $comp,
                        'Sqltime' => $sqltime,
                        'numRecord' => $record,
                        'Numquery' => $arrSQL[1] + 1,
                        'Tage' => $arrAge[0],
                        'Tday' => $arrDay[0],
                        'Thours' => $arrTime[0],
                        'Tminutes' => $arrTime[1],
                        'Time' => $time));

$smarty -> display ('footer.tpl');

if ($do_gzip_compress)
{
    //
    // Borrowed from php.net!
    //
    $gzip_contents = ob_get_contents();
    ob_end_clean();
    $gzip_size = strlen($gzip_contents);
    $gzip_crc = crc32($gzip_contents);
    $gzip_contents = gzcompress($gzip_contents, 9);
    $gzip_contents = substr($gzip_contents, 0, strlen($gzip_contents) - 4);

    echo '\x1f\x8b\x08\x00\x00\x00\x00\x00'.$gzip_contents.pack('V', $gzip_crc).pack('V', $gzip_size);
}
$db -> Close();
session_write_close();
?>
