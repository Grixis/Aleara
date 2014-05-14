<?php /* Smarty version 2.6.16, created on 2012-10-06 00:58:08
         compiled from log.tpl */ ?>
<?php echo '<center><IMG SRC="images/locations/dziennik.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><p>';  echo $this->_tpl_vars['Loginfo'];  echo '</p>';  if ($this->_tpl_vars['Send'] != ""):  echo '<form method="post" action="log.php?send&amp;step=send">';  echo $this->_tpl_vars['Sendthis'];  echo ': <select name="staff">';  unset($this->_sections['log1']);
$this->_sections['log1']['name'] = 'log1';
$this->_sections['log1']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['log1']['show'] = true;
$this->_sections['log1']['max'] = $this->_sections['log1']['loop'];
$this->_sections['log1']['step'] = 1;
$this->_sections['log1']['start'] = $this->_sections['log1']['step'] > 0 ? 0 : $this->_sections['log1']['loop']-1;
if ($this->_sections['log1']['show']) {
    $this->_sections['log1']['total'] = $this->_sections['log1']['loop'];
    if ($this->_sections['log1']['total'] == 0)
        $this->_sections['log1']['show'] = false;
} else
    $this->_sections['log1']['total'] = 0;
if ($this->_sections['log1']['show']):

            for ($this->_sections['log1']['index'] = $this->_sections['log1']['start'], $this->_sections['log1']['iteration'] = 1;
                 $this->_sections['log1']['iteration'] <= $this->_sections['log1']['total'];
                 $this->_sections['log1']['index'] += $this->_sections['log1']['step'], $this->_sections['log1']['iteration']++):
$this->_sections['log1']['rownum'] = $this->_sections['log1']['iteration'];
$this->_sections['log1']['index_prev'] = $this->_sections['log1']['index'] - $this->_sections['log1']['step'];
$this->_sections['log1']['index_next'] = $this->_sections['log1']['index'] + $this->_sections['log1']['step'];
$this->_sections['log1']['first']      = ($this->_sections['log1']['iteration'] == 1);
$this->_sections['log1']['last']       = ($this->_sections['log1']['iteration'] == $this->_sections['log1']['total']);
 echo '<option value="';  echo $this->_tpl_vars['StaffId'][$this->_sections['log1']['index']];  echo '">';  echo $this->_tpl_vars['Name'][$this->_sections['log1']['index']];  echo '</option>';  endfor; endif;  echo '</select><br /><input type="hidden" name="lid" value="';  echo $this->_tpl_vars['Send'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Asend'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['LogId'][0] != '0'):  echo '<table align="center" width="50%"><tr>';  if ($this->_tpl_vars['Previous'] != ""):  echo '<td align="left">';  echo $this->_tpl_vars['Previous'];  echo '</td>';  endif;  echo '';  if ($this->_tpl_vars['Next'] != ""):  echo '<td align="right">';  echo $this->_tpl_vars['Next'];  echo '</td>';  endif;  echo '</tr></table><form method="post" action="log.php?action=delete">';  unset($this->_sections['log']);
$this->_sections['log']['name'] = 'log';
$this->_sections['log']['loop'] = is_array($_loop=$this->_tpl_vars['Date']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['log']['show'] = true;
$this->_sections['log']['max'] = $this->_sections['log']['loop'];
$this->_sections['log']['step'] = 1;
$this->_sections['log']['start'] = $this->_sections['log']['step'] > 0 ? 0 : $this->_sections['log']['loop']-1;
if ($this->_sections['log']['show']) {
    $this->_sections['log']['total'] = $this->_sections['log']['loop'];
    if ($this->_sections['log']['total'] == 0)
        $this->_sections['log']['show'] = false;
} else
    $this->_sections['log']['total'] = 0;
if ($this->_sections['log']['show']):

            for ($this->_sections['log']['index'] = $this->_sections['log']['start'], $this->_sections['log']['iteration'] = 1;
                 $this->_sections['log']['iteration'] <= $this->_sections['log']['total'];
                 $this->_sections['log']['index'] += $this->_sections['log']['step'], $this->_sections['log']['iteration']++):
$this->_sections['log']['rownum'] = $this->_sections['log']['iteration'];
$this->_sections['log']['index_prev'] = $this->_sections['log']['index'] - $this->_sections['log']['step'];
$this->_sections['log']['index_next'] = $this->_sections['log']['index'] + $this->_sections['log']['step'];
$this->_sections['log']['first']      = ($this->_sections['log']['iteration'] == 1);
$this->_sections['log']['last']       = ($this->_sections['log']['iteration'] == $this->_sections['log']['total']);
 echo '<div class="overflow"><div class="log"><div class="eventname">';  echo $this->_tpl_vars['Event'];  echo '</div><table><tr><td><input id="';  echo $this->_tpl_vars['LogId'][$this->_sections['log']['index']];  echo '" type="checkbox" name="';  echo $this->_tpl_vars['LogId'][$this->_sections['log']['index']];  echo '" /></td><td><label for="';  echo $this->_tpl_vars['LogId'][$this->_sections['log']['index']];  echo '"><span class="date">';  echo $this->_tpl_vars['Edate'];  echo ': ';  echo $this->_tpl_vars['Date'][$this->_sections['log']['index']];  echo '</span><br />';  echo $this->_tpl_vars['Text'][$this->_sections['log']['index']];  echo '<br /><a href="log.php?send=';  echo $this->_tpl_vars['LogId'][$this->_sections['log']['index']];  echo '">';  echo $this->_tpl_vars['Sendevent'];  echo '</a></label></td></tr></table></div></div>';  endfor; endif;  echo '<br /><input type="submit" value="';  echo $this->_tpl_vars['Adelete'];  echo '" /></form><form method="post" action="log.php?step=deleteold"><input type="submit" value="';  echo $this->_tpl_vars['Adeleteold'];  echo '" /> <select name="oldtime"><option value="7">';  echo $this->_tpl_vars['Aweek'];  echo '</option><option value="14">';  echo $this->_tpl_vars['A2week'];  echo '</option><option value="30">';  echo $this->_tpl_vars['Amonth'];  echo '</option></select></form><a href="log.php?akcja=wyczysc">';  echo $this->_tpl_vars['Clearlog'];  echo '</a><br />';  endif;  echo ''; ?>

<br>