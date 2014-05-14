<?php
/**
 *   File functions:
 *   Polish language for clans
 *
 *   @name                 : tribes.php
 *   @copyright            : (C) 2004,2005,2006,2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : mori <ziniquel@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @author               : Erechail <kuba.stasiak at gmail.com>
 *   @version              : 1.3a
 *   @since                : 17.07.2007
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
// $Id: tribes.php 898 2007-02-24 21:24:28Z thindil $

define("ERROR", "Zapomnij o tym!");

if (!isset ($_GET['view']) && !isset($_GET['join']))
{
    define("MAKE_NEW", "Stwórz nową gildię (500,000 sztuk złota)");
    define("CLAN_INFO", "<p><i>Siedziby gildii</i></p>");
    define("A_SHOW", "Zobacz listę gildii");
}

if (isset ($_GET['view']) && $_GET['view'] == 'all')
{
    define("NO_CLANS", "<br />Na razie nie ma jakiejkolwiek gildii.");
    define("SHOW_INFO", "Tutaj jest lista wszystkich gildii.");
    define("LEADER", "przywódca");
}

if (isset ($_GET['view']) && $_GET['view'] == 'view')
{
    define("NO_CLAN", "Nie ma takiej gildii!");
    define("CLAN_PAGE", "Strona gildii");
    define("LEADER", "Przywódca");
    define("YOU_SEE", "Oglądasz");
    define("LEADER2", "Przywódca:");
    define("MEM_AMOUNT", "Liczba członków");
    define("A_MEMBERS", "Członkowie");
    define("WIN_AMOUNT", "Wygranych walk");
    define("LOST_AMOUNT", "Przegranych walk");
    define("JOIN_TO", "Dołącz do gildii");
    define("A_JOIN", "Dołącz");
    define("MEMBER_LIST", "Lista członków gildii");
    define("A_STEAL", "Ukradnij astralny komponent");
    define("ASTRAL", "Postęp prac nad Astralną Machiną: ");
    define("ASTRAL1", "Przygotowuje się");
    define("ASTRAL2", "Rozpoczął");
    define("ASTRAL3", "Buduje");
    define("ASTRAL4", "Wykańcza");
    define("ASTRAL5", "Niemalże ukończył");
    define("ASTRAL6", "Ukończył");
    if (isset($_GET['step']) && $_GET['step'] == 'steal')
    {
        define("NO_CRIME", "Nie możesz próbować kradzieży astralnego komponentu, ponieważ niedawno próbowałeś już swoich sił!");
        define("YOU_DEAD", "Nie możesz okradać gildii ponieważ jesteś martwy");
        define("SAME_CLAN", "Nie możesz okradać gildii do której należysz!");
        define("VERDICT", "Próba kradzieży astralnego komponentu");
        define("L_REASON", "Zostałeś wtrącony do więzienia na 2 dni za próbę kradzieży astralnego komponentu. Możesz wyjść z więzienia za kaucją: ");
        define("C_CACHED", "Kiedy próbowałeś dostać się do astralnego skarbca, zauważyli ciebie strażnicy. Błyskawicznie otoczyli i zmusili do poddania. I tak oto znalazłeś się w lochach.");
        define("NO_AMOUNT", "Szczęśliwie pokonałeś wszelkie przeszkody i niezauważony zbliżasz się do astralnego skarbca. Kiedy wchodzisz do środka i rozglądasz się w około masz ochotę zawyć ze złości. Nic tutaj nie ma! Tyle nerwów na marne. Zdenerwowany opuszczasz skarbiec.");
        define("SUCCESFULL", "Ostrożnie, mijając wszystkie zastawione pułapki wchodzisz do astralnego skarbca. Twoim oczom ukazuje się długo oczekiwany widok - w około leżą różne astralne komponenty. Nie mając za bardzo czasu przyjrzeć się im dokładnie, chwytasz szybko jeden z nich i opuszczasz skarbiec. To twój szczęśliwy dzień! Ukradłeś");
        define("L_CACHED", "Mieszkaniec ");
        define("L_CACHED2", ", ID: <b>");
        define("L_CACHED3", "</b> próbował ukraść astralny komponent z twojej gildii. Na szczęście został pojmany przez strażników.");
        define("ASTRAL_GONE", "Kiedy przeglądałeś astralne komponenty należące do twojej gildii, zauważyłeś że jednego brakuje. Ktoś prawdopodobnie okradł twoją gildię! Ze skarbca zniknął");
        define("COMP1", "Ząb Glabrezu");
        define("COMP2", "Ognisty pył");
        define("COMP3", "Pazur Zgłębiczarta");
        define("COMP4", "Łuska Skorpendry");
        define("COMP5", "Macka Krakena");
        define("COMP6", "Piorun Tytana");
        define("COMP7", "Żebro Licha");
        define("CONST1", "Astralny komponent");
        define("CONST2", "Gwiezdny portal");
        define("CONST3", "Świetlny obelisk");
        define("CONST4", "Płomienny znicz");
        define("CONST5", "Srebrzysta fontanna");
        define("POTION1", "Magiczna esensja");
        define("POTION2", "Gwiezdna maść");
        define("POTION3", "Eliksir Illuminati");
        define("POTION4", "Astralne medium");
        define("POTION5", "Magiczny absynt");
        define("MAP1", "Plan demoniczny");
        define("MAP2", "Plan ognisty");
        define("MAP3", "Plan piekielny");
        define("MAP4", "Plan pustynny");
        define("MAP5", "Plan wodny");
        define("MAP6", "Plan niebiański");
        define("MAP7", "Plan śmiertelny");
        define("PLAN1", "Astralny komponent");
        define("PLAN2", "Gwiezdny portal");
        define("PLAN3", "Świetlisty obelisk");
        define("PLAN4", "Płomienny znicz");
        define("PLAN5", "Srebrzysta fontanna");
        define("RECIPE1", "Magiczna esensja");
        define("RECIPE2", "Gwiezdna maść");
        define("RECIPE3", "Eliksir Illuminati");
        define("RECIPE4", "Astralne medium");
        define("RECIPE5", "Magiczny absynt");
        define("PIECE", " kawałek mapy/planu <b>");
        define("COMPONENT", " kompletny komponent <b>");
    }
}

if (isset($_GET['join']))
{
    define("YOU_IN_CLAN", "Jesteś w gildii!");
    define("L_PLAYER", "Gracz ");
    define("L_ID", "</a></b>, ID ");
    define("HE_WANT", " prosi o przyjęcie do gildii.");
    define("YOU_SEND", "Wysłałeś swoje zgłoszenie do gildii ");
    define("YOU_WAIT", "Oczekujesz już na wejście do inneej gildii! Czy chcesz zmienić swoje zgłoszenie?");
}

if (isset ($_GET['view']) && $_GET['view'] == 'make')
{
    define("NO_MONEY", "Nie masz tylu sztuk złota.");
    define("YOU_IN_CLAN", "Jesteś już w gildii!");
    define("NO_NAME", "Podaj nazwę gildii.");
    define("YOU_MAKE", "Stworzyłeś nową gildię, <i>");
    define("CLAN_NAME", "Nazwa gildii");
    define("A_MAKE", "Załóż");
    define("YOU_DEAD", "Nie możesz założyć gildii ponieważ jesteś martwy!");
}

if (isset ($_GET['view']) && $_GET['view'] == 'my')
{
    define("NOT_IN", "Nie jesteś w gildii!");
    define("CLAN_PAGE", "Strona gildii");
    define("L_PLAYER", "Gracz");
    define("L_ID", "</a></b>, ID ");
    define("NOT_IN_CLAN", "Ten gracz nie jest w twojej gildii!");
    define("MY_CLAN", "Moja gildia");
    define("MENU1", "Główna");
    define("MENU2", "Dotuj");
    define("MENU3", "Członkowie");
    define("MENU4", "Zbrojownia");
    define("MENU5", "Magazyn");
    define("MENU6", "Skarbiec");
    define("MENU7", "Zielnik");
    define("MENU8", "Opuść gildię");
    define("MENU9", "Opcje przywódcy");
    define("MENU10", "Forum gildii");
    define("MENU11", "Astralny skarbiec");
    if (!isset($_GET['step']))
    {
        define("WELCOME", "Witaj w swojej gildii.");
        define("CLAN_NAME", "Nazwa gildii");
        define("MEM_AMOUNT", "Liczba członków");
        define("LEADER", "Przywódca");
        define("GOLD_COINS", " Sztuk(i) złota ");
        define("MITH_COINS", "Sztuk(i) mithrilu");
        define("WIN_AMOUNT", "Wygranych walk");
        define("LOST_AMOUNT", "Przegranych walk");
        define("T_SOLDIERS", "Żołnierzy");
        define("T_FORTS", "Fortyfikacji");
        define("UNKNOWN", "Nieznane");
        define("A_MACHINE", "Astralna maszyna");
        define("A_PERCENT", "wykonano");
    }
    if (isset($_GET['step']) && $_GET['step'] == 'astral')
    {
        define("NO_COMPONENTS", "Gildia nie może budować astralnej machiny ponieważ brakuje mu komponentów!");
        define("ASTRAL_BUILD", "Gildia nie może budować astralnej machiny ponieważ już została ona wybudowana!");
        define("A_USED", "Do tej pory przeznaczono na budowę");
        define("A_ENERGY", "energii.");
        define("A_TODAY", "Dzisiaj przeznaczono na budowę");
        define("A_MAX", "Maksymalnie");
        define("A_DIRECT", "Przeznacz");
        define("A_FORM", "na wykonanie astralnej maszyny");
        define("NO_ENERGY", "Nie masz tyle energii!");
        define("TOO_MUCH", "W sumie gildia nie może przeznaczyć więcej niż 2000 energii w ciągu jednego dnia!");
        define("TOO_MUCH2", "Nie możesz przeznaczyć więcej energii niż potrzeba!");
        define("YOU_ADD", "Dodałeś ");
        define("A_REFRESH", "Odśwież");
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'donate')
    {
        define("GOLD_COINS", " sztuk(i) złota ");
        define("MITH_COINS", "sztuk(i) Mithrilu");
        define("NO_AMOUNT", "Nie masz wystarczająco dużo ");
        define("YOU_GIVE", "Dałeś swojej gildii <b>");
        define("HE_ADD", " dodał do skarbca gildii ");
        define("DON_INFO", "Proszę daj pieniądze swojej gildii i pomóż jej finansowo.");
        define("A_DONATE", "Dotuj");
        define("GOLD_COINS2", " Sztuk(i) Złota ");
        define("MITH_COINS2", "Sztuk(i) Mithrilu");
        define("TO_CLAN", " do swojej gildii.");
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'zielnik')
    {
        define("HERB1", "Illani");
        define("HERB2", "Illanias");
        define("HERB3", "Nutari");
        define("HERB4", "Dynallca");
        define("HERB5", "Nasiona Illani");
        define("HERB6", "Nasiona Illanias");
        define("HERB7", "Nasiona Nutari");
        define("HERB8", "Nasiona Dynallca");
        define("NO_AMOUNT", "Zielarnia nie ma takiej ilości ");
        define("YOU_SEND1", "Wyciągnięto z zasobów gildii przez gracza: ");
        define("YOU_SEND2", ", ID ");
        define("YOU_GET", "Dostałeś od zielarni ");
        define("NO_AMOUNT2", "Nie masz takiej ilości ");
        define("YOU_ADD", "Dodałeś <b>");
        define("TO_CLAN", "</b> do zielarni gildii.");
        define("HE_ADD", " dodał do zielarni gildii ");
        define("HERBS_INFO", "Witaj w zielarni gildii. Tutaj są składowane zioła należące do gildii. Każdy członek gildii może ofiarować gildii jakieś zioła ale tylko przywódca lub osoba upoważniona przez niego może darować dane zioła członkom swojej gildii. Aby dać jakieś zioła członkom gildii, kliknij na nazwę owego zioła");
        define("WHAT_YOU", "Co chcesz zrobić?");
        define("A_GIVE_TO", "Dać zioła do zielarni");
        define("GIVE_PLAYER", "Daj graczowi ID:");
        define("A_GIVE", "Daj");
        define("ADD_HERB", "Dodaj zioła do zielnika");
        define("HERB", "Zioło");
        define("H_AMOUNT", "Sztuk(i)");
        define("A_ADD", "Dodaj");
        define("T_AMOUNT", "z posiadanych");
        define("H_AMOUNT2", "sztuk");
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'skarbiec')
    {
        define("MIN1", "Rudy miedzi");
        define("MIN2", "Rudy cynku");
        define("MIN3", "Rudy cyny");
        define("MIN4", "Rudy żelaza");
        define("MIN5", "Sztabki miedzi");
        define("MIN6", "Sztabki brązu");
        define("MIN7", "Sztabki mosiądzu");
        define("MIN8", "Sztabki żelaza");
        define("MIN9", "Sztabki stali");
        define("MIN10", "Bryły węgla");
        define("MIN11", "Bryły adamantium");
        define("MIN12", "Kawałki meteorytu");
        define("MIN13", "Kryształy");
        define("MIN14", "Drewno sosnowe");
        define("MIN15", "Drewno z leszczyny");
        define("MIN16", "Drewno cisowe");
        define("MIN17", "Drewno z wiązu");
        define("MINE1", "rudy miedzi");
        define("MINE2", "rudy cynku");
        define("MINE3", "rudy cyny");
        define("MINE4", "rudy żelaza");
        define("MINE5", "sztabek miedzi");
        define("MINE6", "sztabek brązu");
        define("MINE7", "sztabek mosiądzu");
        define("MINE8", "sztabek żelaza");
        define("MINE9", "sztabek stali");
        define("MINE10", "brył węgla");
        define("MINE11", "brył adamantium");
        define("MINE12", "kawałków meteorytu");
        define("MINE13", "kryształów");
        define("MINE14", "drewna sosnowego");
        define("MINE15", "drewna z leszczyny");
        define("MINE16", "drewna cisowego");
        define("MINE17", "drewna z wiązu");
        define("NO_AMOUNT", "W magazynie nie ma takiej ilości ");
        define("CLAN_SEND1", "Pożyczono - ");
        define("CLAN_SEND2", ", ID ");
        define("YOU_SEND", "Przekazałeś graczowi ID ");
        define("YOU_GET", "Dostałeś od magazynu ");
        define("NO_AMOUNT2", "Nie masz takiej ilości ");
        define("YOU_ADD", "Dodałeś <b>");
        define("TO_CLAN", "</b> do magazynu gildii.");
        define("HE_ADD", " dodał do magazynu gildii ");
        define("PIECES", " sztuk(i) ");
        define("MIN_INFO", "Witaj w magazynie gildii. Tutaj są składowane minerały należące do gildii. Każdy członek gildii może ofiarować gildii jakiś minerał ale tylko przywódca lub osoba upoważniona przez niego może darować dany minerał członkom swojej gildii. Aby dać jakiś minerał członkom gildii, kliknij na nazwę owego minerału.");
        define("WHAT_YOU", "Co chcesz zrobić?");
        define("A_GIVE_TO", "Dać minerały do magazynu");
        define("GIVE_PLAYER", "Daj graczowi ID:");
        define("A_GIVE", "Daj");
        define("ADD_MIN", "Dodaj minerały do magazynu");
        define("MINERAL", "Minerał");
        define("M_AMOUNT", "Ilość minerału");
        define("A_ADD", "Dodaj");
        define("T_AMOUNT", "z posiadanych");
        define("M_AMOUNT2", "sztuk");
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'members')
    {
        define("LEADER", "Przywódca");
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'quit')
    {
        define("L_LEADER", "Opuszczasz gildię. Ponieważ jesteś przywódcą, gildia została usunięta.");
        define("L_MEMBER", "Opuszczasz gildię.");
        define("Q_LEADER", "Czy na pewno chcesz odejść z gildii? Jeżeli to zrobisz, gildia zostanie zlikwidowana!");
        define("Q_MEMBER", "Czy na pewno chcesz odejść z gildii?");
        define("M_LEAVE", " opuścił Twoją gildię.");
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'owner')
    {
        define("NO_PERM2", "Tylko przywódca lub osoba upoważniona może przebywać tutaj!");
        define("NOT_LEADER", "Nie masz prawa tutaj przebywać.");
        define("PANEL_INFO", "Witaj w panelu przywódcy gildii. Co chcesz zrobić?");
        define("A_PERM", "Ustawić uprawnienia członków gildii");
        define("A_RANK", "Ustawić rangi członkom gildii");
        define("A_DESC", "Edytować opis gildii, wiadomość dla członków oraz herb gildii i stronę gildii");
        define("A_WAITING", "Sprawdź listę oczekujących na dołączenie do gildii");
        define("A_KICK", "Wyrzucić Członka");
        define("A_ARMY", "Dokupić żołnierzy lub fortyfikacji do gildii");
        define("A_ATTACK2", "Zaatakować inną gildię");
        define("A_LOAN", "Pożycz pieniądze członkowi");
        define("A_MISC", "Dodatki gildii");
        define("A_MAIL2", "Wyślij pocztę do członków gildii");
        if (isset ($_GET['step2']) && $_GET['step2'] == 'rank')
        {
            define("GIVE_RANK", "Daj członkowi gildii rangę");
            define("RANK_CREATED", "Rangi utworzone");
            define("BACK_TO", "Wróć do menu rang");
            define("RANK_CHANGED", "Rangi zmienione");
            define("NO_RANKS", "Nie ma określonych rang!<br />");
            define("YOU_GIVE", "Dałeś graczowi ID ");
            define("T_RANK", " rangę: ");
            define("RANKS_INFO", "Tutaj możesz ustawić rangi członkom swojej gildii, jak również określić ich nazwy. Maksymalnie możesz ustalić 10 rang.");
            define("A_ADD_RANKS", "Stwórz nowe rangi lub edytuj istniejące");
            define('NO_RANKS2', 'Na razie nie posiadasz określonych rang i tagów w gildii! Tutaj właśnie możesz je stworzyć. Możesz je wpisywać w dowolnej kolejności, dodatkowo nie musisz wypełniać wszystkich pól (możesz na przykład zrobić tylko 3 rangi z tagami).<br/>Uwaga! Prefix i sufix tagu gildyjnego mogą mieć łącznie nie więcej niż 9 znaków.');
            define("RANK", "ranga");
			define ('TAG_PREFIX', 'prefix tagu');
			define ('TAG_SUFIX', 'Wspólny sufix tagu');

            define("EDIT_RANKS", "W tym miejscu możesz edytować lub dodawać nowe rangi. Możesz też określić odpowiednie dla poszczególnych rang tagi gildyjne. Główny tag (sufix) razem z tagiem dodatkowym, zależnym od rangi może mieć maksymalnie 9 znaków. Pamiętaj, że <b>spacja także liczy się jako znak</b>!");
            define("A_MAKE", "Utwórz");
            define("A_SAVE", "Zapisz");
            define("SET_RANK", "Ustaw rangę");
            define("RANK_PLAYER", "graczowi o ID");
            define("A_SET", "Ustaw");
            define("TOO_LONG_TAG", "Tag jest za długi!");
        }
        if (isset ($_GET['step2']) && $_GET['step2'] == 'permissions')
        {
            define("ONLY_LEADER", "Tylko przywódca może ustawiać zezwolenia!");
            define("BACK_TO", "Wróć do menu przywódcy");
            define("YOU_SET", "Ustawiłeś uprawnienia członkowi gildii.");
            define("PERM_INFO", "Tutaj możesz ustawić uprawnienia do różnych miejsc dowolnym członkom gildii. Wybierz z listy odpowiedniego członka gildii a następnie ustaw mu odpowiednie uprawnienia. Nie ma ograniczeń co do ilości osób uprawnionych.");
            define("T_PERM1", "Może edytować opisy gildii");
            define("T_PERM2", "Może dołączać nowych członków");
            define("T_PERM3", "Może wyrzucać członków z gildii");
            define("T_PERM4", "Może kupować żołnieży oraz fortyfikacje");
            define("T_PERM5", "Może wykonywać ataki na inną gildię");
            define("T_PERM6", "Może zabierać złoto i mithril");
            define("T_PERM7", "Może dawać przedmioty ze zbrojowni");
            define("T_PERM8", "Może dawać przedmioty z labolatorium");
            define("T_PERM9", "Może zabierać minerały z magazynu");

            define("T_PERM10", "Może zabierać zioła z magazynu");
            define("T_PERM11", "Może kasować posty na forum");
            define("T_PERM12", "Może ustalać rangi członkom gildii");
            define("T_PERM13", "Może wysyłać listy do członków gildii");
            define("T_PERM14", "Nie może oglądać informacji o gildii");
            define("T_PERM15", "Może łączyć astralne plany, dawać je członkom gildii");
            define("A_SAVE", "Zapisz");
            define("A_NEXT", "Dalej");
            define("T_USER", "Nadaj uprawnienia: ");
        }
        if (isset($_GET['step2']) && $_GET['step2'] == 'mail')
        {
            define("T_BODY", "Treść");
            define("A_SEND", "Wyślij");
            define("EMPTY_FIELDS", "Wypełnij wszystkie pola!");
            define("YOU_SEND", "Wysłałeś(aś) wiadomość do członków swojej gildii");
            define("T_TITLE", "Tytuł");
            define("T_CLAN", "<b>[Gildia]</b> ");
        }
        if (isset ($_GET['step2']) && $_GET['step2'] == 'wojsko')
        {
            define("NO_PERM", "Tylko przywódca lub osoba upoważniona może kupować żołnierzy i fortyfikacje do gildii!");
            define("EMPTY_FIELDS", "Wypełnij chociaż jedno pole!");
            define("NO_MONEY", "Gildia nie ma tyle sztuk złota");
            define("YOU_BUY", "Kupiłeś dla swojej gildii ");
            define("SOLDIERS", " żołnierzy za ");
            define("BARRICADES", " fortyfikacji za ");
            define("FOR_A", " sztuk(i) złota<br />");
            define("ALL_COST", "W sumie wydałeś na wszystko ");
            define("ARMY_INFO", "Tutaj możesz dokupić żołnierzy oraz fortyfikacje dla gildii. Żołnieże dodają do siły ataku twojej gildii, natomiast fortyfikacje dodają do jego obrony. Koszt pojedynczego żołnieża lub fortyfikacji wynosi: ilość żołnieży(bądź fortyfikacji) kupowanych * 1000 sztuk złota.");
            define("HOW_MANY_S", "Ilu żołnierzy chcesz kupić?");
            define("HOW_MANY_F", "Ile fortyfikacji chcesz kupić?");
            define("A_BUY", "Kupuj");
            define("SOMEONE_BUY", "Zakupiono dla gildii ");
            define("ALL_COST2", "W sumie wydano na wszystko ");
        }
        if (isset ($_GET['step2']) && $_GET['step2'] == 'nowy')
        {
            define("YOU_DROP", "Odrzuciłeś kandydata o ID ");
            define("L_TRIBE", "Gildia ");
            define("L_DROP", " odrzucił twoją kandydaturę.");
            define("YOU_ACCEPT", "Zaakceptowałeś kandydata o ID ");
            define("L_ACCEPT", " przyjął twoją kandydaturę. Jesteś już członkiem gildii.");
            define("WAIT_LIST", "Lista oczekujących");
            define("T_ID", "ID gracza");
            define("T_ACCEPT", "Dodaj");
            define("T_DROP", "Odrzuć");
        }
        if (isset ($_GET['step2']) && $_GET['step2'] == 'walka')
        {
            define("ONLY_ONE", "Gildia może atakować inne gildie tylko raz na reset!");
            define("A_ATTACK", "Atakuj gildię ");
            define("SELECT_TRIBE", "Wybierz gildię, który chcecie zaatakować");
            define("YOU_WANT", "Naprawdę chcesz zaatakować gildię ");
            define("L_TRIBE", "Gildia ");
            define("ATTACK_YOU", " zaatakowała i pokonała Twoją gildię. Staciliście 3 prestiżu, ");
            define("GOLD_COINS", " sztuk(i) złota oraz ");
            define("MITHRIL_COINS", " sztuk(i) mithrilu!");
            define("ATTACK_YOU2", " zaatakowała i został pokonany przez Twoją gildię. Zdobyliście 5 prestiżu, ");
            define("SELECT_CLAN", "Wybierz gildię, którą chcecie zaatakować");
            define("YOU_WIN", "Stoisz razem ze swoimi towarzyszami i przyjaciółmi przed armią . Zaraz zacznie się bitwa... ATAK!!! Słyszysz jak przywodca gildii");
            define("YOU_WIN2", "wykrzyknął komendę do jego towarzyszy. Ruszasz razem z twoimi podwładnymi w wir walki.");
            define("YOU_WIN3", "Wygraliście tę wspaniałą bitwę. <b>Otrzymujecie 5 prestiżu!!!</b> Ze skarbca pokonanej gildii wynieśliście");
            define("ENEMY_WIN2", "wykrzyknął komende do jego towarzyszy. Ruszasz razem z twoimi podwładnymi i zaczyna sie bitwa. Atakujesz przywodcę gildii");
            define("ENEMY_WIN3", "i podczas walki giniesz. Przegraliście tą walkę... <b>Tracicie 3 prestiżu!!!</b>  Z waszego skarbca przeciwnik wyniósł");
            define("WIN_COMPONENT", " Oprócz tego ze skarbca pokonanej gildii wynosicie");
            define("WIN_COMPONENT2", " Oprócz tego z waszego skarbca przeciwnicy wynoszą");
            define("COMP_AND", " i ");
            define("COMP1", "Ząb Glabrezu");
            define("COMP2", "Ognisty pył");
            define("COMP3", "Pazur Zgłębiczarta");
            define("COMP4", "Łuska Skorpendry");
            define("COMP5", "Macka Krakena");
            define("COMP6", "Piorun Tytana");
            define("COMP7", "Żebro Licha");
            define("CONST1", "Astralny komponent");
            define("CONST2", "Gwiezdny portal");
            define("CONST3", "Świetlny obelisk");
            define("CONST4", "Płomienny znicz");
            define("CONST5", "Srebrzysta fontanna");
            define("POTION1", "Magiczna esensja");
            define("POTION2", "Gwiezdna maść");
            define("POTION3", "Eliksir Illuminati");
            define("POTION4", "Astralne medium");
            define("POTION5", "Magiczny absynt");
            define("MAP1", "Plan demoniczny");
            define("MAP2", "Plan ognisty");
            define("MAP3", "Plan piekielny");
            define("MAP4", "Plan pustynny");
            define("MAP5", "Plan wodny");
            define("MAP6", "Plan niebiański");
            define("MAP7", "Plan śmiertelny");
            define("PLAN1", "Astralny komponent");
            define("PLAN2", "Gwiezdny portal");
            define("PLAN3", "Świetlisty obelisk");
            define("PLAN4", "Płomienny znicz");
            define("PLAN5", "Srebrzysta fontanna");
            define("RECIPE1", "Magiczna esensja");
            define("RECIPE2", "Gwiezdna maść");
            define("RECIPE3", "Eliksir Illuminati");
            define("RECIPE4", "Astralne medium");
            define("RECIPE5", "Magiczny absynt");
            define("PIECE", " kawałek mapy/planu/wzorku/przepisu <b>");
            define("COMPONENT", " kompletny komponent <b>");
        }
        if (isset ($_GET['step2']) && $_GET['step2'] == 'messages')
        {
            define("WWW_SET", "Adres strony ustawiony na");
            define("A_REFRESH", "Odśwież");
            define("LOGO_DEL", "Herb usunięty.");
            define("NO_FILE", "Nie ma takiego pliku!<br />");
            define("BAD_TYPE", "Zły typ pliku!");
            define("NO_COPY", "Nie skopiowano pliku!");
            define("LOGO_LOAD", "Herb załadowany!");
            define("MSG_CHANGED", "Wiadomość została zmieniona.");
            define("CLAN_DESC", "Opis gildii");
            define("MSG_TO_MEM", "Wiadomość dla członków");
            define("A_CHANGE", "Zmień");
            define("A_SET", "Zatwierdź");
            define("CLAN_SITE", "Adres strony gildii (wpisz bez http://)");
            define("LOGO_INFO", "Tutaj możesz zmienić herb swojej gildii. <b>Uwaga!</b> Jeżeli gildia już posiada herb, stary zostanie skasowany. Maksymalny rozmiar herbu to 10 kB. Herb możesz załadować tylko z własnego komputera. Musi on mieć rozszerzenie *.jpg, *.jpeg, *.gif lub *.png");
            define("A_DELETE", "Skasuj");
            define("A_SEND", "Wyślij");
            define("LOGO_NAME", "Nazwa pliku graficznego");
        }
        if (isset ($_GET['step2']) && $_GET['step2'] == 'kick')
        {
            define("NO_ID", "Podaj ID gracza!");
            define("YOU_DROP", "Zostałeś wyrzucony z ");
            define("D_ID", "ID ");
            define("NOT_IS", " nie jest już członkiem gildii.");
            define("IS_LEADER", "Nie możesz wyrzucić Przywódcy.");
            define("KICK_ID", "Wyrzuć ID");
            define("FROM_CLAN", "z gildii");
            define("A_KICK2", "Wyrzuć");
            define("CLAN_KICK1", "Gracz ");
            define("CLAN_KICK2", ", ID ");
            define("HAS_BEEN", " został wyrzucony z gildii ");
        }
        if (isset ($_GET['step2']) && $_GET['step2'] == 'loan')
        {
            define("GOLD_COINS", " sztuk(i) złota ");
            define("MITHRIL_COINS", "sztuk(i) mithrilu");
            define("EMPTY_FIELDS", "Wypełnij wszystkie pola!");
            define("NO_AMOUNT", "W magazynie nie ma tyle ");
            define("SEND_YOU", "Pożyczyłeś sobie ");
            define("YOU_GIVE", "Pożyczyłeś ID ");
            define("A_LOAN2", "Pożycz");
            define("PLAYER_ID", "osobie o ID ");
            define("CLAN_GIVE1", "Wyciągnięto z zasobów gildii przez gracza: ");
            define("CLAN_GIVE2", ", ID ");
        }
        if (isset ($_GET['step2']) && $_GET['step2'] == 'te')
        {
            define("NO_MITH", "W magazynie nie ma tyle sztuk mithrilu");
            define("A_BACK", "wróć");
            define("CLAN_HAVE", "Gildia posiada zniżkę na leczenie w szpitalu");
            define("MISC_INFO", "Witaj w panelu dodatków gildii. Co chcesz zrobić?");
            define("A_FREE_HEAL", "Kup zniżkę na leczenie w szpitalu dla gildii (100 sztuk mithrilu)");
            define("YOU_BUY", "Kupiłeś zniżkę na leczenie dla członków swojej gildii w szpitalu");
        }
    }
}
?>
