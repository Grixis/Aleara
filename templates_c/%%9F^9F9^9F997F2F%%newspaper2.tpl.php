<?php /* Smarty version 2.6.16, created on 2013-02-04 11:21:28
         compiled from newspaper2.tpl */ ?>
<?php echo '';  echo '

<script language="javascript" type="text/javascript">
 <!-- 
 //Browser Support Code 
 function ajaxFunction(param,param2){ 
 var ajaxRequest;  // The variable that makes Ajax possible! 
 try{ // Opera 8.0+, Firefox, Safari
 ajaxRequest = new XMLHttpRequest(); }
 catch (e){ // Internet Explorer Browsers 
 try{ ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP") }
 catch (e) { 
 try{ ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP") }
 catch (e){ // Something went wrong 
 alert("Twoja przeglądarka nie obsługuje AJAXa. Pobierz lepszą"); return false; } } } 
ajaxRequest.onreadystatechange = function() {
if (ajaxRequest.readyState == 4)
{
 
document.getElementById("papercontainer").innerHTML=ajaxRequest.responseText;

}
}
var parameter;
if (param != null)
{
parameter="?mode="+param;
	
}
else
{
parameter="";
}
if (param2 != null)
	{
		parameter=parameter+"&p="+param2;
		
	}
ajaxRequest.open("GET","newspaper_query.php"+parameter,true);
ajaxRequest.send(null);
}

 //--> 
 </script>
 ';  echo '';  if ($this->_tpl_vars['Step'] == "" && $this->_tpl_vars['Read'] == "" && $this->_tpl_vars['Comments'] == "" && $this->_tpl_vars['Step3'] == ""):  echo 'Rozglądając się po Wielkim Zamku Twój wzrok przyciągnęły stare, uchylone drzwi. Podchodząc bliżej dostrzegłeś wielką salę skąpaną w promieniach słonecznych przedostających się przez sporej wielkości okna. W owej sali znajdowały się rzędy biurek na których piętrzyły się stosy wycinków z gazet i najnowszych plotek. W tym małym chaosie można było ostrzec jednak ład i porządek. Okazało się jednak, że nie jesteś tam sam, młoda dziewczyna zobaczywszy Cię obdarowała Cię promiennym uśmiechem i spytała czy nie zechciałbyś przeczytać  najnowszego wydania Gazety Aleariańskiej. A może chciałbyś pomóc w redagowaniu i napisać coś do tej właśnie gazety?<br /><ul ';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo 'class="sword"';  endif;  echo '><li><a href="newspaper.php?step=new">Czytaj gazetę</a></li><li><a href="newspaper.php?step=mail">';  echo $this->_tpl_vars['Aredmail'];  echo '</a></li><br />';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Redaktor'):  echo '<li><a href="redaction.php">';  echo $this->_tpl_vars['Aredaction'];  echo '</a></li>';  endif;  echo '</ul>';  endif;  echo '';  if ($_GET['step'] == 'new'):  echo '<center><div style="background: url(\'images/misc/scroll_background_01.gif\') no-repeat center; min-height: 135px; width:744px;"></div><div id="papercontainer" style="background: url(\'images/misc/scroll_background_02.gif\') center; width: 744px "><a style="font-size: 18; color: black" onmouseover="this.style.color=\'blue\'" onmouseout="this.style.color=\'black\'" href="" onclick="ajaxFunction(\'new\'); return false;">Najnowszy numer</a><br/><a style="font-size: 18; color: black" onmouseover="this.style.color=\'blue\'" onmouseout="this.style.color=\'black\'" href="" onclick="ajaxFunction(\'archive_menu\'); return false;">Archiwum</a><br/></div><div style="background: url(\'images/misc/scroll_background_03.gif\') no-repeat center; width: 881px; height: 114px"></div></center>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'redaction'):  echo '';  if ($this->_tpl_vars['Step3'] == ""):  echo '';  echo $this->_tpl_vars['Redactioninfo'];  echo ' ';  echo $this->_tpl_vars['Gamename'];  echo '.<br /><br /><ul class="sword"><li><a href="newspaper.php?step=redaction&amp;step3=S&amp;page=contents">';  echo $this->_tpl_vars['Ashow'];  echo '</a></li><li><a href="newspaper.php?step=redaction&amp;step3=R">';  echo $this->_tpl_vars['Aredaction'];  echo '</a></li></ul>';  endif;  echo '';  if ($this->_tpl_vars['Step3'] == 'edit' || $this->_tpl_vars['Step3'] == 'R'):  echo '';  echo $this->_tpl_vars['Youedit'];  echo ':<br />';  echo $this->_tpl_vars['Showmail'];  echo '<br /><form method="post" action="newspaper.php?step=redaction&amp;';  if ($this->_tpl_vars['Step3'] == 'edit'):  echo 'step3=edit&amp;edit=';  echo $this->_tpl_vars['Edit'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step3'] == 'R'):  echo 'step3=R';  endif;  echo '">';  echo $this->_tpl_vars['Mailtype'];  echo ': <select name="mail">';  unset($this->_sections['edit']);
$this->_sections['edit']['name'] = 'edit';
$this->_sections['edit']['loop'] = is_array($_loop=$this->_tpl_vars['Arttypes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['edit']['show'] = true;
$this->_sections['edit']['max'] = $this->_sections['edit']['loop'];
$this->_sections['edit']['step'] = 1;
$this->_sections['edit']['start'] = $this->_sections['edit']['step'] > 0 ? 0 : $this->_sections['edit']['loop']-1;
if ($this->_sections['edit']['show']) {
    $this->_sections['edit']['total'] = $this->_sections['edit']['loop'];
    if ($this->_sections['edit']['total'] == 0)
        $this->_sections['edit']['show'] = false;
} else
    $this->_sections['edit']['total'] = 0;
if ($this->_sections['edit']['show']):

            for ($this->_sections['edit']['index'] = $this->_sections['edit']['start'], $this->_sections['edit']['iteration'] = 1;
                 $this->_sections['edit']['iteration'] <= $this->_sections['edit']['total'];
                 $this->_sections['edit']['index'] += $this->_sections['edit']['step'], $this->_sections['edit']['iteration']++):
$this->_sections['edit']['rownum'] = $this->_sections['edit']['iteration'];
$this->_sections['edit']['index_prev'] = $this->_sections['edit']['index'] - $this->_sections['edit']['step'];
$this->_sections['edit']['index_next'] = $this->_sections['edit']['index'] + $this->_sections['edit']['step'];
$this->_sections['edit']['first']      = ($this->_sections['edit']['iteration'] == 1);
$this->_sections['edit']['last']       = ($this->_sections['edit']['iteration'] == $this->_sections['edit']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Arttypes'][$this->_sections['edit']['index']];  echo '"';  if ($this->_tpl_vars['Mtype'] == ($this->_tpl_vars['Arttypes'][$this->_sections['edit']['index']])):  echo ' selected ';  endif;  echo '>';  echo $this->_tpl_vars['Sectionnames'][$this->_sections['edit']['index']];  echo '</option>';  endfor; endif;  echo '</select><br />';  echo $this->_tpl_vars['Ttitle'];  echo ' <input type="text" name="mtitle" value="';  echo $this->_tpl_vars['Mtitle'];  echo '" /><br /><textarea name="mbody" rows="20" cols="65">';  echo $this->_tpl_vars['Mbody'];  echo '</textarea><br /><input type="submit" value="';  echo $this->_tpl_vars['Ashow'];  echo '" name="show" /> <input type="submit" name="sendmail" value="';  echo $this->_tpl_vars['Asend'];  echo '" /></form>';  endif;  echo '';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'mail'):  echo '';  echo $this->_tpl_vars['Mailinfo'];  echo '<br />';  echo $this->_tpl_vars['Showmail'];  echo '<br /><form method="post" action="newspaper.php?step=mail&amp;step3=add">';  echo $this->_tpl_vars['Mailtype'];  echo ': <select name="mail"><option value="M" ';  if ($this->_tpl_vars['Mtype'] == 'M'):  echo ' selected ';  endif;  echo '>';  echo $this->_tpl_vars['Anews'];  echo '</option><option value="N" ';  if ($this->_tpl_vars['Mtype'] == 'N'):  echo ' selected ';  endif;  echo '>';  echo $this->_tpl_vars['Anews2'];  echo '</option><option value="O" ';  if ($this->_tpl_vars['Mtype'] == 'O'):  echo ' selected ';  endif;  echo '>';  echo $this->_tpl_vars['Acourt'];  echo '</option><option value="R" ';  if ($this->_tpl_vars['Mtype'] == 'R'):  echo ' selected ';  endif;  echo '>';  echo $this->_tpl_vars['Aroyal'];  echo '</option>';  if ($this->_tpl_vars['Rank'] == 'Admin'):  echo '<option value="K" ';  if ($this->_tpl_vars['Mtype'] == 'K'):  echo ' selected ';  endif;  echo '>';  echo $this->_tpl_vars['Aking'];  echo '</option>';  endif;  echo '<option value="C" ';  if ($this->_tpl_vars['Mtype'] == 'C'):  echo ' selected ';  endif;  echo '>';  echo $this->_tpl_vars['Achronicle'];  echo '</option><option value="S" ';  if ($this->_tpl_vars['Mtype'] == 'S'):  echo ' selected ';  endif;  echo '>';  echo $this->_tpl_vars['Asensations'];  echo '</option><option value="H" ';  if ($this->_tpl_vars['Mtype'] == 'H'):  echo ' selected ';  endif;  echo '>';  echo $this->_tpl_vars['Ahumor'];  echo '</option><option value="I" ';  if ($this->_tpl_vars['Mtype'] == 'I'):  echo ' selected ';  endif;  echo '>';  echo $this->_tpl_vars['Ainter'];  echo '</option><option value="A" ';  if ($this->_tpl_vars['Mtype'] == 'A'):  echo ' selected ';  endif;  echo '>';  echo $this->_tpl_vars['Anews3'];  echo '</option><option value="P" ';  if ($this->_tpl_vars['Mtype'] == 'P'):  echo ' selected ';  endif;  echo '>';  echo $this->_tpl_vars['Apoetry'];  echo '</option><option value="X" ';  if ($this->_tpl_vars['Mtype'] == 'X'):  echo ' selected ';  endif;  echo '>Non-Clima</option><option value="Y" ';  if ($this->_tpl_vars['Mtype'] == 'Y'):  echo ' selected ';  endif;  echo '>Felietony</option><option value="Z" ';  if ($this->_tpl_vars['Mtype'] == 'Z'):  echo ' selected ';  endif;  echo '>Cykliczne</option></select><br />';  echo $this->_tpl_vars['Ttitle'];  echo ' <input type="text" name="mtitle" value="';  echo $this->_tpl_vars['Mtitle'];  echo '" /><br /><textarea name="mbody" rows="20" cols="65">';  echo $this->_tpl_vars['Mbody'];  echo '</textarea><br /><input type="submit" value="';  echo $this->_tpl_vars['Ashow'];  echo '" name="show" /> <input type="submit" name="sendmail" value="';  echo $this->_tpl_vars['Asend'];  echo '" /></form>';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  if (( ( $this->_tpl_vars['Step'] != "" && $this->_tpl_vars['Step'] != 'new' ) || ( $this->_tpl_vars['Comments'] != "" && $this->_tpl_vars['Step'] == "" ) || $this->_tpl_vars['Step3'] != "" ) && $this->_tpl_vars['Article'] == ""):  echo '<br /><a href="newspaper.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  endif;  echo ''; ?>

</br></br></br>