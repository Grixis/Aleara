{strip}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

<script type="text/javascript" src="javascript/swapnews.js"></script>
<script type="text/javascript" src="javascript/quickpanel.js"></script>
<script type="text/javascript" src="javascript/jquery.js"></script>
<script type="text/javascript" src="javascript/jquery-ui.js"></script>
<script type="text/javascript" src="javascript/jquery.form.js"></script>
<script type="text/javascript" src="javascript/jquery_cookie.js"></script>
<script type="text/javascript" src="javascript/colorpicker.js"></script>
<script type="text/javascript" src="javascript/sliders.js"></script>
<script type="text/javascript" src="javascript/outposts.js"></script>
<script type="text/javascript" src="javascript/tinymce/jscripts/tiny_mce/tiny_mce.js" ></script >
<script type="text/javascript" src="javascript/onlinelist.js">onlinelist({$Id});</script>
<link type="text/css" href="css/ui.css" rel="stylesheet" />
<link type="text/css" href="css/list_styles.css" rel="stylesheet" />
<link type="text/css" rel="StyleSheet" href="css/slider/bluecurve.css" />
<link type="text/css" rel="StyleSheet" href="css/colorpicker.css" />
{if $Editor == '1' && $Title != 'Aleara' && $Title !='Dodaj Ogloszenie'}
{literal}
<script type="text/javascript">
tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        plugins : "emotions,spellchecker,advhr,insertdatetime,preview",
               
        // Theme options - button# indicated the row# only
        theme_advanced_buttons1 : "bold,italic,underline,|,justifyleft,justifycenter,justifyright,fontselect,fontsizeselect,formatselect",
        theme_advanced_buttons2 : "cut,copy,paste,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,anchor,image,|,forecolor,backcolor",
        theme_advanced_buttons3 : "insertdate,inserttime,|,spellchecker,advhr,,removeformat,|,sub,sup,|,charmap,emotions",      
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true
});
tinyMCE.execCommand('mceRemoveControl',false,'oglw');
</script>

	
{/literal}
{/if} 

 
  
    <title>{$Gamename} :: {$Title}</title>
    <link type="text/css" rel="stylesheet" href="css/{$Style}" />
       
 
       
   <link type="text/css" rel="stylesheet" href="css/main/{$Graphic}/layout.css" />
            
   
   
    {if $Title=='Strażnica'}
        <link type="text/css" rel="stylesheet" href="css/javascript/tabs.css" />
        <link type="text/css" rel="stylesheet" href="css/javascript/slider.css" />
        <link type="text/css" rel="stylesheet" href="css/javascript/dragdrop.css" />
    {/if}
   
    {if $Title=='Tawerna'}
         <script src="javascript/tavernfix.js" type="text/javascript"></script>
        {/if}
         {if $Title=='Zasoby'}
         <script src="javascript/tavernfix.js" type="text/javascript"></script>
        {/if}
    <link type="image/png" rel="shortcut icon" href="images/misc/favicon.ico" />
 
    <script src="javascript/lib/jquery.pack.js" type="text/javascript"></script>
   
         
    <meta http-equiv="Content-Type" content="text/html; charset={$Charset}" />
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="javascript/pngfix.js"></script>
<![endif]-->
    {literal}
    <script type="text/javascript">
    
        function showHideImage(id,imgSource)
        {
            img = document.getElementById(id);
            img.src = (img.src.match(imgSource) == null) ? imgSource : '';
        }
    
    </script>
    {/literal}
</head>
 {$MODULEDATA}
<body onload="window.status='{$Gamename}';
        {if $Overlib =='1'}collapse();{/if}
   {if $Title=='Tawerna'}document.getElementById('msg').focus();{/if}
   {if $Title=='Strażnica'}$('#tabcontainer').tabs({ldelim}fxFade: true, fxSpeed: 'fast', remote: true{rdelim});{/if}">
<div id="fb-root"></div>
{literal}
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>

	
	<script type="text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                    appId: '389612681096943',
                    cookie: true,
                    xfbml: true,
                    oauth: true
                });
                FB.Canvas.setAutoGrow(true);
            };
            (function() {
                var e = document.createElement('script'); e.async = true;
                e.src = document.location.protocol +
                    '//connect.facebook.net/en_US/all.js';
                document.getElementById('fb-root').appendChild(e);
            }());
</script>
	</script>
{/literal}



 
 
 
 
 
<div id="container">

