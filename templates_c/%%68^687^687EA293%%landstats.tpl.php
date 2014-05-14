<?php /* Smarty version 2.6.16, created on 2012-10-10 03:57:14
         compiled from landstats.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'landstats.tpl', 2, false),array('modifier', 'string_format', 'landstats.tpl', 20, false),array('function', 'cycle', 'landstats.tpl', 16, false),)), $this); ?>
<?php echo '<p>';  echo @LNEXT;  echo ' <b>';  echo ((is_array($_tmp=time()+3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  echo '</b></p><p>';  echo @LPOPULATION;  echo ' ';  echo $this->_tpl_vars['Players'];  echo '</p><p>';  echo @LDISTRIBUTION;  echo '</p><ul>';  unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['Desc']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
 echo '<li>';  echo $this->_tpl_vars['Desc'][$this->_sections['k']['index']];  echo '</li><table style="border: 1px solid #636f6b;" cellspacing="0" cellpadding="2"><tr><th>';  echo @LCOUNTER;  echo '</th><th width="160px;">';  echo $this->_tpl_vars['Tables'][$this->_sections['k']['index']];  echo '</th><th>';  echo @LAMOUNT;  echo '</th><th>';  echo @LPERCENTAGE;  echo '</th></tr>';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Stats'][$this->_sections['k']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<tr class="';  echo smarty_function_cycle(array('values' => "mon1,mon2"), $this); echo '"><td>';  echo $this->_sections['i']['iteration'];  echo '.</td><td>';  echo $this->_tpl_vars['Stats'][$this->_sections['k']['index']][$this->_sections['i']['index']][0];  echo '</td><td style="text-align:right">';  echo $this->_tpl_vars['Stats'][$this->_sections['k']['index']][$this->_sections['i']['index']][1];  echo '</td><td style="text-align:right">';  echo ((is_array($_tmp=$this->_tpl_vars['Stats'][$this->_sections['k']['index']][$this->_sections['i']['index']][2])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f"));  echo '</td></tr>';  endfor; endif;  echo '</table><br />';  endfor; endif;  echo '</ul>'; ?>

<br><br>