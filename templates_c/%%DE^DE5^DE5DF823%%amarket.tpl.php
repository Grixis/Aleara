<?php /* Smarty version 2.6.16, created on 2012-10-09 13:25:00
         compiled from amarket.tpl */ ?>
<?php echo '';  if ($this->_tpl_vars['View'] == "" && $this->_tpl_vars['Remowe'] == "" && $this->_tpl_vars['Buy'] == ""):  echo '';  echo $this->_tpl_vars['Minfo'];  echo '.<br /><ul><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=market&amp;lista=id&amp;limit=0">';  echo $this->_tpl_vars['Aview'];  echo '</a><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=szukaj">';  echo $this->_tpl_vars['Asearch'];  echo '</a></li><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=add">';  echo $this->_tpl_vars['Aadd'];  echo '</a><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=del">';  echo $this->_tpl_vars['Adelete'];  echo '</a><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=all">';  echo $this->_tpl_vars['Alist'];  echo '</a></ul>(<a href="market.php">';  echo $this->_tpl_vars['Aback2'];  echo '</a>)';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'szukaj'):  echo '';  echo $this->_tpl_vars['Sinfo'];  echo ' <a href="amarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>. ';  echo $this->_tpl_vars['Sinfo2'];  echo '.<br /><br /><form method="post" action="amarket.php?view=market&amp;limit=0&amp;lista=type"><table><tr><td colspan="2">';  echo $this->_tpl_vars['Astral'];  echo ': <input type="text" name="szukany" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Asearch'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'market'):  echo '';  echo $this->_tpl_vars['Viewinfo'];  echo ' <a href="amarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>.<br /><br /><table width="100%"><tr><td width="35%"><a href="amarket.php?view=market&amp;lista=type&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tastral'];  echo '</u></b></a></td><td width="10%"><a href="amarket.php?view=market&amp;lista=number&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tnumber'];  echo '</u></b></a></td><td width="10%"><a href="amarket.php?view=market&amp;lista=amount&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tamount'];  echo '</u></b></a></td><td width="10%"><a href="amarket.php?view=market&amp;lista=cost&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tcost'];  echo '</u></b></a></td><td width="20%"><a href="amarket.php?view=market&amp;lista=seller&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tseller'];  echo '</u></b></a></td><td width="15%"><b><u>';  echo $this->_tpl_vars['Toptions'];  echo '</u></b></td></tr>';  unset($this->_sections['herb']);
$this->_sections['herb']['name'] = 'herb';
$this->_sections['herb']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['herb']['show'] = true;
$this->_sections['herb']['max'] = $this->_sections['herb']['loop'];
$this->_sections['herb']['step'] = 1;
$this->_sections['herb']['start'] = $this->_sections['herb']['step'] > 0 ? 0 : $this->_sections['herb']['loop']-1;
if ($this->_sections['herb']['show']) {
    $this->_sections['herb']['total'] = $this->_sections['herb']['loop'];
    if ($this->_sections['herb']['total'] == 0)
        $this->_sections['herb']['show'] = false;
} else
    $this->_sections['herb']['total'] = 0;
if ($this->_sections['herb']['show']):

            for ($this->_sections['herb']['index'] = $this->_sections['herb']['start'], $this->_sections['herb']['iteration'] = 1;
                 $this->_sections['herb']['iteration'] <= $this->_sections['herb']['total'];
                 $this->_sections['herb']['index'] += $this->_sections['herb']['step'], $this->_sections['herb']['iteration']++):
