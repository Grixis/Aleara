<?php /* Smarty version 2.6.16, created on 2012-10-07 13:30:04
         compiled from rmarket.tpl */ ?>
<center><IMG SRC="images/locations/rynekhandlowy.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['View'] == "" && $this->_tpl_vars['Remowe'] == "" && $this->_tpl_vars['Buy'] == ""):  echo '';  echo $this->_tpl_vars['Minfo'];  echo '.<br /><ul><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=market&amp;lista=id&amp;limit=0">';  echo $this->_tpl_vars['Aview'];  echo '</a></li><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=szukaj">';  echo $this->_tpl_vars['Asearch'];  echo '</a></li><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=add">';  echo $this->_tpl_vars['Aadd'];  echo '</a></li><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=del">';  echo $this->_tpl_vars['Adelete'];  echo '</a></li><li><a href="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?view=all&amp;limit=0">';  echo $this->_tpl_vars['Alist'];  echo '</a></li></ul>(<a href="market.php">';  echo $this->_tpl_vars['Aback2'];  echo '</a>)';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'szukaj'):  echo '';  echo $this->_tpl_vars['Sinfo'];  echo ' <a href="imarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  echo $this->_tpl_vars['Sinfo2'];  echo '<br /><br /><form method="post" action="rmarket.php?view=market&amp;limit=0&amp;lista=name"><table><tr><td colspan="2" align="left">';  echo $this->_tpl_vars['Item'];  echo ': <input type="text" name="szukany" /></td></tr><tr><td colspan="2" align="left"><input type="submit" value="';  echo $this->_tpl_vars['Asearch'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'market'):  echo '';  echo $this->_tpl_vars['Viewinfo'];  echo ' <a href="rmarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>.<br /><br /><table width="100%"><tr><td width="41%"><a href="rmarket.php?view=market&amp;lista=name&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></a></td><td width="10%"><a href="rmarket.php?view=market&amp;lista=power&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tpower'];  echo '</u></b></a></td><td width="8%"><a href="rmarket.php?view=market&amp;lista=minlev&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tlevel'];  echo '</u></b></a></td><td width="8%"><a href="rmarket.php?view=market&amp;lista=amount&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tamount'];  echo '</u></b></a></td><td width="13%"><a href="rmarket.php?view=market&amp;lista=cost&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tcost'];  echo '</u></b></a></td><td width="10%"><a href="rmarket.php?view=market&amp;lista=owner&amp;limit=0"><b><u>';  echo $this->_tpl_vars['Tseller'];  echo '</u></b></a></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Toptions'];  echo '</u></b></td></tr>';  unset($this->_sections['item']);
$this->_sections['item']['name'] = 'item';
$this->_sections['item']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item']['show'] = true;
$this->_sections['item']['max'] = $this->_sections['item']['loop'];
$this->_sections['item']['step'] = 1;
$this->_sections['item']['start'] = $this->_sections['item']['step'] > 0 ? 0 : $this->_sections['item']['loop']-1;
if ($this->_sections['item']['show']) {
    $this->_sections['item']['total'] = $this->_sections['item']['loop'];
    if ($this->_sections['item']['total'] == 0)
        $this->_sections['item']['show'] = false;
} else
    $this->_sections['item']['total'] = 0;
if ($this->_sections['item']['show']):

            for ($this->_sections['item']['index'] = $this->_sections['item']['start'], $this->_sections['item']['iteration'] = 1;
                 $this->_sections['item']['iteration'] <= $this->_sections['item']['total'];
                 $this->_sections['item']['index'] += $this->_sections['item']['step'], $this->_sections['item']['iteration']++):
$this->_sections['item']['rownum'] = $this->_sections['item']['iteration'];
$this->_sections['item']['index_prev'] = $this->_sections['item']['index'] - $this->_sections['item']['step'];
$this->_sections['item']['index_next'] = $this->_sections['item']['index'] + $this->_sections['item']['step'];
$this->_sections['item']['first']      = ($this->_sections['item']['iteration'] == 1);
$this->_sections['item']['last']       = ($this->_sections['item']['iteration'] == $this->_sections['item']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['item']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Power'][$this->_sections['item']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Minlev'][$this->_sections['item']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Amount'][$this->_sections['item']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Cost'][$this->_sections['item']['index']];  echo '</td><td><a href="view.php?view=';  echo $this->_tpl_vars['Owner'][$this->_sections['item']['index']];  echo '">';  echo $this->_tpl_vars['Seller'][$this->_sections['item']['index']];  echo '</a></td>';  echo $this->_tpl_vars['Action'][$this->_sections['item']['index']];  echo '';  endfor; endif;  echo '</table>';  echo $this->_tpl_vars['Previous'];  echo '';  echo $this->_tpl_vars['Next'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'add'):  echo '';  echo $this->_tpl_vars['Addinfo'];  echo ' <a href="rmarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>.<br /><br /><form method="post" action="rmarket.php?view=add&amp;step=add"><table><tr><td colspan="2">';  echo $this->_tpl_vars['Item'];  echo ': <select name="przedmiot">';  unset($this->_sections['item1']);
$this->_sections['item1']['name'] = 'item1';
$this->_sections['item1']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item1']['show'] = true;
$this->_sections['item1']['max'] = $this->_sections['item1']['loop'];
$this->_sections['item1']['step'] = 1;
$this->_sections['item1']['start'] = $this->_sections['item1']['step'] > 0 ? 0 : $this->_sections['item1']['loop']-1;
if ($this->_sections['item1']['show']) {
    $this->_sections['item1']['total'] = $this->_sections['item1']['loop'];
    if ($this->_sections['item1']['total'] == 0)
        $this->_sections['item1']['show'] = false;
} else
    $this->_sections['item1']['total'] = 0;
