<?php
require_once('includes/config.php');
mysql_query("UPDATE settings SET value=value+1 where setting='cron_test'");
?>