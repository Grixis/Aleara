<?php /* Smarty version 2.6.16, created on 2013-02-14 14:43:55
         compiled from sklepy.tpl */ ?>
<center><IMG SRC="images/locations/sklepymieszkancow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php if ($this->_tpl_vars['View'] == "" && $this->_tpl_vars['Remowe'] == "" && $this->_tpl_vars['Buy'] == ""): ?>

Tutaj znajdują się sklepy mieszkańców krainy . Masz pare opcji:<br>
<ul>
<li><a href="sklepy.php?view=szukaj">Szukaj ofert</a></li>
<?php if ($this->_tpl_vars['Sklep'] == 'Y'): ?>
<li><a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?view=add">Dodaj ofertę</a></li>
<li><a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?view=del">Skasuj wszystkie swoje oferty</a></li>
<li><a href="sklepy.php?view=opis">Zmień opis sklepu</a></li>
<?php endif; ?>
</ul>
<?php if ($this->_tpl_vars['Sklep'] == 'N'): ?>
<li><a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?view=kup1">Kup sklep (50000 sztuk złota i 100 sztuk mithrilu)</a>
<?php endif;  unset($this->_sections['sklepy']);
$this->_sections['sklepy']['name'] = 'sklepy';
$this->_sections['sklepy']['loop'] = is_array($_loop=$this->_tpl_vars['Sklepy']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sklepy']['show'] = true;
$this->_sections['sklepy']['max'] = $this->_sections['sklepy']['loop'];
$this->_sections['sklepy']['step'] = 1;
$this->_sections['sklepy']['start'] = $this->_sections['sklepy']['step'] > 0 ? 0 : $this->_sections['sklepy']['loop']-1;
if ($this->_sections['sklepy']['show']) {
    $this->_sections['sklepy']['total'] = $this->_sections['sklepy']['loop'];
    if ($this->_sections['sklepy']['total'] == 0)
        $this->_sections['sklepy']['show'] = false;
} else
    $this->_sections['sklepy']['total'] = 0;
if ($this->_sections['sklepy']['show']):

            for ($this->_sections['sklepy']['index'] = $this->_sections['sklepy']['start'], $this->_sections['sklepy']['iteration'] = 1;
                 $this->_sections['sklepy']['iteration'] <= $this->_sections['sklepy']['total'];
                 $this->_sections['sklepy']['index'] += $this->_sections['sklepy']['step'], $this->_sections['sklepy']['iteration']++):
$this->_sections['sklepy']['rownum'] = $this->_sections['sklepy']['iteration'];
$this->_sections['sklepy']['index_prev'] = $this->_sections['sklepy']['index'] - $this->_sections['sklepy']['step'];
$this->_sections['sklepy']['index_next'] = $this->_sections['sklepy']['index'] + $this->_sections['sklepy']['step'];
$this->_sections['sklepy']['first']      = ($this->_sections['sklepy']['iteration'] == 1);
$this->_sections['sklepy']['last']       = ($this->_sections['sklepy']['iteration'] == $this->_sections['sklepy']['total']);
?>
<fieldset>
<legend><a href="sklepy.php?view=market&lista=id&limit=0&owner=<?php echo $this->_tpl_vars['Owner'][$this->_sections['sklepy']['index']]; ?>
"><?php echo $this->_tpl_vars['Sklepy'][$this->_sections['sklepy']['index']]; ?>
</a></legend>
Właściciel: <?php echo $this->_tpl_vars['Owner'][$this->_sections['sklepy']['index']]; ?>
 <br/>
Oferty: <?php echo $this->_tpl_vars['Oferty'][$this->_sections['sklepy']['index']]; ?>
 <br/>
<br/>
<?php echo $this->_tpl_vars['Opis'][$this->_sections['sklepy']['index']]; ?>

</fieldset><br/>
<br/>
<?php endfor; endif; ?>


<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'kup1'): ?>
<form method="post" action="sklepy.php?view=kup">
Nazwa sklepu: <input type="text" name="opis"> (Jeżeli będzie beznadziejna lub wulgarna, sklep zostanie <b>skasowany</b><br>
<input type="submit" value="Kup">
</form>
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'szukaj'): ?>
Szukaj ofert w sklepach lub <a href="sklepy.php">wróć</a>. Uwaga! Wpisz dokładną nazwę przedmiotu jakiego poszukujesz.<br><br>
<table><form method="post" action="sklepy.php?view=market&limit=0&lista=name">
Przedmiot: <input type="text" name="szukany">
<tr><td colspan="2" align="center"><input type="submit" value="Szukaj"></td></tr>
</form></table>
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'market'): ?>
Zobacz oferty lub <a href="sklepy.php">wróć</a>.<br><br>
<table>
<tr>
<td width="100"><b>Nazwa</b></td>
<td width="100"><b>Siła (moc w przypadku pierścieni)</b></td>
<td width="100"><b>Wytrzy.</b></td>
<td width="100"><b>Szybk.</b></td>
<td width="100"><b>Zręcz.</b></td>
<td width="50"><b>Poziom</b></td>
<td width="50"><b>Ilość</b></td>
<td width="50"><b>Koszt</b></td>
<td width="100"><b><u>Opcje</td>
</tr>
<?php unset($this->_sections['item']);
$this->_sections['item']['name'] = 'item';
$this->_sections['item']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item']['show'] = true;
$this->_sections['item']['max'] = $this->_sections['item']['loop'];
$this->_sections['item']['step'] = 1;
$this->_sections['item']['start'] = $this->_sections['item']['step'] > 0 ? 0 : $this->_sections['item']['loop']-1;
if ($this->_sections['item']['show']) {
    $this->_sections['item']['total'] = $this->_sections['item']['loop'];
    if ($this->_sections['item']['total'] == 0)
        $this->_sections['item']['show'] = false;
} else
    $this->_sections['item']['total'] = 0;
