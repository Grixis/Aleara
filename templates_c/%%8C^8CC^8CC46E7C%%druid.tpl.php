<?php /* Smarty version 2.6.16, created on 2013-02-20 22:58:19
         compiled from druid.tpl */ ?>

<b>Kod do maksymalnego poziomu życia: <?php echo $this->_tpl_vars['c1']; ?>
<br></b>
<b>Kod do siły: <?php echo $this->_tpl_vars['c2']; ?>
<br></b>
<b>Kod do zręczności: <?php echo $this->_tpl_vars['c3']; ?>
<br><br></b>
<br><br>

<a href="druid.php?view=donate">Dotuj użytkownika brylantami</a><br>
<a href="druid.php?view=donate666">Dotuj użytkownika denaramii</a>
<br><br>
Pamiętaj, że kody się aktualizują dopiero po wbiciu kodu do wieży druida!
<br><br>-----------------------------------------------
<br><br>

<?php if ($this->_tpl_vars['View'] == 'donate'): ?>
    <form method="post" action="druid.php?view=donate&amp;step=donated">
    <?php echo $this->_tpl_vars['Donateid']; ?>
: <input type="text" name="id" /> <br />
	<?php unset($this->_sections['res']);
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
?>
		<input type="radio" name="what" <?php if ($this->_sections['res']['index'] == 0): ?> checked="true"<?php endif; ?>value="<?php echo $this->_tpl_vars['Resources'][$this->_sections['res']['index']]; ?>
"/> <?php echo $this->_tpl_vars['ResourcesNames'][$this->_sections['res']['index']]; ?>
<br/>
	<?php endfor; endif; ?>
    <?php echo $this->_tpl_vars['Donateamount']; ?>
: <input type="text" name="amount"/><br/>
    <input type="submit" value="<?php echo $this->_tpl_vars['Adonate']; ?>
" /></form>
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'donate666'): ?>
    <form method="post" action="druid.php?view=donate666&amp;step=donated">
    ID: <input type="text" name="id" /> <br />
	<?php unset($this->_sections['res']);
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
?>
		<input type="radio" name="what" <?php if ($this->_sections['res']['index'] == 0): ?> checked="true"<?php endif; ?>value="<?php echo $this->_tpl_vars['Resources'][$this->_sections['res']['index']]; ?>
"/> <?php echo $this->_tpl_vars['ResourcesNames'][$this->_sections['res']['index']]; ?>
<br/>
	<?php endfor; endif; ?>
    <?php echo $this->_tpl_vars['Donateamount']; ?>
: <input type="text" name="amount"/><br/>
    <input type="submit" value="DOTUJ" /></form>
<?php endif; ?>