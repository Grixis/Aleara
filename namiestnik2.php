<?php

$title = 'Panel Administracyjny';
require_once('includes/head.php');
require_once('languages/'.$player -> lang.'/admin.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if ($player -> rank != 'Admin' && $player -> rank != 'Staff' && $player -> rank != 'Królowa Potępionych' && $player -> rank != 'Namiestnik' && $player -> rank != "Hrabia")
{
    error (NOT_ADMIN);
}

$smarty -> assign('Message', '');

/**
 * Functions from includes/admin dir
 */
if (isset($_GET['view']))
{
    $arrView = array('takeaway', 'clearc', 'czat', 'jail', 'innarchive', 'banmail', 'addtext', 'changenick', 'addreps', 'weather', 'newsy', 'kroniki');
    $intKey = array_search($_GET['view'], $arrView);
    if ($intKey !== false)
    {
        require_once('includes/admin/'.$arrView[$intKey].'.php');
    }
}


if (!isset($_GET['view']))
{
    $_GET['view'] = '';
    $arrTitles = array();
    $arrOptions = array(array(),
                        array(),
                        array(),
                        array(),
                        array(),
                        array());
    $arrDescriptions = array(array (),
                             array(),
                             array(),
                             array (),
                             array(),
                             array());
    $smarty -> assign(array('Awelcome' => A_WELCOME,
                            'Titles' => $arrTitles,
                            'Options' => $arrOptions,
                            'Descriptions' => $arrDescriptions));
}
    else
{
    $smarty -> assign('Aback', A_BACK);
}

if (!isset($_GET['step']))
{
    $_GET['step'] = '';
}

if (!isset($_GET['action']))
{
    $_GET['action'] = '';
}

/**
* Assign variables and display page
*/
$smarty -> assign(array('View' => $_GET['view'],
                        'Step' => $_GET['step'],
                        'Action' => $_GET['action']));
$smarty -> display('namiestnik2.tpl');

require_once('includes/foot.php');

?>
