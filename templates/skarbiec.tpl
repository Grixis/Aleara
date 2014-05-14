<center><IMG SRC="images/locations/kbank.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
{if $Akcja == ""}
        <br /><br />
        Przechodząc jedną z alejek miasta zauważasz drewniany szyld zawieszony przy pewnym budynku. Szyld jak szyld ale był wyrysowany na nim krasnolud. Zaciekawiło Cię to miejsce i postanowiłeś sprawdzić co to za budynek. Otwierając drzwi zadzwonił dzwoneczek zawieszony nad nimi, a wzrok wszystkich znajdujących się krasnali w pomieszczeniu został skierowany właśnie na Ciebie. Trochę speszony tą sytuacją zrobiłeś kilka kroków do przodu i zacząłeś się rozglądać. Widzisz przed sobą bogate pomieszczenie. Wszędzie dębowe szafy, stoły. Wygląda tutaj jak w zamku królewskim. Zastanawiasz się nad tym, skąd były fundusze na budowę takiego miejsca. Wszystko świeciło się w blasku słońca świecącego zza okna. Lady zrobione z kryształu a za nimi widać tylko głowy małych krasnali. Podchodzisz do jednego z nich i pytasz się go co to za miejsce. Krasnal informuje Cię, że to Bank Krasnoludów  i możesz tutaj wpłacić złoto na różne lokaty. Krasnal zaczyna Ci przedstawiać swoje oferty, a Ty zaciekawiony zaistniałą sytuacją zastanawiasz się co uczynić.
        <br /><br /><br /><br />
        <center><a href="skarbiec.php?akcja=addday">Lokata dla handlarzy (7dni 35%)</a><br /> <HR NOSHADE WIDTH=20%>
        <a href="skarbiec.php?akcja=addweek">{$Addweek}</a><br /> <HR NOSHADE WIDTH=20%>
        <a href="skarbiec.php?akcja=deposits">{$Deposits}</a><br /> <HR NOSHADE WIDTH=20%>
        (<a href="city.php">{$Return}</a>)</center>
{/if}



{if $Akcja == "addday"}
      <br /><br />
      <br /> <br />

      <center> <form method="post" action="skarbiec.php?akcja=addday&step=payday">
      <input type="text" name="amount" size="13" />
      <input type="submit" value="{$Dpayday}" />
      </form>
      </center>

          {if $Step == "payday"}
                  {$Dyoupay}{$Ile}{$Dyoupaygold}<br /><br />
                  (<a href="skarbiec.php">{$Dreturn}</a>)
          {/if}

{/if}

{if $Akcja == "addweek"}
      <br /><br />
      {$Waddweek}<br /> <br />

      <center><form method="post" action="skarbiec.php?akcja=addweek&step=payweek">
      <input type="text" name="amount" size="13" />
      <input type="submit" value="{$Wpayweek}" />
      </form>
      </center>

          {if $Step == "payweek"}
          {$Wyoupay}{$Ile}{$Wyoupaygold}<br /><br />
          (<a href="skarbiec.php">{$Wreturn}</a>)
          {/if}
{/if}
{if $Akcja == "handlarz"}
      <br /><br />
      <br /> <br />

      <center><form method="post" action="skarbiec.php?akcja=handlarz&step=payweek">
      <input type="text" name="amount" size="13" />
      <input type="submit" value="{$Wpayweek}" />
      </form>
      </center>

          {if $Step == "payweek"}
          {$Wyoupay}{$Ile}{$Wyoupaygold}<br /><br />
          (<a href="skarbiec.php">{$Wreturn}</a>)
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
    (<a href="skarbiec.php">{$Mreturn}</a>)
{/if}
{/strip}