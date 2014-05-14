<?php

define('NO_LIFE', 'Nie masz wystarczająco dużo życia aby walczyć.');
define('FIGHT2', '. Jak walczysz?');
define('FIGHT1', 'Najpierw pokonaj to co ztanęło na Twojej dordze!<br />Napotkałeś ');
define('Y_TURN_F', '(turowa walka)');
define('Y_NORM_F', '(szybka walka)');
define('YOU_MEET', 'Napotkałeś');
define('A_EXPLORE', 'Podążaj dalej szukając Mrocznego Maga');

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
    define('MAZE_INFO', 'Witaj w bramach miekieł, czy jesteś pewnien, że chcesz rozpocząć przygodę?');
}
   
{
	if(!defined('NO_ENERGY'))
    define('NO_ENERGY', 'Nie masz energii!!');
	if(!defined('YOU_DEAD'))
    	define('YOU_DEAD', 'Jesteś martwy!');
    define('EMPTY_1', 'Ani śladu maga...');
    define('EMPTY_2', 'Błąkałeś się tutaj, ale nie dostrzegłeś');
    define('EMPTY_3', 'Nic nie widzisz na swojej drodze... Miejsce wydaje sie być opustoszałe...');
    define('EMPTY_4', 'Jakieś stagocie... Nie biorę...');
    define('EMPTY_5', 'Nic tu nie ma');
    define('EMPTY_6', 'Nie wiem co to, więc lepiej to zostawię');
    define('F_HERBS', 'Znalazłes zioła. Zdobyłeś ');
    define('I_AMOUNT', ' sztuk ');
    define('F_LUMBER', 'Znalazłes drewno. Zdobywasz ');
    define('T_PINE', ' drewna sosnowego.');
    define('T_HAZEL', ' drewna z leszczyny.');
    define('T_YEW', ' drewna cisowego.');
    define('T_ELM', ' drewna z wiązu.');
    define('F_MITHRIL', 'To mithril! Udaje Ci się odnaleźć ');
    define('M_AMOUNT', ' sztuk mithrilu. Zatrzymujesz je i kontynuujesz poszukiwanie Mrocznego Maga.');
    define('F_ENERGY', ' Odzyskujesz 1 energi.');
    define('F_STAFF', ' Twoją uwagę zwraca jedna smukły przedmiot leżący za księgą. Podnosisz go. To ');
    define('F_STAFF2', '! Postanawiasz wziąć ją ze sobą.');
    define('F_ASTRAL', 'Idziesz po pustkowiu i napotykasz na stary wytarty kawałek papieru. Okazuje się że jest to ');
}
?>
