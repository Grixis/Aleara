<?php /* Smarty version 2.6.16, created on 2012-10-06 01:06:51
         compiled from pub.tpl */ ?>
<?php if ($this->_tpl_vars['wodka'] == ""): ?>
<center><img src="images/locations/starzpub.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Zmęczony całym dniem idziesz w najbardziej oczywiste miejsce, PUB. Wszak wielbłądem nie jesteś – pić musisz. Swoją dorgą, wspomnienie o zasłyszanej niegdyś istocie nie potrzebującej często napitku zdaje się dziwnym – a może ktoś cie okłamał?  Wiatr zacina z każdej strony, dzieciaki już nie plączą się po ulicach, matki zwołały je do domów na kolacje i pewnie niebawem wyślą je do łóżek. Tobie w sumie też marzy się łóżko, ale najpierw trzeba eliksiru na sen zażyć, a nigdzie nie podają tak skutecznego rozluźniacza co w PUBie. Nikt nie wypytuje o wiek, o płeć czy o status społeczny – masz kasę pijesz, nie to spadaj. Jakże proste reguły. Z tymi wesołymi rozważaniami dostrzegasz obdrapane fasady i pęknięty szyld smutno zwisający na jednym z dwóch łańcuchów „STARY PUB”, wchodzisz, zamawiasz -  pijesz.
   <br> 
   <center> - <a href="pub.php?wodka=piwo">Poproszę Piwo</a><br><br></center>
   
   <center>- <a href="pub.php?wodka=miod">Poproszę Miód</a><br><br></center>
   
   <center> - <a href="pub.php?wodka=wodka">Poproszę Wódkę</a><br><br><br></center>

Cena zalezy od twojego poziomu. W końcu im jesteś bardziej doświadczony i silny to możesz więcej wypić! Za picie alkoholu otrzymujesz energię oraz pkt umiejętności alkoholizm.
</br>
 <?php endif; ?>

<?php if ($this->_tpl_vars['wodka'] == 'piwo' && $this->_tpl_vars['opis'] == ""): ?>
     <br>
    Zaplacisz  : <?php echo $this->_tpl_vars['Cost']; ?>
 za co Twój poziom alkoholizmu wzrośnie o 1 i zyskasz 1 energii.
<br><br><br>
    <center><form method="post" action="pub.php?wodka=piwo&step=wybierz">
    <input type="submit" value="Wypij"><br><br><br>
    (<a href="pub.php">Wróć</a>)</br></form>
<?php endif; ?>

<?php if ($this->_tpl_vars['wodka'] == 'miod' && $this->_tpl_vars['opis'] == ""): ?>
   <br>
 Zaplacisz  : <?php echo $this->_tpl_vars['Cost2']; ?>
 za co Twój poziom alkoholizmu wzrośnie o 1.5 i zyskasz 3 energii.
<br><br><br>
    <center><form method="post" action="pub.php?wodka=miod&step=wybierz">
    <input type="submit" value="Wypij"><br><br><br>
    (<a href="pub.php">Wróć</a>)</br></form>
<?php endif; ?>

<?php if ($this->_tpl_vars['wodka'] == 'wodka' && $this->_tpl_vars['opis'] == ""): ?>
   <br>
. Zaplacisz  : <?php echo $this->_tpl_vars['Cost3']; ?>
 za co Twój poziom alkoholizmu wzrośnie o 2 i zyskasz 5 energii.
<br><br><br>
    <center><form method="post" action="pub.php?wodka=wodka&step=wybierz">
    <input type="submit" value="Wypij"><br><br><br>
    (<a href="pub.php">Wróć</a>)</br></br></form>
<?php endif; ?>


<?php if ($this->_tpl_vars['Step'] == 'wybierz' && $this->_tpl_vars['opis'] == ""): ?>
     Wypiłeś trunek.</br>
<?php endif; ?>

</br>