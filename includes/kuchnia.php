<?php
$title="Kuchnia";
require_once("includes/head.php");
require_once ("includes/funkcje.php");
$grzyby = $db -> Execute("SELECT grzyby FROM players WHERE id=".$player -> id);
if ($player -> gotow > 4) {
	error ("Co ty gotowac chcesz 5 razy na dzien !! za goroco tutaj.");
    }
if (isset ($_GET['akcja']) && $_GET['akcja'] == 'grzyby')
 {
  
    
  if ($player -> kuchnia > 2) {
$db -> Execute("UPDATE players SET grzyby=grzyby-20 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotowanie=gotowanie+0.01 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotow=gotow+1 WHERE id=".$player -> id);
error ("Kolejna juz dzisiaj Zupka, nie przyniosła takiego samego skutku.");
  }

  $roll = rand (1,100);
  if ($roll < 40) {
$db -> Execute("UPDATE players SET grzyby=grzyby-20 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotow=gotow+1 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET energy=energy+7.00 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotowanie=gotowanie+0.01 WHERE id=".$player -> id);
error ("Zapażyłeś sobie całkiem niezłą zupkę. Czujesz przypływ sił.");
  } else {

$db -> Execute("UPDATE players SET grzyby=grzyby-15 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotowanie=gotowanie+0.01 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotow=gotow+1 WHERE id=".$player -> id);
error ("Mocne to to nie było. Następnym razem sypnij trochę więcej grzybków.");
      }
  }
$ryby = $db -> Execute("SELECT ryby FROM players WHERE id=".$player -> id);
//$smarty -> assign ("ryby", $ryby -> fields['ryby']);
if (isset ($_GET['akcja']) && $_GET['akcja'] == 'ryby') {
   
    if ($player -> gotow > 4) {
	error ("Co ty smarzyc chcesz 5 razy na dzien !! za goroco tutaj.");
    }
  if ($player -> kuchnia > 2) {
$db -> Execute("UPDATE players SET ryby=ryby-5 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotow=gotow+1 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotowanie=gotowanie+0.01 WHERE id=".$player -> id);
error ("Kolejne danie, nie przyniosło takiego samego skutku.");
  }

  $roll = rand (1,100);
  if ($roll < 40) {
$db -> Execute("UPDATE players SET ryby=ryby-5 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotow=gotow+1 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET energy=energy+7.00 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotowanie=gotowanie+0.01 WHERE id=".$player -> id);
error ("Usmarzyłes całkiem niezła rybe. Czujesz przypływ sił.");
  } else {

$db -> Execute("UPDATE players SET ryby=ryby-4 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotow=gotow+1 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotowanie=gotowanie+0.01 WHERE id=".$player -> id);
error ("Mocne to to nie było. Następnym razem daj wiecej ryb.");
      }
  }
  
  if (isset ($_GET['akcja']) && $_GET['akcja'] == 'wodka') {
  
    if ($player -> gotow > 4) {
	error ("Co ty chcesz robić wódkę 5 razy na dzien !! Za goroco tutaj!");
    }
  if ($player -> kuchnia > 2) {
$db -> Execute("UPDATE players SET ziemniaki=ziemniaki-20 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotow=gotow+1 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotowanie=gotowanie+0.01 WHERE id=".$player -> id);
error ("Kolejna wódka, nie przyniosło takiego samego efektu.");
  }

  $roll = rand (1,100);
  if ($roll < 40) {
$db -> Execute("UPDATE players SET ziemniaki=ziemniaki-20 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotow=gotow+1 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET energy=energy+9.00 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotowanie=gotowanie+0.01 WHERE id=".$player -> id);
error ("Wyrobiłeś niezłą wódkę. Czujesz przypływ sił!");
  } else {

$db -> Execute("UPDATE players SET ziemniaki=ziemniaki-20 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotow=gotow+1 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gotowanie=gotowanie+0.01 WHERE id=".$player -> id);
error ("Mocne to to nie było.");
      }
  }
// inicjalizacja zmiennej
if (!isset($_GET['akcja'])) {
  $_GET['akcja'] = '';
}

$test = $db -> Execute("SELECT gotowanie FROM players WHERE id=".$player -> id);
$gotowanie = $test -> fields['gotowanie'];
$smarty -> assign(array("gotowanie" => $gotowanie));














$smarty -> display('kuchnia.tpl');
require_once("includes/foot.php");
?>
