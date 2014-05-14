<?php /* Smarty version 2.6.16, created on 2013-04-13 17:01:05
         compiled from equip2.tpl */ ?>
<?php echo '<u>';  echo $this->_tpl_vars['Equipped'];  echo '</u>:<br /><table><tr><td class="helmet" title=\'';  echo $this->_tpl_vars['Helmet'];  echo '\' style="width: 60px; height: 60px; background: url(images/misc/helmet.png)"></td><td rowspan=4 style="width: 150px"></td><td class="arrows" title=\'';  echo $this->_tpl_vars['Arrows'];  echo '\' style="width: 60px; height: 60px; background: url(images/misc/arrow.png) "></td></tr><tr><td class="weapon" title=\'';  echo $this->_tpl_vars['Weapon'];  echo '\' style="width: 60px; height: 60px; background: url(images/misc/weapon.png)"></td><td title=\'';  echo $this->_tpl_vars['Shield'];  echo '\' class="shield" style="width: 60px; height: 60px; background: url(images/misc/shield.png)"></td></tr><tr><td class="ring" title=\'';  echo $this->_tpl_vars['Ring1'];  echo '\' style="width: 60px; height: 60px; background: url(images/misc/ring.png)"></td><td title=\'';  echo $this->_tpl_vars['Ring2'];  echo '\' class="ring" style="width: 60px; height: 60px; background: url(images/misc/ring.png)"></td></tr><tr><td class="armor" title=\'';  echo $this->_tpl_vars['Armor'];  echo '\' style="width: 60px; height: 60px; background: url(images/misc/armor.png)"></td><td title=\'';  echo $this->_tpl_vars['Legs'];  echo '\' class="nagole" style="width: 60px; height: 60px; background: url(images/misc/greaves.png)"></td></tr></table><br><div id="preloader"></div><div id="helper"></div><div class="ui-state-info">';  echo $this->_tpl_vars['Action'];  echo '</div><table><tr><td><div class="repair" style="border: 1px solid white; width: 60px; height: 60px; background: url(images/misc/anvil.png)"></div>Napraw</td><td><div class="sell" style="border: 1px solid white; width: 60px; height: 60px; background: url(images/misc/sell.png)"></div>Sprzedaj</td><td><div class="drink" style="border: 1px solid white; width: 60px; height: 60px; background: url(images/misc/mix.png)"></div>Mikstura</td><td><div class="send" style="border: 1px solid white; width: 60px; height: 60px; background: url(images/misc/send.png)"></div>Przekaż</td></tr></table><br><div id="buttons"></div><br><div id="equiptabs"><ul><li><a href="equip_query3.php?show=weapons">Broń biała</a></li><li><a href="equip_query2.php?show=weapons">Łuki</a></li><li><a href="equip_query2.php?type=R&owner=';  echo $this->_tpl_vars['Id'];  echo '">Strzały</a></li><li><a href="equip_query2.php?type=H&owner=';  echo $this->_tpl_vars['Id'];  echo '">Hełmy</a></li><li><a href="equip_query2.php?type=A&owner=';  echo $this->_tpl_vars['Id'];  echo '">Zbroje</a></li><li><a href="equip_query2.php?type=S&owner=';  echo $this->_tpl_vars['Id'];  echo '">Tarcze</a></li><li><a href="equip_query2.php?type=L&owner=';  echo $this->_tpl_vars['Id'];  echo '">Nagolenniki</a></li><li><a href="equip_query2.php?type=I&owner=';  echo $this->_tpl_vars['Id'];  echo '">Dodatki</a></li><li><a href="equip_query2.php?type=T&owner=';  echo $this->_tpl_vars['Id'];  echo '">Różdżki</a></li><li><a href="equip_query2.php?type=C&owner=';  echo $this->_tpl_vars['Id'];  echo '">Szaty</a></li><li><a href="equip_query2.php?type=M&owner=';  echo $this->_tpl_vars['Id'];  echo '">Mikstury</a></li></ul>';  echo '
<script type="text/javascript">
$(\'.draggable\').draggable();
$(\'.helmet\').droppable({accept : \'.H\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$(\'.weapon\').droppable({accept : \'.W\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$(\'.shield\').droppable({accept : \'.S\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$(\'.ring\').droppable({accept : \'.I\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$(\'.nagole\').droppable({accept : \'.L\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$(\'.armor\').droppable({accept : \'.A\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$(\'.arrows\').droppable({accept : \'.R\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$(\'.drink\').droppable({accept : \'.M\',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ potion(ui.draggable);}});
$(\'.repair\').droppable({
	accept : function(d){
		if (d.hasClass("W")||d.hasClass("H")||d.hasClass("S")||d.hasClass("I")||d.hasClass("L")||d.hasClass("A")  )
		return true;
	},
	activeClass: "active",
	hoverClass: "hover",
	drop: function(event, ui){ repairEq(ui.draggable);}});
$(\'.send\').droppable({
	accept : function(d){
		if (d.hasClass("W")||d.hasClass("H")||d.hasClass("S")||d.hasClass("I")||d.hasClass("L")||d.hasClass("A")  )
		return true;
	},
	activeClass: "active",
	hoverClass: "hover",
	drop: function(event, ui){ sendEq(ui.draggable);}});
