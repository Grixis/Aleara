<center><IMG SRC="images/locations/gmachgildii.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
{if $View == "" && $Join == ""}
    Błąkasz się po nieznanych ścieżkach... Natrafiasz na ufortyfikowany budynek, całkiem różniący się od architektury, którą oglądałeś idąc tutaj. Przyglądasz się. Widzisz wielkie wrota, a przy nich strażników. Niepewnie podchodzisz do jednego z nich.
<br>- Witam. Przepraszam, ale cóż to za miejsce - pytasz wysokiego, dobrze zbudowanego wojownika. 
<br>- Witaj w gmachu gildii - odpowiada Ci uzbrojony człowiek. Zauważasz również u niego delikatny uśmiech na twarzy. Ręką wskazuje Ci byś bez obawy wszedł. Rozglądasz się... Obserwujesz biegających medyków, skarbników ze skupioną twarzą liczących dochody... Ludzi siedzących sobie wygodnie na ławach i plotkujących, oraz nowych, którzy są szkoleni w razie potrzeby... Odwracasz się i widzisz postać idącą w Twoim kierunku. 
<br>- Witaj przybyszu - zwraca się do Ciebie. - Zapraszamy, czekaliśmy na Ciebie....

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

<b>Moc świątyni: </b>{$slvl}<br>
<b>Moc błogosławieństw (statystyki):</b><i> +{$Mooc} (moc świątyni * lvl postaci)</i><br>
<b>Moc błogosławieństw (umiejętności):</b><i> +{$Mooc2} (moc świątyni * lvl postaci / 2)</i><br>
<b>Max aktywnych błogosławieństw (statystyki): </b>{$maxblo}<br>
<b>Max aktywnych błogosławieństw (umiejętności): </b>1<br>
<b>Koszt jednego buffa (statystyki): </b>1 ładunek<br> 
<b>Koszt jednego buffa (umiejętności): </b>5 ładunków<br>
<b>Wykorzystane ładunki: </b>{$ladunki} / {$maxladunki} (na dziś)<br>
<div style="width: 200px; height: 5px;" id="statusbar"></div><div id="value" style="display: none">{$ladunkiperc}</div><br>
{literal}
<script>
var val=parseInt($("#value").html());
$("#statusbar").progressbar({value: val  });
</script>
{/literal}
<br>
<br>
<br>
<br>
  <br>  <fieldset>
               <legend><b>Wybierz błogosławieństwo:</b></legend>
 <table>
 <tr>
  <td><b><i>STATYSTYKI:</i><br><br></b></td>	<td><b><i>UMIEJĘTNOŚCI:</i><br><br></b></td>
</tr>



<tr>
	<td><b>Siła:</b> <a href="tribes.php?buff=sila">(użyj)</a></td>	<td><b>Drwalnictwo:</b> <a href="tribes.php?buff=drwalnictwo">(użyj)</a></td>
</tr>
<tr>
	<td><b>Zręczność:</b> <a href="tribes.php?buff=zrecznosc">(użyj)</a></td>	<td><b>Zielarstwo:</b> <a href="tribes.php?buff=zielarstwo">(użyj)</a></td>
</tr>
<tr>
	<td><b>Szybkość:</b> <a href="tribes.php?buff=szybkosc">(użyj)</a></td>	<td><b>Górnictwo:</b> <a href="tribes.php?buff=gornictwo">(użyj)</a></td>
</tr>
<tr>
	<td><b>Inteligencja:</b> <a href="tribes.php?buff=inteligencja">(użyj)</a></td>	<td></td>
</tr>
<tr>
	<td><b>Siła Woli:</b> <a href="tribes.php?buff=silawoli">(użyj)</a></td>	<td></td>
</tr>
<tr>
	 <td><b>Wytrzymałość:</b> <a href="tribes.php?buff=wytrzymalosc">(użyj)</a></td>	<td></td>
</tr>
</table>   
  </fieldset>  
  
<br><br><br>    

Posiadasz aktywnych błogosławieństw: {$blogoo}<br>    
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
	<td><b>Zręczność: +</b> (<b> {$zrecznosc} </b>)</td><td><b>Zielarstwo: +</b> (<b> {$zielarstwo} </b>)</td>
