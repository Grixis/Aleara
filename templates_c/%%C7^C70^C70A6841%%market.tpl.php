<?php /* Smarty version 2.6.16, created on 2012-10-06 00:43:01
         compiled from market.tpl */ ?>
<center><IMG SRC="images/locations/rynekhandlowy.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo 'Rynek. Najważniejszy punkt każdego miasta mieszczący się na ogromnym placu z fontanną i studnią. Kolorowe baldachimy rozwieszone nad stoiskami  chroniły kupców i ich towary przed słońcem. Idąc wzdłuż ścieżki prowadzącej między przekupkami, wyłożonej kamiennym brukiem, rozglądasz się uważnie.  Twoich nozdrzy dosięga zapach świeżego pieczywa, lśniąca skórka jabłek błyszczy w słońcu, kusząc by zakupić chociaż sztukę. Mijasz targowisko z żywnością, poganiany zapachem ryb, niwelowanym w tym momencie girlandami suszonych jak i dopiero co zerwanych ziół.  Hałas panujący na tym terenie był nie do zniesienia. Sprzedawcy przekrzykujący się wzajemnie, wychwalali swe towary, inni zaś dobijali interesów, głośno się targując. Spotkać tutaj można przedstawicieli wielu ras, którzy błądzili tak samo jak ty w poszukiwaniu pożądanych towarów i okazji. Niczego nie brakowało, a wybór asortymentu był szeroki. Poczynając na żywności i minerałach, kończąc na broniach i odzieniu. Nogi skierowały cię w stronę fontanny gdzie stała trubadurka opiewająca bohaterów w swych pieśniach.  Ponownie zagłębiasz się w targowisko, tym razem precyzyjnie określając stoisko w którym chcesz dokonać zakupu.';  if ($this->_tpl_vars['View'] == ""):  echo '<br />';  if ($this->_tpl_vars['Location'] == 'Altara'):  echo '';  echo $this->_tpl_vars['Marketinfo'];  echo '<br /><br />';  endif;  echo '<a href="market.php?view=myoferts">';  echo $this->_tpl_vars['Amyoferts'];  echo '</a><br /><br />';  unset($this->_sections['market']);
$this->_sections['market']['name'] = 'market';
$this->_sections['market']['loop'] = is_array($_loop=$this->_tpl_vars['Markets']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['market']['show'] = true;
$this->_sections['market']['max'] = $this->_sections['market']['loop'];
$this->_sections['market']['step'] = 1;
$this->_sections['market']['start'] = $this->_sections['market']['step'] > 0 ? 0 : $this->_sections['market']['loop']-1;
if ($this->_sections['market']['show']) {
    $this->_sections['market']['total'] = $this->_sections['market']['loop'];
    if ($this->_sections['market']['total'] == 0)
        $this->_sections['market']['show'] = false;
} else
    $this->_sections['market']['total'] = 0;
if ($this->_sections['market']['show']):

            for ($this->_sections['market']['index'] = $this->_sections['market']['start'], $this->_sections['market']['iteration'] = 1;
                 $this->_sections['market']['iteration'] <= $this->_sections['market']['total'];
                 $this->_sections['market']['index'] += $this->_sections['market']['step'], $this->_sections['market']['iteration']++):
$this->_sections['market']['rownum'] = $this->_sections['market']['iteration'];
$this->_sections['market']['index_prev'] = $this->_sections['market']['index'] - $this->_sections['market']['step'];
$this->_sections['market']['index_next'] = $this->_sections['market']['index'] + $this->_sections['market']['step'];
$this->_sections['market']['first']      = ($this->_sections['market']['iteration'] == 1);
$this->_sections['market']['last']       = ($this->_sections['market']['iteration'] == $this->_sections['market']['total']);
 echo '';  echo $this->_tpl_vars['Markets'][$this->_sections['market']['index']];  echo '<br /><ul><li><a href="';  echo $this->_tpl_vars['Filesname'][$this->_sections['market']['index']];  echo '.php?view=market&amp;limit=0&amp;lista=id">';  echo $this->_tpl_vars['Ashow'];  echo '</a></li><li><a href="';  echo $this->_tpl_vars['Filesname'][$this->_sections['market']['index']];  echo '.php?view=szukaj">';  echo $this->_tpl_vars['Asearch'];  echo '</a></li><li><a href="';  echo $this->_tpl_vars['Filesname'][$this->_sections['market']['index']];  echo '.php?view=add">';  echo $this->_tpl_vars['Aadd'];  echo '</a></li><li><a href="';  echo $this->_tpl_vars['Filesname'][$this->_sections['market']['index']];  echo '.php?view=del">';  echo $this->_tpl_vars['Adelete'];  echo '</a></li>';  if ($this->_sections['market']['index'] != '1'):  echo '<li><a href="';  echo $this->_tpl_vars['Filesname'][$this->_sections['market']['index']];  echo '.php?view=all">';  echo $this->_tpl_vars['Alist'];  echo '</a></li>';  endif;  echo '';  if ($this->_sections['market']['index'] == '1'):  echo '<li><a href="';  echo $this->_tpl_vars['Filesname'][$this->_sections['market']['index']];  echo '.php?view=all&amp;limit=0">';  echo $this->_tpl_vars['Alist'];  echo '</a></li>';  endif;  echo '</ul>';  endfor; endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'myoferts'):  echo '<br />';  if ($this->_tpl_vars['Type'] == ""):  echo '';  unset($this->_sections['myoferts']);