<div id="logo"></div>
{if $Stephead != "new"}
<center>
<div id="dupa">


<table style="width: 97%; background: black; text-align: left; top:353px; left:380px;">
<tr>
<td colspan="4"><center>
<img src="zegar.png" alt="img_clock" class="vmiddle" width="16" height="16" /><b><span id="clock"></span></b>&nbsp;&nbsp;&nbsp;	
<img src="http://blacksand.pl/wp-content/uploads/2011/09/klepsydra_120.png" alt="img_toreset" class="vmiddle" width="16" height="16" /> Kolejna tura za: <b><span id="toreset"></span></b>&nbsp;&nbsp;&nbsp;
<img src="kal.png" alt="img_calendar" class="vmiddle" width="16" height="16" /><b> {$Day}</b> dzień <b>{$Age}</b> ery&nbsp;&nbsp;&nbsp;
<img src="http://gamifikacja.net/wp-content/uploads/mike.png" alt="img_players" class="vmiddle" width="16" height="16" /> Mieszkańców: {$Players}
<img src="linia2.png"/></center>
</td>
</tr>

<tr>
	<td><img width="150" height="150" src="includes/graphs2.php?lvl={$Level}&xp={$Expper}&hp={$Healthper}&mp={$Manaper}&en={$Energyper}" />
	</td>
	<td>
		<center><b>{$Name}</b> ({$Id})</center>
		    <div class="menuleft"><img src="http://www.margonem.pl/obrazki/itemy/mie/op-miecz.gif" alt="img_level" class="vmiddle" width="16" height="16" /><b>{$smarty.const.LEVEL}:</b> {$Level}</div>
        <div class="menuleft"><img src="http://www.introversion.co.uk/store/gfx/DEFCON_source.png" alt="img_exp" class="vmiddle" width="16" height="16" /><b>Doświadczenie:</b> {$Exp}/{$Expneed} ({$Percent}%)</div>                    
        <div class="menuleft"><img src="http://www.produkty-zdrowotne.pl/images/kropla_mala.gif" alt="img_health" class="vmiddle" width="16" height="16" /><b>{$smarty.const.HEALTH_PTS}:</b> {$Health}/{$Maxhealth}</div>                    
        <div class="menuleft"><img src="http://img3.imageshack.us/img3/1332/niebieskarosa.png" alt="img_mana" class="vmiddle" width="16" height="16" /><b>Mana:</b> {$Mana}/{$Maxmana} </div>
        <div class="menuleft"><img src="images/ena.jpg" alt="img_energy" class="vmiddle" width="16" height="16" /><b>{$smarty.const.ENERGY_PTS}:</b> {$Energy}/{$Maxenergy*63} (+{$Maxenergy})</div>
        <div class="menuleft"><img src="images/moneta.gif" alt="img_gold" class="vmiddle" width="16" height="16" /><b>Sakiewka:</b> {$Gold}</div>
        <div class="menuleft"><img src="skrzynia.png" alt="img_bank" class="vmiddle" width="16" height="16" /><b>Depozyt:</b> {$Bank}</div>
    
   </td>
   
   

<td width="280" height="140" border="2"><b><i>Ogłoszenia graczy:</b></i><br>
    <div id="news" style="height:130px; overflow: auto">
		</div>
</td>

	<td width="150" height="150">{$Avatar}</td>

</tr>


<img src="linia2.png"/>
</table>
</div>
<img src="linia1.png"/><br>

