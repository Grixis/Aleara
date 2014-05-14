{strip}
{if $View == ""}
    <p>Witaj w swoim panelu.</p>
{* Display main menu.*}
    <table align="center" width="100%">
 <tr>
 
 
 
<ul>
<li><a href="namiestnik.php?view=pary">Udziel ślubu.</a></li>
<li><a href="addkroniki.php">Dodaj wpis do kronik głównych.</a></li>
<li><a href="namiestnik.php?view=newsy">Dodaj intro newsa do nawigacji.</a></li>
<li><a href="namiestnik.php?view=kroniki">Dodaj intro kroniki do nawigacji.</a></li>
<li><a href="addupdate.php">Dodaj newsa głównego na tablicę wieści.</a></li>
<li><a href="namiestnik.php?view=addtext">Sprawdz/Odrzuć/Zatwierdź oczekujące plotki.</a></li>
<li><a href="namiestnik.php?view=poll">Dodaj ankietę do hali zgromadzeń.</a></li>
<li><a href="namiestnik.php?view=censorship">Edytuj listę słów objętych cenzorem.</a></li>
<li><a href="namiestnik.php?view=jail">Wyślij gracza do lochu.</a></li>
<li><a href="namiestnik.php?view=jailbreak">Wypuść gracza z lochu.</a></li>
<li><a href="namiestnik.php?view=changenick">Edytuj gracza [imię, avatar, ranga].</a></li>
<li><a href="namiestnik.php?view=donator">Dodaj imię gracza do alei zasłużonych.</a></li>
<li><a href="namiestnik.php?view=poczta">Wyślij wiadomość na pocztę całej krainie.</a></li>
<li><a href="ip.php">Sprawdz ip lub znacznik przegladarki gracza.</a></li>
<li><a href="namiestnik.php?view=ban">Zbanuj/Odbanuj gracza.</a></li>
<li><a href="namiestnik.php?view=permisions">Nadaj pozwolenie graczowi</a></li>
<li><a href="namiestnik.php?view=multis">Zobacz/edytuj listę dozwolonych multikont</a>
</ul> 
<br><br>

<legend><b>Komendy na czatach:</b></legend>

<table>
<tr><td>Komenda na czyszczenie czatu:</td><td> !clear</td></tr>
<tr><td>Komenda na banowanie gracza:</td><td> !ban ID ILOŚĆRESETÓW POWÓD</td></tr>
<tr><td>Komenda na odbanowanie gracza:</td><td> !unban ID</td></tr>
<tr><td>Komenda na bota:</td><td> !bot NICKBOTA TEKST</td></tr>
<tr><td>Komenda na wyrzucenie z karczmy(zmiana strony, tylko piwnica):</td><td> !kick ID</td></tr>
<tr><td>Komenda na zapisanie sesji(zapisuje karczmę od momentu wyczyszczenia do pliku, tylko izba, niestabilne):</td><td> !save</td></tr>
</table>








    </table>
{/if}
{if $View == "innarchive"}
    {if $Text[0] != ""}
        {section name=player loop=$Text}
            <b>{$Author[player]} {$Cid}:{$Senderid[player]}</b>: {$Text[player]}<br />
        {/section}
    {/if}
    {$Previous} {$Next}
{/if}
{if $View == "addreps"}
<form method="post" action="namiestnik.php?view=addreps">
    {$smarty.const.T_PLAYER_ID}: <input type="text" name="id"><br>
    {$smarty.const.T_AMOUNT}: <input type="text" name="amount"><br>
    {$smarty.const.T_DESC}: <textarea name="description" cols="30" rows="20">
    </textarea><br>
    <input type="submit" value="{$smarty.const.A_SEND}">
