<?php /* Smarty version 2.6.16, created on 2012-10-06 02:48:59
         compiled from bows.tpl */ ?>
<center><IMG SRC="images/locations/fleczer.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
<?php echo '';  if ($this->_tpl_vars['Buy'] == 0 && $this->_tpl_vars['Step'] == ""):  echo '';  if ($this->_tpl_vars['Location'] == 'Altara'):  echo '<br /> ';  echo $this->_tpl_vars['Shopinfo2'];  echo '<br /><br />';  endif;  echo '';  if ($this->_tpl_vars['Location'] == 'Ardulith'):  echo '<br />';  echo $this->_tpl_vars['Shopinfo'];  echo '<br /><br />';  endif;  echo '';  if ($this->_tpl_vars['Arrows'] > 0):  echo '';  if ($this->_tpl_vars['Step'] == ""):  echo '<form method="post" action="bows.php?arrows=';  echo $this->_tpl_vars['Arrowsid'];  echo '&amp;step=buy"><input type="submit" value="';  echo $this->_tpl_vars['Abuy'];  echo '" /> <input type="text" name="arrows1" size="5" value="0" /> ';  echo $this->_tpl_vars['Tarrows'];  echo ' <b>';  echo $this->_tpl_vars['Arrowsname'];  echo '</b> ';  echo $this->_tpl_vars['Fora'];  echo ' <b>';  echo $this->_tpl_vars['Arrowscost'];  echo '</b> ';  echo $this->_tpl_vars['Tamount'];  echo ' <input type="text" name="arrows2" size="5" value="0" /> ';  echo $this->_tpl_vars['Tamount2'];  echo ' <b>';  echo $this->_tpl_vars['Arrowsname'];  echo '</b> ';  echo $this->_tpl_vars['Fora'];  echo ' <b>';  echo $this->_tpl_vars['Arrowscost2'];  echo '</b> ';  echo $this->_tpl_vars['Tamount3'];  echo '</form>';  endif;  echo '';  endif;  echo '<table width="100%"><tr><td width="30%"><b><u>';  echo $this->_tpl_vars['Iname'];  echo '</u></b></td><td width="16%"><b><u>';  echo $this->_tpl_vars['Iefect'];  echo '</u></b></td><td width="16%"><b><u>';  echo $this->_tpl_vars['Ispeed'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Idur'];  echo '</u></b></td><td width="12%"><b><u>';  echo $this->_tpl_vars['Icost'];  echo '</u></b></td><td width="8%"><b><u>';  echo $this->_tpl_vars['Ilevel'];  echo '</u></b></td><td width="8%"><b><u>';  echo $this->_tpl_vars['Ioption'];  echo '</u></b></td></tr>';  unset($this->_sections['item']);
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
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['item']['index']];  echo '</td><td>+';  echo $this->_tpl_vars['Power'][$this->_sections['item']['index']];  echo ' Atak</td><td>+';  echo $this->_tpl_vars['Speed'][$this->_sections['item']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Durability'][$this->_sections['item']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Cost'][$this->_sections['item']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Level'][$this->_sections['item']['index']];  echo '</td><td>- <a href="bows.php?';  echo $this->_tpl_vars['Tlink'][$this->_sections['item']['index']];  echo '';  echo $this->_tpl_vars['Itemid'][$this->_sections['item']['index']];  echo '">';  echo $this->_tpl_vars['Abuy'];  echo '</a>';  if ($this->_tpl_vars['Crime'] > '0'):  echo '<br /><a href="bows.php?steal=';  echo $this->_tpl_vars['Itemid'][$this->_sections['item']['index']];  echo '">';  echo $this->_tpl_vars['Asteal'];  echo '</a>';  endif;  echo '</td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['Buy'] > 0 || $this->_tpl_vars['Step'] == 'buy'):  echo '<br />';  echo $this->_tpl_vars['Youbuy'];  echo ' <b>';  echo $this->_tpl_vars['Cost'];  echo '</b> ';  echo $this->_tpl_vars['Goldcoins'];  echo ' ';  echo $this->_tpl_vars['Tamount4'];  echo ' <b>';  echo $this->_tpl_vars['Name'];  echo '</b> ';  echo $this->_tpl_vars['With'];  echo ' <b>+';  echo $this->_tpl_vars['Power'];  echo '</b> ';  echo $this->_tpl_vars['Damage'];  echo '<br/><a href="bows.php">';  echo @BACK;  echo '</a>';  endif;  echo ''; ?>