<table style="width: 97%; background: black;">
<tr>
<td><center>
<span onMouseOver="overlib('<center><b> Lokacja </b><br><br>Możesz tutaj przejść do strony lokacji w któej się znajdujesz. W zależności od Twojego przebywania może to być Aleara, Diabolium, Las Zbłąkanych Dusz, Góry Przeznaczenia, Krwawe Mokradła, Wyspy. Aby zmienić lokację udaj się w zakładkę podróż.</center>', BACKGROUND, 'bg.jpg', BGCOLOR, '#808080', TEXTCOLOR, '#FFFFFF', STATUS, 'Tekst', WIDTH, 300, BORDER-WIDTH, 3)" onMouseOut="nd();"> {$Locationn}</span>
<span onMouseOver="overlib('<center><b> Podróż </b><br><br>Możesz tutaj ruszyć w podróż do innej lokacji. Podróżować można karawaną, piechotą, teleportacją, lub konno.</center>', BACKGROUND, 'bg.jpg', BGCOLOR, '#808080', TEXTCOLOR, '#FFFFFF', STATUS, 'Tekst', WIDTH, 300, BORDER-WIDTH, 3)" onMouseOut="nd();"><a href="travel.php" id="przycisk3"><img src="http://www.howrse.com/media/equideo/image/concours/repeuplement/cheval/facile.png?137722501"width="15" height="15"> Podróż</a></span>
<span onMouseOver="overlib('<center><b> Poczta </b><br><br>Tutaj znajduje się panel Twoich prywatnych konwersacji z innymi mieszkańcami krainy.</center>', BACKGROUND, 'bg.jpg', BGCOLOR, '#808080', TEXTCOLOR, '#FFFFFF', STATUS, 'Tekst', WIDTH, 300, BORDER-WIDTH, 3)" onMouseOut="nd();"><a href="mail.php" id="przycisk4"><img src="poczta.gif"width="15" height="15"> Poczta [<span id="mailcount"></span>]</a></span>
<span onMouseOver="overlib('<center><b> Dziennik </b><br><br>Tutaj znajdują się wszystkie informacje o wydarzeniach ściśle związanych z Twoją postacią.</center>', BACKGROUND, 'bg.jpg', BGCOLOR, '#808080', TEXTCOLOR, '#FFFFFF', STATUS, 'Tekst', WIDTH, 300, BORDER-WIDTH, 3)" onMouseOut="nd();"><a href="log.php" id="przycisk5"><img src="http://images2.wikia.nocookie.net/__cb57087/witcher/images/4/40/Books_Generic_leaf_motif.png"width="15" height="15"> Dziennik [<span id="logcount"></span>]</a></span>
<span onMouseOver="overlib('<center><b> Tawerna - Czat. </b><br><br>Możesz tutaj wejść na czat ogólny i porozmawiać z innymi mieszkańcami krainy. </center>', BACKGROUND, 'bg.jpg', BGCOLOR, '#808080', TEXTCOLOR, '#FFFFFF', STATUS, 'Tekst', WIDTH, 300, BORDER-WIDTH, 3)" onMouseOut="nd();"><a href="chat.php?room=piwnica" id="przycisk6"><img src="http://img.informer.com/icons/png/48/3307/3307351.png"width="15" height="15"> Czat [{$PlayersP}]</a></span>
<span onMouseOver="overlib('<center><b> Statystyki </b><br><br>Znajdują się tutaj wszystki informacje o Twojej postaci. Możesz tutaj rozdawać swoje punkty AP, sprawdzić statystyki oraz umiejętności swej postaci.</center>', BACKGROUND, 'bg.jpg', BGCOLOR, '#808080', TEXTCOLOR, '#FFFFFF', STATUS, 'Tekst', WIDTH, 300, BORDER-WIDTH, 3)" onMouseOut="nd();"><a href="stats.php" id="przycisk7"><img src="bic.gif"width="15" height="15"> Statystyki</a></span>
<span onMouseOver="overlib('<center><b> Zasoby </b><br><br>Znajdziesz tutaj wszystkie informacje o zasobach posiadanych przez Twoją postać.</center>', BACKGROUND, 'bg.jpg', BGCOLOR, '#808080', TEXTCOLOR, '#FFFFFF', STATUS, 'Tekst', WIDTH, 300, BORDER-WIDTH, 3)" onMouseOut="nd();"><a href="zloto.php" id="przycisk9"><img src="http://www.thesettlers.pl/html/pl/budynki/drewno.gif"width="15" height="15"> Zasoby</a></span>
<span onMouseOver="overlib('<center><b> Ekwipunek </b><br><br>Jest to panel Twojego ekwipunku. Możesz znaleźć tutaj wszystkie zbroje, miecze, hełmy, nagolenniki, różdżki, łuki, strzały, szaty, mikstury oraz różne dodatki posiadane przez Twoją postać.</center>', BACKGROUND, 'bg.jpg', BGCOLOR, '#808080', TEXTCOLOR, '#FFFFFF', STATUS, 'Tekst', WIDTH, 300, BORDER-WIDTH, 3)" onMouseOut="nd();"><a href="equip.php" id="przycisk10"><img src="http://media-mcw.cursecdn.com/1/1f/Grid_Gold_Sword.png"width="15" height="15"> Ekwipunek</a></span>
<span onMouseOver="overlib('<center><b> Opcje Konta </b><br><br>Możesz tutaj zmienić wygląd gry, zmienić swoje imie, ustawić opis i avatar. Znajdziesz tutaj jeszcze dużo innych opcji.</center>', BACKGROUND, 'bg.jpg', BGCOLOR, '#808080', TEXTCOLOR, '#FFFFFF', STATUS, 'Tekst', WIDTH, 300, BORDER-WIDTH, 3)" onMouseOut="nd();"><a href="account.php" id="przycisk11"><img src="klucz.png"width="15" height="15"> Opcje Konta</a></span>
<span onMouseOver="overlib('<center><b> Wyloguj Się </b><br><br>Po kliknięciu zostaniesz wylogowany, a Twój stan gry zostanie zapisany.</center>', BACKGROUND, 'bg.jpg', BGCOLOR, '#808080', TEXTCOLOR, '#FFFFFF', STATUS, 'Tekst', WIDTH, 300, BORDER-WIDTH, 3)" onMouseOut="nd();"><a href="logout.php?did={$Id}" id="przycisk12"><img src="https://wywiadowka.com/panel/g/delete.png" width="15" height="15"> Wyloguj</a></span>



