<center><IMG SRC="images/locations/tribe.png"></center>{strip}
{if $View == "" && $Join == ""}
    {$Claninfo}
    <ul>
    {$Mytribe}
    {$Make}
    <li><a href="tribes.php?view=all">{$Ashow}</a>
    <li><a href="rankingguild.php">Ranking gildii (prestiż)</a>
    </ul><br />
{/if}

{if $View == "all"}
    {$Showinfo}
    {$Text}
    {section name=tribes loop=$Name}
        <li><a href="tribes.php?view=view&amp;id={$Tribeid[tribes]}">{$Name[tribes]}</a>,  {$Leader}: <a href="view.php?view={$OwnerID[tribes]}">{$Owner[tribes]} ({$OwnerID[tribes]})</a>.
    {/section}
    </ul><br />
{/if}











{if $View == "swiatynia"}
Witaj w świątyni gildyjnej. Możesz tutaj brać błogosławieństwa do statystyk i umiejętności. Od poziomu świątyni zalezy ilość dostępnych ładunków na dobę, moc świątyni oraz ilość błogosławieństw które możesz posiadać jednocześnie. Błogosławieństwa są anulowane automatycznie z każdym resetem.<br><br>
<br><br>
<b><a href="tribes.php?akceptacja=yes">Wykup możliwość korzystania z świątyni</b></a> - <i>wymagane aby z niej korzystać <b>2000</b> mithrilu <br></i>
<br><br>





<b>Poziom Świątyni:</b> {$slvl} / 6 <br></i>
<b>Wykorzystane ładunki: </b>{$ladunki} / {$maxladunki} (na dziś)<br> 
<b>Moc świątyni: </b>{$mocblo}<br>
<b>Moc błogosławieństw (statystyki):</b><i> +{$Mooc} (moc świątyni * lvl postaci)</i><br>
<b>Moc błogosławieństw (umiejętności):</b><i> +{$Mooc2} (moc świątyni * lvl postaci / 2)</i><br>
<b>Max aktywnych błogosławieństw: </b>{$maxblo}<br>
<br>
<br>
<br>
<br>
  <br>  <fieldset>
               <legend><b>Błogosławieństwa zwykłe:</b></legend>
 <table>
 <tr>
  <td><b><i>STATYSTYKI:</i><br><br></b></td>	<td><b><i>UMIEJĘTNOŚCI:</i><br><br></b></td>
</tr>



<tr>
	<td><b>Siła:</b> <a href="tribes.php?sila=buff">(użyj)</a></td>	<td><b>Drwalnictwo:</b> <a href="tribes.php?drwalnictwo=buff">(użyj)</a></td>
</tr>
<tr>
	<td><b>Zręczność:</b> <a href="tribes.php?zrecznosc=buff">(użyj)</a></td>	<td><b>Alchemia:</b> <a href="tribes.php?alchemia=buff">(użyj)</a></td>
</tr>
<tr>
	<td><b>Szybkość:</b> <a href="tribes.php?szybkosc=buff">(użyj)</a></td>	<td><b>Zielarstwo:</b> <a href="tribes.php?zielarstwo=buff">(użyj)</a></td>
</tr>
<tr>
	<td><b>Inteligencja:</b> <a href="tribes.php?inteligencja=buff">(użyj)</a></td>	<td><b>Górnictwo:</b> <a href="tribes.php?gornictwo=buff">(użyj)</a></td>
</tr>
<tr>
	<td><b>Siła Woli:</b> <a href="tribes.php?silawoli=buff">(użyj)</a></td>	<td><b>Hutnictwo:</b> <a href="tribes.php?hutnictwo=buff">(użyj)</a></td>
</tr>
<tr>
	 <td><b>Wytrzymałość:</b> <a href="tribes.php?wytrzymalosc=buff">(użyj)</a></td>	<td></td>
</tr>





