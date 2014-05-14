<?php
$title = 'Wkracza do Mrocznego Lasu';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
$smarty -> display('mrocznylas.tpl');
require_once("includes/foot.php"); 
?>
