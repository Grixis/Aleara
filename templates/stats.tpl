{strip}




{$Statsinfo}<br /><br />
{$Avatar}<br />
{if $Action == "gender"}
    <form method="post" action="stats.php?action=gender&amp;step=gender">
    <select name="gender"><option value="M">{$Genderm}</option>
    <option value="F">{$Genderf}</option></select><br />
    <input type="submit" value="{$Aselect}" /></form>
{/if}
<table>
    <tr>
        <td width="50%" valign="top">
            <fieldset style="height:420px">
            <legend><b>{$Tstats}</b></legend>
            <table width="100%">
                <tr><td width="50%"><b>{$Tap}:</b></td><td width="50%"> {$Ap}</td></tr>
                <tr><td><b>{$Trace}:</b></td><td> {$Race}</td></tr>
                <tr><td><b>{$Tclass}:</b></td><td> {$Clas}</td></tr>
                <tr><td><b>Podklasa:</b></td><td> {$podklasa}</td></tr>
                <tr><td><b>{$Tdeity}:</b></td><td> {$Deity}</td></tr>
                <tr><td><b>{$Tgender}:</b></td><td> {$Gender}</td></tr>
               <tr><td><b>Siła:</b></td><td> {$strength}  ({$strength+$sila+$ringsily})</td></tr>
               <tr><td><b>Zręczność:</b></td><td> {$agility}  ({$agility+$zrecznosc+$ringzreki+$zrecha*-1})</td></tr>
               <tr><td><b>Szybkość:</b></td><td> {$szyb}  ({$szyb+$szybkoscc+$szybkosc+$ringszybk})</td></tr>
               <tr><td><b>Wytrzymałość:</b></td><td> {$wytrz} ({$wytrz+$wytrzymalosc+$tarcza+$nagole+$zbroja+$szyszak+$ringwytki})</td></tr>
               <tr><td><b>Inteligencja:</b></td><td> {$inteli} ({$inteli+$inteligencja+$ringinteli})</td></tr>
               <tr><td><b>Siała Woli:</b></td><td> {$wisdom} ({$wisdom+$silawoli+$ringsw})</td></tr>
               
               


                <tr><td><b>{$Tmana}:</b></td><td> {$Mana} {$Rest}</td></tr>
                <tr><td><b>{$Tpw}:</b></td><td> {$PW}</td></tr>
                
                <a href="card.php">Kreator Postaci<br>
                <tr><td>{$Crime}</td></tr>
                {if $podklasa == 'Szpieg'}<tr><td><b>Punkty szpiegostwa:</b></td><td>  {$pktszpiega}</td></tr>{/if}
                {if $podklasa == 'Krwiopijca'}<tr><td><b>Wampirze punkty:</b></td><td>  {$pktwampira}</td></tr>{/if}
                 <tr><td><b>Transmutacja:</b></td><td>  {$transmutacja}</td></tr>
                <tr><td><b><a href="fightlogs.php">{$Tfights}</a>:</b></td><td> {$Total}</td></tr>
                <tr><td><b>{$Tlast}:</b></td><td> {$Lastkilled}</td></tr>
                <tr><td><b>{$Tlast2}:</b></td><td>  {$Lastkilledby}</td></tr>
				<tr><td><b>Punkty rankingowe:</b></td><td>  {$RankPoints}</td></tr>
               
            </table>
            </fieldset>
        </td>
        <td width="50%" valign="top">
            <fieldset style="height:420px">
            <legend><b>{$Tability}</b></legend>
            <table width="100%">
                <tr><td width="50%"><b>{$Tsmith}:</b></td><td width="50%"> {$Smith}</td></tr>
                <tr><td><b>{$Talchemy}:</b></td><td> {$Alchemy}{if $alchemia > 0}({$Alchemy+$alchemia}){/if}</td></tr>
                <tr><td><b>{$Tlumber}:</b></td><td> {$Fletcher}</td></tr>
                <tr><td><b>{$Tjeweller}:</b></td><td> {$Jeweller}</td></tr>
                <tr><td><b>{$Thutnictwo}:</b></td><td> {$Hutnictwo}{if $hutnictwo > 0}({$Hutnictwo+$hutnictwo}){/if}</td></tr>
               
                <tr><td><b>{$Tfight}:</b></td><td> {$Attack}</td></tr>
                <tr><td><b>{$Tshoot}:</b></td><td> {$Shoot}</td></tr>
                <tr><td><b>{$Tcast}:</b></td><td> {$Magic}</td></tr>
                <tr><td><b>{$Tdodge}:</b></td><td> {$Miss}</td></tr>
                <tr><td><b>{$Tleader}:</b></td><td> {$Leadership}</td></tr>
              
                <tr><td><b>{$Tmining}:</b></td><td> {$Mining}{if $gornictwo > 0}({$Mining+$gornictwo}){/if}</td></tr>
                <tr><td><b>{$Tlumberjack}:</b></td><td> {$Lumberjack}{if $drwalnictwo > 0}({$Lumberjack+$drwalnictwo}){/if}</td></tr>
                <tr><td><b>{$Therbalist}:</b></td><td> {$Herbalist}{if $zielarstwo > 0}({$Herbalist+$zielarstwo}){/if}</td></tr>
            
                <tr><td><b>{$Tbreeding}:</b></td><td> {$Breeding}</td></tr>
                <tr><td><b>Rytuały:</b></td><td> {$wskrzeszanie}</td></tr>
                <tr><td><b>Gotowanie:</b></td><td> {$gotowanie}</td></tr>
                <tr><td><b>Wampiryzm:</b></td><td> {$wampiryzm}</td></tr>
                 <tr><td><b>Alkoholizm:</b></td><td> {$alkoholizm}.00</td></tr>
                   <tr><td><b>Transmutacja:</b></td><td> {$utrans}.00</td></tr>
                    <tr><td><b>Hipnoza:</b></td><td> {$hipnoza}.00</td></tr>
 <tr><td><b>Warzenie wywarów:</b></td><td> {$warzenie}.00</td></tr>
 <tr><td><b>Cudzołóstwo:</b></td><td> {$houselure}</td></tr>


            </table>
            </fieldset>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <fieldset>
        <legend><b>Aktywne efekty<b></legend>
        <div style="text-align:left">
        <br/>
        <table>
        {if $Ant_d}
                    <tr><td>{$Ant_d}</td></tr>
                {/if}
                {if $Ant_n}
                    <tr><td>{$Ant_n}</td></tr>
                {/if}
                {if $Ant_i}
                    <tr><td>{$Ant_i}</td></tr>
                {/if}
                {if $Resurect}
                    <tr><td>{$Resurect}</td></tr>
                {/if}
                {if $Blessfor}
                    <tr><td><b>{$Blessfor}</b></td><td>{$Pray} <b>{$Blessval}</b></td></tr>
                {/if}
                
                {if $alchemia > 0}
                Posiadasz buff ze świątyni gildyjnej na alchemię (+{$alchemia}).<br>
                {/if}
                {if $hutnictwo > 0}
                Posiadasz buff ze świątyni gildyjnej na hutnictwo (+{$hutnictwo}).<br>
                {/if}
                {if $drwalnictwo > 0}
                Posiadasz buff ze świątyni gildyjnej na drwalnictwo (+{$drwalnictwo}).<br>
                {/if}
                {if $gornictwo > 0}
                Posiadasz buff ze świątyni gildyjnej na górnictwo (+{$gornictwo}).<br>
                {/if}
                {if $zielarstwo > 0}
                Posiadasz buff ze świątyni gildyjnej na zielarstwo (+{$zielarstwo}).<br>
                {/if}
                {if $sila > 0}
                Posiadasz buff ze świątyni gildyjnej na siłę (+{$sila}).<br>
                {/if}
                {if $zrecznosc > 0}
                Posiadasz buff ze świątyni gildyjnej na zręczność (+{$zrecznosc}).<br>
                {/if}
                {if $szybkosc > 0}
                Posiadasz buff ze świątyni gildyjnej na szybkość (+{$szybkosc}).<br>
                {/if}
                {if $wytrzymalosc > 0}
                Posiadasz buff ze świątyni gildyjnej na wytrzymalość (+{$wytrzymalosc}).<br>
                {/if}
                {if $inteligencja > 0}
                Posiadasz buff ze świątyni gildyjnej na inteligencję (+{$inteligencja}).<br>
                {/if}
                {if $silawoli > 0}
                Posiadasz buff ze świątyni gildyjnej na siłę woli (+{$silawoli}).<br>
                {/if}
                
                
                
                
                
                
                
                
                
                
                
                
                
        </table>
        <br/>
        </div>
        </fieldset>
    <tr>
        <td colspan="2" align="center">
            <fieldset>
            <legend><b>{$Tinfo}</b></legend>
            <div style="text-align:left">
            <table>
                <tr><td><b>{$Trank}:</b></td><td> {$Rank}</td></tr>
                <tr><td><b>{$Tloc}:</b></td><td> {$Location}</td></tr>
                <tr><td><b>{$Tage}:</b></td><td> {$Age}</td></tr>
                <tr><td><b>{$Tlogins}:</b></td><td> {$Logins}</td></tr>
                <tr><td><b>{$Tip}:</b></td><td> {$Ip}</td></tr>
                <tr><td><b>{$Temail}:</b></td><td> {$Email}</td></tr>
                <tr><td>{$GG}</td></tr>
                <tr><td><b>{$Tclan}:</b></td><td> {$Tribe}</td></tr>
                <tr><td>{$Triberank}</td></tr>
                <tr><td><b>{$Reputation}:</b></td><td>{$Rep}</td></tr>
            </table>
            </div>
            </fieldset>
        </td>
    </tr>
</table>
{/strip}<br>