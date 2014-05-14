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
<script type="text/javascript" src="javascript/detector.js"></script>
<script type="text/javascript" src="javascript/md5.js"></script>
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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39308901-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

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
            img.src = (img.src.match(imgSource) === null) ? imgSource : '';
			

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
<noscript>

	<?php header('Location: http://aleara.pl'); ?>

</noscript>
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
{/literal}
<div id="master_all">


 <div id="container_up">

{if $Stephead != "new"}

<table>
   <tr>
    <td> <img src=xx.png></td>
	 <td> <img src=xx.png></td>
	 
		 <td style="width: 189px; height: 142px; margin-left: 409px;">
		 
		 
		   <img width="125" height="125" src="includes/graphs2.php?lvl={$Level}&xp={$Expper}&hp={$Healthper}&mp={$Manaper}&en={$Energyper}" />

   </td>

   <td style="width: 212px; height: 142px">
          <font size="1">
          <center><b>{$Name}</b> ({$Id})<br></center>
		      <img src="http://www.margonem.pl/obrazki/itemy/mie/op-miecz.gif" alt="img_level" class="vmiddle" width="12" height="12" /><b><font size="1">{$smarty.const.LEVEL}:</b> {$Level}<br>
          <img src="http://www.introversion.co.uk/store/gfx/DEFCON_source.png" alt="img_exp" class="vmiddle" width="12" height="12" /><b>Exp:</b> {$Exp}/{$Expneed} ({$Percent}%)    <br>               
          <img src="http://www.produkty-zdrowotne.pl/images/kropla_mala.gif" alt="img_health" class="vmiddle" width="12" height="12" /><b>{$smarty.const.HEALTH_PTS}:</b> {$Health}/{$Maxhealth} <br>                  
          <img src="http://img3.imageshack.us/img3/1332/niebieskarosa.png" alt="img_mana" class="vmiddle" width="12" height="12" /><b>Mana:</b> {$Mana}/{$Maxmana} <br>
          <img src="images/ena.jpg" alt="img_energy" class="vmiddle" width="12" height="12" /><b>{$smarty.const.ENERGY_PTS}:</b> {$Energy}/{$Maxenergy*63} (+{$Maxenergy})<br>
          <img src="images/moneta.gif" alt="img_gold" class="vmiddle" width="12" height="12" /><b>Sakiewka:</b> {$Gold}<br>
          <img src="skrzynia.png" alt="img_bank" class="vmiddle" width="12" height="12" /><b>Depozyt:</b> {$Bank}<br>   
		 </td>

 <td style="width: 320px; height: 142px">
<div id="news" style="height:110px; overflow: auto">
</div>
Opcje ogłoszeń: <a href="ogloszenia.php?view=all" title="Możesz tutaj przeczytać ostatnie 10 ogłoszeń mieszkańców krainy.">Ostatnie 10</a> || <a href="oglw.php" title="Możesz tutaj napisać własne ogłoszenie.">Napisz ogłoszenie</a>
		
 </td>

 <td style="width: 0px; height: 142px">
   		<br><br>
  <center> <div id="avek"><center>{$Avatar}</center></div></center><br>
   
   </td>

</tr>

</table><center>
<span title="Możesz tutaj przejść do strony lokacji w której się znajdujesz. W zależności od Twojego przebywania może to być Aleara, Diabolium, Las Zbłąkanych Dusz, Góry Przeznaczenia, Krwawe Mokradła, Wyspy. Aby zmienić lokację udaj się w zakładkę podróż."> {$Locationn}</span>
 |<a href="travel.php" title="Możesz tutaj ruszyć w podróż do innej lokacji. Podróżować można karawaną, piechotą, teleportacją, lub konno." id="przycisk3"> Podróż</a></span>
 | <a href="mail.php" title="Tutaj znajduje się panel Twoich prywatnych konwersacji z innymi mieszkańcami krainy." id="przycisk4"> Poczta [<span id="mailcount"></span>]</a></span>
 | <a href="log.php" title="Tutaj znajdują się wszystkie informacje o wydarzeniach ściśle związanych z Twoją postacią." id="przycisk5"> Dziennik [<span id="logcount"></span>]</a></span>
 | <a href="chat.php?room=piwnica" title="Wejdź na czat i porozmawiaj z innymi mieszkańcami" id="przycisk6"> Czat [{$PlayersP}]</a></span>
 | <a href="stats.php" title="Znajdują się tutaj wszystki informacje o Twojej postaci. Możesz tutaj rozdawać swoje punkty AP, sprawdzić statystyki oraz umiejętności swej postaci." id="przycisk7"> Statystyki</a></span>
 | <a href="zloto.php" title="Znajdziesz tutaj wszystkie informacje o zasobach posiadanych przez Twoją postać" id="przycisk9"> Zasoby</a></span>
 | <a href="equip.php" title="Jest to panel Twojego ekwipunku. Możesz znaleźć tutaj wszystkie zbroje, miecze, hełmy, nagolenniki, różdżki, łuki, strzały, szaty, mikstury oraz różne dodatki posiadane przez Twoją postać." id="przycisk10"> Ekwipunek</a></span>
 | <a href="account.php" title="Możesz tutaj zmienić wygląd gry, zmienić swoje imie, ustawić opis i avatar. Znajdziesz tutaj jeszcze dużo innych opcji." id="przycisk11"> Opcje</a></span>
 | <a href="logout.php?did={$Id}" title="Po kliknięciu zostaniesz wylogowany, a Twój stan gry zostanie zapisany" id="przycisk12"> Wyloguj</a>


