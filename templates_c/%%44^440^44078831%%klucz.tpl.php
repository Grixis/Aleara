<?php /* Smarty version 2.6.16, created on 2012-10-06 11:33:26
         compiled from klucz.tpl */ ?>

<center><IMG SRC="images/locations/bagniskokrutynow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    <li><a href="klucz.php?action=kop">Chcę kupić klucze.</a></li>
    </ul><br><br>
<?php if ($this->_tpl_vars['Action'] == 'kop'): ?>
   <br>
    <form method="post" action="klucz.php?action=kop&dalej=tak">
    Chcę kupić kluczy <input type="text" size="3" value="0" name="rep"> . <input type="submit" value="Kupuj">
    </form>
<?php endif; ?>


<?php echo $this->_tpl_vars['Message']; ?>














<fieldset>
               <legend><b>Klucze do wrót miasta Diabolium</b></legend>
                   <table>
                       <tr><td>Twoje klucze:</td><td> <?php echo $this->_tpl_vars['klucz']; ?>
</td></tr>
                       
                   </table>
           </fieldset>