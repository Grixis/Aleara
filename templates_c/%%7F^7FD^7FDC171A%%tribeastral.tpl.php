<?php /* Smarty version 2.6.16, created on 2013-01-17 19:28:37
         compiled from tribeastral.tpl */ ?>
<center><IMG SRC="images/locations/gmachgildii.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tribemenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  if ($this->_tpl_vars['Action'] == ""):  echo '';  echo $this->_tpl_vars['Wareinfo'];  echo '<br /><ul><li><a href="tribeastral.php?action=view&amp;type=p">';  echo $this->_tpl_vars['Ashow'];  echo '</a></li><li><a href="tribeastral.php?action=view&amp;type=c">';  echo $this->_tpl_vars['Ashow2'];  echo '</a></li><li><a href="tribeastral.php?action=add">';  echo $this->_tpl_vars['Aadd'];  echo '</a></li>';  if ($this->_tpl_vars['Agive'] != ""):  echo '<li><a href="tribeastral.php?action=give">';  echo $this->_tpl_vars['Agive'];  echo '</a></li>';  endif;  echo '';  if ($this->_tpl_vars['Safebox'] != ""):  echo '<li>';  echo $this->_tpl_vars['Safebox'];  echo '</li>';  endif;  echo '</ul>';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'view'):  echo '';  echo $this->_tpl_vars['Message'];  echo '';  if ($this->_tpl_vars['Type'] == 'p'):  echo '<table align="center" width="100%"><tr><td width="40%"><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td>';  unset($this->_sections['astral']);
$this->_sections['astral']['name'] = 'astral';
$this->_sections['astral']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral']['start'] = (int)1;
$this->_sections['astral']['show'] = true;
$this->_sections['astral']['max'] = $this->_sections['astral']['loop'];
$this->_sections['astral']['step'] = 1;
if ($this->_sections['astral']['start'] < 0)
    $this->_sections['astral']['start'] = max($this->_sections['astral']['step'] > 0 ? 0 : -1, $this->_sections['astral']['loop'] + $this->_sections['astral']['start']);
else
    $this->_sections['astral']['start'] = min($this->_sections['astral']['start'], $this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] : $this->_sections['astral']['loop']-1);
if ($this->_sections['astral']['show']) {
    $this->_sections['astral']['total'] = min(ceil(($this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] - $this->_sections['astral']['start'] : $this->_sections['astral']['start']+1)/abs($this->_sections['astral']['step'])), $this->_sections['astral']['max']);
    if ($this->_sections['astral']['total'] == 0)
        $this->_sections['astral']['show'] = false;
} else
    $this->_sections['astral']['total'] = 0;
if ($this->_sections['astral']['show']):

            for ($this->_sections['astral']['index'] = $this->_sections['astral']['start'], $this->_sections['astral']['iteration'] = 1;
                 $this->_sections['astral']['iteration'] <= $this->_sections['astral']['total'];
                 $this->_sections['astral']['index'] += $this->_sections['astral']['step'], $this->_sections['astral']['iteration']++):
$this->_sections['astral']['rownum'] = $this->_sections['astral']['iteration'];
$this->_sections['astral']['index_prev'] = $this->_sections['astral']['index'] - $this->_sections['astral']['step'];
$this->_sections['astral']['index_next'] = $this->_sections['astral']['index'] + $this->_sections['astral']['step'];
$this->_sections['astral']['first']      = ($this->_sections['astral']['iteration'] == 1);
$this->_sections['astral']['last']       = ($this->_sections['astral']['iteration'] == $this->_sections['astral']['total']);
 echo '<td align="center" width="4%"><b><u>';  echo $this->_sections['astral']['index'];  echo '</u></b></td>';  endfor; endif;  echo '</tr><tr><td colspan="17">';  echo $this->_tpl_vars['Tmaps'];  echo '</td></tr>';  unset($this->_sections['astral2']);
$this->_sections['astral2']['name'] = 'astral2';
$this->_sections['astral2']['loop'] = is_array($_loop=$this->_tpl_vars['Mapsname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral2']['show'] = true;
$this->_sections['astral2']['max'] = $this->_sections['astral2']['loop'];
$this->_sections['astral2']['step'] = 1;
$this->_sections['astral2']['start'] = $this->_sections['astral2']['step'] > 0 ? 0 : $this->_sections['astral2']['loop']-1;
if ($this->_sections['astral2']['show']) {
    $this->_sections['astral2']['total'] = $this->_sections['astral2']['loop'];
    if ($this->_sections['astral2']['total'] == 0)
        $this->_sections['astral2']['show'] = false;
} else
    $this->_sections['astral2']['total'] = 0;
if ($this->_sections['astral2']['show']):

            for ($this->_sections['astral2']['index'] = $this->_sections['astral2']['start'], $this->_sections['astral2']['iteration'] = 1;
                 $this->_sections['astral2']['iteration'] <= $this->_sections['astral2']['total'];
                 $this->_sections['astral2']['index'] += $this->_sections['astral2']['step'], $this->_sections['astral2']['iteration']++):
$this->_sections['astral2']['rownum'] = $this->_sections['astral2']['iteration'];
$this->_sections['astral2']['index_prev'] = $this->_sections['astral2']['index'] - $this->_sections['astral2']['step'];
$this->_sections['astral2']['index_next'] = $this->_sections['astral2']['index'] + $this->_sections['astral2']['step'];
$this->_sections['astral2']['first']      = ($this->_sections['astral2']['iteration'] == 1);
$this->_sections['astral2']['last']       = ($this->_sections['astral2']['iteration'] == $this->_sections['astral2']['total']);
 echo '<tr><td>&nbsp;&nbsp;&nbsp;';  echo $this->_tpl_vars['Mapsname'][$this->_sections['astral2']['index']];  echo '</td>';  unset($this->_sections['astral3']);
$this->_sections['astral3']['name'] = 'astral3';
$this->_sections['astral3']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral3']['start'] = (int)0;
$this->_sections['astral3']['show'] = true;
$this->_sections['astral3']['max'] = $this->_sections['astral3']['loop'];
$this->_sections['astral3']['step'] = 1;
if ($this->_sections['astral3']['start'] < 0)
    $this->_sections['astral3']['start'] = max($this->_sections['astral3']['step'] > 0 ? 0 : -1, $this->_sections['astral3']['loop'] + $this->_sections['astral3']['start']);
else
    $this->_sections['astral3']['start'] = min($this->_sections['astral3']['start'], $this->_sections['astral3']['step'] > 0 ? $this->_sections['astral3']['loop'] : $this->_sections['astral3']['loop']-1);
if ($this->_sections['astral3']['show']) {
    $this->_sections['astral3']['total'] = min(ceil(($this->_sections['astral3']['step'] > 0 ? $this->_sections['astral3']['loop'] - $this->_sections['astral3']['start'] : $this->_sections['astral3']['start']+1)/abs($this->_sections['astral3']['step'])), $this->_sections['astral3']['max']);
    if ($this->_sections['astral3']['total'] == 0)
        $this->_sections['astral3']['show'] = false;
} else
    $this->_sections['astral3']['total'] = 0;
if ($this->_sections['astral3']['show']):

            for ($this->_sections['astral3']['index'] = $this->_sections['astral3']['start'], $this->_sections['astral3']['iteration'] = 1;
                 $this->_sections['astral3']['iteration'] <= $this->_sections['astral3']['total'];
                 $this->_sections['astral3']['index'] += $this->_sections['astral3']['step'], $this->_sections['astral3']['iteration']++):
$this->_sections['astral3']['rownum'] = $this->_sections['astral3']['iteration'];
$this->_sections['astral3']['index_prev'] = $this->_sections['astral3']['index'] - $this->_sections['astral3']['step'];
$this->_sections['astral3']['index_next'] = $this->_sections['astral3']['index'] + $this->_sections['astral3']['step'];
$this->_sections['astral3']['first']      = ($this->_sections['astral3']['iteration'] == 1);
$this->_sections['astral3']['last']       = ($this->_sections['astral3']['iteration'] == $this->_sections['astral3']['total']);
 echo '<td align="center">';  echo $this->_tpl_vars['Mapsamount'][$this->_sections['astral2']['index']][$this->_sections['astral3']['index']];  echo '</td>';  endfor; endif;  echo '<td colspan="10"></td></tr>';  endfor; endif;  echo '<tr><td colspan="17"><hr /></td></tr><tr><td width="40%"><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td>';  unset($this->_sections['astral']);
$this->_sections['astral']['name'] = 'astral';
$this->_sections['astral']['loop'] = is_array($_loop=16) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral']['start'] = (int)1;
$this->_sections['astral']['show'] = true;
$this->_sections['astral']['max'] = $this->_sections['astral']['loop'];
$this->_sections['astral']['step'] = 1;
if ($this->_sections['astral']['start'] < 0)
    $this->_sections['astral']['start'] = max($this->_sections['astral']['step'] > 0 ? 0 : -1, $this->_sections['astral']['loop'] + $this->_sections['astral']['start']);
else
    $this->_sections['astral']['start'] = min($this->_sections['astral']['start'], $this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] : $this->_sections['astral']['loop']-1);
