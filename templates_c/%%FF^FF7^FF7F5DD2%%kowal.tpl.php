<?php /* Smarty version 2.6.16, created on 2012-10-06 00:56:47
         compiled from kowal.tpl */ ?>
<center><IMG SRC="images/locations/kuznia.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
<?php echo '';  if ($this->_tpl_vars['Smith'] == ''):  echo '<p>';  echo $this->_tpl_vars['Smithinfo'];  echo '</p><ul';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo ' class="sword"';  endif;  echo '><li><a href="kowal.php?kowal=plany">';  echo $this->_tpl_vars['Aplans'];  echo '</a></li><li><a href="kowal.php?kowal=kuznia">';  echo $this->_tpl_vars['Asmith'];  echo '</a></li><li><a href="kowal.php?kowal=astral">';  echo $this->_tpl_vars['Aastral'];  echo '</a></li></ul>';  endif;  echo '';  if ($this->_tpl_vars['Smith'] == 'plany'):  echo '';  echo $this->_tpl_vars['Hereis'];  echo '<br /><ul';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo ' class="sword"';  endif;  echo '><li><a href="kowal.php?kowal=plany&amp;dalej=W">';  echo $this->_tpl_vars['Aplansw'];  echo '</a></li><li><a href="kowal.php?kowal=plany&amp;dalej=A">';  echo $this->_tpl_vars['Aplansa'];  echo '</a></li><li><a href="kowal.php?kowal=plany&amp;dalej=S">';  echo $this->_tpl_vars['Aplanss'];  echo '</a></li><li><a href="kowal.php?kowal=plany&amp;dalej=H">';  echo $this->_tpl_vars['Aplansh'];  echo '</a></li><li><a href="kowal.php?kowal=plany&amp;dalej=L">';  echo $this->_tpl_vars['Aplansl'];  echo '</a></li></ul>';  if ($this->_tpl_vars['Next'] != ""):  echo '<table><tr><th width="50%"><u>';  echo $this->_tpl_vars['Iname'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Icost'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Ilevel'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Ioption'];  echo '</u></th></tr>';  unset($this->_sections['smith']);
$this->_sections['smith']['name'] = 'smith';
$this->_sections['smith']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['smith']['show'] = true;
$this->_sections['smith']['max'] = $this->_sections['smith']['loop'];
$this->_sections['smith']['step'] = 1;
$this->_sections['smith']['start'] = $this->_sections['smith']['step'] > 0 ? 0 : $this->_sections['smith']['loop']-1;
if ($this->_sections['smith']['show']) {
    $this->_sections['smith']['total'] = $this->_sections['smith']['loop'];
    if ($this->_sections['smith']['total'] == 0)
        $this->_sections['smith']['show'] = false;
} else
    $this->_sections['smith']['total'] = 0;
if ($this->_sections['smith']['show']):

            for ($this->_sections['smith']['index'] = $this->_sections['smith']['start'], $this->_sections['smith']['iteration'] = 1;
                 $this->_sections['smith']['iteration'] <= $this->_sections['smith']['total'];
                 $this->_sections['smith']['index'] += $this->_sections['smith']['step'], $this->_sections['smith']['iteration']++):
$this->_sections['smith']['rownum'] = $this->_sections['smith']['iteration'];
$this->_sections['smith']['index_prev'] = $this->_sections['smith']['index'] - $this->_sections['smith']['step'];
$this->_sections['smith']['index_next'] = $this->_sections['smith']['index'] + $this->_sections['smith']['step'];
$this->_sections['smith']['first']      = ($this->_sections['smith']['iteration'] == 1);
$this->_sections['smith']['last']       = ($this->_sections['smith']['iteration'] == $this->_sections['smith']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['smith']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Cost'][$this->_sections['smith']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Level'][$this->_sections['smith']['index']];  echo '</td><td>- <a href="kowal.php?kowal=plany&amp;buy=';  echo $this->_tpl_vars['Planid'][$this->_sections['smith']['index']];  echo '">';  echo $this->_tpl_vars['Abuy'];  echo '</a></td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['Buy'] != ""):  echo '';  echo $this->_tpl_vars['Youpay'];  echo ' <b>';  echo $this->_tpl_vars['Cost1'];  echo '</b> ';  echo $this->_tpl_vars['Andbuy'];  echo ': <b>';  echo $this->_tpl_vars['Name1'];  echo '</b>.';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Smith'] == 'kuznia'):  echo '';  if ($this->_tpl_vars['Make'] == '' && $this->_tpl_vars['Continue'] == ''):  echo '';  echo $this->_tpl_vars['Hereis'];  echo '<ul';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo ' class="sword"';  endif;  echo '><li><a href="kowal.php?kowal=kuznia&amp;type=W">';  echo $this->_tpl_vars['Amakew'];  echo '</a></li><li><a href="kowal.php?kowal=kuznia&amp;type=A">';  echo $this->_tpl_vars['Amakea'];  echo '</a></li><li><a href="kowal.php?kowal=kuznia&amp;type=S">';  echo $this->_tpl_vars['Amakes'];  echo '</a></li><li><a href="kowal.php?kowal=kuznia&amp;type=H">';  echo $this->_tpl_vars['Amakeh'];  echo '</a></li><li><a href="kowal.php?kowal=kuznia&amp;type=L">';  echo $this->_tpl_vars['Amakel'];  echo '</a></li></ul>';  if (isset ( $this->_tpl_vars['Info2'] )):  echo '<p>';  echo $this->_tpl_vars['Info2'];  echo ' <a href="kowal.php?kowal=kuznia&amp;ko=';  echo $this->_tpl_vars['ContinueId'];  echo '">';  echo $this->_tpl_vars['ContinueName'];  echo '</a><br />';  echo $this->_tpl_vars['Ipercent'];  echo ': ';  echo $this->_tpl_vars['ContinuePercent'];  echo '<br />';  echo $this->_tpl_vars['Ienergy'];  echo ': ';  echo $this->_tpl_vars['ContinueNeed'];  echo '</p>';  endif;  echo '';  if ($this->_tpl_vars['Type'] != ''):  echo '<table><tr><th><u>';  echo $this->_tpl_vars['Iname'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Ilevel'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Icost'];  echo '</u></th></tr>';  unset($this->_sections['mill']);
$this->_sections['mill']['name'] = 'mill';
$this->_sections['mill']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mill']['show'] = true;
$this->_sections['mill']['max'] = $this->_sections['mill']['loop'];
$this->_sections['mill']['step'] = 1;
$this->_sections['mill']['start'] = $this->_sections['mill']['step'] > 0 ? 0 : $this->_sections['mill']['loop']-1;
if ($this->_sections['mill']['show']) {
    $this->_sections['mill']['total'] = $this->_sections['mill']['loop'];
    if ($this->_sections['mill']['total'] == 0)
        $this->_sections['mill']['show'] = false;
} else
    $this->_sections['mill']['total'] = 0;
