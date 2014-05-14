<?php
$title = "ogloszenia";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if (!isset ($_GET['view'])) {
$upd = $db -> SelectLimit("SELECT * FROM ogloszenia ORDER BY id DESC", 12);
if ($player -> rank == 'Admin') {
$modtext = "(<a href=oglw.php?modify=".$upd -> fields['id'].">Zmień</a>)";
} else {
$modtext = '';
}
$smarty -> assign ( array("Title1" => $upd -> fields['title'], "Starter" => $upd -> fields['starter'], "Update" => $upd -> fields['ogloszenia'], "Modtext" => $modtext)); 
} else {
$upd = $db -> SelectLimit("SELECT * FROM ogloszenia ORDER BY id DESC", 12);
$arrtitle = array();
$arrstarter = array();
$arrnews = array();
$arrmodtext = array();
$i = 0; 
while (!$upd -> EOF) {
if ($player -> rank == 'Admin') {
$arrmodtext[$i] = "(<a href=oglw.php?modify=".$upd -> fields['id'].">Zmień</a>)";
} else {
$arrmodtext[$i] = '';
}
$arrtitle[$i] = $upd -> fields['title'];
$arrstarter[$i] = $upd -> fields['starter'];
$arrnews[$i] = $upd -> fields['ogloszenia'];
$upd -> MoveNext();
$i = $i + 1; 
}
$upd -> Close();
$smarty -> assign ( array("Title1" => $arrtitle, "Starter" => $arrstarter, "Update" => $arrnews, "Modtext" => $arrmodtext)); 
}
//inicjalizacja zmiennej
if (!isset($_GET['view'])) {
$_GET['view'] = '';
}

//przypisanie zmiennej oraz wy¶wietlenie strony
$smarty -> assign ("View", $_GET['view']);
$smarty -> display ('ogloszenia.tpl');

require_once("includes/foot.php");
?>