<script type="text/javascript">
$("#przycisk1").button();
$("#przycisk2").button();
$("#przycisk3").button();
$("#przycisk4").button();
$("#przycisk5").button();
$("#przycisk6").button();
$("#przycisk7").button();
$("#przycisk8").button();
$("#przycisk9").button();
$("#przycisk10").button();
$("#przycisk11").button();
$("#przycisk12").button();
$("#przycisk13").button();
$("#przycisk14").button();
$("#przycisk15").button();
</script></center>
</td>
</tr>
</table>


<img src="linia2.png"/>
</center>
	
<div id="leftbar"><div id="topmenu"></div><div id="submenu">

	<div class="menuleft">
                {if $Graphstyle == "Y"}<center><img src="images/{$Graphic}/nawig.jpeg" alt="img_Nawigacja" width="160" height="50" /></center>{else}<div class="txtheader">{$smarty.const.NAVIGATION}</div>{/if}
                        <br>
			
                {if $Overlib =='1'}
               
          
          
					<a href="#" onclick="$('.collapsible').show('slow'); return false;" ><center>Rozwiń wszystko</center></a>
					<a href="#" onclick="$('.collapsible').hide('slow'); return false;" ><center>Zwiń wszystko</center></a>
					{/if}		                
                {if $Overlib =='1'}<div class="panel" onclick="$('.collapsible').hide('slow'); $('#location').toggle('blind');"><img src="globus.png" width="14" height="14" align="left" border="0"> Lokacja</div>{/if}
              
                 
                 <div id="location" class="collapsible"><h3><a href="#">Lokacja</a></h3>
                 <ul>
                {$Location}
                 
                
                 <li><a href="bank.php">Twój depozyt</a></li>
                  {$Battle}
                  {$Hospital}
                
                 </ul>
                 </div>
                 {if $Overlib =='1'}<div class="panel" onclick="$('.collapsible').hide('slow'); $('#character').toggle('blind');"></center><img src="http://img17.imageshack.us/img17/6205/postacp.png" width="15" height="15" align="left"> Postać</div>{/if}
                  
                  <div id="character" class="collapsible"><h3><a href="#">Postać</a></h3>
                   <ul>     
                            
                            <li><a href="stats.php">{$smarty.const.N_STATISTICS}</a></li>
                            
                            <li><a href="zloto.php">{$smarty.const.N_ITEMS}</a></li>
                            <li><a href="equip.php">{$smarty.const.N_EQUIPMENT}</a></li>
                            {$Spells}
                        </ul>
                        </div>
                        {if $Overlib =='1'}<div class="panel" id="privatepanel" onclick="$('.collapsible').hide('slow'); $('#private').toggle('blind');"><img src="http://zso11.interpc.pl/obrazki/klucz-anim.gif" width="15" height="15" align="left"> Prywatne</div>{/if}
                      
                        <div id="private" class="collapsible">  <h3><a href="#">Prywatne</h3>
                        <ul>
                        
                            <li><a href="mail.php">{$smarty.const.N_POST}</a> [<span id="mailc"></span>] </li>
                            <li><a href="log.php">{$smarty.const.N_LOG}</a> [<span id="logc"></span>] </li>
                            
                          
                            <li><a href="notatnik.php">{$smarty.const.N_NOTES}</a></li>
