<?php /* Smarty version 2.6.16, created on 2012-10-09 11:03:43
         compiled from mmarket.tpl */ ?>
<center><IMG SRC="images/locations/rynekhandlowy.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['View'] == "" && $this->_tpl_vars['Delete'] == "" && $this->_tpl_vars['Buy'] == ""):  echo '';  echo $this->_tpl_vars['Minfo'];  echo '<br /><ul><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=market&amp;lista=id&amp;limit=0">';  echo $this->_tpl_vars['Aview'];  echo '</a><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=szukaj">';  echo $this->_tpl_vars['Asearch'];  echo '</a></li><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=add">';  echo $this->_tpl_vars['Aadd'];  echo '</a><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=del">';  echo $this->_tpl_vars['Adelete'];  echo '</a><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=all">';  echo $this->_tpl_vars['Alist'];  echo '</a></ul>(<a href="market.php">';  echo $this->_tpl_vars['Aback2'];  echo '</a>)';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'szukaj'):  echo '';  echo $this->_tpl_vars['Sinfo'];  echo ' <a href="mmarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>. ';  echo $this->_tpl_vars['Sinfo2'];  echo '<br /><br /><form method="post" action="mmarket.php?view=market&amp;limit=0&amp;lista=name"><table><tr><td colspan="2">';  echo $this->_tpl_vars['Potion2'];  echo ' <input type="text" name="szukany" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Asearch'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'market'):  echo '';  echo $this->_tpl_vars['Viewinfo'];  echo ' <a href=mmarket.php>';  echo $this->_tpl_vars['Aback'];  echo '</a>.<br /><br /><table width="100%"><tr><td width="33%"><a href="mmarket.php?view=market&amp;lista=name&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></a></td><td width="13%" align="center"><a href="mmarket.php?view=market&amp;lista=efect&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tefect'];  echo '</u></b></a></td><td width="8%"><a href="mmarket.php?view=market&amp;lista=amount&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tamount'];  echo '</u></b></a></td><td width="8%"><a href="mmarket.php?view=market&amp;lista=cost&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tcost'];  echo '</u></b></a></td><td width="20%"><a href="mmarket.php?view=market&amp;lista=owner&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tseller'];  echo '</u></b></a></td><td width="8%"><b><u>';  echo $this->_tpl_vars['Toptions'];  echo '</u></b></td></tr>';  unset($this->_sections['mmarket']);
$this->_sections['mmarket']['name'] = 'mmarket';
$this->_sections['mmarket']['loop'] = is_array($_loop=$this->_tpl_vars['Item']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mmarket']['show'] = true;
$this->_sections['mmarket']['max'] = $this->_sections['mmarket']['loop'];
$this->_sections['mmarket']['step'] = 1;
$this->_sections['mmarket']['start'] = $this->_sections['mmarket']['step'] > 0 ? 0 : $this->_sections['mmarket']['loop']-1;
if ($this->_sections['mmarket']['show']) {
    $this->_sections['mmarket']['total'] = $this->_sections['mmarket']['loop'];
    if ($this->_sections['mmarket']['total'] == 0)
        $this->_sections['mmarket']['show'] = false;
} else
    $this->_sections['mmarket']['total'] = 0;
if ($this->_sections['mmarket']['show']):

            for ($this->_sections['mmarket']['index'] = $this->_sections['mmarket']['start'], $this->_sections['mmarket']['iteration'] = 1;
                 $this->_sections['mmarket']['iteration'] <= $this->_sections['mmarket']['total'];
                 $this->_sections['mmarket']['index'] += $this->_sections['mmarket']['step'], $this->_sections['mmarket']['iteration']++):
$this->_sections['mmarket']['rownum'] = $this->_sections['mmarket']['iteration'];
$this->_sections['mmarket']['index_prev'] = $this->_sections['mmarket']['index'] - $this->_sections['mmarket']['step'];
$this->_sections['mmarket']['index_next'] = $this->_sections['mmarket']['index'] + $this->_sections['mmarket']['step'];
$this->_sections['mmarket']['first']      = ($this->_sections['mmarket']['iteration'] == 1);
$this->_sections['mmarket']['last']       = ($this->_sections['mmarket']['iteration'] == $this->_sections['mmarket']['total']);
 echo '';  echo $this->_tpl_vars['Item'][$this->_sections['mmarket']['index']];  echo '';  echo $this->_tpl_vars['Link'][$this->_sections['mmarket']['index']];  echo '';  endfor; endif;  echo '</table>';  echo $this->_tpl_vars['Previous'];  echo '';  echo $this->_tpl_vars['Next'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'add'):  echo '';  echo $this->_tpl_vars['Addinfo'];  echo ' <a href="mmarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>.<br /><br /><form method="post" action="mmarket.php?view=add&amp;step=add"><table><tr><td colspan="2">';  echo $this->_tpl_vars['Potion'];  echo ': <select name="przedmiot">';  unset($this->_sections['mmarket1']);
$this->_sections['mmarket1']['name'] = 'mmarket1';
$this->_sections['mmarket1']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mmarket1']['show'] = true;
$this->_sections['mmarket1']['max'] = $this->_sections['mmarket1']['loop'];
$this->_sections['mmarket1']['step'] = 1;
$this->_sections['mmarket1']['start'] = $this->_sections['mmarket1']['step'] > 0 ? 0 : $this->_sections['mmarket1']['loop']-1;
if ($this->_sections['mmarket1']['show']) {
    $this->_sections['mmarket1']['total'] = $this->_sections['mmarket1']['loop'];
    if ($this->_sections['mmarket1']['total'] == 0)
        $this->_sections['mmarket1']['show'] = false;
} else
    $this->_sections['mmarket1']['total'] = 0;
if ($this->_sections['mmarket1']['show']):

            for ($this->_sections['mmarket1']['index'] = $this->_sections['mmarket1']['start'], $this->_sections['mmarket1']['iteration'] = 1;
                 $this->_sections['mmarket1']['iteration'] <= $this->_sections['mmarket1']['total'];
                 $this->_sections['mmarket1']['index'] += $this->_sections['mmarket1']['step'], $this->_sections['mmarket1']['iteration']++):
$this->_sections['mmarket1']['rownum'] = $this->_sections['mmarket1']['iteration'];
$this->_sections['mmarket1']['index_prev'] = $this->_sections['mmarket1']['index'] - $this->_sections['mmarket1']['step'];
$this->_sections['mmarket1']['index_next'] = $this->_sections['mmarket1']['index'] + $this->_sections['mmarket1']['step'];
$this->_sections['mmarket1']['first']      = ($this->_sections['mmarket1']['iteration'] == 1);
$this->_sections['mmarket1']['last']       = ($this->_sections['mmarket1']['iteration'] == $this->_sections['mmarket1']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Itemid'][$this->_sections['mmarket1']['index']];  echo '">';  echo $this->_tpl_vars['Name'][$this->_sections['mmarket1']['index']];  echo ' (';  echo $this->_tpl_vars['Pamount2'];  echo ': ';  echo $this->_tpl_vars['Amount'][$this->_sections['mmarket1']['index']];  echo ')</option>';  endfor; endif;  echo '</select></td></tr><tr><td>';  echo $this->_tpl_vars['Pamount'];  echo ':</td><td><input type="text" name="amount" /></td></tr><tr><td>';  echo $this->_tpl_vars['Pcost'];  echo ':</td><td><input type="text" name="cost" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'all'):  echo '';  echo $this->_tpl_vars['Listinfo'];  echo '<br /><table width="70%"><tr><td width="60%"><b><u>';  echo $this->_tpl_vars['Pname'];  echo '</u></b></td><td width="20%"><b><u>';  echo $this->_tpl_vars['Pamount'];  echo '</u></b></td><td width="20%" align="center"><b><u>';  echo $this->_tpl_vars['Paction'];  echo '</u></b></td></tr>';  unset($this->_sections['all']);
$this->_sections['all']['name'] = 'all';
$this->_sections['all']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['all']['show'] = true;
$this->_sections['all']['max'] = $this->_sections['all']['loop'];
$this->_sections['all']['step'] = 1;
$this->_sections['all']['start'] = $this->_sections['all']['step'] > 0 ? 0 : $this->_sections['all']['loop']-1;
if ($this->_sections['all']['show']) {
    $this->_sections['all']['total'] = $this->_sections['all']['loop'];
    if ($this->_sections['all']['total'] == 0)
        $this->_sections['all']['show'] = false;
} else
    $this->_sections['all']['total'] = 0;
if ($this->_sections['all']['show']):

            for ($this->_sections['all']['index'] = $this->_sections['all']['start'], $this->_sections['all']['iteration'] = 1;
                 $this->_sections['all']['iteration'] <= $this->_sections['all']['total'];
                 $this->_sections['all']['index'] += $this->_sections['all']['step'], $this->_sections['all']['iteration']++):
$this->_sections['all']['rownum'] = $this->_sections['all']['iteration'];
$this->_sections['all']['index_prev'] = $this->_sections['all']['index'] - $this->_sections['all']['step'];
$this->_sections['all']['index_next'] = $this->_sections['all']['index'] + $this->_sections['all']['step'];
$this->_sections['all']['first']      = ($this->_sections['all']['iteration'] == 1);
$this->_sections['all']['last']       = ($this->_sections['all']['iteration'] == $this->_sections['all']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['all']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Amount'][$this->_sections['all']['index']];  echo '</td><td align="center"><form method="post" action="mmarket.php?view=market&amp;limit=0&amp;lista=id"><input type="hidden" name="szukany" value="';  echo $this->_tpl_vars['Name'][$this->_sections['all']['index']];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Ashow'];  echo '" /></form></td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['Buy'] != ""):  echo '';  echo $this->_tpl_vars['Buyinfo'];  echo ' <a href="mmarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>.<br /><br /><b>';  echo $this->_tpl_vars['Potion'];  echo ':</b> ';  echo $this->_tpl_vars['Name'];  echo ' <br />';  if ($this->_tpl_vars['Type'] == 'M' || $this->_tpl_vars['Type'] == 'P'):  echo '<b>';  echo $this->_tpl_vars['Ppower'];  echo ':</b> ';  echo $this->_tpl_vars['Power'];  echo ' %<br />';  endif;  echo '<b>';  echo $this->_tpl_vars['Oamount'];  echo ':</b> ';  echo $this->_tpl_vars['Amount1'];  echo ' <br /><b>';  echo $this->_tpl_vars['Pcost'];  echo ':</b> ';  echo $this->_tpl_vars['Cost'];  echo ' <br /><b>';  echo $this->_tpl_vars['Pseller'];  echo ':</b> <a href="view.php?view=';  echo $this->_tpl_vars['Sid'];  echo '">';  echo $this->_tpl_vars['Seller'];  echo '</a> <br /><br /><table><form method="post" action="mmarket.php?buy=';  echo $this->_tpl_vars['Itemid'];  echo '&amp;step=buy"><tr><td>';  echo $this->_tpl_vars['Bamount'];  echo ':</td><td><input type="text" name="amount" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Abuy'];  echo '" /></td></tr></form></table>';  endif;  echo '';  echo $this->_tpl_vars['Message'];  echo ''; ?>