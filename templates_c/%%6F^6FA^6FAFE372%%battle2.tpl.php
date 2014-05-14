<?php /* Smarty version 2.6.16, created on 2012-10-09 17:26:03
         compiled from battle2.tpl */ ?>
<center><IMG SRC="arenahonorowa(l).png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['Action'] == "" && $this->_tpl_vars['Battle'] == ""):  echo 'Witaj na arenie honorowej. Możesz tutaj prowadzić honorowe walki z graczami znajdującymi się w tym samym czasie na tej arenie. Za wygraną walkę nic nie zdobywasz, a za przegraną nic nie tracisz. Nie ma tutaj żadnych ograniczeń walk. Walczysz z kim chcesz, niezależnie od lvlu gracza, jego gildii itp.<ul';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo ' class="sword"';  endif;  echo '><center>   <li><a href="battle2.php?action=levellist&step=go">Zobacz listę graczy którzy aktualnie znajdują się na arenie. </a></li></center></ul><br><b>Ważne info:</b><br>- Aby przeciwnik zobaczył prezbieg walki musi mieć włączoną opcje raportów z walk przesyłanych na pocztę. Aktywuje się ją w opcjach konta - opcje dodatkowe.<br>- Gracz który znajduje się na arenie a jednocześnie na innej zakładce ma włączony czat może nie być wyświetlany na liście.';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'showalive'):  echo 'Oto lista graczy znajdujących się na arenie...';  echo $this->_tpl_vars['user'];  echo '<br /><br /><table width="100%"><tr><td width="10%"><b><u>';  echo $this->_tpl_vars['Lid'];  echo '</u></b></td><td width="45%"><b><u>';  echo $this->_tpl_vars['Lname'];  echo '</u></b></td><td width="45%"><b><u></u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Loption'];  echo '</u></b></td></tr>';  unset($this->_sections['player']);
$this->_sections['player']['name'] = 'player';
$this->_sections['player']['loop'] = is_array($_loop=$this->_tpl_vars['Enemyid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<tr><td>';  echo $this->_tpl_vars['Enemyid'][$this->_sections['player']['index']];  echo '</td><td><a href="view.php?view=';  echo $this->_tpl_vars['Enemyid'][$this->_sections['player']['index']];  echo '">';  echo $this->_tpl_vars['Enemyname'][$this->_sections['player']['index']];  echo '</a></td><td>';  echo $this->_tpl_vars['Enemyrank'][$this->_sections['player']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Enemytribe'][$this->_sections['player']['index']];  echo '</td><td>- <A href="battle2.php?battle=';  echo $this->_tpl_vars['Enemyid'][$this->_sections['player']['index']];  echo '">';  echo $this->_tpl_vars['Aattack'];  echo '</a></td></tr>';  endfor; endif;  echo '</table><br />';  echo $this->_tpl_vars['Orback'];  echo ' <a href="battle.php">';  echo $this->_tpl_vars['Bback'];  echo '</a>.';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'levellist'):  echo '<form method="post" action="battle2.php?action=levellist&amp;step=go">';  echo $this->_tpl_vars['Showall'];  echo ' <input type="text" name="slevel" size="5" /> ';  echo $this->_tpl_vars['Tolevel'];  echo ' <input type="text" name="elevel" size="5" /><input type="submit" value="';  echo $this->_tpl_vars['Ago'];  echo '" /></form>';  if ($this->_tpl_vars['Step'] == 'go'):  echo '<table width="100%"><tr><td width="10%"><b><u>';  echo $this->_tpl_vars['Lid'];  echo '</u></b></td><td width="45%"><b><u>';  echo $this->_tpl_vars['Lname'];  echo '</u></b></td><td width="25%"><b><u>';  echo $this->_tpl_vars['Lrank'];  echo '</u></b></td><td width="10%"><b><u>Poziom</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Loption'];  echo '</u></b></td></tr>';  unset($this->_sections['player']);
$this->_sections['player']['name'] = 'player';
$this->_sections['player']['loop'] = is_array($_loop=$this->_tpl_vars['Enemyid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<tr><td>';  echo $this->_tpl_vars['Enemyid'][$this->_sections['player']['index']];  echo '</td><td><a href="view.php?view=';  echo $this->_tpl_vars['Enemyid'][$this->_sections['player']['index']];  echo '">';  echo $this->_tpl_vars['Enemyname'][$this->_sections['player']['index']];  echo '</a></td><td>';  echo $this->_tpl_vars['Enemyrank'][$this->_sections['player']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Enemylevel'][$this->_sections['player']['index']];  echo '</td><td>- <A href="battle2.php?battle=';  echo $this->_tpl_vars['Enemyid'][$this->_sections['player']['index']];  echo '">';  echo $this->_tpl_vars['Aattack'];  echo '</a></td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'monster'):  echo '';  if ($this->_tpl_vars['Action'] == 'monster' && $this->_tpl_vars['View'] > 0):  echo '<br /><br />';  echo $this->_tpl_vars['Avatar'];  echo ' <br /><center><u><b>';  echo $this->_tpl_vars['Name'];  echo '</b></u></center> <br /><br /><b>';  echo $this->_tpl_vars['Tlevel'];  echo '</b>:  ';  echo $this->_tpl_vars['Level'];  echo '<br /><b>';  echo $this->_tpl_vars['Thp'];  echo '</b>:  ';  echo $this->_tpl_vars['Health'];  echo ' <br /><b>';  echo $this->_tpl_vars['Tdescription'];  echo '</b>: <br /><br />';  echo $this->_tpl_vars['Description'];  echo '<br /><br /><a href="battle2.php?action=monster&amp;next=';  echo $this->_tpl_vars['Id'];  echo '">(';  echo $this->_tpl_vars['Mt_walka'];  echo ')</a><a href="battle2.php?action=monster&amp;dalej=';  echo $this->_tpl_vars['Id'];  echo '">(';  echo $this->_tpl_vars['Msz_walka'];  echo ')</a><a href="battle2.php?action=monster">(';  echo $this->_tpl_vars['Aback'];  echo ')</a><br />';  else:  echo '';  if (! $this->_tpl_vars['Fight'] && ! $this->_tpl_vars['Fight1']):  echo '';  echo $this->_tpl_vars['Monsterinfo'];  echo '<br /><br />';  if ($this->_tpl_vars['Dalej'] > 0):  echo '<form method="post" action="battle.php?action=monster&amp;fight=';  echo $this->_tpl_vars['Id'];  echo '"><input type="submit" value="';  echo $this->_tpl_vars['Abattle2'];  echo '" /> ';  echo $this->_tpl_vars['Witha'];  echo ' <input type="text" size="5" name="razy" value="1" /> ';  echo $this->_tpl_vars['Name'];  echo '';  echo $this->_tpl_vars['Nend'];  echo '<input type="text" size="5" name="times" value="1" /> ';  echo $this->_tpl_vars['Mtimes'];  echo '</form>';  endif;  echo '';  if ($this->_tpl_vars['Next'] > 0):  echo '<form method="post" action="battle.php?action=monster&amp;fight1=';  echo $this->_tpl_vars['Id'];  echo '"><input type="submit" value="';  echo $this->_tpl_vars['Abattle2'];  echo '" /> ';  echo $this->_tpl_vars['Witha'];  echo ' <input type="text" size="5" name="razy" value="1" /> ';  echo $this->_tpl_vars['Name'];  echo '';  echo $this->_tpl_vars['Nend'];  echo '<input type="hidden" name="write" value="Y" /></form>';  endif;  echo '<table width="100%"><tr><td width="25%"><b><u>Nazwa</u></b></td><td width="75%"><b><u>Opis</u></b></td></tr><tr><td><div style="max-height:870px; overflow:auto">';  unset($this->_sections['monster']);
$this->_sections['monster']['name'] = 'monster';
$this->_sections['monster']['loop'] = is_array($_loop=$this->_tpl_vars['Enemyid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['monster']['show'] = true;
$this->_sections['monster']['max'] = $this->_sections['monster']['loop'];
$this->_sections['monster']['step'] = 1;
$this->_sections['monster']['start'] = $this->_sections['monster']['step'] > 0 ? 0 : $this->_sections['monster']['loop']-1;
if ($this->_sections['monster']['show']) {
    $this->_sections['monster']['total'] = $this->_sections['monster']['loop'];
    if ($this->_sections['monster']['total'] == 0)
        $this->_sections['monster']['show'] = false;
} else
    $this->_sections['monster']['total'] = 0;
if ($this->_sections['monster']['show']):

            for ($this->_sections['monster']['index'] = $this->_sections['monster']['start'], $this->_sections['monster']['iteration'] = 1;
                 $this->_sections['monster']['iteration'] <= $this->_sections['monster']['total'];
                 $this->_sections['monster']['index'] += $this->_sections['monster']['step'], $this->_sections['monster']['iteration']++):
$this->_sections['monster']['rownum'] = $this->_sections['monster']['iteration'];
$this->_sections['monster']['index_prev'] = $this->_sections['monster']['index'] - $this->_sections['monster']['step'];
$this->_sections['monster']['index_next'] = $this->_sections['monster']['index'] + $this->_sections['monster']['step'];
$this->_sections['monster']['first']      = ($this->_sections['monster']['iteration'] == 1);
$this->_sections['monster']['last']       = ($this->_sections['monster']['iteration'] == $this->_sections['monster']['total']);
 echo '<a onclick="$(\'#desc\').load(\'monster.php?show=';  echo $this->_tpl_vars['Enemyid'][$this->_sections['monster']['index']];  echo '\'); return false;"  href="battle.php?action=monster&view=';  echo $this->_tpl_vars['Enemyid'][$this->_sections['monster']['index']];  echo '">';  echo $this->_tpl_vars['Enemyname'][$this->_sections['monster']['index']];  echo '</a><br>';  endfor; endif;  echo '</div></td><td valign="top"><div id="desc" style="vertical-align:top;" ></div></td></table><br />';  echo $this->_tpl_vars['Orback2'];  echo ' <a href="battle2.php">';  echo $this->_tpl_vars['Bback2'];  echo '</a>.';  endif;  echo '';  endif;  echo '';  endif;  echo ''; ?>