</center>
<table style="align: center;">

<br>

<center><br><br>
 <marquee width="500" height="20" align="center" direction="left" scrollamount="1"style=" margin-left: 0px; border="0";>
					<p>{$Weather}</p>
				  </marquee>
</center>

</table>
</div>
<div id="container">	
<div id="leftbar"><div id="submenu">

	<div class="menuleft">
             
			<img src=nav.jpg>
			     <table style="width: 20%;">  
      <tr><td>
      <img src=xxy.png>
      </td><td>  
                {if $Overlib =='1'}
               
 
          
					
					{/if}		                
                {if $Overlib =='1'}<div class="panel" onclick="$('.collapsible').hide('slow'); $('#location').toggle('blind');"> Lokacja</div>{/if}
              
                 
                 <div id="location" class="collapsible"><h3><a href="#">&#160;&#160;&#160;&#160;Lokacja</a></h3>
                 <ul>
                {$Location}
                 
                
                 <li><a href="bank.php">Twój Depozyt</a></li>
                  {$Battle}
                  {$Hospital}
                <li><a href="igrzyska.php">IGRZYSKA</a></li>
                 </ul>
                 </div>
                 {if $Overlib =='1'}<div class="panel" onclick="$('.collapsible').hide('slow'); $('#character').toggle('blind');"></center> Postać</div>{/if}
                  
                  <div id="character" class="collapsible"><h3><a href="#">&#160;&#160;&#160;&#160;Postać</a></h3>
                   <ul>     
                            
                            <li><a href="stats.php">{$smarty.const.N_STATISTICS}</a></li>
                            
                            <li><a href="zloto.php">{$smarty.const.N_ITEMS}</a></li>
                            <li><a href="equip.php">{$smarty.const.N_EQUIPMENT}</a></li>
                            <li><a href="najemnicywlasni.php">Twoi Najemnicy</a></li>
                            {$Spells}
                        </ul>
                        </div>
                        {if $Overlib =='1'}<div class="panel" id="privatepanel" onclick="$('.collapsible').hide('slow'); $('#private').toggle('blind');"> Prywatne</div>{/if}
                      
                        <div id="private" class="collapsible">  <h3><a href="#">&#160;&#160;&#160;&#160;Prywatne</h3>
                        <ul>
                        
                            <li><a href="mail.php">{$smarty.const.N_POST}</a> [<span id="mailc"></span>] </li>
                            <li><a href="log.php">{$smarty.const.N_LOG}</a> [<span id="logc"></span>] </li>
                            <li><a href="lista_przyjaciol.php">Lista Przyjaciół</a></li>
                          
                            <li><a href="notatnik.php">{$smarty.const.N_NOTES}</a></li>
