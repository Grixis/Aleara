<?php
/**
 *   Funkcje pliku:
 *   Podróże na wyspy złota i mithrilu
 *
 *   @name                 : port.php                            
 *   @copyright            : (C) 2009-2010 Trodiangame Team based on Vallheru
 *   @author               : Nommo (nommo@trodiangame.pl)
 *   @version              : 1.3 beta
 *   @since                : 8.01.2009
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
// 

$title1="Port Pod Zgnitą Łajbą";
require_once("includes/head.php");
require_once ("includes/funkcje.php");
require_once("includes/turnfight.php");
if ($player -> location == 'Lochy') {
 error("Zapomnij o tym!");
}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
// przypisanie zmiennych
$smarty -> assign(array("Portal" => '', "Maps" => ''));


if (isset ($_GET['akcja']) && $_GET['akcja'] == 'zm') {
    if ($player -> credits < 100000) {
     error ("Nie masz tyle złota!");
    }
	

	    $db -> Execute("UPDATE players SET miejsce='Podróż' WHERE id=".$player -> id);
   $fight = $db -> Execute("SELECT fight FROM players WHERE id=".$player -> id);
    if (!$fight -> fields['fight']) {
          $db -> Execute("UPDATE players SET miejsce='Wyspa Zlota' WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET credits=credits-100000 WHERE id=".$player -> id);
    error ("Dotarłeś na Wyspę Złota. Wejdź <a href=wyspazlota.php>tutaj</a> aby zobaczyć co ciebie czeka.");
    }
}
	
	
	
	
	
	
	
	
	
	
	
	
   
        

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'mz') {
    if ($player -> credits < 50000) {
     error ("Nie masz tyle złota!");
    }

    $db -> Execute("UPDATE players SET miejsce='Podróż' WHERE id=".$player -> id);
    $fight = $db -> Execute("SELECT fight FROM players WHERE id=".$player -> id);
    if (!$fight -> fields['fight']) {
        $db -> Execute("UPDATE players SET miejsce='Wyspa Mithrilu' WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET credits=credits-50000 WHERE id=".$player -> id);
        error ("Dotarłeś na Wyspę Mithrilu. Wejdź <a href=wyspamithrilu.php>tutaj</a> aby zobaczyć co ciebie czeka.");
    }
}

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'powrot') {
    if ($player -> credits < 1000) {
     error ("Nie masz tyle pieniędzy!");
    }

    $db -> Execute("UPDATE players SET miejsce='Podróż' WHERE id=".$player -> id);
    $fight = $db -> Execute("SELECT fight FROM players WHERE id=".$player -> id);
    if (!$fight -> fields['fight']) {
        $db -> Execute("UPDATE players SET miejsce='Altara' WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET credits=credits-1000 WHERE id=".$player -> id);
        error ("Dotarłeś do Aleary. Wejdź <a href=city.php>tutaj</a> aby zobaczyć co ciebie czeka.");
    }
}

// inicjalizacja zmiennej
if (!isset($_GET['akcja'])) {
    $_GET['akcja'] = '';
}

// przypisanie zmiennych oraz wyświetlenie strony
$smarty -> assign ( array("Action" => $_GET['akcja'], "Location" => $player -> location));
$smarty -> display('port.tpl');

require_once("includes/foot.php"); 
?>
