<?php /* Smarty version 2.6.16, created on 2012-10-06 07:52:20
         compiled from train.tpl */ ?>
<center><IMG SRC="images/locations/blonie.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['Action'] == ''):  echo 'Idąc wieczorem dróżką  na przedmieściach miasta widzisz w oddali błyskające magiczne światła mieczy oraz różnych oręży. Zaciekawiony sytuacją podchodzisz bliżej i dostrzegasz, iż to tylko walki treningowe. Postanawiasz poobserwować chwilę trenujących. Widzisz jak zacięcie trenują wydając przy tym dzikie okrzyki, a pot spływa im po czołach. Po chwili podchodzi do Ciebie stary półmok z brodą ciągnącą się aż do ziemi. Powiedział Ci, że jest tutejszym trenerem walk i że może Cię wyszkolić za odpowiednią opłatą. Ty zaś zaglądasz w sakwę, aby sprawdzić czy masz trochę złota przy sobie. Zastanawiasz się co zrobić…<br /><ul>';  unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['StatsDesc']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<li><span id="';  echo $this->_tpl_vars['StatOptions'][$this->_sections['k']['index']];  echo '">';  echo $this->_tpl_vars['PlayerCost'][$this->_sections['k']['index']];  echo '</span> ';  echo @ENERGY;  echo ' ';  echo $this->_tpl_vars['StatsDesc'][$this->_sections['k']['index']];  echo '</li>';  endfor; endif;  echo '</ul>Za każdy trening pobiera się opłatę w wysokości <strong id="goldcost">';  echo $this->_tpl_vars['GoldCost'];  echo '</strong> sztuk złota.<br><br><form method=\'post\' action=\'train.php?action=train\'>';  echo @I_WANT;  echo ' <select id=\'train\' name=\'train\' onchange="changemax();">';  unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['StatOptions']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<option value=';  echo $this->_tpl_vars['StatOptions'][$this->_sections['j']['index']];  echo '>';  echo $this->_tpl_vars['TrainedStats'][$this->_sections['j']['index']];  echo '</option>';  endfor; endif;  echo '</select><input id="repval" type=\'text\' size=\'4\' value=\'0\' name=\'rep\' /> ';  echo @T_AMOUNT;  echo '. <input type=\'submit\' value=\'';  echo @A_TRAIN;  echo '\' /></form><div align="center"><div id="trainslider" style="width: 75%"></div></div><div id="slidervalue"></div><div id="energy" style="display: none;">';  echo $this->_tpl_vars['Energy'];  echo '</div><div id="money" style="display: none;">';  echo $this->_tpl_vars['Money'];  echo '</div></br>';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'train'):  echo '';  echo @COST;  echo ' <b>';  echo $this->_tpl_vars['energyCost'];  echo '</b> ';  echo @ENERGY_COST;  echo ', <strong>';  echo $this->_tpl_vars['goldCost'];  echo '</strong> sztuk złota<br />';  echo @WILL_GAIN;  echo ' <b>';  echo $this->_tpl_vars['gainedStat'];  echo '</b> ';  echo $this->_tpl_vars['gainedStatName'];  echo '.<form method=\'post\' action=\'train.php?action=train&amp;step=next\'><input type=\'hidden\' name=\'train\' value=\'';  echo $this->_tpl_vars['Train'];  echo '\' /><input type=\'hidden\' name=\'rep\' value=\'';  echo $this->_tpl_vars['Rep'];  echo '\' /><input type=\'submit\' value=\'';  echo @A_TRAIN;  echo '\' /></form></br>';  endif;  echo ''; ?>
</br>