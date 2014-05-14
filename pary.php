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

$title = "Kaplica Ślubna";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}

if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}


require_once('languages/'.$player -> lang.'/chat.php');
if (!isset($_GET['room'])) $_GET['room'] = 'kaplica';
$smarty -> assign(array(
				'Room' => $_GET['room'],
				'Playerid' => $player -> id,
				'Gender' => $player -> gender
				));



$test = mysql_query("SELECT id, user FROM players WHERE rank='Ksiądz'");
$kaplan=mysql_fetch_array($test);

$kap_string="<a href='view.php?view=".$kaplan['id'] ."'>".$kaplan['user']."</a>";
$smarty -> assign ("Kaplan", $kap_string);


if ($player -> id != $view -> id) {
    $smarty -> assign ("Mail", "<li><a href=mail.php?view=write&to=1>Król RaZoR (udziela ślubów)</a></li>");
}   

if ($player -> location == 'Altara') {
    $smarty -> display ('pary.tpl');
    $prisoner = mysql_query("select * from pary order by id asc");
    $number = mysql_num_rows($prisoner);
    $smarty -> assign ("Number", $number);
    if ($number > 0) {
        $arrid = array();
        $arrname = array();
        $arrdate = array();
        $arrverdict = array();
        $arrjailid = array();
        $arrcost = array();
        $i = 0;
        while ($pary = mysql_fetch_array($prisoner)) {
            $pname = mysql_fetch_array(mysql_query("select user from players where id=".$pary['prisoner']));
            $pnamep = mysql_fetch_array(mysql_query("select user from players where id=".$pary['prisonerp']));
			$arrid[$i] = $pary['prisoner'];
			$arridp[$i] = $pary['prisonerp'];
            $arrname[$i] = $pname['user'];
			$arrnamep[$i] = $pnamep['user'];
            $arrdate[$i] = $pary['data'];
            $arrverdict[$i] = $pary['verdict'];
            $arrjailid[$i] = $pary['id'];
            $arrcost[$i] = $pary['cost'];
            $i = $i + 1;
        }
        $smarty -> assign ( array("Id" => $arrid, "Idp" => $arridp, "Name" => $arrname, "Namep" => $arrnamep, "Date" => $arrdate, "Verdict" => $arrverdict, "Jailid" => $arrjailid, "Cost" => $arrcost));
    }
}

if (isset ($_GET['prisoner'])) {
    if (!ereg("^[1-9][0-9]*$", $_GET['prisoner'])) {
        error ("Zapomnij o tym!");
    }
    $prisoner = mysql_fetch_array(mysql_query("select * from pary where id=".$_GET['prisoner']));
    
	if (empty ($prisoner['id'])) {
        error ("Nie ma takiej pary!");
    }
    if ($prisoner['cost'] > $player -> credits) {
        error ("Nie masz tylu sztuk złota przy sobie!");
    }
    if ($player -> id != $prisoner['prisoner'] && $player -> id != $prisoner['prisonerp'] && $player -> rank !="Ksiądz") {
        error ("Nie możesz zapłacić za nie swój rozwód!");
    }
	
    $pname = mysql_fetch_array(mysql_query("select user from players where id=".$prisoner['prisoner']));
    $pnamep = mysql_fetch_array(mysql_query("select user from players where id=".$prisoner['prisonerp']));
	mysql_query("update players set stan='Wolny' where id=".$prisoner['prisoner']);
    mysql_query("update players set stan='Wolny' where id=".$prisoner['prisonerp']);
	mysql_query("update players set max_energy=max_energy-2 where id=".$prisoner['prisoner']);
	mysql_query("update players set max_energy=max_energy-2 where id=".$prisoner['prisonerp']);
	mysql_query("delete from pary where id=".$prisoner['id']);
    mysql_query("update players set credits=credits-".$prisoner['cost']." where id=".$player -> id);
    mysql_query("insert into log (owner, log, czas) values(".$prisoner['prisoner'].",'Gracz <b>".$player -> user." ID:".$player -> id."</b> zapłacił za Twój rozwód.','".$newdate."')");
    mysql_query("insert into log (owner, log, czas) values(".$prisoner['prisonerp'].",'Gracz <b>".$player -> user." ID:".$player -> id."</b> zapłacił za Twój rozwód.','".$newdate."')");
	error ("Zapłaciłeś ".$prisoner['cost']." sztuk złota za rozwód pary: ".$pname['user']." ID: ".$prisoner['prisoner']." z ".$pnamep['user']." ID: ".$prisoner['prisonerp']);

}
$smarty -> assign ( array("Location" => $player -> location));
$smarty -> display ('pary.tpl');

require_once("includes/foot.php");
?>