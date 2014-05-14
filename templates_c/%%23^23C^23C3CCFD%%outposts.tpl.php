<?php /* Smarty version 2.6.16, created on 2012-10-06 00:38:05
         compiled from outposts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'outposts.tpl', 422, false),)), $this); ?>

<?php if (empty ( $_GET ) || isset ( $_GET['action'] )): ?>
	<div id="tabcontainer">
		<noscript><?php echo @NO_SCRIPT; ?>
</noscript>
		<ul>
			<li><a href="outposts.php?view=menu"><span><?php echo @A_MENU; ?>
</span></a></li>
			<li><a href="outposts.php?view=my"><span><?php echo @A_MY; ?>
</span></a></li>
			<li><a href="outposts.php?view=taxes"><span><?php echo @A_TAX; ?>
</span></a></li>
			<li><a href="outposts.php?view=shop"><span><?php echo @A_SHOP; ?>
</span></a></li>
			<li><a href="outposts.php?view=gold"><span><?php echo @A_GOLD; ?>
</span></a></li>
			<li><a href="outposts.php?view=battle"><span><?php echo @A_ATTACK; ?>
</span></a></li>
			<li><a href="outposts.php?view=listing"><span><?php echo @A_LIST; ?>
</span></a></li>
			<li><a href="outposts.php?view=guide"><span><?php echo @A_GUIDE; ?>
</span></a></li>
			<li><a href="outposts.php?view=beasts"><span><?php echo @A_BEASTS; ?>
</span></a></li>
			<li><a href="outposts.php?view=veterans"><span><?php echo @A_VETERANS; ?>
</span></a></li>
		</ul>
	</div>
<?php endif; ?>

<?php if (isset ( $_GET['view'] )): ?>
	<?php if ($_GET['view'] == 'menu'): ?>
		<?php echo @OUT_INFO; ?>

	<?php endif; ?>

	<?php if ($_GET['view'] == 'gold'): ?>
		<div class="formupdate">
			<?php echo @GOLD_INFO; ?>
 <b><?php echo $this->_tpl_vars['Treasury']; ?>
</b> <?php echo @GOLD_COINS; ?>
.<br /><br />
			<form id="take" method="post" action="outposts.php?view=gold">
				<input type="submit" value="<?php echo @A_TAKE; ?>
" />
				<input type="text" name="zeton" id="treasury" value="0"/> <?php echo @FROM_OUT; ?>
.
				
			</form>
			
			<div id="treasuryslider"></div><br><br>
			<div id="maxgold" style="display: none"><?php echo $this->_tpl_vars['Treasury']; ?>
</div>
			<script type="text/javascript" language="javascript">
				$('#take').ajaxForm({target:'.formupdate'});
			<?php echo '$("#treasuryslider").slider({
			range: "min",
			max: $(\'#maxgold\').html(),
			min: 0,
			slide: function(event, ui) {
			$(\'#treasury\').val(ui.value); updatevalues(); }
			});
			'; ?>

			</script>
			<form id="give" method="post" action="outposts.php?view=gold">
				<input type="submit" value="<?php echo @A_ADD; ?>
" />
				<input type="text" name="sztuki" id="goldinhand" value="0" /> <?php echo @TO_OUT; ?>
.
				
			</form>
			
			<div id="zetonslider"></div>
			<div id="zetonmax" style="display: none"><?php echo $this->_tpl_vars['GoldInHand']; ?>
</div>
			<script type="text/javascript" language="javascript">
				$('#give').ajaxForm({target:'.formupdate'});
				$('#take').ajaxForm({target:'.formupdate'});
			<?php echo '$("#zetonslider").slider({
			range: "min",
			max: $(\'#zetonmax\').html(),
			min: 0,
			slide: function(event, ui) {
			$(\'#goldinhand\').val(ui.value); updatevalues(); }
			});
			'; ?>

			</script>

			<?php if (isset ( $this->_tpl_vars['Message'] )): ?>
				<p><?php echo $this->_tpl_vars['Message']; ?>
</p>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php if ($_GET['view'] == 'my'): ?>
		<div class="formupdate">
		<p><?php echo @WELCOME; ?>
.</p><b><u><?php echo @OUTPOST_INFO; ?>
</u></b></p>
		<table>
		<tr><td width="30%"><?php echo @LAND_A; ?>
:</td><td width="70%"><?php echo $this->_tpl_vars['Size']; ?>
</td></tr>
		<tr><td><?php echo @AP; ?>
:</td><td><?php echo $this->_tpl_vars['Turns']; ?>
</td></tr>
		<tr><td><?php echo @T_GOLD_COINS; ?>
:</td><td><?php echo $this->_tpl_vars['Gold']; ?>
</td></tr>
		<tr><td><?php echo @T_SOLDIERS; ?>
:</td><td><?php echo $this->_tpl_vars['Warriors']; ?>
 (<?php echo @T_FREE; ?>
: <?php echo $this->_tpl_vars['Maxtroops']; ?>
)</td></tr>
		<tr><td><?php echo @T_ARCHERS; ?>
:</td><td><?php echo $this->_tpl_vars['Archers']; ?>
 (<?php echo @T_FREE; ?>
: <?php echo $this->_tpl_vars['Maxtroops']; ?>
)</td></tr>
		<tr><td><?php echo @T_FORTS; ?>
:</td><td><?php echo $this->_tpl_vars['Barricades']; ?>
 (<?php echo @T_FREE; ?>
: <?php echo $this->_tpl_vars['Maxequip']; ?>
)</td></tr>
		<tr><td><?php echo @T_CATAPULTS; ?>
:</td><td><?php echo $this->_tpl_vars['Catapults']; ?>
 (<?php echo @T_FREE; ?>
: <?php echo $this->_tpl_vars['Maxequip']; ?>
)</td></tr>
		<?php if ($this->_tpl_vars['Size'] > 3): ?>
			<tr><td><?php echo @T_LAIRS; ?>
:</td><td><?php echo $this->_tpl_vars['Fence']; ?>
 (<?php echo @USED; ?>
: <?php echo $this->_tpl_vars['Monsters'][0]; ?>
, <?php echo @T_MAX; ?>
: <?php echo $this->_tpl_vars['Maxfence']; ?>
)</td></tr>
			<?php if ($this->_tpl_vars['Monsters'][0]): ?>
				<tr><td><?php echo @T_MONSTERS; ?>
:</td><td><?php echo @T_POWER; ?>
: <?php echo $this->_tpl_vars['Monsters'][1]; ?>
, <?php echo @U_DEFENSE; ?>
: <?php echo $this->_tpl_vars['Monsters'][2]; ?>
, <?php echo @MORALE_MOD; ?>
: <?php echo $this->_tpl_vars['Monsters'][3]; ?>
</td></tr>
			<?php endif; ?>

			<tr><td><?php echo @T_BARRACKS; ?>
:</td><td><?php echo $this->_tpl_vars['Barracks']; ?>
 (<?php echo @USED; ?>
: <?php echo $this->_tpl_vars['Veterans'][0]; ?>
, <?php echo @T_MAX; ?>
: <?php echo $this->_tpl_vars['Maxbarracks']; ?>
)</td></tr>
			<?php if ($this->_tpl_vars['Veterans'][0]): ?>
				<tr><td><?php echo @T_VETERANS; ?>
:</td><td><?php echo @T_POWER; ?>
: <?php echo $this->_tpl_vars['Veterans'][1]; ?>
, <?php echo @U_DEFENSE; ?>
: <?php echo $this->_tpl_vars['Veterans'][2]; ?>
, <?php echo @MORALE_MOD2; ?>
: <?php echo $this->_tpl_vars['Veterans'][0]*10; ?>
</td></tr>
			<?php endif; ?>
		<?php endif; ?>
		<tr><td><?php echo @T_FATIGUE; ?>
:</td><td><?php echo $this->_tpl_vars['Fatigue']; ?>
%</td></tr>
		<tr><td><?php echo @T_MORALE; ?>
:</td><td><?php echo $this->_tpl_vars['Morale']; ?>
 (<?php echo $this->_tpl_vars['Moralename']; ?>
)</td></tr>
		<tr><td><?php echo @T_COST; ?>
:</td><td><?php echo $this->_tpl_vars['Cost']; ?>
 <?php echo @T_COST_G; ?>
</td></tr>
		<tr><td>
			<b><u><?php echo @T_BONUS; ?>
</u></b><span id="leadership" style="visibility: hidden"><?php echo $this->_tpl_vars['Leadership']; ?>
</span><br />
			<?php echo @T_ATTACK; ?>
: +<?php echo $this->_tpl_vars['Attack']; ?>
%<br />
			<?php echo @T_DEFENSE; ?>
: +<?php echo $this->_tpl_vars['Defense']; ?>
%<br />
			<?php echo @T_TAX; ?>
: +<?php echo $this->_tpl_vars['Tax']; ?>
%<br />
			<?php echo @T_LOSSES; ?>
: -<?php echo $this->_tpl_vars['Lost']; ?>
%<br />
			<?php echo @T_COST_B; ?>
: -<?php echo $this->_tpl_vars['Bcost']; ?>
%
			</td>
			<td>
			<?php if ($this->_tpl_vars['Leadership']-$this->_tpl_vars['Attack']-$this->_tpl_vars['Defense']-$this->_tpl_vars['Tax']-$this->_tpl_vars['Lost']-$this->_tpl_vars['Bcost']+5 > 1): ?>
				<form id="addbonus" method="get" action="outposts.php?view=my">
					<input type="submit" value="<?php echo @A_ADD; ?>
" />
					<input type="text" id="bonus" name="bonus" value="0" size="2" /><?php echo @TO; ?>

					<select name="type">
						<option value="battack"><?php echo @T_ATTACK; ?>
</option>
						<option value="bdefense"><?php echo @T_DEFENSE; ?>
</option>
						<option value="btax"><?php echo @T_TAX; ?>
</option>
						<option value="blost"><?php echo @T_LOSSES; ?>
</option>
						<option value="bcost"><?php echo @T_COST_B; ?>
</option>
					</select>
				</form>
				<script type="text/javascript" language="javascript">
					$('#addbonus').ajaxForm({target:'.formupdate'});
				</script>
			<?php endif; ?>
			</td></tr>
		</table>
		</div>
	<?php endif; ?>

	<?php if ($_GET['view'] == 'taxes'): ?>
		<div class="formupdate">
			<p><?php echo @TAX_INFO; ?>
</p>
			<form class="inlineForm" id="tax" method="post" action="outposts.php?view=taxes">
				<input type="submit" value="<?php echo @A_SEND; ?>
" /> <?php echo @SOLDIERS; ?>

				<input type="text" id="attackpoints" name="amount" value="0" /> <?php echo @TIMES; ?>

			</form>
			<div id="taxmax" style="display: none"><?php echo $this->_tpl_vars['AttackPoints']; ?>
</div>
			<div id="taxslider"></div>
			<script type="text/javascript" language="javascript">
				$('#tax').ajaxForm({target:'.formupdate'});
				<?php echo '$("#taxslider").slider({
			range: "min",
			max: $(\'#taxmax\').html(),
			min: 0,
			slide: function(event, ui) {
			$(\'#attackpoints\').val(ui.value); updatevalues(); }
			});
			'; ?>

			</script>
			<?php if (isset ( $this->_tpl_vars['Message'] )): ?>
				<p><?php echo $this->_tpl_vars['Message']; ?>
</p>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php if ($_GET['view'] == 'shop'): ?>
		<div class="formupdate">
		<p><?php echo @SHOP_INFO; ?>
 <b><span id="maxsoldiers"><?php echo $this->_tpl_vars['Maxtroops']; ?>
</span></b> <?php echo @SHOP_INFO2; ?>
 <b><span id="maxmachines"><?php echo $this->_tpl_vars['Maxequips']; ?>
</span></b> <?php echo @SHOP_INFO3; ?>
</p>
		<span id="maxsize" style="visibility: hidden"><?php echo $this->_tpl_vars['MaxPossibleLevel']; ?>
</span>
		<span id="maxlairs" style="visibility: hidden"><?php echo $this->_tpl_vars['MaxPossibleLair']; ?>
</span>
		<span id="maxbarracks" style="visibility: hidden"><?php echo $this->_tpl_vars['MaxPossibleBarrack']; ?>
</span>
		<ul>
			<li><?php echo @OUTPOST_ON_LEVEL; ?>
 <span id="size"><?php echo $this->_tpl_vars['Size']; ?>
</span>, <span id="baselairs"><?php echo $this->_tpl_vars['BaseLairs']; ?>
</span> <?php echo @LAIRS; ?>
, <span id="basebarracks"><?php echo $this->_tpl_vars['BaseBarracks']; ?>
</span> <?php echo @BARRACKS; ?>
</li>
			<li id="treasury"><?php echo $this->_tpl_vars['Gold'];  echo @GOLD_COINS; ?>
</li>
			<li id="platinum"><?php echo $this->_tpl_vars['Platinum'];  echo @PLATINUM_PIECES; ?>
</li>
			<li id="pine"><?php echo $this->_tpl_vars['Pine'];  echo @PINE_PIECES; ?>
</li>
			<li id="crystal"><?php echo $this->_tpl_vars['Crystal'];  echo @CRYSTAL_PIECES; ?>
</li>
			<li id="adamantium"><?php echo $this->_tpl_vars['Adamantium'];  echo @ADAMANTIUM_PIECES; ?>
</li>
			<li id="meteor"><?php echo $this->_tpl_vars['Meteor'];  echo @METEOR_PIECES; ?>
</li>
		</ul>
		<?php if (isset ( $this->_tpl_vars['Message'] )): ?>
			<p><?php echo $this->_tpl_vars['Message']; ?>
</p>
		<?php endif; ?>
		<fieldset>
			<legend><?php echo @OUTPOST_DEVELOPMENT; ?>
</legend>
			<form id="buylevel" method="post" action="outposts.php?view=shop">
				<input type="submit" value="<?php echo @LEVEL_INFO; ?>
"/>
				<input type="text" id="level" size="2" name="level" value="0"/ onchange="size.setValue(this.value); size.recalculate();"> <?php echo @LEVELS_SPENDING; ?>

				<span id="size-gold">0</span> <?php echo @GOLD_COINS; ?>
,
				<span id="size-plat">0</span> <?php echo @PLATINUM_PIECES; ?>
,
				<span id="size-pine">0</span> <?php echo @PINE_PIECES; ?>
.
			</form>
			 <br><div id="size-slider"></div><br>
			
			<script type="text/javascript" language="javascript">
				$('#buylevel').ajaxForm({target:'.formupdate'});
			<?php echo '
      $("#size-slider").slider({
			range: "min",
			max: $(\'#maxsize\').html(),
			min: 0,
			slide: function(event, ui) {
			size(ui.value); }
			});
			'; ?>

			</script>
			
			<form id="buylair" method="post" action="outposts.php?view=shop">
				<input type="submit" value="<?php echo @A_BUY; ?>
"/>
				<input type="text" id="lairs" size="1" name="lairs" value="0"/> <?php echo @LAIRS_SPENDING; ?>

				<span id="lair-gold">0</span> <?php echo @GOLD_COINS; ?>
,
				<span id="lair-crys">0</span> <?php echo @CRYSTAL_PIECES; ?>
,
				<span id="lair-mete">0</span> <?php echo @METEOR_PIECES; ?>
.
			</form>
			<br><div id="lairs-slider"></div><br>
	
			

			<script type="text/javascript" language="javascript">
				$('#buylair').ajaxForm({target:'.formupdate'});
					<?php echo '
      $("#lairs-slider").slider({
			range: "min",
			max: $(\'#maxlairs\').html(),
			min: 0,
			slide: function(event, ui) {
			lairs(ui.value); }
			});
			'; ?>

			</script>
			<form id="buybarrack" method="post" action="outposts.php?view=shop">
				<input type="submit" value="<?php echo @A_BUY; ?>
"/>
				<input type="text" id="barracks" size="1" name="barracks" value="0"/> <?php echo @BARRACKS_SPENDING; ?>

				<span id="barr-gold">0</span> <?php echo @GOLD_COINS; ?>
,
				<span id="barr-adam">0</span> <?php echo @ADAMANTIUM_PIECES; ?>
,
				<span id="barr-mete">0</span> <?php echo @METEOR_PIECES; ?>
.
			</form>
			<br><div id="barracks-slider"></div><br>
			
			<script type="text/javascript" language="javascript">
				$('#buybarrack').ajaxForm({target:'.formupdate'});
					<?php echo '
      $("#barracks-slider").slider({
			range: "min",
			max: $(\'#maxbarracks\').html(),
			min: 0,
			slide: function(event, ui) {
			barracks(ui.value); }
			});
			'; ?>

			</script>
		</fieldset>
		<fieldset>
			<legend><?php echo @ARMY_DEVELOPMENT; ?>
</legend>
			<form id="army" method="post" action="outposts.php?view=shop">
				<input type="submit" value="<?php echo @A_BUY; ?>
" name="buy" /> <?php echo @SPENDING; ?>
 <span id="armysum">0</span> <?php echo @GOLD_COINS; ?>
:<br /><br />
				<input type="text" id="warriors" name="warriors" value="0" size="5" /> <?php echo @B_SOLDIERS; ?>
<br />
				<br><div id="warrior-slider"></div><br>
        
				<input type="text" id="archers" name="archers" value="0" size="5" /> <?php echo @B_ARCHERS; ?>
<br />
				<br><div id="archer-slider"></div><br>
        
				<input type="text" id="barricades" name="barricades" value="0" size="5" /> <?php echo @B_FORTS; ?>
<br />
				<br><div id="barricade-slider"></div><br>
        
				<input type="text" id="catapults" name="catapults" value="0" size="5" /> <?php echo @B_MACHINES; ?>
<br />
				<br><div id="catapult-slider"></div><br>
        
			</form>
			<script type="text/javascript" language="javascript">
				$('#army').ajaxForm({target:'.formupdate'});
			  <?php echo '$("#warrior-slider").slider({
			range: "min",
			max: $(\'#maxsoldiers\').html(),
			min: 0,
			slide: function(event, ui) {
			warriors(ui.value); }
			});
			$("#archer-slider").slider({
			range: "min",
			max: $(\'#maxsoldiers\').html(),
			min: 0,
			slide: function(event, ui) {
			archers(ui.value); }
			});
			$("#barricade-slider").slider({
			range: "min",
			max: $(\'#maxmachines\').html(),
			min: 0,
			slide: function(event, ui) {
			barricades(ui.value); }
			});
			$("#catapult-slider").slider({
			range: "min",
			max: $(\'#maxmachines\').html(),
			min: 0,
			slide: function(event, ui) {
			catapults(ui.value); }
			});
			'; ?>

			</script>

			</script>
		</fieldset>
		</div>
		


	<?php endif; ?>

	<?php if ($_GET['view'] == 'battle'): ?>
		<div class="formupdate">
			<p><?php echo @BATTLE_INFO; ?>
</p>
			<form id="fight" method="post" action="outposts.php?view=battle">
				<?php echo @OUT_ID; ?>
: <input type="text" name="oid" size="5" value="1" /><br />
				<?php echo @AMOUNT_A; ?>
: <input type="text" name="amount" size="2" value="1" /> <input type="submit" value="<?php echo @A_ATTACK; ?>
" />
			</form>
			<script type="text/javascript" language="javascript">
				$('#fight').ajaxForm({target:'.formupdate'});
			</script>
			<?php if (isset ( $this->_tpl_vars['AttackerInfo'] )): ?>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['AttackerInfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
					<?php echo $this->_tpl_vars['AttackerInfo'][$this->_sections['i']['index']]; ?>

				<?php endfor; endif; ?>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php if ($_GET['view'] == 'guide'): ?>
		<p><?php echo @INFO1; ?>
</p>
	<?php endif; ?>

	<?php if ($_GET['view'] == 'listing'): ?>
		<div class="formupdate">
		<?php if (! isset ( $this->_tpl_vars['Outposts'] )): ?>
			<p><?php echo @LISTING_INFO; ?>
<br /></p>
			<span id="biggestOutpost" style="visibility: hidden"><?php echo $this->_tpl_vars['MaxLevel']; ?>
</span>
			<form id="searchFromTo" method="post" action="outposts.php?view=listing">
				<input type="submit" value="<?php echo @A_SHOW; ?>
" /> <?php echo @FROM_L; ?>
 <input type="text" id="slevel" name="slevel" size="5" value="1" /> <?php echo @TO_L; ?>

				<input type="text" id="elevel" name="elevel" size="5" value="<?php echo $this->_tpl_vars['MaxLevel']; ?>
" />
			</form>
			<div id="debug"></div>
			<div id="levels-range"></div>
			<script type="text/javascript" language="javascript">
			
			$('#searchFromTo').ajaxForm({target:'.formupdate'});
			<?php echo '$("#levels-range").slider({
			range: true,
			max: $(\'#biggestOutpost\').html(),
			min: 1,
			slide: function(event, ui) {
			$(\'#slevel\').val(ui.values[0]); $(\'#elevel\').val(ui.values[1]);  }
			});
			'; ?>

			</script><br />
			<form id="searchPlayer" method="post" action="outposts.php?view=listing">
				<input type="submit" value="<?php echo @A_SEARCH; ?>
" /> <?php echo @SEARCH_BY_NAME; ?>

				<input type="text" name="searched" value="*"/>
			</form><br />
			<script type="text/javascript" language="javascript">
				$('#searchPlayer').ajaxForm({target:'.formupdate'});
			</script><br />
			<form id="searchId" method="post" action="outposts.php?view=listing">
				<input type="submit" value="<?php echo @A_SHOW; ?>
" /> <?php echo @SEARCH_BY_ID; ?>

				<input type="text" size="5" name="id" value="1" />
			</form>
			<script type="text/javascript" language="javascript">
				$('#searchId').ajaxForm({target:'.formupdate'});
			</script><br />
			<form id="searchTribe" method="post" action="outposts.php?view=listing">
				<input type="submit" value="<?php echo @A_SEARCH; ?>
" /> <?php echo @SEARCH_BY_TRIBE; ?>

				<input type="text" name="tribe" value="*" />
			</form>
			<script type="text/javascript" language="javascript">
				$('#searchTribe').ajaxForm({target:'.formupdate'});
			</script>
		<?php else: ?>
			<table  width="70%">
			<tr>
				<th><?php echo @OUT_SIZE; ?>
</th>
				<th><?php echo @OUT_OWNER; ?>
</th>
				<th><?php echo @OUT_ATTACK; ?>
</th>
			</tr>
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Outposts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
			<tr>
				<td><?php echo $this->_tpl_vars['Outposts'][$this->_sections['i']['index']][0]; ?>
</td>
				<td><a href="view.php?view=<?php echo $this->_tpl_vars['Outposts'][$this->_sections['i']['index']][2]; ?>
"><?php echo $this->_tpl_vars['Outposts'][$this->_sections['i']['index']][3]; ?>
 ID: <?php echo $this->_tpl_vars['Outposts'][$this->_sections['i']['index']][2]; ?>
</a></td>
				<td><?php if ($this->_tpl_vars['Outposts'][$this->_sections['i']['index']][1] < 3 && $this->_tpl_vars['Outposts'][$this->_sections['i']['index']][0] > $this->_tpl_vars['MinSize']): ?><a href="#" class="attack" id="<?php echo $this->_tpl_vars['Outposts'][$this->_sections['i']['index']][2]; ?>
" ><?php echo @A_ATTACK; ?>
</a><?php endif; ?></td>
			</tr>
			<?php endfor; endif; ?>
			</table>
			<script type="text/javascript">
			<?php echo '
				var clicked = 0;
				$(\'.attack\').click(function()
				{
					if (clicked == 1) { return false; } else { clicked = 1; }
					$.post(\'outposts.php?view=battle\',{ oid: $(this).attr(\'id\'), amount: 1}, function(msg){$(\'.formupdate\').html(msg);});
					return false;
				});
			'; ?>

			</script>
		<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php if ($_GET['view'] == 'beasts'): ?>
		<div class="formupdate">
		<p><?php echo @BEASTS_INFO; ?>
</p>
		<?php if (isset ( $this->_tpl_vars['Message'] )): ?>
			<p><?php echo $this->_tpl_vars['Message']; ?>
</p>
		<?php endif; ?>
		<div class="dropzone" height="<?php echo $this->_tpl_vars['Lairs']*50+30; ?>
px">
		<?php if ($this->_tpl_vars['Freelairs'] > 0): ?>
			<?php echo @YOU_HAVE; ?>
<span id="freelairs"><?php echo $this->_tpl_vars['Freelairs']; ?>
</span>
			<script type="text/javascript">
			<?php echo '
			$(\'.dropzone\').droppable({accept : \'.draggable\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropMonster(ui.draggable);}});
			'; ?>

      </script>
		<?php else: ?>
			<?php echo @YOU_DONT_HAVE; ?>

		<?php endif; ?>
		<?php echo @FREE_LAIRS; ?>
<br />

		<?php if (! empty ( $this->_tpl_vars['Monsters'] )): ?>
			<table>
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Monsters']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
				<tr><td height="40px"><span class="nondraggable"><span style="color:#CECFD1"> <?php echo $this->_tpl_vars['Monsters'][$this->_sections['i']['index']][1]; ?>
<br /> <?php echo @ATTACK; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['Monsters'][$this->_sections['i']['index']][2])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
, <?php echo @DEFENCE; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['Monsters'][$this->_sections['i']['index']][3])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
</span></td></tr>
			<?php endfor; endif; ?>
			</table>
		<?php else: ?>
			<?php echo @NO_BEASTS_IN; ?>

		<?php endif; ?>
		</div>
		<?php if (! empty ( $this->_tpl_vars['Cores'] )): ?>
			<table style="position:relative; left:300px">
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Cores']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
				<tr><td height="37px"><div id="core<?php echo $this->_tpl_vars['Cores'][$this->_sections['i']['index']][0]; ?>
" class="draggable">
					<span style="color:#82822E"> <?php echo $this->_tpl_vars['Cores'][$this->_sections['i']['index']][2]; ?>
 <?php echo $this->_tpl_vars['Cores'][$this->_sections['i']['index']][5]; ?>
 (<?php echo $this->_tpl_vars['Cores'][$this->_sections['i']['index']][1]; ?>
 <?php echo @GC; ?>
)<br /> <?php echo @ATTACK; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['Cores'][$this->_sections['i']['index']][3])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
, <?php echo @DEFENCE; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['Cores'][$this->_sections['i']['index']][4])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
</span>
				</div></td></tr>
			<?php endfor; endif; ?>
			</table>
			<script type="text/javascript">$('.draggable').draggable();</script>
		<?php else: ?>
			<p><?php echo @NO_CORES; ?>
</p>
		<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php if ($_GET['view'] == 'veterans'): ?>
		<div class="formupdate">
		<p><?php echo @VETERANS_INFO; ?>
</p><br />
		<?php if ($this->_tpl_vars['Freebarracks'] > 0): ?>
			<?php echo @YOU_HAVE;  echo $this->_tpl_vars['Freebarracks']; ?>
</span>
		<?php else: ?>
			<?php echo @YOU_DONT_HAVE; ?>

		<?php endif; ?>
			<?php echo @FREE_BARRACKS; ?>

		<br /><p><?php echo @WORK_AREA; ?>
</p>
		<?php if (isset ( $this->_tpl_vars['Message'] )): ?>
			<p><?php echo $this->_tpl_vars['Message']; ?>
</p>
		<?php endif; ?>

		<form name="formularz" id="equipForm" method="post" action="outposts.php?view=veterans">
		<table id="vetEquipment">
			<tr>
			  <th><?php echo @TYPE; ?>
</th>
			  <th width="250px"><?php echo @ITEM_NAME; ?>
</th>
			  <th></th>
			  <th><?php echo @A_CLEAR; ?>
</th></tr>
			<tr>
			  <td id="sidearm" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="weaponname" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="<?php echo $this->_tpl_vars['VetDetails'][2]; ?>
" name="W1" /><?php echo $this->_tpl_vars['VetDetails'][2]; ?>
</td>
			  <td style="visibility:visible"><input id="weapon" type="hidden" value="<?php echo $this->_tpl_vars['VetDetails'][3]; ?>
" name="W" /></td>
			  <td><input type="button" class="clear" value="<?php echo @A_CLEAR; ?>
" onclick="document.formularz.W.value=0;document.formularz.W1.value='';"></td>
			</tr>
			<tr>
			  <td id="bow" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="bowname" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="<?php echo $this->_tpl_vars['VetDetails'][4]; ?>
" name="B1" /><?php echo $this->_tpl_vars['VetDetails'][4]; ?>
</td>
			  <td style="visibility:hidden"><input id="bow" type="hidden" value="<?php echo $this->_tpl_vars['VetDetails'][5]; ?>
" name="B" /></td>
			  <td><input type="button" class="clear" value="<?php echo @A_CLEAR; ?>
" onclick="document.formularz.B.value=0;document.formularz.B1.value=''"></td>
			</tr>
			<tr>
			  <td id="armor" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="armorname" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="<?php echo $this->_tpl_vars['VetDetails'][6]; ?>
" name="A1" /><?php echo $this->_tpl_vars['VetDetails'][6]; ?>
</td>
			  <td style="visibility:hidden"><input id="armor" type="hidden" value="<?php echo $this->_tpl_vars['VetDetails'][7]; ?>
" name="A" /></td>
			  <td><input type="button" class="clear" value="<?php echo @A_CLEAR; ?>
" onclick="document.formularz.A.value=0;document.formularz.A1.value=''"></td>
			</tr>
			<tr>
			  <td id="shield" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="shieldname" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="<?php echo $this->_tpl_vars['VetDetails'][8]; ?>
" name="S1" /><?php echo $this->_tpl_vars['VetDetails'][8]; ?>
</td>
			  <td style="visibility:hidden"><input id="shield" type="hidden" value="<?php echo $this->_tpl_vars['VetDetails'][9]; ?>
" name="S" /></td>
			  <td><input type="button" class="clear" value="<?php echo @A_CLEAR; ?>
" onclick="document.formularz.S.value=0;document.formularz.S1.value=''"></td>
			</tr>
			<tr>
			  <td id="helmet" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="helmetname" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="<?php echo $this->_tpl_vars['VetDetails'][10]; ?>
" name="H1" /><?php echo $this->_tpl_vars['VetDetails'][10]; ?>
</td>
			  <td style="visibility:hidden"><input id="helmet" type="hidden" value="<?php echo $this->_tpl_vars['VetDetails'][11]; ?>
" name="H" /></td>
			  <td><input type="button" class="clear" value="<?php echo @A_CLEAR; ?>
" onclick="document.formularz.H.value=0;document.formularz.H1.value=''"></td>
			</tr>
			<tr>
			  <td id="legs" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="legsname" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="<?php echo $this->_tpl_vars['VetDetails'][12]; ?>
" name="L1" /><?php echo $this->_tpl_vars['VetDetails'][12]; ?>
</td>
			  <td style="visibility:hidden"><input id="legs" type="hidden" value="<?php echo $this->_tpl_vars['VetDetails'][13]; ?>
" name="L" /></td>
			  <td><input type="button" class="clear" value="<?php echo @A_CLEAR; ?>
" onclick="document.formularz.L.value=0; document.formularz.L1.value=''"></td>
			</tr>
			<tr>
			  <td id="ring1" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="ring1name" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="<?php echo $this->_tpl_vars['VetDetails'][14]; ?>
" name="I11" /><?php echo $this->_tpl_vars['VetDetails'][14]; ?>
</td>
			  <td style="visibility:hidden"><input id="ring1" type="hidden" value="<?php echo $this->_tpl_vars['VetDetails'][15]; ?>
" name="I1" /></td>
			  <td><input type="button" class="clear" value="<?php echo @A_CLEAR; ?>
" onclick="document.formularz.I1.value=0;document.formularz.I11.value=''"></td>
			</tr>
			<tr>
			  <td id="ring2" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="ring2name" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="<?php echo $this->_tpl_vars['VetDetails'][16]; ?>
" name="I21" /><?php echo $this->_tpl_vars['VetDetails'][16]; ?>
</td>
			  <td style="visibility:hidden"><input id="ring2" type="hidden" value="<?php echo $this->_tpl_vars['VetDetails'][17]; ?>
" name="I2" /></td>
			  <td><input type="button" class="clear" value="<?php echo @A_CLEAR; ?>
" onclick="document.formularz.I2.value=0;document.formularz.I21.value=''"></td>
			</tr>
		</table>

		<div style="float: right;">
		<?php if (! empty ( $this->_tpl_vars['Veterans'] )): ?>
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Veterans']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
			<div id="vet<?php echo $this->_tpl_vars['Veterans'][$this->_sections['i']['index']][0]; ?>
" class="veteran">
			  <img alt="img_veteran" src="" align="left" /><?php echo $this->_tpl_vars['Veterans'][$this->_sections['i']['index']][1]; ?>
<br />
			  <?php echo @ATTACK; ?>
 <?php echo $this->_tpl_vars['Veterans'][$this->_sections['i']['index']][2]; ?>
, <?php echo @DEFENCE; ?>
 <?php echo $this->_tpl_vars['Veterans'][$this->_sections['i']['index']][3]; ?>

			</div>
			<?php endfor; endif; ?>
		<?php else: ?>
			<?php echo @NO_VETERANS_IN; ?>

		<?php endif; ?>
		</div>

			<?php echo @NAME; ?>
: <input type="text" id="name" size="15" value="<?php echo $this->_tpl_vars['VetDetails'][1]; ?>
" name="name" />
			 <input type="hidden" id="veteranId" value="<?php echo $this->_tpl_vars['VetDetails'][0]; ?>
" name="vid" />
			<?php if (! $this->_tpl_vars['VetDetails'][0]): ?>
				<input type="submit" value="<?php echo @A_SEND; ?>
" />
			<?php else: ?>
				<input type="submit" value="<?php echo @A_EDIT; ?>
" />
			<?php endif; ?>
		</form>

		<script type="text/javascript">
		<?php echo '
			$(\'#sidearm\').droppable({accept : \'.sidearm\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropWeapon(ui.draggable);}});
			$(\'#bow\').droppable({accept : \'.bow\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropBow(ui.draggable);}});
			$(\'#armor\').droppable({accept : \'.armor\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropArmor(ui.draggable);}});
			$(\'#shield\').droppable({accept : \'.shield\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropShield(ui.draggable);}});
			$(\'#helmet\').droppable({accept : \'.helmet\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropHelmet(ui.draggable);}});
			$(\'#legs\').droppable({accept : \'.legs\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropLegs(ui.draggable);}});
			$(\'#ring1\').droppable({accept : \'.ring\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropRing1(ui.draggable);}});
			$(\'#ring2\').droppable({accept : \'.ring\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropRing2(ui.draggable);}});
			$(\'#vetEquipment\').droppable({accept : \'.veteran\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropVeteran(ui.draggable);}});

			$(\'.clear\').click(clearEquipment);
			$(\'.veteran\').draggable();
			$(\'#equipForm\').ajaxForm({target:\'.formupdate\', beforeSubmit: testRings});
		'; ?>

		</script>

	   <ul id="equipment">
			<li><a href="outposts.php?view=equip&amp;type=W"><span><?php echo @WEAPONS; ?>
</span></a></li>
			<li><a href="outposts.php?view=equip&amp;type=B"><span><?php echo @BOWS; ?>
</span></a></li>
			<li><a href="outposts.php?view=equip&amp;type=A"><span><?php echo @ARMORS; ?>
</span></a></li>
			<li><a href="outposts.php?view=equip&amp;type=S"><span><?php echo @SHIELDS; ?>
</span></a></li>
			<li><a href="outposts.php?view=equip&amp;type=H"><span><?php echo @HELMETS; ?>
</span></a></li>
			<li><a href="outposts.php?view=equip&amp;type=L"><span><?php echo @PLATE_LEGS; ?>
</span></a></li>
			<li><a href="outposts.php?view=equip&amp;type=I"><span><?php echo @RINGS; ?>
</span></a></li>
		</ul>
		<div id="equipWindow"></div>
		<script type="text/javascript"><?php echo '
			$(\'#equipment li a\').click(function(){
				var a = $(this).attr(\'href\');
				$.get(a, function(data){
					$(\'#equipWindow\').html(data);
				});
				return false;
			});
			'; ?>
</script>
		</div>
	<?php endif; ?>

	<?php if ($_GET['view'] == 'equip'): ?>
		<table>
			<tr>
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Equipment']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
				<td height="45px" width="85px">
					<div id="<?php echo $_GET['type'];  echo $this->_tpl_vars['Equipment'][$this->_sections['i']['index']][0]; ?>
" class="<?php echo $this->_tpl_vars['Type']; ?>
 draggable"><?php echo $this->_tpl_vars['Equipment'][$this->_sections['i']['index']][1]; ?>
 (+<?php echo $this->_tpl_vars['Equipment'][$this->_sections['i']['index']][2]; ?>
)</div>
		
		
				</td>
				<?php if (! $this->_sections['i']['last']): ?>
					<?php if (! ( $this->_sections['i']['rownum'] % 4 )): ?>
						</tr><tr>
					<?php endif; ?>
				<?php else: ?>
					</tr>
				<?php endif; ?>
			<?php endfor; endif; ?>
		</table>
		<script type="text/javascript"><?php echo '
		$(\'.sidearm\').draggable({revert:"invalid"});
		$(\'.bow\').draggable({revert:"invalid"});
		$(\'.armor\').draggable({revert:"invalid"});
		$(\'.legs\').draggable({revert:"invalid"});
		$(\'.shield\').draggable({revert:"invalid"});
		$(\'.helmet\').draggable({revert:"invalid"});
		$(\'.ring\').draggable({revert:"invalid"});
		$(\'.draggable\').draggable();
		'; ?>

		</script>
	<?php endif;  endif; ?>