</form>
{/if}
{if $View == "ban"}
    {$Banlist}<br />
    <form method="post" action="namiestnik.php?view=ban&amp;step=modify">
    {$Banvalue}: <input type="text" name="amount" /><br />
    {$Banned}: <select name="type"><option value="IP">{$Banip}</option>
    <option value="mailadres">{$Banemail}</option>
    <option value="nick">{$Bannick}</option>
    <option value="ID">{$Banid}</option>
    </select><br />
    <select name="action"><option value="ban">{$Abanpl}</option>
    <option value="unban">{$Aunban}</option>
    </select><br>
    <input type="checkbox" name="browser" />Zablokuj przegladarke<br><br>
    Podczas logowania gra probuje zidentyfikowac przegladarke i zachowuje wpis w bazie danych. Zaznacz ten checkbox, aby utrudnic dostep do gry poprzez dana przegladarke. Prawdopodobnie bedziesz zmuszony powtorzyc czynnosc dla wszystkich przegladarek gracza. UWAGA! Ban ten jest ostateczny, nie da sie go usunac.
    <br><input type="submit" value="{$Anext}" /></form>
    {section name=ban loop=$Type}
        <b>{$Bantype}:</b> {$Type[ban]} <b>{$Banval}:</b> {$Amount[ban]}<br />
    {/section}
    {$Baninfo}
{/if}
{if $View == "permisions"}
    (W budowie)<br><br>
    Nadaj uprawnienia graczowi na posiadanie imienia lub avatara bądź też nietypowej rzeczy w profilu.<br>
    <form action="namiestnik.php?view=permisions&amp;step=add" method="post">
        <input type="submit" value="Nadaj"> graczowi id: <input type="text" maxlength="4" name="pid" value="0"> pozwolenie na<br>
        <textarea name="perm_text">Tu wpisz na co zezwalasz</textarea>
    </form>
Lista wydanych już zezwoleń:<br>
<table width="100%">
    <tr>
        <th>ID gracza</th><th>Na co zezwolono</th><th>Data nadania</th>
    </tr>
    {section name=perm loop=$Ids}
        <tr>
            <td>{$Owner[perm]}</td><td>{$Text[perm]}</td><td>{$Date[perm]}</td>
        </tr>
    {/section}
</table>
{/if}
{if $View == "multis"}
    <a href="https://docs.google.com/spreadsheet/ccc?key=0Av5KBZy4LAIPdDF4Q1EwRTdfd2lXMWc3NlBtTmowd1E&usp=sharing">Edytuj arkusz</a><br>
    <iframe width='500' height='500' frameborder='0' src='https://docs.google.com/spreadsheet/pub?key=0Av5KBZy4LAIPdDF4Q1EwRTdfd2lXMWc3NlBtTmowd1E&output=html&widget=true'></iframe>
 {/if}
{if $View == "addtext"}
    {$Admininfo}<br />
    {$Admininfo2}<br />
    {$Admininfo3}<br />
    {$Admininfo4}<br /><br />
    {$Admininfo5}:
    <table width="100%">
        {section name=staff2 loop=$Ttitle}
            <tr>
                <td>{$Ttitle[staff2]} ({$Tauthor2}: {$Tauthor[staff2]})</td>
                <td><a href="namiestnik.php?view=addtext&amp;action=modify&amp;text={$Tid[staff2]}">{$Amodify}</a></td>
                <td><a href="namiestnik.php?view=addtext&amp;action=add&amp;text={$Tid[staff2]}">{$Aadd}</a></td>
                <td><a href="namiestnik.php?view=addtext&amp;action=delete&amp;text={$Tid[staff2]}">{$Adelete}</a></td>
            </tr>
        {/section}
    </table>

    {if $Action == "modify"}
        <form method="post" action="namiestnik.php?view=addtext&amp;action=modify&amp;text={$Tid}">
            {$Ttitle2}: <input type="text" name="ttitle" value="{$Ttitle}" /><br />
            {$Tbody2}: <br /><textarea name="body" rows="30" cols="60">{$Tbody}</textarea><br />
            <input type="hidden" name="tid" value="{$Tid}" />
            <input type="submit" value="{$Achange}" />
        </form>
    {/if}
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
        <form method="post" action="namiestnik.php?view=bugreport&amp;step={$smarty.get.step}"  onsubmit="if (this.bugcomment.value=='') {literal}{{/literal} return confirm('{$smarty.const.EMPTY_COMMENT}') } else {literal}{{/literal} return true; }">
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
				<td width="5%" align="center"><a {if $Bugs[k][5] != "0"}class="bugrepair" {/if}href="namiestnik.php?view=bugreport&amp;step={$Bugs[k][0]}">{$Bugs[k][0]}</td>
				<td width="10%" align="center">{$Bugs[k][1]}</td>
				<td width="15%" align="center">{if $Bugs[k][3] == 'text'}{$smarty.const.BUG_TEXT}{else}{$smarty.const.BUG_CODE}{/if}</td>
				<td width="30%" align="center">{$Bugs[k][4]|wordwrap:25:"\n":true}</td>
				<td width="40%" align="center">{$Bugs[k][2]|wordwrap:25:"\n":true}</td>
			</tr>
			{/section}
		</table>
    {/if}
{/if}
{if $View == "pary"}
    <form method="post" action="namiestnik.php?view=pary&step=add">
    ID Kobiety: <input type="text" name="prisoner"><br>
	ID Mężczyzny: <input type="text" name="prisonerp"><br>
    Przyczyna: <textarea name="verdict"></textarea><br>
    Koszt rozwodu: <input type="text" name="cost"><br>
    <input type="submit" value="Dodaj"></form>
{/if}
{if $View == "banmail"}
    {$Blocklist}<br />
    {section name=banmail loop=$List1}
        ID {$List1[banmail]}<br />
    {/section}
    <form method="post" action="namiestnik.php?view=banmail&amp;step=mail">
    <select name="mail">
        <option value="blok">{$Ablock}</option>
        <option value="odblok">{$Aunblock}</option>
    </select>
    {$Mailid} <input type="text" name="mail_id" size="5" /><br />
    <input type="submit" value="{$Amake}" /></form>
{/if}

