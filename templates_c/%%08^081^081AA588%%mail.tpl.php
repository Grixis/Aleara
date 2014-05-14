<?php /* Smarty version 2.6.16, created on 2013-02-23 12:20:38
         compiled from mail.tpl */ ?>
﻿
<?php echo '';  if ($this->_tpl_vars['View'] == "" && $this->_tpl_vars['Read'] == "" && $this->_tpl_vars['Write'] == "" && $this->_tpl_vars['Delete'] == "" && $this->_tpl_vars['Send'] == "" && $this->_tpl_vars['Step'] == "" && $this->_tpl_vars['Block'] == ""):  echo '<center><IMG SRC="images/locations/poczta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><p>';  echo @MAIL_INFO;  echo '</p><ul';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo ' class="sword"';  endif;  echo '><li> <a href="mail.php?view=inbox">';  echo @A_INBOX;  echo '</a></li><li> <a href="mail.php?view=zapis">';  echo @A_SAVED;  echo '</a></li><li> <a href="mail.php?view=write">';  echo @A_WRITE;  echo '</a></li><li> <a href="mail.php?view=blocks">';  echo @A_BLOCK_LIST;  echo '</a></li></ul><br />';  if ($this->_tpl_vars['Senderid']):  echo '<p>';  echo @UNREAD_MAIL;  echo '</p><table width="100%"><tr><td width="25%"><b><u>';  echo @FROM;  echo '</u></b></td><td width="7%"><b><u>';  echo @S_ID;  echo '</u></b></td><td width="48%"><b><u>';  echo @M_TITLE;  echo '</u></b></td><td width="20%"><b><u>';  echo @M_READ;  echo '</u></b></td></tr>';  unset($this->_sections['mail']);
$this->_sections['mail']['name'] = 'mail';
$this->_sections['mail']['loop'] = is_array($_loop=$this->_tpl_vars['Sender']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mail']['show'] = true;
$this->_sections['mail']['max'] = $this->_sections['mail']['loop'];
$this->_sections['mail']['step'] = 1;
$this->_sections['mail']['start'] = $this->_sections['mail']['step'] > 0 ? 0 : $this->_sections['mail']['loop']-1;
if ($this->_sections['mail']['show']) {
    $this->_sections['mail']['total'] = $this->_sections['mail']['loop'];
    if ($this->_sections['mail']['total'] == 0)
        $this->_sections['mail']['show'] = false;
} else
    $this->_sections['mail']['total'] = 0;
if ($this->_sections['mail']['show']):

            for ($this->_sections['mail']['index'] = $this->_sections['mail']['start'], $this->_sections['mail']['iteration'] = 1;
                 $this->_sections['mail']['iteration'] <= $this->_sections['mail']['total'];
                 $this->_sections['mail']['index'] += $this->_sections['mail']['step'], $this->_sections['mail']['iteration']++):
$this->_sections['mail']['rownum'] = $this->_sections['mail']['iteration'];
$this->_sections['mail']['index_prev'] = $this->_sections['mail']['index'] - $this->_sections['mail']['step'];
$this->_sections['mail']['index_next'] = $this->_sections['mail']['index'] + $this->_sections['mail']['step'];
$this->_sections['mail']['first']      = ($this->_sections['mail']['iteration'] == 1);
$this->_sections['mail']['last']       = ($this->_sections['mail']['iteration'] == $this->_sections['mail']['total']);
 echo '<tr><td><a href="view.php?view=';  echo $this->_tpl_vars['Senderid'][$this->_sections['mail']['index']];  echo '">';  echo $this->_tpl_vars['Sender'][$this->_sections['mail']['index']];  echo '</a></td><td>';  echo $this->_tpl_vars['Senderid'][$this->_sections['mail']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Subject'][$this->_sections['mail']['index']];  echo '</td><td>- <a href="mail.php?read=';  echo $this->_tpl_vars['Mailid'][$this->_sections['mail']['index']];  echo '&amp;option=c">Czytaj</a><blink> !!</blink><br /></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'inbox'):  echo '<center><IMG SRC="images/locations/poczta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><form method="post" action="mail.php?step=mail&amp;box=I"><table width="100%"><tr><td width="5%"></td><td width="20%"><b><u>';  echo @FROM;  echo '</u></b></td><td width="7%"><b><u>';  echo @S_ID;  echo '</u></b></td><td width="48%"><b><u>';  echo @M_TITLE;  echo '</u></b></td><td width="20%"><b><u>';  echo @M_READ;  echo '</u></b></td></tr>';  unset($this->_sections['mail']);
$this->_sections['mail']['name'] = 'mail';
$this->_sections['mail']['loop'] = is_array($_loop=$this->_tpl_vars['Sender']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mail']['show'] = true;
$this->_sections['mail']['max'] = $this->_sections['mail']['loop'];
$this->_sections['mail']['step'] = 1;
$this->_sections['mail']['start'] = $this->_sections['mail']['step'] > 0 ? 0 : $this->_sections['mail']['loop']-1;
if ($this->_sections['mail']['show']) {
    $this->_sections['mail']['total'] = $this->_sections['mail']['loop'];
    if ($this->_sections['mail']['total'] == 0)
        $this->_sections['mail']['show'] = false;
} else
    $this->_sections['mail']['total'] = 0;
if ($this->_sections['mail']['show']):

            for ($this->_sections['mail']['index'] = $this->_sections['mail']['start'], $this->_sections['mail']['iteration'] = 1;
                 $this->_sections['mail']['iteration'] <= $this->_sections['mail']['total'];
                 $this->_sections['mail']['index'] += $this->_sections['mail']['step'], $this->_sections['mail']['iteration']++):
$this->_sections['mail']['rownum'] = $this->_sections['mail']['iteration'];
$this->_sections['mail']['index_prev'] = $this->_sections['mail']['index'] - $this->_sections['mail']['step'];
$this->_sections['mail']['index_next'] = $this->_sections['mail']['index'] + $this->_sections['mail']['step'];
$this->_sections['mail']['first']      = ($this->_sections['mail']['iteration'] == 1);
$this->_sections['mail']['last']       = ($this->_sections['mail']['iteration'] == $this->_sections['mail']['total']);
 echo '<tr><td><input type="checkbox" name="';  echo $this->_tpl_vars['Mailid'][$this->_sections['mail']['index']];  echo '" /></td><td><a href="view.php?view=';  echo $this->_tpl_vars['Senderid'][$this->_sections['mail']['index']];  echo '">';  echo $this->_tpl_vars['Sender'][$this->_sections['mail']['index']];  echo '</a></td><td>';  echo $this->_tpl_vars['Senderid'][$this->_sections['mail']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Subject'][$this->_sections['mail']['index']];  echo '</td><td>- <a href="mail.php?read=';  echo $this->_tpl_vars['Mailid'][$this->_sections['mail']['index']];  echo '&amp;option=c">Czytaj</a>';  if ($this->_tpl_vars['Mread'][$this->_sections['mail']['index']] == 'Y'):  echo ' <blink>!!</blink> ';  endif;  echo '<br /></tr>';  endfor; endif;  echo '</table><br /><input type="submit" value="';  echo @A_DELETE_S;  echo '" name="delete" /> <input type="submit" name="write" value="';  echo @A_SAVE_S;  echo '" /> <input type="submit" name="read2" value="';  echo @A_READ2;  echo '" /> <input type="submit" name="unread" value="';  echo @A_UNREAD;  echo '" /><br /></form><form method="post" action="mail.php?step=deleteold&amp;box=I"><input type="submit" value="';  echo @A_DELETE_OLD;  echo '" /> <select name="oldtime"><option value="7">';  echo @A_WEEK;  echo '</option><option value="14">';  echo @A_2WEEK;  echo '</option><option value="30">';  echo @A_MONTH;  echo '</option></select></form><br />[<a href="mail.php?view=zapis">';  echo @A_SAVED;  echo '</a>][<a href="mail.php?view=inbox&amp;step=clear">';  echo @A_CLEAR;  echo '</a>][<a href="mail.php?view=write">';  echo @A_WRITE;  echo '</a>]';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'zapis'):  echo '<center><IMG SRC="images/locations/poczta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><form method="post" action="mail.php?step=mail&amp;box=W"><table width="100%"><tr><td width="5%"></td><td width="20%"><b><u>';  echo @FROM;  echo '</u></b></td><td width="7%"><b><u>';  echo @S_ID;  echo '</u></b></td><td width="48%"><b><u>';  echo @M_TITLE;  echo '</u></b></td><td width="20%"><b><u>';  echo @M_READ;  echo '</u></b></td></tr>';  unset($this->_sections['mail1']);
$this->_sections['mail1']['name'] = 'mail1';
$this->_sections['mail1']['loop'] = is_array($_loop=$this->_tpl_vars['Sender']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mail1']['show'] = true;
$this->_sections['mail1']['max'] = $this->_sections['mail1']['loop'];
$this->_sections['mail1']['step'] = 1;
$this->_sections['mail1']['start'] = $this->_sections['mail1']['step'] > 0 ? 0 : $this->_sections['mail1']['loop']-1;
if ($this->_sections['mail1']['show']) {
    $this->_sections['mail1']['total'] = $this->_sections['mail1']['loop'];
    if ($this->_sections['mail1']['total'] == 0)
        $this->_sections['mail1']['show'] = false;
} else
    $this->_sections['mail1']['total'] = 0;
if ($this->_sections['mail1']['show']):

            for ($this->_sections['mail1']['index'] = $this->_sections['mail1']['start'], $this->_sections['mail1']['iteration'] = 1;
                 $this->_sections['mail1']['iteration'] <= $this->_sections['mail1']['total'];
                 $this->_sections['mail1']['index'] += $this->_sections['mail1']['step'], $this->_sections['mail1']['iteration']++):
$this->_sections['mail1']['rownum'] = $this->_sections['mail1']['iteration'];
$this->_sections['mail1']['index_prev'] = $this->_sections['mail1']['index'] - $this->_sections['mail1']['step'];
$this->_sections['mail1']['index_next'] = $this->_sections['mail1']['index'] + $this->_sections['mail1']['step'];
$this->_sections['mail1']['first']      = ($this->_sections['mail1']['iteration'] == 1);
$this->_sections['mail1']['last']       = ($this->_sections['mail1']['iteration'] == $this->_sections['mail1']['total']);
 echo '<tr><td><input type="checkbox" name="';  echo $this->_tpl_vars['Mailid'][$this->_sections['mail1']['index']];  echo '" /></td><td><a href="view.php?view=';  echo $this->_tpl_vars['Senderid'][$this->_sections['mail1']['index']];  echo '">';  echo $this->_tpl_vars['Sender'][$this->_sections['mail1']['index']];  echo '</a></td><td>';  echo $this->_tpl_vars['Senderid'][$this->_sections['mail1']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Subject'][$this->_sections['mail1']['index']];  echo '</td><td>- <a href="mail.php?read=';  echo $this->_tpl_vars['Mailid'][$this->_sections['mail1']['index']];  echo '&amp;option=c">Czytaj</a><br /></tr>';  endfor; endif;  echo '</table><br /><input type="submit" value="';  echo @A_DELETE_S;  echo '" name="delete" /><br /></form><form method="post" action="mail.php?step=deleteold&amp;box=W"><input type="submit" value="';  echo @A_DELETE_OLD;  echo '" /> <select name="oldtime"><option value="7">';  echo @A_WEEK;  echo '</option><option value="14">';  echo @A_2WEEK;  echo '</option><option value="30">';  echo @A_MONTH;  echo '</option></select></form><br />[<a href="mail.php?view=inbox">';  echo @A_INBOX;  echo '</a>][<a href="mail.php?view=zapis&amp;step=clear">';  echo @A_CLEAR;  echo '</a>][<a href="mail.php?view=write">';  echo @A_WRITE;  echo '</a>]';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'send'):  echo '<center><IMG SRC="images/locations/poczta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><form method="post" action="mail.php?step=mail&amp;box=S"><table width="100%"><tr><td width="5%"></td><td width="10%"><b><u>';  echo @S_TO;  echo '</u></b></td></td><td width="65%"><b><u>';  echo @M_TITLE;  echo '</u></b></td><td width="20%"></td></tr>';  unset($this->_sections['mail2']);
$this->_sections['mail2']['name'] = 'mail2';
$this->_sections['mail2']['loop'] = is_array($_loop=$this->_tpl_vars['Send1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mail2']['show'] = true;
$this->_sections['mail2']['max'] = $this->_sections['mail2']['loop'];
$this->_sections['mail2']['step'] = 1;
$this->_sections['mail2']['start'] = $this->_sections['mail2']['step'] > 0 ? 0 : $this->_sections['mail2']['loop']-1;
if ($this->_sections['mail2']['show']) {
    $this->_sections['mail2']['total'] = $this->_sections['mail2']['loop'];
    if ($this->_sections['mail2']['total'] == 0)
        $this->_sections['mail2']['show'] = false;
} else
    $this->_sections['mail2']['total'] = 0;
if ($this->_sections['mail2']['show']):

            for ($this->_sections['mail2']['index'] = $this->_sections['mail2']['start'], $this->_sections['mail2']['iteration'] = 1;
                 $this->_sections['mail2']['iteration'] <= $this->_sections['mail2']['total'];
                 $this->_sections['mail2']['index'] += $this->_sections['mail2']['step'], $this->_sections['mail2']['iteration']++):
$this->_sections['mail2']['rownum'] = $this->_sections['mail2']['iteration'];
$this->_sections['mail2']['index_prev'] = $this->_sections['mail2']['index'] - $this->_sections['mail2']['step'];
$this->_sections['mail2']['index_next'] = $this->_sections['mail2']['index'] + $this->_sections['mail2']['step'];
$this->_sections['mail2']['first']      = ($this->_sections['mail2']['iteration'] == 1);
$this->_sections['mail2']['last']       = ($this->_sections['mail2']['iteration'] == $this->_sections['mail2']['total']);
 echo '<tr><td><input type="checkbox" name="';  echo $this->_tpl_vars['Mailid'][$this->_sections['mail2']['index']];  echo '" /></td><td><a href="view.php?view=';  echo $this->_tpl_vars['Send1'][$this->_sections['mail2']['index']];  echo '">';  echo $this->_tpl_vars['Send1'][$this->_sections['mail2']['index']];  echo '</a></td><td>';  echo $this->_tpl_vars['Subject'][$this->_sections['mail2']['index']];  echo '</td><td>- <a href="mail.php?read=';  echo $this->_tpl_vars['Mailid'][$this->_sections['mail2']['index']];  echo '&amp;option=u">';  echo @M_READ;  echo '</a></td></tr>';  endfor; endif;  echo '</table><br /><input type="submit" value="';  echo @A_DELETE_S;  echo '" name="delete" /> <input type="submit" name="write" value="';  echo @A_SAVE_S;  echo '" /><br /></form><form method="post" action="mail.php?step=deleteold&amp;box=S"><input type="submit" value="';  echo @A_DELETE_OLD;  echo '" /> <select name="oldtime"><option value="7">';  echo @A_WEEK;  echo '</option><option value="14">';  echo @A_2WEEK;  echo '</option><option value="30">';  echo @A_MONTH;  echo '</option></select></form><br />[<a href="mail.php">';  echo @A_BACK;  echo '</a>][<a href="mail.php?view=send&amp;step=clear">';  echo @A_CLEAR;  echo '</a>][<a href="mail.php?view=write">';  echo @A_WRITE;  echo '</a>]';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'write'):  echo '<center><IMG SRC="images/locations/poczta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>[<a href="mail.php?view=inbox">';  echo @A_INBOX;  echo '</a>]<br /><br /><table><form method="post" action="mail.php?view=write&amp;step=send"><tr><td>';  echo @S_TO;  echo ':</td><td><input type="text" name="to" value="';  echo $this->_tpl_vars['To'];  echo '" /></td></tr><tr><td>';  echo @M_TITLE;  echo ':</td><td><input type="text" name="subject" size="55" value="';  echo $this->_tpl_vars['Reply'];  echo '" /></td></tr><tr><td valign="top">';  echo @M_BODY;  echo ':</td><td><textarea name="body" rows="13" cols="55">';  echo $this->_tpl_vars['Body'];  echo '</textarea></td></tr><tr><td></td><td align="center"><input type="submit" value="';  echo @A_SEND;  echo '" /></td></tr></form></table>';  endif;  echo '';  if ($this->_tpl_vars['Read'] != ""):  echo '<center><IMG SRC="images/locations/poczta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><center><span style="font-size: x-large">';  echo $this->_tpl_vars['Subject'];  echo '</span></center><br/><br/><a href="#bottom">Skocz na dół</a><br/><a name="top"> </a>';  unset($this->_sections['mailer']);
$this->_sections['mailer']['name'] = 'mailer';
$this->_sections['mailer']['loop'] = is_array($_loop=$this->_tpl_vars['Body']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mailer']['show'] = true;
$this->_sections['mailer']['max'] = $this->_sections['mailer']['loop'];
$this->_sections['mailer']['step'] = 1;
$this->_sections['mailer']['start'] = $this->_sections['mailer']['step'] > 0 ? 0 : $this->_sections['mailer']['loop']-1;
if ($this->_sections['mailer']['show']) {
    $this->_sections['mailer']['total'] = $this->_sections['mailer']['loop'];
    if ($this->_sections['mailer']['total'] == 0)
        $this->_sections['mailer']['show'] = false;
} else
    $this->_sections['mailer']['total'] = 0;
if ($this->_sections['mailer']['show']):

            for ($this->_sections['mailer']['index'] = $this->_sections['mailer']['start'], $this->_sections['mailer']['iteration'] = 1;
                 $this->_sections['mailer']['iteration'] <= $this->_sections['mailer']['total'];
                 $this->_sections['mailer']['index'] += $this->_sections['mailer']['step'], $this->_sections['mailer']['iteration']++):
$this->_sections['mailer']['rownum'] = $this->_sections['mailer']['iteration'];
$this->_sections['mailer']['index_prev'] = $this->_sections['mailer']['index'] - $this->_sections['mailer']['step'];
$this->_sections['mailer']['index_next'] = $this->_sections['mailer']['index'] + $this->_sections['mailer']['step'];
$this->_sections['mailer']['first']      = ($this->_sections['mailer']['iteration'] == 1);
$this->_sections['mailer']['last']       = ($this->_sections['mailer']['iteration'] == $this->_sections['mailer']['total']);
 echo '<center><table border="1" width="100%"><tr bgcolor="#2F2F2F"><td align="left" border="0" width="50%"> ';  echo $this->_tpl_vars['Sender'][$this->_sections['mailer']['index']];  echo '(';  echo $this->_tpl_vars['Senderid'][$this->_sections['mailer']['index']];  echo ')</td><td align="right" border="0" width="50%"> ';  echo $this->_tpl_vars['Date'][$this->_sections['mailer']['index']];  echo '</td></tr><tr><td colspan="2" align="left">';  echo $this->_tpl_vars['Body'][$this->_sections['mailer']['index']];  echo '<br/></td></tr><tr bgcolor="#2F2F2F"><td colspan="2">[<a href="mail.php?zapisz=';  echo $this->_tpl_vars['Mailid'][$this->_sections['mailer']['index']];  echo '">';  echo @A_SAVE;  echo '</a>][<a href="mail.php?kasuj=';  echo $this->_tpl_vars['Mailid'][$this->_sections['mailer']['index']];  echo '">';  echo @A_DELETE;  echo '</a>][<a href="mail.php?view=write">';  echo @A_WRITE;  echo '</a>][<a href="mail.php?send=';  echo $this->_tpl_vars['Mailid'][$this->_sections['mailer']['index']];  echo '">';  echo @A_SEND;  echo '</a>][<a href="mail.php?block=';  echo $this->_tpl_vars['Senderid'][$this->_sections['mailer']['index']];  echo '">';  echo @A_BLOCK;  echo '</a>]</td></tr></table><center><br/><br/>';  endfor; endif;  echo '<a name="bottom"> </a><a href="#top">Skocz na górę</a><br/>[<a href="mail.php?view=inbox">';  echo @A_INBOX;  echo '</a>]<br /><br />Odpisz:<br/><table><form method="post" action="mail.php?view=write&amp;step=send"><tr><td>Do: ';  echo $this->_tpl_vars['To'];  echo '</td><td><input type="hidden" name="to" value="';  echo $this->_tpl_vars['To'];  echo '" /></td></tr><tr><td>';  echo @M_TITLE;  echo ': ';  echo $this->_tpl_vars['Subject'];  echo '</td><td><input type="hidden" name="subject" size="55" value="';  echo $this->_tpl_vars['Subject'];  echo '" /></td></tr><tr><td valign="top">Tekst:</td><td><textarea name="body" rows="13" cols="55"></textarea></td></tr><tr><td></td><td align="center"><input type="submit" value="Wyślij" /></td></tr></form></table>';  endif;  echo '';  if ($this->_tpl_vars['Send'] != ""):  echo '<center><IMG SRC="images/locations/poczta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><form method="post" action="mail.php?send&amp;step=send">';  echo @SEND_THIS;  echo ': <select name="staff">';  unset($this->_sections['mail3']);
$this->_sections['mail3']['name'] = 'mail3';
$this->_sections['mail3']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mail3']['show'] = true;
$this->_sections['mail3']['max'] = $this->_sections['mail3']['loop'];
$this->_sections['mail3']['step'] = 1;
$this->_sections['mail3']['start'] = $this->_sections['mail3']['step'] > 0 ? 0 : $this->_sections['mail3']['loop']-1;
if ($this->_sections['mail3']['show']) {
    $this->_sections['mail3']['total'] = $this->_sections['mail3']['loop'];
    if ($this->_sections['mail3']['total'] == 0)
        $this->_sections['mail3']['show'] = false;
} else
    $this->_sections['mail3']['total'] = 0;
if ($this->_sections['mail3']['show']):

            for ($this->_sections['mail3']['index'] = $this->_sections['mail3']['start'], $this->_sections['mail3']['iteration'] = 1;
                 $this->_sections['mail3']['iteration'] <= $this->_sections['mail3']['total'];
                 $this->_sections['mail3']['index'] += $this->_sections['mail3']['step'], $this->_sections['mail3']['iteration']++):
$this->_sections['mail3']['rownum'] = $this->_sections['mail3']['iteration'];
$this->_sections['mail3']['index_prev'] = $this->_sections['mail3']['index'] - $this->_sections['mail3']['step'];
$this->_sections['mail3']['index_next'] = $this->_sections['mail3']['index'] + $this->_sections['mail3']['step'];
$this->_sections['mail3']['first']      = ($this->_sections['mail3']['iteration'] == 1);
$this->_sections['mail3']['last']       = ($this->_sections['mail3']['iteration'] == $this->_sections['mail3']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Staffid'][$this->_sections['mail3']['index']];  echo '">';  echo $this->_tpl_vars['Name'][$this->_sections['mail3']['index']];  echo '</option>';  endfor; endif;  echo '</select><br /><input type="hidden" name="mid" value="';  echo $this->_tpl_vars['Send'];  echo '" /><input type="submit" value="';  echo @A_SEND;  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'blocks'):  echo '<center><IMG SRC="images/locations/poczta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>';  if ($this->_tpl_vars['Blockid'][0] != ""):  echo '<form method="post" action="mail.php?view=blocks&amp;step=unblock"><table><tr>';  unset($this->_sections['blocks']);
$this->_sections['blocks']['name'] = 'blocks';
$this->_sections['blocks']['loop'] = is_array($_loop=$this->_tpl_vars['Blockid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['blocks']['show'] = true;
$this->_sections['blocks']['max'] = $this->_sections['blocks']['loop'];
$this->_sections['blocks']['step'] = 1;
$this->_sections['blocks']['start'] = $this->_sections['blocks']['step'] > 0 ? 0 : $this->_sections['blocks']['loop']-1;
if ($this->_sections['blocks']['show']) {
    $this->_sections['blocks']['total'] = $this->_sections['blocks']['loop'];
    if ($this->_sections['blocks']['total'] == 0)
        $this->_sections['blocks']['show'] = false;
} else
    $this->_sections['blocks']['total'] = 0;
if ($this->_sections['blocks']['show']):

            for ($this->_sections['blocks']['index'] = $this->_sections['blocks']['start'], $this->_sections['blocks']['iteration'] = 1;
                 $this->_sections['blocks']['iteration'] <= $this->_sections['blocks']['total'];
                 $this->_sections['blocks']['index'] += $this->_sections['blocks']['step'], $this->_sections['blocks']['iteration']++):
$this->_sections['blocks']['rownum'] = $this->_sections['blocks']['iteration'];
$this->_sections['blocks']['index_prev'] = $this->_sections['blocks']['index'] - $this->_sections['blocks']['step'];
$this->_sections['blocks']['index_next'] = $this->_sections['blocks']['index'] + $this->_sections['blocks']['step'];
$this->_sections['blocks']['first']      = ($this->_sections['blocks']['iteration'] == 1);
$this->_sections['blocks']['last']       = ($this->_sections['blocks']['iteration'] == $this->_sections['blocks']['total']);
 echo '<td><input type="checkbox" name="';  echo $this->_tpl_vars['Blockid'][$this->_sections['blocks']['index']];  echo '" /></td><td>';  echo $this->_tpl_vars['Blockname'][$this->_sections['blocks']['index']];  echo ' ID: ';  echo $this->_tpl_vars['Blockid'][$this->_sections['blocks']['index']];  echo '</td>';  endfor; endif;  echo '</tr></table><input type="submit" value="';  echo @A_UNBLOCK;  echo '" /></form>';  else:  echo '<br />';  echo @NO_BANNED;  echo '';  endif;  echo '<br /><br />(<a href="mail.php">';  echo @A_BACK;  echo '</a>)';  endif;  echo ''; ?>
