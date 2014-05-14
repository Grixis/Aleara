<?php /* Smarty version 2.6.16, created on 2012-10-10 14:52:38
         compiled from tribearmor.tpl */ ?>
<center><IMG SRC="images/locations/gmachgildii.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tribemenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  if ($this->_tpl_vars['Step'] == "" && $this->_tpl_vars['Step2'] == "" && $this->_tpl_vars['Give'] == "" && $this->_tpl_vars['Step3'] == ""):  echo '';  echo $this->_tpl_vars['Armorinfo'];  echo '<br /><ul>';  unset($this->_sections['armorlinks']);
$this->_sections['armorlinks']['name'] = 'armorlinks';
$this->_sections['armorlinks']['loop'] = is_array($_loop=$this->_tpl_vars['Armortype']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['armorlinks']['show'] = true;
$this->_sections['armorlinks']['max'] = $this->_sections['armorlinks']['loop'];
$this->_sections['armorlinks']['step'] = 1;
$this->_sections['armorlinks']['start'] = $this->_sections['armorlinks']['step'] > 0 ? 0 : $this->_sections['armorlinks']['loop']-1;
if ($this->_sections['armorlinks']['show']) {
    $this->_sections['armorlinks']['total'] = $this->_sections['armorlinks']['loop'];
    if ($this->_sections['armorlinks']['total'] == 0)
        $this->_sections['armorlinks']['show'] = false;
} else
    $this->_sections['armorlinks']['total'] = 0;
if ($this->_sections['armorlinks']['show']):

            for ($this->_sections['armorlinks']['index'] = $this->_sections['armorlinks']['start'], $this->_sections['armorlinks']['iteration'] = 1;
                 $this->_sections['armorlinks']['iteration'] <= $this->_sections['armorlinks']['total'];
                 $this->_sections['armorlinks']['index'] += $this->_sections['armorlinks']['step'], $this->_sections['armorlinks']['iteration']++):
$this->_sections['armorlinks']['rownum'] = $this->_sections['armorlinks']['iteration'];
$this->_sections['armorlinks']['index_prev'] = $this->_sections['armorlinks']['index'] - $this->_sections['armorlinks']['step'];
$this->_sections['armorlinks']['index_next'] = $this->_sections['armorlinks']['index'] + $this->_sections['armorlinks']['step'];
$this->_sections['armorlinks']['first']      = ($this->_sections['armorlinks']['iteration'] == 1);
$this->_sections['armorlinks']['last']       = ($this->_sections['armorlinks']['iteration'] == $this->_sections['armorlinks']['total']);
 echo '<li><a href="tribearmor.php?step=zobacz&amp;lista=id&amp;type=';  echo $this->_tpl_vars['Armortype'][$this->_sections['armorlinks']['index']];  echo '">';  echo $this->_tpl_vars['Armorlink'][$this->_sections['armorlinks']['index']];  echo '</a></li>';  endfor; endif;  echo '<li><a href="tribearmor.php?step=daj">';  echo $this->_tpl_vars['Aadd'];  echo '</a></li></ul>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'zobacz'):  echo '';  echo $this->_tpl_vars['Inarmor2'];  echo ' ';  echo $this->_tpl_vars['Amount1'];  echo ' ';  echo $this->_tpl_vars['Name1'];  echo '<br /><form method="post" action="tribearmor.php?step=zobacz&amp;lista=id&amp;type=';  echo $this->_tpl_vars['Type'];  echo '&amp;levels=yes">';  echo $this->_tpl_vars['Tor'];  echo ' <input type="submit" value="';  echo $this->_tpl_vars['Tseek'];  echo '" /> ';  echo $this->_tpl_vars['Titems'];  echo ' <input type="text" name="min" value="1" size="5" />  ';  echo $this->_tpl_vars['Tto'];  echo ' <input type="text" name="max" value="1" size="5" /></form><table><tr>';  unset($this->_sections['armortable']);
$this->_sections['armortable']['name'] = 'armortable';
$this->_sections['armortable']['loop'] = is_array($_loop=$this->_tpl_vars['Ttypes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['armortable']['show'] = true;
$this->_sections['armortable']['max'] = $this->_sections['armortable']['loop'];
$this->_sections['armortable']['step'] = 1;
$this->_sections['armortable']['start'] = $this->_sections['armortable']['step'] > 0 ? 0 : $this->_sections['armortable']['loop']-1;
if ($this->_sections['armortable']['show']) {
    $this->_sections['armortable']['total'] = $this->_sections['armortable']['loop'];
    if ($this->_sections['armortable']['total'] == 0)
        $this->_sections['armortable']['show'] = false;
} else
    $this->_sections['armortable']['total'] = 0;
if ($this->_sections['armortable']['show']):

            for ($this->_sections['armortable']['index'] = $this->_sections['armortable']['start'], $this->_sections['armortable']['iteration'] = 1;
                 $this->_sections['armortable']['iteration'] <= $this->_sections['armortable']['total'];
                 $this->_sections['armortable']['index'] += $this->_sections['armortable']['step'], $this->_sections['armortable']['iteration']++):
$this->_sections['armortable']['rownum'] = $this->_sections['armortable']['iteration'];
$this->_sections['armortable']['index_prev'] = $this->_sections['armortable']['index'] - $this->_sections['armortable']['step'];
$this->_sections['armortable']['index_next'] = $this->_sections['armortable']['index'] + $this->_sections['armortable']['step'];
$this->_sections['armortable']['first']      = ($this->_sections['armortable']['iteration'] == 1);
$this->_sections['armortable']['last']       = ($this->_sections['armortable']['iteration'] == $this->_sections['armortable']['total']);
 echo '<td width="100"><a href="tribearmor.php?step=zobacz&amp;lista=';  echo $this->_tpl_vars['Ttypes'][$this->_sections['armortable']['index']];  echo '&amp;limit=0&amp;type=';  echo $this->_tpl_vars['Type'];  echo '"><b><u>';  echo $this->_tpl_vars['Tinfos'][$this->_sections['armortable']['index']];  echo '</u></b></a></td>';  endfor; endif;  echo '<td width="50"><b><u>';  echo $this->_tpl_vars['Tamount2'];  echo '</u></b></td><td width="100"><b><u>';  echo $this->_tpl_vars['Toptions'];  echo '</u></b></td></tr>';  unset($this->_sections['tribearmor']);
$this->_sections['tribearmor']['name'] = 'tribearmor';
$this->_sections['tribearmor']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tribearmor']['show'] = true;
$this->_sections['tribearmor']['max'] = $this->_sections['tribearmor']['loop'];
$this->_sections['tribearmor']['step'] = 1;
$this->_sections['tribearmor']['start'] = $this->_sections['tribearmor']['step'] > 0 ? 0 : $this->_sections['tribearmor']['loop']-1;
if ($this->_sections['tribearmor']['show']) {
    $this->_sections['tribearmor']['total'] = $this->_sections['tribearmor']['loop'];
    if ($this->_sections['tribearmor']['total'] == 0)
        $this->_sections['tribearmor']['show'] = false;
} else
    $this->_sections['tribearmor']['total'] = 0;
if ($this->_sections['tribearmor']['show']):

            for ($this->_sections['tribearmor']['index'] = $this->_sections['tribearmor']['start'], $this->_sections['tribearmor']['iteration'] = 1;
                 $this->_sections['tribearmor']['iteration'] <= $this->_sections['tribearmor']['total'];
                 $this->_sections['tribearmor']['index'] += $this->_sections['tribearmor']['step'], $this->_sections['tribearmor']['iteration']++):
$this->_sections['tribearmor']['rownum'] = $this->_sections['tribearmor']['iteration'];
$this->_sections['tribearmor']['index_prev'] = $this->_sections['tribearmor']['index'] - $this->_sections['tribearmor']['step'];
$this->_sections['tribearmor']['index_next'] = $this->_sections['tribearmor']['index'] + $this->_sections['tribearmor']['step'];
$this->_sections['tribearmor']['first']      = ($this->_sections['tribearmor']['iteration'] == 1);
$this->_sections['tribearmor']['last']       = ($this->_sections['tribearmor']['iteration'] == $this->_sections['tribearmor']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['tribearmor']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Power'][$this->_sections['tribearmor']['index']];  echo '</td>';  if ($this->_tpl_vars['Type'] != 'I'):  echo '<td align="center">';  echo $this->_tpl_vars['Durability'][$this->_sections['tribearmor']['index']];  echo '/';  echo $this->_tpl_vars['Maxdurability'][$this->_sections['tribearmor']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Agility'][$this->_sections['tribearmor']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Speed'][$this->_sections['tribearmor']['index']];  echo '</td>';  endif;  echo '<td align="center">';  echo $this->_tpl_vars['Ilevel'][$this->_sections['tribearmor']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Amount'][$this->_sections['tribearmor']['index']];  echo '</td>';  echo $this->_tpl_vars['Action'][$this->_sections['tribearmor']['index']];  echo '';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['Give'] != ""):  echo '';  if ($this->_tpl_vars['Step3'] == ""):  echo '<form method="post" action="tribearmor.php?daj=';  echo $this->_tpl_vars['Id'];  echo '&amp;step3=add"><input type="submit" value="';  echo $this->_tpl_vars['Agive'];  echo '" /><input type="text" name="amount" value="';  echo $this->_tpl_vars['Amount'];  echo '" size=5 /> ';  echo $this->_tpl_vars['Tamount'];  echo ' <b>';  echo $this->_tpl_vars['Name'];  echo '</b> ';  echo $this->_tpl_vars['Playerid'];  echo ':<input type="text" name="did" size="5" /><br /></form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'daj'):  echo '';  echo $this->_tpl_vars['Additem'];  echo '<br /><br /><form method="post" action="tribearmor.php?step=daj&amp;step2=add"><table><tr><td>';  echo $this->_tpl_vars['Item'];  echo ': <select name="przedmiot">';  unset($this->_sections['tribearmor1']);
$this->_sections['tribearmor1']['name'] = 'tribearmor1';
$this->_sections['tribearmor1']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tribearmor1']['show'] = true;
$this->_sections['tribearmor1']['max'] = $this->_sections['tribearmor1']['loop'];
$this->_sections['tribearmor1']['step'] = 1;
$this->_sections['tribearmor1']['start'] = $this->_sections['tribearmor1']['step'] > 0 ? 0 : $this->_sections['tribearmor1']['loop']-1;
if ($this->_sections['tribearmor1']['show']) {
    $this->_sections['tribearmor1']['total'] = $this->_sections['tribearmor1']['loop'];
    if ($this->_sections['tribearmor1']['total'] == 0)
        $this->_sections['tribearmor1']['show'] = false;
} else
    $this->_sections['tribearmor1']['total'] = 0;
if ($this->_sections['tribearmor1']['show']):

            for ($this->_sections['tribearmor1']['index'] = $this->_sections['tribearmor1']['start'], $this->_sections['tribearmor1']['iteration'] = 1;
                 $this->_sections['tribearmor1']['iteration'] <= $this->_sections['tribearmor1']['total'];
                 $this->_sections['tribearmor1']['index'] += $this->_sections['tribearmor1']['step'], $this->_sections['tribearmor1']['iteration']++):
$this->_sections['tribearmor1']['rownum'] = $this->_sections['tribearmor1']['iteration'];
$this->_sections['tribearmor1']['index_prev'] = $this->_sections['tribearmor1']['index'] - $this->_sections['tribearmor1']['step'];
$this->_sections['tribearmor1']['index_next'] = $this->_sections['tribearmor1']['index'] + $this->_sections['tribearmor1']['step'];
$this->_sections['tribearmor1']['first']      = ($this->_sections['tribearmor1']['iteration'] == 1);
$this->_sections['tribearmor1']['last']       = ($this->_sections['tribearmor1']['iteration'] == $this->_sections['tribearmor1']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Itemid'][$this->_sections['tribearmor1']['index']];  echo '">(';  echo $this->_tpl_vars['Amount2'];  echo ': ';  echo $this->_tpl_vars['Amount'][$this->_sections['tribearmor1']['index']];  echo ') ';  echo $this->_tpl_vars['Name'][$this->_sections['tribearmor1']['index']];  echo '</option>';  endfor; endif;  echo '</select> sztuk <input type="text" name="amount" size="5" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></td></tr></table></form>';  endif;  echo '';  echo $this->_tpl_vars['Message'];  echo ''; ?>
</br></br>