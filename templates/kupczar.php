<?php
$title = "czar klanu";
require_once("includes/head.php");
$test = $db -> Execute("SELECT prest FROM tribes WHERE id=".$player -> tribe);
$prest = $test -> fields['prest'];
$smarty -> assign(array("prest" => $prest));
$test = $db -> Execute("SELECT czar FROM tribes WHERE id=".$player -> id);
$czar = $test -> fields['czar'];
$smarty -> assign(array("czar" => $czar));
if ($czar > 1) {
error ("Twoja gildia ma już kupiony czar!");
}
if ($prest < 3000) {
error ("Twoja gildia nie posiada wymaganego 3k prestiżu!");
}
$db -> Execute("UPDATE `tribes` SET `czar`=`1` WHERE `id`=".$player -> tribe);
$db -> Execute("UPDATE `tribes` SET prest=prest-500 WHERE `id`=".$player -> tribe);
$smarty -> display('kupczar.tpl');
require_once("includes/foot.php");
?>
