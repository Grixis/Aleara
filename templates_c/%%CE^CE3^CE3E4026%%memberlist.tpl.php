<?php /* Smarty version 2.6.16, created on 2012-10-06 01:43:45
         compiled from memberlist.tpl */ ?>
<center><IMG SRC="images/locations/spismieszkancow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
<?php echo '';  if (isset ( $this->_tpl_vars['Data'] )):  echo '<p>';  echo @INFO;  echo '</p><table cellpadding="4px"><tr><th>';  echo @PL_ID;  echo '<a href="';  echo $this->_tpl_vars['TopLink'];  echo 'orderby=id&amp;order=DESC"><img src="images/male.jpg" alt="img_Malejąco" title="Sortuj malejąco" /></a><a href="';  echo $this->_tpl_vars['TopLink'];  echo 'orderby=id&amp;order=ASC"><img src="images/ros.jpg" alt="img_Rosnąco" title="Sortuj rosnąco" /></a></th><th>';  echo @PL_NAME;  echo '<a href="';  echo $this->_tpl_vars['TopLink'];  echo 'orderby=user&amp;order=DESC"><img src="images/male.jpg" alt="img_Malejąco" title="Sortuj malejąco" /></a><a href="';  echo $this->_tpl_vars['TopLink'];  echo 'orderby=user&amp;order=ASC"><img src="images/ros.jpg" alt="img_Rosnąco" title="Sortuj rosnąco" /></a></th><th>';  echo @PL_RANK;  echo '<a href="';  echo $this->_tpl_vars['TopLink'];  echo 'orderby=rank&amp;order=DESC"><img src="images/male.jpg" alt="img_Malejąco" title="Sortuj malejąco" /></a><a href="';  echo $this->_tpl_vars['TopLink'];  echo 'orderby=rank&amp;order=ASC"><img src="images/ros.jpg" alt="img_Rosnąco" title="Sortuj rosnąco" /></a></th><th>';  echo @PL_RACE;  echo '<a href="';  echo $this->_tpl_vars['TopLink'];  echo 'orderby=rasa&amp;order=DESC"><img src="images/male.jpg" alt="img_Malejąco" title="Sortuj malejąco" /></a><a href="';  echo $this->_tpl_vars['TopLink'];  echo 'orderby=rasa&amp;order=ASC"><img src="images/ros.jpg" alt="img_Rosnąco" title="Sortuj rosnąco" /></a></th><th>';  echo @PL_LEVEL;  echo '<a href="';  echo $this->_tpl_vars['TopLink'];  echo 'orderby=klasa&amp;order=DESC"><img src="images/male.jpg" alt="img_Malejąco" title="Sortuj malejąco" /></a><a href="';  echo $this->_tpl_vars['TopLink'];  echo 'orderby=klasa&amp;order=ASC"><img src="images/ros.jpg" alt="img_Rosnąco" title="Sortuj rosnąco" /></a></th>';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Staff'):  echo '<th>';  echo @PL_IP;  echo '<a href="';  echo $this->_tpl_vars['TopLink'];  echo 'orderby=ip&amp;order=DESC"><img src="images/male.jpg" alt="img_Malejąco" title="Sortuj malejąco" /></a><a href="';  echo $this->_tpl_vars['TopLink'];  echo 'orderby=ip&amp;order=ASC"><img src="images/ros.jpg" alt="img_Rosnąco" title="Sortuj rosnąco" /></a></th>';  endif;  echo '</tr>';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Data'][$this->_sections['i']['index']][0];  echo '</td><td><a href="view.php?view=';  echo $this->_tpl_vars['Data'][$this->_sections['i']['index']][0];  echo '">';  echo $this->_tpl_vars['Data'][$this->_sections['i']['index']][1];  echo '</a></td><td>';  echo $this->_tpl_vars['Data'][$this->_sections['i']['index']][2];  echo '</td><td>';  echo $this->_tpl_vars['Data'][$this->_sections['i']['index']][3];  echo '</td><td>';  echo $this->_tpl_vars['Data'][$this->_sections['i']['index']][4];  echo '</td>';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Staff'):  echo '<td>';  echo $this->_tpl_vars['Data'][$this->_sections['i']['index']][6];  echo '</td>';  endif;  echo '</tr>';  endfor; endif;  echo '</table>';  echo '';  if (! empty ( $this->_tpl_vars['Pagelinks'] )):  echo '<div id="memberlist2" class="center">';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Pagelinks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
 echo '';  if ($this->_tpl_vars['Current'] != $this->_sections['i']['iteration']):  echo ' ';  echo $this->_tpl_vars['Pagelinks'][$this->_sections['i']['index']];  echo ' ';  else:  echo ' ';  echo $this->_tpl_vars['Current'];  echo ' ';  endif;  echo '';  if (( $this->_sections['i']['iteration']%20 ) == 0):  echo '<br />';  endif;  echo '';  endfor; endif;  echo '</div>';  endif;  echo '';  else:  echo '<p>';  echo @NO_RESULTS;  echo '</p>';  endif;  echo '<form method="get" action="memberlist.php"><fieldset><legend>';  echo @SEARCH_OPTIONS;  echo '</legend><ul><li>';  echo @SEARCH_BY_NAME;  echo ': <input type="text" name="name" /></li><li>';  echo @SEARCH_BY_ID;  echo ': <input type="text" name="id" /></li>';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Staff'):  echo '<li>';  echo @SEARCH_BY_IP;  echo ': <input type="text" name="ip" /></li>';  endif;  echo '</ul><input type="submit" value="';  echo @A_SEARCH;  echo '" /></fieldset></form>'; ?>

</br></br>