<li><a href="forums.php?topics=1">Portal [sesje]</a></li>
<li><a href="fabula.php">Kroniki Aleary</a></li>
                           
                           </ul>
                            </div>
                            {if $Tribe !='' && $Overlib=='1'}
                            <div class="panel" onclick="$('.collapsible').hide('slow'); $('#tribe').toggle('blind');"><img src="http://graliter.pl/gfx/menu/G_W35.png" width="15" height="15" align="left"> Gildia</div>{/if}
                            
                            <div id="tribe" class="collapsible">
                            {if Tribe !=''}<h3><a href="#">Gildia</a></h3>{/if}
                            {$Tribe}
                            
                            </div>
                            
                            {if $Overlib =='1'}<div class="panel" onclick="$('.collapsible').hide('slow'); $('#tavern').toggle('blind');"><img src="http://img.informer.com/icons/png/48/3307/3307351.png" width="15" height="15" align="left"> Tawerna - Czat</div>{/if}
                           
                           <div id="tavern" class="collapsible"><h3><a href="#" >Tawerna - Czat</a></h3>
                           <ul>
                           <li><a href="chat.php?room=piwnica">Czat ogólny</a> [{$PlayersP}]</li>
                            <li><a href="chat.php?room=izba">Czat klimatyczny</a> [{$PlayersI}]</li>
                            
                            </ul>
                            </div>
                            {if $Overlib =='1'}<div class="panel" onclick="$('.collapsible').hide('slow'); $('#shortcuts').toggle('blind');"><img src="http://wsab.org.pl/app/webroot/uploaded/icons/notatnik.png" width="15" height="15" align="left"> Własne linki i skróty</div>{/if}
                       
                       <div id="shortcuts" class="collapsible"><h3><a href="#" >Własne linki i skróty</h3>
                       <ul>
		                 <li><a href="account.php?view=links">Dodaj</a></li>      
                       </ul>
                        {if isset ($ArrLinks[0])}
                            <ul>
                                {foreach from=$ArrLinks item=i}
                                <li><a href="{$i.file}">{$i.text}</a></li>
                                {/foreach}
                            </ul>
                        {/if}
                                                    <form>
<center>
<select name="list">
<option selected="selected" value="updates.php" target="_top">Wiesci
</option><option value="house.php?action=my&amp;step=bedroom" target="_top">Sypialnia
</option><option value="train.php" target="_top">Trening
</option><option value="newspaper.php?step=new" target="_top">Nowa Gazeta
</option><option value="monuments.php" target="_top">Posągi
</option><option value="travel.php" target="_top">Podróże
</option><option value="outposts.php" target="_top">Strażnica
</option><option value="grid.php" target="_top">Kanały
</option><option value="warehouse.php">Magazyn Królewski
</option><option value="farm.php">Farma
</option></select>
<br>
<input value="Skocz" onclick="top.location.href=this.form.list.options[this.form.list.selectedIndex].value" type="BUTTON"><br>
</center>
</form>
                        </div>
{if $Overlib =='1'}<div class="panel" id="otherspanel" onclick="$('.collapsible').hide('slow'); $('#other').toggle('blind');"><ALIGN="LEFT"><small><img src="http://www.leotex.pl/sklep/pozostale.png" width="15" height="15" align="left"><FONT SIZE="-3"> Pozostałe</font></small></div>{/if}                        
                        
                        
                        <div id="other" class="collapsible"><h3><a href="#" >Pozostałe</h3>
                         <ul><li><a href="ranking.php">Ranking Graczy</a></li>
                         <li><a href="rankingguild.php">Ranking Gildii</a></li>
                        
                         
                    			<li><blink><span id="change">{if $Changelog != 'Y'}!!{/if}</span></blink><a href="account.php?view=changes" >Ostatnie zmiany</a></li>
                    			<li>{if $Denars < '14'}<blink>!!</blink>{/if}<a href="vote.php" >Głosuj na nas!</a></li>
                            <li><a href="map.php">{$smarty.const.N_MAP}</a></li>
                          
                            <li><a href="poradnik.php" >Poradnik</li>
                           
                     
                            <li><a href="account.php">{$smarty.const.N_OPTIONS}</a></li>
                            <li><a href="logout.php?did={$Id}">{$smarty.const.N_LOGOUT}</a></li>
                            <li><a href="member.php">Panel Mieszkańca</a></li>
							<li><a href="account.php?view=bugreport">Zgłoś błąd</a></li>
						<br><b>REKLAMA:</b><br>
						<li><a href="http://brudnebaletki.strefa.pl/">Brudne Baletki</a></li>
            <li><a href="http://animegakure.dbnao.net/">Anime Gakure</a></li>
            <li><a href="http://rpgmaker.pl/">Twierdza RPG Maker</a></li>
            <li><a href="http://yggdrasil.pl/" alt="Yggdrasil – portal o grach">Yggdrasil – portal o grach</a></li>
            
            
                        </ul>
                           {$Special}
                           {$MODULEMENU}
                           <a href="modules.php?mod=systemsesji"></a>
                           </div>
                           
             <br>   
       <strong>Newsy z krainy:</strong><br>
					{$newsy}<br>
					 
					<a href=updates.php>[czytaj pełne newsy] </a>    
					{$Addnewsy}    
					           <br>   <br>  
       <strong>Ostatni wpis z kronik:</strong><br>
					{$kroniki}<br>
					 
					<a href=fabula.php>[czytaj więcej...] </a>    
					{$Addkroniki}      
