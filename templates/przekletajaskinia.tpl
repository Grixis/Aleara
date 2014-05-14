<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wędrując po Krwawych Mokradłach zauważyłeś dziwną szczelinę w pewnej skale. Postanowiłeś sprawdzić to miejsce dokładniej. Gdy podszedłeś bliżej okazało się, że w skale znajduje się wejście do podziemi. Wchodzisz do środka i zaczynasz rozglądać się na boki. Po pewnej chwili podchodzi do Ciebie pewien serafin. Mówi Ci on, że jest z rodu Krutynów i że znajdujesz się w Przeklętej Jaskini. Z rozmowy dowiadujesz się, że gdzieś tutaj są ukryte runy. Serafin zdradził Ci także częściowo tajemnice tych magicznych run. Powiedział Ci, że owe runy otwierają przejście do nieznanej nikomu części jaskini. Jest tam podobno tak strasznie, że jeszcze nikt wcześniej nie odważył się tam pójść…
<br>
<br>
<center><a href="poruny.php">Idę na poszukiwanie magicznych run...</a></center>
<br><br>

<center><fieldset style="width:70%">
    <legend><u><b>Stan układu run w drużynie:</b></u></legend>
<table style="100%">
<tr style="50%">
<td style="20%"><b><u>RUNY:</b></u></td>
<td style="20%"><b><u>STATUS:</b></u></td>
<td style="40%"><b><u>POSIADACZ:</b></u></td>
<td style="20%"><b><u>SIŁA GRACZA:</b></u></td>
</tr>
<tr>
<td>Runa: <b>VII</b></td>
<td>{$vii}</td>
<td><b>{$posiadaczvii}</b></td>
<td><b>{$silavii}</b></td>
</tr>
<tr>
<td>Runa: <b>EOF</b></td>
<td>{$eof}</td>
<td><b>{$posiadaczeof}</b></td>
<td><b>{$silaeof}</b></td>
</tr>
<tr>
<td>Runa: <b>NOV</b></td>
<td>{$nov}</td>
<td><b>{$posiadacznov}</b></td>
<td><b>{$silanov}</b></td>
</tr>
<tr>
<td>Runa: <b>VOE</b></td>
<td>{$voe}</td>
<td><b>{$posiadaczvoe}</b></td>
<td><b>{$silavoe}</b></td>
</tr>
<tr>
<td>Runa: <b>RUT</b></td>
<td>{$rut}</td>
<td><b>{$posiadaczrut}</b></td>
<td><b>{$silarut}</b></td>
</tr>


</table><center><br><b>Całkowita siła drużyny: {$ee+$ee1+$ee2+$ee3+$ee4+$ee5}</b></center>
</fieldset><center>[wraz z resetem układ run zostaje wyzerowany]</center>
<br>
 {if $wejscie > 0}
  <b>Walka w tym resecie została już stoczona z wynikiem {$wynik}</b>
  {/if}
 {if $wejscie == 0}
  <b><center><a href="wejdz.php">Umieszczam runy w odpowiednich miejscach i przechodzę dalej z resztą ekipy...</a></b>
  {/if}








<b>{$calasilavii}</b><br>
<b>{$calasilavoe}</b><br>
<b>{$calasilaeof}</b><br>
<b>{$siilanov}</b><br>
<b>{$calasilanov}</b><br>