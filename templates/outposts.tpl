
{if empty($smarty.get) || isset($smarty.get.action)}
	<div id="tabcontainer">
		<noscript>{$smarty.const.NO_SCRIPT}</noscript>
		<ul>
			<li><a href="outposts.php?view=menu"><span>{$smarty.const.A_MENU}</span></a></li>
			<li><a href="outposts.php?view=my"><span>{$smarty.const.A_MY}</span></a></li>
			<li><a href="outposts.php?view=taxes"><span>{$smarty.const.A_TAX}</span></a></li>
			<li><a href="outposts.php?view=shop"><span>{$smarty.const.A_SHOP}</span></a></li>
			<li><a href="outposts.php?view=gold"><span>{$smarty.const.A_GOLD}</span></a></li>
			<li><a href="outposts.php?view=battle"><span>{$smarty.const.A_ATTACK}</span></a></li>
			<li><a href="outposts.php?view=listing"><span>{$smarty.const.A_LIST}</span></a></li>
			<li><a href="outposts.php?view=guide"><span>{$smarty.const.A_GUIDE}</span></a></li>
			<li><a href="outposts.php?view=beasts"><span>{$smarty.const.A_BEASTS}</span></a></li>
			<li><a href="outposts.php?view=veterans"><span>{$smarty.const.A_VETERANS}</span></a></li>
		</ul>
	</div>
{/if}

