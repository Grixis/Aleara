<?php /* Smarty version 2.6.16, created on 2012-10-06 01:02:01
         compiled from temple2.tpl */ ?>
<center><IMG SRC="images/locations/oltarzofiarny.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if (! in_array ( $_GET['view'] , array ( 'book' , 'pantheon' , 'service' ) )):  echo 'Wchodząc do Diabolium widziałeś jak mieszkańcy tego miasta składają ofiary bogom. Podchodzisz do jednego z ołtarzy i uważnie się rozglądasz. Widzisz wielką wnękę w starej ścianie i jest w niej wyryty jakiś symbol. Obok niej jest wielki kamienny stół. Spływa po nim krew… Obok stołu mały klęcznik. Zaciekawiło Cię to miejsce. Zastanawiasz się co stanie się jeśli złożysz ofiarę. Widzisz obok siebie martwego wilkołaka. Kładziesz go na stole i zaczynasz się modlić… Po chwili słyszysz głos Twego boga. Mówi on że wysłuchał Twoje modły i zostaniesz za to wynagrodzony…';  if ($this->_tpl_vars['Location'] == 'Altara'):  echo '';  echo $this->_tpl_vars['God2'];  echo '.';  endif;  echo '<ul ';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo 'class="sword"';  endif;  echo '></ul>';  endif;  echo '';  if (isset ( $this->_tpl_vars['Message'] )):  echo '<p class="bless">';  echo $this->_tpl_vars['Message'];  echo '.</p>';  endif;  echo '';  if ($_GET['view'] == 'service'):  echo '<p>';  echo @TEMPLE_INFO_W;  echo ' ';  echo $this->_tpl_vars['God'];  echo ' ';  echo @TEMPLE_INFO2_W;  echo '</p><form method="post" action="temple2.php?view=service">';  echo @I_WANT;  echo ' <input type="text" size="3" value="0" name="rep" /> ';  echo @T_AMOUNT;  echo '. <input type="submit" value="';  echo @A_WORK_2;  echo '" /></form><br /><a href="temple2.php">';  echo @BACK;  echo '</a>';  endif;  echo '';  if ($_GET['view'] == 'prayer'):  echo '<div id="prayer"><form method="post" action="temple2.php?view=prayer"><input id="pr5" type="radio" name="praytype" value="0" /><label for="pr5">+15 statystyki = 100pkt wiary || +15 umiejetnosci = 300pkt wiary</label><br/><br><br><div class="columnleft"><b>STATYSTYKI:</b><br>';  unset($this->_sections['temple']);
$this->_sections['temple']['name'] = 'temple';
$this->_sections['temple']['loop'] = is_array($_loop=$this->_tpl_vars['Blessings']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['temple']['show'] = true;
$this->_sections['temple']['max'] = $this->_sections['temple']['loop'];
$this->_sections['temple']['step'] = 1;
$this->_sections['temple']['start'] = $this->_sections['temple']['step'] > 0 ? 0 : $this->_sections['temple']['loop']-1;
if ($this->_sections['temple']['show']) {
    $this->_sections['temple']['total'] = $this->_sections['temple']['loop'];
    if ($this->_sections['temple']['total'] == 0)
        $this->_sections['temple']['show'] = false;
} else
    $this->_sections['temple']['total'] = 0;
if ($this->_sections['temple']['show']):

            for ($this->_sections['temple']['index'] = $this->_sections['temple']['start'], $this->_sections['temple']['iteration'] = 1;
                 $this->_sections['temple']['iteration'] <= $this->_sections['temple']['total'];
                 $this->_sections['temple']['index'] += $this->_sections['temple']['step'], $this->_sections['temple']['iteration']++):
$this->_sections['temple']['rownum'] = $this->_sections['temple']['iteration'];
$this->_sections['temple']['index_prev'] = $this->_sections['temple']['index'] - $this->_sections['temple']['step'];
$this->_sections['temple']['index_next'] = $this->_sections['temple']['index'] + $this->_sections['temple']['step'];
$this->_sections['temple']['first']      = ($this->_sections['temple']['iteration'] == 1);
$this->_sections['temple']['last']       = ($this->_sections['temple']['iteration'] == $this->_sections['temple']['total']);
 echo '';  if ($this->_tpl_vars['Indices'][$this->_sections['temple']['index']] > 6):  echo '</div><div class="columnright"><b>UMIEJĘTNOŚCI:</b><br>';  endif;  echo '<input id="bl';  echo $this->_sections['temple2']['iteration'];  echo '" type="radio" name="pray" value="';  echo $this->_tpl_vars['Indices'][$this->_sections['temple']['index']];  echo '" ';  if ($this->_sections['temple2']['first']):  echo ' checked="checked"';  endif;  echo ' /><label for="bl';  echo $this->_sections['temple2']['iteration'];  echo '">';  echo $this->_tpl_vars['Blessings'][$this->_sections['temple']['index']][0];  echo ' (';  echo $this->_tpl_vars['Blessings'][$this->_sections['temple']['index']][1];  echo ')</label><br/>';  endfor; endif;  echo '</div><br /><input type="submit" value="';  echo @YES;  echo '" style="clear: both; display: block;" /></form></div>';  endif;  echo '';  if ($_GET['view'] == 'book'):  echo '';  if ($this->_tpl_vars['Next'] == 0):  echo '';  echo @BOOK_INFO;  echo '';  endif;  echo '<i>';  echo $this->_tpl_vars['Booktext'];  echo '</i><br />';  if ($this->_tpl_vars['Next'] < 2):  echo '<a href="temple2.php?view=book&amp;book=';  echo $this->_tpl_vars['Next']+1;  echo '">';  echo @NEXT_PAGE;  echo '</a>';  endif;  echo '';  endif;  echo ''; ?>

 <a href="diabolium.php">Wracam do centrum Diabolium</a>
</br>