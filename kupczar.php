<?php
$title = "czar klanu";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db -> Execute("SELECT prest FROM tribes WHERE id=".$player -> tribe);
$prest = $test -> fields['prest'];
$smarty -> assign(array("prest" => $prest));
$test = $db -> Execute("SELECT czaru FROM tribes WHERE id=".$player -> tribe);
$czaru = $test -> fields['czaru'];
$smarty -> assign(array("czaru" => $czaru));
$test = $db -> Execute("SELECT credits FROM tribes WHERE id=".$player -> tribe);
$credits = $test -> fields['credits'];
$smarty -> assign(array("credits" => $credits));
$test = $db -> Execute("SELECT platinum FROM tribes WHERE id=".$player -> tribe);
$platinum = $test -> fields['platinum'];
$smarty -> assign(array("platinum" => $platinum));
$mytribe = $db -> Execute("SELECT owner FROM tribes WHERE `id`=".$player -> tribe);
$owner = $mytribe -> fields['owner'];
$smarty -> assign(array("owner" => $owner));
	if($player -> id != $mytribe -> fields['owner'])
					{
						error ("Tylko przywódca może wykonywać tą czynność");
					}

if ($czaru > 1) {
error ("Twoja gildia ma już kupiony czar!");
}
if ($prest < 3000) {
error ("Twoja gildia nie posiada wymaganego 3k prestiżu!");
}
if ($credits < 5000000) {
error ("Nie ma tyle złota w gildii!");
}
if ($platinum < 30000) {
error ("Nie ma tyle platinumu w gildii!");
}
$db -> Execute("UPDATE `tribes` SET czaru=czaru+1 WHERE id=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET eczar='POSIADA' WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET credits=credits-5000000 WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET platinum=platinum-30000 WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `gielda` SET cost=cost+10000 WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET prest=prest+300 WHERE `id`=".$player -> tribe);

$smarty -> display('kupczar.tpl');
require_once("includes/foot.php");
?>
