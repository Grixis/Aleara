<?php
/**
* Vermilion based on Vallheru
* @function: sell items too vallars
* @copyrights: 2006 for thion
* @author: thion <thion@o2.pl>
* @version: 0.1 alfa
*/

$title = 'Tablica Wskrzesicieli Krutynów';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}

$smarty -> display('tablicak.tpl');
require_once('includes/foot.php');

?>
