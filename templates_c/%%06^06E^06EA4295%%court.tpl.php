<?php /* Smarty version 2.6.16, created on 2012-11-10 16:04:08
         compiled from court.tpl */ ?>
<center><IMG SRC="images/locations/gmachsadu.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['Step2'] == "" && $this->_tpl_vars['Modify'] == ""):  echo '';  echo $this->_tpl_vars['Cinfo'];  echo '<br /><br /><table width="100%"><tr><td valign="top" width="50%"><u><b>';  echo $this->_tpl_vars['Tlists'];  echo '</b></u><ul><li><a href="court.php?list=judges">';  echo $this->_tpl_vars['Ajudges'];  echo '</a></li><li><a href="court.php?list=aldermen">';  echo $this->_tpl_vars['Aaldermen'];  echo '</a></li><li><a href="court.php?list=lawyers">';  echo $this->_tpl_vars['Alawyers'];  echo '</a></li>';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == "Sędzia" || $this->_tpl_vars['Rank'] == "Kanclerz Sądu"):  echo '<li><a href="court.php?step=admin">';  echo $this->_tpl_vars['Aadmin'];  echo '</a></li>';  endif;  echo '</ul></td><td valign="top" width="50%"><u><b>';  echo $this->_tpl_vars['Tinfo'];  echo '</b></u><ul><li><a href="court.php?step=rules">';  echo $this->_tpl_vars['Arules'];  echo '</a></li><li><a href="court.php?step=cases">';  echo $this->_tpl_vars['Acases'];  echo '</a></li><li><a href="court.php?step=verdicts">';  echo $this->_tpl_vars['Averdicts'];  echo '</a></li></ul></td></tr></table>';  if ($this->_tpl_vars['List'] != ""):  echo '';  if ($this->_tpl_vars['Amount'] == '0'):  echo '<br /><br /><center>';  echo $this->_tpl_vars['Nopeople'];  echo ' ';  echo $this->_tpl_vars['Trank'];  echo ' ';  echo $this->_tpl_vars['Ina'];  echo ' ';  echo $this->_tpl_vars['Gamename'];  echo '</center>';  endif;  echo '';  if ($this->_tpl_vars['Amount'] > '0'):  echo '<br /><br /><center>';  echo $this->_tpl_vars['Listinfo'];  echo ' ';  echo $this->_tpl_vars['Trank'];  echo ' ';  echo $this->_tpl_vars['Ina'];  echo ' ';  echo $this->_tpl_vars['Gamename'];  echo '<br />';  unset($this->_sections['court']);
$this->_sections['court']['name'] = 'court';
$this->_sections['court']['loop'] = is_array($_loop=$this->_tpl_vars['Jname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['court']['show'] = true;
$this->_sections['court']['max'] = $this->_sections['court']['loop'];
$this->_sections['court']['step'] = 1;
$this->_sections['court']['start'] = $this->_sections['court']['step'] > 0 ? 0 : $this->_sections['court']['loop']-1;
if ($this->_sections['court']['show']) {
    $this->_sections['court']['total'] = $this->_sections['court']['loop'];
    if ($this->_sections['court']['total'] == 0)
        $this->_sections['court']['show'] = false;
} else
    $this->_sections['court']['total'] = 0;
if ($this->_sections['court']['show']):

            for ($this->_sections['court']['index'] = $this->_sections['court']['start'], $this->_sections['court']['iteration'] = 1;
                 $this->_sections['court']['iteration'] <= $this->_sections['court']['total'];
                 $this->_sections['court']['index'] += $this->_sections['court']['step'], $this->_sections['court']['iteration']++):
$this->_sections['court']['rownum'] = $this->_sections['court']['iteration'];
$this->_sections['court']['index_prev'] = $this->_sections['court']['index'] - $this->_sections['court']['step'];
$this->_sections['court']['index_next'] = $this->_sections['court']['index'] + $this->_sections['court']['step'];
$this->_sections['court']['first']      = ($this->_sections['court']['iteration'] == 1);
$this->_sections['court']['last']       = ($this->_sections['court']['iteration'] == $this->_sections['court']['total']);
 echo '<a href="view.php?view=';  echo $this->_tpl_vars['Jid'][$this->_sections['court']['index']];  echo '">';  echo $this->_tpl_vars['Jname'][$this->_sections['court']['index']];  echo '</a><br />';  endfor; endif;  echo '</center>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'rules' || $this->_tpl_vars['Step'] == 'cases' || $this->_tpl_vars['Step'] == 'verdicts'):  echo '';  if ($this->_tpl_vars['Amount'] == '0'):  echo '<br /><br /><center>';  echo $this->_tpl_vars['Tnoitems'];  echo ' ';  echo $this->_tpl_vars['Noitems'];  echo ' ';  echo $this->_tpl_vars['Gamename'];  echo '</center>';  endif;  echo '';  if ($this->_tpl_vars['Amount'] > '0'):  echo '';  echo $this->_tpl_vars['Listinfo'];  echo ' ';  echo $this->_tpl_vars['Itemsinfo'];  echo ' ';  echo $this->_tpl_vars['Gamename'];  echo '. ';  echo $this->_tpl_vars['Listinfo2'];  echo '<ul>';  unset($this->_sections['court2']);
$this->_sections['court2']['name'] = 'court2';
$this->_sections['court2']['loop'] = is_array($_loop=$this->_tpl_vars['Rtitle']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['court2']['show'] = true;
$this->_sections['court2']['max'] = $this->_sections['court2']['loop'];
$this->_sections['court2']['step'] = 1;
$this->_sections['court2']['start'] = $this->_sections['court2']['step'] > 0 ? 0 : $this->_sections['court2']['loop']-1;
if ($this->_sections['court2']['show']) {
    $this->_sections['court2']['total'] = $this->_sections['court2']['loop'];
    if ($this->_sections['court2']['total'] == 0)
        $this->_sections['court2']['show'] = false;
} else
    $this->_sections['court2']['total'] = 0;
if ($this->_sections['court2']['show']):

            for ($this->_sections['court2']['index'] = $this->_sections['court2']['start'], $this->_sections['court2']['iteration'] = 1;
                 $this->_sections['court2']['iteration'] <= $this->_sections['court2']['total'];
                 $this->_sections['court2']['index'] += $this->_sections['court2']['step'], $this->_sections['court2']['iteration']++):
$this->_sections['court2']['rownum'] = $this->_sections['court2']['iteration'];
$this->_sections['court2']['index_prev'] = $this->_sections['court2']['index'] - $this->_sections['court2']['step'];
$this->_sections['court2']['index_next'] = $this->_sections['court2']['index'] + $this->_sections['court2']['step'];
$this->_sections['court2']['first']      = ($this->_sections['court2']['iteration'] == 1);
$this->_sections['court2']['last']       = ($this->_sections['court2']['iteration'] == $this->_sections['court2']['total']);
 echo '<li><a href="court.php?step=';  echo $this->_tpl_vars['Step'];  echo '&amp;step2=';  echo $this->_tpl_vars['Rid'][$this->_sections['court2']['index']];  echo '">';  echo $this->_tpl_vars['Rtitle'][$this->_sections['court2']['index']];  echo '</a></li>';  endfor; endif;  echo '</ul>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'admin'):  echo '<br /><br /><a href="court.php?step=admin&amp;step2=addrule">';  echo $this->_tpl_vars['Aaddrule'];  echo '</a><br /><a href="court.php?step=admin&amp;step2=addcase">';  echo $this->_tpl_vars['Aaddcase'];  echo '</a><br /><a href="court.php?step=admin&amp;step2=addverdict">';  echo $this->_tpl_vars['Aaddverd'];  echo '</a><br />';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step2'] == 'comments'):  echo '';  if ($this->_tpl_vars['Amount'] == '0'):  echo '<center>';  echo $this->_tpl_vars['Nocomments'];  echo '</center>';  endif;  echo '';  if ($this->_tpl_vars['Amount'] > '0'):  echo '';  unset($this->_sections['library5']);
$this->_sections['library5']['name'] = 'library5';
$this->_sections['library5']['loop'] = is_array($_loop=$this->_tpl_vars['Tauthor']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['library5']['show'] = true;
$this->_sections['library5']['max'] = $this->_sections['library5']['loop'];
$this->_sections['library5']['step'] = 1;
$this->_sections['library5']['start'] = $this->_sections['library5']['step'] > 0 ? 0 : $this->_sections['library5']['loop']-1;
if ($this->_sections['library5']['show']) {
    $this->_sections['library5']['total'] = $this->_sections['library5']['loop'];
    if ($this->_sections['library5']['total'] == 0)
        $this->_sections['library5']['show'] = false;
} else
    $this->_sections['library5']['total'] = 0;
if ($this->_sections['library5']['show']):

            for ($this->_sections['library5']['index'] = $this->_sections['library5']['start'], $this->_sections['library5']['iteration'] = 1;
                 $this->_sections['library5']['iteration'] <= $this->_sections['library5']['total'];
                 $this->_sections['library5']['index'] += $this->_sections['library5']['step'], $this->_sections['library5']['iteration']++):
$this->_sections['library5']['rownum'] = $this->_sections['library5']['iteration'];
$this->_sections['library5']['index_prev'] = $this->_sections['library5']['index'] - $this->_sections['library5']['step'];
$this->_sections['library5']['index_next'] = $this->_sections['library5']['index'] + $this->_sections['library5']['step'];
$this->_sections['library5']['first']      = ($this->_sections['library5']['iteration'] == 1);
$this->_sections['library5']['last']       = ($this->_sections['library5']['iteration'] == $this->_sections['library5']['total']);
 echo '<b>';  echo $this->_tpl_vars['Tauthor'][$this->_sections['library5']['index']];  echo '</b> napisał(a): ';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == "Sędzia" || $this->_tpl_vars['Rank'] == "Kanclerz Sądu"):  echo ' (<a href="court.php?step2=comments&amp;action=delete&amp;cid=';  echo $this->_tpl_vars['Cid'][$this->_sections['library5']['index']];  echo '">';  echo $this->_tpl_vars['Adelete'];  echo '</a>) ';  endif;  echo '<br />';  echo $this->_tpl_vars['Tbody'][$this->_sections['library5']['index']];  echo '<br /><br />';  endfor; endif;  echo '';  endif;  echo '<br /><br />';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == "Sędzia" || $this->_tpl_vars['Rank'] == "Kanclerz Sądu" || $this->_tpl_vars['Rank'] == 'Staff'):  echo '<center><form method="post" action="court.php?step2=comments&amp;action=add">';  echo $this->_tpl_vars['Addcomment'];  echo ':<textarea name="body" rows="20" cols="50"></textarea><br /><input type="hidden" name="tid" value="';  echo $this->_tpl_vars['Text'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form></center>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step2'] != ""):  echo '';  if ($this->_tpl_vars['Step'] == 'rules' || $this->_tpl_vars['Step'] == 'cases' || $this->_tpl_vars['Step'] == 'verdicts'):  echo '<center><b>';  echo $this->_tpl_vars['Rtitle'];  echo '</b> ';  echo $this->_tpl_vars['Mdate'];  echo ': <b>';  echo $this->_tpl_vars['Rdate'];  echo '</b> ';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == "Sędzia" || $this->_tpl_vars['Rank'] == "Kanclerz Sądu"):  echo ' <a href="court.php?modify=';  echo $this->_tpl_vars['Rid'];  echo '">';  echo $this->_tpl_vars['Achange'];  echo '</a>';  endif;  echo '</center><br />';  echo $this->_tpl_vars['Rbody'];  echo '<br /><br />';  if ($this->_tpl_vars['Step'] == 'cases'):  echo '<a href="court.php?step2=comments&amp;text=';  echo $this->_tpl_vars['Rid'];  echo '">';  echo $this->_tpl_vars['Acomments'];  echo '</a>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'admin'):  echo '<form method="post" action="court.php?step=admin&amp;step2=';  echo $this->_tpl_vars['Step2'];  echo '&amp;action=add">';  echo $this->_tpl_vars['Tlang'];  echo ': <select name="lang">';  unset($this->_sections['court3']);