{if $View == "playerquest"}
    <form method="post" action="namiestnik.php?view=playerquest&amp;step=add">
        <input type="submit" value="{$Aadd}" /> {$Addplayer} <input type="text" name="pid" size="5" /> {$Toquest} <input type="text" name="qid" size="5" />.
    </form>
{/if}

{if $View == "innarchive"}
Już być chciał(a) Ni ma, ukradli archiwum ;)
{/if}

{if $View == "changelog"}
    {$Changeinfo}<br /><br />
    <form method="post" action="namiestnik.php?view=changelog&amp;step=add">
        {$Changelocation}: <input type="text" name="location" /><br />
        {$Changetext}: <textarea name="changetext" rows="5" cols="30"></textarea><br /><br />
        <input type="submit" value="{$Aadd}" />
    </form>
{/if}

{if $View == "logs"}
    {$Logsinfo}<br /><br />
    <table align="center" width="100%">
        <tr>
            <td align="center">{$Lowner}</td>
            <td align="center">{$Ltext}</td>
        </tr>
        {section name=logs loop=$Aowner}
            <tr>
                <td align="center">{$Aowner[logs]}</td>
                <td align="center">{$Alog[logs]}</td>
            </tr>
        {/section}
    </table><br />
    {$Aprevious} {$Anext}<br /><br />
    <form method="post" action="namiestnik.php?view=logs&amp;step=clear">
        <input type="submit" value="{$Lclear}" />
    </form>
{/if}

{if $View == "meta"}
    {$Metainfo}
    <form method="post" action="namiestnik.php?view=meta&amp;step=modify">
        Meta keywords ({$Metakey}): <input type="text" name="metakey" size="30"/><br />
        Meta description ({$Metadesc}): <input type="text" name="metadesc" size="40" /><br />
        <input type="submit" value="{$Aadd}" />
    </form>
{/if}

{if $View == "forums"}
    {$Catlist}<br />
    {section name=forum loop=$Catname}
        <a href="namiestnik.php?view=forums&amp;id={$Catid[forum]}">{$Catname[forum]}</a><br />
    {/section}<br /><br />
    <form method=post action="namiestnik.php?view=forums&amp;id={$Catid2}&amp;step=add">
        {$Tname}: <input type="text" name="catname" value="{$Tcatname}" /><br />
        {$Tdesc}: <textarea name="catdesc" rows="5" cols="30">{$Tcatdesc}</textarea><br />
        {$Tlang}: <select name="catlang">
            {section name=forum2 loop=$Catlang}
                <option value="{$Catlang[forum2]}" {$Tlangsel[forum2]}>{$Catlang[forum2]}</option>
            {/section}
        </select><br />
        {$Twrite}: <br />
        {section name=forum3 loop=$Toptionname}
            <input type="checkbox" name="{$Toptionw[forum3]}" {$Toptionwsel[forum3]} />{$Toptionname[forum3]}<br />
        {/section}
        {$Tvisit}: <br />
        {section name=forum4 loop=$Toptionname}
            <input type="checkbox" name="{$Toptionv[forum4]}" {$Toptionvsel[forum4]} />{$Toptionname[forum4]}<br />
        {/section}
        <input type="submit" value="{$Aadd}" />
    </form>
{/if}