</div>                            
                            
                     
                        
                  
                            

</div>
<div id="bottommenu"></div>
</div>




		
		<div id="contentholder">
		{section name=i loop=$ArrNews}
		<div id="oglo{$smarty.section.i.index}" style="display: none"><b>{$ArrNews[i][2]}</b> {$ArrNews[i][1]}</b>{if $Rank == "Admin" || $Rank == "Staff"} <a href="city.php?step=list&amp;del={$ArrNews[i][0]}" onclick="return confirm('{$smarty.const.ERR_CONFIRM}');" title="{$smarty.const.ERR_DEL}">{if $Graphstyle == "Y"}<img src="images/icons/delete.png" alt="_img{$smarty.const.ERR_DEL}" />{else}{$smarty.const.ERR_DEL}{/if}</a>{/if}<br /><br />
			<center>"{$ArrNews[i][3]}"</center></div>
		{/section}
		<span id="total" style="display:none">{$smarty.section.i.total}</span>
	
		
		
		
		
	
		
        
			<div id="topmiddlebar"></div>
			{if $Title=='Zasoby'}
			<div id="subcontent" class="sub" style="min-height: 850px">
			{else}
			<div id="subcontent" class="sub">
			{/if}
<div id="herbs" class="ui-widget-content ui-corner-all" style="position:fixed; display:none; top: 139px; left: 50px;">
<center><h3 class="ui-widget-header">Zioła</h3></center>
<center>
<table>
<tr>
<td>
<table style="border: 1px solid">
<caption>Zioła</caption>
<tr>
<td style="border:1px solid">Illani:</td><td style="border: 1px solid">{$Illani}</td>
</tr>
<tr>
<td style="border:1px solid">Illanias:</td><td style="border: 1px solid">{$Illanias}</td>
</tr>
<tr>
<td style="border:1px solid">Nutari:</td><td style="border: 1px solid">{$Nutari}</td>
</tr>
<tr>
<td style="border:1px solid">Dynallca:</td><td style="border: 1px solid">{$Dynallca}</td>
</tr>
</table>
</td>
<td>
<table style="border: 1px solid">
<caption>Nasiona</caption>
<tr>
<td style="border:1px solid">Illani:</td><td style="border: 1px solid">{$Ilaniseeds}</td>
</tr>
<tr>
<td style="border:1px solid">Illanias:</td><td style="border: 1px solid">{$Illaniasseeds}</td>
</tr>
<tr>
<td style="border:1px solid">Nutari:</td><td style="border: 1px solid">{$Nutariseeds}</td>
</tr>
<tr>
<td style="border:1px solid">Dynallca:</td><td style="border: 1px solid">{$Dynallcaseeds}</td>
</tr>
</table>
</td>
</tr>
</table>
</center>

