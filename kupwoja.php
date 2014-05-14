<?php
/**
* Vermilion based on Vallheru
* @function: sell items too vallars
* @copyrights: 2006 for thion
* @author: thion <thion@o2.pl>
* @version: 0.1 alfa
*/

$title = 'Grota w Diabolium';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if (isset($_GET['action']) and $_GET['action'] == 'buy')
{
     if ($player -> credits < 200000) error("Nie masz tyle złota");
   
    $query = "INSERT INTO `wojp` (`owner`, `base`, `petname`, `attack`, `defence`, `speed`, `status`, `fights`, `wins`, `loses`, `age`, `rest`, `gender`, `prize`, `max_hp`, `hp`) VALUES (".$player -> id.", 1, 'Wojownik Płomieni', 10.000, 10.000, 10.000, 'N', 0, 0, 0, 1, 0, 'M', NULL, 20.000, 20.000)";
    $db -> Execute($query);
    $db -> Execute("UPDATE players SET credits=credits-200000 WHERE id=".$player -> id);
    error('Za 200000 sztuk złota otrzymałeś <b>Wojownika Płomieni</b>!');
}
$smarty -> display('kupwoja.tpl');
require_once('includes/foot.php');

?>