if ($this->_sections['astral']['show']) {
    $this->_sections['astral']['total'] = min(ceil(($this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] - $this->_sections['astral']['start'] : $this->_sections['astral']['start']+1)/abs($this->_sections['astral']['step'])), $this->_sections['astral']['max']);
    if ($this->_sections['astral']['total'] == 0)
        $this->_sections['astral']['show'] = false;
} else
    $this->_sections['astral']['total'] = 0;
if ($this->_sections['astral']['show']):

            for ($this->_sections['astral']['index'] = $this->_sections['astral']['start'], $this->_sections['astral']['iteration'] = 1;
                 $this->_sections['astral']['iteration'] <= $this->_sections['astral']['total'];
                 $this->_sections['astral']['index'] += $this->_sections['astral']['step'], $this->_sections['astral']['iteration']++):
$this->_sections['astral']['rownum'] = $this->_sections['astral']['iteration'];
$this->_sections['astral']['index_prev'] = $this->_sections['astral']['index'] - $this->_sections['astral']['step'];
$this->_sections['astral']['index_next'] = $this->_sections['astral']['index'] + $this->_sections['astral']['step'];
$this->_sections['astral']['first']      = ($this->_sections['astral']['iteration'] == 1);
$this->_sections['astral']['last']       = ($this->_sections['astral']['iteration'] == $this->_sections['astral']['total']);
 echo '<td align="center" width="4%"><b><u>';  echo $this->_sections['astral']['index'];  echo '</u></b></td>';  endfor; endif;  echo '</tr><tr><td colspan="17">';  echo $this->_tpl_vars['Tplans'];  echo '</td></tr>';  unset($this->_sections['astral4']);
$this->_sections['astral4']['name'] = 'astral4';
$this->_sections['astral4']['loop'] = is_array($_loop=$this->_tpl_vars['Plansname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral4']['show'] = true;
$this->_sections['astral4']['max'] = $this->_sections['astral4']['loop'];
$this->_sections['astral4']['step'] = 1;
$this->_sections['astral4']['start'] = $this->_sections['astral4']['step'] > 0 ? 0 : $this->_sections['astral4']['loop']-1;
if ($this->_sections['astral4']['show']) {
    $this->_sections['astral4']['total'] = $this->_sections['astral4']['loop'];
    if ($this->_sections['astral4']['total'] == 0)
        $this->_sections['astral4']['show'] = false;
} else
    $this->_sections['astral4']['total'] = 0;
if ($this->_sections['astral4']['show']):

            for ($this->_sections['astral4']['index'] = $this->_sections['astral4']['start'], $this->_sections['astral4']['iteration'] = 1;
                 $this->_sections['astral4']['iteration'] <= $this->_sections['astral4']['total'];
                 $this->_sections['astral4']['index'] += $this->_sections['astral4']['step'], $this->_sections['astral4']['iteration']++):
$this->_sections['astral4']['rownum'] = $this->_sections['astral4']['iteration'];
$this->_sections['astral4']['index_prev'] = $this->_sections['astral4']['index'] - $this->_sections['astral4']['step'];
$this->_sections['astral4']['index_next'] = $this->_sections['astral4']['index'] + $this->_sections['astral4']['step'];
$this->_sections['astral4']['first']      = ($this->_sections['astral4']['iteration'] == 1);
$this->_sections['astral4']['last']       = ($this->_sections['astral4']['iteration'] == $this->_sections['astral4']['total']);
 echo '<tr><td>&nbsp;&nbsp;&nbsp;';  echo $this->_tpl_vars['Plansname'][$this->_sections['astral4']['index']];  echo '</td>';  unset($this->_sections['astral5']);
$this->_sections['astral5']['name'] = 'astral5';
$this->_sections['astral5']['loop'] = is_array($_loop=15) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral5']['start'] = (int)0;
$this->_sections['astral5']['show'] = true;
$this->_sections['astral5']['max'] = $this->_sections['astral5']['loop'];
$this->_sections['astral5']['step'] = 1;
if ($this->_sections['astral5']['start'] < 0)
    $this->_sections['astral5']['start'] = max($this->_sections['astral5']['step'] > 0 ? 0 : -1, $this->_sections['astral5']['loop'] + $this->_sections['astral5']['start']);
else
    $this->_sections['astral5']['start'] = min($this->_sections['astral5']['start'], $this->_sections['astral5']['step'] > 0 ? $this->_sections['astral5']['loop'] : $this->_sections['astral5']['loop']-1);
if ($this->_sections['astral5']['show']) {
    $this->_sections['astral5']['total'] = min(ceil(($this->_sections['astral5']['step'] > 0 ? $this->_sections['astral5']['loop'] - $this->_sections['astral5']['start'] : $this->_sections['astral5']['start']+1)/abs($this->_sections['astral5']['step'])), $this->_sections['astral5']['max']);
    if ($this->_sections['astral5']['total'] == 0)
        $this->_sections['astral5']['show'] = false;
} else
    $this->_sections['astral5']['total'] = 0;
if ($this->_sections['astral5']['show']):

            for ($this->_sections['astral5']['index'] = $this->_sections['astral5']['start'], $this->_sections['astral5']['iteration'] = 1;
                 $this->_sections['astral5']['iteration'] <= $this->_sections['astral5']['total'];
                 $this->_sections['astral5']['index'] += $this->_sections['astral5']['step'], $this->_sections['astral5']['iteration']++):
$this->_sections['astral5']['rownum'] = $this->_sections['astral5']['iteration'];
$this->_sections['astral5']['index_prev'] = $this->_sections['astral5']['index'] - $this->_sections['astral5']['step'];
$this->_sections['astral5']['index_next'] = $this->_sections['astral5']['index'] + $this->_sections['astral5']['step'];
$this->_sections['astral5']['first']      = ($this->_sections['astral5']['iteration'] == 1);
$this->_sections['astral5']['last']       = ($this->_sections['astral5']['iteration'] == $this->_sections['astral5']['total']);
 echo '<td align="center">';  echo $this->_tpl_vars['Plansamount'][$this->_sections['astral4']['index']][$this->_sections['astral5']['index']];  echo '</td>';  endfor; endif;  echo '</tr>';  endfor; endif;  echo '<tr><td colspan="17"><hr /></td></tr><tr><td><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td>';  unset($this->_sections['astral']);
$this->_sections['astral']['name'] = 'astral';
$this->_sections['astral']['loop'] = is_array($_loop=16) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral']['start'] = (int)1;
$this->_sections['astral']['show'] = true;
$this->_sections['astral']['max'] = $this->_sections['astral']['loop'];
$this->_sections['astral']['step'] = 1;
if ($this->_sections['astral']['start'] < 0)
    $this->_sections['astral']['start'] = max($this->_sections['astral']['step'] > 0 ? 0 : -1, $this->_sections['astral']['loop'] + $this->_sections['astral']['start']);
else
    $this->_sections['astral']['start'] = min($this->_sections['astral']['start'], $this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] : $this->_sections['astral']['loop']-1);