if ($this->_sections['item']['show']):

            for ($this->_sections['item']['index'] = $this->_sections['item']['start'], $this->_sections['item']['iteration'] = 1;
                 $this->_sections['item']['iteration'] <= $this->_sections['item']['total'];
                 $this->_sections['item']['index'] += $this->_sections['item']['step'], $this->_sections['item']['iteration']++):
$this->_sections['item']['rownum'] = $this->_sections['item']['iteration'];
$this->_sections['item']['index_prev'] = $this->_sections['item']['index'] - $this->_sections['item']['step'];
$this->_sections['item']['index_next'] = $this->_sections['item']['index'] + $this->_sections['item']['step'];
$this->_sections['item']['first']      = ($this->_sections['item']['iteration'] == 1);
$this->_sections['item']['last']       = ($this->_sections['item']['iteration'] == $this->_sections['item']['total']);
?>
<tr>
<td><?php echo $this->_tpl_vars['Name'][$this->_sections['item']['index']]; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['Power'][$this->_sections['item']['index']]; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['Durability'][$this->_sections['item']['index']]; ?>
/<?php echo $this->_tpl_vars['Maxdur'][$this->_sections['item']['index']]; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['Speed'][$this->_sections['item']['index']]; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['Agility'][$this->_sections['item']['index']]; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['Minlev'][$this->_sections['item']['index']]; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['Amount'][$this->_sections['item']['index']]; ?>
</td>
<td><?php echo $this->_tpl_vars['Cost'][$this->_sections['item']['index']]; ?>
</td>
<?php echo $this->_tpl_vars['Action'][$this->_sections['item']['index']]; ?>

<?php endfor; endif; ?>
</table>
<?php echo $this->_tpl_vars['Previous'];  echo $this->_tpl_vars['Next']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'add'): ?>
Dodaj ofertę do sklepu lub <a href="sklepy.php">wróć</a>.<br><br>
<table><form method="post" action="sklepy.php?view=add&step=add">
Przedmiot: <select name="przedmiot">
<?php unset($this->_sections['item1']);
$this->_sections['item1']['name'] = 'item1';
$this->_sections['item1']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item1']['show'] = true;
$this->_sections['item1']['max'] = $this->_sections['item1']['loop'];
$this->_sections['item1']['step'] = 1;
$this->_sections['item1']['start'] = $this->_sections['item1']['step'] > 0 ? 0 : $this->_sections['item1']['loop']-1;
if ($this->_sections['item1']['show']) {
    $this->_sections['item1']['total'] = $this->_sections['item1']['loop'];
    if ($this->_sections['item1']['total'] == 0)
        $this->_sections['item1']['show'] = false;
} else
    $this->_sections['item1']['total'] = 0;
if ($this->_sections['item1']['show']):

            for ($this->_sections['item1']['index'] = $this->_sections['item1']['start'], $this->_sections['item1']['iteration'] = 1;
                 $this->_sections['item1']['iteration'] <= $this->_sections['item1']['total'];
                 $this->_sections['item1']['index'] += $this->_sections['item1']['step'], $this->_sections['item1']['iteration']++):
$this->_sections['item1']['rownum'] = $this->_sections['item1']['iteration'];
$this->_sections['item1']['index_prev'] = $this->_sections['item1']['index'] - $this->_sections['item1']['step'];
$this->_sections['item1']['index_next'] = $this->_sections['item1']['index'] + $this->_sections['item1']['step'];
$this->_sections['item1']['first']      = ($this->_sections['item1']['iteration'] == 1);
$this->_sections['item1']['last']       = ($this->_sections['item1']['iteration'] == $this->_sections['item1']['total']);
?>
<option value="<?php echo $this->_tpl_vars['Itemid'][$this->_sections['item1']['index']]; ?>
"><?php echo $this->_tpl_vars['Name'][$this->_sections['item1']['index']]; ?>
(ilość: <?php echo $this->_tpl_vars['Amount'][$this->_sections['item1']['index']]; ?>
)</option>
<?php endfor; endif; ?>
<tr><td>Ilość:</td><td><input type="text" name="amount"></td></tr>
<tr><td>Cena za sztukę:</td><td><input type="text" name="cost"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Dodaj"></td></tr>
</form></table>
<?php endif; ?>

