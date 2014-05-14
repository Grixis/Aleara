<?php

// bbcode
Function bbcodetohtml($str){

// usun zbedne
$str=strip_tags(trim($str));

// Odno¶nik, otwieranie w nowym oknie
//$str = preg_replace("#\[url\](.*?)?(.*?)\[/url\]#si", "<A HREF=\"\\1\\2\" TARGET=\"_blank\">\\1\\2</A>", $str);

// Odno¶nik, otwieranie w nowym oknie, definiowanie tre¶ci odno¶nika
//$str = preg_replace("#\[url=(.*?)?(.*?)\](.*?)\[/url\]#si", "<A HREF=\"\\2\" TARGET=\"_blank\">\\3</A>", $str);

// Ukrywanie tre¶ci
$str = preg_replace("#\[list\](.*?)\[/list\]#si", "<ul>\\1</ul>", $str);
$str = preg_replace("#\[list=(http://)?(.*?)\](.*?)\[/list\]#si", "<ol type=\"\\2\">\\3</ol>", $str);
$str = preg_replace("#\[\*\](.*?)\\s#si", "<li>\\1</li>", $str);
// Pogrubiony tekst
$str = preg_replace("#\[b\](.*?)\[/b\]#si", "<b>\\1</b>", $str);

// Pochylony tekst
$str = preg_replace("#\[i\](.*?)\[/i\]#si", "<i>\\1</i>", $str);

// Podkre¶lony tekst
$str = preg_replace("#\[u\](.*?)\[/u\]#si", "<u>\\1</u>", $str);

// Pomniejszanie tekstu
$str = preg_replace("#\[sm\](.*?)\[/sm\]#si", "<small>\\1</small>", $str);

// Powiększanie tekstu
$str = preg_replace("#\[big\](.*?)\[/big\]#si", "<big>\\1</big>", $str);

// Akapit
$str = preg_replace("/\[p\](.*?)\[\/p\]/si", "<p>\\1</p>", $str);

// Akapit z wyrównaniem
$str = preg_replace("#\[p=(http://)?(.*?)\](.*?)\[/p\]#si", "<p align=\"\\2\">\\3</p>", $str);

// Wy¶rodkowanie tekstu
$str = preg_replace("/\[center\](.*?)\[\/center\]/si", "<center>\\1</center>", $str);

// Kolor tekstu
$str = preg_replace("#\[color=(http://)?(.*?)\](.*?)\[/color\]#si", "<span style=\"color:\\2\">\\3</span>", $str);

// Wielko¶ć czcionki
$str = preg_replace("#\[size=(http://)?(.*?)\](.*?)\[/size\]#si", "<span style=\"font-size:\\2\">\\3</span>", $str);

// Obrazek
$str = preg_replace("#\[img\](.*?)\[/img\]#si", "<img src=\"\\1\" border=\"0\" alt=\"Obrazek\" />", $str);

// Pozioma linia
$str = preg_replace("#\[hr=(\d{1,2}|100)\]#si", "<hr class=\"linia\" width=\"\\1%\">", $str);

// Lista

$str = preg_replace("#\[list\](.*?)\[/list\]#si", "<ul>\\1</ul>", $str);
$str = preg_replace("#\[list=(http://)?(.*?)\](.*?)\[/list\]#si", "<ol type=\"\\2\">\\3</ol>", $str);
$str = preg_replace("#\[\*\](.*?)\\s#si", "<li>\\1</li>", $str);

// kolejny wiersz
$str=nl2br($str);
$str = str_replace('<br />',' <br /> ',$str);

// Kolorki
    $seek='{\*(.+?)\*}';
    if(preg_match_all($seek,$str,$arraytext))
    foreach($arraytext[1] as $i => $b) $str = preg_replace($seek, '<i><span style="color:#858585">'.$arraytext[1][$i].'</span></i>', $str,1);

// wynik
return $str;

}

function htmltobbcode($text)
{
    $text = preg_replace("#\<img src=\"(.*?)\" border=\"0\" alt=\"Obrazek\" />#si", "[img]\\1[/img]", $text);
    $text = preg_replace("#\<span style=\"color:(.*?)\">(.*?)</span>#si", "[color=\\1]\\2[/color]", $text);

    $text = str_replace("<b>","[b]",$text);
    $text = str_replace("</b>","[/b]",$text);
    $text = str_replace("<u>","[u]",$text);
    $text = str_replace("</u>","[/u]",$text);
    $text = str_replace('<div class="wpis_tresc">',"[div_tresc]",$text);
    $text = str_replace('<div class="wpis_rzut">',"[div_rzutt]",$text);
    $text = str_replace("</div>","[/div]\n\n",$text);
    $text = str_replace("<i><font color=#858585>","*",$text);
    $text = str_replace("</font></i>","*",$text);
    $text = strip_tags($text);

    return $text;
}