</table>   
  </fieldset>  
     <br>  <fieldset>
               <legend><b>Błogosławieństwa dla podklasy kapłan (moc +30%):</b></legend>
 <table>
 <tr>
  <td><b><i>STATYSTYKI:</i><br><br></b></td>	<td><b><i>UMIEJĘTNOŚCI:</i><br><br></b></td>
</tr>



<tr>
	<td><b>Siła:</b> <a href="tribes.php?sila=buff2">(użyj)</a></td>	<td><b>Drwalnictwo:</b> <a href="tribes.php?drwalnictwo=buff2">(użyj)</a></td>
</tr>
<tr>
	<td><b>Zręczność:</b> <a href="tribes.php?zrecznosc=buff2">(użyj)</a></td>	<td><b>Alchemia:</b> <a href="tribes.php?alchemia=buff2">(użyj)</a></td>
</tr>
<tr>
	<td><b>Szybkość:</b> <a href="tribes.php?szybkosc=buff2">(użyj)</a></td>	<td><b>Zielarstwo:</b> <a href="tribes.php?zielarstwo=buff2">(użyj)</a></td>
</tr>
<tr>
	<td><b>Inteligencja:</b> <a href="tribes.php?inteligencja=buff2">(użyj)</a></td>	<td><b>Górnictwo:</b> <a href="tribes.php?gornictwo=buff2">(użyj)</a></td>
</tr>
<tr>
	<td><b>Siła Woli:</b> <a href="tribes.php?silawoli=buff2">(użyj)</a></td>	<td><b>Hutnictwo:</b> <a href="tribes.php?hutnictwo=buff2">(użyj)</a></td>
</tr>
<tr>
	 <td><b>Wytrzymałość:</b> <a href="tribes.php?wytrzymalosc=buff2">(użyj)</a></td>	<td> </td>
</tr>





</table>   
  </fieldset>  
<br><br><br>    
<b>Twój Panel:<br></b>
Posiadasz aktywnych błogosławieństw: {$blogoo} / {$maxblo}<br>    
<br>  
<fieldset>
<legend><b>Aktywne:</b></legend>
<table>
 <tr>
  <td><b><i>STATYSTYKI:<i><br><br></b></td>	<td><b><i>UMIEJĘTNOŚCI:</i><br><br></b></td>
</tr>


<tr>
	<td><b>Siła: +</b> (<b> {$sila} </b>)</td>	<td><b>Drwalnictwo: +</b> (<b> {$drwalnictwo} </b>)</td>
</tr>
<tr>
	<td><b>Zręczność: +</b> (<b> {$zrecznosc} </b>)</td>	<td><b>Alchemia: +</b> (<b> {$alchemia} </b>)</td>
</tr>
<tr>
	<td><b>Szybkość: +</b> (<b> {$szybkosc} </b>)</td>	<td><b>Zielarstwo: +</b> (<b> {$zielarstwo} </b>)</td>
</tr>
<tr>
	<td><b>Inteligencja: +</b> (<b> {$inteligencja} </b>)</td>	<td><b>Górnictwo: +</b> (<b> {$gornictwo} </b>)</td>
</tr>
<tr>
	<td><b>Siła Woli: +</b> (<b> {$silawoli} </b>)</td>	<td><b>Hutnictwo: +</b> (<b> {$hutnictwo} </b>)</td>
</tr>
<tr>
	 <td><b>Wytrzymałość: +</b> (<b> {$wytrzymalosc} </b>)</td>	<td><b></b> </td>
</tr>
</table>   
</fieldset>    
  
  
  
  
  
  
  
  
  
  
  
    
    {/if}
























