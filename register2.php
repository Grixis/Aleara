<?php
/**
 *   File functions:
 *   Register new players
 *
 *   @name                 : register.php                            
 *   @copyright            : (C) 2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.2
 *   @since                : 14.07.2006
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
// $Id: register.php 479 2006-07-14 18:57:16Z thindil $

require_once ('includes/main/base.php');
require_once ('includes/sessions.php');
require_once ('includes/getlang.php');
GetLang ();
GetLoc ('mainpage');
GetLoc ('register');
error_reporting(E_ALL);
RegistrationCloseRoutine ();

if (isset($_GET['uid']) or isset($_COOKIE['fbid']))
{
	$smarty->assign("Facebook", 1);
}

$smarty -> assign(array("Pagetitle" => REGISTER));

$smarty -> assign(array("Lang" => $arrLanguage));
if (isset ($_GET['action']) && $_GET['action'] == 'register') 
{



    if (!$_POST['user'] || !$_POST['email'] || !$_POST['vemail'] || !$_POST['pass'] ) 
    {
        $smarty -> assign ("Error", EMPTY_FIELDS);
        $smarty -> display ('register2.tpl');
        exit;
    }
    
/**
* Email adress validation
*/       
    require_once('includes/verifymail.php');
    if (MailVal($_POST['email'], 2)) 
    {
        $smarty -> assign ("Error", BAD_EMAIL);
        $smarty -> display ('register2.tpl');
        exit;
    }
    require_once('includes/verifypass.php');
    

/**
* Check nick
*/
	if (strlen($_POST['user']) > 15)
	{
        $smarty -> assign ("Error", LONG_NICK);
        $smarty -> display ('register2.tpl');
        exit;
	}

    $strUser = $db -> qstr($_POST['user'], get_magic_quotes_gpc());
    $query = $db -> Execute("SELECT id FROM players WHERE user=".$strUser);
    $dupe1 = $query -> RecordCount();
    $query -> Close();  
    if ($dupe1 > 0) 
    {
        $smarty -> assign ("Error", BAD_NICK);
        $smarty -> display ('register2.tpl');
        exit;
    }



/**
* Check mail adress in database
*/   
  
   $strEmail = $db -> qstr($_POST['email'], get_magic_quotes_gpc());
   $query = $db -> Execute("SELECT id FROM players WHERE email=".$strEmail);
   $dupe2 = $query -> RecordCount();
   $query -> Close();


    $NumberActSameMail = 0;
    $ListActSameMail = $db->Execute ("SELECT id FROM aktywacja WHERE email=".$strEmail);
    if (!empty($ListActSameMail))
	{
    	$NumberActSameMail = $ListActSameMail -> RecordCount();
        $ListActSameMail -> Close();
	}


   if ($dupe2 > 0 or $NumberActSameMail > 0)
   {
       $smarty -> assign ("Error", EMAIL_HAVE);
       $smarty -> display ('register2.tpl');
       exit;
   }

