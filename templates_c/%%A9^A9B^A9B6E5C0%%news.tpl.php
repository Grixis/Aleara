<?php /* Smarty version 2.6.16, created on 2012-10-06 09:42:27
         compiled from news.tpl */ ?>
<center><IMG SRC="images/locations/zakatek.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Mijasz po drodze dwójkę roześmianych dzieci rzucających sobie drewnianego ptaszka, zdążyłeś zauważyć że rzeźba ma ułamane jedno skrzydło ale dalej jest w stanie szybować od jednego dziecka do drugiego. Obdrapane domy kryte strzechą stają się coraz rzadsze, zmierzasz do niewielkiego skupiska ławek za targowiskiem. Jest wieczór, niebo jeszcze nie okazuje wszystkich swoich tajemnic, księżyc jednak już ledwo prześwituje na nieboskłonie. Kiedy docierasz na miejsce widzisz handlarki z targu trzymające kubki z herbatą lub wygazowanym piwem rozpowiadające najnowsze plotki. Siadasz między nimi, na wysokiej sosnowej ławie, karczmarka wybiera od tylnej strony karczmy by obsłużyć też tych klientów których nie widać w karczmie – ale sprzedaż ciepłej herbaty plotkującym – to złoty biznes z którego nie sposób zrezygnować.
<br><br><?php echo '';  if ($this->_tpl_vars['View'] == '' && $this->_tpl_vars['Step'] == ''):  echo '';  if (isset ( $this->_tpl_vars['Title1'] )):  echo '<div class="overflow"><b>';  echo $this->_tpl_vars['Title1'];  echo '</b> ';  echo @WRITE_BY;  echo ' <b>';  echo $this->_tpl_vars['Starter'];  echo '</b>.<br />';  echo $this->_tpl_vars['News'];  echo '</div>(<a href="news.php?view=all">';  echo @LAST_10;  echo '</a>)<br /><br />';  endif;  echo '<a href="news.php?step=add">';  echo @A_ADD_NEWS;  echo '</a> (';  echo @T_WAITING;  echo ': ';  echo $this->_tpl_vars['Waiting'];  echo ' | ';  echo @T_ACCEPTED;  echo ': ';  echo $this->_tpl_vars['Accepted'];  echo ')';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'all' && $this->_tpl_vars['Step'] == ''):  echo '';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['LastNews']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<div class="overflow"><b>';  echo $this->_tpl_vars['LastNews'][$this->_sections['i']['index']][1];  echo '</b> ';  echo @WRITE_BY;  echo ' <b>';  echo $this->_tpl_vars['LastNews'][$this->_sections['i']['index']][2];  echo '</b>...<br /><br />"';  echo $this->_tpl_vars['LastNews'][$this->_sections['i']['index']][3];  echo '"</div><a href="news.php?step=comments&amp;text=';  echo $this->_tpl_vars['LastNews'][$this->_sections['i']['index']][0];  echo '">';  echo @A_COMMENTS;  echo '</a>: ';  echo $this->_tpl_vars['LastNews'][$this->_sections['i']['index']][4];  echo '<br /><br />';  endfor; endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'comments'):  echo '';  if ($this->_tpl_vars['Amount'] == 0):  echo '<center>';  echo @NO_COMMENTS;  echo '</center>';  endif;  echo '';  if ($this->_tpl_vars['Amount'] > 0):  echo '';  unset($this->_sections['update']);
$this->_sections['update']['name'] = 'update';
$this->_sections['update']['loop'] = is_array($_loop=$this->_tpl_vars['Tauthor']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['update']['show'] = true;
$this->_sections['update']['max'] = $this->_sections['update']['loop'];
$this->_sections['update']['step'] = 1;
$this->_sections['update']['start'] = $this->_sections['update']['step'] > 0 ? 0 : $this->_sections['update']['loop']-1;
if ($this->_sections['update']['show']) {
    $this->_sections['update']['total'] = $this->_sections['update']['loop'];
    if ($this->_sections['update']['total'] == 0)
        $this->_sections['update']['show'] = false;
} else
    $this->_sections['update']['total'] = 0;
if ($this->_sections['update']['show']):

            for ($this->_sections['update']['index'] = $this->_sections['update']['start'], $this->_sections['update']['iteration'] = 1;
                 $this->_sections['update']['iteration'] <= $this->_sections['update']['total'];
                 $this->_sections['update']['index'] += $this->_sections['update']['step'], $this->_sections['update']['iteration']++):
$this->_sections['update']['rownum'] = $this->_sections['update']['iteration'];
$this->_sections['update']['index_prev'] = $this->_sections['update']['index'] - $this->_sections['update']['step'];
$this->_sections['update']['index_next'] = $this->_sections['update']['index'] + $this->_sections['update']['step'];
$this->_sections['update']['first']      = ($this->_sections['update']['iteration'] == 1);
$this->_sections['update']['last']       = ($this->_sections['update']['iteration'] == $this->_sections['update']['total']);
 echo '<div class="overflow"><fieldset style="width:90%"><legend><b>';  echo $this->_tpl_vars['Tauthor'][$this->_sections['update']['index']];  echo '</b> ';  if ($this->_tpl_vars['Tdate'][$this->_sections['update']['index']] != ''):  echo ' (';  echo $this->_tpl_vars['Tdate'][$this->_sections['update']['index']];  echo ') ';  endif;  echo '';  echo @A_WRITED;  echo ':</legend>';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Staff'):  echo ' <center> (<a href="news.php?step=comments&amp;action=delete&amp;cid=';  echo $this->_tpl_vars['Cid'][$this->_sections['update']['index']];  echo '">';  echo @A_DELETE;  echo '</a>) </center> ';  endif;  echo '<br />';  echo $this->_tpl_vars['Tbody'][$this->_sections['update']['index']];  echo '</fieldset></div>';  endfor; endif;  echo '';  endif;  echo '<br /><br /><center><form method="post" action="news.php?step=comments&amp;action=add">';  echo @ADD_COMMENT;  echo ':<br/><textarea name="body" rows="20" cols="70"></textarea><br /><input type="hidden" name="tid" value="';  echo $this->_tpl_vars['Text'];  echo '" /><input type="submit" value="';  echo @A_ADD;  echo '" /></form></center><br /><br /><a href="news.php">';  echo @A_BACK;  echo '</a>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'add'):  echo '';  echo @ADD_INFO;  echo '<br /><form method="post" action="news.php?step=add">';  echo @T_LANG;  echo ': <select name="lang">';  unset($this->_sections['library']);
