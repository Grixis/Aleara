{strip}

<u>{$Equipped}</u>:<br />
<table>
    <tr>
    <td class="helmet" title='{$Helmet}' style="width: 60px; height: 60px; background: url(images/misc/helmet.png)"></td><td rowspan=4 style="width: 150px"></td><td class="arrows" title='{$Arrows}' style="width: 60px; height: 60px; background: url(images/misc/arrow.png) "></td>
    </tr>
    <tr>
    <td class="weapon" title='{$Weapon}' style="width: 60px; height: 60px; background: url(images/misc/weapon.png)"></td><td title='{$Shield}' class="shield" style="width: 60px; height: 60px; background: url(images/misc/shield.png)"></td>
    </tr>
    <tr>
    <td class="ring" title='{$Ring1}' style="width: 60px; height: 60px; background: url(images/misc/ring.png)"></td><td title='{$Ring2}' class="ring" style="width: 60px; height: 60px; background: url(images/misc/ring.png)"></td>
    </tr>
    <tr>
    <td class="armor" title='{$Armor}' style="width: 60px; height: 60px; background: url(images/misc/armor.png)"></td><td title='{$Legs}' class="nagole" style="width: 60px; height: 60px; background: url(images/misc/greaves.png)"></td>
    </tr>
</table><br>
<div id="preloader"></div>
<div id="helper"></div>
<div class="ui-state-info">{$Action}</div>
<table><tr>
<td><div class="repair" style="border: 1px solid white; width: 60px; height: 60px; background: url(images/misc/anvil.png)"></div>Napraw</td>
<td><div class="sell" style="border: 1px solid white; width: 60px; height: 60px; background: url(images/misc/sell.png)"></div>Sprzedaj</td>
<td><div class="drink" style="border: 1px solid white; width: 60px; height: 60px; background: url(images/misc/mix.png)"></div>Mikstura</td>
<td><div class="send" style="border: 1px solid white; width: 60px; height: 60px; background: url(images/misc/send.png)"></div>Przekaż</td>
</tr></table>
<br>
<div id="buttons"></div><br>
<div id="equiptabs">
<ul>
	<li><a href="equip_query3.php?show=weapons">Broń biała</a></li>
	<li><a href="equip_query2.php?show=weapons">Łuki</a></li>
	<li><a href="equip_query2.php?type=R&owner={$Id}">Strzały</a></li>
	<li><a href="equip_query2.php?type=H&owner={$Id}">Hełmy</a></li>
	<li><a href="equip_query2.php?type=A&owner={$Id}">Zbroje</a></li>
	<li><a href="equip_query2.php?type=S&owner={$Id}">Tarcze</a></li>
	<li><a href="equip_query2.php?type=L&owner={$Id}">Nagolenniki</a></li>
	<li><a href="equip_query2.php?type=I&owner={$Id}">Dodatki</a></li>
	<li><a href="equip_query2.php?type=T&owner={$Id}">Różdżki</a></li>
	<li><a href="equip_query2.php?type=C&owner={$Id}">Szaty</a></li>
	<li><a href="equip_query2.php?type=M&owner={$Id}">Mikstury</a></li>

</ul>
{literal}
<script type="text/javascript">
$('.draggable').draggable();
$('.helmet').droppable({accept : '.H',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$('.weapon').droppable({accept : '.W',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$('.shield').droppable({accept : '.S',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$('.ring').droppable({accept : '.I',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$('.nagole').droppable({accept : '.L',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$('.armor').droppable({accept : '.A',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$('.arrows').droppable({accept : '.R',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ dropEq(ui.draggable);}});
$('.drink').droppable({accept : '.M',activeClass: "active",hoverClass: "hover", drop: function(event, ui){ potion(ui.draggable);}});
$('.repair').droppable({
	accept : function(d){
		if (d.hasClass("W")||d.hasClass("H")||d.hasClass("S")||d.hasClass("I")||d.hasClass("L")||d.hasClass("A")  )
		return true;
	},
	activeClass: "active",
	hoverClass: "hover",
	drop: function(event, ui){ repairEq(ui.draggable);}});
$('.send').droppable({
	accept : function(d){
		if (d.hasClass("W")||d.hasClass("H")||d.hasClass("S")||d.hasClass("I")||d.hasClass("L")||d.hasClass("A")  )
		return true;
	},
	activeClass: "active",
	hoverClass: "hover",
	drop: function(event, ui){ sendEq(ui.draggable);}});
$('.sell').droppable({
	accept : function(d){
		if (d.hasClass("W")||d.hasClass("H")||d.hasClass("S")||d.hasClass("I")||d.hasClass("L")||d.hasClass("A")  )
		return true;
	},
	activeClass: "active",
	hoverClass: "hover",
	drop: function(event, ui){ sellEq(ui.draggable);}});
</script>
{/literal}
</div>
<div id="potions_dialog" style="display: none;" title="Wypij wiele">
    <center>
    <form method="post" action="equip.php?wypijwiele">   
	Wypij wiele mikstur naraz:<br>
            <select name="potion">
            {section name=item10 loop=$2Pname1}
                <option value="{$2Potionid1[item10]}"> ({$2Amount}: {$2Pamount1[item10]} ) {$2Pname1[item10]} {$2Ppower1[item10]}</option>
            {/section}
            </select><br/>
        
            Ile:
                <input type="text" name="ile" value="1" /><br/>
                <input type="submit" value="Wypij" />
            </td>
        </tr>
    </table>
    </form>
    <br /><br />
    </center>
</div>
<div id="send_dialog" style="display: none;" title="Przekaż przedmiot">
    
    <form method="post" action="equip2.php?item">   
	Przekaż przedmiot do:<br>
           <input id="itemid" type="hidden" name="item" value="0" /><br/>
           	Gracz ID:<input type="text" name="pid" value="0" /><br/>
       		Ile przedmiotów:<input type="text" name="amount" value="1" /><br/>
			<input type="submit" value="Przekaż" />
    </form>
    <br /><br />
</div>
<!--{if (isset($2Potions1))}
    <center>
    <form method="post" action="equip.php?wypijwiele">   
    <table>
        <tr>
            <td colspan="2" align="center">Wypij wiele mikstur naraz:
            <select name="potion">
            {section name=item10 loop=$2Pname1}
                <option value="{$2Potionid1[item10]}"> ({$2Amount}: {$2Pamount1[item10]} ) {$2Pname1[item10]} ({$2Peffect1[item10]}) {$2Ppower1[item10]}</option>
            {/section}
            </select></td>
        </tr>
        <tr>
            <td colspan="2" align="center">Ile:
                <input type="text" name="ile" value="1" />
                <input type="submit" value="Wypij" />
            </td>
        </tr>
    </table>
    </form>
    <br /><br />
    </center>
{/if}-->


<div id="poison_dialog" style="display: none" title="Zatruj broń
    <form method="post" action="equip2.php?poison={$Poison}&amp;step=poison">
	Wybierz broń którą chcesz zatruć, następnie kliknij "Zatruj"
	<select name="weapon">
    
	{section name=item loop=$Poisonitem}
        <option id="equid" value="{$Poisonid[item]}">{$Poisonitem[item]} ({$Tamount}: {$Poisonamount[item]})</option>
    {/section}
    </select>
	<input type="hidden" id="poison_id" name="poison_id" value="0">
    <input type="hidden" value="{$Poison}" name="poison" />
    </form>
    {if $Step == "poison"}
        {$Item}
    {/if}
</div>
{if $Show == 'weapons'}
{section name=weap loop=5}
    lol
{/section}
{/if}
{/strip}
