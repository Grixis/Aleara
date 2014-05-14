<center><IMG SRC="images/locations/aptekamiejska.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
{if $Buy == ""}
    <br />Już od przekroczenia progów tego przybytku, zakręciło ci się w nosie od zapachów ziół. Drewniane regały i półki uginały się pod naporem szczelnie zakorkowanych buteleczek i słoików.  Girlandy suszonych składników wisiały nad twoją głową, a także na hakach, przy drzwiach prowadzących na zaplecze. Na lśniącej ladzie widniały stojaki z butelkami, stara aparatura alchemiczna i moździerz z tłuczkiem.  Za nią stał sędziwy człowiek ze śnieżnobiałą brodą, sięgającą piersi. Odziany w obszerną szatę, taką jaką zwykle nosili mędrcy czy uczeni. W dłoni trzymał fajkę i przyglądał ci się uważnie. 
<br>- W czym mogę służyć? – Obłoczki dymu z fajkowego ziela unosiły się w powietrzu, płynąc wprost na ciebie.  – Dysponujemy lekarstwami na wszelakie choroby.  – Mówiąc to pokazywał kolejne buteleczki na ladzie, tłumacząc jaki efekt wywołują. – Gdyby jednak interesowały cię… Specyfiki w walce pomagające,  zapraszam na zaplecze. – Wskazał dłonią drzwi za nim, odchylając tym samym klapę lady na bok.<br /><br />
    <table width="100%">
    <tr><td width="45%"><b><u>{$Nname}</u></b></td>
    <td width="25%"><b><u>{$Nefect}</u></b></td>
    <td width="10%"><b><u>{$Ncost}</u></b></td>
    <td width="10%"><b><u>{$Namount}</u></b></td>
    <td width="10%"><b><u>{$Poption}</u></b></td></tr>
    {section name=msklep loop=$Pid}
        <tr>
		    <td>{$Pname[msklep]}({$Npower}:{$Ppower[msklep]})</td>
            <td>{$Pefect[msklep]}</td>
            <td>{$Pcost[msklep]}</td>
            <td>{$Pamount[msklep]}</td>
            <td>- <a href="msklep.php?buy={$Pid[msklep]}">{$Abuy}</a></td>
        </tr>
    {/section}
    </table>
{/if}

{if $Buy != ""}
    <br /><form method="post" action="msklep.php?buy={$Pid}&amp;step=buy">
    <input type="submit" value="{$Abuy}" /> <input type="text" name="amount" value="1" size="5" /> {$Pamount} {$Name}</form>
{/if}
{/strip}
</br>