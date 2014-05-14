<?php /* Smarty version 2.6.16, created on 2013-02-04 09:48:19
         compiled from lista_przyjaciol.tpl */ ?>
Witaj w spisie swoich przyjaciół. Dodawaj tutaj osoby z którymi się często kontaktujesz, aby mieć do nich szybki dostęp. <br><br>

Spis przyjaciół<hr>
<table style="width: 100%">
<tr><th>Nick</th><th>Poziom</th><th>Wiadomość</th><th>Status</th><th>Opcje</th></tr>
<?php unset($this->_sections['fre']);
$this->_sections['fre']['name'] = 'fre';
$this->_sections['fre']['loop'] = is_array($_loop=$this->_tpl_vars['Buddysid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fre']['show'] = true;
$this->_sections['fre']['max'] = $this->_sections['fre']['loop'];
$this->_sections['fre']['step'] = 1;
$this->_sections['fre']['start'] = $this->_sections['fre']['step'] > 0 ? 0 : $this->_sections['fre']['loop']-1;
if ($this->_sections['fre']['show']) {
    $this->_sections['fre']['total'] = $this->_sections['fre']['loop'];
    if ($this->_sections['fre']['total'] == 0)
        $this->_sections['fre']['show'] = false;
} else
    $this->_sections['fre']['total'] = 0;
if ($this->_sections['fre']['show']):

            for ($this->_sections['fre']['index'] = $this->_sections['fre']['start'], $this->_sections['fre']['iteration'] = 1;
                 $this->_sections['fre']['iteration'] <= $this->_sections['fre']['total'];
                 $this->_sections['fre']['index'] += $this->_sections['fre']['step'], $this->_sections['fre']['iteration']++):
$this->_sections['fre']['rownum'] = $this->_sections['fre']['iteration'];
$this->_sections['fre']['index_prev'] = $this->_sections['fre']['index'] - $this->_sections['fre']['step'];
$this->_sections['fre']['index_next'] = $this->_sections['fre']['index'] + $this->_sections['fre']['step'];
$this->_sections['fre']['first']      = ($this->_sections['fre']['iteration'] == 1);
$this->_sections['fre']['last']       = ($this->_sections['fre']['iteration'] == $this->_sections['fre']['total']);
?>
<tr>
<td><a href="view.php?view=<?php echo $this->_tpl_vars['Friendid'][$this->_sections['fre']['index']]; ?>
"><?php echo $this->_tpl_vars['Frienduser'][$this->_sections['fre']['index']]; ?>
</a></td>
<td><center><?php echo $this->_tpl_vars['Friendlevel'][$this->_sections['fre']['index']]; ?>
</center></td>
<td><center><a href="mail.php?view=write&amp;to=<?php echo $this->_tpl_vars['Friendid'][$this->_sections['fre']['index']]; ?>
">PW</a></center></td>
<td><center><?php echo $this->_tpl_vars['Friendonline'][$this->_sections['fre']['index']]; ?>
</center></td>
<td><center><a href="lista_przyjaciol.php?del=<?php echo $this->_tpl_vars['Buddysid'][$this->_sections['fre']['index']]; ?>
">Usuń z listy</a></center></td>
</tr>
<?php endfor; endif; ?>
</table>
<form action="lista_przyjaciol.php?add" method="post">
<input type="text" name="friendid" width="4">
<input type="submit" value="Dodaj">
</form>