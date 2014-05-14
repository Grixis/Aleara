<?php /* Smarty version 2.6.16, created on 2012-10-11 18:11:50
         compiled from salerozpaczy1.tpl */ ?>
<center><IMG SRC="images/locations/salerozpaczy.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
<?php echo 'Przeszedłeś przez portal znajdujący się z lewej strony kolda. Przed Toba znajduje się kolejny kold handlarz. Podchodzisz do niego. Oferuje Ci dodatki do ekwipunku od pierwszego poziomu.<br /><br /><table align="center" width="75%"><tr><td><b>';  echo $this->_tpl_vars['Tname'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Tbonus'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Tamount'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Tcost'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Taction'];  echo '</b></td></tr>';  unset($this->_sections['jeweller']);
$this->_sections['jeweller']['name'] = 'jeweller';
$this->_sections['jeweller']['loop'] = is_array($_loop=$this->_tpl_vars['Rid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['jeweller']['show'] = true;
$this->_sections['jeweller']['max'] = $this->_sections['jeweller']['loop'];
$this->_sections['jeweller']['step'] = 1;
$this->_sections['jeweller']['start'] = $this->_sections['jeweller']['step'] > 0 ? 0 : $this->_sections['jeweller']['loop']-1;
if ($this->_sections['jeweller']['show']) {
    $this->_sections['jeweller']['total'] = $this->_sections['jeweller']['loop'];
    if ($this->_sections['jeweller']['total'] == 0)
        $this->_sections['jeweller']['show'] = false;
} else
    $this->_sections['jeweller']['total'] = 0;
if ($this->_sections['jeweller']['show']):

            for ($this->_sections['jeweller']['index'] = $this->_sections['jeweller']['start'], $this->_sections['jeweller']['iteration'] = 1;
                 $this->_sections['jeweller']['iteration'] <= $this->_sections['jeweller']['total'];
                 $this->_sections['jeweller']['index'] += $this->_sections['jeweller']['step'], $this->_sections['jeweller']['iteration']++):
$this->_sections['jeweller']['rownum'] = $this->_sections['jeweller']['iteration'];
$this->_sections['jeweller']['index_prev'] = $this->_sections['jeweller']['index'] - $this->_sections['jeweller']['step'];
$this->_sections['jeweller']['index_next'] = $this->_sections['jeweller']['index'] + $this->_sections['jeweller']['step'];
$this->_sections['jeweller']['first']      = ($this->_sections['jeweller']['iteration'] == 1);
$this->_sections['jeweller']['last']       = ($this->_sections['jeweller']['iteration'] == $this->_sections['jeweller']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Rname'][$this->_sections['jeweller']['index']];  echo '</td><td align="center">20</td><td align="center">';  echo $this->_tpl_vars['Ramount'][$this->_sections['jeweller']['index']];  echo '</td><td align="center">50000</td><td align="center"><a href="salerozpaczy1.php?buy=';  echo $this->_tpl_vars['Rid'][$this->_sections['jeweller']['index']];  echo '">';  echo $this->_tpl_vars['Abuy'];  echo '</td></tr>';  endfor; endif;  echo '</table><br /><br />';  echo $this->_tpl_vars['Message'];  echo ''; ?>
</b>