</tr>
<tr>
	<td><b>Szybkość: +</b> (<b> {$szybkosc} </b>)</td>	<td><b>Górnictwo: +</b> (<b> {$gornictwo} </b>)</td>
</tr>
<tr>
    <td><b>Inteligencja: +</b> (<b> {$inteligencja} </b>)</td>	<td></td>
</tr>
<tr>
    <td><b>Siła Woli: +</b> (<b> {$silawoli} </b>)</td>	<td></td>
</tr>
<tr>
	 <td><b>Wytrzymałość: +</b> (<b> {$wytrzymalosc} </b>)</td>	<td></td>
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
        <br />

           <fieldset width="80%">
        <legend><b>Panel gildii</b></legend>
        <center> [<a href="tribes.php?view=my&amp;step=members">Zobacz Członków</a>] [<a href="tforums.php?view=topics">Forum Gildii</a>] [<a href="tribes.php?view=my&amp;step=owner">Panel Przywódcy</a>] [<a href="tribes.php?view=my&amp;step=quit">Opuść Gildię</a>]</center>
           <table width="100%"></center>  
           </table>
        </fieldset>
            <fieldset width="80%">
        <legend><b>Budynki w gildii</b></legend>
        <center>[<a href="tribearmor.php">Zbrojownia</a>] [<a href="tribes.php?view=my&amp;step=skarbiec">Magazyn</a>] [<a href="tribeware.php">Labolatorium</a>] [<a href="tribes.php?view=my&amp;step=zielnik">Zielarnia</a>] [<a href="tribes.php?view=swiatynia">Świątynia</a>] [<a href="lekarzklanu.php">Szpital</a>] [<a href="tribeastral.php">Astralny Skarbiec</a>]</center>
           <table width="100%"></center>  
           </table>
        </fieldset>
        <fieldset width="80%">
        <legend><b>Informacje ogólne</b></legend>
                  
           
        <table width="80%"></center>
        <tr><td width="35%"><b>{$Clanname}:</b></td><td width="50%"> {$Name}</td><td align="right"> </td></tr>
        <tr><td><b>Poziom fortecy:</b></td><td> {$lvl} / 6</td><td width="30%"></td></tr>
         <tr><td><b>Poziom świątyni:</b></td>  <td> {$slvl} / 6</td><td width="30%"></td></tr>
        <tr><td><b>{$Memamount}:</b></td>      <td> {$Members} / {$maxlud}</td><td width="30%"></td></tr>
        <tr><td><b>Założyciel:</b></td>        <td> <a href="view.php?view={$Ownerid}">{$Owner}</a></td><td width="30%"> </td></tr>
        
        <tr><td><b>{$Winamount}:</b></td>      <td> {$Wins}</td><td width="30%"> </td></tr>
        <tr><td><b>{$Lostamount}:</b></td>     <td> {$Lost}</td><td width="30%"></td></tr>
        <tr><td><b>{$Tsoldiers}:</b></td>      <td> {$Soldiers} / {$maxz}</td><td width="30%"></td></tr>
        <tr><td><b>{$Tforts}:</b></td>         <td> {$Forts} / {$maxf}</td><td width="30%"></td></tr>
        <tr><td><b>Prestiż:</b></td>           <td> {$prest}</td><td width="30%"> </td></tr>
         <tr><td><b>Czar klątwy:</b></td>       <td> {$eczar}</td><td width="30%"></td></tr>
        <tr><td><b>Szpital:</b></td>           <td> {$eszpital}</td><td width="30%"></td></tr>
        <tr><td><b>Lekarz opłacony na:</b></td>           <td> {$godziny} godzin(y).</td><td width="30%"></td></tr>
        <tr><td><b>{$WWW}</b></td><td width="30%"> </td></tr>
        <tr><td><b>{$Amachine}</b></td><td> ({$Percent}% {$Apercent})</td><td width="30%"> </td></tr>
        </table>
        </fieldset></center>
    
        
        <fieldset width="80%">
        <legend><b>Świątynia Gildyjna</b></legend>
   <table width="100%"></center>      
