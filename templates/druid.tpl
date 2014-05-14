
<b>Kod do maksymalnego poziomu życia: {$c1}<br></b>
<b>Kod do siły: {$c2}<br></b>
<b>Kod do zręczności: {$c3}<br><br></b>
<br><br>

<a href="druid.php?view=donate">Dotuj użytkownika brylantami</a><br>
<a href="druid.php?view=donate666">Dotuj użytkownika denaramii</a>
<br><br>
Pamiętaj, że kody się aktualizują dopiero po wbiciu kodu do wieży druida!
<br><br>-----------------------------------------------
<br><br>

{if $View == "donate"}
    <form method="post" action="druid.php?view=donate&amp;step=donated">
    {$Donateid}: <input type="text" name="id" /> <br />
	{section name=res loop=$Resources}
		<input type="radio" name="what" {if $smarty.section.res.index == 0} checked="true"{/if}value="{$Resources[res]}"/> {$ResourcesNames[res]}<br/>
	{/section}
    {$Donateamount}: <input type="text" name="amount"/><br/>
    <input type="submit" value="{$Adonate}" /></form>
{/if}

{if $View == "donate666"}
    <form method="post" action="druid.php?view=donate666&amp;step=donated">
    ID: <input type="text" name="id" /> <br />
	{section name=res loop=$Resources}
		<input type="radio" name="what" {if $smarty.section.res.index == 0} checked="true"{/if}value="{$Resources[res]}"/> {$ResourcesNames[res]}<br/>
	{/section}
    {$Donateamount}: <input type="text" name="amount"/><br/>
    <input type="submit" value="DOTUJ" /></form>
{/if}