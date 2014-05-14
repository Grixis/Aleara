<?php /* Smarty version 2.6.16, created on 2013-04-21 20:45:25
         compiled from account.tpl */ ?>
<?php echo '';  echo $this->_tpl_vars['Welcome'];  echo '<ul ';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo 'class="sword"';  endif;  echo '>';  unset($this->_sections['menu']);
$this->_sections['menu']['name'] = 'menu';
$this->_sections['menu']['loop'] = is_array($_loop=$this->_tpl_vars['Steps']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menu']['show'] = true;
$this->_sections['menu']['max'] = $this->_sections['menu']['loop'];
$this->_sections['menu']['step'] = 1;
$this->_sections['menu']['start'] = $this->_sections['menu']['step'] > 0 ? 0 : $this->_sections['menu']['loop']-1;
if ($this->_sections['menu']['show']) {
    $this->_sections['menu']['total'] = $this->_sections['menu']['loop'];
    if ($this->_sections['menu']['total'] == 0)
        $this->_sections['menu']['show'] = false;
} else
    $this->_sections['menu']['total'] = 0;
if ($this->_sections['menu']['show']):

            for ($this->_sections['menu']['index'] = $this->_sections['menu']['start'], $this->_sections['menu']['iteration'] = 1;
                 $this->_sections['menu']['iteration'] <= $this->_sections['menu']['total'];
                 $this->_sections['menu']['index'] += $this->_sections['menu']['step'], $this->_sections['menu']['iteration']++):
$this->_sections['menu']['rownum'] = $this->_sections['menu']['iteration'];
$this->_sections['menu']['index_prev'] = $this->_sections['menu']['index'] - $this->_sections['menu']['step'];
$this->_sections['menu']['index_next'] = $this->_sections['menu']['index'] + $this->_sections['menu']['step'];
$this->_sections['menu']['first']      = ($this->_sections['menu']['iteration'] == 1);
$this->_sections['menu']['last']       = ($this->_sections['menu']['iteration'] == $this->_sections['menu']['total']);
 echo '<li><a href="account.php?view=';  echo $this->_tpl_vars['Steps'][$this->_sections['menu']['index']];  echo '" title="';  echo $this->_tpl_vars['Titles'][$this->_sections['menu']['index']];  echo '">';  echo $this->_tpl_vars['Links'][$this->_sections['menu']['index']];  echo '</a></li>';  endfor; endif;  echo '</ul>';  if ($this->_tpl_vars['View'] == 'links'):  echo '';  echo $this->_tpl_vars['Linksinfo'];  echo '<br />';  if ($this->_tpl_vars['Linksid'][0] != ""):  echo '<table align="center"><tr><td align="center"><b>';  echo $this->_tpl_vars['Tfile'];  echo '</b></td><td align="center"><b>';  echo $this->_tpl_vars['Tname'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Tactions'];  echo '</b><td></tr>';  unset($this->_sections['links']);
$this->_sections['links']['name'] = 'links';
$this->_sections['links']['loop'] = is_array($_loop=$this->_tpl_vars['Linksid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['links']['show'] = true;
$this->_sections['links']['max'] = $this->_sections['links']['loop'];
$this->_sections['links']['step'] = 1;
$this->_sections['links']['start'] = $this->_sections['links']['step'] > 0 ? 0 : $this->_sections['links']['loop']-1;
if ($this->_sections['links']['show']) {
    $this->_sections['links']['total'] = $this->_sections['links']['loop'];
    if ($this->_sections['links']['total'] == 0)
        $this->_sections['links']['show'] = false;
} else
    $this->_sections['links']['total'] = 0;
if ($this->_sections['links']['show']):

            for ($this->_sections['links']['index'] = $this->_sections['links']['start'], $this->_sections['links']['iteration'] = 1;
                 $this->_sections['links']['iteration'] <= $this->_sections['links']['total'];
                 $this->_sections['links']['index'] += $this->_sections['links']['step'], $this->_sections['links']['iteration']++):
$this->_sections['links']['rownum'] = $this->_sections['links']['iteration'];
$this->_sections['links']['index_prev'] = $this->_sections['links']['index'] - $this->_sections['links']['step'];
$this->_sections['links']['index_next'] = $this->_sections['links']['index'] + $this->_sections['links']['step'];
$this->_sections['links']['first']      = ($this->_sections['links']['iteration'] == 1);
$this->_sections['links']['last']       = ($this->_sections['links']['iteration'] == $this->_sections['links']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Linksfile'][$this->_sections['links']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Linkstext'][$this->_sections['links']['index']];  echo '</td><td><a href="account.php?view=links&amp;step=edit&amp;lid=';  echo $this->_tpl_vars['Linksid'][$this->_sections['links']['index']];  echo '">';  echo $this->_tpl_vars['Aedit'];  echo '</a><br /><a href="account.php?view=links&amp;step=delete&amp;lid=';  echo $this->_tpl_vars['Linksid'][$this->_sections['links']['index']];  echo '">';  echo $this->_tpl_vars['Adelete'];  echo '</a></td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '<br /><br /><form method="post" action="account.php?view=links&amp;step=edit&amp;lid=';  echo $this->_tpl_vars['Linkid'];  echo '&amp;action=change">';  echo $this->_tpl_vars['Tfile'];  echo ': <input type="text" name="linkadress" size="20" value="';  echo $this->_tpl_vars['Linkfile'];  echo '" /><br />';  echo $this->_tpl_vars['Tname'];  echo ': <input type="text" name="linkname" size="20" value="';  echo $this->_tpl_vars['Linkname'];  echo '" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Aform'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'bugtrack'):  echo '';  echo $this->_tpl_vars['Bugtrackinfo'];  echo '<br /><br /><table align="center"><tr><td><b>';  echo $this->_tpl_vars['Bugid'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Bugtype'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Bugloc'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Bugname'];  echo '</b></td></tr>';  unset($this->_sections['bugtrack']);
$this->_sections['bugtrack']['name'] = 'bugtrack';
$this->_sections['bugtrack']['loop'] = is_array($_loop=$this->_tpl_vars['Bugsid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bugtrack']['show'] = true;
$this->_sections['bugtrack']['max'] = $this->_sections['bugtrack']['loop'];
$this->_sections['bugtrack']['step'] = 1;
$this->_sections['bugtrack']['start'] = $this->_sections['bugtrack']['step'] > 0 ? 0 : $this->_sections['bugtrack']['loop']-1;
if ($this->_sections['bugtrack']['show']) {
    $this->_sections['bugtrack']['total'] = $this->_sections['bugtrack']['loop'];
    if ($this->_sections['bugtrack']['total'] == 0)
        $this->_sections['bugtrack']['show'] = false;
} else
    $this->_sections['bugtrack']['total'] = 0;
if ($this->_sections['bugtrack']['show']):

            for ($this->_sections['bugtrack']['index'] = $this->_sections['bugtrack']['start'], $this->_sections['bugtrack']['iteration'] = 1;
                 $this->_sections['bugtrack']['iteration'] <= $this->_sections['bugtrack']['total'];
                 $this->_sections['bugtrack']['index'] += $this->_sections['bugtrack']['step'], $this->_sections['bugtrack']['iteration']++):
$this->_sections['bugtrack']['rownum'] = $this->_sections['bugtrack']['iteration'];
$this->_sections['bugtrack']['index_prev'] = $this->_sections['bugtrack']['index'] - $this->_sections['bugtrack']['step'];
$this->_sections['bugtrack']['index_next'] = $this->_sections['bugtrack']['index'] + $this->_sections['bugtrack']['step'];
$this->_sections['bugtrack']['first']      = ($this->_sections['bugtrack']['iteration'] == 1);
$this->_sections['bugtrack']['last']       = ($this->_sections['bugtrack']['iteration'] == $this->_sections['bugtrack']['total']);
 echo '<tr><td align="center">';  echo $this->_tpl_vars['Bugsid'][$this->_sections['bugtrack']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Bugstype'][$this->_sections['bugtrack']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Bugsloc'][$this->_sections['bugtrack']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Bugsname'][$this->_sections['bugtrack']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'bugreport'):  echo 'Instrukcja zglaszania błędu<br>Błędy zgłaszamy w systemie Mantis dostepny pod adresem <a href="http://bugs-aleara.cba.pl/">http://bugs-aleara.cba.pl/</a>.Nastepnie logujemy sie na specjalnie utworzone do tego konto (jesli chcesz mieć własne konto - powiadom administratorów):<br><b>Login</b>: Aleara<br><b>Hasło</b>: aleara<br><br>Nastepnie przez link "Dodaj" dodajemy nowe zgłoszenie. Pola z czerwoną gwiazdka są wymagane.<br>Należy pamiętać o wybraniu odpowiedniej kategorii zgłoszenia, lista poniżej.<ul><li><b>Błąd krytyczny</b> - błąd uniemożliwiający korzystanie z gry (biała strona z komunikatem, albo dziwne komunikaty po angielsku w samej grze)</li><li><b>Błąd gry</b> - błędne działanie gry, funkcji w grze. </li><li><b>Błąd w opisie/tekście</b> - literówki. </li><li><b>Propozycja funkcjonalności</b> - propozycje zmian w grze </li></ul>Wypełniamy pola "temat" oraz "opis" - czego błąd dotyczy. Pole "Kroki, by powtórzyć" jest informacją co należy zrobić aby powtórzyć błąd.<br>Pozostałe nie oznaczone gwiazdką pola mozna pominąć. Można załączać zrzuty ekranu. Im lepiej bedzie opisany problem, tym mniej czasu zajmie jego naprawa.';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'changes'):  echo '';  echo $this->_tpl_vars['Changesinfo'];  echo '<br /><ul';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo ' class="sword"';  endif;  echo '>';  unset($this->_sections['changes']);
$this->_sections['changes']['name'] = 'changes';
$this->_sections['changes']['loop'] = is_array($_loop=$this->_tpl_vars['Changedate']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['changes']['show'] = true;
$this->_sections['changes']['max'] = $this->_sections['changes']['loop'];
$this->_sections['changes']['step'] = 1;
$this->_sections['changes']['start'] = $this->_sections['changes']['step'] > 0 ? 0 : $this->_sections['changes']['loop']-1;
if ($this->_sections['changes']['show']) {
    $this->_sections['changes']['total'] = $this->_sections['changes']['loop'];
    if ($this->_sections['changes']['total'] == 0)
        $this->_sections['changes']['show'] = false;
} else
    $this->_sections['changes']['total'] = 0;
if ($this->_sections['changes']['show']):

            for ($this->_sections['changes']['index'] = $this->_sections['changes']['start'], $this->_sections['changes']['iteration'] = 1;
                 $this->_sections['changes']['iteration'] <= $this->_sections['changes']['total'];
                 $this->_sections['changes']['index'] += $this->_sections['changes']['step'], $this->_sections['changes']['iteration']++):
$this->_sections['changes']['rownum'] = $this->_sections['changes']['iteration'];
$this->_sections['changes']['index_prev'] = $this->_sections['changes']['index'] - $this->_sections['changes']['step'];
$this->_sections['changes']['index_next'] = $this->_sections['changes']['index'] + $this->_sections['changes']['step'];
$this->_sections['changes']['first']      = ($this->_sections['changes']['iteration'] == 1);
$this->_sections['changes']['last']       = ($this->_sections['changes']['iteration'] == $this->_sections['changes']['total']);
 echo '<li>';  echo $this->_tpl_vars['Changedate'][$this->_sections['changes']['index']];  echo ' ';  echo $this->_tpl_vars['Changeauthor'][$this->_sections['changes']['index']];  echo '<br />';  echo $this->_tpl_vars['Changeloc'];  echo ': ';  echo $this->_tpl_vars['Changelocation'][$this->_sections['changes']['index']];  echo '<br />';  echo $this->_tpl_vars['Changetext'][$this->_sections['changes']['index']];  echo '<br /><br /></li>';  endfor; endif;  echo '</ul>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'options'):  echo '';  echo $this->_tpl_vars['Toptions'];  echo '<br /><br /><form method="post" action="account.php?view=options&amp;step=options"><input type="checkbox" name="battleloga" ';  echo $this->_tpl_vars['Checked'];  echo ' /> ';  echo @T_BATTLELOGA;  echo '<br /><input type="checkbox" name="battlelogd" ';  echo $this->_tpl_vars['Checked2'];  echo ' /> ';  echo @T_BATTLELOGD;  echo '<br /><input type="checkbox" name="graphbar" ';  echo $this->_tpl_vars['Checked3'];  echo ' /> ';  echo @T_GRAPHBAR;  echo '<br /><input type="checkbox" name="loginfo" ';  echo $this->_tpl_vars['Checked5'];  echo ' /> ';  echo @T_LOGINFO;  echo '<br /><input type="checkbox" name="mailinfo" ';  echo $this->_tpl_vars['Checked6'];  echo ' /> ';  echo @T_MAILINFO;  echo '<br /><br /><input type="checkbox" name="editor" ';  echo $this->_tpl_vars['Checked7'];  echo ' /> Edytory WYSIWYG (umożliwiają formatowanie tekstu i dodawanie grafik do profilu)<br /><input type="checkbox" name="overlib" ';  echo $this->_tpl_vars['Checked4'];  echo ' /> Rozwijena menu nawigacji<br /><br />Kolor nicku w tawernie:<input id="color" maxlength="6" size="6" type="text" name="color" value="';  echo $this->_tpl_vars['Color'];  echo '" /><div id="colorpicker"></div><script type="text/javascript">';  echo '
		$(\'#colorpicker\').ColorPicker({
		flat:true,
		color: \'#\'+$(\'#color\').val(),
	onSubmit: function(hsb, hex, rgb, el) {
		$(\'#color\').val(hex);
		}
		});
		';  echo '</script><input type="submit" value="';  echo $this->_tpl_vars['Anext'];  echo '" /></form><i>Aby zmienić kolor nicku w tawernie należy znaleźć odpowiedni kolor, skopiować kod koloru i wkleić w pole wyżej.</i><br><br><br>';  if ($this->_tpl_vars['Step'] == 'options'):  echo '';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'freeze'):  echo '';  echo $this->_tpl_vars['Freezeinfo'];  echo '<br /><br /><form method="post" action="account.php?view=freeze&amp;step=freeze">';  echo $this->_tpl_vars['Howmany'];  echo ': <input type="tezt" name="amount" size="5" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Afreeze2'];  echo '" /></form>';  if ($this->_tpl_vars['Step'] == 'freeze'):  echo '';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'lang'):  echo '';  echo $this->_tpl_vars['Langinfo'];  echo '<br /><br /><form method="post" action="account.php?view=lang&amp;step=lang">';  echo $this->_tpl_vars['Flang'];  echo ' <select name="mainlang">';  unset($this->_sections['account2']);
$this->_sections['account2']['name'] = 'account2';
$this->_sections['account2']['loop'] = is_array($_loop=$this->_tpl_vars['Lang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['account2']['show'] = true;
$this->_sections['account2']['max'] = $this->_sections['account2']['loop'];
$this->_sections['account2']['step'] = 1;
$this->_sections['account2']['start'] = $this->_sections['account2']['step'] > 0 ? 0 : $this->_sections['account2']['loop']-1;
if ($this->_sections['account2']['show']) {
    $this->_sections['account2']['total'] = $this->_sections['account2']['loop'];
    if ($this->_sections['account2']['total'] == 0)
        $this->_sections['account2']['show'] = false;
} else
    $this->_sections['account2']['total'] = 0;
if ($this->_sections['account2']['show']):

            for ($this->_sections['account2']['index'] = $this->_sections['account2']['start'], $this->_sections['account2']['iteration'] = 1;
                 $this->_sections['account2']['iteration'] <= $this->_sections['account2']['total'];
                 $this->_sections['account2']['index'] += $this->_sections['account2']['step'], $this->_sections['account2']['iteration']++):
$this->_sections['account2']['rownum'] = $this->_sections['account2']['iteration'];
$this->_sections['account2']['index_prev'] = $this->_sections['account2']['index'] - $this->_sections['account2']['step'];
$this->_sections['account2']['index_next'] = $this->_sections['account2']['index'] + $this->_sections['account2']['step'];
$this->_sections['account2']['first']      = ($this->_sections['account2']['iteration'] == 1);
$this->_sections['account2']['last']       = ($this->_sections['account2']['iteration'] == $this->_sections['account2']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Lang'][$this->_sections['account2']['index']];  echo '">';  echo $this->_tpl_vars['Lang'][$this->_sections['account2']['index']];  echo '</option>';  endfor; endif;  echo '</select><br />';  echo $this->_tpl_vars['Slang'];  echo ' <select name="seclang">';  unset($this->_sections['account3']);
$this->_sections['account3']['name'] = 'account3';
$this->_sections['account3']['loop'] = is_array($_loop=$this->_tpl_vars['Lang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['account3']['show'] = true;
$this->_sections['account3']['max'] = $this->_sections['account3']['loop'];
$this->_sections['account3']['step'] = 1;
$this->_sections['account3']['start'] = $this->_sections['account3']['step'] > 0 ? 0 : $this->_sections['account3']['loop']-1;
if ($this->_sections['account3']['show']) {
    $this->_sections['account3']['total'] = $this->_sections['account3']['loop'];
    if ($this->_sections['account3']['total'] == 0)
        $this->_sections['account3']['show'] = false;
} else
    $this->_sections['account3']['total'] = 0;
if ($this->_sections['account3']['show']):

            for ($this->_sections['account3']['index'] = $this->_sections['account3']['start'], $this->_sections['account3']['iteration'] = 1;
                 $this->_sections['account3']['iteration'] <= $this->_sections['account3']['total'];
                 $this->_sections['account3']['index'] += $this->_sections['account3']['step'], $this->_sections['account3']['iteration']++):
$this->_sections['account3']['rownum'] = $this->_sections['account3']['iteration'];
$this->_sections['account3']['index_prev'] = $this->_sections['account3']['index'] - $this->_sections['account3']['step'];
$this->_sections['account3']['index_next'] = $this->_sections['account3']['index'] + $this->_sections['account3']['step'];
$this->_sections['account3']['first']      = ($this->_sections['account3']['iteration'] == 1);
$this->_sections['account3']['last']       = ($this->_sections['account3']['iteration'] == $this->_sections['account3']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Lang'][$this->_sections['account3']['index']];  echo '">';  echo $this->_tpl_vars['Lang'][$this->_sections['account3']['index']];  echo '</option>';  endfor; endif;  echo '</select><br /><input type="submit" value="';  echo $this->_tpl_vars['Aselect'];  echo '" /></form>';  if ($this->_tpl_vars['Step'] == 'lang'):  echo '';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'reset'):  echo '';  echo $this->_tpl_vars['Resetinfo'];  echo '?<ul';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo ' class="sword"';  endif;  echo '><li><a href="account.php?view=reset&amp;step=make">';  echo $this->_tpl_vars['Yes'];  echo '</a></li><li><a href="account.php">';  echo $this->_tpl_vars['No'];  echo '</a></li></ul>';  if ($this->_tpl_vars['Step'] == 'make'):  echo '';  echo $this->_tpl_vars['Resetselect'];  echo '<br />';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'resetfabularny2'):  echo 'Opcja resetu fabularnego została wprowadzona tylko i wyłącznie z powodu wprowadzenia nowej fabuły w trakcie trwania ery. Jest to jednorazowa opcja. Podczas wykonywania resetu nic nie tracisz. Resetuje jedynie Rasę, klasę i podklasę. Czy chcesz wykonać reset?<ul><li><a href="account.php?view=resetfabularny&amp;step=make">';  echo $this->_tpl_vars['Yes'];  echo '</a></li><li><a href="account.php">';  echo $this->_tpl_vars['No'];  echo '</a></li></ul>';  if ($this->_tpl_vars['Step'] == 'make'):  echo '';  echo $this->_tpl_vars['Resetselect'];  echo '<br />';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'avatar'):  echo '';  echo $this->_tpl_vars['Avatarinfo'];  echo '<br /><br />';  if ($this->_tpl_vars['Avatar'] != ""):  echo '<center><br /><br /><img alt="img_avatar" src="';  echo $this->_tpl_vars['Avatar'];  echo '" width="100" heigth="100"><form action="account.php?view=avatar&amp;step=usun" method="post"><input type="hidden" name="av" value="';  echo $this->_tpl_vars['Value'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Delete'];  echo '" /></form></center>';  endif;  echo '<form enctype="multipart/form-data" action="account.php?view=avatar&amp;step=dodaj" method="post"><input type="hidden" name="MAX_FILE_SIZE" value="102400" />';  echo $this->_tpl_vars['Afilename'];  echo ': <input name="plik" type="file" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Aselect'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'name'):  echo '<form method="post" action="account.php?view=name&amp;step=name"><input type="submit" value="';  echo $this->_tpl_vars['Change'];  echo '" /> ';  echo $this->_tpl_vars['Myname'];  echo ' <input type="text" name="name" value="';  echo $this->_tpl_vars['OldNick'];  echo '"/></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'pass'):  echo '';  echo @PASS_INFO;  echo '<br /><form method="post" action="account.php?view=pass&amp;step=cp"><table><tr><td>';  echo @OLD_PASS;  echo ':</td><td><input type="password" name="cp" /></td></tr><tr><td>';  echo @NEW_PASS;  echo ':</td><td><input type="password" name="np" /></td></tr><tr><td colspan=2 align=center><input type="submit" value="';  echo @CHANGE;  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'profile'):  echo '';  if ($this->_tpl_vars['Step'] == ""):  echo '';  echo $this->_tpl_vars['Profileinfo'];  echo '<br /><br />';  echo $this->_tpl_vars['Message'];  echo '<br /><br /><a  href="account.php?view=profile&amp;step=addtab">';  echo $this->_tpl_vars['Addtab'];  echo '</a><br /><br /><br /><table width=\'100%\'><tr><td width=\'35%\' ><b>Nazwa zakładki:</b></td><td width=\'15%\' ><b> Kolejność:</b></td><td width=\'50%\' ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Opcje:</b></td></tr></table><table width=\'100%\'>';  unset($this->_sections['int']);
$this->_sections['int']['name'] = 'int';
$this->_sections['int']['loop'] = is_array($_loop=$this->_tpl_vars['Tab']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['int']['show'] = true;
$this->_sections['int']['max'] = $this->_sections['int']['loop'];
$this->_sections['int']['step'] = 1;
$this->_sections['int']['start'] = $this->_sections['int']['step'] > 0 ? 0 : $this->_sections['int']['loop']-1;
if ($this->_sections['int']['show']) {
    $this->_sections['int']['total'] = $this->_sections['int']['loop'];
    if ($this->_sections['int']['total'] == 0)
        $this->_sections['int']['show'] = false;
} else
    $this->_sections['int']['total'] = 0;
if ($this->_sections['int']['show']):

            for ($this->_sections['int']['index'] = $this->_sections['int']['start'], $this->_sections['int']['iteration'] = 1;
                 $this->_sections['int']['iteration'] <= $this->_sections['int']['total'];
                 $this->_sections['int']['index'] += $this->_sections['int']['step'], $this->_sections['int']['iteration']++):
$this->_sections['int']['rownum'] = $this->_sections['int']['iteration'];
$this->_sections['int']['index_prev'] = $this->_sections['int']['index'] - $this->_sections['int']['step'];
$this->_sections['int']['index_next'] = $this->_sections['int']['index'] + $this->_sections['int']['step'];
$this->_sections['int']['first']      = ($this->_sections['int']['iteration'] == 1);
$this->_sections['int']['last']       = ($this->_sections['int']['iteration'] == $this->_sections['int']['total']);
 echo '<tr><td width=\'40%\' > ';  echo $this->_tpl_vars['Tab'][$this->_sections['int']['index']];  echo '</td><td width=\'10%\' > ';  echo $this->_tpl_vars['Nr'][$this->_sections['int']['index']];  echo '</td> <td><a  href="account.php?view=profile&amp;show=';  echo $this->_tpl_vars['Tabid'][$this->_sections['int']['index']];  echo '">';  echo $this->_tpl_vars['Show'];  echo '</a> | <a  href="account.php?view=profile&amp;step=edit&amp;tab=';  echo $this->_tpl_vars['Tabid'][$this->_sections['int']['index']];  echo '">';  echo $this->_tpl_vars['Edit'];  echo '</a> | <a  href="account.php?view=profile&amp;step=del&amp;tab=';  echo $this->_tpl_vars['Tabid'][$this->_sections['int']['index']];  echo '">';  echo $this->_tpl_vars['Delete'];  echo '</a></td> </tr>';  endfor; endif;  echo '</table><br /><b>';  echo $this->_tpl_vars['Tabname'];  echo '</b><br />';  echo $this->_tpl_vars['Profil'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'addtab'):  echo '<form method="post" action="account.php?view=profile&amp;step=add">Nazwa: <input type="text" name="tabname" />Kolejność: <input type="text" name="tabnr" /><br /><textarea name="newprofile"  rows="20" cols="60"></textarea><br /><input  type="submit" value="OK" /></form>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'edit'):  echo '<form method="post" action="account.php?view=profile&amp;step=edited">Nazwa: <input type="text" name="tabname" value="';  echo $this->_tpl_vars['Tab'];  echo '" />Kolejność: <input type="text" name="tabnr" value="';  echo $this->_tpl_vars['Nr'];  echo '" /><br /><textarea name="newprofile"  rows="20" cols="60">';  echo $this->_tpl_vars['Editable'];  echo '</textarea><br /><input  type="hidden" name="tabid" value="';  echo $this->_tpl_vars['Tabid'];  echo '" /><input  type="submit" value="OK" /></form>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'profile'):  echo '<table align="center"><tr><td>';  echo $this->_tpl_vars['Newprofile2'];  echo ':</td><td></td></tr><tr><td><div class="overflow">';  echo $this->_tpl_vars['Profile'];  echo '</div></td><tr></table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'eci'):  echo '<form method="post" action="account.php?view=eci&amp;step=ce"><table><tr><td>';  echo $this->_tpl_vars['Oldemail'];  echo ':</td><td><input type="text" name="ce" /></td></tr><tr><td>';  echo $this->_tpl_vars['Newemail'];  echo ':</td><td><input type="text" name="ne" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Change'];  echo '" /></td></tr></table></form><form method="post" action="account.php?view=eci&amp;step=gg"><table><tr><td>';  echo $this->_tpl_vars['Tcommunicator'];  echo ':</td><td><select name="communicator">';  unset($this->_sections['acccom']);
$this->_sections['acccom']['name'] = 'acccom';
$this->_sections['acccom']['loop'] = is_array($_loop=$this->_tpl_vars['Tcom']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['acccom']['show'] = true;
$this->_sections['acccom']['max'] = $this->_sections['acccom']['loop'];
$this->_sections['acccom']['step'] = 1;
$this->_sections['acccom']['start'] = $this->_sections['acccom']['step'] > 0 ? 0 : $this->_sections['acccom']['loop']-1;
if ($this->_sections['acccom']['show']) {
    $this->_sections['acccom']['total'] = $this->_sections['acccom']['loop'];
    if ($this->_sections['acccom']['total'] == 0)
        $this->_sections['acccom']['show'] = false;
} else
    $this->_sections['acccom']['total'] = 0;
if ($this->_sections['acccom']['show']):

            for ($this->_sections['acccom']['index'] = $this->_sections['acccom']['start'], $this->_sections['acccom']['iteration'] = 1;
                 $this->_sections['acccom']['iteration'] <= $this->_sections['acccom']['total'];
                 $this->_sections['acccom']['index'] += $this->_sections['acccom']['step'], $this->_sections['acccom']['iteration']++):
$this->_sections['acccom']['rownum'] = $this->_sections['acccom']['iteration'];
$this->_sections['acccom']['index_prev'] = $this->_sections['acccom']['index'] - $this->_sections['acccom']['step'];
$this->_sections['acccom']['index_next'] = $this->_sections['acccom']['index'] + $this->_sections['acccom']['step'];
$this->_sections['acccom']['first']      = ($this->_sections['acccom']['iteration'] == 1);
$this->_sections['acccom']['last']       = ($this->_sections['acccom']['iteration'] == $this->_sections['acccom']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Comm'][$this->_sections['acccom']['index']];  echo '">';  echo $this->_tpl_vars['Tcom'][$this->_sections['acccom']['index']];  echo '</option>';  endfor; endif;  echo '</select></td></tr><tr><td>';  echo $this->_tpl_vars['Newgg'];  echo ':</td><td><input type="text" name="gg" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Change'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'style'):  echo '';  if ($this->_tpl_vars['Layoutname'] != ''):  echo 'Wybierz swój wygląd graficzny gry:<br><br><li><a href="">Zmień Szablon Graficzny [zawieszona opcja]</a><br></li>';  endif;  echo '<br /><br /><form method="post" action="account.php?view=style&amp;step=graphstyle"><table><tr><td><input type="checkbox" name="graphstyle" id="graphfree" ';  echo $this->_tpl_vars['Checked'];  echo ' /><label for="graphfree"> ';  echo $this->_tpl_vars['Graphless'];  echo '</label></td></tr><tr><td><input type="submit" value="';  echo $this->_tpl_vars['Sselect'];  echo '" /></td></tr></table></form>';  if ($this->_tpl_vars['Step'] == 'style' || $this->_tpl_vars['Step'] == 'graph' || $this->_tpl_vars['Step'] == 'graphstyle'):  echo '';  echo $this->_tpl_vars['Youchange'];  echo '. (<a href="account.php">';  echo $this->_tpl_vars['Refresh'];  echo '</a>)';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'description'):  echo '<form method="post" action="account.php?view=description&amp;step=change"><table><tr><td>';  echo $this->_tpl_vars['opistext'];  echo '</td></tr><tr><td align="center">';  echo $this->_tpl_vars['Newpodpis'];  echo '<br /> <input type="text" name="opis" value="';  echo $this->_tpl_vars['Opis'];  echo '" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Change'];  echo '" /></td></tr></table></form>';  if ($this->_tpl_vars['Step'] == 'change'):  echo '<table><tr><td>';  echo $this->_tpl_vars['Newopis2'];  echo ':</td><td></td></tr><tr><td><b>';  echo $this->_tpl_vars['opis'];  echo '</b></td><tr></table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'gametype'):  echo 'Wybierz typ swojego konta:<br><br><b>Gracz mechaniczny</b><br><br><img src="images/misc/mech.jpg" style="float: left">Nie obchodzi cię fabuła, a widok tekstu dłuższego niż kilka zdań przyprawia cię o dreszcze. Chcesz rywalizować na posągach, wbijać poziomy i walczyć o miano bohatera krainy, albo najlepszego rzemieślnika w historii. Pozostali niech sobie klimacą do woli. Po co ta cała otoczka i oprawa bez gry mechanicznej? To nie forum.<br><a href="account.php?view=gametype&step=M">Zostań graczem mechanicznym</a><br><br><br><br><hr><br><br><b>Gracz mechaniczno-fabularny</b><br><br><img src="images/misc/mechfab.jpg" style="float: left">Lubisz wbijać poziomy i walczyć na arenie, jednak czasem też chcesz popisać się swoją wybraźnią i odgrywasz swoją postać w karczmie z innymi osobami lub prowadzisz prywatną kampanię z inną osobą na poczcie. Jesteś uniwersalny, starasz sie o miano bohatera krainy i jednocześnie potrafisz odgrywać kogoś zupełnie innego.<br><a href="account.php?view=gametype&step=MF">Zostań graczem mechaniczno-fabularnym</a><br><br><br><br><hr><br><br><b>Gracz fabularny</b><br><br><img src="images/misc/fab.jpg" style="float: left">Zupełnie nie obchodzi cie mechanika, a od klikania w linki boli cię palec. Lubisz za to popisać z innymi osobami w karczmie, wczuwając sie w swoją postać. Sesje fabularne w bramie przygód nie mają przed tobą tajemnic. Potrafisz tworzyć wspaniałe opowieści, które przeżywasz razem w gronie swoich znajomych. <br><a href="account.php?view=gametype&step=F">Zostań graczem fabularnym</a><br>';  endif;  echo ''; ?>

</br></br>