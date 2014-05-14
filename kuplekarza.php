<?php
$title = "Lekarz klanu";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db -> Execute("SELECT prest FROM tribes WHERE id=".$player -> tribe);
$prest = $test -> fields['prest'];
$smarty -> assign(array("prest" => $prest));
$test = $db -> Execute("SELECT lekarz FROM tribes WHERE id=".$player -> tribe);
$lekarz = $test -> fields['lekarz'];
$smarty -> assign(array("lekarz" => $lekarz));
$test = $db -> Execute("SELECT credits FROM tribes WHERE id=".$player -> tribe);
$credits = $test -> fields['credits'];
$smarty -> assign(array("credits" => $credits));
$test = $db -> Execute("SELECT platinum FROM tribes WHERE id=".$player -> tribe);
$platinum = $test -> fields['platinum'];
$smarty -> assign(array("platinum" => $platinum));
$test = $db -> Execute("SELECT pine FROM tribes WHERE id=".$player -> tribe);
$pine = $test -> fields['pine'];
$smarty -> assign(array("pine" => $pine));
$test = $db -> Execute("SELECT hazel FROM tribes WHERE id=".$player -> tribe);
$hazel = $test -> fields['hazel'];
$smarty -> assign(array("hazel" => $hazel));
$test = $db -> Execute("SELECT yew FROM tribes WHERE id=".$player -> tribe);
$yew = $test -> fields['yew'];
$smarty -> assign(array("yew" => $yew));
$test = $db -> Execute("SELECT elm FROM tribes WHERE id=".$player -> tribe);
$elm = $test -> fields['elm'];
$smarty -> assign(array("elm" => $elm));
$test = $db -> Execute("SELECT meteor FROM tribes WHERE id=".$player -> tribe);
$meteor = $test -> fields['meteor'];
$smarty -> assign(array("meteor" => $meteor));
$test = $db -> Execute("SELECT copperore FROM tribes WHERE id=".$player -> tribe);
$copperore = $test -> fields['copperore'];
$smarty -> assign(array("copperore" => $copperore));
$mytribe = $db -> Execute("SELECT owner FROM tribes WHERE `id`=".$player -> tribe);
$owner = $mytribe -> fields['owner'];
$smarty -> assign(array("owner" => $owner));
	if($player -> id != $mytribe -> fields['owner'])
					{
						error ("Tylko przywódca może wykonywać tą czynność");
					}

if ($lekarz > 1) {
error ("Twoja gildia ma już szpital!");
}
if ($credits < 25000000) {
error ("Nie ma tyle złota w gildii!");
}
if ($platinum < 50000) {
error ("Nie ma tyle platinumu w gildii!");
}
if ($pine < 30000) {
error ("Nie ma tyle sosny w gildii!");
}
if ($hazel < 20000) {
error ("Nie ma tyle leszczyny w gildii!");
}
if ($yew < 10000) {
error ("Nie ma tyle cisu w gildii!");
}
if ($elm < 5000) {
error ("Nie ma tyle wiązu w gildii!");
}
if ($meteor < 5000) {
error ("Nie ma tyle meteorytu w gildii!");
}
if ($copperore < 20000) {
error ("Nie ma tyle rudy w gildii!");
}
if ($prest < 5000) {
error ("Twoja gildia nie posiada wymaganego 5k prestiżu!");
}
$db -> Execute("UPDATE `tribes` SET lekarz=lekarz+1 WHERE id=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET credits=credits-25000000 WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET platinum=platinum-50000 WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET pine=pine-30000 WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET hazel=hazel-20000 WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET yew=yew-10000 WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET elm=elm-5000 WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET prest=prest+500 WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET meteor=meteor-5000 WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET copperore=copperore-20000 WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET eszpital='POSIADA' WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `gielda` SET cost=cost+20000 WHERE `id`=".$player -> tribe);

$smarty -> display('kuplekarza.tpl');
require_once("includes/foot.php");
?>
