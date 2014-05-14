<center><IMG SRC="images/locations/jamaupadlych.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
{if $Akcja == ""}
        <br /><br />
        
       Będąc w Diabolium dostrzegłeś wejście do olbrzymiej jamy. Jak w całym mieście wszędzie widniały pochodnie, było gorąco i czerwono… Gdy wszedłeś do jamy dostrzegłeś wielki stary, drewniany stół. Wszędzie były stare szafy z szufladami, sterty dokumentów. Za stołem znajdującym się na wprost Ciebie siedzi stary stwór o rasie Nieumarły. Zauważasz, że to mag, ponieważ używając swej zdolności przysunął Ci krzesło do stołu nie schodząc z własnego stołka. Zacząłeś się rozglądać po jamie. Wszędzie latały jakieś zjawy i błąkały się neutralne szkielety. Po chwili wzrok maga został skierowany w Twoje oczy. Usiadłeś na stołku i zapytałeś się co to za miejsce. Szybko uzyskałeś odpowiedź mówiącą, że to Jama Upadłych i można tutaj wpłacić złoto na lokatę większą niż w innych miastach. Mag zapytał się co chcesz zrobić?
        <br /><br />
       
       
        <li><a href="jamaupadlych.php?akcja=addweek">Chcę wpłacić złoto na lokatę 100 resetów +20%.</a><br /></li>
        <li><a href="jamaupadlych.php?akcja=deposits">Chcę zobaczyć swoje lokaty w jamie.</a><br /> </li>
        <li><a href="diabolium.php">Wracam do miasta</a></center></li>
{/if}


{if $Akcja == "addweek"}
      <br /><br />
      {$Waddweek}<br /> <br />

      <center><form method="post" action="jamaupadlych.php?akcja=addweek&step=payweek">
      <input type="text" name="amount" size="13" />
      <input type="submit" value="{$Wpayweek}" />
      </form>
      </center>

          {if $Step == "payweek"}
          {$Wyoupay}{$Ile}{$Wyoupaygold}<br /><br />
          (<a href="jamaupadlych.php">{$Wreturn}</a>)
          {/if}
{/if}


{if $Akcja == "deposits"}
    {$Mdescription}<br />
    <table>
            <tr>
            <th><u>{$Mamount}</u></td>
            <th><u>{$Mtime}</u></td>
            <th><u>{$Mtype}</u></td>
            </tr>
    {section name=deposit loop=$Id}
        <tr>
        <td>{$Amount[deposit]}</td>
        <td>{$Time[deposit]}</td>
        <td>{$Type[deposit]}</td>
        <tr/>
    {/section}
    </table>
    (<a href="jamaupadlych.php">{$Mreturn}</a>)
{/if}
{/strip}
</br>