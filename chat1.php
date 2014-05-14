<?php
/**
 *   File functions:
 *   Main file of chat - bot Innkeeper and private talk to other players
 *
 *   @name                 : chat.php
 *   @copyright            : (C) 2004,2005,2006, 2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.3
 *   @since                : 17.04.2007
 *
 */

//
//
//       This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; either version 2 of the License, or
//   (at your option) any later version.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//
// $Id$

/**
* Function convert bbcode [b], [i], [u] on HTML <b>, <i>, <u>, add smiles and new lines
*/
function bbcodetohtml($text) 
{
	global $db;

	/**
	* Replace bad words
	*/
	$objBadwords = $db -> Execute("SELECT * FROM bad_words");
	while (!$objBadwords -> EOF)
	{
		$text = str_replace($objBadwords -> fields['bword'], "[nie przeklinaj kurwa mać!]", $text);
		$objBadwords -> MoveNext();
	}
	$objBadwords -> Close();
    /**
    * Delete HTML tags from text
    */
    $text = strip_tags($text);
    /**
    * Bold font
    */
    $text = str_replace("[b]","<b>",$text);
    $text = str_replace("[/b]","</b>",$text);
    /**
    * Itallic font
    */
    $text = str_replace("[i]","<i>",$text);
    $text = str_replace("[/i]","</i>",$text);
    /**
    * Underline
    */
    $text = str_replace("[u]","<u>",$text);
    $text = str_replace("[/u]","</u>",$text);
 $text = str_replace("<span style=\"color:\\2\">\\3</span>","#\[color=(http://)?(.*?)\](.*?)\#si",$text);
$text = str_replace("</color>","[/color]", $text);
    /**
    * Change \n on <br />
    */
    $text = nl2br($text);
    /**
    * Add smiles
    */
    $text = str_replace(":)","<img src=\"images/smile.gif\" title=\":) - u¶miech\">", $text);
    $text = str_replace(":D","<img src=\"images/bigsmiles.gif\" title=\":D - ¶miech\">", $text);
    $text = str_replace("{zły}","<img src=\"images/frowne.gif\" title=\":( - smutny\">", $text);
    $text = str_replace(":o","<img src=\"images/suprised.gif\" title=\":o - zdziwiony\">", $text);
    $text = str_replace(";(","<img src=\"images/cry.gif\" title=\";( - płacze\">", $text);
    $text = str_replace("))","<img src=\"images/mruga.gif\" title=\")) - u¶miech\">", $text);
    $text = str_replace("((","<img src=\"images/zly.gif\" title=\")) - u¶miech\">", $text);
// kolorowanie
$text = preg_replace("#\[color=(http://)?(.*?)\](.*?)\[/color\]#si", "<span style=\"color:\\2\">\\3</span>", $text);

    /**
    * Return converted text
    */
    return $text;
}

/**
* Function convert HTML tags <b> etc on BBcode [b] and replace smiles
*/
function htmltobbcode($text) 
{
// zmiana kolorowania w html na bbcode
$text = preg_replace("#\[color=(http://)?(.*?)\](.*?)\[/color\]#si", "<span style=\"color:\\2\">\\3</span>", $text);

    /**
    * Bold font
    */
    $text = str_replace("<b>","[b]",$text);
    $text = str_replace("</b>","[/b]",$text);
    /**
    * Italic font
    */
    $text = str_replace("<i>","[i]",$text);
    $text = str_replace("</i>","[/i]",$text);
    /**
    * Underline
    */
    $text = str_replace("<u>","[u]",$text);
    $text = str_replace("</u>","[/u]",$text);
$text = str_replace("<span style=\"color:\\2\">\\3</span>","#\[color=(http://)?(.*?)\](.*?)\#si",$text);
$text = str_replace("</color>","[/color]", $text);
    /**

    /**
    * Replace smiles
    */
    $text = str_replace("<img src=\"images/smile.gif\" title=\":) - u¶miech\">",":)", $text);
    $text = str_replace("<img src=\"images/bigsmile.gif\" title=\":D - ¶miech\">",":D", $text);
    $text = str_replace("<img src=\"images/frown.gif\" title=\":( - smutny\">",":(", $text);
    $text = str_replace("<img src=\"images/suprised.gif\" title=\":o - zdziwiony\">",":o", $text);
    $text = str_replace("<img src=\"images/cry.gif\" title=\";( - płacze\">",";(", $text);
 


Function bbcode($str){


return $str;}
    /**
    * Delete HTML tags
    */
    $text = strip_tags($text);
    /**
    * Return converted text
    */
    return $text;
}
$title = 'Tawerna Klimatyczna';
$title1 = $title;
require_once('includes/head.php');
/**
* Assign variables to template
*/
$smarty -> assign(array("Avatar" => '', 
                        "Crime" => ''));

$plik = 'avatars/'.$player -> avatar;
if (is_file($plik)) 
{
    require_once('includes/avatars.php');
    $arrImage = scaleavatar($plik);
    $smarty -> assign("Avatar", "<center><img src=\"".$plik."\" width=\"".$arrImage[0]."\" height=\"".$arrImage[1]."\" alt=\"".$player -> user."\" title=\"".$player -> user."\" /></center>");
}

/**
* Get the localization for game
*/
require_once('languages/'.$player -> lang.'/chat.php');

if (!isset($_GET['room'])) $_GET['room'] = 'piwnica';
$smarty -> assign(array(
				'piwnica' => $_GET['piwnica'],
				'Playerid' => $player -> id,
				'Gender' => $player -> gender
				));
$smarty -> display ('chat1.tpl');

require_once('includes/foot.php');
?>
