{if $Location == "Altara"}
<center><IMG SRC="images/locations/kaplicaslubna.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>

Rozkochany w swej wybrance zmierzasz poprosić kapłana o ślub, niemal biegniesz po brukowanej ulicy, nie dostrzegasz kilku kałuż po drodze, dziś jest piękne. Wodniste oczka po prostu przeskakujesz. Nagle zza rogu wyłania się biała altana, opleciona bluszczem, po środku niej płonie ogień, a na ławie śpi jakiś mężczyzna, podchodzisz do niego pewnym krokiem. Nawet specjalnie się nie strasz iść cicho. Mężczyzna budzi się nim zdążyłeś go dotknąć, na twarzy ma odbity ślad rzeźbienia ławy, odwraca się i nieco nieprzytomnym wzrokiem patrzy na ciebie. Wyciąga nieco niepewnie dłoń i w końcu uśmiecha się. <br>
-czyżby w sprawie ślubu – pyta, a potem dodaje – no a w zasadzie po co miałbyś przychodzić, dobrze trafiłeś… <br>
Wyciąga notes i spogląda na Ciebie chcąc byś powiedział mu kto z kim i kiedy. 
<br><Br>
  <fieldset>
 <legend><b>Informacje</b></legend>
Jesli bardzo go pragniesz, a on Ciebie, napiszcie do kapłana.<br>

- Nowożeńcy w prezencie dostają 2 do max energi<br>
- Para po rozwodzie traci 2 max energi<br>
- Dozwolone są związki tej samej płci.<br>
- Każda strona musi napisać wiadomość do kapłana.<br>
- W wiadomości proszę umieścić:<br>
  1. ID: Kobiety<br>
  2. ID: Mężczyzny<br>
  3. W jaki sposób się oświadczył<br><br>
  Slubów udziela kapłan <font color="red">{$Kaplan}<br></font>
  </fieldset>

<br>
 {strip}<script type="text/javascript">
