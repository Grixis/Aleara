<?
/**
* Vermilion based on Vallheru
* @functions: train players
* @copyrights: 2006 for thion
* @author: thion <thion@o2.pl>
* @version: 0.1 alfa
*/

$title = 'Wieża mistrza walki';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if(isset($_GET['action']) && $_GET['action'] == 'training')
{
    if($player -> energy < 1)
    {
        error('Nie masz energii!');
    }
    
    $intRand = rand(1,100);
    $intRoll = rand(37,100);
    if($intRand == $intRoll)
    {
        $intStats = rand(1,6);
        $arrStats = array('siły',
                  'zręczności',
                  'wytrzymałości',
                  'inteligencji',
                  'siły woli',
                  'szybkości');
        $arrQueries = array('strength',
                    'agility',
                    'cond',
                    'inteli',
                    'wisdom',
                    'speed');
        $add = rand(1,3);
        $statistic = $arrStats[$intStats];
        $query = $arrQueries[$intStats];
        
        $db -> Execute('UPDATE `players` SET `'.$query.'` = `'.$query.'` + 0.'.$add.' WHERE `id` = '.$player -> id);
        $db -> Execute('UPDATE `players` SET `energy` = `energy` - 1 WHERE `id` = '.$player -> id);
        
        error('Trenowałeś długo, lecz czas tu spędzony nie okazał się stracony - zyskałeś +0.'.$add.' '.$statistic.'!<br /><a href="trainer.php?action=training">Trenuj dalej</a> lub <a href="trainer.php">Wróć</a>');
    }
        else
    {
        $db -> Execute('UPDATE `players` SET `energy` = `energy` - 1 WHERE `id` = '.$player -> id);
        error('Trenowałeś długo, lecz mistrz i tak nie udzielił ci wskazówek...<br /><a href="trainer.php?action=training">Trenuj dalej</a> lub <a href="trainer.php">Wróć</a>');
    }
}
$smarty -> display('trainer.tpl');

require_once('includes/foot.php');
?>
