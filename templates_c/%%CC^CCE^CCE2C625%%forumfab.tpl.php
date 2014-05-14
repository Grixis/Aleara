<?php /* Smarty version 2.6.16, created on 2012-10-06 00:46:47
         compiled from forumfab.tpl */ ?>
<?php echo '<a href="forumfab.php?step=comments&amp;text=';  echo $this->_tpl_vars['Updid'];  echo '"><center>Wejdź na forum!</center></a>';  if ($this->_tpl_vars['Step'] == 'comments'):  echo '';  if ($this->_tpl_vars['Amount'] == '0'):  echo '<center>';  echo $this->_tpl_vars['Nocomments'];  echo '</center>';  endif;  echo '';  if ($this->_tpl_vars['Amount'] > '0'):  echo '';  unset($this->_sections['update']);
$this->_sections['update']['name'] = 'update';
$this->_sections['update']['loop'] = is_array($_loop=$this->_tpl_vars['Tauthor']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['update']['show'] = true;
$this->_sections['update']['max'] = $this->_sections['update']['loop'];
$this->_sections['update']['step'] = 1;
$this->_sections['update']['start'] = $this->_sections['update']['step'] > 0 ? 0 : $this->_sections['update']['loop']-1;
if ($this->_sections['update']['show']) {
    $this->_sections['update']['total'] = $this->_sections['update']['loop'];
    if ($this->_sections['update']['total'] == 0)
        $this->_sections['update']['show'] = false;
} else
    $this->_sections['update']['total'] = 0;
if ($this->_sections['update']['show']):

            for ($this->_sections['update']['index'] = $this->_sections['update']['start'], $this->_sections['update']['iteration'] = 1;
                 $this->_sections['update']['iteration'] <= $this->_sections['update']['total'];
                 $this->_sections['update']['index'] += $this->_sections['update']['step'], $this->_sections['update']['iteration']++):
$this->_sections['update']['rownum'] = $this->_sections['update']['iteration'];
$this->_sections['update']['index_prev'] = $this->_sections['update']['index'] - $this->_sections['update']['step'];
$this->_sections['update']['index_next'] = $this->_sections['update']['index'] + $this->_sections['update']['step'];
$this->_sections['update']['first']      = ($this->_sections['update']['iteration'] == 1);
$this->_sections['update']['last']       = ($this->_sections['update']['iteration'] == $this->_sections['update']['total']);
 echo '<div class="overflow"><fieldset style="width:90%"><legend><b>';  echo $this->_tpl_vars['Tauthor'][$this->_sections['update']['index']];  echo '</b> ';  if ($this->_tpl_vars['Tdate'][$this->_sections['update']['index']] != ""):  echo ' (';  echo $this->_tpl_vars['Tdate'][$this->_sections['update']['index']];  echo ') ';  endif;  echo '';  echo $this->_tpl_vars['Writed'];  echo ': </legend>';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Mistrzyni Gry'):  echo ' <center>(<a href="forumfab.php?step=comments&amp;action=delete&amp;cid=';  echo $this->_tpl_vars['Cid'][$this->_sections['update']['index']];  echo '">';  echo $this->_tpl_vars['Adelete'];  echo '</a>) </center> ';  endif;  echo '<br />';  echo $this->_tpl_vars['Tbody'][$this->_sections['update']['index']];  echo '</fieldset></div>';  endfor; endif;  echo '';  endif;  echo '<br /><br /><center><form method="post" action="forumfab.php?step=comments&amp;action=add">Wpisz wiadomość:<br /><textarea name="body" rows="15" cols="50"></textarea><br /><input type="hidden" name="tid" value="';  echo $this->_tpl_vars['Text'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form><br /></center><a href="forumfab.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  endif;  echo ''; ?>
