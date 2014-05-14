<center><IMG SRC="images/locations/domekgeologa.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
{if $Mine == ""}
   Błąkając się po mrocznych obrzeżach Aleary dostrzegasz przed sobą niewielką chatę za mostem. Most jednak nie wydaje się być solidny i wytrzymały. Po chwili namysłu postawiasz jednak zaryzykować i przejść przez niego. Idziesz po nim powoli, a spadające deski odrywające się od konstrukcji przyprawiają Cię o dreszcze. W końcu udało Ci się postawić nogę na pewnym gruncie. Przyglądasz się chatce. Widzisz przez okno poruszającą się w niej istotę. Na drzwiach widniał napis „Geolog”. Postanawiasz jednak tam nie wchodzić i sprawdzić dokładnie okolice. Obok chatki wypatrzyłeś zejście w dół po skałach. Udałeś się tam natychmiast i wszedłeś do jaskini znajdującej się pod chatką geologa. Zobaczyłeś drewniane drogowskazy na rozwidleniach tuneli. Wskazywały one bowiem drogę do różnych kopalń.
    <br><br>
    
    
    
    
    <ul{if $Graphstyle == "Y"} class="sword"{/if}>
    <li> <a href="mines.php?mine=copper">{$Acopper}{$Minamount[0]}</a></li>
    <li> <a href="mines.php?mine=zinc">{$Azinc}{$Minamount[1]}</a></li>
    <li> <a href="mines.php?mine=tin">{$Atin}{$Minamount[2]}</a></li>
    <li> <a href="mines.php?mine=iron">{$Airon}{$Minamount[3]}</a></li>
    <li> <a href="mines.php?mine=coal">{$Acoal}{$Minamount[4]}</a></li>
    </ul><br /><br />
    {$Minessearch}
{/if}

{if $Mine != "" && $Step == ""}
    {$Mineinfo}{$Minename}{$Mineinfo2}<br />
    {if $Mine2 == "N"}
        - <a href="mines.php?mine={$Mine}&amp;step=dig">{$Adig}</a><br />
        - <a href="mines.php?mine={$Mine}&amp;step=search">{$Asearch}</a><br />
    {/if}
    {if $Mine2 == "Y"}
        - <a href="mines.php?mine={$Mine}&amp;step=search">{$Asearch}</a><br />
    {/if}
{/if}

{if $Step == "search"}
    {if $Type == ""}
        <form method="post" action="mines.php?mine={$Mine}&amp;step=search&amp;type=small">
            <input type="submit" value="{$Asearch}" /> {$Minerals} {$Smallmith} {$Mithrilcoins} {$Smallgold} {$Goldcoins} 1 {$Searchday}
        </form>
        <form method="post" action="mines.php?mine={$Mine}&amp;step=search&amp;type=medium">
            <input type="submit" value="{$Asearch}" /> {$Minerals} {$Mediummith} {$Mithrilcoins} {$Mediumgold} {$Goldcoins} 2 {$Searchdays}
        </form>
        <form method="post" action="mines.php?mine={$Mine}&amp;step=search&amp;type=large">
            <input type="submit" value="{$Asearch}" /> {$Minerals} {$Largemith} {$Mithrilcoins} {$Largegold} {$Goldcoins} 3 {$Searchdays}
        </form>
    {/if}
    {if $Type != ""}
        {$Message}
    {/if}
{/if}

{if $Step == "dig"}
    <form method="post" action="mines.php?mine={$Mine}&amp;step=dig&amp;dig=Y">
        {$Yousend} {$Minname} <input type="text" name="amount" size="5" />{$Menergy}<br />
        <input type="submit" value="{$Adig}" />
    </form>
    <br />{$Message}
{/if}

{if $Mine != ""}
    <br /><br /><a href="mines.php">{$Aback}</a>
{/if}
{/strip}
