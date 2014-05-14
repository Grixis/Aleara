{if $Action == ""}
<center><IMG SRC="images/locations/zagrodadlakoni.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>

Podczas kolejnej wędrówki po mieście docierasz do ogromnego parterowego budynku.  Kryta strzechą budowla pachnie sianem i końmi, podchodzisz więc bliżej, tak że słyszysz stajennych prowadzących porządki w boksach i rżenie nakarmionych koni. Zapach wilgotnego siana sprawia że zatrzymujesz się na chwile i wspominasz swoje dzieciństwo kiedy pierwszy raz poczułeś ten zapach. Jednak chwilę poźniej sentymenty odkładasz na bok, spieszy Ci się, chcesz przecież odjechać. Wchodzisz do stajni, stajenny widząc Ciebie pokazuje Ci, że akurat Twój koń jest już we własnym wysprzątanym boksie, machasz na niego ręką i mówisz cierpliwie:<br> 
-szybko potrzebuje konia, przygotuj go. Po tych słowach rzucasz mu miedziaka i wychodzisz na zewnątrz, chwilę poźniej dosiadasz swego rumaka i pędzisz przed siebie.


<br /><br />
    {if $Houseid == ""}
        - <a href="stajnia.php?action=land">Przejdź egzamin z jazdy konnej za <b>2000</b> sztuk złota</a><br>
        - <a href="stajnia.php?action=list">Zobacz liste osób posiadających Konie</a><br>
        - <a href="stajnia.php?action=rent">Zobacz Konie na sprzedaż</a><br />
    {/if}
    {if $Houseid > "0"}
        - <a href="stajnia.php?action=my">Twój Koń</a><br>
        - <a href="stajnia.php?action=build">Dokup przedmioty</a><br>
        - <a href="stajnia.php?action=land">Trenuj Konia</a><br>
        - <a href="stajnia.php?action=list">Zobacz liste osób posiadających Konie</a><br>
 - <a href="stajnia.php?action=rent">Zobacz Konie sprzedawane przez innych graczy</a><br />
<br><b>Darmowe Przejazdy</b>:
 <li><a href="stajnia1.php?akcja=las"><b>Las Zbłąkanych Dusz</b></a></li>
 <li><a href="stajnia1.php?akcja=altara"><b>Aleara</b></a></li>
 <li><a href="stajnia1.php?akcja=felwood"><b>Krwawe Mokradła</b></a></li>
 <li><a href="stajnia1.php?akcja=gory"><b>Góry Przeznaczenia</b></a></li>
    {/if}  
{/if}

{if $Action == "rent"}
    <table>
    <tr>
    <td><b><u>Numer Rodowy konia</u></b></td>
    <td><b><u>Imie Konia</u></b></td>
    <td><b><u>Stan Utrzymania</u></b></td>
    <td><b><u>Typ</u></b></td>
    <td><b><u>Cena</u></b></td>
	<td><b><u>Sprzedawca</u></b></td>
    <td><b><u>Opcje</u></b></td>
    </tr>
    {section name=house loop=$Housesname}
        <tr>
        <td>{$Housesid[house]}</td>
   
        <td>{$Housesname[house]}</td>
        <td>{$Housesbuild[house]}</td>
        <td>{$Housestype[house]}</td>
 <td>{$Housescost[house]}</td>
 <td><a href="view.php?view={$Housesseller[house]}">{$Housesseller[house]}</a></td>
 <td>{$Houseslink[house]}</td>
        </tr>
    {/section}
    </table> <a href="stajnia.php">Wróć</a>
    {$Message}
{/if}

{if $Action == "land"}
Witaj w stajni, co chcesz zrobic??
    <ul>
    <li><a href="stajnia.php?action=land&step=buy">Trening kosztuje {$Cost} sztuk złota</a></li>
    <li><a href="stajnia.php">Wróć</a></li>
    </ul>
{/if}

{if $Action == "build"}
Posiadasz <b>{$Points}</b> punktów treningowych. Jesli nie masz konia, a poosiadasz jeszcze <b>10000</b> sztuk złota, jestem skłonny sprzedać ci konia.
<br><br>
    {$Buildhouse}
    {$Buildbed}
    {$Upgrade}
    {if $Step == "new"}
        <form method="post" action="stajnia.php?action=build&step=new&step2=make">
        Imie Konia <input type=text name=name><br>
        <input type=submit value="Kupuj"></form><br>
    {/if}
    {if $Step == "upgrade"}
        Tutaj możesz upiększać swojego Konia. Każde podniesienie jego wartości kosztuje 1000 zł oraz 1 punkt Treningowy.<br>
        <form method="post" action="stajnia.php?action=build&step=upgrade&step2=make">
        Przeznacz na podniesienie wartości Konia <input type=text name=points size=5> punktów Treningowych<br>
        <input type=submit value="Ćwicz"></form><br>
    {/if}
{/if}

{if $Action == "list"}
    <table>
    <tr>
    <td><b><u>Numer Rodowodu Konia</u></b></td>
    <td><b><u>Właściciel</u></b></td>
    <td><b><u>Współwłaściciel</u></b></td>
    <td><b><u>Imie Konia</u></b></td>
    <td><b><u>Rozmiar</u></b></td>
    <td><b><u>Typ</u></b></td>
    </tr>
    {section name=house loop=$Housesname}
        <tr>
        <td>{$Housesid[house]}</td>
        <td><a href="view.php?view={$Housesowner[house]}">{$Housesowner[house]}</a></td>
 <td>{$Locator[house]}</td>
        <td>{$Housesname[house]}</td>
        <td>{$Housesbuild[house]}</td>
        <td>{$Housestype[house]}</td>
        </tr>
    {/section}
    </table> <a href="stajnia.php">Wróć</a>
{/if}

