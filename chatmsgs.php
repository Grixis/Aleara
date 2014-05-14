<?php
/**
 *   File functions:
 *   Show text in chat, send messages, color player names, ban/unban players in chat
 *
 *   @name                 : chatmsg.php
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : eyescream <> 
 *   @author               : Klaus Korner <albitos.snape@gmail.com>
 *   @version              : 1.0
 *   @since                : 03.02.2006
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
// $Id: chatmsgs.php 566 2006-09-13 09:31:08Z thindil $
/**
* Initializing mian classes needed in AJAX response/request
*/
require_once('includes/ajaxinit.php');

/**
* Get the localization for game
*/
require_once('languages/'.$player['lang'].'/chatmsgs.php');
$aRights = array(
    'ban' => array('Admin', 'Staff', 'Karczmarka', 'Strażnik Miejski', 'Hrabia', 'Namiestnik'),
    'unban' => array('Admin', 'Staff', 'Karczmarka', 'Strażnik Miejski', 'Hrabia', 'Namiestnik'),
    'bot' => array('Admin', 'Staff', 'Karczmarka', 'Królowa Potępionych', 'Strażnik Miejski', 'Druid', 'Mistrz Gry', 'Mistrzyni Gry', 'Hrabia', 'Namiestnik'),
    'clear' => array('Admin', 'Staff', 'Karczmarka', 'Hrabia', 'Namiestnik')
);
if ($player->location == 'Lochy')
{
	error("Przebywasz w lochu ");
}
switch($_GET['room'])
{
	case 'izba':
		$room = "'izba'";
		break;
		case 'pokoj1':
		$room = "'pokoj1'";
		break;
		case 'pokoj2':
		$room = "'pokoj2'";
		break;
			case 'piekielko':
		$room = "'piekielko'";
		break;
			case 'buzdygan':
		$room = "'buzdygan'";
		break;
	case 'piwnica':
		$room = "'piwnica'";
		break;
	default:
		$room = "'piwnica'";
		break;
}

/**
* Function to send chat message
*/
function send($sMsg, $sSender, $iSender, $sLang, $iOwner = 0)
{
    global $db, $room;
    require_once('includes/bbcode.php');

    $sSender = $db -> qstr($sSender);
    $sLang = $db -> qstr($sLang, get_magic_quotes_gpc());
    $iSender = (int)$iSender;
    $iOwner = (int)$iOwner;
	if ($room=='izba')
	{
	$sMsg = $db -> qstr(breakLongWords(bbcodetohtml($sMsg), 50, "<br />\n"));	
	}
	else
	{
	$sMsg = $db -> qstr(breakLongWords(bbcodetohtml($sMsg), 50, "<br />\n"));	
	}
    
	$sMsg = stripslashes($sMsg);
    
    $time = array_sum(explode(' ', microtime()));
    $db -> Execute('INSERT INTO chat(sender, text, senderid, ownerid, lang, time, room) VALUES('.$sSender.','.$sMsg.','.$iSender.','.$iOwner.','.$sLang.','.$time.', '.$room.')') or die($db -> ErrorMsg());
    //$db -> Execute('INSERT INTO chat(sender, text, senderid, ownerid, lang, time, room) VALUES('.$sSender.','.$sMsg.','.$iSender.','.$iOwner.','.$sLang.','.$time.', "niewidok")') or die($db -> ErrorMsg());
}

/*
* Function to send system message to one player
*/
function systemMsg($msg)
{
    global $player;
    send($msg, '', 0, $player['lang'], $player['id']);
    exit;
}

/*
* Function to check right for command (from config array)
*/
function checkRights($rank, $action)
{
    global $aRights;
    if(!in_array($rank, $aRights[$action]))
    {
        systemMsg(NO_PERM);
    }
}

/*
* Function to ban player
*/
function ban($id, $duration, $reason)
{
    global $db, $player;
    $user = $db -> Execute('SELECT user FROM players WHERE id='.(int)$id);
    $db -> Execute('INSERT INTO chat_config(gracz, resets) VALUES('.(int)$id.', '.(int)$duration.')');
    send(PLAYER.$user->fields['user'].KICKED.REASON.$reason, getColoredName(INNKEEPER3, 'bot'), $player['id'], $player['lang']);
}

