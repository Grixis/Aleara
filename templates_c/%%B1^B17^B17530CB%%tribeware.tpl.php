<?php /* Smarty version 2.6.16, created on 2012-10-10 14:49:23
         compiled from tribeware.tpl */ ?>
<center><IMG SRC="images/locations/gmachgildii.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tribemenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  if ($this->_tpl_vars['Step'] == "" && $this->_tpl_vars['Step2'] == "" && $this->_tpl_vars['Step3'] == "" && $this->_tpl_vars['Give'] == ""):  echo '';  echo $this->_tpl_vars['Wareinfo'];  echo '<br /><ul><li><a href="tribeware.php?step=zobacz&amp;lista=id">';  echo $this->_tpl_vars['Ashow'];  echo '</a></li><li><a href="tribeware.php?step=daj">';  echo $this->_tpl_vars['Aadd'];  echo '</a></li></ul>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'zobacz'):  echo '';  echo $this->_tpl_vars['Inware'];  echo ' ';  echo $this->_tpl_vars['Amount1'];  echo ' ';  echo $this->_tpl_vars['Potions'];  echo '<br /><table width="100%"><tr><td width="50%"><a href="tribeware.php?step=zobacz&amp;lista=name"><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></a></td><td width="30%"><a href="tribeware.php?step=zobacz&amp;lista=efect"><b><u>';  echo $this->_tpl_vars['Tefect'];  echo '</u></b></a></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Tamount2'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Toptions'];  echo '</u></b></td></tr>';  unset($this->_sections['tribeware']);
$this->_sections['tribeware']['name'] = 'tribeware';
$this->_sections['tribeware']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tribeware']['show'] = true;
$this->_sections['tribeware']['max'] = $this->_sections['tribeware']['loop'];
$this->_sections['tribeware']['step'] = 1;
$this->_sections['tribeware']['start'] = $this->_sections['tribeware']['step'] > 0 ? 0 : $this->_sections['tribeware']['loop']-1;
if ($this->_sections['tribeware']['show']) {
    $this->_sections['tribeware']['total'] = $this->_sections['tribeware']['loop'];
    if ($this->_sections['tribeware']['total'] == 0)
        $this->_sections['tribeware']['show'] = false;
} else
    $this->_sections['tribeware']['total'] = 0;
if ($this->_sections['tribeware']['show']):

            for ($this->_sections['tribeware']['index'] = $this->_sections['tribeware']['start'], $this->_sections['tribeware']['iteration'] = 1;
                 $this->_sections['tribeware']['iteration'] <= $this->_sections['tribeware']['total'];
                 $this->_sections['tribeware']['index'] += $this->_sections['tribeware']['step'], $this->_sections['tribeware']['iteration']++):
$this->_sections['tribeware']['rownum'] = $this->_sections['tribeware']['iteration'];
$this->_sections['tribeware']['index_prev'] = $this->_sections['tribeware']['index'] - $this->_sections['tribeware']['step'];
$this->_sections['tribeware']['index_next'] = $this->_sections['tribeware']['index'] + $this->_sections['tribeware']['step'];
$this->_sections['tribeware']['first']      = ($this->_sections['tribeware']['iteration'] == 1);
$this->_sections['tribeware']['last']       = ($this->_sections['tribeware']['iteration'] == $this->_sections['tribeware']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['tribeware']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Efect'][$this->_sections['tribeware']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Amount'][$this->_sections['tribeware']['index']];  echo '</td>';  echo $this->_tpl_vars['Link'][$this->_sections['tribeware']['index']];  echo '';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['Give'] != ""):  echo '';  if ($this->_tpl_vars['Step3'] == ""):  echo '<form method="post" action="tribeware.php?daj=';  echo $this->_tpl_vars['Id'];  echo '&amp;step3=add"><input type="submit" value="';  echo $this->_tpl_vars['Agive'];  echo '" /> <input type="text" name="amount" value="';  echo $this->_tpl_vars['Amount'];  echo '" size="5" /> ';  echo $this->_tpl_vars['Tamount'];  echo '<b>';  echo $this->_tpl_vars['Name'];  echo '</b> ';  echo $this->_tpl_vars['Playerid'];  echo ': <input type="text" name="did" size="5" /><br /></form>';  endif;  echo '';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'daj'):  echo '';  echo $this->_tpl_vars['Additem'];  echo '<br /><br /><form method="post" action="tribeware.php?step=daj&amp;step2=add"><table><tr><td>';  echo $this->_tpl_vars['Potion'];  echo ': <select name="przedmiot">';  unset($this->_sections['tribeware1']);
$this->_sections['tribeware1']['name'] = 'tribeware1';
$this->_sections['tribeware1']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tribeware1']['show'] = true;
$this->_sections['tribeware1']['max'] = $this->_sections['tribeware1']['loop'];
$this->_sections['tribeware1']['step'] = 1;
$this->_sections['tribeware1']['start'] = $this->_sections['tribeware1']['step'] > 0 ? 0 : $this->_sections['tribeware1']['loop']-1;
if ($this->_sections['tribeware1']['show']) {
    $this->_sections['tribeware1']['total'] = $this->_sections['tribeware1']['loop'];
    if ($this->_sections['tribeware1']['total'] == 0)
        $this->_sections['tribeware1']['show'] = false;
} else
    $this->_sections['tribeware1']['total'] = 0;
if ($this->_sections['tribeware1']['show']):

            for ($this->_sections['tribeware1']['index'] = $this->_sections['tribeware1']['start'], $this->_sections['tribeware1']['iteration'] = 1;
                 $this->_sections['tribeware1']['iteration'] <= $this->_sections['tribeware1']['total'];
                 $this->_sections['tribeware1']['index'] += $this->_sections['tribeware1']['step'], $this->_sections['tribeware1']['iteration']++):
$this->_sections['tribeware1']['rownum'] = $this->_sections['tribeware1']['iteration'];
$this->_sections['tribeware1']['index_prev'] = $this->_sections['tribeware1']['index'] - $this->_sections['tribeware1']['step'];
$this->_sections['tribeware1']['index_next'] = $this->_sections['tribeware1']['index'] + $this->_sections['tribeware1']['step'];
$this->_sections['tribeware1']['first']      = ($this->_sections['tribeware1']['iteration'] == 1);
$this->_sections['tribeware1']['last']       = ($this->_sections['tribeware1']['iteration'] == $this->_sections['tribeware1']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Itemid'][$this->_sections['tribeware1']['index']];  echo '">(';  echo $this->_tpl_vars['Amount2'];  echo ': ';  echo $this->_tpl_vars['Amount'][$this->_sections['tribeware1']['index']];  echo ') ';  echo $this->_tpl_vars['Name'][$this->_sections['tribeware1']['index']];  echo '</option>';  endfor; endif;  echo '</select> ';  echo $this->_tpl_vars['Tamount2'];  echo ' <input type="text" name="amount" size="5" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></td></tr></table></form>';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo ''; ?>
</br></br>