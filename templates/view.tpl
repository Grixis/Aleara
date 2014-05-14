{strip}
{literal}
<script language="javascript" type="text/javascript">

function Switchtab(tabid)
{
	elem=document.getElementById(tabid);
	document.getElementById("profile").innerHTML=elem.innerHTML;
}


</script>
{/literal}
<center><b><a href="view.php?view={$Previousplayer}"> << </a> <u>{$User}</u><a href="view.php?view={$Nextplayer}"> >> </a></b> ({$Id})</center><br />
<div title='{$AvatarBig}'>{$Avatar}</div>
<br><br>

<center><b>{$user}</b> to <b>{$Rank}</b>. <br>  
Znajduje się w cesarstwie od <b>{$age}</b> dni. <br>  
Jest to <b>{$Race}</b> który przyjął klasę  <b>{$Clas}</b>. <br>  
{$user} posiada już <b>{$Level}</b> poziom. <br>  
Posiada podklasę <b>{$podklasaa}</b> oraz aktualnie przebywa w <b>{$Location}</b>. <br>  
Bogiem którego wyznaje {$user} jest <b>{$deity}.</b> <br>  
{$user} aktualnie znajduje się w <b>{$Page}</b>. <br>  
{$Rank} ma już za sobą <b>{$Wins}</b> wygranych walk oraz <b>{$Losses}</b> przegranych. <br>  
Ostatnia walka  zakończona pozytywnie była stoczona z <b>{$Lastkilled}</b> <br>  
a zakończona negatywnie z <b>{$Lastkilledby}</b> <br>  
Stan cywilny to: <b>{$Stan}</b> 
Klan w jakim sie znajduje nosi nazwę <b>{$Clan}</b>
Aktualny status: <b>{$Status}</b>
Ostatnio widziano tę osobę: <b>{$Lastseen}</b><br><br>
{if $Pktfab > 0}
<span title="Punkty fabularne zdobywa się za aktywny udział w sesjach i eventach fabularnych. Można je wymienić na różne przedmioty związane z fabułą. Przedmioty te nie dają premii mechanicznych.">Posiada <b>{$Pktfab}</b> punktów fabularnych</span><br><br>
{/if}  
{$Immu} <br> 
</center>
{$Gametype}
<br><br>
{if $Permision > 0}
<b>Posiadane zezwolenia:</b><br>
<table width="100%">
    <tr>
        <th>Treść</th><th>Data nadania</th>
    </tr>
    {section name=perms loop=$Permtext}
        <tr>
            <td>{$Permtext[perms]}</td><td>{$Permdate[perms]}</td>
        </tr>
    {/section}    
</table>
{/if}
<center><b>{$smarty.const.T_OPTIONS}:<br /></b>
   <a href="fightlogs.php?view={$Id}">Historia Walk</a><br>
    {$Attack}
    {$Mail}
    {$Crime}
  {$Krwiopijca}
  {$Krwiopijca2}
  {$Lotr}
   {$Szpieg}
    {$Crime2}
    {$Crime3}
    {$zlodziejaszek}
     {$hipnoza}
      {$wampirt}
</center>



<b>Profil:</b><br>

<div id="profiletabs">  
<ul>      
{section name=int loop=$Tabs}
   <li><a href="profiles.php?id={$Tabid[int]}">{$Tabs[int]}</a></li>
        {/section}
</ul>
</div>
<br/><hr/>


{if $Attack != "" || $Mail != "" || $Crime != ""}
 <center><br><br><br>
{if $ViewerID == '1' || $ViewerID == '2'}
   
    <p>{$PlayerIP}<a href="memberlist.php?ip={$IP}">{$IP}</a></p>
    Ostatnio aktywny:<br> {$Time}
{/if}
 </center>
{/if}
{/strip}</br>
