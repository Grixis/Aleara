<center><IMG SRC="images/locations/kbank.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
{if $Akcja == ""}
        <br /><br />
        {$Description}
        <br /><br /><br /><br />
        <center><a href="skarbiec2.php?akcja=addday">Lokata 7 dni 20%</a><br /> <HR NOSHADE WIDTH=20%>

        (<a href="city.php">{$Return}</a>)</center>
{/if}



{if $Akcja == "addday"}
      <br /><br />
      {$Daddday}<br /> <br />

      <center> <form method="post" action="skarbiec2.php?akcja=addday&step=payday">
      <input type="text" name="amount" size="13" />
      <input type="submit" value="{$Dpayday}" />
      </form>
      </center>

          {if $Step == "payday"}
                  {$Dyoupay}{$Ile}{$Dyoupaygold}<br /><br />
                  (<a href="skarbiec2.php">{$Dreturn}</a>)
          {/if}

{/if}

{if $Akcja == "addweek"}
      <br /><br />
      {$Waddweek}<br /> <br />

      <center><form method="post" action="skarbiec2.php?akcja=addweek&step=payweek">
      <input type="text" name="amount" size="13" />
      <input type="submit" value="{$Wpayweek}" />
      </form>
      </center>

          {if $Step == "payweek"}
          {$Wyoupay}{$Ile}{$Wyoupaygold}<br /><br />
          (<a href="skarbiec2.php">{$Wreturn}</a>)
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
    (<a href="skarbiec2.php">{$Mreturn}</a>)
{/if}
{/strip}