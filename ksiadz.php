<?php

/***************************************************************************
 *                               addnews.php
 *                            -------------------
 *   copyright            : (C) 2004 Vallheru Team based on Gamers-Fusion ver 2.5
 *   email                : webmaster@uc.h4c.pl
 *
 ***************************************************************************/

/***************************************************************************
 *
 *       This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with this program; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ***************************************************************************/ 

$title = "Panel Księdza"; 
require_once("includes/head.php");

if ($player -> rank != "Ksiądz" and $player -> rank !="Admin" and $player -> rank !="Staff" and $player-> rank != "Namiestnik") {
	error ("Nie jesteś kapłanem!");
}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
// wysyłanie wiadomości do graczy
if (isset ($_GET['view']) && $_GET['view'] == 'poczta') {
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
	    $db->Execute("insert into mail (sender,senderid,owner,subject,body) values('Josabelle','28',".$odbio['id'].",'".$_POST['subject']."','".$_POST['body']."')") or error("Nie mogę wysłać listu.");
	    $db->Execute("insert into log (owner, log) values(".$odbio['id'].", '<b>kapłanka: Josabelle</b> wysłał ci wiadomość.')") or error("Nie mogę dodać do dziennika.");
	    $gracze = $gracze+1;
	}
	error ("Wysłałeś wiadomość do ".$gracze." graczy.");
    }
}


// pol±czenie graczy - śluby

if (isset ($_GET['view']) && $_GET['view'] == 'pary') {
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
            

/// tutaj jeszcze może być stan cywilny ale jest wówczas parę zmian w plikach viev.php,viev.tpl,stt.php, stat.tpl i dodatkowe pole w tabeli `players` na końcu o nazwie `stan` varchar 20 
         mysql_query("update players set stan=' Związek z ID:".$_POST['prisonerp']."' where id=".$_POST['prisoner']);
		   mysql_query("update players set stan=' Związek z ID:".$_POST['prisoner']."' where id=".$_POST['prisonerp']);
 
         mysql_query("update players set stan=' Związek z ID:".$_POST['prisonerp']."' where id=".$_POST['prisoner']);
		   mysql_query("update players set stan=' Związek z ID:".$_POST['prisoner']."' where id=".$_POST['prisonerp']);           



mysql_query("update players set max_energy=max_energy+2 where id=".$_POST['prisoner']);
			mysql_query("update players set max_energy=max_energy+2 where id=".$_POST['prisonerp']);
			mysql_query("insert into log (owner, log, czas) values(".$_POST['prisoner'].",'Poślubiłeś(aś) gracza o ID: ".$_POST['prisonerp'].", z powodu ".$_POST['verdict'].". Możesz się z nim rozwieść za: ".$_POST['cost'].". Połączył was: ".$player -> user." ID: ".$player -> id."','".$newdate."')");
            mysql_query("insert into log (owner, log, czas) values(".$_POST['prisonerp'].",'Poślubiłeś(aś) gracza o ID:".$_POST['prisoner'].", z powodu ".$_POST['verdict'].". Możesz się z ni± rozwieść za: ".$_POST['cost'].". Połączył was: ".$player -> user." ID: ".$player -> id."','".$newdate."')");
			error ("Kobieta o ID: ".$_POST['prisoner']." Poślubia Mężczyznę o ID: ".$_POST['prisonerp']." z powodu: ".$_POST['verdict'].". Mogą się rozwieść za:".$_POST['cost']);
        }
    }
}

$smarty -> assign (array ("View" => $_GET['view'], "Step" => $_GET['step']));
$smarty -> display('ksiadz.tpl');

require_once("includes/foot.php");
?>
