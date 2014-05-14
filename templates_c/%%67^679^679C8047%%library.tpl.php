<?php /* Smarty version 2.6.16, created on 2012-10-07 14:38:04
         compiled from library.tpl */ ?>
<center><IMG SRC="images/locations/biblioteka.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['Step'] == ""):  echo 'Przechadzając się po ogromnym zamczysku dostrzegasz, iż się zgubiłeś. Podczas szukania wyjścia wśród opustoszałych korytarzy dotarłeś pod wielkie dębowe drzwi. Twoja ciekawość kazała Ci zajrzeć do środka, więc po rozejrzeniu się i stwierdzeniu, iż dokoła nie ma żywej duszy otworzyłeś masywne drzwi i wślizgnąłeś się do środka. Zamykając za je za sobą rozejrzałeś się dookoła. Na ścianach znajdowały się pochodnie rozświetlające swym blaskiem całe pomieszczenie. Ewidentnie była to ogromna biblioteka. Niemal  wszystkie ściany zabudowane były regałami, które były zapełnione księgami po same brzegi, na środku znajdował się wielki stół z ustawionymi naokoło krzesłami. Podszedłeś bliżej starych, zakurzonych ksiąg. Alby przeczytać tytuł musiałeś rozdmuchać kurz, który uniósł się w świetle pochodni po to by ponownie mógł opaść w dół. Przeglądając poszczególne ksiegi poczułeś czyjąś dłoń na ramieniu. Przestraszony natychmiast odwróciłeś się i spytałeś kim jest owa osoba. Dowiedziałeś się od niej, że jest miejscowym bibliotekarzem. Bibliotekarz oprowadził Cię po pomieszczeniu i oznajmił, że jeśli tylko chcesz może udostępnić Ci opowiadania lub jeśli masz ku temu talent chętnie upubliczni tu innym mieszczanom także Twoje dzieła.<p>';  echo @WELCOME2;  echo ' ';  echo $this->_tpl_vars['TextIn'];  echo ' ';  echo $this->_tpl_vars['Welcome3'];  echo ' ';  echo $this->_tpl_vars['TextNot'];  echo '.</p><li><a href="library.php?step=tales">';  echo @A_TALES;  echo '</a> (';  echo $this->_tpl_vars['AmountTales'];  echo ' ';  echo $this->_tpl_vars['Tales_Text'];  echo ')</li><li><a href="library.php?step=poetry">';  echo @A_POETRY;  echo '</a> (';  echo $this->_tpl_vars['AmountPoetry'];  echo ' ';  echo $this->_tpl_vars['Poetry_Text'];  echo ')</li><li><a href="library.php?step=rules">';  echo @A_RULES;  echo '</a></li><li><a href="library.php?step=add">';  echo @A_ADD_TEXT;  echo '</a></li>';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Bibliotekarz'):  echo '<li><a href="library.php?step=addtext">';  echo @A_ADMIN;  echo '</a></li></br> ';  endif;  echo '';  endif;  echo '</br>';  if ($this->_tpl_vars['Step'] == 'add'):  echo '';  echo @ADD_INFO;  echo '<br /><form method="post" action="library.php?step=add&amp;step2=add">';  echo @T_LANG;  echo ': <select name="lang">';  unset($this->_sections['library']);
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
 echo '<option value="';  echo $this->_tpl_vars['Llang'][$this->_sections['library']['index']];  echo '">';  echo $this->_tpl_vars['Llang'][$this->_sections['library']['index']];  echo '</option>';  endfor; endif;  echo '</select><br />';  echo @T_TYPE;  echo ':<select name="type"><option value="';  echo @T_TYPE1;  echo '">';  echo @T_TYPE1;  echo '</option><option value="';  echo @T_TYPE2;  echo '">';  echo @T_TYPE2;  echo '</option></select><br />';  echo @T_TITLE;  echo ': <input type="text" size="90" name="ttitle" /><br />';  echo @T_BODY;  echo ': <br /><textarea name="body" rows="30" cols="90"></textarea><br /><input type="submit" value="';  echo @A_ADD;  echo '" /></form></br>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'addtext' && $this->_tpl_vars['Action'] != 'modify'):  echo '';  echo @ADMIN_INFO;  echo '<br />';  echo @ADMIN_INFO2;  echo '<br />';  echo @ADMIN_INFO3;  echo '<br />';  echo @ADMIN_INFO4;  echo '<br /><br />';  echo @ADMIN_INFO5;  echo ':<table width="100%">';  unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['TextList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['TextList'][$this->_sections['k']['index']][1];  echo ' (';  echo @T_AUTHOR;  echo ': ';  echo $this->_tpl_vars['TextList'][$this->_sections['k']['index']][2];  echo ' ';  echo @ID;  echo ' ';  echo $this->_tpl_vars['TextList'][$this->_sections['k']['index']][3];  echo ')</td><td><a href="library.php?step=addtext&amp;action=modify&amp;text=';  echo $this->_tpl_vars['TextList'][$this->_sections['k']['index']][0];  echo '">';  echo @A_MODIFY;  echo '</a></td><td><a href="library.php?step=addtext&amp;action=add&amp;text=';  echo $this->_tpl_vars['TextList'][$this->_sections['k']['index']][0];  echo '">';  echo @A_ADD;  echo '</a></td><td><a href="library.php?step=addtext&amp;action=delete&amp;text=';  echo $this->_tpl_vars['TextList'][$this->_sections['k']['index']][0];  echo '">';  echo @A_DELETE;  echo '</a></td></tr>';  endfor; endif;  echo '</table></br>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'tales' || $this->_tpl_vars['Step'] == 'poetry'):  echo '';  if ($this->_tpl_vars['TextAmount'] == '0' && $this->_tpl_vars['Text'] == ""):  echo '<br /><br /><center> ';  echo @NO_ITEMS;  echo ' ';  echo $this->_tpl_vars['TextType'];  echo ' ';  echo @IN_LIB;  echo '</center>';  endif;  echo '';  if ($this->_tpl_vars['TextAmount'] > '0' && $this->_tpl_vars['Text'] == ""):  echo '';  echo @LIST_INFO;  echo ' ';  echo $this->_tpl_vars['TextType'];  echo ' ';  echo @LIST_INFO2;  echo '<br />';  if ($this->_tpl_vars['Author'] == ""):  echo '';  echo @SORT_INFO;  echo ':<form method="post" action="library.php?step=';  echo $this->_tpl_vars['Step'];  echo '"><select name="sort"><option value="author">';  echo @O_AUTHOR;  echo '</option><option value="id">';  echo @O_DATE;  echo '</option><option value="title">';  echo @O_TITLE;  echo '</option></select><br /><input type="submit" value="';  echo @A_SORT;  echo '" /></form></br>';  endif;  echo '';  if ($this->_tpl_vars['Author'] == "" && ( $this->_tpl_vars['Sort'] == 'author' || $this->_tpl_vars['Sort'] == "" )):  echo '<ul>';  unset($this->_sections['library6']);
