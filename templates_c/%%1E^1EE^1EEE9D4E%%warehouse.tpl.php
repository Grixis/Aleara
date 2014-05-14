<?php /* Smarty version 2.6.16, created on 2013-02-07 15:26:05
         compiled from warehouse.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'warehouse.tpl', 70, false),)), $this); ?>
<center><IMG SRC="images/locations/magazynkrolewski.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if (empty ( $_GET['action'] )):  echo '<p> Wędrując po Alearze widzisz wielki budynek. Jest on bardzo rozległy. Jesteś ciekaw co może się mieścić w takim dużym budynku. Podchodząc do niego widzisz jak mieszkańcu miasta wchodzą tam z dużymi worami a wychodzą z pełnymi sakwami. Widzisz też czyhających złodziei w ukryciu. Zaatakowali starszą Koboldzicę. Niestety nie udało Ci się pomóż staruszce. Zabili ją i obrabowali. Postanowiłeś zgłosić to strażnika dopiero po sprawdzeniu budynku. Wchodzisz do środka i widzisz wielką halę. Była obłożona licznymi szafami, regałami oraz składami na surowce wszelkiego rodzaju. Po chwili dostrzegasz wielką ladę. Widzisz za nią piękną Elfkę. Podchodzisz do niej i pytasz co to za miejsce. Elfka powiedziała Ci, że to Magazyn Królewski i że możesz tutaj sprzedawać surowce. Pokazała Ci również rozpiskę aktualnych cen. Zastanawiasz się co zrobić… </p>';  echo $this->_tpl_vars['Caravaninfo'];  echo '<center><fieldset style="width:70%"><table cellspacing="10px"><legend><u><b>Minerały:</b></u></legend><tr><th> ';  echo @T_MIN;  echo ' </th><th> Cena </th><th align="center"> ';  echo @T_AMOUNT;  echo ' </th><th colspan="1" align="center"> ';  echo @T_ACTION;  echo ' </th></tr>';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['max'] = (int)18;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
 echo '<tr><td> ';  echo $this->_tpl_vars['ItemNames'][$this->_sections['i']['index']];  echo ' </td><td align="right"> ';  echo $this->_tpl_vars['Items'][$this->_sections['i']['index']][0];  echo ' złota/szt.</td><td align="right"> ';  echo $this->_tpl_vars['Items'][$this->_sections['i']['index']][2];  echo ' </td><td><a href="warehouse.php?action=sell&amp;item=';  echo $this->_sections['i']['index'];  echo '"> ';  echo @A_SELL;  echo ' </a></td></tr>';  endfor; endif;  echo '</table></fieldset><fieldset style="width:70%"><br /><legend><u><b>Zioła:</b></u></legend><table cellspacing="10px"><tr><th> ';  echo @T_HERB;  echo ' </th><th> Cena </th><th align="center"> ';  echo @T_AMOUNT;  echo ' </th><th colspan="2" align="center"> ';  echo @T_ACTION;  echo ' </th></tr>';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['start'] = (int)18;
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
 echo '<tr><td> ';  echo $this->_tpl_vars['ItemNames'][$this->_sections['i']['index']];  echo ' </td><td align="right"> ';  echo $this->_tpl_vars['Items'][$this->_sections['i']['index']][0];  echo ' złota/szt. </td><td align="right"> ';  echo $this->_tpl_vars['Items'][$this->_sections['i']['index']][2];  echo ' </td><td><a href="warehouse.php?action=sell&amp;item=';  echo $this->_sections['i']['index'];  echo '"> ';  echo @A_SELL;  echo ' </a></td></tr>';  endfor; endif;  echo '</table></fieldset></center>';  endif;  echo '';  if (isset ( $_GET['action'] ) && $_GET['action'] == 'sell'):  echo '<p> ';  echo @WAREHOUSE_INFO2;  echo ' <br /></p><form method="post" action=""><input type="submit" value=" ';  echo @A_SELL;  echo ' " /> <input type="text" name="amount" size="5" /> ';  echo @AMOUNT;  echo ' ';  echo $this->_tpl_vars['Name'];  echo ' ';  echo @YOU_HAVE;  echo ' ';  echo $this->_tpl_vars['Amount'];  echo '  ';  echo $this->_tpl_vars['Name'];  echo '.</form>';  endif;  echo '';  if (isset ( $_GET['action'] ) && $_GET['action'] == 'history'):  echo '<p> ';  echo @INFO1;  echo ' <b> ';  echo $this->_tpl_vars['Name'];  echo ' </b> ';  echo @INFO2;  echo ' </p><div class="overflow">';  if (! empty ( $this->_tpl_vars['Data'] )):  echo '';  echo '<table cellpadding="3px">';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Data'][0]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<tr valign="bottom" align="center">';  echo '<th style="font-size:smaller"> ';  echo $this->_tpl_vars['Headers'][$this->_sections['i']['index']];  echo ' </th>';  unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['Data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
 echo '<td style="font-size:smaller"';  if ($this->_sections['i']['first']):  echo '';  echo '><div style="background-color: blue; max-width:12px; min-height:';  echo ((is_array($_tmp=$this->_tpl_vars['Data'][$this->_sections['j']['index']][0]*400/$this->_tpl_vars['Max'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d"));  echo 'px"></div> ';  echo $this->_tpl_vars['Data'][$this->_sections['j']['index']][0];  echo '</td><td style="font-size:smaller"><div style="background-color: yellow; max-width:12px; min-height:';  echo ((is_array($_tmp=$this->_tpl_vars['Data'][$this->_sections['j']['index']][1]*400/$this->_tpl_vars['Max'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d"));  echo 'px"></div> ';  echo $this->_tpl_vars['Data'][$this->_sections['j']['index']][1];  echo '';  else:  echo 'colspan="2">';  if ($this->_sections['i']['index'] == 1):  echo '';  echo '';  if ($this->_sections['j']['last']):  echo '';  echo @TODAY;  echo '';  else:  echo '-';  echo $this->_sections['j']['total']-$this->_sections['j']['rownum'];  echo '';  endif;  echo '';  else:  echo '';  echo '';  echo $this->_tpl_vars['Data'][$this->_sections['j']['index']][$this->_sections['i']['index']];  echo '';  endif;  echo '';  endif;  echo '</td>';  endfor; endif;  echo '</tr>';  endfor; endif;  echo '</table>';  else:  echo '<p>';  echo @NO_INFO;  echo '</p>';  endif;  echo '</div>';  endif;  echo '';  if (isset ( $this->_tpl_vars['Message'] )):  echo '<p>';  echo $this->_tpl_vars['Message'];  echo '</p>';  endif;  echo '';  if (isset ( $_GET['action'] )):  echo '<p><a href="warehouse.php">';  echo @A_BACK;  echo '</a></p>';  endif;  echo ''; ?>
