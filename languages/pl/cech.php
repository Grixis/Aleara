<?php
/**
* 
* @function: clas list
* @copyrights: 
* @author: Balberith <jacek@kaara.pl>
* @copyrights: Balberith
*/

$title = "Dom Cechowy";
require_once("includes/head.php");


//sprawdzenie czy gracz znajduje sie w miescie
if ($player -> location != 'Altara') {
        error ("Zapomnij o tym");
}



//spis mag�w wed�ug ID
if (isset ($_GET['view']) && $_GET['view'] == 'magid') {
$prisoner = mysql_query("select * from players where klasa='Mag' order by id asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($mag = mysql_fetch_array($prisoner)) {
$arrid[$i] = $mag['id'];
$arrname[$i] = $mag['user'];
$arrlevel[$i] = $mag['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

//spis mag�w wed�ug poziomu
if (isset ($_GET['view']) && $_GET['view'] == 'maglvl') {
$prisoner = mysql_query("select * from players where klasa='Mag' order by level asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($mag = mysql_fetch_array($prisoner)) {
$arrid[$i] = $mag['id'];
$arrname[$i] = $mag['user'];
$arrlevel[$i] = $mag['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


//spis mag�w wed�ug imienia
if (isset ($_GET['view']) && $_GET['view'] == 'maguser') {
$prisoner = mysql_query("select * from players where klasa='Mag' order by user asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($mag = mysql_fetch_array($prisoner)) {
$arrid[$i] = $mag['id'];
$arrname[$i] = $mag['user'];
$arrlevel[$i] = $mag['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


//spis z�odzieji wed�ug ID
if (isset ($_GET['view']) && $_GET['view'] == 'zlodziejid') {
$prisoner = mysql_query("select * from players where klasa='Z�odziej' order by id asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($z�odziej = mysql_fetch_array($prisoner)) {
$arrid[$i] = $z�odziej['id'];
$arrname[$i] = $z�odziej['user'];
$arrlevel[$i] = $z�odziej['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


//spis z�odzieji wed�ug ID
if (isset ($_GET['view']) && $_GET['view'] == 'zlodziejlvl') {
$prisoner = mysql_query("select * from players where klasa='Z�odziej' order by level asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($z�odziej = mysql_fetch_array($prisoner)) {
$arrid[$i] = $z�odziej['id'];
$arrname[$i] = $z�odziej['user'];
$arrlevel[$i] = $z�odziej['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


//spis z�odzieji wed�ug imienia
if (isset ($_GET['view']) && $_GET['view'] == 'zlodziejuser') {
$prisoner = mysql_query("select * from players where klasa='Z�odziej' order by user asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($z�odziej = mysql_fetch_array($prisoner)) {
$arrid[$i] = $z�odziej['id'];
$arrname[$i] = $z�odziej['user'];
$arrlevel[$i] = $z�odziej['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

//spis wojownikow wed�ug ID
if (isset ($_GET['view']) && $_GET['view'] == 'wojid') {
$prisoner = mysql_query("select * from players where klasa='Wojownik' order by id asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


//spis wojownikow wed�ug poziomu
if (isset ($_GET['view']) && $_GET['view'] == 'wojlvl') {
$prisoner = mysql_query("select * from players where klasa='Wojownik' order by level asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

//spis wojownikow wed�ug imienia
if (isset ($_GET['view']) && $_GET['view'] == 'wojuser') {
$prisoner = mysql_query("select * from players where klasa='Wojownik' order by user asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

//spis wojownikow wed�ug ID
if (isset ($_GET['view']) && $_GET['view'] == 'barid') {
$prisoner = mysql_query("select * from players where klasa='Barbarzy�ca' order by id asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}



//spis wojownikow wed�ug poziomu
if (isset ($_GET['view']) && $_GET['view'] == 'barlvl') {
$prisoner = mysql_query("select * from players where klasa='Barbarzy�ca' order by level asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


//spis wojownikow wed�ug imienia
if (isset ($_GET['view']) && $_GET['view'] == 'baruser') {
$prisoner = mysql_query("select * from players where klasa='Barbarzy�ca' order by user asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}










//spis rzemie�lnik�w wed�ug id
if (isset ($_GET['view']) && $_GET['view'] == 'rzemid') {
$prisoner = mysql_query("select * from players where klasa='Rzemie�lnik' order by id asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

//spis rzemie�lnik�w wed�ug imienia
if (isset ($_GET['view']) && $_GET['view'] == 'rzemuser') {
$prisoner = mysql_query("select * from players where klasa='Rzemie�lnik' order by user asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

//spis rzemie�lnik�w wed�ug poziomu
if (isset ($_GET['view']) && $_GET['view'] == 'rzemlvl') {
$prisoner = mysql_query("select * from players where klasa='Rzemie�lnik' order by level asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


$smarty -> assign (array ("View" => $_GET['view'], "Step" => $_GET['step']));
$smarty -> display ('cech.tpl');
require_once("includes/foot.php");
?>
