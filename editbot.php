<?php
/**
* Vermilion based on Vallheru
* @function: sell items too vallars
* @copyrights: 2006 for thion
* @author: thion <thion@o2.pl>
* @version: 0.1 alfa
*/
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$title = 'Ukryty Panel';
require_once('includes/head.php');

if(isset($_POST['submit']))
{
    switch($_POST['item'])
{
case 'dostepny':
$n = 'dostepny';
$c = 'dostepny';
break;
case 'niewidok':
$n = 'invisible';
$c = 'invisible';
break;

}
    
$db -> Execute("UPDATE players SET gametype='$n' WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET gametype='$n' WHERE id=".$player -> id);

    error('Wybrałeś status: <b>'.$n.'</b>!');
}
$smarty -> display('editbot.tpl');
require_once('includes/foot.php');

?>
