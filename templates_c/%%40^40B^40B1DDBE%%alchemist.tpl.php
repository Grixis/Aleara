<?php /* Smarty version 2.6.16, created on 2012-10-08 08:45:41
         compiled from alchemist.tpl */ ?>
<center><IMG SRC="images/locations/pracowniaalchem.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['Alchemist'] == ''):  echo '<p>';  echo $this->_tpl_vars['Awelcome'];  echo '</p><ul><li><a href="alchemik.php?alchemik=przepisy">';  echo $this->_tpl_vars['Arecipes'];  echo '</a></li><li><a href="alchemik.php?alchemik=pracownia">';  echo $this->_tpl_vars['Amake'];  echo '</a></li><li><a href="alchemik.php?alchemik=astral">';  echo $this->_tpl_vars['Aastral'];  echo '</a></li></ul>';  endif;  echo '';  if ($this->_tpl_vars['Alchemist'] == 'przepisy'):  echo '';  if ($this->_tpl_vars['Buy'] == ''):  echo '';  echo $this->_tpl_vars['Recipesinfo'];  echo '<table><tr><th><u>';  echo $this->_tpl_vars['Iname'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Icost'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Ilevel'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Ioption'];  echo '</u></th></tr>';  unset($this->_sections['alchemy']);
$this->_sections['alchemy']['name'] = 'alchemy';
$this->_sections['alchemy']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['alchemy']['show'] = true;
$this->_sections['alchemy']['max'] = $this->_sections['alchemy']['loop'];
$this->_sections['alchemy']['step'] = 1;
$this->_sections['alchemy']['start'] = $this->_sections['alchemy']['step'] > 0 ? 0 : $this->_sections['alchemy']['loop']-1;
if ($this->_sections['alchemy']['show']) {
    $this->_sections['alchemy']['total'] = $this->_sections['alchemy']['loop'];
    if ($this->_sections['alchemy']['total'] == 0)
        $this->_sections['alchemy']['show'] = false;
} else
    $this->_sections['alchemy']['total'] = 0;
if ($this->_sections['alchemy']['show']):

            for ($this->_sections['alchemy']['index'] = $this->_sections['alchemy']['start'], $this->_sections['alchemy']['iteration'] = 1;
                 $this->_sections['alchemy']['iteration'] <= $this->_sections['alchemy']['total'];
                 $this->_sections['alchemy']['index'] += $this->_sections['alchemy']['step'], $this->_sections['alchemy']['iteration']++):
$this->_sections['alchemy']['rownum'] = $this->_sections['alchemy']['iteration'];
$this->_sections['alchemy']['index_prev'] = $this->_sections['alchemy']['index'] - $this->_sections['alchemy']['step'];
$this->_sections['alchemy']['index_next'] = $this->_sections['alchemy']['index'] + $this->_sections['alchemy']['step'];
$this->_sections['alchemy']['first']      = ($this->_sections['alchemy']['iteration'] == 1);
$this->_sections['alchemy']['last']       = ($this->_sections['alchemy']['iteration'] == $this->_sections['alchemy']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['alchemy']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Cost'][$this->_sections['alchemy']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Level'][$this->_sections['alchemy']['index']];  echo '</td><td>- <a href="alchemik.php?alchemik=przepisy&amp;buy=';  echo $this->_tpl_vars['Planid'][$this->_sections['alchemy']['index']];  echo '">';  echo $this->_tpl_vars['Abuy'];  echo '</a></td></tr>';  endfor; endif;  echo '</table>';  else:  echo '';  echo $this->_tpl_vars['Youpay'];  echo ' <b>';  echo $this->_tpl_vars['Cost1'];  echo '</b> ';  echo $this->_tpl_vars['Andbuy'];  echo ': <b>';  echo $this->_tpl_vars['Name1'];  echo '</b>.';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Alchemist'] == 'pracownia'):  echo '';  if ($this->_tpl_vars['Make'] == 0):  echo '';  echo $this->_tpl_vars['Alchemistinfo'];  echo '<table width="100%"><tr><td width="50%"><b><u>';  echo $this->_tpl_vars['Rname'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Rlevel'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Rillani'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Rillanias'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Rnutari'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Rdynallca'];  echo '</u></b></td></tr>';  unset($this->_sections['number']);
$this->_sections['number']['name'] = 'number';
$this->_sections['number']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['number']['show'] = true;
$this->_sections['number']['max'] = $this->_sections['number']['loop'];
$this->_sections['number']['step'] = 1;
$this->_sections['number']['start'] = $this->_sections['number']['step'] > 0 ? 0 : $this->_sections['number']['loop']-1;
if ($this->_sections['number']['show']) {
    $this->_sections['number']['total'] = $this->_sections['number']['loop'];
    if ($this->_sections['number']['total'] == 0)
        $this->_sections['number']['show'] = false;
} else
    $this->_sections['number']['total'] = 0;
