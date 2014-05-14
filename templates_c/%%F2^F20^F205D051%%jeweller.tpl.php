<?php /* Smarty version 2.6.16, created on 2012-10-06 00:42:45
         compiled from jeweller.tpl */ ?>
<center><IMG SRC="images/locations/warsztatjubile.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['Step'] == ""):  echo 'Wędrując ulicami miasta spostrzegasz bogato zdobiony szyld. Wielki pierścień błyszczał już z wielu metrów. Podchodząc bliżej spostrzegasz, że za dużym oknem wystawowym znajdują się formy do odlewów, schematy i wiele innych rzeczy potrzebnych do wyrobu biżuterii. Gnom siedzący w środku zauważył Cię i skinął na Ciebie palcem.<br>Po wejściu do środka słyszysz: <br>- Widzę zainteresowanie w Twoich oczach. Może chcesz kupić jakiś plan pierścienia? Z warsztatu oczywiście możesz skorzystać za darmo. Chcesz coś zrobić?<br /><br /><ul';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo ' class="sword"';  endif;  echo '><li><a href="jeweller.php?step=plans">';  echo $this->_tpl_vars['Aplans'];  echo '</a></li><li><a href="jeweller.php?step=make">';  echo $this->_tpl_vars['Aring'];  echo '</a></li>';  if ($this->_tpl_vars['Playerclass'] == "Rzemieślnik"):  echo '<li><a href="jeweller.php?step=make2">';  echo $this->_tpl_vars['Amakering'];  echo '</a></li><li><a href="jeweller.php?step=make3">';  echo $this->_tpl_vars['Amakering2'];  echo '</a></li>';  endif;  echo '<li><a href="jeweller.php?step=astral">';  echo $this->_tpl_vars['Aastral'];  echo '</a></li></ul>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'plans'):  echo '';  if ($this->_tpl_vars['Buy'] == ""):  echo '';  echo $this->_tpl_vars['Hereis'];  echo '<table><tr><th width="50%"><u>';  echo $this->_tpl_vars['Iname'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Icost'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Ilevel'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Ioption'];  echo '</u></th></tr>';  unset($this->_sections['mill']);
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
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['mill']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Cost'][$this->_sections['mill']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Level'][$this->_sections['mill']['index']];  echo '</td><td>- <a href="jeweller.php?step=plans&amp;buy=';  echo $this->_tpl_vars['Planid'][$this->_sections['mill']['index']];  echo '">';  echo $this->_tpl_vars['Abuy'];  echo '</a></td></tr>';  endfor; endif;  echo '</table>';  else:  echo '';  echo $this->_tpl_vars['Youpay'];  echo ' <b>';  echo $this->_tpl_vars['Cost1'];  echo '</b> ';  echo $this->_tpl_vars['Andbuy'];  echo ': <b>';  echo $this->_tpl_vars['Name1'];  echo '</b>.';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'make'):  echo '';  echo $this->_tpl_vars['Ringinfo'];  echo '<br /><br /><form method="post" action="jeweller.php?step=make&amp;make=Y"><input type="submit" value="';  echo $this->_tpl_vars['Amake'];  echo '" /> <input type="text" name="amount" size="5" /> ';  echo $this->_tpl_vars['Ramount'];  echo '</form>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'make2'):  echo '';  if ($this->_tpl_vars['Action'] == ""):  echo '';  echo $this->_tpl_vars['Ringinfo'];  echo '<br /><br />';  if ($this->_tpl_vars['Maked'] == ""):  echo '<table><tr><td><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tlevel'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tadam'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tcryst'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tmeteor'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tenergy'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tbonus'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tchange'];  echo '</u></b></td></tr>';  unset($this->_sections['rings']);
$this->_sections['rings']['name'] = 'rings';
$this->_sections['rings']['loop'] = is_array($_loop=$this->_tpl_vars['Rid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rings']['show'] = true;
$this->_sections['rings']['max'] = $this->_sections['rings']['loop'];
$this->_sections['rings']['step'] = 1;
$this->_sections['rings']['start'] = $this->_sections['rings']['step'] > 0 ? 0 : $this->_sections['rings']['loop']-1;
if ($this->_sections['rings']['show']) {
    $this->_sections['rings']['total'] = $this->_sections['rings']['loop'];
    if ($this->_sections['rings']['total'] == 0)
        $this->_sections['rings']['show'] = false;
} else
    $this->_sections['rings']['total'] = 0;
if ($this->_sections['rings']['show']):

            for ($this->_sections['rings']['index'] = $this->_sections['rings']['start'], $this->_sections['rings']['iteration'] = 1;
                 $this->_sections['rings']['iteration'] <= $this->_sections['rings']['total'];
                 $this->_sections['rings']['index'] += $this->_sections['rings']['step'], $this->_sections['rings']['iteration']++):
$this->_sections['rings']['rownum'] = $this->_sections['rings']['iteration'];
$this->_sections['rings']['index_prev'] = $this->_sections['rings']['index'] - $this->_sections['rings']['step'];
$this->_sections['rings']['index_next'] = $this->_sections['rings']['index'] + $this->_sections['rings']['step'];
$this->_sections['rings']['first']      = ($this->_sections['rings']['iteration'] == 1);
$this->_sections['rings']['last']       = ($this->_sections['rings']['iteration'] == $this->_sections['rings']['total']);
 echo '<tr><td><a href="jeweller.php?step=make2&amp;make=';  echo $this->_tpl_vars['Rid'][$this->_sections['rings']['index']];  echo '">';  echo $this->_tpl_vars['Rname'][$this->_sections['rings']['index']];  echo '</a></td><td align="center">';  echo $this->_tpl_vars['Rlevel'][$this->_sections['rings']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Radam'][$this->_sections['rings']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Rcryst'][$this->_sections['rings']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Rmeteor'][$this->_sections['rings']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Renergy'][$this->_sections['rings']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Rbonus'][$this->_sections['rings']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Rchange'][$this->_sections['rings']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table>';  if ($this->_tpl_vars['Make'] != ""):  echo '<br /><br /><form method="post" action="jeweller.php?step=make2&amp;action=create"><input type="submit" value="';  echo $this->_tpl_vars['Youmake'];  echo '" /> <b>';  echo $this->_tpl_vars['Rname2'];  echo '</b>';  if ($this->_tpl_vars['Change'] == 'Y'):  echo ' ';  echo $this->_tpl_vars['Withbon'];  echo ' <select name="bonus">';  unset($this->_sections['make']);
$this->_sections['make']['name'] = 'make';
$this->_sections['make']['loop'] = is_array($_loop=$this->_tpl_vars['Rbonus2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['make']['show'] = true;
$this->_sections['make']['max'] = $this->_sections['make']['loop'];
$this->_sections['make']['step'] = 1;
$this->_sections['make']['start'] = $this->_sections['make']['step'] > 0 ? 0 : $this->_sections['make']['loop']-1;
if ($this->_sections['make']['show']) {
    $this->_sections['make']['total'] = $this->_sections['make']['loop'];
    if ($this->_sections['make']['total'] == 0)
        $this->_sections['make']['show'] = false;
} else
    $this->_sections['make']['total'] = 0;
if ($this->_sections['make']['show']):

            for ($this->_sections['make']['index'] = $this->_sections['make']['start'], $this->_sections['make']['iteration'] = 1;
                 $this->_sections['make']['iteration'] <= $this->_sections['make']['total'];
                 $this->_sections['make']['index'] += $this->_sections['make']['step'], $this->_sections['make']['iteration']++):
$this->_sections['make']['rownum'] = $this->_sections['make']['iteration'];
$this->_sections['make']['index_prev'] = $this->_sections['make']['index'] - $this->_sections['make']['step'];
$this->_sections['make']['index_next'] = $this->_sections['make']['index'] + $this->_sections['make']['step'];
$this->_sections['make']['first']      = ($this->_sections['make']['iteration'] == 1);
$this->_sections['make']['last']       = ($this->_sections['make']['iteration'] == $this->_sections['make']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Rbonus2'][$this->_sections['make']['index']];  echo '">';  echo $this->_tpl_vars['Rbonus2'][$this->_sections['make']['index']];  echo '</option>';  endfor; endif;  echo '</select>';  endif;  echo ' ';  echo $this->_tpl_vars['Ramount'];  echo ' <input type="text" name="amount" size="5" value="0"/> ';  echo $this->_tpl_vars['Tenergy3'];  echo '<input type="hidden" value="';  echo $this->_tpl_vars['Make'];  echo '" name="make" /></form>';  endif;  echo '';  else:  echo '<table><tr><td><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tenergy'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tenergy2'];  echo '</u></b></td></tr><tr><td>';  echo $this->_tpl_vars['Rname'];  echo '</td><td align="center">';  echo $this->_tpl_vars['Renergy'];  echo '</td><td align="center">';  echo $this->_tpl_vars['Renergy2'];  echo '</td></tr></table><br /><br /><form method="post" action="jeweller.php?step=make2&amp;action=continue"><input type="submit" value="';  echo $this->_tpl_vars['Youcontinue'];  echo '" /> <b>';  echo $this->_tpl_vars['Rname'];  echo '</b> ';  echo $this->_tpl_vars['Ramount'];  echo ' <input type="text" name="amount" size="5" value="0"/> ';  echo $this->_tpl_vars['Tenergy3'];  echo '<input type="hidden" value="';  echo $this->_tpl_vars['Maked'];  echo '" name="make" /></form>';  endif;  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'make3'):  echo '';  echo $this->_tpl_vars['Ringinfo'];  echo '<br /><br />';  if ($this->_tpl_vars['Maked'] == ""):  echo '<table align="center"><tr><td><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tlevel'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tmeteor'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tenergy'];  echo '</u></b></td></tr>';  unset($this->_sections['rings2']);
$this->_sections['rings2']['name'] = 'rings2';
$this->_sections['rings2']['loop'] = is_array($_loop=$this->_tpl_vars['Rname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rings2']['show'] = true;
$this->_sections['rings2']['max'] = $this->_sections['rings2']['loop'];
$this->_sections['rings2']['step'] = 1;
$this->_sections['rings2']['start'] = $this->_sections['rings2']['step'] > 0 ? 0 : $this->_sections['rings2']['loop']-1;
if ($this->_sections['rings2']['show']) {
    $this->_sections['rings2']['total'] = $this->_sections['rings2']['loop'];
    if ($this->_sections['rings2']['total'] == 0)
        $this->_sections['rings2']['show'] = false;
} else
    $this->_sections['rings2']['total'] = 0;
if ($this->_sections['rings2']['show']):

            for ($this->_sections['rings2']['index'] = $this->_sections['rings2']['start'], $this->_sections['rings2']['iteration'] = 1;
                 $this->_sections['rings2']['iteration'] <= $this->_sections['rings2']['total'];
                 $this->_sections['rings2']['index'] += $this->_sections['rings2']['step'], $this->_sections['rings2']['iteration']++):
$this->_sections['rings2']['rownum'] = $this->_sections['rings2']['iteration'];
$this->_sections['rings2']['index_prev'] = $this->_sections['rings2']['index'] - $this->_sections['rings2']['step'];
$this->_sections['rings2']['index_next'] = $this->_sections['rings2']['index'] + $this->_sections['rings2']['step'];
$this->_sections['rings2']['first']      = ($this->_sections['rings2']['iteration'] == 1);
$this->_sections['rings2']['last']       = ($this->_sections['rings2']['iteration'] == $this->_sections['rings2']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Rname'][$this->_sections['rings2']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Rlevel'][$this->_sections['rings2']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Rmeteor'][$this->_sections['rings2']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Renergy'][$this->_sections['rings2']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table><br /><br /><form method="post" action="jeweller.php?step=make3&amp;action=create"><input type="submit" value="';  echo $this->_tpl_vars['Amake'];  echo '" /> <select name="rings">';  unset($this->_sections['rings3']);
$this->_sections['rings3']['name'] = 'rings3';
$this->_sections['rings3']['loop'] = is_array($_loop=$this->_tpl_vars['Rid2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rings3']['show'] = true;
$this->_sections['rings3']['max'] = $this->_sections['rings3']['loop'];
$this->_sections['rings3']['step'] = 1;
$this->_sections['rings3']['start'] = $this->_sections['rings3']['step'] > 0 ? 0 : $this->_sections['rings3']['loop']-1;
if ($this->_sections['rings3']['show']) {
    $this->_sections['rings3']['total'] = $this->_sections['rings3']['loop'];
    if ($this->_sections['rings3']['total'] == 0)
        $this->_sections['rings3']['show'] = false;
} else
    $this->_sections['rings3']['total'] = 0;
if ($this->_sections['rings3']['show']):

            for ($this->_sections['rings3']['index'] = $this->_sections['rings3']['start'], $this->_sections['rings3']['iteration'] = 1;
                 $this->_sections['rings3']['iteration'] <= $this->_sections['rings3']['total'];
                 $this->_sections['rings3']['index'] += $this->_sections['rings3']['step'], $this->_sections['rings3']['iteration']++):
$this->_sections['rings3']['rownum'] = $this->_sections['rings3']['iteration'];
$this->_sections['rings3']['index_prev'] = $this->_sections['rings3']['index'] - $this->_sections['rings3']['step'];
$this->_sections['rings3']['index_next'] = $this->_sections['rings3']['index'] + $this->_sections['rings3']['step'];
$this->_sections['rings3']['first']      = ($this->_sections['rings3']['iteration'] == 1);
$this->_sections['rings3']['last']       = ($this->_sections['rings3']['iteration'] == $this->_sections['rings3']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Rid2'][$this->_sections['rings3']['index']];  echo '">';  echo $this->_tpl_vars['Rname2'][$this->_sections['rings3']['index']];  echo ' +';  echo $this->_tpl_vars['Rpower'][$this->_sections['rings3']['index']];  echo ' ';  echo $this->_tpl_vars['Ramount3'];  echo ' ';  echo $this->_tpl_vars['Ramount2'][$this->_sections['rings3']['index']];  echo '</option>';  endfor; endif;  echo '</select> ';  echo $this->_tpl_vars['Onspecial'];  echo ' ';  echo $this->_tpl_vars['Ramount4'];  echo ' <input type="text" name="amount" value="0" size="5" /> ';  echo $this->_tpl_vars['Renergy2'];  echo '</form>';  else:  echo '<table><tr><td><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tenergy'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Tenergy2'];  echo '</u></b></td></tr><tr><td>';  echo $this->_tpl_vars['Rname'];  echo '</td><td align="center">';  echo $this->_tpl_vars['Renergy'];  echo '</td><td align="center">';  echo $this->_tpl_vars['Renergy2'];  echo '</td></tr></table><br /><br /><form method="post" action="jeweller.php?step=make3&amp;action=continue"><input type="submit" value="';  echo $this->_tpl_vars['Youcontinue'];  echo '" /> <b>';  echo $this->_tpl_vars['Rname'];  echo '</b> ';  echo $this->_tpl_vars['Ramount'];  echo ' <input type="text" name="amount" size="5" value="0"/> ';  echo $this->_tpl_vars['Tenergy3'];  echo '<input type="hidden" value="';  echo $this->_tpl_vars['Maked'];  echo '" name="make" /></form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'astral'):  echo '';  if (isset ( $this->_tpl_vars['Astralinfo'] )):  echo '<p>';  echo $this->_tpl_vars['Astralinfo'];  echo '</p>';  endif;  echo '';  if (isset ( $this->_tpl_vars['Available'] )):  echo '';  unset($this->_sections['astral']);
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
 echo '<br /><b>';  echo $this->_tpl_vars['Resourcename'][$this->_sections['astral2']['index']];  echo ':</b> ';  echo $this->_tpl_vars['Resourceamount'][$this->_sections['astral']['index']][$this->_sections['astral2']['index']];  echo '';  endfor; endif;  echo '<form method="post" action="jeweller.php?step=astral&amp;component=';  echo $this->_tpl_vars['Compnumber'][$this->_sections['astral']['index']];  echo '"><input type="submit" value="';  echo $this->_tpl_vars['Abuild'];  echo '" /></form></p>';  endfor; endif;  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] != ''):  echo '<p>';  echo $this->_tpl_vars['Message'];  echo '</p><p><a href="jeweller.php">';  echo $this->_tpl_vars['Aback'];  echo '</a></p>';  endif;  echo ''; ?>

</br></br>