$this->_sections['court3']['name'] = 'court3';
$this->_sections['court3']['loop'] = is_array($_loop=$this->_tpl_vars['Llang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['court3']['show'] = true;
$this->_sections['court3']['max'] = $this->_sections['court3']['loop'];
$this->_sections['court3']['step'] = 1;
$this->_sections['court3']['start'] = $this->_sections['court3']['step'] > 0 ? 0 : $this->_sections['court3']['loop']-1;
if ($this->_sections['court3']['show']) {
    $this->_sections['court3']['total'] = $this->_sections['court3']['loop'];
    if ($this->_sections['court3']['total'] == 0)
        $this->_sections['court3']['show'] = false;
} else
    $this->_sections['court3']['total'] = 0;
if ($this->_sections['court3']['show']):

            for ($this->_sections['court3']['index'] = $this->_sections['court3']['start'], $this->_sections['court3']['iteration'] = 1;
                 $this->_sections['court3']['iteration'] <= $this->_sections['court3']['total'];
                 $this->_sections['court3']['index'] += $this->_sections['court3']['step'], $this->_sections['court3']['iteration']++):
$this->_sections['court3']['rownum'] = $this->_sections['court3']['iteration'];
$this->_sections['court3']['index_prev'] = $this->_sections['court3']['index'] - $this->_sections['court3']['step'];
$this->_sections['court3']['index_next'] = $this->_sections['court3']['index'] + $this->_sections['court3']['step'];
$this->_sections['court3']['first']      = ($this->_sections['court3']['iteration'] == 1);
$this->_sections['court3']['last']       = ($this->_sections['court3']['iteration'] == $this->_sections['court3']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Llang'][$this->_sections['court3']['index']];  echo '">';  echo $this->_tpl_vars['Llang'][$this->_sections['court3']['index']];  echo '</option>';  endfor; endif;  echo '</select><br />';  echo $this->_tpl_vars['Ttitle2'];  echo ': <input type="text" name="ttitle" /><br />';  echo $this->_tpl_vars['Tbody2'];  echo ': <br /><textarea name="body" rows="30" cols="60"></textarea><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '<br /><br /><a href="court.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  endif;  echo '';  if ($this->_tpl_vars['Modify'] != ""):  echo '<form method="post" action="court.php?modify=';  echo $this->_tpl_vars['Tid'];  echo '&amp;action=change">';  echo $this->_tpl_vars['Ttitle2'];  echo ': <input type="text" name="ttitle" value="';  echo $this->_tpl_vars['Ttitle'];  echo '" /><br />';  echo $this->_tpl_vars['Tbody2'];  echo ': <br /><textarea name="body" rows="30" cols="60">';  echo $this->_tpl_vars['Tbody'];  echo '</textarea><br /><input type="hidden" name="tid" value="';  echo $this->_tpl_vars['Tid'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Achange'];  echo '" /></form><br /><br /><a href="court.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  endif;  echo ''; ?>