if ($this->_sections['number']['show']):

            for ($this->_sections['number']['index'] = $this->_sections['number']['start'], $this->_sections['number']['iteration'] = 1;
                 $this->_sections['number']['iteration'] <= $this->_sections['number']['total'];
                 $this->_sections['number']['index'] += $this->_sections['number']['step'], $this->_sections['number']['iteration']++):
$this->_sections['number']['rownum'] = $this->_sections['number']['iteration'];
$this->_sections['number']['index_prev'] = $this->_sections['number']['index'] - $this->_sections['number']['step'];
$this->_sections['number']['index_next'] = $this->_sections['number']['index'] + $this->_sections['number']['step'];
$this->_sections['number']['first']      = ($this->_sections['number']['iteration'] == 1);
$this->_sections['number']['last']       = ($this->_sections['number']['iteration'] == $this->_sections['number']['total']);
 echo '<tr><td><a href="alchemik.php?alchemik=pracownia&amp;dalej=';  echo $this->_tpl_vars['Id'][$this->_sections['number']['index']];  echo '">';  echo $this->_tpl_vars['Name'][$this->_sections['number']['index']];  echo '</a></td><td align="center">';  echo $this->_tpl_vars['Level'][$this->_sections['number']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Illani'][$this->_sections['number']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Illanias'][$this->_sections['number']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Nutari'][$this->_sections['number']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Dynallca'][$this->_sections['number']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['Next'] != 0):  echo '<form method="post" action="alchemik.php?alchemik=pracownia&amp;rob=';  echo $this->_tpl_vars['Id1'];  echo '">';  echo $this->_tpl_vars['Pstart'];  echo ' <b>';  echo $this->_tpl_vars['Name1'];  echo '</b> <input type="text" name="razy" size="5" /> ';  echo $this->_tpl_vars['Pamount'];  echo '.<input type="submit" value="';  echo $this->_tpl_vars['Amake'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['Make'] != 0):  echo '';  echo $this->_tpl_vars['Youmake'];  echo ' <b>';  echo $this->_tpl_vars['Name'];  echo '</b> <b>';  echo $this->_tpl_vars['Amount'];  echo '</b> ';  echo $this->_tpl_vars['Pgain'];  echo ' <b>';  echo $this->_tpl_vars['Exp'];  echo '</b> ';  echo $this->_tpl_vars['Exp_and'];  echo ' <b>';  echo $this->_tpl_vars['Ability'];  echo '</b> ';  echo $this->_tpl_vars['Alchemylevel'];  echo '<br />';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Alchemist'] == 'astral'):  echo '';  if (isset ( $this->_tpl_vars['Astralinfo'] )):  echo '<p>';  echo $this->_tpl_vars['Astralinfo'];  echo '</p>';  endif;  echo '<p>';  echo $this->_tpl_vars['Message'];  echo '</p>';  if (isset ( $this->_tpl_vars['Available'] )):  echo '';  unset($this->_sections['astral']);
$this->_sections['astral']['name'] = 'astral';
$this->_sections['astral']['loop'] = is_array($_loop=$this->_tpl_vars['Available']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral']['show'] = true;
$this->_sections['astral']['max'] = $this->_sections['astral']['loop'];
$this->_sections['astral']['step'] = 1;
$this->_sections['astral']['start'] = $this->_sections['astral']['step'] > 0 ? 0 : $this->_sections['astral']['loop']-1;
if ($this->_sections['astral']['show']) {
    $this->_sections['astral']['total'] = $this->_sections['astral']['loop'];
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
 echo '<p><b>';  echo $this->_tpl_vars['Tname'];  echo ':</b> ';  echo $this->_tpl_vars['Available'][$this->_sections['astral']['index']];  echo '';  unset($this->_sections['astral2']);
$this->_sections['astral2']['name'] = 'astral2';
$this->_sections['astral2']['loop'] = is_array($_loop=$this->_tpl_vars['Resourcename']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<br /><b>';  echo $this->_tpl_vars['Resourcename'][$this->_sections['astral2']['index']];  echo ':</b> ';  echo $this->_tpl_vars['Resourceamount'][$this->_sections['astral']['index']][$this->_sections['astral2']['index']];  echo '';  endfor; endif;  echo '<form method="post" action="alchemik.php?alchemik=astral&amp;potion=';  echo $this->_tpl_vars['Compnumber'][$this->_sections['astral']['index']];  echo '"><input type="submit" value="';  echo $this->_tpl_vars['Abuild'];  echo '" /></form></p>';  endfor; endif;  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Alchemist'] != ''):  echo '<br /><br /><a href="alchemik.php">(';  echo $this->_tpl_vars['Back'];  echo ')</a>';  endif;  echo ''; ?>
</br>