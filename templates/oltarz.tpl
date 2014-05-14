{if $Temple == ""}
    Witaj w świątyni. Możesz tutaj modlić się do {$God} Aby twoja modlitwa została wysłuchana, musisz posiadać odpowiednią 
    ilość Punktów Wiary. Punkty zdobywasz służąc w świątyni. To czym ciebie obdaruje bóg zależy tylko od niego.<br><br>
    <ul>
    <li><a href="oltarz.php?temp=sluzba">Pracuj dla świątyni</a></li>
    <li><a href="oltarz.php?temp=modlitwa">Módl się do boga</a></li>
    </ul>
{/if}

{if $Temple == "sluzba"}
    Pracując dla świątyni, sprawiasz, {$God} spogląda na ciebie przychylniejszym okiem. Za każde 0,1 energii zdobywasz parę punktów.
    Wiary. Czy chcesz służyć w świątyni?<br><br>
    <form method="post" action="oltarz.php?temp=sluzba&dalej=tak">
    Chcę pracować dla świątyni <input type="text" size="3" value="0" name="rep"> razy. <input type="submit" value="Pracuj">
    </form>
{/if}

{if $Temple == "modlitwa"}
    Postanowiłeś pomodlić się do {$God} o dar z nieba. Czy jesteś pewien?<br><br>
    <ul>
    <li><a href="oltarz.php?temp=modlitwa&modl=tak">Tak</a></li>
    <li><a href="oltarz.php">Nie</a></li></ul>
{/if}

{$Message}