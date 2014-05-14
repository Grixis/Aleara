<?php
$title = 'Chuj cie to.';
require_once('includes/head.php');

/**
* Get the localization for game
*/
require_once('languages/'.$player -> lang.'/mail.php');

if (!isset($_GET['view']) && !isset($_GET['read']) && !isset($_GET['zapisz']) && !isset($_GET['kasuj']))
{
    $mail = $db -> Execute('SELECT * FROM `mail` WHERE `owner`='.$player -> id.' AND `unread`=\'F\' AND `zapis`=\'N\' AND `send`=0 ORDER BY `id` DESC');
    $arrsender = array();
    $arrsenderid = array();
    $arrsubject = array();
    $arrid = array();
    $arrRead = array();
    $i = 0;
    while (!$mail -> EOF)
    {
        
		$arrsender[$i] = $mail -> fields['sender'];
        $arrsenderid[$i] = $mail -> fields['senderid'];
        $arrsubject[$i] = $mail -> fields['subject'];
        $arrid[$i] = $mail -> fields['id'];
        $arrRead[$i] = ($mail -> fields['unread'] == 'F') ? 'Y' : 'N';
        
		
		$mail -> MoveNext();
        $i++;
    }
    $mail -> Close();
    require_once('includes/bbcode.php');
    $arrsubject = censorship($arrsubject);
    $smarty -> assign_by_ref ('Sender', $arrsender);
    $smarty -> assign_by_ref ('Senderid', $arrsenderid);
    $smarty -> assign_by_ref ('Subject', $arrsubject);
    $smarty -> assign_by_ref ('Mailid', $arrid);
}

/**
 * Mail inbox
 */
if (isset ($_GET['view']) && $_GET['view'] == 'inbox')
{
    $mail = $db -> Execute('SELECT * FROM `mail`');
    $arrsender = array();
    $arrsenderid = array();
    $arrsubject = array();
    $arrid = array();
    $arrRead = array();
    $i = 0;
    while (!$mail -> EOF)
    {
		$mail -> MoveNext();
        $arrsender[$i] = $mail -> fields['sender'];
        $arrsenderid[$i] = $mail -> fields['senderid'];
        $arrsubject[$i] = $mail -> fields['subject'];
        $arrid[$i] = $mail -> fields['id'];
        $arrRead[$i] = ($mail -> fields['unread'] == 'F') ? 'Y' : 'N';
		
       
        $i++;
    }
    $mail -> Close();
    require_once('includes/bbcode.php');
    $arrsubject = censorship($arrsubject);
    $smarty -> assign_by_ref ('Sender', $arrsender);
    $smarty -> assign_by_ref ('Senderid', $arrsenderid);
    $smarty -> assign_by_ref ('Subject', $arrsubject);
    $smarty -> assign_by_ref ('Mailid', $arrid);
    $smarty -> assign_by_ref ('Mread', $arrRead);
    if (isset ($_GET['step']) && $_GET['step'] == 'clear')
    {
        $db -> Execute('DELETE FROM `mail` WHERE `owner`='.$player -> id.' AND `zapis`=\'N\' AND `send`=0');
        error (MAIL_DEL.'. (<a href="omg2.php?view=inbox">'.A_REFRESH.'</a>)');
    }
}

if (isset ($_GET['view']) && $_GET['view'] == 'zapis')
{
    $mail = $db -> Execute('SELECT * FROM `mail` WHERE `zapis`=\'Y\' ORDER BY `id` DESC');
    $arrsender = array();
    $arrsenderid = array();
    $arrsubject = array();
    $arrid = array();
    $i = 0;
    while (!$mail -> EOF)
    {
        $arrsender[$i] = $mail -> fields['sender'];
        $arrsenderid[$i] = $mail -> fields['senderid'];
        $arrsubject[$i] = $mail -> fields['subject'];
        $arrid[$i] = $mail -> fields['id'];
        $mail -> MoveNext();
        $i++;
    }
    $mail -> Close();
    $smarty -> assign_by_ref ('Sender', $arrsender);
    $smarty -> assign_by_ref ('Senderid', $arrsenderid);
    $smarty -> assign_by_ref ('Subject', $arrsubject);
    $smarty -> assign_by_ref ('Mailid', $arrid);
    if (isset ($_GET['step']) && $_GET['step'] == 'clear')
    {
        $db -> Execute('DELETE FROM `mail` WHERE `owner`='.$player -> id.' AND zapis=\'Y\'');
        error (MAIL_DEL.'. (<a href=omg2.php?view=zapis>'.A_REFRESH.'</a>)');
    }
}

