<?php

$title = '';
require_once('includes/head.php');

/**
* Get the localization for game
*/
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
require_once("languages/".$player -> lang."/bank.php");
if(isset($_POST['submit']))
{
    switch($_POST['item'])
{
case 'zloto':
$n = '300000';
$c = '300000';
break;

}
    
    $db -> Execute("UPDATE players SET credits=credits-'$n' WHERE id=".$player -> id);
  $db -> Execute("UPDATE players SET credits=credits-'$n' WHERE id=".$player -> id);

    error('Zapłaciłeś kapłanowi złoto. <a href="zaplata.php">Zapytaj jeszcze o termin pogrzebu.</a>');
}

$smarty -> display ('kaaplaan.tpl');

require_once("includes/foot.php");

?>
