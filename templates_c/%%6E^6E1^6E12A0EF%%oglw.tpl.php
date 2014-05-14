<?php /* Smarty version 2.6.16, created on 2012-10-10 04:04:17
         compiled from oglw.tpl */ ?>
<center><IMG SRC="images/locations/oglo.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><table>
<form method="post" action="<?php echo $this->_tpl_vars['Link']; ?>
">
<tr><td>Tytuł:</td><td><input type="text" name="addtitle"  value="<?php echo $this->_tpl_vars['Title1']; ?>
"></td></tr>
<tr><td valign="top">Tekst:</td><td><textarea name="oglw" id="oglw" rows="15" cols="40"><?php echo $this->_tpl_vars['Text']; ?>
</textarea></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="<?php echo $this->_tpl_vars['Button']; ?>
"></td></tr>
</form>
</table>
<script type='text/javascript'>
tinyMCE.execCommand('mceRemoveControl',false,'oglw');
</script>