<?php /* Smarty version 2.6.16, created on 2012-12-11 14:11:25
         compiled from ip.tpl */ ?>
Lista IP ( te same IP znajduj± się obok siebie ) przed zbanowaniem multikonta
spytaj się Demonixa czy dani gracze nie mają pozwolenia na multi. (takich pozwoleń
jest parę)
<br>
<br>
<br><?php if ($this->_tpl_vars['Number'] > '0'): ?>
<div id="iptabs">
<ul>
<li><a href="#tabs-1">Lista IP</a></li>
<li><a href="#tabs-2">Lista powtarzajacych sie IP</a></li>
<li><a href="#tabs-3">Lista powtarzajacych sie znacznikow przegladarek</a></li>
</ul>
<div id="tabs-1">
	<table>
		<tr>
			<td width="100"><b><u>Imie:</td>
			<td width="50"><b><u>ID:</td>
			<td width="200"><b><u>IP:</td>
		</tr>
<?php unset($this->_sections['hobbit']);
$this->_sections['hobbit']['name'] = 'hobbit';
$this->_sections['hobbit']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['hobbit']['show'] = true;
$this->_sections['hobbit']['max'] = $this->_sections['hobbit']['loop'];
$this->_sections['hobbit']['step'] = 1;
$this->_sections['hobbit']['start'] = $this->_sections['hobbit']['step'] > 0 ? 0 : $this->_sections['hobbit']['loop']-1;
if ($this->_sections['hobbit']['show']) {
    $this->_sections['hobbit']['total'] = $this->_sections['hobbit']['loop'];
    if ($this->_sections['hobbit']['total'] == 0)
        $this->_sections['hobbit']['show'] = false;
} else
    $this->_sections['hobbit']['total'] = 0;
if ($this->_sections['hobbit']['show']):

            for ($this->_sections['hobbit']['index'] = $this->_sections['hobbit']['start'], $this->_sections['hobbit']['iteration'] = 1;
                 $this->_sections['hobbit']['iteration'] <= $this->_sections['hobbit']['total'];
                 $this->_sections['hobbit']['index'] += $this->_sections['hobbit']['step'], $this->_sections['hobbit']['iteration']++):
$this->_sections['hobbit']['rownum'] = $this->_sections['hobbit']['iteration'];
$this->_sections['hobbit']['index_prev'] = $this->_sections['hobbit']['index'] - $this->_sections['hobbit']['step'];
$this->_sections['hobbit']['index_next'] = $this->_sections['hobbit']['index'] + $this->_sections['hobbit']['step'];
$this->_sections['hobbit']['first']      = ($this->_sections['hobbit']['iteration'] == 1);
$this->_sections['hobbit']['last']       = ($this->_sections['hobbit']['iteration'] == $this->_sections['hobbit']['total']);
?>
<tr>
<td><a href=view.php?view=<?php echo $this->_tpl_vars['Id'][$this->_sections['hobbit']['index']]; ?>
><?php echo $this->_tpl_vars['Name'][$this->_sections['hobbit']['index']]; ?>
</a></td>
<td><?php echo $this->_tpl_vars['Id'][$this->_sections['hobbit']['index']]; ?>
</td>
<td><?php echo $this->_tpl_vars['Ip'][$this->_sections['hobbit']['index']]; ?>
</td>

</tr>
<?php endfor; endif; ?>
</table>
</div>
<div id="tabs-2">
	<table>
		<tr>
			<td width="100"><b><u>Imie:</td>
			<td width="30"><b><u>ID:</td>
			<td width="200"><b><u>IP:</td>
			<td width="50"><b><u>Powtorzenia:</td>
		</tr>
