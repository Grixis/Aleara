<?php
/**
 *   File functions:
 *   Show Best Players in Game
 */

$title = 'Ranking Gildii';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
/**
* Get the localization for game
*/
require('languages/'.$player -> lang.'/rankingguild.php');



$smarty -> cache_dir = 'cache/';
$smarty -> caching = 2;
$smarty -> cache_lifetime = 500;   // Ranking will be refreshed after 1 hour from first viewing.

if (!$smarty -> is_cached('rankingguild.tpl'))
{
    $oldFetchMode = $db -> SetFetchMode(ADODB_FETCH_NUM);
/// TODO: Po wywaleniu pola z bazy danych warto zmienić to "r" w zapytaniu na "ranking". W *.tpl-ce zmieniłem komórki tabeli <td> nagłówkowe na <th> i wyciepałem większość stylowania. Aranwe tam miał ze Sleszem coś fajnego dla tabel przygotować. Wiem, że chudo wygląda, ale może to puści na 2 kolumny albo coś... Widzę że muszę jakiś tutorialowy artykuł przygotować z GetAll i FETCH_NUM, bo z użyciem cieńko :)
    $arrStats = $db -> GetAll('SELECT `owner`, `name`, `prest`, `prest` AS `r`  FROM `tribes` ORDER BY `prest` DESC');

    $smarty -> assign_by_ref('arrStats', $arrStats);
    $db -> SetFetchMode($oldFetchMode);
    $smarty -> display('rankingguild.tpl');
    unset($arrStats);
}
else
{
    $smarty -> display('rankingguild.tpl');
}

$smarty -> caching = 0;
require_once('includes/foot.php');
?>
