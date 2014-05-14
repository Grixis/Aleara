<?php /* Smarty version 2.6.16, created on 2012-12-11 18:13:21
         compiled from pary.tpl */ ?>
<?php if ($this->_tpl_vars['Location'] == 'Altara'): ?>
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
  Slubów udziela kapłan <font color="red"><?php echo $this->_tpl_vars['Kaplan']; ?>
<br></font>
  </fieldset>

<br>
 <?php echo '<script type="text/javascript">var playerid = ';  echo $this->_tpl_vars['Playerid'];  echo ';var room = \'';  echo $this->_tpl_vars['Room'];  echo '\';';  echo '
function set_checkbox() {
if ($.cookie(\'tavern_snd\') == \'false\')
{
	//$(\'#chkbox:checked\').val(\'playsound\');
	document.getElementById(\'chkbox\').checked = true;
}

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
    $.getJSON(\'chatmsgs5.php?room=\'+room+\'&visited=\'+visited, {}, function(json){
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
    $.post(\'chatmsgs5.php?room=\'+room+\'&visited=\'+visited, {msg:text});
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
          if(playerid == json.msg[x].senderid) $(\'<li id="\'+json.msg[x].id +\'" style="font-weight: bolder;" title="\'+json.msg[x].date+\'">';  echo '';  if ($this->_tpl_vars['Gender'] == 'M'):  echo '';  echo @YOU_TOLD_M;  echo '';  else:  echo '';  echo @YOU_TOLD_F;  echo '';  endif;  echo '';  echo ' <a href="view.php?view=\'+json.msg[x].ownerid+\'" title="">\'+json.msg[x].owner+\'</a>: \'+json.msg[x].text+\'</li>\').appendTo("#window");
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
          $(\'<li id="\'+json.msg[x].id +\'" style="font-weight: bolder;" title="\'+json.msg[x].date+\'"><a href="view.php?view=\'+json.msg[x].senderid+\'" title="">\'+json.msg[x].sender+\'</a> \'+toldString+\' \'+json.msg[x].text+\'</li>\').appendTo("#window");
          }
        }
        else if(json.msg[x].sender != \'\')
        {
          if(playerid == json.msg[x].senderid)
          {
            $(\'<li id="\'+json.msg[x].id +\'" title="\'+json.msg[x].date+\'"><a href="view.php?view=\'+json.msg[x].senderid+\'" style="color:#A33A3A">\'+stripHTMLtags(json.msg[x].sender)+\'</a>: \'+json.msg[x].text+\'</li>\').appendTo("#window");
          }
          else
          {
            $(\'<li id="\'+json.msg[x].id +\'" title="\'+json.msg[x].date+\'"><a href="view.php?view=\'+json.msg[x].senderid+\'">\'+json.msg[x].sender+\'</a>: \'+json.msg[x].text+\'</li>\').appendTo("#window");
          }
        }
        else
        {
          $(\'<li id="\'+json.msg[x].id +\'" title="\'+json.msg[x].date+\'">&gt;&gt;&gt; \'+json.msg[x].text+\'</li>\').appendTo("#window")
        }
        var objDiv = document.getElementById("window");
        objDiv.scrollTop = objDiv.scrollHeight;

      }

    $("#system").empty();
    str = json.users.length+\'';  echo '';  echo @PLAYERS;  echo '';  echo '<br>\';
    str = \'<center>\' + str + json.number +\'';  echo '';  echo @MESSAGES;  echo '';  echo '</center>\'
    $("#system").append(str);

}
';  echo '</script><div style="width: 100%; height: 300px; margin: auto;"><div id="chat"><div id="window" style="width: 74%;float:left;padding: 0; height: 300px; overflow: auto; border: solid 1px gray;"><noscript>';  echo @E_JS;  echo '</noscript></div><div id="users" style="width: 25%;float:left;padding: 0;border: solid 1px gray;height: 300px; margin: 0px; overflow: auto;"></div></div></div><form name="form" method="post" action="chatmsgs5.php" id="sender"><input type="submit"  value="Wyślij" align="right" style="width: 80px;"/><input type="text" name="msg" id="msg" style="width: 400px" /></center></form></center><audio id="sound"><source src="Audio/chat-highlight.ogg"></source></audio><script type="text/javascript">set_checkbox();</script>'; ?>


<?php endif; ?>


<?php if ($this->_tpl_vars['Location'] == 'Altara'): ?>
    <b>Tutaj znajdują się osoby, które zdecydowały się połączyć na wieki: </b> 
    <br><br><br>
    <?php if ($this->_tpl_vars['Number'] > '0'): ?>
        <?php unset($this->_sections['pary']);
$this->_sections['pary']['name'] = 'pary';
$this->_sections['pary']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pary']['show'] = true;
$this->_sections['pary']['max'] = $this->_sections['pary']['loop'];
$this->_sections['pary']['step'] = 1;
$this->_sections['pary']['start'] = $this->_sections['pary']['step'] > 0 ? 0 : $this->_sections['pary']['loop']-1;
if ($this->_sections['pary']['show']) {
    $this->_sections['pary']['total'] = $this->_sections['pary']['loop'];
    if ($this->_sections['pary']['total'] == 0)
        $this->_sections['pary']['show'] = false;
} else
    $this->_sections['pary']['total'] = 0;
if ($this->_sections['pary']['show']):

            for ($this->_sections['pary']['index'] = $this->_sections['pary']['start'], $this->_sections['pary']['iteration'] = 1;
                 $this->_sections['pary']['iteration'] <= $this->_sections['pary']['total'];
                 $this->_sections['pary']['index'] += $this->_sections['pary']['step'], $this->_sections['pary']['iteration']++):
$this->_sections['pary']['rownum'] = $this->_sections['pary']['iteration'];
$this->_sections['pary']['index_prev'] = $this->_sections['pary']['index'] - $this->_sections['pary']['step'];
$this->_sections['pary']['index_next'] = $this->_sections['pary']['index'] + $this->_sections['pary']['step'];
$this->_sections['pary']['first']      = ($this->_sections['pary']['iteration'] == 1);
$this->_sections['pary']['last']       = ($this->_sections['pary']['iteration'] == $this->_sections['pary']['total']);
?>
            <b>Imię Kobiety:</b> <a href=view.php?view=<?php echo $this->_tpl_vars['Id'][$this->_sections['pary']['index']]; ?>
><?php echo $this->_tpl_vars['Name'][$this->_sections['pary']['index']]; ?>
</a><br>
            <b>ID Kobiety:</b> <?php echo $this->_tpl_vars['Id'][$this->_sections['pary']['index']]; ?>
<br>
			<b>Imię Mężczyzny:</b> <a href=view.php?view=<?php echo $this->_tpl_vars['Idp'][$this->_sections['pary']['index']]; ?>
><?php echo $this->_tpl_vars['Namep'][$this->_sections['pary']['index']]; ?>
</a><br>
			<b>ID Mężczyzny:</b> <?php echo $this->_tpl_vars['Idp'][$this->_sections['pary']['index']]; ?>
<br>
            <b>Data ich ślubu:</b> <?php echo $this->_tpl_vars['Date'][$this->_sections['pary']['index']]; ?>
<br>
            <b>Oświadczyny:</b> <?php echo $this->_tpl_vars['Verdict'][$this->_sections['pary']['index']]; ?>
<br>
            <b>Koszt rozwodu:</b> <a href=pary.php?prisoner=<?php echo $this->_tpl_vars['Jailid'][$this->_sections['pary']['index']]; ?>
><?php echo $this->_tpl_vars['Cost'][$this->_sections['pary']['index']]; ?>
 sztuk złota</a><br><br><br>
        <?php endfor; endif; ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['Number'] == '0'): ?>
        <center>Nie ma małżeństw w miescie<center>
		
    <?php endif;  endif; ?>

</br>