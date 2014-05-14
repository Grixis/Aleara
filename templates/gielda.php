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

$title = "Gie³da Alvarska"; /* Tytu³ strony */
require_once("includes/head.php"); /*£adujemy head.php */

/*
* Lista dostêpnych akcji
*/
    $objList = mysql_query("SELECT id, name, cost, ilosc FROM gielda ORDER BY id ASC") or die($db -> ErrorMsg()); /* Pobieramy listê akcji */
    $intNumbers = mysql_num_rows($objList); /* czytam iloœæ rekordów */
    $smarty -> assign ("Numbers", $intNumbers); /* Deklarujemy zmienn¹ Numbers w Smarty */
    if ($intNumbers >= 1) /* Jeœli jest jakiœ wpis w akcjach */
    {
        $arrid = array(); /* Deklaracje zmiennych tablic */
        $arrname = array(); /* Deklaracje zmiennych tablic */
        $arrcost = array(); /* Deklaracje zmiennych tablic */
        $arramount = array(); /* Deklaracje zmiennych tablic */
        $i = 0; /* Deklaracje zmiennej */
                while ($strList = mysql_fetch_array($objList)) /* Pêtla while */
                {
                        $arrid[$i] = $strList['id']; /* Przypisanie wartoœci */
                        $arrname[$i] = $strList['name']; /* Przypisanie wartoœci */
                        $arrcost[$i] = $strList['cost']; /* Przypisanie wartoœci */
                        $arramount[$i] = $strList['ilosc']; /* Przypisanie wartoœci */
                        $i = $i + 1; /* Przypisanie wartoœci */
                }
                
        $smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Cost" => $arrcost, "Amount" => $arramount)); /* Przypisanie wartoœi do zmiennych Smarty */
    }



if (isset ($_GET['action']) && $_GET['action'] == 'buy') /* Jesli postanowiliœmy sprzedaæ*/
{
   if (!ereg("^[1-9][0-9]*$", $_POST['sztuk']) || !ereg("^[1-9][0-9]*$", $_POST['id'])) /* Sprawdzamy czy wpisano ID z cyfr*/
   {
        error ("Zapomij o tym!"); /* Jak nie to poinformuj o b³êdzie */
   }
    
    /*
    * Zabezpieczenie aby gracz nie kupi³ wiêcej ni¿ jest akcji
    */
   $objGielda = $db -> Execute("SELECT * FROM gielda WHERE id=".$_POST['id']) or die($db -> ErrorMsg()); /* Pobieranie iloœci akcji*/
   if ($objGielda -> fields['ilosc'] < $_POST['sztuk']) /* Jeœli gracz kupuje wiêcej ni¿ jest dost. */
   {
   error ("Nie mo¿esz tyle kupiæ!"); /* Wywal mu b³¹d */
   }
   $objGielda -> Close(); /* Zamknij */

   /*
   * Obliczanie ceny
   */
   $objCost = $db -> Execute("SELECT cost FROM gielda WHERE id=".$_POST['id']) or die($db -> ErrorMsg()); /* Pobier koszt akcji */
   $objPay = $objCost -> fields['cost'] * $_POST['sztuk']; /* Oblicz cenê */
   $objCost -> Close(); /* Zamknij */
   
   /*
   * Sprawdzanie czy gracza staæ na zakup
   */
   if ($player -> credits < $objPay) /* Jeœli gracz ma mniej kasy ni¿ jest wymagane */
   {
       error ("Nie masz wystarczaj¹co pieniêdzy!"); /* Jak tak to b³¹d */
   }
   
   /*
   * Zapytania
   */
   $db -> Execute("UPDATE gielda SET ilosc=ilosc-".$_POST['sztuk']." WHERE id=".$_POST['id']) or die($db -> ErrorMsg()); /*Zmniejsz iloœæ akcji  */

   $objTemp = $db -> Execute("SELECT id FROM gieldakup WHERE akcja=".$_POST['id']." AND owner=".$player -> id) or die($db -> ErrorMsg()); /* Pobranie ID jak gracz ju¿ kupi³ */
    /*
    * Sprawdzanie czy dodaæ nowe rekordy czy zaktualizowaæ stare wzglêdem $objTemp
    */
    if (!$objTemp -> fields['id'])
    { /*Jeœli nie ma ID w bazie */
         $db -> Execute("INSERT INTO gieldakup (owner, akcja, ilosc) VALUES('".$player -> id."','".$_POST['id']."','".$_POST['sztuk']."')") or die($db -> ErrorMsg()); /*Dodaj rekord */
    }
         else
    { /* Albo */
         $db -> Execute("UPDATE gieldakup SET ilosc=ilosc+".$_POST['sztuk']." WHERE owner=".$player -> id." AND id=".$_POST['id']) or die($db -> ErrorMsg()); /* Zaktualizuj rekord */
    }
    $objTemp -> Close(); /* Zamknij */
    

   $db -> Execute("UPDATE players SET credits=credits-".$objPay." WHERE id=".$player -> id) or die($db -> ErrorMsg());    /* Zabieranie kasy */
   error ("Kupi³e¶ ".$_POST['sztuk']." akcji!"); /* Wiadomoœæ koñcowa - wynik kupna akcji */
}

/*
* Inicjalizacja zmiennych i wyœwietlanie strony
*/
if (!isset($_GET['action'])) /* Jeœli nie ma $_GET['actiojn']*/
{
    $_GET['action'] = ''; /* to $_GET['action'] jest równa nic*/
}

$smarty -> assign ( array("Location" => $player -> location,
"Action", $_GET['action'])); /* Deklarujemy potrzebne zmienne w smarty */
$smarty -> display ('gielda.tpl'); /* Wyœwietl szablon */

require_once("includes/foot.php"); /* Za³aduj praw¹ i doln¹ czêœæ strony */
?>