<?php unset($this->_sections['hobbit2']);
$this->_sections['hobbit2']['name'] = 'hobbit2';
$this->_sections['hobbit2']['loop'] = is_array($_loop=$this->_tpl_vars['Name_2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['hobbit2']['show'] = true;
$this->_sections['hobbit2']['max'] = $this->_sections['hobbit2']['loop'];
$this->_sections['hobbit2']['step'] = 1;
$this->_sections['hobbit2']['start'] = $this->_sections['hobbit2']['step'] > 0 ? 0 : $this->_sections['hobbit2']['loop']-1;
if ($this->_sections['hobbit2']['show']) {
    $this->_sections['hobbit2']['total'] = $this->_sections['hobbit2']['loop'];
    if ($this->_sections['hobbit2']['total'] == 0)
        $this->_sections['hobbit2']['show'] = false;
} else
    $this->_sections['hobbit2']['total'] = 0;
if ($this->_sections['hobbit2']['show']):

            for ($this->_sections['hobbit2']['index'] = $this->_sections['hobbit2']['start'], $this->_sections['hobbit2']['iteration'] = 1;
                 $this->_sections['hobbit2']['iteration'] <= $this->_sections['hobbit2']['total'];
                 $this->_sections['hobbit2']['index'] += $this->_sections['hobbit2']['step'], $this->_sections['hobbit2']['iteration']++):
$this->_sections['hobbit2']['rownum'] = $this->_sections['hobbit2']['iteration'];
$this->_sections['hobbit2']['index_prev'] = $this->_sections['hobbit2']['index'] - $this->_sections['hobbit2']['step'];
$this->_sections['hobbit2']['index_next'] = $this->_sections['hobbit2']['index'] + $this->_sections['hobbit2']['step'];
$this->_sections['hobbit2']['first']      = ($this->_sections['hobbit2']['iteration'] == 1);
$this->_sections['hobbit2']['last']       = ($this->_sections['hobbit2']['iteration'] == $this->_sections['hobbit2']['total']);
?>
<tr>
<td><a href=view.php?view=<?php echo $this->_tpl_vars['Id_2'][$this->_sections['hobbit2']['index']]; ?>
><?php echo $this->_tpl_vars['Name_2'][$this->_sections['hobbit2']['index']]; ?>
</a></td>
<td><?php echo $this->_tpl_vars['Id_2'][$this->_sections['hobbit2']['index']]; ?>
</td>
<td><?php echo $this->_tpl_vars['Ip_2'][$this->_sections['hobbit2']['index']]; ?>
</td>
<td><?php echo $this->_tpl_vars['Count_2'][$this->_sections['hobbit2']['index']]; ?>
</td>

</tr>
<?php endfor; endif; ?>
</table>

</div>
<div id="tabs-3">
	<table>
		<tr>
			<td width="100"><b><u>Imie:</td>
			<td width="30"><b><u>ID:</td>
			<td width="200"><b><u>IP:</td>
			<td width="50"><b><u>Powtorzenia:</td>
		</tr>
<?php unset($this->_sections['hobbit3']);
$this->_sections['hobbit3']['name'] = 'hobbit3';
$this->_sections['hobbit3']['loop'] = is_array($_loop=$this->_tpl_vars['Name_3']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['hobbit3']['show'] = true;
$this->_sections['hobbit3']['max'] = $this->_sections['hobbit3']['loop'];
$this->_sections['hobbit3']['step'] = 1;
$this->_sections['hobbit3']['start'] = $this->_sections['hobbit3']['step'] > 0 ? 0 : $this->_sections['hobbit3']['loop']-1;
if ($this->_sections['hobbit3']['show']) {
    $this->_sections['hobbit3']['total'] = $this->_sections['hobbit3']['loop'];
    if ($this->_sections['hobbit3']['total'] == 0)
        $this->_sections['hobbit3']['show'] = false;
} else
    $this->_sections['hobbit3']['total'] = 0;
if ($this->_sections['hobbit3']['show']):

            for ($this->_sections['hobbit3']['index'] = $this->_sections['hobbit3']['start'], $this->_sections['hobbit3']['iteration'] = 1;
                 $this->_sections['hobbit3']['iteration'] <= $this->_sections['hobbit3']['total'];
                 $this->_sections['hobbit3']['index'] += $this->_sections['hobbit3']['step'], $this->_sections['hobbit3']['iteration']++):
$this->_sections['hobbit3']['rownum'] = $this->_sections['hobbit3']['iteration'];
$this->_sections['hobbit3']['index_prev'] = $this->_sections['hobbit3']['index'] - $this->_sections['hobbit3']['step'];
$this->_sections['hobbit3']['index_next'] = $this->_sections['hobbit3']['index'] + $this->_sections['hobbit3']['step'];
$this->_sections['hobbit3']['first']      = ($this->_sections['hobbit3']['iteration'] == 1);
$this->_sections['hobbit3']['last']       = ($this->_sections['hobbit3']['iteration'] == $this->_sections['hobbit3']['total']);
?>
<tr>
<td><a href=view.php?view=<?php echo $this->_tpl_vars['Id_3'][$this->_sections['hobbit3']['index']]; ?>
><?php echo $this->_tpl_vars['Name_3'][$this->_sections['hobbit3']['index']]; ?>
</a></td>
<td><?php echo $this->_tpl_vars['Id_3'][$this->_sections['hobbit3']['index']]; ?>
</td>
<td><?php echo $this->_tpl_vars['Ip_3'][$this->_sections['hobbit3']['index']]; ?>
</td>
<td><?php echo $this->_tpl_vars['Count_3'][$this->_sections['hobbit3']['index']]; ?>
</td>

</tr>
<?php endfor; endif; ?>
</table>

</div>
</div>
<script>$("#iptabs").tabs();</script>
<?php endif; ?>


