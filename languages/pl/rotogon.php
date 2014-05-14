<?php

define("YOU_DEAD", "Ponieważ jesteś martwy, twa dusza podąża z powrotem do szpitala. Kliknij <a href=hospital.php>tutaj</a>.");
define("A_HERE", "tutaj");

if (!isset ($_GET['action1']))
{
    define("PORTAL_TEXT", "Po wejściu do Opuszczonej Kopalni wszedłeś do pierwszego szybu. Przed Tobą ukazał się olbrzymi boss Rotogon. Podobno kryje on jakiąś magiczną biżuterię. Aby przejść dalej musisz go pokonać. Co chcesz zrobić?");
    define("A_FIGHT2", "Chcę walczyć z bossem i iść dalej.");
    define("A_RETREAT", "Uciekam stąd!");
}

if (isset ($_GET['action1']) && $_GET['action1'] == 'retreat') 
{
    define("PORTAL_TEXT", "Uciekasz... Owa podróż zmęczyła cię niesamowicie. Dlatego na razie musisz odpocząć. Kliknij");
}

if (isset ($_GET['action1']) && $_GET['action1'] == 'fight') 
{
    define("START_FIGHT", "Przygotowujesz się do walki<br />");
    define("MONSTER_NAME", "Rotogon");
    define("NO_HP", "Nie masz wystarczająco dużo życia aby walczyć.");
    define("NO_ENERGY", "Nie masz wystarczająco dużo energii aby walczyć.");
    define("LOST_FIGHT2", "<br />Przegrywasz... Ponieważ jesteś martwy, twa dusza podąża z powrotem do szpitala. Kliknij <a href=hospital.php>tutaj</a>.");
    define("PORTAL_TEXT", "Zwycięztwo.. Udało ci się pokonać Rotogona!");
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
