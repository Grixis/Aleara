{strip}
{if $View == ""}
    <p>{$Awelcome}</p><br/>

<fieldset>
<legend>Archiwum Karczmy:</legend>
<a href="karczmaa3a.php?view=innarchive&amp;room=izba">Klimatyczna</a><br/>
<a href="karczmaa3a.php?view=innarchive&amp;room=piwnica">Bez Klimatu</a><br/>
</fieldset>
<fieldset>
<legend>Polecenia:</legend>
Polecenia wpisuje się bezpośrenio na czacie:<br>

!bot nazwa wiadomość - Używanie bota (nazwa nie może mieć spacji).<br>
<b>PRZYKŁAD:</b> <i>!bot Kura przebiega spokojnie po karczmie. --> Na czacie pokaże: Kura: przebiega spokojnie po karczmie.</i><br>
!clear - Czyści karczmę<br>
!ban id czas powód - banuje w karczmie osobę<br>
<b>PRZYKŁAD:</b> <i>!ban 1 10 bo jesteś Demo. --> Banuje ID 1 na 10 resetów z powodu, że jest Demem.</i><br>
!unban id - odbanowuje gracza<br>
<b>PRZYKŁAD:</b> <i>!unban 1 - odbanowuje ID1</i><br>
</fieldset>



{/if}

{if $View == "czat"}
    {$Blocklist}<br />
    {section name=player loop=$List1}
        ID {$List1[player]}<br />
    {/section}
    <form method="post" action="karczmaa3a.php?view=czat&amp;step=czat">
    <select name="czat">
        <option value="blok">{$Ablock}</option>
        <option value="odblok">{$Aunblock}</option>
    </select>
    {$Chatid} <input type="text" name="czat_id" size="5" /> {$Ona} <input type="text" size="5" name="duration" value="1" />{$Tdays}<br />
    <textarea name="verdict"></textarea><br />
    <input type="submit" value="{$Amake}" /></form>
{/if}
{if $View == "query"}
<form method="post" action="karczmaa3a.php?view=query&amp;step=make">
<textarea name="query" rows="5" cols="19"></textarea>
<input type="submit" value="Wykonaj">
</form>
{/if}
{if $View == "innarchive"}
    {if $Text[0] != ""}
        {section name=player loop=$Text}
            ({$Date[player]})<b>{$Author[player]} {$Cid}:{$Senderid[player]}</b>: {$Text[player]}<br />
        {/section}
    {/if}
    {$Previous} {$Next}
{/if}


{if $View == "updates"}
<form method="post" action="{$Link}">
<table>
{if $Link == "karczmaa.php?view=updates&action=add"}
    <tr><td>{$Ulangsel}:</td><td><select name="addlang">
    {section name=addupdate loop=$Ulang}
        <option value="{$Ulang[addupdate]}">{$Ulang[addupdate]}</option>
    {/section}
    </select></td></tr>
{/if}
<tr><td>{$Utitle}:</td><td><input type="text" name="addtitle" value="{$Title1}" /></td></tr>
<tr><td valign="top">{$Utext}:</td><td><textarea name="addupdate" rows="25" cols="70">{$Text}</textarea></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="{$Button}" /></td></tr>
</table>
</form>
{/if}
{if $View != ""}
    <br />(<a href="karczmaa3a.php">{$Aback}</a>)
{/if}
{/strip}
