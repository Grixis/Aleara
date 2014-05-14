<center><IMG SRC="images/locations/dworkrutznow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
{if $Action == ""}
   <p>{$Landinfo} <b>{$Gold}</b> {$Landinfo2}</p>
    <form method="post" action="dwork.php?action=work">
    <input type="submit" value="{$Awork}" /> <input type="text" name="amount" value="1" size="5" /> {$Times}</form>
<br><br>
    <i>WZÓR: level * 7 + 300 (Jako wskrzesiciel!)</i><br>
{/if}
{if $Action == "work"}
    <p>{$Inwork} <b>{$Amount}</b> {$Inwork2} <b>{$Gain}</b> {$Goldcoins}</p>
    
    (<a href="dwor.php">{$Aback}</a>)
{/if}
{/strip}
