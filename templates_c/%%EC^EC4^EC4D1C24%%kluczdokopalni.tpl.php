<?php /* Smarty version 2.6.16, created on 2013-02-07 14:43:21
         compiled from kluczdokopalni.tpl */ ?>

<center><IMG SRC="images/locations/bagniskokrutynow.png"></center>

<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>

    <li><a href="kluczdokopalni.php?action=kop">Chcę kupić klucze do opuszczonej kopalni.</a></li>
    <br><br>
<?php if ($this->_tpl_vars['Action'] == 'kop'): ?>
   <br>
   Jeden klucz do Opuszczonej Kopalni będzie Cię kosztował jeden klejnot Muttaua.
    <form method="post" action="kluczdokopalni.php?action=kop&dalej=tak">
    Chcę kupić kluczy <input type="text" size="3" value="0" name="rep"> . <input type="submit" value="Kupuj">
    </form>
<?php endif; ?>


<?php echo $this->_tpl_vars['Message']; ?>














<fieldset>
               <legend><b>Klucze do Opuszczonej Kopalni</b></legend>
                   <table>
                       <tr><td>Twoje klucze:</td><td> <?php echo $this->_tpl_vars['kluczdokopalni']; ?>
</td></tr>
                       
                   </table>
           </fieldset>