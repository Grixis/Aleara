<?php
$title = "czar klanu";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
   
$test = $db -> Execute("SELECT czaru FROM tribes WHERE id=".$player -> tribe);
$czaru = $test -> fields['czaru'];
$smarty -> assign(array("czaru" => $czaru));
$test = $db -> Execute("SELECT magia FROM players WHERE id=".$player -> id);
$magia = $test -> fields['magia'];
$smarty -> assign(array("magia" => $magia));
$test = $db -> Execute("SELECT czar FROM tribe_perm WHERE player=".$player -> id);
$czar = $test -> fields['czar'];
$smarty -> assign(array("czar" => $czar));
if ($czar < 1) {
error ("Nie posiadasz uprawnień!");
}
if ($czaru < 2) {
error ("Twoja gildia nie posiada czaru!");
}

if ($magia < 50) {
error ("Musisz posiadać przynajmniej 50 pkt umiejętności rzucanie czarów!");
}




$objList = mysql_query("SELECT id, name, cost, ilosc FROM gielda ORDER BY id ASC") or die($db -> ErrorMsg()); /* Pobieramy listę akcji */
    $intNumbers = mysql_num_rows($objList); /* czytam ilość rekordów */
    $smarty -> assign ("Numbers", $intNumbers); /* Deklarujemy zmienną Numbers w Smarty */
    if ($intNumbers >= 1) /* Jeśli jest jakiś wpis w akcjach */
    {
        $arrid = array(); /* Deklaracje zmiennych tablic */
        $arrname = array(); /* Deklaracje zmiennych tablic */
        $arrcost = array(); /* Deklaracje zmiennych tablic */
        $arramount = array(); /* Deklaracje zmiennych tablic */
        $i = 0; /* Deklaracje zmiennej */
                while ($strList = mysql_fetch_array($objList)) /* Pętla while */
                {
                        $arrid[$i] = $strList['id']; /* Przypisanie wartości */
                        $arrname[$i] = $strList['name']; /* Przypisanie wartości */
                        $arrcost[$i] = $strList['cost']; /* Przypisanie wartości */
                        $arramount[$i] = $strList['ilosc']; /* Przypisanie wartości */
                        $i = $i + 1; /* Przypisanie wartości */
                }
                
        $smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Cost" => $arrcost, "Amount" => $arramount)); /* Przypisanie wartośi do zmiennych Smarty */
    }



if (isset ($_GET['action']) && $_GET['action'] == 'buy') /* Jesli postanowiliśmy sprzedać*/
{
   if (!ereg("^[1-9][0-9]*$", $_POST['sztuk']) || !ereg("^[1-9][0-9]*$", $_POST['id'])) /* Sprawdzamy czy wpisano ID z cyfr*/
   {
        error ("Zapomij o tym!"); /* Jak nie to poinformuj o błędzie */
   }
    
    /*
    * Zabezpieczenie aby gracz nie kupił więcej niż jest akcji
    */
   $objGielda = $db -> Execute("SELECT * FROM gielda WHERE id=".$_POST['id']) or die($db -> ErrorMsg()); /* Pobieranie ilości akcji*/
   if ($objGielda -> fields['ilosc'] < $_POST['sztuk']) /* Jeśli gracz kupuje więcej niż jest dost. */
   {
   error ("Nie możesz tyle kupić!"); /* Wywal mu błąd */
   }
   $objGielda -> Close(); /* Zamknij */

   /*
   * Obliczanie ceny
   */
   $objCost = $db -> Execute("SELECT cost FROM gielda WHERE id=".$_POST['id']) or die($db -> ErrorMsg()); /* Pobier koszt akcji */
   $objPay = $objCost -> fields['cost'] * $_POST['sztuk']; /* Oblicz cenę */
   $objCost -> Close(); /* Zamknij */
   
   /*
   * Sprawdzanie czy gracza stać na zakup
   */
   if ($player -> credits < $objPay) /* Jeśli gracz ma mniej kasy niż jest wymagane */
   {
       error ("Nie masz wystarczająco pieniędzy!"); /* Jak tak to błąd */
   }
   
   /*
   * Zapytania
   */
   $db -> Execute("UPDATE gielda SET ilosc=ilosc-".$_POST['sztuk']." WHERE id=".$_POST['id']) or die($db -> ErrorMsg()); /*Zmniejsz ilość akcji  */

   $objTemp = $db -> Execute("SELECT id FROM gieldakup WHERE akcja=".$_POST['id']." AND owner=".$player -> id) or die($db -> ErrorMsg()); /* Pobranie ID jak gracz już kupił */
    /*
    * Sprawdzanie czy dodać nowe rekordy czy zaktualizować stare względem $objTemp
    */
    if (!$objTemp -> fields['id'])
    { /*Jeśli nie ma ID w bazie */
         $db -> Execute("INSERT INTO gieldakup (owner, akcja, ilosc) VALUES('".$player -> id."','".$_POST['id']."','".$_POST['sztuk']."')") or die($db -> ErrorMsg()); /*Dodaj rekord */
    }
         else
    { /* Albo */
         $db -> Execute("UPDATE gieldakup SET ilosc=ilosc+".$_POST['sztuk']." WHERE owner=".$player -> id." AND akcja=".$_POST['id']) or die($db -> ErrorMsg()); /* Zaktualizuj rekord */
    }
    $objTemp -> Close(); /* Zamknij */
    

   $db -> Execute("UPDATE players SET credits=credits-".$objPay." WHERE id=".$player -> id) or die($db -> ErrorMsg());    /* Zabieranie kasy */
   error ("Kupiłeś ".$_POST['sztuk']." akcji!"); /* Wiadomość końcowa - wynik kupna akcji */
}







if (isset ($_GET['action']) && $_GET['action'] == 'czar')
{




$db -> Execute("UPDATE tribes SET blok=blok+1 WHERE id=".$_POST['pid']);
$db -> Execute("UPDATE tribes SET prest=prest-20 WHERE id=".$player -> tribe);
	
error ("Rzuciłeś klątwę na świątynię gildii ID: <b> ".$_POST['pid']."</b>. Dziś nie będą mogli używać swojej świątyni.");
		

}






$smarty -> display('rzucczar.tpl');
require_once("includes/foot.php");
?>