<tr><td><b>Poziom Świątyni:</b></td>            <td>{$slvl} / 6 </td></tr>



<tr><td><b>Wykorzystane ładunki:</td> </b><td>{$ladunki} / {$maxladunki} (na dziś)<br> </td></tr>
<tr><td><b>Moc świątyni:</td> </b><td>{$mocblo}<br></td></tr>
<tr><td><b>Moc błogosławieństw (statystyki):</td></b><i> <td>+{$Mooc} (moc świątyni * lvl postaci)</i><br></td></tr>
<tr><td><b>Moc błogosławieństw (umiejętności):</td></b><i> <td>+{$Mooc2} (moc świątyni * lvl postaci / 2)</i><br></td></tr>
<tr><td><b>Max aktywnych błogosławieństw (stat.):</td> </b><td>{$maxblo}<br></td></tr>
<tr><td><b>Max aktywnych błogosławieństw (umiej.):</td> </b><td>1<br></td></tr>
<tr><td><b>Koszt jednego buffa (statystyki):</td> </b><td>1 ładunek<br></td></tr>
<tr><td><b>Koszt jednego buffa (umiejętności):</td> </b><td>5 ładunków<br></td></tr>
        
        
         </table>
        </fieldset>
        
        
        </i></i></i></i></i>
        <fieldset width="80%">
        <legend><b></i></i></i></i>Minerały w gildii</b></legend>
   <table width="100%"></center>
         
         
        <tr><td width="30%"><b>Sztuk Złota:</b></td>      <td> {$Gold}</td><td width="30%"> <a href="tribes.php?view=my&step=owner&step2=loan">[zabierz]</a> lub <a href="tribes.php?view=my&amp;step=donate">[dorzuć]</a> </td></tr>
        <tr><td><b>Sztuk Mithrilu:</b></td>      <td> {$Mithril}</td><td>  <a href="tribes.php?view=my&step=owner&step2=loan">[zabierz]</a> lub <a href="tribes.php?view=my&amp;step=donate">[dorzuć]</a> </td></tr>
        <tr><td><b>Rudy miedzi:</b></td>           <td> {$copperore}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=copperore">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Rudy cynku:</b></td>           <td> {$zincore}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=zincore">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Rudy cyny:</b></td>           <td> {$tinore}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=tinore">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Rudy żelaza:</b></td>           <td> {$ironore}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=ironore">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Sztabek miedzi:</b></td>           <td> {$copper}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=copper">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Sztabek brązu:</b></td>           <td> {$bronze}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=bronze">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Sztabek mosiądzu:</b></td>           <td> {$brass}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=brass">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Sztabek żelaza:</b></td>           <td> {$iron}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=iron">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Sztabek stali:</b></td>           <td> {$steel}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=steel">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Brył węgla:</b></td>           <td> {$coal}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=coal">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Brył adamantium:</b></td>           <td> {$adamantium}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=adamantium">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Kawałków meteorytu:</b></td>           <td> {$meteor}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=meteor">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Kryształów:</b></td>           <td> {$crystal}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=crystal">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Drewna sosnowego:</b></td>           <td> {$pine}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=pine">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Drewna z leszczyny:</b></td>           <td> {$hazel}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=hazel">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Drewna cisowego:</b></td>           <td> {$yew}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=yew">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Drewna z wiązu:</b></td>           <td> {$elm}</td>           <td> <a href="tribes.php?view=my&step=skarbiec&daj=elm">[zabierz]</a> lub <a href="tribes.php?view=my&step=skarbiec&step2=daj">[dorzuć]</a> </td></tr>
       
       
       
       
       
        <tr><td><b>Illani:</b></td>           <td> {$illani}</td><td> <a href="tribes.php?view=my&step=zielnik&daj=illani">[zabierz]</a> lub <a href="tribes.php?view=my&step=zielnik&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Illanias:</b></td>           <td> {$illanias}</td><td> <a href="tribes.php?view=my&step=zielnik&daj=illanias">[zabierz]</a> lub <a href="tribes.php?view=my&step=zielnik&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Nutari:</b></td>           <td> {$nutari}</td><td> <a href="tribes.php?view=my&step=zielnik&daj=nutari">[zabierz]</a> lub <a href="tribes.php?view=my&step=zielnik&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Dynallca:</b></td>           <td> {$dynallca}</td><td> <a href="tribes.php?view=my&step=zielnik&daj=dynallca">[zabierz]</a> lub <a href="tribes.php?view=my&step=zielnik&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Nasiona Illani:</b></td>           <td> {$ilani_seeds}</td><td> <a href="tribes.php?view=my&step=zielnik&daj=ilani_seeds">[zabierz]</a> lub <a href="tribes.php?view=my&step=zielnik&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Nasiona Illanias:</b></td>           <td> {$illanias_seeds}</td><td> <a href="tribes.php?view=my&step=zielnik&daj=illanias_seeds">[zabierz]</a> lub <a href="tribes.php?view=my&step=zielnik&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Nasiona Nutari:</b></td>           <td> {$nutari_seeds}</td><td> <a href="tribes.php?view=my&step=zielnik&daj=nutari_seeds">[zabierz]</a> lub <a href="tribes.php?view=my&step=zielnik&step2=daj">[dorzuć]</a> </td></tr>
        <tr><td><b>Nasiona Dynallca:</b></td>           <td> {$dynallca_seeds}</td><td> <a href="tribes.php?view=my&step=zielnik&daj=dynallca_seeds">[zabierz]</a> lub <a href="tribes.php?view=my&step=zielnik&step2=daj">[dorzuć]</a> </td></tr>
       
       
        </table>
        </fieldset><br><br>

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
                    Pożycz: 
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
                Pożycz: 
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
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=changename">Zmień nazwę gildii</a></li>
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=changeowner">Przekaż przywództwo gildii</a></li>
            <li><a href="tribes.php?view=my&amp;step=owner&amp;step2=te">{$Amisc}</a></li>
            <li><a href="kuplekarza.php">Wybuduj szpital - Darmowe leczenie i wskrzeszanie. (wymagane 5k prestiżu, koszt: 25kk złota, 50k mithrilu, 30k sosny, 20k leszczyny, 10k cisu, 5k wiązu, 5k meteorytu, 20k rudy miedzi [dodaje +500prest.]).</a></li>
            <li><a href="kupczar.php">Kup czar pozwalający rzucić urok na świątynię innego klanu. (wymagane 3k prestiżu, koszt 5kk złota i 30k mithrilu[dodaje +300prest.]).</a></li>
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
{/if}
 <center>{$messagee}</center><br>
{if $Slvl<"6"}
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
  <li>+{$Mocbloadd} Moc świątyni</li>
	
