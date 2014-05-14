<?php /* Smarty version 2.6.16, created on 2013-02-22 20:01:29
         compiled from przekletajaskinia.tpl */ ?>
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
<td><?php echo $this->_tpl_vars['vii']; ?>
</td>
<td><b><?php echo $this->_tpl_vars['posiadaczvii']; ?>
</b></td>
<td><b><?php echo $this->_tpl_vars['silavii']; ?>
</b></td>
</tr>
<tr>
<td>Runa: <b>EOF</b></td>
<td><?php echo $this->_tpl_vars['eof']; ?>
</td>
<td><b><?php echo $this->_tpl_vars['posiadaczeof']; ?>
</b></td>
<td><b><?php echo $this->_tpl_vars['silaeof']; ?>
</b></td>
</tr>
<tr>
<td>Runa: <b>NOV</b></td>
<td><?php echo $this->_tpl_vars['nov']; ?>
</td>
<td><b><?php echo $this->_tpl_vars['posiadacznov']; ?>
</b></td>
<td><b><?php echo $this->_tpl_vars['silanov']; ?>
</b></td>
</tr>
<tr>
<td>Runa: <b>VOE</b></td>
<td><?php echo $this->_tpl_vars['voe']; ?>
</td>
<td><b><?php echo $this->_tpl_vars['posiadaczvoe']; ?>
</b></td>
<td><b><?php echo $this->_tpl_vars['silavoe']; ?>
</b></td>
</tr>
<tr>
<td>Runa: <b>RUT</b></td>
<td><?php echo $this->_tpl_vars['rut']; ?>
</td>
<td><b><?php echo $this->_tpl_vars['posiadaczrut']; ?>
</b></td>
<td><b><?php echo $this->_tpl_vars['silarut']; ?>
</b></td>
</tr>


</table><center><br><b>Całkowita siła drużyny: <?php echo $this->_tpl_vars['ee']+$this->_tpl_vars['ee1']+$this->_tpl_vars['ee2']+$this->_tpl_vars['ee3']+$this->_tpl_vars['ee4']+$this->_tpl_vars['ee5']; ?>
</b></center>
</fieldset><center>[wraz z resetem układ run zostaje wyzerowany]</center>
<br>
 <?php if ($this->_tpl_vars['wejscie'] > 0): ?>
  <b>Walka w tym resecie została już stoczona z wynikiem <?php echo $this->_tpl_vars['wynik']; ?>
</b>
  <?php endif; ?>
 <?php if ($this->_tpl_vars['wejscie'] == 0): ?>
  <b><center><a href="wejdz.php">Umieszczam runy w odpowiednich miejscach i przechodzę dalej z resztą ekipy...</a></b>
  <?php endif; ?>








<b><?php echo $this->_tpl_vars['calasilavii']; ?>
</b><br>
<b><?php echo $this->_tpl_vars['calasilavoe']; ?>
</b><br>
<b><?php echo $this->_tpl_vars['calasilaeof']; ?>
</b><br>
<b><?php echo $this->_tpl_vars['siilanov']; ?>
</b><br>
<b><?php echo $this->_tpl_vars['calasilanov']; ?>
</b><br>