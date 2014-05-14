<?php /* Smarty version 2.6.16, created on 2013-05-11 16:14:14
         compiled from lumbermill.tpl */ ?>
<center><IMG SRC="images/locations/tartak.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['Mill'] == ''):  echo '<p>Koło murów miasta dostrzegasz drewniany płot, za nim sterty drewna wszelkiej maści i braw. Wchodzisz do środka i dostrzegasz pracowników tnących sosnowe bale na deski  i  niosących je do pracowni stolarskich urządzonych w wysokich krytych strzechą stodołach. Słychać tu piły i stukanie dłut.  Mężczyźni uwijają się przerzucając w słońcu długie deski, kobiety mierzą je i spisują wartość drewna. <br>W małej kanciapie jest biuro – tam możesz wykupić sobie uprawnienia do wycinania lasu, jednak na każdy rodzaj drewna jest osobne uprawnienia. Kierujesz się do tej kanciapy z sakiewką, a stary mocno opalony człowiek wydaje ci uprawnienia. <br>Masz już drewno? Siwowłosa kobieta dysponuje planami przedmiotów, kupując je wiesz już jak stworzyć łuki, strzały i inne drewniane przedmioty. <br>Wchodząc do pracowni stolarskiej wynajętej specjalnie tobie, otwierasz drzwi. Widzisz stoły   a na nich poukładane piły, młotki i dłuta. Rozłożone są też papiery ścierne i pilniki którymi możesz swoje dzieła doczyścić… Miłej pracy…</p><br><ul><li><a href="lumbermill.php?mill=plany">';  echo $this->_tpl_vars['Aplans'];  echo '</a></li><li><a href="lumbermill.php?mill=mill">';  echo $this->_tpl_vars['Amill'];  echo '</a></li><li><a href="lumbermill.php?mill=licenses">';  echo $this->_tpl_vars['Alicenses'];  echo '</a></li><li><a href="lumbermill.php?mill=astral">';  echo $this->_tpl_vars['Aastral'];  echo '</a></li></ul>';  endif;  echo '';  if ($this->_tpl_vars['Mill'] == 'licenses'):  echo '';  if ($this->_tpl_vars['Step'] == 'buy'):  echo '';  echo $this->_tpl_vars['Message'];  echo '';  else:  echo '<a href="lumbermill.php?mill=licenses&amp;step=buy">';  echo $this->_tpl_vars['Alicense'];  echo '</a>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Mill'] == 'plany'):  echo '';  if ($this->_tpl_vars['Buy'] == ''):  echo '';  echo $this->_tpl_vars['Hereis'];  echo ':<table><tr><th width="50%"><u>';  echo $this->_tpl_vars['Iname'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Icost'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Ilevel'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Ioption'];  echo '</u></th></tr>';  unset($this->_sections['mill']);
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
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['mill']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Cost'][$this->_sections['mill']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Level'][$this->_sections['mill']['index']];  echo '</td><td>- <a href="lumbermill.php?mill=plany&amp;buy=';  echo $this->_tpl_vars['Planid'][$this->_sections['mill']['index']];  echo '">';  echo $this->_tpl_vars['Abuy'];  echo '</a></td></tr>';  endfor; endif;  echo '</table>';  else:  echo '';  echo $this->_tpl_vars['Youpay'];  echo ' <b>';  echo $this->_tpl_vars['Cost1'];  echo '</b> ';  echo $this->_tpl_vars['Andbuy'];  echo ': <b>';  echo $this->_tpl_vars['Name1'];  echo '</b>.';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Mill'] == 'mill'):  echo '';  if ($this->_tpl_vars['Make'] == '' && $this->_tpl_vars['Continue'] == ''):  echo '';  echo $this->_tpl_vars['Hereis'];  echo '';  if (isset ( $this->_tpl_vars['Info2'] )):  echo '<p>';  echo $this->_tpl_vars['Info2'];  echo ':</p><p>';  echo $this->_tpl_vars['Iname'];  echo ': <a href="lumbermill.php?mill=mill&amp;ko=';  echo $this->_tpl_vars['ContinueId'];  echo '">';  echo $this->_tpl_vars['ContinueName'];  echo '</a><br />';  echo $this->_tpl_vars['Ipercent'];  echo ': ';  echo $this->_tpl_vars['ContinuePercent'];  echo '<br />';  echo $this->_tpl_vars['Ienergy'];  echo ': ';  echo $this->_tpl_vars['ContinueNeed'];  echo '</p>';  endif;  echo '<table><tr><th><u>';  echo $this->_tpl_vars['Iname'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Ilevel'];  echo '</u></th><th><u>';  echo $this->_tpl_vars['Icost'];  echo '</u></th></tr>';  unset($this->_sections['mill']);
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
 echo '<tr><td><a href="lumbermill.php?mill=mill&amp;dalej=';  echo $this->_tpl_vars['Planid'][$this->_sections['mill']['index']];  echo '">';  echo $this->_tpl_vars['Name'][$this->_sections['mill']['index']];  echo '</a></td><td>';  echo $this->_tpl_vars['Level'][$this->_sections['mill']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Cost'][$this->_sections['mill']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table>';  if ($this->_tpl_vars['Cont'] != ''):  echo '<form method="post" action="lumbermill.php?mill=mill&amp;konty=';  echo $this->_tpl_vars['Id'];  echo '">';  echo $this->_tpl_vars['Assignen'];  echo ' <b>';  echo $this->_tpl_vars['Name'];  echo '</b> <input type="text" name="razy" size="5" /> ';  echo $this->_tpl_vars['Menergy'];  echo '<input type="submit" value="';  echo $this->_tpl_vars['Amake'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['Next'] != ''):  echo '<form method="post" action="lumbermill.php?mill=mill&amp;rob=';  echo $this->_tpl_vars['Id'];  echo '">';  echo $this->_tpl_vars['Assignen'];  echo ' <b>';  echo $this->_tpl_vars['Name'];  echo '</b> <input type="text" name="razy" size="5" /> ';  echo $this->_tpl_vars['Menergy'];  echo '<input type=submit value="';  echo $this->_tpl_vars['Amake'];  echo '" />';  if ($this->_tpl_vars['Type'] == 'B' || $this->_tpl_vars['Type'] == 'W'):  echo '<select name="lumber"><option value="H">';  echo $this->_tpl_vars['Lhazel'];  echo '</option><option value="Y">';  echo $this->_tpl_vars['Lyew'];  echo '</option><option value="E">';  echo $this->_tpl_vars['Lelm'];  echo '</option><option value="A">';  echo $this->_tpl_vars['Lharder'];  echo '</option><option value="C">';  echo $this->_tpl_vars['Lcomposite'];  echo '</option></select>';  endif;  echo '</form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Continue'] != '' || $this->_tpl_vars['Make'] != ''):  echo '';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Mill'] == 'astral'):  echo '';  if (isset ( $this->_tpl_vars['Astralinfo'] )):  echo '<p>';  echo $this->_tpl_vars['Astralinfo'];  echo '</p>';  endif;  echo '<p>';  echo $this->_tpl_vars['Message'];  echo '</p>';  if (isset ( $this->_tpl_vars['Available'] )):  echo '';  unset($this->_sections['astral']);
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
 echo '<br /><b>';  echo $this->_tpl_vars['Resourcename'][$this->_sections['astral2']['index']];  echo ':</b> ';  echo $this->_tpl_vars['Resourceamount'][$this->_sections['astral']['index']][$this->_sections['astral2']['index']];  echo '';  endfor; endif;  echo '<form method="post" action="lumbermill.php?mill=astral&amp;component=';  echo $this->_tpl_vars['Compnumber'][$this->_sections['astral']['index']];  echo '"><input type="submit" value="';  echo $this->_tpl_vars['Abuild'];  echo '" /></form></p>';  endfor; endif;  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Mill'] != ''):  echo '<p><a href="lumbermill.php">(';  echo $this->_tpl_vars['Aback'];  echo ')</a></p>';  endif;  echo ''; ?>
</br>