</ul><br />
</div>
</fieldset><br><br>

{/if}
        {/if}
        {if $Step2 == "changename"}
        Tutaj możesz zmienić nazwę swojej gildii.<br>
        <form method="post" action="tribes.php?view=my&step=owner&step2=changename">
        Nowa nazwa:<input type="text" name="name" /><br>
        <input type="submit" value="Zmien" />
        </form>
        {/if}
        
        {if $Step2 == "changeowner"}
        Tutaj możesz zmienić właściciela swojej gildii.<br>
        <form method="post" action="tribes.php?view=my&step=owner&step2=changeowner">
        Nowy właściciel ID:<input type="text" name="pid" /><br>
        <input type="submit" value="Zmien" />
        </form>
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
						{$smarty.section.RankNo.index}. {$smarty.const.RANK} <input type="text" name="rank{$smarty.section.RankNo.index}" value="{$RankArr[$smarty.section.RankNo.index]}"/>, {$smarty.const.TAG_PREFIX} <input size="6" type="text" name="tag_prefix_{$smarty.section.RankNo.index}" value="{$TagPrefixArr[$smarty.section.RankNo.index]}"/><br/>
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
                <br>
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
                         Rzucanie klątwy: <select name="czar">
                            <option value="0">{$No}</option>
                            <option value="1" {$Tselected[20]}>{$Yes}</option>
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
            . <input type="submit" value="{$Aloan2}" />
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
            ??
        {/if}

        {$Message2}
    {/if}{/if}
    </td></tr></table></center><br />

{/strip}
<br /><br />