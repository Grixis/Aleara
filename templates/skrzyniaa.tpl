<br>
<b>Zabierz szybko z³oto!
<br><br>



<br /><br />
<form action="?act=result" method="POST">
<b>{$Code}</b>: <input type="text" name="code" /><br /><br />
<input type="submit" name="submit" value="{$Submit}" />
</form>
{if $Action == "result"}
<i>{$Result}</i>
{/if}
