<?php /* Smarty version 2.6.16, created on 2012-10-06 10:07:58
         compiled from jail.tpl */ ?>
<?php echo '';  if (( $this->_tpl_vars['Location'] == 'Altara' || $this->_tpl_vars['Location'] == 'Ardulith' ) && $this->_tpl_vars['Prisoner'] == ""):  echo '';  echo $this->_tpl_vars['Jailinfo'];  echo '<br /><br /><br />';  if ($this->_tpl_vars['Number'] > '0'):  echo '';  unset($this->_sections['jail']);
$this->_sections['jail']['name'] = 'jail';
$this->_sections['jail']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['jail']['show'] = true;
$this->_sections['jail']['max'] = $this->_sections['jail']['loop'];
$this->_sections['jail']['step'] = 1;
$this->_sections['jail']['start'] = $this->_sections['jail']['step'] > 0 ? 0 : $this->_sections['jail']['loop']-1;
if ($this->_sections['jail']['show']) {
    $this->_sections['jail']['total'] = $this->_sections['jail']['loop'];
    if ($this->_sections['jail']['total'] == 0)
        $this->_sections['jail']['show'] = false;
} else
    $this->_sections['jail']['total'] = 0;
if ($this->_sections['jail']['show']):

            for ($this->_sections['jail']['index'] = $this->_sections['jail']['start'], $this->_sections['jail']['iteration'] = 1;
                 $this->_sections['jail']['iteration'] <= $this->_sections['jail']['total'];
                 $this->_sections['jail']['index'] += $this->_sections['jail']['step'], $this->_sections['jail']['iteration']++):
$this->_sections['jail']['rownum'] = $this->_sections['jail']['iteration'];
$this->_sections['jail']['index_prev'] = $this->_sections['jail']['index'] - $this->_sections['jail']['step'];
$this->_sections['jail']['index_next'] = $this->_sections['jail']['index'] + $this->_sections['jail']['step'];
$this->_sections['jail']['first']      = ($this->_sections['jail']['iteration'] == 1);
$this->_sections['jail']['last']       = ($this->_sections['jail']['iteration'] == $this->_sections['jail']['total']);
 echo '<table width="100%"><tr><td width="40%"><b>';  echo $this->_tpl_vars['Pname'];  echo ':</b> </td><td width="70%"> <a href="view.php?view=';  echo $this->_tpl_vars['Id'][$this->_sections['jail']['index']];  echo '">';  echo $this->_tpl_vars['Name'][$this->_sections['jail']['index']];  echo '</a></td></tr><tr><td><b>';  echo $this->_tpl_vars['Pid'];  echo ':</b> </td><td> ';  echo $this->_tpl_vars['Id'][$this->_sections['jail']['index']];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Pdate'];  echo ':</b> </td><td> ';  echo $this->_tpl_vars['Date'][$this->_sections['jail']['index']];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Preason'];  echo ':</b> </td><td> ';  echo $this->_tpl_vars['Verdict'][$this->_sections['jail']['index']];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Pduration'];  echo ':</b> </td><td> ';  echo $this->_tpl_vars['Duration'][$this->_sections['jail']['index']];  echo ' (';  echo $this->_tpl_vars['Duration2'][$this->_sections['jail']['index']];  echo ' ';  echo $this->_tpl_vars['Pduration2'];  echo ')</td></tr><tr><td><b>';  echo $this->_tpl_vars['Pcost'];  echo ':</b> </td><td> <a href=jail.php?prisoner=';  echo $this->_tpl_vars['Jailid'][$this->_sections['jail']['index']];  echo '>';  echo $this->_tpl_vars['Cost'][$this->_sections['jail']['index']];  echo ' ';  echo $this->_tpl_vars['Goldcoins'];  echo '</a></td></tr></table><br /><br />';  endfor; endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Number'] == '0'):  echo '<center>';  echo $this->_tpl_vars['Noprisoners'];  echo '</center>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Location'] == 'Lochy'):  echo '';  echo $this->_tpl_vars['Youare'];  echo '<br /><b>';  echo $this->_tpl_vars['Pdate'];  echo ':</b> ';  echo $this->_tpl_vars['Date'];  echo '<br /><b>';  echo $this->_tpl_vars['Pduration'];  echo ':</b> ';  echo $this->_tpl_vars['Duration'];  echo ' (';  echo $this->_tpl_vars['Duration2'];  echo ' ';  echo $this->_tpl_vars['Pduration2'];  echo ')<br /><b>';  echo $this->_tpl_vars['Preason'];  echo ':</b> ';  echo $this->_tpl_vars['Verdict'];  echo '<br /><b>';  echo $this->_tpl_vars['Pcost'];  echo ':</b> ';  echo $this->_tpl_vars['Cost'];  echo '<br />';  endif;  echo '';  if ($this->_tpl_vars['Prisoner'] != ""):  echo '';  if ($this->_tpl_vars['Step'] == ""):  echo '';  echo $this->_tpl_vars['Youwant'];  echo '<b>';  echo $this->_tpl_vars['Prisonername'];  echo '</b>?<form method="post" action="jail.php?prisoner=';  echo $this->_tpl_vars['Prisoner'];  echo '&step=confirm"><input type="submit" value="';  echo $this->_tpl_vars['Ayes'];  echo '" /></form><br />(<a href="jail.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>)';  endif;  echo '';  endif;  echo ''; ?>
<br>