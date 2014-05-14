<?php

define('NO_LIFE', 'Nie masz wystarczająco dużo życia aby walczyć.');
define('A_REFRESH', 'Odśwież');
define('FIGHT1', 'Nie możesz wędrować po górach, ponieważ jesteś w trakcie walki!<br />Napotkałeś ');
define('FIGHT2', '. Czy chcesz spróbować walki?');
define('FIGHT3', 'Nie możesz wędrować po lesie, ponieważ jesteś w trakcie walki!<br />Napotkałeś ');
define('Y_TURN_F', 'Tak (turowa walka)');
define('Y_NORM_F', 'Tak (szybka walka)');
define('YOU_WANT', 'Czy chcesz zwiedzać dalej?');
define('YOU_MEET', 'Napotkałeś');

if (isset($_GET['step']) && $_GET['step'] == 'run') 
{
    define('ESCAPE_SUCC', 'Udało Ci się uciec przed');
    define('ESCAPE_SUCC2', 'Zdobywasz za to');
    define('ESCAPE_SUCC3', 'PD.');
    define('ESCAPE_FAIL', 'Nie udało Ci się uciec przed');
    define('ESCAPE_FAIL2', 'Rozpoczyna się walka');
    define('R_SPE4', 'szybkości');
    define('NO_MONSTER', 'Nie masz przed czym uciekać');
}

if (isset($_GET['action']))
{
    define('TIRED2', 'Nie masz tyle energii');
    define('HERB1', ' Illani<br />');
    define('HERB2', ' Illanias<br />');
    define('HERB3', ' Nutari<br />');
    define('HERB4', ' Dynallca<br />');
    define('T_MAPS', ' kawałków map<br />');
    define('T_ASTRALS', ' astralnych komponentów<br />');
    define('FIND_NOTHING', 'Niestety nie znalazłeś nic ciekawego.<br /><br />');
    define('T_AMOUNT2', ' energii.<br /><br />');
    define('YOU_FIND', 'Zdobyłeś:<br /><br />');
    define('T_GOLD', ' sztuk złota<br />');
}

if ($player -> hp > 0 && !isset($_GET['action']) && $player -> location == 'Las' && !isset($_GET['step'])) 
{
    define('M_INFO', 'Dookoła siebie widzisz wysokie szczyty Gór Przeznaczenia. Czy chcesz zobaczyć co znajduje się wśród nich? Każde zwiedzanie kosztuje 0,5 energii.');
}

if ($player -> location == 'Las')
{
    define('HOW_MUCH', 'Chcę przeznaczyć na wędrówkę po górach');;
    define('T_ENERGY', 'energii.');
    define('T_WALK', 'Wędruj');
    define('YOU_DEAD2', 'Nie możesz wędrować po górach ponieważ jesteś martwy');
}

if (isset ($_GET['action']) && $_GET['action'] == 'moutains' && $player -> location == 'Las') 
{
	
    if (!isset($_GET['step']))
    {
        define('ACTION8', ' W pewnym momencie dostrzegasz przed sobą most linowy przerzucony nad przepaścią. Obok wejścia na most stoi zakapturzona postać. Kiedy podchodzisz bliżej, odwraca się w twoim kierunku i cichym zmęczonym głosem mówi: <i>To Most Śmierci, tylko najmądrzejsi mogą tędy przejść na drugą stronę. Jeżeli chcesz przejść przez most musisz odpowiedzieć na 3 pytania. Jeżeli ci się uda, otrzymasz nagrodę. Jeżeli nie odpowiesz poprawnie - zginiesz. </i>Czy chcesz spróbować przejść przez most?<br />');
        define('YOU_GO', 'Przeznaczyłeś na zwiedzanie gór ');
        define('T_METEOR', ' kawałków meteorytu<br />');
	if (!defined('YOU_DEAD'))
	{
		define('YOU_DEAD', 'Nie możesz zwiedzać gór ponieważ jesteś martwy');
	}
    }
        else
    {
        define('ONLY_ONCE', 'Możesz odpowiedzieć na pytania tylko raz na reset!');
        define('F_QUESTION', 'Dobrze oto pierwsze pytanie: <b>Od ilu wiosen kopalnia jest zamknięta?');
        define('A_NEXT', 'Dalej');
        define('S_QUESTION', 'Doskonale, odpowiedziałeś na pierwsze pytanie! Oto drugie pytanie: <b>Przez ile lat kopalnia funkcjonowała?');
        define('T_QUESTION', 'Doskonale, odpowiedziałeś na drugie pytanie! Cóż za niezwykła inteligencja! Oto trzecie pytanie');
        define('Q_FAIL', 'Niestety podałeś błędną odpowiedz. Wróć tutaj jak będziesz znał poprawną odpowiedź!');
        define('Q_SUCC', 'Brawo. Odowiedziałeś na wszystkie pytania. <a href=losowanie.php>Możesz teraz wybrać swoję magiczną kartę</a>');
        define('Q_SUCC2', '');
    }
}

if ($player -> hp > 0 && !isset ($_GET['akcja']) && $player -> location == 'Las' && !isset($_GET['step'])) 
{
    define('F_INFO', 'Przed sobą widzisz ścianę Lasu Zbłąkanych Dusz. Wąska ścieżka prowadząca w głąb lasu niknie już po chwili za zakrętem. Zewsząd otaczają Cię stare, wysokie drzewa, słychać dookoła śpiew ptactwa, gdzieś z lasu dochodzą odgłosy życia zwierząt. Czy chcesz dalej podążać leśną ścieżką? Każde zwiedzanie kosztuje 0,5 energii.');
}

if ($player -> location == 'Las')
{
	if (!defined('F_INFO'))
	{
		define('F_INFO', 'Przed sobą widzisz ścianę Lasu Krętych Ścieżek. Wąska ścieżka prowadząca w głąb lasu niknie już po chwili za zakrętem. Zewsząd otaczają Cię stare, wysokie drzewa, słychać dookoła śpiew ptactwa, gdzieś z lasu dochodzą odgłosy życia zwierząt. Czy chcesz dalej podążać leśną ścieżką? Każde zwiedzanie kosztuje 0,5 energii.');
	}
    define('HOW_MUCH', 'Chcę przeznaczyć na wędrówkę po lesie');
    define('T_ENERGY', 'energii.');
    define('T_WALK', 'Wędruj');
    define('YOU_DEAD2', 'Nie możesz wędrować po lesie ponieważ jesteś martwy');
}

if (isset ($_GET['action']) && $_GET['action'] == 'forest' && $player -> location == 'Las') 
{
    define('YOU_GO', 'Przeznaczyłeś na zwiedzanie lasu ');
    define('T_ENERGY2', ' energii<br />');
}
?>
