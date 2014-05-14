<?php /* Smarty version 2.6.16, created on 2012-10-06 07:55:17
         compiled from upg.tpl */ ?>
<center><img src="images/locations/opukuznia.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>Możesz tutaj zwiększyć statystyki przedmiotów.<br><br>
Dostępne modernizacje:<br>
<b>Łuk:</b> <i>premia do szybkości / wytrzymałosci<br></i>
<b>Strzały:</b> <i>pemia do ataku (nieopłacalne)<br></i>
<b>Broń ręczna:</b> <i>premia do ataku / szybkosci / wytrzymałości<br></i>
<b>Tarcza:</b> <i>premia do obrony / wytrzymałości / zręczności<br></i>
<b>Nagolenniki:</b> <i>premia do obrony / wytrzymałości / zręczności<br></i>
<b>Zbroja:</b> <i>premia do obrony / wytrzymałości / zręczności<br></i>
<b>Hełm:</b> <i>premia do obrony / wytrzymałości / zręczności<br></i>
<b>Dodatki:</b> <i>premia do mocy</i><br>
<b>Różdżka:</b> <i>NIE MOŻNA ULEPSZYĆ </i><br>
<b>Szata:</b> <i>premia do  mana</i>
<br><br><br><br>
Lista przedmiotów, które możesz ulepszyć:<br /><br />
<?php unset($this->_sections['log']);
$this->_sections['log']['name'] = 'log';
$this->_sections['log']['loop'] = is_array($_loop=$this->_tpl_vars['Date']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['log']['show'] = true;
$this->_sections['log']['max'] = $this->_sections['log']['loop'];
$this->_sections['log']['step'] = 1;
$this->_sections['log']['start'] = $this->_sections['log']['step'] > 0 ? 0 : $this->_sections['log']['loop']-1;
if ($this->_sections['log']['show']) {
    $this->_sections['log']['total'] = $this->_sections['log']['loop'];
    if ($this->_sections['log']['total'] == 0)
        $this->_sections['log']['show'] = false;
} else
    $this->_sections['log']['total'] = 0;
if ($this->_sections['log']['show']):

            for ($this->_sections['log']['index'] = $this->_sections['log']['start'], $this->_sections['log']['iteration'] = 1;
                 $this->_sections['log']['iteration'] <= $this->_sections['log']['total'];
                 $this->_sections['log']['index'] += $this->_sections['log']['step'], $this->_sections['log']['iteration']++):
$this->_sections['log']['rownum'] = $this->_sections['log']['iteration'];
$this->_sections['log']['index_prev'] = $this->_sections['log']['index'] - $this->_sections['log']['step'];
$this->_sections['log']['index_next'] = $this->_sections['log']['index'] + $this->_sections['log']['step'];
$this->_sections['log']['first']      = ($this->_sections['log']['iteration'] == 1);
$this->_sections['log']['last']       = ($this->_sections['log']['iteration'] == $this->_sections['log']['total']);
?>
                         <?php echo $this->_tpl_vars['Text'][$this->_sections['log']['index']]; ?>
 Moc/Atak/Obrona: (<?php echo $this->_tpl_vars['Muu'][$this->_sections['log']['index']]; ?>
) zręczność: (<?php echo $this->_tpl_vars['Zre'][$this->_sections['log']['index']]; ?>
) Wytrzymałość: (<?php echo $this->_tpl_vars['Wyt'][$this->_sections['log']['index']]; ?>
) Szybkość: (<?php echo $this->_tpl_vars['Szy'][$this->_sections['log']['index']]; ?>
) <?php echo $this->_tpl_vars['Date'][$this->_sections['log']['index']]; ?>
<br />
            <?php endfor; endif; ?>