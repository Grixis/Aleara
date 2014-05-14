<?php

$title = 'Panel Administracyjny';
require_once('includes/head.php');

/**
* Get the localization for game
*/
require_once('languages/'.$player -> lang.'/staff.php');

if ($player -> rank != 'Admin' && $player -> rank != 'Namiestnik' && $player -> rank != "Hrabia" && $player -> rank != "Strażnik Miejski")
{
    error (YOU_NOT);
}

if (isset($_GET['view']))
{
    $arrView = array('takeaway', 'clearc', 'czat', 'jail', 'innarchive', 'banmail', 'addtext', 'changenick');
    $intKey = array_search($_GET['view'], $arrView);
    if ($intKey !== false)
    {
        require_once('includes/admin/'.$arrView[$intKey].'.php');
    }
}

/**
* Initialization of variables
*/
if (!isset($_GET['view']))
{
    $_GET['view'] = '';
    $smarty -> assign(array('Panelinfo' => PANEL_INFO,
                            'Anews' => A_NEWS,
                            'Atake' => A_TAKE,
                            'Aclear' => A_CLEAR,
                            'Achat' => A_CHAT,
                            'Ajail' => A_JAIL,
                            'Aaddnews' => A_ADD_NEWS,
                            'Ainnarchive' => A_INNARCHIVE,
                            'Abanmail' => A_BAN_MAIL,
                            'Achangenick' => A_CHANGE_NICK));
}

if (!isset($_GET['action']))
{
    $_GET['action'] = '';
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array('View' => $_GET['view'],
                        'Action' => $_GET['action']));
$smarty -> display('staff.tpl');

require_once('includes/foot.php');
?>
