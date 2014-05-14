{if $Action ==""}
<center><IMG SRC="images/locations/bramymiasta.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
 
    <ul>
    
    
     {if $miejsce == "Altara"}
            
              
    <li><a href="dojazddiabolium.php?akcja=zm">Diabolium [wymagany klucz do wrót miasta]</a></li>
    
      {/if}
      {if $miejsce == "Las"}
            
              
    <li><a href="dojazddiabolium.php?akcja=zm">Diabolium [wymagany klucz do wrót miasta]</a></li>
    
      {/if}
    
      {if $miejsce == "Góry"}
            
              
    <li><a href="dojazddiabolium.php?akcja=zm">Diabolium [wymagany klucz do wrót miasta]</a></li>
    
      {/if}
    
      {if $miejsce == "Ardulith"}
            
              
    <li><a href="dojazddiabolium.php?akcja=zm">Diabolium [wymagany klucz do wrót miasta]</a></li>
    
      {/if}
    
    
    
    
    
    {if $miejsce == "Diabolium"}
    
	<li><a href="dojazddiabolium.php?akcja=powrot">Aleara [koszt 5000 sztuk złota]</a></li>
	</ul>
	{/if}
	
	
	
	
{/if}

    {if $Maps == "1"}

    {/if}

{if $Portal == "Y"}

{/if}

{if $Portal == "N"}

{/if}

</br>