<?php
require_once('includes/config.php');
require_once('languages/pl/newspaper.php');

$mode=$_GET['mode'];
$param=$_GET['p'];
$arrTypes = array('N', 'M', 'O', 'R', 'K', 'C', 'S', 'H', 'I', 'A', 'P','X','Y','Z');
$arrSecnames = array(A_NEWS, A_NEWS2, A_COURT, A_ROYAL, A_KING, A_CHRONICLE." ".$gamename, A_SENSATIONS, A_HUMOR, A_INTER, A_NEWS3, A_POETRY,"Non-Clima", "Felietony", "Cykliczne");
if ($mode == "add")
{
	print("Dodaj nowy artykuł<br/><br/>");
	print("Wskazówki:<br>-Ta strona posiada automatyczny podgląd. Wystarczy wpisać cokolwiek w pole treść i kliknąć poza pole - na dole strony zaktualizuje się podgląd<br>-Pierwszy znak artykułu zamieni się w inicjał, więc jeśli chcesz zacząć od listy numerowanej/wypunktowanej poprzedź ją enterem<br>-Tekst formatujesz za pomocą tagów HTML<br><br>");
	print("<form name=\"fom\" method=\"POST\">");
	print("Tytuł:<input type=\"text\" name=\"title\" />");
	print(" Kategoria:<select name=\"type\">");
	$i=0;
	foreach ($arrTypes as $type)
	{
		print("<option value=\"".$type."\">".$arrSecnames[$i]."</option>");
		$i++;
	}
	print("</select><br/>");
	print("Treść:<br/><textarea name=\"body\" cols=\"60\" rows=\"30\" onchange=\"previev();\"></textarea>");
	print("<br><input type=\"button\" value=\"Zatwierdź\" id=\"sub\" onclick=\"submitadd();\">");
	print("</form>");
	print("<hr/>");
	print("<div id=\"previev\"></div>");
}
if ($mode == "add_submit")
{
	$title=mysql_real_escape_string($_POST['title']);
	$cat=$_POST['cat'];
	$body=mysql_real_escape_string($_POST['body']);
	$author=mysql_real_escape_string($_POST['author']);
	$body=nl2br($body);
	
	$wynik=mysql_query("SELECT paper_id FROM newspaper WHERE added='Y' GROUP BY paper_id DESC");
	$paper=mysql_fetch_array($wynik);
	$paper_id=$paper['paper_id'];
	
	$paper_new=$paper_id+1;
	
	mysql_query("INSERT INTO newspaper(paper_id, title, body, author, type) VALUES (".$paper_new.", '".$title."', '".$body."', '".$author."', '".$cat."')") or die("Nie mogę dodać do bazy");
	
	print("Artykuł dodano pomyślnie<br><a href=\"\" onclick=\"Redaction('add'); return false;\">Dodaj kolejny</a>  <a href=\"\">Wróć do menu głównego</a>");
	
}
if ($mode == "edit")
{
	$wynik=mysql_query("SELECT paper_id FROM newspaper WHERE added='Y' GROUP BY paper_id DESC");
	$paper=mysql_fetch_array($wynik);
	$paper_id=$paper['paper_id'];
	
	$paper_new=$paper_id+1;
	
	$wynik=mysql_query("SELECT * FROM newspaper WHERE added='N' and paper_id=".$paper_new);
	print("Który artykuł chcesz poddać edycji?<br>");
	print("<ul>");
	while ($paper=mysql_fetch_array($wynik))
	{
		print("<li><a href=\"\" onclick=\"Redaction('edit',".$paper['id']."); return false; \">".$paper['author']." - <i>".$paper['title']."</i></a></li>");
	}
	print("</ul>");
	print("<hr/>");
	if (!empty($param))
	{
		$wynik=mysql_query("Select * from newspaper where id=".$param);
		$paper=mysql_fetch_array($wynik);
		
	print("Edytuj artykuł<br/><br/>");
	print("Wskazówki:<br>-Ta strona posiada automatyczny podgląd. Wystarczy wpisać cokolwiek w pole treść i kliknąć poza pole - na dole strony zaktualizuje się podgląd<br>-Pierwszy znak artykułu zamieni się w inicjał, więc jeśli chcesz zacząć od listy numerowanej/wypunktowanej poprzedź ją enterem<br>-Tekst formatujesz za pomocą tagów HTML<br>-Nie można zmienić autora tekstu, pamiętaj o tym!<br><br>");
	print("<form name=\"fom\" method=\"POST\">");
	print("<input type=\"hidden\" name=\"id\" value=\"".$paper['id']."\">");
	print("<input type=\"hidden\" name=\"author\" value=\"".$paper['author']."\">");
	print("Tytuł:<input type=\"text\" name=\"title\" value=\"".$paper['title']."\" />");
	print(" Kategoria:<select name=\"type\">");
	$i=0;
	foreach ($arrTypes as $type)
	{
		if ($type == $paper['type'])
		{
		print("<option value=\"".$type."\" selected=\"selected\" >".$arrSecnames[$i]."</option>");
		}
		else
		{
		print("<option value=\"".$type."\" >".$arrSecnames[$i]."</option>");
		}
		$i++;
	}
	print("</select><br/>");
	print("Treść:<br/><textarea name=\"body\" cols=\"60\" rows=\"30\" onchange=\"previevedit();\">".$paper['body']."</textarea>");
	print("<br><input type=\"button\" value=\"Zatwierdź\" id=\"sub\" onclick=\"submitedit();\">");
	print("</form>");
	print("<hr/>");
	print("<div id=\"previev\"></div>");
	}
}
if ($mode == "edit_submit")
{
	$id=$_POST['id'];
	
	
	$title=mysql_real_escape_string($_POST['title']);
	$cat=$_POST['cat'];
	$body=mysql_real_escape_string($_POST['body']);
	$author=mysql_real_escape_string($_POST['author']);
	$body=nl2br($body);

	
	mysql_query("UPDATE newspaper SET   title='".$title."', body='".$body."', author='".$author."', type='".$cat."' WHERE id=".$id) or die("Nie mogę dodać do bazy");
	
	print("Artykuł zmieniono pomyślnie<br><a href=\"\" onclick=\"Redaction('edit'); return false;\">Edytuj kolejny</a>  <a href=\"\">Wróć do menu głównego</a>");
}
if ($mode == "delete")
{
	$wynik=mysql_query("SELECT paper_id FROM newspaper WHERE added='Y' GROUP BY paper_id DESC");
	$paper=mysql_fetch_array($wynik);
	$paper_id=$paper['paper_id'];
	
	$paper_new=$paper_id;
	
	$wynik=mysql_query("SELECT * FROM newspaper WHERE added='N' paper_id=".$paper_new);
	print("Który artykuł chcesz skasować?<br>");
	print($paper_new);
	print("<ul>");
	while ($paper=mysql_fetch_array($wynik))
	{
		print("<li><a href=\"\" onclick=\"Delete(".$paper['id']."); return false; \">".$paper['author']." - <i>".$paper['title']."</i></a></li>");
	}
	print("</ul>");
	print("<hr/>");
}
if ($mode == "delete_submit")
{
	mysql_query("DELETE FROM newspaper WHERE id=".$param) or die("Błąd w bazie");
	print("Artykuł skasowano! <br><br><a href=\"\">Wróć do menu głównego</a>");
}
if ($mode == "show")
{
	$wynik=mysql_query("SELECT paper_id FROM newspaper WHERE added='Y' GROUP BY paper_id DESC");
	$paper=mysql_fetch_array($wynik);
	$paper_id=$paper['paper_id'];
	
	$paper_new=$paper_id+1;
	
	$wynik=mysql_query("SELECT * FROM newspaper WHERE paper_id=".$paper_new);
	print("Który artykuł chcesz obejrzeć?<br>");
	print("<ul>");
	while ($paper=mysql_fetch_array($wynik))
	{
		print("<li><a href=\"\" onclick=\"Redaction('show',".$paper['id']."); return false; \">".$paper['author']." - <i>".$paper['title']."</i></a></li>");
	}
	print("</ul>");
	print("<hr/>");
	
	if(!empty($param))
	{
		$wynik=mysql_query("Select * from newspaper where id=".$param);
		$paper=mysql_fetch_array($wynik);
		
		$body=$paper['body'];
		$firstletter=$body{0};
		$body=substr($body,1);
		
		print("<center>");
		print("<span style=\"color:white; font-size: 15; \">".$paper['author']."</span></br>");
		print("<span style=\"color:white; font-size: 25; \">".$paper['title']."</span></br>");
		print("<div style=\"line-height: 30px; color: white; font-family: Monotype Corsiva, Times New Roman; font-size: 25; text-align: left\">");
		print("<span style=\"font-size: 2.5em; font-family: Monotype Corsiva; \">".$firstletter."</span>".nl2br($body));
		print("</div>");
		print("</center>");
	}
}
if ($mode == "mail")
{
	$wynik=mysql_query("SELECT paper_id FROM newspaper WHERE added='Y' GROUP BY paper_id DESC");
	$paper=mysql_fetch_array($wynik);
	$paper_id=$paper['paper_id'];
	
	$paper_new=$paper_id+1;
	
	$wynik=mysql_query("SELECT * FROM newspaper WHERE added='M' and paper_id=".$paper_new);
	
	
	print("To jest lista artykułów od mieszkańców, kliknij aby obejrzeć:<br>");
	print("<ul>");
	while ($paper=mysql_fetch_array($wynik))
	{
		print("<li><a href=\"\" onclick=\"Redaction('mail',".$paper['id']."); return false; \">".$paper['author']." - <i>".$paper['title']."</i></a></li>");
	}
	print("</ul>");
	print("<hr/>");
	if (!empty($param))
	{
		$wynik=mysql_query("Select * from newspaper where id=".$param);
		$paper=mysql_fetch_array($wynik);
		
		$body=$paper['body'];
		$firstletter=$body{0};
		$body=substr($body,1);
		
		print("<center>");
		print("<span style=\"color:white; font-size: 15; \">".$paper['author']."</span></br>");
		print("<span style=\"color:white; font-size: 25; \">".$paper['title']."</span></br>");
		print("<div style=\"line-height: 30px; color: white; font-family: Monotype Corsiva, Times New Roman; font-size: 25; text-align: left\">");
		print("<span style=\"font-size: 2.5em; font-family: Monotype Corsiva; \">".$firstletter."</span>".nl2br($body));
		print("</div>");
		print("</center><br><br>");
		print("<input type=\"button\" value=\"Akceptuj\" onclick=\"oknow(".$paper['id'].");\">");
		print("<input type=\"button\" value=\"Odrzuć\" onclick=\"discard(".$paper['id'].");\">");
	}
}
if ($mode == "accept")
{
	mysql_query("UPDATE newspaper SET added='N' WHERE id=".$param);
	print("Artykuł dodany!<br><a href=\"\">Wróć do menu głównego</a>");
}
if ($mode == "decline")
{
	$id=$_POST['id'];
	$reason=$_POST['reason'];
	$wynik=mysql_query("SELECT * FROM newspaper WHERE id=".$id);
	$paper=mysql_fetch_array($wynik);
	
	$author=$paper['author'];
	
	$authid=explode("ID: ",$author);
	
	if ($reason != "")
	{
		mysql_query("INSERT INTO log (owner, log, unread, czas) VALUES (".$authid[1].", 'Twój artykuł do gazety pod tytułem <i>".$paper['title']."</i> został odrzucony. Powód:<br>".$reason."', 'F', now() );") or die("Błąd");
		mysql_query("DELETE FROM newspaper WHERE id=".$id);
		print("Odrzucono! <a href=\"\">Wróć do menu</a>");
	}
	else
	{
		mysql_query("INSERT INTO log (owner, log, unread, czas) VALUES (".$authid[1].", 'Twój artykuł do gazety pod tytułem <i>".$paper['title']."</i> został odrzucony.', 'F', now() );") or die("Błąd");
		mysql_query("DELETE FROM newspaper WHERE id=".$id);
		print("Odrzucono! <a href=\"\">Wróć do menu</a>");
	}
	
	
}
if ($mode == "comments")
{
	print("Wyświetl komentarze z numeru...<br><br>");
	
	$wynik=mysql_query("SELECT paper_id FROM newspaper WHERE added='Y' GROUP BY paper_id DESC");
	while($paper = mysql_fetch_array($wynik))
	{
		print("<a href=\"\" onclick=\"Redaction('comments',".$paper['paper_id']."); return false;\"> Numer ".$paper['paper_id']."</a><br>");
	}
	if (!empty($param))
	{
		$artid=array();
		$artname=array();
		$wynik=mysql_query("SELECT * FROM newspaper WHERE paper_id=".$param);
		while($paper=mysql_fetch_array($wynik))
		{
			$artid[]=$paper['id'];
			$artname[]=$paper['name'];
		}
		$i=0;
		foreach($artid as $art)
		{
			$j=0;
			$wynik=mysql_query("SELECT * FROM newspaper_comments WHERE textid=".$art);
			while ($paper=mysql_fetch_array($wynik))
			{
				$arrid[$i][$j]=$paper['id'];
				$arrauthor[$i][$j]=$paper['author'];
				$arrbody[$i][$j]=$paper['body'];
				$arrtime[$i][$j]=$paper['time'];
				$j++;
			}
			$i++;
		}
		for ($a=0; $a<=$i; $a++)
		{
			print("<hr>");
			for ($b=0; $b<count($arrid[$i]); $b++)
			{
				print("<br>".$arrauthor[$a][$b]." (".$arrtime[$a][$b].") w:".$artname[$a]."<br><br>");
				print($arrbody[$a][$b]);
				
			}
		}
	}
}
if ($mode == "publish")
{
	print("Publikowanie gazety. Aby wykluczyć publikację przez przypadek potrzebujesz specjalnego kodu aktywacyjnego. Pamiętaj także że publikacja gazety usunie wszystkie oczekujące artykuły nadesłane przez mieszkańców<br><br>");
	print("<form name=\"publish\">");
	print("Kod: <input type=\"password\" name=\"pass\"><br>");
	print("<input type=\"checkbox\" name=\"notice\"> Powiadom wszystkich graczy o nowym numerze<br>");
	print("<input type=\"button\" onclick=\"publishing();\" value=\"Publikuj\">");
	print("</form>");
}
if ($mode == "publish_submit")
{
	mysql_query("UPDATE newspaper SET added='Y' WHERE added='N'") or die("Nie mogę zmienić w bazie");
	mysql_query("DELETE FROM newspaper WHERE added='M'") or die("Nie mogę skasować");
	print("Gazeta została opublikowana.<br>");
	if (!empty($param))
	{
	$i=0;
	$wynik=mysql_query("SELECT id FROM players");
	while ($gracz=mysql_fetch_array($wynik))
	{
		mysql_query("INSERT INTO log (owner, log, unread, czas) VALUES (".$gracz['id'].", 'Ukazał się najnowszy numer gazety powszechnej Aleary. <a href=\"newspaper.php?step=new\">Przejdź do czytania</a>', 'F', now() );");
		$i++;
	}
	print("Powiadomiono ".$i." graczy.<br><br><a href=\"\">Wróć do menu głównego</a>");
	}
}
?>