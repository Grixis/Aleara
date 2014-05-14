<?php /* Smarty version 2.6.16, created on 2013-02-20 21:33:37
         compiled from footer.tpl */ ?>
<?php echo '</div></div>';  if ($this->_tpl_vars['Stephead'] != 'new'):  echo '<div id="rightbar"><div id="submenu"><img src=stats.jpg><br><p>Jest<b> ';  echo $this->_tpl_vars['Day'];  echo '</b> dzień <b>';  echo $this->_tpl_vars['Age'];  echo '</b> ery.  </p><p>W krainie jest godzina <b><span id="clock">.</span></b>.</p><p>Kolejna tura będzie za <b><span id="toreset">.</span></b>.</p><p>Mamy <b>';  echo $this->_tpl_vars['Players'];  echo '</b> mieszkańców.</p><br><div class="menuleft"><img style="margin-left: -10px" src="oonline.jpg">	<br><a href=stafflist.php>• Rozpiska stanowisk.</a></center></b><br><a href=memberlist.php>• Spis wszystkich graczy.</a></center></b><br><a href=fabularni.php>• Spis graczy fabularnych.</a></center></b><img style="margin-left: -10px" src="liniao.jpg"></div><div id="mlist" class="memberlist"></div><div id="listpanel"><table width="100%"><tr></tr><img src="liniao.jpg"><tr><style="margin-left: 20px" colspan="2" align="center"><a style="margin-left: 32px" class="list" ';  echo ' href="" onclick="$(\'.opis\').toggle(\'drop\', {direction: \'right\'});">';  echo '<b style="margin-left: -0px">[pokaż/ukryj opisy]</b></a></tr></table></div><img  src="liniao.jpg"><div class="menuleft">Ostatni przybysz:<br> <a href="view.php?view=';  echo $this->_tpl_vars['LastID'];  echo '">';  echo $this->_tpl_vars['LastName'];  echo '</a> (';  echo $this->_tpl_vars['LastID'];  echo ').</div></div><div id="bottommenu"></div></div>';  endif;  echo '<div class="foot">'; ?>
<br /><br />
<script type="text/javascript">
var overlibIsSet = <?php echo $this->_tpl_vars['Overlib']; ?>
;
var page = <?php echo $this->_tpl_vars['Page']; ?>
;
var opisinlist = <?php echo $this->_tpl_vars['OpisInList']; ?>
;
var mailinfo = <?php echo $this->_tpl_vars['Mailinfo']; ?>
;
var loginfo = <?php echo $this->_tpl_vars['Loginfo']; ?>
;
var logcount = <?php echo $this->_tpl_vars['Unreadlog']; ?>
;
var mailcount = <?php echo $this->_tpl_vars['Unreadmail']; ?>
;
<?php echo '
var playersonline = 0;

if (logcount > 0)
{
	document.getElementById("logcount").style.textDecoration = "blink";
	document.getElementById("logc").style.textDecoration = "blink";
	$("private").effect("pulsate");
}
if (mailcount > 0)
{
	document.getElementById("mailcount").style.textDecoration = "blink";
	document.getElementById("mailc").style.textDecoration = "blink";
	$("private").effect("pulsate");
}
document.getElementById("logcount").innerHTML = logcount;
document.getElementById("logc").innerHTML = logcount;
document.getElementById("mailcount").innerHTML = mailcount;
document.getElementById("mailc").innerHTML = mailcount;

racetext = \'';  echo @OVERLIB_RACE;  echo '\';
gendertext = \'';  echo @OVERLIB_GENDER;  echo '\';
opistext = \'';  echo @OVERLIB_OPIS;  echo '\';
reputationtext = \'';  echo @OVERLIB_REPUTATION;  echo '\';
ranktext = \'';  echo @OVERLIB_RANK;  echo '\';
statustext = \'';  echo @OVERLIB_STATUS;  echo '\';
lastseentext = \'';  echo @OVERLIB_LASTSEEN;  echo '\';

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

$(\'#listpanel\').find(\'.list\').click(function(){
	return false;
});

function getListData()
{
	$.getJSON(\'onlinelist.php?page=\'+page+\'&opis=\'+opisinlist, {}, function(json){
		setListResponse(json);
	});
}

