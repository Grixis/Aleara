<?php

$title = "Komnata Śmierci";
require_once("includes/head.php");
require_once("includes/checkexp.php");
if($player -> location != 'Diabolium')
{
    error ("Nie znajdujesz się w Diabolium!");
}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if ($player -> brama > 2) 
    {
        error ("Już dziś byłeś tutaj 2 razy! <a href=diabolium.php> (Wróć do Diabolium)</a>");
    }
if ($player -> level < 100)
    {
        error("Możesz tutaj wejść mając lvl 100-101! <a href=diabolium.php> (Wróć do Diabolium)</a>");
    }

if ($player -> level > 101)
    {
        error("Możesz tutaj wejść mając lvl 100-101! <a href=diabolium.php> (Wróć do Diabolium)</a>");
    }

  $objTest = $db -> Execute("SELECT `brama` FROM `players` WHERE `id`=".$player -> id);
            if ($objTest -> fields['brama'] == '2') 
            {
                error ("Już dziś byłeś tutaj 2 razy! <a href=diabolium.php> (Wróć do Diabolium)</a>");
            }
$test = $db -> Execute("SELECT kdiaburiona FROM players WHERE id=".$player -> id);
$kdiaburiona= $test -> fields['kdiaburiona'];
if(isset($_POST['submit']))
{
    switch($_POST['item'])
    {
       case 'credits':
            $c = 1;
            $n = "exp +50000<br>energia +300<br><br>złoto +100000<br>";
            $db -> Execute("UPDATE players SET brama=brama+1 WHERE id =".$player -> id);
            
            $db -> Execute("UPDATE players SET credits=credits+100000 WHERE id =".$player -> id);
            $db -> Execute("UPDATE players SET energy=energy+300 WHERE id =".$player -> id);
            checkexp($player -> exp, 5000, $player -> level, $player -> race, $player -> user, $player -> id, 0, 0, $player -> id, 'fletcher', 0);
       break;
    }

    
    if ($kdiaburiona < $c)
    {
      error("Nie masz kryształów!");
    }

    $db -> Execute("UPDATE players SET kdiaburiona=kdiaburiona-1 WHERE id=".$player -> id);
    
        
    error('<br>Otrzymałeś: <br><b>'.$n.' i zostałeś przeteleportowany pod Bramę Piekieł</b><a href="wrotapiekiel.php"> TELEPORTUJ SIĘ</a>!');
}
$smarty -> assign(array("kdiaburiona" => $kdiaburiona));
/**
* Get the localization for game
*/
$smarty -> display ('komnatadiaburiona.tpl');
require_once("includes/foot.php");
?>
