<?xml version="1.0" encoding="{$Charset}"?>
{strip}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="javascript/tinymce/jscripts/tiny_mce/tiny_mce.js"></script> 
{if $Editor == '1'}
  {if $Title== "Wieści" || $Title == "Gazeta"}
     <script type="text/javascript">
     {literal}
     tinyMCE.init({ mode: "textareas",
     theme: "advanced",
     theme_advanced_buttons1: "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,undo,redo,|,link,unlink",
     theme_advanced_buttons2: "",
     theme_advanced_buttons3: "",
     theme_advanced_toolbar_location: "top",
     language:"pl"
     });
     {/literal}
     </script>
  {/if}
  {if $Title == "Wiadomości" || $Title == "Miejskie Plotki" || $Title == "Biblioteka" || $Title == "Klany" || $Title == "Forum klanu" || $Title == "Forum" || $Title == "Redakcja gazety"}
    <script type="text/javascript">
     {literal}
     tinyMCE.init({ mode: "textareas",
     theme: "advanced",
     theme_advanced_buttons1: "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,undo,redo,|,link,unlink,|,forecolor,backcolor",
     theme_advanced_buttons2: "bullist,numlist,|,image,|,formatselect,fontsizeselect",
     theme_advanced_buttons3: "",
     theme_advanced_toolbar_location: "top",
     language:"pl"
     });
     {/literal}
     </script>
  {/if}
    {if $Title == "Opcje konta" || $Title == "Panel Administracyjny" || $Title == "Dodaj Wieść"}
    <script type="text/javascript">
     {literal}
     tinyMCE.init({ mode: "textareas",
     theme: "advanced",
	 plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
   	 theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
	 theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,|,insertdate,inserttime,preview,|,forecolor,backcolor",
	 theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,|,print,|,ltr,rtl,|,fullscreen",
	 theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,cite,abbr,acronym,del,ins,|,visualchars,nonbreaking,restoredraft",
	 theme_advanced_toolbar_location : "top",
	 theme_advanced_toolbar_align : "left",
	 theme_advanced_statusbar_location : "bottom",
	 theme_advanced_resizing : true,
     language:"pl"
     });
     {/literal}
     </script>
  {/if}
{/if}	
    <title>{$Gamename} :: {$Title}</title>
    <link type="text/css" rel="stylesheet" href="css/{$Style}" />
    {if $Graphstyle == 'Y'}
        {if $Graphic == 'default'}
            <link type="text/css" rel="stylesheet" href="css/main/{$Graphic}/layout.css" />
            <link type="text/css" rel="stylesheet" href="css/main/{$Graphic}/locations/{$LocStyle}" />
        {else}
            <link type="text/css" rel="stylesheet" href="css/main/{$Graphic}/style.css" />
        {/if}
    {else}
        <link type="text/css" rel="stylesheet" href="css/main/text.css" />
    {/if}
    {if $Title=='Strażnica'}
        <link type="text/css" rel="stylesheet" href="css/javascript/tabs.css" />
        <link type="text/css" rel="stylesheet" href="css/javascript/slider.css" />
        <link type="text/css" rel="stylesheet" href="css/javascript/dragdrop.css" />
    {/if}
    <link type="image/png" rel="shortcut icon" href="images/misc/favicon.ico" />
{*    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>*}
    <script src="javascript/lib/jquery.pack.js" type="text/javascript"></script>
    {if $Title=='Strażnica'}
        <script src="javascript/lib/jquery_plugins/jquery.history_remote.pack.js" type="text/javascript"></script>
        <script src="javascript/lib/jquery_plugins/jquery.tabs.pack.js" type="text/javascript"></script>
        <script src="javascript/lib/jquery_plugins/interface.js" type="text/javascript"></script>
        <script src="javascript/lib/jquery_plugins/jquery.form.js" type="text/javascript"></script>
        <script src="javascript/outposts.js" type="text/javascript"></script>
        <script src="javascript/tabs.js" type="text/javascript"></script>
        
    {/if}
    <meta http-equiv="Content-Type" content="text/html; charset={$Charset}" />
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="javascript/pngfix.js"></script>
<![endif]-->
    <script type="text/javascript">
    {literal}
        function showHideImage(id,imgSource)
        {
            img = document.getElementById(id);
            img.src = (img.src.match(imgSource) == null) ? imgSource : '';
        }
    {/literal}
    </script>
</head>

