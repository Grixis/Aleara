<?php /* Smarty version 2.6.16, created on 2012-10-06 00:47:04
         compiled from armor.tpl */ ?>
<center><IMG SRC="images/locations/platnerz.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['Buy'] == 0):  echo '<br />';  echo $this->_tpl_vars['Armorinfo'];  echo '<ul><li><a href="armor.php?dalej=A">';  echo $this->_tpl_vars['Aarmors'];  echo '</a></li><li><a href="armor.php?dalej=H">';  echo $this->_tpl_vars['Ahelmets'];  echo '</a></li><li><a href="armor.php?dalej=L">';  echo $this->_tpl_vars['Alegs'];  echo '</a></li><li><a href="armor.php?dalej=S">';  echo $this->_tpl_vars['Ashields'];  echo '</a></li></ul>';  if ($this->_tpl_vars['Next'] != ''):  echo '<table width="100%"><tr><td width="30%"><b><u>';  echo $this->_tpl_vars['Iname'];  echo '</u></b></td><td width="20%"><b><u>';  echo $this->_tpl_vars['Iefect'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Idur'];  echo '</u></b></td><td width="12%"><b><u>';  echo $this->_tpl_vars['Iagi'];  echo '</u></b></td><td width="12%"><b><u>';  echo $this->_tpl_vars['Icost'];  echo '</u></b></td><td width="8%"><b><u>';  echo $this->_tpl_vars['Ilevel'];  echo '</u></b></td><td width="8%"><b><u>';  echo $this->_tpl_vars['Ioption'];  echo '</u></b></td></tr>';  unset($this->_sections['number']);
$this->_sections['number']['name'] = 'number';
$this->_sections['number']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['number']['show'] = true;
$this->_sections['number']['max'] = $this->_sections['number']['loop'];
$this->_sections['number']['step'] = 1;
$this->_sections['number']['start'] = $this->_sections['number']['step'] > 0 ? 0 : $this->_sections['number']['loop']-1;
if ($this->_sections['number']['show']) {
    $this->_sections['number']['total'] = $this->_sections['number']['loop'];
    if ($this->_sections['number']['total'] == 0)
        $this->_sections['number']['show'] = false;
} else
    $this->_sections['number']['total'] = 0;
if ($this->_sections['number']['show']):

            for ($this->_sections['number']['index'] = $this->_sections['number']['start'], $this->_sections['number']['iteration'] = 1;
                 $this->_sections['number']['iteration'] <= $this->_sections['number']['total'];
                 $this->_sections['number']['index'] += $this->_sections['number']['step'], $this->_sections['number']['iteration']++):
$this->_sections['number']['rownum'] = $this->_sections['number']['iteration'];
$this->_sections['number']['index_prev'] = $this->_sections['number']['index'] - $this->_sections['number']['step'];
$this->_sections['number']['index_next'] = $this->_sections['number']['index'] + $this->_sections['number']['step'];
$this->_sections['number']['first']      = ($this->_sections['number']['iteration'] == 1);
$this->_sections['number']['last']       = ($this->_sections['number']['iteration'] == $this->_sections['number']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['number']['index']];  echo '</td><td>+';  echo $this->_tpl_vars['Power'][$this->_sections['number']['index']];  echo ' Obrona</td><td>';  echo $this->_tpl_vars['Durability'][$this->_sections['number']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Agility'][$this->_sections['number']['index']];  echo ' %</td><td>';  echo $this->_tpl_vars['Cost'][$this->_sections['number']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Level'][$this->_sections['number']['index']];  echo '</td><td>- <a href="armor.php?buy=';  echo $this->_tpl_vars['Id'][$this->_sections['number']['index']];  echo '">';  echo $this->_tpl_vars['Abuy'];  echo '</a>';  if ($this->_tpl_vars['Crime'] > '0'):  echo '<br /><a href="armor.php?steal=';  echo $this->_tpl_vars['Id'][$this->_sections['number']['index']];  echo '">';  echo $this->_tpl_vars['Asteal'];  echo '</a>';  endif;  echo '</td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Buy'] != 0):  echo '<br />';  echo $this->_tpl_vars['Youpay'];  echo ' <b>';  echo $this->_tpl_vars['Cost'];  echo '</b> ';  echo $this->_tpl_vars['Andbuy'];  echo ' <b>';  echo $this->_tpl_vars['Name'];  echo ' ';  echo $this->_tpl_vars['Ipower'];  echo ' + ';  echo $this->_tpl_vars['Power'];  echo '</b><br/><a href="armor.php">';  echo @BACK;  echo '</a>';  endif;  echo ''; ?>

</br></br>