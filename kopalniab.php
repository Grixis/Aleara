<?php

$title = "Tyły Opuszczonej Kopalni";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db -> Execute("SELECT chujciwoko FROM players WHERE id=".$player -> id);
$chujciwoko= $test -> fields['chujciwoko'];
$smarty -> assign(array("chujciwoko" => $chujciwoko));

if ($chujciwoko < 1)
{
$db -> Execute("INSERT INTO najemnicystaty (id, sila, inteligencja, wytrzymalosc, zrecznosc, silawoli, szybkosc, dupa) VALUES(".$player -> id.",0,0,0,0,0,0,0)");
} 

 
 
 
$test = $db -> Execute("SELECT losowanienagrody FROM players WHERE id=".$player -> id);
$losowanienagrody= $test -> fields['losowanienagrody'];
$smarty -> assign(array("losowanienagrody" => $losowanienagrody));

if ($losowanienagrody < 1)
    {
        error('Nie ma, że na skróty -.- <a href="las.php">(wróć)</a>');
    }




       
        
        
$db -> Execute("UPDATE players SET chujciwoko=chujciwoko+1 WHERE id=".$player -> id);    
        
$smarty -> display ('kopalniab.tpl');

require_once("includes/foot.php");
?>
