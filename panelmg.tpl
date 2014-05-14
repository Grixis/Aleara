{strip}
<center><b>Witaj wszechwielebna Mistrzynio Gry.</b><br><br>
<a href="panelmg.php?view=donate">Dodaj punkty fabularne</a><br>
<a href="panelmg.php?view=donate2">Odejmij punkty fabularne</a><br>
<a href="panelmg.php?view=playerquest&step=add">Zarządzaj forum</a><br>

<br><br></center>
</br>
{/strip}

{if $View == "donate"}
    <form method="post" action="panelmg.php?view=donate&amp;step=donated">
    ID: <input type="text" name="id" /> <br />
	{section name=res loop=$Resources}
		<input type="radio" name="what" {if $smarty.section.res.index == 0} checked="true"{/if}value="{$Resources[res]}"/> {$ResourcesNames[res]}<br/>
	{/section}
    {$Donateamount}: <input type="text" name="amount"/><br/>
    <input type="submit" value="Wykonaj" /></form></br>
{/if}


{if $View == "donate2"}
    <form method="post" action="panelmg.php?view=donate2&amp;step=donated">
    ID: <input type="text" name="id" /> <br />
	{section name=res loop=$Resources}
		<input type="radio" name="what" {if $smarty.section.res.index == 0} checked="true"{/if}value="{$Resources[res]}"/> {$ResourcesNames[res]}<br/>
	{/section}
    {$Donateamount}: <input type="text" name="amount"/><br/>
    <input type="submit" value="Wykonaj" /></form></br>
{/if}
{if $View == "playerquest"}
    <form method="post" action="panelmg.php?view=playerquest&amp;step=add">
        <input type="submit" value="EDYTUJ" /> {$Addplayer} <input type="text" name="pid" size="5" /><br><br>
Blokada - liczba - 1,<br> 
Pozwolenie - liczba - 2 <br><Br>

wpisz wartość:<input type="text" name="qid" size="5" />.
    </form>
{/if}
</br>