function unban($id)
{   
    global $db;
    $db -> Execute('DELETE FROM chat_config WHERE gracz='.(int)$id);
    systemMsg("Gracz ID: $id został odbanowany");
}
function kick($id)
{   
    global $db, $player, $room;
	$time = array_sum(explode(' ', microtime()));
    $thescript="Zostałeś wyrzucony. <script type=\"text/javascript\">window.location=\"stats.php\"</script>";
    
	$db->Execute("INSERT INTO chat(sender, text, senderid, ownerid, time, room, lang) VALUES ('System', '".$thescript."',0,".(int)$id.",".$time.",'piwnica','pl')");
	systemMsg("Wyrzuciłeś gracza $id z karczmy");
}
//zapisywanie sesji
function save_tavern()
{
	global $db, $player;
	$ext=".html";
	$date=date("y-m-d_h:i:s");
	$plik= "./chat_archive/".$date.$ext;
	$file=fopen($plik, 'wb');
	fwrite($file, '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />');
	fwrite($file, '<style type="text/css"> body {background: black; color: white;} </style></head><body>');
	$messages=$db->Execute('Select sender, text from chat where ownerid=0 and room=\'izba\' order by time asc');
	$i = 0;
	while(!$messages -> EOF)
	{
		fwrite($file,$messages->fields['sender'].':'.$messages->fields['text'].'<br>');
		$messages -> MoveNext();
		$i++;
	}
    
	fclose($file);
	fwrite($file, '\n</body>\n</html>');
	systemMsg("Zapisano sesję <a href='chat_archive/".$date.".html'>".$date.".html</a>");
}
	
	

/*
* Function to get collored player name
*/
function getColoredName($sName, $sRank, $color)
{
    
	switch($sRank)
    {
      case 'Admin':
        $starter = '<span style="color: #'.$color.';"><b><i>'.$sName.'</i></b></span>';
        break;
      case 'bot':
        $starter = '<span style="color: #00FF00;">'.$sName.'</span>';
        break;
        
      default:
        $starter = '<span style="color: #'.$color.';">'.$sName.'</span>';
    }
    return $starter;
}

