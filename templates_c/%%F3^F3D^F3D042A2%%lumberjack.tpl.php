<?php /* Smarty version 2.6.16, created on 2012-10-06 00:50:57
         compiled from lumberjack.tpl */ ?>
<center><IMG SRC="images/locations/lasdusz.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($_GET['action'] == ""):  echo '';  if ($this->_tpl_vars['Health'] > '0'):  echo '<form method="post" action="lumberjack.php?action=chop">';  echo @YOU_WANT;  echo '<select name="kind">';  unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['LumberKinds']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['max'] = (int)$this->_tpl_vars['Limit']+1;
$this->_sections['k']['show'] = true;
if ($this->_sections['k']['max'] < 0)
    $this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = min(ceil(($this->_sections['k']['step'] > 0 ? $this->_sections['k']['loop'] - $this->_sections['k']['start'] : $this->_sections['k']['start']+1)/abs($this->_sections['k']['step'])), $this->_sections['k']['max']);
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
 echo '<option value="';  echo $this->_sections['k']['index'];  echo '">';  echo $this->_tpl_vars['LumberKinds'][$this->_sections['k']['index']];  echo '</option>';  endfor; endif;  echo '</select><br /><br /><input type="submit" value="';  echo @A_CHOP;  echo '" /> ';  echo @ON_CHOP;  echo '<input type="text" name="amount" size="5"> ';  echo @T_ENERGY;  echo '</form>';  endif;  echo '<a href="las.php">';  echo @A_BACK;  echo '</a><br />';  endif;  echo '';  if ($_GET['action'] == 'chop'):  echo '';  echo $this->_tpl_vars['Message'];  echo '<br /><br />';  if ($this->_tpl_vars['Health'] > '0'):  echo '<a href="lumberjack.php">';  echo @A_BACK;  echo '</a><br />';  else:  echo '<a href="las.php">';  echo @A_BACK;  echo '</a><br />';  endif;  echo '';  endif;  echo ''; ?>