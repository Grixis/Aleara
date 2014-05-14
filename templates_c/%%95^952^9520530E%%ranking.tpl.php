<?php /* Smarty version 2.6.16, created on 2012-10-19 09:49:09
         compiled from ranking.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'ranking.tpl', 3, false),array('modifier', 'string_format', 'ranking.tpl', 17, false),)), $this); ?>
<center><IMG SRC="images/locations/ranking.png">
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '<p>';  echo @RNEXT;  echo ' <b>';  echo ((is_array($_tmp=time()+3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  echo '</b></p><br /><table style="border: 1px solid #636f6b;" cellspacing="0" cellpadding="2"><tr><th>';  echo @RCOUNTER;  echo '</th><th width="150px;">';  echo @RPLAYER;  echo '</th><th>';  echo @RLEVEL;  echo '</th><th>';  echo @RPOINTS;  echo '</th></tr>';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arrStats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<tr ';  if ($this->_sections['i']['iteration'] < 4):  echo 'bgcolor="#003333"';  endif;  echo '><td>';  echo $this->_sections['i']['iteration'];  echo '.</td><td><a href="view.php?view=';  echo $this->_tpl_vars['arrStats'][$this->_sections['i']['index']][0];  echo '">';  echo $this->_tpl_vars['arrStats'][$this->_sections['i']['index']][1];  echo '</a> (';  echo $this->_tpl_vars['arrStats'][$this->_sections['i']['index']][0];  echo ')</td><td style="text-align:right">';  echo $this->_tpl_vars['arrStats'][$this->_sections['i']['index']][2];  echo '</td><td style="text-align:right"><span style="color: orange;">';  echo ((is_array($_tmp=$this->_tpl_vars['arrStats'][$this->_sections['i']['index']][3])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f"));  echo '</span></td></tr>';  endfor; endif;  echo '</table>'; ?>
</center>