$(\'.sell\').droppable({
	accept : function(d){
		if (d.hasClass("W")||d.hasClass("H")||d.hasClass("S")||d.hasClass("I")||d.hasClass("L")||d.hasClass("A")  )
		return true;
	},
	activeClass: "active",
	hoverClass: "hover",
	drop: function(event, ui){ sellEq(ui.draggable);}});
</script>
';  echo '</div><div id="potions_dialog" style="display: none;" title="Wypij wiele"><center><form method="post" action="equip.php?wypijwiele">Wypij wiele mikstur naraz:<br><select name="potion">';  unset($this->_sections['item10']);
$this->_sections['item10']['name'] = 'item10';
$this->_sections['item10']['loop'] = is_array($_loop=$this->_tpl_vars['2Pname1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item10']['show'] = true;
$this->_sections['item10']['max'] = $this->_sections['item10']['loop'];
$this->_sections['item10']['step'] = 1;
$this->_sections['item10']['start'] = $this->_sections['item10']['step'] > 0 ? 0 : $this->_sections['item10']['loop']-1;
if ($this->_sections['item10']['show']) {
    $this->_sections['item10']['total'] = $this->_sections['item10']['loop'];
    if ($this->_sections['item10']['total'] == 0)
        $this->_sections['item10']['show'] = false;
} else
    $this->_sections['item10']['total'] = 0;
if ($this->_sections['item10']['show']):

            for ($this->_sections['item10']['index'] = $this->_sections['item10']['start'], $this->_sections['item10']['iteration'] = 1;
                 $this->_sections['item10']['iteration'] <= $this->_sections['item10']['total'];
                 $this->_sections['item10']['index'] += $this->_sections['item10']['step'], $this->_sections['item10']['iteration']++):
$this->_sections['item10']['rownum'] = $this->_sections['item10']['iteration'];
$this->_sections['item10']['index_prev'] = $this->_sections['item10']['index'] - $this->_sections['item10']['step'];
$this->_sections['item10']['index_next'] = $this->_sections['item10']['index'] + $this->_sections['item10']['step'];
$this->_sections['item10']['first']      = ($this->_sections['item10']['iteration'] == 1);
$this->_sections['item10']['last']       = ($this->_sections['item10']['iteration'] == $this->_sections['item10']['total']);
 echo '<option value="';  echo $this->_tpl_vars['2Potionid1'][$this->_sections['item10']['index']];  echo '"> (';  echo $this->_tpl_vars['2Amount'];  echo ': ';  echo $this->_tpl_vars['2Pamount1'][$this->_sections['item10']['index']];  echo ' ) ';  echo $this->_tpl_vars['2Pname1'][$this->_sections['item10']['index']];  echo ' ';  echo $this->_tpl_vars['2Ppower1'][$this->_sections['item10']['index']];  echo '</option>';  endfor; endif;  echo '</select><br/>Ile:<input type="text" name="ile" value="1" /><br/><input type="submit" value="Wypij" /></td></tr></table></form><br /><br /></center></div><div id="send_dialog" style="display: none;" title="Przekaż przedmiot"><form method="post" action="equip2.php?item">Przekaż przedmiot do:<br><input id="itemid" type="hidden" name="item" value="0" /><br/>Gracz ID:<input type="text" name="pid" value="0" /><br/>Ile przedmiotów:<input type="text" name="amount" value="1" /><br/><input type="submit" value="Przekaż" /></form><br /><br /></div><!--';  if (( isset ( $this->_tpl_vars['2Potions1'] ) )):  echo '<center><form method="post" action="equip.php?wypijwiele"><table><tr><td colspan="2" align="center">Wypij wiele mikstur naraz:<select name="potion">';  unset($this->_sections['item10']);
$this->_sections['item10']['name'] = 'item10';
$this->_sections['item10']['loop'] = is_array($_loop=$this->_tpl_vars['2Pname1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item10']['show'] = true;
$this->_sections['item10']['max'] = $this->_sections['item10']['loop'];
$this->_sections['item10']['step'] = 1;
$this->_sections['item10']['start'] = $this->_sections['item10']['step'] > 0 ? 0 : $this->_sections['item10']['loop']-1;
if ($this->_sections['item10']['show']) {
    $this->_sections['item10']['total'] = $this->_sections['item10']['loop'];
    if ($this->_sections['item10']['total'] == 0)
        $this->_sections['item10']['show'] = false;
} else
    $this->_sections['item10']['total'] = 0;
if ($this->_sections['item10']['show']):

            for ($this->_sections['item10']['index'] = $this->_sections['item10']['start'], $this->_sections['item10']['iteration'] = 1;
                 $this->_sections['item10']['iteration'] <= $this->_sections['item10']['total'];
                 $this->_sections['item10']['index'] += $this->_sections['item10']['step'], $this->_sections['item10']['iteration']++):
$this->_sections['item10']['rownum'] = $this->_sections['item10']['iteration'];
$this->_sections['item10']['index_prev'] = $this->_sections['item10']['index'] - $this->_sections['item10']['step'];
$this->_sections['item10']['index_next'] = $this->_sections['item10']['index'] + $this->_sections['item10']['step'];
$this->_sections['item10']['first']      = ($this->_sections['item10']['iteration'] == 1);
$this->_sections['item10']['last']       = ($this->_sections['item10']['iteration'] == $this->_sections['item10']['total']);
 echo '<option value="';  echo $this->_tpl_vars['2Potionid1'][$this->_sections['item10']['index']];  echo '"> (';  echo $this->_tpl_vars['2Amount'];  echo ': ';  echo $this->_tpl_vars['2Pamount1'][$this->_sections['item10']['index']];  echo ' ) ';  echo $this->_tpl_vars['2Pname1'][$this->_sections['item10']['index']];  echo ' (';  echo $this->_tpl_vars['2Peffect1'][$this->_sections['item10']['index']];  echo ') ';  echo $this->_tpl_vars['2Ppower1'][$this->_sections['item10']['index']];  echo '</option>';  endfor; endif;  echo '</select></td></tr><tr><td colspan="2" align="center">Ile:<input type="text" name="ile" value="1" /><input type="submit" value="Wypij" /></td></tr></table></form><br /><br /></center>';  endif;  echo '--><div id="poison_dialog" style="display: none" title="Zatruj broń<form method="post" action="equip2.php?poison=';  echo $this->_tpl_vars['Poison'];  echo '&amp;step=poison">Wybierz broń którą chcesz zatruć, następnie kliknij "Zatruj"<select name="weapon">';  unset($this->_sections['item']);
$this->_sections['item']['name'] = 'item';
$this->_sections['item']['loop'] = is_array($_loop=$this->_tpl_vars['Poisonitem']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item']['show'] = true;
$this->_sections['item']['max'] = $this->_sections['item']['loop'];
$this->_sections['item']['step'] = 1;
$this->_sections['item']['start'] = $this->_sections['item']['step'] > 0 ? 0 : $this->_sections['item']['loop']-1;
if ($this->_sections['item']['show']) {
    $this->_sections['item']['total'] = $this->_sections['item']['loop'];
    if ($this->_sections['item']['total'] == 0)
        $this->_sections['item']['show'] = false;
} else
    $this->_sections['item']['total'] = 0;
if ($this->_sections['item']['show']):

            for ($this->_sections['item']['index'] = $this->_sections['item']['start'], $this->_sections['item']['iteration'] = 1;
                 $this->_sections['item']['iteration'] <= $this->_sections['item']['total'];
                 $this->_sections['item']['index'] += $this->_sections['item']['step'], $this->_sections['item']['iteration']++):
$this->_sections['item']['rownum'] = $this->_sections['item']['iteration'];
$this->_sections['item']['index_prev'] = $this->_sections['item']['index'] - $this->_sections['item']['step'];
$this->_sections['item']['index_next'] = $this->_sections['item']['index'] + $this->_sections['item']['step'];
$this->_sections['item']['first']      = ($this->_sections['item']['iteration'] == 1);
$this->_sections['item']['last']       = ($this->_sections['item']['iteration'] == $this->_sections['item']['total']);
 echo '<option id="equid" value="';  echo $this->_tpl_vars['Poisonid'][$this->_sections['item']['index']];  echo '">';  echo $this->_tpl_vars['Poisonitem'][$this->_sections['item']['index']];  echo ' (';  echo $this->_tpl_vars['Tamount'];  echo ': ';  echo $this->_tpl_vars['Poisonamount'][$this->_sections['item']['index']];  echo ')</option>';  endfor; endif;  echo '</select><input type="hidden" id="poison_id" name="poison_id" value="0"><input type="hidden" value="';  echo $this->_tpl_vars['Poison'];  echo '" name="poison" /></form>';  if ($this->_tpl_vars['Step'] == 'poison'):  echo '';  echo $this->_tpl_vars['Item'];  echo '';  endif;  echo '</div>';  if ($this->_tpl_vars['Show'] == 'weapons'):  echo '';  unset($this->_sections['weap']);
$this->_sections['weap']['name'] = 'weap';
$this->_sections['weap']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['weap']['show'] = true;
$this->_sections['weap']['max'] = $this->_sections['weap']['loop'];
$this->_sections['weap']['step'] = 1;
$this->_sections['weap']['start'] = $this->_sections['weap']['step'] > 0 ? 0 : $this->_sections['weap']['loop']-1;
if ($this->_sections['weap']['show']) {
    $this->_sections['weap']['total'] = $this->_sections['weap']['loop'];
    if ($this->_sections['weap']['total'] == 0)
        $this->_sections['weap']['show'] = false;
} else
    $this->_sections['weap']['total'] = 0;
if ($this->_sections['weap']['show']):

            for ($this->_sections['weap']['index'] = $this->_sections['weap']['start'], $this->_sections['weap']['iteration'] = 1;
                 $this->_sections['weap']['iteration'] <= $this->_sections['weap']['total'];
                 $this->_sections['weap']['index'] += $this->_sections['weap']['step'], $this->_sections['weap']['iteration']++):
$this->_sections['weap']['rownum'] = $this->_sections['weap']['iteration'];
$this->_sections['weap']['index_prev'] = $this->_sections['weap']['index'] - $this->_sections['weap']['step'];
$this->_sections['weap']['index_next'] = $this->_sections['weap']['index'] + $this->_sections['weap']['step'];
$this->_sections['weap']['first']      = ($this->_sections['weap']['iteration'] == 1);
$this->_sections['weap']['last']       = ($this->_sections['weap']['iteration'] == $this->_sections['weap']['total']);
 echo 'lol';  endfor; endif;  echo '';  endif;  echo ''; ?>
