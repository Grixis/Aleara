<?php
/**
* Vermilion based on Vallheru
* @function: sell items too vallars
* @copyrights: 2006 for thion
* @author: thion <thion@o2.pl>
* @version: 0.1 alfa
*/

$title = 'Sklep z brylantami';
require_once('includes/head.php');
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
$test = $db -> Execute("SELECT soul, refs FROM players WHERE id=".$player -> id);
$refs= $test -> fields['refs'];
$denars = $test -> fields['soul'];
if(isset($_POST['submit']))
{
    switch($_POST['item'])
    {
       case 'sword':
            $c = 100;
            $n = 'Ogień Chaosu';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'Ogień Chaosu', 500,'W',500000,0,1,10,10000,1,'Y',0,200,'Y')";
            //$db -> Execute("UPDATE players SET refs=refs-100 WHERE id=".$player -> id);
       break;
       case 'bow':
            $c = 100;
            $n = 'Wiatr Chaosu';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'Wiatr Chaosu', 500,'B',500000,0,1,10,10000,1,'Y',0,200,'Y')";
            //$db -> Execute("UPDATE players SET refs=refs-100 WHERE id=".$player -> id);
       break;
       case 'staff':
            $c = 100;
            $n = 'Błyskawica Chaosu';
            $query = "INSERT INTO equipment (owner, name, cost, minlev, type, power, status) VALUES(".$player -> id.",'Błyskawica Chaosu',0,1,'T',300,'U')";
            //$db -> Execute("UPDATE players SET refs=refs-100 WHERE id=".$player -> id);
       break;
       case 'credits':
            $c = 50;
            $n = '5000000 sztuk złota';
            $query = 'UPDATE players SET credits = credits + 5000000 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET refs=refs-50 WHERE id=".$player -> id);
       break;
       case 'energy':
            $c = 50;
            $n = '+1 maksymalnej energii';
            $query = 'UPDATE players SET max_energy = max_energy + 1 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET refs=refs-50 WHERE id=".$player -> id);
       break;
       case 'toporek':
            $c = 30;
            $n = 'Toór';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'Topór Druidów', 500,'W',500,0,1000,10,1000,1,'Y',0,100,'Y')";
            //$db -> Execute("UPDATE players SET refs=refs-30 WHERE id=".$player -> id);
       break;
    }

    
    if ($refs < $c)
    {
      error("Nie stać cie!");
    }
    $db -> Execute($query);
    $db -> Execute("UPDATE players SET refs=refs-".$c." WHERE id=".$player -> id);
    $lol = $db -> Execute('SELECT id FROM players WHERE refs = '.$player -> id);
    $i = 0;
    while(!$lol -> EOF)
    {
        $db -> Execute('UPDATE players SET refs = 0 WHERE id = '.$lol -> fields['id']);
        $i++;
    }
        
    error('Za '.$c.' brylantów otrzymałeś <b>'.$n.'</b>!');
}
if(isset($_POST['submit2']))
{
    switch($_POST['item2'])
    {
       case 'thousand':
            $c = 10;
            $n = '1000 sztuk złota';
            $query = "update players set credits=credits+1000 where id=".$player->id;
            //$db -> Execute("UPDATE players SET refs=refs-100 WHERE id=".$player -> id);
       break;
       case 'buildpoints':
            $c = 10;
            $n = '10 punktów budowlanych';
            $query = "update houses set points=points+10 where owner=".$player->id;
            //$db -> Execute("UPDATE players SET refs=refs-100 WHERE id=".$player -> id);
       break;
       case 'energy':
            $c = 50;
            $n = '+50 energii';
            $query = "update players set energy=energy+50 where id=".$player->id;
            //$db -> Execute("UPDATE players SET refs=refs-100 WHERE id=".$player -> id);
       break;
       case 'randore':
            $c = 100;
            $n = '200 losowej rudy';
    			$arrmineral=array('copperore', 'ironore', 'zincore', 'tinore', 'coal');
    			$mineral=array_rand($arrmineral, 1);
            $query = 'UPDATE minerals SET '.$arrmineral[$mineral].'='.$arrmineral[$mineral].'+ 200 WHERE owner = '.$player -> id;
            //$db -> Execute("UPDATE players SET refs=refs-50 WHERE id=".$player -> id);
       break;
       case 'randweed':
            $c = 100;
            $n = '200 losowego zioła';
            $arrherb=array('illani', 'illanias', 'nutari', 'dynallca');
    			$herb=array_rand($arrherb, 1);
    			$test=$db->Execute("Select id from herbs where gracz=".$player->id);
    			if ($test->fields['id'])
    			{
            	$query = 'UPDATE herbs SET '.$arrherb[$herb].'='.$arrherb[$herb].'+200 WHERE gracz = '.$player -> id;
            }
            else 
            {
            	$query = 'Insert into herbs(gracz,'.$arrherb[$herb].') values ('.$player->id.',200)';
            }	
            //$db -> Execute("UPDATE players SET refs=refs-50 WHERE id=".$player -> id);
       break;
       case 'maxene':
            $c = 200;
            $n = '+1 do maksymalnej energii';
            $query = "Update players set max_energy=max_energy+1 where id=".$player->id;
            //$db -> Execute("UPDATE players SET refs=refs-30 WHERE id=".$player -> id);
       break;
       case 'randstat':
            $c = 200;
            $n = '+100 do losowej statystyki';
            $arrstat=array('strength', 'agility', 'inteli', 'wisdom', 'wytrz', 'szyb');
            $stat=array_rand($arrstat, 1);
            $query = "Update players set ".$arrstat[$stat]."=".$arrstat[$stat]."+100 where id=".$player->id;
            //$db -> Execute("UPDATE players SET refs=refs-30 WHERE id=".$player -> id);
       break;
       case 'randabi':
            $c = 200;
            $n = '+10 do losowej umiejętności';
            $arrabi=array('ability', 'alchemia', 'fletcher', 'atak', 'shoot', 'unik', 'magia', 'breeding', 'mining', 'lumberjack', 'herbalist', 'jeweller', 'hutnictwo');
            $abi=array_rand($arrabi, 1);
            $query = "Update players set ".$arrabi[$abi]."=".$arrabi[$abi]."+10 where id=".$player->id;
            //$db -> Execute("UPDATE players SET refs=refs-30 WHERE id=".$player -> id);
       break;
       case 'rank':
            $c = 300;
            $test=$db->Execute('Select gender from players where id='.$player->id);
            $gender=$test->fields['gender'];
            if ($gender=='M')
            {
            $n = 'rangę rycerza';
            $query = "Update players set rank='Rycerz' where id=".$player->id;
            }
            else {
            	$n = 'rangę damy';
            $query = "Update players set rank='Dama' where id=".$player->id;
            	}
            //$db -> Execute("UPDATE players SET refs=refs-30 WHERE id=".$player -> id);
       break;
        case 'wskrzesiciel':
            $c = 300;
            $n = 'Ranga Wskrzesiciela';
            $query = "Update players set rank='Wskrzesiciel', premium='Y' where id=".$player->id;
            
       break;
    }

    
    if ($denars < $c)
    {
      error("Nie stać cie!");
    }
    $db -> Execute($query);
    $db -> Execute("UPDATE players SET soul=soul-".$c." WHERE id=".$player -> id);
    
    //error($query);    
    error('Za '.$c.' denarów otrzymałeś <b>'.$n.'</b>!');
}
    else
{
    
    $smarty -> assign('Info', 'Witaj, '.$player -> user.'!<br />Obecnie znajdujesz się w sklepiej z brylantami. Tutaj możesz wymieniaę swoje brylanty na różne przydatne rzeczy. Nie masz brylantów? Wygraj je w zawodach w Domu Murgrabiego, albo zdobądź w Wieży Druida.');
}



$smarty -> assign(array("refs" => $refs));
$smarty -> assign("denars", $denars);  
						                           

$smarty -> display('vallars.tpl');
require_once('includes/foot.php');

?>