$this->_sections['herb']['rownum'] = $this->_sections['herb']['iteration'];
$this->_sections['herb']['index_prev'] = $this->_sections['herb']['index'] - $this->_sections['herb']['step'];
$this->_sections['herb']['index_next'] = $this->_sections['herb']['index'] + $this->_sections['herb']['step'];
$this->_sections['herb']['first']      = ($this->_sections['herb']['iteration'] == 1);
$this->_sections['herb']['last']       = ($this->_sections['herb']['iteration'] == $this->_sections['herb']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['herb']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Number'][$this->_sections['herb']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Amount'][$this->_sections['herb']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Cost'][$this->_sections['herb']['index']];  echo '</td><td><a href="view.php?view=';  echo $this->_tpl_vars['Seller'][$this->_sections['herb']['index']];  echo '">';  echo $this->_tpl_vars['User'][$this->_sections['herb']['index']];  echo '</a></td>';  echo $this->_tpl_vars['Action'][$this->_sections['herb']['index']];  echo '';  endfor; endif;  echo '</table>';  echo $this->_tpl_vars['Previous'];  echo '';  echo $this->_tpl_vars['Next'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'add'):  echo '';  echo $this->_tpl_vars['Addinfo'];  echo ' <a href="amarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>.<br /><br />';  if ($this->_tpl_vars['Addofert'] == '0'):  echo '';  echo $this->_tpl_vars['Tadd'];  echo '<br /><form method="post" action="amarket.php?view=add&amp;step=piece"><table><tr><td>';  echo $this->_tpl_vars['Astral'];  echo ':</td><td><select name="name">';  unset($this->_sections['addherb']);
$this->_sections['addherb']['name'] = 'addherb';
$this->_sections['addherb']['loop'] = is_array($_loop=$this->_tpl_vars['Herbname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['addherb']['show'] = true;
$this->_sections['addherb']['max'] = $this->_sections['addherb']['loop'];
$this->_sections['addherb']['step'] = 1;
$this->_sections['addherb']['start'] = $this->_sections['addherb']['step'] > 0 ? 0 : $this->_sections['addherb']['loop']-1;
if ($this->_sections['addherb']['show']) {
    $this->_sections['addherb']['total'] = $this->_sections['addherb']['loop'];
    if ($this->_sections['addherb']['total'] == 0)
        $this->_sections['addherb']['show'] = false;
} else
    $this->_sections['addherb']['total'] = 0;
if ($this->_sections['addherb']['show']):

            for ($this->_sections['addherb']['index'] = $this->_sections['addherb']['start'], $this->_sections['addherb']['iteration'] = 1;
                 $this->_sections['addherb']['iteration'] <= $this->_sections['addherb']['total'];
                 $this->_sections['addherb']['index'] += $this->_sections['addherb']['step'], $this->_sections['addherb']['iteration']++):
$this->_sections['addherb']['rownum'] = $this->_sections['addherb']['iteration'];
$this->_sections['addherb']['index_prev'] = $this->_sections['addherb']['index'] - $this->_sections['addherb']['step'];
$this->_sections['addherb']['index_next'] = $this->_sections['addherb']['index'] + $this->_sections['addherb']['step'];
$this->_sections['addherb']['first']      = ($this->_sections['addherb']['iteration'] == 1);
$this->_sections['addherb']['last']       = ($this->_sections['addherb']['iteration'] == $this->_sections['addherb']['total']);
 echo '<option value="';  echo $this->_sections['addherb']['index'];  echo '">';  echo $this->_tpl_vars['Herbname'][$this->_sections['addherb']['index']];  echo '</option>';  endfor; endif;  echo '</select></td></tr><tr><td>';  echo $this->_tpl_vars['Anumber'];  echo ':</td><td><input type="text" name="number" /></td></tr><tr><td>';  echo $this->_tpl_vars['Hamount'];  echo ':</td><td><input type="text" name="amount" /></td></tr><tr><td>';  echo $this->_tpl_vars['Hcost'];  echo ':</td><td><input type="text" name="cost" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></td></tr></table></form><br />';  echo $this->_tpl_vars['Tadd2'];  echo '<br /><form method="post" action="amarket.php?view=add&amp;step=component"><table><tr><td>';  echo $this->_tpl_vars['Astral'];  echo ':</td><td><select name="name">';  unset($this->_sections['addherb2']);
$this->_sections['addherb2']['name'] = 'addherb2';
$this->_sections['addherb2']['loop'] = is_array($_loop=$this->_tpl_vars['Aname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['addherb2']['show'] = true;
$this->_sections['addherb2']['max'] = $this->_sections['addherb2']['loop'];
$this->_sections['addherb2']['step'] = 1;
$this->_sections['addherb2']['start'] = $this->_sections['addherb2']['step'] > 0 ? 0 : $this->_sections['addherb2']['loop']-1;
if ($this->_sections['addherb2']['show']) {
    $this->_sections['addherb2']['total'] = $this->_sections['addherb2']['loop'];
    if ($this->_sections['addherb2']['total'] == 0)
        $this->_sections['addherb2']['show'] = false;
} else
    $this->_sections['addherb2']['total'] = 0;
if ($this->_sections['addherb2']['show']):

            for ($this->_sections['addherb2']['index'] = $this->_sections['addherb2']['start'], $this->_sections['addherb2']['iteration'] = 1;
                 $this->_sections['addherb2']['iteration'] <= $this->_sections['addherb2']['total'];
                 $this->_sections['addherb2']['index'] += $this->_sections['addherb2']['step'], $this->_sections['addherb2']['iteration']++):
$this->_sections['addherb2']['rownum'] = $this->_sections['addherb2']['iteration'];
$this->_sections['addherb2']['index_prev'] = $this->_sections['addherb2']['index'] - $this->_sections['addherb2']['step'];
$this->_sections['addherb2']['index_next'] = $this->_sections['addherb2']['index'] + $this->_sections['addherb2']['step'];
$this->_sections['addherb2']['first']      = ($this->_sections['addherb2']['iteration'] == 1);
$this->_sections['addherb2']['last']       = ($this->_sections['addherb2']['iteration'] == $this->_sections['addherb2']['total']);
 echo '<option value="';  echo $this->_sections['addherb2']['index'];  echo '">';  echo $this->_tpl_vars['Aname'][$this->_sections['addherb2']['index']];  echo '</option>';  endfor; endif;  echo '</select></td></tr><tr><td><input type="hidden" name="number" value="1" /></td></tr><tr><td>';  echo $this->_tpl_vars['Hamount'];  echo ':</td><td><input type="text" name="amount" /></td></tr><tr><td>';  echo $this->_tpl_vars['Hcost'];  echo ':</td><td><input type="text" name="cost" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['Addofert'] != '0'):  echo '<form method="post" action="amarket.php?view=add&amp;step=';  echo $this->_tpl_vars['Step'];  echo '">';  echo $this->_tpl_vars['Youwant'];  echo '<br /><input type="hidden" name="ofert" value="';  echo $this->_tpl_vars['Addofert'];  echo '" /><input type="hidden" name="name" value="';  echo $this->_tpl_vars['Herbname'];  echo '" /><input type="hidden" name="amount" value="';  echo $this->_tpl_vars['Herbamount'];  echo '" /><input type="hidden" name="cost" value="';  echo $this->_tpl_vars['Herbcost'];  echo '" /><input type="hidden" name="number" value="';  echo $this->_tpl_vars['Astralnumber'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Ayes'];  echo '" /></form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'all'):  echo '';  echo $this->_tpl_vars['Listinfo'];  echo '<br /><table width="50%"><tr><td width="50%"><b><u>';  echo $this->_tpl_vars['Hname'];  echo '</u></b></td><td width="25%" align="center"><b><u>';  echo $this->_tpl_vars['Hamount'];  echo '</u></b></td><td width="25%" align="center"><b><u>';  echo $this->_tpl_vars['Haction'];  echo '</u></b></td></tr>';  unset($this->_sections['all']);
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
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['all']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Amount'][$this->_sections['all']['index']];  echo '</td><td align="center"><form method="post" action="amarket.php?view=market&amp;limit=0&amp;lista=id"><input type="hidden" name="szukany" value="';  echo $this->_tpl_vars['Name'][$this->_sections['all']['index']];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Ashow'];  echo '" /></form></td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['Buy'] != ""):  echo '';  echo $this->_tpl_vars['Buyinfo'];  echo ' <a href="amarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>.<br /><br /><b>';  echo $this->_tpl_vars['Bherb'];  echo ':</b> ';  echo $this->_tpl_vars['Name'];  echo ' <br /><b>';  echo $this->_tpl_vars['Tnumber'];  echo ':</b> ';  echo $this->_tpl_vars['Anumber'];  echo ' <br /><b>';  echo $this->_tpl_vars['Oamount'];  echo ':</b> ';  echo $this->_tpl_vars['Amount1'];  echo ' <br /><b>';  echo $this->_tpl_vars['Hcost'];  echo ':</b> ';  echo $this->_tpl_vars['Cost'];  echo ' <br /><b>';  echo $this->_tpl_vars['Hseller'];  echo ':</b> <a href="view.php?view=';  echo $this->_tpl_vars['Sid'];  echo '">';  echo $this->_tpl_vars['Seller'];  echo '</a> <br /><br /><table><form method="post" action="amarket.php?buy=';  echo $this->_tpl_vars['Itemid'];  echo '&amp;step=buy"><tr><td>';  echo $this->_tpl_vars['Bamount'];  echo ':</td><td><input type="text" name="amount" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Abuy'];  echo '" /></td></tr></form></table>';  endif;  echo '';  echo $this->_tpl_vars['Message'];  echo ''; ?>