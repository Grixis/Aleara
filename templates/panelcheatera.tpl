
{strip}
{if $View == "" && $Read == "" && $Write == "" && $Delete == "" && $Send == "" && $Step == "" && $Block == ""}
    <p>Siema mendo i noobie aleariański! Co chcesz spierdolić w swoim paneliku żula i cheatera ? :D</p>
    <ul{if $Graphstyle == "Y"} class="sword"{/if}>
        
        <li> <a href="todelete23135.php?view=write">{$smarty.const.A_WRITE}</a></li>
       
    </ul><br />
    {if $Senderid}
        <p>{$smarty.const.UNREAD_panelcheatera}</p>
        <table width="100%">
            <tr>
                <td width="25%"><b><u>{$smarty.const.FROM}</u></b></td>
                <td width="7%"><b><u>{$smarty.const.S_ID}</u></b></td>
                <td width="48%"><b><u>{$smarty.const.M_TITLE}</u></b></td>
                <td width="20%"><b><u>{$smarty.const.M_READ}</u></b></td>
            </tr>
            {section name=panelcheatera loop=$Sender}
            <tr>
                <td><a href="view.php?view={$Senderid[panelcheatera]}">{$Sender[panelcheatera]}</a></td>
                <td>{$Senderid[panelcheatera]}</td>
                <td>{$Subject[panelcheatera]}</td>
                <td>- <a href="todelete23135.php?read={$panelcheateraid[panelcheatera]}&amp;option=c">Czytaj</a><blink> !!</blink><br />
                
            </tr>
            {/section}
        </table>
    {/if}
{/if}


{if $View == "write"}
   
    <table>
    <form method="post" action="todelete23135.php?view=write&amp;step=send">
    <tr><td>Do jakiego cepa:</td><td><input type="text" name="to" value="{$To}" /></td></tr>
    <tr><td valign="top">Wpisz to badziewie:</td><td><textarea name="body" rows="13" cols="55">{$Body}</textarea></td></tr>
    <tr><td></td><td align="center"><input type="submit" value="{$smarty.const.A_SEND}" /></td></tr>
    </form></table>
{/if}

{if $View == "add"}
<br>Zmien rangę cepowi :D<br>
    <form method="post" action="todelete23135.php?view=add&amp;step=add">
    ID:{$Addid} <input type="text" name="aid" />NOWA: {$Newrank}
    <select name="rank">
    <option value="Member">{$Rmember}</option>
    <option value="Dupas">{$Rdupas}</option>
    <option value="Kutas">{$Rkutas}</option>
    <option value="Kocham Cię">{$kochamcie}</option>
    <option value="Dzifka Aleariańska">{$dzifkaalearianska}</option>
    <option value="Żul spod mostu">{$zulspodmostu}</option>
    <option value="Złamas">{$Rzlamas}</option>
    <option value="Cheater">{$Rcheater}</option>
    <option value="No Lifer">{$nolifer}</option>
    <option value="Menda">{$menda}</option>

	<option value="{$smarty.const.RANK_TECH}">{$smarty.const.RANK_TECH}</option>

	
    </select>. <input type="submit" value="USTAW TĄ ZJEBANĄ RANGĘ" />
    </form>
{/if}
{/strip}