{if $View == "mill"}
    <form method="post" action="namiestnik.php?view=mill&amp;step=mill">
    {$Sname}: <input type="text" name="nazwa" /> <br />
    {$Scost}: <input type="text" name="cena" /> <br />
    {$Samount}: <input type="text" name="amount" /><br />
    {$Slevel}: <input type="text" name="poziom" /> <br />
    {$Stype}: <select name="type" id="type">
    <option value="B">{$Sbow}</option>
    <option value="R">{$Sarrow}</option>
    </select><br />
    <br /><input type="submit" value="{$Aadd}" /></form>
{/if}

{if $View == "donator"}
    {if $Step == ""}
        {$Donatorinfo}<br />
        <form method="post" action="namiestnik.php?view=donator&amp;step=add">
            {$Pname}: <input type="text" name="plname" /><br />
            <input type="submit" value="{$Aadd}" />
        </form>
    {/if}
{/if}

{if $View == "clearf"}
    {if $Step == ""}
    {$Fquestion}<br />
    - <a href="namiestnik.php?view=clearf&amp;step=Y">{$Ayes}</a><br />
    {/if}
{/if}

{if $View == "monster2"}
    {if $Step == ""}
        <form method="post" action="namiestnik.php?view=monster2&amp;step=next">
            {$Mname}: <select name="mid">
                {section name=monster2 loop=$Mid}
                    <option value="{$Mid[monster2]}">{$Names[monster2]}</option>
                {/section}
            </select><br />
            <input type="submit" value="{$Anext}" />
        </form>
    {/if}
    {if $Step == "next"}
        <form method="post" action="namiestnik.php?view=monster2&amp;step=monster">
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
            <input type="submit" value="{$Aedit}" />
        </form>
    {/if}
{/if}

{if $View == "jailbreak"}
    {if $Step == ""}
        <form method="post" action="namiestnik.php?view=jailbreak&amp;step=next">
            <input type="submit" value="{$Afree}" /> {$Jailid} <input type="text" name="jid" size="5" />
        </form>
    {/if}
{/if}

{if $View == "poll"}
    {if $Step == ""}
        <form method="post" action="namiestnik.php?view=poll&amp;step=second">
            {$Tquestion}: <input type="text" name="question" /><br />
            {$Tlang}: <select name="lang">
            {section name=poll2 loop=$Llang}
                <option value="{$Llang[poll2]}">{$Llang[poll2]}</option>
            {/section}
            </select><br />
            {$Tamount}: <input type="text" size="5" name="amount" /><br />
            {$Tdays}: <input type="text" size="5" name="days" /><br />
            <input type="submit" value="{$Anext}" />
        </form>
    {/if}
    {if $Step == "second"}
        {$Tquestion}: {$Question} ({$Llang}) ({$Adays} dni)<br />
        <form method="post" action="namiestnik.php?view=poll&amp;step=add">
            {section name=poll loop=$Answers}
                {$Tanswer}: <input type="text" name="{$Answers[poll]}" /><br />
            {/section}
            <input type="hidden" name="amount" value="{$Amount}" />
            <input type="hidden" name="pid" value="{$Pollid}" />
            <input type="hidden" name="lang" value="{$Llang}" />
            <input type="submit" value="{$Aadd}" />
        </form>
    {/if}
{/if}

{if $View == "censorship"}
    <form method="post" action="namiestnik.php?view=censorship&amp;step=modify">
        <select name="action">
            <option value="add">{$Aadd}</option>
            <option value="delete">{$Adelete}</option>
        </select>
        {$Tword} <input type="text" name="bword" /><br />
        <input type="submit" value="{$Amake}" />
    </form>
    {$Wordslist}:<br />
    {section name=censor loop=$Words}
        {$Words[censor]}<br />
    {/section}
{/if}

