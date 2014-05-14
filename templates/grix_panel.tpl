{strip}
{if $View == ""}
    <p>{$Awelcome}</p><br/>
<fieldset>
<legend>Narzedzia Grixa</legend>
<a href="grix_panel.php?view=poczta">Wyslij wiadomosc do graczy</a><br/>
<a href="grix_panel.php?view=monster2">Edytuj stwora</a><br/>
<a href="grix_panel.php?view=query">Wykonaj zapytanie do bazy</a><br/>
<a href="grix_panel.php?view=updates">Dodaj wieść</a><br/>
<a href="grix_panel.php?view=tribedelete">Usun gildie</a><br/>
<a href="grix_panel.php?view=bugreport">Buglist</a><br/>
<a href="grix_panel.php?view=changelog">Changelog</a><br/>

</fieldset>
<fieldset>
<legend>Narzedzia Adala</legend>
<a href="grix_panel.php?view=innarchive&amp;room=izba">Archiwum Tawerny</a><br/>
<a href="grix_panel.php?view=innarchive&amp;room=piwnica">Archiwum Piwnicy</a><br/>
</fieldset>
<fieldset>
<legend>Narzedzia Zerata</legend>
<a href="grix_panel.php?view=poczta2">Wyślij kapłańską pocztę do każdego</a><br/>
<a href="grix_panel.php?view=pary">Daj komuś ślub</a><br/>
</fieldset>
{/if}
{if $View == "monster2"}
    {if $Step == ""}
        <form method="post" action="grix_panel.php?view=monster2&amp;step=next">
            {$Mname}: <select name="mid">
                {section name=monster2 loop=$Mid}
                    <option value="{$Mid[monster2]}">{$Names[monster2]}</option>
                {/section}
            </select><br />
            <input type="submit" value="{$Anext}" />
        </form>
    {/if}
    {if $Step == "next"}
        <form enctype="multipart/form-data" method="post" action="grix_panel.php?view=monster2&amp;step=monster">
			<table>
  <tbody>
    <TR>
      <TD>
            {$Tmname}: <input type="text" name="name" value="{$Mname}" /> <br />
            {$Tmlevel}: <input type="text" name="level" value="{$Mlvl}" /> <br />
            {$Tmhp}: <input type="text" name="hp" value="{$Mhp}" /> <br />
            {$Tmagi}: <input type="text" name="agility" value="{$Magility}" /> <br />
            {$Tmpower}: <input type="text" name="strength" value="{$Mstrength}" /> <br />
            {$Tmspeed}: <input type="text" name="speed" value="{$Mspeed}" /> <br />
            {$Tmcond}: <input type="text" name="endurance" value="{$Mendurance}" /> <br />
            {$Tmmingold}: <input type="text" name="credits1" value="{$Mcredits1}" /> <br />
            {$Tmmaxgold}: <input type="text" name="credits2" value="{$Mcredits2}" /> <br />
            {$Tmminexp}: <input type="text" name="exp1" value="{$Mexp1}" /> <br />
            {$Tmmaxexp}: <input type="text" name="exp2" value="{$Mexp2}" /> <br />
            {$Tmlocation}: <input type="text" name="location" value="{$Mlocation}" /><br />
            <input type="hidden" name="mid" value="{$Mid}" />
            
			</TD>
      <td>
			<center><img src="{$Avek}"></center><br>
			opis:<br>
			<textarea cols="50" rows="10" name="desc">{$Mdesc}</textarea>
			</td>
    </TR>
    <tr>
      <td colspan="2">Wgraj avek: <input name="uploadedfile" type="file" /><br /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="Zatwierdź" /></td>
    </tr>
  </tbody>
</table>
        </form>
    {/if}
{/if}