$this->_sections['library6']['name'] = 'library6';
$this->_sections['library6']['loop'] = is_array($_loop=$this->_tpl_vars['Tauthor']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['library6']['show'] = true;
$this->_sections['library6']['max'] = $this->_sections['library6']['loop'];
$this->_sections['library6']['step'] = 1;
$this->_sections['library6']['start'] = $this->_sections['library6']['step'] > 0 ? 0 : $this->_sections['library6']['loop']-1;
if ($this->_sections['library6']['show']) {
    $this->_sections['library6']['total'] = $this->_sections['library6']['loop'];
    if ($this->_sections['library6']['total'] == 0)
        $this->_sections['library6']['show'] = false;
} else
    $this->_sections['library6']['total'] = 0;
if ($this->_sections['library6']['show']):

            for ($this->_sections['library6']['index'] = $this->_sections['library6']['start'], $this->_sections['library6']['iteration'] = 1;
                 $this->_sections['library6']['iteration'] <= $this->_sections['library6']['total'];
                 $this->_sections['library6']['index'] += $this->_sections['library6']['step'], $this->_sections['library6']['iteration']++):
$this->_sections['library6']['rownum'] = $this->_sections['library6']['iteration'];
$this->_sections['library6']['index_prev'] = $this->_sections['library6']['index'] - $this->_sections['library6']['step'];
$this->_sections['library6']['index_next'] = $this->_sections['library6']['index'] + $this->_sections['library6']['step'];
$this->_sections['library6']['first']      = ($this->_sections['library6']['iteration'] == 1);
$this->_sections['library6']['last']       = ($this->_sections['library6']['iteration'] == $this->_sections['library6']['total']);
 echo '<li><a href="library.php?step=';  echo $this->_tpl_vars['Step'];  echo '&amp;author=';  echo $this->_tpl_vars['Tauthor'][$this->_sections['library6']['index']][1];  echo '">';  echo $this->_tpl_vars['Tauthor'][$this->_sections['library6']['index']][0];  echo '</a><br />';  echo $this->_tpl_vars['TextType'];  echo ': ';  echo $this->_tpl_vars['Tauthor'][$this->_sections['library6']['index']][2];  echo '<br /><br /></li>';  endfor; endif;  echo '</ul></br>';  endif;  echo '';  if ($this->_tpl_vars['Sort'] != "" && $this->_tpl_vars['Sort'] != 'author'):  echo '<ul>';  unset($this->_sections['library4']);
$this->_sections['library4']['name'] = 'library4';
$this->_sections['library4']['loop'] = is_array($_loop=$this->_tpl_vars['TextList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['library4']['show'] = true;
$this->_sections['library4']['max'] = $this->_sections['library4']['loop'];
$this->_sections['library4']['step'] = 1;
$this->_sections['library4']['start'] = $this->_sections['library4']['step'] > 0 ? 0 : $this->_sections['library4']['loop']-1;
if ($this->_sections['library4']['show']) {
    $this->_sections['library4']['total'] = $this->_sections['library4']['loop'];
    if ($this->_sections['library4']['total'] == 0)
        $this->_sections['library4']['show'] = false;
} else
    $this->_sections['library4']['total'] = 0;
if ($this->_sections['library4']['show']):

            for ($this->_sections['library4']['index'] = $this->_sections['library4']['start'], $this->_sections['library4']['iteration'] = 1;
                 $this->_sections['library4']['iteration'] <= $this->_sections['library4']['total'];
                 $this->_sections['library4']['index'] += $this->_sections['library4']['step'], $this->_sections['library4']['iteration']++):
$this->_sections['library4']['rownum'] = $this->_sections['library4']['iteration'];
$this->_sections['library4']['index_prev'] = $this->_sections['library4']['index'] - $this->_sections['library4']['step'];
$this->_sections['library4']['index_next'] = $this->_sections['library4']['index'] + $this->_sections['library4']['step'];
$this->_sections['library4']['first']      = ($this->_sections['library4']['iteration'] == 1);
$this->_sections['library4']['last']       = ($this->_sections['library4']['iteration'] == $this->_sections['library4']['total']);
 echo '<li><a href="library.php?step=';  echo $this->_tpl_vars['Step'];  echo '&amp;text=';  echo $this->_tpl_vars['TextList'][$this->_sections['library4']['index']][0];  echo '">';  echo $this->_tpl_vars['TextList'][$this->_sections['library4']['index']][1];  echo '</a><br />';  echo @T_AUTHOR;  echo ': ';  if ($this->_tpl_vars['TextList'][$this->_sections['library4']['index']][3] < 1000000):  echo '<a href="view.php?view=';  echo $this->_tpl_vars['TextList'][$this->_sections['library4']['index']][3];  echo '">';  echo $this->_tpl_vars['TextList'][$this->_sections['library4']['index']][2];  echo '</a>';  else:  echo '<b>';  echo $this->_tpl_vars['TextList'][$this->_sections['library4']['index']][2];  echo '</b> ';  echo @LEFT;  echo '';  endif;  echo '<br /><a href="library.php?step=comments&amp;text=';  echo $this->_tpl_vars['TextList'][$this->_sections['library4']['index']][0];  echo '">';  echo @T_COMMENTS;  echo '</a>: ';  echo $this->_tpl_vars['Comments'][$this->_sections['library4']['index']];  echo '<br /><br /></li>';  endfor; endif;  echo '</ul></br>';  endif;  echo '';  if ($this->_tpl_vars['Author'] != ""):  echo '<ul>';  unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['AuthorList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
 echo '<li>';  echo @T_AUTHOR;  echo ': ';  if ($this->_tpl_vars['AuthorList'][$this->_sections['a']['index']][1] < 1000000):  echo ' <a href="view.php?view=';  echo $this->_tpl_vars['AuthorList'][$this->_sections['a']['index']][1];  echo '">';  echo $this->_tpl_vars['AuthorList'][$this->_sections['a']['index']][0];  echo '</a>';  else:  echo '<b>';  echo $this->_tpl_vars['AuthorList'][$this->_sections['a']['index']][0];  echo '</b> ';  echo @LEFT;  echo '';  endif;  echo '<br /><ul>';  unset($this->_sections['b']);
$this->_sections['b']['name'] = 'b';
$this->_sections['b']['loop'] = is_array($_loop=$this->_tpl_vars['TextsList'][$this->_sections['a']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['b']['show'] = true;
$this->_sections['b']['max'] = $this->_sections['b']['loop'];
$this->_sections['b']['step'] = 1;
$this->_sections['b']['start'] = $this->_sections['b']['step'] > 0 ? 0 : $this->_sections['b']['loop']-1;
if ($this->_sections['b']['show']) {
    $this->_sections['b']['total'] = $this->_sections['b']['loop'];
    if ($this->_sections['b']['total'] == 0)
        $this->_sections['b']['show'] = false;
} else
    $this->_sections['b']['total'] = 0;
if ($this->_sections['b']['show']):

            for ($this->_sections['b']['index'] = $this->_sections['b']['start'], $this->_sections['b']['iteration'] = 1;
                 $this->_sections['b']['iteration'] <= $this->_sections['b']['total'];
                 $this->_sections['b']['index'] += $this->_sections['b']['step'], $this->_sections['b']['iteration']++):
$this->_sections['b']['rownum'] = $this->_sections['b']['iteration'];
$this->_sections['b']['index_prev'] = $this->_sections['b']['index'] - $this->_sections['b']['step'];
$this->_sections['b']['index_next'] = $this->_sections['b']['index'] + $this->_sections['b']['step'];
$this->_sections['b']['first']      = ($this->_sections['b']['iteration'] == 1);
$this->_sections['b']['last']       = ($this->_sections['b']['iteration'] == $this->_sections['b']['total']);
 echo '<li><a href="library.php?step=';  echo $this->_tpl_vars['Step'];  echo '&amp;text=';  echo $this->_tpl_vars['TextsList'][$this->_sections['a']['index']][$this->_sections['b']['index']][0];  echo '">';  echo $this->_tpl_vars['TextsList'][$this->_sections['a']['index']][$this->_sections['b']['index']][1];  echo '</a><br /><a href="library.php?step=comments&amp;text=';  echo $this->_tpl_vars['TextsList'][$this->_sections['a']['index']][$this->_sections['b']['index']][0];  echo '">';  echo @T_COMMENTS;  echo '</a>: ';  echo $this->_tpl_vars['CommentsAmount'][$this->_sections['b']['index']][0];  echo '<br /><br /></li>';  endfor; endif;  echo '</ul></br>';  endfor; endif;  echo '</ul></br>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Text'] != ""):  echo '';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Bibliotekarz'):  echo '(<a href="library.php?step=addtext&amp;action=modify&amp;text=';  echo $this->_tpl_vars['TextData'][0];  echo '">';  echo @A_MODIFY;  echo '</a>)<br />';  endif;  echo '<b>';  echo @T_TITLE;  echo '</b>: ';  echo $this->_tpl_vars['TextData'][1];  echo '<br /><b>';  echo @T_AUTHOR;  echo '</b>: ';  if ($this->_tpl_vars['TextData'][4] < 1000000):  echo '<a href="view.php?view=';  echo $this->_tpl_vars['TextData'][4];  echo '">';  echo $this->_tpl_vars['TextData'][3];  echo '</a>';  else:  echo '<b>';  echo $this->_tpl_vars['TextData'][3];  echo '</b> ';  echo @LEFT;  echo '';  endif;  echo '<br /><b>';  echo @T_BODY;  echo '</b>:<br />';  echo $this->_tpl_vars['TextData'][2];  echo '<br /><br /><a href="library.php?step=comments&amp;text=';  echo $this->_tpl_vars['TextData'][0];  echo '">';  echo @T_COMMENTS2;  echo '</a></br> ';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'comments'):  echo '';  if ($this->_tpl_vars['Amount'] == '0'):  echo '<center>';  echo @NO_COMMENTS;  echo '</center>';  endif;  echo '';  if ($this->_tpl_vars['Amount'] > '0'):  echo '';  unset($this->_sections['library5']);
$this->_sections['library5']['name'] = 'library5';
$this->_sections['library5']['loop'] = is_array($_loop=$this->_tpl_vars['Tauthor']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['library5']['show'] = true;
$this->_sections['library5']['max'] = $this->_sections['library5']['loop'];
$this->_sections['library5']['step'] = 1;
$this->_sections['library5']['start'] = $this->_sections['library5']['step'] > 0 ? 0 : $this->_sections['library5']['loop']-1;
if ($this->_sections['library5']['show']) {
    $this->_sections['library5']['total'] = $this->_sections['library5']['loop'];
    if ($this->_sections['library5']['total'] == 0)
        $this->_sections['library5']['show'] = false;
} else
    $this->_sections['library5']['total'] = 0;
if ($this->_sections['library5']['show']):

            for ($this->_sections['library5']['index'] = $this->_sections['library5']['start'], $this->_sections['library5']['iteration'] = 1;
                 $this->_sections['library5']['iteration'] <= $this->_sections['library5']['total'];
                 $this->_sections['library5']['index'] += $this->_sections['library5']['step'], $this->_sections['library5']['iteration']++):
$this->_sections['library5']['rownum'] = $this->_sections['library5']['iteration'];
$this->_sections['library5']['index_prev'] = $this->_sections['library5']['index'] - $this->_sections['library5']['step'];
$this->_sections['library5']['index_next'] = $this->_sections['library5']['index'] + $this->_sections['library5']['step'];
$this->_sections['library5']['first']      = ($this->_sections['library5']['iteration'] == 1);
$this->_sections['library5']['last']       = ($this->_sections['library5']['iteration'] == $this->_sections['library5']['total']);
 echo '<b>';  echo $this->_tpl_vars['Tauthor'][$this->_sections['library5']['index']];  echo '</b> ';  if ($this->_tpl_vars['Tdate'][$this->_sections['library5']['index']] != ""):  echo ' (';  echo $this->_tpl_vars['Tdate'][$this->_sections['library5']['index']];  echo ') ';  endif;  echo '';  echo @WRITED;  echo ': ';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Bibliotekarz'):  echo ' (<a href="library.php?step=comments&amp;action=delete&amp;cid=';  echo $this->_tpl_vars['Cid'][$this->_sections['library5']['index']];  echo '">';  echo @A_DELETE;  echo '</a>) ';  endif;  echo '<br /><div class="overflow">';  echo $this->_tpl_vars['Tbody'][$this->_sections['library5']['index']];  echo '</div><br /></br> ';  endfor; endif;  echo '';  endif;  echo '<br /><br /><center><form method="post" action="library.php?step=comments&amp;action=add">';  echo @ADD_COMMENT;  echo ':<br /><textarea name="body" rows="20" cols="50"></textarea><br /><input type="hidden" name="tid" value="';  echo $this->_tpl_vars['Text'];  echo '" /><input type="submit" value="';  echo @A_ADD;  echo '" /></br> </form></center>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'rules'):  echo '';  echo @RULES;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'modify'):  echo '<form method="post" action="library.php?step=addtext&amp;action=modify&amp;text=';  echo $this->_tpl_vars['TextToModify'][0];  echo '"><b>';  echo @T_TYPE;  echo '</b>: <br /><select name="type"><option value="';  echo @T_TYPE1;  echo '" ';  if ($this->_tpl_vars['TextToModify'][3] == 'tale'):  echo ' selected="true" ';  endif;  echo '>';  echo @T_TYPE1;  echo '</option><option value="';  echo @T_TYPE2;  echo '" ';  if ($this->_tpl_vars['TextToModify'][3] == 'poetry'):  echo ' selected="true" ';  endif;  echo '>';  echo @T_TYPE2;  echo '</option></select><input type="hidden" name="tid" value="';  echo $this->_tpl_vars['TextToModify'][0];  echo '" /><br /><b>';  echo @T_TITLE;  echo '</b>: <input type="text" size="90" name="ttitle" value="';  echo $this->_tpl_vars['TextToModify'][1];  echo '" /><br /><b>';  echo @T_BODY;  echo '</b>: <br /><textarea name="body" rows="30" cols="90">';  echo $this->_tpl_vars['TextToModify'][2];  echo '</textarea><br /><input type="hidden" name="tid" value="';  echo $this->_tpl_vars['TextToModify'][0];  echo '" /><input type="submit" value="';  echo @A_CHANGE;  echo '" /></form><br /></br><a href="library.php?step=addtext">';  echo @A_BACK;  echo '</a> ';  echo @WAIT_LIST;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] != ""):  echo '<br /><br /><a href="library.php">';  echo @A_BACK;  echo '</a></br>';  endif;  echo ''; ?>

</br></br></br></br>