{if $View == "register" || $View == "close"}
    <form method="post" action="namiestnik.php?view={$View}&amp;step=close">
    <select name="close">
    <option value="close">{$Gclose}</option>
    <option value="open">{$Gopen}</option>
    </select><br />
    {$Ifclose}:<br />
    <textarea name="reason" rows="13" cols="55"></textarea><br />
    <input type="submit" value="{$Amake}" /></form>
{/if}



{if $View == "mail"}
    <form method="post" action="namiestnik.php?view=mail&amp;step=send">
    {$Mailinfo}<br />
    <textarea name="message"></textarea><br />
    <input type="submit" value="{$Asend}" /></form>
{/if}

{if $View == "bridge"}
    <form method="post" action="namiestnik.php?view=bridge&amp;step=add">
    {$Bquestion}: <textarea name="question"></textarea><br />
    {$Banswer}: <textarea name="answer"></textarea><br />
    <input type="submit" value="{$Aadd}" /></form>
{/if}

{if $View == "jail"}
    {if isset($Confirm)}
        {$Fquestion}<br />
        <form method="post" action="namiestnik.php?view=jail&amp;step=add&amp;confirm=Y">
        <input type="hidden" name="prisoner" value="{$Prisoner}" />
        <input type="hidden" name="verdict" value="{$Verdict}" />
        <input type="hidden" name="time"  value="{$Duration}" />
        <input type="hidden" name="cost"  value="{$Fine}" />
        <input type="submit" value="{$Ayes}" /></form>
    {else}
        <form method="post" action="namiestnik.php?view=jail&amp;step=add">
        {$Jailid}: <input type="text" name="prisoner" /><br />
        {$Jailreason}: <textarea name="verdict"></textarea><br />
        {$Jailtime}: <input type="text" name="time" /><br />
        {$Jailcost}: <input type="text" name="cost" /><br />
        <input type="submit" value="{$Aadd}" /></form>
    {/if}
{/if}



{if $View == "add"}
    <form method="post" action="namiestnik.php?view=add&amp;step=add">
    {$Addid} <input type="text" name="aid" /> {$Newrank}
    <select name="rank">
    <option value="Member">{$Rmember}</option>
    <option value="Admin">{$Rking}</option>
    <option value="Staff">{$Rstaff}</option>
    <option value="Sędzia">{$Rjudge}</option>
    <option value="Ławnik">{$Rjudge2}</option>
    <option value="Prawnik">{$Rlawyer}</option>
    <option value="Żebrak">{$Rbeggar}</option>
    <option value="Magazynier">{$Rbarbarian}</option>
    <option value="Bibliotekarz">{$Rscribe}</option>
    <option value="Rycerz">{$Rknight}</option>
    <option value="Dama">{$Rlady}</option>
    <option value="Marszałek Rady">{$Rcount}</option>
    <option value="Poseł">{$Rcount2}</option>
    <option value="Kanclerz Sądu">{$Rjudge3}</option>
    <option value="Redaktor">{$Rredactor}</option>
    <option value="Karczmarka">{$Rinnkeeper}</option>
    <option value="Prokurator">{$Rprocurator}</option>
    <option value="Ksiądz">{$Rksiadz}</option>
    <option value="Magazynier">{$Rmagazynier}</option>
    <option value="Strażnik Miejski">{$Rstraznik}</option>
    <option value="Magazynier">{$Rmurgrabia}</option>
    
    <option value="Druid">{$Rdruid}</option>
    <option value="Królowa Potępionych">{$Rkrolowapotepionych}</option>
    <option value="Honorowy Mieszkaniec">{$honorowymieszkaniec}</option>
    <option value="Wielki Mistrz">{$wielkimistrz}</option>
    <option value="Gladiator">{$gladiator}</option>
    <option value="Stary Dziad">{$starydziad}</option>
    <option value="Wskrzesiciel">{$wskrzesiciel}</option>
    <option value="Kostuch">{$kostuch}</option>
    
    <option value="Żul spod mostu">{$Rzul}</option>
	<option value="{$smarty.const.RANK_TECH}">{$smarty.const.RANK_TECH}</option>
    </select>. <input type="submit" value="{$Aadd}" />
    </form>
{/if}

