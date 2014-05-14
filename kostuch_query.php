<?php
@require_once('includes/config.php');
if ($_GET['mode'] == 'open')
{
	mysql_query("update settings set value='Y' where setting='open_grave'");
}
if ($_GET['mode'] == 'close')
{
	mysql_query("update settings set value='N' where setting='open_grave'");
}
?>