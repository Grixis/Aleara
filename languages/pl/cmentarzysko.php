<?php

define('ERROR', 'Zapomnij o tym!');
define('R_AGI', 'zręczności');
define('R_STR', 'siły');
define('R_INT', 'inteligencji');
define('R_WIS', 'woli');
define('R_SPE', 'szybkości');
define('R_CON', 'wytrzymałości');

if (isset ($_GET['action']) && $_GET['action'] == 'explore')
{
    define('NO_ENERGY', 'Nie masz wystarczająco energii aby podróżować po cmentarzysku.');
    define('YOU_DEAD', 'Nie możesz przeszukiwać cmentarzyska diaburiona ponieważ jesteś martwy!');
    define('CHEST', 'Wędrując po cmentarzysku w pewnym momencie w oddali dostrzegasz niewielką, okutą żelazem skrzynię. Podchodzisz do niej i');
    define('CHEST2', ' rozwalasz ją przy pomocy własnej broni.');
    define('CHEST3', ' rozwalasz ją przy użyciu zaklęcia.');
    define('CHEST4', ' przyglądając się jej uważnie, dostrzegasz na boku niewielki przycisk. Kiedy go naciskasz, wieko skrzyni unosi się.');
    define('CHEST5', 'Wewnątrz dostrzegasz zwój starego pergaminu. Ostrożnie wyciągasz go i uważnie przyglądasz się. To kawałek mapy skarbów. Delikatnie chowasz ją w plecaku.');
    define('ACTION1', 'Idziesz przez dłuższy czas rozglądając się wkoło lecz nic tu nie ma poza kośćmi.');
    define('ACTION2', 'Wędrowałeś bardzo długo, lecz nic nie odwróciło Twojej uwagi...');
    define('ACTION3', 'Znalazłeś sakwę! Znajduje się w niej');
    define('ACTION3_1', 'sztuk złota.');
    define('ACTION4', 'Idziesz i idziesz, lecz nic nie znajdujesz.');
    define('ACTION5', 'Znalazłeś jeden z pięciu potrzebnych artefaktów do wywołania Diaburiona! Znalazłeś <b>ząb Diaburiona!</b>!');
    define('ACTION6', 'Znalazłeś mithril! Zdobyłeś');
    define('ACTION6_1', 'sztuk mithrilu');
    define('ACTION7_1', 'Zobaczyłeś źródło! Podbiegasz do niego i pijesz wode. Czujesz się lepiej. Odzyskujesz <b>10 punktów energi</b>!');
    define('ACTION8', 'Nie ma tutaj nic wartościowego...');
    define('ACTION9', 'Spacerując po cmentarzy dostrzegasz jakiś pierścień obok Twojej nogi. Schylasz się po niego, a on znika... Masz pecha...');
    define('ACTION10', 'Nic nie znajdujesz na swojej drodze...');
    define('ACTION11', 'Idziesz i napotykasz na stary wytarty kawałek papieru. Okazuje się że jest to ');
    define('ACTION12', 'Znalazłeś jeden z pięciu potrzebnych artefaktów do wywołania Diaburiona! Znalazłeś <b>oko Diaburiona!</b>');
    define('ACTION13', 'Znalazłeś jeden z pięciu potrzebnych artefaktów do wywołania Diaburiona! Znalazłeś <b>serce Diaburiona!</b>');
    define('ACTION14', 'Znalazłeś jeden z pięciu potrzebnych artefaktów do wywołania Diaburiona! Znalazłeś <b>włos Diaburiona!</b>');
    define('ACTION15', 'Znalazłeś jeden z pięciu potrzebnych artefaktów do wywołania Diaburiona! Znalazłeś <b>żebro Diaburiona!</b>');
    define('ACTION16', 'Wędrując po cmentarzysku Twój wzrok odwraca zielona mała roślinka. Jesteś ciekaw co to jest, więc pochylasz się nad nią. Dostrzegasz, że to <b>sadzonka drzewka</b>. Bierzesz ją i idziesz dalej.');
    define('ACTION17', 'Zauważasz na swojej drodze coś błyszczącego na ziemi. Klękasz i widzisz klucz. Znalazłeś <b>Klucz do Diabolium</b>. Zastanawiasz się co tutaj robi. Chowasz go i wędrujesz dalej w poszukiwaniu ciekawych przedmiotów.');
    define('ACTION18', 'Coś za Toba biegnie. Zaczynasz uciekać. Odwróciłeś się podczas biegu aby zobaczyć co to takiego. Dostrzegłeś, że to jakiś wściekły wojownik płomieni. Dogania Cię, lecz biegniesz dalej… Po chwili biegu potykasz się i lądujesz na ziemi, a wojownik zabija Cię w sekundzie… <b>Tracisz wszystkie punkty życia</b>');
    define('ACTION19', 'Wędrując poczułeś, że nadepnąłeś na coś miękkiego. Spoglądasz w dół. Okazuje się, że to grzyby. Schylasz się i podnosisz');
    define('ACTION19_1', '<b>grzybów</b>');
    define('ACTION20', 'Podbiega do Ciebie szalony wojownik płomieni. Ty chwytasz za broń i zabijasz go. Zdobywasz');
    define('ACTION20_1', '<b>doświadczenia</b>');
    define('ACTION21', 'Dostrzegasz leżącą szablę na ziemi. Kiedy masz zamiar po nią sięgnąć podbiega wojownik płomieni, zabiera ją i ucieka... Wkurzasz się...');
    define('ACTION22', 'Przechodząc pomiędzy szkieletami różnych istot coś pokuło Cię w nogę. Rozglądasz się uważnie i widzisz, że wszedłeś w pokrzywy… Powoli zrywasz kilka z nich… Zerwałeś');
    define('ACTION22_1', '<b>Pokrzyw Życia</b>');
    define('ACTION23', 'Dostrzegłeś na swojej drodze bryły meteorytu. Podbiegasz do nich i zbierasz je. Zebrałeś');
    define('ACTION23_1', '<b>brył meteorytu</b>');
    define('ACTION24', 'Nic wartościowego niestety nie znalazłeś...');
    define('ACTION25', 'Nie znajdujesz nic ciekawego.');
    define('ACTION26', 'Nie ma nic tutaj...');
    define('ACTION27', 'Potknąłeś się i upadłeś. <b>Straciłeś 3 pkt energii</b>');
    define('ACTION28', 'Zauważasz coś błyszczącego. Podchodzisz bliżej. Jednak okazuje się, że to tylko szkło.');
    define('ACTION29', 'Nic nie znajdujesz przez długi czas.');
    define('ACTION30', 'Nie ma niczego tutaj...');
    
    
                                            
    define('A_EXP', 'Zwiedzaj');
    define('T_NEXT', 'dalej. (zostało Ci');
    define('EN_PTS', 'punktów energii');
}

if (!isset($_GET['action']) && !isset($_GET['step']))
{
    define("LAB_INFO", "				<p>Zauważasz solidne żelazne drzwi po zachodniej stronie tego podziemnego miasta. Chcesz się dowidzieć co się znajduje za nimi. Otwierasz je i wchodzisz do pomieszczenia. Za drzwiami znajduje się kold który Cię zatrzymał. Pyta się czy jesteś pewien, że chcesz tam wejść. Ty nie wiedząc co to za miejsce wypytujesz go o szczegóły. Kold mówi Ci, że to podziemne cmentarzysko i że możesz tam znaleźć różne artefakty. Nawet te o których słyszałeś już kiedyś z legend tyczących się miasta Diabolium. Zastanawiasz się czy chcesz przeszukać cmentarzysko w celu odnalezienia pięciu potrzebnych do wywołania demona Diaburiona artefaktów. Kold powiedział Ci też, że każdy krok <b>będzie kosztować Cię 2 energii</b>. Pyta się czy chcesz wejść? </p>
");
}
?>
