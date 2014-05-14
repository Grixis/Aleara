{strip}
            
			</td>
			<td style="background: url('images/layout/Untitled-1_06.gif') repeat-y right" width="9" height="23">
			<!--<img id="Untitled_1_06" src="images/layout/Untitled-1_06.gif" width="9" height="23" alt="" />--></td>
	</tr>
	<tr>
		<td style="background: url('images/layout/Untitled-1_07.gif')" width="8">
			<!--<img id="Untitled_1_07" src="images/layout/Untitled-1_07.gif" width="8" height="112" alt="" />--></td>
		<td style="background: url('images/layout/Untitled-1_08.gif')" width="9">
			<!--<img id="Untitled_1_08" src="images/layout/Untitled-1_08.gif" width="9" height="112" alt="" />--></td>
	</tr>
	<tr>
		<td style="background: url('images/layout/Untitled-1_09.gif') repeat-y left" width="8" height="20">
			<!--<img id="Untitled_1_09" src="images/layout/Untitled-1_09.gif" width="8" height="20" alt="" />--></td>
		<td style="background: url('images/layout/Untitled-1_10.gif') repeat-y right" width="9" height="20">
			<!--<img id="Untitled_1_10" src="images/layout/Untitled-1_10.gif" width="9" height="20" alt="" />--></td>
	</tr>
	<tr>
		<td colspan="2" style="background: url('images/layout/Untitled-1_11.gif')" width="35" height="16">
			<!--<img id="Untitled_1_11" src="images/layout/Untitled-1_11.gif" width="35" height="16" alt="" />--></td>
		<td colspan="3" style="background: url('images/layout/Untitled-1_12.gif')" height="16">
			<!--<img id="Untitled_1_12" src="images/layout/Untitled-1_12.gif" width="121" height="16" alt="" />--></td>
		<td colspan="2" style="background: url('images/layout/Untitled-1_13.gif') repeat-y right" >
			<!--<img id="Untitled_1_13" src="images/layout/Untitled-1_13.gif" alt="" /></td>-->
	</tr>
	
