<?
/**
* @function: sell chaos, bless and soul jewels
* @author: _th <thion@o2.pl>
* @version: 0.1
*/

$title = 'Polana Życia';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
$test = $db->Execute("SELECT podklasa FROM players WHERE id=".$player->id);
$podklasa=$test->fields['podklasa'];
	if ($podklasa != "Podróżnik")
	{
		error("Nie jesteś podróżnikiem!");
	}
if(isset($_POST['submit']))
{
    switch($_POST['jewel'])
    {
       case 'bles':
            $c = 10000;
            $n = 'Bless';
       break;
       case 'soul':
            $c = 10000;
            $n = 'Soul';
       break;
       case 'chaos':
            $c = 10000;
            $n = 'Chaos';
       break;
    }
    
    if($player -> credits < $c)
    {
        error('Nie masz pieniędzy!');
    }
        else
    {
       if($player -> credits < 10000)
    {
        error('Nie masz pieniędzy!');
    }
        $db -> Execute('UPDATE players SET pokrzywa =  pokrzywa + 1 WHERE id = '.$player -> id);
        $db -> Execute('UPDATE players SET credits = credits - 10000 WHERE id='.$player -> id);
        error('Otrzymałeś jedną pokrzywę!');
    }
}
    else
{
    
}

$smarty -> display('pokrzywa2.tpl');

require_once('includes/foot.php');
?>
