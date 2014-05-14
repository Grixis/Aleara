
{strip}
{if $View == "" && $Read == "" && $Write == "" && $Delete == "" && $Send == "" && $Step == "" && $Block == ""}
    <center><IMG SRC="images/locations/poczta.png"></center>
    <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    <p>{$smarty.const.MAIL_INFO}</p>
    <ul{if $Graphstyle == "Y"} class="sword"{/if}>
        <li> <a href="mail.php?view=inbox">{$smarty.const.A_INBOX}</a></li>
        <li> <a href="mail.php?view=zapis">{$smarty.const.A_SAVED}</a></li>
        <li> <a href="mail.php?view=write">{$smarty.const.A_WRITE}</a></li>
        <li> <a href="mail.php?view=blocks">{$smarty.const.A_BLOCK_LIST}</a></li>
    </ul><br />
    {if $Senderid}
     
        <p>{$smarty.const.UNREAD_MAIL}</p>
        <table width="100%">
            <tr>
                <td width="25%"><b><u>{$smarty.const.FROM}</u></b></td>
                <td width="7%"><b><u>{$smarty.const.S_ID}</u></b></td>
                <td width="48%"><b><u>{$smarty.const.M_TITLE}</u></b></td>
                <td width="20%"><b><u>{$smarty.const.M_READ}</u></b></td>
            </tr>
            {section name=mail loop=$Sender}
            <tr>
                <td><a href="view.php?view={$Senderid[mail]}">{$Sender[mail]}</a></td>
                <td>{$Senderid[mail]}</td>
                <td>{$Subject[mail]}</td>
                <td>- <a href="mail.php?read={$Mailid[mail]}&amp;option=c">Czytaj</a><blink> !!</blink><br />
                
            </tr>
            {/section}
        </table>
    {/if}
{/if}

{if $View == "inbox"}
  <center><IMG SRC="images/locations/poczta.png"></center>
  <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    <form method="post" action="mail.php?step=mail&amp;box=I">
    <table width="100%">
    <tr>
        <td width="5%"></td>
        <td width="20%"><b><u>{$smarty.const.FROM}</u></b></td>
        <td width="7%"><b><u>{$smarty.const.S_ID}</u></b></td>
        <td width="48%"><b><u>{$smarty.const.M_TITLE}</u></b></td>
        <td width="20%"><b><u>{$smarty.const.M_READ}</u></b></td>
    </tr>
    {section name=mail loop=$Sender}
    <tr>
        <td><input type="checkbox" name="{$Mailid[mail]}" /></td>
        <td><a href="view.php?view={$Senderid[mail]}">{$Sender[mail]}</a></td>
        <td>{$Senderid[mail]}</td>
        <td>{$Subject[mail]}</td>
        <td>- <a href="mail.php?read={$Mailid[mail]}&amp;option=c">Czytaj</a>{if $Mread[mail] == "Y"} <blink>!!</blink> {/if}<br />
       
    </tr>
    {/section}
    </table><br />
    <input type="submit" value="{$smarty.const.A_DELETE_S}" name="delete" /> <input type="submit" name="write" value="{$smarty.const.A_SAVE_S}" /> <input type="submit" name="read2" value="{$smarty.const.A_READ2}" /> <input type="submit" name="unread" value="{$smarty.const.A_UNREAD}" /><br />
    </form>
    <form method="post" action="mail.php?step=deleteold&amp;box=I">
        <input type="submit" value="{$smarty.const.A_DELETE_OLD}" /> <select name="oldtime">
            <option value="7">{$smarty.const.A_WEEK}</option>
            <option value="14">{$smarty.const.A_2WEEK}</option>
            <option value="30">{$smarty.const.A_MONTH}</option>
        </select>
    </form>
    <br />[<a href="mail.php?view=zapis">{$smarty.const.A_SAVED}</a>]
    [<a href="mail.php?view=inbox&amp;step=clear">{$smarty.const.A_CLEAR}</a>]
    [<a href="mail.php?view=write">{$smarty.const.A_WRITE}</a>]
{/if}