{if $View == "equipment"}
    <form method="post" action="namiestnik.php?view=equipment&amp;step=add">
    {$Itemname} <input type="text" name="name" /> {$Hasa}
    <select name="type" id="type">
    <option value="W">{$Iweapon}</option>
    <option value="A">{$Iarmor}</option>
    <option value="H">{$Ihelmet}</option>
    <option value="L">{$Ilegs}</option>
    <option value="S">{$Ishield}</option>
    <option value="B">{$Ibow}</option>
    <option value="R">{$Iarrows}</option>
    <option value="T">{$Istaff}</option>
    <option value="C">{$Icape}</option>
    </select>
    <br /> {$Iwith}
    <input name="power" type="number" id="power" /> {$Ipower}<br />
    {$Icost} <input type="number" name="cost" />
    <br /> {$Iminlev}
    <input type="number" name="minlev" /><br /> {$Iagi}
    <input name="zr" type="number" /><br /> {$Ispeed}
    <input type="number" name="szyb" /><br />
    {$Idur}<input type="number" name="maxwt" /><br />
    {$Irepair}<input type="number" name="repair" /><br />
    <input type="submit" value="{$Aadd}" />
    </form>
{/if}

{if $View == "donate"}
    <form method="post" action="namiestnik.php?view=donate&amp;step=donated">
    {$Donateid}: <input type="text" name="id" /> <br />
	{section name=res loop=$Resources}
		<input type="radio" name="what" {if $smarty.section.res.index == 0} checked="true"{/if}value="{$Resources[res]}"/> {$ResourcesNames[res]}<br/>
	{/section}
    {$Donateamount}: <input type="text" name="amount"/><br/>
    <input type="submit" value="{$Adonate}" /></form>
{/if}


{if $View == "takeaway"}
    {$Takeinfo}<br />
    <form method="post" action="namiestnik.php?view=takeaway&amp;step=takenaway">
    <table>
        <tr>
            <td>{$Takeid}:</td><td><input type="text" name="id" size="5" /></td>
        </tr>
        <tr>
            <td>{$Takeamount}:</td><td><input type="text" name="taken" /></td>
        </tr>
        <tr>
            <td>{$Treason}</td><td><textarea name="verdict"></textarea></td>
        </tr>
        <tr>
            <td>{$Tinjured}</td><td><input type="text" name="id2" size="5" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="{$Atakeg}" /></td>
        </tr>
    </table>
    </form>
{/if}

{if $View == "monster"}
    <form method="post" action="namiestnik.php?view=monster&amp;step=monster">
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

{if $View == "kowal"}
    <form method="post" action="namiestnik.php?view=kowal&amp;step=kowal">
    {$Sname}: <input type="text" name="nazwa" /> <br />
    {$Scost}: <input type="text" name="cena" /> <br />
    {$Samount}: <input type="text" name="amount" /><br />
    {$Slevel}: <input type="text" name="poziom" /> <br />
    {$Stype}: <select name="type" id="type">
    <option value="W">{$Sweapon}</option>
    <option value="A">{$Sarmor}</option>
    <option value="H">{$Shelmet}</option>
    <option value="L">{$Slegs}</option>
    <option value="S">{$Sshield}</option>
    </select><br />
    {$Stwohand}: <select name="twohand">
        <option value="N">{$Ano}</option>
        <option value="Y">{$Ayes}</option>
    </select>
    <br /><input type="submit" value="{$Aadd}" /></form>
{/if}

{if $View == "poczta"}
    <table>
    <form method="post" action="namiestnik.php?view=poczta&amp;step=send">
    <tr><td>{$Pmsubject}:</td><td><input type="text" name="subject" /></td></tr>
    <tr><td valign="top">{$Pmbody}:</td><td><textarea name="body" rows="5" cols="19"></textarea></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="{$Asend}" /></td></tr>
    </form></table>
{/if}

{if $View == "czat"}
    {$Blocklist}<br />
    {section name=player loop=$List1}
        ID {$List1[player]}<br />
    {/section}
    <form method="post" action="namiestnik.php?view=czat&amp;step=czat">
    <select name="czat">
        <option value="blok">{$Ablock}</option>
        <option value="odblok">{$Aunblock}</option>
    </select>
    {$Chatid} <input type="text" name="czat_id" size="5" /> {$Ona} <input type="text" size="5" name="duration" value="1" />{$Tdays}<br />
    <textarea name="verdict"></textarea><br />
    <input type="submit" value="{$Amake}" /></form>
{/if}

