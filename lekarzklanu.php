<?php
$title = "Lekarz klanu";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db -> Execute("SELECT lekarz FROM tribes WHERE id=".$player -> tribe);
$lekarz = $test -> fields['lekarz'];
$smarty -> assign(array("lekarz" => $lekarz));
$test = $db -> Execute("SELECT godziny FROM tribes WHERE `id`=".$player -> tribe);
$godziny = $test -> fields['godziny'];
$smarty -> assign(array("godziny" => $godziny));
if ($lekarz < 2) {
error ('<center><IMG SRC="images/locations/gmachgildii.png"><br>Twoja gildia nie ma wybudowanego szpitala! <br><br><a href="tribes.php?view=my">(Wróć)</a></center>');
}
if ($godziny < 1) {
error ('<center><IMG SRC="images/locations/gmachgildii.png"><br>Twoja gildia nie opłaciła lekarza! <br><br><a href="tribes.php?view=my">(Wróć)</a></center>');
}
if ($player -> hp > $player -> max_hp - 1) {
error ('<center><IMG SRC="images/locations/gmachgildii.png"><br>Nie potrzebujesz leczenia! <br><br><a href="tribes.php?view=my">(Wróć)</a></center>');
}
$db -> Execute("UPDATE `players` SET `hp`=`max_hp` WHERE `id`=".$player -> id);
$test = $db -> Execute("SELECT lekarz FROM tribes WHERE id=".$player -> id);
$lekarz = $test -> fields['lekarz'];
$smarty -> assign(array("lekarz" => $lekarz));
$test = $db -> Execute("SELECT godziny FROM tribes WHERE `id`=".$player -> tribe);
$godziny = $test -> fields['godziny'];
$smarty -> assign(array("godziny" => $godziny));
$smarty -> display('lekarzklanu.tpl');
require_once("includes/foot.php");
?>