$this->_sections['myoferts']['name'] = 'myoferts';
$this->_sections['myoferts']['loop'] = is_array($_loop=$this->_tpl_vars['Markets']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['myoferts']['show'] = true;
$this->_sections['myoferts']['max'] = $this->_sections['myoferts']['loop'];
$this->_sections['myoferts']['step'] = 1;
$this->_sections['myoferts']['start'] = $this->_sections['myoferts']['step'] > 0 ? 0 : $this->_sections['myoferts']['loop']-1;
if ($this->_sections['myoferts']['show']) {
    $this->_sections['myoferts']['total'] = $this->_sections['myoferts']['loop'];
    if ($this->_sections['myoferts']['total'] == 0)
        $this->_sections['myoferts']['show'] = false;
} else
    $this->_sections['myoferts']['total'] = 0;
if ($this->_sections['myoferts']['show']):

            for ($this->_sections['myoferts']['index'] = $this->_sections['myoferts']['start'], $this->_sections['myoferts']['iteration'] = 1;
                 $this->_sections['myoferts']['iteration'] <= $this->_sections['myoferts']['total'];
                 $this->_sections['myoferts']['index'] += $this->_sections['myoferts']['step'], $this->_sections['myoferts']['iteration']++):
$this->_sections['myoferts']['rownum'] = $this->_sections['myoferts']['iteration'];
$this->_sections['myoferts']['index_prev'] = $this->_sections['myoferts']['index'] - $this->_sections['myoferts']['step'];
$this->_sections['myoferts']['index_next'] = $this->_sections['myoferts']['index'] + $this->_sections['myoferts']['step'];
$this->_sections['myoferts']['first']      = ($this->_sections['myoferts']['iteration'] == 1);
$this->_sections['myoferts']['last']       = ($this->_sections['myoferts']['iteration'] == $this->_sections['myoferts']['total']);
 echo '<a href="market.php?view=myoferts&amp;type=';  echo $this->_tpl_vars['Filesname'][$this->_sections['myoferts']['index']];  echo '">';  echo $this->_tpl_vars['Markets'][$this->_sections['myoferts']['index']];  echo ' ';  echo $this->_tpl_vars['Oamount'][$this->_sections['myoferts']['index']];  echo '</a><br />';  endfor; endif;  echo '<br /><a href="market.php?view=myoferts&amp;deleteall=no">';  echo $this->_tpl_vars['Deleteall'];  echo '</a><br />';  if ($this->_tpl_vars['Actiondelete'] == 'no'):  echo '<form method="post" action="market.php?view=myoferts&amp;deleteall=yes"><br />';  echo $this->_tpl_vars['Youwant2'];  echo '<br /><input type="submit" value="';  echo $this->_tpl_vars['Ayes'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['Actiondelete'] == 'yes'):  echo '<br />';  echo $this->_tpl_vars['Message'];  echo '<br />';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Type'] != ""):  echo '';  if ($this->_tpl_vars['Change'] == "" && $this->_tpl_vars['Delete'] == "" && $this->_tpl_vars['Add'] == ""):  echo '<table align="center" width="100%"><tr>';  unset($this->_sections['thead']);
$this->_sections['thead']['name'] = 'thead';
$this->_sections['thead']['loop'] = is_array($_loop=$this->_tpl_vars['Ttable']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['thead']['show'] = true;
$this->_sections['thead']['max'] = $this->_sections['thead']['loop'];
$this->_sections['thead']['step'] = 1;
$this->_sections['thead']['start'] = $this->_sections['thead']['step'] > 0 ? 0 : $this->_sections['thead']['loop']-1;
if ($this->_sections['thead']['show']) {
    $this->_sections['thead']['total'] = $this->_sections['thead']['loop'];
    if ($this->_sections['thead']['total'] == 0)
        $this->_sections['thead']['show'] = false;
} else
    $this->_sections['thead']['total'] = 0;
if ($this->_sections['thead']['show']):

            for ($this->_sections['thead']['index'] = $this->_sections['thead']['start'], $this->_sections['thead']['iteration'] = 1;
                 $this->_sections['thead']['iteration'] <= $this->_sections['thead']['total'];
                 $this->_sections['thead']['index'] += $this->_sections['thead']['step'], $this->_sections['thead']['iteration']++):
$this->_sections['thead']['rownum'] = $this->_sections['thead']['iteration'];
$this->_sections['thead']['index_prev'] = $this->_sections['thead']['index'] - $this->_sections['thead']['step'];
$this->_sections['thead']['index_next'] = $this->_sections['thead']['index'] + $this->_sections['thead']['step'];
$this->_sections['thead']['first']      = ($this->_sections['thead']['iteration'] == 1);
$this->_sections['thead']['last']       = ($this->_sections['thead']['iteration'] == $this->_sections['thead']['total']);
 echo '<td align="center"><b><u>';  echo $this->_tpl_vars['Ttable'][$this->_sections['thead']['index']];  echo '</u></b></td>';  endfor; endif;  echo '</tr>';  unset($this->_sections['oferts']);
$this->_sections['oferts']['name'] = 'oferts';
$this->_sections['oferts']['loop'] = is_array($_loop=$this->_tpl_vars['Tvalues']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['oferts']['show'] = true;
$this->_sections['oferts']['max'] = $this->_sections['oferts']['loop'];
$this->_sections['oferts']['step'] = 1;
$this->_sections['oferts']['start'] = $this->_sections['oferts']['step'] > 0 ? 0 : $this->_sections['oferts']['loop']-1;
if ($this->_sections['oferts']['show']) {
    $this->_sections['oferts']['total'] = $this->_sections['oferts']['loop'];
    if ($this->_sections['oferts']['total'] == 0)
        $this->_sections['oferts']['show'] = false;
} else
    $this->_sections['oferts']['total'] = 0;
if ($this->_sections['oferts']['show']):

            for ($this->_sections['oferts']['index'] = $this->_sections['oferts']['start'], $this->_sections['oferts']['iteration'] = 1;
                 $this->_sections['oferts']['iteration'] <= $this->_sections['oferts']['total'];
                 $this->_sections['oferts']['index'] += $this->_sections['oferts']['step'], $this->_sections['oferts']['iteration']++):
$this->_sections['oferts']['rownum'] = $this->_sections['oferts']['iteration'];
$this->_sections['oferts']['index_prev'] = $this->_sections['oferts']['index'] - $this->_sections['oferts']['step'];
$this->_sections['oferts']['index_next'] = $this->_sections['oferts']['index'] + $this->_sections['oferts']['step'];
$this->_sections['oferts']['first']      = ($this->_sections['oferts']['iteration'] == 1);
$this->_sections['oferts']['last']       = ($this->_sections['oferts']['iteration'] == $this->_sections['oferts']['total']);
 echo '<tr>';  unset($this->_sections['ofert']);
$this->_sections['ofert']['name'] = 'ofert';
$this->_sections['ofert']['loop'] = is_array($_loop=$this->_tpl_vars['Tvalues'][$this->_sections['oferts']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ofert']['show'] = true;
$this->_sections['ofert']['max'] = $this->_sections['ofert']['loop'];
$this->_sections['ofert']['step'] = 1;
$this->_sections['ofert']['start'] = $this->_sections['ofert']['step'] > 0 ? 0 : $this->_sections['ofert']['loop']-1;
if ($this->_sections['ofert']['show']) {
    $this->_sections['ofert']['total'] = $this->_sections['ofert']['loop'];
    if ($this->_sections['ofert']['total'] == 0)
        $this->_sections['ofert']['show'] = false;
} else
    $this->_sections['ofert']['total'] = 0;
if ($this->_sections['ofert']['show']):

            for ($this->_sections['ofert']['index'] = $this->_sections['ofert']['start'], $this->_sections['ofert']['iteration'] = 1;
                 $this->_sections['ofert']['iteration'] <= $this->_sections['ofert']['total'];
                 $this->_sections['ofert']['index'] += $this->_sections['ofert']['step'], $this->_sections['ofert']['iteration']++):
$this->_sections['ofert']['rownum'] = $this->_sections['ofert']['iteration'];
$this->_sections['ofert']['index_prev'] = $this->_sections['ofert']['index'] - $this->_sections['ofert']['step'];
$this->_sections['ofert']['index_next'] = $this->_sections['ofert']['index'] + $this->_sections['ofert']['step'];
$this->_sections['ofert']['first']      = ($this->_sections['ofert']['iteration'] == 1);
$this->_sections['ofert']['last']       = ($this->_sections['ofert']['iteration'] == $this->_sections['ofert']['total']);
 echo '<td align="center">';  echo $this->_tpl_vars['Tvalues'][$this->_sections['oferts']['index']][$this->_sections['ofert']['index']];  echo '</td>';  endfor; endif;  echo '<td align="center"><a href="market.php?view=myoferts&amp;type=';  echo $this->_tpl_vars['Type'];  echo '&amp;delete=';  echo $this->_tpl_vars['Tid'][$this->_sections['oferts']['index']];  echo '">';  echo $this->_tpl_vars['Adelete'];  echo '</a><br /><a href="market.php?view=myoferts&amp;type=';  echo $this->_tpl_vars['Type'];  echo '&amp;change=';  echo $this->_tpl_vars['Tid'][$this->_sections['oferts']['index']];  echo '">';  echo $this->_tpl_vars['Achange'];  echo '</a><br /><a href="market.php?view=myoferts&amp;type=';  echo $this->_tpl_vars['Type'];  echo '&amp;add=';  echo $this->_tpl_vars['Tid'][$this->_sections['oferts']['index']];  echo '">';  echo $this->_tpl_vars['Aadd'];  echo '</a></td></tr>';  endfor; endif;  echo '</table>';  else:  echo '';  echo $this->_tpl_vars['Message'];  echo '<br /><br />';  endif;  echo '';  if ($this->_tpl_vars['Delete'] != "" && $this->_tpl_vars['Message'] == ""):  echo '';  echo $this->_tpl_vars['Youwant'];  echo '';  echo $this->_tpl_vars['Oname'];  echo '?<form method="post" action="market.php?view=myoferts&amp;type=';  echo $this->_tpl_vars['Type'];  echo '&amp;delete=';  echo $this->_tpl_vars['Delete'];  echo '&amp;confirm=yes"><input type="submit" value="';  echo $this->_tpl_vars['Ayes'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['Add'] != "" && $this->_tpl_vars['Message'] == ""):  echo '<form method="post" action="market.php?view=myoferts&amp;type=';  echo $this->_tpl_vars['Type'];  echo '&amp;add=';  echo $this->_tpl_vars['Add'];  echo '&amp;confirm=yes"><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /> ';  echo $this->_tpl_vars['Toofert'];  echo '';  echo $this->_tpl_vars['Oname'];  echo ' <input type="text" name="amount" value="0" size="5" />';  echo $this->_tpl_vars['Tamount2'];  echo '.<br /></form>';  endif;  echo '';  if ($this->_tpl_vars['Change'] != "" && $this->_tpl_vars['Message'] == ""):  echo '<form method="post" action="market.php?view=myoferts&amp;type=';  echo $this->_tpl_vars['Type'];  echo '&amp;change=';  echo $this->_tpl_vars['Change'];  echo '&amp;confirm=yes"><input type="submit" value="';  echo $this->_tpl_vars['Achange'];  echo '" /> ';  echo $this->_tpl_vars['Tofert'];  echo '';  echo $this->_tpl_vars['Oname'];  echo ' ';  echo $this->_tpl_vars['Ona'];  echo ' <input type="text" name="amount" value="0" size="5" /> ';  echo $this->_tpl_vars['Goldcoins'];  echo '</form>';  endif;  echo '';  endif;  echo '<br /><br /><a href="market.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  endif;  echo ''; ?>
</br>