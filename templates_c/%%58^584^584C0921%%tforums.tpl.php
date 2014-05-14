<?php /* Smarty version 2.6.16, created on 2012-10-06 00:35:34
         compiled from tforums.tpl */ ?>
<?php echo '';  if ($this->_tpl_vars['View'] == 'topics'):  echo '<form method="post" action="tforums.php?action=search"><input type="submit" value="';  echo $this->_tpl_vars['Asearch'];  echo '" /> ';  echo $this->_tpl_vars['Tword'];  echo ': <input type="text" name="search" /></form><table width="100%"><tr><td width="70%"><u><b>';  echo $this->_tpl_vars['Ttopic'];  echo '</b></u></td><td width="20%"><u><b>';  echo $this->_tpl_vars['Tauthor'];  echo '</b></u></td><td width="10%"><u><b>';  echo $this->_tpl_vars['Treplies'];  echo '</b></u></td></tr>';  unset($this->_sections['tforums']);
$this->_sections['tforums']['name'] = 'tforums';
$this->_sections['tforums']['loop'] = is_array($_loop=$this->_tpl_vars['Topic']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tforums']['show'] = true;
$this->_sections['tforums']['max'] = $this->_sections['tforums']['loop'];
$this->_sections['tforums']['step'] = 1;
$this->_sections['tforums']['start'] = $this->_sections['tforums']['step'] > 0 ? 0 : $this->_sections['tforums']['loop']-1;
if ($this->_sections['tforums']['show']) {
    $this->_sections['tforums']['total'] = $this->_sections['tforums']['loop'];
    if ($this->_sections['tforums']['total'] == 0)
        $this->_sections['tforums']['show'] = false;
} else
    $this->_sections['tforums']['total'] = 0;
if ($this->_sections['tforums']['show']):

            for ($this->_sections['tforums']['index'] = $this->_sections['tforums']['start'], $this->_sections['tforums']['iteration'] = 1;
                 $this->_sections['tforums']['iteration'] <= $this->_sections['tforums']['total'];
                 $this->_sections['tforums']['index'] += $this->_sections['tforums']['step'], $this->_sections['tforums']['iteration']++):
$this->_sections['tforums']['rownum'] = $this->_sections['tforums']['iteration'];
$this->_sections['tforums']['index_prev'] = $this->_sections['tforums']['index'] - $this->_sections['tforums']['step'];
$this->_sections['tforums']['index_next'] = $this->_sections['tforums']['index'] + $this->_sections['tforums']['step'];
$this->_sections['tforums']['first']      = ($this->_sections['tforums']['iteration'] == 1);
$this->_sections['tforums']['last']       = ($this->_sections['tforums']['iteration'] == $this->_sections['tforums']['total']);
 echo '<tr><td><div class="overflow">';  if ($this->_tpl_vars['Newtopic'][$this->_sections['tforums']['index']] == 'Y'):  echo '<blink>N</blink> ';  endif;  echo '<a href="tforums.php?topic=';  echo $this->_tpl_vars['Topicid'][$this->_sections['tforums']['index']];  echo '"><span class="forum">';  echo $this->_tpl_vars['Topic'][$this->_sections['tforums']['index']];  echo '</span></a></div></td><td>';  echo $this->_tpl_vars['Starter'][$this->_sections['tforums']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Replies'][$this->_sections['tforums']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table><form method="post" action="tforums.php?action=addtopic">';  echo $this->_tpl_vars['Addtopic'];  echo ':<br /><input type="text" name="title2" value="" size="60%" /><br /><textarea name="body" cols="60%" rows="15">';  echo $this->_tpl_vars['Ttext'];  echo '</textarea><br />';  echo $this->_tpl_vars['Sticky'];  echo '<input type="submit" value="';  echo $this->_tpl_vars['Addtopic'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['Topics'] != ""):  echo '<br /><center><div class="overflow"><b>';  echo $this->_tpl_vars['Topic'];  echo '</b></div><div class="overflow"><fieldset style="width:90%"><legend>';  echo $this->_tpl_vars['Writeby'];  echo ' ';  echo $this->_tpl_vars['Starter'];  echo '';  if ($this->_tpl_vars['Starterid'] > '0'):  echo ' ID: ';  echo $this->_tpl_vars['Starterid'];  echo '';  endif;  echo ' </legend>(<a href="tforums.php?view=topics">';  echo $this->_tpl_vars['Aback'];  echo '</a>) (<a href="tforums.php?topic=';  echo $this->_tpl_vars['Topics'];  echo '&amp;quotet=Y">';  echo $this->_tpl_vars['Aquote'];  echo '</a>) ';  echo $this->_tpl_vars['Delete'];  echo '<br/><br/><div style="text-align:left">';  echo $this->_tpl_vars['Topictext'];  echo '</div></fieldset></div>';  unset($this->_sections['tforums1']);
$this->_sections['tforums1']['name'] = 'tforums1';
$this->_sections['tforums1']['loop'] = is_array($_loop=$this->_tpl_vars['Reptext']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tforums1']['show'] = true;
$this->_sections['tforums1']['max'] = $this->_sections['tforums1']['loop'];
$this->_sections['tforums1']['step'] = 1;
$this->_sections['tforums1']['start'] = $this->_sections['tforums1']['step'] > 0 ? 0 : $this->_sections['tforums1']['loop']-1;
if ($this->_sections['tforums1']['show']) {
    $this->_sections['tforums1']['total'] = $this->_sections['tforums1']['loop'];
    if ($this->_sections['tforums1']['total'] == 0)
        $this->_sections['tforums1']['show'] = false;
} else
    $this->_sections['tforums1']['total'] = 0;
if ($this->_sections['tforums1']['show']):

            for ($this->_sections['tforums1']['index'] = $this->_sections['tforums1']['start'], $this->_sections['tforums1']['iteration'] = 1;
                 $this->_sections['tforums1']['iteration'] <= $this->_sections['tforums1']['total'];
                 $this->_sections['tforums1']['index'] += $this->_sections['tforums1']['step'], $this->_sections['tforums1']['iteration']++):
$this->_sections['tforums1']['rownum'] = $this->_sections['tforums1']['iteration'];
$this->_sections['tforums1']['index_prev'] = $this->_sections['tforums1']['index'] - $this->_sections['tforums1']['step'];
$this->_sections['tforums1']['index_next'] = $this->_sections['tforums1']['index'] + $this->_sections['tforums1']['step'];
$this->_sections['tforums1']['first']      = ($this->_sections['tforums1']['iteration'] == 1);
$this->_sections['tforums1']['last']       = ($this->_sections['tforums1']['iteration'] == $this->_sections['tforums1']['total']);
 echo '<fieldset style="width:90%"><legend><b>';  echo $this->_tpl_vars['Repstarter'][$this->_sections['tforums1']['index']];  echo '</b>';  if ($this->_tpl_vars['Repstarterid'][$this->_sections['tforums1']['index']] > '0'):  echo ' ID: ';  echo $this->_tpl_vars['Repstarterid'][$this->_sections['tforums1']['index']];  echo '';  endif;  echo ' ';  echo $this->_tpl_vars['Write'];  echo '...</legend>(<a href="tforums.php?view=topics">';  echo $this->_tpl_vars['Aback'];  echo '</a>) (<a href="tforums.php?topic=';  echo $this->_tpl_vars['Topics'];  echo '&amp;quote=';  echo $this->_tpl_vars['Rid'][$this->_sections['tforums1']['index']];  echo '">';  echo $this->_tpl_vars['Aquote'];  echo '</a>) ';  echo $this->_tpl_vars['Action'][$this->_sections['tforums1']['index']];  echo '<div style="text-align:left">';  echo $this->_tpl_vars['Reptext'][$this->_sections['tforums1']['index']];  echo '</div></fieldset><br />';  endfor; endif;  echo '<form method="post" action="tforums.php?reply=';  echo $this->_tpl_vars['Id'];  echo '">';  echo $this->_tpl_vars['Areply'];  echo ':<br /><textarea name="rep" cols="75%" rows="15">';  echo $this->_tpl_vars['Rtext'];  echo '</textarea><br /><input type="submit" value="';  echo $this->_tpl_vars['Areply'];  echo '" /></form></center>';  endif;  echo '';  if ($this->_tpl_vars['Action2'] == 'search'):  echo '';  if ($this->_tpl_vars['Amount'] == '0'):  echo '<br /><br /><center>';  echo $this->_tpl_vars['Nosearch'];  echo '</center><br />';  endif;  echo '';  if ($this->_tpl_vars['Amount'] > '0'):  echo '';  echo $this->_tpl_vars['Youfind'];  echo ':<br /><br />';  unset($this->_sections['number3']);
$this->_sections['number3']['name'] = 'number3';
$this->_sections['number3']['loop'] = is_array($_loop=$this->_tpl_vars['Ttopic']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['number3']['show'] = true;
$this->_sections['number3']['max'] = $this->_sections['number3']['loop'];
$this->_sections['number3']['step'] = 1;
$this->_sections['number3']['start'] = $this->_sections['number3']['step'] > 0 ? 0 : $this->_sections['number3']['loop']-1;
if ($this->_sections['number3']['show']) {
    $this->_sections['number3']['total'] = $this->_sections['number3']['loop'];
    if ($this->_sections['number3']['total'] == 0)
        $this->_sections['number3']['show'] = false;
} else
    $this->_sections['number3']['total'] = 0;
if ($this->_sections['number3']['show']):

            for ($this->_sections['number3']['index'] = $this->_sections['number3']['start'], $this->_sections['number3']['iteration'] = 1;
                 $this->_sections['number3']['iteration'] <= $this->_sections['number3']['total'];
                 $this->_sections['number3']['index'] += $this->_sections['number3']['step'], $this->_sections['number3']['iteration']++):
$this->_sections['number3']['rownum'] = $this->_sections['number3']['iteration'];
$this->_sections['number3']['index_prev'] = $this->_sections['number3']['index'] - $this->_sections['number3']['step'];
$this->_sections['number3']['index_next'] = $this->_sections['number3']['index'] + $this->_sections['number3']['step'];
$this->_sections['number3']['first']      = ($this->_sections['number3']['iteration'] == 1);
$this->_sections['number3']['last']       = ($this->_sections['number3']['iteration'] == $this->_sections['number3']['total']);
 echo '<a href="tforums.php?topic=';  echo $this->_tpl_vars['Tid'][$this->_sections['number3']['index']];  echo '">';  echo $this->_tpl_vars['Ttopic'][$this->_sections['number3']['index']];  echo '</a><br />';  endfor; endif;  echo '';  endif;  echo '<br /><br /><a href="tforums.php?view=topics">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  endif;  echo ''; ?>

</br></br>