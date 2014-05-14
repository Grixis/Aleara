<?php
 /*
 *   File functions:
 *   Gielda :: Sell - show and seller buyed share
 *
 *   @name                 : geildakup.php
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
$title = "Gielda Alvarska :: Sprzedaj";
require_once("includes/head.php");

/*
* Lista akcji danego gracza
*/
    $objList = $db -> Execute("SELECT * FROM gieldakup WHERE owner=".$player -> id) or die($db -> ErrorMsg()); /* Pobieramy listê kupionych akcji */
    $number = $objList -> RecordCount(); /* Liczymy ile ich jest */
    $smarty -> assign ("Number", $number); /* Smarty */

    if ($number > 0)
    {
         $i = 0;
                while (!$objList -> EOF)
                {
                        $arrid[$i] = $objList -> fields['id'];
                        $arramount[$i] = $objList -> fields['ilosc'];
                        $objList -> MoveNext();
                        $i = $i + 1;
                }
                $objList -> Close();
                
        $smarty -> assign ( array("Id" => $arrid, "Amount" => $arramount)); /* Deklaracja zmiennych smarty */
    }



if (isset ($_GET['action']) && $_GET['action'] == 'sell')
{
   if (!ereg("^[1-9][0-9]*$", $_POST['sztuk']) || !ereg("^[1-9][0-9]*$", $_POST['id']))
   {
        error ("Zapomij o tym!");
   }
   
   /*
   * Sprawdzanie czy gracz nie chce sprzedaæ wiêcej akcji ni¿ posiada
   */
   $objGielda = $db -> Execute("SELECT ilosc, akcja FROM gieldakup WHERE id=".$_POST['id']." AND owner=".$player -> id) or die($db -> ErrorMsg());
   if ($objGielda -> fields['ilosc'] < $_POST['sztuk'])
   {
        error ("Nie mo¿esz tyle sprzedaæ!");
   }
   
   /*
   * Obliczanie ceny sprzedawanych akcji wg. kursy akcji
   */
   $objCost = $db -> Execute("SELECT cost FROM gielda WHERE id=".$objGielda -> fields['akcja']) or die($db -> ErrorMsg());
   $objPay = $objCost -> fields['cost'] * $_POST['sztuk'];
   $objCost -> Close();
   
   /*
   * Sprzeda¿ akcji
   */
   $db -> Execute("UPDATE gielda SET ilosc=ilosc+".$_POST['sztuk']." WHERE id=".$objGielda -> fields['akcja']) or die($db -> ErrorMsg());
   $db -> Execute("UPDATE gieldakup SET ilosc=ilosc-".$_POST['sztuk']." WHERE id=".$_POST['id']." AND owner=".$player -> id) or die($db -> ErrorMsg());
   $db -> Execute("UPDATE players SET credits=credits+".$objPay." WHERE id=".$player -> id) or die($db -> ErrorMsg());
   $objIlosc = $db -> Execute("SELECT ilosc FROM gieldakup WHERE id=".$_POST['id']) or die($db -> ErrorMsg());
   if ($objIlosc -> fields['ilosc'] <= 0)
   {
   $db -> Execute("DELETE FROM gieldakup WHERE id=".$_POST['id']." AND owner=".$player -> id) or die($db -> ErrorMsg());
   }
   $objGielda -> Close();
   error ("Sprzeda³e¶ ".$_POST['sztuk']." akcji!");
}

/*
* Inicjalizacja zmiennych i wyœwietlanie strony
*/
if (!isset($_GET['action']))
{
    $_GET['action'] = '';
}

$smarty -> assign ( array("Location" => $player -> location,
"Action", $_GET['action']));
$smarty -> display ('gieldasell.tpl');

require_once("includes/foot.php");
?>