{if $Action == "my"}
    {if $Step == ""}
        Witaj w Stajni.         <br><br>
        Nazwa Konia: {$Name} {if $Owner == $Id} [<a href="stajnia.php?action=my&step=name">Zmień nazwę</a>] {/if}<br />
 Właściciel: <a href="view.php?view={$Owner}">{$Owner}</a><br />
        Umięśnienie Konia: {$Size}<br>
        Wartość Konia: {$Build} {$Housename}<br>
 Współwłaściciel: {$Locator}<br />
        {$Bedroomlink}
        {$Wardrobelink}
 {$Locatorlink}
 {$Sellhouse}
        (<a href="stajnia.php">Wróć</a>)
    {/if}
    {if $Step == "sell"}
        {if $Step2 == ""}
     Tutaj możesz sprzedać swojego Konia. Po wystawieniu Konia na sprzedaż nie możesz już więcej z niego korzystać ani też cofnąć oferty<br />
            <form method="post" action="stajnia.php?action=my&step=sell&step2=sell">
     <input type="submit" value="Wystaw"> konia na sprzedaż za <input type="text" name="cost"> sztuk złota
     </form>
 {/if}
 (<a href="stajnia.php?action=my">Wróć</a>)<br />
 {$Message}
    {/if}
    {if $Step == "locator"}
        {if $Step2 == ""}
            <form method="post" action="stajnia.php?action=my&step=locator&step2=change">
     <select name="loc"><option value="add">Dodaj</option>
     <option value="delete">Usuń</option></select> drugiego WspółWłasciciela<br />
     ID: <input type="text" name="lid" size="5" value="{$Locid}"><br />
     <input type="submit" value="Wykonaj"></form><br />
 {/if}
 (<a href="stajnia.php?action=my">Wróć</a>)<br />
 {$Message}
    {/if}
    {if $Step == "name"}
        <form method="post" action="stajnia.php?action=my&step=name&step2=change">
        <input type="submit" value="Zmień"> imie konia na: <input type="text" name="name">
        </form><br>
        (<a href="stajnia.php?action=my">Wróć</a>)
    {/if}
    {if $Step == "bedroom"}
        Gdy założysz siodło koniowi, możesz na nim pojeździć i odzyskać nieco energi. Możesz też całkowicie wyjechać z krainy, dzięki czemu nikt nie będzie mógł ciebie zaatakować. Po wyjeździe zostaniesz wylogowany.<br>
        - <a href="stajnia.php?action=my&step=bedroom&step2=rest">Chcę nieco Pojeździć</a><br>
        - <a href="logout.php?rest=Y&did={$Id}">Wyjeżdżam</a><br>
        (<a href="stajnia.php">Wróć</a>)
    {/if}
    {if $Step == "wardrbe"}
        W szafach w domu możesz przechowywać przedmioty. W jednej szafie mieści się 100 przedmiotów. Obecnie posiadasz <b>{$Wardrobe} szaf</b>
        oraz <b>{$Amount} przedmiotów</b> w nich.<br><br>
        - <a href="house.php?action=my&step=wardrobe&step2=add">Schowaj przedmiot w szafie</a><br>
        - <a href="house.php?action=my&step=wardrobe&step2=list">Lista przedmiotów w domu</a><br>
       (<a href="house.php?action=my">Wróć</a>)<br><br>
       {if $Step2 == "list"}
           <table>
           <tr>
           <td width="100"><b><u>Nazwa</u></b></td>
           <td width="100"><b><u>Siła</u></b></td>
           <td width="100"><b><u>Wytrzymałość</u></b></td>
           <td width="100"><b><u>Premia do zręczności</u></b></td>
           <td width="100"><b><u>Premia do szybkości</u></b></td>
           <td width="50"><b><u>Ilość</u></b></td>
           <td width="100"><b><u>Opcje</u></b></td>
           </tr>
           {section name=house1 loop=$Itemname}
               <tr>
               <td>{$Itemname[house1]}</td>
               <td align="center">{$Itempower[house1]}</td>
               <td align="center">{$Itemdur[house1]}/{$Itemmaxdur[house1]}</td>
               <td align="center">{$Itemagility[house1]}</td>
               <td align="center">{$Itemspeed[house1]}</td>
               <td align="center">{$Itemamount[house1]}</td>
               <td>- <a href="house.php?action=my&step=wardrobe&take={$Itemid[house1]}">Weź</a></td>
               </tr>
           {/section}
           </table>
        {/if}
        {if $Take != ""}
            {if $Step3 == ""}
                <form method="post" action="house.php?action=my&step=wardrobe&take={$Id}&step3=add">
                <input type="submit" value="Weź"> z domu <input type="text" name="amount" value="{$Amount}" size="5"> sztuk(i) <b>{$Name}</b><br>
                </form>
            {/if}
        {/if}
        {if $Step2 == "add"}
            <table><form method="post" action="house.php?action=my&step=wardrobe&step2=add&step3=add">
            Przedmiot: <select name="przedmiot">
            {section name=house2 loop=$Itemname1}
                <option value="{$Itemid1[house2]}">(ilość: {$Itemamount1[house2]}) {$Itemname1[house2]}</option>
            {/section}
            </select> sztuk <input type="text" name="amount" size="5"></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="Schowaj"></td></tr>
            </form></table>
        {/if}
    {/if}
{/if}
