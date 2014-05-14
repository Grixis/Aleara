<?php /* Smarty version 2.6.16, created on 2013-02-20 16:36:45
         compiled from mag.tpl */ ?>
<?php if ($this->_tpl_vars['Location'] == 'Altara'): ?>
Spis Magów.
<br><br><br>
<?php if ($this->_tpl_vars['Number'] > '0'): ?>
<table>
<tr>
<td width="100"><b><u>Nick Maga:</td>
<td width="50"><b><u>ID:</td>
<td width="200"><b><u>Poziom Maga</u></b></td>

</tr>
<?php unset($this->_sections['mag']);
$this->_sections['mag']['name'] = 'mag';
$this->_sections['mag']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mag']['show'] = true;
$this->_sections['mag']['max'] = $this->_sections['mag']['loop'];
$this->_sections['mag']['step'] = 1;
$this->_sections['mag']['start'] = $this->_sections['mag']['step'] > 0 ? 0 : $this->_sections['mag']['loop']-1;
if ($this->_sections['mag']['show']) {
    $this->_sections['mag']['total'] = $this->_sections['mag']['loop'];
    if ($this->_sections['mag']['total'] == 0)
        $this->_sections['mag']['show'] = false;
} else
    $this->_sections['mag']['total'] = 0;
if ($this->_sections['mag']['show']):

            for ($this->_sections['mag']['index'] = $this->_sections['mag']['start'], $this->_sections['mag']['iteration'] = 1;
                 $this->_sections['mag']['iteration'] <= $this->_sections['mag']['total'];
                 $this->_sections['mag']['index'] += $this->_sections['mag']['step'], $this->_sections['mag']['iteration']++):
$this->_sections['mag']['rownum'] = $this->_sections['mag']['iteration'];
$this->_sections['mag']['index_prev'] = $this->_sections['mag']['index'] - $this->_sections['mag']['step'];
$this->_sections['mag']['index_next'] = $this->_sections['mag']['index'] + $this->_sections['mag']['step'];
$this->_sections['mag']['first']      = ($this->_sections['mag']['iteration'] == 1);
$this->_sections['mag']['last']       = ($this->_sections['mag']['iteration'] == $this->_sections['mag']['total']);
?>
<tr>
<td><a href=view.php?view=<?php echo $this->_tpl_vars['Id'][$this->_sections['mag']['index']]; ?>
><?php echo $this->_tpl_vars['Name'][$this->_sections['mag']['index']]; ?>
</a></td>
<td><?php echo $this->_tpl_vars['Id'][$this->_sections['mag']['index']]; ?>
</td>
<td><?php echo $this->_tpl_vars['Level'][$this->_sections['mag']['index']]; ?>
</td>
</tr>
<?php endfor; endif; ?>
</table>

<?php endif; ?>

<?php endif; ?>

<a href="cech.php">wróc od Głównej Hali Dziedzińca</a>