<body onload="window.status='{$Gamename}';
    {if $Title=='Tawerna'}document.getElementById('msg').focus();{/if}
    {if $Title=='Strażnica'}$('#tabcontainer').tabs({ldelim}fxFade: true, fxSpeed: 'fast', remote: true{rdelim});{/if}">







<div id="container">
	<div id="top"></div>
    {if $Stephead != "new"}
<br>
        <div id="leftbar"><div class="topmenu"></div><div class="submenu">
		    <table id="Table_01" width="200" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; background: url('images/layout/Untitled-1_05.gif');">
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


                    <div id="stats">
                {if $Graphstyle == "Y" && $Graphic == "default"}<div class="imghead"><img src="images/staty.jpeg" alt="img_Statystyki" width="150" height="50" /></div>{else}<div class="txtheader">{$smarty.const.N_STATISTICS}</div>{/if}
                            <center><b>{$Name}</b> ({$Id})</center><br />
                            {$Avatars}<br />{$Avatar}
                            <div class="menuleft">{if $Graphstyle == "Y"}<img src="images/images.jpg" alt="img_level" class="vmiddle" width="16" height="16" />{/if}<b>{$smarty.const.LEVEL}:</b> {$Level}</div>
                            <div class="menuleft">{if $Graphstyle == "Y"}<img src="images/kleps.jpg" alt="img_exp" class="vmiddle" width="16" height="16" />{/if}<b>{$smarty.const.EXP_PTS}:</b> {$Exp}/{$Expneed} ({$Percent}%)</div>
                            {if $Graphbar == "Y"}
                                <img src="includes/graphbar.php?statusbar=exp" height="4" width="{$Expper}%" alt="{$smarty.const.EXP_PTS}" title="{$smarty.const.EXP_PTS}: {$Percent}%" style="margin-top: 2px; margin-bottom: 2px; border-style: outset; border-right: 0px;" border="0" /><img src="includes/graphbar2.php" height="4" width="{$Vial}%" alt="img_{$smarty.const.EXP_PTS}" title="{$smarty.const.EXP_PTS}: {$Percent}%" style="margin-top: 2px; margin-bottom: 2px; border-style: outset; border-left: 0px;" border="0" /><br />
                            {/if}
                            <div class="menuleft">{if $Graphstyle == "Y"}<img src="images/ert.jpg" alt="img_health" class="vmiddle" width="16" height="16" />{/if}<b>{$smarty.const.HEALTH_PTS}:</b> {$Health}/{$Maxhealth}</div>
                            {if $Graphbar == "Y"}
                                <img src="includes/graphbar.php?statusbar=health" height="4" width="{$Barsize}%" alt="{$smarty.const.HEALTH_PTS}" title="{$smarty.const.HEALTH_PTS}: {$Healthper}%" style="margin-top: 2px; margin-bottom: 2px; border-style: outset; border-right: 0px;" border="0" /><img src="includes/graphbar2.php" height="4" width="{$Vial2}%" alt="{$smarty.const.HEALTH_PTS}" title="{$smarty.const.HEALTH_PTS}: {$Healthper}%" style="margin-top: 2px; margin-bottom: 2px; border-style: outset; border-left: 0px;" border="0" /><br />
                            {/if}
                            {if $Spells !=''}
                                <div class="menuleft">{if $Graphstyle == "Y"}<img src="images/mana.jpg" alt="img_mana" class="vmiddle" width="16" height="16" />{/if}<b>{$smarty.const.MANA_PTS}:</b> {$Mana} </div>
                                {if $Graphbar == "Y"}
                                    <img src="includes/graphbar.php?statusbar=mana" height="4" width="{$Barsize2}%" alt="{$smarty.const.MANA_PTS}" title="{$smarty.const.MANA_PTS}: {$Manaper}%" style="margin-top: 2px; margin-bottom: 2px; border-style: outset; border-right: 0px;" border="0" /><img src="includes/graphbar2.php" height="4" width="{$Vial3}%" alt="{$smarty.const.MANA_PTS}" title="{$smarty.const.MANA_PTS}: {$Manaper}%" style="margin-top: 2px; margin-bottom: 2px; border-style: outset; border-left: 0px;" border="0" /><br />
                                {/if}
                            {/if}
                            <div class="menuleft">{if $Graphstyle == "Y"}<img src="images/ena.jpg" alt="img_energy" class="vmiddle" width="16" height="16" />{/if}<b>{$smarty.const.ENERGY_PTS}:</b> {$Energy}/{$Maxenergy}/{$Maxenergy*63}</div><br />
                            <div class="menuleft">{if $Graphstyle == "Y"}<img src="images/moneta.gif" alt="img_gold" class="vmiddle" width="16" height="16" />{/if}<b>{$smarty.const.GOLD_IN_HAND}:</b> {$Gold}</div>
                            <div class="menuleft">{if $Graphstyle == "Y"}<img src="images/dasd.jpg" alt="img_bank" class="vmiddle" width="16" height="16" />{/if}<b>{$smarty.const.GOLD_IN_BANK}:</b> {$Bank}</div>
                    </div>
                </div><div class="bottommenu"></div><div class="topmenu"></div><div class="submenu">
                    <div id="navigation">
                {if $Graphstyle == "Y" && $Graphic == "default"}<div class="imghead"><img src="images/nawig.jpeg" alt="img_Nawigacja" width="150" height="50" /></div>{else}<div class="txtheader">{$smarty.const.NAVIGATION}</div>{/if}
                        <ul>
                 
                            <li><a href="stats.php">{$smarty.const.N_STATISTICS}</a></li>
                            <li><a href="zloto.php">{$smarty.const.N_ITEMS}</a></li>
                            <li><a href="equip.php">{$smarty.const.N_EQUIPMENT}</a></li>
                            {$Spells}
                        </ul>
                        <ul>
                            {$Location}
                            <li><a href="travel.php">Podróż</a></li><br>
                            {$Lbank}
                            {$Battle}
                            {$Hospital}
                            {$Tribe}
                        </ul>
                        <ul>
                            <li><a href="log.php">{$smarty.const.N_LOG}</a> [<span id="logcount"></span>] </li>
                            <li><a href="mail.php">{$smarty.const.N_POST}</a> [<span id="mailcount"></span>] </li>
                            <li><a href="notatnik.php">{$smarty.const.N_NOTES}</a></li>
                            <li><a href="forums.php?view=categories">{$smarty.const.N_FORUMS}</a></li>
                            {$Tforum}
                             <li><a href="chat.php?room=izba">Tawerna</a> [{$PlayersI}]</li>
                            <li><a href="chat.php?room=piwnica">Piwnica Tawerny</a> [{$PlayersP}]</li>
                            
                        </ul>
                        {if isset ($ArrLinks[0])}
                            <ul>
                                {foreach from=$ArrLinks item=i}
                                <li><a href="{$i.file}">{$i.text}</a></li>
                                {/foreach}
                            </ul>
                        {/if}
                        <ul><li><a href="ranking.php">Ranking ogólny graczy</a></li>
                        <li><a href="rozpiska.php">Rozpiska krainy</a></li>
                            <li><a href="map.php">{$smarty.const.N_MAP}</a></li>
                        </ul>
                        <ul>
                            <li><a href="account.php">{$smarty.const.N_OPTIONS}</a></li>
                            <li><a href="logout.php?did={$Id}">{$smarty.const.N_LOGOUT}</a></li><br><br>
                            <li><a href="member.php">Panel Mieszkańca</a></li><br><br>
                        </ul>
                            {$Special}
                            <form>
<select name="list">
<option selected="selected" value="updates.php" target="_top">Wiesci
</option><option value="house.php?action=my&amp;step=bedroom" target="_top">Sypialnia
</option><option value="train.php" target="_top">Szkoła
</option><option value="newspaper.php?step=new" target="_top">Nowa Gazeta
</option><option value="monuments.php" target="_top">Posagi
</option><option value="travel.php" target="_top">Podróże
</option><option value="outposts.php" target="_top">Strażnica
</option><option value="grid.php" target="_top">Kanały
</option><option value="warehouse.php">Magazyn Królewski
</option><option value="farm.php">Farma
</option></select>
<p>
<input value="Skocz" onclick="top.location.href=this.form.list.options[this.form.list.selectedIndex].value" type="BUTTON">

	</p></form></span>

                            		<span class="light">



	
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
                </div><div class="bottommenu"></div></div>
        <div id="content">
			    <table id="Table_01" width="550" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; background: url('images/layout/Untitled-1_05.gif');">
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

    {/if}
    {if $Stephead == "new"}
        <div id="newspaper">
    {/if}
            <div class="bar-header">
            
               
            </div>
{/strip}