</div>
<div id="minerals"  class="ui-widget-content ui-corner-all"style="position:fixed; display:none; top: 53px; left: 50px;">
<center><h3 class="ui-widget-header">Minerały</h3></center>
<table>
<tr>
<td>
<center><table style="border: 1px solid">
<caption>Minerały</caption>
<tr>
<td style="border:1px solid">Ruda miedzi:</td><td style="border: 1px solid">{$Copperore}</td>
</tr>
<tr>
<td style="border:1px solid">Ruda cynku:</td><td style="border: 1px solid">{$Zincore}</td>
</tr>
<tr>
<td style="border:1px solid">Ruda cyny:</td><td style="border: 1px solid">{$Tinore}</td>
</tr>
<tr>
<td style="border:1px solid">Ruda żelaza:</td><td style="border: 1px solid">{$Ironore}</td>
</tr>
<tr>
<td style="border:1px solid">Węgiel:</td><td style="border: 1px solid">{$Coal}</td>
</tr>
</table>

</td>
<td>

<table style="border: 1px solid">
<caption>Sztabki</caption>
<tr>
<td style="border:1px solid">Miedzi:</td><td style="border: 1px solid">{$Copper}</td>
</tr>
<tr>
<td style="border:1px solid">Żelaza:</td><td style="border: 1px solid">{$Iron}</td>
</tr>
<tr>
<td style="border:1px solid">Brązu:</td><td style="border: 1px solid">{$Bronze}</td>
</tr>
<tr>
<td style="border:1px solid">Mosiądzu:</td><td style="border: 1px solid">{$Brass}</td>
</tr>
<tr>
<td style="border:1px solid">Stali:</td><td style="border: 1px solid">{$Steel}</td>
</tr>
</table>

</td>
<td>

<table style="border: 1px solid">
<caption>Szlachetne</caption>
<tr>
<td style="border:1px solid">Mithril:</td><td style="border: 1px solid">{$Mithril}</td>
</tr>
<tr>
<td style="border:1px solid">Adamantium:</td><td style="border: 1px solid">{$Adamantium}</td>
</tr>
<tr>
<td style="border:1px solid">Kryształ:</td><td style="border: 1px solid">{$Crystal}</td>
</tr>
<tr>
<td style="border:1px solid">Meteor:</td><td style="border: 1px solid">{$Meteor}</td>
</tr>

</table>

</td>
</tr>
</table>
<br>
</center>

</div>
<div id="wood" class="ui-widget-content ui-corner-all" style="position:fixed; display:none; top: 96px; left: 50px;">
<center><h3 class="ui-widget-header">Drewno</h3></center>
<center><table style="border: 1px solid">
<caption>Drewno</caption>
<tr>
<td style="border:1px solid">Sosna:</td><td style="border: 1px solid">{$Pine}</td>
</tr>
<tr>
<td style="border:1px solid">Leszczyna:</td><td style="border: 1px solid">{$Hazel}</td>
</tr>
<tr>
<td style="border:1px solid">Cis:</td><td style="border: 1px solid">{$Yew}</td>
</tr>
<tr>
<td style="border:1px solid">Wiąz:</td><td style="border: 1px solid">{$Elm}</td>
</tr>
</table>
</center>
</div>
<div id="equip" class="ui-widget-content ui-corner-all" style="position:fixed; display:none; top: 10px; left: 50px;">
<center><h3 class="ui-widget-header">Ekwipunek</h3></center>
{$Weapon}
{$Arrows}
{$Helmet}
{$Armor}
{$Legs}
{$Ring1}
{$Ring2}<br><br>
<center>[<a href="equip.php?napraw_uzywane">Napraw używane</a>]</center>
</div>

<script type="text/javascript" >swapNews();</script>
{literal}
<div id="buttonsholder">
<div onclick="$('#minerals').hide(); $('#herbs').hide(); $('#wood').hide(); $('#equip').toggle('slide');">
<img src="images/icons/miecz.gif" alt="Ekwipunek"/>
</div>
<div onclick="$('#equip').hide(); $('#herbs').hide(); $('#wood').hide(); $('#minerals').toggle('slide');">
<img src="images/icons/mineral.gif" alt="Minerały"/>
</div>
<div onclick="$('#equip').hide(); $('#herbs').hide(); $('#minerals').hide(); $('#wood').toggle('slide');">
<img src="images/icons/drewno.gif" alt="Drewno"/>
</div>
<div onclick="$('#equip').hide(); $('#minerals').hide(); $('#wood').hide(); $('#herbs').toggle('slide');">
<img src="images/icons/ziolo.gif" alt="Zioła"/>
  
</div>
</div>
{/literal}

    {/if}
    {if $Stephead == "new"}
        <div id="newspaper">
    {/if}
            <div class="bar-header">
            <center>

            </div>
{/strip}
