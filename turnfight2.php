<?php

require_once("includes/head.php");


          $db -> Execute("INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand, zbrojaspeed, nagolespeed, helmspeed, tarczaspeed) VALUES(".$player -> id.",'<font color=yellow>&#34;Szuit&#34;</font>', 800,'B',500000,'-850',1000,60,1000,1,'N',0,900,'N', '0', '0', '0', '0')");
   
        $db -> Execute("INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand, zbrojaspeed, nagolespeed, helmspeed, tarczaspeed) VALUES(".$player -> id.",'<font color=yellow>&#34;Durizjum&#34;</font>', 666,'A',500000,'-999',1000,60,1000,1,'N',0,999,'N', '0', '0', '0', '0')");;
    
    $smarty -> display('turnfight1.tpl');
require_once("includes/foot.php");

?>
