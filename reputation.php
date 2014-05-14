<?php
/**
 *   File functions:
 *   Reputation preview page.
 *
 *   @name                 : help.php                            
 *   @copyright            : 
 *   @author               : albitos.snape@gmail.com
 *   @version              : 1.0
 *   @since                : 03.09.2007
 *
 */

//
//
//       This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; either version 2 of the License, or
//   (aty our option) any later version.
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
// 

$title = "Reputacja";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
require_once("languages/".$player -> lang."/reputation.php");


if(!isset($_GET['id']) || empty($_GET['id']))
{
    $aTop = $db -> getAll('SELECT sum(reputation.points ) as points , players.user, reputation.player_id
                            FROM reputation
                            LEFT JOIN players ON players.id = reputation.player_id
                            GROUP BY reputation.player_id ORDER BY points DESC');
    
    $smarty -> assign('Top', $aTop);
}
else
{
    $aData = $db -> getAll('SELECT * FROM reputation WHERE player_id = '.(int)$_GET['id']);
    $smarty -> assign('id', (int)$_GET['id']);    
    $smarty -> assign('Reps', $aData);
	
	
}
$data = $db-> Execute('SELECT * FROM murgrabia ORDER BY turn DESC LIMIT 1');
	if (!$data ->fields['id'])
	{
		$message="W chwili obecnej konkurs jeszcze się nie rozpoczął";
	}
	else
	{
	$date=date('Y-m-d');
	$dateend= $data -> fields['end_date'];
	$datestart=$data -> fields['start_date'];

	$datenow=date_create($date);
	$date1=date_create($datestart);
	$date2=date_create($dateend);
	$interval= date_diff($datenow, $date2, true);
	if (date_timestamp_get($datenow) < date_timestamp_get($date1) or date_timestamp_get($datenow) > date_timestamp_get($date2))
	{
		if (date_timestamp_get($datenow) < date_timestamp_get($date1))
		{
			$message='Tura '.$data->fields['turn'].' jeszcze się nie zaczęła. Data rozpoczęcia: '.$datestart;
		}
		if (date_timestamp_get($datenow) > date_timestamp_get($date2))
		{
			$message='Tura '.$data->fields['turn'].' została zakończona ';
		}
	}
	else
	{
		$message='Trwa tura '.$data->fields['turn'].'. Data zakończenia ustalona na: '.$dateend.' ( Pozostało '.$interval->format('%a dni').')';
	}
	}
	$temp=$db->Execute("SELECT id, user FROM players WHERE rank='Murgrabia' AND NOT user='Murgrabia' LIMIT 1");
	if (!$temp->fields['id'])
	{
		$mur="Murgrabia nie został jeszcze wybrany";
	}
	else
	{
		$mur="Aktualnym murgrabią w krainie jest <a href=\"view.php?view=".$temp->fields['id']."\">".$temp->fields['user']."</a>";
	}
	$smarty->assign('Mess', $message);
	$smarty->assign('Murinfo', $mur);
	
$smarty -> display('reputation.tpl');
require_once("includes/foot.php");
?>