<li><a href="forums.php?topics=1">Portal [sesje]</a></li>
<li><a href="fabula.php">Kroniki Aleary</a></li>
                           
                           </ul>
                            </div>
                            {if $Tribe !='' && $Overlib=='1'}
                            <div class="panel" onclick="$('.collapsible').hide('slow'); $('#tribe').toggle('blind');"> Gildia</div>{/if}
                            
                            <div id="tribe" class="collapsible">
                            {if Tribe !=''}<h3><a href="#">&#160;&#160;&#160;&#160;Gildia</a></h3>{/if}
                            {$Tribe}
                            
                            </div>
                            
                            {if $Overlib =='1'}<div class="panel" onclick="$('.collapsible').hide('slow'); $('#tavern').toggle('blind');"> Tawerna - Czat</div>{/if}
                           
                           <div id="tavern" class="collapsible"><h3><a href="#" >&#160;&#160;&#160;&#160;Tawerna - Czat</a></h3>
                           <ul>
                           <li><a href="chat.php?room=piwnica">Karczma Ogólna [NC]</a></li>
                            <li><a href="chat.php?room=pokoj1">Pokój Poboczny [NC]</a></li>
                            <li><a href="chat.php?room=piekielko">Karczma Piekiełko [C]</a></li>
                            <li><a href="chat.php?room=buzdygan">Karczma Buzdygan [C]</a></li>
                            </ul>
                            </div>
                            {if $Overlib =='1'}<div class="panel" onclick="$('.collapsible').hide('slow'); $('#shortcuts').toggle('blind');"> Własne Menu</div>{/if}
                       
                       <div id="shortcuts" class="collapsible"><h3><a href="#" >&#160;&#160;&#160;&#160;Własne Menu</h3>
                       <ul>
		                 <li><a href="account.php?view=links">Dodaj własny link</a></li>      
                       </ul>
                        {if isset ($ArrLinks[0])}
                            <ul>
                                {foreach from=$ArrLinks item=i}
                                <li><a href="{$i.file}">{$i.text}</a></li>
                                {/foreach}
                            </ul>
                        {/if}
                                                   
                        </div>
                        {if $Overlib =='1'}<div class="panel" onclick="$('.collapsible').hide('slow'); $('#fabular').toggle('blind');"><small> Ramy Fabularne</font></small></div>{/if}
                       <div id="fabular" class="collapsible"><h3><a href="#" ><b>&#160;&#160;&#160;&#160;Ramy Fabularne</b></h3>
                            
                       <ul>
		                 <li><a href="ramyfabuly.php">Ramy Fabularne</a></li> 
		                  <li><a href="kodexfab.php">Kodeks Fabularny</a></li> 
		                 <li><a href="historiakrainy.php">Historia Krainy</a></li>  
		                 <li><a href="opisswiata.php">Opis Świata</a></li>  
		                 
		                 <li><a href="wiesci.php">Wieści</a></li> 
		                 
		                <li><a href="rasy.php">Rasy</a></li> 
		                 <li><a href="klasy.php">Klasy</a></li>
		                 <li><a href="magiafab.php">Magia</a></li> 
		                 <li><a href="fabula.php">Kroniki</a></li> 
		                <li><a href="pozostalee.php">Pozostałe</a></li> 
		                 
		                 <li><a href="mapy.php">Mapy</a></li> 
		                 
		                 
		                 
		                 
		                 
		                 
		                 
		                 
		                 
		                 
		                   
                       </ul>
                        
                                                   
                        </div>
{if $Overlib =='1'}<div class="panel" id="otherspanel" onclick="$('.collapsible').hide('slow'); $('#other').toggle('blind');"><small> Pozostałe</font></small></div>{/if}                        
                        
                        
                        <div id="other" class="collapsible"><h3><a href="#" ><b>&#160;&#160;&#160;&#160;Pozostałe</b></h3>
                         <ul><li><a href="ranking.php">Ranking Graczy</a></li>
                         <li><a href="rankingguild.php">Ranking Gildii</a></li>
                        
                         
                    			<li><blink><span id="change">{if $Changelog != 'Y'}!!{/if}</span></blink><a href="account.php?view=changes" >Ostatnie Zmiany</a></li>
                    			<li>{if $Denars < '12'}<blink>!!</blink>{/if}<a href="vote.php" >Głosuj Na Nas!</a></li>
                         
                          
                            <li><a href="poradnik.php" >Poradnik Mechaniczny</li>
                          
                     
                            <li><a href="account.php">Opcje Konta</a></li>
                            <li><a href="logout.php?did={$Id}">Wylogowanie</a></li>
                         
						
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
                           
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
      
       
       <img src="newsy.jpg"><br>
      
					{$newsy}<br>
					 
					<a href=updates.php>[czytaj pełne newsy] </a>    
				
					{$Addnewsy}   
				
					           <br>   <br>  
       <img src="kroniki.jpg"><br>
					{$kroniki}<br>
					 
					<a href=fabula.php>[czytaj więcej...] </a>    
					{$Addkroniki}  
					
					
					
					
					  
					</td><td>
      
     &#160;
      </td>
					</tr>
			</table>		  
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
           
{/strip}
