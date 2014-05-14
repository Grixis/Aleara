<?php
$title = 'Diabolium';
$title1 = $title;
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Diabolium')
{
    error ('Nie znajdujesz się w mieście! <a href="travel.php">(Wróć)</a>'.$player->location);
}


$smarty -> display ('diabolium.tpl');
require_once('includes/foot.php');
?>