{if $View == "zapis"}
  <center><IMG SRC="images/locations/poczta.png"></center>
  <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    <form method="post" action="mail.php?step=mail&amp;box=W">
    <table width="100%">
    <tr>
        <td width="5%"></td>
        <td width="20%"><b><u>{$smarty.const.FROM}</u></b></td>
        <td width="7%"><b><u>{$smarty.const.S_ID}</u></b></td>
        <td width="48%"><b><u>{$smarty.const.M_TITLE}</u></b></td>
        <td width="20%"><b><u>{$smarty.const.M_READ}</u></b></td>
    </tr>
    {section name=mail1 loop=$Sender}
    <tr>
        <td><input type="checkbox" name="{$Mailid[mail1]}" /></td>
        <td><a href="view.php?view={$Senderid[mail1]}">{$Sender[mail1]}</a></td>
        <td>{$Senderid[mail1]}</td>
        <td>{$Subject[mail1]}</td>
        <td>- <a href="mail.php?read={$Mailid[mail1]}&amp;option=c">Czytaj</a><br />
       
    </tr>
    {/section}
    </table><br />
    <input type="submit" value="{$smarty.const.A_DELETE_S}" name="delete" /><br />
    </form>
    <form method="post" action="mail.php?step=deleteold&amp;box=W">
        <input type="submit" value="{$smarty.const.A_DELETE_OLD}" /> <select name="oldtime">
            <option value="7">{$smarty.const.A_WEEK}</option>
            <option value="14">{$smarty.const.A_2WEEK}</option>
            <option value="30">{$smarty.const.A_MONTH}</option>
        </select>
    </form>
    <br />[<a href="mail.php?view=inbox">{$smarty.const.A_INBOX}</a>]
    [<a href="mail.php?view=zapis&amp;step=clear">{$smarty.const.A_CLEAR}</a>]
    [<a href="mail.php?view=write">{$smarty.const.A_WRITE}</a>]
{/if}

{if $View == "send"}
  <center><IMG SRC="images/locations/poczta.png"></center>
  <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    <form method="post" action="mail.php?step=mail&amp;box=S">
    <table width="100%">
    <tr>
        <td width="5%"></td>
        <td width="10%"><b><u>{$smarty.const.S_TO}</u></b></td></td>
        <td width="65%"><b><u>{$smarty.const.M_TITLE}</u></b></td>
        <td width="20%"></td>
    </tr>
    {section name=mail2 loop=$Send1}
        <tr>
        <td><input type="checkbox" name="{$Mailid[mail2]}" /></td>
        <td><a href="view.php?view={$Send1[mail2]}">{$Send1[mail2]}</a></td>
        <td>{$Subject[mail2]}</td>
        <td>- <a href="mail.php?read={$Mailid[mail2]}&amp;option=u">{$smarty.const.M_READ}</a></td>
        </tr>
    {/section}
    </table><br />
    <input type="submit" value="{$smarty.const.A_DELETE_S}" name="delete" /> <input type="submit" name="write" value="{$smarty.const.A_SAVE_S}" /><br />
    </form>
    <form method="post" action="mail.php?step=deleteold&amp;box=S">
        <input type="submit" value="{$smarty.const.A_DELETE_OLD}" /> <select name="oldtime">
            <option value="7">{$smarty.const.A_WEEK}</option>
            <option value="14">{$smarty.const.A_2WEEK}</option>
            <option value="30">{$smarty.const.A_MONTH}</option>
        </select>
    </form>
    <br />[<a href="mail.php">{$smarty.const.A_BACK}</a>]
    [<a href="mail.php?view=send&amp;step=clear">{$smarty.const.A_CLEAR}</a>]
    [<a href="mail.php?view=write">{$smarty.const.A_WRITE}</a>]
{/if}

