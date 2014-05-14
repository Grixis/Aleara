{strip}
{if $View == "categories"}
{if isset($Sweep) && $Sweep > 0}
        {$Fquestion}<br />
        <a href="forums.php?view=categories&amp;sweep={$Sweep}&amp;step=Y">{$Ayes}</a><br />
    {else}
        <table><tr><td><b><u>{$Tcategory}</u></b></td><td><b><u>{$Ttopics}</u></b></td></tr>
        {section name=number loop=$Name}
            <tr>
                <td><a href="forums.php?topics={$Id[number]}"><u><span class="forum"><b>{$Name[number]}</b></span></u></a></td>
                <td><a href="forums.php?topics={$Id[number]}"><span class="forum">{$Topics1[number]}</span></a></td>
            </tr>
            <tr>
                <td><a href="forums.php?topics={$Id[number]}"><i><span class="forum">{$Description[number]}</span></i></a></td>
            </tr>
            {if $Rank == 'Admin' || $Rank == 'Staff'}
                <tr>
                    <td><a href="forums.php?view=categories&amp;sweep={$Id[number]}">{$ASweep}</a></td>
                </tr>
            {/if}
            <tr>
                <td colspan="2"><hr /></td>
            </tr>
        {/section}
        </table>
    {/if}
{/if}

{if $Topics != ""}   <center><IMG SRC="images/locations/portal.png"></center>
Wędrując po mrocznych obrzeżach Aleary zaczynasz czuć się dziwnie. Coś ciągnie cię na stary, opuszczony cmentarz. Nie chcesz tam iść, ale ta nieznana siła nie daje Ci spokoju. Wchodzisz na cmentarz i widzisz jasne, niebieskie światło. Dostrzegasz, iż to portal. Nie wiesz jednak dokąd prowadzi, lecz słyszysz dziwne, mroczne głosy nawołujące abyś podszedł bliżej. Gdy tak się dzieje zauważasz demony latające wokół portalu. Mówią one, że portal prowadzi do świata astralnego. Możesz przedostając się przez niego i doznać ciekawych przygód. Zdruzgotany tą sytuacją postanawiasz jednak wycofać się. Gdy chciałeś zrobić krok w tył magiczna siła wciągnęła Cię do środka… 

<br />
   
    <table width="100%"><tr><td width="65%"><u><b>{$Ttopic}</b></u></td><td width="25%"><u><b>{$Tauthor}</b></u></td><td width="10%"><b><u>{$Treplies}</u></b></td></tr>
    {section name=number1 loop=$Topic1}
       <tr>
        <td><div class="overflow">{if $Newtopic[number1] == "Y"}<blink><a href="forums.php?topic={$Id[number1]}#last">N</a></blink> {/if}<a href="forums.php?topic={$Id[number1]}"><span class="forum"> {$Topic1[number1]}</span></a></div></td>
        <td valign="top"><a href="view.php?view={$StarterID[number1]}">{$Starter1[number1]}</a></td>
        <td valign="top">{$Replies1[number1]}</td>
        </tr>
    {/section}
    </table><br /><br /> <br /><br /> 
    <form method="post" action="forums.php?action=addtopic">
        {$Addtopic}:<br />
        <input type="text" name="title2" value="Temat" size="60%" /><br />
        <textarea name="body" cols="60%" rows="15">{$Ttext}</textarea><br />
        <input type="hidden" name="catid" value="{$Category}" />
        {if $Rank == "Admin" || $Rank == "Staff"}
            <input type="checkbox" name="sticky" />{$Tsticky}<br />
        {/if}
        <input type="submit" value="{$Addtopic}" />
    </form><br /><br />
 
{/if}

