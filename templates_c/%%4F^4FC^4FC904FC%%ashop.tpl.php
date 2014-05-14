<?php /* Smarty version 2.6.16, created on 2012-10-06 01:07:21
         compiled from ashop.tpl */ ?>
<center><IMG SRC="images/locations/chatkalesniczego.png"></center> 
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>

Wędrując lasami na obrzeżach Aleary doszły Cię odgłosy łamiących się nieopodal gałęzi. Zaczynasz się skradać ostrożnie myśląc, że to jakaś zwierzyna. Wychylając się zza drzewa dostrzegasz, iż to jakoś Krasnolud. Był on ubrany w stare, brudne łachy o zielonych barwach. O dziwo nie miał charakterystycznej dla krasnoludów brody co szczególnie zwróciło Twoją uwagę. Widzisz jak napełnia kosz suchym chrustem, gdy zebrał go wystarczająco ruszył w stronę pobliskiej chatki. Krasnolud wzbudzał Twoje zaufanie dlatego też postanawiasz do niego podejść. Dowiedziałeś się od niego, że opiekuje się tutejszym lasem i tu mieszka. Zaprosił Cię na kufel piwa opowiadając przy tym o tutejszych legendach. Tak minęło kilka godzin. Gdy już się z nim żegnałeś powiedział, że może Ci sprzedać trochę grzybów.

<br><br>Obecna cena to <?php echo $this->_tpl_vars['Price']; ?>
 sztuk złota za Grzyba . Ile chcesz kupić?



<form method="post" action="ashop.php?action=buy">
Chcę kupić <input type="text" name="grzy"> sztuk grzybów. <input type="submit" value="Kup"><br><br>
<fieldset>
               <legend><b>Grzyby</b></legend>
                   <table>
                       <tr><td>Twoje grzyby:</td><td> <?php echo $this->_tpl_vars['grzyby']; ?>
</td></tr>
                       
                   </table>
           </fieldset>
</form>
<br>