<?php if ($this->_tpl_vars['Buy'] != ""): ?>
Zakup przedmiot lub <a href="sklepy.php">wróć</a>.<br /><br />
<b>Przedmiot:</b> <?php echo $this->_tpl_vars['Name']; ?>
 <br />
<b>Siła:</b> <?php echo $this->_tpl_vars['Power']; ?>
 <br />
<?php if ($this->_tpl_vars['Agi'] != '0'): ?>
<b>Premia do zręczności:</b> <?php echo $this->_tpl_vars['Agi']; ?>
 <br />
<?php endif;  if ($this->_tpl_vars['Speed'] != '0'): ?>
<b>Premia do szybkości:</b> <?php echo $this->_tpl_vars['Speed']; ?>
 <br />
<?php endif;  if ($this->_tpl_vars['Type'] != 'R' && $this->_tpl_vars['Type'] != 'S' && $this->_tpl_vars['Type'] != 'Z' && $this->_tpl_vars['Type'] != 'G'): ?>
<b>Wytrzymałość:</b> <?php echo $this->_tpl_vars['Dur']; ?>
/<?php echo $this->_tpl_vars['MaxDur']; ?>
 <br />
<?php endif;  if ($this->_tpl_vars['Type'] == 'R'): ?>
<b>Liczba strzał:</b> <?php echo $this->_tpl_vars['Dur']; ?>
 <br />
<?php endif;  if ($this->_tpl_vars['Type'] == 'G'): ?>
<b>Liczba grotów:</b> <?php echo $this->_tpl_vars['Dur']; ?>
 <br />
<?php endif; ?>
<b>Ilość w ofercie:</b> <?php echo $this->_tpl_vars['Amount1']; ?>
 <br />
<b>Cena za sztukę:</b> <?php echo $this->_tpl_vars['Cost']; ?>
 <br />
<b>Sprzedający:</b> <a href="view.php?view=<?php echo $this->_tpl_vars['Sid']; ?>
"><?php echo $this->_tpl_vars['Seller']; ?>
</a> <br /><br />
<table><form method="post" action="sklepy.php?buy=<?php echo $this->_tpl_vars['Itemid']; ?>
&step=buy">
<tr><td>Ilość:</td><td><input type="text" name="amount"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Kup"></td></tr>
</form></table>
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'all'): ?>
Tutaj masz spis wszystkich ofert jakie są w sklepach.<br />
<table>
<tr>
<td><b><u>Nazwa</u></b></td><td><b><u>Ofert</u></b></td><td align="center"><b><u>Akcja</u></b></td>
</tr>
<?php unset($this->_sections['all']);
$this->_sections['all']['name'] = 'all';
$this->_sections['all']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['all']['show'] = true;
$this->_sections['all']['max'] = $this->_sections['all']['loop'];
$this->_sections['all']['step'] = 1;
$this->_sections['all']['start'] = $this->_sections['all']['step'] > 0 ? 0 : $this->_sections['all']['loop']-1;
if ($this->_sections['all']['show']) {
    $this->_sections['all']['total'] = $this->_sections['all']['loop'];
    if ($this->_sections['all']['total'] == 0)
        $this->_sections['all']['show'] = false;
} else
    $this->_sections['all']['total'] = 0;
if ($this->_sections['all']['show']):

            for ($this->_sections['all']['index'] = $this->_sections['all']['start'], $this->_sections['all']['iteration'] = 1;
                 $this->_sections['all']['iteration'] <= $this->_sections['all']['total'];
                 $this->_sections['all']['index'] += $this->_sections['all']['step'], $this->_sections['all']['iteration']++):
$this->_sections['all']['rownum'] = $this->_sections['all']['iteration'];
$this->_sections['all']['index_prev'] = $this->_sections['all']['index'] - $this->_sections['all']['step'];
$this->_sections['all']['index_next'] = $this->_sections['all']['index'] + $this->_sections['all']['step'];
$this->_sections['all']['first']      = ($this->_sections['all']['iteration'] == 1);
$this->_sections['all']['last']       = ($this->_sections['all']['iteration'] == $this->_sections['all']['total']);
?>
<tr>
<td><?php echo $this->_tpl_vars['Name'][$this->_sections['all']['index']]; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['Amount'][$this->_sections['all']['index']]; ?>
</td>
<td><form method="post" action="sklepy.php?view=market&limit=0&lista=id">
<input type="hidden" name="szukany" value="<?php echo $this->_tpl_vars['Name'][$this->_sections['all']['index']]; ?>
">
<input type="submit" value="Pokaż"></form>
</td>
</tr>
<?php endfor; endif; ?>
</table>
<?php endif;  if ($this->_tpl_vars['View'] == 'opis'): ?>
Zmień opis sklepu na:<br/>
<form method="post" action="sklepy.php?view=zmien">
<input name="opis" type="text">
<input type="submit" value="Zmień">
</form>
<?php endif;  echo $this->_tpl_vars['Message']; ?>

<br />