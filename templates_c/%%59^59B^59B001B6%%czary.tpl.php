<?php /* Smarty version 2.6.16, created on 2013-03-13 22:02:44
         compiled from czary.tpl */ ?>
<?php echo '<u>';  echo $this->_tpl_vars['Usedspells'];  echo '</u>:<br />';  echo $this->_tpl_vars['Battle'];  echo '';  echo $this->_tpl_vars['Defence'];  echo '<br /><u>';  echo $this->_tpl_vars['Spellbook'];  echo '</u>:<br /><b>-';  echo $this->_tpl_vars['Bspells'];  echo ':</b><ul>';  unset($this->_sections['spell1']);
$this->_sections['spell1']['name'] = 'spell1';
$this->_sections['spell1']['loop'] = is_array($_loop=$this->_tpl_vars['Bname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['spell1']['show'] = true;
$this->_sections['spell1']['max'] = $this->_sections['spell1']['loop'];
$this->_sections['spell1']['step'] = 1;
$this->_sections['spell1']['start'] = $this->_sections['spell1']['step'] > 0 ? 0 : $this->_sections['spell1']['loop']-1;
if ($this->_sections['spell1']['show']) {
    $this->_sections['spell1']['total'] = $this->_sections['spell1']['loop'];
    if ($this->_sections['spell1']['total'] == 0)
        $this->_sections['spell1']['show'] = false;
} else
    $this->_sections['spell1']['total'] = 0;
if ($this->_sections['spell1']['show']):

            for ($this->_sections['spell1']['index'] = $this->_sections['spell1']['start'], $this->_sections['spell1']['iteration'] = 1;
                 $this->_sections['spell1']['iteration'] <= $this->_sections['spell1']['total'];
                 $this->_sections['spell1']['index'] += $this->_sections['spell1']['step'], $this->_sections['spell1']['iteration']++):
$this->_sections['spell1']['rownum'] = $this->_sections['spell1']['iteration'];
$this->_sections['spell1']['index_prev'] = $this->_sections['spell1']['index'] - $this->_sections['spell1']['step'];
$this->_sections['spell1']['index_next'] = $this->_sections['spell1']['index'] + $this->_sections['spell1']['step'];
$this->_sections['spell1']['first']      = ($this->_sections['spell1']['iteration'] == 1);
$this->_sections['spell1']['last']       = ($this->_sections['spell1']['iteration'] == $this->_sections['spell1']['total']);
 echo '<li> ';  echo $this->_tpl_vars['Bname'][$this->_sections['spell1']['index']];  echo ' (+';  echo $this->_tpl_vars['Bpower'][$this->_sections['spell1']['index']];  echo ' x ';  echo $this->_tpl_vars['Bdamage'];  echo ') [ <a href="czary.php?naucz=';  echo $this->_tpl_vars['Bid'][$this->_sections['spell1']['index']];  echo '">';  echo $this->_tpl_vars['Usethis'];  echo '</a> ]</li>';  endfor; endif;  echo '</ul><br /><b>-';  echo $this->_tpl_vars['Dspells'];  echo ':</b><ul>';  unset($this->_sections['spell2']);
$this->_sections['spell2']['name'] = 'spell2';
$this->_sections['spell2']['loop'] = is_array($_loop=$this->_tpl_vars['Dname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['spell2']['show'] = true;
$this->_sections['spell2']['max'] = $this->_sections['spell2']['loop'];
$this->_sections['spell2']['step'] = 1;
$this->_sections['spell2']['start'] = $this->_sections['spell2']['step'] > 0 ? 0 : $this->_sections['spell2']['loop']-1;
if ($this->_sections['spell2']['show']) {
    $this->_sections['spell2']['total'] = $this->_sections['spell2']['loop'];
    if ($this->_sections['spell2']['total'] == 0)
        $this->_sections['spell2']['show'] = false;
} else
    $this->_sections['spell2']['total'] = 0;
if ($this->_sections['spell2']['show']):

            for ($this->_sections['spell2']['index'] = $this->_sections['spell2']['start'], $this->_sections['spell2']['iteration'] = 1;
                 $this->_sections['spell2']['iteration'] <= $this->_sections['spell2']['total'];
                 $this->_sections['spell2']['index'] += $this->_sections['spell2']['step'], $this->_sections['spell2']['iteration']++):
$this->_sections['spell2']['rownum'] = $this->_sections['spell2']['iteration'];
$this->_sections['spell2']['index_prev'] = $this->_sections['spell2']['index'] - $this->_sections['spell2']['step'];
$this->_sections['spell2']['index_next'] = $this->_sections['spell2']['index'] + $this->_sections['spell2']['step'];
$this->_sections['spell2']['first']      = ($this->_sections['spell2']['iteration'] == 1);
$this->_sections['spell2']['last']       = ($this->_sections['spell2']['iteration'] == $this->_sections['spell2']['total']);
 echo '<li> ';  echo $this->_tpl_vars['Dname'][$this->_sections['spell2']['index']];  echo ' (+';  echo $this->_tpl_vars['Dpower'][$this->_sections['spell2']['index']];  echo ' x ';  echo $this->_tpl_vars['Ddefense'];  echo ') [ <a href="czary.php?naucz=';  echo $this->_tpl_vars['Did'][$this->_sections['spell2']['index']];  echo '">';  echo $this->_tpl_vars['Usethis'];  echo '</a> ]</li>';  endfor; endif;  echo '</ul><br /><b>-';  echo $this->_tpl_vars['Espells'];  echo ':</b><ul>';  unset($this->_sections['spell3']);
$this->_sections['spell3']['name'] = 'spell3';
$this->_sections['spell3']['loop'] = is_array($_loop=$this->_tpl_vars['Uname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['spell3']['show'] = true;
$this->_sections['spell3']['max'] = $this->_sections['spell3']['loop'];
$this->_sections['spell3']['step'] = 1;
$this->_sections['spell3']['start'] = $this->_sections['spell3']['step'] > 0 ? 0 : $this->_sections['spell3']['loop']-1;
if ($this->_sections['spell3']['show']) {
    $this->_sections['spell3']['total'] = $this->_sections['spell3']['loop'];
    if ($this->_sections['spell3']['total'] == 0)
        $this->_sections['spell3']['show'] = false;
} else
    $this->_sections['spell3']['total'] = 0;
if ($this->_sections['spell3']['show']):

            for ($this->_sections['spell3']['index'] = $this->_sections['spell3']['start'], $this->_sections['spell3']['iteration'] = 1;
                 $this->_sections['spell3']['iteration'] <= $this->_sections['spell3']['total'];
                 $this->_sections['spell3']['index'] += $this->_sections['spell3']['step'], $this->_sections['spell3']['iteration']++):
$this->_sections['spell3']['rownum'] = $this->_sections['spell3']['iteration'];
$this->_sections['spell3']['index_prev'] = $this->_sections['spell3']['index'] - $this->_sections['spell3']['step'];
$this->_sections['spell3']['index_next'] = $this->_sections['spell3']['index'] + $this->_sections['spell3']['step'];
$this->_sections['spell3']['first']      = ($this->_sections['spell3']['iteration'] == 1);
$this->_sections['spell3']['last']       = ($this->_sections['spell3']['iteration'] == $this->_sections['spell3']['total']);
 echo '<li> ';  echo $this->_tpl_vars['Uname'][$this->_sections['spell3']['index']];  echo ' (';  echo $this->_tpl_vars['Ueffect'][$this->_sections['spell3']['index']];  echo ') [ <a href="czary.php?cast=';  echo $this->_tpl_vars['Uid'][$this->_sections['spell3']['index']];  echo '">';  echo $this->_tpl_vars['Castthis'];  echo '</a> ]</li>';  endfor; endif;  echo '</ul>';  if ($this->_tpl_vars['Cast'] != ""):  echo '<form method="post" action="czary.php?cast=';  echo $this->_tpl_vars['Cast'];  echo '&amp;step=items"><input type="submit" value="';  echo $this->_tpl_vars['Cast2'];  echo '" /> ';  echo $this->_tpl_vars['Spell'];  echo ' ';  echo $this->_tpl_vars['Spellname'];  echo ' ';  echo $this->_tpl_vars['Ona'];  echo ' <select name="item">';  unset($this->_sections['spell4']);
$this->_sections['spell4']['name'] = 'spell4';
$this->_sections['spell4']['loop'] = is_array($_loop=$this->_tpl_vars['Itemname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['spell4']['show'] = true;
$this->_sections['spell4']['max'] = $this->_sections['spell4']['loop'];
$this->_sections['spell4']['step'] = 1;
$this->_sections['spell4']['start'] = $this->_sections['spell4']['step'] > 0 ? 0 : $this->_sections['spell4']['loop']-1;
if ($this->_sections['spell4']['show']) {
    $this->_sections['spell4']['total'] = $this->_sections['spell4']['loop'];
    if ($this->_sections['spell4']['total'] == 0)
        $this->_sections['spell4']['show'] = false;
} else
    $this->_sections['spell4']['total'] = 0;
if ($this->_sections['spell4']['show']):

            for ($this->_sections['spell4']['index'] = $this->_sections['spell4']['start'], $this->_sections['spell4']['iteration'] = 1;
                 $this->_sections['spell4']['iteration'] <= $this->_sections['spell4']['total'];
                 $this->_sections['spell4']['index'] += $this->_sections['spell4']['step'], $this->_sections['spell4']['iteration']++):
$this->_sections['spell4']['rownum'] = $this->_sections['spell4']['iteration'];
$this->_sections['spell4']['index_prev'] = $this->_sections['spell4']['index'] - $this->_sections['spell4']['step'];
$this->_sections['spell4']['index_next'] = $this->_sections['spell4']['index'] + $this->_sections['spell4']['step'];
$this->_sections['spell4']['first']      = ($this->_sections['spell4']['iteration'] == 1);
$this->_sections['spell4']['last']       = ($this->_sections['spell4']['iteration'] == $this->_sections['spell4']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Itemid'][$this->_sections['spell4']['index']];  echo '">';  echo $this->_tpl_vars['Itemname'][$this->_sections['spell4']['index']];  echo '(+';  echo $this->_tpl_vars['Itempower'][$this->_sections['spell4']['index']];  echo ', ';  echo $this->_tpl_vars['Itemszyb'][$this->_sections['spell4']['index']];  echo ' szybkości, ';  echo $this->_tpl_vars['Itemzr'][$this->_sections['spell4']['index']];  echo ' zręczności, ';  echo $this->_tpl_vars['Itemwt'][$this->_sections['spell4']['index']];  echo '/';  echo $this->_tpl_vars['Itemmaxwt'][$this->_sections['spell4']['index']];  echo ' (';  echo $this->_tpl_vars['Iamount'];  echo ': ';  echo $this->_tpl_vars['Itemamount'][$this->_sections['spell4']['index']];  echo ')</option>';  endfor; endif;  echo '</select><input type="hidden" name="spell" value="';  echo $this->_tpl_vars['Spellname'];  echo '" /><br /></form>';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['Learn'] > '0'):  echo '';  echo $this->_tpl_vars['Youuse'];  echo ' ';  echo $this->_tpl_vars['Name'];  echo '. (<a href="czary.php">';  echo $this->_tpl_vars['Arefresh'];  echo '</a>)';  endif;  echo '';  if ($this->_tpl_vars['Deaktiv'] > '0'):  echo '<a href="czary.php">(';  echo $this->_tpl_vars['Arefresh'];  echo ')</a>';  endif;  echo ''; ?>


</br>