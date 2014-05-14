<?php /* Smarty version 2.6.16, created on 2012-10-06 00:43:26
         compiled from smelter.tpl */ ?>
<center><IMG SRC="images/locations/hutaa.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php if ($this->_tpl_vars['Step'] == ""): ?>
		<?php echo @MENU_INFO; ?>
<br /><br />
				- <a href="smelter.php?step=wytop"><?php echo @MENU_WYTOP; ?>
</a><br />
		- <a href="smelter.php?step=przetop"><?php echo @MENU_PRZETOP; ?>
</a><br />
	<?php if ($this->_tpl_vars['Class'] == 'Rzemieślnik'): ?>
		- <a href="smelter.php?step=wzmocnij"><?php echo @MENU_WZMOCNIJ; ?>
</a><br />
	<?php endif;  endif; ?>

<?php if ($this->_tpl_vars['Step'] == 'wzmocnij'): ?>
		<?php echo @WZMOCNIJ_OPIS; ?>

		<?php if ($this->_tpl_vars['Message'] != ""): ?>
			<b><?php echo $this->_tpl_vars['Message']; ?>
</b><br /><br />
		<?php endif; ?>			
		<form method="post" action="smelter.php?step=wzmocnij">
		<?php if ($this->_tpl_vars['Bweapons']): ?>
			<br /><u><?php echo @IN_BACKPACK;  echo @WEAPONS; ?>
</u>:<br />
		<?php unset($this->_sections['item1']);
