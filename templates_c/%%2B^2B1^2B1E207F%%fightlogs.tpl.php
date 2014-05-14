<?php /* Smarty version 2.6.16, created on 2012-10-06 13:25:12
         compiled from fightlogs.tpl */ ?>
<?php echo '<p>';  echo $this->_tpl_vars['Tinfo'];  echo '</p><br />';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arrText']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
 echo '';  if ($this->_tpl_vars['arrText'][$this->_sections['i']['index']] != ''):  echo '<b>';  echo $this->_sections['i']['iteration'];  echo '</b> ';  echo $this->_tpl_vars['arrDate'][$this->_sections['i']['index']];  echo ' ';  echo $this->_tpl_vars['arrText'][$this->_sections['i']['index']];  echo '<br/>';  if ($this->_sections['i']['last']):  echo '';  elseif ($this->_sections['i']['iteration'] % 10 == 0):  echo '<br />';  endif;  echo '';  endif;  echo '';  endfor; endif;  echo ''; ?>