</table>
	</div>
            {if $Stephead != "new"}
                    <div id="rightbar" style="display: inline">
	
		
                        <div class="topmenu"></div>
                        <div class="submenu">
												<table id="Table_01" width="100%" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; background: url('images/layout/Untitled-1_05.gif')">
	<tr>
		<td colspan="3" style="background: url('images/layout/Untitled-1_01.gif')" width="36" height="15">
			<!--<img id="Untitled_1_01" src="images/layout/Untitled-1_01.gif" width="36" height="15" alt="" />--></td>
		<td style="background: url('images/layout/Untitled-1_02.gif')" height="15">
			<!--<img id="Untitled_1_02" src="images/layout/Untitled-1_02.gif" width="119" height="15" alt="" />--></td>
		<td colspan="3" style="background: url('images/layout/Untitled-1_03.gif') right" width="36" height="15">
			<!--<img id="Untitled_1_03" src="images/layout/Untitled-1_03.gif" width="36" height="15" alt="" />--></td>
	</tr>
	<tr>
		<td style="background: url('images/layout/Untitled-1_04.gif') repeat-y" width="9" height="23">
			<!--<img id="Untitled_1_04" src="images/layout/Untitled-1_04.gif" width="8" height="23" alt="" />--></td>
		<td colspan="5" rowspan="3" style="background: url('images/layout/Untitled-1_05.gif')"> 
                        {if $Graphstyle == 'Y' && $Graphic == 'default'}
                            <div class="imghead"><img src="images/staty.jpeg" alt="img_Statystyki Królestwa" width="150" height="50" /></div>
                        {else}<div class="txtheader">{$smarty.const.STATISTICS}</div>
                        {/if}
                        <div class="menuleft">
                        {if $Graphstyle == 'Y'}
                            <img src="images/zegar.jpg" alt="img_clock" class="vmiddle" width="16" height="16" />
                        {/if}
                        <b>{$Time}</b>
                    </div>
                    <div class="menuleft">
                    {if $Graphstyle == 'Y'}
                        <img src="images/kalendarz.jpg" alt="img_calendar" class="vmiddle" width="16" height="16" />
                    {/if}
                    <b>{$Tday}</b> {$smarty.const.SDAY} <b>{$Tage}</b> {$smarty.const.SAGE}.</div>
                    <div class="menuleft">
                    {if $Graphstyle == 'Y'}
                        <img src="images/kleps.jpg" alt="img_toreset" class="vmiddle" width="16" height="16" />
                    {/if}
                        {$smarty.const.RTIME}: <b>{$Thours} {$Tminutes}</b>.
                    </div>
                    <div class="menuleft">
                    {if $Graphstyle == 'Y'}
                        <img src="images/dfg.jpg" alt="img_players" class="vmiddle" width="16" height="16" />
                    {/if}
                        {$smarty.const.REGISTERED_PLAYERS}: <b>{$Players}</b>
                    </div>
                    <div class="menuleft">
                    {if $Graphstyle == 'Y'}
                        <img src="images/ena.jpg" alt="img_online" class="vmiddle" width="16" height="16" />
                    {/if}
                        {$smarty.const.PLAYERS_ONLINE}: <span id="online" style="font-weight:bold;"></span> ({$smarty.const.RECORD}: {$numRecord})
                    </div>
					</td>
										<td style="background: url('images/layout/Untitled-1_06.gif') repeat-y right" width="9" height="23">
			<!--<img id="Untitled_1_06" src="images/layout/Untitled-1_06.gif" width="9" height="23" alt="" />--></td>
	</tr>
	<tr>
		<td style="background: url('images/layout/Untitled-1_07.gif')" width="8">
			<!--<img id="Untitled_1_07" src="images/layout/Untitled-1_07.gif" width="8" height="112" alt="" />--></td>
		<td style="background: url('images/layout/Untitled-1_08.gif')" width="9">
			<!--<img id="Untitled_1_08" src="images/layout/Untitled-1_08.gif" width="9" height="112" alt="" />--></td>
	</tr>
	<tr>
		<td style="background: url('images/layout/Untitled-1_09.gif') repeat-y left" width="8" height="20">
			<!--<img id="Untitled_1_09" src="images/layout/Untitled-1_09.gif" width="8" height="20" alt="" />--></td>
		<td style="background: url('images/layout/Untitled-1_10.gif') repeat-y right" width="9" height="20">
			<!--<img id="Untitled_1_10" src="images/layout/Untitled-1_10.gif" width="9" height="20" alt="" />--></td>
	</tr>
	<tr>
		<td colspan="2" style="background: url('images/layout/Untitled-1_11.gif')" width="35" height="16">
			<!--<img id="Untitled_1_11" src="images/layout/Untitled-1_11.gif" width="35" height="16" alt="" />--></td>
		<td colspan="3" style="background: url('images/layout/Untitled-1_12.gif')" height="16">
			<!--<img id="Untitled_1_12" src="images/layout/Untitled-1_12.gif" width="121" height="16" alt="" />--></td>
		<td colspan="2" style="background: url('images/layout/Untitled-1_13.gif') repeat-y right" >
			<!--<img id="Untitled_1_13" src="images/layout/Untitled-1_13.gif" alt="" /></td>-->
	</tr>
	
