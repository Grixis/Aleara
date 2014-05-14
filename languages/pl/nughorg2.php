<?php

define("YOU_DEAD", "Ponieważ jesteś martwy, twa dusza podąża z powrotem do szpitala. Kliknij <a href=hospital.php>tutaj</a>.");
define("A_HERE", "tutaj");

if (!isset ($_GET['action1']))
{
    define("PORTAL_TEXT", "<center><img src=http://aleara.pl/images/locations/nug.png></center><br>
    Wędrując po  górach zauważasz ogromne, wysokie skały tworzące krąg. W środku znajdują się leże wielkiego i potężnego smoka Nughorg'a. Na skałach podłoża dostrzegasz gęsty, niebieski śluz. Ten widok przyprawia Cię o dreszcze. Przypominasz sobie legendę, którą opowiedział Ci gnom, którego spotkałeś w drodze do gór. Zastanawiasz się, czy chcesz spróbować walki ze smokiem w celu sprawdzenia czy jesteś wybrańcem bogów krainy i czy możesz sięgnąć po bogactwa strzeżone przez smoka…
    
    
    
    ");
    define("A_FIGHT2", "Walczę");
    define("A_RETREAT", "Uciekam");
}

if (isset ($_GET['action1']) && $_GET['action1'] == 'retreat') 
{
    define("PORTAL_TEXT", "Uciekasz... Owa podróż zmęczyła cię niesamowicie. Dlatego na razie musisz odpocząć. Kliknij");
}

if (isset ($_GET['action1']) && $_GET['action1'] == 'fight') 
{
    define("START_FIGHT", "Przygotowujesz się do walki<br />");
    define("MONSTER_NAME", "Nughorg");
    define("NO_HP", "Nie masz wystarczająco dużo życia aby walczyć.");
    define("NO_ENERGY", "Nie masz wystarczająco dużo energii aby walczyć.");
    define("LOST_FIGHT2", "<br />Przegrywasz... Ponieważ jesteś martwy, twa dusza podąża z powrotem do szpitala. Kliknij <a href=hospital.php>tutaj</a>.");
    define("PORTAL_TEXT", "Zwycięztwo.. Udało ci się pokonać Nughorga");
    define("SWORD", "item1");
    define("ARMOR", "item2");
    define("I_STAFF", "item3");
    define("CAPE", "item4");
    if (isset ($_GET['step'])) 
    {
        define("ITEM_TAKE", "Już ktoś wziął przedmiot!");
        define("U_TITLE", "Nowy Bohater");
        define("U_TEXT", "I tak oto na ");
        define("U_TEXT2", " pojawił się kolejny bohater, który przeszedł cało i zdrowo tajemnicze miejsce.<br />Władze ");
        define("U_TEXT3", " pragną poinformować swoich poddanych iż dziś (");
        define("U_TEXT4", ") do panteonu bohaterów wstąpił(a) ");
        define("U_TEXT5", " o ID:");
        define("U_TEXT6", ".<br /> Cześć mu i chwała!");
        define("STEP_TEXT", " Powoli wracasz w kierunku portalu i przechodzisz przez niego. Po chwilowych zawrotach głowy znów słyszysz wokół siebie gwar rozmów różnych istot. Jesteś z powrotem w ".$city1a.". Rozglądając się dookoła dostrzegasz obok siebie zawiniątko. Kiedy je rozwijasz twoim oczom ukazuje się");
        define("T_GO", "Wejdź");
    }
}
?>
