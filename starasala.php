<?php

$title = "Stara Sala w Zamku";
require_once("includes/head.php");
require_once("includes/checkexp.php");
if ($player -> location !='Ardulith')
{
	error('Nie znajdujesz się na Krwawych Mokradłach!');
}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if ($player -> przygodaa > 2) 
    {
        error ("Już dziś byłeś tutaj 2 razy! <a href=puszcza.php> (Wróć pod bramę)</a>");
    }
if ($player -> level < 1)
    {
        error("Dotarłeś do piramidy. jednak możesz tutaj wejść mając lvl 1-50! <a href=puszcza.php> (Wróć pod bramę)</a>");
    }

if ($player -> level > 50)
    {
        error("Dotarłeś do piramidy. jednak możesz tutaj wejść mając lvl 1-50! <a href=puszcza.php> (Wróć pod bramę)</a>");
    }

  $objTest = $db -> Execute("SELECT `przygodaa` FROM `players` WHERE `id`=".$player -> id);
            if ($objTest -> fields['przygodaa'] == '2') 
            {
                error ("Już dziś byłeś tutaj 2 razy! <a href=puszcza.php> (Wróć pod bramę)</a>");
            }
$test = $db -> Execute("SELECT kzamku FROM players WHERE id=".$player -> id);
$kzamku= $test -> fields['kzamku'];
if(isset($_POST['submit']))
{
    switch($_POST['item'])
    {
       case 'credits':
            $c = 1;
            $n = "exp +50<br>energia +4<br><br>złoto +1000<br>";
            $db -> Execute("UPDATE players SET przygodaa=przygodaa+1 WHERE id =".$player -> id);
           
            $db -> Execute("UPDATE players SET credits=credits+1000 WHERE id =".$player -> id);
            $db -> Execute("UPDATE players SET energy=energy+4 WHERE id =".$player -> id);
            checkexp($player -> exp, 50, $player -> level, $player -> race, $player -> user, $player -> id, 0, 0, $player -> id, 'fletcher', 0);
       break;
    }

    
    if ($kzamku < $c)
    {
      error("Nie masz kryształów!");
    }

    $db -> Execute("UPDATE players SET kzamku=kzamku-1 WHERE id=".$player -> id);
    
        
    error('<br>Otrzymałeś: <br><b>'.$n.' i zostałeś przeteleportowany pod Bramę Puszczy</b><a href="puszcza.php"> TELEPORTUJ SIĘ</a>!');
}
$smarty -> assign(array("kzamku" => $kzamku));
/**
* Get the localization for game
*/
$smarty -> display ('starasala.tpl');
require_once("includes/foot.php");
?>
