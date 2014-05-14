<center><img src="images/locations/ogrod.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wędrując przez zaśmieconą, zniszczoną Alearę widzisz na swojej drodze starą bramę... Stajesz przed nią i widzisz rozległe tereny zaniedbanych ogrodów... Miałeś przez chwilę nadzieję, że w końcu odnajdziesz jakieś przytulne miejsce w Alearze, a jednak Twoje serce ogarnęło rozczarowanie... Wszędzie brud, smród i ubóstwo... Widzisz przed sobą zarośnięte trawą drzewa i ludzi, którzy je ścinają, lecz nie dbają o wygląd ogrodu… Zastanawiasz się co chcesz zrobić...
<br><br><br>{if $Empty == "Y"}
  <table> <img src="dziadu.jpg" style="float:left;" ><p>Podchodzi do Ciebie pewien mężczyzna w przeciętnym wieku. Niezbut przyjemnie od niego pachnie. Ma na sobie stare i brudne ubrania. Jednak starasz się udawać, że wszystko jest w porządku. Spojrzał Ci w oczy i mówi:<br>

  <i>-Witaj, co mógłbym robić w takim ogrodzie?<br>
  -Jeśli posiadasz sadzonki drzewek to możesz je posadzić. Wraz z czasem wyrosną z nich drzewa. Wtedy możesz je ściąć<br>
  -Ciekawa propozycja. Ile by mnie kosztowała taka inwestycja?<br>
  -Dasz mi 250 sztuk mithrilu i odsprzedam Ci najmniejszą część ogrodu. Jeśli będziesz chciał możesz w każdej chwili u mnie wykupić większy obszar ogrodu.<br>
  <br>
   </i> 
    
    
    
    <table>
    <ul><br><br>
    <a href="woodfarm.php?answer=yes">Tak kupuję najmniejszą część ogrodu za 250 mithrilu</a><br>
    <a href="city.php">Nie, dziękuję Panu. Żegnam.</a>
    </ul></table></table>
{/if}

{if $View == "" && $Empty == ""}
    Witaj w swoim ogrodzie.
    <ul>
    <li><a href="woodfarm.php?view=stats">Zobacz swój ogród.</a>
    <li><a href="woodfarm.php?view=shop">Porozmawiaj z właścicielem.</a>
    <li><a href="woodfarm.php?view=add">Zasadź sadzonki.</a>
    <li><a href="woodfarm.php?view=take">Zetnij drzewa.</a>
    </ul>  <br><br><br>  
{/if}

{if $View == "stats"}
    Tutaj są informacje na temat Twojego ogrodu.
    <ul>
    <li>Obszarów: {$Amount}</li>
    <li>Używane: {$Used}</li>
    <li>Sadzonki: {$drzewka}</li>
    <li>Zasiane: <br>
    {$Herbs}
    {if $Herbs == ""}
        {section name=herb loop=$Herbname}
            {$Herbname[herb]} ilość: {$Herbamout[herb]} wiek: {$Herbage[herb]}<br>
        {/section}
    {/if}
    </li></ul>
{/if}

{if $View == "shop"}
    <img src="dziadu.jpg" style="float:left;" ><br>Witaj ponownie, chcesz dokupić teren pod swój ogród?
    <ul>
    <li><a href="woodfarm.php?view=shop&buy=land">1 obszar więcej</a> ({$Cost} sztuk złota)</li>
    </ul>
{/if}

{if $View == "add"}
    Tutaj możesz zasadzić sadzonki. Aby obsadzić jeden obszar potrzebujesz 10 sadzonek drzewek. Drzewa możesz ściąć po 5 dniach od zasadzenia sadzonek.<br>
    <form method="post" action="woodfarm.php?view=add&step=add">
    <input type="submit" value="Zasadź">
    na
    <input type="text" name="amount" size="5" value="1"> obszarze 
    <input type="text" name="herb" size="5" value="1"> sadzonek
   
   
   {$Option}
    </select></form>
{/if}

{if $View == "take"}
    {$Chop}
{/if}

{if $View != ""}
    <br><br> <a href="woodfarm.php">...wróć do ogrodu...</a>.   <br><br><br>   
{/if}
