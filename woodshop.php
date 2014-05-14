<?php
/***************************************************************************
 *                               woodshop.php based on pshop.php
 *                            -------------------
 *   copyright            : (C) 2005 by Korson
 *   email                : den4045@o2.pl
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

$title = "Sklep z drzewkami";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
if ($player -> location != 'Altara') {
	error ("Zapomnij o tym");
}


if (!isset ($_GET['action'])) {

    $smarty -> display ('woodshop.tpl');
} else {
    $cost = ($_POST['plat'] * 1000);
    if ($cost > $player -> credits || $_POST['plat'] <= 0 || !ereg("^[1-9][0-9]*$", $_POST['plat'])) {
	error ("Nie stać cię! (<a href=woodshop.php>wróć</a>)");
    } else {
	$db -> Execute("UPDATE players SET credits=credits-".$cost." WHERE id=".$player -> id);
	$db -> Execute("UPDATE players SET drzewka=drzewka+".$_POST['plat']." WHERE id=".$player -> id);
	error ("Kupiłeś <b>".$_POST['plat']."</b> sztuk drzewek");
    }
}


require_once("includes/foot.php");
?>
