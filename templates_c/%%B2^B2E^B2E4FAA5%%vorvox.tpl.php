<?php /* Smarty version 2.6.16, created on 2013-02-04 16:31:32
         compiled from vorvox.tpl */ ?>

<center><IMG SRC="images/locations/bagniskokrutynow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Dotarłeś do siedziby serafina Vorvox'a. Straż uznała, że już jesteś godzien rozmawiać ze starcem. Podchodzisz do niego i mówisz:<br>
<i>-Witaj o wielki Vorvoxie!</i><br>
<i>-Witaj, czego tu szukasz?</i><br>
<i>-Dobrze, weź sobie ze stołu (1kieł=1eny)</i><br>



    <ul>
    <li><a href="vorvox.php?action=kop">Chcę kupić kły.</a></li>
    </ul>
<?php if ($this->_tpl_vars['Action'] == 'kop'): ?>
   <br>
    <form method="post" action="vorvox.php?action=kop&dalej=tak">
    Chcę kupić kłów <input type="text" size="3" value="0" name="rep"> . <input type="submit" value="Kupuj">
    </form>
<?php endif; ?>

<fieldset>
               <legend><b>Kły Vorvox'a</b></legend>
                   <table>
                       <tr><td>Twoje kły:</td><td> <?php echo $this->_tpl_vars['kly']; ?>
</td></tr>
                       
                   </table>
           </fieldset>