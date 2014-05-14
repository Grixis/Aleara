<?php

$title = 'Lista mieszkańców';
require_once('includes/head.php');
require_once('includes/security.php');

/**
* Get the localization for game
*/
require_once('languages/'.$player -> lang.'/memberlist.php');

if (($player -> location != 'Altara' && $player -> location != 'Ardulith') && ($player -> rank != 'Admin' && $player -> rank != 'Staff'))
{
	error (ERROR);
}

$oldFetchMode = $db -> SetFetchMode(ADODB_FETCH_NUM);
define('LIMIT', 30);    // Results per page.

if (isset($_GET['ip']) && !isset($_GET['id']) && !isset($_GET['name'])) // Admin/Staff member clicked IP link in view.php
{
    $_GET['id'] = 0;
    $_GET['name'] = '';
}

$strQuery = 'SELECT `id`, `user`, `rank`, `rasa`, `klasa`, `gender`'.($player -> rank == 'Admin' || $player -> rank == 'Staff' ? ',`ip`' : '').' FROM `players` ';
$strCountQuery = 'SELECT count(*) FROM `players` ';
$strOrder = '';
$strLimit =  ' LIMIT '.(isset($_GET['start']) ? strictInt($_GET['start']).', ' : '').LIMIT;

if (isset($_GET['orderby']) && in_array($_GET['orderby'], array('id', 'user', 'rank', 'rasa', 'klasa', 'ip')))
{
    $strOrder = ' ORDER BY `'.$_GET['orderby'].'`';
    if (isset($_GET['order']) && in_array($_GET['order'], array('ASC', 'DESC')))
        $strOrder .= $_GET['order'];
}
else
    $strOrder = ' ORDER BY `id` ASC';

if (isset($_GET['id']))
{
    strictInt($_GET['id']);
    sqlLikeString($_GET['name']);
    sqlLikeString($_GET['ip']);
    if ($_GET['id'] > 0)
    {
        $strQuery .= 'WHERE `id`='.$_GET['id'];
        $strCountQuery .= 'WHERE `id`='.$_GET['id'];
    }
    elseif ($_GET['name'] != '')
    {
        $strQuery .= 'WHERE `user` LIKE '.$_GET['name'];
        $strCountQuery .= 'WHERE `user` LIKE '.$_GET['name'];
    }
        elseif ($_GET['ip'] != '' && ($player -> rank == 'Admin' || $player -> rank == 'Staff'))
        {
            $strQuery .= 'WHERE `ip` LIKE '.$_GET['ip'];
            $strCountQuery .= 'WHERE `ip` LIKE '.$_GET['ip'];
        }
}

$arrData = $db -> GetAll($strQuery.$strOrder.$strLimit);    // Get current part of searched data.
$arrCount = $db -> GetRow($strCountQuery);                  // Get info about total number of matching players.

if (!empty($arrData))
{
/**
* Prepare links for list paging and ordering.
* We need 2 types of links. Both must contain "search method" and:
* Links in top columns must have 'start', but not 'orderby' and 'order'
* Links below table must have pagination with different 'start' values, but same 'orderby' and 'order'
*/
    $strBaseTopLink = 'memberlist.php?';
    $strBaseBottomLink = 'memberlist.php?';
    foreach ($_GET as $key => $value)
    {
        if ($key != 'start')
            $strBaseBottomLink .= $key.'='.str_replace("'", "", $value).'&amp;';
        if ($key != 'order' && $key != 'orderby')
            $strBaseTopLink .= $key.'='.str_replace("'", "", $value).'&amp;';
    }

    $arrCount[0] = ceil($arrCount[0] / LIMIT);
    for ($i = 0, $arrLinks = array(); $i < $arrCount[0];++$i)
        $arrLinks[] = '<a href="'.$strBaseBottomLink.'start='.($i * LIMIT).'">'.($i + 1).'</a>';

    unset($strBaseBottomLink);
/// Convert database ranks to normal names (based on rank and gender).
    require_once('includes/ranks.php');
    for ($i = 0, $max = count($arrData);$i < $max; ++$i)
        $arrData[$i][2] = selectrank($arrData[$i][2], $arrData[$i][5]);

    $smarty -> assign_by_ref('Data', $arrData);
    $smarty -> assign_by_ref('Pagelinks', $arrLinks);
    $smarty -> assign(array('TopLink' => $strBaseTopLink,
                            'Current' => isset($_GET['start']) && $_GET['start'] % LIMIT == 0 ? $_GET['start'] / LIMIT + 1: 1));
}

$db -> SetFetchMode($oldFetchMode);

/**
* Assign variables to template and display page
*/
$smarty -> assign('Rank', $player -> rank);
$smarty -> display ('memberlist.tpl');
if (isset($arrData))
    unset($arrData, $arrLinks, $strBaseTopLink);
require_once('includes/foot.php');
?>
