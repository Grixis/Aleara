<?php /* Smarty version 2.6.16, created on 2012-10-06 20:27:19
         compiled from gieldasell.tpl */ ?>
<!-- Napisane przez Marcina Bratka - m.bratek@gmail.com -->
     Tutaj możesz sprzedawać zakupione aukcje. Pamiętaj!
     Sprzedawaj tylko wtedy, gdy będziesz wiedział, że Ci się to opłaci. Sprzedawaj z godnie z zasadą:
     <br /><i>Kupuj tanio - sprzedawaj drożej</i><br />
     Oto wszystkie twoje kupione akcję:
     <br /><a href="gielda.php">Zobacz akcje do kupienia</a>
     
    <br /><br /><br />
<?php if ($this->_tpl_vars['Number'] > '0'): ?>
     <form action="gieldasell.php?action=sell" method="post">
	Ile akcji sprzedać? <input type="text" name="sztuk" value="0">
	ID Akcji:  <input type="text" name="id" value="0">
	<input type="submit" value="Sprzedaj"></form></center>
    <table>
    <tr>
    <td width="100">ID Akcji:</td>
    <td width="100"><b>Ilość:<u></td>
    </tr>
    <?php unset($this->_sections['strList']);
$this->_sections['strList']['name'] = 'strList';
$this->_sections['strList']['loop'] = is_array($_loop=$this->_tpl_vars['Amount']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['strList']['show'] = true;
$this->_sections['strList']['max'] = $this->_sections['strList']['loop'];
$this->_sections['strList']['step'] = 1;
$this->_sections['strList']['start'] = $this->_sections['strList']['step'] > 0 ? 0 : $this->_sections['strList']['loop']-1;
if ($this->_sections['strList']['show']) {
    $this->_sections['strList']['total'] = $this->_sections['strList']['loop'];
    if ($this->_sections['strList']['total'] == 0)
        $this->_sections['strList']['show'] = false;
} else
    $this->_sections['strList']['total'] = 0;
if ($this->_sections['strList']['show']):

            for ($this->_sections['strList']['index'] = $this->_sections['strList']['start'], $this->_sections['strList']['iteration'] = 1;
                 $this->_sections['strList']['iteration'] <= $this->_sections['strList']['total'];
                 $this->_sections['strList']['index'] += $this->_sections['strList']['step'], $this->_sections['strList']['iteration']++):
$this->_sections['strList']['rownum'] = $this->_sections['strList']['iteration'];
$this->_sections['strList']['index_prev'] = $this->_sections['strList']['index'] - $this->_sections['strList']['step'];
$this->_sections['strList']['index_next'] = $this->_sections['strList']['index'] + $this->_sections['strList']['step'];
$this->_sections['strList']['first']      = ($this->_sections['strList']['iteration'] == 1);
$this->_sections['strList']['last']       = ($this->_sections['strList']['iteration'] == $this->_sections['strList']['total']);
?>
        <tr>
        <td><?php echo $this->_tpl_vars['akcja'][$this->_sections['strList']['index']]; ?>
</td>
        <td><?php echo $this->_tpl_vars['Amount'][$this->_sections['strList']['index']]; ?>
</td>
        </tr>
    <?php endfor; endif; ?>
    </table>
    
<?php else: ?>

Nie masz żadnych zakupionych akcji!

<?php endif; ?>