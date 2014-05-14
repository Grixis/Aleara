<?
/**
* Vermilion based on Vallheru
* @function: sell items too vallars
* @copyrights: 2006 for thion
* @author: thion <thion@o2.pl>
* @version: 0.1 alfa
*/

$title = 'Sklep z brylantami';
require_once('includes/head.php');


if(isset($_POST['submit']))
{
    switch($_POST['item'])
    {
       case 'sword':
            $c = 100;
            $n = 'Ogień Chaosu';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'Ogień Chaosu', 5000,'W',500000,0,10000,10,10000,1,'Y',0,500,'Y')";
            $db -> Execute("UPDATE players SET refs=refs-100 WHERE id=".$player -> id);
       break;
       case 'bow':
            $c = 100;
            $n = 'Wiatr Chaosu';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'Wiatr Chaosu', 5000,'B',500000,0,10000,10,10000,1,'Y',0,1000,'Y')";
            $db -> Execute("UPDATE players SET refs=refs-100 WHERE id=".$player -> id);
       break;
       case 'staff':
            $c = 100;
            $n = 'Błyskawica Chaosu';
            $query = "INSERT INTO equipment (owner, name, cost, minlev, type, power, status) VALUES(".$player -> id.",'Błyskawica Chaosu',0,1000,'S',5000,'U')";
            $db -> Execute("UPDATE players SET refs=refs-100 WHERE id=".$player -> id);
       break;
       case 'credits':
            $c = 50;
            $n = '10000000 sztuk złota';
            $query = 'UPDATE players SET credits = credits + 10000000 WHERE id = '.$player -> id;
            $db -> Execute("UPDATE players SET refs=refs-50 WHERE id=".$player -> id);
       break;
       case 'energy':
            $c = 50;
            $n = '+2 maksymalnej energii';
            $query = 'UPDATE players SET max_energy = max_energy + 2 WHERE id = '.$player -> id;
            $db -> Execute("UPDATE players SET refs=refs-50 WHERE id=".$player -> id);
       break;
    }

    
    
    $db -> Execute($query);
    $lol = $db -> Execute('SELECT id FROM players WHERE refs = '.$player -> id);
    $i = 0;
    while(!$lol -> EOF)
    {
        $db -> Execute('UPDATE players SET refs = 0 WHERE id = '.$lol -> fields['id']);
        $i++;
    }
        
    error('Za '.$c.' brylantów otrzymałeś <b>'.$n.'</b>!');
}
    else
{
    
    $smarty -> assign('Info', 'Witaj, '.$player -> user.'!<br />Obecnie znajdujesz się w sklepiej z brylantami. Tutaj możesz wymieniać swoje brylanty na różne przydatne rzeczy. Nie masz brylantów? Wygraj je w zawodach w Domu Murgrabiego.');
}


$test = $db -> Execute("SELECT refs FROM players WHERE id=".$player -> id);
$refs= $test -> fields['refs'];
$smarty -> assign(array("refs" => $refs));  
						                           

$smarty -> display('vallars.tpl');
require_once('includes/foot.php');

?>
