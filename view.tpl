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
<center><b><u>{$User}</u></b> ({$Id})</center><br />
{$Avatar}
<br><br>








<center><b>{$user}</b> to <b>{$Rank}</b>. <br>  
Znajduje się na ziemiach Huritinu od <b>{$Age}</b> dni. <br>  
Jest to <b>{$Race}</b> który przyjął klasę  <b>{$Clas}</b>. <br>  
{$user} posiada już <b>{$Level}</b> poziom. <br>  
ma juz zdobytych <b>{$pktfabularne}</b> punktów fabularnych. <br> 
Posiada podklasę <b>{$podklasaa}</b> oraz atualnie przebywa w <b>{$Location}</b>. <br>  
Bogiem którego wyznaje {$user} jest <b>{$deity}.</b> <br>  
{$user} aktualnie znajduje się w <b>{$Page}</b>. <br>  
{$Rank} ma już za sobą <b>{$Wins}</b> wygranych walk oraz <b>{$Losses}</b> przegranych. <br>  
Ostatnia walka  zakończona pozytywnie była stoczona z <b>{$Lastkilled}</b> <br>  
a zakończona negatywnie z <b>{$Lastkilledby}</b> <br>  
Stan cywilny to: <b>{$Stan}</b> 
Klan w jakim sie znajduje nosi nazwę <b>{$Clan}</b>
Aktualny status: <b>{$Status}</b>  
{$Immu} <br> 
</center>
<br><br>
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
{if $ViewerID == '1'}
   
    <p>{$PlayerIP}<a href="memberlist.php?ip={$IP}">{$IP}</a></p>
    Ostatnio aktywny:<br> {$Time}
{/if}
 </center>
{/if}
{/strip}</br>
