{strip}
{if $Health != "0" && $smarty.get.action == "" && $smarty.get.action2 == ""}
{if $Graphstyle == "Y"}<div class="center">
<center><IMG SRC="images/locations/lasdusz.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
</div>{/if}
Przed Tobą pojawia się ciemny, wielki i gęsty las. Na sam jego widok przechodzą Cię dreszcze. Nie jesteś przekonany czy powinieneś się tam udać. Po chwili namysłu ruszasz dalej. Idąc ścieżką czujesz zimny podmuch wiatru. Zawiał tak mocno, że upadłeś na ziemię. Wylądowałeś na starej rozwalonej tablicy leżącej tutaj od lat. Zaczynasz przyglądać się jej. Widzisz wyryty napis „Las Zbłąkanych Dusz”. Nagle widzisz szeregi duchów przemierzających las. Jednak przeszywający Cię strach nie pozwolił Ci nawet drgnąć. Gdy duchy znikły już z pola widzenia wstajesz i udajesz się dalej. Przemierzając las nie natrafiasz na żadną żywą istotę. Las zdaje Ci się być wymarły i niezamieszkały nawet przez zwierzynę. Po chwili idąc potykasz się i znów lądujesz na ziemi. Tym razem na jakimś grobie, który zapadł się pod ziemię. Zrywasz się szybko na nogi i zaczynasz uciekać w popłochu. Nagle wpadasz na jakiegoś elfa. Wystraszony próbujesz uciec, lecz on złapał Cię za rękę i uspokaja. Wdałeś się z nim w rozmowę. Opowiedział Ci legendę o owym lesie mówiącą o tym, że las znajduje się na starym cmentarzysku. Powiedział Ci również, że jeśli posiadasz licencję na wyrąb lasu to może zaprowadzić Cie do miejsca w którym możesz ścinać drzewa.<br />
    <ul>
        <li><a href="lumberjack.php">{$smarty.const.A_LUMBERJACK}</a></li>
        <li><a href="explore.php">{$smarty.const.A_EXPLORE}</a></li>
        <li><a href="mrocznylas.php">Droga do najmroczniejszej części tego lasu [QUEST]</a></li>
        <li><a href="travel.php">Wracam...</a></li>
        
    </ul><br/>
{/if}

{if $Health == "0" && $smarty.get.action == ""}
    {$smarty.const.YOU_DEAD}.<br />
    - <a href="las.php?action=back">{$smarty.const.BACK_TO}</a><br />
    - <a href="las.php?action=hermit">{$smarty.const.STAY_HERE}</a>
{/if}

{if $smarty.get.action == "hermit" && $smarty.get.action2 == ""}
    {$smarty.const.HERMIT}<br /><br />
    <i>{$smarty.const.HERMIT2}</i><br />
    - <a href="las.php?action=hermit&amp;action2=resurect">{$smarty.const.A_RESURECT}</a> ({$smarty.const.T_GOLD} {$Goldneed} {$smarty.const.GOLD_COINS})<br />
    - <a href="las.php?action=hermit&amp;action2=wait">{$smarty.const.A_WAIT}</a> ({$Waittime})
{/if}

{if $smarty.get.action2 == "resurect"}
    {$smarty.const.RES1}<br /><br />
    <i>{$smarty.const.RES2}</i><br /><br />
    {$smarty.const.RES3}<br />
{/if}

{$Message}

{if $smarty.get.action2 != ""}
    <br /><a href="las.php">{$smarty.const.BACK}</a>
{/if}
{/strip}</br></br>
