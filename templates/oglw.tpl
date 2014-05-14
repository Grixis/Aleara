<center><IMG SRC="images/locations/oglo.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><table>
<form method="post" action="{$Link}">
<tr><td>Tytuł:</td><td><input type="text" name="addtitle"  value="{$Title1}"></td></tr>
<tr><td valign="top">Tekst:</td><td><textarea name="oglw" id="oglw" rows="15" cols="40">{$Text}</textarea></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="{$Button}"></td></tr>
</form>
</table>
<script type='text/javascript'>
tinyMCE.execCommand('mceRemoveControl',false,'oglw');
</script>