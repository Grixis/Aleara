<?php
$title = "Lista IP";
require_once("includes/head.php");
if ($player -> rank !="Admin" and $player -> rank !="Staff" and $player -> rank !="Namiestnik")
{
    error ("Spindalaj");
}

$prisoner = mysql_query("select id, user, ip from players order by ip asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid_1 = array();
$arrname_1 = array();
$arrip_1 = array();
$i = 0;
while ($hobbit = mysql_fetch_array($prisoner)) {
$arrid_1[$i] = $hobbit['id'];
$arrname_1[$i] = $hobbit['user'];
$arrip_1[$i] = $hobbit['ip'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid_1, "Name" => $arrname_1, "Ip" => $arrip_1));
}

$prisoner = mysql_query("SELECT id, user, ip, COUNT(*) c FROM players GROUP BY ip HAVING c > 1;");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid_2 = array();
$arrname_2 = array();
$arrip_2 = array();
$arrc_2 = array();
$i = 0;
while ($hobbit = mysql_fetch_array($prisoner)) {
$arrid_2[$i] = $hobbit['id'];
$arrname_2[$i] = $hobbit['user'];
$arrip_2[$i] = $hobbit['ip'];
$arrc_2[$i] = $hobbit['c'];
$i = $i + 1;
}
$smarty -> assign ( array("Id_2" => $arrid_2, "Name_2" => $arrname_2, "Ip_2" => $arrip_2, "Count_2" => $arrc_2));
}


$prisoner = mysql_query("SELECT id, user, fingerprint, COUNT(*) c FROM players GROUP BY fingerprint HAVING c > 1;");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid_3 = array();
$arrname_3 = array();
$arrip_3 = array();
$arrc_3 = array();
$i = 0;
while ($hobbit = mysql_fetch_array($prisoner)) {
$arrid_3[$i] = $hobbit['id'];
$arrname_3[$i] = $hobbit['user'];
$arrip_3[$i] = $hobbit['fingerprint'];
$arrc_3[$i] = $hobbit['c'];
$i = $i + 1;
}
$smarty -> assign ( array("Id_3" => $arrid_3, "Name_3" => $arrname_3, "Ip_3" => $arrip_3, "Count_3" => $arrc_3));
}


$smarty -> assign ( array("Location" => $player -> location));
$smarty -> display ('ip.tpl');

require_once("includes/foot.php");
?>



