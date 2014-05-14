<?php

$title = "x";
require_once("includes/head.php");

$smarty -> assign("Message", '');
//
if (isset ($_GET['action']) && $_GET['action'] == 'kop') {
    if (isset($_GET['dalej'])) {
        if ($_POST['rep'] <= 0) {
            error ("Chcę kluczy:");
        }
        if (!ereg("^[1-9][0-9]*$", $_POST['rep'])) {
            error ("Zapomnij o tym");
        }
        
        $razy = ($_POST['rep'] * 100);
        if ($player -> platinum < $razy) {
            error ("Nie masz tyle mithrilu!");
        }
        $smarty -> assign ("Message", "Otrzymałeś ".$_POST['rep']." kluczy.");
        
    }
}


if (!isset($_GET['action'])) {
    $_GET['action'] = '';
}

$smarty -> assign( array("Action" => $_GET['action']));


require_once("includes/foot.php");
?>
