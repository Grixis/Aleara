<center><IMG SRC="images/locations/wiezamagow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
{strip}
{if $Buy == ""}
    W najdalszym zakątku miasta, do którego niewielu zagląda jest specyficzny budynek. Ogromna opleciona bluszczem, samotna wieża. Podchodząc do niego wyczuwasz specyficzny zapach magii. Nie od razu decydujesz się by przestąpić próg budowli, specjalnie bowiem została stworzona tak by zniechęcać nieutalentowanych i niezdolnych do poznania się na magii. A jednak bariera Ciebie przepuszcza. Dzień jest pochmurny, pada deszcz. Niebo jest puste, nawet nie słychać dziś ptaków.  Kiedy wchodzisz na stopień do wieży czujesz jakby zalała cię nagła fala chłodu, lecz kolejny krok zmywa to uczucie – to czas obronny, dzięki któremu istoty niemagiczne nie mają wstępu do wieży.<br> 
Zdaje się że drzwi otwierają się same, jakby rozpoznając wołanie twojej magicznej natury, wchodzisz więc i oczom twoim ukazują się surowe mury i troje drzwi na parterze. NA każdym z nich jest opis co za nimi znajdziesz. Wieża jest pusta, przynajmniej takie odnosisz wrażenie. Uważaj specyfika wiezy magów czyni niewidzialnych tych którzy w niej przebywają – swe zakupy i sprawy załatwiaj więc szybko. Nagle nim zdecydowałeś się którą drogą obrać, ze schodów ktoych nie dostrzegłeś schodzi blada elfka w soczyście zielonej szacie i bez słowa odgaduje twoje potrzeby otwierając przed tobą drzwi, których potrzebujesz.
  <br>  <ul>
    <li><a href="wieza.php?dalej=T">{$Abuyst}</a></li>
    <li><a href="wieza.php?dalej=C">{$Abuyc}</a></li>
    <li><a href="wieza.php?dalej=P">{$Abuys}</a></li>
    </ul>
    {if $Next != ""}
        <table width="100%">
        {if $Next == "P"}
            <tr>
            <td width="40%"><b><u>{$Tname}</u></b></td>
            <td width="29%"><b><u>{$Tpower}</u></b></td>
            <td width="15%"><b><u>{$Tcost}</u></b></td>
            <td width="8%"><b><u>{$Tlevel}</u></b></td>
            <td width="8%"><b><u>{$Toptions}</u></b></td>
            </tr>
            {section name=tower loop=$Name}
                <tr>
                <td>{$Name[tower]}</td>
                {$Efect[tower]}
                <td>{$Cost[tower]}</td>
                <td>{$Itemlevel[tower]}</td>
                <td> <A href="wieza.php?buy={$Itemid[tower]}&type=S">{$Abuy}</a></td>
                </tr>
            {/section}
        {/if}
        {if $Next != "P"}
            <tr>
           <td width="40%"><b><u>{$Tname}</u></b></td>
            <td width="29%"><b><u>{$Tpower}</u></b></td>
            <td width="15%"><b><u>{$Tcost}</u></b></td>
            <td width="8%"><b><u>{$Tlevel}</u></b></td>
            <td width="8%"><b><u>{$Toptions}</u></b></td>
            </tr>
            {section name=tower1 loop=$Name}
                <tr>
                <td>{$Name[tower1]}</td>
                <td>{$Power[tower1]}</td>
                <td>{$Cost[tower1]}</td>
                <td>{$Itemlevel[tower1]}</td>
                <td> <A href="wieza.php?buy={$Itemid[tower1]}&amp;type=I">{$Abuy}</a></td>
                </tr>
            {/section}
        {/if}
        </table>
    {/if}
{/if}

{if $Buy != ""}
    {$Message}
{/if}
{/strip}</br>