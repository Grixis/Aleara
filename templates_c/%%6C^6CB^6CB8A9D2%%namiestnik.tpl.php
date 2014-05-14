<?php /* Smarty version 2.6.16, created on 2013-02-13 13:38:52
         compiled from namiestnik.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'wordwrap', 'namiestnik.tpl', 181, false),)), $this); ?>
<?php echo '';  if ($this->_tpl_vars['View'] == ""):  echo '<p>Witaj w swoim panelu.</p>';  echo '<table align="center" width="100%"><tr><ul><li><a href="namiestnik.php?view=pary">Udziel ślubu.</a></li><li><a href="addkroniki.php">Dodaj wpis do kronik głównych.</a></li><li><a href="namiestnik.php?view=newsy">Dodaj intro newsa do nawigacji.</a></li><li><a href="namiestnik.php?view=kroniki">Dodaj intro kroniki do nawigacji.</a></li><li><a href="addupdate.php">Dodaj newsa głównego na tablicę wieści.</a></li><li><a href="namiestnik.php?view=addtext">Sprawdz/Odrzuć/Zatwierdź oczekujące plotki.</a></li><li><a href="namiestnik.php?view=poll">Dodaj ankietę do hali zgromadzeń.</a></li><li><a href="namiestnik.php?view=censorship">Edytuj listę słów objętych cenzorem.</a></li><li><a href="namiestnik.php?view=jail">Wyślij gracza do lochu.</a></li><li><a href="namiestnik.php?view=jailbreak">Wypuść gracza z lochu.</a></li><li><a href="namiestnik.php?view=changenick">Edytuj gracza [imię, avatar, ranga].</a></li><li><a href="namiestnik.php?view=donator">Dodaj imię gracza do alei zasłużonych.</a></li><li><a href="namiestnik.php?view=poczta">Wyślij wiadomość na pocztę całej krainie.</a></li><li><a href="ip.php">Sprawdz ip lub znacznik przegladarki gracza.</a></li><li><a href="namiestnik.php?view=ban">Zbanuj/Odbanuj gracza.</a></li><li><a href="namiestnik.php?view=permisions">Nadaj pozwolenie graczowi</a></li><li><a href="namiestnik.php?view=multis">Zobacz/edytuj listę dozwolonych multikont</a></ul><br><br><legend><b>Komendy na czatach:</b></legend><table><tr><td>Komenda na czyszczenie czatu:</td><td> !clear</td></tr><tr><td>Komenda na banowanie gracza:</td><td> !ban ID ILOŚĆRESETÓW POWÓD</td></tr><tr><td>Komenda na odbanowanie gracza:</td><td> !unban ID</td></tr><tr><td>Komenda na bota:</td><td> !bot NICKBOTA TEKST</td></tr><tr><td>Komenda na wyrzucenie z karczmy(zmiana strony, tylko piwnica):</td><td> !kick ID</td></tr><tr><td>Komenda na zapisanie sesji(zapisuje karczmę od momentu wyczyszczenia do pliku, tylko izba, niestabilne):</td><td> !save</td></tr></table></table>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'innarchive'):  echo '';  if ($this->_tpl_vars['Text'][0] != ""):  echo '';  unset($this->_sections['player']);
$this->_sections['player']['name'] = 'player';
$this->_sections['player']['loop'] = is_array($_loop=$this->_tpl_vars['Text']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['player']['show'] = true;
$this->_sections['player']['max'] = $this->_sections['player']['loop'];
$this->_sections['player']['step'] = 1;
$this->_sections['player']['start'] = $this->_sections['player']['step'] > 0 ? 0 : $this->_sections['player']['loop']-1;
if ($this->_sections['player']['show']) {
    $this->_sections['player']['total'] = $this->_sections['player']['loop'];
    if ($this->_sections['player']['total'] == 0)
        $this->_sections['player']['show'] = false;
} else
    $this->_sections['player']['total'] = 0;
if ($this->_sections['player']['show']):

            for ($this->_sections['player']['index'] = $this->_sections['player']['start'], $this->_sections['player']['iteration'] = 1;
                 $this->_sections['player']['iteration'] <= $this->_sections['player']['total'];
                 $this->_sections['player']['index'] += $this->_sections['player']['step'], $this->_sections['player']['iteration']++):
$this->_sections['player']['rownum'] = $this->_sections['player']['iteration'];
$this->_sections['player']['index_prev'] = $this->_sections['player']['index'] - $this->_sections['player']['step'];
$this->_sections['player']['index_next'] = $this->_sections['player']['index'] + $this->_sections['player']['step'];
$this->_sections['player']['first']      = ($this->_sections['player']['iteration'] == 1);
$this->_sections['player']['last']       = ($this->_sections['player']['iteration'] == $this->_sections['player']['total']);
 echo '<b>';  echo $this->_tpl_vars['Author'][$this->_sections['player']['index']];  echo ' ';  echo $this->_tpl_vars['Cid'];  echo ':';  echo $this->_tpl_vars['Senderid'][$this->_sections['player']['index']];  echo '</b>: ';  echo $this->_tpl_vars['Text'][$this->_sections['player']['index']];  echo '<br />';  endfor; endif;  echo '';  endif;  echo '';  echo $this->_tpl_vars['Previous'];  echo ' ';  echo $this->_tpl_vars['Next'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'addreps'):  echo '<form method="post" action="namiestnik.php?view=addreps">';  echo @T_PLAYER_ID;  echo ': <input type="text" name="id"><br>';  echo @T_AMOUNT;  echo ': <input type="text" name="amount"><br>';  echo @T_DESC;  echo ': <textarea name="description" cols="30" rows="20"></textarea><br><input type="submit" value="';  echo @A_SEND;  echo '"></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'ban'):  echo '';  echo $this->_tpl_vars['Banlist'];  echo '<br /><form method="post" action="namiestnik.php?view=ban&amp;step=modify">';  echo $this->_tpl_vars['Banvalue'];  echo ': <input type="text" name="amount" /><br />';  echo $this->_tpl_vars['Banned'];  echo ': <select name="type"><option value="IP">';  echo $this->_tpl_vars['Banip'];  echo '</option><option value="mailadres">';  echo $this->_tpl_vars['Banemail'];  echo '</option><option value="nick">';  echo $this->_tpl_vars['Bannick'];  echo '</option><option value="ID">';  echo $this->_tpl_vars['Banid'];  echo '</option></select><br /><select name="action"><option value="ban">';  echo $this->_tpl_vars['Abanpl'];  echo '</option><option value="unban">';  echo $this->_tpl_vars['Aunban'];  echo '</option></select><br><input type="checkbox" name="browser" />Zablokuj przegladarke<br><br>Podczas logowania gra probuje zidentyfikowac przegladarke i zachowuje wpis w bazie danych. Zaznacz ten checkbox, aby utrudnic dostep do gry poprzez dana przegladarke. Prawdopodobnie bedziesz zmuszony powtorzyc czynnosc dla wszystkich przegladarek gracza. UWAGA! Ban ten jest ostateczny, nie da sie go usunac.<br><input type="submit" value="';  echo $this->_tpl_vars['Anext'];  echo '" /></form>';  unset($this->_sections['ban']);
$this->_sections['ban']['name'] = 'ban';
$this->_sections['ban']['loop'] = is_array($_loop=$this->_tpl_vars['Type']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ban']['show'] = true;
$this->_sections['ban']['max'] = $this->_sections['ban']['loop'];
$this->_sections['ban']['step'] = 1;
$this->_sections['ban']['start'] = $this->_sections['ban']['step'] > 0 ? 0 : $this->_sections['ban']['loop']-1;
if ($this->_sections['ban']['show']) {
    $this->_sections['ban']['total'] = $this->_sections['ban']['loop'];
    if ($this->_sections['ban']['total'] == 0)
        $this->_sections['ban']['show'] = false;
} else
    $this->_sections['ban']['total'] = 0;
if ($this->_sections['ban']['show']):

            for ($this->_sections['ban']['index'] = $this->_sections['ban']['start'], $this->_sections['ban']['iteration'] = 1;
                 $this->_sections['ban']['iteration'] <= $this->_sections['ban']['total'];
                 $this->_sections['ban']['index'] += $this->_sections['ban']['step'], $this->_sections['ban']['iteration']++):
$this->_sections['ban']['rownum'] = $this->_sections['ban']['iteration'];
$this->_sections['ban']['index_prev'] = $this->_sections['ban']['index'] - $this->_sections['ban']['step'];
$this->_sections['ban']['index_next'] = $this->_sections['ban']['index'] + $this->_sections['ban']['step'];
$this->_sections['ban']['first']      = ($this->_sections['ban']['iteration'] == 1);
$this->_sections['ban']['last']       = ($this->_sections['ban']['iteration'] == $this->_sections['ban']['total']);
 echo '<b>';  echo $this->_tpl_vars['Bantype'];  echo ':</b> ';  echo $this->_tpl_vars['Type'][$this->_sections['ban']['index']];  echo ' <b>';  echo $this->_tpl_vars['Banval'];  echo ':</b> ';  echo $this->_tpl_vars['Amount'][$this->_sections['ban']['index']];  echo '<br />';  endfor; endif;  echo '';  echo $this->_tpl_vars['Baninfo'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'permisions'):  echo '(W budowie)<br><br>Nadaj uprawnienia graczowi na posiadanie imienia lub avatara bądź też nietypowej rzeczy w profilu.<br><form action="namiestnik.php?view=permisions&amp;step=add" method="post"><input type="submit" value="Nadaj"> graczowi id: <input type="text" maxlength="4" name="pid" value="0"> pozwolenie na<br><textarea name="perm_text">Tu wpisz na co zezwalasz</textarea></form>Lista wydanych już zezwoleń:<br><table width="100%"><tr><th>ID gracza</th><th>Na co zezwolono</th><th>Data nadania</th></tr>';  unset($this->_sections['perm']);
$this->_sections['perm']['name'] = 'perm';
$this->_sections['perm']['loop'] = is_array($_loop=$this->_tpl_vars['Ids']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['perm']['show'] = true;
$this->_sections['perm']['max'] = $this->_sections['perm']['loop'];
$this->_sections['perm']['step'] = 1;
$this->_sections['perm']['start'] = $this->_sections['perm']['step'] > 0 ? 0 : $this->_sections['perm']['loop']-1;
if ($this->_sections['perm']['show']) {
    $this->_sections['perm']['total'] = $this->_sections['perm']['loop'];
    if ($this->_sections['perm']['total'] == 0)
        $this->_sections['perm']['show'] = false;
} else
    $this->_sections['perm']['total'] = 0;
if ($this->_sections['perm']['show']):

            for ($this->_sections['perm']['index'] = $this->_sections['perm']['start'], $this->_sections['perm']['iteration'] = 1;
                 $this->_sections['perm']['iteration'] <= $this->_sections['perm']['total'];
                 $this->_sections['perm']['index'] += $this->_sections['perm']['step'], $this->_sections['perm']['iteration']++):
$this->_sections['perm']['rownum'] = $this->_sections['perm']['iteration'];
$this->_sections['perm']['index_prev'] = $this->_sections['perm']['index'] - $this->_sections['perm']['step'];
$this->_sections['perm']['index_next'] = $this->_sections['perm']['index'] + $this->_sections['perm']['step'];
$this->_sections['perm']['first']      = ($this->_sections['perm']['iteration'] == 1);
$this->_sections['perm']['last']       = ($this->_sections['perm']['iteration'] == $this->_sections['perm']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Owner'][$this->_sections['perm']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Text'][$this->_sections['perm']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Date'][$this->_sections['perm']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'multis'):  echo '<a href="https://docs.google.com/spreadsheet/ccc?key=0Av5KBZy4LAIPdDF4Q1EwRTdfd2lXMWc3NlBtTmowd1E&usp=sharing">Edytuj arkusz</a><br><iframe width=\'500\' height=\'500\' frameborder=\'0\' src=\'https://docs.google.com/spreadsheet/pub?key=0Av5KBZy4LAIPdDF4Q1EwRTdfd2lXMWc3NlBtTmowd1E&output=html&widget=true\'></iframe>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'addtext'):  echo '';  echo $this->_tpl_vars['Admininfo'];  echo '<br />';  echo $this->_tpl_vars['Admininfo2'];  echo '<br />';  echo $this->_tpl_vars['Admininfo3'];  echo '<br />';  echo $this->_tpl_vars['Admininfo4'];  echo '<br /><br />';  echo $this->_tpl_vars['Admininfo5'];  echo ':<table width="100%">';  unset($this->_sections['staff2']);
$this->_sections['staff2']['name'] = 'staff2';
$this->_sections['staff2']['loop'] = is_array($_loop=$this->_tpl_vars['Ttitle']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['staff2']['show'] = true;
$this->_sections['staff2']['max'] = $this->_sections['staff2']['loop'];
$this->_sections['staff2']['step'] = 1;
$this->_sections['staff2']['start'] = $this->_sections['staff2']['step'] > 0 ? 0 : $this->_sections['staff2']['loop']-1;
if ($this->_sections['staff2']['show']) {
    $this->_sections['staff2']['total'] = $this->_sections['staff2']['loop'];
    if ($this->_sections['staff2']['total'] == 0)
        $this->_sections['staff2']['show'] = false;
} else
    $this->_sections['staff2']['total'] = 0;
if ($this->_sections['staff2']['show']):

            for ($this->_sections['staff2']['index'] = $this->_sections['staff2']['start'], $this->_sections['staff2']['iteration'] = 1;
                 $this->_sections['staff2']['iteration'] <= $this->_sections['staff2']['total'];
                 $this->_sections['staff2']['index'] += $this->_sections['staff2']['step'], $this->_sections['staff2']['iteration']++):
$this->_sections['staff2']['rownum'] = $this->_sections['staff2']['iteration'];
$this->_sections['staff2']['index_prev'] = $this->_sections['staff2']['index'] - $this->_sections['staff2']['step'];
$this->_sections['staff2']['index_next'] = $this->_sections['staff2']['index'] + $this->_sections['staff2']['step'];
$this->_sections['staff2']['first']      = ($this->_sections['staff2']['iteration'] == 1);
$this->_sections['staff2']['last']       = ($this->_sections['staff2']['iteration'] == $this->_sections['staff2']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Ttitle'][$this->_sections['staff2']['index']];  echo ' (';  echo $this->_tpl_vars['Tauthor2'];  echo ': ';  echo $this->_tpl_vars['Tauthor'][$this->_sections['staff2']['index']];  echo ')</td><td><a href="namiestnik.php?view=addtext&amp;action=modify&amp;text=';  echo $this->_tpl_vars['Tid'][$this->_sections['staff2']['index']];  echo '">';  echo $this->_tpl_vars['Amodify'];  echo '</a></td><td><a href="namiestnik.php?view=addtext&amp;action=add&amp;text=';  echo $this->_tpl_vars['Tid'][$this->_sections['staff2']['index']];  echo '">';  echo $this->_tpl_vars['Aadd'];  echo '</a></td><td><a href="namiestnik.php?view=addtext&amp;action=delete&amp;text=';  echo $this->_tpl_vars['Tid'][$this->_sections['staff2']['index']];  echo '">';  echo $this->_tpl_vars['Adelete'];  echo '</a></td></tr>';  endfor; endif;  echo '</table>';  if ($this->_tpl_vars['Action'] == 'modify'):  echo '<form method="post" action="namiestnik.php?view=addtext&amp;action=modify&amp;text=';  echo $this->_tpl_vars['Tid'];  echo '">';  echo $this->_tpl_vars['Ttitle2'];  echo ': <input type="text" name="ttitle" value="';  echo $this->_tpl_vars['Ttitle'];  echo '" /><br />';  echo $this->_tpl_vars['Tbody2'];  echo ': <br /><textarea name="body" rows="30" cols="60">';  echo $this->_tpl_vars['Tbody'];  echo '</textarea><br /><input type="hidden" name="tid" value="';  echo $this->_tpl_vars['Tid'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Achange'];  echo '" /></form>';  endif;  echo '';  endif;  echo '';  if ($_GET['view'] == 'bugreport'):  echo '';  if ($_GET['step'] != ""):  echo '';  if ($this->_tpl_vars['Bug'][6] == '0'):  echo '<form method="post" action=""><input type="hidden" name="programmer" value=1 /><input type="submit" value="';  echo @BUG_REPAIR;  echo '" /></form>';  echo $this->_tpl_vars['BugMessage'];  echo '';  else:  echo '<form method="post" action=""><input type="hidden" name="programmer" value=0 /><input type="submit" value="';  echo @BUG_LEAVE;  echo '" /></form>';  echo $this->_tpl_vars['BugMessage'];  echo '<p>';  echo @BUG_PROGRAMMER;  echo ' <b>';  echo $this->_tpl_vars['Programmer'];  echo '</b></p>';  endif;  echo '<b>';  echo @BUG_NAME;  echo ':</b> ';  echo $this->_tpl_vars['Bug'][2];  echo '<br /><b>';  echo @BUG_TYPE;  echo ':</b> ';  echo $this->_tpl_vars['BugType'];  echo '<br /><b>';  echo @BUG_LOC;  echo ':</b> ';  echo $this->_tpl_vars['Bug'][4];  echo '<br /><b>';  echo @BUG_DESC;  echo ':</b> ';  echo $this->_tpl_vars['Bug'][5];  echo '<br /><form method="post" action="namiestnik.php?view=bugreport&amp;step=';  echo $_GET['step'];  echo '"  onsubmit="if (this.bugcomment.value==\'\') ';  echo '{';  echo ' return confirm(\'';  echo @EMPTY_COMMENT;  echo '\') } else ';  echo '{';  echo ' return true; }"><b>';  echo @BUG_ACTIONS;  echo ':</b> <select name="actions">';  unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['Options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<option value="';  echo $this->_tpl_vars['Actions'][$this->_sections['k']['index']];  echo '">';  echo $this->_tpl_vars['Options'][$this->_sections['k']['index']];  echo '</option>';  endfor; endif;  echo '</select><br /><b>';  echo @BUG_COMMENT;  echo ':</b> <textarea name="bugcomment" rows="5" cols="50"></textarea><br /><br /><input type="submit" value="';  echo @A_MAKE;  echo '" /></form>';  else:  echo '<table align="center" width="100%"><tr><th width="5%">';  echo @BUG_ID;  echo '</th><th width="10%">';  echo @BUG_REPORTER;  echo '</th><th width="15%">';  echo @BUG_TYPE;  echo '</th><th width="30%">';  echo @BUG_LOC;  echo '</th><th width="40%">';  echo @BUG_NAME;  echo '</th></tr>';  unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['Bugs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<tr ';  if ($this->_tpl_vars['Bugs'][$this->_sections['k']['index']][5] != '0'):  echo 'class="bugrepair"';  endif;  echo '><td width="5%" align="center"><a ';  if ($this->_tpl_vars['Bugs'][$this->_sections['k']['index']][5] != '0'):  echo 'class="bugrepair" ';  endif;  echo 'href="namiestnik.php?view=bugreport&amp;step=';  echo $this->_tpl_vars['Bugs'][$this->_sections['k']['index']][0];  echo '">';  echo $this->_tpl_vars['Bugs'][$this->_sections['k']['index']][0];  echo '</td><td width="10%" align="center">';  echo $this->_tpl_vars['Bugs'][$this->_sections['k']['index']][1];  echo '</td><td width="15%" align="center">';  if ($this->_tpl_vars['Bugs'][$this->_sections['k']['index']][3] == 'text'):  echo '';  echo @BUG_TEXT;  echo '';  else:  echo '';  echo @BUG_CODE;  echo '';  endif;  echo '</td><td width="30%" align="center">';  echo ((is_array($_tmp=$this->_tpl_vars['Bugs'][$this->_sections['k']['index']][4])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 25, "\n", true) : smarty_modifier_wordwrap($_tmp, 25, "\n", true));  echo '</td><td width="40%" align="center">';  echo ((is_array($_tmp=$this->_tpl_vars['Bugs'][$this->_sections['k']['index']][2])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 25, "\n", true) : smarty_modifier_wordwrap($_tmp, 25, "\n", true));  echo '</td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'pary'):  echo '<form method="post" action="namiestnik.php?view=pary&step=add">ID Kobiety: <input type="text" name="prisoner"><br>ID Mężczyzny: <input type="text" name="prisonerp"><br>Przyczyna: <textarea name="verdict"></textarea><br>Koszt rozwodu: <input type="text" name="cost"><br><input type="submit" value="Dodaj"></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'banmail'):  echo '';  echo $this->_tpl_vars['Blocklist'];  echo '<br />';  unset($this->_sections['banmail']);
$this->_sections['banmail']['name'] = 'banmail';
$this->_sections['banmail']['loop'] = is_array($_loop=$this->_tpl_vars['List1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['banmail']['show'] = true;
$this->_sections['banmail']['max'] = $this->_sections['banmail']['loop'];
$this->_sections['banmail']['step'] = 1;
$this->_sections['banmail']['start'] = $this->_sections['banmail']['step'] > 0 ? 0 : $this->_sections['banmail']['loop']-1;
if ($this->_sections['banmail']['show']) {
    $this->_sections['banmail']['total'] = $this->_sections['banmail']['loop'];
    if ($this->_sections['banmail']['total'] == 0)
        $this->_sections['banmail']['show'] = false;
} else
    $this->_sections['banmail']['total'] = 0;
if ($this->_sections['banmail']['show']):

            for ($this->_sections['banmail']['index'] = $this->_sections['banmail']['start'], $this->_sections['banmail']['iteration'] = 1;
                 $this->_sections['banmail']['iteration'] <= $this->_sections['banmail']['total'];
                 $this->_sections['banmail']['index'] += $this->_sections['banmail']['step'], $this->_sections['banmail']['iteration']++):
$this->_sections['banmail']['rownum'] = $this->_sections['banmail']['iteration'];
$this->_sections['banmail']['index_prev'] = $this->_sections['banmail']['index'] - $this->_sections['banmail']['step'];
$this->_sections['banmail']['index_next'] = $this->_sections['banmail']['index'] + $this->_sections['banmail']['step'];
$this->_sections['banmail']['first']      = ($this->_sections['banmail']['iteration'] == 1);
$this->_sections['banmail']['last']       = ($this->_sections['banmail']['iteration'] == $this->_sections['banmail']['total']);
 echo 'ID ';  echo $this->_tpl_vars['List1'][$this->_sections['banmail']['index']];  echo '<br />';  endfor; endif;  echo '<form method="post" action="namiestnik.php?view=banmail&amp;step=mail"><select name="mail"><option value="blok">';  echo $this->_tpl_vars['Ablock'];  echo '</option><option value="odblok">';  echo $this->_tpl_vars['Aunblock'];  echo '</option></select>';  echo $this->_tpl_vars['Mailid'];  echo ' <input type="text" name="mail_id" size="5" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Amake'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'playerquest'):  echo '<form method="post" action="namiestnik.php?view=playerquest&amp;step=add"><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /> ';  echo $this->_tpl_vars['Addplayer'];  echo ' <input type="text" name="pid" size="5" /> ';  echo $this->_tpl_vars['Toquest'];  echo ' <input type="text" name="qid" size="5" />.</form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'innarchive'):  echo 'Już być chciał(a) Ni ma, ukradli archiwum ;)';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'changelog'):  echo '';  echo $this->_tpl_vars['Changeinfo'];  echo '<br /><br /><form method="post" action="namiestnik.php?view=changelog&amp;step=add">';  echo $this->_tpl_vars['Changelocation'];  echo ': <input type="text" name="location" /><br />';  echo $this->_tpl_vars['Changetext'];  echo ': <textarea name="changetext" rows="5" cols="30"></textarea><br /><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'logs'):  echo '';  echo $this->_tpl_vars['Logsinfo'];  echo '<br /><br /><table align="center" width="100%"><tr><td align="center">';  echo $this->_tpl_vars['Lowner'];  echo '</td><td align="center">';  echo $this->_tpl_vars['Ltext'];  echo '</td></tr>';  unset($this->_sections['logs']);
$this->_sections['logs']['name'] = 'logs';
$this->_sections['logs']['loop'] = is_array($_loop=$this->_tpl_vars['Aowner']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['logs']['show'] = true;
$this->_sections['logs']['max'] = $this->_sections['logs']['loop'];
$this->_sections['logs']['step'] = 1;
$this->_sections['logs']['start'] = $this->_sections['logs']['step'] > 0 ? 0 : $this->_sections['logs']['loop']-1;
if ($this->_sections['logs']['show']) {
    $this->_sections['logs']['total'] = $this->_sections['logs']['loop'];
    if ($this->_sections['logs']['total'] == 0)
        $this->_sections['logs']['show'] = false;
} else
    $this->_sections['logs']['total'] = 0;
if ($this->_sections['logs']['show']):

            for ($this->_sections['logs']['index'] = $this->_sections['logs']['start'], $this->_sections['logs']['iteration'] = 1;
                 $this->_sections['logs']['iteration'] <= $this->_sections['logs']['total'];
                 $this->_sections['logs']['index'] += $this->_sections['logs']['step'], $this->_sections['logs']['iteration']++):
$this->_sections['logs']['rownum'] = $this->_sections['logs']['iteration'];
$this->_sections['logs']['index_prev'] = $this->_sections['logs']['index'] - $this->_sections['logs']['step'];
$this->_sections['logs']['index_next'] = $this->_sections['logs']['index'] + $this->_sections['logs']['step'];
$this->_sections['logs']['first']      = ($this->_sections['logs']['iteration'] == 1);
$this->_sections['logs']['last']       = ($this->_sections['logs']['iteration'] == $this->_sections['logs']['total']);
 echo '<tr><td align="center">';  echo $this->_tpl_vars['Aowner'][$this->_sections['logs']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Alog'][$this->_sections['logs']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table><br />';  echo $this->_tpl_vars['Aprevious'];  echo ' ';  echo $this->_tpl_vars['Anext'];  echo '<br /><br /><form method="post" action="namiestnik.php?view=logs&amp;step=clear"><input type="submit" value="';  echo $this->_tpl_vars['Lclear'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'meta'):  echo '';  echo $this->_tpl_vars['Metainfo'];  echo '<form method="post" action="namiestnik.php?view=meta&amp;step=modify">Meta keywords (';  echo $this->_tpl_vars['Metakey'];  echo '): <input type="text" name="metakey" size="30"/><br />Meta description (';  echo $this->_tpl_vars['Metadesc'];  echo '): <input type="text" name="metadesc" size="40" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'forums'):  echo '';  echo $this->_tpl_vars['Catlist'];  echo '<br />';  unset($this->_sections['forum']);
$this->_sections['forum']['name'] = 'forum';
$this->_sections['forum']['loop'] = is_array($_loop=$this->_tpl_vars['Catname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['forum']['show'] = true;
$this->_sections['forum']['max'] = $this->_sections['forum']['loop'];
$this->_sections['forum']['step'] = 1;
$this->_sections['forum']['start'] = $this->_sections['forum']['step'] > 0 ? 0 : $this->_sections['forum']['loop']-1;
if ($this->_sections['forum']['show']) {
    $this->_sections['forum']['total'] = $this->_sections['forum']['loop'];
    if ($this->_sections['forum']['total'] == 0)
        $this->_sections['forum']['show'] = false;
} else
    $this->_sections['forum']['total'] = 0;
if ($this->_sections['forum']['show']):

            for ($this->_sections['forum']['index'] = $this->_sections['forum']['start'], $this->_sections['forum']['iteration'] = 1;
                 $this->_sections['forum']['iteration'] <= $this->_sections['forum']['total'];
                 $this->_sections['forum']['index'] += $this->_sections['forum']['step'], $this->_sections['forum']['iteration']++):
$this->_sections['forum']['rownum'] = $this->_sections['forum']['iteration'];
$this->_sections['forum']['index_prev'] = $this->_sections['forum']['index'] - $this->_sections['forum']['step'];
$this->_sections['forum']['index_next'] = $this->_sections['forum']['index'] + $this->_sections['forum']['step'];
$this->_sections['forum']['first']      = ($this->_sections['forum']['iteration'] == 1);
$this->_sections['forum']['last']       = ($this->_sections['forum']['iteration'] == $this->_sections['forum']['total']);
 echo '<a href="namiestnik.php?view=forums&amp;id=';  echo $this->_tpl_vars['Catid'][$this->_sections['forum']['index']];  echo '">';  echo $this->_tpl_vars['Catname'][$this->_sections['forum']['index']];  echo '</a><br />';  endfor; endif;  echo '<br /><br /><form method=post action="namiestnik.php?view=forums&amp;id=';  echo $this->_tpl_vars['Catid2'];  echo '&amp;step=add">';  echo $this->_tpl_vars['Tname'];  echo ': <input type="text" name="catname" value="';  echo $this->_tpl_vars['Tcatname'];  echo '" /><br />';  echo $this->_tpl_vars['Tdesc'];  echo ': <textarea name="catdesc" rows="5" cols="30">';  echo $this->_tpl_vars['Tcatdesc'];  echo '</textarea><br />';  echo $this->_tpl_vars['Tlang'];  echo ': <select name="catlang">';  unset($this->_sections['forum2']);
$this->_sections['forum2']['name'] = 'forum2';
$this->_sections['forum2']['loop'] = is_array($_loop=$this->_tpl_vars['Catlang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['forum2']['show'] = true;
$this->_sections['forum2']['max'] = $this->_sections['forum2']['loop'];
$this->_sections['forum2']['step'] = 1;
$this->_sections['forum2']['start'] = $this->_sections['forum2']['step'] > 0 ? 0 : $this->_sections['forum2']['loop']-1;
if ($this->_sections['forum2']['show']) {
    $this->_sections['forum2']['total'] = $this->_sections['forum2']['loop'];
    if ($this->_sections['forum2']['total'] == 0)
        $this->_sections['forum2']['show'] = false;
} else
    $this->_sections['forum2']['total'] = 0;
if ($this->_sections['forum2']['show']):

            for ($this->_sections['forum2']['index'] = $this->_sections['forum2']['start'], $this->_sections['forum2']['iteration'] = 1;
                 $this->_sections['forum2']['iteration'] <= $this->_sections['forum2']['total'];
                 $this->_sections['forum2']['index'] += $this->_sections['forum2']['step'], $this->_sections['forum2']['iteration']++):
$this->_sections['forum2']['rownum'] = $this->_sections['forum2']['iteration'];
$this->_sections['forum2']['index_prev'] = $this->_sections['forum2']['index'] - $this->_sections['forum2']['step'];
$this->_sections['forum2']['index_next'] = $this->_sections['forum2']['index'] + $this->_sections['forum2']['step'];
$this->_sections['forum2']['first']      = ($this->_sections['forum2']['iteration'] == 1);
$this->_sections['forum2']['last']       = ($this->_sections['forum2']['iteration'] == $this->_sections['forum2']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Catlang'][$this->_sections['forum2']['index']];  echo '" ';  echo $this->_tpl_vars['Tlangsel'][$this->_sections['forum2']['index']];  echo '>';  echo $this->_tpl_vars['Catlang'][$this->_sections['forum2']['index']];  echo '</option>';  endfor; endif;  echo '</select><br />';  echo $this->_tpl_vars['Twrite'];  echo ': <br />';  unset($this->_sections['forum3']);
$this->_sections['forum3']['name'] = 'forum3';
$this->_sections['forum3']['loop'] = is_array($_loop=$this->_tpl_vars['Toptionname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['forum3']['show'] = true;
$this->_sections['forum3']['max'] = $this->_sections['forum3']['loop'];
$this->_sections['forum3']['step'] = 1;
$this->_sections['forum3']['start'] = $this->_sections['forum3']['step'] > 0 ? 0 : $this->_sections['forum3']['loop']-1;
if ($this->_sections['forum3']['show']) {
    $this->_sections['forum3']['total'] = $this->_sections['forum3']['loop'];
    if ($this->_sections['forum3']['total'] == 0)
        $this->_sections['forum3']['show'] = false;
} else
    $this->_sections['forum3']['total'] = 0;
if ($this->_sections['forum3']['show']):

            for ($this->_sections['forum3']['index'] = $this->_sections['forum3']['start'], $this->_sections['forum3']['iteration'] = 1;
                 $this->_sections['forum3']['iteration'] <= $this->_sections['forum3']['total'];
                 $this->_sections['forum3']['index'] += $this->_sections['forum3']['step'], $this->_sections['forum3']['iteration']++):
$this->_sections['forum3']['rownum'] = $this->_sections['forum3']['iteration'];
$this->_sections['forum3']['index_prev'] = $this->_sections['forum3']['index'] - $this->_sections['forum3']['step'];
$this->_sections['forum3']['index_next'] = $this->_sections['forum3']['index'] + $this->_sections['forum3']['step'];
$this->_sections['forum3']['first']      = ($this->_sections['forum3']['iteration'] == 1);
$this->_sections['forum3']['last']       = ($this->_sections['forum3']['iteration'] == $this->_sections['forum3']['total']);
 echo '<input type="checkbox" name="';  echo $this->_tpl_vars['Toptionw'][$this->_sections['forum3']['index']];  echo '" ';  echo $this->_tpl_vars['Toptionwsel'][$this->_sections['forum3']['index']];  echo ' />';  echo $this->_tpl_vars['Toptionname'][$this->_sections['forum3']['index']];  echo '<br />';  endfor; endif;  echo '';  echo $this->_tpl_vars['Tvisit'];  echo ': <br />';  unset($this->_sections['forum4']);
$this->_sections['forum4']['name'] = 'forum4';
$this->_sections['forum4']['loop'] = is_array($_loop=$this->_tpl_vars['Toptionname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['forum4']['show'] = true;
$this->_sections['forum4']['max'] = $this->_sections['forum4']['loop'];
$this->_sections['forum4']['step'] = 1;
$this->_sections['forum4']['start'] = $this->_sections['forum4']['step'] > 0 ? 0 : $this->_sections['forum4']['loop']-1;
if ($this->_sections['forum4']['show']) {
    $this->_sections['forum4']['total'] = $this->_sections['forum4']['loop'];
    if ($this->_sections['forum4']['total'] == 0)
        $this->_sections['forum4']['show'] = false;
} else
    $this->_sections['forum4']['total'] = 0;
if ($this->_sections['forum4']['show']):

            for ($this->_sections['forum4']['index'] = $this->_sections['forum4']['start'], $this->_sections['forum4']['iteration'] = 1;
                 $this->_sections['forum4']['iteration'] <= $this->_sections['forum4']['total'];
                 $this->_sections['forum4']['index'] += $this->_sections['forum4']['step'], $this->_sections['forum4']['iteration']++):
$this->_sections['forum4']['rownum'] = $this->_sections['forum4']['iteration'];
$this->_sections['forum4']['index_prev'] = $this->_sections['forum4']['index'] - $this->_sections['forum4']['step'];
$this->_sections['forum4']['index_next'] = $this->_sections['forum4']['index'] + $this->_sections['forum4']['step'];
$this->_sections['forum4']['first']      = ($this->_sections['forum4']['iteration'] == 1);
$this->_sections['forum4']['last']       = ($this->_sections['forum4']['iteration'] == $this->_sections['forum4']['total']);
 echo '<input type="checkbox" name="';  echo $this->_tpl_vars['Toptionv'][$this->_sections['forum4']['index']];  echo '" ';  echo $this->_tpl_vars['Toptionvsel'][$this->_sections['forum4']['index']];  echo ' />';  echo $this->_tpl_vars['Toptionname'][$this->_sections['forum4']['index']];  echo '<br />';  endfor; endif;  echo '<input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'mill'):  echo '<form method="post" action="namiestnik.php?view=mill&amp;step=mill">';  echo $this->_tpl_vars['Sname'];  echo ': <input type="text" name="nazwa" /> <br />';  echo $this->_tpl_vars['Scost'];  echo ': <input type="text" name="cena" /> <br />';  echo $this->_tpl_vars['Samount'];  echo ': <input type="text" name="amount" /><br />';  echo $this->_tpl_vars['Slevel'];  echo ': <input type="text" name="poziom" /> <br />';  echo $this->_tpl_vars['Stype'];  echo ': <select name="type" id="type"><option value="B">';  echo $this->_tpl_vars['Sbow'];  echo '</option><option value="R">';  echo $this->_tpl_vars['Sarrow'];  echo '</option></select><br /><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'donator'):  echo '';  if ($this->_tpl_vars['Step'] == ""):  echo '';  echo $this->_tpl_vars['Donatorinfo'];  echo '<br /><form method="post" action="namiestnik.php?view=donator&amp;step=add">';  echo $this->_tpl_vars['Pname'];  echo ': <input type="text" name="plname" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'clearf'):  echo '';  if ($this->_tpl_vars['Step'] == ""):  echo '';  echo $this->_tpl_vars['Fquestion'];  echo '<br />- <a href="namiestnik.php?view=clearf&amp;step=Y">';  echo $this->_tpl_vars['Ayes'];  echo '</a><br />';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'monster2'):  echo '';  if ($this->_tpl_vars['Step'] == ""):  echo '<form method="post" action="namiestnik.php?view=monster2&amp;step=next">';  echo $this->_tpl_vars['Mname'];  echo ': <select name="mid">';  unset($this->_sections['monster2']);
$this->_sections['monster2']['name'] = 'monster2';
$this->_sections['monster2']['loop'] = is_array($_loop=$this->_tpl_vars['Mid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['monster2']['show'] = true;
$this->_sections['monster2']['max'] = $this->_sections['monster2']['loop'];
$this->_sections['monster2']['step'] = 1;
$this->_sections['monster2']['start'] = $this->_sections['monster2']['step'] > 0 ? 0 : $this->_sections['monster2']['loop']-1;
if ($this->_sections['monster2']['show']) {
    $this->_sections['monster2']['total'] = $this->_sections['monster2']['loop'];
    if ($this->_sections['monster2']['total'] == 0)
        $this->_sections['monster2']['show'] = false;
} else
    $this->_sections['monster2']['total'] = 0;
if ($this->_sections['monster2']['show']):

            for ($this->_sections['monster2']['index'] = $this->_sections['monster2']['start'], $this->_sections['monster2']['iteration'] = 1;
                 $this->_sections['monster2']['iteration'] <= $this->_sections['monster2']['total'];
                 $this->_sections['monster2']['index'] += $this->_sections['monster2']['step'], $this->_sections['monster2']['iteration']++):
$this->_sections['monster2']['rownum'] = $this->_sections['monster2']['iteration'];
$this->_sections['monster2']['index_prev'] = $this->_sections['monster2']['index'] - $this->_sections['monster2']['step'];
$this->_sections['monster2']['index_next'] = $this->_sections['monster2']['index'] + $this->_sections['monster2']['step'];
$this->_sections['monster2']['first']      = ($this->_sections['monster2']['iteration'] == 1);
$this->_sections['monster2']['last']       = ($this->_sections['monster2']['iteration'] == $this->_sections['monster2']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Mid'][$this->_sections['monster2']['index']];  echo '">';  echo $this->_tpl_vars['Names'][$this->_sections['monster2']['index']];  echo '</option>';  endfor; endif;  echo '</select><br /><input type="submit" value="';  echo $this->_tpl_vars['Anext'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'next'):  echo '<form method="post" action="namiestnik.php?view=monster2&amp;step=monster">';  echo $this->_tpl_vars['Tmname'];  echo ': <input type="text" name="name" value="';  echo $this->_tpl_vars['Mname'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmlevel'];  echo ': <input type="text" name="level" value="';  echo $this->_tpl_vars['Mlvl'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmhp'];  echo ': <input type="text" name="hp" value="';  echo $this->_tpl_vars['Mhp'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmagi'];  echo ': <input type="text" name="agility" value="';  echo $this->_tpl_vars['Magility'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmpower'];  echo ': <input type="text" name="strength" value="';  echo $this->_tpl_vars['Mstrength'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmspeed'];  echo ': <input type="text" name="speed" value="';  echo $this->_tpl_vars['Mspeed'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmcond'];  echo ': <input type="text" name="endurance" value="';  echo $this->_tpl_vars['Mendurance'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmmingold'];  echo ': <input type="text" name="credits1" value="';  echo $this->_tpl_vars['Mcredits1'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmmaxgold'];  echo ': <input type="text" name="credits2" value="';  echo $this->_tpl_vars['Mcredits2'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmminexp'];  echo ': <input type="text" name="exp1" value="';  echo $this->_tpl_vars['Mexp1'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmmaxexp'];  echo ': <input type="text" name="exp2" value="';  echo $this->_tpl_vars['Mexp2'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmlocation'];  echo ': <input type="text" name="location" value="';  echo $this->_tpl_vars['Mlocation'];  echo '" /><br /><input type="hidden" name="mid" value="';  echo $this->_tpl_vars['Mid'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Aedit'];  echo '" /></form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'jailbreak'):  echo '';  if ($this->_tpl_vars['Step'] == ""):  echo '<form method="post" action="namiestnik.php?view=jailbreak&amp;step=next"><input type="submit" value="';  echo $this->_tpl_vars['Afree'];  echo '" /> ';  echo $this->_tpl_vars['Jailid'];  echo ' <input type="text" name="jid" size="5" /></form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'poll'):  echo '';  if ($this->_tpl_vars['Step'] == ""):  echo '<form method="post" action="namiestnik.php?view=poll&amp;step=second">';  echo $this->_tpl_vars['Tquestion'];  echo ': <input type="text" name="question" /><br />';  echo $this->_tpl_vars['Tlang'];  echo ': <select name="lang">';  unset($this->_sections['poll2']);
$this->_sections['poll2']['name'] = 'poll2';
$this->_sections['poll2']['loop'] = is_array($_loop=$this->_tpl_vars['Llang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['poll2']['show'] = true;
$this->_sections['poll2']['max'] = $this->_sections['poll2']['loop'];
$this->_sections['poll2']['step'] = 1;
$this->_sections['poll2']['start'] = $this->_sections['poll2']['step'] > 0 ? 0 : $this->_sections['poll2']['loop']-1;
if ($this->_sections['poll2']['show']) {
    $this->_sections['poll2']['total'] = $this->_sections['poll2']['loop'];
    if ($this->_sections['poll2']['total'] == 0)
        $this->_sections['poll2']['show'] = false;
} else
    $this->_sections['poll2']['total'] = 0;
if ($this->_sections['poll2']['show']):

            for ($this->_sections['poll2']['index'] = $this->_sections['poll2']['start'], $this->_sections['poll2']['iteration'] = 1;
                 $this->_sections['poll2']['iteration'] <= $this->_sections['poll2']['total'];
                 $this->_sections['poll2']['index'] += $this->_sections['poll2']['step'], $this->_sections['poll2']['iteration']++):
$this->_sections['poll2']['rownum'] = $this->_sections['poll2']['iteration'];
$this->_sections['poll2']['index_prev'] = $this->_sections['poll2']['index'] - $this->_sections['poll2']['step'];
$this->_sections['poll2']['index_next'] = $this->_sections['poll2']['index'] + $this->_sections['poll2']['step'];
$this->_sections['poll2']['first']      = ($this->_sections['poll2']['iteration'] == 1);
$this->_sections['poll2']['last']       = ($this->_sections['poll2']['iteration'] == $this->_sections['poll2']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Llang'][$this->_sections['poll2']['index']];  echo '">';  echo $this->_tpl_vars['Llang'][$this->_sections['poll2']['index']];  echo '</option>';  endfor; endif;  echo '</select><br />';  echo $this->_tpl_vars['Tamount'];  echo ': <input type="text" size="5" name="amount" /><br />';  echo $this->_tpl_vars['Tdays'];  echo ': <input type="text" size="5" name="days" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Anext'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'second'):  echo '';  echo $this->_tpl_vars['Tquestion'];  echo ': ';  echo $this->_tpl_vars['Question'];  echo ' (';  echo $this->_tpl_vars['Llang'];  echo ') (';  echo $this->_tpl_vars['Adays'];  echo ' dni)<br /><form method="post" action="namiestnik.php?view=poll&amp;step=add">';  unset($this->_sections['poll']);
$this->_sections['poll']['name'] = 'poll';
$this->_sections['poll']['loop'] = is_array($_loop=$this->_tpl_vars['Answers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['poll']['show'] = true;
$this->_sections['poll']['max'] = $this->_sections['poll']['loop'];
$this->_sections['poll']['step'] = 1;
$this->_sections['poll']['start'] = $this->_sections['poll']['step'] > 0 ? 0 : $this->_sections['poll']['loop']-1;
if ($this->_sections['poll']['show']) {
    $this->_sections['poll']['total'] = $this->_sections['poll']['loop'];
    if ($this->_sections['poll']['total'] == 0)
        $this->_sections['poll']['show'] = false;
} else
    $this->_sections['poll']['total'] = 0;
if ($this->_sections['poll']['show']):

            for ($this->_sections['poll']['index'] = $this->_sections['poll']['start'], $this->_sections['poll']['iteration'] = 1;
                 $this->_sections['poll']['iteration'] <= $this->_sections['poll']['total'];
                 $this->_sections['poll']['index'] += $this->_sections['poll']['step'], $this->_sections['poll']['iteration']++):
$this->_sections['poll']['rownum'] = $this->_sections['poll']['iteration'];
$this->_sections['poll']['index_prev'] = $this->_sections['poll']['index'] - $this->_sections['poll']['step'];
$this->_sections['poll']['index_next'] = $this->_sections['poll']['index'] + $this->_sections['poll']['step'];
$this->_sections['poll']['first']      = ($this->_sections['poll']['iteration'] == 1);
$this->_sections['poll']['last']       = ($this->_sections['poll']['iteration'] == $this->_sections['poll']['total']);
 echo '';  echo $this->_tpl_vars['Tanswer'];  echo ': <input type="text" name="';  echo $this->_tpl_vars['Answers'][$this->_sections['poll']['index']];  echo '" /><br />';  endfor; endif;  echo '<input type="hidden" name="amount" value="';  echo $this->_tpl_vars['Amount'];  echo '" /><input type="hidden" name="pid" value="';  echo $this->_tpl_vars['Pollid'];  echo '" /><input type="hidden" name="lang" value="';  echo $this->_tpl_vars['Llang'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'censorship'):  echo '<form method="post" action="namiestnik.php?view=censorship&amp;step=modify"><select name="action"><option value="add">';  echo $this->_tpl_vars['Aadd'];  echo '</option><option value="delete">';  echo $this->_tpl_vars['Adelete'];  echo '</option></select>';  echo $this->_tpl_vars['Tword'];  echo ' <input type="text" name="bword" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Amake'];  echo '" /></form>';  echo $this->_tpl_vars['Wordslist'];  echo ':<br />';  unset($this->_sections['censor']);
$this->_sections['censor']['name'] = 'censor';
$this->_sections['censor']['loop'] = is_array($_loop=$this->_tpl_vars['Words']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['censor']['show'] = true;
$this->_sections['censor']['max'] = $this->_sections['censor']['loop'];
$this->_sections['censor']['step'] = 1;
$this->_sections['censor']['start'] = $this->_sections['censor']['step'] > 0 ? 0 : $this->_sections['censor']['loop']-1;
if ($this->_sections['censor']['show']) {
    $this->_sections['censor']['total'] = $this->_sections['censor']['loop'];
    if ($this->_sections['censor']['total'] == 0)
        $this->_sections['censor']['show'] = false;
} else
    $this->_sections['censor']['total'] = 0;
if ($this->_sections['censor']['show']):

            for ($this->_sections['censor']['index'] = $this->_sections['censor']['start'], $this->_sections['censor']['iteration'] = 1;
                 $this->_sections['censor']['iteration'] <= $this->_sections['censor']['total'];
                 $this->_sections['censor']['index'] += $this->_sections['censor']['step'], $this->_sections['censor']['iteration']++):
$this->_sections['censor']['rownum'] = $this->_sections['censor']['iteration'];
$this->_sections['censor']['index_prev'] = $this->_sections['censor']['index'] - $this->_sections['censor']['step'];
$this->_sections['censor']['index_next'] = $this->_sections['censor']['index'] + $this->_sections['censor']['step'];
$this->_sections['censor']['first']      = ($this->_sections['censor']['iteration'] == 1);
$this->_sections['censor']['last']       = ($this->_sections['censor']['iteration'] == $this->_sections['censor']['total']);
 echo '';  echo $this->_tpl_vars['Words'][$this->_sections['censor']['index']];  echo '<br />';  endfor; endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'register' || $this->_tpl_vars['View'] == 'close'):  echo '<form method="post" action="namiestnik.php?view=';  echo $this->_tpl_vars['View'];  echo '&amp;step=close"><select name="close"><option value="close">';  echo $this->_tpl_vars['Gclose'];  echo '</option><option value="open">';  echo $this->_tpl_vars['Gopen'];  echo '</option></select><br />';  echo $this->_tpl_vars['Ifclose'];  echo ':<br /><textarea name="reason" rows="13" cols="55"></textarea><br /><input type="submit" value="';  echo $this->_tpl_vars['Amake'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'mail'):  echo '<form method="post" action="namiestnik.php?view=mail&amp;step=send">';  echo $this->_tpl_vars['Mailinfo'];  echo '<br /><textarea name="message"></textarea><br /><input type="submit" value="';  echo $this->_tpl_vars['Asend'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'bridge'):  echo '<form method="post" action="namiestnik.php?view=bridge&amp;step=add">';  echo $this->_tpl_vars['Bquestion'];  echo ': <textarea name="question"></textarea><br />';  echo $this->_tpl_vars['Banswer'];  echo ': <textarea name="answer"></textarea><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'jail'):  echo '';  if (isset ( $this->_tpl_vars['Confirm'] )):  echo '';  echo $this->_tpl_vars['Fquestion'];  echo '<br /><form method="post" action="namiestnik.php?view=jail&amp;step=add&amp;confirm=Y"><input type="hidden" name="prisoner" value="';  echo $this->_tpl_vars['Prisoner'];  echo '" /><input type="hidden" name="verdict" value="';  echo $this->_tpl_vars['Verdict'];  echo '" /><input type="hidden" name="time"  value="';  echo $this->_tpl_vars['Duration'];  echo '" /><input type="hidden" name="cost"  value="';  echo $this->_tpl_vars['Fine'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Ayes'];  echo '" /></form>';  else:  echo '<form method="post" action="namiestnik.php?view=jail&amp;step=add">';  echo $this->_tpl_vars['Jailid'];  echo ': <input type="text" name="prisoner" /><br />';  echo $this->_tpl_vars['Jailreason'];  echo ': <textarea name="verdict"></textarea><br />';  echo $this->_tpl_vars['Jailtime'];  echo ': <input type="text" name="time" /><br />';  echo $this->_tpl_vars['Jailcost'];  echo ': <input type="text" name="cost" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'add'):  echo '<form method="post" action="namiestnik.php?view=add&amp;step=add">';  echo $this->_tpl_vars['Addid'];  echo ' <input type="text" name="aid" /> ';  echo $this->_tpl_vars['Newrank'];  echo '<select name="rank"><option value="Member">';  echo $this->_tpl_vars['Rmember'];  echo '</option><option value="Admin">';  echo $this->_tpl_vars['Rking'];  echo '</option><option value="Staff">';  echo $this->_tpl_vars['Rstaff'];  echo '</option><option value="Sędzia">';  echo $this->_tpl_vars['Rjudge'];  echo '</option><option value="Ławnik">';  echo $this->_tpl_vars['Rjudge2'];  echo '</option><option value="Prawnik">';  echo $this->_tpl_vars['Rlawyer'];  echo '</option><option value="Żebrak">';  echo $this->_tpl_vars['Rbeggar'];  echo '</option><option value="Magazynier">';  echo $this->_tpl_vars['Rbarbarian'];  echo '</option><option value="Bibliotekarz">';  echo $this->_tpl_vars['Rscribe'];  echo '</option><option value="Rycerz">';  echo $this->_tpl_vars['Rknight'];  echo '</option><option value="Dama">';  echo $this->_tpl_vars['Rlady'];  echo '</option><option value="Marszałek Rady">';  echo $this->_tpl_vars['Rcount'];  echo '</option><option value="Poseł">';  echo $this->_tpl_vars['Rcount2'];  echo '</option><option value="Kanclerz Sądu">';  echo $this->_tpl_vars['Rjudge3'];  echo '</option><option value="Redaktor">';  echo $this->_tpl_vars['Rredactor'];  echo '</option><option value="Karczmarka">';  echo $this->_tpl_vars['Rinnkeeper'];  echo '</option><option value="Prokurator">';  echo $this->_tpl_vars['Rprocurator'];  echo '</option><option value="Ksiądz">';  echo $this->_tpl_vars['Rksiadz'];  echo '</option><option value="Magazynier">';  echo $this->_tpl_vars['Rmagazynier'];  echo '</option><option value="Strażnik Miejski">';  echo $this->_tpl_vars['Rstraznik'];  echo '</option><option value="Magazynier">';  echo $this->_tpl_vars['Rmurgrabia'];  echo '</option><option value="Druid">';  echo $this->_tpl_vars['Rdruid'];  echo '</option><option value="Królowa Potępionych">';  echo $this->_tpl_vars['Rkrolowapotepionych'];  echo '</option><option value="Honorowy Mieszkaniec">';  echo $this->_tpl_vars['honorowymieszkaniec'];  echo '</option><option value="Wielki Mistrz">';  echo $this->_tpl_vars['wielkimistrz'];  echo '</option><option value="Gladiator">';  echo $this->_tpl_vars['gladiator'];  echo '</option><option value="Stary Dziad">';  echo $this->_tpl_vars['starydziad'];  echo '</option><option value="Wskrzesiciel">';  echo $this->_tpl_vars['wskrzesiciel'];  echo '</option><option value="Kostuch">';  echo $this->_tpl_vars['kostuch'];  echo '</option><option value="Żul spod mostu">';  echo $this->_tpl_vars['Rzul'];  echo '</option><option value="';  echo @RANK_TECH;  echo '">';  echo @RANK_TECH;  echo '</option></select>. <input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'equipment'):  echo '<form method="post" action="namiestnik.php?view=equipment&amp;step=add">';  echo $this->_tpl_vars['Itemname'];  echo ' <input type="text" name="name" /> ';  echo $this->_tpl_vars['Hasa'];  echo '<select name="type" id="type"><option value="W">';  echo $this->_tpl_vars['Iweapon'];  echo '</option><option value="A">';  echo $this->_tpl_vars['Iarmor'];  echo '</option><option value="H">';  echo $this->_tpl_vars['Ihelmet'];  echo '</option><option value="L">';  echo $this->_tpl_vars['Ilegs'];  echo '</option><option value="S">';  echo $this->_tpl_vars['Ishield'];  echo '</option><option value="B">';  echo $this->_tpl_vars['Ibow'];  echo '</option><option value="R">';  echo $this->_tpl_vars['Iarrows'];  echo '</option><option value="T">';  echo $this->_tpl_vars['Istaff'];  echo '</option><option value="C">';  echo $this->_tpl_vars['Icape'];  echo '</option></select><br /> ';  echo $this->_tpl_vars['Iwith'];  echo '<input name="power" type="number" id="power" /> ';  echo $this->_tpl_vars['Ipower'];  echo '<br />';  echo $this->_tpl_vars['Icost'];  echo ' <input type="number" name="cost" /><br /> ';  echo $this->_tpl_vars['Iminlev'];  echo '<input type="number" name="minlev" /><br /> ';  echo $this->_tpl_vars['Iagi'];  echo '<input name="zr" type="number" /><br /> ';  echo $this->_tpl_vars['Ispeed'];  echo '<input type="number" name="szyb" /><br />';  echo $this->_tpl_vars['Idur'];  echo '<input type="number" name="maxwt" /><br />';  echo $this->_tpl_vars['Irepair'];  echo '<input type="number" name="repair" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'donate'):  echo '<form method="post" action="namiestnik.php?view=donate&amp;step=donated">';  echo $this->_tpl_vars['Donateid'];  echo ': <input type="text" name="id" /> <br />';  unset($this->_sections['res']);
$this->_sections['res']['name'] = 'res';
$this->_sections['res']['loop'] = is_array($_loop=$this->_tpl_vars['Resources']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['res']['show'] = true;
$this->_sections['res']['max'] = $this->_sections['res']['loop'];
$this->_sections['res']['step'] = 1;
$this->_sections['res']['start'] = $this->_sections['res']['step'] > 0 ? 0 : $this->_sections['res']['loop']-1;
if ($this->_sections['res']['show']) {
    $this->_sections['res']['total'] = $this->_sections['res']['loop'];
    if ($this->_sections['res']['total'] == 0)
        $this->_sections['res']['show'] = false;
} else
    $this->_sections['res']['total'] = 0;
if ($this->_sections['res']['show']):

            for ($this->_sections['res']['index'] = $this->_sections['res']['start'], $this->_sections['res']['iteration'] = 1;
                 $this->_sections['res']['iteration'] <= $this->_sections['res']['total'];
                 $this->_sections['res']['index'] += $this->_sections['res']['step'], $this->_sections['res']['iteration']++):
$this->_sections['res']['rownum'] = $this->_sections['res']['iteration'];
$this->_sections['res']['index_prev'] = $this->_sections['res']['index'] - $this->_sections['res']['step'];
$this->_sections['res']['index_next'] = $this->_sections['res']['index'] + $this->_sections['res']['step'];
$this->_sections['res']['first']      = ($this->_sections['res']['iteration'] == 1);
$this->_sections['res']['last']       = ($this->_sections['res']['iteration'] == $this->_sections['res']['total']);
 echo '<input type="radio" name="what" ';  if ($this->_sections['res']['index'] == 0):  echo ' checked="true"';  endif;  echo 'value="';  echo $this->_tpl_vars['Resources'][$this->_sections['res']['index']];  echo '"/> ';  echo $this->_tpl_vars['ResourcesNames'][$this->_sections['res']['index']];  echo '<br/>';  endfor; endif;  echo '';  echo $this->_tpl_vars['Donateamount'];  echo ': <input type="text" name="amount"/><br/><input type="submit" value="';  echo $this->_tpl_vars['Adonate'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'takeaway'):  echo '';  echo $this->_tpl_vars['Takeinfo'];  echo '<br /><form method="post" action="namiestnik.php?view=takeaway&amp;step=takenaway"><table><tr><td>';  echo $this->_tpl_vars['Takeid'];  echo ':</td><td><input type="text" name="id" size="5" /></td></tr><tr><td>';  echo $this->_tpl_vars['Takeamount'];  echo ':</td><td><input type="text" name="taken" /></td></tr><tr><td>';  echo $this->_tpl_vars['Treason'];  echo '</td><td><textarea name="verdict"></textarea></td></tr><tr><td>';  echo $this->_tpl_vars['Tinjured'];  echo '</td><td><input type="text" name="id2" size="5" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Atakeg'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'monster'):  echo '<form method="post" action="namiestnik.php?view=monster&amp;step=monster">';  echo $this->_tpl_vars['Mname'];  echo ': <input type="text" name="nazwa" /> <br />';  echo $this->_tpl_vars['Mlevel'];  echo ': <input type="text" name="poziom" /> <br />';  echo $this->_tpl_vars['Mhp'];  echo ': <input type="text" name="pz" /> <br />';  echo $this->_tpl_vars['Magi'];  echo ': <input type="text" name="zr" /> <br />';  echo $this->_tpl_vars['Mpower'];  echo ': <input type="text" name="sila" /> <br />';  echo $this->_tpl_vars['Mspeed'];  echo ': <input type="text" name="speed" /> <br />';  echo $this->_tpl_vars['Mcond'];  echo ': <input type="text" name="endurance" /> <br />';  echo $this->_tpl_vars['Mmingold'];  echo ': <input type="text" name="minzl" /> <br />';  echo $this->_tpl_vars['Mmaxgold'];  echo ': <input type="text" name="maxzl" /> <br />';  echo $this->_tpl_vars['Mminexp'];  echo ': <input type="text" name="minpd" /> <br />';  echo $this->_tpl_vars['Mmaxexp'];  echo ': <input type="text" name="maxpd" /> <br />';  echo $this->_tpl_vars['Mlocation'];  echo ': <select name="location"><option value="Altara">';  echo $this->_tpl_vars['Mcity1'];  echo '</option><option value="Ardulith">';  echo $this->_tpl_vars['Mcity2'];  echo '</option><option value="Cytadela">';  echo $this->_tpl_vars['Mcity3'];  echo '</option></select><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'kowal'):  echo '<form method="post" action="namiestnik.php?view=kowal&amp;step=kowal">';  echo $this->_tpl_vars['Sname'];  echo ': <input type="text" name="nazwa" /> <br />';  echo $this->_tpl_vars['Scost'];  echo ': <input type="text" name="cena" /> <br />';  echo $this->_tpl_vars['Samount'];  echo ': <input type="text" name="amount" /><br />';  echo $this->_tpl_vars['Slevel'];  echo ': <input type="text" name="poziom" /> <br />';  echo $this->_tpl_vars['Stype'];  echo ': <select name="type" id="type"><option value="W">';  echo $this->_tpl_vars['Sweapon'];  echo '</option><option value="A">';  echo $this->_tpl_vars['Sarmor'];  echo '</option><option value="H">';  echo $this->_tpl_vars['Shelmet'];  echo '</option><option value="L">';  echo $this->_tpl_vars['Slegs'];  echo '</option><option value="S">';  echo $this->_tpl_vars['Sshield'];  echo '</option></select><br />';  echo $this->_tpl_vars['Stwohand'];  echo ': <select name="twohand"><option value="N">';  echo $this->_tpl_vars['Ano'];  echo '</option><option value="Y">';  echo $this->_tpl_vars['Ayes'];  echo '</option></select><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'poczta'):  echo '<table><form method="post" action="namiestnik.php?view=poczta&amp;step=send"><tr><td>';  echo $this->_tpl_vars['Pmsubject'];  echo ':</td><td><input type="text" name="subject" /></td></tr><tr><td valign="top">';  echo $this->_tpl_vars['Pmbody'];  echo ':</td><td><textarea name="body" rows="5" cols="19"></textarea></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Asend'];  echo '" /></td></tr></form></table>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'czat'):  echo '';  echo $this->_tpl_vars['Blocklist'];  echo '<br />';  unset($this->_sections['player']);
$this->_sections['player']['name'] = 'player';
$this->_sections['player']['loop'] = is_array($_loop=$this->_tpl_vars['List1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['player']['show'] = true;
$this->_sections['player']['max'] = $this->_sections['player']['loop'];
$this->_sections['player']['step'] = 1;
$this->_sections['player']['start'] = $this->_sections['player']['step'] > 0 ? 0 : $this->_sections['player']['loop']-1;
if ($this->_sections['player']['show']) {
    $this->_sections['player']['total'] = $this->_sections['player']['loop'];
    if ($this->_sections['player']['total'] == 0)
        $this->_sections['player']['show'] = false;
} else
    $this->_sections['player']['total'] = 0;
if ($this->_sections['player']['show']):

            for ($this->_sections['player']['index'] = $this->_sections['player']['start'], $this->_sections['player']['iteration'] = 1;
                 $this->_sections['player']['iteration'] <= $this->_sections['player']['total'];
                 $this->_sections['player']['index'] += $this->_sections['player']['step'], $this->_sections['player']['iteration']++):
$this->_sections['player']['rownum'] = $this->_sections['player']['iteration'];
$this->_sections['player']['index_prev'] = $this->_sections['player']['index'] - $this->_sections['player']['step'];
$this->_sections['player']['index_next'] = $this->_sections['player']['index'] + $this->_sections['player']['step'];
$this->_sections['player']['first']      = ($this->_sections['player']['iteration'] == 1);
$this->_sections['player']['last']       = ($this->_sections['player']['iteration'] == $this->_sections['player']['total']);
 echo 'ID ';  echo $this->_tpl_vars['List1'][$this->_sections['player']['index']];  echo '<br />';  endfor; endif;  echo '<form method="post" action="namiestnik.php?view=czat&amp;step=czat"><select name="czat"><option value="blok">';  echo $this->_tpl_vars['Ablock'];  echo '</option><option value="odblok">';  echo $this->_tpl_vars['Aunblock'];  echo '</option></select>';  echo $this->_tpl_vars['Chatid'];  echo ' <input type="text" name="czat_id" size="5" /> ';  echo $this->_tpl_vars['Ona'];  echo ' <input type="text" size="5" name="duration" value="1" />';  echo $this->_tpl_vars['Tdays'];  echo '<br /><textarea name="verdict"></textarea><br /><input type="submit" value="';  echo $this->_tpl_vars['Amake'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'czary'):  echo '<form method="post" action="namiestnik.php?view=czary&amp;step=add">';  echo $this->_tpl_vars['Spellname'];  echo ' <input type="text" name="name" /> ';  echo $this->_tpl_vars['Hasas'];  echo '<select name="type"><option value="B">';  echo $this->_tpl_vars['Sbattle'];  echo '</option><option value="O">';  echo $this->_tpl_vars['Sdefense'];  echo '</option></select><br />';  echo $this->_tpl_vars['Swith'];  echo ' <input name="power" type="number" /> ';  echo $this->_tpl_vars['Spower'];  echo '<br />';  echo $this->_tpl_vars['Scost'];  echo ' <input type="number" name="cost" /><br />';  echo $this->_tpl_vars['Sminlev'];  echo ' <input type="number" name="minlev" /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'weather'):  echo 'Ostatnie 10 wpisów:<br>';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Id']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<b>#';  echo $this->_tpl_vars['Id'][$this->_sections['i']['index']];  echo '</b><br /><b>Autor</b>:';  echo $this->_tpl_vars['Author'][$this->_sections['i']['index']];  echo '<br><b>Treść</b>:<br>';  echo $this->_tpl_vars['Text'][$this->_sections['i']['index']];  echo '<hr>';  endfor; endif;  echo 'Dodaj nowy wpis:<br><form method="post" action="namiestnik.php?view=weather&amp;step=add">Treść:<br><textarea name="text"></textarea><INPUT type="submit" value="Wyślij"></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'newsy'):  echo 'Dodaj nowy wpis:<br><form method="post" action="namiestnik.php?view=newsy&amp;step=add">Treść:<br><textarea name="text"></textarea><INPUT type="submit" value="Wyślij"></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'kroniki'):  echo 'Dodaj nowy wpis:<br><form method="post" action="namiestnik.php?view=kroniki&amp;step=add">Treść:<br><textarea name="text"></textarea><INPUT type="submit" value="Wyślij"></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'changenick'):  echo '';  if (! $this->_tpl_vars['Action']):  echo '<p>';  echo $this->_tpl_vars['Info'];  echo '</p><form method="post" action="staff.php?view=changenick&amp;action=nick">';  echo $this->_tpl_vars['Changename1'];  echo ' <input type="text" name="id" size="5" /> ';  echo $this->_tpl_vars['Changename2'];  echo ' <input type="text" name="name" size="20" value="';  echo $this->_tpl_vars['Defaultname'];  echo '" /><br />';  echo $this->_tpl_vars['Changereason'];  echo ': <br /><textarea name="reason" rows="3" cols="40">';  echo $this->_tpl_vars['Reason1'];  echo '</textarea><br /><input type="submit" value="';  echo $this->_tpl_vars['Save'];  echo '" /></form><br /><br /><form method="post" action="staff.php?view=changenick&amp;action=profile">Skasuj avatar gracza. ID gracza: <input type="text" name="id" size="5" /><input type="submit" value="';  echo $this->_tpl_vars['Save'];  echo '" /></form><br /><br /><form method="post" action="staff.php?view=changenick&amp;action=rank">';  echo $this->_tpl_vars['Setid'];  echo ' <input type="text" name="id" size="5" /> ';  echo $this->_tpl_vars['Newrank'];  echo '<select name="rank"><option value="Member">Mieszkaniec</option><option value="Namiestnik">Namiestnik</option><option value="Hrabia">Hrabia</option><option value="Strażnik Miejski">Dowódca Straży</option><option value="Karczmarka">Właściciel Karczmy</option><option value="Murgrabia">Murgrabia</option><option value="Dama">Dama</option><option value="Rycerz">Rycerz</option><option value="Redaktor">Redaktor</option><option value="Druid">Druid</option><option value="Kronikarz">Kronikarz</option><option value="Ksiądz">Kapłan Najwyższy</option><option value="Kostuch">Kostuch</option><option value="Bibliotekarz">Bibliotekarz</option></select><input type="submit" value="';  echo $this->_tpl_vars['Save'];  echo '" /></form>';  else:  echo '<p>';  echo $this->_tpl_vars['Currentinfo'];  echo ' <b><a href="view.php?view=';  echo $this->_tpl_vars['VictimID'];  echo '">';  echo $this->_tpl_vars['Victimname'];  echo '</a></b>:</p><p>';  echo $this->_tpl_vars['Current'];  echo '</p><form method="post" action="staff.php?view=changenick&amp;action=profile"><textarea name="profile" rows="15" cols="50">';  echo $this->_tpl_vars['Editable'];  echo '</textarea><p>';  echo $this->_tpl_vars['Changereason'];  echo ':</p><textarea name="reason" rows="5" cols="50">';  echo $this->_tpl_vars['Reason2'];  echo ' ';  echo $this->_tpl_vars['Reason3'];  echo '</textarea><br /><input type="hidden" name="id" value="';  echo $this->_tpl_vars['VictimID'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Save'];  echo '" /></form>';  endif;  echo '';  endif;  echo '';  echo $this->_tpl_vars['Message'];  echo '';  if ($this->_tpl_vars['View'] != ""):  echo '<br />(<a href="namiestnik.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>)';  endif;  echo ''; ?>
