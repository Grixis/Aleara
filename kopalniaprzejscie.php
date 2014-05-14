<?php
$title = "Opuszczona Kopalnia - Przejście przez drzwi";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db -> Execute("SELECT bosszabity FROM players WHERE id=".$player -> id);
$bosszabity= $test -> fields['bosszabity'];
$smarty -> assign(array("bosszabity" => $bosszabity));
if ($bosszabity < 1) {
      error ('<center><IMG SRC="szybrogotona.png"></center>Nie zabiłeś jeszcze bossa. Nie przejdziesz na skróty ^^! <a href="las.php">(Wróć)</a>');
}
$test = $db -> Execute("SELECT kluczdokopalni FROM players WHERE id=".$player -> id);
$kluczdokopalni= $test -> fields['kluczdokopalni'];
$smarty -> assign(array("kluczdokopalni" => $kluczdokopalni));
if ($kluczdokopalni < 1) {
      error ('<center><IMG SRC="szybrogotona.png"></center>Nie posiadasz klucza do drzwi. Musisz go zdobyć. <a href="las.php">(Wróć)</a>');
}

$db -> Execute('UPDATE players SET kluczdokopalni = kluczdokopalni - 1 WHERE id = '.$player -> id);
$db -> Execute('UPDATE players SET kluczaktywny = 1 WHERE id = '.$player -> id);


$smarty -> display('kopalniaprzejscie.tpl');
require_once("includes/foot.php"); 
?>