var playerid = {$Playerid};
var room = '{$Room}';
{literal}
function set_checkbox() {
if ($.cookie('tavern_snd') == 'false')
{
	//$('#chkbox:checked').val('playsound');
	document.getElementById('chkbox').checked = true;
}

}
function snd_cookie() {

if ($('#chkbox:checked').val() == undefined)
		{
        $.cookie('tavern_snd', null, {expires: 7});
		}
else
		{
		$.cookie('tavern_snd', 'false', {expires: 7});
		
		}
}
function stripHTMLtags(str)
{
    var mystr='';
    var chr='';
    var skip=false;
    var skipcancel=false;

    for (tx=0; tx<str.length; tx++)
    {
        if (skipcancel==true){skip=false;}
        chr=str.charAt(tx);
        if (chr=='<'){skip=true;skipcancel=false;}
        else if (chr=='>' && skip==true){skipcancel=true;}
        if (skip==false) mystr=mystr+chr;
    }
    return mystr;
}
function insertURL() 
{
 var url=prompt("Podaj adres linku (razem z http://)","http://");
 if (url != null)
 {
 document.form.msg.value +="[url]"+url+"[/url]";
 }
}
function insertTAG(start, stop)
{
var textarea = document.getElementById("msg");

 
textarea.focus();
if (document.selection)

			{

				textarea.focus();

				var sel = document.selection.createRange();

                                // alert the selected text in textarea

				alert(sel.text);

 

                               // Finally replace the value of the selected text with this new replacement one

				sel.text = start + sel.text + stop;

			}

 



 

  var len = textarea.value.length;

   var beg = textarea.selectionStart;

   var end = textarea.selectionEnd;

   var sel = textarea.value.substring(beg, end);

 

   // This is the selected text and alert it

   //alert(sel);

 

  var replace = start + sel + stop;

 

  // Here we are replacing the selected text with this one

 textarea.value =  textarea.value.substring(0,beg) + replace + textarea.value.substring(end,len);

 
}
function stripslashes(str)
{
    str=str.replace(/\\'/g,'&apos;');
    str=str.replace(/\\&quot;/g,'&quot;');
    str=str.replace(/\\\\/g,'\\');
    str=str.replace(/\\0/g,'\0');
    return str;
}
var timeout = 5000;
var visited = 0;

function setRefreshTime()
{
timeout = document.getElementById("refresh").options[document.getElementById("refresh").selectedIndex].value;
}

function privMessage(privid)
{
	currentmsg = document.getElementById("msg").value;
	if (currentmsg[0] != '!' || currentmsg[1] != 'w')
	{
		document.getElementById("msg").value = '!w '+privid+' '+currentmsg;
	}
	document.getElementById("msg").focus();
};

function getData()
{
    $.getJSON('chatmsgs5.php?room='+room+'&visited='+visited, {}, function(json){
        setResponse(json);
    });


    visited = 1;
}
function chatRefresh()
{
	setTimeout('chatRefresh()', timeout);
	getData();
}
chatRefresh();

$(document).ready(function(){
  $('#sender').submit(function(){
    text = $('#msg').val();
    if(text == '')
    {
      return false;
    }
    $.post('chatmsgs5.php?room='+room+'&visited='+visited, {msg:text});
    $('#msg').val("");
	getData();
    return false;
  });
  $('#room').change(function(){
	room = $(this).val();
	$('#window').empty();
	$('<li><b>{/literal}{$smarty.const.ROOM_CHANGED_TO}{literal} '+room+'</b></li>').appendTo("#window");
	visited = 0;
  });
});

function setResponse(json)
{
      var audio=$("#sound")[0];
	  $('#users').empty();

      for(x in json.users)
      {
         $('<div id="'+json.users[x].userid +'"><a class="priv" href="" onclick="privMessage('+json.users[x].userid+')" style="color:#FF0000">Priv</a> <a href="view.php?view='+json.users[x].userid+'">'+json.users[x].user+'</a>').appendTo("#users");
      }

      $('#users').find('.priv').click(function(){
		  return false;
	  });

      for(x in json.msg)
      {
		if ($('#chkbox:checked').val() == undefined)
		{
        audio.play();
		}
		if (json.msg[x].sender != '')
        {
          json.msg[x].sender = stripslashes(json.msg[x].sender);
        }
        if (json.msg[x].ownerid != 0)
        {
          json.msg[x].owner = stripslashes(json.msg[x].owner);
        }
        if (json.msg[x].text != '')
        {
          json.msg[x].text = stripslashes(json.msg[x].text);
        }
        if(json.msg[x].ownerid != 0 && json.msg[x].sender != '')
        {
          if(playerid == json.msg[x].senderid) $('<li id="'+json.msg[x].id +'" style="font-weight: bolder;" title="'+json.msg[x].date+'">{/literal}{if $Gender == 'M'}{$smarty.const.YOU_TOLD_M}{else}{$smarty.const.YOU_TOLD_F}{/if}{literal} <a href="view.php?view='+json.msg[x].ownerid+'" title="">'+json.msg[x].owner+'</a>: '+json.msg[x].text+'</li>').appendTo("#window");
          else
          {
            if (json.msg[x].gender == 'M')
            {
              toldString = '{/literal}{$smarty.const.M_TOLD}{literal}';
            }
            else
            {
              toldString = '{/literal}{$smarty.const.F_TOLD}{literal}';
            }
          $('<li id="'+json.msg[x].id +'" style="font-weight: bolder;" title="'+json.msg[x].date+'"><a href="view.php?view='+json.msg[x].senderid+'" title="">'+json.msg[x].sender+'</a> '+toldString+' '+json.msg[x].text+'</li>').appendTo("#window");
          }
        }
        else if(json.msg[x].sender != '')
        {
          if(playerid == json.msg[x].senderid)
          {
            $('<li id="'+json.msg[x].id +'" title="'+json.msg[x].date+'"><a href="view.php?view='+json.msg[x].senderid+'" style="color:#A33A3A">'+stripHTMLtags(json.msg[x].sender)+'</a>: '+json.msg[x].text+'</li>').appendTo("#window");
          }
          else
          {
            $('<li id="'+json.msg[x].id +'" title="'+json.msg[x].date+'"><a href="view.php?view='+json.msg[x].senderid+'">'+json.msg[x].sender+'</a>: '+json.msg[x].text+'</li>').appendTo("#window");
          }
        }
        else
        {
          $('<li id="'+json.msg[x].id +'" title="'+json.msg[x].date+'">&gt;&gt;&gt; '+json.msg[x].text+'</li>').appendTo("#window")
        }
        var objDiv = document.getElementById("window");
        objDiv.scrollTop = objDiv.scrollHeight;

      }

    $("#system").empty();
    str = json.users.length+'{/literal}{$smarty.const.PLAYERS}{literal}<br>';
    str = '<center>' + str + json.number +'{/literal}{$smarty.const.MESSAGES}{literal}</center>'
    $("#system").append(str);

}
{/literal}
</script>

  
  
  
  
     

   
<div style="width: 100%; height: 300px; margin: auto;">
  <div id="chat">
    <div id="window" style="width: 74%;float:left;padding: 0; height: 300px; overflow: auto; border: solid 1px gray;">
      <noscript>{$smarty.const.E_JS}</noscript>
    </div>
  <div id="users" style="width: 25%;float:left;padding: 0;border: solid 1px gray;height: 300px; margin: 0px; overflow: auto;">
  </div>
 </div>
 </div>
 <form name="form" method="post" action="chatmsgs5.php" id="sender">
    <input type="submit"  value="Wyślij" align="right" style="width: 80px;"/><input type="text" name="msg" id="msg" style="width: 400px" />
     
  
  </center></form></center>
   <audio id="sound">
	<source src="Audio/chat-highlight.ogg"></source>
</audio>    
<script type="text/javascript">
set_checkbox();
</script>

   

 

{/strip}

{/if}


{if $Location == "Altara"}
    <b>Tutaj znajdują się osoby, które zdecydowały się połączyć na wieki: </b> 
    <br><br><br>
    {if $Number > "0"}
        {section name=pary loop=$Name}
            <b>Imię Kobiety:</b> <a href=view.php?view={$Id[pary]}>{$Name[pary]}</a><br>
            <b>ID Kobiety:</b> {$Id[pary]}<br>
			<b>Imię Mężczyzny:</b> <a href=view.php?view={$Idp[pary]}>{$Namep[pary]}</a><br>
			<b>ID Mężczyzny:</b> {$Idp[pary]}<br>
            <b>Data ich ślubu:</b> {$Date[pary]}<br>
            <b>Oświadczyny:</b> {$Verdict[pary]}<br>
            <b>Koszt rozwodu:</b> <a href=pary.php?prisoner={$Jailid[pary]}>{$Cost[pary]} sztuk złota</a><br><br><br>
        {/section}
    {/if}
    {if $Number == "0"}
        <center>Nie ma małżeństw w miescie<center>
		
    {/if}
{/if}

</br>