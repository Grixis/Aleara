<?php
$title = "Spis Mag�w";
require_once("includes/head.php");
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz si� w Alearze! <a href=travel.php>(Wr��)</a>');
}
if($player -> location == 'Lochy')
{
	error ('Jako, �e jeste� w lochu - nie mo�esz tutaj przebywa�.');
}
if ($player -> location == 'Altara') {
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

$smarty -> assign ( array("Location" => $player -> location));
$smarty -> display ('mag.tpl');

require_once("includes/foot.php");
?>