</table>
                </div>
		
                <div class="bottommenu"></div>
                <div class="topmenu"></div>
                    <div class="submenu">
																	<table id="Table_01" width="190" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; background: url('images/layout/Untitled-1_05.gif')">
	<tr>
		<td colspan="3" style="background: url('images/layout/Untitled-1_01.gif')" width="36" height="15">
			<!--<img id="Untitled_1_01" src="images/layout/Untitled-1_01.gif" width="36" height="15" alt="" />--></td>
		<td style="background: url('images/layout/Untitled-1_02.gif')" height="15">
			<!--<img id="Untitled_1_02" src="images/layout/Untitled-1_02.gif" width="119" height="15" alt="" />--></td>
		<td colspan="3" style="background: url('images/layout/Untitled-1_03.gif') right" width="36" height="15">
			<!--<img id="Untitled_1_03" src="images/layout/Untitled-1_03.gif" width="36" height="15" alt="" />--></td>
	</tr>
	<tr>
		<td style="background: url('images/layout/Untitled-1_04.gif') repeat-y" width="9" height="23">
			<!--<img id="Untitled_1_04" src="images/layout/Untitled-1_04.gif" width="8" height="23" alt="" />--></td>
		<td colspan="5" rowspan="3" style="background: url('images/layout/Untitled-1_05.gif')"> 
                    {if $Graphstyle == 'Y' && $Graphic == 'default'}
                        <div class="imghead"><img src="images/online.jpeg" alt="img_Statystyki gry" width="150" height="50" /></div>
                    {else}
                        <div class="txtheader">{$smarty.const.F_STATISTICS}</div>
                    {/if}
                        {$smarty.const.PLAYERS_LIST}:<br /><br />
                        <div id="memberlist" class="memberlist">
                        </div>
                        <div id="listpanel">
                        <table width="100%"><tr>
                        <td width="50%" align="center"><a class="list" href="" onclick="prevpage();">&lt;&lt;</a></td>
                        <td width="50%" align="center"><a class="list" href="" onclick="nextpage();">&gt;&gt;</a></td>
                        </tr>
                        <tr><th colspan="2" align="center"><a class="list" href="" onclick="show();">{$smarty.const.SHOW_OPIS}</a></th></tr></table>
                        </div>
                        {$smarty.const.LAST_REGISTERED_PRE} <a href="view.php?view={$LastID}">{$LastName}</a> ({$LastID}).
						</td>
																<td style="background: url('images/layout/Untitled-1_06.gif') repeat-y right" width="9" height="23">
			<!--<img id="Untitled_1_06" src="images/layout/Untitled-1_06.gif" width="9" height="23" alt="" />--></td>
	</tr>
	<tr>
		<td style="background: url('images/layout/Untitled-1_07.gif')" width="8">
			<!--<img id="Untitled_1_07" src="images/layout/Untitled-1_07.gif" width="8" height="112" alt="" />--></td>
		<td style="background: url('images/layout/Untitled-1_08.gif')" width="9">
			<!--<img id="Untitled_1_08" src="images/layout/Untitled-1_08.gif" width="9" height="112" alt="" />--></td>
	</tr>
	<tr>
		<td style="background: url('images/layout/Untitled-1_09.gif') repeat-y left" width="8" height="20">
			<!--<img id="Untitled_1_09" src="images/layout/Untitled-1_09.gif" width="8" height="20" alt="" />--></td>
		<td style="background: url('images/layout/Untitled-1_10.gif') repeat-y right" width="9" height="20">
			<!--<img id="Untitled_1_10" src="images/layout/Untitled-1_10.gif" width="9" height="20" alt="" />--></td>
	</tr>
	<tr>
		<td colspan="2" style="background: url('images/layout/Untitled-1_11.gif')" width="35" height="16">
			<!--<img id="Untitled_1_11" src="images/layout/Untitled-1_11.gif" width="35" height="16" alt="" />--></td>
		<td colspan="3" style="background: url('images/layout/Untitled-1_12.gif')" height="16">
			<!--<img id="Untitled_1_12" src="images/layout/Untitled-1_12.gif" width="121" height="16" alt="" />--></td>
		<td colspan="2" style="background: url('images/layout/Untitled-1_13.gif') repeat-y right" >
			<!--<img id="Untitled_1_13" src="images/layout/Untitled-1_13.gif" alt="" /></td>-->
	</tr>
	
