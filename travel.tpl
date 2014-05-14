{strip}
<center>
<param name="movie" value="city24.swf">
<param name="menu" value=false>
<param name="loop" value=true>
<param name="quality" value="high">
<param name="wmode" value="transparent">
<param name="bgcolor" value="#000000">
<embed name="logo" src="city24.swf" menu="false" quality="high" wmode="transparent" bgcolor="#000000" width="540" height="220" type="application/x-shockwave-flash" >
</embed>
<br></center><br><Br>
{if $Action == '' && $Action2 == ''}
{* Display basic location descriptions.*}
    {if $Location == $LCapitol || $Location == $LElvenCity}
        <p>{$Stablesinfo}</p>
    {else}
        <p>{$Outside}</p>
    {/if}
{* Display options available only in capitol.*}
    {if $Location == $LCapitol}
        <ul>
            <li><a href="travel.php?action=gory">{$Amountains}</a></li>
            <li><a href="travel.php?action=las">{$Aforest}</a></li>
            <li><a href="travel.php?action=city2">{$Aelfcity}</a></li>
            <li><a href="port.php?akcja=zm">Wyspa Złota (Przejazd 100000 złota)</a></li>
            <li><a href="port.php?akcja=mz">Wyspa Mithrilu (Przejazd 100000 złota)</a></li>
        </ul>
        
        {if $Maps == 1}
            <p>{$Portal1}</p>
            <ul>
                <li><a href="travel.php?akcja=tak">{$Ayes}</a></li>
                <li><a href="travel.php?akcja=nie">{$Ano}</a></li>
            </ul>
        {/if}
        {if $Tportals[0] != ''}
            <p>{$Tporinfo}</p>
            <ul>
                {section name=portals loop=$Tportals}
                    <li><a href="portals.php?step={$Tporlink[portals]}">{$Tportals[portals]}</a></li>
                {/section}
            </ul>
        {/if}
    {else}
{* Display other travel options.*}
        <ul>
            {if $Location == $LMountains || $Location == $LElvenCity}
                <li><a href="travel.php?action=gory">{$Amountains}</a></li>
                <li><a href="port.php?akcja=zm">Wyspa Złota (Przejazd 100000 złota)</a></li>
            <li><a href="port.php?akcja=mz">Wyspa Mithrilu (Przejazd 100000 złota)</a></li>
            <li><a href="travel.php?action=las">{$Aforest}</a></li><li><a href="travel.php?action=city2">{$Aelfcity}</a></li>
            {else}
            <li><a href="port.php?akcja=zm">Wyspa Złota (Przejazd 100000 złota)</a></li>
            <li><a href="port.php?akcja=mz">Wyspa Mithrilu (Przejazd 100000 złota)</a></li>
                <li><a href="travel.php?action=city2">{$Aelfcity}</a></li>
                <li><a href="travel.php?action=gory">{$Amountains}</a></li><li><a href="travel.php?action=city2">{$Aelfcity}</a></li>
            <li><a href="travel.php?action=las">{$Aforest}</a></li>
            {/if}
            <li><a href="travel.php?action=powrot">{$ACapitol}</a></li>
        </ul>
    {/if}
{/if}

{if $Action2 != ''}
    <ul>
        <li><a href="travel.php?akcja={$Action2}&amp;step=caravan">{$Acaravan}</a></li>
        <li><a href="travel.php?akcja={$Action2}&amp;step=walk">{$Awalk}</a></li>
        <li><a href="travel.php?akcja={$Action2}&amp;step=teleport">{$Ateleport}</a></li>
        <li><a href="stajnia.php">Podróż koniem</a></li>
        
        <li><a href="travel.php">{$Aback}</a></li>
    </ul>
{else}
    {if $Portal == 'Y'}
        {$Portal2}
    {elseif $Portal == 'N'}
        {$Portal3}
    {/if}
{/if}
{/strip}