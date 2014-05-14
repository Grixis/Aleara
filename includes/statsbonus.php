<?php

function statbonus ()
{
    global $db;
    global $player;

    $arrEquip = $player -> equipment();
    $fltCuragi = $player -> agility;
    if ($arrEquip[3][0])
    {
        if ($arrEquip[3][5] < 0) 
        {
            $intAgibonus = str_replace("-","",$arrEquip[3][5]);
        } 
            elseif ($arrEquip[3][5] >= 0) 
        {
            $intAgibonus = 0 - $arrEquip[3][5];
        }
        $fltCuragi = $fltCuragi + $intAgibonus;
    }
    
    
    
    
    
    if ($arrEquip[5][0])
    {
        if ($arrEquip[5][5] < 0) 
        {
            $intAgibonus = str_replace("-","",$arrEquip[5][5]);
        } 
            elseif ($arrEquip[5][5] >= 0) 
        {
            $intAgibonus = 0 - $arrEquip[5][5];
        }
        $fltCuragi = $fltCuragi + $intAgibonus;
    }
    
    if ($arrEquip[1][0])
    {
        if ($arrEquip[1][5] < 0) 
        {
            $intAgibonus = str_replace("-","",$arrEquip[1][5]);
        } 
            elseif ($arrEquip[1][5] >= 0) 
        {
            $intAgibonus = 0 - $arrEquip[1][5];
        }
        $fltCuragi = $fltCuragi + $intAgibonus;
    }    
      if ($arrEquip[2][0])
    {
        if ($arrEquip[2][5] < 0) 
        {
            $intAgibonus = str_replace("-","",$arrEquip[2][5]);
        } 
            elseif ($arrEquip[2][5] >= 0) 
        {
            $intAgibonus = 0 - $arrEquip[2][5];
        }
        $fltCuragi = $fltCuragi + $intAgibonus;
    }  
    
    
    if ($arrEquip[4][0])
    {
        if ($arrEquip[4][5] < 0) 
        {
            $intAgibonus = str_replace("-","",$arrEquip[4][5]);
        } 
            elseif ($arrEquip[4][5] >= 0) 
        {
            $intAgibonus = 0 - $arrEquip[4][5];
        }
        $fltCuragi = $fltCuragi + $intAgibonus;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    $fltCurspeed = $player -> speed;
      
    
    if ($arrEquip[0][0])
    {
        $fltCurspeed = $fltCurspeed + $arrEquip[0][7];
    }
    if ($arrEquip[3][0])
    {
        $fltCurspeed = $fltCurspeed + $arrEquip[0][7];
    }
    if ($arrEquip[5][0])
    {
        $fltCurspeed = $fltCurspeed + $arrEquip[0][7];
    }
   
    $arrCurstats = array($fltCuragi, $player -> strength, $player -> inteli, $player -> wisdom, $fltCurspeed, $player -> cond);
    if ($arrEquip[9][2])
    {
        $arrRings = array(R_AGI, R_STR, R_INT, R_WIS, R_SPE, R_CON);
        $arrRingtype = explode(" ", $arrEquip[9][1]);
        $intAmount = count($arrRingtype) - 1;
        $intKey = array_search($arrRingtype[$intAmount], $arrRings);
        $arrCurstats[$intKey] = $arrCurstats[$intKey] + $arrEquip[9][2];
    }
    if ($arrEquip[10][2])
    {
        $arrRings = array(R_AGI, R_STR, R_INT, R_WIS, R_SPE, R_CON);
        $arrRingtype = explode(" ", $arrEquip[10][1]);
        $intAmount = count($arrRingtype) - 1;
        $intKey = array_search($arrRingtype[$intAmount], $arrRings);
        $arrCurstats[$intKey] = $arrCurstats[$intKey] + $arrEquip[10][2];
    }
    return $arrCurstats;
}
?>
