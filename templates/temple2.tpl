<center><IMG SRC="images/locations/oltarzofiarny.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
{if !in_array($smarty.get.view, array('book','pantheon','service'))}
Wchodząc do Diabolium widziałeś jak mieszkańcy tego miasta składają ofiary bogom. Podchodzisz do jednego z ołtarzy i uważnie się rozglądasz. Widzisz wielką wnękę w starej ścianie i jest w niej wyryty jakiś symbol. Obok niej jest wielki kamienny stół. Spływa po nim krew… Obok stołu mały klęcznik. Zaciekawiło Cię to miejsce. Zastanawiasz się co stanie się jeśli złożysz ofiarę. Widzisz obok siebie martwego wilkołaka. Kładziesz go na stole i zaczynasz się modlić… Po chwili słyszysz głos Twego boga. Mówi on że wysłuchał Twoje modły i zostaniesz za to wynagrodzony… 
    {if $Location == 'Altara'}
       {$God2}. 
    {/if}
    <ul {if $Graphstyle=="Y"}class="sword"{/if}>
   

   
         
         
         
    </ul>
{/if}

{if isset($Message)}
    <p class="bless">{$Message}.</p>
{/if}

{if $smarty.get.view == 'service'}
    <p>{$smarty.const.TEMPLE_INFO_W} {$God} {$smarty.const.TEMPLE_INFO2_W}</p>
    <form method="post" action="temple2.php?view=service">
    {$smarty.const.I_WANT} <input type="text" size="3" value="0" name="rep" /> {$smarty.const.T_AMOUNT}. <input type="submit" value="{$smarty.const.A_WORK_2}" />
    </form>
    <br />
    <a href="temple2.php">{$smarty.const.BACK}</a>
{/if}

{if $smarty.get.view == 'prayer'}
    <div id="prayer"><form method="post" action="temple2.php?view=prayer">
   
<input id="pr5" type="radio" name="praytype" value="0" /><label for="pr5">+15 statystyki = 100pkt wiary || +15 umiejetnosci = 300pkt wiary</label><br/>
    <br><br>
    
        
        <div class="columnleft"><b>STATYSTYKI:</b><br>{section name=temple loop=$Blessings}
			{if $Indices[temple] > 6}</div>
			
			<div class="columnright"><b>UMIEJĘTNOŚCI:</b><br>{/if}
            <input id="bl{$smarty.section.temple2.iteration}" type="radio" name="pray" value="{$Indices[temple]}" {if $smarty.section.temple2.first} checked="checked"{/if} /><label for="bl{$smarty.section.temple2.iteration}">{$Blessings[temple][0]} ({$Blessings[temple][1]})</label><br/>
        {/section}</div>
        <br />
        <input type="submit" value="{$smarty.const.YES}" style="clear: both; display: block;" />
    </form></div>
{/if}

{if $smarty.get.view == 'book'}
    {if $Next == 0}
        {$smarty.const.BOOK_INFO}
    {/if}
    <i>{$Booktext}</i><br />
    {if $Next < 2}
        <a href="temple2.php?view=book&amp;book={$Next+1}">{$smarty.const.NEXT_PAGE}</a>
    {/if}
{/if}



{/strip}
 <a href="diabolium.php">Wracam do centrum Diabolium</a>
</br>