if ($this->_sections['item1']['show']):

            for ($this->_sections['item1']['index'] = $this->_sections['item1']['start'], $this->_sections['item1']['iteration'] = 1;
                 $this->_sections['item1']['iteration'] <= $this->_sections['item1']['total'];
                 $this->_sections['item1']['index'] += $this->_sections['item1']['step'], $this->_sections['item1']['iteration']++):
$this->_sections['item1']['rownum'] = $this->_sections['item1']['iteration'];
$this->_sections['item1']['index_prev'] = $this->_sections['item1']['index'] - $this->_sections['item1']['step'];
$this->_sections['item1']['index_next'] = $this->_sections['item1']['index'] + $this->_sections['item1']['step'];
$this->_sections['item1']['first']      = ($this->_sections['item1']['iteration'] == 1);
$this->_sections['item1']['last']       = ($this->_sections['item1']['iteration'] == $this->_sections['item1']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Itemid'][$this->_sections['item1']['index']];  echo '">';  echo $this->_tpl_vars['Name'][$this->_sections['item1']['index']];  echo ' (';  echo $this->_tpl_vars['Iamount'];  echo ': ';  echo $this->_tpl_vars['Amount'][$this->_sections['item1']['index']];  echo ')</option>';  endfor; endif;  echo '</select></td></tr><tr><td>';  echo $this->_tpl_vars['Iamount2'];  echo ':</td><td><input type="text" name="amount" /></td></tr><tr><td>';  echo $this->_tpl_vars['Icost'];  echo ':</td><td><input type="text" name="cost" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['Buy'] != ""):  echo '';  echo $this->_tpl_vars['Buyinfo'];  echo ' <a href="rmarket.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>.<br /><br /><b>';  echo $this->_tpl_vars['Item'];  echo ':</b> ';  echo $this->_tpl_vars['Name'];  echo ' <br /><b>';  echo $this->_tpl_vars['Ipower'];  echo ':</b> ';  echo $this->_tpl_vars['Power'];  echo ' <br /><b>';  echo $this->_tpl_vars['Oamount'];  echo ':</b> ';  echo $this->_tpl_vars['Amount1'];  echo ' <br /><b>';  echo $this->_tpl_vars['Icost'];  echo ':</b> ';  echo $this->_tpl_vars['Cost'];  echo ' <br /><b>';  echo $this->_tpl_vars['Iseller'];  echo ':</b> <a href="view.php?view=';  echo $this->_tpl_vars['Sid'];  echo '">';  echo $this->_tpl_vars['Seller'];  echo '</a> <br /><br /><form method="post" action="rmarket.php?buy=';  echo $this->_tpl_vars['Itemid'];  echo '&amp;step=buy"><table><tr><td>';  echo $this->_tpl_vars['Bamount'];  echo ':</td><td><input type="text" name="amount" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Abuy'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'all'):  echo '';  echo $this->_tpl_vars['Listinfo'];  echo '<br /><table width="70%"><tr><td width="60%"><b><u>';  echo $this->_tpl_vars['Iname'];  echo '</u></b></td><td align="center" width="20%"><b><u>';  echo $this->_tpl_vars['Iamount'];  echo '</u></b></td><td width="20%" align="center"><b><u>';  echo $this->_tpl_vars['Iaction'];  echo '</u></b></td></tr>';  unset($this->_sections['all']);
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
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['all']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Amount'][$this->_sections['all']['index']];  echo '</td><td align="center"><form method="post" action="rmarket.php?view=market&amp;limit=0&amp;lista=id"><input type="hidden" name="szukany" value="';  echo $this->_tpl_vars['Name'][$this->_sections['all']['index']];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Ashow'];  echo '" /></form></td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  echo $this->_tpl_vars['Message'];  echo ''; ?>