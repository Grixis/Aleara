<?php
/***************************************************************************
 *                               hotel.php
 *                            -------------------
 *   author            : Korson <den4045@o2.pl>
 *   modified by                : Lenwe Tasartir <admin@bruinena.net>
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
$title = 'Hotel Ikar';
require_once('includes/head.php');
if ($player -> location != 'Altara') error ('Zapomnij o tym');
// wstaw zamiast 1200, 1800 i 2500 swoje ceny za pokoje
$cost = array(($player -> level * 1200), ($player -> level * 1800), ($player -> level * 2500));

if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}

if(isset ($_GET['pokoj']) && isset ($_GET['step']) && $_GET['step'] == 'wybierz'){

if ($_GET['pokoj'] == 'maly')
{
     if ($player -> credits < $cost[0]) error ('Nie masz tyle pieniêdzy!');
	$db -> Execute('UPDATE players SET credits=credits-'.$cost[0].', energy=energy+1 WHERE id='.$player -> id);
       $db -> Execute('UPDATE skarbiec set credits=credits+'.$cost[0]);
}

if ($_GET['pokoj'] == 'sredni')
{
     if ($player -> credits < $cost[1]) error ('Nie masz tyle pieniêdzy!');
	$db -> Execute('UPDATE players SET credits=credits-'.$cost[1].', energy=energy+2 WHERE id='.$player -> id);
       $db -> Execute('UPDATE skarbiec set credits=credits+'.$cost[1]);
}

if ($_GET['pokoj'] == 'duzy') {
     if ($player -> credits < $cost[2]) error ('Nie masz tyle pieniêdzy!');
	$db -> Execute('UPDATE players SET credits=credits-'.$cost[2].', energy=energy+1 WHERE id='.$player -> id);
       $db -> Execute('UPDATE skarbiec set credits=credits+'.$cost[2]);
}
}else{
if(!isset($_GET['pokoj'])) $_GET['pokoj'] = '';
    $_GET['step'] = '';
}

$smarty -> assign (array('Pokoj' => $_GET['pokoj'], 'Step' => $_GET['step']));
$smarty -> display ('hotel.tpl');
require_once('includes/foot.php'); 
?>