$this->_sections['library']['name'] = 'library';
$this->_sections['library']['loop'] = is_array($_loop=$this->_tpl_vars['Llang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['library']['show'] = true;
$this->_sections['library']['max'] = $this->_sections['library']['loop'];
$this->_sections['library']['step'] = 1;
$this->_sections['library']['start'] = $this->_sections['library']['step'] > 0 ? 0 : $this->_sections['library']['loop']-1;
if ($this->_sections['library']['show']) {
    $this->_sections['library']['total'] = $this->_sections['library']['loop'];
    if ($this->_sections['library']['total'] == 0)
        $this->_sections['library']['show'] = false;
} else
    $this->_sections['library']['total'] = 0;
if ($this->_sections['library']['show']):

            for ($this->_sections['library']['index'] = $this->_sections['library']['start'], $this->_sections['library']['iteration'] = 1;
                 $this->_sections['library']['iteration'] <= $this->_sections['library']['total'];
                 $this->_sections['library']['index'] += $this->_sections['library']['step'], $this->_sections['library']['iteration']++):
$this->_sections['library']['rownum'] = $this->_sections['library']['iteration'];
$this->_sections['library']['index_prev'] = $this->_sections['library']['index'] - $this->_sections['library']['step'];
$this->_sections['library']['index_next'] = $this->_sections['library']['index'] + $this->_sections['library']['step'];
$this->_sections['library']['first']      = ($this->_sections['library']['iteration'] == 1);
$this->_sections['library']['last']       = ($this->_sections['library']['iteration'] == $this->_sections['library']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Llang'][$this->_sections['library']['index']];  echo '">';  echo $this->_tpl_vars['Llang'][$this->_sections['library']['index']];  echo '</option>';  endfor; endif;  echo '</select><br />';  echo @T_TITLE;  echo ': <input type="text" name="ttitle" /><br />';  echo @T_BODY;  echo ': <br /><textarea name="body" rows="30" cols="70"></textarea><br /><input type="submit" value="';  echo @A_ADD;  echo '" /></form><a href="news.php">';  echo @A_BACK;  echo '</a>';  endif;  echo ''; ?>

                