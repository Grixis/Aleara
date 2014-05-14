<?php

$title = '';
require_once('includes/head.php');

/**
* Get the localization for game
*/

require_once("languages/".$player -> lang."/bank.php");

$smarty -> display ('szukaam.tpl');

require_once("includes/foot.php");

?>
