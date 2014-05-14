<?php /* Smarty version 2.6.16, created on 2013-01-14 13:59:21
         compiled from grix_panel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'wordwrap', 'grix_panel.tpl', 197, false),)), $this); ?>
<?php echo '';  if ($this->_tpl_vars['View'] == ""):  echo '<p>';  echo $this->_tpl_vars['Awelcome'];  echo '</p><br/><fieldset><legend>Narzedzia Grixa</legend><a href="grix_panel.php?view=poczta">Wyslij wiadomosc do graczy</a><br/><a href="grix_panel.php?view=monster2">Edytuj stwora</a><br/><a href="grix_panel.php?view=query">Wykonaj zapytanie do bazy</a><br/><a href="grix_panel.php?view=updates">Dodaj wieść</a><br/><a href="grix_panel.php?view=tribedelete">Usun gildie</a><br/><a href="grix_panel.php?view=bugreport">Buglist</a><br/><a href="grix_panel.php?view=changelog">Changelog</a><br/></fieldset><fieldset><legend>Narzedzia Adala</legend><a href="grix_panel.php?view=innarchive&amp;room=izba">Archiwum Tawerny</a><br/><a href="grix_panel.php?view=innarchive&amp;room=piwnica">Archiwum Piwnicy</a><br/></fieldset><fieldset><legend>Narzedzia Zerata</legend><a href="grix_panel.php?view=poczta2">Wyślij kapłańską pocztę do każdego</a><br/><a href="grix_panel.php?view=pary">Daj komuś ślub</a><br/></fieldset>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'monster2'):  echo '';  if ($this->_tpl_vars['Step'] == ""):  echo '<form method="post" action="grix_panel.php?view=monster2&amp;step=next">';  echo $this->_tpl_vars['Mname'];  echo ': <select name="mid">';  unset($this->_sections['monster2']);
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
 echo '<option value="';  echo $this->_tpl_vars['Mid'][$this->_sections['monster2']['index']];  echo '">';  echo $this->_tpl_vars['Names'][$this->_sections['monster2']['index']];  echo '</option>';  endfor; endif;  echo '</select><br /><input type="submit" value="';  echo $this->_tpl_vars['Anext'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'next'):  echo '<form enctype="multipart/form-data" method="post" action="grix_panel.php?view=monster2&amp;step=monster"><table><tbody><TR><TD>';  echo $this->_tpl_vars['Tmname'];  echo ': <input type="text" name="name" value="';  echo $this->_tpl_vars['Mname'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmlevel'];  echo ': <input type="text" name="level" value="';  echo $this->_tpl_vars['Mlvl'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmhp'];  echo ': <input type="text" name="hp" value="';  echo $this->_tpl_vars['Mhp'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmagi'];  echo ': <input type="text" name="agility" value="';  echo $this->_tpl_vars['Magility'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmpower'];  echo ': <input type="text" name="strength" value="';  echo $this->_tpl_vars['Mstrength'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmspeed'];  echo ': <input type="text" name="speed" value="';  echo $this->_tpl_vars['Mspeed'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmcond'];  echo ': <input type="text" name="endurance" value="';  echo $this->_tpl_vars['Mendurance'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmmingold'];  echo ': <input type="text" name="credits1" value="';  echo $this->_tpl_vars['Mcredits1'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmmaxgold'];  echo ': <input type="text" name="credits2" value="';  echo $this->_tpl_vars['Mcredits2'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmminexp'];  echo ': <input type="text" name="exp1" value="';  echo $this->_tpl_vars['Mexp1'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmmaxexp'];  echo ': <input type="text" name="exp2" value="';  echo $this->_tpl_vars['Mexp2'];  echo '" /> <br />';  echo $this->_tpl_vars['Tmlocation'];  echo ': <input type="text" name="location" value="';  echo $this->_tpl_vars['Mlocation'];  echo '" /><br /><input type="hidden" name="mid" value="';  echo $this->_tpl_vars['Mid'];  echo '" /></TD><td><center><img src="';  echo $this->_tpl_vars['Avek'];  echo '"></center><br>opis:<br><textarea cols="50" rows="10" name="desc">';  echo $this->_tpl_vars['Mdesc'];  echo '</textarea></td></TR><tr><td colspan="2">Wgraj avek: <input name="uploadedfile" type="file" /><br /></td></tr><tr><td colspan="2"><input type="submit" value="Zatwierdź" /></td></tr></tbody></table></form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'monster'):  echo '<form method="post" action="grix_panel.php?view=monster&amp;step=monster">';  echo $this->_tpl_vars['Mname'];  echo ': <input type="text" name="nazwa" /> <br />';  echo $this->_tpl_vars['Mlevel'];  echo ': <input type="text" name="poziom" /> <br />';  echo $this->_tpl_vars['Mhp'];  echo ': <input type="text" name="pz" /> <br />';  echo $this->_tpl_vars['Magi'];  echo ': <input type="text" name="zr" /> <br />';  echo $this->_tpl_vars['Mpower'];  echo ': <input type="text" name="sila" /> <br />';  echo $this->_tpl_vars['Mspeed'];  echo ': <input type="text" name="speed" /> <br />';  echo $this->_tpl_vars['Mcond'];  echo ': <input type="text" name="endurance" /> <br />';  echo $this->_tpl_vars['Mmingold'];  echo ': <input type="text" name="minzl" /> <br />';  echo $this->_tpl_vars['Mmaxgold'];  echo ': <input type="text" name="maxzl" /> <br />';  echo $this->_tpl_vars['Mminexp'];  echo ': <input type="text" name="minpd" /> <br />';  echo $this->_tpl_vars['Mmaxexp'];  echo ': <input type="text" name="maxpd" /> <br />';  echo $this->_tpl_vars['Mlocation'];  echo ': <select name="location"><option value="Altara">';  echo $this->_tpl_vars['Mcity1'];  echo '</option><option value="Ardulith">';  echo $this->_tpl_vars['Mcity2'];  echo '</option><option value="Cytadela">';  echo $this->_tpl_vars['Mcity3'];  echo '</option></select><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'tribedelete'):  echo 'Ktora gildie chcesz usunac?<table width="100%"><tr><th>Id</th><th>Nazwa gildii</th><th>Id wlasciciela</th><th>Usunac?</th></tr>';  unset($this->_sections['tribe']);
$this->_sections['tribe']['name'] = 'tribe';
$this->_sections['tribe']['loop'] = is_array($_loop=$this->_tpl_vars['Tribeid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tribe']['show'] = true;
$this->_sections['tribe']['max'] = $this->_sections['tribe']['loop'];
$this->_sections['tribe']['step'] = 1;
$this->_sections['tribe']['start'] = $this->_sections['tribe']['step'] > 0 ? 0 : $this->_sections['tribe']['loop']-1;
if ($this->_sections['tribe']['show']) {
    $this->_sections['tribe']['total'] = $this->_sections['tribe']['loop'];
    if ($this->_sections['tribe']['total'] == 0)
        $this->_sections['tribe']['show'] = false;
} else
    $this->_sections['tribe']['total'] = 0;
if ($this->_sections['tribe']['show']):

            for ($this->_sections['tribe']['index'] = $this->_sections['tribe']['start'], $this->_sections['tribe']['iteration'] = 1;
                 $this->_sections['tribe']['iteration'] <= $this->_sections['tribe']['total'];
                 $this->_sections['tribe']['index'] += $this->_sections['tribe']['step'], $this->_sections['tribe']['iteration']++):
$this->_sections['tribe']['rownum'] = $this->_sections['tribe']['iteration'];
$this->_sections['tribe']['index_prev'] = $this->_sections['tribe']['index'] - $this->_sections['tribe']['step'];
$this->_sections['tribe']['index_next'] = $this->_sections['tribe']['index'] + $this->_sections['tribe']['step'];
$this->_sections['tribe']['first']      = ($this->_sections['tribe']['iteration'] == 1);
$this->_sections['tribe']['last']       = ($this->_sections['tribe']['iteration'] == $this->_sections['tribe']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Tribeid'][$this->_sections['tribe']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Tribename'][$this->_sections['tribe']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Tribeowner'][$this->_sections['tribe']['index']];  echo '</td><td><a href="grix_panel.php?view=tribedelete&amp;del=';  echo $this->_tpl_vars['Tribeid'][$this->_sections['tribe']['index']];  echo '">Usun</a></td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'poczta'):  echo '<table><form method="post" action="grix_panel.php?view=poczta&amp;step=send"><tr><td>';  echo $this->_tpl_vars['Pmsubject'];  echo ':</td><td><input type="text" name="subject" /></td></tr><tr><td valign="top">';  echo $this->_tpl_vars['Pmbody'];  echo ':</td><td><textarea name="body" rows="5" cols="19"></textarea></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Asend'];  echo '" /></td></tr></form></table>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'query'):  echo '<form method="post" action="grix_panel.php?view=query&amp;step=make"><textarea name="query" rows="5" cols="19"></textarea><input type="submit" value="Wykonaj"></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'innarchive'):  echo '';  if ($this->_tpl_vars['Text'][0] != ""):  echo '';  unset($this->_sections['player']);
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
 echo '(';  echo $this->_tpl_vars['Date'][$this->_sections['player']['index']];  echo ')<b>';  echo $this->_tpl_vars['Author'][$this->_sections['player']['index']];  echo ' ';  echo $this->_tpl_vars['Cid'];  echo ':';  echo $this->_tpl_vars['Senderid'][$this->_sections['player']['index']];  echo '</b>: ';  echo $this->_tpl_vars['Text'][$this->_sections['player']['index']];  echo '<br />';  endfor; endif;  echo '';  endif;  echo '';  echo $this->_tpl_vars['Previous'];  echo ' ';  echo $this->_tpl_vars['Next'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'pary'):  echo '<form method="post" action="grix_panel.php?view=pary&step=add">ID Kobiety: <input type="text" name="prisoner"><br>ID Mężczyzny: <input type="text" name="prisonerp"><br>Przyczyna: <textarea name="verdict" rows="30" cols="40"></textarea><br>Koszt rozwodu: <input type="text" name="cost"><br><input type="submit" value="Dodaj"></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'poczta2'):  echo '<table><form method="post" action="grix_panel.php?view=poczta2&step=send"><tr><td>Temat:</td><td><input type="text" name="subject"></td></tr><tr><td valign="top">Treść:</td><td><textarea name="body" rows="5" cols="19"></textarea></td></tr><tr><td colspan="2" align="center"><input type="submit" value="Wyślij"></td></tr></form></table>';  endif;  echo '';  if ($_GET['view'] == 'bugreport'):  echo '';  if ($_GET['step'] != ""):  echo '';  if ($this->_tpl_vars['Bug'][6] == '0'):  echo '<form method="post" action=""><input type="hidden" name="programmer" value=1 /><input type="submit" value="';  echo @BUG_REPAIR;  echo '" /></form>';  echo $this->_tpl_vars['BugMessage'];  echo '';  else:  echo '<form method="post" action=""><input type="hidden" name="programmer" value=0 /><input type="submit" value="';  echo @BUG_LEAVE;  echo '" /></form>';  echo $this->_tpl_vars['BugMessage'];  echo '<p>';  echo @BUG_PROGRAMMER;  echo ' <b>';  echo $this->_tpl_vars['Programmer'];  echo '</b></p>';  endif;  echo '<b>';  echo @BUG_NAME;  echo ':</b> ';  echo $this->_tpl_vars['Bug'][2];  echo '<br /><b>';  echo @BUG_TYPE;  echo ':</b> ';  echo $this->_tpl_vars['BugType'];  echo '<br /><b>';  echo @BUG_LOC;  echo ':</b> ';  echo $this->_tpl_vars['Bug'][4];  echo '<br /><b>';  echo @BUG_DESC;  echo ':</b> ';  echo $this->_tpl_vars['Bug'][5];  echo '<br /><form method="post" action="grix_panel.php?view=bugreport&amp;step=';  echo $_GET['step'];  echo '"  onsubmit="if (this.bugcomment.value==\'\') ';  echo '{';  echo ' return confirm(\'';  echo @EMPTY_COMMENT;  echo '\') } else ';  echo '{';  echo ' return true; }"><b>';  echo @BUG_ACTIONS;  echo ':</b> <select name="actions">';  unset($this->_sections['k']);
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
 echo '<tr ';  if ($this->_tpl_vars['Bugs'][$this->_sections['k']['index']][5] != '0'):  echo 'class="bugrepair"';  endif;  echo '><td width="5%" align="center"><a ';  if ($this->_tpl_vars['Bugs'][$this->_sections['k']['index']][5] != '0'):  echo 'class="bugrepair" ';  endif;  echo 'href="grix_panel.php?view=bugreport&amp;step=';  echo $this->_tpl_vars['Bugs'][$this->_sections['k']['index']][0];  echo '">';  echo $this->_tpl_vars['Bugs'][$this->_sections['k']['index']][0];  echo '</td><td width="10%" align="center">';  echo $this->_tpl_vars['Bugs'][$this->_sections['k']['index']][1];  echo '</td><td width="15%" align="center">';  if ($this->_tpl_vars['Bugs'][$this->_sections['k']['index']][3] == 'text'):  echo '';  echo @BUG_TEXT;  echo '';  else:  echo '';  echo @BUG_CODE;  echo '';  endif;  echo '</td><td width="30%" align="center">';  echo ((is_array($_tmp=$this->_tpl_vars['Bugs'][$this->_sections['k']['index']][4])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 25, "\n", true) : smarty_modifier_wordwrap($_tmp, 25, "\n", true));  echo '</td><td width="40%" align="center">';  echo ((is_array($_tmp=$this->_tpl_vars['Bugs'][$this->_sections['k']['index']][2])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 25, "\n", true) : smarty_modifier_wordwrap($_tmp, 25, "\n", true));  echo '</td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'changelog'):  echo '';  echo $this->_tpl_vars['Changeinfo'];  echo '<br /><br /><form method="post" action="grix_panel.php?view=changelog&amp;step=add">';  echo $this->_tpl_vars['Changelocation'];  echo ': <input type="text" name="location" /><br />';  echo $this->_tpl_vars['Changetext'];  echo ': <textarea name="changetext" rows="5" cols="30"></textarea><br /><br /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'updates'):  echo '<form method="post" action="';  echo $this->_tpl_vars['Link'];  echo '"><table>';  if ($this->_tpl_vars['Link'] == "grix_panel.php?view=updates&action=add"):  echo '<tr><td>';  echo $this->_tpl_vars['Ulangsel'];  echo ':</td><td><select name="addlang">';  unset($this->_sections['addupdate']);
$this->_sections['addupdate']['name'] = 'addupdate';
$this->_sections['addupdate']['loop'] = is_array($_loop=$this->_tpl_vars['Ulang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['addupdate']['show'] = true;
$this->_sections['addupdate']['max'] = $this->_sections['addupdate']['loop'];
$this->_sections['addupdate']['step'] = 1;
$this->_sections['addupdate']['start'] = $this->_sections['addupdate']['step'] > 0 ? 0 : $this->_sections['addupdate']['loop']-1;
if ($this->_sections['addupdate']['show']) {
    $this->_sections['addupdate']['total'] = $this->_sections['addupdate']['loop'];
    if ($this->_sections['addupdate']['total'] == 0)
        $this->_sections['addupdate']['show'] = false;
} else
    $this->_sections['addupdate']['total'] = 0;
if ($this->_sections['addupdate']['show']):

            for ($this->_sections['addupdate']['index'] = $this->_sections['addupdate']['start'], $this->_sections['addupdate']['iteration'] = 1;
                 $this->_sections['addupdate']['iteration'] <= $this->_sections['addupdate']['total'];
                 $this->_sections['addupdate']['index'] += $this->_sections['addupdate']['step'], $this->_sections['addupdate']['iteration']++):
$this->_sections['addupdate']['rownum'] = $this->_sections['addupdate']['iteration'];
$this->_sections['addupdate']['index_prev'] = $this->_sections['addupdate']['index'] - $this->_sections['addupdate']['step'];
$this->_sections['addupdate']['index_next'] = $this->_sections['addupdate']['index'] + $this->_sections['addupdate']['step'];
$this->_sections['addupdate']['first']      = ($this->_sections['addupdate']['iteration'] == 1);
$this->_sections['addupdate']['last']       = ($this->_sections['addupdate']['iteration'] == $this->_sections['addupdate']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Ulang'][$this->_sections['addupdate']['index']];  echo '">';  echo $this->_tpl_vars['Ulang'][$this->_sections['addupdate']['index']];  echo '</option>';  endfor; endif;  echo '</select></td></tr>';  endif;  echo '<tr><td>';  echo $this->_tpl_vars['Utitle'];  echo ':</td><td><input type="text" name="addtitle" value="';  echo $this->_tpl_vars['Title1'];  echo '" /></td></tr><tr><td valign="top">';  echo $this->_tpl_vars['Utext'];  echo ':</td><td><textarea name="addupdate" rows="25" cols="70">';  echo $this->_tpl_vars['Text'];  echo '</textarea></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Button'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] != ""):  echo '<br />(<a href="grix_panel.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>)';  endif;  echo ''; ?>
