<?php

$title = "Tyły Opuszczonej Kopalni";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db -> Execute("SELECT losowanienagrody FROM players WHERE id=".$player -> id);
$losowanienagrody= $test -> fields['losowanienagrody'];
$smarty -> assign(array("losowanienagrody" => $losowanienagrody));

if ($losowanienagrody < 1)
    {
        error('Nie ma, że na skróty -.- <a href="las.php">(wróć)</a>');
    }



$smarty -> display ('droga2.tpl');

require_once("includes/foot.php");
?>
