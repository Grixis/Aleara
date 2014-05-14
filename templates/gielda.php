<?php
 /*
 *   File functions:
 *   Gielda - show and buying share
 *
 *   @name                 : geilda.php
 *   @copyright            : (C) 2006 Marcin Bratek
 *   @author               : Marcin Bratek <m.bratek@gmail.com>
 *   @version              : 0.4 BETA
 *   @since                : 22.03.2006
 *
 */

/*
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
*/

$title = "Gie�da Alvarska"; /* Tytu� strony */
require_once("includes/head.php"); /*�adujemy head.php */

/*
* Lista dost�pnych akcji
*/
    $objList = mysql_query("SELECT id, name, cost, ilosc FROM gielda ORDER BY id ASC") or die($db -> ErrorMsg()); /* Pobieramy list� akcji */
    $intNumbers = mysql_num_rows($objList); /* czytam ilo�� rekord�w */
    $smarty -> assign ("Numbers", $intNumbers); /* Deklarujemy zmienn� Numbers w Smarty */
    if ($intNumbers >= 1) /* Je�li jest jaki� wpis w akcjach */
    {
        $arrid = array(); /* Deklaracje zmiennych tablic */
        $arrname = array(); /* Deklaracje zmiennych tablic */
        $arrcost = array(); /* Deklaracje zmiennych tablic */
        $arramount = array(); /* Deklaracje zmiennych tablic */
        $i = 0; /* Deklaracje zmiennej */
                while ($strList = mysql_fetch_array($objList)) /* P�tla while */
                {
                        $arrid[$i] = $strList['id']; /* Przypisanie warto�ci */
                        $arrname[$i] = $strList['name']; /* Przypisanie warto�ci */
                        $arrcost[$i] = $strList['cost']; /* Przypisanie warto�ci */
                        $arramount[$i] = $strList['ilosc']; /* Przypisanie warto�ci */
                        $i = $i + 1; /* Przypisanie warto�ci */
                }
                
        $smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Cost" => $arrcost, "Amount" => $arramount)); /* Przypisanie warto�i do zmiennych Smarty */
    }



if (isset ($_GET['action']) && $_GET['action'] == 'buy') /* Jesli postanowili�my sprzeda�*/
{
   if (!ereg("^[1-9][0-9]*$", $_POST['sztuk']) || !ereg("^[1-9][0-9]*$", $_POST['id'])) /* Sprawdzamy czy wpisano ID z cyfr*/
   {
        error ("Zapomij o tym!"); /* Jak nie to poinformuj o b��dzie */
   }
    
    /*
    * Zabezpieczenie aby gracz nie kupi� wi�cej ni� jest akcji
    */
   $objGielda = $db -> Execute("SELECT * FROM gielda WHERE id=".$_POST['id']) or die($db -> ErrorMsg()); /* Pobieranie ilo�ci akcji*/
   if ($objGielda -> fields['ilosc'] < $_POST['sztuk']) /* Je�li gracz kupuje wi�cej ni� jest dost. */
   {
   error ("Nie mo�esz tyle kupi�!"); /* Wywal mu b��d */
   }
   $objGielda -> Close(); /* Zamknij */

   /*
   * Obliczanie ceny
   */
   $objCost = $db -> Execute("SELECT cost FROM gielda WHERE id=".$_POST['id']) or die($db -> ErrorMsg()); /* Pobier koszt akcji */
   $objPay = $objCost -> fields['cost'] * $_POST['sztuk']; /* Oblicz cen� */
   $objCost -> Close(); /* Zamknij */
   
   /*
   * Sprawdzanie czy gracza sta� na zakup
   */
   if ($player -> credits < $objPay) /* Je�li gracz ma mniej kasy ni� jest wymagane */
   {
       error ("Nie masz wystarczaj�co pieni�dzy!"); /* Jak tak to b��d */
   }
   
   /*
   * Zapytania
   */
   $db -> Execute("UPDATE gielda SET ilosc=ilosc-".$_POST['sztuk']." WHERE id=".$_POST['id']) or die($db -> ErrorMsg()); /*Zmniejsz ilo�� akcji  */

   $objTemp = $db -> Execute("SELECT id FROM gieldakup WHERE akcja=".$_POST['id']." AND owner=".$player -> id) or die($db -> ErrorMsg()); /* Pobranie ID jak gracz ju� kupi� */
    /*
    * Sprawdzanie czy doda� nowe rekordy czy zaktualizowa� stare wzgl�dem $objTemp
    */
    if (!$objTemp -> fields['id'])
    { /*Je�li nie ma ID w bazie */
         $db -> Execute("INSERT INTO gieldakup (owner, akcja, ilosc) VALUES('".$player -> id."','".$_POST['id']."','".$_POST['sztuk']."')") or die($db -> ErrorMsg()); /*Dodaj rekord */
    }
         else
    { /* Albo */
         $db -> Execute("UPDATE gieldakup SET ilosc=ilosc+".$_POST['sztuk']." WHERE owner=".$player -> id." AND id=".$_POST['id']) or die($db -> ErrorMsg()); /* Zaktualizuj rekord */
    }
    $objTemp -> Close(); /* Zamknij */
    

   $db -> Execute("UPDATE players SET credits=credits-".$objPay." WHERE id=".$player -> id) or die($db -> ErrorMsg());    /* Zabieranie kasy */
   error ("Kupi�e� ".$_POST['sztuk']." akcji!"); /* Wiadomo�� ko�cowa - wynik kupna akcji */
}

/*
* Inicjalizacja zmiennych i wy�wietlanie strony
*/
if (!isset($_GET['action'])) /* Je�li nie ma $_GET['actiojn']*/
{
    $_GET['action'] = ''; /* to $_GET['action'] jest r�wna nic*/
}

$smarty -> assign ( array("Location" => $player -> location,
"Action", $_GET['action'])); /* Deklarujemy potrzebne zmienne w smarty */
$smarty -> display ('gielda.tpl'); /* Wy�wietl szablon */

require_once("includes/foot.php"); /* Za�aduj praw� i doln� cz�� strony */
?>
