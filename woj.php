<?php
$title = "Spis Wojowników";
require_once("includes/head.php");
if ($player -> location != 'Altara' ) {
error ("Zapomnij o tym");
}
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
if ($player -> location == 'Altara') {
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

$smarty -> assign ( array("Location" => $player -> location));
$smarty -> display ('woj.tpl');

require_once("includes/foot.php");
?>