if ($this->_sections['astral']['show']) {
    $this->_sections['astral']['total'] = min(ceil(($this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] - $this->_sections['astral']['start'] : $this->_sections['astral']['start']+1)/abs($this->_sections['astral']['step'])), $this->_sections['astral']['max']);
    if ($this->_sections['astral']['total'] == 0)
        $this->_sections['astral']['show'] = false;
} else
    $this->_sections['astral']['total'] = 0;
if ($this->_sections['astral']['show']):

            for ($this->_sections['astral']['index'] = $this->_sections['astral']['start'], $this->_sections['astral']['iteration'] = 1;
                 $this->_sections['astral']['iteration'] <= $this->_sections['astral']['total'];
                 $this->_sections['astral']['index'] += $this->_sections['astral']['step'], $this->_sections['astral']['iteration']++):
$this->_sections['astral']['rownum'] = $this->_sections['astral']['iteration'];
$this->_sections['astral']['index_prev'] = $this->_sections['astral']['index'] - $this->_sections['astral']['step'];
$this->_sections['astral']['index_next'] = $this->_sections['astral']['index'] + $this->_sections['astral']['step'];
$this->_sections['astral']['first']      = ($this->_sections['astral']['iteration'] == 1);
$this->_sections['astral']['last']       = ($this->_sections['astral']['iteration'] == $this->_sections['astral']['total']);
 echo '<td align="center"><b><u>';  echo $this->_sections['astral']['index'];  echo '</u></b></td>';  endfor; endif;  echo '</tr><tr><td colspan="17">';  echo $this->_tpl_vars['Trecipes'];  echo '</td></tr>';  unset($this->_sections['astral6']);
$this->_sections['astral6']['name'] = 'astral6';
$this->_sections['astral6']['loop'] = is_array($_loop=$this->_tpl_vars['Recipesname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral6']['show'] = true;
$this->_sections['astral6']['max'] = $this->_sections['astral6']['loop'];
$this->_sections['astral6']['step'] = 1;
$this->_sections['astral6']['start'] = $this->_sections['astral6']['step'] > 0 ? 0 : $this->_sections['astral6']['loop']-1;
if ($this->_sections['astral6']['show']) {
    $this->_sections['astral6']['total'] = $this->_sections['astral6']['loop'];
    if ($this->_sections['astral6']['total'] == 0)
        $this->_sections['astral6']['show'] = false;
} else
    $this->_sections['astral6']['total'] = 0;
if ($this->_sections['astral6']['show']):

            for ($this->_sections['astral6']['index'] = $this->_sections['astral6']['start'], $this->_sections['astral6']['iteration'] = 1;
                 $this->_sections['astral6']['iteration'] <= $this->_sections['astral6']['total'];
                 $this->_sections['astral6']['index'] += $this->_sections['astral6']['step'], $this->_sections['astral6']['iteration']++):
$this->_sections['astral6']['rownum'] = $this->_sections['astral6']['iteration'];
$this->_sections['astral6']['index_prev'] = $this->_sections['astral6']['index'] - $this->_sections['astral6']['step'];
$this->_sections['astral6']['index_next'] = $this->_sections['astral6']['index'] + $this->_sections['astral6']['step'];
$this->_sections['astral6']['first']      = ($this->_sections['astral6']['iteration'] == 1);
$this->_sections['astral6']['last']       = ($this->_sections['astral6']['iteration'] == $this->_sections['astral6']['total']);
 echo '<tr><td>&nbsp;&nbsp;&nbsp;';  echo $this->_tpl_vars['Recipesname'][$this->_sections['astral6']['index']];  echo '</td>';  unset($this->_sections['astral7']);
$this->_sections['astral7']['name'] = 'astral7';
$this->_sections['astral7']['loop'] = is_array($_loop=15) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral7']['start'] = (int)0;
$this->_sections['astral7']['show'] = true;
$this->_sections['astral7']['max'] = $this->_sections['astral7']['loop'];
$this->_sections['astral7']['step'] = 1;
if ($this->_sections['astral7']['start'] < 0)
    $this->_sections['astral7']['start'] = max($this->_sections['astral7']['step'] > 0 ? 0 : -1, $this->_sections['astral7']['loop'] + $this->_sections['astral7']['start']);
else
    $this->_sections['astral7']['start'] = min($this->_sections['astral7']['start'], $this->_sections['astral7']['step'] > 0 ? $this->_sections['astral7']['loop'] : $this->_sections['astral7']['loop']-1);
if ($this->_sections['astral7']['show']) {
    $this->_sections['astral7']['total'] = min(ceil(($this->_sections['astral7']['step'] > 0 ? $this->_sections['astral7']['loop'] - $this->_sections['astral7']['start'] : $this->_sections['astral7']['start']+1)/abs($this->_sections['astral7']['step'])), $this->_sections['astral7']['max']);
    if ($this->_sections['astral7']['total'] == 0)
        $this->_sections['astral7']['show'] = false;
} else
    $this->_sections['astral7']['total'] = 0;
if ($this->_sections['astral7']['show']):

            for ($this->_sections['astral7']['index'] = $this->_sections['astral7']['start'], $this->_sections['astral7']['iteration'] = 1;
                 $this->_sections['astral7']['iteration'] <= $this->_sections['astral7']['total'];
                 $this->_sections['astral7']['index'] += $this->_sections['astral7']['step'], $this->_sections['astral7']['iteration']++):
$this->_sections['astral7']['rownum'] = $this->_sections['astral7']['iteration'];
$this->_sections['astral7']['index_prev'] = $this->_sections['astral7']['index'] - $this->_sections['astral7']['step'];
$this->_sections['astral7']['index_next'] = $this->_sections['astral7']['index'] + $this->_sections['astral7']['step'];
$this->_sections['astral7']['first']      = ($this->_sections['astral7']['iteration'] == 1);
$this->_sections['astral7']['last']       = ($this->_sections['astral7']['iteration'] == $this->_sections['astral7']['total']);
 echo '<td align="center">';  echo $this->_tpl_vars['Recipesamount'][$this->_sections['astral6']['index']][$this->_sections['astral7']['index']];  echo '</td>';  endfor; endif;  echo '</tr>';  endfor; endif;  echo '<tr><td colspan="17"><hr /></td></tr><tr><td><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td>';  unset($this->_sections['astral']);
$this->_sections['astral']['name'] = 'astral';
$this->_sections['astral']['loop'] = is_array($_loop=1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral']['start'] = (int)1;
$this->_sections['astral']['show'] = true;
$this->_sections['astral']['max'] = $this->_sections['astral']['loop'];
$this->_sections['astral']['step'] = 1;
if ($this->_sections['astral']['start'] < 0)
    $this->_sections['astral']['start'] = max($this->_sections['astral']['step'] > 0 ? 0 : -1, $this->_sections['astral']['loop'] + $this->_sections['astral']['start']);
else
    $this->_sections['astral']['start'] = min($this->_sections['astral']['start'], $this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] : $this->_sections['astral']['loop']-1);
if ($this->_sections['astral']['show']) {
    $this->_sections['astral']['total'] = min(ceil(($this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] - $this->_sections['astral']['start'] : $this->_sections['astral']['start']+1)/abs($this->_sections['astral']['step'])), $this->_sections['astral']['max']);
    if ($this->_sections['astral']['total'] == 0)
        $this->_sections['astral']['show'] = false;
} else
    $this->_sections['astral']['total'] = 0;
