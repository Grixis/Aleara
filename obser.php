<?php
$title = "Wieża Obserwacyjna";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}

if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
//przyznawanie immunitetu bitewnego duzego
if (isset ($_GET['view']) && $_GET['view'] == "obs1") {

}
//przyznawanie immunitetu bitewnego malego
if (isset ($_GET['view']) && $_GET['view'] == "obs3") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs4") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs5") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs6") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs7") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs8") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs9") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs10") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs11") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs12") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs13") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs14") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs15") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs16") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs17") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs18") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs19") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs20") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs21") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs22") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs23") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs24") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs25") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs26") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs27") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs28") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs29") {
}
if (isset ($_GET['view']) && $_GET['view'] == "obs30") {
}



//inicjalizacja zmiennych
if (!isset($_GET['view'])) {
$_GET['view'] = '';
}
if (!isset($_GET['step'])) {
$_GET['step'] = '';
}
//przypisanie zmiennych i wy¶wietlenie strony
$smarty -> assign (array ("View" => $_GET['view'], "Step" => $_GET['step']));
$smarty -> display('obser.tpl');
require_once("includes/foot.php");
$db -> Close();
?>