if ($this->_sections['mill']['show']):

            for ($this->_sections['mill']['index'] = $this->_sections['mill']['start'], $this->_sections['mill']['iteration'] = 1;
                 $this->_sections['mill']['iteration'] <= $this->_sections['mill']['total'];
                 $this->_sections['mill']['index'] += $this->_sections['mill']['step'], $this->_sections['mill']['iteration']++):
$this->_sections['mill']['rownum'] = $this->_sections['mill']['iteration'];
$this->_sections['mill']['index_prev'] = $this->_sections['mill']['index'] - $this->_sections['mill']['step'];
$this->_sections['mill']['index_next'] = $this->_sections['mill']['index'] + $this->_sections['mill']['step'];
$this->_sections['mill']['first']      = ($this->_sections['mill']['iteration'] == 1);
$this->_sections['mill']['last']       = ($this->_sections['mill']['iteration'] == $this->_sections['mill']['total']);
 echo '<tr><td><a href="kowal.php?kowal=kuznia&amp;dalej=';  echo $this->_tpl_vars['Planid'][$this->_sections['mill']['index']];  echo '">';  echo $this->_tpl_vars['Name'][$this->_sections['mill']['index']];  echo '</a></td>                <td>';  echo $this->_tpl_vars['Level'][$this->_sections['mill']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Cost'][$this->_sections['mill']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Cont'] != "" || $this->_tpl_vars['Next'] != ""):  echo '<form method="post" action="';  echo $this->_tpl_vars['Link'];  echo '">';  echo $this->_tpl_vars['Assignen'];  echo ' <b>';  echo $this->_tpl_vars['Name'];  echo '</b> <input type="text" name="razy" size="5" />';  echo $this->_tpl_vars['Senergy'];  echo '<input type="submit" value="';  echo $this->_tpl_vars['Amake'];  echo '" />';  if ($this->_tpl_vars['Next'] != ""):  echo ' <b>';  echo $this->_tpl_vars['Name'];  echo '</b> <select name="mineral"><option value="copper">';  echo $this->_tpl_vars['Mcopper'];  echo '</option><option value="bronze">';  echo $this->_tpl_vars['Mbronze'];  echo '</option><option value="brass">';  echo $this->_tpl_vars['Mbrass'];  echo '</option><option value="iron">';  echo $this->_tpl_vars['Miron'];  echo '</option><option value="steel">';  echo $this->_tpl_vars['Msteel'];  echo '</option></select>';  endif;  echo '</form>';  endif;  echo '';  if ($this->_tpl_vars['Continue'] != ""):  echo '';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['Make'] != ""):  echo '';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Smith'] == 'astral'):  echo '';  if (isset ( $this->_tpl_vars['Astralinfo'] )):  echo '<p>';  echo $this->_tpl_vars['Astralinfo'];  echo '</p>';  endif;  echo '<p>';  echo $this->_tpl_vars['Message'];  echo '</p>';  if (isset ( $this->_tpl_vars['Available'] )):  echo '';  unset($this->_sections['astral']);