{if isset($smarty.get.view)}
	{if $smarty.get.view == 'menu'}
		{$smarty.const.OUT_INFO}
	{/if}

	{if $smarty.get.view == 'gold'}
		<div class="formupdate">
			{$smarty.const.GOLD_INFO} <b>{$Treasury}</b> {$smarty.const.GOLD_COINS}.<br /><br />
			<form id="take" method="post" action="outposts.php?view=gold">
				<input type="submit" value="{$smarty.const.A_TAKE}" />
				<input type="text" name="zeton" id="treasury" value="0"/> {$smarty.const.FROM_OUT}.
				
			</form>
			
			<div id="treasuryslider"></div><br><br>
			<div id="maxgold" style="display: none">{$Treasury}</div>
			<script type="text/javascript" language="javascript">
				$('#take').ajaxForm({ldelim}target:'.formupdate'{rdelim});
			{literal}$("#treasuryslider").slider({
			range: "min",
			max: $('#maxgold').html(),
			min: 0,
			slide: function(event, ui) {
			$('#treasury').val(ui.value); updatevalues(); }
			});
			{/literal}
			</script>
			<form id="give" method="post" action="outposts.php?view=gold">
				<input type="submit" value="{$smarty.const.A_ADD}" />
				<input type="text" name="sztuki" id="goldinhand" value="0" /> {$smarty.const.TO_OUT}.
				
			</form>
			
			<div id="zetonslider"></div>
			<div id="zetonmax" style="display: none">{$GoldInHand}</div>
			<script type="text/javascript" language="javascript">
				$('#give').ajaxForm({ldelim}target:'.formupdate'{rdelim});
				$('#take').ajaxForm({ldelim}target:'.formupdate'{rdelim});
			{literal}$("#zetonslider").slider({
			range: "min",
			max: $('#zetonmax').html(),
			min: 0,
			slide: function(event, ui) {
			$('#goldinhand').val(ui.value); updatevalues(); }
			});
			{/literal}
			</script>

			{if isset($Message)}
				<p>{$Message}</p>
			{/if}
		</div>
	{/if}

	{if $smarty.get.view == 'my'}
		<div class="formupdate">
		<p>{$smarty.const.WELCOME}.</p><b><u>{$smarty.const.OUTPOST_INFO}</u></b></p>
		<table>
		<tr><td width="30%">{$smarty.const.LAND_A}:</td><td width="70%">{$Size}</td></tr>
		<tr><td>{$smarty.const.AP}:</td><td>{$Turns}</td></tr>
		<tr><td>{$smarty.const.T_GOLD_COINS}:</td><td>{$Gold}</td></tr>
		<tr><td>{$smarty.const.T_SOLDIERS}:</td><td>{$Warriors} ({$smarty.const.T_FREE}: {$Maxtroops})</td></tr>
		<tr><td>{$smarty.const.T_ARCHERS}:</td><td>{$Archers} ({$smarty.const.T_FREE}: {$Maxtroops})</td></tr>
		<tr><td>{$smarty.const.T_FORTS}:</td><td>{$Barricades} ({$smarty.const.T_FREE}: {$Maxequip})</td></tr>
		<tr><td>{$smarty.const.T_CATAPULTS}:</td><td>{$Catapults} ({$smarty.const.T_FREE}: {$Maxequip})</td></tr>
		{if $Size > 3}
			<tr><td>{$smarty.const.T_LAIRS}:</td><td>{$Fence} ({$smarty.const.USED}: {$Monsters[0]}, {$smarty.const.T_MAX}: {$Maxfence})</td></tr>
			{if $Monsters[0]}
				<tr><td>{$smarty.const.T_MONSTERS}:</td><td>{$smarty.const.T_POWER}: {$Monsters[1]}, {$smarty.const.U_DEFENSE}: {$Monsters[2]}, {$smarty.const.MORALE_MOD}: {$Monsters[3]}</td></tr>
			{/if}

			<tr><td>{$smarty.const.T_BARRACKS}:</td><td>{$Barracks} ({$smarty.const.USED}: {$Veterans[0]}, {$smarty.const.T_MAX}: {$Maxbarracks})</td></tr>
			{if $Veterans[0]}
				<tr><td>{$smarty.const.T_VETERANS}:</td><td>{$smarty.const.T_POWER}: {$Veterans[1]}, {$smarty.const.U_DEFENSE}: {$Veterans[2]}, {$smarty.const.MORALE_MOD2}: {$Veterans[0]*10}</td></tr>
			{/if}
		{/if}
		<tr><td>{$smarty.const.T_FATIGUE}:</td><td>{$Fatigue}%</td></tr>
		<tr><td>{$smarty.const.T_MORALE}:</td><td>{$Morale} ({$Moralename})</td></tr>
		<tr><td>{$smarty.const.T_COST}:</td><td>{$Cost} {$smarty.const.T_COST_G}</td></tr>
		<tr><td>
			<b><u>{$smarty.const.T_BONUS}</u></b><span id="leadership" style="visibility: hidden">{$Leadership}</span><br />
			{$smarty.const.T_ATTACK}: +{$Attack}%<br />
			{$smarty.const.T_DEFENSE}: +{$Defense}%<br />
			{$smarty.const.T_TAX}: +{$Tax}%<br />
			{$smarty.const.T_LOSSES}: -{$Lost}%<br />
			{$smarty.const.T_COST_B}: -{$Bcost}%
			</td>
			<td>
			{if $Leadership-$Attack-$Defense-$Tax-$Lost-$Bcost+5 > 1}
				<form id="addbonus" method="get" action="outposts.php?view=my">
					<input type="submit" value="{$smarty.const.A_ADD}" />
					<input type="text" id="bonus" name="bonus" value="0" size="2" />{$smarty.const.TO}
					<select name="type">
						<option value="battack">{$smarty.const.T_ATTACK}</option>
						<option value="bdefense">{$smarty.const.T_DEFENSE}</option>
						<option value="btax">{$smarty.const.T_TAX}</option>
						<option value="blost">{$smarty.const.T_LOSSES}</option>
						<option value="bcost">{$smarty.const.T_COST_B}</option>
					</select>
				</form>
				<script type="text/javascript" language="javascript">
					$('#addbonus').ajaxForm({ldelim}target:'.formupdate'{rdelim});
				</script>
			{/if}
			</td></tr>
		</table>
		</div>
	{/if}

	{if $smarty.get.view == 'taxes'}
		<div class="formupdate">
			<p>{$smarty.const.TAX_INFO}</p>
			<form class="inlineForm" id="tax" method="post" action="outposts.php?view=taxes">
				<input type="submit" value="{$smarty.const.A_SEND}" /> {$smarty.const.SOLDIERS}
				<input type="text" id="attackpoints" name="amount" value="0" /> {$smarty.const.TIMES}
			</form>
			<div id="taxmax" style="display: none">{$AttackPoints}</div>
			<div id="taxslider"></div>
			<script type="text/javascript" language="javascript">
				$('#tax').ajaxForm({ldelim}target:'.formupdate'{rdelim});
				{literal}$("#taxslider").slider({
			range: "min",
			max: $('#taxmax').html(),
			min: 0,
			slide: function(event, ui) {
			$('#attackpoints').val(ui.value); updatevalues(); }
			});
			{/literal}
			</script>
			{if isset($Message)}
				<p>{$Message}</p>
			{/if}
		</div>
	{/if}

	{if $smarty.get.view == 'shop'}
		<div class="formupdate">
{* Part 1: Display shop info and player's resources. *}
		<p>{$smarty.const.SHOP_INFO} <b><span id="maxsoldiers">{$Maxtroops}</span></b> {$smarty.const.SHOP_INFO2} <b><span id="maxmachines">{$Maxequips}</span></b> {$smarty.const.SHOP_INFO3}</p>
{*Some hidden info needed for sliders.*}
		<span id="maxsize" style="visibility: hidden">{$MaxPossibleLevel}</span>
		<span id="maxlairs" style="visibility: hidden">{$MaxPossibleLair}</span>
		<span id="maxbarracks" style="visibility: hidden">{$MaxPossibleBarrack}</span>
		<ul>
			<li>{$smarty.const.OUTPOST_ON_LEVEL} <span id="size">{$Size}</span>, <span id="baselairs">{$BaseLairs}</span> {$smarty.const.LAIRS}, <span id="basebarracks">{$BaseBarracks}</span> {$smarty.const.BARRACKS}</li>
			<li id="treasury">{$Gold}{$smarty.const.GOLD_COINS}</li>
			<li id="platinum">{$Platinum}{$smarty.const.PLATINUM_PIECES}</li>
			<li id="pine">{$Pine}{$smarty.const.PINE_PIECES}</li>
			<li id="crystal">{$Crystal}{$smarty.const.CRYSTAL_PIECES}</li>
			<li id="adamantium">{$Adamantium}{$smarty.const.ADAMANTIUM_PIECES}</li>
			<li id="meteor">{$Meteor}{$smarty.const.METEOR_PIECES}</li>
		</ul>
		{if isset($Message)}
			<p>{$Message}</p>
		{/if}
{* Part 2: Forms to increase outpost's size, buy beasts' lair or veterans' barracks. *}
		<fieldset>
			<legend>{$smarty.const.OUTPOST_DEVELOPMENT}</legend>
			<form id="buylevel" method="post" action="outposts.php?view=shop">
				<input type="submit" value="{$smarty.const.LEVEL_INFO}"/>
				<input type="text" id="level" size="2" name="level" value="0"/ onchange="size.setValue(this.value); size.recalculate();"> {$smarty.const.LEVELS_SPENDING}
				<span id="size-gold">0</span> {$smarty.const.GOLD_COINS},
				<span id="size-plat">0</span> {$smarty.const.PLATINUM_PIECES},
				<span id="size-pine">0</span> {$smarty.const.PINE_PIECES}.
			</form>
			 <br><div id="size-slider"></div><br>
			
			<script type="text/javascript" language="javascript">
				$('#buylevel').ajaxForm({ldelim}target:'.formupdate'{rdelim});
			{literal}
      $("#size-slider").slider({
			range: "min",
			max: $('#maxsize').html(),
			min: 0,
			slide: function(event, ui) {
			size(ui.value); }
			});
			{/literal}
			</script>
			
			<form id="buylair" method="post" action="outposts.php?view=shop">
				<input type="submit" value="{$smarty.const.A_BUY}"/>
				<input type="text" id="lairs" size="1" name="lairs" value="0"/> {$smarty.const.LAIRS_SPENDING}
				<span id="lair-gold">0</span> {$smarty.const.GOLD_COINS},
				<span id="lair-crys">0</span> {$smarty.const.CRYSTAL_PIECES},
				<span id="lair-mete">0</span> {$smarty.const.METEOR_PIECES}.
			</form>
			<br><div id="lairs-slider"></div><br>
	
			

			<script type="text/javascript" language="javascript">
				$('#buylair').ajaxForm({ldelim}target:'.formupdate'{rdelim});
					{literal}
      $("#lairs-slider").slider({
			range: "min",
			max: $('#maxlairs').html(),
			min: 0,
			slide: function(event, ui) {
			lairs(ui.value); }
			});
			{/literal}
			</script>
			<form id="buybarrack" method="post" action="outposts.php?view=shop">
				<input type="submit" value="{$smarty.const.A_BUY}"/>
				<input type="text" id="barracks" size="1" name="barracks" value="0"/> {$smarty.const.BARRACKS_SPENDING}
				<span id="barr-gold">0</span> {$smarty.const.GOLD_COINS},
				<span id="barr-adam">0</span> {$smarty.const.ADAMANTIUM_PIECES},
				<span id="barr-mete">0</span> {$smarty.const.METEOR_PIECES}.
			</form>
			<br><div id="barracks-slider"></div><br>
			
			<script type="text/javascript" language="javascript">
				$('#buybarrack').ajaxForm({ldelim}target:'.formupdate'{rdelim});
					{literal}
      $("#barracks-slider").slider({
			range: "min",
			max: $('#maxbarracks').html(),
			min: 0,
			slide: function(event, ui) {
			barracks(ui.value); }
			});
			{/literal}
			</script>
		</fieldset>
{* Part 3: Form to hire army, war machines and barricades *}
		<fieldset>
			<legend>{$smarty.const.ARMY_DEVELOPMENT}</legend>
			<form id="army" method="post" action="outposts.php?view=shop">
				<input type="submit" value="{$smarty.const.A_BUY}" name="buy" /> {$smarty.const.SPENDING} <span id="armysum">0</span> {$smarty.const.GOLD_COINS}:<br /><br />
				<input type="text" id="warriors" name="warriors" value="0" size="5" /> {$smarty.const.B_SOLDIERS}<br />
				<br><div id="warrior-slider"></div><br>
        
				<input type="text" id="archers" name="archers" value="0" size="5" /> {$smarty.const.B_ARCHERS}<br />
				<br><div id="archer-slider"></div><br>
        
				<input type="text" id="barricades" name="barricades" value="0" size="5" /> {$smarty.const.B_FORTS}<br />
				<br><div id="barricade-slider"></div><br>
        
				<input type="text" id="catapults" name="catapults" value="0" size="5" /> {$smarty.const.B_MACHINES}<br />
				<br><div id="catapult-slider"></div><br>
        
			</form>
			<script type="text/javascript" language="javascript">
				$('#army').ajaxForm({ldelim}target:'.formupdate'{rdelim});
			  {literal}$("#warrior-slider").slider({
			range: "min",
			max: $('#maxsoldiers').html(),
			min: 0,
			slide: function(event, ui) {
			warriors(ui.value); }
			});
			$("#archer-slider").slider({
			range: "min",
			max: $('#maxsoldiers').html(),
			min: 0,
			slide: function(event, ui) {
			archers(ui.value); }
			});
			$("#barricade-slider").slider({
			range: "min",
			max: $('#maxmachines').html(),
			min: 0,
			slide: function(event, ui) {
			barricades(ui.value); }
			});
			$("#catapult-slider").slider({
			range: "min",
			max: $('#maxmachines').html(),
			min: 0,
			slide: function(event, ui) {
			catapults(ui.value); }
			});
			{/literal}
			</script>

			</script>
		</fieldset>
		</div>
		


	{/if}

	{if $smarty.get.view == 'battle'}
		<div class="formupdate">
			<p>{$smarty.const.BATTLE_INFO}</p>
			<form id="fight" method="post" action="outposts.php?view=battle">
				{$smarty.const.OUT_ID}: <input type="text" name="oid" size="5" value="1" /><br />
				{$smarty.const.AMOUNT_A}: <input type="text" name="amount" size="2" value="1" /> <input type="submit" value="{$smarty.const.A_ATTACK}" />
			</form>
			<script type="text/javascript" language="javascript">
				$('#fight').ajaxForm({ldelim}target:'.formupdate'{rdelim});
			</script>
			{if isset($AttackerInfo)}
				{section name=i loop=$AttackerInfo}
					{$AttackerInfo[i]}
				{/section}
			{/if}
		</div>
	{/if}

	{if $smarty.get.view == 'guide'}
		<p>{$smarty.const.INFO1}</p>
	{/if}

	{if $smarty.get.view == 'listing'}
		<div class="formupdate">
		{if !isset($Outposts)}
			<p>{$smarty.const.LISTING_INFO}<br /></p>
			<span id="biggestOutpost" style="visibility: hidden">{$MaxLevel}</span>
			<form id="searchFromTo" method="post" action="outposts.php?view=listing">
				<input type="submit" value="{$smarty.const.A_SHOW}" /> {$smarty.const.FROM_L} <input type="text" id="slevel" name="slevel" size="5" value="1" /> {$smarty.const.TO_L}
				<input type="text" id="elevel" name="elevel" size="5" value="{$MaxLevel}" />
			</form>
			<div id="debug"></div>
			<div id="levels-range"></div>
			<script type="text/javascript" language="javascript">
			
			$('#searchFromTo').ajaxForm({ldelim}target:'.formupdate'{rdelim});
			{literal}$("#levels-range").slider({
			range: true,
			max: $('#biggestOutpost').html(),
			min: 1,
			slide: function(event, ui) {
			$('#slevel').val(ui.values[0]); $('#elevel').val(ui.values[1]);  }
			});
			{/literal}
			</script><br />
			<form id="searchPlayer" method="post" action="outposts.php?view=listing">
				<input type="submit" value="{$smarty.const.A_SEARCH}" /> {$smarty.const.SEARCH_BY_NAME}
				<input type="text" name="searched" value="*"/>
			</form><br />
			<script type="text/javascript" language="javascript">
				$('#searchPlayer').ajaxForm({ldelim}target:'.formupdate'{rdelim});
			</script><br />
			<form id="searchId" method="post" action="outposts.php?view=listing">
				<input type="submit" value="{$smarty.const.A_SHOW}" /> {$smarty.const.SEARCH_BY_ID}
				<input type="text" size="5" name="id" value="1" />
			</form>
			<script type="text/javascript" language="javascript">
				$('#searchId').ajaxForm({ldelim}target:'.formupdate'{rdelim});
			</script><br />
			<form id="searchTribe" method="post" action="outposts.php?view=listing">
				<input type="submit" value="{$smarty.const.A_SEARCH}" /> {$smarty.const.SEARCH_BY_TRIBE}
				<input type="text" name="tribe" value="*" />
			</form>
			<script type="text/javascript" language="javascript">
				$('#searchTribe').ajaxForm({ldelim}target:'.formupdate'{rdelim});
			</script>
		{else}
			<table  width="70%">
			<tr>
				<th>{$smarty.const.OUT_SIZE}</th>
				<th>{$smarty.const.OUT_OWNER}</th>
				<th>{$smarty.const.OUT_ATTACK}</th>
			</tr>
			{section name=i loop=$Outposts}
			<tr>
				<td>{$Outposts[i][0]}</td>
				<td><a href="view.php?view={$Outposts[i][2]}">{$Outposts[i][3]} ID: {$Outposts[i][2]}</a></td>
				<td>{if $Outposts[i][1] < 3 && $Outposts[i][0] > $MinSize}<a href="#" class="attack" id="{$Outposts[i][2]}" >{$smarty.const.A_ATTACK}</a>{/if}</td>
			</tr>
			{/section}
			</table>
			<script type="text/javascript">
			{literal}
				var clicked = 0;
				$('.attack').click(function()
				{
					if (clicked == 1) { return false; } else { clicked = 1; }
					$.post('outposts.php?view=battle',{ oid: $(this).attr('id'), amount: 1}, function(msg){$('.formupdate').html(msg);});
					return false;
				});
			{/literal}
			</script>
		{/if}
		</div>
	{/if}

	{if $smarty.get.view == 'beasts'}
		<div class="formupdate">
		<p>{$smarty.const.BEASTS_INFO}</p>
		{if isset($Message)}
			<p>{$Message}</p>
		{/if}
		<div class="dropzone" height="{$Lairs*50+30}px">
		{if $Freelairs > 0}
			{$smarty.const.YOU_HAVE}<span id="freelairs">{$Freelairs}</span>
			<script type="text/javascript">
			{literal}
			$('.dropzone').droppable({accept : '.draggable',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropMonster(ui.draggable);}});
			{/literal}
      </script>
		{else}
			{$smarty.const.YOU_DONT_HAVE}
		{/if}
		{$smarty.const.FREE_LAIRS}<br />

		{if !empty($Monsters)}
			<table>
			{section name=i loop=$Monsters}
				<tr><td height="40px"><span class="nondraggable"><span style="color:#CECFD1"> {$Monsters[i][1]}<br /> {$smarty.const.ATTACK} {$Monsters[i][2]|string_format:"%d"}, {$smarty.const.DEFENCE} {$Monsters[i][3]|string_format:"%d"}</span></td></tr>
			{/section}
			</table>
		{else}
			{$smarty.const.NO_BEASTS_IN}
		{/if}
		</div>
		{if !empty($Cores)}
			<table style="position:relative; left:300px">
			{section name=i loop=$Cores}
				<tr><td height="37px"><div id="core{$Cores[i][0]}" class="draggable">
					<span style="color:#82822E"> {$Cores[i][2]} {$Cores[i][5]} ({$Cores[i][1]} {$smarty.const.GC})<br /> {$smarty.const.ATTACK} {$Cores[i][3]|string_format:"%d"}, {$smarty.const.DEFENCE} {$Cores[i][4]|string_format:"%d"}</span>
				</div></td></tr>
			{/section}
			</table>
			<script type="text/javascript">$('.draggable').draggable();</script>
		{else}
			<p>{$smarty.const.NO_CORES}</p>
		{/if}
		</div>
	{/if}

	{if $smarty.get.view == 'veterans'}
		<div class="formupdate">
		<p>{$smarty.const.VETERANS_INFO}</p><br />
		{if $Freebarracks > 0}
			{$smarty.const.YOU_HAVE}{$Freebarracks}</span>
		{else}
			{$smarty.const.YOU_DONT_HAVE}
		{/if}
			{$smarty.const.FREE_BARRACKS}
		<br /><p>{$smarty.const.WORK_AREA}</p>
		{if isset($Message)}
			<p>{$Message}</p>
		{/if}

		<form name="formularz" id="equipForm" method="post" action="outposts.php?view=veterans">
		<table id="vetEquipment">
			<tr>
			  <th>{$smarty.const.TYPE}</th>
			  <th width="250px">{$smarty.const.ITEM_NAME}</th>
			  <th></th>
			  <th>{$smarty.const.A_CLEAR}</th></tr>
			<tr>
			  <td id="sidearm" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="weaponname" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="{$VetDetails[2]}" name="W1" />{$VetDetails[2]}</td>
			  <td style="visibility:visible"><input id="weapon" type="hidden" value="{$VetDetails[3]}" name="W" /></td>
			  <td><input type="button" class="clear" value="{$smarty.const.A_CLEAR}" onclick="document.formularz.W.value=0;document.formularz.W1.value='';"></td>
			</tr>
			<tr>
			  <td id="bow" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="bowname" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="{$VetDetails[4]}" name="B1" />{$VetDetails[4]}</td>
			  <td style="visibility:hidden"><input id="bow" type="hidden" value="{$VetDetails[5]}" name="B" /></td>
			  <td><input type="button" class="clear" value="{$smarty.const.A_CLEAR}" onclick="document.formularz.B.value=0;document.formularz.B1.value=''"></td>
			</tr>
			<tr>
			  <td id="armor" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="armorname" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="{$VetDetails[6]}" name="A1" />{$VetDetails[6]}</td>
			  <td style="visibility:hidden"><input id="armor" type="hidden" value="{$VetDetails[7]}" name="A" /></td>
			  <td><input type="button" class="clear" value="{$smarty.const.A_CLEAR}" onclick="document.formularz.A.value=0;document.formularz.A1.value=''"></td>
			</tr>
			<tr>
			  <td id="shield" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="shieldname" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="{$VetDetails[8]}" name="S1" />{$VetDetails[8]}</td>
			  <td style="visibility:hidden"><input id="shield" type="hidden" value="{$VetDetails[9]}" name="S" /></td>
			  <td><input type="button" class="clear" value="{$smarty.const.A_CLEAR}" onclick="document.formularz.S.value=0;document.formularz.S1.value=''"></td>
			</tr>
			<tr>
			  <td id="helmet" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="helmetname" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="{$VetDetails[10]}" name="H1" />{$VetDetails[10]}</td>
			  <td style="visibility:hidden"><input id="helmet" type="hidden" value="{$VetDetails[11]}" name="H" /></td>
			  <td><input type="button" class="clear" value="{$smarty.const.A_CLEAR}" onclick="document.formularz.H.value=0;document.formularz.H1.value=''"></td>
			</tr>
			<tr>
			  <td id="legs" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="legsname" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="{$VetDetails[12]}" name="L1" />{$VetDetails[12]}</td>
			  <td style="visibility:hidden"><input id="legs" type="hidden" value="{$VetDetails[13]}" name="L" /></td>
			  <td><input type="button" class="clear" value="{$smarty.const.A_CLEAR}" onclick="document.formularz.L.value=0; document.formularz.L1.value=''"></td>
			</tr>
			<tr>
			  <td id="ring1" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="ring1name" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="{$VetDetails[14]}" name="I11" />{$VetDetails[14]}</td>
			  <td style="visibility:hidden"><input id="ring1" type="hidden" value="{$VetDetails[15]}" name="I1" /></td>
			  <td><input type="button" class="clear" value="{$smarty.const.A_CLEAR}" onclick="document.formularz.I1.value=0;document.formularz.I11.value=''"></td>
			</tr>
			<tr>
			  <td id="ring2" class="dropequipment">&nbsp;</td>
			  <td class="name"><input id="ring2name" style="background: none; border: none;" type="text" readonly="readonly" size="50" value="{$VetDetails[16]}" name="I21" />{$VetDetails[16]}</td>
			  <td style="visibility:hidden"><input id="ring2" type="hidden" value="{$VetDetails[17]}" name="I2" /></td>
			  <td><input type="button" class="clear" value="{$smarty.const.A_CLEAR}" onclick="document.formularz.I2.value=0;document.formularz.I21.value=''"></td>
			</tr>
		</table>

		<div style="float: right;">
		{if !empty($Veterans)}
			{section name=i loop=$Veterans}
			<div id="vet{$Veterans[i][0]}" class="veteran">
			  <img alt="img_veteran" src="" align="left" />{$Veterans[i][1]}<br />
			  {$smarty.const.ATTACK} {$Veterans[i][2]}, {$smarty.const.DEFENCE} {$Veterans[i][3]}
			</div>
			{/section}
		{else}
			{$smarty.const.NO_VETERANS_IN}
		{/if}
		</div>

			{$smarty.const.NAME}: <input type="text" id="name" size="15" value="{$VetDetails[1]}" name="name" />
			 <input type="hidden" id="veteranId" value="{$VetDetails[0]}" name="vid" />
			{if !$VetDetails[0]}
				<input type="submit" value="{$smarty.const.A_SEND}" />
			{else}
				<input type="submit" value="{$smarty.const.A_EDIT}" />
			{/if}
		</form>

		<script type="text/javascript">
		{literal}
			$('#sidearm').droppable({accept : '.sidearm',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropWeapon(ui.draggable);}});
			$('#bow').droppable({accept : '.bow',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropBow(ui.draggable);}});
			$('#armor').droppable({accept : '.armor',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropArmor(ui.draggable);}});
			$('#shield').droppable({accept : '.shield',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropShield(ui.draggable);}});
			$('#helmet').droppable({accept : '.helmet',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropHelmet(ui.draggable);}});
			$('#legs').droppable({accept : '.legs',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropLegs(ui.draggable);}});
			$('#ring1').droppable({accept : '.ring',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropRing1(ui.draggable);}});
			$('#ring2').droppable({accept : '.ring',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropRing2(ui.draggable);}});
			$('#vetEquipment').droppable({accept : '.veteran',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropVeteran(ui.draggable);}});

			$('.clear').click(clearEquipment);
			$('.veteran').draggable();
			$('#equipForm').ajaxForm({target:'.formupdate', beforeSubmit: testRings});
		{/literal}
		</script>

	   <ul id="equipment">
			<li><a href="outposts.php?view=equip&amp;type=W"><span>{$smarty.const.WEAPONS}</span></a></li>
			<li><a href="outposts.php?view=equip&amp;type=B"><span>{$smarty.const.BOWS}</span></a></li>
			<li><a href="outposts.php?view=equip&amp;type=A"><span>{$smarty.const.ARMORS}</span></a></li>
			<li><a href="outposts.php?view=equip&amp;type=S"><span>{$smarty.const.SHIELDS}</span></a></li>
			<li><a href="outposts.php?view=equip&amp;type=H"><span>{$smarty.const.HELMETS}</span></a></li>
			<li><a href="outposts.php?view=equip&amp;type=L"><span>{$smarty.const.PLATE_LEGS}</span></a></li>
			<li><a href="outposts.php?view=equip&amp;type=I"><span>{$smarty.const.RINGS}</span></a></li>
		</ul>
		<div id="equipWindow"></div>
		<script type="text/javascript">{literal}
			$('#equipment li a').click(function(){
				var a = $(this).attr('href');
				$.get(a, function(data){
					$('#equipWindow').html(data);
				});
				return false;
			});
			{/literal}</script>
		</div>
	{/if}

	{if $smarty.get.view == 'equip'}
		<table>
			<tr>
			{section name=i loop=$Equipment}
				<td height="45px" width="85px">
					<div id="{$smarty.get.type}{$Equipment[i][0]}" class="{$Type} draggable">{$Equipment[i][1]} (+{$Equipment[i][2]})</div>
		
		
				</td>
				{if ! $smarty.section.i.last}
					{if !($smarty.section.i.rownum % 4)}
						</tr><tr>
					{/if}
				{else}
					</tr>
				{/if}
			{/section}
		</table>
		<script type="text/javascript">{literal}
		$('.sidearm').draggable({revert:"invalid"});
		$('.bow').draggable({revert:"invalid"});
		$('.armor').draggable({revert:"invalid"});
		$('.legs').draggable({revert:"invalid"});
		$('.shield').draggable({revert:"invalid"});
		$('.helmet').draggable({revert:"invalid"});
		$('.ring').draggable({revert:"invalid"});
		$('.draggable').draggable();
		{/literal}
		</script>
	{/if}
{/if}

