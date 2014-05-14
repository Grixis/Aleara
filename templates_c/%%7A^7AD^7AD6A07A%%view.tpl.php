<?php /* Smarty version 2.6.16, created on 2013-03-06 20:48:23
         compiled from view.tpl */ ?>
<?php echo '';  echo '
<script language="javascript" type="text/javascript">

function Switchtab(tabid)
{
	elem=document.getElementById(tabid);
	document.getElementById("profile").innerHTML=elem.innerHTML;
}


</script>
';  echo '<center><b><a href="view.php?view=';  echo $this->_tpl_vars['Previousplayer'];  echo '"> << </a> <u>';  echo $this->_tpl_vars['User'];  echo '</u><a href="view.php?view=';  echo $this->_tpl_vars['Nextplayer'];  echo '"> >> </a></b> (';  echo $this->_tpl_vars['Id'];  echo ')</center><br /><div title=\'';  echo $this->_tpl_vars['AvatarBig'];  echo '\'>';  echo $this->_tpl_vars['Avatar'];  echo '</div><br><br><center><b>';  echo $this->_tpl_vars['user'];  echo '</b> to <b>';  echo $this->_tpl_vars['Rank'];  echo '</b>. <br>Znajduje się w cesarstwie od <b>';  echo $this->_tpl_vars['age'];  echo '</b> dni. <br>Jest to <b>';  echo $this->_tpl_vars['Race'];  echo '</b> który przyjął klasę  <b>';  echo $this->_tpl_vars['Clas'];  echo '</b>. <br>';  echo $this->_tpl_vars['user'];  echo ' posiada już <b>';  echo $this->_tpl_vars['Level'];  echo '</b> poziom. <br>Posiada podklasę <b>';  echo $this->_tpl_vars['podklasaa'];  echo '</b> oraz aktualnie przebywa w <b>';  echo $this->_tpl_vars['Location'];  echo '</b>. <br>Bogiem którego wyznaje ';  echo $this->_tpl_vars['user'];  echo ' jest <b>';  echo $this->_tpl_vars['deity'];  echo '.</b> <br>';  echo $this->_tpl_vars['user'];  echo ' aktualnie znajduje się w <b>';  echo $this->_tpl_vars['Page'];  echo '</b>. <br>';  echo $this->_tpl_vars['Rank'];  echo ' ma już za sobą <b>';  echo $this->_tpl_vars['Wins'];  echo '</b> wygranych walk oraz <b>';  echo $this->_tpl_vars['Losses'];  echo '</b> przegranych. <br>Ostatnia walka  zakończona pozytywnie była stoczona z <b>';  echo $this->_tpl_vars['Lastkilled'];  echo '</b> <br>a zakończona negatywnie z <b>';  echo $this->_tpl_vars['Lastkilledby'];  echo '</b> <br>Stan cywilny to: <b>';  echo $this->_tpl_vars['Stan'];  echo '</b>Klan w jakim sie znajduje nosi nazwę <b>';  echo $this->_tpl_vars['Clan'];  echo '</b>Aktualny status: <b>';  echo $this->_tpl_vars['Status'];  echo '</b>Ostatnio widziano tę osobę: <b>';  echo $this->_tpl_vars['Lastseen'];  echo '</b><br><br>';  if ($this->_tpl_vars['Pktfab'] > 0):  echo '<span title="Punkty fabularne zdobywa się za aktywny udział w sesjach i eventach fabularnych. Można je wymienić na różne przedmioty związane z fabułą. Przedmioty te nie dają premii mechanicznych.">Posiada <b>';  echo $this->_tpl_vars['Pktfab'];  echo '</b> punktów fabularnych</span><br><br>';  endif;  echo '';  echo $this->_tpl_vars['Immu'];  echo ' <br></center>';  echo $this->_tpl_vars['Gametype'];  echo '<br><br>';  if ($this->_tpl_vars['Permision'] > 0):  echo '<b>Posiadane zezwolenia:</b><br><table width="100%"><tr><th>Treść</th><th>Data nadania</th></tr>';  unset($this->_sections['perms']);
$this->_sections['perms']['name'] = 'perms';
$this->_sections['perms']['loop'] = is_array($_loop=$this->_tpl_vars['Permtext']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['perms']['show'] = true;
$this->_sections['perms']['max'] = $this->_sections['perms']['loop'];
$this->_sections['perms']['step'] = 1;
$this->_sections['perms']['start'] = $this->_sections['perms']['step'] > 0 ? 0 : $this->_sections['perms']['loop']-1;
if ($this->_sections['perms']['show']) {
    $this->_sections['perms']['total'] = $this->_sections['perms']['loop'];
    if ($this->_sections['perms']['total'] == 0)
        $this->_sections['perms']['show'] = false;
} else
    $this->_sections['perms']['total'] = 0;
if ($this->_sections['perms']['show']):

            for ($this->_sections['perms']['index'] = $this->_sections['perms']['start'], $this->_sections['perms']['iteration'] = 1;
                 $this->_sections['perms']['iteration'] <= $this->_sections['perms']['total'];
                 $this->_sections['perms']['index'] += $this->_sections['perms']['step'], $this->_sections['perms']['iteration']++):
$this->_sections['perms']['rownum'] = $this->_sections['perms']['iteration'];
$this->_sections['perms']['index_prev'] = $this->_sections['perms']['index'] - $this->_sections['perms']['step'];
$this->_sections['perms']['index_next'] = $this->_sections['perms']['index'] + $this->_sections['perms']['step'];
$this->_sections['perms']['first']      = ($this->_sections['perms']['iteration'] == 1);
$this->_sections['perms']['last']       = ($this->_sections['perms']['iteration'] == $this->_sections['perms']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Permtext'][$this->_sections['perms']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Permdate'][$this->_sections['perms']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '<center><b>';  echo @T_OPTIONS;  echo ':<br /></b><a href="fightlogs.php?view=';  echo $this->_tpl_vars['Id'];  echo '">Historia Walk</a><br>';  echo $this->_tpl_vars['Attack'];  echo '';  echo $this->_tpl_vars['Mail'];  echo '';  echo $this->_tpl_vars['Crime'];  echo '';  echo $this->_tpl_vars['Krwiopijca'];  echo '';  echo $this->_tpl_vars['Krwiopijca2'];  echo '';  echo $this->_tpl_vars['Lotr'];  echo '';  echo $this->_tpl_vars['Szpieg'];  echo '';  echo $this->_tpl_vars['Crime2'];  echo '';  echo $this->_tpl_vars['Crime3'];  echo '';  echo $this->_tpl_vars['zlodziejaszek'];  echo '';  echo $this->_tpl_vars['hipnoza'];  echo '';  echo $this->_tpl_vars['wampirt'];  echo '</center><b>Profil:</b><br><div id="profiletabs"><ul>';  unset($this->_sections['int']);
$this->_sections['int']['name'] = 'int';
$this->_sections['int']['loop'] = is_array($_loop=$this->_tpl_vars['Tabs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<li><a href="profiles.php?id=';  echo $this->_tpl_vars['Tabid'][$this->_sections['int']['index']];  echo '">';  echo $this->_tpl_vars['Tabs'][$this->_sections['int']['index']];  echo '</a></li>';  endfor; endif;  echo '</ul></div><br/><hr/>';  if ($this->_tpl_vars['Attack'] != "" || $this->_tpl_vars['Mail'] != "" || $this->_tpl_vars['Crime'] != ""):  echo '<center><br><br><br>';  if ($this->_tpl_vars['ViewerID'] == '1' || $this->_tpl_vars['ViewerID'] == '2'):  echo '<p>';  echo $this->_tpl_vars['PlayerIP'];  echo '<a href="memberlist.php?ip=';  echo $this->_tpl_vars['IP'];  echo '">';  echo $this->_tpl_vars['IP'];  echo '</a></p>Ostatnio aktywny:<br> ';  echo $this->_tpl_vars['Time'];  echo '';  endif;  echo '</center>';  endif;  echo ''; ?>
</br>