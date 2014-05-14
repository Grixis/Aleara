<?php
/**
* Vermilion based on Vallheru
* @function: sell items too vallars
* @copyrights: 2006 for thion
* @author: thion <thion@o2.pl>
* @version: 0.1 alfa
*/

$title = 'Zmiana szablonu';
require_once('includes/head.php');
$db -> Execute("UPDATE players SET graphic='hell', style='hell.css' WHERE id=".$player -> id);
header("Location: card.php"); 

require_once('includes/foot.php');

?>