$this->_sections['item1']['name'] = 'item1';
$this->_sections['item1']['loop'] = is_array($_loop=$this->_tpl_vars['Bweapons']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item1']['show'] = true;
$this->_sections['item1']['max'] = $this->_sections['item1']['loop'];
$this->_sections['item1']['step'] = 1;
$this->_sections['item1']['start'] = $this->_sections['item1']['step'] > 0 ? 0 : $this->_sections['item1']['loop']-1;
if ($this->_sections['item1']['show']) {
    $this->_sections['item1']['total'] = $this->_sections['item1']['loop'];
    if ($this->_sections['item1']['total'] == 0)
        $this->_sections['item1']['show'] = false;
} else
    $this->_sections['item1']['total'] = 0;
if ($this->_sections['item1']['show']):

            for ($this->_sections['item1']['index'] = $this->_sections['item1']['start'], $this->_sections['item1']['iteration'] = 1;
                 $this->_sections['item1']['iteration'] <= $this->_sections['item1']['total'];
                 $this->_sections['item1']['index'] += $this->_sections['item1']['step'], $this->_sections['item1']['iteration']++):
$this->_sections['item1']['rownum'] = $this->_sections['item1']['iteration'];
$this->_sections['item1']['index_prev'] = $this->_sections['item1']['index'] - $this->_sections['item1']['step'];
$this->_sections['item1']['index_next'] = $this->_sections['item1']['index'] + $this->_sections['item1']['step'];
$this->_sections['item1']['first']      = ($this->_sections['item1']['iteration'] == 1);
$this->_sections['item1']['last']       = ($this->_sections['item1']['iteration'] == $this->_sections['item1']['total']);
?>		
			<?php echo $this->_tpl_vars['Bweapons'][$this->_sections['item1']['index']]; ?>
<br/>
		<?php endfor; endif; ?>
		<?php endif; ?>	
		<?php if ($this->_tpl_vars['Bhelmets']): ?>
			<br /><u><?php echo @IN_BACKPACK;  echo @HELMETS; ?>
</u>:<br />
		<?php unset($this->_sections['item2']);
$this->_sections['item2']['name'] = 'item2';
$this->_sections['item2']['loop'] = is_array($_loop=$this->_tpl_vars['Bhelmets']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item2']['show'] = true;
$this->_sections['item2']['max'] = $this->_sections['item2']['loop'];
$this->_sections['item2']['step'] = 1;
$this->_sections['item2']['start'] = $this->_sections['item2']['step'] > 0 ? 0 : $this->_sections['item2']['loop']-1;
if ($this->_sections['item2']['show']) {
    $this->_sections['item2']['total'] = $this->_sections['item2']['loop'];
    if ($this->_sections['item2']['total'] == 0)
        $this->_sections['item2']['show'] = false;
} else
    $this->_sections['item2']['total'] = 0;
if ($this->_sections['item2']['show']):

            for ($this->_sections['item2']['index'] = $this->_sections['item2']['start'], $this->_sections['item2']['iteration'] = 1;
                 $this->_sections['item2']['iteration'] <= $this->_sections['item2']['total'];
                 $this->_sections['item2']['index'] += $this->_sections['item2']['step'], $this->_sections['item2']['iteration']++):
$this->_sections['item2']['rownum'] = $this->_sections['item2']['iteration'];
$this->_sections['item2']['index_prev'] = $this->_sections['item2']['index'] - $this->_sections['item2']['step'];
$this->_sections['item2']['index_next'] = $this->_sections['item2']['index'] + $this->_sections['item2']['step'];
$this->_sections['item2']['first']      = ($this->_sections['item2']['iteration'] == 1);
$this->_sections['item2']['last']       = ($this->_sections['item2']['iteration'] == $this->_sections['item2']['total']);
?>
			<?php echo $this->_tpl_vars['Bhelmets'][$this->_sections['item2']['index']]; ?>
<br/>
		<?php endfor; endif; ?>
		<?php endif; ?>	
		<?php if ($this->_tpl_vars['Barmors']): ?>
			<br /><u><?php echo @IN_BACKPACK;  echo @ARMORS; ?>
</u>:<br />
		<?php unset($this->_sections['item3']);
$this->_sections['item3']['name'] = 'item3';
$this->_sections['item3']['loop'] = is_array($_loop=$this->_tpl_vars['Barmors']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item3']['show'] = true;
$this->_sections['item3']['max'] = $this->_sections['item3']['loop'];
$this->_sections['item3']['step'] = 1;
$this->_sections['item3']['start'] = $this->_sections['item3']['step'] > 0 ? 0 : $this->_sections['item3']['loop']-1;
if ($this->_sections['item3']['show']) {
    $this->_sections['item3']['total'] = $this->_sections['item3']['loop'];
    if ($this->_sections['item3']['total'] == 0)
        $this->_sections['item3']['show'] = false;
} else
    $this->_sections['item3']['total'] = 0;
if ($this->_sections['item3']['show']):

            for ($this->_sections['item3']['index'] = $this->_sections['item3']['start'], $this->_sections['item3']['iteration'] = 1;
                 $this->_sections['item3']['iteration'] <= $this->_sections['item3']['total'];
                 $this->_sections['item3']['index'] += $this->_sections['item3']['step'], $this->_sections['item3']['iteration']++):
$this->_sections['item3']['rownum'] = $this->_sections['item3']['iteration'];
$this->_sections['item3']['index_prev'] = $this->_sections['item3']['index'] - $this->_sections['item3']['step'];
$this->_sections['item3']['index_next'] = $this->_sections['item3']['index'] + $this->_sections['item3']['step'];
$this->_sections['item3']['first']      = ($this->_sections['item3']['iteration'] == 1);
$this->_sections['item3']['last']       = ($this->_sections['item3']['iteration'] == $this->_sections['item3']['total']);
?>
			<?php echo $this->_tpl_vars['Barmors'][$this->_sections['item3']['index']]; ?>
<br/>
		<?php endfor; endif; ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['Bshields']): ?>
			<br /><u><?php echo @IN_BACKPACK;  echo @SHIELDS; ?>
</u>:<br />
		<?php unset($this->_sections['item4']);
$this->_sections['item4']['name'] = 'item4';
$this->_sections['item4']['loop'] = is_array($_loop=$this->_tpl_vars['Bshields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item4']['show'] = true;
$this->_sections['item4']['max'] = $this->_sections['item4']['loop'];
$this->_sections['item4']['step'] = 1;
$this->_sections['item4']['start'] = $this->_sections['item4']['step'] > 0 ? 0 : $this->_sections['item4']['loop']-1;
if ($this->_sections['item4']['show']) {
    $this->_sections['item4']['total'] = $this->_sections['item4']['loop'];
    if ($this->_sections['item4']['total'] == 0)
        $this->_sections['item4']['show'] = false;
} else
    $this->_sections['item4']['total'] = 0;
if ($this->_sections['item4']['show']):

            for ($this->_sections['item4']['index'] = $this->_sections['item4']['start'], $this->_sections['item4']['iteration'] = 1;
                 $this->_sections['item4']['iteration'] <= $this->_sections['item4']['total'];
                 $this->_sections['item4']['index'] += $this->_sections['item4']['step'], $this->_sections['item4']['iteration']++):
$this->_sections['item4']['rownum'] = $this->_sections['item4']['iteration'];
$this->_sections['item4']['index_prev'] = $this->_sections['item4']['index'] - $this->_sections['item4']['step'];
$this->_sections['item4']['index_next'] = $this->_sections['item4']['index'] + $this->_sections['item4']['step'];
$this->_sections['item4']['first']      = ($this->_sections['item4']['iteration'] == 1);
$this->_sections['item4']['last']       = ($this->_sections['item4']['iteration'] == $this->_sections['item4']['total']);
?>
			<?php echo $this->_tpl_vars['Bshields'][$this->_sections['item4']['index']]; ?>
<br/>
		<?php endfor; endif; ?>
		<?php endif; ?>
				
		<?php if ($this->_tpl_vars['Blegs']): ?>
			<br /><u><?php echo @IN_BACKPACK;  echo @LEGS2; ?>
</u>:<br />
		<?php unset($this->_sections['item5']);
$this->_sections['item5']['name'] = 'item5';
$this->_sections['item5']['loop'] = is_array($_loop=$this->_tpl_vars['Blegs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item5']['show'] = true;
$this->_sections['item5']['max'] = $this->_sections['item5']['loop'];
$this->_sections['item5']['step'] = 1;
$this->_sections['item5']['start'] = $this->_sections['item5']['step'] > 0 ? 0 : $this->_sections['item5']['loop']-1;
if ($this->_sections['item5']['show']) {
    $this->_sections['item5']['total'] = $this->_sections['item5']['loop'];
    if ($this->_sections['item5']['total'] == 0)
        $this->_sections['item5']['show'] = false;
} else
    $this->_sections['item5']['total'] = 0;
if ($this->_sections['item5']['show']):

            for ($this->_sections['item5']['index'] = $this->_sections['item5']['start'], $this->_sections['item5']['iteration'] = 1;
                 $this->_sections['item5']['iteration'] <= $this->_sections['item5']['total'];
                 $this->_sections['item5']['index'] += $this->_sections['item5']['step'], $this->_sections['item5']['iteration']++):
$this->_sections['item5']['rownum'] = $this->_sections['item5']['iteration'];
$this->_sections['item5']['index_prev'] = $this->_sections['item5']['index'] - $this->_sections['item5']['step'];
$this->_sections['item5']['index_next'] = $this->_sections['item5']['index'] + $this->_sections['item5']['step'];
$this->_sections['item5']['first']      = ($this->_sections['item5']['iteration'] == 1);
$this->_sections['item5']['last']       = ($this->_sections['item5']['iteration'] == $this->_sections['item5']['total']);
?>
			<?php echo $this->_tpl_vars['Blegs'][$this->_sections['item5']['index']]; ?>
<br/>
		<?php endfor; endif; ?>
		<?php endif; ?>
		 <select name="typ">
			<option value="a"><?php echo @ADAMANTYT; ?>
</option>
			<option value="k"><?php echo @KRYSZTAL; ?>
</option>
			<option value="m"><?php echo @METEORYT; ?>
</option>
		</select>			
		<input type="submit" value="<?php echo @A_WZMOCNIJ; ?>
"/>
		</form>
<?php endif; ?>

<?php if ($this->_tpl_vars['Step'] == 'przetop' || $this->_tpl_vars['Step'] == 'przetop_wszystkie'): ?>
		<?php echo @PRZETOP_OPIS; ?>

		<?php if ($this->_tpl_vars['Bweapons']): ?>
			<br /><u><?php echo @IN_BACKPACK;  echo @WEAPONS; ?>
</u>:<br />
		<form method="post" action="smelter.php?step=przetop">
		<?php unset($this->_sections['item1']);
$this->_sections['item1']['name'] = 'item1';
$this->_sections['item1']['loop'] = is_array($_loop=$this->_tpl_vars['Bweapons']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item1']['show'] = true;
$this->_sections['item1']['max'] = $this->_sections['item1']['loop'];
$this->_sections['item1']['step'] = 1;
$this->_sections['item1']['start'] = $this->_sections['item1']['step'] > 0 ? 0 : $this->_sections['item1']['loop']-1;
if ($this->_sections['item1']['show']) {
    $this->_sections['item1']['total'] = $this->_sections['item1']['loop'];
    if ($this->_sections['item1']['total'] == 0)
        $this->_sections['item1']['show'] = false;
} else
    $this->_sections['item1']['total'] = 0;
if ($this->_sections['item1']['show']):

            for ($this->_sections['item1']['index'] = $this->_sections['item1']['start'], $this->_sections['item1']['iteration'] = 1;
                 $this->_sections['item1']['iteration'] <= $this->_sections['item1']['total'];
                 $this->_sections['item1']['index'] += $this->_sections['item1']['step'], $this->_sections['item1']['iteration']++):
$this->_sections['item1']['rownum'] = $this->_sections['item1']['iteration'];
$this->_sections['item1']['index_prev'] = $this->_sections['item1']['index'] - $this->_sections['item1']['step'];
$this->_sections['item1']['index_next'] = $this->_sections['item1']['index'] + $this->_sections['item1']['step'];
$this->_sections['item1']['first']      = ($this->_sections['item1']['iteration'] == 1);
$this->_sections['item1']['last']       = ($this->_sections['item1']['iteration'] == $this->_sections['item1']['total']);
?>		
			<?php echo $this->_tpl_vars['Bweapons'][$this->_sections['item1']['index']]; ?>
<br/>
		<?php endfor; endif; ?>
		<input type="submit" value="<?php echo @A_PRZETOP; ?>
"/>
		<input type="text" name="amount" size="4"> <?php echo @HOW_MANY; ?>

		</form>
			<br />(<a href="smelter.php?step=przetop_wszystkie&action=W"><?php echo @A_PRZETOP_ALL;  echo @WEAPONS; ?>
</a>)<br />
		<?php endif; ?>	
			
		<?php if ($this->_tpl_vars['Bhelmets']): ?>
			<br /><u><?php echo @IN_BACKPACK;  echo @HELMETS; ?>
</u>:<br />
		<form method="post" action="smelter.php?step=przetop">
		<?php unset($this->_sections['item2']);
$this->_sections['item2']['name'] = 'item2';
$this->_sections['item2']['loop'] = is_array($_loop=$this->_tpl_vars['Bhelmets']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item2']['show'] = true;
$this->_sections['item2']['max'] = $this->_sections['item2']['loop'];
$this->_sections['item2']['step'] = 1;
$this->_sections['item2']['start'] = $this->_sections['item2']['step'] > 0 ? 0 : $this->_sections['item2']['loop']-1;
if ($this->_sections['item2']['show']) {
    $this->_sections['item2']['total'] = $this->_sections['item2']['loop'];
    if ($this->_sections['item2']['total'] == 0)
        $this->_sections['item2']['show'] = false;
} else
    $this->_sections['item2']['total'] = 0;
if ($this->_sections['item2']['show']):

            for ($this->_sections['item2']['index'] = $this->_sections['item2']['start'], $this->_sections['item2']['iteration'] = 1;
                 $this->_sections['item2']['iteration'] <= $this->_sections['item2']['total'];
                 $this->_sections['item2']['index'] += $this->_sections['item2']['step'], $this->_sections['item2']['iteration']++):
$this->_sections['item2']['rownum'] = $this->_sections['item2']['iteration'];
$this->_sections['item2']['index_prev'] = $this->_sections['item2']['index'] - $this->_sections['item2']['step'];
$this->_sections['item2']['index_next'] = $this->_sections['item2']['index'] + $this->_sections['item2']['step'];
$this->_sections['item2']['first']      = ($this->_sections['item2']['iteration'] == 1);
$this->_sections['item2']['last']       = ($this->_sections['item2']['iteration'] == $this->_sections['item2']['total']);
?>
			<?php echo $this->_tpl_vars['Bhelmets'][$this->_sections['item2']['index']]; ?>
<br/>
		<?php endfor; endif; ?>
		<input type="submit" value="<?php echo @A_PRZETOP; ?>
"/>
		<input type="text" name="amount" size="4"> <?php echo @HOW_MANY; ?>

		</form>
			<br />(<a href="smelter.php?step=przetop_wszystkie&action=H"><?php echo @A_PRZETOP_ALL;  echo @HELMETS; ?>
</a>)<br />
		<?php endif; ?>	
			
		<?php if ($this->_tpl_vars['Barmors']): ?>
			<br /><u><?php echo @IN_BACKPACK;  echo @ARMORS; ?>
</u>:<br />
		<form method="post" action="smelter.php?step=przetop">
		<?php unset($this->_sections['item3']);
$this->_sections['item3']['name'] = 'item3';
$this->_sections['item3']['loop'] = is_array($_loop=$this->_tpl_vars['Barmors']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item3']['show'] = true;
$this->_sections['item3']['max'] = $this->_sections['item3']['loop'];
$this->_sections['item3']['step'] = 1;
$this->_sections['item3']['start'] = $this->_sections['item3']['step'] > 0 ? 0 : $this->_sections['item3']['loop']-1;
if ($this->_sections['item3']['show']) {
    $this->_sections['item3']['total'] = $this->_sections['item3']['loop'];
    if ($this->_sections['item3']['total'] == 0)
        $this->_sections['item3']['show'] = false;
} else
    $this->_sections['item3']['total'] = 0;
if ($this->_sections['item3']['show']):

            for ($this->_sections['item3']['index'] = $this->_sections['item3']['start'], $this->_sections['item3']['iteration'] = 1;
                 $this->_sections['item3']['iteration'] <= $this->_sections['item3']['total'];
                 $this->_sections['item3']['index'] += $this->_sections['item3']['step'], $this->_sections['item3']['iteration']++):
$this->_sections['item3']['rownum'] = $this->_sections['item3']['iteration'];
$this->_sections['item3']['index_prev'] = $this->_sections['item3']['index'] - $this->_sections['item3']['step'];
$this->_sections['item3']['index_next'] = $this->_sections['item3']['index'] + $this->_sections['item3']['step'];
$this->_sections['item3']['first']      = ($this->_sections['item3']['iteration'] == 1);
$this->_sections['item3']['last']       = ($this->_sections['item3']['iteration'] == $this->_sections['item3']['total']);
?>
			<?php echo $this->_tpl_vars['Barmors'][$this->_sections['item3']['index']]; ?>
<br/>
		<?php endfor; endif; ?>
		<input type="submit" value="<?php echo @A_PRZETOP; ?>
"/>
		<input type="text" name="amount" size="4"> <?php echo @HOW_MANY; ?>

		</form>
			<br />(<a href="smelter.php?step=przetop_wszystkie&action=A"><?php echo @A_PRZETOP_ALL;  echo @ARMORS; ?>
</a>)<br />
		<?php endif; ?>
				
		<?php if ($this->_tpl_vars['Bshields']): ?>
			<br /><u><?php echo @IN_BACKPACK;  echo @SHIELDS; ?>
</u>:<br />
		<form method="post" action="smelter.php?step=przetop">
		<?php unset($this->_sections['item4']);
$this->_sections['item4']['name'] = 'item4';
$this->_sections['item4']['loop'] = is_array($_loop=$this->_tpl_vars['Bshields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item4']['show'] = true;
$this->_sections['item4']['max'] = $this->_sections['item4']['loop'];
$this->_sections['item4']['step'] = 1;
$this->_sections['item4']['start'] = $this->_sections['item4']['step'] > 0 ? 0 : $this->_sections['item4']['loop']-1;
if ($this->_sections['item4']['show']) {
    $this->_sections['item4']['total'] = $this->_sections['item4']['loop'];
    if ($this->_sections['item4']['total'] == 0)
        $this->_sections['item4']['show'] = false;
} else
    $this->_sections['item4']['total'] = 0;
if ($this->_sections['item4']['show']):

            for ($this->_sections['item4']['index'] = $this->_sections['item4']['start'], $this->_sections['item4']['iteration'] = 1;
                 $this->_sections['item4']['iteration'] <= $this->_sections['item4']['total'];
                 $this->_sections['item4']['index'] += $this->_sections['item4']['step'], $this->_sections['item4']['iteration']++):
$this->_sections['item4']['rownum'] = $this->_sections['item4']['iteration'];
$this->_sections['item4']['index_prev'] = $this->_sections['item4']['index'] - $this->_sections['item4']['step'];
$this->_sections['item4']['index_next'] = $this->_sections['item4']['index'] + $this->_sections['item4']['step'];
$this->_sections['item4']['first']      = ($this->_sections['item4']['iteration'] == 1);
$this->_sections['item4']['last']       = ($this->_sections['item4']['iteration'] == $this->_sections['item4']['total']);
?>
			<?php echo $this->_tpl_vars['Bshields'][$this->_sections['item4']['index']]; ?>
<br/>
		<?php endfor; endif; ?>
		<input type="submit" value="<?php echo @A_PRZETOP; ?>
"/>
		<input type="text" name="amount" size="4"> <?php echo @HOW_MANY; ?>

		</form>
			<br />(<a href="smelter.php?step=przetop_wszystkie&action=S"><?php echo @A_PRZETOP_ALL;  echo @SHIELDS; ?>
</a>)<br />
		<?php endif; ?>
				
		<?php if ($this->_tpl_vars['Blegs']): ?>
			<br /><u><?php echo @IN_BACKPACK;  echo @LEGS2; ?>
</u>:<br />
		<form method="post" action="smelter.php?step=przetop">
		<?php unset($this->_sections['item5']);
$this->_sections['item5']['name'] = 'item5';
$this->_sections['item5']['loop'] = is_array($_loop=$this->_tpl_vars['Blegs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item5']['show'] = true;
$this->_sections['item5']['max'] = $this->_sections['item5']['loop'];
$this->_sections['item5']['step'] = 1;
$this->_sections['item5']['start'] = $this->_sections['item5']['step'] > 0 ? 0 : $this->_sections['item5']['loop']-1;
if ($this->_sections['item5']['show']) {
    $this->_sections['item5']['total'] = $this->_sections['item5']['loop'];
    if ($this->_sections['item5']['total'] == 0)
        $this->_sections['item5']['show'] = false;
} else
    $this->_sections['item5']['total'] = 0;
if ($this->_sections['item5']['show']):

            for ($this->_sections['item5']['index'] = $this->_sections['item5']['start'], $this->_sections['item5']['iteration'] = 1;
                 $this->_sections['item5']['iteration'] <= $this->_sections['item5']['total'];
                 $this->_sections['item5']['index'] += $this->_sections['item5']['step'], $this->_sections['item5']['iteration']++):
$this->_sections['item5']['rownum'] = $this->_sections['item5']['iteration'];
$this->_sections['item5']['index_prev'] = $this->_sections['item5']['index'] - $this->_sections['item5']['step'];
$this->_sections['item5']['index_next'] = $this->_sections['item5']['index'] + $this->_sections['item5']['step'];
$this->_sections['item5']['first']      = ($this->_sections['item5']['iteration'] == 1);
$this->_sections['item5']['last']       = ($this->_sections['item5']['iteration'] == $this->_sections['item5']['total']);
?>
			<?php echo $this->_tpl_vars['Blegs'][$this->_sections['item5']['index']]; ?>
<br/>
		<?php endfor; endif; ?>
		<input type="submit" value="<?php echo @A_PRZETOP; ?>
"/>
		<input type="text" name="amount" size="4"> <?php echo @HOW_MANY; ?>

		</form>
			<br />(<a href="smelter.php?step=przetop_wszystkie&action=L"><?php echo @A_PRZETOP_ALL;  echo @LEGS2; ?>
</a>)<br />
		<?php endif; ?>	
		<br /><br /><?php echo $this->_tpl_vars['Message']; ?>
	
<?php endif; ?>

<?php if ($this->_tpl_vars['Step'] == 'wytop'): ?>
	<?php echo @SMELT_INFO; ?>
<br /><br />  
	<?php if ($this->_tpl_vars['Smelterlevel'] < '5'): ?>
		<?php echo @UPGRADE_INFO; ?>
<br />
		 <form method="post" action="smelter.php?step=wytop&amp;action=Y">
			<?php echo $this->_tpl_vars['Levelinfo']; ?>
<br />
			<input type="submit" value="<?php echo @A_UPGRADE; ?>
" />
		 </form>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['Smelterlevel'] == '5'): ?>
		<?php echo $this->_tpl_vars['Levelinfo']; ?>
<br />
	<?php endif; ?>
	   
	<?php echo @YOU_HAVE; ?>
<br />
	<?php unset($this->_sections['mins']);
$this->_sections['mins']['name'] = 'mins';
$this->_sections['mins']['loop'] = is_array($_loop=$this->_tpl_vars['Ilesurowce']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mins']['show'] = true;
$this->_sections['mins']['max'] = $this->_sections['mins']['loop'];
$this->_sections['mins']['step'] = 1;
$this->_sections['mins']['start'] = $this->_sections['mins']['step'] > 0 ? 0 : $this->_sections['mins']['loop']-1;
if ($this->_sections['mins']['show']) {
    $this->_sections['mins']['total'] = $this->_sections['mins']['loop'];
    if ($this->_sections['mins']['total'] == 0)
        $this->_sections['mins']['show'] = false;
} else
    $this->_sections['mins']['total'] = 0;
if ($this->_sections['mins']['show']):

            for ($this->_sections['mins']['index'] = $this->_sections['mins']['start'], $this->_sections['mins']['iteration'] = 1;
                 $this->_sections['mins']['iteration'] <= $this->_sections['mins']['total'];
                 $this->_sections['mins']['index'] += $this->_sections['mins']['step'], $this->_sections['mins']['iteration']++):
$this->_sections['mins']['rownum'] = $this->_sections['mins']['iteration'];
$this->_sections['mins']['index_prev'] = $this->_sections['mins']['index'] - $this->_sections['mins']['step'];
$this->_sections['mins']['index_next'] = $this->_sections['mins']['index'] + $this->_sections['mins']['step'];
$this->_sections['mins']['first']      = ($this->_sections['mins']['iteration'] == 1);
$this->_sections['mins']['last']       = ($this->_sections['mins']['iteration'] == $this->_sections['mins']['total']);
?>
		<b><?php echo $this->_tpl_vars['Ilesurowce'][$this->_sections['mins']['index']]; ?>
</b><?php echo $this->_tpl_vars['Ilesurowcetekst'][$this->_sections['mins']['index']]; ?>
<br />
	<?php endfor; endif; ?><br /><br />	

	<?php if ($this->_tpl_vars['Smelterlevel'] != '0'): ?>
		<?php echo @YOU_MAY; ?>
<br />
		<?php unset($this->_sections['smelt']);
$this->_sections['smelt']['name'] = 'smelt';
$this->_sections['smelt']['loop'] = is_array($_loop=$this->_tpl_vars['Ilemax']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['smelt']['show'] = true;
$this->_sections['smelt']['max'] = $this->_sections['smelt']['loop'];
$this->_sections['smelt']['step'] = 1;
$this->_sections['smelt']['start'] = $this->_sections['smelt']['step'] > 0 ? 0 : $this->_sections['smelt']['loop']-1;
if ($this->_sections['smelt']['show']) {
    $this->_sections['smelt']['total'] = $this->_sections['smelt']['loop'];
    if ($this->_sections['smelt']['total'] == 0)
        $this->_sections['smelt']['show'] = false;
} else
    $this->_sections['smelt']['total'] = 0;
if ($this->_sections['smelt']['show']):

            for ($this->_sections['smelt']['index'] = $this->_sections['smelt']['start'], $this->_sections['smelt']['iteration'] = 1;
                 $this->_sections['smelt']['iteration'] <= $this->_sections['smelt']['total'];
                 $this->_sections['smelt']['index'] += $this->_sections['smelt']['step'], $this->_sections['smelt']['iteration']++):
$this->_sections['smelt']['rownum'] = $this->_sections['smelt']['iteration'];
$this->_sections['smelt']['index_prev'] = $this->_sections['smelt']['index'] - $this->_sections['smelt']['step'];
$this->_sections['smelt']['index_next'] = $this->_sections['smelt']['index'] + $this->_sections['smelt']['step'];
$this->_sections['smelt']['first']      = ($this->_sections['smelt']['iteration'] == 1);
$this->_sections['smelt']['last']       = ($this->_sections['smelt']['iteration'] == $this->_sections['smelt']['total']);
?>
			<b><?php echo $this->_tpl_vars['Ilemax'][$this->_sections['smelt']['index']]; ?>
</b><?php echo $this->_tpl_vars['Ilemaxtekst'][$this->_sections['smelt']['index']]; ?>
<br />
		<?php endfor; endif; ?>
		<br /><br />
	<?php endif; ?>	
	
	<?php unset($this->_sections['smelt1']);
$this->_sections['smelt1']['name'] = 'smelt1';
$this->_sections['smelt1']['loop'] = is_array($_loop=$this->_tpl_vars['Asmelt']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['smelt1']['show'] = true;
$this->_sections['smelt1']['max'] = $this->_sections['smelt1']['loop'];
$this->_sections['smelt1']['step'] = 1;
$this->_sections['smelt1']['start'] = $this->_sections['smelt1']['step'] > 0 ? 0 : $this->_sections['smelt1']['loop']-1;
if ($this->_sections['smelt1']['show']) {
    $this->_sections['smelt1']['total'] = $this->_sections['smelt1']['loop'];
    if ($this->_sections['smelt1']['total'] == 0)
        $this->_sections['smelt1']['show'] = false;
} else
    $this->_sections['smelt1']['total'] = 0;
if ($this->_sections['smelt1']['show']):

            for ($this->_sections['smelt1']['index'] = $this->_sections['smelt1']['start'], $this->_sections['smelt1']['iteration'] = 1;
                 $this->_sections['smelt1']['iteration'] <= $this->_sections['smelt1']['total'];
                 $this->_sections['smelt1']['index'] += $this->_sections['smelt1']['step'], $this->_sections['smelt1']['iteration']++):
$this->_sections['smelt1']['rownum'] = $this->_sections['smelt1']['iteration'];
$this->_sections['smelt1']['index_prev'] = $this->_sections['smelt1']['index'] - $this->_sections['smelt1']['step'];
$this->_sections['smelt1']['index_next'] = $this->_sections['smelt1']['index'] + $this->_sections['smelt1']['step'];
$this->_sections['smelt1']['first']      = ($this->_sections['smelt1']['iteration'] == 1);
$this->_sections['smelt1']['last']       = ($this->_sections['smelt1']['iteration'] == $this->_sections['smelt1']['total']);
?>
		- <a href="smelter.php?step=wytop&amp;action=<?php echo $this->_tpl_vars['Smeltaction'][$this->_sections['smelt1']['index']]; ?>
"><?php echo $this->_tpl_vars['Asmelt'][$this->_sections['smelt1']['index']]; ?>
</a><br />
	<?php endfor; endif; ?>
	<?php if ($this->_tpl_vars['Smelt'] != "" && $this->_tpl_vars['Action'] != 'Y'): ?>
		<br />
		<form method="post" action="smelter.php?step=wytop&amp;action=<?php echo $this->_tpl_vars['Get']; ?>
">
			<input type="submit" value="<?php echo $this->_tpl_vars['Asmelt2']; ?>
" /><input type="text" name="amount" size="5" /><?php echo $this->_tpl_vars['Smeltm']; ?>
 
		</form>
	<?php endif; ?>
	<br /><?php echo $this->_tpl_vars['Message']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['Step'] != ""): ?>
	<br />(<a href="smelter.php"><?php echo $this->_tpl_vars['Aback']; ?>
</a>)
<?php endif; ?>