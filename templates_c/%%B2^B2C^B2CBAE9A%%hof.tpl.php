<?php /* Smarty version 2.6.16, created on 2012-10-06 12:01:06
         compiled from hof.tpl */ ?>
<center><IMG SRC="images/locations/galeriabohaterow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  echo $this->_tpl_vars['Hofinfo'];  echo '<br /><br />';  echo $this->_tpl_vars['Message'];  echo '';  unset($this->_sections['hof']);
$this->_sections['hof']['name'] = 'hof';
$this->_sections['hof']['loop'] = is_array($_loop=$this->_tpl_vars['Hero']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['hof']['show'] = true;
$this->_sections['hof']['max'] = $this->_sections['hof']['loop'];
$this->_sections['hof']['step'] = 1;
$this->_sections['hof']['start'] = $this->_sections['hof']['step'] > 0 ? 0 : $this->_sections['hof']['loop']-1;
if ($this->_sections['hof']['show']) {
    $this->_sections['hof']['total'] = $this->_sections['hof']['loop'];
    if ($this->_sections['hof']['total'] == 0)
        $this->_sections['hof']['show'] = false;
} else
    $this->_sections['hof']['total'] = 0;
if ($this->_sections['hof']['show']):

            for ($this->_sections['hof']['index'] = $this->_sections['hof']['start'], $this->_sections['hof']['iteration'] = 1;
                 $this->_sections['hof']['iteration'] <= $this->_sections['hof']['total'];
                 $this->_sections['hof']['index'] += $this->_sections['hof']['step'], $this->_sections['hof']['iteration']++):
$this->_sections['hof']['rownum'] = $this->_sections['hof']['iteration'];
$this->_sections['hof']['index_prev'] = $this->_sections['hof']['index'] - $this->_sections['hof']['step'];
$this->_sections['hof']['index_next'] = $this->_sections['hof']['index'] + $this->_sections['hof']['step'];
$this->_sections['hof']['first']      = ($this->_sections['hof']['iteration'] == 1);
$this->_sections['hof']['last']       = ($this->_sections['hof']['iteration'] == $this->_sections['hof']['total']);
 echo '<fieldset style="width: 400px"><legend>';  echo $this->_tpl_vars['Hero'][$this->_sections['hof']['index']];  echo '</legend><table width="400" align="center"><tr><td width="65%"><b>';  echo $this->_tpl_vars['Hname'];  echo ':</b></td><td width="35%"> ';  echo $this->_tpl_vars['Hero'][$this->_sections['hof']['index']];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Holdid'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Oldid'][$this->_sections['hof']['index']];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Hid'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Heroid'][$this->_sections['hof']['index']];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Hrace'];  echo '</b></td><td> ';  echo $this->_tpl_vars['Herorace'][$this->_sections['hof']['index']];  echo '</td></tr></table></fieldset><br/>';  endfor; endif;  echo 'Pamiętaj, iż pewnego dnia i twój pomnik może znaleźć się w tym gmachu. A więc przyszli bohaterowie - do dzieła!'; ?>