function autoRefresh()
{
	setTimeout(\'autoRefresh()\', 60000);
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
		alert(newmsg+\' ';  echo @NEWLOG;  echo '\');
	}

	document.getElementById("mailcount").innerHTML = json.mailc;
	document.getElementById("mailcount").style.textDecoration = (json.mailc > 0) ? "blink" : "none";
	if (json.mailc > mailcount && mailinfo == 1)
	{
		newmsg = json.mailc - mailcount;
		mailcount = json.mailc;
		alert(newmsg+\' ';  echo @NEWMAIL;  echo '\');
	}

	results = 0;
	$(\'#online\').empty();

	$(json.max).appendTo(\'#online\');
	playersonline = json.max;
	if (page * limit > playersonline) prevpage();

	$(\'#memberlist\').empty();

	for(xuser in json.players)
	{
		results = 1;
		if (overlibIsSet == 1)
		{
			opis = json.players[xuser].opis.replace(/&/gi,"&amp;");
			opis = opis.replace(/</gi,"&lt;");
			opis = opis.replace(/>/gi,"&gt;");
			opis = opis.replace(/"/gi,"&quot;");
			json.players[xuser].name = json.players[xuser].name.replace(/\'/gi,"&#39;");
			gender = (json.players[xuser].gender == \'M\') ? "';  echo @OVERLIB_GENDER_M;  echo '" : "';  echo @OVERLIB_GENDER_F;  echo '" ;
			hpstatus = (json.players[xuser].hp > 0) ? "';  echo @OVERLIB_STATUS_A;  echo '" : "';  echo @OVERLIB_STATUS_D;  echo '" ;
			$(\'#memberlist\').append(json.players[xuser].rankIcon+\'<a onmouseover="overlib(&#39;<p style=&quot;text-align:left;&quot;><br/><img src=&quot;\'+json.players[xuser].avek+\'&quot; > <br/> Poziom: \'+json.players[xuser].poziom+\'<br/>\'+racetext+\': \'+json.players[xuser].rasa+\'<br/> Klasa: \'+json.players[xuser].klasa+\'<br/>\'+gendertext+\': \'+gender+\'<br/> \'+statustext+\': \'+hpstatus+\'<br/> \'+ranktext+\': \'+json.players[xuser].rankName+\'<br /> \'+reputationtext+\': \'+json.players[xuser].reputation+\'<br /> \'+opistext+\': \'+ opis+\'<br /> \'+lastseentext+\': \'+json.players[xuser].place+\'</p>&#39;, CAPTION, &#39;<b>\'+json.players[xuser].name.replace(/&#39;/gi,"&amp;#39;")+\'</b>&#39; , FGCOLOR, &#39;black&#39;, BGCOLOR, &#39;#0C1115&#39;, TEXTCOLOR, &#39;#FFFFFF&#39;, LEFT, 1, CAPTIONSIZE, 1, BORDER, 1, TEXTSIZE, 1, STATUS, &#39;\'+json.players[xuser].rankName+\'\\&#39;)" onmouseout="nd();" href="view.php?view=\'+json.players[xuser].id+\'">\'+json.players[xuser].name+\'</a> <span style="color: #8C8C8C;">\'+json.players[xuser].id+\'</span><br/>\');
			if (opisinlist == 1)
			{
				$(\'#memberlist\').append(\'<span style="color: #8C8C8C;">\'+json.players[xuser].opis+\'</span><br/>\');
			}
		}
		else
		{
			opis = json.players[xuser].opis.replace(/&#39;/,"&amp;#39;")
			opis = opis.replace(/"/,"&quot;")
			$(\'#memberlist\').append(json.players[xuser].rankIcon+\'<a href="view.php?view=\'+json.players[xuser].id+\'">\'+json.players[xuser].name+\'</a> <span style="color: #8C8C8C;">\'+json.players[xuser].id+\'</span><br/>\');
			if (opisinlist == 1)
			{
				$(\'#memberlist\').append(\'<span style="color: #8C8C8C;">\'+json.players[xuser].opis+\'</span><br/>\');
			}
		}
	}
	if (results == 0)
	{
		prevpage();
	}
}
'; ?>

</script>

</div></td></tr></table>
</div>
<?php if ($this->_tpl_vars['Overlib'] == 1): ?>
	<script src="includes/js/overlib.js" type="text/javascript"></script>
<?php endif; ?>



<center><img  src="images/and/contain_down.png" style="margin-left: -8px;">
</div>
</html>