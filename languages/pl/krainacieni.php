<?php
/**
 *   File functions:
 *   Labyrynth in forrest city
 *
 *   @name                 : maze.php
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.3
 *   @since                : 30.10.2006
 *
 */

//
//
//       This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; either version 2 of the License, or
//   (at your option) any later version.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//
// $Id: maze.php 799 2006-10-30 14:42:24Z thindil $

define('NO_LIFE', 'Nie masz wystarczająco dużo życia aby ukazać opór.');
define('FIGHT2', '. Czy chcesz spróbować odprzeć atak?');
define('FIGHT1', 'Nie możesz szukać trupów, ponieważ jesteś w trakcie walki!<br />Umarlak okazuje wrogość ');
define('Y_TURN_F', 'Nie jestem w stanie walczyć... uciekam....');


define('YOU_MEET', 'Umarlak okazuje wrogość a jest nim ');
define('A_EXPLORE', 'Szukaj zmarłych do wskrzeszenia');

if (isset($_GET['step']) && $_GET['step'] == 'run')
{
    define('ESCAPE_SUCC', 'Udało ci się uciec przed wskrzeszonym przez innego Nekromantę');
    define('ESCAPE_SUCC2', 'Za wskrzeszeniae zdobywasz');
    define('ESCAPE_SUCC3', 'PD.');
    define('ESCAPE_FAIL', 'Nie udało ci się uciec przed Zmarłym');
    define('ESCAPE_FAIL2', 'Rozpoczyna się walka');
    define('R_SPE5', 'szybkości');
}

if (!isset($_GET['action']))
{
    define('MAZE_INFO','Przechodzisz obok starego cmentarza, gdzie pochowane są całe rodziny mieszkańców Coweritany. Plotki głoszą, że co jakiś czas Kostucha otwiera bramy, by okoliczni Nekromanci mogli powiększać swe armie...');
}
    else
{
	if(!defined('Zabiłeś Krzykacza'))
    define('NO_ENERGY', 'Nie masz energii!!');
	if(!defined('YOU_DEAD'))
    	define('YOU_DEAD', 'Nie możesz wskrzeszać, ponieważ jesteś martwy!');
    define('EMPTY_1', 'Zmarły jesk za bardzo posiekany... nic z nim nie zrobisz...');
    define('EMPTY_2', 'Zmarły podlega hipnizie innego Nekromanty');
    define('EMPTY_3', 'Zmarły uciekł Ci');
    define('EMPTY_4', 'Chyba nie chcesz ożywić korzenia drzewa?');
    define('EMPTY_5', 'Nie udało Ci się użyć czaru');
    define('EMPTY_6', 'Piłeś coś? Za bardzo Ci się częsą ręce...');
    define('F_HERBS', 'Twój czar był za mocny i zabiłeś Krzykacza. Otrzymujesz bonus do zapału. Zdobyłeś ');
    define('I_AMOUNT', '  ');
    define('F_LUMBER', 'Twój czar był za mocny i zabiłeś Krzykacza. Otrzymujesz bonus do zapału. Zdobywasz ');
    define('T_PINE', ' drewna sosnowego.');
    define('T_HAZEL', ' drewna z leszczyny.');
    define('T_YEW', ' drewna cisowego.');
    define('T_ELM', ' drewna z wiązu.');
    define('F_MITHRIL', 'To mithril! Udaje Ci się odnaleźć ');
    define('M_AMOUNT', ' sztuk mithrilu. Zatrzymujesz je i kontynuujesz wskrzeszanie.');
    define('F_ENERGY', ' Postawiłeś zmarłego na nogi, za co otrzymałeś sporo energii.');
    define('F_STAFF', ' Twoją uwagę zwraca jedna smukły przedmiot leżący za księgą. Podnosisz go. To ');
    define('F_STAFF2', '! Postanawiasz wziąć ją ze sobą.');
    define('F_ASTRAL', 'Szukając zmarłych napotykasz na stary wytarty kawałek papieru. Okazuje się że jest to ');
}
?>
