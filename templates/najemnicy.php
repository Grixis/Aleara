<?php

$title = "Więzenie Najemnika - Opuszczona Kopalnia";
require_once("includes/head.php");

$test = $db -> Execute("SELECT kluczaktywny FROM players WHERE id=".$player -> id);
$kluczaktywny= $test -> fields['kluczaktywny'];
$smarty -> assign(array("kluczaktywny" => $kluczaktywny));


if ($kluczaktywny < 1)
    {
        error('Emmm... Zapomnij o skakaniu na skróty poprzez linki -.- ! <a href="las.php">(wróć)</a>');
    }
if ($najemnikblokada > 0)
    {
        error('Nie ma tu nikogo... <a href="las.php">Wychodzę z Opuszczonej Kopalni.</a>');
    }

$smarty -> display ('najemnicy.tpl');

require_once("includes/foot.php");
?>
