{strip}
<center><IMG SRC="images/locations/bramymiasta.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
 Poczułeś nagły napływ sił i niezmierną chęć wyruszenia poza miasto. Przygotowujesz się do wyprawy, zabierając niezbędne rekwizyty mogące przydać się podczas długiej drogi. Gdy spakowałeś już prowiant oraz uzbrojenie na wypadek ataku bandytów powoli kierujesz się ze swojego domku ku bramom miasta Aleary. Wszystko wygląda jak co dzień. Przechodząc obok targowiska widzisz stale kłócące się o cenę przekupki, grajka na murku tuż przy fontannie, obejmujący się zakochanych na pobliskich ławkach... Nagle znienacka widzisz przed sobą jadącego konno samego króla. Składasz mu pokłon i udajesz się do bram miasta. Strażnicy, których mijasz uważnie przypatrują się Twojej osobie pełniąc służbę i strzegąc miasta. Gdy uznali, że możesz je opuścić krainę przechodzisz przez bramę...
 <br>
{if $Action == '' && $Action2 == ''}
{* Display basic location descriptions.*}
    {if $Location == $LCapitol || $Location == $LElvenCity}
        <p>{$Stablesinfo}</p>
    {else}
        <p>{$Outside}</p>
    {/if}
{* Display options available only in capitol.*}
    {if $Location == $LCapitol}
             <table>
            <tr><td>
             <fieldset style="width:90%">
        <legend><b>Standardowe przejazdy:</b></legend>
                <a href="travel.php?action=gory">{$Amountains}</a><br>
                <a href="dojazddiabolium.php?akacja=zm">Diabolium [wymagany klucz do miasta]</a><br>
                <a href="port.php?akcja=zm">Wyspa Złota (Przejazd 100000 złota)</a><br>
            <a href="port.php?akcja=mz">Wyspa Mithrilu (Przejazd 50000 złota)</a><br>
            <a href="travel.php?action=las">{$Aforest}</a>  <br>
            <a href="travel.php?action=city2">{$Aelfcity}</a> <br>
          

          
           
        </fieldset">
   
            <br>
        <br></td><td>
        {if $Houseid > "0"}<fieldset style="width:100%">
        <legend><b>Darmowe Przejazdy na koniu:</b></legend>

       
 <a href="stajnia1.php?akcja=altara">Aleara</a><br>
 <a href="stajnia1.php?akcja=felwood">Krwawe Mokradła</a><br>
 <a href="stajnia1.php?akcja=gory">Góry Przeznaczenia</a><br>
   <a href="stajnia1.php?akcja=las">Las Zbłąkanych Dusz</a><br>
  <br><Br><br><br></fieldset> {/if}
 
 <td></tr></table>
 
 <br><Br>

        
        {if $Maps == 1}
            <p>{$Portal1}</p>
            <ul>
                 <a href="travel.php?akcja=tak">{$Ayes}</a> 
                 <a href="travel.php?akcja=nie">{$Ano}</a> 
            </ul>
        {/if}
        {if $Tportals[0] != ''}
            <p>{$Tporinfo}</p>
            <ul>
                {section name=portals loop=$Tportals}
                     <a href="portals.php?step={$Tporlink[portals]}">{$Tportals[portals]}</a> 
                {/section}
            </ul>
        {/if}
    {else}
{* Display other travel options.*}
        <ul>
            {if $Location == $LMountains || $Location == $LElvenCity}
            
            <table>
            <tr><td>
             <fieldset style="width:90%">
        <legend><b>Standardowe przejazdy:</b></legend>
                <a href="travel.php?action=gory">{$Amountains}</a><br>
                <a href="dojazddiabolium.php?akacja=zm">Diabolium [wymagany klucz do miasta]</a><br>
                <a href="port.php?akcja=zm">Wyspa Złota (Przejazd 100000 złota)</a><br>
            <a href="port.php?akcja=mz">Wyspa Mithrilu (Przejazd 50000 złota)</a><br>
            <a href="travel.php?action=las">{$Aforest}</a><br>  
            <a href="travel.php?action=city2">{$Aelfcity}</a><br>
          

          
            {else}
            <br>
            {/if}
            <a href="travel.php?action=powrot">{$ACapitol}</a>
        </ul>
        </fieldset">
    
            <br>
        <br></td><td>
        {if $Houseid > "0"}<fieldset style="width:100%">
        <legend><b>Darmowe Przejazdy na koniu:</b></legend>

       
 <a href="stajnia1.php?akcja=altara">Aleara</a><br>
 <a href="stajnia1.php?akcja=felwood">Krwawe Mokradła</a><br>
 <a href="stajnia1.php?akcja=gory">Góry Przeznaczenia</a><br>
   <a href="stajnia1.php?akcja=las">Las Zbłąkanych Dusz</a>
  <br><Br><br><br></fieldset> {/if}
 
 <td></tr></table>
 
 <br><Br>
{/if}{/if}

{if $Action2 != ''}
    <ul>
         <li><a href="travel.php?akcja={$Action2}&amp;step=caravan">{$Acaravan}</a> </li>
         <li><a href="travel.php?akcja={$Action2}&amp;step=walk">{$Awalk}</a> </li>
         <li><a href="travel.php?akcja={$Action2}&amp;step=teleport">{$Ateleport}</a> </li>
         <li><a href="stajnia.php">Podróż koniem</a> </li>
        
         <li><a href="travel.php">{$Aback}</a> </li>
    </ul>
{else}
    {if $Portal == 'Y'}
        {$Portal2}
    {elseif $Portal == 'N'}
        {$Portal3}
    {/if}
{/if}
{/strip}</br></br>