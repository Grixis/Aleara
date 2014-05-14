{strip}
{if $Action == ""}
<center><IMG SRC="images/locations/dworkrutznow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
   <p>{$Landinfo} <b>{$Gold}</b> {$Landinfo2}</p>
    <form method="post" action="dwor.php?action=work">
    <input type="submit" value="{$Awork}" /> <input type="text" name="amount" value="1" size="5" /> {$Times}</form>
<br><br>
    <i>WZÓR: level * 5 + 300</i><br><br>Jeśli jesteś Wskrzesicielem Krutynów (Wykupiłeś Konto Premium) mozesz pracować jako wskrzesiciel i zarabiać więcej!<br>
  <center>  <a href="dwork.php">Pracuje jako wskrzesiciel!</a></center>
 {/if}
{if $Action == "work"}
    <p>{$Inwork} <b>{$Amount}</b> {$Inwork2} <b>{$Gain}</b> {$Goldcoins}</p>
    
    (<a href="city.php">{$Aback}</a>)
{/if}
{/strip}