{if $Topic != ""}
{$Aback} <a href="forums.php?topics={$Category}">{$Totopics}</a> <br /><br />

    <br />
    <center>
    <div style="font-size: 25px"><a name="top"></a>{$Topic2}</div><br />
	
    <table width="95%" style="border: 1px solid">
	<caption>{$TopicDate}</caption>
	<tr>
	<td rowspan="2" width="200px" style="border-right: 1px solid; text-align: center; vertical-align:top;">
    <a href="view.php?view={$Playerid}">{$Starter}</a> <br />{$Wid} {$Playerid}<br />{$Tavek}<br>Punkty: {$Tpkt}
	</td>
	<td valign="top" style="margin-left: 1cm; margin-right: 1cm;"><br />{$Ttext}<br /></td>
	</tr>
	<tr height="20px">
	<td valign="middle" style="border-top: 1px solid; text-align: center;"><br />(<a href="forums.php?topics={$Category}">{$Aback}</a>) (<a href="forums.php?topic={$Topic}&amp;quotet=Y#last">{$Aquote}</a>) {$Action} (<a href="#last">Skocz na dół</a>)<br/><br/></td>
	</tr>
	</table>
    
    
    {section name=number2 loop=$Rtext}
        
        <div style="text-align: right"><a name="p{$smarty.section.number2.index+1}" href="#p{$smarty.section.number2.index+1}">({$smarty.section.number2.index+1})</a></div>
		<table width="95%" style="border: 1px solid;">
		<caption>{$Dates[number2]}</caption> 
		<tr>
		<td rowspan="2" width="200px" style="border-right: 1px solid; text-align: center; vertical-align:top;"><a href="view.php?view={$Rplayerid[number2]}">{$Rstarter[number2]}</a><br /> {$Wid} {$Rplayerid[number2]}<br />{$Avek[number2]}<br />Punkty: {$Pkt[number2]}<br>(<a href="mail.php?view=write&to={$Rplayerid[number2]}">Napisz PW</a>)</td>
		<td style="margin: 1cm; vertical-align: top"><br />{$Rtext[number2]}<br /></td>
		</tr>
		<tr height="20px">
		<td style="border-top:1px solid; height:20px"><br />(<a href="forums.php?topics={$Category}">{$Aback}</a>) (<a href="forums.php?topic={$Topic}&amp;quote={$Rid[number2]}#last">{$Aquote}</a>) {$Action2[number2]}
        (<a href="#top">Skocz na górę</a>)
		
        {if $smarty.section.number2.last}
            <a name="last"/ >
        {/if}
		</td>
		</tr>
        </table>
        
       
    {/section}
    <form method="post" action="forums.php?reply={$Id}">
    {$Areply}:<br />
    <textarea name="rep" cols="75" rows="15">{$Rtext2}</textarea><br />
    <input type="submit" value="{$Areply}" />
    </form>
    </center>

{/if}
{if $Editpost != ""}
<form method="post" action="forums.php?editpo={$Epost}&amp;edited=1">
Wprowadź zmiany i zatwierdź treść postu<br /><br />
<center>
<textarea name="edycja">{$Tbody}</textarea><br/>
<input type="submit" value="Zatwierdź" />
</form>
</center>
{/if}

{if $Edittopic != ""}
<form method="post" action="forums.php?editto={$Etopic}&amp;edited=1">
Wprowadź zmiany i zatwierdź treść postu<br /><br />
<center>
<textarea name="edycja">{$Tbody}</textarea><br/>
<input type="submit" value="Zatwierdź" />
</form>
</center>
{/if}

{if $Action3 == "search"}
    {if $Amount == "0"}
        <br /><br /><center>{$Nosearch}</center><br />
    {/if}
    {if $Amount > "0"}
        {$Youfind}:<br /><br />
        {section name=number3 loop=$Ttopic}
            <a href="forums.php?topic={$Tid[number3]}">{$Ttopic[number3]}</a><br />
        {/section}
    {/if}
    <br /><br /><a href="forums.php?topics={$Category}">{$Aback}</a>
{/if}
{/strip}
<br />