                           <script type="text/javascript" language="javascript">
    var tips = new Array();
    tips[1] = '<center><font color="red"><font size="6"><b>Tawerna</td></tr></font></font></table></center>';
tips[2] = '<center><font color="red"><font size="6"><b>Rynek</td></tr></font></font></table></center>';
tips[3] = '<center><font color="red"><font size="6"><b>Schronisko</td></tr></font></font></table></center>';
tips[4] = '<center><font color="red"><font size="6"><b>Gmach S¹du</td></tr></font></font></table></center>';
tips[5] = '<center><font color="red"><font size="6"><b>Podziemna Wartownia</td></tr></font></font></table></center>';
       
   
   
   
    function show_light(ele)    {
        if (document.getElementById('light'+ele).style.display=='none'){
            document.getElementById('light'+ele).style.display='';
            document.getElementById('tipbox').innerHTML = tips[ele];
            document.getElementById('tipbox').style.display='';
        }
    }
    function hide_light(ele)    {
        if (document.getElementById('light'+ele).style.display==''){
            document.getElementById('light'+ele).style.display='none';
            document.getElementById('tipbox').innerHTML = '';
            document.getElementById('tipbox').style.display='none';
        }
    }

</script>
<br>

    </tr>
    <tr>
    	<td class="tdn" align="center">
           
                    
                </div>
                <div style="z-index:101; position:absolute;top:0px;left:0px;">
                    
                    
                    
                    
                    
                    
                    
                    <img src="" alt="" border="0" id="light1" style="display:none;" onMouseOver="return escape('</td></tr></table>')">		
                <img src="" alt="" border="0" id="light2" style="display:none;" onMouseOver="return escape('</td></tr></table>')">		
                <img src="" alt="" border="0" id="light3" style="display:none;" onMouseOver="return escape('</td></tr></table>')">		
                <img src="" alt="" border="0" id="light4" style="display:none;" onMouseOver="return escape('</td></tr></table>')">		
                <img src="" alt="" border="0" id="light5" style="display:none;" onMouseOver="return escape('</td></tr></table>')">	
                
                
                
                
                
                
                
                
                
                </div>

                <div style="z-index:102; position:absolute;top:0px;left:0px;">
                    <img src="http://aleara.za.pl/map.jpg"" alt="" border="0" usemap="#city_Map">		
                   	<map name="city_Map">
                   	
                   	
                   	
                   	
                   	
                   	
                   	
                   	
                   	
                   	
<area shape="poly" style="z-index:150;" alt="" title="" coords="283,198,280,225,303,238,370,235,365,205,293,208" href="http://nk.pl" onMouseOver="show_light('1');" onMouseOut="hide_light('1');">
<area shape="poly" style="z-index:150;" alt="" title="" coords="340,250,436,261,438,332,336,314" href="/city/taverne" onMouseOver="show_light('2');" onMouseOut="hide_light('2');">
 <area shape="poly" style="z-index:150;" alt="" title="" coords="283,198,278,171,292,185,381,178,381,203,292,212" href="/city/taverne" onMouseOver="show_light('3');" onMouseOut="hide_light('3');">
  <area shape="poly" style="z-index:150;" alt="" title="" coords="275,168,293,182,381,177,316,102" href="/city/taverne" onMouseOver="show_light('4');" onMouseOut="hide_light('4');">
  <area shape="poly" style="z-index:150;" alt="" title="" coords="390,324,631,313,675,354,609,370,577,347" href="/city/taverne" onMouseOver="show_light('5');" onMouseOut="hide_light('5');">
                     
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    </map>
                    
                    
                    
                 
                </div>
                <div id="tipbox" style="display:none;z-index:103; position:absolute;top:5px;left:0px;height:80px;width:700px;vertical-align:middle;text-align:center;"></div>
            </div>
        </td>
    </tr>
