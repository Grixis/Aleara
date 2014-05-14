<?php /* Smarty version 2.6.16, created on 2012-10-06 13:02:31
         compiled from los.tpl */ ?>
<form method="post" action="los.php?step=buy">
<center><IMG SRC="images/locations/budka.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wędrując przez miasto widzisz piękną i tajemniczą Elfkę. Stoi oparta o jeden ze starych, zabytkowych budynków. Wydaje Ci się, że nie emanuje szczęściem. Podchodzisz, lecz zauważasz wtedy, iż to było tylko złudzenie. Powiedziała do Ciebie…
<br>
Witaj! Tutaj możesz zagrać w loterie liczbową <b>Los Szczęścia</b>. W puli do wygrania <b><?php echo $this->_tpl_vars['Stawka']; ?>
</b> sztuk złota! <br> 
Zasady gry:<br>
Typujesz 6 cyfr od 1 do 45. Losowanie odbywa się w każdy reset główny (około północy).
<ul>
<li>6 cyfr - połowa puli</li>
<li>5 cyfr - ćwierć puli</li>
<li>4 cyfry - ósma część puli</li>
<li>3 cyfry - zwraca się koszt zakupu losu</li>
</ul>
Każdy los kosztuje 1000 sztuk złota * poziom twojej postaci. Każdy mieszkaniec może wykupić dowolną ilość losów, jednak pula wygranych z trafień w te same liczby nie kumuluje się. Złoto na wygrane pochodzi z zakupionych losów.<br>
Pamiętaj żeby sprawdzić czy wygrałeś następnego dnia, bo w przeciwnym wypadku los przepada!

<div align="center">

<input type="text" name="los1" value="0" /><br>   
<input type="text" name="los2" value="0" /><br>
<input type="text" name="los3" value="0" /><br>    
<input type="text" name="los4" value="0" /><br>
<input type="text" name="los5" value="0" /><br>
<input type="text" name="los6" value="0" /><br>
<br>
<br>
Koszt losu to: <?php echo $this->_tpl_vars['Koszt']; ?>

<br>
<input type="submit" value="Kup los"> 
</form></div>
<a href="los.php?step=check">Sprawdź losy z poprzedniego dnia</a><br>
<a href="los2.php">Wykorzystam swój dar jasnowidztwa i zagram</a>