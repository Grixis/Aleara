<?php

$title = 'Sala Przemian';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db -> Execute("SELECT wywar FROM players WHERE `id`=".$player -> id);
$wywar = $test -> fields['wywar'];
$smarty -> assign(array("wywar" => $wywar));
$test = $db -> Execute("SELECT pilem FROM players WHERE `id`=".$player -> id);
$pilem = $test -> fields['pilem'];
$smarty -> assign(array("pilem" => $pilem));

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'wypij')
{
  if ($wywar < 1)
	{
		error('Nie posiadasz wywaru transmutacji!<a href="city.php"> (Wróć do miasta)</a>');
	}
	if ($pilem > 0)
	{
		error('Wypiłeś już dziś jeden wywar! <a href="city.php"> (Wróć do miasta)</a>');
	}
    
$db -> Execute('UPDATE players SET wywar=wywar-1 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET transmutacja="zmutowane monstrum" WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET pktwampirat=pktwampirat+5 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET precyzja=precyzja+2 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET crime=crime+10 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET boss=boss-2 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET artefaktzab=artefaktzab+2 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET artefaktzebro=artefaktzebro+2 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET artefaktoko=artefaktoko+2 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET artefaktserce=artefaktserce+2 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET artefaktwlos=artefaktwlos+2 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET utrans=utrans+1 WHERE id='.$player-> id);
$db -> Execute('UPDATE players SET pilem=pilem+1 WHERE id='.$player-> id);
            error ("Wypiłeś wywar i zostałeś przetransmutowany w zmutowane monstrum!");
        }
        
   
        
$smarty -> display('wypij.tpl');
require_once('includes/foot.php');

?>
