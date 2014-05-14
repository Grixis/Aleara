<?php
/**
 *   File functions:
 *   Game resets by Cron
 *
 *   @name                 : reset.php
 *   @copyright            : (C) 2004-2005 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.4
 *   @since                : 17.07.2007
 *
 */

// Published under GNU GPL 2 or later. See /install/README file for details.
// $Id$

/**
* Check remote address (allow only from localhost). If doesn't work - write here 'localhost' or IP of your server.
*/

require_once('includes/config.php');
require_once('includes/resets.php');

$IntKey= $db -> GetRow('SELECT `value` FROM `settings` WHERE `setting`=\'intkey\'');
if (!isset($_GET['intkey']) or $_GET['intkey'] != $IntKey[0])
{
  	die("Spertalaj.");
}
if ($_GET['step'] == 'reset')
    mainreset();
elseif ($_GET['step'] == 'revive')
    smallreset();

?>
