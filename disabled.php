<?php
/**
* Vermilion based on Vallheru
* @function: sell items too vallars
* @copyrights: 2006 for thion
* @author: thion <thion@o2.pl>
* @version: 0.1 alfa
*/

$title = 'Zmień Status';
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
$smarty -> display('niewidok.tpl');
require_once('includes/foot.php');

?>