{if $View == "view"}
    {if $Step == ""}
        <center>
        {$Yousee}: {$Name}<br /><br />
        {$Logo}
        {$Leader2} <a href="view.php?view={$OwnerID}">{$Owner} ({$OwnerID})</a><br /><br />
        {$Memamount}: {$Members}<br />
        <a href="tribes.php?view=view&amp;step=members&tid={$Tribeid}">{$Amembers}</a><br />
        {$Winamount}: {$Wins}<br />
        {$Lostamount}: {$Lost}<br />
        {$prestt}
        {$Astral}
        {$WWW}<br />
        {$Pubmessage}<br /><br />
        <form method="post" action="tribes.php?join={$Tribeid}">
        {$Jointo} {$Name}<br />
        <input type="submit" value="{$Ajoin}" />
        </form></br>
        {$Asteal}</br></br><br /> </center>
    {/if}
    {if $Step == "members"}
        {$Memberlist} {$Name}<br />
        {section name=tribes1 loop=$Link}
            {$Link[tribes1]}
        {/section}
    {/if}
{/if}

{if $Join != ""}
    {if $Check == "1"}
        {$Youwait}<br />
        <a href="tribes.php?join={$Tribeid}&amp;change={$Playerid}">{$Ayes}</a><br />
        <a href="tribes.php">{$Ano}</a><br />
    {/if}
{/if}

{if $View == "make"}
    <table><form method="post" action="tribes.php?view=make&amp;step=make">
    <tr><td>{$Clanname}:</td><td><input type="text" name="name" /></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="{$Amake}" /></td></tr>
    </form></table>
{/if}

