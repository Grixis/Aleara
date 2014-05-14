<?php
require_once("includes/config.php");
require_once("languages/pl/newspaper.php");
$mode= $_GET['mode'];
$param= $_GET['p'];

$arrTypes = array('N', 'M', 'O', 'R', 'K', 'C', 'S', 'H', 'I', 'A', 'P','X','Y','Z');
$arrSecnames = array(A_NEWS, A_NEWS2, A_COURT, A_ROYAL, A_KING, A_CHRONICLE." ".$gamename, A_SENSATIONS, A_HUMOR, A_INTER, A_NEWS3, A_POETRY,"Non-Clima", "Felietony", "Cykliczne");

if ($mode=="new")
{
	$wynik=mysql_query("SELECT paper_id FROM newspaper WHERE added='Y' GROUP BY paper_id DESC");
	$paper=mysql_fetch_array($wynik);
	$paperid=$paper['paper_id'];
	$i=0;
	foreach ($arrTypes as $type)
	{
		
		$result=mysql_query("SELECT * FROM newspaper WHERE paper_id=".$paperid." and type='".$type."' and added='Y'");
		//print($result.'<br><br>');
		$j=0;
		while($p=mysql_fetch_assoc($result))
		{
			$artid[$i][$j]=$p['id'];
			$arttitle[$i][$j]=$p['title'];
			$artauthor[$i][$j]=$p['author'];
			$j++;
		}
		if (empty($artid[$i]))
		{
			$artid[$i][0]=0;
			$arttitle[$i][0]="";
			$artauthor[$i][0]="";
		}
		//print(count($artid[$i])."<br><br>");
		$i++;
		
	}
	print("<table width=\"75%\">");
	print("<tr>");
	print("<td width=\"50%\" style=\"text-align: left;\">");
	for ($a=0; $a<=7; $a++)
	{
		
		
		if ($artid[$a][0] !=0)
		{
			print("<span style=\"color: black; font-size:25; font-family:Monotype Corsiva;\" >".$arrSecnames[$a]."</span><br/>");
			
			for ($b=0;$b<count($artid[$a]);$b++)
			{
				print("<span style=\"color:black;\"><i><a style=\"color: black\" href=\"\" onmouseover=\"this.style.color='blue'\" onmouseout=\"this.style.color='black'\" onclick=\"ajaxFunction('article',".$artid[$a][$b]."); return false;\">".$arttitle[$a][$b]."</a></i></span><br/>");
				
			}
			print("<br>");
		}
		
		
	}
	print("</td>");
	print("<td width=\"50%\" style=\"text-align: right\">");
	for ($a=8; $a<=15; $a++)
	{
		
		
		if ($artid[$a][0] !=0)
		{
			print("<span style=\"color: black; font-size:25; font-family:Monotype Corsiva;\" >".$arrSecnames[$a]."</span><br/>");
			
			for ($b=0;$b<count($artid[$a]);$b++)
			{
				print("<span style=\"color:black;\"><i><a style=\"color: black\" href=\"\" onmouseover=\"this.style.color='blue'\" onmouseout=\"this.style.color='black'\" onclick=\"ajaxFunction('article',".$artid[$a][$b]."); return false;\">".$arttitle[$a][$b]."</a></i></span><br/>");
				
			}
			print("<br>");
		}
		
		
	}
	print("</td>");
	print("</tr>");
	print("</table>");
}
elseif ($mode=='article')
{
	$wynik=mysql_query("SELECT * FROM newspaper WHERE id=".$param);
	$paper=mysql_fetch_array($wynik);
	$body=$paper['body'];
	$firstletter=$body{0};
	$body=substr($body,1);
	
	print("<span style=\"color:black; font-size: 15;\">".$paper['author']."</span></br>");
	print("<span style=\"color:black; font-size: 25;\">".$paper['title']."</span></br>");
	print("<div style=\"line-height: 30px; color: #351f0a; font-family: Monotype Corsiva, Times New Roman; font-size: 25; margin-left: 90px; margin-right: 90px; text-align: left\">");
	print("<span style=\"font-size: 2.5em; font-family: Monotype Corsiva; \">".$firstletter."</span>".$body);
	print("</div>");
	
	$wynik=mysql_query("SELECT count(*) FROM newspaper_comments WHERE textid=".$param);
	$paper=mysql_fetch_array($wynik);
	$comments=$paper['count(*)'];
	
	$wynik=mysql_query("SELECT paper_id FROM newspaper WHERE added='Y' GROUP BY paper_id DESC");
	$paper=mysql_fetch_array($wynik);
	$paperid=$paper['paper_id'];
	$wynik=mysql_query("SELECT paper_id FROM newspaper WHERE id=".$param); 
	$paper=mysql_fetch_array($wynik);
	$papercurrent=$paper['paper_id'];
	
	print("<br><br><span style=\"text-align:left; color:black;\">Komentarze:".$comments."</span><br>");
	print("<span style=\"texr-align:left; color:black;\"><a style=\"color: black\" href=\"\" onmouseover=\"this.style.color='blue'\" onmouseout=\"this.style.color='black'\" onclick=\"ajaxFunction('comments',".$param."); return false;\">Skomentuj</a></span><br/>");
	if ($paperid == $papercurrent)
	{
	print("<br><br><a style=\"color: black\" href=\"\" onmouseover=\"this.style.color='blue'\" onmouseout=\"this.style.color='black'\" onclick=\"ajaxFunction('new'); return false;\">Spis treści</a> | <a style=\"color: black\" href=\"newspaper.php\">Zakończ czytanie</a>");
	}
	else
	{
	print("<br><br><a style=\"color: black\" href=\"\" onmouseover=\"this.style.color='blue'\" onmouseout=\"this.style.color='black'\" onclick=\"ajaxFunction('archive',".$papercurrent."); return false;\">Spis treści</a> | <a style=\"color: black\" href=\"newspaper.php\">Zakończ czytanie</a>");
	}
}
elseif ($mode=='comments')
{
	$wynik=mysql_query("SELECT * FROM newspaper_comments WHERE textid=".$param);
	print("<div style=\"color:black; text-align: left; color:black; margin-left: 90px; margin-right: 90px \">");
	while($paper=mysql_fetch_array($wynik))
	{
		print("<fieldset>");
		print("<legend><b>".$paper['author']."</b> (".$paper['time'].")</legend>");
		print($paper['body']);
		print("</fieldset><br/>");
	}
	print("</div>");
	print("<form method=\"post\" action=\"newspaper.php?comments=".$param."&amp;action=add\">");
    print("Dodaj komentarz:<br /><textarea name=\"body\" rows=\"10\" cols=\"50\"></textarea><br />");
    print("<input type=\"hidden\" name=\"tid\" value=\"".$param."\" />");
    print("<input type=\"submit\" value=\"Dodaj\" /></form>");
	
	$wynik=mysql_query("SELECT paper_id FROM newspaper WHERE added='Y' GROUP BY paper_id DESC");
	$paper=mysql_fetch_array($wynik);
	$paperid=$paper['paper_id'];
	$wynik=mysql_query("SELECT paper_id FROM newspaper WHERE id=".$param); 
	$paper=mysql_fetch_array($wynik);
	$papercurrent=$paper['paper_id'];
	
	if ($paperid == $papercurrent)
	{
	print("<br><br><a style=\"color: black\" href=\"\" onmouseover=\"this.style.color='blue'\" onmouseout=\"this.style.color='black'\" onclick=\"ajaxFunction('new'); return false;\">Spis treści</a> | <a style=\"color: black\" href=\"newspaper.php\">Zakończ czytanie</a>");
	}
	else
	{
	print("<br><br><a style=\"color: black\" href=\"\" onmouseover=\"this.style.color='blue'\" onmouseout=\"this.style.color='black'\" onclick=\"ajaxFunction('archive',".$papercurrent."); return false;\">Spis treści</a> | <a style=\"color: black\" href=\"newspaper.php\">Zakończ czytanie</a>");
	}
	
	
    
	
}
elseif($mode=='archive_menu')
{
	$wynik=mysql_query("SELECT paper_id FROM newspaper WHERE added='Y' GROUP BY paper_id DESC");
	$paper=mysql_fetch_array($wynik);
	$paperid=$paper['paper_id'];
	
	$wynik=mysql_query("SELECT paper_id FROM newspaper WHERE paper_id !=".$paperid." and added='Y' GROUP BY paper_id DESC");
	while($paper=mysql_fetch_array($wynik))
	{
		print("<span style=\"color:black\"><a style=\"font-size: 18; color: black\" href=\"\" onmouseover=\"this.style.color='blue'\" onmouseout=\"this.style.color='black'\" onclick=\"ajaxFunction('archive',".$paper['paper_id']."); return false;\">Numer ".$paper['paper_id']."</a> </span></br>");
	}
	
}
elseif($mode=='archive')
{

	$paperid=$param;
	$i=0;
	foreach ($arrTypes as $type)
	{
		
		$result=mysql_query("SELECT * FROM newspaper WHERE paper_id=".$paperid." and type='".$type."' and added='Y'");
		//print($result.'<br><br>');
		$j=0;
		while($p=mysql_fetch_assoc($result))
		{
			$artid[$i][$j]=$p['id'];
			$arttitle[$i][$j]=$p['title'];
			$artauthor[$i][$j]=$p['author'];
			$j++;
		}
		if (empty($artid[$i]))
		{
			$artid[$i][0]=0;
			$arttitle[$i][0]="";
			$artauthor[$i][0]="";
		}
		//print(count($artid[$i])."<br><br>");
		$i++;
		
	}
	print("<table width=\"75%\">");
	print("<tr>");
	print("<td width=\"50%\" style=\"text-align: left;\">");
	for ($a=0; $a<=7; $a++)
	{
		
		
		if ($artid[$a][0] !=0)
		{
			print("<span style=\"color: black; font-size:25; font-family:Monotype Corsiva;\" >".$arrSecnames[$a]."</span><br/>");
			
			for ($b=0;$b<count($artid[$a]);$b++)
			{
				print("<span style=\"color:black;\"><i><a style=\"color: black\" href=\"\" onmouseover=\"this.style.color='blue'\" onmouseout=\"this.style.color='black'\" onclick=\"ajaxFunction('article',".$artid[$a][$b]."); return false;\">".$arttitle[$a][$b]."</a></i></span><br/>");
				
			}
			print("<br>");
		}
		
		
	}
	print("</td>");
	print("<td width=\"50%\" style=\"text-align: right\">");
	for ($a=8; $a<=15; $a++)
	{
		
		
		if ($artid[$a][0] !=0)
		{
			print("<span style=\"color: black; font-size:25; font-family:Monotype Corsiva;\" >".$arrSecnames[$a]."</span><br/>");
			
			for ($b=0;$b<count($artid[$a]);$b++)
			{
				print("<span style=\"color:black;\"><i><a style=\"color: black\" href=\"\" onmouseover=\"this.style.color='blue'\" onmouseout=\"this.style.color='black'\" onclick=\"ajaxFunction('article',".$artid[$a][$b]."); return false;\">".$arttitle[$a][$b]."</a></i></span><br/>");
				
			}
			print("<br>");
		}
		
		
	}
	print("</td>");
	print("</tr>");
	print("</table>");
}
?>