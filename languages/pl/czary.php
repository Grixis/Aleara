<?php

define('B_SPELL', 'Czar bojowy: ');
define('B_DAMAGE', 'Inteligencja obrażeń');
define('S_DEACTIV', 'Dezaktywuj czar');
define('S_NONE', 'brak');
define('D_SPELL', 'Czar obronny: ');
define('D_DEFENSE', 'Siła Woli obrony');
define('ERROR', 'Zapomnij o tym!');
define('NO_SPELL', 'Nie posiadasz takiego czaru!');
define('NOT_YOUR', 'To nie twój czar!');
define('E_SPELL1', 'Utwardzenie przedmiotu');
define('E_SPELL2', 'Ulepszenie przedmiotu');
define('E_SPELL3', 'Umagicznienie przedmiotu');
define('E_SPELL4', 'Naładowanie kostura');
define('S_EFECT1', 'Zwiększa wytrzymałość nagolenników, broni, zbroi, tarczy, hełmu.');
define('S_EFECT2', 'Zwiększa atak w przypadku brani białej i strzał, obronę w przypadku nagolenników, hełmu, tarczy, zbroi.');
define('S_EFECT3', 'Zwiększa premię szybkości łuku i broni białej, oraz premię zręczności zbroi, nagolenników, tarczy, hełmu.');
define('S_EFECT4', 'Zmienia kostur w magiczny, który przestaje być bronią białą a daje premię do siły czarów');
define('TO_LOW_L', 'Nie masz odpowiednio wysokiego poziomu!');
define('S_REFRESH', 'odśwież');
define('USED_SPELLS', 'Obecnie używane czary');
define('SPELL_BOOK', 'Czary w księdze');
define('B_SPELLS', 'Czary bojowe');
define('D_SPELLS', 'Czary obronne');
define('E_SPELLS', 'Czary użytkowe');
define('USE_THIS', 'Używaj tego czaru');
define('YOU_ARE_NOT_MAGICIAN', 'Nie możesz używać czarów ponieważ nie jesteś magiem!');
define('CAST_THIS', 'Rzuć ten czar');

if (isset($_GET['cast'])) 
{
    define('NO_MANA', 'Nie masz tyle punktów magii!');
    define('NO_ITEM', 'Nie ma takiego przedmiotu!');
    define('NOT_YOUR2', 'Ten przedmiot nie należy do ciebie!');
    define('IS_MAGIC', 'Ten przedmiot jest już umagiczniony!');
    define('NO_ENERGY', 'Nie masz tyle energii!');
    define('NO_ENCHANCE', 'Nie możesz umagiczniać tego przedmiotu!');
    define('YOU_RISE', 'Rzuciłeś czar na ');
    define('FOR_A', ' o mocy ');
    define('NOW_IS', '! Jest to teraz przedmiot magiczny! Zdobyłeś ');
    define('S_EXP', ' Punktów Doświadczenia oraz ');
    define('S_CAST', ' punktów w umiejętności rzucanie czarów<br />');
    define('E_DB', 'Nie mogę dodać');
    define('YOU_TRY', 'Próbowałeś umagicznić ');
    define('BUT_FAIL', ' ale niestety nie udało się. Na skutek nieudanego zaklęcia przedmiot niszczy się! Dostajesz 0.01 do umiejętności rzucania czarów.');
    define('NOT_ABLE1', 'Nie można zwiększyć siły łuków');
    define('NOT_ABLE2', 'Nie można zwiększyć wytrzymałości strzał');
    define('YOU_RISE2', 'Rzuciłeś czar na ');
    define('YOU_RISE3', 'Rzuciłeś czar na ');
    define('YOU_RISE4', 'Rzuciłeś czar na ');
    define('NOT_ABLE3', 'Nie możesz umagicznić tego przedmiotu!');
    define('CAST', 'Rzuć');
    define('SPELL', 'czar');
    define('ON_A', 'na');
    define('I_AMOUNT', 'sztuk');
    define('I_DRAGON' ,'Smoczy ');
    define('I_DRAGON2', 'Smocza ');
    define('I_DRAGON3', 'Smocze ');
    define('I_ELVES', 'Elfi ');
    define('I_ELVES2', 'Elfie ');
    define('I_ELVES3', 'Elfia ');
    define('I_DWARVES', 'Krasnoludzki ');
    define('I_DWARVES2', 'Krasnoludzka ');
    define('I_DWARVES3', 'Krasnoludzkie ');
    define('I_COPPER', ' z miedzi');
    define('I_BRONZE', ' z brązu');
    define('I_BRASS', ' z mosiądzu');
    define('I_IRON' ,' z żelaza');
    define('I_STEEL', ' ze stali');
    define('I_HAZEL', 'z leszczyny');
    define('I_YEW', 'z cisu');
    define('I_ELM', 'z wiąz');
    define('I_HARDER', 'wzmocniony');
    define('I_COMPOSITE', 'kompozytowy');
}

if (isset($_GET['naucz'])) 
{
    define('ONLY_MAGE', 'Tylko mag może używać czarów!');
    define('YOU_USE', 'Używasz');
}
?>
