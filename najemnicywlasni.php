<?php

$title = "Najemnicy";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db -> Execute("SELECT sila FROM najemnicystaty WHERE id=".$player -> id);
$sila= $test -> fields['sila'];
$smarty -> assign(array("sila" => $sila));

$test = $db -> Execute("SELECT zrecznosc FROM najemnicystaty WHERE id=".$player -> id);
$zrecznosc= $test -> fields['zrecznosc'];
$smarty -> assign(array("zrecznosc" => $zrecznosc));

$test = $db -> Execute("SELECT szybkosc FROM najemnicystaty WHERE id=".$player -> id);
$szybkosc= $test -> fields['szybkosc'];
$smarty -> assign(array("szybkosc" => $szybkosc));

$test = $db -> Execute("SELECT wytrzymalosc FROM najemnicystaty WHERE id=".$player -> id);
$wytrzymalosc= $test -> fields['wytrzymalosc'];
$smarty -> assign(array("wytrzymalosc" => $wytrzymalosc));

$test = $db -> Execute("SELECT inteligencja FROM najemnicystaty WHERE id=".$player -> id);
$inteligencja= $test -> fields['inteligencja'];
$smarty -> assign(array("inteligencja" => $inteligencja));

$test = $db -> Execute("SELECT silawoli FROM najemnicystaty WHERE id=".$player -> id);
$silawoli= $test -> fields['silawoli'];
$smarty -> assign(array("silawoli" => $silawoli));

$test = $db -> Execute("SELECT najemnicy FROM players WHERE id=".$player -> id);
$najemnicy= $test -> fields['najemnicy'];
$smarty -> assign(array("najemnicy" => $najemnicy));

$test = $db -> Execute("SELECT questkopalnia FROM players WHERE id=".$player -> id);
$questkopalnia= $test -> fields['questkopalnia'];
$smarty -> assign(array("questkopalnia" => $questkopalnia));


if ($questkopalnia < 1)
    {
        error('Nie możesz tutaj przebywać ponieważ nie wykonałeś Questu Opuszczona Kopalnia! <a href="city.php">(wróć)</a>');
    }


$smarty -> display ('najemnicywlasni.tpl');

require_once("includes/foot.php");
?>
