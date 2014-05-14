<?php

$title = "Olimpiada";
require_once("includes/head.php");

/**
* Get the localization for game
*/
require_once("languages/".$player -> lang."/stats.php");

/**
* Assign variables to template
*/

/**
* Assign variable and display page
*/
$smarty -> assign ("Action", $_GET['action']);
$smarty -> display ('olimpiada.tpl');

require_once("includes/foot.php");
?>
