<?php /* Smarty version 2.6.16, created on 2012-10-06 15:01:16
         compiled from jewellershop.tpl */ ?>
<center><IMG SRC="images/locations/sklepjubilerski.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo 'Przechodząc rynkiem zatrzymuje Cię pewna elfka. Prosi Cię, abyś zajrzał do jej sklepiku. Nie mając bladego pojęcia o co chodzi udajesz się za kobietą. Po chwili zorientowałeś się, iż owa elfka wchodzi do sklepiku jubilerskiego. Wchodzisz za nią i uważnie się rozglądasz. Twoją uwagę już po samym wejściu zwróciło bogato zdobione wnętrze. Pod sufitem wisiały kryształowe lampy, na ladzie stały kryształowe świeczniki. W pomieszczeniu było ciemno, tylko świece rozświetlały pomieszczenie. Dekoracje i światło świec tworzyło cudowny klimat. Zachwycony sklepikiem nie zauważyłeś nawet, że elfka coś mówi do Ciebie. Dopiero gdy poklepała Cię po ramieniu i zapytała – Hej, wszystko w porządku? – Dotarło do Ciebie, że nie śnisz. Kobieta podeszła z Toba do lady i zaczęła pokazywać Ci kolekcję pierścieni wystawionych na sprzedaż… <br /><br /><table align="center" width="75%"><tr><td><b>';  echo $this->_tpl_vars['Tname'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Tbonus'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Tamount'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Tcost'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Taction'];  echo '</b></td></tr>';  unset($this->_sections['jeweller']);
$this->_sections['jeweller']['name'] = 'jeweller';
$this->_sections['jeweller']['loop'] = is_array($_loop=$this->_tpl_vars['Rid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['jeweller']['show'] = true;
$this->_sections['jeweller']['max'] = $this->_sections['jeweller']['loop'];
$this->_sections['jeweller']['step'] = 1;
$this->_sections['jeweller']['start'] = $this->_sections['jeweller']['step'] > 0 ? 0 : $this->_sections['jeweller']['loop']-1;
if ($this->_sections['jeweller']['show']) {
    $this->_sections['jeweller']['total'] = $this->_sections['jeweller']['loop'];
    if ($this->_sections['jeweller']['total'] == 0)
        $this->_sections['jeweller']['show'] = false;
} else
    $this->_sections['jeweller']['total'] = 0;
if ($this->_sections['jeweller']['show']):

            for ($this->_sections['jeweller']['index'] = $this->_sections['jeweller']['start'], $this->_sections['jeweller']['iteration'] = 1;
                 $this->_sections['jeweller']['iteration'] <= $this->_sections['jeweller']['total'];
                 $this->_sections['jeweller']['index'] += $this->_sections['jeweller']['step'], $this->_sections['jeweller']['iteration']++):
$this->_sections['jeweller']['rownum'] = $this->_sections['jeweller']['iteration'];
$this->_sections['jeweller']['index_prev'] = $this->_sections['jeweller']['index'] - $this->_sections['jeweller']['step'];
$this->_sections['jeweller']['index_next'] = $this->_sections['jeweller']['index'] + $this->_sections['jeweller']['step'];
$this->_sections['jeweller']['first']      = ($this->_sections['jeweller']['iteration'] == 1);
$this->_sections['jeweller']['last']       = ($this->_sections['jeweller']['iteration'] == $this->_sections['jeweller']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Rname'][$this->_sections['jeweller']['index']];  echo '</td><td align="center">1</td><td align="center">';  echo $this->_tpl_vars['Ramount'][$this->_sections['jeweller']['index']];  echo '</td><td align="center">500</td><td align="center"><a href="jewellershop.php?buy=';  echo $this->_tpl_vars['Rid'][$this->_sections['jeweller']['index']];  echo '">';  echo $this->_tpl_vars['Abuy'];  echo '</td></tr>';  endfor; endif;  echo '</table><br /><br />';  echo $this->_tpl_vars['Message'];  echo ''; ?>