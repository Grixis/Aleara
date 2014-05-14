
<center><IMG SRC="images/locations/bagniskokrutynow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Dotarłeś do siedziby serafina Vorvox'a. Straż uznała, że już jesteś godzien rozmawiać ze starcem. Podchodzisz do niego i mówisz:<br>
<i>-Witaj o wielki Vorvoxie!</i><br>
<i>-Witaj, czego tu szukasz?</i><br>
<i>-Dobrze, weź sobie ze stołu (1kieł=1eny)</i><br>



    <ul>
    <li><a href="vorvox.php?action=kop">Chcę kupić kły.</a></li>
    </ul>
{if $Action == "kop"}
   <br>
    <form method="post" action="vorvox.php?action=kop&dalej=tak">
    Chcę kupić kłów <input type="text" size="3" value="0" name="rep"> . <input type="submit" value="Kupuj">
    </form>
{/if}

<fieldset>
               <legend><b>Kły Vorvox'a</b></legend>
                   <table>
                       <tr><td>Twoje kły:</td><td> {$geoja}</td></tr>
                       
                   </table>
           </fieldset>