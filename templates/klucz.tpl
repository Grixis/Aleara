
<center><IMG SRC="images/locations/bagniskokrutynow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    <li><a href="klucz.php?action=kop">Chcę kupić klucze.</a></li>
    </ul><br><br>
{if $Action == "kop"}
   <br>
    <form method="post" action="klucz.php?action=kop&dalej=tak">
    Chcę kupić kluczy <input type="text" size="3" value="0" name="rep"> . <input type="submit" value="Kupuj">
    </form>
{/if}


{$Message}













<fieldset>
               <legend><b>Klucze do wrót miasta Diabolium</b></legend>
                   <table>
                       <tr><td>Twoje klucze:</td><td> {$klucz}</td></tr>
                       
                   </table>
           </fieldset>