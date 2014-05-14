<?php

$title = "Gielda :: Sprzedaj";
require_once("includes/head.php");
$test = $db->Execute("SELECT podklasa FROM players WHERE id=".$player->id);
$podklasa=$test->fields['podklasa'];
	if ($podklasa != "Akcjonariusz")
	{
		error("Nie jesteś akcjonariuszem!");
	}
	if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
    $objList = $db -> Execute("SELECT * FROM gieldakup WHERE owner=".$player -> id) or die($db -> ErrorMsg()); /* Pobieramy listę kupionych akcji */
    $number = $objList -> RecordCount(); /* Liczymy ile ich jest */
    $smarty -> assign ("Number", $number); /* Smarty */

    if ($number > 0)
    {
         $i = 0;
                while (!$objList -> EOF)
                {
                        $arrakcja[$i] = $objList -> fields['akcja'];
                        $arramount[$i] = $objList -> fields['ilosc'];
                        $objList -> MoveNext();
                        $i = $i + 1;
                }
                
                
        $smarty -> assign ( array("akcja" => $arrakcja, "Amount" => $arramount)); /* Deklaracja zmiennych smarty */
    }



if (isset ($_GET['action']) && $_GET['action'] == 'sell')
{
   if (!ereg("^[1-9][0-9]*$", $_POST['sztuk']) || !ereg("^[1-9][0-9]*$", $_POST['id']))
   {
      
   }
   
   /*
   * Sprawdzanie czy gracz nie chce sprzedać więcej akcji niż posiada
   */
   $objGielda = $db -> Execute("SELECT ilosc, akcja FROM gieldakup WHERE akcja=".$_POST['id']." AND owner=".$player -> id) or die($db -> ErrorMsg());
   if ($objGielda -> fields['ilosc'] < $_POST['sztuk'])
   {
        error ("Nie możesz tyle sprzedać!");
   }
   
   /*
   * Obliczanie ceny sprzedawanych akcji wg. kursy akcji
   */
   $objCost = $db -> Execute("SELECT cost FROM gielda WHERE id=".$objGielda -> fields['akcja']) or die($db -> ErrorMsg());
   $objPay = $objCost -> fields['cost'] * $_POST['sztuk'] * 2;
   $objCost -> Close();
   
   /*
   * Sprzedaż akcji
   */
   $db -> Execute("UPDATE gielda SET ilosc=ilosc+".$_POST['sztuk']." WHERE id=".$_POST['id']."") or die($db -> ErrorMsg());
   $db -> Execute("UPDATE gieldakup SET ilosc=ilosc-".$_POST['sztuk']." WHERE akcja=".$_POST['id']." AND owner=".$player -> id) or die($db -> ErrorMsg());
   $db -> Execute("UPDATE players SET credits=credits+".$objPay." WHERE id=".$player -> id) or die($db -> ErrorMsg());
   $objIlosc = $db -> Execute("SELECT ilosc FROM gieldakup WHERE id=".$_POST['id']) or die($db -> ErrorMsg());
   if ($objIlosc -> fields['ilosc'] <= 0)
   {
   $db -> Execute("DELETE FROM gieldakup WHERE id=".$_POST['id']." AND owner=".$player -> id) or die($db -> ErrorMsg());
   }
   $objGielda -> Close();
   error ("Sprzedałeś ".$_POST['sztuk']." akcji!");
}

/*
* Inicjalizacja zmiennych i wyświetlanie strony
*/
if (!isset($_GET['action']))
{
    $_GET['action'] = '';
}

$smarty -> assign ( array("Location" => $player -> location,
"Action", $_GET['action']));
$smarty -> display ('gieldasell2.tpl');

require_once("includes/foot.php");
?>
