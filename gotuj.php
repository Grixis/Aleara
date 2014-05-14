<?php

$title = 'Gotowanie wywaru';
require_once('includes/head.php');
if ($player -> clas != 'Szaman')
{
    error ('Nie jesteś szamanem <a href="wiezatrans.php">(Wróć do wieży)</a>');
}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}


$test = $db -> Execute("SELECT illanias FROM herbs WHERE `gracz`=".$player -> id);
$illanias = $test -> fields['illanias'];
$smarty -> assign(array("illanias" => $illanias));




$test = $db -> Execute("SELECT meteor FROM minerals WHERE `owner`=".$player -> id);
$meteor = $test -> fields['meteor'];
$smarty -> assign(array("meteor" => $meteor));
$test = $db -> Execute("SELECT gotw FROM players WHERE ``=".$player -> id);
$gotw = $test -> fields['gotw'];
$smarty -> assign(array("gotw" => $gotw));
$test = $db -> Execute("SELECT pine FROM minerals WHERE `owner`=".$player -> id);
$pine = $test -> fields['pine'];
$smarty -> assign(array("pine" => $pine));



if (isset ($_GET['akcja']) && $_GET['akcja'] == 'gotuj')
{
  if ($player -> platinum < 1000)
	{
		error('Nie masz odpowiedniej ilości mithrilu! <a href="wiezatrans.php">(Wróć do wieży)</a>');
	}
	  if ($player -> credits < 50000)
	{
		error('Nie masz odpowiedniej ilości złota! <a href="wiezatrans.php">(Wróć do wieży)</a>');
	}
	  if ($meteor < 100)
	{
		error('Nie masz odpowiedniej ilości meteorytu! <a href="wiezatrans.php">(Wróć do wieży)</a>');
	}
	  if ($pine < 200)
	{
		error('Nie masz odpowiedniej ilości sosny! <a href="wiezatrans.php">(Wróć do wieży)</a>');
	}
    if ($player -> energy < 50)
	{
		error('Nie masz odpowiedniej ilości energii! <a href="wiezatrans.php">(Wróć do wieży)</a>');
	} 
	  if ($illanias < 200)
	{
		error('Nie masz odpowiedniej ilości illanias! <a href="wiezatrans.php">(Wróć do wieży)</a>');
	} 
	  if ($gotw > 2)
	{
		error('Warzyłeś(aś) już dziś 3 razy! <a href="wiezatrans.php">(Wróć do wieży)</a>');
	} 
	$eexp = ($player -> level * 300);
$db -> Execute('UPDATE players SET platinum=platinum-1000 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET warzenie=warzenie+1 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET energy=energy-50 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET wywar=wywar+1 WHERE id='.$player-> id);
$db -> Execute('UPDATE herbs SET illanias=illanias-200 WHERE gracz='.$player-> id);
$db -> Execute('UPDATE minerals SET meteor=meteor-100 WHERE owner='.$player-> id);
$db -> Execute('UPDATE minerals SET pine=pine-200 WHERE owner='.$player-> id);
$db -> Execute('UPDATE players SET gotw=gotw+1 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET credits=credits-50000 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET exp=exp+'.$eexp.' WHERE id='.$player-> id);
            error ("Ugotowałeś(aś) wywar transmutacji! Zyskujesz +1 w umiejętności warzenie oraż +$eexp pkt doświadczenia!");
        }
        

        
$smarty -> display('gotuj.tpl');
require_once('includes/foot.php');

?>
