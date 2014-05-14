<?php /* Smarty version 2.6.16, created on 2012-10-06 10:08:56
         compiled from straz.tpl */ ?>
<?php echo '<center><IMG SRC="images/locations/basytastraynikow.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>Wchodzisz do Baszty Strażników Miejskich zauważając ogromną tablicę. Podchodzisz bliżej i czytasz:<br><i>Jeżeli zauważysz w cesarstwie podejrzane zachowanie mieszkańców natychmiast zgłoś to Strażnikom, których obowiązkiem jest dbanie o przestrzeganie zasad przez mieszkańców i pilnowanie porządku w krainie. Strażnicy mogą sami wymierzać karę, bądź przekazać sprawę SN.</i><br><a href="straznik.php">Baszta Strażnicza</a><br /><br /><fieldset style="width:90%"><legend><u>Lista Strażników Miejskich krainy</u></legend><table width="100%"><tr><td width="50%"><b>Strażnicy:</b></td></tr><tr><td valign="top">';  unset($this->_sections['admins']);
$this->_sections['admins']['name'] = 'admins';
$this->_sections['admins']['loop'] = is_array($_loop=$this->_tpl_vars['Stafflist'][0][0]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['admins']['show'] = true;
$this->_sections['admins']['max'] = $this->_sections['admins']['loop'];
$this->_sections['admins']['step'] = 1;
$this->_sections['admins']['start'] = $this->_sections['admins']['step'] > 0 ? 0 : $this->_sections['admins']['loop']-1;
if ($this->_sections['admins']['show']) {
    $this->_sections['admins']['total'] = $this->_sections['admins']['loop'];
    if ($this->_sections['admins']['total'] == 0)
        $this->_sections['admins']['show'] = false;
} else
    $this->_sections['admins']['total'] = 0;
if ($this->_sections['admins']['show']):

            for ($this->_sections['admins']['index'] = $this->_sections['admins']['start'], $this->_sections['admins']['iteration'] = 1;
                 $this->_sections['admins']['iteration'] <= $this->_sections['admins']['total'];
                 $this->_sections['admins']['index'] += $this->_sections['admins']['step'], $this->_sections['admins']['iteration']++):
$this->_sections['admins']['rownum'] = $this->_sections['admins']['iteration'];
$this->_sections['admins']['index_prev'] = $this->_sections['admins']['index'] - $this->_sections['admins']['step'];
$this->_sections['admins']['index_next'] = $this->_sections['admins']['index'] + $this->_sections['admins']['step'];
$this->_sections['admins']['first']      = ($this->_sections['admins']['iteration'] == 1);
$this->_sections['admins']['last']       = ($this->_sections['admins']['iteration'] == $this->_sections['admins']['total']);
 echo '<a href="view.php?view=';  echo $this->_tpl_vars['Stafflist'][0][0][$this->_sections['admins']['index']];  echo '">';  echo $this->_tpl_vars['Stafflist'][0][1][$this->_sections['admins']['index']];  echo '</a> ID: ';  echo $this->_tpl_vars['Stafflist'][0][0][$this->_sections['admins']['index']];  echo '<br />';  endfor; endif;  echo '</td></tr></table></fieldset><br><b>Funkcje Straży Miejskiej:</b><br><br>- Strażnik może edytować profil i nick gracza<br>- Strażnik może dodawać ankiety w Hali Zgromadzeń<br>- Strażnik moze zablokować/odblokować gracza na poczcie<br>- Strażnik moze zablokować/odblokować gracza na czacie<br>- Strażnik ma dostęp do archiwum czatu<br>- Strażnik może wyczyścić czat<br>- Strażnik może edytować listę zabronionych słów<br>- Strażnik może sprawdzać logi graczy<br>- Strażnik może banować/odbanować graczy<br>- Strażnik może wysyłać/uwalniać graczy z więzienia<br>- Straznik moźe wysyłać masową pocztę do graczy<br>'; ?>


<br><br>