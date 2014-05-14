<?php
$title = "Spis Barbarzyńców";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
if ($player -> location == 'Altara') {
$prisoner = mysql_query("select * from players where klasa='Barbarzyńca' order by level asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($barbarzyńca = mysql_fetch_array($prisoner)) {
$arrid[$i] = $barbarzyńca['id'];
$arrname[$i] = $barbarzyńca['user'];
$arrlevel[$i] = $barbarzyńca['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

$smarty -> assign ( array("Location" => $player -> location));
$smarty -> display ('barbarian.tpl');

require_once("includes/foot.php");
?>

