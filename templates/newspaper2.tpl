{strip}
{literal}

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
 {/literal}
{if $Step == "" && $Read == "" && $Comments == "" && $Step3 == ""}
    Rozglądając się po Wielkim Zamku Twój wzrok przyciągnęły stare, uchylone drzwi. Podchodząc bliżej dostrzegłeś wielką salę skąpaną w promieniach słonecznych przedostających się przez sporej wielkości okna. W owej sali znajdowały się rzędy biurek na których piętrzyły się stosy wycinków z gazet i najnowszych plotek. W tym małym chaosie można było ostrzec jednak ład i porządek. Okazało się jednak, że nie jesteś tam sam, młoda dziewczyna zobaczywszy Cię obdarowała Cię promiennym uśmiechem i spytała czy nie zechciałbyś przeczytać  najnowszego wydania Gazety Aleariańskiej. A może chciałbyś pomóc w redagowaniu i napisać coś do tej właśnie gazety?<br />

		<ul {if $Graphstyle=="Y"}class="sword"{/if}>
                <li><a href="newspaper.php?step=new">Czytaj gazetę</a></li>
                <li><a href="newspaper.php?step=mail">{$Aredmail}</a></li><br />
                {if $Rank == "Admin" || $Rank == "Redaktor"}
                    <li><a href="redaction.php">{$Aredaction}</a></li>
                {/if}
		</ul>
{/if}

{if $smarty.get.step == "new"}
<center><div style="background: url('images/misc/scroll_background_01.gif') no-repeat center; min-height: 135px; width:744px;"></div>
<div id="papercontainer" style="background: url('images/misc/scroll_background_02.gif') center; width: 744px ">
<a style="font-size: 18; color: black" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'" href="" onclick="ajaxFunction('new'); return false;">Najnowszy numer</a><br/>
<a style="font-size: 18; color: black" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'" href="" onclick="ajaxFunction('archive_menu'); return false;">Archiwum</a><br/>
</div>
<div style="background: url('images/misc/scroll_background_03.gif') no-repeat center; width: 881px; height: 114px"></div>
</center>{/if}

{if $Step == 'redaction'}
    {if $Step3 == ""}
        {$Redactioninfo} {$Gamename}.<br /><br />
        	<ul class="sword">
                    <li><a href="newspaper.php?step=redaction&amp;step3=S&amp;page=contents">{$Ashow}</a></li>
                    <li><a href="newspaper.php?step=redaction&amp;step3=R">{$Aredaction}</a></li>
		</ul>
    {/if}
    {if $Step3 == "edit" || $Step3 == "R"}
        {$Youedit}:<br />
        {$Showmail}<br />
        <form method="post" action="newspaper.php?step=redaction&amp;{if $Step3 == 'edit'}step3=edit&amp;edit={$Edit}{/if}{if $Step3 == "R"}step3=R{/if}">
            {$Mailtype}: <select name="mail">
                {section name=edit loop=$Arttypes}
                <option value="{$Arttypes[edit]}"{if $Mtype == "$Arttypes[edit]"} selected {/if}>{$Sectionnames[edit]}</option>
                {/section}
            </select><br />
            {$Ttitle} <input type="text" name="mtitle" value="{$Mtitle}" /><br />
            <textarea name="mbody" rows="20" cols="65">{$Mbody}</textarea><br />
            <input type="submit" value="{$Ashow}" name="show" /> <input type="submit" name="sendmail" value="{$Asend}" />
        </form>
    {/if}
    {$Message}
{/if}

{if $Step == "mail"}
    {$Mailinfo}<br />
    {$Showmail}<br />
    <form method="post" action="newspaper.php?step=mail&amp;step3=add">
        {$Mailtype}: <select name="mail">
            <option value="M" {if $Mtype == "M"} selected {/if}>{$Anews}</option>
            <option value="N" {if $Mtype == "N"} selected {/if}>{$Anews2}</option>
            <option value="O" {if $Mtype == "O"} selected {/if}>{$Acourt}</option>
            <option value="R" {if $Mtype == "R"} selected {/if}>{$Aroyal}</option>
            {if $Rank == "Admin"}
                <option value="K" {if $Mtype == "K"} selected {/if}>{$Aking}</option>
            {/if}
            <option value="C" {if $Mtype == "C"} selected {/if}>{$Achronicle}</option>
            <option value="S" {if $Mtype == "S"} selected {/if}>{$Asensations}</option>
            <option value="H" {if $Mtype == "H"} selected {/if}>{$Ahumor}</option>
            <option value="I" {if $Mtype == "I"} selected {/if}>{$Ainter}</option>
            <option value="A" {if $Mtype == "A"} selected {/if}>{$Anews3}</option>
            <option value="P" {if $Mtype == "P"} selected {/if}>{$Apoetry}</option>
			<option value="X" {if $Mtype == "X"} selected {/if}>Non-Clima</option>
			<option value="Y" {if $Mtype == "Y"} selected {/if}>Felietony</option>
			<option value="Z" {if $Mtype == "Z"} selected {/if}>Cykliczne</option>
        </select><br />
        {$Ttitle} <input type="text" name="mtitle" value="{$Mtitle}" /><br />
        <textarea name="mbody" rows="20" cols="65">{$Mbody}</textarea><br />
        <input type="submit" value="{$Ashow}" name="show" /> <input type="submit" name="sendmail" value="{$Asend}" />
    </form>
    {$Message}
{/if}

{if (($Step != "" && $Step != "new") || ($Comments != "" && $Step == "") || $Step3 != "") && $Article == ""}
    <br /><a href="newspaper.php">{$Aback}</a>
{/if}
{/strip}
</br></br></br>