<?php /* Smarty version 2.6.16, created on 2012-10-06 00:44:22
         compiled from weapons.tpl */ ?>
<center><IMG SRC="images/locations/zbrojmistrz.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['Buy'] == ""):  echo 'Kiedy wchodzisz do dużego domu z szyldem ZBROJMISTRZ dostrzegasz kilku kupców, wojowników i dwóch elfów za ladą. Podchodzisz do jednego z nich a ten pyta: Witaj, czy chcesz kupić u nas oręż? Jeśli tak, to powiedz którą z broni wybierasz w mithrilowej szkatule przez szybę widać wszystkie rodzaje broni jakie wykuwa się w tym zakładzie. Asortyment jest przeogromny - od sztyletów po adamantytowe miecze dwuręczne. Zza firanki za ladą słychać tylko pospieszne kucie broni i krasnoludzkie sapanie Za... Dużo... Tych... Wojaków... Arg... No ukończone!. Elf patrząc na Ciebie z uśmiechem mówi tylko: Co podać?<br /><br /><table width="100%"><tr><td width="40%"><b><u>';  echo $this->_tpl_vars['Iname'];  echo '</u></b></td><td width="15%"><b><u>';  echo $this->_tpl_vars['Iefect'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Ispeed'];  echo '</u></b></td><td width="8%"><b><u>';  echo $this->_tpl_vars['Idur'];  echo '</u></b></td><td width="11%"><b><u>';  echo $this->_tpl_vars['Icost'];  echo '</u></b></td><td width="8%"><b><u>';  echo $this->_tpl_vars['Ilevel'];  echo '</u></b></td><td width="8%"><b><u>';  echo $this->_tpl_vars['Ioption'];  echo '</u></b></td></tr>';  unset($this->_sections['item']);
$this->_sections['item']['name'] = 'item';
$this->_sections['item']['loop'] = is_array($_loop=$this->_tpl_vars['Level']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['item']['index']];  echo '</td><td>+';  echo $this->_tpl_vars['Power'][$this->_sections['item']['index']];  echo ' Atak</td><td>+';  echo $this->_tpl_vars['Speed'][$this->_sections['item']['index']];  echo '%</td><td>';  echo $this->_tpl_vars['Durability'][$this->_sections['item']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Cost'][$this->_sections['item']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Level'][$this->_sections['item']['index']];  echo '</td><td> <a href="weapons.php?buy=';  echo $this->_tpl_vars['Itemid'][$this->_sections['item']['index']];  echo '">';  echo $this->_tpl_vars['Abuy'];  echo '</a>';  if ($this->_tpl_vars['Crime'] > '0'):  echo '<br /><a href="weapons.php?steal=';  echo $this->_tpl_vars['Itemid'][$this->_sections['item']['index']];  echo '">';  echo $this->_tpl_vars['Asteal'];  echo '</a>';  endif;  echo '</td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['Buy'] > 0):  echo '';  echo $this->_tpl_vars['Youpay'];  echo ' <b>';  echo $this->_tpl_vars['Cost'];  echo '</b> ';  echo $this->_tpl_vars['Andbuy'];  echo ' <b>';  echo $this->_tpl_vars['Name'];  echo ' +';  echo $this->_tpl_vars['Power'];  echo '</b> ';  echo $this->_tpl_vars['Topower'];  echo '<br/><a href="weapons.php">';  echo @BACK;  echo '</a>';  endif;  echo '';  if ($this->_tpl_vars['Zebrak'] > 0):  echo '';  echo $this->_tpl_vars['Youpay'];  echo ' <b>';  echo $this->_tpl_vars['Cost'];  echo '</b> ';  echo $this->_tpl_vars['Andbuy'];  echo ' <b>';  echo $this->_tpl_vars['Name'];  echo ' +';  echo $this->_tpl_vars['Power'];  echo '</b> ';  echo $this->_tpl_vars['Topower'];  echo '<br/><a href="weapons.php">';  echo @BACK;  echo '</a>';  endif;  echo ''; ?>
