<?php

$title = 'Posągi';
require('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
require('languages/'.$player -> lang.'/monuments.php');

if ($player -> location != 'Altara' && $player -> location != 'Ardulith')
{
    error (ERROR);
}

// Setup Smarty caching, normally this should go to includes/head.php
$smarty -> cache_dir = 'cache/';
$smarty -> caching = 2;
$smarty -> cache_lifetime = 400;   // Monuments will be refreshed after 1 hour from first viewing.
// End of Smarty setup.

if (!$smarty -> is_cached('monuments.tpl'))
{
    // Store old fetch mode (probably ADODB_FETCH_ASSOC, defined in includes/config.php) and set new, a bit faster.
    $oldFetchMode = $db -> SetFetchMode(ADODB_FETCH_NUM);
    $arrMonuments = array(array('level', 'wins', 'credits`+`bank', 'rary'),
                          array('strength', 'wytrz', 'inteli', 'wisdom', 'szyb', 'agility'),
                          array('atak', 'shoot', 'magia', 'unik', 'leadership', 'bosswalki', 'nughorgwalki', 'rotogony', 'walkieyoy'),
                          array('ability', 'fletcher', 'alchemia', 'herbalist', 'jeweller', 'breeding', 'mining', 'lumberjack', 'hutnictwo', 'gotowanie', 'wskrzeszanie', 'wampiryzm', 'alkoholizm', 'utrans', 'hipnoza', 'warzenie', 'houselure', 'najemnicy'));

    for ($i=0, $max1 = sizeof($arrMonuments), $arrResult = array(); $i<$max1; $i++)
    {
        for ($j=0, $max2 = sizeof($arrMonuments[$i]), $arrResult[$i] = array(); $j<$max2; $j++)
        {
            $arrResult[$i][$j] = $db -> GetAll('SELECT `id`, `user`, `'.$arrMonuments[$i][$j].'` FROM `players` ORDER BY `'.$arrMonuments[$i][$j].'` DESC LIMIT 10');
        }
    }
    // Restore old mode.
    $db -> SetFetchMode($oldFetchMode);
    // Assign by reference - less copying, less memory used.
    $smarty -> assign_by_ref('Groups', $arrGroups);
    $smarty -> assign_by_ref('Titles', $arrTitles);
    $smarty -> assign_by_ref('Descriptions', $arrDescriptions);
    $smarty -> assign_by_ref('Monuments', $arrResult);
    $smarty -> display ('monuments.tpl');
    // After this point, arrays aren't used and can be safely destroyed. Free memory!
    unset($arrGroups, $arrTitles, $arrDescriptions, $arrMonuments, $arrResult);
}
    else
{
    $smarty -> display ('monuments.tpl');
}
// Disable caching, to ensure that foot.php works in good, old, ineffective way.
$smarty -> caching = 0;
require('includes/foot.php');
?>
