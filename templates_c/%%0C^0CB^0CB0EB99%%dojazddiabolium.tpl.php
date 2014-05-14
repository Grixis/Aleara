<?php /* Smarty version 2.6.16, created on 2013-02-20 15:37:54
         compiled from dojazddiabolium.tpl */ ?>
<?php if ($this->_tpl_vars['Action'] == ""): ?>
<center><IMG SRC="images/locations/bramymiasta.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
 
    <ul>
    
    
     <?php if ($this->_tpl_vars['miejsce'] == 'Altara'): ?>
            
              
    <li><a href="dojazddiabolium.php?akcja=zm">Diabolium [wymagany klucz do wrót miasta]</a></li>
    
      <?php endif; ?>
      <?php if ($this->_tpl_vars['miejsce'] == 'Las'): ?>
            
              
    <li><a href="dojazddiabolium.php?akcja=zm">Diabolium [wymagany klucz do wrót miasta]</a></li>
    
      <?php endif; ?>
    
      <?php if ($this->_tpl_vars['miejsce'] == "Góry"): ?>
            
              
    <li><a href="dojazddiabolium.php?akcja=zm">Diabolium [wymagany klucz do wrót miasta]</a></li>
    
      <?php endif; ?>
    
      <?php if ($this->_tpl_vars['miejsce'] == 'Ardulith'): ?>
            
              
    <li><a href="dojazddiabolium.php?akcja=zm">Diabolium [wymagany klucz do wrót miasta]</a></li>
    
      <?php endif; ?>
    
    
    
    
    
    <?php if ($this->_tpl_vars['miejsce'] == 'Diabolium'): ?>
    
	<li><a href="dojazddiabolium.php?akcja=powrot">Aleara [koszt 5000 sztuk złota]</a></li>
	</ul>
	<?php endif; ?>
	
	
	
	
<?php endif; ?>

    <?php if ($this->_tpl_vars['Maps'] == '1'): ?>

    <?php endif; ?>

<?php if ($this->_tpl_vars['Portal'] == 'Y'): ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['Portal'] == 'N'): ?>

<?php endif; ?>

</br>