{if $View == "czary"}
    <form method="post" action="namiestnik.php?view=czary&amp;step=add">
    {$Spellname} <input type="text" name="name" /> {$Hasas}
    <select name="type">
    <option value="B">{$Sbattle}</option>
    <option value="O">{$Sdefense}</option>
    </select><br />
     {$Swith} <input name="power" type="number" /> {$Spower}<br /> 
    {$Scost} <input type="number" name="cost" /><br /> 
    {$Sminlev} <input type="number" name="minlev" />
    <input type="submit" value="{$Aadd}" /></form>
{/if}

{if $View == "weather"}
	Ostatnie 10 wpisów:<br>
	{section name=i loop=$Id}
        <b>#{$Id[i]}</b><br />
		<b>Autor</b>:{$Author[i]}<br>
		<b>Treść</b>:<br>
		{$Text[i]}
		<hr>
    {/section} 
	Dodaj nowy wpis:<br>
	<form method="post" action="namiestnik.php?view=weather&amp;step=add">
	Treść:<br>
	<textarea name="text"></textarea>
	<INPUT type="submit" value="Wyślij">
	</form>
{/if}	


{if $View == "newsy"}

	Dodaj nowy wpis:<br>
	<form method="post" action="namiestnik.php?view=newsy&amp;step=add">
	Treść:<br>
	<textarea name="text"></textarea>
	<INPUT type="submit" value="Wyślij">
	</form>
{/if}	
{if $View == "kroniki"}

	Dodaj nowy wpis:<br>
	<form method="post" action="namiestnik.php?view=kroniki&amp;step=add">
	Treść:<br>
	<textarea name="text"></textarea>
	<INPUT type="submit" value="Wyślij">
	</form>
{/if}	



{if $View == "changenick"}
    {if !$Action}
    <p>{$Info}</p>
        <form method="post" action="staff.php?view=changenick&amp;action=nick">
            {$Changename1} <input type="text" name="id" size="5" /> {$Changename2} <input type="text" name="name" size="20" value="{$Defaultname}" /><br />
            {$Changereason}: <br /><textarea name="reason" rows="3" cols="40">{$Reason1}</textarea><br />
        <input type="submit" value="{$Save}" />
        </form>
    <br /><br />
      
      
      
       <form method="post" action="staff.php?view=changenick&amp;action=profile">
            Skasuj avatar gracza. ID gracza: <input type="text" name="id" size="5" /> 
        <input type="submit" value="{$Save}" />
        </form>
      
      
      
      
    <br /><br />
        <form method="post" action="staff.php?view=changenick&amp;action=rank">
            {$Setid} <input type="text" name="id" size="5" /> {$Newrank}
            <select name="rank">
                <option value="Member">Mieszkaniec</option>
                <option value="Namiestnik">Namiestnik</option>
                <option value="Hrabia">Hrabia</option>
                <option value="Strażnik Miejski">Dowódca Straży</option>
            <option value="Karczmarka">Właściciel Karczmy</option>
            <option value="Murgrabia">Murgrabia</option>
            <option value="Dama">Dama</option>
            <option value="Rycerz">Rycerz</option>
            <option value="Redaktor">Redaktor</option>
            <option value="Druid">Druid</option>
            <option value="Kronikarz">Kronikarz</option>
            <option value="Ksiądz">Kapłan Najwyższy</option>
            <option value="Kostuch">Kostuch</option>
            <option value="Bibliotekarz">Bibliotekarz</option>
            </select>
            <input type="submit" value="{$Save}" />
        </form>
    {else}
        <p>{$Currentinfo} <b><a href="view.php?view={$VictimID}">{$Victimname}</a></b>:</p>
        <p>{$Current}</p>
        <form method="post" action="staff.php?view=changenick&amp;action=profile">
            <textarea name="profile" rows="15" cols="50">{$Editable}</textarea>
            <p>{$Changereason}:</p><textarea name="reason" rows="5" cols="50">{$Reason2} {$Reason3}</textarea><br />
            <input type="hidden" name="id" value="{$VictimID}" />
            <input type="submit" value="{$Save}" />
        </form>
    {/if}
{/if}

{$Message}

{if $View != ""}
    <br />(<a href="namiestnik.php">{$Aback}</a>)
{/if}
{/strip}
