<?php

$title = "Źródło Krutynów";
require_once("includes/head.php");
require_once('includes/security.php');
require_once ('includes/checkexp.php');
if ($player -> location !='Ardulith')
{
	error('Nie znajdujesz się na Krwawych Mokradłach!');
}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if ($player -> level < 10)
    {
        error('Nie jesteś odpowiednio przygotowany aby tu wejść. (Dostęp min lvl=10 max lvl=20 <a href="city.php"">(wróć do ostady)</a>');
    }

if ($player -> level > 20)
    {
        error('Nie jesteś możesz już tu wejść. (Dostęp min lvl=10 max lvl=20 <a href="city.php"">(wróć do ostady)</a>');
    }

  $objTest = $db -> Execute("SELECT `zrodlo` FROM `players` WHERE `id`=".$player -> id);
            if ($objTest -> fields['zrodlo'] == '1') 
            {
                error ('Już dziś wrzucałeś kieł <a href="city.php">(wróć do ostady)</a>');
            }
$test = $db -> Execute("SELECT kly FROM players WHERE id=".$player -> id);
$kly= $test -> fields['kly'];
if(isset($_POST['submit']))
{
 if ($player -> zrodlo > 1) 
    {
        error ('Już dziś wrzucałeś kieł <a href="city.php">(wróć do ostady)</a>');
    }
    switch($_POST['item'])
    {
   
       case 'credits':
       $eexp = 300;
            $c = 1;
            $n = "złoto +2000<br>mithril +50<br>exp +300<br>energia +10<br>ryby +10<br>grzyby +10<br> ziemniaki +10";
            $db -> Execute("UPDATE players SET credits=credits+2000 WHERE id =".$player -> id);
            $db -> Execute("UPDATE players SET zrodlo=zrodlo+1 WHERE id =".$player -> id);
            $db -> Execute("UPDATE players SET platinum=platinum+50 WHERE id =".$player -> id);
           
            $db -> Execute("UPDATE players SET energy=energy+10 WHERE id =".$player -> id);
            $db -> Execute("UPDATE players SET ryby=ryby+10 WHERE id =".$player -> id);
            $db -> Execute("UPDATE players SET grzyby=grzyby+10 WHERE id =".$player -> id);
            $db -> Execute("UPDATE players SET ziemniaki=ziemniaki+10 WHERE id =".$player -> id);
             checkexp($player -> exp, $eexp, $player -> level, $player -> race, $player -> user, $player -> id, 0, 0, $player -> id, 'fletcher', 0);
             
      require_once ('includes/checkexp.php');
       break;
    }

    require_once ('includes/checkexp.php');
    if ($kly < $c)
    {
      error('Nie masz kłów! <a href="city.php">(wróć do ostady)</a>');
    }

    $db -> Execute("UPDATE players SET kly=kly-1 WHERE id=".$player -> id);
    
        
    error('Otrzymałeś: <b>'.$n.'</b>!');
}
require_once ('includes/checkexp.php');
$smarty -> assign(array("kly" => $kly));
/**
* Get the localization for game
*/
$smarty -> display ('zrodlok.tpl');
require_once ('includes/checkexp.php');
require_once("includes/foot.php");
?>
