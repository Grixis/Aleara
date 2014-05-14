<?php


require_once("includes/head.php");

          $db -> Execute("INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'<font color=yellow>&#34;Dartena&#34;</font>', 80,'C',500000,0,0,10,0,1,'N',0,0,'N')");
  
    $smarty -> display('turnfight1.tpl');
    require_once("footer.php");


?>
