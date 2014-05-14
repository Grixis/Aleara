{literal}
<script language="javascript" type="text/javascript">
 <!-- 
 //Browser Support Code 
 function Redaction(param,param2){ 
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
 
document.getElementById("redaction_frame").innerHTML=ajaxRequest.responseText;

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
ajaxRequest.open("GET","redaction_query.php"+parameter,true);
ajaxRequest.send(null);
}
function RedactionPost(param,param2){ 
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
if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200)
{
 
document.getElementById("redaction_frame").innerHTML=ajaxRequest.responseText;

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


ajaxRequest.open("POST","redaction_query.php?mode="+param,true);
ajaxRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajaxRequest.send(param2);
}
function submitadd()
{
	title=document.fom.title.value;
	cat=document.fom.type.value;
	body=document.fom.body.value;
	
	if (title == "" || body == "")
	{
	alert("Musisz wypełnić wszystkie pola");
	return false;
	}
	RedactionPost("add_submit","title="+title+"&cat="+cat+"&body="+body+"&author="+document.getElementById("player").innerHTML);
}
function previev()
{
	body=document.fom.body.value;
	title=document.fom.title.value;
	body=body.replace(/\n/g,'</br>');
	prev=""
	
	prev=prev+"<center>"+document.getElementById("player").innerHTML+"</center></br>";
	prev=prev+"<center><i>"+title+"</i></center></br></br>";
	prev=prev+body;
	
	document.getElementById("previev").innerHTML=prev;
	
}
function submitedit()
{
	title=document.fom.title.value;
	cat=document.fom.type.value;
	body=document.fom.body.value;
	id=document.fom.id.value;
	author=document.fom.author.value;
	
	if (title == "" || body == "")
	{
	alert("Musisz wypełnić wszystkie pola");
	return false;
	}
	RedactionPost("edit_submit","title="+title+"&cat="+cat+"&body="+body+"&author="+author+"&id="+id);
}
function previevedit()
{
	body=document.fom.body.value;
	title=document.fom.title.value;
	body=body.replace(/\n/g,'</br>');
	prev=""
	
	prev=prev+"<center>"+document.fom.author.value+"</center></br>";
	prev=prev+"<center><i>"+title+"</i></center></br></br>";
	prev=prev+body;
	
	document.getElementById("previev").innerHTML=prev;
	
}
function Delete(param)
{
	ok=confirm("Na pewno chcesz skasować ten artykuł? Tej operacji nie można cofnąć! Wciśnij OK aby potwierdzić, lub Anuluj aby anulować kasowanie");
	if (ok == true)
	{
		Redaction("delete_submit",param);
	}
}
function oknow(id)
{
	ok=confirm("Zaakceptować artykuł?");
	if (ok == true)
	{
		Redaction("accept",id);
	}
}
function discard(id)
{
	ok=confirm("Odrzucić artykuł?");
	if (ok == true)
	{
		reason=prompt("Wpisz powód dlaczego odrzucasz.");
		RedactionPost("decline","id="+id+"&reason="+reason);
	}
}
function publishing()
{
	pass=document.publish.pass.value;
	note=document.publish.notice.checked;
	
	if (pass == "tajny_kod")
	{
		if (note == true)
		{
			ok=confirm("Kod poprawny. Na pewno chcesz opublikować numer i powiadomić wszystkich graczy? (masowy spam w dzienniku)");
			if (ok == true)
			{
				Redaction('publish_submit',1);
			}
		}
		else
		{
			ok=confirm("Kod poprawny. Na pewno chcesz opublikować numer?");
			if (ok == true)
			{
				Redaction('publish_submit');
			}
		}
	}
	else
	{
		alert("Błędny kod!");
	}
}
 //--> 
 </script>
 {/literal}

<div id="redaction_frame">
<table>
<tr>
	<td>
	<fieldset>
	<legend>Narzędzia edycyjne</legend>
	<ul>
		<li><a href="" onclick="Redaction('add'); return false;">Dodaj artykuł</a></li>
		<li><a href="" onclick="Redaction('edit'); return false;">Edytuj artykuł</a></li>
		<li><a href="" onclick="Redaction('delete'); return false;">Skasuj artykuł</a></li>
	</ul>
	</fieldset>
	<fieldset>
	<legend>Narzędzia podglądu</legend>
	<ul>
		<li><a href="" onclick="Redaction('show'); return false;">Podgląd artykułu</a></li>
		<li><a href="" onclick="Redaction('mail'); return false;">Sprawdź skrzynkę pocztową</a></li>
	<ul>
	</fieldset>
	</td>
	<td>
	<fieldset>
	<legend>Narzędzia moderacyjne</legend>
	<ul>
		<li><a href="" onclick="Redaction('comments'); return false;">Moderuj komentarze</a></li>
	</ul>
	</fieldset>
	<fieldset>
	<legend>Narzędzia publikacyjne</legend>
	<ul>
		<li><a href="" onclick="Redaction('publish'); return false;">Publikuj najnowszy numer</a></li>
	</ul>
	</fieldset>
	</td>
	</tr>
</table>
</div>