<?php /* Smarty version 2.6.16, created on 2012-10-06 01:16:41
         compiled from ap.tpl */ ?>
<?php echo '';  if ($_GET['step'] == ''):  echo '';  echo @AP_INFO;  echo ' <b>';  echo $this->_tpl_vars['Ap'];  echo '</b> ';  echo @AP;  echo '.<br /><br /><form method="post" action="ap.php?step=add"><table width="50%">';  unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['StatSumm']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
 echo '<tr><td> +';  echo $this->_tpl_vars['StatSumm'][$this->_sections['k']['index']];  echo ' ';  echo $this->_tpl_vars['StatDesc'][$this->_sections['k']['index']];  echo ' ';  echo @PER_AP;  echo '</td><td><input type="text" name="';  echo $this->_tpl_vars['StatNames'][$this->_sections['k']['index']];  echo '" size="5" value="0" /></td></tr>';  endfor; endif;  echo '</table><input type="submit" value="';  echo @A_ADD;  echo '" /></form><br />';  if ($this->_tpl_vars['Age'] < 4):  echo '';  echo @GET_BACK_DESC;  echo '<br /> <a href="ap.php?step=reassign"> ';  echo @GET_BACK_LINK;  echo ' </a>';  endif;  echo '';  endif;  echo '';  if ($_GET['step'] == 'add'):  echo '';  echo @YOU_GET;  echo ': <br />';  unset($this->_sections['stats']);
$this->_sections['stats']['name'] = 'stats';
$this->_sections['stats']['loop'] = is_array($_loop=$this->_tpl_vars['Amount']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['stats']['show'] = true;
$this->_sections['stats']['max'] = $this->_sections['stats']['loop'];
$this->_sections['stats']['step'] = 1;
$this->_sections['stats']['start'] = $this->_sections['stats']['step'] > 0 ? 0 : $this->_sections['stats']['loop']-1;
if ($this->_sections['stats']['show']) {
    $this->_sections['stats']['total'] = $this->_sections['stats']['loop'];
    if ($this->_sections['stats']['total'] == 0)
        $this->_sections['stats']['show'] = false;
} else
    $this->_sections['stats']['total'] = 0;
if ($this->_sections['stats']['show']):

            for ($this->_sections['stats']['index'] = $this->_sections['stats']['start'], $this->_sections['stats']['iteration'] = 1;
                 $this->_sections['stats']['iteration'] <= $this->_sections['stats']['total'];
                 $this->_sections['stats']['index'] += $this->_sections['stats']['step'], $this->_sections['stats']['iteration']++):
$this->_sections['stats']['rownum'] = $this->_sections['stats']['iteration'];
$this->_sections['stats']['index_prev'] = $this->_sections['stats']['index'] - $this->_sections['stats']['step'];
$this->_sections['stats']['index_next'] = $this->_sections['stats']['index'] + $this->_sections['stats']['step'];
$this->_sections['stats']['first']      = ($this->_sections['stats']['iteration'] == 1);
$this->_sections['stats']['last']       = ($this->_sections['stats']['iteration'] == $this->_sections['stats']['total']);
 echo '<b>';  echo $this->_tpl_vars['Amount'][$this->_sections['stats']['index']];  echo '</b> ';  echo $this->_tpl_vars['Name'][$this->_sections['stats']['index']];  echo '<br />';  endfor; endif;  echo '<a href="stats.php">';  echo @CLICK;  echo '</a> ';  echo @FOR_A;  echo '.';  endif;  echo '';  if ($_GET['step'] == 'reassign'):  echo '';  echo @RE_INFO;  echo '<form method="post" action=""><input type="submit" name="answer" value="';  echo @A_YES;  echo '" /></form><form method="post" action="ap.php"><input type="submit" name="answer" value="';  echo @A_NO;  echo '" /></form>';  if ($_POST['answer'] == 'Tak'):  echo '';  echo @GOT_BACK_PRE;  echo ' ';  echo $this->_tpl_vars['Diff'];  echo ' ';  echo @GOT_BACK_MID;  echo ' ';  echo $this->_tpl_vars['Amount'];  echo ' ';  echo @GOT_BACK_POST;  echo ' <a href="ap.php"> ';  echo @BACK;  echo ' </a>';  endif;  echo '';  endif;  echo ''; ?>
