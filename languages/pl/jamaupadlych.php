<?php
/**
 *   File functions:
 *   Polish language for skarbiec.php
 *
 *   @name                 : skarbiec.php
 *   @copyright            : Orodlin Team based on Gamers-Fusion ver 2.5
 *   @author               : Mzaszatko
 *   @version              : 1.3
 *   @since                : 28.04.2007
 *
 */


define('ERROR', 'Zapomnij o tym!');
define('DESCRIPTION', '');
define('ADDDAY', 'Wpłać (zysk 1%, czas 5 resetów)');
define('ADDWEEK', 'Wpłać (zysk 20%, czas 100 resetów)');
define('DEPOSITS', 'Twoje lokaty');
define('CITYRETURN', 'Wróć do Diabolium');

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'addday')
{
define('D_ADDDAY', 'Szybka lokata ');
define('D_PAYDAY', 'Wpłać');

        if (isset ($_GET['step']) && $_GET['step'] == 'payday')
        {
        define('D_YOUPAY', 'Wpłacono ');
        define('D_YOUPAYGOLD', ' sztuk złota do skarbca.');
        define('D_EMPTYMONEY', 'Wpisz kwotę!');
        define('D_EMPTY', 'Wypełnij wszystkie pola!');
        define('D_NOMONEY', 'Nie masz przy sobie tyle złota!');
        define('D_RETURN', 'Wróć');
        }
}

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'addweek')
{
define('W_ADDWEEK', '');
define('W_PAYWEEK', 'Wpłać');

        if (isset ($_GET['step']) && $_GET['step'] == 'payweek')
        {
        define('W_YOUPAY', 'Wpłacono ');
        define('W_YOUPAYGOLD', ' sztuk złota.');
        define('W_EMPTYMONEY', 'Wpisz kwotę!');
        define('W_EMPTY', 'Wypełnij wszystkie pola!');
        define('W_NOMONEY', 'Nie masz przy sobie tyle złota!');
        define('W_RETURN', 'Wróć');
        }
}

if (isset ($_GET['akcja']) && $_GET['akcja'] == 'deposits')
{
define('M_AMOUNT', 'Ilość złota');
define('M_TIME', 'Czas do wypłaty');
define('M_TYPE', 'Procent');
define('M_RETURN', 'Wróć');
define('M_DESCRIPTION', 'Oto twoje lokaty:');
}

?>
