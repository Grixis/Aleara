<center><IMG SRC="images/locations/zakatek.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Mijasz po drodze dwójkę roześmianych dzieci rzucających sobie drewnianego ptaszka, zdążyłeś zauważyć że rzeźba ma ułamane jedno skrzydło ale dalej jest w stanie szybować od jednego dziecka do drugiego. Obdrapane domy kryte strzechą stają się coraz rzadsze, zmierzasz do niewielkiego skupiska ławek za targowiskiem. Jest wieczór, niebo jeszcze nie okazuje wszystkich swoich tajemnic, księżyc jednak już ledwo prześwituje na nieboskłonie. Kiedy docierasz na miejsce widzisz handlarki z targu trzymające kubki z herbatą lub wygazowanym piwem rozpowiadające najnowsze plotki. Siadasz między nimi, na wysokiej sosnowej ławie, karczmarka wybiera od tylnej strony karczmy by obsłużyć też tych klientów których nie widać w karczmie – ale sprzedaż ciepłej herbaty plotkującym – to złoty biznes z którego nie sposób zrezygnować.
<br><br>{strip}
{if $View == '' && $Step == ''}
	{if isset($Title1)}
    	<div class="overflow"><b>{$Title1}</b> {$smarty.const.WRITE_BY} <b>{$Starter}</b>.<br />
    	{$News}</div>
    
    	(<a href="news.php?view=all">{$smarty.const.LAST_10}</a>)<br /><br />
	{/if}
    <a href="news.php?step=add">{$smarty.const.A_ADD_NEWS}</a> ({$smarty.const.T_WAITING}: {$Waiting} | {$smarty.const.T_ACCEPTED}: {$Accepted})
{/if}

{if $View == 'all' && $Step == ''}
    {section name=i loop=$LastNews}
        <div class="overflow"><b>{$LastNews[i][1]}</b> {$smarty.const.WRITE_BY} <b>{$LastNews[i][2]}</b>...<br /><br />
        "{$LastNews[i][3]}"</div>
        <a href="news.php?step=comments&amp;text={$LastNews[i][0]}">{$smarty.const.A_COMMENTS}</a>: {$LastNews[i][4]}<br /><br />
    {/section}
{/if}












{if $Step == 'comments'}
    {if $Amount == 0}
        <center>{$smarty.const.NO_COMMENTS}</center>
    {/if}
    {if $Amount > 0}
        {section name=update loop=$Tauthor}
            <div class="overflow"><fieldset style="width:90%">
            <legend><b>{$Tauthor[update]}</b> {if $Tdate[update] != ''} ({$Tdate[update]}) {/if}{$smarty.const.A_WRITED}:</legend>
            {if $Rank == 'Admin' || $Rank == 'Staff'} <center> (<a href="news.php?step=comments&amp;action=delete&amp;cid={$Cid[update]}">{$smarty.const.A_DELETE}</a>) </center> {/if}<br />
            {$Tbody[update]}
            </fieldset></div>
        {/section}
    {/if}
    <br /><br /><center>
    <form method="post" action="news.php?step=comments&amp;action=add">
        {$smarty.const.ADD_COMMENT}:<br/><textarea name="body" rows="20" cols="70"></textarea><br />
        <input type="hidden" name="tid" value="{$Text}" />
        <input type="submit" value="{$smarty.const.A_ADD}" />
    </form></center>
    <br /><br />
    <a href="news.php">{$smarty.const.A_BACK}</a>
{/if}











{if $Step == 'add'}
    {$smarty.const.ADD_INFO}<br />
    <form method="post" action="news.php?step=add">
        {$smarty.const.T_LANG}: <select name="lang">
            {section name=library loop=$Llang}
                <option value="{$Llang[library]}">{$Llang[library]}</option>
            {/section}
        </select><br />
        {$smarty.const.T_TITLE}: <input type="text" name="ttitle" /><br />
        {$smarty.const.T_BODY}: <br /><textarea name="body" rows="30" cols="70"></textarea><br />
        <input type="submit" value="{$smarty.const.A_ADD}" />
    </form>
    <a href="news.php">{$smarty.const.A_BACK}</a>
{/if}
{/strip}
                