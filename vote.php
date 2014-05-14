<?php
$title='Głosuj na nas';
$title1=$title;
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$data=$db -> Execute('select chaos, soul from players where id='.$player->id);

if (isset($_GET['top']) && $_GET['top'] == 'one')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://top50.com.pl/"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == 'two')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://toplista.i-rpg.pl/index.php?a=in&amp;u=DemoniX"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == 'three')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://rpgtextowe.topka.pl/?we=demonix"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == 'four')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://vallheru.toplista.info/?we=demonix"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == 'five')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://mmorpg.toplista.pl/?we=demonix"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == 'six')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://www.wcograc.pl"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == 'seven')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://vallheru.listastron.com/?we=demonix"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == 'eight')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://mmo50.pl/"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == 'nine')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://www.mmocenter.pl/top/"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == 'ten')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://gry-online.top-100.pl/?we=demonix"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == 'eleven')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://gry.top-100.pl/?we=demonix"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == 'twelve')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://www.bebetto.pl"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == 'thirteen')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://top30.nboo.eu/"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == '14')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://mmog.toplista.pl/?we=demonix"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == '15')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://top-gry.net/"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == '16')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://graonline.toplista.pl/?we=demonix"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == '17')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://xnova.toplista.eu/in.php?id=52956"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == '18')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://top.togra.pl?p=vote&id=169"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == '19')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://gildwars.topka.pl/?we=demonix"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == '20')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://gry.najlepsze.net/?we=demonix"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == '21')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://rpg.najlepsze.net/?we=demonix"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == '22')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://gry-online.top-100.pl/?we=aleara"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == '23')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://toplista.game-dev.pl/"</script>');
	
}

if (isset($_GET['top']) && $_GET['top'] == '31')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://rpg.topka.pl/?we=demonix"</script>');
	
}
if (isset($_GET['top']) && $_GET['top'] == '32')
{
	$one=$db -> GetOne("SELECT chaos FROM players WHERE id=".$player->id);
	if($one < 12) 
	{
	$db -> Execute("UPDATE players SET soul=soul+1, chaos=chaos+1 WHERE id=".$player->id);
	}
	error('<script type="text/javascript">window.location="http://topgranie.toplista.pl/?we=demonix"</script>');
	
}








//FB requests
if (isset($_GET['fbrequest']) && $_GET['fbrequest']=='send')
{
	$app_id = "389612681096943";

         $canvas_page = "https://apps.facebook.com/fb-aleara/";

         $message = "Wkrocz do mrocznego świata Aleara MMORPG!";

         $requests_url = "https://www.facebook.com/dialog/apprequests?app_id=" 
                . $app_id . "&redirect_uri=" . urlencode($canvas_page)
                . "&message=" . $message;

         if (empty($_REQUEST["request_ids"])) {
            echo("<script> top.location.href='" . $requests_url . "'</script>");
         } else {
           //echo("<script> this.location.href='http://aleara.pl/vote.php'</script>");
		   
         }
}


print_r($_REQUEST["request_ids"]);






$test=mysql_query('Select id, user, soul from players where soul>1 order by soul desc limit 5000') or die(mysql_error); 
//print($test);
while ($test2=mysql_fetch_array($test))
{
	$arrid[]=$test2['id'];
	$arruser[]=$test2['user'];
	$arrdenars[]=$test2['soul'];
}
$smarty -> assign('Arrid',$arrid);
$smarty -> assign('Arruser',$arruser);
$smarty -> assign('Arrdenars',$arrdenars);
$smarty -> assign('Voted',$data -> fields['chaos']);
$smarty -> assign('Denars',$data -> fields['soul']);
$smarty->display('vote.tpl');
require_once('includes/foot.php');
?>