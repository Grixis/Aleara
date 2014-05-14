<?php /* Smarty version 2.6.16, created on 2013-04-13 17:01:49
         compiled from equip_query2.tpl */ ?>
<?php if ($this->_tpl_vars['Show'] == 'weapons'): ?>
<?php unset($this->_sections['weap']);
$this->_sections['weap']['name'] = 'weap';
$this->_sections['weap']['loop'] = is_array($_loop=$this->_tpl_vars['Id']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['weap']['show'] = true;
$this->_sections['weap']['max'] = $this->_sections['weap']['loop'];
$this->_sections['weap']['step'] = 1;
$this->_sections['weap']['start'] = $this->_sections['weap']['step'] > 0 ? 0 : $this->_sections['weap']['loop']-1;
if ($this->_sections['weap']['show']) {
    $this->_sections['weap']['total'] = $this->_sections['weap']['loop'];
    if ($this->_sections['weap']['total'] == 0)
        $this->_sections['weap']['show'] = false;
} else
    $this->_sections['weap']['total'] = 0;
if ($this->_sections['weap']['show']):

            for ($this->_sections['weap']['index'] = $this->_sections['weap']['start'], $this->_sections['weap']['iteration'] = 1;
                 $this->_sections['weap']['iteration'] <= $this->_sections['weap']['total'];
                 $this->_sections['weap']['index'] += $this->_sections['weap']['step'], $this->_sections['weap']['iteration']++):
$this->_sections['weap']['rownum'] = $this->_sections['weap']['iteration'];
$this->_sections['weap']['index_prev'] = $this->_sections['weap']['index'] - $this->_sections['weap']['step'];
$this->_sections['weap']['index_next'] = $this->_sections['weap']['index'] + $this->_sections['weap']['step'];
$this->_sections['weap']['first']      = ($this->_sections['weap']['iteration'] == 1);
$this->_sections['weap']['last']       = ($this->_sections['weap']['iteration'] == $this->_sections['weap']['total']);
?>
    Id:<?php echo $this->_tpl_vars['Id'][$this->_sections['weap']['index']]; ?>
 <?php echo $this->_tpl_vars['Name'][$this->_sections['weap']['index']]; ?>
 (+<?php echo $this->_tpl_vars['Power'][$this->_sections['weap']['index']]; ?>
)<br> 
<?php endfor; endif; ?>
<?php endif; ?>