<?php /* Smarty version 2.6.16, created on 2013-02-14 18:38:13
         compiled from chat.tpl */ ?>
<?php echo '<script type="text/javascript">var playerid = ';  echo $this->_tpl_vars['Playerid'];  echo ';var room = \'';  echo $this->_tpl_vars['Room'];  echo '\';';  echo '
function set_checkbox() {
if ($.cookie(\'tavern_snd\') == \'false\')
{
	//$(\'#chkbox:checked\').val(\'playsound\');
	document.getElementById(\'chkbox\').checked = true;
}

}
function removedupes() {
var seen = {};
$(\'#window li\').each(function() {
    var txt = $(this).text();
    if (seen[txt])
        $(this).remove();
    else
        seen[txt] = true;
});

}
function snd_cookie() {

if ($(\'#chkbox:checked\').val() == undefined)
		{
        $.cookie(\'tavern_snd\', null, {expires: 7});
		}
else
		{
		$.cookie(\'tavern_snd\', \'false\', {expires: 7});
		
		}
}
function stripHTMLtags(str)
{
    var mystr=\'\';
    var chr=\'\';
    var skip=false;
    var skipcancel=false;

    for (tx=0; tx<str.length; tx++)
    {
        if (skipcancel==true){skip=false;}
        chr=str.charAt(tx);
        if (chr==\'<\'){skip=true;skipcancel=false;}
        else if (chr==\'>\' && skip==true){skipcancel=true;}
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
    str=str.replace(/\\\\\'/g,\'&apos;\');
    str=str.replace(/\\\\&quot;/g,\'&quot;\');
    str=str.replace(/\\\\\\\\/g,\'\\\\\');
    str=str.replace(/\\\\0/g,\'\\0\');
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
	if (currentmsg[0] != \'!\' || currentmsg[1] != \'w\')
	{
		document.getElementById("msg").value = \'!w \'+privid+\' \'+currentmsg;
	}
	document.getElementById("msg").focus();
};

function getData()
{
    $.getJSON(\'chatmsgs.php?room=\'+room+\'&visited=\'+visited, {}, function(json){
        setResponse(json);
    });


    visited = 1;
}
function chatRefresh()
{
	setTimeout(\'chatRefresh()\', timeout);
	getData();
}
chatRefresh();

$(document).ready(function(){
  $(\'#sender\').submit(function(){
    text = $(\'#msg\').val();
    if(text == \'\')
    {
      return false;
    }
    $.post(\'chatmsgs.php?room=\'+room+\'&visited=\'+visited, {msg:text});
    $(\'#msg\').val("");
	getData();
    return false;
  });
  $(\'#room\').change(function(){
	room = $(this).val();
	$(\'#window\').empty();
	$(\'<li><b>';  echo '';  echo @ROOM_CHANGED_TO;  echo '';  echo ' \'+room+\'</b></li>\').appendTo("#window");
	visited = 0;
  });
});

function setResponse(json)
{
      var audio=$("#sound")[0];
	  $(\'#users\').empty();

      for(x in json.users)
      {
         $(\'<div id="\'+json.users[x].userid +\'"><a class="priv" href="" onclick="privMessage(\'+json.users[x].userid+\')" style="color:#FF0000">Priv</a> <a href="view.php?view=\'+json.users[x].userid+\'">\'+json.users[x].user+\'</a>\').appendTo("#users");
      }

      $(\'#users\').find(\'.priv\').click(function(){
		  return false;
	  });

      for(x in json.msg)
      {
		if ($(\'#chkbox:checked\').val() == undefined)
		{
        audio.play();
		}
		if (json.msg[x].sender != \'\')
        {
          json.msg[x].sender = stripslashes(json.msg[x].sender);
        }
        if (json.msg[x].ownerid != 0)
        {
          json.msg[x].owner = stripslashes(json.msg[x].owner);
        }
        if (json.msg[x].text != \'\')
        {
          json.msg[x].text = stripslashes(json.msg[x].text);
        }
        if(json.msg[x].ownerid != 0 && json.msg[x].sender != \'\')
        {
          var last=$("#window li").last();
              
          if(playerid == json.msg[x].senderid) 
          {
           if (last.html() != \'<li id="\'+json.msg[x].id +\'" style="font-weight: bolder;" >';  echo '';  if ($this->_tpl_vars['Gender'] == 'M'):  echo '';  echo @YOU_TOLD_M;  echo '';  else:  echo '';  echo @YOU_TOLD_F;  echo '';  endif;  echo '';  echo ' [\'+json.msg[x].date+\'] <a href="view.php?view=\'+json.msg[x].ownerid+\'" title="">\'+json.msg[x].owner+\'</a>: \'+json.msg[x].text+\'</li>\')
           $(\'<li id="\'+json.msg[x].id +\'" style="font-weight: bolder;" >';  echo '';  if ($this->_tpl_vars['Gender'] == 'M'):  echo '';  echo @YOU_TOLD_M;  echo '';  else:  echo '';  echo @YOU_TOLD_F;  echo '';  endif;  echo '';  echo ' [\'+json.msg[x].date+\'] <a href="view.php?view=\'+json.msg[x].ownerid+\'" title="">\'+json.msg[x].owner+\'</a>: \'+json.msg[x].text+\'</li>\').appendTo("#window");
          }     
          else
          {
            if (json.msg[x].gender == \'M\')
            {
              toldString = \'';  echo '';  echo @M_TOLD;  echo '';  echo '\';
            }
            else
            {
              toldString = \'';  echo '';  echo @F_TOLD;  echo '';  echo '\';
            }
          $(\'<li id="\'+json.msg[x].id +\'" style="font-weight: bolder;" >[\'+json.msg[x].date+\'] <a href="view.php?view=\'+json.msg[x].senderid+\'" title="">\'+json.msg[x].sender+\'</a> \'+toldString+\' \'+json.msg[x].text+\'</li>\').appendTo("#window");
          }
        }
        else if(json.msg[x].sender != \'\')
        {
          if(playerid == json.msg[x].senderid)
          {
            $(\'<li id="\'+json.msg[x].id +\'" >[\'+json.msg[x].date+\'] <a href="view.php?view=\'+json.msg[x].senderid+\'" style="color:#A33A3A">\'+stripHTMLtags(json.msg[x].sender)+\'</a>: \'+json.msg[x].text+\'</li>\').appendTo("#window");
          }
          else
          {
            $(\'<li id="\'+json.msg[x].id +\'" >[\'+json.msg[x].date+\'] <a href="view.php?view=\'+json.msg[x].senderid+\'">\'+json.msg[x].sender+\'</a>: \'+json.msg[x].text+\'</li>\').appendTo("#window");
          }
        }
        else
        {
          $(\'<li id="\'+json.msg[x].id +\'" >[\'+json.msg[x].date+\'] &gt;&gt;&gt; \'+json.msg[x].text+\'</li>\').appendTo("#window")
        }
		//title="\'+json.msg[x].date+\'"
        var objDiv = document.getElementById("window");
        objDiv.scrollTop = objDiv.scrollHeight;
        removedupes();
      }

    $("#system").empty();
    str = json.users.length+\'';  echo '';  echo @PLAYERS;  echo '';  echo '<br>\';
    str = \'<center>\' + str + json.number +\'';  echo '';  echo @MESSAGES;  echo '';  echo '</center>\'
    $("#system").append(str);

}
';  echo '</script><div style="width: 100%; height: 400px; margin: auto;"><div id="chat"><div id="window" style="width: 74%;float:left;padding: 0; height: 400px; overflow: auto; border: solid 1px gray;"><noscript>';  echo @E_JS;  echo '</noscript></div><div id="users" style="width: 25%;float:left;padding: 0;border: solid 1px gray;height: 400px; margin: 0px; overflow: auto;"></div></div></div><form name="form" method="post" action="chatmsgs.php" id="sender">WIADOMOSC: <input type="text" name="msg" id="msg" style="width: 400px" /><input type="submit"  value="';  echo @A_SEND;  echo '" align="right" style="width: 80px;"/><select id="room" name="room"><option value="piwnica" ';  if ($this->_tpl_vars['Room'] == 'piwnica'):  echo 'selected="selected"';  endif;  echo '>Piwnica [No-Clima]</option><option value="pokoj1">Pokój [No-Clima]</option><option value="piekielko">Karczma Piekiełko [Clima]</option><option value="buzdygan">Karczma Buzdygan [Clima]</option></select><input type="button" value="WWW" onclick="insertURL();" /><input type="button" value="B" onclick="insertTAG(\'<b>\',\'</b>\');" /><input type="button" value="I" onclick="insertTAG(\'<i>\',\'</i>\');" /><input type="button" value="U" onclick="insertTAG(\'<u>\',\'</u>\');" /><input type="button" value="kolor" onclick="insertTAG(\'<font color=#FF0000><b>\',\'TEKST</b></font>\');" /><input type="button" value="klimat" onclick="insertTAG(\'*\',\'*\');" /><br></center></form></center><audio id="sound"><source src="Audio/chat-highlight.ogg"></source></audio><input type="checkbox" id="chkbox" name="snd" value="playsound" onclick="snd_cookie();"> Wyłącz dzwięk wiadomości<script type="text/javascript">set_checkbox();</script><br><li><a href="k1.php">Karczma Piekiełko - informacje</a><br></li><li><a href="k2.php">Karczma Buzdygan - informacje</a><br></li>'; ?>
