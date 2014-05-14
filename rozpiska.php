<?php
/**
 *   File functions:
 *   Player statistics and general informations about account
 *
 *   @name                 : stats.php                            
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : mori <ziniquel@users.sourceforge.net>
 *   @version              : 1.2
 *   @since                : 12.09.2006
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
// $Id: stats.php 566 2006-09-13 09:31:08Z thindil $

$title = "Statystyki";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz siê w Alearze! <a href=travel.php>(Wróæ)</a>');
}
require_once("languages/".$player -> lang."/stats.php");

/**
* Assign variables to template
*/

/**
* Assign variable and display page
*/
$smarty -> assign ("Action", $_GET['action']);
$smarty -> display ('rozpiska.tpl');

require_once("includes/foot.php");
?>