{if $View == "monster"}
    <form method="post" action="grix_panel.php?view=monster&amp;step=monster">
    {$Mname}: <input type="text" name="nazwa" /> <br />
    {$Mlevel}: <input type="text" name="poziom" /> <br />
    {$Mhp}: <input type="text" name="pz" /> <br />
    {$Magi}: <input type="text" name="zr" /> <br />
    {$Mpower}: <input type="text" name="sila" /> <br />
    {$Mspeed}: <input type="text" name="speed" /> <br />
    {$Mcond}: <input type="text" name="endurance" /> <br />
    {$Mmingold}: <input type="text" name="minzl" /> <br />
    {$Mmaxgold}: <input type="text" name="maxzl" /> <br />
    {$Mminexp}: <input type="text" name="minpd" /> <br />
    {$Mmaxexp}: <input type="text" name="maxpd" /> <br />
    {$Mlocation}: <select name="location">
        <option value="Altara">{$Mcity1}</option>
        <option value="Ardulith">{$Mcity2}</option>
        <option value="Cytadela">{$Mcity3}</option>
    </select><br />
    <input type="submit" value="{$Aadd}" /></form>
{/if}
{if $View == "tribedelete"}
Ktora gildie chcesz usunac?
<table width="100%">
<tr>
<th>Id</th><th>Nazwa gildii</th><th>Id wlasciciela</th><th>Usunac?</th>
</tr>
{section name=tribe loop=$Tribeid}
<tr>
<td>{$Tribeid[tribe]}</td><td>{$Tribename[tribe]}</td><td>{$Tribeowner[tribe]}</td>
<td><a href="grix_panel.php?view=tribedelete&amp;del={$Tribeid[tribe]}">Usun</a></td>
</tr>
{/section}
</table>
{/if}
{if $View == "poczta"}
    <table>
    <form method="post" action="grix_panel.php?view=poczta&amp;step=send">
    <tr><td>{$Pmsubject}:</td><td><input type="text" name="subject" /></td></tr>
    <tr><td valign="top">{$Pmbody}:</td><td><textarea name="body" rows="5" cols="19"></textarea></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="{$Asend}" /></td></tr>
    </form></table>
{/if}
{if $View == "query"}
<form method="post" action="grix_panel.php?view=query&amp;step=make">
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
{if $View == "pary"}
    <form method="post" action="grix_panel.php?view=pary&step=add">
    ID Kobiety: <input type="text" name="prisoner"><br>
	ID Mężczyzny: <input type="text" name="prisonerp"><br>
    Przyczyna: <textarea name="verdict" rows="30" cols="40"></textarea><br>
    Koszt rozwodu: <input type="text" name="cost"><br>
    <input type="submit" value="Dodaj"></form>
{/if}
{if $View == "poczta2"}
    <table>
    <form method="post" action="grix_panel.php?view=poczta2&step=send">
    <tr><td>Temat:</td><td><input type="text" name="subject"></td></tr>
    <tr><td valign="top">Treść:</td><td><textarea name="body" rows="5" cols="19"></textarea></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Wyślij"></td></tr>
    </form></table>
{/if}
{if $smarty.get.view == "bugreport"}
    {if $smarty.get.step != ""}
		{if $Bug[6] == "0"}
			<form method="post" action="">
				<input type="hidden" name="programmer" value=1 />
				<input type="submit" value="{$smarty.const.BUG_REPAIR}" />
			</form>
			{$BugMessage}
		{else}
			<form method="post" action="">
				<input type="hidden" name="programmer" value=0 />
				<input type="submit" value="{$smarty.const.BUG_LEAVE}" />
			</form>
			{$BugMessage}
			<p>{$smarty.const.BUG_PROGRAMMER} <b>{$Programmer}</b></p>
		{/if}
        <b>{$smarty.const.BUG_NAME}:</b> {$Bug[2]}<br />
        <b>{$smarty.const.BUG_TYPE}:</b> {$BugType}<br />
        <b>{$smarty.const.BUG_LOC}:</b> {$Bug[4]}<br />
        <b>{$smarty.const.BUG_DESC}:</b> {$Bug[5]}<br />
        <form method="post" action="grix_panel.php?view=bugreport&amp;step={$smarty.get.step}"  onsubmit="if (this.bugcomment.value=='') {literal}{{/literal} return confirm('{$smarty.const.EMPTY_COMMENT}') } else {literal}{{/literal} return true; }">
            <b>{$smarty.const.BUG_ACTIONS}:</b> <select name="actions">
                {section name=k loop=$Options}
                    <option value="{$Actions[k]}">{$Options[k]}</option>
                {/section}
            </select><br />
            <b>{$smarty.const.BUG_COMMENT}:</b> <textarea name="bugcomment" rows="5" cols="50"></textarea><br /><br />
            <input type="submit" value="{$smarty.const.A_MAKE}" />
        </form>
    {else}
        <table align="center" width="100%">
            <tr>
                <th width="5%">{$smarty.const.BUG_ID}</th>
                <th width="10%">{$smarty.const.BUG_REPORTER}</th>
                <th width="15%">{$smarty.const.BUG_TYPE}</th>
                <th width="30%">{$smarty.const.BUG_LOC}</th>
                <th width="40%">{$smarty.const.BUG_NAME}</th>
            </tr>
			{section name=k loop=$Bugs}
			<tr {if $Bugs[k][5] != "0"}class="bugrepair"{/if}>
				<td width="5%" align="center"><a {if $Bugs[k][5] != "0"}class="bugrepair" {/if}href="grix_panel.php?view=bugreport&amp;step={$Bugs[k][0]}">{$Bugs[k][0]}</td>
				<td width="10%" align="center">{$Bugs[k][1]}</td>
				<td width="15%" align="center">{if $Bugs[k][3] == 'text'}{$smarty.const.BUG_TEXT}{else}{$smarty.const.BUG_CODE}{/if}</td>
				<td width="30%" align="center">{$Bugs[k][4]|wordwrap:25:"\n":true}</td>
				<td width="40%" align="center">{$Bugs[k][2]|wordwrap:25:"\n":true}</td>
			</tr>
			{/section}
		</table>
    {/if}
{/if}
{if $View == "changelog"}
    {$Changeinfo}<br /><br />
    <form method="post" action="grix_panel.php?view=changelog&amp;step=add">
        {$Changelocation}: <input type="text" name="location" /><br />
        {$Changetext}: <textarea name="changetext" rows="5" cols="30"></textarea><br /><br />
        <input type="submit" value="{$Aadd}" />
    </form>
{/if}
{if $View == "updates"}
<form method="post" action="{$Link}">
<table>
{if $Link == "grix_panel.php?view=updates&action=add"}
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
    <br />(<a href="grix_panel.php">{$Aback}</a>)
{/if}
{/strip}