</table>
                    </div>
                    <div class="bottommenu"></div>
                </div>
            {/if}
    </div>
    <div class="foot">
        {$smarty.const.LOADING_TIME}: {$Duration} | {$smarty.const.GZIP_COMP}: {$Compress} | {$smarty.const.PM_TIME} PHP/MySQL: {$Duration-$Sqltime}/{$Sqltime} | {$smarty.const.QUERIES}: {$Numquery}
        <br /><a href="http://orodlin.pl">Orodlin</a> Engine, &copy; 2007-2009 <a href="install/authors.txt">{$smarty.const.TEAM}</a> based on <a href="http://vallheru.sourceforge.net/">Vallheru</a>.
 <!--          (C) 2007 Orodlin Team                                         -->
 <!--           game based on Vallheru Engine                                -->

{/strip}<br /><br />
<script type="text/javascript">
var overlibIsSet = {$Overlib};
var page = {$Page};
var opisinlist = {$OpisInList};
var mailinfo = {$Mailinfo};
var loginfo = {$Loginfo};
var logcount = {$Unreadlog};
var mailcount = {$Unreadmail};
{literal}
var playersonline = 0;

if (logcount > 0)
{
	document.getElementById("logcount").style.textDecoration = "blink";
}
if (mailcount > 0)
{
	document.getElementById("mailcount").style.textDecoration = "blink";
}
document.getElementById("logcount").innerHTML = logcount;
document.getElementById("mailcount").innerHTML = mailcount;

racetext = '{/literal}{$smarty.const.OVERLIB_RACE}{literal}';
gendertext = '{/literal}{$smarty.const.OVERLIB_GENDER}{literal}';
opistext = '{/literal}{$smarty.const.OVERLIB_OPIS}{literal}';
reputationtext = '{/literal}{$smarty.const.OVERLIB_REPUTATION}{literal}';
ranktext = '{/literal}{$smarty.const.OVERLIB_RANK}{literal}';
statustext = '{/literal}{$smarty.const.OVERLIB_STATUS}{literal}';
lastseentext = '{/literal}{$smarty.const.OVERLIB_LASTSEEN}{literal}';

if (opisinlist == 0)
{
	limit = 30;
}
else
{
	limit = 15;
}

function nextpage()
{
	if ((page + 1) * limit < playersonline)
	{
		page = page + 1;
		getListData();
	}
}

function prevpage()
{
	if (page > 0)
	{
		page = page - 1;
		getListData();
	}
}

function show()
{
	if (opisinlist == 0)
	{
		opisinlist = 1;
		limit = 15;
		page = page * 2;
	}
	else
	{
		opisinlist = 0;
		limit = 30;
		page = page / 2;
	}
	getListData();
}

$('#listpanel').find('.list').click(function(){
	return false;
});

function getListData()
{
	$.getJSON('onlinelist.php?page='+page+'&opis='+opisinlist, {}, function(json){
		setListResponse(json);
	});
}

function autoRefresh()
{
	setTimeout('autoRefresh()', 60000);
	getListData();
}
autoRefresh();

