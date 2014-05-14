<?php

$title = "Bagnisko Krutynów";
require_once("includes/head.php");

if ($player -> location !='Ardulith')
{
	error('Nie znajdujesz się na Krwawych Mokradłach!');
}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}

$test = $db -> Execute("SELECT geoja FROM players WHERE id=".$player -> id);
$geoja = $test -> fields['geoja'];
$smarty -> assign(array("geoja" => $geoja));
if($geoja < 5)
{
	error ('<center><IMG SRC="images/locations/bagniskokrutynow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Masz za mało głów przybyszu. Skupuję głowy tylko w większych ilościach. Jeśli uzbierasz przynajmniej pięć głów abym mógł uważyć zupę życia przyjdź ponownie. <a href="bagnisko.php">Wracasz...</a>');
}
if($geoja > 4)
{
$ciulik = ($player -> level + 1) * 3;
$db -> Execute("UPDATE players SET energy=energy+'$ciulik' WHERE id =".$player -> id);
$db -> Execute("UPDATE players SET geoja=geoja-5 WHERE id =".$player -> id);
	error ('<center><IMG SRC="images/locations/bagniskokrutynow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Hmm... Widzę, że masz już pięć głów Eyoya. Będę mógł uważyć zupę życia.. Zwiększę Ci za te głowy energię o '.$ciulik.'. <a href="bagnisko.php">[Wracasz]</a>');
}




$smarty -> display ('geyoya.tpl');

require_once("includes/foot.php");
?>
