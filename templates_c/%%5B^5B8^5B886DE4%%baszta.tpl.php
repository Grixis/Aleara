<?php /* Smarty version 2.6.16, created on 2013-01-14 10:04:57
         compiled from baszta.tpl */ ?>
<center><IMG SRC="images/locations/basztanajemnikow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Idąc jedną z alei krainy, trafiasz na solidny budynek z litego marmuru. Podchodzisz bliżej i czytasz wiszący na nim szyld na którym widnieje napis "<i>Baszta Najemników</i>". Zaciekawiony wchodzisz do środka i zauważasz grupe mieszkańców wśród których rozpoznajesz głównie kupców chociaż są też rzemieślnicy i zwykli mieszkańcy. Dalej w głębi budynku zauważasz kilkunastu potężnie zbudowanych najemników. Spoglądając na nich zauważasz, iż są uzbrojeni po zęby. Jedni w miecze, drudzy w łuki. Przedzierając się przez tłum mieszkańców docierasz wkońcu do biurka przy którym zasiada ich przywódca.<br>-<i> Witam, co się tutaj dzieje ?</i> - pytasz<br>-<i> Znajdujesz się w Baszcie Najemników, za pewną opłatą możesz u nas wynająć osobistego ochroniarza. W zależności od zapłaconej kwoty będziesz pod naszą ochroną. Zaciekawiony ?</i> - Najemnik pyta i spoglada na ciebie<br>-<i> Jasne</i> - odpowiadasz i zaczynasz czytać listę najemników...
<ul>
<li><a href="baszta.php?view=immu1">Zatrudniam najemników</a></li>
<li><a href="baszta.php?view=immu3">Odwołuję najemników</a></li>
</ul>

<?php if ($this->_tpl_vars['View'] == 'immu1'): ?>
-Czy chcesz zatrudnić najemników? Koszt: poziom * 5000złota<br><br>
<i>Uwaga! Zatrudnienie najemników spowoduje, że nikt nie będzie mógł cię zaatakować ale również ty nie będziesz mógł nikogo zaatakować. Rezygnacja z ochrony powoduje utratę części statystyk.</i><br><br>
- <a href="baszta.php?view=immu1&step=yes">Tak</a><br>
- <a href="baszta.php">Nie</a><br>
<?php if ($this->_tpl_vars['Step'] == 'yes'): ?>
Od tej chwili jesteś całkowicie bezpieczny. Moi ludzie będą cię chronić przez pewien czas. Wejdź <a href="baszta.php">tutaj</a> aby wrocic do baszty.
<?php endif;  endif;  if ($this->_tpl_vars['View'] == 'immu3'): ?>
-Czy chcesz odwołać najemników? Koszt: poziom * 5000złota<br><br>
<i>Odwołanie najemników spowoduje utratę 20% statystyk.</i><br><br>
- <a href="baszta.php?view=immu3&step=no">Tak</a><br>
- <a href="baszta.php">Nie</a><br>
<?php if ($this->_tpl_vars['Step'] == 'no'): ?>
Od tej chwili nie jesteś chroniony już przez najemników. Wejdź <a href="baszta.php">tutaj</a> aby wrocic do baszty.
<?php endif;  endif; ?>
</br>