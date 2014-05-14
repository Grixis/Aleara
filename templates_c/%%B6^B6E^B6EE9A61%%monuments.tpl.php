<?php /* Smarty version 2.6.16, created on 2012-10-06 01:00:06
         compiled from monuments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'monuments.tpl', 11, false),array('function', 'cycle', 'monuments.tpl', 39, false),)), $this); ?>
<center><IMG SRC="images/locations/posagichwaly.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  echo '';  echo '<div style="margin: 0 auto; width: 50%"><a name="toc" /></div><br /><p>';  echo @GEN_TIME;  echo ' <b>';  echo ((is_array($_tmp=time()+3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  echo '</b></p><br />';  echo '';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Titles']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<hr /><h4 align="center"><a name="group';  echo $this->_sections['i']['index'];  echo '" href="#toc">';  echo $this->_tpl_vars['Groups'][$this->_sections['i']['index']];  echo '</a></h4>';  echo '';  echo '<table align="center"><tr>';  unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['Titles'][$this->_sections['i']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
 echo '';  if ($this->_sections['j']['last'] && ( $this->_sections['j']['iteration'] % 2 == 1 )):  echo '';  echo '<td colspan="2" align="center">';  else:  echo '<td align="center">';  endif;  echo '';  echo '<fieldset style="width: 245px;"><legend align="center" class="monlegend">';  echo $this->_tpl_vars['Titles'][$this->_sections['i']['index']][$this->_sections['j']['index']];  echo '</legend><table width="245"><tr><td class="montitle">';  echo @M_NAME;  echo '</td><td class="montitle">';  echo $this->_tpl_vars['Descriptions'][$this->_sections['i']['index']][$this->_sections['j']['index']];  echo '</td></tr>';  unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['Monuments'][$this->_sections['i']['index']][$this->_sections['j']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<tr class="';  echo smarty_function_cycle(array('values' => "mon1,mon2"), $this); echo '"><td style="width: 70%;">&raquo; <a href="view.php?view=';  echo $this->_tpl_vars['Monuments'][$this->_sections['i']['index']][$this->_sections['j']['index']][$this->_sections['k']['index']][0];  echo '">';  echo $this->_tpl_vars['Monuments'][$this->_sections['i']['index']][$this->_sections['j']['index']][$this->_sections['k']['index']][1];  echo '</a> (';  echo $this->_tpl_vars['Monuments'][$this->_sections['i']['index']][$this->_sections['j']['index']][$this->_sections['k']['index']][0];  echo ')</td><td align="right">';  echo $this->_tpl_vars['Monuments'][$this->_sections['i']['index']][$this->_sections['j']['index']][$this->_sections['k']['index']][2];  echo '</td></tr>';  endfor; endif;  echo '</table></fieldset>';  echo '</td>';  echo '';  if (! $this->_sections['j']['last']):  echo '';  if (! ( $this->_sections['j']['rownum'] % 2 )):  echo '</tr><tr>';  endif;  echo '';  else:  echo '</tr>';  endif;  echo '';  endfor; endif;  echo '</table>';  endfor; endif;  echo ''; ?>
<br><br>
 <center>
    <p><a href="ranking.php"><?php echo @A_PLAYER_RANKING; ?>
</a></p>
	  <p><a href="landstats.php"><?php echo @A_LAND_STATS; ?>
</a></p>
	</center>  <br><br>