if ($this->_sections['astral']['show']):

            for ($this->_sections['astral']['index'] = $this->_sections['astral']['start'], $this->_sections['astral']['iteration'] = 1;
                 $this->_sections['astral']['iteration'] <= $this->_sections['astral']['total'];
                 $this->_sections['astral']['index'] += $this->_sections['astral']['step'], $this->_sections['astral']['iteration']++):
$this->_sections['astral']['rownum'] = $this->_sections['astral']['iteration'];
$this->_sections['astral']['index_prev'] = $this->_sections['astral']['index'] - $this->_sections['astral']['step'];
$this->_sections['astral']['index_next'] = $this->_sections['astral']['index'] + $this->_sections['astral']['step'];
$this->_sections['astral']['first']      = ($this->_sections['astral']['iteration'] == 1);
$this->_sections['astral']['last']       = ($this->_sections['astral']['iteration'] == $this->_sections['astral']['total']);
 echo '<td align="center"><b><u>';  echo $this->_sections['astral']['index'];  echo '</u></b></td>';  endfor; endif;  echo '</tr><tr><td colspan="17">';  echo $this->_tpl_vars['Tformulas'];  echo '</td></tr>';  unset($this->_sections['astral101']);
$this->_sections['astral101']['name'] = 'astral101';
$this->_sections['astral101']['loop'] = is_array($_loop=$this->_tpl_vars['Formulasname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral101']['show'] = true;
$this->_sections['astral101']['max'] = $this->_sections['astral101']['loop'];
$this->_sections['astral101']['step'] = 1;
$this->_sections['astral101']['start'] = $this->_sections['astral101']['step'] > 0 ? 0 : $this->_sections['astral101']['loop']-1;
if ($this->_sections['astral101']['show']) {
    $this->_sections['astral101']['total'] = $this->_sections['astral101']['loop'];
    if ($this->_sections['astral101']['total'] == 0)
        $this->_sections['astral101']['show'] = false;
} else
    $this->_sections['astral101']['total'] = 0;
if ($this->_sections['astral101']['show']):

            for ($this->_sections['astral101']['index'] = $this->_sections['astral101']['start'], $this->_sections['astral101']['iteration'] = 1;
                 $this->_sections['astral101']['iteration'] <= $this->_sections['astral101']['total'];
                 $this->_sections['astral101']['index'] += $this->_sections['astral101']['step'], $this->_sections['astral101']['iteration']++):
$this->_sections['astral101']['rownum'] = $this->_sections['astral101']['iteration'];
$this->_sections['astral101']['index_prev'] = $this->_sections['astral101']['index'] - $this->_sections['astral101']['step'];
$this->_sections['astral101']['index_next'] = $this->_sections['astral101']['index'] + $this->_sections['astral101']['step'];
$this->_sections['astral101']['first']      = ($this->_sections['astral101']['iteration'] == 1);
$this->_sections['astral101']['last']       = ($this->_sections['astral101']['iteration'] == $this->_sections['astral101']['total']);
 echo '<tr><td>&nbsp;&nbsp;&nbsp;';  echo $this->_tpl_vars['Formulasname'][$this->_sections['astral101']['index']];  echo '</td>';  unset($this->_sections['astral102']);
$this->_sections['astral102']['name'] = 'astral102';
$this->_sections['astral102']['loop'] = is_array($_loop=15) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral102']['start'] = (int)0;
$this->_sections['astral102']['show'] = true;
$this->_sections['astral102']['max'] = $this->_sections['astral102']['loop'];
$this->_sections['astral102']['step'] = 1;
if ($this->_sections['astral102']['start'] < 0)
    $this->_sections['astral102']['start'] = max($this->_sections['astral102']['step'] > 0 ? 0 : -1, $this->_sections['astral102']['loop'] + $this->_sections['astral102']['start']);
else
    $this->_sections['astral102']['start'] = min($this->_sections['astral102']['start'], $this->_sections['astral102']['step'] > 0 ? $this->_sections['astral102']['loop'] : $this->_sections['astral102']['loop']-1);
if ($this->_sections['astral102']['show']) {
    $this->_sections['astral102']['total'] = min(ceil(($this->_sections['astral102']['step'] > 0 ? $this->_sections['astral102']['loop'] - $this->_sections['astral102']['start'] : $this->_sections['astral102']['start']+1)/abs($this->_sections['astral102']['step'])), $this->_sections['astral102']['max']);
    if ($this->_sections['astral102']['total'] == 0)
        $this->_sections['astral102']['show'] = false;
} else
    $this->_sections['astral102']['total'] = 0;
if ($this->_sections['astral102']['show']):

            for ($this->_sections['astral102']['index'] = $this->_sections['astral102']['start'], $this->_sections['astral102']['iteration'] = 1;
                 $this->_sections['astral102']['iteration'] <= $this->_sections['astral102']['total'];
                 $this->_sections['astral102']['index'] += $this->_sections['astral102']['step'], $this->_sections['astral102']['iteration']++):
$this->_sections['astral102']['rownum'] = $this->_sections['astral102']['iteration'];
$this->_sections['astral102']['index_prev'] = $this->_sections['astral102']['index'] - $this->_sections['astral102']['step'];
$this->_sections['astral102']['index_next'] = $this->_sections['astral102']['index'] + $this->_sections['astral102']['step'];
$this->_sections['astral102']['first']      = ($this->_sections['astral102']['iteration'] == 1);
$this->_sections['astral102']['last']       = ($this->_sections['astral102']['iteration'] == $this->_sections['astral102']['total']);
 echo '<td align="center">';  echo $this->_tpl_vars['Formulasamount'][$this->_sections['astral101']['index']][$this->_sections['astral102']['index']];  echo '</td>';  endfor; endif;  echo '</tr>';  endfor; endif;  echo '<tr><td colspan="17"><hr /></td></tr><tr><td colspan="17">';  echo $this->_tpl_vars['Tmaps2'];  echo '</td></tr>';  unset($this->_sections['astral8']);
$this->_sections['astral8']['name'] = 'astral8';
$this->_sections['astral8']['loop'] = is_array($_loop=$this->_tpl_vars['Mapsname2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral8']['show'] = true;
$this->_sections['astral8']['max'] = $this->_sections['astral8']['loop'];
$this->_sections['astral8']['step'] = 1;
$this->_sections['astral8']['start'] = $this->_sections['astral8']['step'] > 0 ? 0 : $this->_sections['astral8']['loop']-1;
if ($this->_sections['astral8']['show']) {
    $this->_sections['astral8']['total'] = $this->_sections['astral8']['loop'];
    if ($this->_sections['astral8']['total'] == 0)
        $this->_sections['astral8']['show'] = false;
} else
    $this->_sections['astral8']['total'] = 0;
if ($this->_sections['astral8']['show']):

            for ($this->_sections['astral8']['index'] = $this->_sections['astral8']['start'], $this->_sections['astral8']['iteration'] = 1;
                 $this->_sections['astral8']['iteration'] <= $this->_sections['astral8']['total'];
                 $this->_sections['astral8']['index'] += $this->_sections['astral8']['step'], $this->_sections['astral8']['iteration']++):
$this->_sections['astral8']['rownum'] = $this->_sections['astral8']['iteration'];
$this->_sections['astral8']['index_prev'] = $this->_sections['astral8']['index'] - $this->_sections['astral8']['step'];
$this->_sections['astral8']['index_next'] = $this->_sections['astral8']['index'] + $this->_sections['astral8']['step'];
$this->_sections['astral8']['first']      = ($this->_sections['astral8']['iteration'] == 1);
$this->_sections['astral8']['last']       = ($this->_sections['astral8']['iteration'] == $this->_sections['astral8']['total']);
 echo '<tr><td>&nbsp;&nbsp;&nbsp;';  echo $this->_tpl_vars['Mapsname2'][$this->_sections['astral8']['index']];  echo '</td><td colspan="15">';  echo $this->_tpl_vars['Mapsamount2'][$this->_sections['astral8']['index']];  echo '</td></tr>';  endfor; endif;  echo '<tr><td colspan="17"><hr /></td></tr><tr><td><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td>';  unset($this->_sections['astral']);
$this->_sections['astral']['name'] = 'astral';
$this->_sections['astral']['loop'] = is_array($_loop=1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral']['start'] = (int)1;
$this->_sections['astral']['show'] = true;
$this->_sections['astral']['max'] = $this->_sections['astral']['loop'];
$this->_sections['astral']['step'] = 1;
if ($this->_sections['astral']['start'] < 0)
    $this->_sections['astral']['start'] = max($this->_sections['astral']['step'] > 0 ? 0 : -1, $this->_sections['astral']['loop'] + $this->_sections['astral']['start']);
else
    $this->_sections['astral']['start'] = min($this->_sections['astral']['start'], $this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] : $this->_sections['astral']['loop']-1);
if ($this->_sections['astral']['show']) {
    $this->_sections['astral']['total'] = min(ceil(($this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] - $this->_sections['astral']['start'] : $this->_sections['astral']['start']+1)/abs($this->_sections['astral']['step'])), $this->_sections['astral']['max']);
    if ($this->_sections['astral']['total'] == 0)
        $this->_sections['astral']['show'] = false;
} else
    $this->_sections['astral']['total'] = 0;
if ($this->_sections['astral']['show']):

            for ($this->_sections['astral']['index'] = $this->_sections['astral']['start'], $this->_sections['astral']['iteration'] = 1;
                 $this->_sections['astral']['iteration'] <= $this->_sections['astral']['total'];
                 $this->_sections['astral']['index'] += $this->_sections['astral']['step'], $this->_sections['astral']['iteration']++):
$this->_sections['astral']['rownum'] = $this->_sections['astral']['iteration'];
$this->_sections['astral']['index_prev'] = $this->_sections['astral']['index'] - $this->_sections['astral']['step'];
$this->_sections['astral']['index_next'] = $this->_sections['astral']['index'] + $this->_sections['astral']['step'];
$this->_sections['astral']['first']      = ($this->_sections['astral']['iteration'] == 1);
$this->_sections['astral']['last']       = ($this->_sections['astral']['iteration'] == $this->_sections['astral']['total']);
 echo '<td align="center"><b><u>';  echo $this->_sections['astral']['index'];  echo '</u></b></td>';  endfor; endif;  echo '</tr><tr><td colspan="17">';  echo $this->_tpl_vars['Tplans2'];  echo '</td></tr>';  unset($this->_sections['astral9']);
$this->_sections['astral9']['name'] = 'astral9';
$this->_sections['astral9']['loop'] = is_array($_loop=$this->_tpl_vars['Plansname2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral9']['show'] = true;
$this->_sections['astral9']['max'] = $this->_sections['astral9']['loop'];
$this->_sections['astral9']['step'] = 1;
$this->_sections['astral9']['start'] = $this->_sections['astral9']['step'] > 0 ? 0 : $this->_sections['astral9']['loop']-1;
if ($this->_sections['astral9']['show']) {
    $this->_sections['astral9']['total'] = $this->_sections['astral9']['loop'];
    if ($this->_sections['astral9']['total'] == 0)
        $this->_sections['astral9']['show'] = false;
} else
    $this->_sections['astral9']['total'] = 0;
if ($this->_sections['astral9']['show']):

            for ($this->_sections['astral9']['index'] = $this->_sections['astral9']['start'], $this->_sections['astral9']['iteration'] = 1;
                 $this->_sections['astral9']['iteration'] <= $this->_sections['astral9']['total'];
                 $this->_sections['astral9']['index'] += $this->_sections['astral9']['step'], $this->_sections['astral9']['iteration']++):
$this->_sections['astral9']['rownum'] = $this->_sections['astral9']['iteration'];
$this->_sections['astral9']['index_prev'] = $this->_sections['astral9']['index'] - $this->_sections['astral9']['step'];
$this->_sections['astral9']['index_next'] = $this->_sections['astral9']['index'] + $this->_sections['astral9']['step'];
$this->_sections['astral9']['first']      = ($this->_sections['astral9']['iteration'] == 1);
$this->_sections['astral9']['last']       = ($this->_sections['astral9']['iteration'] == $this->_sections['astral9']['total']);
 echo '<tr><td>&nbsp;&nbsp;&nbsp;';  echo $this->_tpl_vars['Plansname2'][$this->_sections['astral9']['index']];  echo '</td><td colspan="15">';  echo $this->_tpl_vars['Plansamount2'][$this->_sections['astral9']['index']];  echo '</td></tr>';  endfor; endif;  echo '<tr><td colspan="17"><hr /></td></tr><tr><td><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td>';  unset($this->_sections['astral']);
$this->_sections['astral']['name'] = 'astral';
$this->_sections['astral']['loop'] = is_array($_loop=1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral']['start'] = (int)1;
$this->_sections['astral']['show'] = true;
$this->_sections['astral']['max'] = $this->_sections['astral']['loop'];
$this->_sections['astral']['step'] = 1;
if ($this->_sections['astral']['start'] < 0)
    $this->_sections['astral']['start'] = max($this->_sections['astral']['step'] > 0 ? 0 : -1, $this->_sections['astral']['loop'] + $this->_sections['astral']['start']);
else
    $this->_sections['astral']['start'] = min($this->_sections['astral']['start'], $this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] : $this->_sections['astral']['loop']-1);
if ($this->_sections['astral']['show']) {
    $this->_sections['astral']['total'] = min(ceil(($this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] - $this->_sections['astral']['start'] : $this->_sections['astral']['start']+1)/abs($this->_sections['astral']['step'])), $this->_sections['astral']['max']);
    if ($this->_sections['astral']['total'] == 0)
        $this->_sections['astral']['show'] = false;
} else
    $this->_sections['astral']['total'] = 0;
if ($this->_sections['astral']['show']):

            for ($this->_sections['astral']['index'] = $this->_sections['astral']['start'], $this->_sections['astral']['iteration'] = 1;
                 $this->_sections['astral']['iteration'] <= $this->_sections['astral']['total'];
                 $this->_sections['astral']['index'] += $this->_sections['astral']['step'], $this->_sections['astral']['iteration']++):
$this->_sections['astral']['rownum'] = $this->_sections['astral']['iteration'];
$this->_sections['astral']['index_prev'] = $this->_sections['astral']['index'] - $this->_sections['astral']['step'];
$this->_sections['astral']['index_next'] = $this->_sections['astral']['index'] + $this->_sections['astral']['step'];
$this->_sections['astral']['first']      = ($this->_sections['astral']['iteration'] == 1);
$this->_sections['astral']['last']       = ($this->_sections['astral']['iteration'] == $this->_sections['astral']['total']);
 echo '<td align="center"><b><u>';  echo $this->_sections['astral']['index'];  echo '</u></b></td>';  endfor; endif;  echo '</tr><tr><td colspan="17">';  echo $this->_tpl_vars['Trecipes2'];  echo '</td></tr>';  unset($this->_sections['astral10']);
$this->_sections['astral10']['name'] = 'astral10';
$this->_sections['astral10']['loop'] = is_array($_loop=$this->_tpl_vars['Recipesname2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral10']['show'] = true;
$this->_sections['astral10']['max'] = $this->_sections['astral10']['loop'];
$this->_sections['astral10']['step'] = 1;
$this->_sections['astral10']['start'] = $this->_sections['astral10']['step'] > 0 ? 0 : $this->_sections['astral10']['loop']-1;
if ($this->_sections['astral10']['show']) {
    $this->_sections['astral10']['total'] = $this->_sections['astral10']['loop'];
    if ($this->_sections['astral10']['total'] == 0)
        $this->_sections['astral10']['show'] = false;
} else
    $this->_sections['astral10']['total'] = 0;
if ($this->_sections['astral10']['show']):

            for ($this->_sections['astral10']['index'] = $this->_sections['astral10']['start'], $this->_sections['astral10']['iteration'] = 1;
                 $this->_sections['astral10']['iteration'] <= $this->_sections['astral10']['total'];
                 $this->_sections['astral10']['index'] += $this->_sections['astral10']['step'], $this->_sections['astral10']['iteration']++):
$this->_sections['astral10']['rownum'] = $this->_sections['astral10']['iteration'];
$this->_sections['astral10']['index_prev'] = $this->_sections['astral10']['index'] - $this->_sections['astral10']['step'];
$this->_sections['astral10']['index_next'] = $this->_sections['astral10']['index'] + $this->_sections['astral10']['step'];
$this->_sections['astral10']['first']      = ($this->_sections['astral10']['iteration'] == 1);
$this->_sections['astral10']['last']       = ($this->_sections['astral10']['iteration'] == $this->_sections['astral10']['total']);
 echo '<tr><td>&nbsp;&nbsp;&nbsp;';  echo $this->_tpl_vars['Recipesname2'][$this->_sections['astral10']['index']];  echo '</td><td colspan="15">';  echo $this->_tpl_vars['Recipesamount2'][$this->_sections['astral10']['index']];  echo '</td></tr>';  endfor; endif;  echo '<tr><td colspan="17"><hr /></td></tr>';  echo '<tr><td width="40%"><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td>';  unset($this->_sections['astral']);
$this->_sections['astral']['name'] = 'astral';
$this->_sections['astral']['loop'] = is_array($_loop=1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral']['start'] = (int)1;
$this->_sections['astral']['show'] = true;
$this->_sections['astral']['max'] = $this->_sections['astral']['loop'];
$this->_sections['astral']['step'] = 1;
if ($this->_sections['astral']['start'] < 0)
    $this->_sections['astral']['start'] = max($this->_sections['astral']['step'] > 0 ? 0 : -1, $this->_sections['astral']['loop'] + $this->_sections['astral']['start']);
else
    $this->_sections['astral']['start'] = min($this->_sections['astral']['start'], $this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] : $this->_sections['astral']['loop']-1);
if ($this->_sections['astral']['show']) {
    $this->_sections['astral']['total'] = min(ceil(($this->_sections['astral']['step'] > 0 ? $this->_sections['astral']['loop'] - $this->_sections['astral']['start'] : $this->_sections['astral']['start']+1)/abs($this->_sections['astral']['step'])), $this->_sections['astral']['max']);
    if ($this->_sections['astral']['total'] == 0)
        $this->_sections['astral']['show'] = false;
} else
    $this->_sections['astral']['total'] = 0;
if ($this->_sections['astral']['show']):

            for ($this->_sections['astral']['index'] = $this->_sections['astral']['start'], $this->_sections['astral']['iteration'] = 1;
                 $this->_sections['astral']['iteration'] <= $this->_sections['astral']['total'];
                 $this->_sections['astral']['index'] += $this->_sections['astral']['step'], $this->_sections['astral']['iteration']++):
$this->_sections['astral']['rownum'] = $this->_sections['astral']['iteration'];
$this->_sections['astral']['index_prev'] = $this->_sections['astral']['index'] - $this->_sections['astral']['step'];
$this->_sections['astral']['index_next'] = $this->_sections['astral']['index'] + $this->_sections['astral']['step'];
$this->_sections['astral']['first']      = ($this->_sections['astral']['iteration'] == 1);
$this->_sections['astral']['last']       = ($this->_sections['astral']['iteration'] == $this->_sections['astral']['total']);
 echo '<td align="center" width="4%"><b><u>';  echo $this->_sections['astral']['index'];  echo '</u></b></td>';  endfor; endif;  echo '</tr><tr><td colspan="17">';  echo $this->_tpl_vars['Tformulas2'];  echo '</td></tr>';  unset($this->_sections['astral0700']);
$this->_sections['astral0700']['name'] = 'astral0700';
$this->_sections['astral0700']['loop'] = is_array($_loop=$this->_tpl_vars['Formulasname2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral0700']['show'] = true;
$this->_sections['astral0700']['max'] = $this->_sections['astral0700']['loop'];
$this->_sections['astral0700']['step'] = 1;
$this->_sections['astral0700']['start'] = $this->_sections['astral0700']['step'] > 0 ? 0 : $this->_sections['astral0700']['loop']-1;
if ($this->_sections['astral0700']['show']) {
    $this->_sections['astral0700']['total'] = $this->_sections['astral0700']['loop'];
    if ($this->_sections['astral0700']['total'] == 0)
        $this->_sections['astral0700']['show'] = false;
} else
    $this->_sections['astral0700']['total'] = 0;
if ($this->_sections['astral0700']['show']):

            for ($this->_sections['astral0700']['index'] = $this->_sections['astral0700']['start'], $this->_sections['astral0700']['iteration'] = 1;
                 $this->_sections['astral0700']['iteration'] <= $this->_sections['astral0700']['total'];
                 $this->_sections['astral0700']['index'] += $this->_sections['astral0700']['step'], $this->_sections['astral0700']['iteration']++):
$this->_sections['astral0700']['rownum'] = $this->_sections['astral0700']['iteration'];
$this->_sections['astral0700']['index_prev'] = $this->_sections['astral0700']['index'] - $this->_sections['astral0700']['step'];
$this->_sections['astral0700']['index_next'] = $this->_sections['astral0700']['index'] + $this->_sections['astral0700']['step'];
$this->_sections['astral0700']['first']      = ($this->_sections['astral0700']['iteration'] == 1);
$this->_sections['astral0700']['last']       = ($this->_sections['astral0700']['iteration'] == $this->_sections['astral0700']['total']);
 echo '<tr><td>&nbsp;&nbsp;&nbsp;';  echo $this->_tpl_vars['Formulasname2'][$this->_sections['astral0700']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Formulasamount2'][$this->_sections['astral0700']['index']];  echo '</td></tr>';  endfor; endif;  echo '<tr></table>';  endif;  echo '';  if ($this->_tpl_vars['Type'] == 'c'):  echo '<table align="center"><tr><td><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td><td></td></tr>';  unset($this->_sections['comp']);
$this->_sections['comp']['name'] = 'comp';
$this->_sections['comp']['loop'] = is_array($_loop=$this->_tpl_vars['Tmagic']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['comp']['show'] = true;
$this->_sections['comp']['max'] = $this->_sections['comp']['loop'];
$this->_sections['comp']['step'] = 1;
$this->_sections['comp']['start'] = $this->_sections['comp']['step'] > 0 ? 0 : $this->_sections['comp']['loop']-1;
if ($this->_sections['comp']['show']) {
    $this->_sections['comp']['total'] = $this->_sections['comp']['loop'];
    if ($this->_sections['comp']['total'] == 0)
        $this->_sections['comp']['show'] = false;
} else
    $this->_sections['comp']['total'] = 0;
if ($this->_sections['comp']['show']):

            for ($this->_sections['comp']['index'] = $this->_sections['comp']['start'], $this->_sections['comp']['iteration'] = 1;
                 $this->_sections['comp']['iteration'] <= $this->_sections['comp']['total'];
                 $this->_sections['comp']['index'] += $this->_sections['comp']['step'], $this->_sections['comp']['iteration']++):
$this->_sections['comp']['rownum'] = $this->_sections['comp']['iteration'];
$this->_sections['comp']['index_prev'] = $this->_sections['comp']['index'] - $this->_sections['comp']['step'];
$this->_sections['comp']['index_next'] = $this->_sections['comp']['index'] + $this->_sections['comp']['step'];
$this->_sections['comp']['first']      = ($this->_sections['comp']['iteration'] == 1);
$this->_sections['comp']['last']       = ($this->_sections['comp']['iteration'] == $this->_sections['comp']['total']);
 echo '<tr><td colspan="2">';  echo $this->_tpl_vars['Tmagic'][$this->_sections['comp']['index']];  echo '</td></tr>';  unset($this->_sections['comp2']);
$this->_sections['comp2']['name'] = 'comp2';
$this->_sections['comp2']['loop'] = is_array($_loop=$this->_tpl_vars['Tcomp'][$this->_sections['comp']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['comp2']['show'] = true;
$this->_sections['comp2']['max'] = $this->_sections['comp2']['loop'];
$this->_sections['comp2']['step'] = 1;
$this->_sections['comp2']['start'] = $this->_sections['comp2']['step'] > 0 ? 0 : $this->_sections['comp2']['loop']-1;
if ($this->_sections['comp2']['show']) {
    $this->_sections['comp2']['total'] = $this->_sections['comp2']['loop'];
    if ($this->_sections['comp2']['total'] == 0)
        $this->_sections['comp2']['show'] = false;
} else
    $this->_sections['comp2']['total'] = 0;
if ($this->_sections['comp2']['show']):

            for ($this->_sections['comp2']['index'] = $this->_sections['comp2']['start'], $this->_sections['comp2']['iteration'] = 1;
                 $this->_sections['comp2']['iteration'] <= $this->_sections['comp2']['total'];
                 $this->_sections['comp2']['index'] += $this->_sections['comp2']['step'], $this->_sections['comp2']['iteration']++):
$this->_sections['comp2']['rownum'] = $this->_sections['comp2']['iteration'];
$this->_sections['comp2']['index_prev'] = $this->_sections['comp2']['index'] - $this->_sections['comp2']['step'];
$this->_sections['comp2']['index_next'] = $this->_sections['comp2']['index'] + $this->_sections['comp2']['step'];
$this->_sections['comp2']['first']      = ($this->_sections['comp2']['iteration'] == 1);
$this->_sections['comp2']['last']       = ($this->_sections['comp2']['iteration'] == $this->_sections['comp2']['total']);
 echo '<tr><td>&nbsp;&nbsp;&nbsp;';  echo $this->_tpl_vars['Tcomp'][$this->_sections['comp']['index']][$this->_sections['comp2']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Components'][$this->_sections['comp']['index']][$this->_sections['comp2']['index']];  echo '</td></tr>';  endfor; endif;  echo '<tr><td colspan="2"><hr /></td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'add'):  echo '<form method="post" action="tribeastral.php?action=add&amp;step=piece">';  echo $this->_tpl_vars['Addto'];  echo ' <select name="name">';  unset($this->_sections['addastral']);
$this->_sections['addastral']['name'] = 'addastral';
$this->_sections['addastral']['loop'] = is_array($_loop=$this->_tpl_vars['Inames']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['addastral']['show'] = true;
$this->_sections['addastral']['max'] = $this->_sections['addastral']['loop'];
$this->_sections['addastral']['step'] = 1;
$this->_sections['addastral']['start'] = $this->_sections['addastral']['step'] > 0 ? 0 : $this->_sections['addastral']['loop']-1;
if ($this->_sections['addastral']['show']) {
    $this->_sections['addastral']['total'] = $this->_sections['addastral']['loop'];
    if ($this->_sections['addastral']['total'] == 0)
        $this->_sections['addastral']['show'] = false;
} else
    $this->_sections['addastral']['total'] = 0;
if ($this->_sections['addastral']['show']):

            for ($this->_sections['addastral']['index'] = $this->_sections['addastral']['start'], $this->_sections['addastral']['iteration'] = 1;
                 $this->_sections['addastral']['iteration'] <= $this->_sections['addastral']['total'];
                 $this->_sections['addastral']['index'] += $this->_sections['addastral']['step'], $this->_sections['addastral']['iteration']++):
$this->_sections['addastral']['rownum'] = $this->_sections['addastral']['iteration'];
$this->_sections['addastral']['index_prev'] = $this->_sections['addastral']['index'] - $this->_sections['addastral']['step'];
$this->_sections['addastral']['index_next'] = $this->_sections['addastral']['index'] + $this->_sections['addastral']['step'];
$this->_sections['addastral']['first']      = ($this->_sections['addastral']['iteration'] == 1);
$this->_sections['addastral']['last']       = ($this->_sections['addastral']['iteration'] == $this->_sections['addastral']['total']);
 echo '<option value="';  echo $this->_sections['addastral']['index'];  echo '">';  echo $this->_tpl_vars['Inames'][$this->_sections['addastral']['index']];  echo '</option>';  endfor; endif;  echo '</select><br />';  echo $this->_tpl_vars['Piecenumber'];  echo ' <input type="text" name="number" size="5" /><br />';  echo $this->_tpl_vars['Astralamount'];  echo ' <input type="text" name="amount" size="5" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form><br /><br /><form method="post" action="tribeastral.php?action=add&amp;step=component">';  echo $this->_tpl_vars['Addto2'];  echo ' <select name="name">';  unset($this->_sections['addastral2']);
$this->_sections['addastral2']['name'] = 'addastral2';
$this->_sections['addastral2']['loop'] = is_array($_loop=$this->_tpl_vars['Inames2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['addastral2']['show'] = true;
$this->_sections['addastral2']['max'] = $this->_sections['addastral2']['loop'];
$this->_sections['addastral2']['step'] = 1;
$this->_sections['addastral2']['start'] = $this->_sections['addastral2']['step'] > 0 ? 0 : $this->_sections['addastral2']['loop']-1;
if ($this->_sections['addastral2']['show']) {
    $this->_sections['addastral2']['total'] = $this->_sections['addastral2']['loop'];
    if ($this->_sections['addastral2']['total'] == 0)
        $this->_sections['addastral2']['show'] = false;
} else
    $this->_sections['addastral2']['total'] = 0;
if ($this->_sections['addastral2']['show']):

            for ($this->_sections['addastral2']['index'] = $this->_sections['addastral2']['start'], $this->_sections['addastral2']['iteration'] = 1;
                 $this->_sections['addastral2']['iteration'] <= $this->_sections['addastral2']['total'];
                 $this->_sections['addastral2']['index'] += $this->_sections['addastral2']['step'], $this->_sections['addastral2']['iteration']++):
$this->_sections['addastral2']['rownum'] = $this->_sections['addastral2']['iteration'];
$this->_sections['addastral2']['index_prev'] = $this->_sections['addastral2']['index'] - $this->_sections['addastral2']['step'];
$this->_sections['addastral2']['index_next'] = $this->_sections['addastral2']['index'] + $this->_sections['addastral2']['step'];
$this->_sections['addastral2']['first']      = ($this->_sections['addastral2']['iteration'] == 1);
$this->_sections['addastral2']['last']       = ($this->_sections['addastral2']['iteration'] == $this->_sections['addastral2']['total']);
 echo '<option value="';  echo $this->_sections['addastral2']['index'];  echo '">';  echo $this->_tpl_vars['Inames2'][$this->_sections['addastral2']['index']];  echo '</option>';  endfor; endif;  echo '</select><br /><input type="hidden" name="number" value="1" />';  echo $this->_tpl_vars['Astralamount'];  echo ' <input type="text" name="amount" size="5" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form><br />';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'give'):  echo '<form method="post" action="tribeastral.php?action=give&amp;step=piece">';  echo $this->_tpl_vars['Addto'];  echo ' <input type="text" name="pid" size="5" /> <select name="name">';  unset($this->_sections['giveastral']);
$this->_sections['giveastral']['name'] = 'giveastral';
$this->_sections['giveastral']['loop'] = is_array($_loop=$this->_tpl_vars['Inames']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['giveastral']['show'] = true;
$this->_sections['giveastral']['max'] = $this->_sections['giveastral']['loop'];
$this->_sections['giveastral']['step'] = 1;
$this->_sections['giveastral']['start'] = $this->_sections['giveastral']['step'] > 0 ? 0 : $this->_sections['giveastral']['loop']-1;
if ($this->_sections['giveastral']['show']) {
    $this->_sections['giveastral']['total'] = $this->_sections['giveastral']['loop'];
    if ($this->_sections['giveastral']['total'] == 0)
        $this->_sections['giveastral']['show'] = false;
} else
    $this->_sections['giveastral']['total'] = 0;
if ($this->_sections['giveastral']['show']):

            for ($this->_sections['giveastral']['index'] = $this->_sections['giveastral']['start'], $this->_sections['giveastral']['iteration'] = 1;
                 $this->_sections['giveastral']['iteration'] <= $this->_sections['giveastral']['total'];
                 $this->_sections['giveastral']['index'] += $this->_sections['giveastral']['step'], $this->_sections['giveastral']['iteration']++):
$this->_sections['giveastral']['rownum'] = $this->_sections['giveastral']['iteration'];
$this->_sections['giveastral']['index_prev'] = $this->_sections['giveastral']['index'] - $this->_sections['giveastral']['step'];
$this->_sections['giveastral']['index_next'] = $this->_sections['giveastral']['index'] + $this->_sections['giveastral']['step'];
$this->_sections['giveastral']['first']      = ($this->_sections['giveastral']['iteration'] == 1);
$this->_sections['giveastral']['last']       = ($this->_sections['giveastral']['iteration'] == $this->_sections['giveastral']['total']);
 echo '<option value="';  echo $this->_sections['giveastral']['index'];  echo '">';  echo $this->_tpl_vars['Inames'][$this->_sections['giveastral']['index']];  echo '</option>';  endfor; endif;  echo '</select><br />';  echo $this->_tpl_vars['Piecenumber'];  echo ' <input type="text" name="number" size="5" /><br />';  echo $this->_tpl_vars['Astralamount'];  echo ' <input type="text" name="amount" size="5" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Agive'];  echo '" /></form><br /><form method="post" action="tribeastral.php?action=give&amp;step=all">';  echo $this->_tpl_vars['Addto2'];  echo ' <input type="text" name="pid" size="5" /> <select name="name">';  unset($this->_sections['giveastral2']);
$this->_sections['giveastral2']['name'] = 'giveastral2';
$this->_sections['giveastral2']['loop'] = is_array($_loop=$this->_tpl_vars['Inames']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['giveastral2']['show'] = true;
$this->_sections['giveastral2']['max'] = $this->_sections['giveastral2']['loop'];
$this->_sections['giveastral2']['step'] = 1;
$this->_sections['giveastral2']['start'] = $this->_sections['giveastral2']['step'] > 0 ? 0 : $this->_sections['giveastral2']['loop']-1;
if ($this->_sections['giveastral2']['show']) {
    $this->_sections['giveastral2']['total'] = $this->_sections['giveastral2']['loop'];
    if ($this->_sections['giveastral2']['total'] == 0)
        $this->_sections['giveastral2']['show'] = false;
} else
    $this->_sections['giveastral2']['total'] = 0;
if ($this->_sections['giveastral2']['show']):

            for ($this->_sections['giveastral2']['index'] = $this->_sections['giveastral2']['start'], $this->_sections['giveastral2']['iteration'] = 1;
                 $this->_sections['giveastral2']['iteration'] <= $this->_sections['giveastral2']['total'];
                 $this->_sections['giveastral2']['index'] += $this->_sections['giveastral2']['step'], $this->_sections['giveastral2']['iteration']++):
$this->_sections['giveastral2']['rownum'] = $this->_sections['giveastral2']['iteration'];
$this->_sections['giveastral2']['index_prev'] = $this->_sections['giveastral2']['index'] - $this->_sections['giveastral2']['step'];
$this->_sections['giveastral2']['index_next'] = $this->_sections['giveastral2']['index'] + $this->_sections['giveastral2']['step'];
$this->_sections['giveastral2']['first']      = ($this->_sections['giveastral2']['iteration'] == 1);
$this->_sections['giveastral2']['last']       = ($this->_sections['giveastral2']['iteration'] == $this->_sections['giveastral2']['total']);
 echo '<option value="';  echo $this->_sections['giveastral2']['index'];  echo '">';  echo $this->_tpl_vars['Inames'][$this->_sections['giveastral2']['index']];  echo '</option>';  endfor; endif;  echo '</select><br />';  echo $this->_tpl_vars['Astralamount'];  echo ' <input type="text" name="amount" size="5" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Agive'];  echo '" /></form><br /><form method="post" action="tribeastral.php?action=give&amp;step=component">';  echo $this->_tpl_vars['Addto3'];  echo ' <input type="text" name="pid" size="5" /> <select name="name">';  unset($this->_sections['giveastral3']);
$this->_sections['giveastral3']['name'] = 'giveastral3';
$this->_sections['giveastral3']['loop'] = is_array($_loop=$this->_tpl_vars['Inames2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['giveastral3']['show'] = true;
$this->_sections['giveastral3']['max'] = $this->_sections['giveastral3']['loop'];
$this->_sections['giveastral3']['step'] = 1;
$this->_sections['giveastral3']['start'] = $this->_sections['giveastral3']['step'] > 0 ? 0 : $this->_sections['giveastral3']['loop']-1;
if ($this->_sections['giveastral3']['show']) {
    $this->_sections['giveastral3']['total'] = $this->_sections['giveastral3']['loop'];
    if ($this->_sections['giveastral3']['total'] == 0)
        $this->_sections['giveastral3']['show'] = false;
} else
    $this->_sections['giveastral3']['total'] = 0;
if ($this->_sections['giveastral3']['show']):

            for ($this->_sections['giveastral3']['index'] = $this->_sections['giveastral3']['start'], $this->_sections['giveastral3']['iteration'] = 1;
                 $this->_sections['giveastral3']['iteration'] <= $this->_sections['giveastral3']['total'];
                 $this->_sections['giveastral3']['index'] += $this->_sections['giveastral3']['step'], $this->_sections['giveastral3']['iteration']++):
$this->_sections['giveastral3']['rownum'] = $this->_sections['giveastral3']['iteration'];
$this->_sections['giveastral3']['index_prev'] = $this->_sections['giveastral3']['index'] - $this->_sections['giveastral3']['step'];
$this->_sections['giveastral3']['index_next'] = $this->_sections['giveastral3']['index'] + $this->_sections['giveastral3']['step'];
$this->_sections['giveastral3']['first']      = ($this->_sections['giveastral3']['iteration'] == 1);
$this->_sections['giveastral3']['last']       = ($this->_sections['giveastral3']['iteration'] == $this->_sections['giveastral3']['total']);
 echo '<option value="';  echo $this->_sections['giveastral3']['index'];  echo '">';  echo $this->_tpl_vars['Inames2'][$this->_sections['giveastral3']['index']];  echo '</option>';  endfor; endif;  echo '</select><br /><input type="hidden" name="number" value="1" />';  echo $this->_tpl_vars['Astralamount'];  echo ' <input type="text" name="amount" size="5" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Agive'];  echo '" /></form><br />';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo ''; ?>
</br></br>