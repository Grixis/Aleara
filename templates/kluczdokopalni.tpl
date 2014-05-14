
<center><IMG SRC="images/locations/bagniskokrutynow.png"></center>

<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>

    <li><a href="kluczdokopalni.php?action=kop">Chcę kupić klucze do opuszczonej kopalni.</a></li>
    <br><br>
{if $Action == "kop"}
   <br>
   Jeden klucz do Opuszczonej Kopalni będzie Cię kosztował jeden klejnot Muttaua.
    <form method="post" action="kluczdokopalni.php?action=kop&dalej=tak">
    Chcę kupić kluczy <input type="text" size="3" value="0" name="rep"> . <input type="submit" value="Kupuj">
    </form>
{/if}


{$Message}













<fieldset>
               <legend><b>Klucze do Opuszczonej Kopalni</b></legend>
                   <table>
                       <tr><td>Twoje klucze:</td><td> {$kluczdokopalni}</td></tr>
                       
                   </table>
           </fieldset>