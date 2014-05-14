<?php /* Smarty version 2.6.16, created on 2012-10-06 12:22:48
         compiled from msklep.tpl */ ?>
<center><IMG SRC="images/locations/aptekamiejska.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['Buy'] == ""):  echo '<br />Już od przekroczenia progów tego przybytku, zakręciło ci się w nosie od zapachów ziół. Drewniane regały i półki uginały się pod naporem szczelnie zakorkowanych buteleczek i słoików.  Girlandy suszonych składników wisiały nad twoją głową, a także na hakach, przy drzwiach prowadzących na zaplecze. Na lśniącej ladzie widniały stojaki z butelkami, stara aparatura alchemiczna i moździerz z tłuczkiem.  Za nią stał sędziwy człowiek ze śnieżnobiałą brodą, sięgającą piersi. Odziany w obszerną szatę, taką jaką zwykle nosili mędrcy czy uczeni. W dłoni trzymał fajkę i przyglądał ci się uważnie.<br>- W czym mogę służyć? – Obłoczki dymu z fajkowego ziela unosiły się w powietrzu, płynąc wprost na ciebie.  – Dysponujemy lekarstwami na wszelakie choroby.  – Mówiąc to pokazywał kolejne buteleczki na ladzie, tłumacząc jaki efekt wywołują. – Gdyby jednak interesowały cię… Specyfiki w walce pomagające,  zapraszam na zaplecze. – Wskazał dłonią drzwi za nim, odchylając tym samym klapę lady na bok.<br /><br /><table width="100%"><tr><td width="45%"><b><u>';  echo $this->_tpl_vars['Nname'];  echo '</u></b></td><td width="25%"><b><u>';  echo $this->_tpl_vars['Nefect'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Ncost'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Namount'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Poption'];  echo '</u></b></td></tr>';  unset($this->_sections['msklep']);
$this->_sections['msklep']['name'] = 'msklep';
$this->_sections['msklep']['loop'] = is_array($_loop=$this->_tpl_vars['Pid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['msklep']['show'] = true;
$this->_sections['msklep']['max'] = $this->_sections['msklep']['loop'];
$this->_sections['msklep']['step'] = 1;
$this->_sections['msklep']['start'] = $this->_sections['msklep']['step'] > 0 ? 0 : $this->_sections['msklep']['loop']-1;
if ($this->_sections['msklep']['show']) {
    $this->_sections['msklep']['total'] = $this->_sections['msklep']['loop'];
    if ($this->_sections['msklep']['total'] == 0)
        $this->_sections['msklep']['show'] = false;
} else
    $this->_sections['msklep']['total'] = 0;
if ($this->_sections['msklep']['show']):

            for ($this->_sections['msklep']['index'] = $this->_sections['msklep']['start'], $this->_sections['msklep']['iteration'] = 1;
                 $this->_sections['msklep']['iteration'] <= $this->_sections['msklep']['total'];
                 $this->_sections['msklep']['index'] += $this->_sections['msklep']['step'], $this->_sections['msklep']['iteration']++):
$this->_sections['msklep']['rownum'] = $this->_sections['msklep']['iteration'];
$this->_sections['msklep']['index_prev'] = $this->_sections['msklep']['index'] - $this->_sections['msklep']['step'];
$this->_sections['msklep']['index_next'] = $this->_sections['msklep']['index'] + $this->_sections['msklep']['step'];
$this->_sections['msklep']['first']      = ($this->_sections['msklep']['iteration'] == 1);
$this->_sections['msklep']['last']       = ($this->_sections['msklep']['iteration'] == $this->_sections['msklep']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Pname'][$this->_sections['msklep']['index']];  echo '(';  echo $this->_tpl_vars['Npower'];  echo ':';  echo $this->_tpl_vars['Ppower'][$this->_sections['msklep']['index']];  echo ')</td><td>';  echo $this->_tpl_vars['Pefect'][$this->_sections['msklep']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Pcost'][$this->_sections['msklep']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Pamount'][$this->_sections['msklep']['index']];  echo '</td><td>- <a href="msklep.php?buy=';  echo $this->_tpl_vars['Pid'][$this->_sections['msklep']['index']];  echo '">';  echo $this->_tpl_vars['Abuy'];  echo '</a></td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['Buy'] != ""):  echo '<br /><form method="post" action="msklep.php?buy=';  echo $this->_tpl_vars['Pid'];  echo '&amp;step=buy"><input type="submit" value="';  echo $this->_tpl_vars['Abuy'];  echo '" /> <input type="text" name="amount" value="1" size="5" /> ';  echo $this->_tpl_vars['Pamount'];  echo ' ';  echo $this->_tpl_vars['Name'];  echo '</form>';  endif;  echo ''; ?>

</br>