<?php
/**
 *   File functions:
 *   Convert HTML to BBcode or BBcode to HTML
 *
 *   @name                 : bbcode.php                            
 *   @copyright            : (C) 2004-2005 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 0.8 beta
 *   @since                : 14.06.2005
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
// 

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
		$text = str_replace($objBadwords -> fields['bword'], "[kwiatek]", $text);
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
?>
