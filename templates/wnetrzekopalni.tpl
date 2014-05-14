<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Idąc napotykasz przed sobą tajemniczą zakapturzoną postać. Przyglądasz się jej uważnie lecz spod kaptura dostrzegasz w ciemności tylko zarys ust nieznajomej Ci postaci. Słyszysz srogi głos mówiący Ci o tym, iż w zamian za poprawną odpowiedź na kilka pytań możesz wylosować jedną z magicznych kart. Gdy to powiedział dostrzegłeś w jego dłoni migoczące wśród mroku karty, które wcześniej musiały umknąć Twojej uwadze.
<br><br>




{strip}
{$Link}


{if $Action == "moutains" && $Location == "Las" && $Step != ""}
 
    {if $Step == "first"}
        {$Fquestion}?</b><br />
        <form method="post" action="wnetrzekopalni.php?action=moutains&amp;step=second">
            <input type="text" name="fanswer" /><br />
            <input type="submit" value="{$Anext}" />
        </form>
    <br>{/if}
    {if $Step == "second"}
        {if $Answer == "true"}
            {$Squestion}?</b><br />
            <form method="post" action="wnetrzekopalni.php?action=moutains&amp;step=third">
                <input type="text" name="sanswer" /><br />
                <input type="submit" value="{$Anext}" />
            </form>
        <br>{/if}
        {if $Answer == "false"}
            {$Qfail}
        <br>{/if}
    <br>{/if}
    {if $Step == "third"}
        {if $Answer == "true"}
            {$Tquestion}: <b>{$Question}?</b><br />
            <form method="post" action="wnetrzekopalni.php?action=moutains&amp;step=forth">
                <input type="hidden" name="number" value="{$Number}" />
                <input type="text" name="tanswer" /><br />
                <input type="submit" value="{$Anext}" />
            </form>
        <br>{/if}
        {if $Answer == "false"}
            {$Qfail}
        <br>{/if}
    <br>{/if}
    {if $Step == "forth"}
        {if $Answer == "true"}
            {$Qsucc} {$Item} {$Qsucc2}</i><br />
            
        <br>{/if}
        {if $Answer == "false"}
            {$Qfail}
        <br>{/if}
    <br>{/if}
<br>{/if}

{if $Health > "0" && $Location == "Las" && $Step == "" && $Fight == "0" && $Action == ""}

    {$Finfo}<br /><br />
    <form method="post" action="wnetrzekopalni.php?action=forest">
        {$Howmuch} <input type="text" name="amount" value="0" size="5" /> {$Tenergy}<br />
        <input type="submit" value="{$Awalk}" />
    </form><br />
    &raquo; <a href="las.php">{$Ano}</a><br />
<br>{/if}

{if $Action == "forest" && $Location == "Las"}
<center><IMG SRC="images/locations/city3.png"></center>
    {$Youfind}{$Enemy}<br /><br />
    {if $Health > "0" && $Enemy == ""}
        <form method="post" action="wnetrzekopalni.php?action=forest">
            {$Howmuch} <input type="text" name="amount" value="0" size="5" /> {$Tenergy}<br />
            <input type="submit" value="{$Awalk}" />
        </form><br />
    &raquo; <a href="las.php">{$Ano}</a><br />
    <br>{/if}
<br>{/if}
{/strip}
<br><br><a href="las.php">Spadam stąd jednak. Bywaj!</a>