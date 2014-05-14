<?php

define('ERROR', 'Zapomnij o tym');
define('GOLD_COINS', 'sztuk złota.');
define('YOU_DEAD', 'Jesteś martwy!');

if (isset($_GET['action'])) 
{
    define('NO_AMOUNT', 'Podaj ile czasu chcesz spędzić pracując!');
    define('NO_ENERGY', 'Nie masz tyle energii aby pracować.');
    define('IN_WORK', 'Podczas pracy zużyłeś');
    define('IN_WORK2', 'punkt(ów) energii i zarobiłeś');
    define('A_BACK', 'Wróć');
}
    else
{
	if ($player -> location == 'Altara')
	{
        	define('LAND_INFO', 'Idąc obrzeżami Aleary widzisz na horyzoncie duży Dwór. Podchodzisz bliżej. Przed Tobą znajduje się wielka brama. Przechodzisz i zbliżasz się do drzwi z zamierzeniem uderzenia w kołatkę. Chcąc to uczynić drzwi otwierają się same. Przed Tobą staje wielki, mroczny serafin i mówi:<br><i>-Odnalazłeś nas... Odnalazłeś zaginiony Dwór Krutynów... Nielicznym się to udaje, dlatego pozwolę Ci zarobić jeśli chcesz...</i>');
	}
	if ($player -> location == 'Ardulith')
	{
        	define('LAND_INFO', 'Idąc obrzeżami Aleary widzisz na horyzoncie duży Dwór. Podchodzisz bliżej. Przed Tobą znajduje się wielka brama. Przechodzisz i zbliżasz się do drzwi z zamierzeniem uderzenia w kołatkę. Chcąc to uczynić drzwi otwierają się same. Przed Tobą staje wielki, mroczny serafin i mówi:<br><i>-Odnalazłeś nas... Odnalazłeś zaginiony Dwór Krutynów... Nielicznym się to udaje, dlatego pozwolę Ci zarobić jeśli chcesz...</i>');
	}


    define('A_WORK', 'Chcę pracować dla Ciebie, o wielki Panie! Poświęcę na to:');
    define('TIMES', 'energii.');
}
?>
