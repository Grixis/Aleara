<center><IMG SRC="images/locations/zbrojmistrz.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
{if $Buy == ""}
    
    Kiedy wchodzisz do dużego domu z szyldem ZBROJMISTRZ dostrzegasz kilku kupców, wojowników i dwóch elfów za ladą. Podchodzisz do jednego z nich a ten pyta: Witaj, czy chcesz kupić u nas oręż? Jeśli tak, to powiedz którą z broni wybierasz w mithrilowej szkatule przez szybę widać wszystkie rodzaje broni jakie wykuwa się w tym zakładzie. Asortyment jest przeogromny - od sztyletów po adamantytowe miecze dwuręczne. Zza firanki za ladą słychać tylko pospieszne kucie broni i krasnoludzkie sapanie Za... Dużo... Tych... Wojaków... Arg... No ukończone!. Elf patrząc na Ciebie z uśmiechem mówi tylko: Co podać?
    <br /><br />
    <table width="100%">
    <tr>
    <td width="40%"><b><u>{$Iname}</u></b></td>
    <td width="15%"><b><u>{$Iefect}</u></b></td>
    <td width="10%"><b><u>{$Ispeed}</u></b></td>
    <td width="8%"><b><u>{$Idur}</u></b></td>
    <td width="11%"><b><u>{$Icost}</u></b></td>
    <td width="8%"><b><u>{$Ilevel}</u></b></td>
    <td width="8%"><b><u>{$Ioption}</u></b></td>
    </tr>
    {section name=item loop=$Level}
        <tr>
        <td>{$Name[item]}</td>
        <td>+{$Power[item]} Atak</td>
        <td>+{$Speed[item]}%</td>
        <td>{$Durability[item]}</td>
        <td>{$Cost[item]}</td>
        <td>{$Level[item]}</td>
        <td> <a href="weapons.php?buy={$Itemid[item]}">{$Abuy}</a>{if $Crime > "0"}<br /><a href="weapons.php?steal={$Itemid[item]}">{$Asteal}</a>{/if}</td>
        </tr>
    {/section}
    </table>
{/if}

{if $Buy > 0}
    {$Youpay} <b>{$Cost}</b> {$Andbuy} <b>{$Name} +{$Power}</b> {$Topower}
	<br/><a href="weapons.php">{$smarty.const.BACK}</a>
{/if}   
{if $Zebrak > 0}
    {$Youpay} <b>{$Cost}</b> {$Andbuy} <b>{$Name} +{$Power}</b> {$Topower}
	<br/><a href="weapons.php">{$smarty.const.BACK}</a>
{/if}         
{/strip}