{if $View == "write"}
  <center><IMG SRC="images/locations/poczta.png"></center>
  <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    [<a href="mail.php?view=inbox">{$smarty.const.A_INBOX}</a>]<br /><br />
    <table>
    <form method="post" action="mail.php?view=write&amp;step=send">
    <tr><td>{$smarty.const.S_TO}:</td><td><input type="text" name="to" value="{$To}" /></td></tr>
    <tr><td>{$smarty.const.M_TITLE}:</td><td><input type="text" name="subject" size="55" value="{$Reply}" /></td></tr>
    <tr><td valign="top">{$smarty.const.M_BODY}:</td><td><textarea name="body" rows="13" cols="55">{$Body}</textarea></td></tr>
    <tr><td></td><td align="center"><input type="submit" value="{$smarty.const.A_SEND}" /></td></tr>
    </form></table>
{/if}

{if $Read != ""}
  <center><IMG SRC="images/locations/poczta.png"></center>
  <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
	<center><span style="font-size: x-large">{$Subject}</span></center><br/><br/>
	<a href="#bottom">Skocz na dół</a><br/>
	<a name="top"> </a>
    {section name=mailer loop=$Body}
	<center>
	<table border="1" width="100%">
	<tr bgcolor="#2F2F2F">
		<td align="left" border="0" width="50%"> {$Sender[mailer]}({$Senderid[mailer]})</td>
		<td align="right" border="0" width="50%"> {$Date[mailer]}</td>
	</tr>
	<tr>
		<td colspan="2" align="left">
			{$Body[mailer]}<br/>
		</td>
		
	</tr>
	<tr bgcolor="#2F2F2F">
	<td colspan="2">
    
    [<a href="mail.php?zapisz={$Mailid[mailer]}">{$smarty.const.A_SAVE}</a>]
    [<a href="mail.php?kasuj={$Mailid[mailer]}">{$smarty.const.A_DELETE}</a>]
    [<a href="mail.php?view=write">{$smarty.const.A_WRITE}</a>]
    
    [<a href="mail.php?send={$Mailid[mailer]}">{$smarty.const.A_SEND}</a>]
    [<a href="mail.php?block={$Senderid[mailer]}">{$smarty.const.A_BLOCK}</a>]
	</td>
	</tr>
	</table><center><br/><br/>
	
	{/section}
	<a name="bottom"> </a>
	<a href="#top">Skocz na górę</a><br/>
	[<a href="mail.php?view=inbox">{$smarty.const.A_INBOX}</a>]<br /><br />
	Odpisz:<br/>
    <table>
    <form method="post" action="mail.php?view=write&amp;step=send">
    <tr><td>Do: {$To}</td><td><input type="hidden" name="to" value="{$To}" /></td></tr>
    <tr><td>{$smarty.const.M_TITLE}: {$Subject}</td><td><input type="hidden" name="subject" size="55" value="{$Subject}" /></td></tr>
    <tr><td valign="top">Tekst:</td><td><textarea name="body" rows="13" cols="55"></textarea></td></tr>
    <tr><td></td><td align="center"><input type="submit" value="Wyślij" /></td></tr>
    </form></table>
{/if}

{if $Send != ""}
  <center><IMG SRC="images/locations/poczta.png"></center>
  <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    <form method="post" action="mail.php?send&amp;step=send">
    {$smarty.const.SEND_THIS}: <select name="staff">
    {section name=mail3 loop=$Name}
        <option value="{$Staffid[mail3]}">{$Name[mail3]}</option>
    {/section}
    </select><br />
    <input type="hidden" name="mid" value="{$Send}" />
    <input type="submit" value="{$smarty.const.A_SEND}" /></form>
{/if}

{if $View == "blocks"}
  <center><IMG SRC="images/locations/poczta.png"></center>
  <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    {if $Blockid[0] != ""}
        <form method="post" action="mail.php?view=blocks&amp;step=unblock">
            <table>
                <tr>
                    {section name=blocks loop=$Blockid}
                        <td><input type="checkbox" name="{$Blockid[blocks]}" /></td>
                        <td>{$Blockname[blocks]} ID: {$Blockid[blocks]}</td>
                    {/section}
                </tr>
            </table>
            <input type="submit" value="{$smarty.const.A_UNBLOCK}" />
        </form>
    {else}
        <br />{$smarty.const.NO_BANNED}
    {/if}
    <br /><br />(<a href="mail.php">{$smarty.const.A_BACK}</a>)
{/if}
{/strip}
