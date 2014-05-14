{strip}
{if $Action == "" && $Step == ""}
<center><img src="images/locations/cmentarznekr.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    <br />Spoczywasz w domu przy stole delektując się smakiem napoju chmielowego. W szybach odbijają się płomienie ognia płonącego w kominku. Spoglądając za okno dostrzegasz, iż zapadł już zmrok. Przypominasz sobie, że dzisiejszej nocy odbywa się cotygodniowa Noc Trupów. Podczas Nocy Trupów na Cmentarzu Nekromantów zbierają się wszyscy wskrzesiciele i nekromanci by wkroczyć na cmentarz i wskrzeszać umarłych. Po chwili namysłu zrywasz się na nogi, bierzesz laskę i wychodzisz z chaty. Widzisz jak pozostali nekromanci i wskrzesiciele uczynili to samo i kierują się w stronę bram miasta. Strażnicy zliczają wszystkich mieszczan opuszczających Alearę. Gdy zostałeś już wpisany do ich listę, opuściłeś miasto i udałeś się na jego obrzeża kierując się na Cmentarz Nekromantów. Gdy dotarłeś już na miejsce oczekiwałeś już tylko na otwarcie Bram Cmentarza przez Kostucha…<br />
	<br /><br /><center><i>{$Info}</i><br /></center></br>
	{if $Open == "Y"}
    <a href="krainacieni.php?action=explore">{$Ayes}</a>
	{/if}
{/if}

{if $Action == "explore" && $Step == ""}
    {if $Roll < "49" || $Roll > "63"}
        <br />{$Message}<br /><br />
        {$Link}
    {/if}
    {if $Roll > "48" && $Roll < "64"}
        <br  />{$Youmeet} {$Name}{$Fight2}<br />
       <a href="krainacieni.php?step=battle&amp;type=T">{$Yturnf}</a><br />
       <a href="krainacieni.php?step=battle&amp;type=S">{$Ynormf}</a><br />
       <a href="krainacieni.php?step=run">{$Ano}</a><br />
    {/if}
{/if}

{if $Step == "run"}
    {if $Health > "0" && ($Chance > "0" || $Chance2 < 3)}
        <br />{$Escapesucc} {$Ename}! {$Escapesucc2} {$Expgain} {$Escapesucc3}<br />
        <br />{$Link}
    {/if}
{/if}

{if $Step == "battle"}
    {$Link}
{/if}
{/strip}