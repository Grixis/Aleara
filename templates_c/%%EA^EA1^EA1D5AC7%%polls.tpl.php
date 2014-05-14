<?php /* Smarty version 2.6.16, created on 2012-10-06 00:46:25
         compiled from polls.tpl */ ?>
<center><IMG SRC="images/locations/halazgromadzen.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['Action'] == ""):  echo '';  echo $this->_tpl_vars['Pollsinfo'];  echo '<br /><br />';  if ($this->_tpl_vars['Pollid'] == '0'):  echo '<div align="center">';  echo $this->_tpl_vars['Nopolls'];  echo '</div><br />';  endif;  echo '';  if ($this->_tpl_vars['Pollid'] != '0'):  echo '';  echo $this->_tpl_vars['Lastpoll'];  echo '<br /><br /><div align="center"><table width="100%"><tr><td colspan="2"><b>';  echo $this->_tpl_vars['Question'];  echo '</b></td></tr>';  if ($this->_tpl_vars['Voting'] == 'Y'):  echo '<form method="post" action="polls.php?action=vote&amp;poll=';  echo $this->_tpl_vars['Pollid'];  echo '">';  unset($this->_sections['poll']);
$this->_sections['poll']['name'] = 'poll';
$this->_sections['poll']['loop'] = is_array($_loop=$this->_tpl_vars['Answers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['poll']['show'] = true;
$this->_sections['poll']['max'] = $this->_sections['poll']['loop'];
$this->_sections['poll']['step'] = 1;
$this->_sections['poll']['start'] = $this->_sections['poll']['step'] > 0 ? 0 : $this->_sections['poll']['loop']-1;
if ($this->_sections['poll']['show']) {
    $this->_sections['poll']['total'] = $this->_sections['poll']['loop'];
    if ($this->_sections['poll']['total'] == 0)
        $this->_sections['poll']['show'] = false;
} else
    $this->_sections['poll']['total'] = 0;
if ($this->_sections['poll']['show']):

            for ($this->_sections['poll']['index'] = $this->_sections['poll']['start'], $this->_sections['poll']['iteration'] = 1;
                 $this->_sections['poll']['iteration'] <= $this->_sections['poll']['total'];
                 $this->_sections['poll']['index'] += $this->_sections['poll']['step'], $this->_sections['poll']['iteration']++):
$this->_sections['poll']['rownum'] = $this->_sections['poll']['iteration'];
$this->_sections['poll']['index_prev'] = $this->_sections['poll']['index'] - $this->_sections['poll']['step'];
$this->_sections['poll']['index_next'] = $this->_sections['poll']['index'] + $this->_sections['poll']['step'];
$this->_sections['poll']['first']      = ($this->_sections['poll']['iteration'] == 1);
$this->_sections['poll']['last']       = ($this->_sections['poll']['iteration'] == $this->_sections['poll']['total']);
 echo '<tr><td width="5%"><input type="radio" name="answer" value="';  echo $this->_tpl_vars['Answers'][$this->_sections['poll']['index']];  echo '" /></td><td>';  echo $this->_tpl_vars['Answers'][$this->_sections['poll']['index']];  echo '</td></tr>';  endfor; endif;  echo '<tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Asend'];  echo '" /></td></tr></form>';  endif;  echo '';  if ($this->_tpl_vars['Voting'] == 'N'):  echo '';  unset($this->_sections['poll2']);
$this->_sections['poll2']['name'] = 'poll2';
$this->_sections['poll2']['loop'] = is_array($_loop=$this->_tpl_vars['Answers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['poll2']['show'] = true;
$this->_sections['poll2']['max'] = $this->_sections['poll2']['loop'];
$this->_sections['poll2']['step'] = 1;
$this->_sections['poll2']['start'] = $this->_sections['poll2']['step'] > 0 ? 0 : $this->_sections['poll2']['loop']-1;
if ($this->_sections['poll2']['show']) {
    $this->_sections['poll2']['total'] = $this->_sections['poll2']['loop'];
    if ($this->_sections['poll2']['total'] == 0)
        $this->_sections['poll2']['show'] = false;
} else
    $this->_sections['poll2']['total'] = 0;
if ($this->_sections['poll2']['show']):

            for ($this->_sections['poll2']['index'] = $this->_sections['poll2']['start'], $this->_sections['poll2']['iteration'] = 1;
                 $this->_sections['poll2']['iteration'] <= $this->_sections['poll2']['total'];
                 $this->_sections['poll2']['index'] += $this->_sections['poll2']['step'], $this->_sections['poll2']['iteration']++):
$this->_sections['poll2']['rownum'] = $this->_sections['poll2']['iteration'];
$this->_sections['poll2']['index_prev'] = $this->_sections['poll2']['index'] - $this->_sections['poll2']['step'];
$this->_sections['poll2']['index_next'] = $this->_sections['poll2']['index'] + $this->_sections['poll2']['step'];
$this->_sections['poll2']['first']      = ($this->_sections['poll2']['iteration'] == 1);
$this->_sections['poll2']['last']       = ($this->_sections['poll2']['iteration'] == $this->_sections['poll2']['total']);
 echo '<tr><td width="70%">';  echo $this->_tpl_vars['Answers'][$this->_sections['poll2']['index']];  echo '</td><td> - ';  echo $this->_tpl_vars['Tvotes'];  echo ': ';  echo $this->_tpl_vars['Votes'][$this->_sections['poll2']['index']];  echo ' (';  echo $this->_tpl_vars['Percentvotes'][$this->_sections['poll2']['index']];  echo ' %)</td></tr>';  endfor; endif;  echo '';  endif;  echo '<tr><td colspan="2">';  echo $this->_tpl_vars['Sumvotes'];  echo ' <b>';  echo $this->_tpl_vars['Summaryvotes'];  echo ' (';  echo $this->_tpl_vars['Summaryvoting'];  echo ' %)</b> ';  echo $this->_tpl_vars['Tmembers'];  echo '</td></tr><tr>';  if ($this->_tpl_vars['Days'] > '0'):  echo '<td colspan="2">';  echo $this->_tpl_vars['Polldays'];  echo ' ';  echo $this->_tpl_vars['Days'];  echo ' ';  echo $this->_tpl_vars['Tdays'];  echo '</td>';  endif;  echo '';  if ($this->_tpl_vars['Days'] == '0'):  echo '<td colspan="2">';  echo $this->_tpl_vars['Pollend'];  echo '</td>';  endif;  echo '</tr></table></div><br /><br /><a href="polls.php?action=comments&amp;poll=';  echo $this->_tpl_vars['Pollid'];  echo '">';  echo $this->_tpl_vars['Acomments'];  echo '</a>: ';  echo $this->_tpl_vars['Commentsamount'];  echo '<br /><br /><br /><a href="polls.php?action=last">';  echo $this->_tpl_vars['Alast10'];  echo '</a>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'vote'):  echo '<div align="center">';  echo $this->_tpl_vars['Message'];  echo '<br /><br /><a href="polls.php">';  echo $this->_tpl_vars['Aback'];  echo '</a></div>';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'last'):  echo '';  echo $this->_tpl_vars['Lastinfo'];  echo ':<br /><br /><div align="center"><table width="100%">';  unset($this->_sections['poll3']);
$this->_sections['poll3']['name'] = 'poll3';
$this->_sections['poll3']['loop'] = is_array($_loop=$this->_tpl_vars['Questions']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['poll3']['show'] = true;
$this->_sections['poll3']['max'] = $this->_sections['poll3']['loop'];
$this->_sections['poll3']['step'] = 1;
$this->_sections['poll3']['start'] = $this->_sections['poll3']['step'] > 0 ? 0 : $this->_sections['poll3']['loop']-1;
if ($this->_sections['poll3']['show']) {
    $this->_sections['poll3']['total'] = $this->_sections['poll3']['loop'];
    if ($this->_sections['poll3']['total'] == 0)
        $this->_sections['poll3']['show'] = false;
} else
    $this->_sections['poll3']['total'] = 0;
if ($this->_sections['poll3']['show']):

            for ($this->_sections['poll3']['index'] = $this->_sections['poll3']['start'], $this->_sections['poll3']['iteration'] = 1;
                 $this->_sections['poll3']['iteration'] <= $this->_sections['poll3']['total'];
                 $this->_sections['poll3']['index'] += $this->_sections['poll3']['step'], $this->_sections['poll3']['iteration']++):
$this->_sections['poll3']['rownum'] = $this->_sections['poll3']['iteration'];
$this->_sections['poll3']['index_prev'] = $this->_sections['poll3']['index'] - $this->_sections['poll3']['step'];
$this->_sections['poll3']['index_next'] = $this->_sections['poll3']['index'] + $this->_sections['poll3']['step'];
$this->_sections['poll3']['first']      = ($this->_sections['poll3']['iteration'] == 1);
$this->_sections['poll3']['last']       = ($this->_sections['poll3']['iteration'] == $this->_sections['poll3']['total']);
 echo '<tr><td colspan="2"><b>';  echo $this->_tpl_vars['Questions'][$this->_sections['poll3']['index']];  echo '</b></td></tr>';  unset($this->_sections['poll4']);
$this->_sections['poll4']['name'] = 'poll4';
$this->_sections['poll4']['loop'] = is_array($_loop=$this->_tpl_vars['Answers'][$this->_sections['poll3']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['poll4']['show'] = true;
$this->_sections['poll4']['max'] = $this->_sections['poll4']['loop'];
$this->_sections['poll4']['step'] = 1;
$this->_sections['poll4']['start'] = $this->_sections['poll4']['step'] > 0 ? 0 : $this->_sections['poll4']['loop']-1;
if ($this->_sections['poll4']['show']) {
    $this->_sections['poll4']['total'] = $this->_sections['poll4']['loop'];
    if ($this->_sections['poll4']['total'] == 0)
        $this->_sections['poll4']['show'] = false;
} else
    $this->_sections['poll4']['total'] = 0;
if ($this->_sections['poll4']['show']):

            for ($this->_sections['poll4']['index'] = $this->_sections['poll4']['start'], $this->_sections['poll4']['iteration'] = 1;
                 $this->_sections['poll4']['iteration'] <= $this->_sections['poll4']['total'];
                 $this->_sections['poll4']['index'] += $this->_sections['poll4']['step'], $this->_sections['poll4']['iteration']++):
$this->_sections['poll4']['rownum'] = $this->_sections['poll4']['iteration'];
$this->_sections['poll4']['index_prev'] = $this->_sections['poll4']['index'] - $this->_sections['poll4']['step'];
$this->_sections['poll4']['index_next'] = $this->_sections['poll4']['index'] + $this->_sections['poll4']['step'];
$this->_sections['poll4']['first']      = ($this->_sections['poll4']['iteration'] == 1);
$this->_sections['poll4']['last']       = ($this->_sections['poll4']['iteration'] == $this->_sections['poll4']['total']);
 echo '<tr><td width="70%">';  echo $this->_tpl_vars['Answers'][$this->_sections['poll3']['index']][$this->_sections['poll4']['index']];  echo '</td><td> - ';  echo $this->_tpl_vars['Tvotes'];  echo ': ';  echo $this->_tpl_vars['Votes'][$this->_sections['poll3']['index']][$this->_sections['poll4']['index']];  echo ' (';  echo $this->_tpl_vars['Percentvotes'][$this->_sections['poll3']['index']][$this->_sections['poll4']['index']];  echo ' %)</td></tr>';  endfor; endif;  echo '<tr><td colspan="2">';  echo $this->_tpl_vars['Sumvotes'];  echo ' <b>';  echo $this->_tpl_vars['Summaryvotes'][$this->_sections['poll3']['index']];  echo ' (';  echo $this->_tpl_vars['Percentvoting'][$this->_sections['poll3']['index']];  echo ' %)</b> ';  echo $this->_tpl_vars['Tmembers'];  echo '<br /><a href="polls.php?action=comments&amp;poll=';  echo $this->_tpl_vars['Pollid'][$this->_sections['poll3']['index']];  echo '">';  echo $this->_tpl_vars['Acomments'];  echo '</a>: ';  echo $this->_tpl_vars['Commentsamount'][$this->_sections['poll3']['index']];  echo '<br /><br /></td></tr>';  endfor; endif;  echo '</table></div><br /><br /><br /><a href="polls.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'comments'):  echo '';  if ($this->_tpl_vars['Amount'] == '0'):  echo '<center>';  echo $this->_tpl_vars['Nocomments'];  echo '</center>';  endif;  echo '';  if ($this->_tpl_vars['Amount'] > '0'):  echo '';  unset($this->_sections['update']);
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
 echo '<div class="overflow"><fieldset style="width:90%"><legend><b>';  echo $this->_tpl_vars['Tauthor'][$this->_sections['update']['index']];  echo '</b> ';  if ($this->_tpl_vars['Tdate'][$this->_sections['update']['index']] != ""):  echo ' (';  echo $this->_tpl_vars['Tdate'][$this->_sections['update']['index']];  echo ') ';  endif;  echo '';  echo $this->_tpl_vars['Writed'];  echo ':</legend> ';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Staff'):  echo ' <center>(<a href="polls.php?action=comments&amp;step=delete&amp;cid=';  echo $this->_tpl_vars['Cid'][$this->_sections['update']['index']];  echo '">';  echo $this->_tpl_vars['Adelete'];  echo '</a>)</center> ';  endif;  echo '<br />';  echo $this->_tpl_vars['Tbody'][$this->_sections['update']['index']];  echo '</fieldset></div>';  endfor; endif;  echo '';  endif;  echo '<br /><br /><center><form method="post" action="polls.php?action=comments&amp;step=add">';  echo $this->_tpl_vars['Addcomment'];  echo ':<br /><textarea name="body" rows="20" cols="70"></textarea><br /><input type="hidden" name="pid" value="';  echo $this->_tpl_vars['Poll'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form></center><br /><br /><a href="polls.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  endif;  echo ''; ?>