$this->_sections['astral']['name'] = 'astral';
$this->_sections['astral']['loop'] = is_array($_loop=$this->_tpl_vars['Available']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral']['show'] = true;
$this->_sections['astral']['max'] = $this->_sections['astral']['loop'];
$this->_sections['astral']['step'] = 1;
$this->_sections['astral']['start'] = $this->_sections['astral']['step'] > 0 ? 0 : $this->_sections['astral']['loop']-1;
if ($this->_sections['astral']['show']) {
    $this->_sections['astral']['total'] = $this->_sections['astral']['loop'];
    if ($this->_sections['astral']['total'] == 0)
        $this->_sections['astral']['show'] = false;
} else
    $this->_sections['astral']['total'] = 0;
if ($this->_sections['astral']['show']):

            for ($this->_sections['astral']['index'] = $this->_sections['astral']['start'], $this->_sections['astral']['iteration'] = 1;
                 $this->_sections['astral']['iteration'] <= $this->_sections['astral']['total'];
                 $this->_sections['astral']['index'] += $this->_sections['astral']['step'], $this->_sections['astral']['iteration']++):
$this->_sections['astral']['rownum'] = $this->_sections['astral']['iteration'];
$this->_sections['astral']['index_prev'] = $this->_sections['astral']['index'] - $this->_sections['astral']['step'];
$this->_sections['astral']['index_next'] = $this->_sections['astral']['index'] + $this->_sections['astral']['step'];
$this->_sections['astral']['first']      = ($this->_sections['astral']['iteration'] == 1);
$this->_sections['astral']['last']       = ($this->_sections['astral']['iteration'] == $this->_sections['astral']['total']);
 echo '<p><b>';  echo $this->_tpl_vars['Tname'];  echo ':</b> ';  echo $this->_tpl_vars['Available'][$this->_sections['astral']['index']];  echo '';  unset($this->_sections['astral2']);
$this->_sections['astral2']['name'] = 'astral2';
$this->_sections['astral2']['loop'] = is_array($_loop=$this->_tpl_vars['Resourcename']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['astral2']['show'] = true;
$this->_sections['astral2']['max'] = $this->_sections['astral2']['loop'];
$this->_sections['astral2']['step'] = 1;
$this->_sections['astral2']['start'] = $this->_sections['astral2']['step'] > 0 ? 0 : $this->_sections['astral2']['loop']-1;
if ($this->_sections['astral2']['show']) {
    $this->_sections['astral2']['total'] = $this->_sections['astral2']['loop'];
    if ($this->_sections['astral2']['total'] == 0)
        $this->_sections['astral2']['show'] = false;
} else
    $this->_sections['astral2']['total'] = 0;
if ($this->_sections['astral2']['show']):

            for ($this->_sections['astral2']['index'] = $this->_sections['astral2']['start'], $this->_sections['astral2']['iteration'] = 1;
                 $this->_sections['astral2']['iteration'] <= $this->_sections['astral2']['total'];
                 $this->_sections['astral2']['index'] += $this->_sections['astral2']['step'], $this->_sections['astral2']['iteration']++):
$this->_sections['astral2']['rownum'] = $this->_sections['astral2']['iteration'];
$this->_sections['astral2']['index_prev'] = $this->_sections['astral2']['index'] - $this->_sections['astral2']['step'];
$this->_sections['astral2']['index_next'] = $this->_sections['astral2']['index'] + $this->_sections['astral2']['step'];
$this->_sections['astral2']['first']      = ($this->_sections['astral2']['iteration'] == 1);
$this->_sections['astral2']['last']       = ($this->_sections['astral2']['iteration'] == $this->_sections['astral2']['total']);
 echo '<br /><b>';  echo $this->_tpl_vars['Resourcename'][$this->_sections['astral2']['index']];  echo ':</b> ';  echo $this->_tpl_vars['Resourceamount'][$this->_sections['astral']['index']][$this->_sections['astral2']['index']];  echo '';  endfor; endif;  echo '<form method="post" action="kowal.php?kowal=astral&amp;component=';  echo $this->_tpl_vars['Compnumber'][$this->_sections['astral']['index']];  echo '"><input type="submit" value="';  echo $this->_tpl_vars['Abuild'];  echo '" /></form></p>';  endfor; endif;  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Smith'] != ''):  echo '<br /><a href="kowal.php">(';  echo $this->_tpl_vars['Aback'];  echo ')</a>';  endif;  echo ''; ?>

</br>