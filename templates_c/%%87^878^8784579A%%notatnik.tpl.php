<?php /* Smarty version 2.6.16, created on 2012-10-06 10:09:54
         compiled from notatnik.tpl */ ?>
<?php echo '';  if ($this->_tpl_vars['Action'] == ""):  echo '';  echo $this->_tpl_vars['Notesinfo'];  echo '<br /><br />';  unset($this->_sections['notes']);
$this->_sections['notes']['name'] = 'notes';
$this->_sections['notes']['loop'] = is_array($_loop=$this->_tpl_vars['Noteid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['notes']['show'] = true;
$this->_sections['notes']['max'] = $this->_sections['notes']['loop'];
$this->_sections['notes']['step'] = 1;
$this->_sections['notes']['start'] = $this->_sections['notes']['step'] > 0 ? 0 : $this->_sections['notes']['loop']-1;
if ($this->_sections['notes']['show']) {
    $this->_sections['notes']['total'] = $this->_sections['notes']['loop'];
    if ($this->_sections['notes']['total'] == 0)
        $this->_sections['notes']['show'] = false;
} else
    $this->_sections['notes']['total'] = 0;
if ($this->_sections['notes']['show']):

            for ($this->_sections['notes']['index'] = $this->_sections['notes']['start'], $this->_sections['notes']['iteration'] = 1;
                 $this->_sections['notes']['iteration'] <= $this->_sections['notes']['total'];
                 $this->_sections['notes']['index'] += $this->_sections['notes']['step'], $this->_sections['notes']['iteration']++):
$this->_sections['notes']['rownum'] = $this->_sections['notes']['iteration'];
$this->_sections['notes']['index_prev'] = $this->_sections['notes']['index'] - $this->_sections['notes']['step'];
$this->_sections['notes']['index_next'] = $this->_sections['notes']['index'] + $this->_sections['notes']['step'];
$this->_sections['notes']['first']      = ($this->_sections['notes']['iteration'] == 1);
$this->_sections['notes']['last']       = ($this->_sections['notes']['iteration'] == $this->_sections['notes']['total']);
 echo '<div class="overflow"><fieldset style="width:75%"><legend>';  echo $this->_tpl_vars['Ntime'];  echo ': ';  echo $this->_tpl_vars['Notetime'][$this->_sections['notes']['index']];  echo '</legend>';  echo $this->_tpl_vars['Notetext'][$this->_sections['notes']['index']];  echo '<br/>(<a href="notatnik.php?akcja=skasuj&amp;nid=';  echo $this->_tpl_vars['Noteid'][$this->_sections['notes']['index']];  echo '">';  echo $this->_tpl_vars['Adelete'];  echo '</a>) (<a href="notatnik.php?akcja=edit&amp;nid=';  echo $this->_tpl_vars['Noteid'][$this->_sections['notes']['index']];  echo '">';  echo $this->_tpl_vars['Aedit'];  echo '</a>)</fieldset></div>';  endfor; endif;  echo '<br /><br /><a href="notatnik.php?akcja=dodaj">';  echo $this->_tpl_vars['Aadd'];  echo '</a>';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'edit' || $this->_tpl_vars['Action'] == 'dodaj'):  echo '<form method="post" action="notatnik.php?akcja=';  echo $this->_tpl_vars['Nlink'];  echo '">';  echo $this->_tpl_vars['Note'];  echo ':<br /><textarea name="body" rows="15" cols="50">';  echo $this->_tpl_vars['Ntext'];  echo '</textarea><br /><input type="submit" value="';  echo $this->_tpl_vars['Asave'];  echo '" /></form>';  endif;  echo ''; ?>
