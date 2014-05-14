<?php /* Smarty version 2.6.16, created on 2012-10-06 00:43:04
         compiled from pmarket.tpl */ ?>
<center><IMG SRC="images/locations/rynekhandlowy.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['View'] == "" && $this->_tpl_vars['Delete'] == "" && $this->_tpl_vars['Buy'] == ""):  echo '';  echo $this->_tpl_vars['Minfo'];  echo '<br /><ul><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=market&amp;lista=id&amp;limit=0">';  echo $this->_tpl_vars['Aview'];  echo '</a><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=szukaj">';  echo $this->_tpl_vars['Asearch'];  echo '</a></li><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=add">';  echo $this->_tpl_vars['Aadd'];  echo '</a><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=del">';  echo $this->_tpl_vars['Adelete'];  echo '</a><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=all">';  echo $this->_tpl_vars['Alist'];  echo '</a></ul>(<a href="market.php">';  echo $this->_tpl_vars['Aback2'];  echo '</a>)';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'szukaj'):  echo '';  echo $this->_tpl_vars['Sinfo'];  echo ' <a href="pmarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>. ';  echo $this->_tpl_vars['Sinfo2'];  echo '<br /><br /><form method="post" action="pmarket.php?view=market&amp;limit=0&amp;lista=nazwa"><table><tr><td colspan="2">';  echo $this->_tpl_vars['Mineral'];  echo ': <input type="text" name="szukany" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Asearch'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'market'):  echo '';  echo $this->_tpl_vars['Viewinfo'];  echo ' <a href="pmarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>.<br /><br /><table width="100%"><tr><td width="35%"><a href="pmarket.php?view=market&amp;lista=nazwa&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Mineral'];  echo '</u></b></a></td><td width="15%"><a href="pmarket.php?view=market&amp;lista=ilosc&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tamount'];  echo '</u></b></a></td><td width="15%"><a href="pmarket.php?view=market&amp;lista=cost&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tcost'];  echo '</u></b></a></td><td width="20%"><a href="pmarket.php?view=market&amp;lista=seller&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tseller'];  echo '</u></b></a></td><td width="15%"><b><u>';  echo $this->_tpl_vars['Toptions'];  echo '</u></b></td></tr>';  unset($this->_sections['pmarket']);
$this->_sections['pmarket']['name'] = 'pmarket';
$this->_sections['pmarket']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pmarket']['show'] = true;
$this->_sections['pmarket']['max'] = $this->_sections['pmarket']['loop'];
$this->_sections['pmarket']['step'] = 1;
$this->_sections['pmarket']['start'] = $this->_sections['pmarket']['step'] > 0 ? 0 : $this->_sections['pmarket']['loop']-1;
if ($this->_sections['pmarket']['show']) {
    $this->_sections['pmarket']['total'] = $this->_sections['pmarket']['loop'];
    if ($this->_sections['pmarket']['total'] == 0)
        $this->_sections['pmarket']['show'] = false;
} else
    $this->_sections['pmarket']['total'] = 0;
if ($this->_sections['pmarket']['show']):

            for ($this->_sections['pmarket']['index'] = $this->_sections['pmarket']['start'], $this->_sections['pmarket']['iteration'] = 1;
                 $this->_sections['pmarket']['iteration'] <= $this->_sections['pmarket']['total'];
                 $this->_sections['pmarket']['index'] += $this->_sections['pmarket']['step'], $this->_sections['pmarket']['iteration']++):