{if $View == "my"}
    <center><b>{$Myclan}: {$Name}</b></center>
    
    {if $Step == ""}
        {$Logo}
        <br /><br /><center>
    [<a href="tribes.php?view=my">{$Menu1}</a>] 
    [<a href="tribes.php?view=my&amp;step=donate">{$Menu2}</a>] 
    [<a href="tribes.php?view=my&amp;step=members">{$Menu3}</a>] 
    [<a href="tribearmor.php">{$Menu4}</a>] 
    [<a href="tribeware.php">{$Menu5}</a>] 
    [<a href="tribes.php?view=my&amp;step=skarbiec">{$Menu6}</a>] 
    [<a href="tribes.php?view=my&amp;step=zielnik">{$Menu7}</a>] 
    [<a href="tribes.php?view=swiatynia">Świątynia</a>] 
    </center><center>
    [<a href="tribes.php?view=my&amp;step=quit">{$Menu8}</a>] 
    [<a href="tribes.php?view=my&amp;step=owner">{$Menu9}</a>] 
    [<a href="tforums.php?view=topics">{$Menu10}</a>] 
    [<a href="tribeastral.php">{$Menu11}</a>]
     [<a href="lekarzklanu.php">Szpital klanu</a>] </center>
    <br /><center><table width="98%" class="td" cellpadding="0" cellspacing="0">
    <tr><td width="100%" valign="top">
        Informacje o Twojej Gildii:<br/><br/>
        <table width="60%">
        <tr><td width="40%"><b>{$Clanname}:</b></td><td width="60%"> {$Name}</td></tr>
        <tr><td><b>Poziom fortecy:</b></td><td> {$lvl} / 6</td></tr>
         <tr><td><b>Poziom świątyni:</b></td>  <td> {$slvl} / 6</td></tr>
        <tr><td><b>{$Memamount}:</b></td>      <td> {$Members} / {$maxlud} </td></tr>
        <tr><td><b>Założyciel:</b></td>        <td> <a href="view.php?view={$Ownerid}">{$Owner}</a></td></tr>
        <tr><td><b>{$Goldcoins}:</b></td>      <td> {$Gold}</td></tr>
        <tr><td><b>{$Mithcoins}:</b></td>      <td> {$Mithril}</td></tr>
        <tr><td><b>{$Winamount}:</b></td>      <td> {$Wins}</td></tr>
        <tr><td><b>{$Lostamount}:</b></td>     <td> {$Lost}</td></tr>
        <tr><td><b>{$Tsoldiers}:</b></td>      <td> {$Soldiers} / {$maxz} </td></tr>
        <tr><td><b>{$Tforts}:</b></td>         <td> {$Forts} / {$maxf} </td></tr>
        <tr><td><b>Prestiż:</b></td>           <td> {$prest}</td></tr>
         <tr><td><b>Czar klątwy:</b></td>       <td> {$eczar}</td></tr>
        <tr><td><b>Szpital:</b></td>           <td> {$eszpital}</td></tr>
        <tr><td><b>Lekarz opłacony na:</b></td>           <td> {$godziny} godzin.</td></tr>
        <tr><td><b>{$WWW}</b></td></tr>
        <tr><td><b>{$Amachine}</b></td><td> ({$Percent}% {$Apercent})</td></tr><br><br>
        
       
       
        </table><br><br>

        {$Privmessage}
    {/if}
    {if $Step == "astral"}
        {$Aused} {$Eused} {$Aenergy}<br />
        {$Atoday} {$Edirected} {$Aenergy} {$Amax} 2000 {$Aenergy}<br />
        <form method="post" action="tribes.php?view=my&amp;step=astral&amp;step2=add">
            <input type="submit" value="{$Adirect}" /> {$Aform} <input type="text" name="amount" size="5" value="0" /> {$Aenergy}
        </form>
        {$Message}
        <br /><br />
    {/if}
    {if $Step == "donate"}
        {$Doninfo}
        <form method="post" action="tribes.php?view=my&amp;step=donate&amp;step2=donate">
        {$Adonate} <input type="text" size="5" name="amount" value="0" /> <select name="type">
        <option value="credits">{$Goldcoins}</option>
        <option value="platinum">{$Mithcoins}</option>
        </select> {$Toclan} <input type="submit" value="{$Adonate}" />
        </form>
        {$Message}
    {/if}
    {if $Step == "zielnik"}
        {if $Step2 == "" && $Step3 == "" && $Step4 == "" && $Give == ""}
            {$Herbsinfo}<br />
            <table>
                <tr>
                    {section name=herbstribe2 loop=$Ttable}
                        {$Ttable[herbstribe2]}
                    {/section}
                </tr>
                <tr>
                    {section name=herbstribe3 loop=$Tamount}
                        <td align="center">{$Tamount[herbstribe3]}</td>
                    {/section}
                </tr>
            </table>
            {$Whatyou}<br />
            <ul>
            <li><a href="tribes.php?view=my&amp;step=zielnik&amp;step2=daj">{$Agiveto}</a></li>
            </ul><br />
        {/if}
        {if $Give != ""}
            {if $Step4 == ""}
                <form method=post action="tribes.php?view=my&amp;step=zielnik&amp;daj={$Itemid}&amp;step4=add">
                    {$Giveplayer} <input type="text" name="did" size="5" /><br />
                    <input type="text" name="ilosc" size="5" /> {$Nameherb} {$Tamount} {$Tamount2} {$Hamount2}.<br />
                    <input type="hidden" name="min" value="{$Nameherb}" />
                    <input type="submit" value="{$Agive}" /><br />
                </form>
            {/if}
            {$Message}
        {/if}
        {if $Step2 == "daj"}
            {$Addherb}<br /><br />
            <form method="post" action="tribes.php?view=my&amp;step=zielnik&amp;step2=daj&amp;step3=add"><table>
            <tr><td>{$Herb}:</td><td><select name="mineral">
                {section name=herbstribe loop=$Herbname}
                    <option value="{$Sqlname[herbstribe]}">{$Herbname[herbstribe]}</option>
                {/section}
            </select></td></tr>
            <tr><td>{$Hamount}:</td><td><input type="text" name="ilosc" /></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="{$Aadd}" /></td></tr>
            </table></form>
            {$Message}
        {/if}
    {/if}
    {if $Step == "skarbiec"}
        {if $Step2 == "" && $Step3 == "" && $Step4 == "" && $Give == ""}
            {$Mininfo}<br />
            <table>
            {$Menu}
                {section name=tribemin loop=$Ttable}
                    {$Ttable[tribemin]}
                {/section}
            </table>
            {$Whatyou}<br />
            <ul>
            <li><a href="tribes.php?view=my&amp;step=skarbiec&amp;step2=daj">{$Agiveto}</a></li>
            </ul><br />
        {/if}
        {if $Give != ""}
            <form method="post" action="tribes.php?view=my&amp;step=skarbiec&amp;daj={$Itemid}&amp;step4=add">
                {$Giveplayer} <input type="text" name="did" size="5" /><br />
                <input type="text" name="ilosc" size="7" /> {$Namemin} {$Tamount} {$Tamount2} {$Mamount2}.<br />
                <input type="hidden" name="min" value="{$Namemin}" />
                <input type="submit" value="{$Agive}" /><br />
            </form>
            {$Message}
        {/if}
        {if $Step2 == "daj"}
            {$Addmin}<br /><br />
            <form method="post" action="tribes.php?view=my&amp;step=skarbiec&amp;step2=daj&amp;step3=add"><table>
            <tr><td>{$Mineral}:</td><td><select name="mineral">
                {section name=tribemin2 loop=$Minname}
                    <option value="{$Minsql[tribemin2]}">{$Minname[tribemin2]}</option>
                {/section}
            </select></td></tr>
            <tr><td>{$Mamount}:</td><td><input type="text" name="ilosc" /></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="{$Aadd}" /></td></tr>
            </table></form>
            {$Message}
        {/if}
    {/if}
    {if $Step == "members"}
        {section name=tribes2 loop=$Link}
            {$Link[tribes2]}
        {/section}
    {/if}
    {if $Step == "quit"}
        {if $Owner == "1"}
            {$Qleader}<br />
            <a href="tribes.php?view=my&amp;step=quit&amp;dalej=tak">{$Ayes}</a><br />
            <a href="tribes.php?view=my">{$Ano}</a><br />
        {/if}
        {if $Owner != "1"}
            {$Qmember}<br />
            <a href="tribes.php?view=my&amp;step=quit&amp;dalej=tak">{$Ayes}</a><br />
            <a href="tribes.php?view=my">{$Ano}</a><br />
        {/if}
    {/if}
    {if $Step == "owner"}
        {if $Step2 == ""}
            Witaj w panelu przywódcy klanu. Co chcesz zrobić?
            <ul>
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=permissions">{$Aperm}</a></li>
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=rank">{$Arank}</a></li>
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=mail">{$Amail2}</a></li>
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=messages">{$Adesc}</a></li>
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=nowy">{$Awaiting}</a></li>
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=kick">{$Akick}</a></li>
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=wojsko">{$Aarmy}</a></li>
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=walka">{$Aattack2}</a></li>
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=loan">{$Aloan}</a></li>
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=te">{$Amisc}</a></li>
            <li><a href="kuplekarza.php">Opłać lekarza dla gildii - Darmowe leczenie. (wymagane 5k prestiżu, koszt 1k prestiżu).</a></li>
            <li><a href="kupczar.php">Kup czar pozwalający rzucić urok na świątynię innego klanu. (wymagane 3k prestiżu, koszt 500 prestiżu).</a></li>
            <li><a href="rzucczar.php">Rzuć czar blokujący świątynię innej gildii. (wymagane posiadanie czaru i +50RC, koszt 20 prestiżu)</a></li>
            <li><a href="oplac.php">Opłać lekarza</a></li>
            
         </ul><br />
		 <center>{$message}</center><br>
{if $Lvl< "6"} 
<fieldset>
<legend><a href="tribes.php?view=my&amp;step=owner&amp;step2=fortress">Rozbudowa fortecy - poziom {$Nextlvl}</a></legend>
<table width="100%">
<tr>
<td>
Wymagania:
<ul>
	<li>Złoto: {$Goldcost}</li>
	<li>Mithril: {$Platcost}</li>
	<li>Prestiż: {$Prestcost}</li>