function setListResponse(json)
{
	document.getElementById("logcount").innerHTML = json.logc;
	document.getElementById("logcount").style.textDecoration = (json.logc > 0) ? "blink" : "none";
	if (json.logc > logcount && loginfo == 1)
	{
		newmsg = json.logc - logcount;
		logcount = json.logc;
		alert(newmsg+' {/literal}{$smarty.const.NEWLOG}{literal}');
	}

	document.getElementById("mailcount").innerHTML = json.mailc;
	document.getElementById("mailcount").style.textDecoration = (json.mailc > 0) ? "blink" : "none";
	if (json.mailc > mailcount && mailinfo == 1)
	{
		newmsg = json.mailc - mailcount;
		mailcount = json.mailc;
		alert(newmsg+' {/literal}{$smarty.const.NEWMAIL}{literal}');
	}

	results = 0;
	$('#online').empty();

	$(json.max).appendTo('#online');
	playersonline = json.max;
	if (page * limit > playersonline) prevpage();

	$('#memberlist').empty();

	for(xuser in json.players)
	{
		results = 1;
		if (overlibIsSet == 1)
		{
			opis = json.players[xuser].opis.replace(/&/gi,"&amp;");
			opis = opis.replace(/</gi,"&lt;");
			opis = opis.replace(/>/gi,"&gt;");
			opis = opis.replace(/"/gi,"&quot;");
			json.players[xuser].name = json.players[xuser].name.replace(/'/gi,"&#39;");
			gender = (json.players[xuser].gender == 'M') ? "{/literal}{$smarty.const.OVERLIB_GENDER_M}{literal}" : "{/literal}{$smarty.const.OVERLIB_GENDER_F}{literal}" ;
			hpstatus = (json.players[xuser].hp > 0) ? "{/literal}{$smarty.const.OVERLIB_STATUS_A}{literal}" : "{/literal}{$smarty.const.OVERLIB_STATUS_D}{literal}" ;
			$('#memberlist').append(json.players[xuser].rankIcon+'<a onmouseover="overlib(&#39;<p style=&quot;text-align:left;&quot;><br/><img src=&quot;'+json.players[xuser].avek+'&quot; > <br/> Poziom: '+json.players[xuser].poziom+'<br/>'+racetext+': '+json.players[xuser].rasa+'<br/> Klasa: '+json.players[xuser].klasa+'<br/>'+gendertext+': '+gender+'<br/> '+statustext+': '+hpstatus+'<br/> '+ranktext+': '+json.players[xuser].rankName+'<br /> '+reputationtext+': '+json.players[xuser].reputation+'<br /> '+opistext+': '+ opis+'<br /> '+lastseentext+': '+json.players[xuser].place+'</p>&#39;, CAPTION, &#39;<b>'+json.players[xuser].name.replace(/&#39;/gi,"&amp;#39;")+'</b>&#39; , FGCOLOR, &#39;black&#39;, BGCOLOR, &#39;#0C1115&#39;, TEXTCOLOR, &#39;#FFFFFF&#39;, LEFT, 1, CAPTIONSIZE, 1, BORDER, 1, TEXTSIZE, 1, STATUS, &#39;'+json.players[xuser].rankName+'\&#39;)" onmouseout="nd();" href="view.php?view='+json.players[xuser].id+'">'+json.players[xuser].name+'</a> <span style="color: #8C8C8C;">'+json.players[xuser].id+'</span><br/>');
			if (opisinlist == 1)
			{
				$('#memberlist').append('<span style="color: #8C8C8C;">'+json.players[xuser].opis+'</span><br/>');
			}
		}
		else
		{
			opis = json.players[xuser].opis.replace(/&#39;/,"&amp;#39;")
			opis = opis.replace(/"/,"&quot;")
			$('#memberlist').append(json.players[xuser].rankIcon+'<a href="view.php?view='+json.players[xuser].id+'">'+json.players[xuser].name+'</a> <span style="color: #8C8C8C;">'+json.players[xuser].id+'</span><br/>');
			if (opisinlist == 1)
			{
				$('#memberlist').append('<span style="color: #8C8C8C;">'+json.players[xuser].opis+'</span><br/>');
			}
		}
	}
	if (results == 0)
	{
		prevpage();
	}
}
{/literal}
</script>
<table style="margin:auto"><tr><td><div>
<script type="text/javascript"><!--
google_ad_client = "pub-6335658040478102";
google_alternate_color = "000000";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text_image";
google_ad_channel = "";
google_color_border = "000000";
google_color_bg = "000000";
google_color_link = "80FF00";
google_color_text = "78B749";
google_color_url = "CAF99B";
google_ui_features = "rc:0";
//-->
</script>
<script type="text/javascript"
 src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
    </script>
    <script type="text/javascript">
    _uacct = "UA-632755-6";
    urchinTracker();
    </script>
</div></td></tr></table>
</div>
{if $Overlib == 1}
	<script src="includes/js/overlib.js" type="text/javascript"></script>
{/if}
</body>
</html>