$this->_sections['pmarket']['rownum'] = $this->_sections['pmarket']['iteration'];
$this->_sections['pmarket']['index_prev'] = $this->_sections['pmarket']['index'] - $this->_sections['pmarket']['step'];
$this->_sections['pmarket']['index_next'] = $this->_sections['pmarket']['index'] + $this->_sections['pmarket']['step'];
$this->_sections['pmarket']['first']      = ($this->_sections['pmarket']['iteration'] == 1);
$this->_sections['pmarket']['last']       = ($this->_sections['pmarket']['iteration'] == $this->_sections['pmarket']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['pmarket']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Amount'][$this->_sections['pmarket']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Cost'][$this->_sections['pmarket']['index']];  echo '</td><td><a href="view.php?view=';  echo $this->_tpl_vars['Seller'][$this->_sections['pmarket']['index']];  echo '">';  echo $this->_tpl_vars['User'][$this->_sections['pmarket']['index']];  echo '</a></td>';  echo $this->_tpl_vars['Link'][$this->_sections['pmarket']['index']];  echo '';  endfor; endif;  echo '</table>';  echo $this->_tpl_vars['Previous'];  echo '';  echo $this->_tpl_vars['Next'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'add'):  echo '';  echo $this->_tpl_vars['Addinfo'];  echo ' <a href="pmarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>.<br /><br />';  if ($this->_tpl_vars['Addofert'] == '0'):  echo '<form method="post" action="pmarket.php?view=add&amp;step=add"><table><tr><td>';  echo $this->_tpl_vars['Mineral'];  echo ':</td><td><select name="mineral">';  unset($this->_sections['pmarket2']);
$this->_sections['pmarket2']['name'] = 'pmarket2';
$this->_sections['pmarket2']['loop'] = is_array($_loop=$this->_tpl_vars['Minerals']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pmarket2']['show'] = true;
$this->_sections['pmarket2']['max'] = $this->_sections['pmarket2']['loop'];
$this->_sections['pmarket2']['step'] = 1;
$this->_sections['pmarket2']['start'] = $this->_sections['pmarket2']['step'] > 0 ? 0 : $this->_sections['pmarket2']['loop']-1;
if ($this->_sections['pmarket2']['show']) {
    $this->_sections['pmarket2']['total'] = $this->_sections['pmarket2']['loop'];
    if ($this->_sections['pmarket2']['total'] == 0)
        $this->_sections['pmarket2']['show'] = false;
} else
    $this->_sections['pmarket2']['total'] = 0;
if ($this->_sections['pmarket2']['show']):

            for ($this->_sections['pmarket2']['index'] = $this->_sections['pmarket2']['start'], $this->_sections['pmarket2']['iteration'] = 1;
                 $this->_sections['pmarket2']['iteration'] <= $this->_sections['pmarket2']['total'];
                 $this->_sections['pmarket2']['index'] += $this->_sections['pmarket2']['step'], $this->_sections['pmarket2']['iteration']++):
$this->_sections['pmarket2']['rownum'] = $this->_sections['pmarket2']['iteration'];
$this->_sections['pmarket2']['index_prev'] = $this->_sections['pmarket2']['index'] - $this->_sections['pmarket2']['step'];
$this->_sections['pmarket2']['index_next'] = $this->_sections['pmarket2']['index'] + $this->_sections['pmarket2']['step'];
$this->_sections['pmarket2']['first']      = ($this->_sections['pmarket2']['iteration'] == 1);
$this->_sections['pmarket2']['last']       = ($this->_sections['pmarket2']['iteration'] == $this->_sections['pmarket2']['total']);
 echo '<option value="';  echo $this->_sections['pmarket2']['index'];  echo '">';  echo $this->_tpl_vars['Minerals'][$this->_sections['pmarket2']['index']];  echo ' (';  echo $this->_tpl_vars['Tamount'];  echo ': ';  if ($this->_tpl_vars['Mineralsamount'][$this->_sections['pmarket2']['index']] != ""):  echo '';  echo $this->_tpl_vars['Mineralsamount'][$this->_sections['pmarket2']['index']];  echo '';  else:  echo '0';  endif;  echo ')</option>';  endfor; endif;  echo '</select></td></tr><tr><td>';  echo $this->_tpl_vars['Mamount'];  echo ':</td><td><input type="text" name="amount" /></td></tr><tr><td>';  echo $this->_tpl_vars['Mcost'];  echo ':</td><td><input type="text" name="cost" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['Addofert'] != '0'):  echo '<form method="post" action="pmarket.php?view=add&amp;step=add">';  echo $this->_tpl_vars['Youwant'];  echo '<br /><input type="hidden" name="ofert" value="';  echo $this->_tpl_vars['Addofert'];  echo '" /><input type="hidden" name="mineral" value="';  echo $this->_tpl_vars['Mineralname'];  echo '" /><input type="hidden" name="amount" value="';  echo $this->_tpl_vars['Mineralamount'];  echo '" /><input type="hidden" name="cost" value="';  echo $this->_tpl_vars['Mineralcost'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Ayes'];  echo '" /></form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'all'):  echo '';  echo $this->_tpl_vars['Listinfo'];  echo '<br /><table width="50%"><tr><td width="50%"><b><u>';  echo $this->_tpl_vars['Mname'];  echo '</u></b></td><td align="center" width="25%"><b><u>';  echo $this->_tpl_vars['Mamount'];  echo '</u></b></td><td align="center" width="50%"><b><u>';  echo $this->_tpl_vars['Maction'];  echo '</u></b></td></tr>';  unset($this->_sections['all']);
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
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['all']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Amount'][$this->_sections['all']['index']];  echo '</td><td align="center"><form method="post" action="pmarket.php?view=market&amp;limit=0&amp;lista=id"><input type="hidden" name="szukany" value="';  echo $this->_tpl_vars['Name'][$this->_sections['all']['index']];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Ashow'];  echo '" /></form></td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['Buy'] != ""):  echo '';  echo $this->_tpl_vars['Buyinfo'];  echo ' <a href="pmarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>.<br /><br /><b>';  echo $this->_tpl_vars['Mineral'];  echo ':</b> ';  echo $this->_tpl_vars['Name'];  echo ' <br /><b>';  echo $this->_tpl_vars['Oamount'];  echo ':</b> ';  echo $this->_tpl_vars['Amount1'];  echo ' <br /><b>';  echo $this->_tpl_vars['Mcost'];  echo ':</b> ';  echo $this->_tpl_vars['Cost'];  echo ' <br /><b>';  echo $this->_tpl_vars['Mseller'];  echo ':</b> <a href="view.php?view=';  echo $this->_tpl_vars['Sellerid'];  echo '">';  echo $this->_tpl_vars['Seller'];  echo '</a> <br /><br /><table><form method="post" action="pmarket.php?buy=';  echo $this->_tpl_vars['Itemid'];  echo '&amp;step=buy"><tr><td>';  echo $this->_tpl_vars['Bamount'];  echo ':</td><td><input type="text" name="amount" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Abuy'];  echo '" /></td></tr></form></table>';  endif;  echo '';  echo $this->_tpl_vars['Message'];  echo ''; ?>