/**
* Check email adress writed on registration
*/ 
    if ($_POST['email'] != $_POST['vemail']) 
    {
        $smarty -> assign ("Error", EMAIL_MISS);
        $smarty -> display ('register2.tpl');
        exit;
    }
    
    $_POST['lang'] = strip_tags($_POST['lang']);
    if (!in_array($_POST['lang'], $arrLanguage))
    {
        exit;
    }
    $_POST['user'] = strip_tags($_POST['user']);
    $strUser = $db -> qstr($_POST['user'], get_magic_quotes_gpc());
    $_POST['email'] = strip_tags($_POST['email']);
    $strEmail = $db -> qstr($_POST['email'], get_magic_quotes_gpc());
    $_POST['pass'] = strip_tags($_POST['pass']);
    $aktw = rand(1,10000000);
    $data = date("y-m-d");
    $strDate = $db -> DBDate($data);
    $ip = $HTTP_SERVER_VARS['REMOTE_ADDR'];
    $message = WELCOME_TO." ".$gamename.YOUR_LINK."  ".$gameadress.ACTIV_LINK.$aktw.NICE_PLAYING." ".$gamename.". ".$adminname;
    $adress = $_POST['email'];
    $subject = SUBJECT." ".$gamename;
    require_once('mailer/mailerconfig.php');


    $strPass = MD5($_POST['pass']);
    $db -> Execute("INSERT INTO players (user, email, pass) VALUES(".$strUser.", ".$strEmail.", '".$strPass."' )") or die($db -> ErrorMsg());
	

    /**
    * Players they`ve ever been registered there
    */ 
    include("counter/usersever.php");
    $plik=fopen("counter/usersever.php","w+");
    fputs($plik,'<?php $ilosc='.(++$ilosc).' ?>');
    fclose($plik);
}
if (isset ($_GET['action']) && $_GET['action'] == 'fb') 
{
	//Pobierz id użytkownika z ciastka
	$uid=$_COOKIE['fbid'];
	if (!$uid)
	{
		$smarty -> assign ("Error", "Błąd podczas pobierania ID użytkownika.<br>Być może twoja sesja wygasła<br>lub twoja przeglądarka nie obsługuje ciasteczek");
        $smarty -> display ('register2.tpl');
        exit;
	}
	$check=$db->Execute("SELECT id FROM players WHERE fb-id='".$uid."'");
	if ($check->fields['id'])
	{
		$smarty -> assign ("Error", "Masz już konto w grze");
        $smarty -> display ('register2.tpl');
        exit;
	}
	//Ponieważ gracz z FB nie będzie się logował za pomocą loginu i hasła a te pola są wymagane to robimy sieczkę z dużej losowej liczby
	$mail=MD5(rand(1,100000000));
	$pass=MD5(rand(1,100000000));
	
	//Sprawdzamy nick
	if (strlen($_POST['user']) > 15)
	{
        $smarty -> assign ("Error", LONG_NICK);
        $smarty -> display ('register2.tpl');
        exit;
	}

    $strUser = $db -> qstr($_POST['user'], get_magic_quotes_gpc());
    $query = $db -> Execute("SELECT id FROM players WHERE user=".$strUser);
    $dupe1 = $query -> RecordCount();
    $query -> Close();  
    if ($dupe1 > 0) 
    {
        $smarty -> assign ("Error", BAD_NICK);
        $smarty -> display ('register2.tpl');
        exit;
    }
	//Zapisujemy wszystko do bazy
	$db -> Execute("INSERT INTO players (user, email, pass,`fb-id`) VALUES(".$strUser.", '".$mail."', '".$pass."','".$uid."' )") or die($db -> ErrorMsg());
}

if (isset ($_GET['action']) && $_GET['action'] == 'merge') 
{
		//sprawdzamy czy konto istnieje. Jeśli tak, podpinamy fb-id, jeśli nie to wywalamy błąd.
		$mail=$_POST['email'];
		$pass=MD5($_POST['pass']);
		
		if (!$mail || !$_POST['pass'])
		{
			$smarty -> assign ("Error", "Wypelnij wszystkie pola.");
			$smarty -> display ('register2.tpl');
			exit;
		}
		$check=$db->Execute("SELECT id FROM players WHERE fb-id='".$uid."'");
		if ($check->fields['id'])
		{
			$smarty -> assign ("Error", "Masz już konto w grze");
			$smarty -> display ('register2.tpl');
			exit;
		}
		$test=$db->Execute("SELECT `id` FROM `players` WHERE email='".$mail."' AND pass='".$pass."' ");
		$hit=$test->fields['id'];
		
		if (!$hit)
		{
			$smarty -> assign ("Error", "Nie znaleziono takiego konta.<br> Sprawdź czy dane logowania są poprawne.");
			$smarty -> display ('register2.tpl');
			exit;
		}
		else
		{
			$uid=$_COOKIE['fbid'];
			if (!$uid)
			{
				$smarty -> assign ("Error", "Błąd podczas pobierania ID użytkownika.<br>Być może twoja sesja wygasła<br>lub twoja przeglądarka nie obsługuje ciasteczek");
				$smarty -> display ('register2.tpl');
				exit;
			}
			$db->Execute("UPDATE players SET `fb-id`='".$uid."' WHERE `id`=".$hit);
		}
}

/**
* Initialization of variable
*/
if (!isset($_GET['action'])) 
{
    $_GET['action'] = '';
}

/**
* Assign variables and display page
*/
$smarty -> assign(array("Action" => $_GET['action'], "Meta" => ''));
$smarty -> display('register2.tpl');

$db -> Close();
?>