/* co
* Function to wrap too long words (like wordwrap)
*/
function breakLongWords($str, $maxLength, $char){
    $wordEndChars = array(" ", "\n", "\r", "\f", "\v", "\0");
    $count = 0;
    $newStr = "";
    $openTag = false;
    for($i=0; $i<strlen($str); $i++){
        $newStr .= $str{$i};   
       
        if($str{$i} == "<"){
            $openTag = true;
            continue;
        }
        if(($openTag) && ($str{$i} == ">")){
            $openTag = false;
            continue;
        }
       
        if(!$openTag){
            if(!in_array($str{$i}, $wordEndChars)){//If not word ending char
                $count++;
                if($count==$maxLength){//if current word max length is reached
                    $newStr .= $char;//insert word break char
                    $count = 0;
                }
            }else{//Else char is word ending, reset word char count
                    $count = 0;
            }
        }
       
    }//End for   
    return $newStr;
}
/*
* Sending messages
*/
if(isset($_POST['msg']))
{
	$color=$db->Execute("Select tavern_color from players where id=".$player['id']);
	$starter = getColoredName($player['user'], $player['rank'],$color->fields['tavern_color']);
    if($_POST['msg'][0] == '!')
    {
        if(preg_match('#^!ban ([1-90-9]+) ([1-90-9]+) (.*)$#', $_POST['msg'], $x))
        {
            checkRights($player['rank'], 'ban');
            ban($x[1], $x[2], $x[3]);
        }
        elseif(preg_match('#^!unban ([1-90-9]+)$#', $_POST['msg'], $x))
        {
            checkRights($player['rank'], 'unban');
            unban($x[1]);
        }
		elseif(preg_match('#^!kick ([1-90-9]+)$#', $_POST['msg'], $x))
        {
            checkRights($player['rank'], 'unban');
            kick($x[1]);
        }
        elseif(preg_match('#^!bot ([^ ]+) (.*)$#', $_POST['msg'], $x))
        {
            checkRights($player['rank'], 'bot');
            send($x[2], getColoredName($x[1], 'bot'), $player['id'], $player['lang']);
        }
        elseif(preg_match('#^!clear$#', $_POST['msg']))
        {
            checkRights($player['rank'], 'clear');
			if ($room == "'piwnica'")
			{
				$last=$db->GetOne("Select time from chat where room='piwnica' order by time desc limit 1");
				$newtime=$last-3600000;
				$db -> Execute("DELETE FROM chat WHERE lang = '".$player['lang']."' AND room=".$room." AND time < ".$newtime);
			}
			else
			{
				$db -> Execute("DELETE FROM chat WHERE lang = '".$player['lang']."' AND room=".$room);
			}
            send(CLEAR_TEXT, getColoredName(INNKEEPER4, 'bot'), $player['id'], $player['lang']);
        }
		elseif(preg_match('#^!save$#', $_POST['msg']))
        {
            save_tavern();
        }
        elseif(preg_match("#^!w ([1-90-9]+) (.*)$#", $_POST['msg'], $x))
        {
            $user = $db -> getRow('SELECT user FROM players WHERE id='.(int)$x[1]);
			$test = $db -> Execute('Select cisza from chat_config where gracz='.$player['id']);
			if ($test -> fields['cisza'] == 'Y')
			{
				systemMsg("Ta komenda nie istnieje");
			}
            if(!isset($user['user'])) systemMsg(NO_USER);
            send($x[2], $starter, $player['id'], $player['lang'], $x[1]);
        }
        else
        {
            systemMsg(NO_COMMAND);
        }
    }
    else
    {
        $czat = $db -> Execute('SELECT `gracz` FROM `chat_config` WHERE `gracz`='.$player['id']) or die($db -> ErrorMsg()); //check for chat ban
        if ($czat -> fields['gracz'])
        {
            systemMsg (NO_PERM);
        }
        $czat -> Close();

        /**
        * Start innkeeper bot
        */
        require_once('class/bot_class.php');
        $objBot = new Bot($_POST['msg'], 'Karczmarzu');
        $blnOrder = false;
        $message = $_POST['msg'];
        if ($blnCheckbot = $objBot -> Checkbot())
        {
            $strAnswer = $objBot -> Botanswer();
            // player gives something to other player: Karczmarzu X Y Z for 1234
            //Search for numbers at the end of message. If numeric is found, it will be stored in $intReceiverId[0]
            if (preg_match("#\d+#",$_POST['msg'], $intReceiverId))
            {
				$user = $db -> Execute('SELECT `user` FROM `players` WHERE `id`='.$intReceiverId[0]);
                $message = preg_replace("#dla \d+$#", ' '.FOR_A.' '.str_replace("&#39;","'",$user -> fields['user']), $_POST['msg']);
                $user -> Close();
                $blnOrder = true;
            }
        }        
        $owner = 0;

        send($message, $starter, $player['id'], $player['lang']);
        $objInnkeeper = $db -> Execute('SELECT `user` FROM `players` WHERE `rank`=\'Karczmarka\' AND `page`=\'Chat\' AND `lpv`>='.(time() - 60));
        if (!$objInnkeeper -> fields['user'] && isset($strAnswer))
        {
            send($strAnswer, getColoredName(INNKEEPER2, 'bot'), 0, $player['lang']);
        }
        elseif ($blnCheckbot)
        {
            send(INNKEEPER_GONE.$objInnkeeper -> fields['user'].RULES,  getColoredName(INNKEEPER3, 'bot'), 0, $player['lang']);
        }
        $objInnkeeper -> Close();
    }
}
else
{
  $time = array_sum(explode(' ', microtime()));
  $oUserAction = $db -> Execute('SELECT time FROM chat_users WHERE userid='.$player['id'].' AND room='.$room) or die($db -> ErrorMsg());
  
  if(isset($_GET['visited']) && $_GET['visited'] == 1)
  {
    $iPlayerTime = $oUserAction -> fields['time'];
  }
  else
  {
    $iPlayerTime = 0;
  }
  $test=$db->Execute("Select gametype from players where id=".$player['id']);
  if ($test->fields['gametype'] != 'invisible')
  {
  $db -> Execute('INSERT INTO `chat_users`(`userid`, `time`, `room`) VALUES(?,?,?) ON DUPLICATE KEY UPDATE `time`='.$time.', `room`='.$room.'', array($player['id'],$time,$room));
	}


/*
* Sending non-read messages
*/

$arrMsg = array();
$messages = $db -> SelectLimit('SELECT * FROM chat WHERE time >= '.$iPlayerTime.' AND (ownerid=0 OR ownerid='.$player['id'].' OR senderid='.$player['id'].') AND (lang=\''.$player['lang'].'\' OR lang=\'\') AND room = '.$room.' ORDER BY chat.id DESC', 20);

$i = 0;
while(!$messages -> EOF)
{
    $arrMsg[$i] = $messages -> fields;
    $arrMsg[$i]['date'] = date('H:i:s', substr($messages -> fields['time'], 0, 10));
	//$arrMsg[$i]['date'] = date('d m Y\r. G:i:s', substr($messages -> fields['time'], 0, 10));
    if($messages -> fields['ownerid'] != 0)
    {
        $username = $db -> GetRow('SELECT user FROM players WHERE id='.$messages -> fields['ownerid']);
        $arrMsg[$i]['owner'] = $username['user'];
        $username = $db -> GetRow('SELECT gender FROM players WHERE id='.$messages -> fields['senderid']);
        $arrMsg[$i]['gender'] = $username['gender'];
    }
    $messages -> MoveNext();
    $i++;
}

$arrUser = array();
$users = $db -> Execute('SELECT cu.userid, p.user, p.rank, p.tavern_color FROM chat_users cu, players p WHERE cu.room='.$room.' AND cu.time > '.($time - 30).' AND cu.userid = p.id ORDER BY user') or die($db -> ErrorMsg());
while(!$users -> EOF)
{
    $arrUser[] = array(
        'userid' => $users -> fields['userid'],
        'user' => getColoredName($users -> fields['user'], $users -> fields['rank'], $users->fields['tavern_color'])
    );
    $users -> MoveNext();
}
$users -> Close();

$num = $db -> Execute('SELECT COUNT(*) AS c FROM chat WHERE room='.$room.' AND (lang=\''.$player['lang'].'\' OR lang=\'\')') or die($db -> ErrorMsg());
$arrReply = array(
	'msg'   => array_reverse($arrMsg),
    'users' => $arrUser,
    'number' => $num -> fields['c']
);
}
require_once('includes/json.php');
$json =  new Services_JSON();
$smarty -> assign('Reply', $json -> encode($arrReply));

$smarty -> display('chatmsgs.tpl');


?>