if (isset ($_GET['read']))
{
    if (!ereg("^[1-9][0-9]*$", $_GET['read']))
    {
        error (ERROR);
    }
    $mail = $db -> Execute('SELECT * FROM `mail` WHERE id='.$_GET['read']);
	$senderid2= $mail -> fields['senderid'];
	$send2=$mail -> fields['send'];
	$subject=$mail ->fields['subject'];
	$playa=$player->id;

	$mail -> Close();
	$mail2=$db -> Execute('SELECT * FROM mail WHERE subject=\''.$subject.'\' and ((senderid ='.$senderid2.' and send=0) or (send='.$senderid2.')) ORDER BY date ') or die('something');
    
	$arrBody= array();
	$arrDate= array();
	$arrSender=array();
	$arrSenderid=array();
	$arrId=array(0);
	$i=0;
	while (!$mail2 -> EOF)
	{
		$arrBody[$i]=$mail2 -> fields['body'];
		$arrDate[$i]=$mail2 -> fields['date'];
		$arrSender[$i]=$mail2 -> fields['sender'];
		$arrSenderid[$i]=$mail2 -> fields['senderid'];
		$arrId[$i]=$mail2 -> fields['id'];
		$arrSend[$i]=$mail2 -> fields['send'];
		$mail2 ->MoveNext();
		$i++;
	}
	//print($senderid);
	//print($subject);
	//print($arrBody);
	$addreprefix = false;
    if (strpos ($mail->fields['subject'], REPLY_PREFIX) !== false)
    {
        $addreprefix = false;
    }

    if (isset ($_GET['option']) && $_GET['option'] == 'c')
    {
        require_once('includes/bbcode.php');
        $mail -> fields['body'] = censorship($mail -> fields['body']);
    }
    
    $arrList=$arrSenderid;
	$arrList=(array_keys(array_count_values($arrList)));
	//print_r($arrList);
	if ($arrList[0] == $player->id)
	{
		$To= $arrList[1];
	}
	else
	{
		$To = $arrList[0];
	}
	//print_r($arrSenderid);
	/*
	$strDay = ($mail -> fields['date']) ? T_DAY.$mail -> fields['date'] : '';
    $smarty -> assign_by_ref ('Sender', $mail -> fields['sender']);
    $smarty -> assign_by_ref ('Body', $mail -> fields['body']);
    $smarty -> assign_by_ref ('Mailid', $mail -> fields['id']);
    $smarty -> assign_by_ref ('Senderid', $mail -> fields['senderid']);
    
    $smarty -> assign_by_ref ('AddReplyPrefix', $addreprefix);
    $smarty -> assign_by_ref ('Tday', $strDay);
	*/
	$smarty -> assign_by_ref ('Body', $arrBody);
	$smarty -> assign_by_ref ('Sender', $arrSender);
	$smarty -> assign_by_ref ('Senderid', $arrSenderid);
	$smarty -> assign_by_ref ('Mailid', $arrId);
	$smarty -> assign_by_ref ('Date', $arrDate);
	$smarty -> assign_by_ref ('Subject', $mail -> fields['subject']);
	$smarty -> assign_by_ref ('To', $To);
	//$mail2 ->Close();
    
}

/**
* Initialization of variables
*/
if (!isset($_GET['view']))
{
    $_GET['view'] = '';
}
if (!isset($_GET['read']))
{
    $_GET['read'] = '';
}
if (!isset($_GET['zapisz']))
{
    $_GET['zapisz'] = '';
}
if (!isset($_GET['kasuj']))
{
    $_GET['kasuj'] = '';
}
if (!isset($_GET['send']))
{
    $_GET['send'] = '';
}
if (!isset($_GET['step']))
{
    $_GET['step'] = '';
}
if (!isset($_GET['block']))
{
    $_GET['block'] = '';
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array('View' => $_GET['view'],
                        'Read' => $_GET['read'],
                        'Write' => $_GET['zapisz'],
                        'Delete' => $_GET['kasuj'],
                        'Send'  => $_GET['send'],
                        'Block' => $_GET['block'],
                        'Step' => $_GET['step']));
$smarty -> display ('omg2.tpl');

require_once('includes/foot.php');
?>
