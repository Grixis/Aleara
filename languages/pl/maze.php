<?php

define('NO_LIFE', 'Nie masz wystarczająco dużo życia aby walczyć.');
define('FIGHT2', '. Czy chcesz spróbować walki?');
define('FIGHT1', 'Nie możesz wędrować po opuszczonym szybie, ponieważ jesteś w trakcie walki!<br />Napotkałeś ');
define('Y_TURN_F', 'Tak (turowa walka)');
define('Y_NORM_F', 'Tak (szybka walka)');
define('YOU_MEET', 'Napotkałeś');
define('A_EXPLORE', 'Zwiedzaj dalej');

if (isset($_GET['step']) && $_GET['step'] == 'run')
{
    define('ESCAPE_SUCC', 'Udało ci się uciec przed');
    define('ESCAPE_SUCC2', 'Zdobywasz za to');
    define('ESCAPE_SUCC3', 'PD.');
    define('ESCAPE_FAIL', 'Nie udało ci się uciec przed');
    define('ESCAPE_FAIL2', 'Rozpoczyna się walka');
    define('R_SPE5', 'szybkości');
}

if (!isset($_GET['action']))
{
    define('MAZE_INFO', '
Przed Tobą znajdują się zamknięte i zaplombowane, grube, stalowe wrota, strzeżone przez dwóch orkowych wojowników. Jest to wejście do starego, w dawnych czasach eksploatowanego szybu górniczego. Dziś jednak jest on zapieczętowany, a wejście do niego blokuje potężna brama. Nikt dokładnie nie wie kto i dlaczego wybudował takie zabezpieczenie. Jednak niewątpliwe miejsce to stanowi źródło niebezpieczeństwa dla Aleary. Roi się tam od różnego rodzaju plugastwa, potworów czy pułapek. Jednak niezbadane korytarze stanowią magnes dla poszukiwaczy przygód i zapomnianych skarbów. Spoglądasz na surowe twarze strażników trwających beznamiętnie na swoim posterunku. Zastanawiasz się czy warto podjąć ryzyko i wejść w nieznane, prastare zakamarki opuszczonej kopalni. Czy chcesz podjąć to wyzwanie?');
}
    else
{
	if(!defined('NO_ENERGY'))
    define('NO_ENERGY', 'Nie masz energii!!');
	if(!defined('YOU_DEAD'))
    	define('YOU_DEAD', 'Nie możesz zwiedzać, ponieważ jesteś martwy!');
    define('EMPTY_1', 'Wędrujesz sobie przez zawalone szyby kopalni. Poza szkieletami jakichś istot i starymi zabudowaniami nic tutaj cennego znaleźć nie możesz…');
    define('EMPTY_2', 'Po jakimś czasie opierasz się o ścianę. Zaczynasz tracić wiarę, że cokolwiek cennego tutaj się może znajdować…');
    define('EMPTY_3', 'Na Twojej drodze coś błyszczy w świetle pochodni. Podbiegasz szybko aby zobaczyć czy to jakaś biżuteria. Niestety okazuje się, że to tylko kawałek szkła…');
    define('EMPTY_4', 'Potykasz się o jakąś olbrzymią bryłę węgla. Upadasz na ziemię. Wstajesz powoli i idziesz dalej…');
    define('EMPTY_5', 'Idziesz wąskim korytarzem. Nagle słyszysz za sobą jakiś szum. Odwracasz się i dostrzegasz, że korytarz zapada się tuż za Tobą. Zaczynasz szybko biegnąć. Udało Ci się uciec…');
    define('EMPTY_6', 'Twoją uwagę odwracają stare, żelazne drzwi. Jesteś ciekaw co znajduje się za nimi. Niestety po długich usiłowaniach otworzenia drzwi – zrezygnowałeś…');
    define('F_HERBS', 'Na swojej drodze znalazłeś trochę zioła. Postanawiasz je wziąć. Zdobyłeś ');
    define('I_AMOUNT', ' sztuk ');
    define('F_LUMBER', 'Na swojej drodze znalazłeś trochę drewna. Postanawiasz je wziąć. Zdobywasz ');
    define('T_PINE', ' drewna sosnowego.');
    define('T_HAZEL', ' drewna z leszczyny.');
    define('T_YEW', ' drewna cisowego.');
    define('T_ELM', ' drewna z wiązu.');
    define('F_MITHRIL', 'Na swojej drodze odnalazłeś sporo mithrilu. Postanawiasz go zabrać ze sobą. Zdobyłeś ');
    define('M_AMOUNT', ' sztuk mithrilu. Zatrzymujesz je i kontynuujesz wędrówkę.');
    define('F_ENERGY', ' Widzisz przed sobą jakieś źródło. Podchodzisz. Pijesz wode z niego i czujesz się dużo lepiej. Otrzymujesz 1 energii...');
    define('F_STAFF', ' Twoją uwagę zwraca jedna smukły przedmiot leżący za księgą. Podnosisz go. To ');
    define('F_STAFF2', '! Postanawiasz wziąć ją ze sobą.');
    define('F_ASTRAL', 'Idziesz po labiryncie i napotykasz na stary wytarty kawałek papieru. Okazuje się że jest to ');
}
?>
