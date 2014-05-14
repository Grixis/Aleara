<?php /* Smarty version 2.6.16, created on 2012-10-30 10:23:09
         compiled from kopalniao.tpl */ ?>
<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Udało się! Pokonałeś bestię, a wielki Rogoton padł na ziemie ukazując za sobą strzeżone przez niego niewielkie, drewniane drzwi. Podchodzisz do nich niepewnym i powolnym krokiem i dostrzegasz niewielki otwór na klucz. Co chcesz teraz zrobić
<br><br>

<li><a href="kopalniaprzejscie.php">Wyjmujesz z kieszeni starannie wykuty, żelazny klucz i drżącą ręką przekręcasz go otwierając zamek.  [wym. klucz do opuszczonej kopalni - można otrzymać u Krutynów.]</a></li>
<li><a href="las.php">Postanawiasz zrezygnować i odchodzisz. Możesz wrócić tutaj później. [instancja respi się o 2h w nocy]</a></li>

<br><br>
<?php if ($this->_tpl_vars['kluczaktywny'] > 0): ?>
<center><a href="wnetrzekopalni.php?action=moutains&step=first">[Przechodzisz przez otwarte już drzwi - masz nadal czynną instancję]</a></center>

<?php endif; ?>