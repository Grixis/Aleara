<?
/**
* @function: sell chaos, bless and soul jewels
* @author: _th <thion@o2.pl>
* @version: 0.1
*/

$title = 'Przeklęty Las';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
if(isset($_POST['submit']))
{
    switch($_POST['jewel'])
    {
       case 'bles':
            $c = 300000;
            $n = 'Bless';
       break;
       case 'soul':
            $c = 500000;
            $n = 'Soul';
       break;
       case 'chaos':
            $c = 700000;
            $n = 'Chaos';
       break;
    }
    
    if($player -> credits < $c)
    {
        error('Nie masz pieniędzy!');
    }
        else
    {
        $db -> Execute('UPDATE players SET '.$_POST['jewel'].' =  '.$_POST['jewel'].' + 1 WHERE id = '.$player -> id);
        $db -> Execute('UPDATE players SET credits = credits - '.$c.' WHERE id='.$player -> id);
        error('Otrzymałeś jedną korę z przeklętego dębu!');
    }
}
    else
{
    
}

$smarty -> display('upgrade.tpl');

require_once('includes/foot.php');
?>