</ul><br />
</td>
<td>
W klanie:
<ul>
	<li>Złoto: {$Gold}</li>
	<li>Mithril: {$Platinum}</li>
	<li>Prestiż: {$Prest}</li>
</ul><br />
</td>
</tr>
</table>
<div style="margin: 0px auto; width: 50%">
	W zamian klan otrzyma:
<ul>
	<li>+{$Ludadd} dodatkowe miejsca dla członków</li>
	<li>+{$Armyadd} limitu wojska</li>
	<li>+{$Armyadd} limitu fortyfikacji</li>
	<li>+{$Prestadd} prestiżu</li>
	<li>+{$Zolnadd} żołnierzy</li>
	<li>+{$Fortadd} fortyfikacji</li>
</ul><br />
</div>
</fieldset><br><br>












 <center>{$messagee}</center><br>

<fieldset>
<legend><a href="tribes.php?view=my&step=owner&step3=swiatynia">Rozbudowa świątyni - poziom {$Nextslvl}</a></legend>
<table width="100%">
<tr>
<td>
Wymagania:
<ul>
	<li>Złoto: {$Goldcostt}</li>
	<li>Poziom Fortecy: {$Poziomcost}</li>
	
</ul><br />
</td>
<td>
W klanie:
<ul>
	<li>Złoto: {$Goldd}</li>
	
	<li>Poziom Fortecy: {$Poziom}</li>
</ul><br />
</td>
</tr>
</table>
<div style="margin: 0px auto; width: 50%">
	W zamian klan otrzyma:
<ul>
	<li>+{$Maxladunkiadd} Maksymalnych ładunków</li>
	<li>+{$Maxbloadd} Maksymalnie aktywnych błogosławieństw</li>
  <li>+{$Mocbloadd} Moc świątyni</li>
	
</ul><br />
</div>
</fieldset><br><br>

















 
{/if}
        {/if}
        {if $Step2 == "rank"}
            {if $Step3 == ""}
                {$Ranksinfo}<br />
                <ul>
                <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=rank&amp;step3=set">{$Aaddranks}</a></li>
                {$Menu}
                </ul><br />
            {/if}
            {if $Step3 == "set"}
                {if $Empty == "1"}
                    {$Noranks2}<br /><br/>
                    <form method="post" action="tribes.php?view=my&amp;step=owner&amp;step2=rank&amp;step3=set&amp;step4=add">

					{$smarty.const.TAG_SUFIX} <input size="6" type="text" name="tag_sufix"/>.<br/>
					<br/>

					{section name=RankNo start=1 loop=11}
						{$smarty.section.RankNo.index}. {$smarty.const.RANK} <input type="text" name="rank{$smarty.section.RankNo.index}"/>, {$smarty.const.TAG_PREFIX} <input size="6" type="text" name="tag_prefix_{$smarty.section.RankNo.index}"/><br/>
					{/section}

                    <input type="submit" value="{$Amake}" /></form><br />
                {/if}
                {if $Empty != "1"}
                    {$Editranks}<br />
                    <form method="post" action="tribes.php?view=my&amp;step=owner&amp;step2=rank&amp;step3=set&amp;step4=edit">

					{$smarty.const.TAG_SUFIX} <input size="6" type="text" name="tag_sufix" value="{$TagSufix}"/>.<br/>
					<br/>

					{section name=RankNo start=1 loop=11}
						{$smarty.section.RankNo.index}. {$smarty.const.RANK} <input type="text" name="rank{$smarty.section.RankNo.index}" value="{$RankArr[$smarty.section.RankNo.index]}"/>
					{/section}
                    <input type="submit" value="{$Asave}" /></form><br />
                {/if}
                {$Message}
            {/if}
            {if $Step3 == "get"}
                <form method="post" action="tribes.php?view=my&amp;step=owner&amp;step2=rank&amp;step3=get&amp;step4=add">
                {$Setrank} <select name="rank">
                {section name=tribes3 loop=$Rank}
                    <option value="{$Rank[tribes3]}">{$Rank[tribes3]}</option>
                {/section}
                </select> {$Rankplayer}: <input type="tekst" name="rid" /><br />
                <input type="submit" value="{$Aset}" /></form><br />
                {$Message}
            {/if}
        {/if}
        {if $Step2 == "permissions"}
            {if $Step3 == ""}
                {$Perminfo}<br /> 
                <br>Aby ustawić komuś możliwość rzucania klątwy na świątynię gildyjną wystarczy dodać takiej osobie jedną z innych funkcji.
                {if $Next == ""}
                    <form method="post" action="tribes.php?view=my&amp;step=owner&amp;step2=permissions&amp;next=add">
                        <select name="memid">
                        {section name=tribes6 loop=$Memid}
                            <option value="{$Memid[tribes6]}">{$Members[tribes6]}</option>
                        {/section}
                        </select>
                        <input type="submit" value="{$Anext}" />
                    </form>
                {/if}
                {if $Next == "add"}
                    <br />
                    {$Tuser} <b>{$Tname}</b>
                    <form method="post" action="tribes.php?view=my&amp;step=owner&amp;step2=permissions&amp;step3=add">
                        <input type="hidden" name="memid" value="{$Memid2}" />
                        {$Tperm1}: <select name="messages">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[0]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm2}: <select name="wait">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[1]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm3}: <select name="kick">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[2]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm4}: <select name="army">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[3]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm5}: <select name="attack">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[4]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm6}: <select name="loan">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[5]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm7}: <select name="armory">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[6]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm8}: <select name="warehouse">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[7]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm9}: <select name="bank">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[8]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm10}: <select name="herbs">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[9]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm11}: <select name="forum">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[10]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm12}: <select name="ranks">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[11]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm13}: <select name="mail">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[12]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm14}: <select name="info">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[13]}>{$Yes}</option>
                        </select>
                        <br />
                        {$Tperm15}: <select name="astralvault">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[14]}>{$Yes}</option>
                        </select>
                        <br />
                         Rzucanie klą☺twy: <select name="czar">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[15]}>{$Yes}</option>
                        </select>
                        <br />
                        <input type="submit" value="{$Asave}" />
                    </form>
                {/if}
            {/if}
            {$Message}
        {/if}
        {if $Step2 == "mail"}
            {if $Step3 == ""}
                <form method="post" action="tribes.php?view=my&amp;step=owner&amp;step2=mail&amp;step3=send">
                    <table>
                        <tr>
                            <td>{$Ttitle}:</td>
                            <td><input type="text" name="mtitle" size="55" /></td>
                        </tr>
                        <tr>
                            <td valign="top">{$Tbody}:</td>
                            <td><textarea name="body" rows="13" cols="55"></textarea></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><input type="submit" value="{$Asend}" /></td>
                        </tr>
                    </table>
                </form>
            {/if}
            {if $Step3 == "send"}
                {$Message}
            {/if}
        {/if}
        {if $Step2 == "wojsko"}
            {if $Action == ""}
                {$Armyinfo}<br />
                <form method="post" action="tribes.php?view=my&amp;step=owner&amp;step2=wojsko&amp;action=kup">
                {$Howmanys} <input type="text" name="zolnierze" value="0" /><br />
                {$Howmanyf} <input type="text" name="forty" value="0" /><br />
                <input type="submit" value="{$Abuy}" /></form>
            {/if}
            {$Message}
        {/if}
        {if $Step2 == "nowy"}
            {if $New == "1"}
                {$Waitlist}<br />
                <table>
                <tr>
                <td width="100"><b><u>{$Tid}</u></b></td>
                <td width="100"><b><u>{$Taccept}</u></b></td>
                <td width="100"><b><u>{$Tdrop}</u></b></td>
                </tr>
                {section name=tribes4 loop=$Link}
                    {$Link[tribes4]}
                {/section}
                </table>
            {/if}
            {$Message}
        {/if}
        {if $Step2 == "walka"}
            {if $Step3 == ""}
                {$Selecttribe}:<br />
                {section name=tribes5 loop=$Link}
                    {$Link[tribes5]}
                {/section}
                {if $Attack != ""}
                    <br />{$Youwant}<b>{$Entribe}</b>?
                    <form method="post" action="tribes.php?view=my&amp;step=owner&amp;step2=walka&amp;step3=confirm&amp;atak={$Attack}">
                        <input type="submit" value="{$Ayes}" />
                    </form>
                {/if}
            {/if}
            {if $Step3 == "confirm"}
                {if $Victory == "My"}
                    {$Youwin} {$Ename} {$Youwin2} {$Myname}... {$Youwin3} <b>{$Gold}</b> {$Goldcoins} <b>{$Mithril}</b> {$Mithrilcoins}{$Astral}
                {/if}
                {if $Victory == "Enemy"}
                    {$Ewin} {$Ename} {$Ewin2} {$Ename} {$Ewin3} <b>{$Gold}</b> {$Goldcoins} <b>{$Mithril}</b> {$Mithrilcoins}{$Astral}
                {/if}
            {/if}
        {/if}
        {if $Step2 == "messages"}
            <form method="post" action="tribes.php?view=my&amp;step=owner&amp;step2=messages&amp;action=edit"><table>
            <tr><td valign="top">{$Clandesc}:</td><td><textarea name="public_msg" rows="13" cols="50">{$Pubmessage}</textarea></td></tr>
            <tr><td valign="top">{$Msgtomem}:</td><td><textarea name="private_msg" rows="13" cols="50">{$Privmessage}</textarea></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="{$Achange}" /></td></tr>
            </table></form>
            <form method="post" action="tribes.php?view=my&amp;step=owner&amp;step2=messages&amp;action=www">
            {$Clansite}: <input type="text" name="www" value="{$WWW}" /><br />
            <input type="submit" value="{$Aset}" /></form><br />
            {$Logo}
            {$Logoinfo}<br />
            {if $Change == "Y"}
                <form action="tribes.php?view=my&amp;step=owner&amp;step2=messages&amp;step4=usun" method="post">
                <input type="hidden" name="av" value="{$Logo}" />
                <input type="submit" value="{$Adelete}" />
                </form>
            {/if}
            <form enctype="multipart/form-data" action="tribes.php?view=my&amp;step=owner&amp;step2=messages&amp;step4=dodaj" method="post">
            <input type="hidden" name="MAX_FILE_SIZE" value="10240" />
            {$Logoname}: <input name="plik" type="file" /><br />
            <input type="submit" value="{$Asend}" /></form>
            {$Message}
        {/if}
        {if $Step2 == "kick"}
            <form method="post" action="tribes.php?view=my&amp;step=owner&amp;step2=kick&amp;action=kick">
            {$Kickid} <input type="text" size="5" name="id" /> {$Fromclan}. <input type="submit" value="{$Akick}" />
            </form>
            {$Message}
        {/if}
        {if $Step2 == "loan"}
            <form method="post" action="tribes.php?view=my&amp;step=owner&amp;step2=loan&amp;action=loan">
            {$Aloan2} <input type="text" size="5" name="amount" /> <select name="currency">
            <option value="credits">{$Goldcoins}</option>
            <option value="platinum">{$Mithcoins}</option></select>
            {$Playerid} <input type="text" size="5" name="id" />. <input type="submit" value="{$Aloan2}" />
            </form>
            {$Message}
        {/if}
        {if $Step2 == "te"}
            {$Message1}
            {$Miscinfo}
            <ul>
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=te&amp;step3=hospass">{$Afreeheal}</a>
            </ul><br />
            {if $Hospass1 == "1"}
                {$Youbuy}
                <a href="tribes.php?view=my&amp;step=owner">... {$Aback}</a>
            {/if}
        {/if}
        
        
        
        

        
        
        
        
        
        
        
        
        {$Message2}
    {/if}{/if}
    </td></tr></table></center><br />

{/strip}
<br /><br />